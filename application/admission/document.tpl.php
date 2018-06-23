<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>


	<div class="form-controls">
            <?php $this->txtname->RenderWithName();?>

          
	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
           
    </div>
<div class="form-controls">
    <?php $this->dtgdisplay->Render(); ?>
</div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>