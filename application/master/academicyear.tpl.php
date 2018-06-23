<?php
	$strPageTitle = QApplication::Translate('Academic Year');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin(); ?>
	<div class="form-controls">
            <div class="col-md-2 pull-right ">
            <?php $this->btnNew->Render() ?>
            <?php $this->objDefaultWaitIcon->Render(); ?>
            </div>
            <div class="clearfix"></div>
            <?php $this->pnlLeft->Render(); ?>
            <?php $this->pnlRight->Render(); ?>
            <div class="clearfix"></div>
        </div>
<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>