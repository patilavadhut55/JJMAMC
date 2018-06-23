<?php

	$strPageTitle = QApplication::Translate('Iwow') . ' - ' . $this->mctIwow->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Inward / Outward')?>
	</div>

	<div id="formControls">
		<div style="margin-top: -20px; margin-bottom: 10px; ">
		  <table>
		    <tr>
		      <td >
                        <div id="fromtab" <?php if($this->lstCategoryObject->SelectedValue==2){ ?> style="background-color: #0FF;"<?php } ?>><a href="iwow_edit.php?cat=2" accesskey="2">1 External Inward</a></div>
		        <div id="fromtab" <?php if($this->lstCategoryObject->SelectedValue==3){ ?> style="background-color: #0FF;"<?php } ?>><a href="iwow_edit.php?cat=3" accesskey="3">2 External Outward</a></div>
		        <div id="fromtab" <?php if($this->lstCategoryObject->SelectedValue==4){ ?> style="background-color: #0FF;"<?php } ?>><a href="iwow_edit.php?cat=4" accesskey="4">3 Departmental Inward</a></div>
		        <div id="fromtab" <?php if($this->lstCategoryObject->SelectedValue==5){ ?> style="background-color: #0FF;"<?php } ?>><a href="iwow_edit.php?cat=5" accesskey="5">4 Departmental Outward</a></div></td>
	        </tr>
	      </table>
	  </div>
      <table width="850" border="0">
  <tr>
    <td width="370" ><?php $this->txtCode->RenderWithName(); ?></td>
    <td width="370"align="right"><?php $this->calDate->Render(); ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><?php $this->lstpo->RenderWithName(); ?></td>
    </tr>
  <tr>
    <td><?php $this->txtFrom->RenderWithName(); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php $this->txtTo->RenderWithName(); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php $this->txtAsset->RenderWithName(); ?></td>
    <td><?php $this->txtQty->RenderWithName(); ?></td>
  </tr>
  <?php if(isset($_GET['po'])){ 
        $PO = Voucher::LoadByIdvoucher($_GET['po']);
?>
  <tr>
    <td colspan="2"><table width="800" border="0">
      <tr>
        <td width="145" height="32"><strong>Supplier</strong></td>
        <td width="313"><strong>
          <?php _p($PO->ToObject); ?>
        </strong></td>
        <td width="161"><strong>PO Date</strong></td>
        <td width="163"><strong>
          <?php _p(date('d/m/Y',  strtotime($PO->Date))); ?>
        </strong></td>
      </tr>
      <tr>
        <td height="34"><strong>Total Qty</strong></td>
        <td><strong>
          <?php _p($PO->TotalQty); ?>
        </strong></td>
        <td><strong>Amount</strong></td>
        <td><strong>
          <?php _p(number_format($PO->Amount,2,'.','')); ?>
        </strong></td>
      </tr>
    </table></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2"><?php $this->dtgpurcahse->RenderWithName(); ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php $this->chkClosed->RenderWithName(); ?></td>
  </tr>
      </table>

	  <div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
</div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>