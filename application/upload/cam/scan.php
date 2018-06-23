<?php
require('../../../qcubed.inc.php');

$app = Application::LoadByIdapplication($_GET['id']);

if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData=base64_decode($filteredData);
  $fp = fopen('D:/xampp/htdocs/syon2.0/application/upload/documents/A'.$app->Code.'/'.$_GET['doc'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
}

?>
<style type="text/css">
    .snap {
        font-family:Calibri;
        width: 80;
        padding: 5px;
        border-radius: 3px;
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
 }
 .snap:hover{
     background-color: #ec971f;
border-color: #d58512;

 }
</style>

<?php if(isset($_GET['doc'])){ ?>
<div style="border: 1px #CCC solid; border-radius: 3px; float:left; padding: 5px; margin:2px;">

<canvas id="canvas" height="86" width="86" style="
        background-image: url(../documents/A<?php _p($app->Code.'/'.$_GET['doc'].'.png'); ?>)" 
    width="86" height="86" ></canvas>
</div>

<div style="border: 1px #CCC solid; border-radius: 3px; float:left; padding: 5px; margin:2px 0 2px 2px;">
    <video id="video" width="75" autoplay></video>
</div>
    
<div id="snap" style="float: left;" class="snap" ><img style=" margin-bottom:-3px; margin-right:5px;"src="snap.png" />Snap</div>

<?php }else{ ?>
<div style="color: #FFF; margin: 20px; text-align: center; font-size: 20px; font-weight: bold;">Please Select One of the Document to Scan.</div>
<?php } ?>
</html>

<script>
    // Put event listeners into place
    var hdConstraints = {
    video: {
        mandatory: {
        minWidth: 86,
        minHeight: 86
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
            context.drawImage(video, 0, 0, 86, 86);
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var id = window.location.search.replace( "?id=", "" );
            
            ajax.open("POST",'scanall.php?id='+id,true);
            
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
        
    }, false);                 
</script>
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