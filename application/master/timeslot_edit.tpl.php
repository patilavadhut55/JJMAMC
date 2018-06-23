<?php
    $strPageTitle = QApplication::Translate('TimeSlot') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
 <div class="form-controls">
    <div class="pull-right"><?php $this->btnNew->Render();?></div>
    <?php $this->dtgtimeslot->Render();?>
    <div class="form-actions">
        <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtName->Render(); ?></div>
        <div class="pull-left" style="margin-left: 5px; width: 20%"><?php $this->txtNote->Render(); ?></div>
        <div class="pull-left" style="margin-left: 5px; width: 20%"><?php $this->calFrom->Render(); ?></div>
        <div class="pull-left" style="margin-left: 5px; width: 20%"><?php $this->calTo->Render(); ?></div>
        <div class="pull-left" style="margin-left: 5px;"><?php $this->btnSave->Render(); ?><?php $this->btnDelete->Render(); ?></div>
        <div style="clear: both; height: 5px;"></div>
    </div>
</div>
<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>