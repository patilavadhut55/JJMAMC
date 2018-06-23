<?php
	$strPageTitle = QApplication::Translate('Login') . ' - ' . $this->mctLogin->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<div class="form-controls">
            <?php //$this->lstIdObject->RenderWithName(); ?>
            <?php $this->txtUsername->RenderWithName(); ?>
            <?php $this->txtPassword->RenderWithName(); ?>
            <?php //$this->txtIsEnabled->RenderWithName(); ?>
        </div>

	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>