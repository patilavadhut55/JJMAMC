<?php
	$strPageTitle = QApplication::Translate('Ledger');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
	    <?php $this->dtgLedger->Render(); ?>
            <div class="form-controls">
                <div class="pull-left col-md-6" ><?php $this->txtName->Render(); ?></div>                
                <div class="pull-left col-md-6"><?php $this->lstGroup->Render(); ?></div>
                <div class="clear"></div>
                <div class="pull-left" style="margin-top: 20px; margin-left: 150px">Group &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $this->chkGrp->Render();?></div>                                
                <div class="pull-left" style="margin-top: 20px; margin-left: 50px;width: 200px;"><?php $this->txtCode->RenderWithName(); ?></div>                
                
                <div class="clear"></div>
                <div class="form-actions">
                    <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                    <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                    <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                </div>
            </div>
       <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>