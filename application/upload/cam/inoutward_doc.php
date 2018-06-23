 <?php
require('../../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');
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
$msg = "";
// Check if image file is a actual image or fake image
 $target_file = "";
 $imageFileType = "";
 $target_dir = "";
if(isset($_POST["submit"])) {
    if(isset($_GET['id'])){
            $apps = MemberDoc::LoadArrayByInOut($_GET['id']);
            foreach ($apps as $app){
                if(!is_dir('../documents/inoutward/A'.$app->IdmemberDoc)){
                    mkdir('../documents/inoutward/A'.$app->IdmemberDoc, 0777, true);                    
                }
                
                $uploadOk = 1;
                $files = glob('../documents/inoutward/A' . $app->IdmemberDoc . "/".$_GET['doc'].".*");
                foreach($files as $file){
                    if(file_exists($file)){
                        unlink($file);
                    }
                }
            }
            
            $target_dir = "../documents/inoutward/A".$app->IdmemberDoc."/";
            $file_ext = strtolower(end(explode('.',$_FILES["fileToUpload"]["name"])));
            if($file_ext == 'png' || $file_ext == 'jpg' || $file_ext == 'gif' || $file_ext == 'jpeg'){
                $target_file = $target_dir . $_GET['doc']. ".png" ; 
            }else{
                $target_file = $target_dir . $_GET['doc'].'.'.$file_ext ; 
            }
            
            
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            
    }  
    


// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    $msg = $msg. "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg = $msg. "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $msg = $msg. "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       // $app = MemberDoc::LoadArrayByInOut($_GET['id']); 
           $apps = MemberDoc::LoadArrayByInOut($_GET['id']);
                foreach ($apps as $app){}
        if(isset($_SESSION['login'])){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/upload/cam/inoutward_doc.php?id=".$_GET['id'].'&doc='.$_GET['doc']);
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
                
            }
        </style>
    </head>
<h1>Document Scan / Upload</h1>
<div class="form-controls" style="background-color: #356BA1;">
    
<?php if(isset($_GET['doc'])){ ?>
    <div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:left; margin: 5px; width: 130px;">
        <video id="video" height="99" width="100"  autoplay style="-webkit-transform:rotate(0deg); margin:14px 12px;"></video>
        <button class="btn btn-success" id="snap"  style="width:110px; margin-top: 10px;">Scan</button>
    </div>
    

    <input style="float: right;" class="btn btn-success" type="button" value="Reload" onClick="window.location.reload()">
    
<div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:right; margin-top: 50px; width: 335px;height: 120px;">    
    <div style="border: none;width: 330px;height: 110px;" >
        <div style="padding: 5px;  border-radius: 5px; background-color: #FFF;" >  
            
        <form action="inoutward_doc.php?id=<?php if(isset($_GET['id']) && isset($_GET['doc'])){ _p($_GET['id']); ?>&doc=<?php  _p($_GET['doc']); }?>" method="post" enctype="multipart/form-data" style="">
            <div><?php if($msg) _p($msg .'path'.$target_file); ?></div>            
            Select image to upload: 
           <input style="color: #000;" class="btn " type="file" name="fileToUpload" id="fileToUpload" required>
          <input class="btn btn-success " style="" type="submit" value="Upload Image" name="submit">
        </form>
            
        </div>
    </div>    
</div>
<div style="clear: both"></div>

<h3 style="color: #FFF; border-bottom: 1px solid #FFF;">Scanning Preview</h3>
                                        
<?php
    $fileexist = 0;
    foreach ($apps as $app){
    $files = glob('../documents/inoutward/A' . $app->IdmemberDoc . "/*.*");
    if(count($files) != 0 ) {
    
    for ($i = 0; $i < count($files); $i++) {
        $path_info = pathinfo($files[$i]);
        if ($_GET['doc'] == $path_info['filename']) {
            $fileexist = 1;
            if ($path_info['extension'] == 'jpg' || $path_info['extension'] == 'png' || $path_info['extension'] == 'jpeg') {
?>


<canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
        background-image: url(<?php _p($files[$i]); ?>);
        background-repeat: no-repeat; background-size: 80%; width: 720px;" height="500" >
</canvas>
<?php } else { ?>

<div style="width: 500px; height: 100px; background: #FFF; margin: 80px 0px 15px 15px; font-weight: bold; font-size: 24px; text-align: center;">
    <a href="<?php _p($files[$i]); ?>" target="_blank">View <?php _p($path_info['extension']); ?>  File </a>
</div>

<?php }}}
//if image not exist then display canvas

?>

<?php }else{ ?>

<?php } 
    }
 if($fileexist == 0){   
?>
<canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 30px 0px 0px 15px;border:1px solid lightgray;
background-repeat: no-repeat;" width="640" height="480" >
</canvas>

<?php }}else{ ?>
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