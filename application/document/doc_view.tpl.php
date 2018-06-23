<?php //require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
<h1><?php //_t('Document') ?></h1>
<script language="javascript">
        function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formPrint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
    }
</script>
        
        <body onload="window.print(); document.location.href = '<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/document/issue_document.php';" >
        <style>
            @page{
                size: auto;
                margin: 0mm;
            }
            @media print{
                #header, #footer { display: none !important;}
            }
        </style>
<div class="form-controls" >
    <div style=" margin-bottom: 10px; width: 100%; height: 70%;" id="formPrint">
        <?php if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            
        ?>
       
        <div style="clear: both"></div>
        
       
            <div style="background-color: #FFF; width: 100%; height: 500px; font-family:'Times New Roman';  " >    
            <?php eval('?>'.str_replace('-->','>',str_replace('<!--','<',base64_decode($app->AppliedForObject->CertificateHtml))).'<?php'); ?>       
            </div>

        <?php } ?>
    </div>
</div>
<?php $this->RenderEnd() ?>
<?php// require(__CONFIGURATION__ .'/footer.inc.php');?>