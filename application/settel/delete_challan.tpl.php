<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>
    <h1>Delete Challan</h1>
    <div class="form-controls">
        <?php $this->txtPRN->RenderWithName(); ?>
        <?php $this->txtInvNo->RenderWithName(); ?>
        <?php
         if(isset($_GET['id'])){ ?>
        <div class="form-actions">
            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            <div style="clear: both;" ></div>
        </div> 
         <?php }?>
    </div> 

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>