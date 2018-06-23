<?php
	// This is the HTML template include file (.tpl.php) for the businesstype_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Business Group');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
	<div class="form-controls">
            <?php $this->txtName->RenderWithName(); ?>	
        

            <div class="form-actions">
                    <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                    <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                    <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            </div>
        </div>
        
        <div class="form-controls">
            <?php $this->dtgBusinessType->Render(); ?>
        </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>