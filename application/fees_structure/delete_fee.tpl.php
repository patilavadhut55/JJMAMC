<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<div class="form-controls" >
    <?php $this->txtSearch->RenderWithName(); ?>
    <?php $this->txtReceiptNo->RenderWithName(); ?>
    <?php $this->chkApproved->RenderWithName(); ?>
    <?php $this->btnSave->Render(); ?>
    
</div>

<?php $this->RenderEnd() ?>
    <?php //require(__CONFIGURATION__ .'/footer.inc.php');?>