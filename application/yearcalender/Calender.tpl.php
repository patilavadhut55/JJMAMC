<?php //require(__CONFIGURATION__ . '/header.inc.php'); ?>
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__) ; ?>/animate.min.css">
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.min.js"></script>

<link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
<!-- SlidePanel Css -->
<link rel="stylesheet" href="<?php _p(__sidebar__); ?>/css/simple-sidebar.css" />
<?php $this->RenderBegin(); ?>
<link href="calendar.css" type="text/css" rel="stylesheet" />

   <div class="clearfix"></div>
<div class="form-controls">
    <div class="slideup" style="margin-top: 50px; ">
        <?php $this->dlgSimpleMessage->Render(); ?>
       
    </div>
    <div class="col-md-4"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-4"><?php $this->lstTeachDept->Render(); ?></div>
    <div class="col-md-4"><?php $this->lstAcadYear->Render(); ?></div>
    <div class="clearfix"></div>
    <div class="col-md-2">
        <?php 
        for ($i=1; $i <= 12; $i++){ 
            if($i < 10) $i = "0".$i; //month needs 2 char
        ?>
        <p><?php $this->lblMonths[$i]->Render(); ?></p>
        <?php }  ?>
    </div>
    <div class="col-md-10"><?php $this->lblCalander->Render(); ?></div>
    <div class="clearfix"></div>
     <?php  if($this->lstCal->SelectedValue != NULL){
             $this->btnAdd->Render();   
            } ?>
</div>
 <?php $this->objDefaultWaitIcon->Render(); ?>
<?php $this->pnlRight->Render(); ?>
<?php $this->RenderEnd(); ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
