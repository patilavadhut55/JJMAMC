<?php
	// This is the HTML template include file (.tpl.php) for the cast_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Cast');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

            <div class="pull-right ">
                <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
            </div>
        <?php if($this->mctCast->EditMode == FALSE  && !isset($_GET['new'])) $this->dtgCast->Render(); ?>

        <?php 
            if($this->mctCast->EditMode == TRUE || isset($_GET['new'])){
        ?>
	<div class="form-controls">            
            <?php $this->lstParent->RenderWithName(); ?>
            <?php $this->txtName->RenderWithName(); ?>
            <?php $this->txtMarName->RenderWithName(); ?>
            <?php $this->txtAbbrivation->RenderWithName(); ?>
            <?php $this->txtPrint->RenderWithName(); ?>            
            <?php //$this->lstParentObject->RenderWithName(); ?>	
        
            <div class="form-actions">
                    <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                    <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                    <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            </div>
        </div>        

        <?php } ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>