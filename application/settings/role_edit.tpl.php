<?php
	$strPageTitle = QApplication::Translate('Role');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
            <div class="pull-right slideup" style="margin-top: -50px;">
                <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
            </div>
        <div style="clear: both;margin-top: 10px;"></div>
        <?php if($this->mctRole->EditMode == FALSE  && !isset($_GET['new'])){
            $this->txtName->Focus();
            //$this->dtgRoles->Render(); ?>
        <?php
        $orgs = Role::LoadArrayByGrp(1,  QQ::OrderBy(QQN::Role()->Code));
        $cnt=1;
        $link = __VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/employee/ledger_edit.php";
        foreach ($orgs as $org){
        ?>
        <div class="panel panel-default" style="margin-bottom: 0px !important;">                                            
            <div class="panel-heading" style="cursor: pointer;">                                            
                <h4 class="panel-title">
                    <div class="pull-left">
                        <?php  $this->txtcollegeCode[$org->Idrole]->Render(); ?>
                    </div> 
                    <div class="pull-left margin-right-normal" style="padding: 5px;">
                        <?php $this->lblEdit[$org->Idrole]->Render(); ?>
                    </div>
                    <div class="pull-left">
                    <div class="rolecollapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php _p($cnt); ?>">
                            <?php 
                            _p($org->Name);
                            if($org->Mname != ""){
                                _p(" (".$org->Mname.")");
                            }
                        ?>
                    </div>
                    </div>
                    <div class="pull-right">
                        <?php if($org->Grp != 3){ ?>
                        <div class="rolecollapse pull-left" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php _p($cnt); ?>">
                            <i class="fa fa-arrow-circle-down fa-lg"></i>
                        </div>
                        <?php } ?>
                        <div class="roleadd pull-left">
                            <?php $this->btnAddLink[$org->Idrole]->Render(); ?>
                        </div>
                        
                        <div class="rolecount pull-left">
                            <?php 
                                $emps = LoginHasRole::QueryCount(
                                QQ::AndCondition(
                                QQ::Equal(QQN::LoginHasRole()->RoleIdroleObject->ParrentObject->Parrent, $org->Idrole)
                                    )
                                );
                                _p($emps);                             
                            ?> 
                        </div>
                        
                        <div style="clear: both;"></div>
                    </div>
                </h4>
                <div style="clear: both;"></div>
            </div>
            <?php
                if($org->Grp != 3){
            ?>
            <div id="collapse<?php _p($cnt); ?>" class="panel-collapse collapse ">
                <div class="panel-body">
                    
                    <?php //_t($org->Description); ?>

                    <?php                         
                    $objs = Role::LoadArrayByParrent($org->Idrole, QQ::OrderBy(QQN::Role()->Grp));
                    $cntsub=1;       
                    $srsub = 1;                        
                    foreach ($objs as $obj){
                    ?>

                    <div class="panel panel-default" style="margin-bottom: 0px !important;">
                        <div  class="panel-heading" style="cursor: pointer;">
                            <div class="panel-title">
                                <div class="pull-left" >
                                      <?php  $this->Code[$obj->Idrole]->Render(); ?>
                                </div>    
                                <div class="pull-left margin-right-normal" style="padding: 5px 0px 5px 5px; " >
                                   <?php $this->lblEdit[$obj->Idrole]->Render(); ?>
                                </div>
                               
                                <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                    <?php 
                                        _p($obj->Name); 
                                        if($obj->Mname != ""){
                                            _p(" (".$obj->Mname.")");
                                        }
                                    ?>
                                </div> 
                                
                                <div class="pull-right" >
                                    <?php if($obj->Grp != 3){ ?>
                                    <div class="rolecollapse pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($cntsub.$obj->Idrole); ?>"><i class="fa fa-arrow-circle-down fa-lg"></i></div>
                                    <?php } ?>
                                    <div class="roleadd pull-right"><?php $this->btnAddLink[$obj->Idrole]->Render(); ?></div>
                                    <div class="rolecount pull-right">
                                        <?php   
                                        $emps = LoginHasRole::QueryCount(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::LoginHasRole()->RoleIdroleObject->Parrent, $obj->Idrole)
                                                )
                                            );
                                            _p($emps);
                                        ?> 
                                    </div>
                                    
                                </div>
                              
                            </div>
                            
                            <div style="clear: both;"></div>
                        </div>
                        <?php
                            if($obj->Grp != 3){
                        ?>
                        <div id="collapsesub<?php _p($cntsub.$obj->Idrole); ?>" class="panel-collapse collapse">
                            <div class="panel-body">                                
                                <?php
                                /*
                                    //if it is designation                                    
                                    if($obj->Grp == 3){
                                        $members = LoginHasRole::QueryArray(
                                                QQ::AndCondition(
                                                QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $obj->Idrole),
                                                QQ::Equal(QQN::LoginHasRole()->Active, TRUE)
                                                    )
                                                );
                                ?>   
                                <table class="datagrid">
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>                                                                                            
                                    </tr>
                                <?php 
                                    $memcounter = 1;
                                foreach ($members as $member){ 
                                    $address = Address::LoadArrayByOf($member->LoginIdlogin);
                                    ?>
                                    <tr onclick="window.location = '<?php _p($link.'/'.$member->LoginIdlogin); ?>?page=1'">
                                        <td><?php _p($memcounter++); ?></td>
                                        <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                        <td><?php if($address)_t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                        <td><?php if($address)_p($address[0]->Contact1); ?></td>
                                    </tr>
                                <?php } ?>
                                </table>
                                <?php }  */ ?>   
                                
                                <?php                                         
                                    $subobjs = Role::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Role()->Parrent, $obj->Idrole),
                                    QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                        ),  QQ::OrderBy(QQN::Role()->Code)
                                    );

                                    $cntsub=1;       
                                    $srsub = 1;
                                    foreach ($subobjs as $subobj){
                                ?>
                                <div class="panel panel-default" style="margin-bottom: 0px !important;">
                                    <div  class="panel-heading" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                             <div class="pull-left" >
                                                  <?php  $this->Code[$subobj->Idrole]->Render(); ?>
                                             </div>    
                                            <div class="pull-left margin-right-normal" style="padding: 5px 0px 5px 5px; ">
                                                <?php $this->lblEdit[$subobj->Idrole]->Render(); ?>
                                            </div>
                                            <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                <?php 
                                                    _p($subobj->Name); 
                                                    if($subobj->Mname != ""){
                                                        _p(" (".$subobj->Mname.")");
                                                    }
                                                ?>
                                            </div> 
                                            <div class="pull-right" >
                                                <?php if($subobj->Grp != 3){ ?>
                                                <div class="rolecollapse pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj->Idrole); ?>"><i class="fa fa-arrow-circle-down fa-lg"></i></div>
                                                <?php } ?>
                                                <div class="roleadd pull-right"><?php $this->btnAddLink[$subobj->Idrole]->Render(); ?></div>
                                                <div class="rolecount pull-right">
                                                <?php $emps = LoginHasRole::QueryCount(
                                                             QQ::AndCondition(
                                                             QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $subobj->Idrole)));
                                                             _p($emps);
                                                ?>
                                                </div>
                                            </div>
                                              <div style="clear: both;"></div>
                                        </h4>
                                        <div style="clear: both;"></div>
                                    </div>
                                    <?php
                                        if($subobj->Grp != 3){
                                    ?>
                                    <div id="collapsesub<?php _p($subobj->Idrole); ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             <?php
                                             /*
                                                //if it is designation
                                                if($subobj->Grp == 3){

                                                    $members = LoginHasRole::LoadArrayByRoleIdrole($subobj->Idrole);
                                            ?>   
                                            <table class="datagrid">
                                                <tr>
                                                    <th>Sr</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Contact</th>                                                                                            
                                                </tr>
                                            <?php 
                                                $memcounter = 1;
                                            foreach ($members as $member){ 
                                                $address = Address::LoadArrayByOf($member->LoginIdlogin);
                                                ?>
                                                <tr onclick="window.location = '<?php _p($link.'/'.$member->LoginIdlogin); ?>?page=1'">
                                                    <td><?php _p($memcounter++); ?></td>
                                                    <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                    <td><?php if($address) _t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                    <td><?php if($address) _p($address[0]->Contact1); ?></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                                <?php } */?>
                                            
                                            
                                                <?php                                         
                                                    $subobjs1 = Role::QueryArray(
                                                    QQ::AndCondition(
                                                    QQ::Equal(QQN::Role()->Parrent, $subobj->Idrole),
                                                    QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                                        ),  QQ::OrderBy(QQN::Role()->Code)
                                                    );

                                                    $cntsub=1;       
                                                    $srsub = 1;
                                                    foreach ($subobjs1 as $subobj1){
                                                ?>
                                                <div class="panel panel-default" style="margin-bottom: 0px !important;">
                                                    <div class="panel-heading" style="cursor: pointer;">
                                                        <h4 class="panel-title">
                                                            <div class="pull-left margin-right-normal" style="padding: 5px 0px 5px 0px; ">
                                                                <?php $this->lblEdit[$subobj1->Idrole]->Render(); ?>
                                                            </div>
                                                            <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                                <?php _p($subobj1->Name);
                                                                if($subobj1->Mname != ""){
                                                                    _p(" (".$subobj1->Mname.")");
                                                                }
                                                                ?>
                                                            </div>    
                                                            <div class="pull-right" >
                                                                <?php if($subobj1->Grp != 3){ ?>
                                                                <div class="rolecollapse"  data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj1->Idrole); ?>"><i class="fa fa-arrow-circle-down fa-lg"></i></div>
                                                                <?php } ?>
                                                                <div class="roleadd"><?php $this->btnAddLink[$subobj1->Idrole]->Render(); ?></div>
                                                                <div class="rolecount">
                                                                    <?php $emps = LoginHasRole::QueryCount(
                                                                                 QQ::AndCondition(
                                                                                 QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $subobj1->Idrole)));
                                                                                 _p($emps);
                                                                    ?>
                                                                </div>
                                                                
                                                            </div>
                                                        </h4>
                                                        <div style="clear: both;"></div>
                                                    </div>
                                                    <?php
                                                        if($subobj1->Grp != 3){
                                                    ?>
                                                    <div id="collapsesub<?php _p($subobj1->Idrole); ?>" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <?php
                                                            /*
                                                                //if it is designation
                                                                if($subobj1->Grp == 3){

                                                                    $members = LoginHasRole::LoadArrayByRoleIdrole($subobj1->Idrole);
                                                            ?>   
                                                            <table class="datagrid">
                                                                <tr>
                                                                    <th>Sr</th>
                                                                    <th>Name</th>
                                                                    <th>Address</th>
                                                                    <th>Contact</th>                                                                                            
                                                                </tr>
                                                            <?php 
                                                                $memcounter = 1;
                                                            foreach ($members as $member){ 
                                                                $address = Address::LoadArrayByOf($member->LoginIdlogin);
                                                                ?>
                                                                <tr onclick="window.location = '<?php _p($link.'/'.$member->LoginIdlogin); ?>?page=1'">
                                                                    <td><?php _p($memcounter++); ?></td>
                                                                    <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                                    <td><?php if($address) _t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                                    <td><?php if($address) _p($address[0]->Contact1); ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            </table>
                                                            <?php } */ ?>
                                                            
                                                            <?php                                         
                                                                $subobjs2 = Role::QueryArray(
                                                                QQ::AndCondition(
                                                                QQ::Equal(QQN::Role()->Parrent, $subobj1->Idrole),
                                                                QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                                                    )
                                                                );

                                                                $cntsub=1;       
                                                                $srsub = 1;
                                                                foreach ($subobjs2 as $subobj2){
                                                            ?>
                                                            <div class="panel panel-default" style="margin-bottom: 0px !important;">
                                                                <div  class="panel-heading" style="cursor: pointer;">
                                                                    <h4 class="panel-title">
                                                                        <div class="pull-left margin-right-normal" style="padding: 5px 0px 5px 0px; ">
                                                                            <?php $this->lblEdit[$subobj2->Idrole]->Render(); ?>
                                                                        </div>
                                                                        <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                                            <?php 
                                                                                _p($subobj2->Name); 
                                                                                if($subobj2->Mname != ""){
                                                                                    _p(" (".$subobj2->Mname.")");
                                                                                }
                                                                            ?>
                                                                        </div> 
                                                                        <div class="pull-right" >
                                                                            <?php if($subobj2->Grp != 3){ ?>
                                                                            <div class="rolecollapse"  data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj2->Idrole); ?>"><i class="fa fa-arrow-circle-down fa-lg"></i></div>
                                                                            <?php } ?>
                                                                            <div class="roleadd"><?php $this->btnAddLink[$subobj2->Idrole]->Render(); ?></div>
                                                                            <div class="rolecount">
                                                                                <?php 
                                                                                    $emps = LoginHasRole::QueryCount(
                                                                                    QQ::AndCondition(
                                                                                        QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $subobj2->Idrole)
                                                                                        )
                                                                                    );
                                                                                    _p($emps);
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </h4>
                                                                    <div style="clear: both;"></div>
                                                                </div>
                                                                <?php
                                                                    if($subobj2->Grp != 3){
                                                                ?>    
                                                                <div id="collapsesub<?php _p($subobj2->Idrole); ?>" class="panel-collapse collapse">
                                                                    <div class="panel-body">                                                                        
                                                                        <?php
                                                                        /*
                                                                            //if it is designation
                                                                            if($subobj2->Grp == 3){

                                                                                $members = LoginHasRole::LoadArrayByRoleIdrole($subobj2->Idrole);
                                                                        ?>   
                                                                        <table class="datagrid">
                                                                            <tr>
                                                                                <th>Sr</th>
                                                                                <th>Name</th>
                                                                                <th>Address</th>
                                                                                <th>Contact</th>                                                                                            
                                                                            </tr>
                                                                        <?php 
                                                                            $memcounter = 1;
                                                                        foreach ($members as $member){ 
                                                                            $address = Address::LoadArrayByOf($member->LoginIdlogin);
                                                                            ?>
                                                                            <tr onclick="window.location = '<?php _p($link.'/'.$member->LoginIdlogin); ?>?page=1'"> 
                                                                                <td><?php _p($memcounter++); ?></td>
                                                                                <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                                                <td><?php if($address) _t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                                                <td><?php if($address) _p($address[0]->Contact1); ?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        </table>
                                                                            <?php } */ ?>
                                                                        
                                                                        
                                                                        
                                                                         <?php                                         
                                                                            $subobjs3 = Role::QueryArray(
                                                                            QQ::AndCondition(
                                                                            QQ::Equal(QQN::Role()->Parrent, $subobj2->Idrole),
                                                                            QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                                                                )
                                                                            );

                                                                            $cntsub=1;       
                                                                            $srsub = 1;
                                                                            foreach ($subobjs3 as $subobj3){
                                                                        ?>
                                                                        
                                                                        <div class="panel panel-default" style="margin-bottom: 0px !important;">
                                                                            <div  class="panel-heading" style="cursor: pointer;">
                                                                                <h4 class="panel-title">
                                                                                    <div class="pull-left margin-right-normal" style="padding: 5px 0px 5px 0px; " >
                                                                                        <?php $this->lblEdit[$subobj3->Idrole]->Render(); ?>
                                                                                    </div>
                                                                                    <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                                                        <?php _p($subobj3->Name); 
                                                                                        if($subobj3->Mname != ""){
                                                                                            _p(" (".$subobj3->Mname.")");
                                                                                        }
                                                                                        ?>
                                                                                    </div>  
                                                                                    <div class="pull-right" >
                                                                                        <?php if($subobj3->Grp != 3){ ?>
                                                                                        <div class="rolecollapse" data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj3->Idrole); ?>"><i class="fa fa-arrow-circle-down fa-lg"></i></div>
                                                                                        <?php } ?>
                                                                                        <div class="roleadd"><?php $this->btnAddLink[$subobj3->Idrole]->Render(); ?></div>
                                                                                        <div class="rolecount" >
                                                                                            <?php 
                                                                                                $emps = LoginHasRole::QueryCount(
                                                                                                QQ::AndCondition(
                                                                                                    QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $subobj3->Idrole)
                                                                                                    )
                                                                                                );
                                                                                                _p($emps);
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                                <div style="clear: both;"></div>
                                                                            </div>
                                                                            <?php
                                                                                if($subobj3->Grp != 3){
                                                                            ?>
                                                                            <div id="collapsesub<?php _p($subobj3->Idrole); ?>" class="panel-collapse collapse">
                                                                                <div class="panel-body">
                                                                                    <?php
                                                                                    /*
                                                                                        //if it is designation
                                                                                        if($subobj3->Grp == 3){                                                                                            
                                                                                            $members = LoginHasRole::LoadArrayByRoleIdrole($subobj3->Idrole);
                                                                                    ?>   
                                                                                    <table class="datagrid">
                                                                                        <tr>
                                                                                            <th>Sr</th>
                                                                                            <th>Name</th>
                                                                                            <th>Address</th>
                                                                                            <th>Contact</th>                                                                                            
                                                                                        </tr>
                                                                                    <?php 
                                                                                        $memcounter = 1;
                                                                                    foreach ($members as $member){ 
                                                                                        $address = Address::LoadArrayByOf($member->LoginIdlogin);
                                                                                        ?>
                                                                                        <tr onclick="window.location = '<?php _p($link.'/'.$member->LoginIdlogin); ?>?page=1'">
                                                                                            <td><?php _p($memcounter++); ?></td>
                                                                                            <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                                                            <td><?php if($address)_t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                                                            <td><?php if($address)_p($address[0]->Contact1); ?></td>
                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                    </table>
                                                                                        <?php } */?>
                                                                                </div>
                                                                            </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <?php } ?>   

                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>   
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>            
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    </div>                        
                    <?php $cntsub++; } ?> 
                </div>
            </div>      
        <?php } ?>
        </div>
        <?php $cnt++; } ?>
        <?php } ?>
        <?php 
            if($this->mctRole->EditMode == TRUE || isset($_GET['new'])){
        ?>
        
<div class="tabbable-panel">
    <div class="tabbable-line slideup ">
                <ul class="nav nav-tabs">
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?> pull-left margin-left-large">
                                <a href="#0" data-toggle="tab">
                                <i class="fa fa-asterisk fa-fw"></i><?php _t('Name')?>
                                </a>
                    </li>
                    
                    <?php if($this->mctRole->EditMode == TRUE){ ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> pull-left">
                                <a href="#1" data-toggle="tab">
                                <i class="fa fa-map-marker fa-fw"></i><?php _t('Address Details')?>
                                </a>
                        </li>
                        <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?> pull-left">
                                <a href="#2" data-toggle="tab" aria-expanded="true">
                                <i class="fa fa-bars fa-fw"></i><?php _t('Menus')?>
                                </a>
                        </li>
                        <?php if($this->lstGrpObject->SelectedValue == 2){?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 4){ ?>active<?php } ?> pull-left">
                            <a href="#4" data-toggle="tab" aria-expanded="true">
                            <i class="fa fa-bars fa-fw"></i><?php _t('Dept Year')?>
                            </a>
                    </li>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php } ?> pull-left">
                            <a href="#5" data-toggle="tab" aria-expanded="true">
                            <i class="fa fa-bars fa-fw"></i><?php _t('Exam')?>
                            </a>
                    </li>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 6){ ?>active<?php } ?> pull-left">
                            <a href="#6" data-toggle="tab" aria-expanded="true">
                            <i class="fa fa-bars fa-fw"></i><?php _t('Subjects')?>
                            </a>
                    </li>
                    <?php }} ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?> pull-left">
                            <a href="#3" data-toggle="tab" aria-expanded="true">
                            <i class="fa fa-bars fa-fw"></i><?php _t('Group')?>
                            </a>
                    </li>
                    
                   
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                        <?php 
                        if($this->mctRole->EditMode == TRUE || isset($_GET['new'])){
                            $this->txtName->Focus();
                        ?>
                        <div class="form-controls">            
                            <?php $this->txtCode->RenderWithName(); ?>
                            <?php $this->txtName->RenderWithName(); ?>
                            <?php $this->lstParrentObject->RenderWithName(); ?>	
                            <?php $this->txtDescription->RenderWithName(); ?>
                            <?php $this->lstGrpObject->RenderWithName(); ?>  
                            <?php $this->txtMname->RenderWithName(); ?>  
                            <?php $this->txtShortName->RenderWithName(); ?>  
                            <?php $this->txtCount->RenderWithName(); ?>  
                            
                            <?php if($this->lstGrpObject->SelectedValue == 3) $this->txtServiceYears->RenderWithName();  ?>
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                                <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                                <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                            </div>
                            
                            <?php 
                                if(isset($_GET['delete'])){ 
                                $sr = 1;
                                    $roles = Role::QueryArray(
                                                QQ::AndCondition(
                                                QQ::Equal(QQN::Role()->Parrent,$this->lblIdrole->Text)
                                                ));
                                    if($roles){
                            ?>
                            <div style="padding: 10px;">
                                You Cann't delete this ROLE because, it is parrent of another ROLES 
                            </div>
                            <table class="datagrid">
                                <tr>
                                    <th>Sr.</th>
                                    <th>Child Roles</th>
                                </tr>
                                <?php
                                    foreach($roles as $role){
                                
                                ?>
                                <tr onclick="window.open('<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__);?>/settings/role_edit.php/<?php _p($role->Idrole); ?>')">
                                    <td><?php _p($sr++);?></td>
                                    <td ><?php _p($role->Name);?></td>
                                </tr>
                                    <?php  }?>
                            </table>   
                                
                                
                        <?php } }?>
                            
                            
                        </div>
                        <?php } ?>
                    </div>   
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ $this->txtTitle->Focus(); ?>active<?php } ?>" id="1">
                    <div class="form-controls">
                            <?php $this->txtTitle->RenderWithName(); ?>
                            <?php $this->txtAddressLine1->RenderWithName(); ?>
                            <?php $this->txtAddressLine2->RenderWithName(); ?>
                            <?php $this->txtCountry->RenderWithName(); ?>
                            <?php $this->txtState->RenderWithName(); ?>
                            <?php $this->txtDistrict->RenderWithName(); ?>
                            <?php $this->txtTaluka->RenderWithName(); ?>
                            <?php $this->txtCity->RenderWithName(); ?>
                            <?php $this->txtZipCode->RenderWithName(); ?>
                            <?php $this->txtContact1->RenderWithName(); ?>
                            <?php $this->txtContact2->RenderWithName(); ?>
                            <?php $this->txtWeb->RenderWithName(); ?>
                            <?php $this->txtEmail1->RenderWithName(); ?>
                            <?php $this->txtEmail2->RenderWithName(); ?>
                            <?php $this->txtTinSalesTaxNo->RenderWithName(); ?>
                            <?php $this->txtCstNo->RenderWithName(); ?>
                            
                        <div class="form-actions">
                            <div class="form-save"><?php $this->btnUpdate->Render(); ?></div>
                            <div class="form-delete"><?php $this->btnRemove->Render(); ?></div>
                        </div>
                    </div>    
                </div>
                    
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>" id="2">
                    <div class="form-controls">
                        <table class="table table-striped" id="mytable1">
                        <thead>
                        <tr>
                            <th><i class="fa fa-trash-o"  style="padding: 0 15px;"></i></th>
                            <th>Seq</th>
                            <th>Menu</th>
                            <th>Level</th>
                            <th>Parent</th>
                            <th>Permission</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php                
                            $mnuhasroles = RoleHasMenu::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $this->lblIdrole->Text)                                    
                                                ),
                                            QQ::Clause(
                                                QQ::OrderBy(QQN::RoleHasMenu()->Seq, TRUE)
                                                )
                                            );
                            foreach ($mnuhasroles as $mnuhasrole){
                        ?>
                        <tr>
                            <td><?php $this->lbldels[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></td>
                            <td>
                                <div class="pull-left"><?php $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></div>
                                <div class="pull-left"><?php $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></div>
                                <div class="pull-left"><?php $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></div>
                            </td>
                            <td><?php _p($mnuhasrole->MenuIdmenuObject->Name); ?></td>
                            <td><?php _p($mnuhasrole->Level); ?></td>
                            <td><?php _p($mnuhasrole->ParrentObject); ?></td>
                            <td><?php _p($mnuhasrole->Permission); ?></td>
                        </tr>
                            <?php } ?>
                        </tbody>
                    </table>    
                        <div class="form-actions">    
                            <div class="pull-left" style="width: 25%"><?php $this->lstMenu->Render(); ?></div>
                        <div class="pull-left"  style="width: 10%"><?php $this->txtlevel->Render(); ?></div>
                        <div class="pull-left"  style="width: 25%"><?php $this->lstParrent->Render(); ?></div>
                        <div class="pull-left"  style="width: 25%"><?php $this->txtPermision->Render(); ?></div>
                        <div class="pull-left" style="width: 15%"><?php $this->btnAdd->Render(); ?></div>
                        <div style="clear: both; height: 5px;"></div>
                        </div>
                    </div>
                </div>
            
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>" id="3">
                    <div class="form-controls">                        
                        <?php $this->dtgGroup->Render();?>
                        <div class="form-actions">
                            <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtGrpName->Render(); ?></div>
                            <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtGrpDescription->Render(); ?></div>
                            <div class="pull-left" style="margin-left: 5px;"><?php $this->btnGrpSave->Render(); ?><?php $this->btnGrpDelete->Render(); ?></div>
                            <div style="clear: both; height: 5px;"></div>
                        </div>
                    </div>
                </div>        
                    
                </div>
        </div>
</div>
        <h3>            
        </h3>
            <?php } ?>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>