<?php
$strPageTitle = QApplication::Translate('Login');
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="pull-right slideup">
    <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
</div>

<?php if (!isset($_GET['id']) && !isset($_GET['new'])) $this->dtgLogin->Render(); ?>
<?php
if (isset($_GET['id']) || isset($_GET['new'])) {
    ?>
    <div class="form-controls">
        <?php //$this->txtCode->RenderWithName(); ?>
        <?php $this->txtName->RenderWithName(); ?>
        <?php //$this->lstGrp->RenderWithName(); ?>

        <div class="form-actions">
            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
        </div>
    </div>
<?php } ?>


<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>