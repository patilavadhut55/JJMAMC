<?php
// This is the HTML template include file (.tpl.php) for the report_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

    $strPageTitle = QApplication::Translate('Hierarchy');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>

    <div class="form-controls">
        <?php
        $orgs = Role::LoadArrayByGrp(1);
        $cnt=1;
        foreach ($orgs as $org){
        ?>
        <div class="panel panel-default" style="margin-bottom: 0px !important;">                                            
            <div data-toggle="collapse" data-parent="#accordion" href="#collapse<?php _p($cnt); ?>" class="panel-heading" style="cursor: pointer;">                                            
                <h4 class="panel-title">                                                
                    <div class="pull-left" style="padding: 5px 0px 5px 0px; ">                            
                        <?php _p($org->Name); ?>
                    </div>            
                    <div class="pull-right" >
                        <?php $this->btnAddLink[$org->Idrole]->Render(); ?>
                    </div>
                </h4>
                <div style="clear: both;"></div>
            </div>

            <div id="collapse<?php _p($cnt); ?>" class="panel-collapse collapse ">
                <div class="panel-body">
                    
                    <?php //_t($org->Description); ?>

                    <?php                         
                    $objs = Role::LoadArrayByParrent($org->Idrole);
                    $cntsub=1;       
                    $srsub = 1;                        
                    foreach ($objs as $obj){
                    ?>

                    <div class="panel panel-default" style="margin-bottom: 0px !important;">
                        <div data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($cntsub.$obj->Idrole); ?>" class="panel-heading" style="cursor: pointer;">
                            <div class="panel-title">
                                <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                    <?php _p($obj->Name); ?>
                                </div>        
                                <div class="pull-right" >
                                    <?php $this->btnAddLink[$obj->Idrole]->Render(); ?>
                                </div>
                            </div>
                            
                            <div style="clear: both;"></div>
                        </div>

                        <div id="collapsesub<?php _p($cntsub.$obj->Idrole); ?>" class="panel-collapse collapse">
                            <div class="panel-body">                                
                                <?php
                                    //if it is designation
                                    if($obj->Grp == 3){
                                        $members = LoginHasRole::LoadArrayByRoleIdrole($obj->Idrole);
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
                                    <tr>
                                        <td><?php _p($memcounter++); ?></td>
                                        <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                        <td><?php if($address)_t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                        <td><?php if($address)_p($address[0]->Contact1); ?></td>
                                    </tr>
                                <?php } ?>
                                </table>
                                <?php } ?>                            
                                <?php                                         
                                    $subobjs = Role::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Role()->Parrent, $obj->Idrole),
                                    QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                        )
                                    );

                                    $cntsub=1;       
                                    $srsub = 1;
                                    foreach ($subobjs as $subobj){
                                ?>
                                <div class="panel panel-default" style="margin-bottom: 0px !important;">
                                    <div data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj->Idrole); ?>" class="panel-heading" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                <?php _p($subobj->Name); ?>
                                            </div> 
                                            <div class="pull-right" >
                                                <?php $this->btnAddLink[$subobj->Idrole]->Render(); ?>
                                            </div>
                                        </h4>
                                        <div style="clear: both;"></div>
                                    </div>

                                    <div id="collapsesub<?php _p($subobj->Idrole); ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             <?php
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
                                                <tr>
                                                    <td><?php _p($memcounter++); ?></td>
                                                    <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                    <td><?php if($address) _t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                    <td><?php if($address) _p($address[0]->Contact1); ?></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                                <?php } ?>
                                            
                                            
                                                <?php                                         
                                                    $subobjs1 = Role::QueryArray(
                                                    QQ::AndCondition(
                                                    QQ::Equal(QQN::Role()->Parrent, $subobj->Idrole),
                                                    QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                                        )
                                                    );

                                                    $cntsub=1;       
                                                    $srsub = 1;
                                                    foreach ($subobjs1 as $subobj1){
                                                ?>
                                                <div class="panel panel-default" style="margin-bottom: 0px !important;">
                                                    <div data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj1->Idrole); ?>" class="panel-heading" style="cursor: pointer;">
                                                        <h4 class="panel-title">
                                                            <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                                <?php _p($subobj1->Name); ?>
                                                            </div>    
                                                            <div class="pull-right" >
                                                                <?php $this->btnAddLink[$subobj1->Idrole]->Render(); ?>
                                                            </div>
                                                        </h4>
                                                        <div style="clear: both;"></div>
                                                    </div>

                                                    <div id="collapsesub<?php _p($subobj1->Idrole); ?>" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <?php
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
                                                                <tr>
                                                                    <td><?php _p($memcounter++); ?></td>
                                                                    <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                                    <td><?php if($address) _t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                                    <td><?php if($address) _p($address[0]->Contact1); ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            </table>
                                                            <?php } ?>
                                                            
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
                                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj2->Idrole); ?>" class="panel-heading" style="cursor: pointer;">
                                                                    <h4 class="panel-title">
                                                                        <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                                            <?php _p($subobj2->Name); ?>
                                                                        </div> 
                                                                        <div class="pull-right" >
                                                                            <?php $this->btnAddLink[$subobj2->Idrole]->Render(); ?>
                                                                        </div>
                                                                    </h4>
                                                                    <div style="clear: both;"></div>
                                                                </div>

                                                                <div id="collapsesub<?php _p($subobj2->Idrole); ?>" class="panel-collapse collapse">
                                                                    <div class="panel-body">                                                                        
                                                                        <?php
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
                                                                            <tr>
                                                                                <td><?php _p($memcounter++); ?></td>
                                                                                <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                                                <td><?php if($address) _t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                                                <td><?php if($address) _p($address[0]->Contact1); ?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        </table>
                                                                            <?php } ?>
                                                                        
                                                                        
                                                                        
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
                                                                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsesub<?php _p($subobj3->Idrole); ?>" class="panel-heading" style="cursor: pointer;">
                                                                                <h4 class="panel-title">
                                                                                    <div class="pull-left" style="padding: 5px 0px 5px 0px; ">
                                                                                        <?php _p($subobj3->Name); ?>
                                                                                    </div>  
                                                                                    <div class="pull-right" >
                                                                                        <?php $this->btnAddLink[$subobj3->Idrole]->Render(); ?>
                                                                                    </div>
                                                                                </h4>
                                                                                <div style="clear: both;"></div>
                                                                            </div>

                                                                            <div id="collapsesub<?php _p($subobj3->Idrole); ?>" class="panel-collapse collapse">
                                                                                <div class="panel-body">
                                                                                    <?php
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
                                                                                        <tr>
                                                                                            <td><?php _p($memcounter++); ?></td>
                                                                                            <td><?php _p($member->LoginIdloginObject->IdloginObject->Name); ?></td>
                                                                                            <td><?php if($address)_t($address[0]->AddressLine1.'<br>'.$address[0]->AddressLine2); ?></td>
                                                                                            <td><?php if($address)_p($address[0]->Contact1); ?></td>
                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                    </table>
                                                                                        <?php } ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>   

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>   
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>            
                                <?php } ?>
                            </div>
                        </div>
                    </div>                        
                    <?php $cntsub++; } ?> 
                </div>
            </div>                                    
        </div>
        <?php $cnt++; } ?>
    </div>

    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>