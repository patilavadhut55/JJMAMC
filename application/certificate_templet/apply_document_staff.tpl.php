<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls" >
    <div class="col-md-7 pull-left" >
        <?php  $this->caldate->RenderWithName();?>
        <div>
        <div style="float: left; width: 94%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
        <div style="float: left; width: 94%;"><?php  $this->lstdoc->RenderWithName(); ?></div>
        <div style="float: left; width:5%; margin-top: 4px;"><?php $this->btnSearch->Render(); ?></div>
         <div style="clear: both;"></div>
          </div>
      </div>
    <?php if(isset($_GET['mem'])) { ?>
    <div class="col-md-5 pull-left" >
            <?php if(isset($_GET['mem'])) { 
                $login_has_role = LoginHasRole::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger, $_GET['mem'])
                                ));
                                foreach ($login_has_role as $ledger){}
                                $led = Ledger::LoadByIdledger($_GET['mem']);
            ?>
                    <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
                    <table border="0" width="100%">
                        <tr height="30">
                            <td width="70" rowspan="3"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/prof.png" width="75" height="75"  style="padding-right: 15px;"alt=""/></td>
                            <td width="62" >Name</td>
                            <td width="14"><strong>:</strong></td>
                            <td colspan="4"><strong>
                              <?php if($led){
                                       _p(get_full_name($led->Name));
                              }  else {
                                   _p(get_full_name($ledger->LoginIdloginObject->IdloginObject->Name));
                              }
                              
                              ?>
                            </strong></td>
                        </tr>
                        <tr height="30">
                            <td>Program</td>
                            <td><strong>:</strong></td>
                            <td width="200"><?php 
                            if($login_has_role){
                            _p(delete_all_between('[',']',$ledger->RoleIdroleObject->ParrentObject)); 
                            }  else {
                                _p('Nil');
                            }
                            
                            ?></td>
                            <td></td>

                        </tr>
<!--                        <tr height="30">
                            <td>Year</td>
                            <td><strong>:</strong></td>
                            <td colspan="4"><?php //_p($CurrentStatu->SemisterObject->ParrentObject.', '.$CurrentStatu->SemisterObject);     ?></td>
                        </tr>-->
                    </table>
                    </div>
               <?php }?>
    </div>
    <div class="col-md-7 pull-left">
          <?php
              $app = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']);?>
           <div style="float: left; width: 94%;"><?php  //$this->txtReason->RenderWithName(); ?></div>
           <?php if($app->IdcertificateTemplet==23){
           ?>
           <div style="float: left; width: 94%;"><?php  $this->lstdept->RenderWithName(); ?></div>
           <div style="float: left; width: 94%;"><?php  $this->lstcalyear->RenderWithName(); ?></div>
           <div style="float: left; width: 94%;"><?php  $this->caldate1->RenderWithName(); ?></div>
           <div style="float: left; width: 94%;"><?php  $this->txtlecturefee->RenderWithName(); ?></div>
           <div style="float: left; width: 94%;"><?php  $this->txtpracttutfee->RenderWithName(); ?></div>
             
           <?php }
              if($app->IdcertificateTemplet==24){
           ?>
          <div style="float: left; width: 94%;"><?php  $this->txtadvertisedetails->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->txtpersonaddrs->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->meetingdate->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->lstdept->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtyears->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtpayonappoinment->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtpayband->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtaccademicgradepay->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtjoingdate->RenderWithName(); ?></div>
         
 <?php }?>
         <?php   if($app->IdcertificateTemplet==25){
           ?>
         <div style="float: left; width: 94%;"><?php $this->lstcalyear->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->txtpersonaddrs->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->lstdept->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtjoingdate->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtpayonappoinment->RenderWithName(); ?></div>
 <?php }?>
           <?php   if($app->IdcertificateTemplet==26){
           ?>
          <div style="float: left; width: 94%;"><?php $this->txtlaterrecevereddate->RenderWithName(); ?></div>
        
          <div style="float: left; width: 94%;"><?php $this->lstdept->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->txtpersonaddrs->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->meetingdate->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php  $this->txtpayonappoinment->RenderWithName(); ?></div>
          <div style="float: left; width:94%;"><?php  $this->txtaccademicgradepay->RenderWithName(); ?></div>
 <?php }?>
           <?php   if($app->IdcertificateTemplet==27){
           ?>
          <div style="float: left; width: 94%;"><?php $this->lstdept->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->txtpersonaddrs->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->txtyears->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->caldate1->RenderWithName(); ?></div>
          <div style="float: left; width: 94%;"><?php $this->txtpost->RenderWithName(); ?></div>
 <?php }?>
                 <div style="clear: both;"></div>
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
