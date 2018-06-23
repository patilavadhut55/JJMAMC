<?php
	$strPageTitle = QApplication::Translate('Member') . ' - ' . $this->mctMember->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Supplier')?>
	</div>

	<div id="formControls">
		<table width="748" border="0">
  <tr>
    <td width="370"><?php $this->txtCode->RenderWithName(); ?></td>
    <td width="370"><?php $this->calDate->Render(); ?></td>
  </tr>
  <tr>
    <td colspan="2"><table width="744" border="0">
      <tr>
        <td width="174">Name</td>
        <td width="76"><?php $this->lstPrefixObject->Render(); ?></td>
        <td width="156"><?php $this->txtFirstName->Render(); ?></td>
        <td width="160"><?php $this->txtMiddleName->Render(); ?></td>
        <td width="156"><?php $this->txtLastName->Render(); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php $this->txtContact->RenderWithName(); ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php $this->txtAddress->RenderWithName(); ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
      </table>
	  <div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
    </div>
<div id="formControls">
        <?php $this->dtgsupply->Render(); ?>
</div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>