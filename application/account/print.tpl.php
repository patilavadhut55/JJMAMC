    <?php require(__CONFIGURATION__ . '/header.inc.php'); ?>        
    <?php $this->RenderBegin() ?>
    <script language="javascript">
            function Clickheretoprint()
            {
              var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
                  disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
              var content_vlue = document.getElementById("formprint").innerHTML;

              var docprint=window.open("","",disp_setting);              
               docprint.document.open();
               docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/styles_blue.css");</style>');
               docprint.document.write(content_vlue);
               docprint.document.write('</body></html>');
               docprint.document.close();
              
            }
    </script> 
    <div class="form-controls" style="width: 100%;">
        <div class="pull-right" style="width: 90%; height: 5%; margin-bottom: 10px">
            <?php 
            if(isset($_GET['id'])){
                 $vov = Voucher::LoadByIdvoucher($_GET['id']);
             ?>
            <div class="pull-left" style="margin-right: 10px"><strong><h3><?php _p($vov->GrpObject->Name.' '.'Voucher')?></h3></strong></div>
            <div class="pull-right" style="margin-right: 10px"><?php $this->btnNew->Render();?></div>
        </div>
        
        <div class="pull-left" style="width: 10%; height: 5%; margin-bottom: 10px">
          <a href="javascript:Clickheretoprint()" style="position: absolute;float: left;">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
          </a>
        </div>
        <div style="clear: both"></div>
        <div style="clear: both"></div>
        <div id="formprint" style="width: 100%">
            <?php 
            if(isset($_GET['id'])){
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                $vhp = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                eval('?>'.str_replace('-->','>',str_replace('<!--','<',base64_decode($vov->GrpObject->PrintContent))).'<?php');        
            }        
            ?>  
        </div>
    </div>
    <?php  } ?>
    <?php $this->RenderEnd() ?>
<?php
    require(__CONFIGURATION__ .'/footer.inc.php');
?>