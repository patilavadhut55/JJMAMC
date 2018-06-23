<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<div class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                   
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 1 )|| !isset($_GET['tab']) ){ ?>active<?php } ?>"id="1">
                        <a href="outward_edit.php?tab=1<?php if(isset($_GET['id'])){ ?>&id=<?php _p($_GET['id']); } ?>" aria-expanded="true" id="link1 ">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Outward Register')?>
                        </a>                         
                    </li>
                    <?php if(isset($_GET['id'])){?>
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 2 ) ){ ?>active<?php } ?>">
                        <a href="outward_edit.php?tab=2<?php if(isset($_GET['id'])) _p("&id=".$_GET['id']); ?>"  id="link2">
                            <i class="fa fa-certificate fa-fw"></i><?php _t('Document Attached')?>
                        </a>
                    </li>
                    <?php } ?>
                   
                </ul>
                <div class="tab-content">
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 1 || !isset($_GET['tab'])){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <div>
                                <div class="col-md-6">
                                    <div  style="float: left; margin-left: 60px;"><?php //$this->txtCode->RenderWithName(); ?></div>
                                    <?php if(!isset($_GET['id'])){ ?>
                                     <?php $this->lblCode->RenderWithName(); ?>
                                    <?php } ?>
                                    <div style="clear: both;"></div> 
                                </div>
                                    <div class="col-md-6"><?php ?></div>
                                    <div style="clear: both;"></div> 
                            </div>
                              
                            <div class="col-md-6"><?php $this->calDate->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->txtSubject->RenderWithName(); ?></div>
                            <div style="clear: both;"></div>   
                            <div class="col-md-6"><?php $this->txtName->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->txtAddress->RenderWithName(); ?></div>
                            <div style="clear: both"></div>
                            <div class="col-md-6"><?php $this->txtPlace->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->lstdept->RenderWithName(); ?></div>
                            <div style="clear: both"></div>
                            <div class="col-md-6"><?php $this->txtSub->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->txtFileno->RenderWithName(); ?></div>
                            <div style="clear: both"></div>
                            <div class="col-md-6"><?php $this->txtDept->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->txtTableNo->RenderWithName(); ?></div>
                            
                            <div style="clear: both"></div>
                            <div class="col-md-6"><?php $this->txtSrNo->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php $this->txtCourier->RenderWithName(); ?></div>
                           
                            <div style="clear: both"></div>
                             <div class="col-md-6"><?php $this->txtPostage->RenderWithName(); ?></div>
                                 <div style="clear: both"></div>
                             <div class="form-actions">
                                <div class="form-save"><?php $this->btnSave->Render();?> </div>
                                <div class="form-cancel"><?php $this->btnCancel->Render();?> </div>
                                <div class="form-delete"><?php $this->btnDelete->Render();?>  </div>
                            </div> 
                                       <div style="clear: both"></div>
                        </div>
                         <div style="clear: both"></div>
                        <div class="form-controls"> 
                            <h3>OutWord Register List</h3>
                            <table class="datagrid">
                                <tr>
                                    <th width="2%"><div align="center">Sr</div></th>
                                    <th width="5%"><div align="center">Date</div></th>
                                    <th width="10%"><div align="center">Ref & Outward No.</div></th>
                                    <th width="12%"><div align="center">Name and Address</div></th>
                                    <th width="4%"><div align="center">Place</div></th>
                                    <th width="4%"><div align="center">Subject</div></th>
                                    <th width="5%"><div align="center">By Email </div></th>
                                    <th width="4%"><div align="center">By Hand</div></th>
                                    <th width="6%"><div align="center">Register AD Rs.</div></th>
                                    <th width="4%"><div align="center">Speed Post Rs.</div></th>
                                    <th width="4%"><div align="center">Courier </div></th>
                                    <th width="4%"><div align="center">Postage</div></th>
                                </tr>
                                    <?php  $sr =1;
                                    $docwords = DocInOut::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::DocInOut()->Outward,1)
                                            ));
                                            foreach ($docwords as $docword){
                                    ?>
                                            <tr style="cursor:pointer" onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/doc_inoutward/outward_edit.php?id=<?php _p($docword->IddocInOut) ?>'">
                                                <td><div align="center"> <?php _p($sr++);?></div></td>
                                                <td><div align="center"> <?php _p(date('Y-m-d',  strtotime($docword->Date)));?></div></td>
                                                <td><div align="center"><?php _p($docword->Code);?></div></td>
                                                <td><div align="center"><?php _p($docword->Name);?>&nbsp;&nbsp;<?php _p($docword->Address);?></div></td>
                                                <td><div align="center"><?php _p($docword->Place);?></div></td>
                                                <td><div align="center"><?php if($docword->Subject != NULL){ _p($docword->Subject);}?></div></td>
                                                <td><div align="center"><?php _p($docword->To);?></div></td>
                                                <td><div align="center"><?php _p($docword->TableNo);?></div></td>
                                                <td><div align="center"><?php _p($docword->FilenoName);?></div></td>
                                                <td><div align="center"> <?php _p($docword->SerialNo);?></div></td>
                                                <td><div align="center"><?php _p($docword->CourierCharges);?></div></td>
                                                <td><div align="center"><?php _p($docword->Postage);?></div></td>
                                            </tr>
                                              <?php } ?>
                                    <div style="clear: both;"></div> 
                            </table>
                        </div>
                    </div>
                      <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 2 ){ ?>active<?php } ?>" id="2">
                            <div class="form-controls">
                                <div style="margin: 5px; background-color: gainsboro; width: 120px; padding: 10px 15px 10px 15px; border-radius: 5px;"><strong>Forward to:</strong></div>
                                   <div class="col-md-6">
                                        <div style=""><?php $this->lstDept->RenderWithName(); ?></div>
                                        <div style=""><?php $this->lstMarkto->RenderWithName(); ?></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style=""><?php $this->lstDesignation->RenderWithName(); ?></div>
                                        <div style=""><?php $this->btnAdd->RenderWithName(); ?></div>
                                    </div>   
                                 <div style="width: 100%;" align="center"><?php $this->dtgforward->Render(); ?></div>
                                    <div class="col-sm-12">                               
                                    <?php 
                                       if(isset($_GET['id'])){
                                        $scancode = Settings::LoadByName("Scan");
                                        $appdocs = MemberDoc::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::MemberDoc()->InOut, $_GET['id'])
                                                    )
                                                );
                                        if($appdocs){
                                            foreach ($appdocs as $appdoc){
                                        
                                    ?>
                                    <div style="margin: 7px;"><strong>Uploaded Documents</strong></div>
                                    <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
<!--                                        <div class="col-sm-6" style="padding-top:10px;">
                                            <?php //$this->lbldelete[$appdoc->Idvoucher]->Render();?>    
                                            
                                        </div>-->
                                        
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
                                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_doc.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg=1" target="_blank"><div class="btn btn-success"><?php _p($sr++);   ?></div></a>
                                                        <?php }else{ ?>
                                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_doc.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg=1" target="_blank"><div class="btn btn-default"><?php _p($sr++);   ?></div></a>
                                                        <?php } ?>  

                                                        <?php } }  ?>
                                                    </div>
                                            <?php } ?>    
                                            &nbsp;
                                            <!--<a href="<?php // _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/doc_inoutward/outward_edit.php?id=<?php // _p($_GET['id']); ?>&tab=2">-->
                                                  <!--<div class="btn btn-success">Add Doc</div>-->
                                            <!--</a>-->
