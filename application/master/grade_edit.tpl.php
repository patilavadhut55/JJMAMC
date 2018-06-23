<?php
	$strPageTitle = QApplication::Translate('Grade');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<div class="form-controls">
            <?php $this->txtName->RenderWithName(); ?>
            <?php $this->lstGrpObject->RenderWithName(); ?>
            <?php $this->txtMin->RenderWithName(); ?>
            <?php $this->txtMax->RenderWithName(); ?>
            <?php $this->txtFactor->RenderWithName(); ?>
            <?php $this->txtExp->RenderWithName(); ?>
            <?php $this->txtGradepoint->RenderWithName(); ?>
            <?php $this->txtLowerLimit->RenderWithName(); ?>
            <?php $this->txtUpperLimit->RenderWithName(); ?>
            <div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            </div>
        </div>
        <div class="form-controls"><?php $this->dtgGrade->Render(); ?></div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>