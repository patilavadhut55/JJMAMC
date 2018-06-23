<?php require('../../qcubed.inc.php'); ?>
 <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>CSS3-Slider/res/css/style.css"/>
    
<?php 
 $req = Voucher::LoadByIdvoucher($_GET['id']);
?>
	<div id="formControls">
    <table width="96%" border="0">
  <tr>
    <td width="64%" valign="top">
      <fieldset>
        <legend><?php _p($req->Titlte); ?> </legend>
        <table width="98%" border="0" style="font-size:12px;">
          <tr>
            <td width="18%"><strong>Req No</strong></td>
            <td width="32%"><strong>
              : <?php _p($req->Code); ?>
              </strong></td>
            <td width="17%"><strong>Date :</strong></td>
            <td width="33%"><strong>
              <?php _p(date('d/m/Y', strtotime($req->Date))); ?>
              </strong></td>
            </tr>
          <tr>
            <td><strong>From</strong></td>
            <td><strong>: 
              <?php _p($req->MemberObject->PrefixObject.' '.$req->MemberObject->FirstName.' '.$req->MemberObject->LastName); ?>
              </strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
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
        
        <table width="98%" border="1" style="border: 1px solid #EAEAEA; line-height:25px;">
          <tr>
            <td width="6%" bgcolor="#F4F4F4"><div align="center"><strong>Sr</strong></div></td>
            <td width="48%" bgcolor="#F4F4F4"><div align="center"><strong>Asset Name</strong></div></td>
            <td width="13%" bgcolor="#F4F4F4"><div align="center"><strong>Qty</strong></div></td>
            <td width="14%" bgcolor="#F4F4F4"><div align="center"><strong>Rate</strong></div></td>
            <td width="14%" bgcolor="#F4F4F4"><div align="center"><strong>Amount</strong></div></td>
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
              <?php _p($sr++); ?>
            </div></td>
            <td><?php _p($vhp->ProductObject.'-'.$vhp->ProductObject->Code); ?></td>
            <td><div align="center">
              <?php _p($vhp->Qty); $qty = $qty +$vhp->Qty; ?>
              </div></td>
            <td><div align="right"><?php _p(number_format($vhp->Rate,2,'.','')); ?>&nbsp;</div></td>
            <td><div align="right"><?php _p(number_format($vhp->Amount,2,'.','')); $amt = $amt + $vhp->Amount;  ?>&nbsp;</div></td>
            </tr>
          <?php }}} ?>
          <tr bgcolor="#F4F4F4">
            <td>&nbsp;</td>
            <td><div align="right"><strong>Total</strong></div></td>
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
    <td width="36%" valign="top">
      <fieldset>
        <legend>Approval Status</legend>
        <table width="100%" border="1" style="border: 1px solid #EAEAEA; line-height:10px; font-size:10px;">
          <tr bgcolor="#F4F4F4">
            <td width="12%" height="25"><div align="center"><strong>Seq</strong></div></td>
            <td width="20%"><div align="center"><strong>Date</strong></div></td>
            <td width="37%"><div align="center"><strong>Approved By</strong></div></td>
            <td width="31%"><div align="center"><strong>Note</strong></div></td>
            </tr>
          <?php 
      $approvals = VoucherHasApproval::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::VoucherHasApproval()->Approval, 1),
                    QQ::Equal(QQN::VoucherHasApproval()->Voucher, $_GET['id'])        
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
            <td><?php  if($approval->Approval == 1) _p($approval->ApprovedByObject->IdloginObject->PrefixObject.' '.$approval->ApprovedByObject->IdloginObject->FirstName.' '.$approval->ApprovedByObject->IdloginObject->LastName); ?></td>
            <td><?php _p($approval->Note ); ?></td>
            </tr>
          <?php } ?>
          </table>
        </fieldset>
      </td>
  </tr>
  </table>


</div>


