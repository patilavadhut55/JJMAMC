<?php
    $strPageTitle = QApplication::Translate('Units') . ' - ' . QApplication::Translate('List All');
    require(__CONFIGURATION__ . '/header.inc.php');
?>

    <?php $this->RenderBegin() ?>

     <h1><i class="fa fa-th-list fa-fw"></i> <?php _t('Units'); ?>
        <div class="pull-right">
        <?php $this->btnNew->Render(); ?>
        </div>
        </h1>

	<?php $this->dtgUnit->Render(); ?>

    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>