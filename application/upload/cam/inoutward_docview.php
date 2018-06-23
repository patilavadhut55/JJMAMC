 <?php
require('../../../qcubed.inc.php');

$apps = MemberDoc::LoadArrayByInOut($_GET['id']);
if($apps){
foreach ($apps as $app){}
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData=base64_decode($filteredData);
  $fp = fopen('../documents/inoutward/A'.$app->IdmemberDoc.'/'.$_GET['doc'].'.png', 'wb' );
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
        

<?php if(isset($_GET['doc'])){ ?>
    

 
<div style="clear: both"></div>


<canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
        background-image: url(../documents/inoutward/A<?php _p($app->IdmemberDoc.'/'.$_GET['doc'].'.png'); ?>);
        background-repeat: no-repeat;background-size: 100%;width: 650px;"
        
     height="900" ></canvas>
<?php }?>
</div>


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
            
            ajax.open("POST",'inoutward_doc.php?id='+id,true);
            
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
       myobject.DeleteFile("../documents/inoutward/A<?php _p($app->IdmemberDoc."/".$_GET['doc'].".png"); ?>");
       
    }
</script>
<?php }} ?>
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