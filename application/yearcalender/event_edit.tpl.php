<?php
	$strPageTitle = QApplication::Translate('Event');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin(); ?>
        <div class="pull-right slideup">
            <?php $this->btnNew->Render() ?>
            <?php $this->objDefaultWaitIcon->Render(); ?>
        </div>
            
	<div class="form-controls">
            <div class="clearfix"></div>
            <?php $this->pnlLeft->Render(); ?>
            <?php $this->pnlRight->Render(); ?>
            <div class="clearfix"></div>
        </div>
<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>