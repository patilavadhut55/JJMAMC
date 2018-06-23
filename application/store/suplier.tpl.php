<?php
    $strPageTitle = QApplication::Translate('Supplier Details');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php

if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
    $app = Ledger::LoadByIdledger($_GET['id']);
  if(!is_dir('../upload/documents/A'.$app->Code)){
                        mkdir('../upload/documents/A'.$app->Code, 0777, true);
                    }
                
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData=base64_decode($filteredData);
  $fp = fopen('../upload/documents/A'.$app->Code.'/'.$_GET['doc'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
}

?>

    <?php $this->RenderBegin() ?>

    <div >
        <h1> <?php _t('Supplier/Vendor Registration'); ?> </h1> 
    </div>

 <div class="tabbable-panel">
        <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 1 )|| !isset($_GET['tab']) ){ ?>active<?php } ?>">
                        <a href="suplier.php?tab=1<?php if(isset($_GET['id'])) _p("&id=".$_GET['id']); ?>"  id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Vender/Supplier Details')?>
                        </a>
                    </li>
                    <?php if(isset($_GET['id'])){?>
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 2 ) ){ ?>active<?php } ?>">
                        <a href="suplier.php?tab=2<?php if(isset($_GET['id'])) _p("&id=".$_GET['id']); ?>"  id="link2">
                            <i class="fa fa-certificate fa-fw"></i><?php _t('Business Details')?>
                        </a>
                    </li>
                    <li class="<?php if((isset($_GET['tab']) && $_GET['tab'] == 3 ) ){ ?>active<?php } ?>">
                        <a href="suplier.php?tab=3<?php if(isset($_GET['id'])) _p("&id=".$_GET['id']); ?>"  id="link3">
                            <i class="fa fa-certificate fa-fw"></i><?php _t('Document Attached')?>
                        </a>
                    </li>
                    <?php } ?>
                   
                </ul>
              <div class="tab-content">
                   <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 1 || !isset($_GET['tab'])){ ?>active<?php } ?>" id="1">
                        <div class="form-controls" >
                            <div class="col-md-6"><?php  $this->txtCode->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  //$this->calregdate->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtName->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->lstBussType->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtAddress->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->txtPincode->RenderWithName(); ?></div>
                            <div class="clearfix"></div>
                            
                            <div class="col-md-6"><?php  $this->lstCountry->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->lstState->RenderWithName(); ?></div>
                            <div class="clearfix"></div>
                            
                             <div class="col-md-6"><?php  $this->lstDist->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->lstTaluka->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtof->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->lstSupType->RenderWithName(); ?></div>
                            <div class="clearfix"></div>
                            
                            <div class="col-md-6"><?php  $this->txtstno->RenderWithName(); ?> </div>
                            <div class="col-md-6"><?php  $this->txtvatno->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtgstno->RenderWithName(); ?></div>
                            <div class="col-md-6"> <?php  $this->txttanno->RenderWithName(); ?> </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtbnknm->RenderWithName(); ?></div>
                            <div class="col-md-6"> <?php  $this->txtaccno->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtbranch->RenderWithName(); ?></div>
                            <div class="col-md-6"> </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtifsc->RenderWithName(); ?></div>
                            <div class="col-md-6"> <?php  $this->txtpanno->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtadharno->RenderWithName(); ?></div>
                            <div class="col-md-6"> <?php  $this->txtregfee->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtshopactlic->RenderWithName(); ?></div>
                            <div class="col-md-6"> <?php  $this->calshopregDate->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtturnover->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->lstSupCat->RenderWithName(); ?></div>
                            <div class="clearfix"></div>
                            
                            <div class="col-md-6"><?php  $this->txtPhone1->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  //$this->txtPhone2->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtContact1->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->txtContact2->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="col-md-6"><?php  $this->txtEmail->RenderWithName(); ?></div>
                            <div class="col-md-6"><?php  $this->txtEmail1->RenderWithName(); ?></div>
                            <div class="clearfix"></div>

                            <div class="form-actions">
                                       <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                                      <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                                      <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                                      <div style="clear: both"></div>
                            </div>
                              <div style="clear: both"></div>
                        </div>
                      
                   </div>
                  <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 2 || !isset($_GET['tab'])){ ?>active<?php } ?>" id="2">
                  
                  </div>
                  <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 3 ){ ?>active<?php } ?>" id="3">
                      <div class="form-controls">
                         <?php if(isset($_GET['id'])){
                                $apps = Ledger::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Ledger()->Idledger, $_GET['id'])
                                            )
                                        );
                                if($apps){
                                foreach ($apps as $app){}
                        ?>
                    <div class="col-sm-12">                               
                    <?php 
                        $scancode = Settings::LoadByName("Scan");
                        $appdocs = MemberDoc::LoadArrayByMember($_GET['id']);
                        if($appdocs){
                        foreach ($appdocs as $appdoc){
                    ?>
                    <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                        <div class="col-sm-6" style="padding-top:10px;">
                            <?php $this->lbldelete[$appdoc->IdmemberDoc]->Render();?>    
                            <?php _p($appdoc->Document); ?>
                        </div>
                        <div class="col-sm-6">
                            <?php if($appdoc->Scans != NULL){ ?>
                                    <div style="float:left;">
                                        <?php  
                                        $sr = 1 ; $scans = explode(",", $appdoc->Scans); 
                                        if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
                                        $css = 0;
                                        $img = '../upload/documents/A'.$appdoc->MemberObject->Code.'/'.(int)$scan.'.png'; 
                                        if(file_exists ($img)){
                                        ?>
                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/suplier.php?id=<?php _p($appdoc->Member); ?>&doc=<?php _p($scan); ?>&flg=1&tab=2" ><div class="btn btn-success"><?php _p($sr++);   ?></div></a>
                                        <?php }else{ ?>
                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/suplier.php?id=<?php _p($appdoc->Member); ?>&doc=<?php _p($scan); ?>&flg=1&tab=2" ><div class="btn btn-default"><?php _p($sr++);   ?></div></a>
                                        <?php } ?>  
                                        
                                        <?php } }  ?>
                                    </div>
                                <?php } ?>    
                            &nbsp;
                                <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/suplier.php?id=<?php _p($_GET['id']); ?>&docid=<?php if($appdoc) _p($appdoc->IdmemberDoc); ?>&code=<?php _p($scancode->Option);?>&doc=<?php _p($scancode->Option);?>&tab=2">
                                    <div class="btn btn-success">Add Doc</div>
                                </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        <?php }} ?>  
                    <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                        <div class="col-sm-8"><?php $this->txtDocs->Render(); ?></div>
                        <div class="col-sm-2"><?php $this->btnAdd->Render(); ?></div>    
                        <div class="clearfix"></div>
                    </div>
                     
                     <div style="background-color:#205081">
                                          <?php if(isset($_GET['doc'])){ ?>

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
                                    <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
                                             background-image: url(../upload/documents/A<?php _p($app->Code.'/'.$_GET['doc'].'.png'); ?>);
                                            background-repeat: no-repeat;background-size: 100%;width: 650px;"

                                         height="900" ></canvas>
                                    <?php }else{ ?>
                                    <div style="color: #FFF; margin: 20px; text-align: center; font-size: 20px; font-weight: bold;">Please Select One of the Document to Scan.</div>
                                    <?php } ?>


                                    </div>
                         <div class="clearfix"></div>
        
                    </div>    
                                <?php }} ?>
                    <div class="clearfix"></div>
                    </div>
         
                      </div>
                  </div>
              </div>
        </div>
      <div style="clear: both"></div>
 </div>
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
            ajax.open("POST",'suplier.php?id='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
</script>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>