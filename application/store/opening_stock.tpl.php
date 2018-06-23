<?php
	$strPageTitle = QApplication::Translate('Opening');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        <div class="form-controls">
            <div class="col-md-3"><?php $this->calDate->RenderWithName(); ?></div>
            <div><?php $this->btnReport->Render(); ?></div>
        </div>
    <?php if(isset($_GET['fdate'])){ ?>
            <div class="form-controls">
                <?php $this->dtgopeningstock->Render(); ?>     
            </div>
            <div class="form-controls">
                <div class="col-md-3" style="margin-left: 140px;"><?php $this->lstDepartment->Render(); ?></div>
                <div class="col-md-2"><?php $this->lstItem->Render(); ?> </div>  
                <div class="col-md-2"><?php $this->txtOpening->Render(); ?></div>
                <div class="form-save"><?php $this->btnAdd->Render(); ?></div>
                <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
            </div>
            <div style="clear: both"></div>
        <?php } ?>
        <div style="clear: both"></div>
	<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>