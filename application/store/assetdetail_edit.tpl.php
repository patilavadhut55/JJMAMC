<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>
<h1> <?php _p('Asset'); ?></h1>
    <div class="form-controls">
                <div class="col-md-6"><?php $this->txtCode->RenderWithName(); ?></div>
                    <div style="clear: both"></div>
                 <div class="col-md-6"><?php $this->txtName->RenderWithName(); ?></div> 
                <div class="col-md-6"><?php $this->lstCat->RenderWithName(); ?></div>
                    <div style="clear: both"></div>
                <div  class="col-md-6"><?php $this->lstUnit->RenderWithName(); ?></div>
                     <div style="clear: both"></div>
                <div  class="col-md-6"><?php $this->txtprice->RenderWithName(); ?></div>
                     <div style="clear: both"></div>
            <div class="form-actions">
                <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                <div style="clear: both"></div>
            </div>
    </div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>