<!--                                                <a href="<?php //_p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/quotation.php?id=<?php //_p($_GET['id']); ?>&doc=<?php// _p($scancode->Option);?>&tab=2">-->
                                               
       
<!--                                                </a>-->
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                        <?php } ?>  
                                          <?php $this->btnAddDoc->Render(); ?>
<!--                                    <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                                        <div class="col-sm-8"><?php //$this->txtDocs->Render(); ?></div>
                                        <div class="col-sm-2" style="border: none"><?php $this->btnScan->Render(); ?></div>    
                                        <div class="clearfix"></div>
                                    </div>-->

<!--                                    <iframe name="scanpage" id="scanpage" style="border: 0px; border-radius: 5px; padding: 0 2px; overflow: hidden;"
                                        src="<?php //_p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/inoutward_doc.php?id=<?php //if($appdoc) _p($_GET['id']); if(isset($_GET['doc'])){_p("&doc=".$_GET['doc']);} ?>&flg=1" width="100%" height="1000">
                                    </iframe>-->

                                    </div>    
                                 <div class="pull-right"><?php $this->btnBack->Render(); ?>
                                      <div style="float: right;"><?php $this->btnSend->Render(); ?></div>
                                        <?php } } ?>
                                    <div class="clearfix"></div>
                                    </div>
                     <div class="clearfix"></div>
       </div>
                  </div>
              </div>
        </div>
                    
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>