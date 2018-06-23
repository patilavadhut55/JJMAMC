 <?php

    require(__CONFIGURATION__ . '/header.inc.php');
    ?>
<?php

if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
    $app = Voucher::LoadByIdvoucher($_GET['id']);
     if(!is_dir('../upload/documents/quotation/A'.$app->InvNo)){
        mkdir('../upload/documents/quotation/A'.$app->InvNo, 0777, true);
    }
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData=base64_decode($filteredData);
  $fp = fopen('../upload/documents/quotation/A'.$app->InvNo.'/'.$_GET['doc'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
  
   
}


?>
    <?php $this->RenderBegin() ?>

    <h1><?php 
        if(isset($_GET['id'])){
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            $req = Voucher::LoadByIdvoucher($vov->RefNo);
        if($req)_t($req->Narration .'   Quotation'); }?>
    </h1>

<div class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                   
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 1 )|| !isset($_GET['tab']) ){ ?>active<?php } ?>"id="1">
                        <a href="quotation.php?tab=1<?php if(isset($_GET['id'])){ ?>&id=<?php _p($_GET['id']); } ?>" aria-expanded="true" id="link1 ">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Quotation')?>
                        </a>                         
                    </li>
                    <?php if(isset($_GET['id'])){?>
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 2 ) ){ ?>active<?php } ?>">
                        <a href="quotation.php?tab=2<?php if(isset($_GET['id'])) _p("&id=".$_GET['id']); ?>"  id="link2">
                            <i class="fa fa-certificate fa-fw"></i><?php _t('Document Attached')?>
                        </a>
                    </li>
                    <?php } ?>
                   
                </ul>
                <div class="tab-content">
                    <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 1 || !isset($_GET['tab'])) { ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <table width="95%" style="margin-left: 15px;">
                                <tr>
                                    <td width="394" align="right" colspan="3"><?php $this->calDate->Render(); ?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td width="396" height="30" colspan="3"><?php $this->txtInvNo->RenderWithName(); ?></td>
                                </tr>
                                <tr>
                                    <td height="29" colspan="3"><?php $this->txtNarration->RenderWithName(); ?></td>
                                </tr>
                                <tr>
                                    <td height="29" colspan="3"><?php $this->txtfrom->RenderWithName(); ?></td>
                                </tr>
                                
                                <tr>
                                    <td colspan="3" ><?php $this->dtgvhp->Render(); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div>
                                            <div style="float: left; margin-right: 5px;"><strong>Tax on Total Amount  </strong></div>
                                            <div style="float: left; margin-right: 35px;"><?php $this->chktaxontotal->Render(); ?></div>
                                            <?php if((isset($_GET['flag']) && $_GET['flag'] == 1) || $this->chktaxontotal->Checked == TRUE){ ?>
                                            <div style="float: left; margin-right: 5px;"><strong>Tax (%) </strong></div>
                                            <div style="float: left; margin-right: 35px;"><?php $this->txtTaxOn->Render(); ?></div>
                                             <?php } ?>
                                            <div style="float: left; margin-right: 5px;"><strong>Total Discount  </strong></div>
                                            <div style="float: left; margin-right: 35px;"><?php $this->lbltotaldisc->Render(); ?></div>
                                            <div style="float: left; margin-right: 5px;"><strong>Total Tax  </strong></div>
                                            <div style="float: left; margin-right: 35px;"><?php $this->lbltotaltax->Render(); ?></div>
                                            <div style="float: left; margin-right: 5px;"><strong>Total  </strong></div>
                                            <div style="float: left;"><?php $this->lbltotal->Render(); ?></div>
                                           
                                        </div>
                                    
                                    </td>
                                </tr>
                              
                            </table>
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                                <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>                            
                                <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                                <div class="form-cancel"><?php $this->btnPO->Render(); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 2) { ?>active<?php } ?>" id="2">
                        <div class="form-controls">
                            <?php if (isset($_GET['id'])){
                                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                            ?>
                            <a href="quotation_list.php?req=<?php _p($vov->RefNo); ?>">
                                <div class="btn btn-warning slideup" style="float: right;"><i class="fa fa-arrow-circle-o-left"></i> Back</div>    
                            </a>
                            <div class="col-sm-12">                               
                                <?php
                                
                                    $scancode = Settings::LoadByName("Scan");
                                    $appdocs = Voucher::QueryArray(
                                                    QQ::AndCondition(
                                                            QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id'])
                                                    )
                                    );
                                    if ($appdocs) {
                                        foreach ($appdocs as $appdoc) {
                                            ?>
                                            <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                                                <div class="col-sm-12">
                                                    <?php if ($appdoc->Scans != NULL) { ?>
                                                        <div style="float:left;">
                                                            <?php
                                                            $sr = 1;
                                                            $scans = explode(",", $appdoc->Scans);
                                                            if (key_exists(0, $scans)) {
                                                                foreach ($scans as $scan) {
                                                                    ?> <?php
                                                                    $css = 0;
                                                                    $img = '../upload/documents/quotation/A' . $appdoc->InvNo . '/' . (int) $scan . '.png';
                                                                    if (file_exists($img)) {
                                                                        ?>
                                                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/store/quotation.php?id=<?php _p($appdoc->Idvoucher); ?>&doc=<?php _p($scan); ?>&flg=1&tab=2" ><div class="btn btn-success"><?php _p($sr++); ?></div></a>
                                                                    <?php } else { ?>
                                                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/store/quotation.php?id=<?php _p($appdoc->Idvoucher); ?>&doc=<?php _p($scan); ?>&flg=1&tab=2"><div class="btn btn-default"><?php _p($sr++); ?></div></a>
                                                                    <?php } ?>  

                                                            <?php }
                                                        } ?>
                                                        </div>
                                                    <?php } ?>    
                                                    &nbsp;
            
                                                <?php $this->btnAddDoc->Render(); ?>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <?php }} ?>  
                                    <div style="background-color:#205081">
                                            

                                            <div style=" border-radius: 5px; float:left; padding: 5px; margin:5px; width: 130px;  background-color: #FFF;">
                                                <video id="video"  height="99" width="100"  autoplay style="-webkit-transform:rotate(0deg); margin:14px 12px;"></video>
                                                <div class="btn btn-success" id="snap" style="width:110px; margin-top: 10px;" >Scan</div>
                                            </div>

                                            <input style="float: right;" class="btn btn-success" type="button" value="Reload" onClick="window.location.reload()">

                                            <div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:right; margin-top: 50px; width: 335px;height: 120px;">

                                                <div style="padding: 5px;  border-radius: 5px; background-color: #FFF;" >  
                                                    Select image to upload: 
                                                    <input style="color: #000;" class="btn " type="file" name="imgupload" id="imgupload" required>
                                                    <?php $this->btnUpload->Render(); ?>

                                                </div>


                                            </div>
                                            <div style="clear: both"></div>

                                            <h3 style="color: #FFF; border-bottom: 1px solid #FFF;">Scanning Preview</h3>
                                            <?php 
                                                
                                            $imgpath = '';
                                            if (isset($_GET['doc'])){ 
                                                $imgpath = '../upload/documents/quotation/A'.$appdoc->InvNo . '/' . $_GET['doc'] . '.png'; 
                                            } else { 
                                                $scans = explode(",", $appdoc->Scans);
                                                    if (key_exists(0, $scans)){
                                                        foreach ($scans as $scan){
                                                            $imgpath = '../upload/documents/quotation/A'.$appdoc->InvNo . '/' .(int)$scan . '.png'; 
                                                        }
                                                    }   
                                            }
                                                
                                            ?>
                                            <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
                                                    background-image: url(<?php _p($imgpath); ?>);
                                                    background-repeat: no-repeat;background-size: 100%;width: 650px;"

                                                    height="900" >
                                            </canvas>
                                            
                                    </div>
                                    <div class="clearfix"></div>
                                </div>    
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
              </div>
        </div>
      <div style="clear: both"></div>

    <?php $this->RenderEnd() ?>
      <script>
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 720);
});    
   
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            video.src = window.URL.createObjectURL(stream);
            video.play();
        });
    }

 document.getElementById("snap").addEventListener("click", function() {
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var code = window.location.search.replace( "?id=", "" );
            //alert(code);
            ajax.open("POST",'quotation.php?id='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
</script>

    <?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>