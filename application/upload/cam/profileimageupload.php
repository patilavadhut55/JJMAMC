<!DOCTYPE html>
<?php
require('../../../qcubed.inc.php');
$msg = "";
// Check if image file is a actual image or fake image
 $target_file = "";
 $imageFileType = "";
 $target_dir = "";
if(isset($_POST["submit"])) {   
    if(isset($_GET['id'])){
        $app = Ledger::LoadByCode($_GET['id']);
        $target_dir = "../ledgers/";
                //$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $target_file = $target_dir . $_GET['id']. ".png" ; 
    }    

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $msg = $msg. "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg = $msg. "File is not an image.";
        $uploadOk = 0;
    }
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
        //QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/product/item_edit.php?id=".$app->Idledger);
    } else {
        $msg = $msg. "Sorry, there was an error uploading your file.";
    }
}

}
?>

<html>
    <head>
        <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
    </head>
    
    <body style="background-color: #FFF;" class="iframe">
        <div style="padding: 5px;  border-radius: 5px; background-color: #FFF;" >                
        <form action="profileimageupload.php?id=<?php if(isset($_GET['id'])){ _p($_GET['id']);} ?>" method="post" enctype="multipart/form-data" style="">
            <div style="float: left;width: 70%;">
                <div><?php if($msg) _p($msg .'path'.$target_file); ?></div>            
                Select image to upload: 
                <input style="color: #000;" class="btn " type="file" name="fileToUpload" id="fileToUpload" required>
                <input class="btn btn-success " style="" type="submit" value="Upload Image" name="submit">    
            </div>
            <div style="float: left;width: 28%;">
            <?php 
                $app = Ledger::LoadByCode($_GET['id']);
                $url = "";
                if(file_exists("../ledgers/".$_GET['id'].".png"))
                    $url = "../ledgers/".$_GET['id'].".png";
                else
                    $url = __VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__."/product.png";
            ?>    
            <img src="<?php _p($url);?>" style="float: right;height: 100px;width: 100px;"/>
            </div>
        </form>    
    </div>
    
</body>
</html>