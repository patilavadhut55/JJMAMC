
<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls ">
    <?php $this->dtgCounter->Render(); ?>
    <div class="col-md-5"><?php $this->txtName->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->txtAbbri->RenderWithName(); ?></div>
    <div class="form-save"><?php $this->btnSave->RenderWithName(); ?></div>
    <!--<div class="form-delete"><?php //$this->btndelete->RenderWithName();  ?></div>-->

</div>
<div style="clear: both;"></div>
<?php $this->RenderEnd(); ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>