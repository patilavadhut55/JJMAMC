<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

        <?php
        $chkrole = Role::LoadByIdrole($_SESSION['role']);
         if ($chkrole){
        ?>
         
     <?php  if(!isset($_GET['id'])){ ?>

  <div class="form-controls"> 
      <div class="col-md-4"><?php $this->calDate->RenderWithName(); ?></div>
      <div> <?php $this->btnReport->Render(); ?></div>
  </div>
<?php  if(isset($_GET['fdate'])){ ?>
            <div class="form-controls"> 
                <table class="datagrid">
                    <tr>
                        <th width="2%"><div align="center">Sr</div></th>
                        <th width="5%"><div align="center">Date</div></th>
                            <th width="10%"><div align="center">Ref & Outward No.</div></th>
                            <th width="12%"><div align="center">Name and Address</div></th>
                            <th width="4%"><div align="center">Place</div></th>
                            <th width="5%"><div align="center">By Email </div></th>
                            <th width="4%"><div align="center">By Hand</div></th>
                            <th width="6%"><div align="center">Register AD Rs.</div></th>
                            <th width="4%"><div align="center">Speed Post Rs.</div></th>
                        <th width="4%"></th>
                    </tr>
                        <?php  $sr =1;
                        $docwords = DocInOut::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DocInOut()->Outward,1),
                                     QQ::Equal(QQN::DocInOut()->Date,$_GET['fdate']),
                                      QQ::Equal(QQN::DocInOut()->Dept,$chkrole->Parrent)
                                ));
                                foreach ($docwords as $docword){
                        ?>
                                <tr>
                                    <td><div align="center"> <?php _p($sr++);?></div></td>
                                    <td><div align="center"> <?php _p(date('Y-m-d',  strtotime($docword->Date)));?></div></td>
                                    <td><div align="center"><?php _p($docword->Code);?></div></td>
                                    <td><div align="center"><?php _p($docword->Name);?>&nbsp;&nbsp;<?php _p($docword->Address);?></div></td>
                                    <td><div align="center"><?php _p($docword->Place);?></div></td>
                                    <td><div align="center"><?php _p($docword->To);?></div></td>
                                    <td><div align="center"><?php _p($docword->TableNo);?></div></td>
                                    <td><div align="center"><?php _p($docword->FilenoName);?></div></td>
                                    <td><div align="center"> <?php _p($docword->SerialNo);?></div></td>
                                    <td><div align="center"><?php _p($this->btnview[$docword->IddocInOut]->Render()); ?>
                                </tr>
                            <?php } ?>
                        <div style="clear: both;"></div> 
                </table>
            </div>
               <?php }} ?>
                <?php 
                $sr =1;
                if(isset($_GET['id'])){
                    $docword = DocInOut::LoadByIddocInOut($_GET['id']);
                    if($docword){
                ?>
                <div class="form-controls"> 
                    <h3>OutWord Register List</h3>
                    <table class="datagrid">
                        <tr>
                            <th width="2%"><div align="center">Sr</div></th>
                            <th width="5%"><div align="center">Date</div></th>
                            <th width="10%"><div align="center">Ref & Outward No.</div></th>
                            <th width="12%"><div align="center">Name and Address</div></th>
                            <th width="4%"><div align="center">Place</div></th>
                            <th width="5%"><div align="center">By Email </div></th>
                            <th width="4%"><div align="center">By Hand</div></th>
                            <th width="6%"><div align="center">Register AD Rs.</div></th>
                            <th width="4%"><div align="center">Speed Post Rs.</div></th>
                          
                        </tr>
                        <tr>
                            <td><div align="center"> <?php _p($sr++);?></div></td>
                            <td><div align="center"> <?php _p(date('Y-m-d',  strtotime($docword->Date)));?></div></td>
                            <td><div align="center"><?php _p($docword->Code);?></div></td>
                            <td><div align="center"><?php _p($docword->Name);?>&nbsp;&nbsp;<?php _p($docword->Address);?></div></td>
                            <td><div align="center"><?php _p($docword->Place);?></div></td>
                            <td><div align="center"><?php _p($docword->To);?></div></td>
                            <td><div align="center"><?php _p($docword->TableNo);?></div></td>
                            <td><div align="center"><?php _p($docword->FilenoName);?></div></td>
                            <td><div align="center"> <?php _p($docword->SerialNo);?></div></td>
                                      
                        </tr>
                        <div style="clear: both;"></div> 
                    </table>
                <!--<a href="<?php // _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/doc_inoutward/outward_view.php?id=<?php // _p($docword->IddocInOut); ?>"--> 
                    <!--<div class="btn btn-default btn-default" >-->
                        <?php // _p($docword->IddocInOut); ?>
                    <h3>Document List</h3>
                    <?php
                    $appdocs = MemberDoc::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::MemberDoc()->InOut, $_GET['id'])
                                )
                            );
                            if($appdocs){
                                foreach ($appdocs as $appdoc){ ?>
                                    <?php  
                                    $sr = 1 ; $scans = explode(",", $appdoc->Scans); 
                                    if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
                                    $css = 0;
                                    $img = '../upload/documents/inoutward/A'.$appdoc->IdmemberDoc.'/'.(int)$scan.'.png'; 
                                   
                                    if(file_exists ($img)){ ?>
                                        
                                <a href="<?php _p($img); ?>" target="_Blank">
                                    <img src="<?php _p($img); ?>" style="height: 100px; width: 100px;" />
                                </a>    
                    
                                       
                                        <?php    //  }else{  
                                    //    if(!is_dir('../upload/documents/inoutward/A'.$app->IdmemberDoc)){
                       // if(!mkdir('../upload/documents/inoutward/A'.$appdoc->IdmemberDoc, 0777, true)){}
                                    } ?>
                                    
                                  
<!--                    <a><div class="btn btn-success"><?php// _p($sr++); ?><canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
        background-image: url(../documents/inoutward/A<?php //_p($appdoc->IdmemberDoc.'/'.(int)$scan.'.png'); ?>);
        background-repeat: no-repeat;background-size: 100%;width: 650px;"
        
     height="900" ></canvas></div></a>-->
                                                  
                    <!--<a href="<?php //  _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_docview.php?id=<?php //  _p($_GET['id']); ?>&doc=<?php //  _p($scan); ?>&flg=1" target="scanpage"><div class="btn btn-success"><?php// _p($); ?></div></a>-->
                    
                    <!--<a href="<?php // _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_docview.php?id=<?php // _p($_GET['id']); ?>&doc=<?php // _p($scan); ?>&flg=1" target="scanpage"><div class="btn btn-success"><?php// _p($); ?></div></a>-->
                                    <?php // }else{ ?>
                                        <!--<a href="<?php // _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_docview.php?id=<?php // _p($_GET['id']); ?>&doc=<?php // _p($scan); ?>&flg=1" target="scanpage"><div class="btn btn-success"><?php //_p($sr++); ?></div></a>-->
                                    <?php } ?>  
                                    <?php } }  ?>
                            <?php }} ?> 
                </div>
         <?php }} ?>        
    <?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>