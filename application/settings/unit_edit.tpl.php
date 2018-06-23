<?php
	$strPageTitle = QApplication::Translate('Unit') . ' - ' . $this->mctUnit->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	 <h1><i class="fa 
            <?php if($this->mctUnit->TitleVerb == "Create") _p("fa-plus-circle"); else _p("fa-pencil-square"); ?>
            fa-fw"></i>
        <?php _t('Units')?>
            <div class="pull-right">
               <?php $this->btnList->Render(); ?>
            </div>
        </h1>
	<div class="form-controls">
            <?php $this->txtName->RenderWithName(); ?>
            <?php $this->txtDecimalPlaces->RenderWithName(); ?>
            <?php $this->txtQtyInvolved->RenderWithName(); ?>
            <?php $this->txtDescription->RenderWithName(); ?>
            <div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            </div>
        </div>

     
             <?php //$this->dtgUnit->Render(); ?>
      
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>