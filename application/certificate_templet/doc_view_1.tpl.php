<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>

<?php $this->RenderBegin(); ?>
<h1><?php _t('Issue Document') ?></h1>

<div class="pull-right" style="margin-bottom: 10px;">
    <div><?php $this->btnconfirm->Render(); ?></div>         
    <div><?php $this->btnSave->Render(); ?></div>     
    <div style="z-index: 8000; "><?php $this->dlgYesNo->Render(); ?></div>
</div>
 
<div class="form-controls" >
    <div style=" height: 650px; overflow: auto;">
        <?php if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
        ?>
        <div style="background-color: #FFF; width: 100%; height: 500px; font-family:'Times New Roman';  " >    
        <?php eval('?>'.str_replace('-->','>',str_replace('<!--','<',base64_decode($app->AppliedForObject->CertificateHtml))).'<?php'); ?>       
        </div>
       

        <?php } ?>
    </div>
    <div style="clear: both;"></div>
    
</div>
<?php $this->RenderEnd() ?>
<?php // require(__CONFIGURATION__ .'/footer.inc.php');?>