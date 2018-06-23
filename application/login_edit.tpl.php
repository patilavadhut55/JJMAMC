<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php _p(QApplication::$EncodingType); ?>" />
    <title>Login</title>
	
    <link rel="stylesheet" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css" >
    <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__) ; ?>/animate.min.css">
    <script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
<style>
    body {	
	min-width: 0;
	font: 14px sans-serif;
	color: #777;
	font-size: 14px;
        background: url(../assets/_core/images/bg.jpg) repeat;
}

#head{
    color: #FFF;
  background: url(../assets/_core/images/shade.png) 50% 100px no-repeat scroll transparent;
  height:126px;
  overflow:hidden;
  width:100%;
  text-align: center;
  font-size: 34px;
  margin-top: 20px;
}

input.textbox {
	color: #555;
	font-weight: 200;
	font-size: 24px;
	line-height: 1;
	width: 100%;
	padding: 3px;
	margin-top: 2px;
	margin-right: 6px;
	margin-bottom: 16px;
	border: 1px solid #E5E5E5;
	background: #FBFBFB;
	outline: 0;
	border-radius: 4px;
	-webkit-box-shadow: inset 1px 1px 2px 
	rgba(200, 200, 200, 0.2);
	box-shadow: inset 1px 1px 2px 
	rgba(200, 200, 200, 0.2);
}

input.textbox:focus {
	border: 1px solid #BFBFBF;
}
#login {
	width: 900px;
	margin: auto;
}

#login_form {
	float:right;
	margin: -25px 0 0 0px;
	border-radius: 0 0 5px 5px;
	padding: 10px;
        font-size: 18px;
	font-weight: normal;        
	/*background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(234,249,69,0.18)), color-stop(1%,rgba(232,248,69,0.18)), color-stop(11%,rgba(217,240,71,0.96)), color-stop(47%,rgba(161,213,79,0.98)), color-stop(51%,rgba(34,198,25,0.98)), color-stop(100%,rgba(12,211,102,1))); /* Chrome,Safari4+ */
}
.button {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.button:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.button:active {
	position:relative;
	top:1px;
}


</style>

<body>
    <?php
        $collages = Role::LoadArrayByGrp(1);
        foreach($collages as $collage){}
    
    ?>
<div id='head'>
    <div style="font-size: 20px; "><?php _p($collage->Description); ?></div>    
    <?php _p($collage->Name); ?>
</div>
            
<?php $this->RenderBegin(); ?>
<div id='login'>
<div class="container">
	<div id="content-slider"></div>
</div>
<div class="panel panel-default " id='login_form'>       
        <div class="text-center" style="margin-bottom: 0px;">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo.png" width="125" height="175" />
        </div>
        <?php $this->iALabel->Render(); ?></td>
    
        <div class="panel-body">
        <table width="250" style="line-height: 30px;">
            <tr>
                <td>
<!--                    User Name<br/>-->
                     <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>    
                        <?php $this->txtUser->Render(); ?>
                        </div>
                     </div>
                </td>
            </tr>
            <tr>
                <td><!--Password<br/>-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                            <?php $this->txtPassword->Render(); ?>                            
                        </div>
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td align="right">
                    
                    <div style="border-bottom: 1px solid #EEE; margin: 0 0px 10px 0px;"></div>  
                    <?php $this->btnLogin->Render(); ?> </td>
            </tr>
        </table>
        
       </div>
</div>
</div>
<?php $this->RenderEnd(); ?>