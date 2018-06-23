<?php
    $strPageTitle = QApplication::Translate('StockGrps') . ' - ' . QApplication::Translate('List All');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
       <h1><i class="fa fa-th-list fa-fw"></i> <?php _t('Stock Groups'); ?>
        <div class="pull-right">
        <?php $this->btnNew->Render(); ?>
        </div>
        </h1>

	<?php $this->dtgStockGrp->Render(); ?>
    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>