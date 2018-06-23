<?php require('../../qcubed.inc.php'); ?>
<?php 
    $app = Application::LoadByIdapplication($_GET['id']);
   
?>
<title><?php _p($app->Code); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>

<?php if(!isset($_GET['view'])){ ?>
<body onLoad="window.print();  self.location='<?php if($_GET['print'] == 2){ ?>application.php?id=<?php _p($_GET['id']); ?>&tab=1<?php }else{ ?>application.php'<?php }?> ;"  style="background: none repeat scroll 0 0 #fff;">
<?php } ?>
    

<?php  if($_GET['print'] == 2){ ?>
    <div style="background-color: #FFF; width: 100%; height: 1100px; font-family:'Times New Roman'; ">    
    <?php eval('?>'.str_replace('-->','>',str_replace('<!--','<',base64_decode($app->AppliedForObject->CertificateHtml))).'<?php'); ?>       
    </div>
<?php }else{ ?>
<div style="background-color: #FFF; width: 100%; height: 300px; font-family:'Times New Roman'; font-size: 12px;">    
    <?php eval('?>'.str_replace('-->','>',str_replace('<!--','<',base64_decode($app->AppliedForObject->TokenHtml))).'<?php'); ?>       
</div>
    <?php } ?>  
    
</body>