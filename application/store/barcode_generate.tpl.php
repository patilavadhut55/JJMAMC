<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php if ($objcompany->Language == 1)_t(' Barcode Generator');else _t(' बारकोड निर्माण'); ?>
	</div>

	<div id="formControls">
            <table width="800" border="0">
              <tr>
                <td width="395"><?php $this->txtProduct->RenderWithName(); ?></td>
                <td width="395" rowspan="2"><?php $this->lblBarcode->Render(); ?></td>
              </tr>
              <tr>
                <td><?php $this->txtQty->RenderWithName(); ?></td>
              </tr>
            </table>
      <div id="formActions">
		<div id="save"><?php $this->btnGenerate->Render(); ?></div>
	</div>
        </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>