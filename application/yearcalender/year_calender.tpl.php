<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
<link href="calenedar.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/jquery.dialogbox.css">
<div class="form-controls">
      
    <div class="col-md-4"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-4"><?php $this->lstTeachDept->Render(); ?></div>
    <div class="col-md-2"><?php $this->btnGenerate->Render(); ?></div>
    <div class="col-md-2"><?php $this->btnViewCal->Render(); ?></div>
    <?php $this->pnlRight->Render(); ?>
    <div class="clearfix"></div>
   
    <div class="col-md-2" style="margin-bottom: 20px"> 
            <?php 
        for ($i=1; $i <= 12; $i++){ 
            if($i < 10) $i = "0".$i; //month needs 2 char
        ?>
        <p><?php $this->lblMonths[$i]->Render(); ?></p>
        <?php }  ?>
        <?php $this->btnCancel->Render(); ?>
        </div>
        <div class="col-md-2 " >
            
            <?php $this->lblCalander->Render(); ?>
             
        </div>
        <div class="clearfix"></div>
       
     <?php $this->objDefaultWaitIcon->Render(); ?>
    </div>
 <div class="form-controls" style="margin-top: 10px;">
    <?php    _t('Agenda');?>
   
        <?php $this->dtgEvent->Render(); ?>
    </div>
    </div>
 
     <div class="clearfix"></div>
   
<?php $this->RenderEnd(); ?>

<script src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/dialogjquery.js"></script>
<script src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/jquery.dialogBox.js"></script>
<script type="text/javascript" >
	function showdialog(id){  
            //alert('hello');
            //load external page or url dialogBox
            $('#iframe-dialogBox').dialogBox({
                    hasClose: true,
                    hasMask: true,                    
                    effect: 'flip-vertical',
                    title: ' ',            
                    content: './dept_year_events_edit.php/'+id,
                   
                   
            });
        }

	
</script>
                
            

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>

