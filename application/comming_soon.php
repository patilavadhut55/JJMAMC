<?php
    require('../qcubed.inc.php');
    require(__CONFIGURATION__ . '/header.inc.php');
    
    if(isset($_GET['done']))
        $done = $_GET['done'];
    else 
        $done = 10;
?>

<style>
body{    
    background-image: url('<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/bg.jpg');
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: fixed;
    color: #FFF;
}
</style>

<div style="border-right: 1px dashed #FFF; 
             position: fixed; left: 10%; height: 100%"></div>
        
<header style="display: block; margin-top: 10%; width: 100%;
            font-family: sans-serif !important;
">
        <div class="pull-left"
             style="width: <?php _p($done); ?>%; border-bottom: 1px solid #FFF; line-height: 30px;
             margin-top: -1px;">
        </div>
        <span class="pull-left" style="line-height: 30px; margin: -15px 0 0 <?php _p($done); ?>%;
              "><?php _p($done); ?>%</span>
        <div class="pull-left" style="border-top: 1px dashed #FFF; 
             margin-left: 10px; width: <?php _p(95 - $done); ?>%;" ></div>      
        <div class="clear"></div>
        <div style="position: fixed; left: 12%; font-size: 38px; font-weight: 300;">
            <p>Something <strong>really good</strong> is</p> 
            <p>coming <strong>very soon</strong>.</p>
        </div>
</header>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>