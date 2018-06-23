<?php
	$strPageTitle = QApplication::Translate('VoucherGrps') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>        
        <div class="pull-right slideup">
        <?php $this->btnNew->Render(); ?>
        </div>
        
	<?php $this->dtgVoucherGrp->Render(); ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>