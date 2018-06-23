<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>
<div id="titleBar">Inward</div>
<div id="formControls">
<table width="626" border="0">
  <tr>
    <td width="62" height="42">From</td>
    <td width="243"><?php $this->calfrom->Render(); ?></td>
    <td width="64">To</td>
    <td width="239"><?php $this->calto->Render(); ?></td>
  </tr>
  <tr>
    <td height="42" colspan="4"><?php $this->lstpo->RenderWithName(); ?></td>
  </tr>
  <?php if(isset($_GET['po'])){
        $po= Voucher::LoadByIdvoucher($_GET['po']);
    ?>
  <tr>
    <td height="42"><strong>Supplier-</strong></td>
    <td height="42"><strong>
      <?php _p($po->ToObject); ?>
    </strong></td>
    <td height="42"><strong>Date-</strong></td>
    <td height="42"><strong>
      <?php _p(date('d/m/Y',  strtotime($po->Date))); ?>
    </strong></td>
  </tr>
  <?php } ?>
  <tr>
    <td height="42" colspan="4"><?php $this->dtgpurcahse->Render(); ?></td>
  </tr>
</table>

</div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>