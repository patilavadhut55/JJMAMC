<?php
    // This example header.inc.php is intended to be modfied for your application.
    $app = Settings::LoadByIdsettings(1);
    if(!isset($_SESSION['login'])){
        if(!isset($_GET['out'])){
            $url = $_SERVER['REQUEST_URI'];
            $url = get_string_between($url, __FORM_APPLICATION__, ".php");
            if($url != "/login_edit"){
                QApplication::Redirect("../application/login_edit.php");        
            }
        }
    }

    function color($get){
        if($get > 5){
            $y = 1;
            for($i = 1; $i <= $get; $i++){
                if($y <= 5) $y++;
                else $y = 1;
            }
            $get = $y;
        }

        if($get == 1) $color = "orange";
        if($get == 2) $color = "blue";
        if($get == 3) $color = "green";
        if($get == 4) $color = "purple";
        if($get == 5) $color = "gold";

        if(!isset($color)) $color = "orange";
        return $color;
    }

    if(isset($_GET['r'])){ //change role session
        $get_permission = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'], $_GET['r']);

        if($get_permission)
            $_SESSION['role'] = $_GET['r'];
        else
            QApplication::DisplayAlert ("You Don't have Access on this Role..!");
    }

    function get_masters($Refer, $url){ //get masters
    $sr = 1;
    if($Refer == 'projects'){ //to load all projects and create array
        $LoginRols = LoginHasRole::LoadArrayByLoginIdlogin($_SESSION['login']);
        if($LoginRols) foreach ($LoginRols as $LoginRol){
            $names[$sr] = $LoginRol->RoleIdroleObject->Name; //put name
            $param[$sr] = '?filter='.$LoginRol->RoleIdrole; //put url
            $sr++;
        }else{
            $names[$sr] = "Not defined yet"; //no name
            $param[$sr] = '?filter=#'; //no url
        }
    }
    $sr = 1;
    foreach ($names as $key => $name){ //print submenus
    ?>
    <li class="<?php _p(color($sr++)); ?>_left">
        <a href="<?php _p(__FORM_APPLICATION__.$url.$param[$key]); ?>">
            <?php _p($name); ?></a>
    </li>
    <?php } ?>
<?php } 
?>
    
<!DOCTYPE html>
<html>
    <head>
	<meta charset="<?php _p(QApplication::$EncodingType); ?>" />
	<?php if (isset($strPageTitle)) { ?>
		<title><?php _p($strPageTitle); ?></title>
	<?php }else{ ?>
                <title><?php _p($app->Option); ?></title>
	<?php } ?> 
	<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css" rel="stylesheet" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/logo.ico">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__) ; ?>/animate.min.css">
        <script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.min.js"></script>
    
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">

        <style>
            .jumbotron {
              margin-bottom: 0;
            }

            .dropbtn {
            border: none;
            cursor: pointer;
            }

            .dropdown {
            position: relative !important;
            display: inline-block;
            }

            .dropdown-content {
            z-index: 100;
            display: none;
            position: absolute !important;

            background-color: #fff;
            border-radius: 5px;
            min-width: 210px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            }

            .dropdown-content a {
            color: black;
            padding: 5px;
            border-radius: 5px;    
            text-decoration: none;
            display: block;
            }

            .dropdown-content a:hover {
            background-color: #f1f1f1;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }



            .showload {
            //display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 99000009; /* Sit on top */
            left: 0;
            top: 0;    
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }    

            .pageload{
            //position:absolute;
            //left:40%; 
            //top:40%;
            width: 250px;
            margin: 30% auto 0;
            background-color: #FFF;
            border-radius: 5px;

            //color: #000;
            }

            .loader {    
            border: 2px solid #f3f3f3; /* Light grey */
            border-top: 2px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 35px;
            height: 35px;
            float: left;
            margin: 10px;
            animation: spin 2s linear infinite;
            }
            .loadhead{
            font-size: 18px;
            font-weight: bold;
            margin: 5px;
            color: #3498db;    
            border-bottom: 2px solid #3498db;
            }

            .main-menu{
            padding: 10px 0px 10px 0px !important; 
            color: #FFFFFF;
            }

            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
            }

            #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
            }

            #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
            }

            @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;} 
            to {bottom: 30px; opacity: 1;}
            }

            @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
            }

            @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;} 
            to {bottom: 0; opacity: 0;}
            }

            @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
            }
        </style>
  <script>
        function validate(evt) {
              var theEvent = evt || window.event;
              var key = theEvent.keyCode || theEvent.which;
              key = String.fromCharCode( key );
              var regex = /[0-9]|\./;
              if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
        }
    </script>
    </head>
    <body>
        <div id="iframe-dialogBox"></div>
