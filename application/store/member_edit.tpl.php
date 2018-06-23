<?php
	$strPageTitle = QApplication::Translate('Member') . ' - ' . $this->mctMember->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Supplier')?>
	</div>

<div id="formControls" style="width: 650px">
		<table width="684" border="0">
  <tr>
    <td width="321"><?php $this->txtCode->RenderWithName(); ?></td>
    <td width="353"><?php $this->calDate->Render(); ?></td>
  </tr>
  <tr>
    <td colspan="2"><table width="679" border="0">
      <tr>
        <td width="191"> Name</td>
        <td width="117"><?php $this->lstPrefixObject->Render(); ?></td>
        <td width="110"><?php $this->txtFirstName->Render(); ?></td>
        <td width="126"><?php $this->txtMiddleName->Render(); ?></td>
        <td width="113"><?php $this->txtLastName->Render(); ?></td>
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

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>