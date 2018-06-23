<?php
    $strPageTitle = QApplication::Translate('Ledgers') . ' - ' . QApplication::Translate('List All');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
      <h1><i class="fa fa-th-list fa-fw"></i> <?php _t('Ledger'); ?>
        <div class="pull-right">
        <?php $this->btnNew->Render(); ?>
        </div>
        </h1>

	<?php $this->dtgLedger->Render(); ?>

    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>