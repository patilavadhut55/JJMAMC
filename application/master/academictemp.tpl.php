<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls">
    <div class="col-md-4"><?php $this->lstRoles->Render(); ?></div> <?php $this->objDefaultWaitIcon->Render(); ?>
    <div class="clearfix"></div>
    <?php $this->pnlLeft->Render(); ?>
    <?php $this->pnlRight->Render(); ?>
    <div class="clearfix"></div>
</div>

<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
