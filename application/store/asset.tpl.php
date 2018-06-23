<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>


             
        <div class="form-controls"> 
            <div><?php $this->txtcode->RenderWithName(); ?></div>
            <div><?php $this->txtname->RenderWithName(); ?></div>
                <div class="form-actions"> 
                   <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                   <div class="form-delete"><?php $this->btnDelete->Render(); ?></div> 
                   <div class="form-cancel"> <?php $this->btnCancel->Render(); ?></div>
                   <div style="clear: both; height: 5px;"></div>    
                </div>
        </div>
         <div class="form-controls"> 
            <div><?php $this->dtgLedger->Render(); ?></div>
         </div>

                    

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>