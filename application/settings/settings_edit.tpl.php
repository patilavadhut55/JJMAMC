<?php
	
	$strPageTitle = QApplication::Translate('Settings') . ' - ' . $this->mctSettings->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
	<div class="form-controls">
            <?php $this->txtName->RenderWithName(); ?>
            <?php $this->txtOption->RenderWithName(); ?>
            <div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            </div>
            <div class="form-actions">
            	<?php $this->dtgSetting->Render(); ?>
            </div>

        </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>