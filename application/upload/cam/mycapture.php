<?php
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData = base64_decode($filteredData);
  if(isset($_GET['id'])) $fp = fopen('my'.$_GET['id'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
}
?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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

<div style="border: 1px #CCC solid; border-radius: 3px; float:left; padding: 5px; margin:2px;">
    <canvas id="canvas" height="130" width="100" style="   background-image: url(my<?php echo $_GET['id']; ?>.png)" ></canvas>
</div>

<div style="border: 1px #CCC solid; border-radius: 3px; float:left;margin:2px 0 2px 2px;">
    <video id="video" height="480" width="640" autoplay></video>
</div>
<div id="snap" style="float: left;" class="snap" ><img style=" margin-bottom:-3px; margin-right:5px;"src="snap.png" />Snap</div>

<script>
    // Put event listeners into place+
   /* window.addEventListener("DOMContentLoaded", function() {
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
            context.drawImage(video, 0, 0, 100, 130);
        });
        
        document.getElementById("snap").addEventListener("click", function() {
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var code = window.location.search.replace( "?id=", "" );
            ajax.open("POST",'capture.php?id='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
        
    }, false);       
    */
    
    
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            video.src = window.URL.createObjectURL(stream);
            video.play();
        });
    }
        // Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 100, 130);
});    


 document.getElementById("snap").addEventListener("click", function() {
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var code = <?php echo $_GET['id']; ?> //window.location.search.replace( "?id=", "" );
            ajax.open("POST",'mycapture.php?id='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
        
    
</script>