<!--    #4bc1d2     -->
        <nav class="navbar1 navbar-inverse navbar-fixed-top" style="background-color:  #205081 !important;">
            <div class="container-fluid" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/dashboard.php" style="font-family: Palatino,'Palatino Linotype',Georgia,
                        sans-serif; text-transform:uppercase; font-weight: bold;"><i class="fa fa-sign-out" aria-hidden="true"></i>  <?php _p($app->Option);?></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar"> 
                  <?php
                //Url security
                    $url = $_SERVER['REQUEST_URI'];
                    $url = get_string_between($url, __FORM_APPLICATION__, ".php");
                        $findmenus = Menu::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Menu()->Link, $url.".php")
                                )
                            );
                        foreach ($findmenus as $findmenu){}

                    if(isset($_SESSION['login'])){
                    $login = Login::LoadByIdlogin($_SESSION['login']);
                    $active = 0;
                    if($findmenus){ 
                        foreach ($findmenus as $findmenu){} $active = $findmenu->Idmenu;
                        $permission = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($_SESSION['role'], $findmenu->Idmenu);
                        if(!$permission && locksdk == TRUE)
                            QApplication::Redirect (__FORM_APPLICATION__."/login_edit.php?lock=1");
                    }else{
                        if(locksdk == TRUE) QApplication::Redirect (__FORM_APPLICATION__."/login_edit.php?lock=2");
                    }
                    //end
                ?>      
                <ul class="nav navbar-nav">                
                    <?php
                        $RoleMenus = RoleHasMenu::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $_SESSION['role']),
                                            QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                            QQ::Equal(QQN::RoleHasMenu()->MenuIdmenuObject->Position, 1),
                                            QQ::NotEqual(QQN::RoleHasMenu()->MenuIdmenuObject->Position, 3)    
                                            ),
                                        QQ::OrderBy(QQN::RoleHasMenu()->Seq)
                                );
                        foreach ($RoleMenus as $RoleMenu){
                    ?>
                    <li class="dropdown">
                        <a href="#" style="font-weight: bold; font-size: 16px;">
                            <?php _p($RoleMenu->MenuIdmenuObject->Name); ?>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-content">
                            <?php
                                $subMenus = RoleHasMenu::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $_SESSION['role']),
                                            QQ::Equal(QQN::RoleHasMenu()->Parrent, $RoleMenu->MenuIdmenu)
                                        ),
                                        QQ::OrderBy(QQN::RoleHasMenu()->Seq));
                                foreach ($subMenus as $subMenu){
                            ?>
                            <?php if($subMenu->Refer){ ?>
                                <div class="modal-header nopadding roles">
                                    <strong class="text-uppercase padding5px">
                                        <i class="fa <?php _p($subMenu->MenuIdmenuObject->Icon); ?> fa-fw"></i>
                                        <?php _p($subMenu->MenuIdmenuObject->Name); ?>
                                    </strong>
                                    <ul>
                                        <?php get_masters($subMenu->Refer, $subMenu->MenuIdmenuObject->Link); ?>
                                    </ul>  
                                </div>
                            <?php }else{ ?>
                                <a href="<?php _p(__FORM_APPLICATION__.$subMenu->MenuIdmenuObject->Link); ?>" style="left:0;">
                                    <i class="fa <?php _p($subMenu->MenuIdmenuObject->Icon); ?> fa-fw"></i>
                                    <?php _p($subMenu->MenuIdmenuObject->Name); ?>
                                </a>
                            <?php } ?>  
                          <?php } ?>
                        </div>
                    </li>
                    <?php } ?>   
                </ul>

                <ul class="nav navbar-nav navbar-right" style="width: 250px;">
                    <li class="dropdown">
                        <a href="#" style="font-weight: bold; font-size: 16px;">
                            <i class="fa fa-user fa-fw"></i>Welcome <?php _p($login->IdloginObject->Name); ?>
                            <span class="caret"></span>
                        </a>
                            <div class="dropdown-content" style="width: 220px;">
                                  <div class="modal-header nopadding"><?php $role = Role::LoadByIdrole($_SESSION['role']); ?>
                                    <img style="width: 50px; height: 55px; padding: 3px; float: left;" src="" />
                                    <div style="float: left; margin-top: 20px; width: 150px;">
                                        <?php _p($login->IdloginObject->Name); ?><br>
                                        <div class="pull-right">-
                                        <?php _p(delete_all_between('[', ']', $role->Name)); ?></div>
                                    </div>
                                    <div class="clear"></div>
                                  </div>
                                  <div class="modal-header nopadding">
                                    <a href="<?php _p(__FORM_APPLICATION__); ?>/profile/profile_edit.php"><i class="fa fa-user fa-fw"></i> Profile </a>
                                  </div>
                                  <?php $LoginRolscnt = LoginHasRole::CountByLoginIdlogin($_SESSION['login']); ?>
                                  <div class="roles " style="<?php if($LoginRolscnt == 1) _p('display:none;'); if($LoginRolscnt > 10) _p('height:400px;overflow: auto;'); ?>">
                                    <strong class="text-uppercase">Roles Assigned</strong>
                                    <ul style="margin-left: -20px;">
                                        <?php
                                        $sr = 1;
                                        $LoginRols = LoginHasRole::LoadArrayByLoginIdlogin($_SESSION['login']);
                                        $uri = $_SERVER['REQUEST_URI'];
                                        //cheak url contains ?
                                        if(strpos($uri, '?') !== false) 
                                            $get = "&r="; //set role with &
                                        else 
                                            $get = "?r="; //set role with ?
                                        foreach ($LoginRols as $LoginRol){
                                        ?>
                                        <li class="<?php _p(color($sr++)); ?>_left">
                                            <a href="<?php _p($uri.$get.$LoginRol->RoleIdrole); ?>">
                                            <?php _p(delete_all_between('[', ']',$LoginRol->RoleIdroleObject->Name).' [ '.delete_all_between('[', ']',$LoginRol->RoleIdroleObject->ParrentObject).' ] '); ?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                  </div>
                                <div class="modal-footer nopadding">
                                    <a href="<?php _p(__FORM_APPLICATION__); ?>/login_edit.php?out=1"><i class="fa fa-power-off fa-fw"></i>Logout</a>
                                </div>
                            </div>

                    </li>        
                </ul>
                <?php } ?>        
                </div>
          </div>
        </nav>
        <div style="clear: both;margin-bottom: 50px;"></div>

        <!-- Page Content -->
        <div id="page-content-wrapper" style=" z-index: 999;padding: 0px 10px 0px 10px;">
            <div class="row">
                <div class="col-lg-12">
<!--                    <section id="content" class="">-->
                    <?php    
                        if($findmenus && strpos($uri, 'comming_soon.php') === false){ //cheak pas is not of comming soon
                    ?>
                    <h1 id="charthide">
                        <i class="fa <?php _p($findmenu->Icon); ?> fa-fw"></i>
                        <?php _p($findmenu->Name); ?>
                    </h1>
                    <?php } ?>

