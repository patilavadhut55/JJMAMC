<?php

	$strPageTitle = QApplication::Translate('PreQualification');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<h1><?php _t('PreQualification')?></h1>
        <div class="form-controls">
            <div class="col-md-2 pull-right slideup ">
            <?php $this->btnNew->Render() ?>
            <?php $this->objDefaultWaitIcon->Render(); ?>
            </div>
            <div class="clearfix"></div>
            <?php $this->pnlLeft->Render(); ?>
            <?php $this->pnlRight->Render(); ?>
            <div class="clearfix"></div>
        </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>