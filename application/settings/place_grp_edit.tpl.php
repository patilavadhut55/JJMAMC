<?php
	$strPageTitle = QApplication::Translate('PlaceGrp') . ' - ' . $this->mctPlaceGrp->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<h1><?php _p($this->mctPlaceGrp->TitleVerb); ?> <?php _t('Place Group')?></h1>

	<div class="form-controls">
        <?php $this->txtName->RenderWithName(); ?>
        <?php //$this->txtAbbrivation->RenderWithName(); ?>
        <?php //$this->txtCounter->RenderWithName(); ?>	</div>

	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>