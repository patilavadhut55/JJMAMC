<?php
	$strPageTitle = QApplication::Translate('StockGrp') . ' - ' . $this->mctStockGrp->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
       <h1><i class="fa 
            <?php if($this->mctStockGrp->TitleVerb == "Create") _p("fa-plus-circle"); else _p("fa-pencil-square"); ?>
            fa-fw"></i>
           <?php _t('Stock Group')?>
            <div class="pull-right">
               <?php $this->btnList->Render(); ?>
            </div>
        </h1>
       <div class="form-controls">
            <?php $this->txtName->RenderWithName(); ?>
            <?php $this->lstParrentObject->RenderWithName(); ?>
            <?php $this->txtVatRate->RenderWithName(); ?>
            <?php $this->txtDutiesRate->RenderWithName(); ?>
            <div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	    </div>
        </div>

	

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>