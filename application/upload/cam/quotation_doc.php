 <?php
require('../../../qcubed.inc.php');

$app = Voucher::LoadByIdvoucher($_GET['id']);

if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData=base64_decode($filteredData);
  $fp = fopen('../documents/quotation/A'.$app->InvNo.'/'.$_GET['doc'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
  
   
  
}

?>
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
        
        
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
        <!-- SlidePanel Css -->
	<link rel="stylesheet" href="<?php _p(__sidebar__); ?>/css/simple-sidebar.css" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php _p(__table__); ?>/dist/bootstrap-table.min.css">
        
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script> 
	<script src="script.js"></script>
        <style>
            body{
                background-color: #356BA1;
            }
        </style>
    </head>

<?php if(isset($_GET['doc'])){ ?>
    <div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:left; margin: 5px; width: 130px;">
        <video id="video" height="99" width="100"  autoplay style="-webkit-transform:rotate(0deg); margin:14px 12px;"></video>
        <button class="btn btn-success" id="snap"  style="width:110px; margin-top: 10px;">Scan</button>
    </div>
    

    <input style="float: right;" class="btn btn-success" type="button" value="Reload" onClick="window.location.reload()">
    
<div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:right; margin-top: 50px; width: 335px;height: 120px;">
    <?php if(isset($_GET['flg'])){?>
    <iframe src="../quotation_doc_upload.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($_GET['doc']); ?>&flg=1" class="iframe12" style="border: none;width: 330px;height: 110px;" ></iframe>
    <?php }else{?>
    <iframe src="../quotation_doc_upload.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($_GET['doc']); ?>" class="iframe12" style="border: none;width: 330px;height: 110px;" ></iframe>
    <?php } ?>
</div>
<div style="clear: both"></div>

<h3 style="color: #FFF; border-bottom: 1px solid #FFF;">Scanning Preview</h3>
<canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
        background-image: url(../documents/quotation/A<?php _p($app->InvNo.'/'.$_GET['doc'].'.png'); ?>);
        background-repeat: no-repeat;background-size: 100%;width: 650px;"
        
     height="900" ></canvas>
<?php }else{ ?>
<div style="color: #FFF; margin: 20px; text-align: center; font-size: 20px; font-weight: bold;">Please Select One of the Document to Scan.</div>
<?php } ?>
</div>
</html>

<script>
    // Put event listeners into place
    var hdConstraints = {
    video: {
        mandatory: {
        minWidth: 720,
        minHeight: 480
        }
    }
    };
    
    window.addEventListener("DOMContentLoaded", function() {
        // Grab elements, create settings, etc.
        var canvas = document.getElementById("canvas"),         
        context = canvas.getContext("2d"),
        video = document.getElementById("video"),
        videoObj = { "video": true },
        errBack = function(error) {
        console.log("Video capture error: ", error.code); 
        };

        // Put video listeners into place
        if(navigator.getUserMedia) { // Standard
            navigator.getUserMedia(videoObj, function(stream) {
                video.src = stream;
                video.play();
            }, errBack);
        } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
            navigator.webkitGetUserMedia(videoObj, function(stream){
                video.src = window.webkitURL.createObjectURL(stream);
                video.play();
            }, errBack);
        }

        // Trigger photo take
        document.getElementById("snap").addEventListener("click", function() {
            context.drawImage(video, 0, 0);
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var id = window.location.search.replace( "?id=", "" );
            
            ajax.open("POST",'quotation_doc.php?id='+id,true);
            
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
        
    }, false);    
    
</script>
<?php if(isset($_GET['doc'])){ ?>
<script language="JScript">
    function Delete(){
        var myobject = new ActiveXObject("Scripting.FileSystemObject");
       myobject.DeleteFile("../documents/quotation/A<?php _p($app->InvNo."/".$_GET['doc'].".png"); ?>");
       
    }
</script>
<?php } ?>
<script>
var imageLoader = document.getElementById('imageLoader');
    imageLoader.addEventListener('change', handleImage, false);
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

function handleImage(e){
    var reader = new FileReader();
    reader.onload = function(event){
        var img = new Image();
        img.onload = function(){
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img,0,0);
        }
        img.src = event.target.result;
    }
    reader.readAsDataURL(e.target.files[0]);     
}
</script>