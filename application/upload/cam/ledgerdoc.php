 <?php
require('../../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php 
$apps = AppDocs::LoadArrayByMember($_GET['emp']);
if($apps){
foreach ($apps as $app){}
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData=base64_decode($filteredData);
    if(!is_dir('../documents/A'.$app->MemberObject->IdloginObject->Code)){
        mkdir('../documents/A'.$app->MemberObject->IdloginObject->Code, 0777, true);
    }
  $fp = fopen('../documents/A'.$app->IdappDocs.'/'.$_GET['doc'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
}

?>

<?php
$msg = "";
// Check if image file is a actual image or fake image
 $target_file = "";
 $imageFileType = "";
 $target_dir = "";
if(isset($_POST["submit"])) {   
    if(isset($_GET['emp'])){
        $apps = AppDocs::LoadArrayByMember($_GET['emp']);       
        foreach ($apps as $app){}
        if(!is_dir('../documents/A'.$app->MemberObject->IdloginObject->Code)){
            mkdir('../documents/A'.$app->MemberObject->IdloginObject->Code, 0777, true);
        }
        $target_dir = "../documents/A".$app->MemberObject->IdloginObject->Code."/";
        //$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $target_file = $target_dir . $_GET['doc']. ".png" ; 
    }    

// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $msg = $msg. "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg = $msg. "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
/*if (file_exists($target_file)) {
    $msg = $msg. "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    $msg = $msg. "Sorry, your file is too large.";
    $uploadOk = 0;
}/*
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg = $msg."Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg = $msg. "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $msg = $msg. "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            if(isset($_SESSION['login'])){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/upload/cam/ledgerdoc.php?emp=".$_GET['emp'].'&doc='.$_GET['doc']);             
            }
    } else {
        $msg = $msg. "Sorry, there was an error uploading your file.";
    }
}

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
                //background-color: #356BA1;
            }
        </style>
    </head>
    <div class="form-controls" style="background-color: #356BA1;">
<?php if(isset($_GET['doc'])){ ?>
<div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:left; margin: 5px; width: 120px;">
<video id="video" height="99" autoplay style="-webkit-transform:rotate(-90deg); margin:14px -12px;"></video>
<button class="btn btn-success" id="snap"  style="width:110px; margin-top: 10px;">Scan</button>

    </div>
    <a href="empdelete.php?emp=<?php _p($_GET['emp']); ?>&doc=<?php _p($_GET['doc']); ?>"><div class="btn btn-success pull-right" >Delete</div></a>

    <input style="float: right;" class="btn btn-success" type="button" value="Reload" onClick="window.location.reload()">
    
<div style="padding: 5px; background-color: #FFF; border-radius: 5px;  float:right; margin-top: 50px; width: 335px;height: 120px;">
       
    <form action="ledgerdoc.php?emp=<?php if(isset($_GET['emp']) && isset($_GET['doc'])){ _p($_GET['emp']); ?>&doc=<?php  _p($_GET['doc']); }?>" method="post" enctype="multipart/form-data" style="">
        <div><?php if($msg) _p($msg .'path'.$target_file); ?></div>            
        Select image to upload: 
        <input style="color: #000;" class="btn " type="file" name="fileToUpload" id="fileToUpload" required>
        
        <input class="btn btn-success " style="" type="submit" value="Upload Image" name="submit">
       
    </form>   
</div>
<div style="clear: both"></div>

<h3 style="color: #FFF; border-bottom: 1px solid #FFF;">Scanning Preview</h3>
<canvas id="canvas" style="-webkit-transform:rotate(-90deg); margin: 80px 0px 0px -75px;
        background-image: url(../documents/A<?php _p($app->MemberObject->IdloginObject->Code.'/'.$_GET['doc'].'.png'); ?>)" 
    width="640" height="480" ></canvas>
<?php }else{ ?>
<div style="color: #FFF; margin: 20px; text-align: center; font-size: 20px; font-weight: bold;">Please Select One of the Document to Scan.</div>
<?php } ?>
  <div class="clearfix"></div>


</div>
    <div class="clearfix"></div>
</html>

<script>
    // Put event listeners into place
    /*var hdConstraints = {
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
            var id = window.location.search.replace( "?emp=", "" );
            
            ajax.open("POST",'ledgerdoc.php?emp='+emp,true);
            
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
        
    }, false);   */
    
    
    
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
	context.drawImage(video, 0, 0, 640,720);
});    


 document.getElementById("snap").addEventListener("click", function() {
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var code = window.location.search.replace( "?emp=", "" );
            ajax.open("POST",'ledgerdoc.php?emp='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
        
    
</script>
<?php if(isset($_GET['doc'])){ ?>
<script language="JScript">
    function Delete(){
        var myobject = new ActiveXObject("Scripting.FileSystemObject");
       myobject.DeleteFile("../documents/A<?php _p($app->IdappDocs."/".$_GET['doc'].".png"); ?>");
       
    }
</script>
<?php }} ?>
<div class="clearfix"></div>
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
