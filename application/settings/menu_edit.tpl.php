<?php
	$strPageTitle = QApplication::Translate('Menu') . ' - ' . $this->mctMenu->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<div class="form-controls">
        <?php $this->lstPositionObject->RenderWithName(); ?>
        <?php $this->lstParrentObject->RenderWithName(); ?>
        <?php $this->txtLevel->RenderWithName(); ?>
        <?php $this->txtCode->RenderWithName(); ?>
        <?php $this->txtName->RenderWithName(); ?>
        <?php $this->txtSubName->RenderWithName(); ?>
        <?php //$this->txtIcon->RenderWithName(); ?>
        <?php $this->lstIconList->RenderWithName(); ?>    
        <?php $this->txtLink->RenderWithName(); ?>
        <?php $this->txtLinkOption->RenderWithName(); ?>
        
	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
	</div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>