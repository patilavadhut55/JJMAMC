<?php
	
	$strPageTitle = QApplication::Translate('CalenderYear');
        require(__CONFIGURATION__ . '/header.inc.php');
?>
	
	<?php $this->RenderBegin() ?>
        <?php $this->pnlRight->Render(); ?>
        <?php $this->pnlLeft->Render(); ?>
        <div class="clearfix"></div>
        <?php $this->btnnew->Render(); ?>
        <?php $this->RenderEnd() ?>

<?php// require(__CONFIGURATION__ .'/footer.inc.php'); ?>

