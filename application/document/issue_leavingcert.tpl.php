<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
  <h1><?php _t('Issue Document') ?></h1>
<div class="form-controls" >
    <div class="col-md-7 pull-left" >
        <?php  $this->caldate->RenderWithName();?>
        <div>
        <div style="float: left; width: 94%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
        <div style="float: left; width:5%; margin-top: 4px;"><?php $this->btnSearch->Render(); ?></div>
        <div style="clear: both;"></div>
        </div>
    </div>
    <?php if(isset($_GET['mem'])) { ?>
    <div class="col-md-5 pull-left" >
       

            <?php if(isset($_GET['mem'])) { 
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $ledger = Ledger::LoadByIdledger($_GET['mem']);
                $firsts = CurrentStatus::QueryArray (
                          QQ::AndCondition(
                          QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, 1),
                          QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                   )); 
                        foreach ($firsts as $first){}
                    if(isset($_GET['year']))
                    $CurrentStatus = CurrentStatus::QueryArray (
                                      QQ::AndCondition(
                                      QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year']),
                                      QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                               ));  
                    else
                     $CurrentStatus = CurrentStatus::LoadArrayByStudent($ledger->Idledger);

                if($CurrentStatus)foreach ($CurrentStatus as $CurrentStatu){}   

            ?>
            
                    <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
                    <table border="0" width="100%">
                        <tr height="30">
                            <td width="70" rowspan="3"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/prof.png" width="75" height="75"  style="padding-right: 15px;"alt=""/></td>
                            <td width="62" >Name</td>
                            <td width="14"><strong>:</strong></td>
                            <td colspan="4"><strong>
                              <?php _p(get_full_name($ledger->Name)); ?>
                            </strong></td>
                        </tr>
                        <tr height="30">
                            <td>Program</td>
                            <td><strong>:</strong></td>
                            <td width="200"><?php _p(delete_all_between('[',']',$CurrentStatu->RoleObject->ParrentObject)); ?></td>
                            <td></td>

                        </tr>
                        <tr height="30">
                            <td>Year</td>
                            <td><strong>:</strong></td>
                            <td colspan="4"><?php _p($CurrentStatu->SemisterObject->ParrentObject.', '.$CurrentStatu->SemisterObject);     ?></td>
                        </tr>
                    </table>
                    </div>
               <?php }?>
                
        <div style=" margin-top: 5px;"><?php  $this->txtReason->Render(); ?></div>
        <div style=" margin-top: 5px;"><?php  $this->txtConduct->Render(); ?></div>
        <div style=" margin-top: 5px;"><?php  $this->txtRemark->Render(); ?></div>
         
    </div>
    
    <div style="clear: both;"></div>
    
    
    <div class="form-actions">
        <div class="form-delete"><?php $this->btnSave->Render(); ?></div>
        <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
    </div>
    <?php } ?>
     <div style="clear: both;"></div>
</div>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php');?>


