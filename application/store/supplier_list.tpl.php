<?php
    $strPageTitle = QApplication::Translate('Supplier List');
    require(__CONFIGURATION__ . '/header.inc.php');
?>

    <?php $this->RenderBegin() ?>

  
<div class="slideup" style="float: right; ">
    <?php $this->btnadd->Render(); ?>
</div>
<div style="clear: both"></div>
<div class="form-controls ">
    <div style="cursor: pointer"><?php $this->dtg->Render(); ?></div>
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>