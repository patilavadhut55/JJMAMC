
 <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>CSS3-Slider/res/css/style.css"/>
           
	<?php $this->RenderBegin() ?>

	
<?php 
 $req = Voucher::LoadByIdvoucher($_GET['id']);
 $approval = VoucherHasApproval::LoadById($_GET['appro']);
?>
	<div id="formControls">
    <table width="96%" border="0">
  <tr>
    <td width="52%" valign="top">
    <fieldset>
    <legend><?php _p($req->Titlte); ?> </legend>
    <table width="101%" border="0" style="font-size:12px;">
  <tr>
    <td width="15%"><strong>Req No</strong></td>
    <td width="36%"><strong>
      : <?php _p($req->Code); ?>
    </strong></td>
    <td width="10%"><strong>Date :</strong></td>
    <td width="39%"><strong>
      <?php _p(date('d/m/Y', strtotime($req->Date))); ?>
    </strong></td>
  </tr>
  <tr>
    <td><strong>From</strong></td>
    <td colspan="3"><strong>: 
      <?php _p($req->MemberObject->PrefixObject.' '.$req->MemberObject->FirstName.' '.$req->MemberObject->LastName); ?>
    </strong></td>
    </tr>
  <tr>
    <td><strong>Department</strong></td>
    <td colspan="3"><strong>: 
      <?php _p($req->DepartmentObject); ?>
    </strong></td>
    </tr>
  <tr>
    <td>Note :</td>
    <td colspan="3">: <?php _p($req->Description); ?></td>
  </tr>
    </table>

    <table width="100%" border="1" style="border: 1px solid #EAEAEA; line-height:25px;">
      <tr>
        <td width="5%" bgcolor="#F4F4F4"><div align="center"></div></td>
        <td width="6%" bgcolor="#F4F4F4"><div align="center"><strong>Sr</strong></div></td>
        <td width="39%" bgcolor="#F4F4F4"><div align="center"><strong>Asset Name</strong></div></td>
        <td width="12%" bgcolor="#F4F4F4"><div align="center"><strong>Qty</strong></div></td>
        <td width="18%" bgcolor="#F4F4F4"><div align="center"><strong>Rate</strong></div></td>
        <td width="20%" bgcolor="#F4F4F4"><div align="center"><strong>Amount</strong></div></td>
      </tr>
      <?php 
      $amt = $qty = 0;
      if(isset($_GET['id'])){
       $vhps = VoucherHasProduct::LoadArrayByVoucher($_GET['id']);
       if($vhps){
           
           $sr = 1;
       foreach ($vhps as $vhp){    
      ?>
      <tr>
        <td><div align="center">
          <?php if($approval->Edit == 1) $this->lbldelete[$vhp->Id]->Render(); ?>
        </div></td>
        <td><div align="center">
          <?php _p($sr++); ?>
          </div></td>
        <td>&nbsp;<?php _p($vhp->ProductObject.'-'.$vhp->ProductObject->Code); ?></td>
        <td><div align="center">
          <?php if($approval->Edit == 1) $this->arrqty[$vhp->Id]->Render();  else _p(number_format($vhp->Qty,2,'','.')); $qty = $qty +$vhp->Qty; ?>
        </div></td>
        <td><div align="right"><?php _p(number_format($vhp->Rate,2,'.','')); ?>&nbsp;</div></td>
        <td><div align="right"><?php _p(number_format($vhp->Amount,2,'.','')); $amt = $amt + $vhp->Amount;  ?>&nbsp;</div></td>
        </tr>
      <?php }}} ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><?php if($approval->Edit == 1) $this->txtProduct->Render(); ?></td>
        <td><div align="center">
          <?php  if($approval->Edit == 1) $this->txtQty->Render();  ?>
          </div></td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
        </tr>
      <tr bgcolor="#F4F4F4">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>Total&nbsp;&nbsp;</strong></div></td>
        <td><div align="center"><strong>
          <?php _p($qty); ?>
          </strong></div></td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>
          <?php _p(number_format($amt,2,'.','')); ?>&nbsp;
          </strong></div></td>
        </tr>
      </table>
      </fieldset>
      </td>
    <td width="48%" valign="top">
    <fieldset>
    <legend>Approval Status</legend>
    <table width="100%" border="1" style="border: 1px solid #EAEAEA; line-height:25px; font-size:12px;">
      <tr bgcolor="#F4F4F4">
        <td width="6%" height="26"><div align="center"><strong>Seq</strong></div></td>
        <td width="12%"><div align="center"><strong>Date</strong></div></td>
        <td width="35%"><div align="center"><strong>Approved By</strong></div></td>
        <td width="15%"><div align="center"><strong>Status</strong></div></td>
        <td width="32%"><div align="center"><strong>Note</strong></div></td>
        </tr>
      <?php 
      $approvals = VoucherHasApproval::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::VoucherHasApproval()->Voucher, $_GET['id']),
                    QQ::OrCondition(
                    QQ::Equal(QQN::VoucherHasApproval()->Approval, 1), 
                    QQ::Equal(QQN::VoucherHasApproval()->Reject, 1)        
                            )        
                            ),
                    QQ::OrderBy(QQN::VoucherHasApproval()->Seq)        
              );
              
     foreach ($approvals as $approval){
      
      ?>
      <tr>
        <td><div align="center">
          <?php _p($approval->Seq); ?>
        </div></td>
        <td><div align="center">
          <?php _p(date('d/m/Y', strtotime($approval->Date))); ?>
        </div></td>
        <td>&nbsp;<?php   _p($approval->ApprovedByObject->IdloginObject->PrefixObject.' '.$approval->ApprovedByObject->IdloginObject->FirstName.' '.$approval->ApprovedByObject->IdloginObject->LastName); ?></td>
        <td><div align="center">
          <?php  if($approval->Approval == 1) _p('Approved');   elseif($approval->Reject == 1) _p('Rejected'); ?>
        </div></td>
        <td><?php _p($approval->Note ); ?></td>
        </tr>
     <?php } ?>
    </table>
    </fieldset>
    </td>
  </tr>
  <tr>
    <td colspan="2"><?php $this->lstApproval->RenderWithName(); ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php $this->txtNote->RenderWithName(); ?></td>
  </tr>
    </table>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
   
</div>
</div>

	<?php $this->RenderEnd() ?>

