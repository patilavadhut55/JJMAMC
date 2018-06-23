<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls" >
    <div>
        
        <div><?php $this->lstYear->RenderWithName();?></div>
        <div style="margin-left: 150px;">
            <div style="float: left;padding-right: 10px;"><strong>Name</strong></div>
            <div style="float: left"><?php $this->lstPrifix->Render();?></div>
            <div style="float: left"><?php $this->txtFname->Render();?></div>
        <div style="float: left"><?php $this->txtMname->Render();?></div>
        <div style="float: left"><?php $this->txtLname->Render();?></div>
        <div style="clear: both"></div>
        </div>
<!--        <div><?php //$this->lstNationality->RenderWithName();?></div>
        <div><?php //$this->calDob->RenderWithName();?></div>
        <div><?php //$this->txtPob->RenderWithName();?></div>
        <div><?php //$this->calAddmission->RenderWithName();?></div>
        <div><?php //$this->txtCast->RenderWithName();?></div>
        <div><?php //$this->txtReligon->RenderWithName();?></div>
       
        <div><?php //$this->txtLast->RenderWithName();?></div>
        <div><?php //$this->txtRegNo->RenderWithName();?></div>
        <div><?php //$this->txtProgress->RenderWithName();?></div>
        <div><?php //$this->txtConduct->RenderWithName();?></div>
        <div><?php //$this->txtYearinwhich->RenderWithName();?></div>
        <div><?php //$this->txtReason->RenderWithName();?></div>
        <div><?php //$this->txtRemark->RenderWithName();?></div>-->
    </div>
       
   
    <div style="clear: both"></div>
    <div class="form-actions">
            <div class="form-save"><?php $this->btnApply->RenderWithName();?></div>
          <div class="form-save"><?php $this->btnSave->RenderWithName();?></div>
          <div class="form-cancel" style="float: left"><?php $this->btnCancel->RenderWithName();?></div>
           <div style="clear: both"></div>
    </div>
    
    </div>

<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
