
	<div class="form-controls">
            <?php $_CONTROL->txtName->RenderWithName(); ?>
            <?php $_CONTROL->txtDescription->RenderWithName(); ?>
            <?php $_CONTROL->lstParrentObject->RenderWithName(); ?>
            <?php $_CONTROL->txtMname->RenderWithName(); ?>
            <?php $_CONTROL->lstGrpObject->RenderWithName(); ?>
            <?php $_CONTROL->txtShortName->RenderWithName(); ?>
            <?php $_CONTROL->txtAbbrivation->RenderWithName(); ?>
            <?php $_CONTROL->txtServiceYears->RenderWithName(); ?>
            <?php $_CONTROL->txtCode->RenderWithName(); ?>
            <?php $_CONTROL->txtCount->RenderWithName(); ?>
        </div>

	<div class="form-actions">
		<div class="form-save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>