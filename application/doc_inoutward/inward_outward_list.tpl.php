<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<?php /*$role = Settings::LoadByIdsettings(46);*/
          //  if($_SESSION['role'] == $role->Option)
           ?>
                <div  style="float: right">
                    <?php $this->btnAdd->Render(); ?>
                </div>
            <?php  ?>
    <div class="tabbable-panel">
        <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 1 )|| !isset($_GET['tab']) ){ ?>active<?php } ?>">
                        <a href='inward_outward_list.php?tab=1' aria-expanded="true" id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Inward')?>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab']) || isset($_GET['tab'])&& $_GET['tab']==1){ ?>active <?php } ?>">
                        <div class="form-controls"> 
                            <?php if(isset($_GET['id'])){ ?>
                                <h4> 
                                   <?php 
                                    if(isset($_GET['id'])){
                                        $doc = DocInOut::LoadByIddocInOut($_GET['id']);
                                        _t(' Subject :'.$doc->DocumentGrpObject->Name.'&nbsp&nbsp&nbsp&nbsp');
                                        _t('Sender :'.$doc->InwordByObject); 
                                    }
                                    ?>
                                </h4>

                            <div style="margin-top: 20px; border: 1px solid #CCC; padding: 10px; border-radius: 7px;">
                                <div style="margin-bottom: 20px;" >Attached Documents</div>
                                <div style="height: 500px; overflow: scroll;">
                                <?php 
                                if($_GET['id']){
                                 $attach = DocInOut::LoadByIddocInOut($_GET['id']);
                                 if($attach){
                                    ?>
                                    <div style="float: left; padding: 10px;"><?php $this->btnDesign->Render(); ?></div>
                                    <div style="float: left; padding: 10px;"><?php $this->btnCode->Render(); ?></div>
                                    <div style="clear: both;"></div>
                                    <div><?php $this->txtDesign->Render(); ?></div>
                                    <div><?php $this->txtData->Render(); ?> </div>
                                    <div style="clear: both;"></div>
                                    <div style="clear: both;"></div>
                                    <div style="clear: both;"></div>
                                 <?php }} ?>
                                 </div>
                            </div>
                            <table width="100%">
                                <tr height="50">
                                    <td width="10%" ><strong>Mark To</strong></td>
                                    <td width="30%" ><?php $this->lstMarkto->Render(); ?></td>
                                    <td width="10%" ><strong>Date</strong></td>
                                    <td width="50%" ><?php $this->calDate->Render(); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Note</strong></td>
                                    <td rowspan="2"><?php $this->txtNote->Render(); ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><strong>Closed</strong></td>
                                    <td><?php $this->chkClose->Render(); ?></td>
                                </tr>
                            </table>
                            <div id="formActions">
                              <div id="save"><?php $this->btnSave->Render(); ?></div>
                            </div>
                            <?php }else{ 
                                
                                $this->dtgOutword->Render();
                            ?>
                            
                         
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
         </div>
</div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>