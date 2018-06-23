<?php
	// This is the HTML template include file (.tpl.php) for the menu_position_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('MenuPosition') . ' - ' . $this->mctMenuPosition->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<h1><?php _p($this->mctMenuPosition->TitleVerb); ?> <?php _t('MenuPosition')?></h1>

	<div class="form-controls">
<?php $this->lblIdmenuPosition->RenderWithName(); ?><?php $this->txtName->RenderWithName(); ?>	</div>

	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>