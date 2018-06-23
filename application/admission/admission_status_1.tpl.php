<?php
	$strPageTitle = QApplication::Translate('AdmissionStatus');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>



<div class="form-controls">
    <?php $this->dtgAdmissionStatus->Render(); ?>
</div>
<div class="form-controls">
    <div style="float: left;margin-left: 50px;"> 
    <?php $this->txtName->RenderWithName(); ?>
      </div>
<div >    <?php $this->txtDesc->RenderWithName(); ?></div>

<div class="form-actions" style="margin-bottom:20px;">
            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
    </div>
</div>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>