<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>
    
<div class="slideup" style="float: right">
    <?php $this->btnAdd->Render(); ?>
</div>
    <div class="form-controls">
    <div style="cursor: pointer"> <?php $this->dtgLedger->Render(); ?></div>
    </div>
<div style="clear: both"></div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
