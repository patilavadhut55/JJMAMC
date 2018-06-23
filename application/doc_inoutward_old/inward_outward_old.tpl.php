
<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls">
      <div class="tabbable-panel">
        <div class="tabbable-line">
            <ul class="nav nav-tabs ">
                <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 1 )|| !isset($_GET['tab']) ){ ?>active<?php } ?>">
                    <a href='inward_outward.php?tab=1<?php if(isset($_GET['id1'])) _p("&id1=".$_GET['id1']); ?>' aria-expanded="true" id="link1">
                        <i class="fa fa-asterisk fa-fw"></i><?php _t('Inward')?>
                    </a>
                </li>
                <?php if(isset($_GET['id1'])){?>
                <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 2 ) ){ ?>active<?php } ?>">
                    <a href="inward_outward.php?tab=2<?php if(isset($_GET['id1'])) _p("&id1=".$_GET['id1']); ?>"  id="link2">
                        <i class="fa fa-certificate fa-fw"></i><?php _t('Document Attached')?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="tab-content">   
            <div class="tab-pane <?php if(!isset($_GET['tab']) || isset($_GET['tab'])&& $_GET['tab']==1){ ?>active <?php } ?>" id="1">
                <div style=" padding-bottom: 40px;">    
                    <div class=" pull-right form-cancel"><?php $this->btnList->Render(); ?></div>
                    <div class=" pull-right form-cancel"><?php $this->btnNew->Render(); ?></div>
                </div>
                           <?php if(!isset($_GET['id'])){ ?> 
                  <div class="form-controls" > 
                            <div class="col-md-6"><?php $this->txtCode->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->calDate->RenderWithName(); ?></div>
                            <div style="clear: both;"></div>
                            <div class="col-md-6"><?php $this->txtSubject->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->lstParrent->RenderWithName(); ?></div>
                            <div style="clear: both;"></div>
                           
                            <div class="col-md-6"><?php $this->txtFrom->RenderWithName(); ?></div>
                             <div class="col-md-6"><?php $this->lstCat->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->txtDescription->RenderWithName(); ?></div>
                            
                            <div style="clear: both;"></div> 
                            <!-- <div style="float: left; padding: 10px;"><?php $this->btnDesign->Render(); ?></div>
                            <div style="float: left; padding: 10px;"><?php $this->btnCode->Render(); ?></div>-->
                            <div style="clear: both;"></div> 
                             <div class=" pull-right col-md-8"></div>

                            <!--<div class="col-md-4" style="padding: 10px;"><?php $this->txtDesign->Render(); ?></div>-->
                            <!--<div class="col-md-4" style="padding: 10px;"><?php $this->txtData->Render(); ?> </div>-->
                            <div style="clear: both;"></div>
                            <div class="form-actions">
                                <div class="form-delete"><?php $this->btnSave->Render(); ?></div>
                                <div style="clear: both;"></div>
                            </div>

                        </div>
                 <?php } ?>
            </div>
            
            <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 2 ){ ?>active<?php } ?>" id="2">
                <div class="col-sm-12" style="margin-top: 20px;">
                    <div style="margin: 5px; background-color: gainsboro; width: 120px; padding: 10px 15px 10px 15px; border-radius: 5px;"><strong>Forward to:</strong></div>
                    <div class="col-md-6">
                        <div style=""><?php $this->lstDept->RenderWithName(); ?></div>
                        <div style=""><?php $this->lstMarkto->RenderWithName(); ?></div>
                    </div>
                    <div class="col-md-6">
                        <div style=""><?php $this->lstDesignation->RenderWithName(); ?></div>
                        <div style=""><?php $this->btnAdd->RenderWithName(); ?></div>
                    </div>
                    <div style="width: 100%"><?php $this->dtgforward->Render(); ?></div>
                    <?php 
                       if(isset($_GET['id1'])){
                        $scancode = Settings::LoadByName("Scan");
                        $appdocs = MemberDoc::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::MemberDoc()->InOut, $_GET['id1'])
                                    )
                                );
                        if($appdocs){
                            foreach($appdocs as $appdoc){}

                    ?>
                    
                    <div style="clear: both;"></div>
                </div>
                    
                    <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                    <!-- <div class="col-sm-6" style="padding-top:10px;">
                            <?php //$this->lbldelete[$appdoc->Idvoucher]->Render();?>    

                        </div>-->
                    <div style="margin: 7px;"><strong>Uploaded Documents</strong></div>
                        <div class="col-sm-12">
                            <?php if($appdoc->Scans != NULL){ ?>
                                    <div style="float:left;">
                                        <?php  
                                        $sr = 1 ; $scans = explode(",", $appdoc->Scans); 
                                        if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
                                        $css = 0;
                                        $img = '../upload/documents/inoutward/A'.$appdoc->IdmemberDoc.'/'.(int)$scan.'.png'; 
                                        if(file_exists ($img)){
                                        ?>
                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_doc.php?id=<?php _p($_GET['id1']); ?>&doc=<?php _p($scan); ?>&flg1=1" target="_blank"><div class="btn btn-success"><?php _p($sr++);   ?></div></a>
                                        <?php }else{ ?>
                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_doc.php?id=<?php _p($_GET['id1']); ?>&doc=<?php _p($scan); ?>&flg1=1" target="_blank"><div class="btn btn-default"><?php _p($sr++);   ?></div></a>
                                        <?php } ?>  

                                        <?php } }  ?>
                                    </div>
                                <?php } ?>    
                            &nbsp;

                        </div>
                        <div class="clearfix"></div>
                        
                       <?php } } ?>
                    </div>
            <?php $this->btnAddDoc->Render(); ?>
            <?php $this->btnBack->Render(); ?>
            <div style="float: right;"><?php $this->btnSend->Render(); ?></div>
                    
                    
              
           
            </div>
             <div class="clearfix"></div>
        </div>
    </div>
</div>
           
        
                
          
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>