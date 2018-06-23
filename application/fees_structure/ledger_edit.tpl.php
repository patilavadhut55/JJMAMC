<?php
    $strPageTitle = QApplication::Translate('Ledger');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
    <div class="form-controls">
        <div style=" padding: 10px 5px 10px 5px; border: 1px solid lightgray; background:  #f7f7f7;">
            <div style="float: left; margin-right: 5px; font-weight: bold; padding-top: 5px;" >Name</div>
            <div style="float: left; margin-right: 15px;" ><?php $this->txtName->Render(); ?></div>                
            <div style="float: left; margin-right: 5px; font-weight: bold; padding-top: 5px;" >Is Group</div>
            <div style="float: left; margin-right: 15px; padding-top: 5px;" ><?php $this->chkGrp->Render(); ?></div>
            <div style="float: left; margin-right: 5px; font-weight: bold; padding-top: 5px;" >Is Fee Repeat</div>
            <div style="float: left; margin-right: 15px; padding-top: 5px;" ><?php $this->chkIsfeerepeat->Render(); ?></div>
            <div style="float: right; margin-right: 5px;" ><?php $this->btnDelete->Render(); ?></div>
            <div style="float: right; margin-right: 5px;" ><?php $this->btnCancel->Render(); ?></div>
            <div style="float: right; margin-right: 5px;" ><?php $this->btnSave->Render(); ?></div>
            <div style="clear: both;"></div>
        </div>
	<?php $this->dtgLedger->Render(); ?>
    </div>
            

       <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>