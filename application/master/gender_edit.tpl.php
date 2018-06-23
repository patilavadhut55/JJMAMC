<?php
    $strPageTitle = QApplication::Translate('Gender') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
    <?php _t('Gender')?>

<div class="form-controls">
    <div class="pull-right"><?php $this->btnNew->Render();?></div>
    <?php $this->dtggender->Render();?>
    <div class="form-actions">
     <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtName->Render(); ?></div>
      
       <div class="pull-left" style="margin-left: 5px;"><?php $this->btnSave->Render(); ?><?php $this->btnDelete->Render(); ?></div>
      <div style="clear: both; height: 5px;"></div>
    </div>
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>