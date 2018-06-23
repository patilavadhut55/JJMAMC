<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
<

   <div class="clearfix"></div>
   <h1><?php _t('Calender');?></h1> 
     
<div class="form-controls">
    
    <div class="col-md-4"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-4"><?php $this->lstTeachDept->Render(); ?></div>
    <div class="col-md-2"><?php $this->btnGenerate->Render(); ?></div>
    <div class="col-md-2"><?php $this->btnViewCal->Render(); ?></div>
  
    <div class="clearfix"></div>
      
    </div>
    
    <div class="form-controls" style="margin-top: 10px;">
        <?php $this->dtgEvent->Render(); ?>
    </div>
    </div>

     <div class="clearfix"></div>
<?php $this->RenderEnd(); ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>

