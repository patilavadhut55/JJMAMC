<?php
	
	$strPageTitle = QApplication::Translate('EventCat');
	require(__CONFIGURATION__ . '/header.inc.php');
   
?>
<?php $this->RenderBegin() ?>
<h1>Event</h1>
<div class="form-controls">
    
    <?php $this->txtcode->RenderWithName(); ?>
    <?php $this->lsteventcat->RenderWithName(); ?>
    <?php $this->txtname->RenderWithName(); ?>
    <?php $this->calfrom->RenderWithName(); ?>
    <?php $this->calto->RenderWithName(); ?>
    <?php $this->txtnote->RenderWithName(); ?>
    
    <div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                <div class="clearfix"></div>
              
    </div>
 
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>