<?php
    $strPageTitle = QApplication::Translate('Group') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
    <?php //_t('Group')?>

<div class="form-controls">
    <div class="pull-right slideup"><?php $this->btnGrpNew->Render();?></div>
    <?php $this->dtgGroup->Render();?>
    <div class="form-actions">
     <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtGrpName->Render(); ?></div>
       <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtGrpDescription->Render(); ?></div>
       <div class="pull-left" style="margin-left: 5px;"><?php $this->btnGrpSave->Render(); ?><?php $this->btnGrpDelete->Render(); ?></div>
      <div style="clear: both; height: 5px;"></div>
    </div>
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>