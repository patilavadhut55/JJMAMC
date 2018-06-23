<?php
// This example header.inc.php is intended to be modfied for your application.
$app = Settings::LoadByIdsettings(1);
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
	<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
        <!-- SlidePanel Css -->
	<link rel="stylesheet" href="<?php _p(__sidebar__); ?>/css/simple-sidebar.css" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php _p(__table__); ?>/dist/bootstrap-table.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php _p(__table__); ?>/dist/bootstrap-table.min.js"></script>

        <!-- Latest compiled and minified Locales -->
        <script src="<?php _p(__table__); ?>/dist/locale/bootstrap-table-zh-CN.min.js"></script>

</head>
<body <?php if(isset($_SESSION['login'])){ ?>style="background: none repeat scroll 0 0 #f2f2f2;" <?php } ?>>
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
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #356BA1 !important;">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                        <!--<a href="#menu-toggle" class="btn-info" id="menu-toggle"><i class="fa fa-bars"></i></a>-->
                	<a class="navbar-brand" href="#menu-toggle" id="menu-toggle">
                            <i class="fa fa-dashcube fa-fw"></i> <?php _p($app->Option); ?>
                        </a>
		</div>
		<div class="collapse navbar-collapse">
                <!--<ul class="nav navbar-nav">
				<li><a href="/index.php/example">Tutorials</a></li>
				<li><a href="/index.php/pages/example">Contact Us</a></li>
			</ul>-->
			<ul class="nav navbar-nav navbar-right panel-title">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Welcome <b><?php _p($login->Username); ?> !</b></a></li>
                            <li><a href="#"><i class="fa fa-clock-o fa-fw"></i> <?php _p(QDateTime::Now()); ?></a></li>
                            <li><a href="<?php _p(__FORM_APPLICATION__); ?>/settings/settings.php"><i class="fa fa-wrench fa-fw"></i> Settings</a></li>
                            <li><a href="<?php _p(__FORM_APPLICATION__); ?>/login_edit.php?out=1"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <?php
                $RoleMenus = RoleHasMenu::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $_SESSION['role']),
                                    QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                    QQ::NotEqual(QQN::RoleHasMenu()->MenuIdmenuObject->PositionObject->Name, "Hidden Menu")    
                                    ),
                                QQ::OrderBy(QQN::RoleHasMenu()->Seq)
                        );
                foreach ($RoleMenus as $RoleMenu){
                   
                ?>
                <li <?php if($active == $RoleMenu->MenuIdmenu){ ?>style="background: rgba(255,255,255,0.2); "<?php } ?>>
                    <a href="<?php _p(__FORM_APPLICATION__.$RoleMenu->MenuIdmenuObject->Link); ?>">
                        <i class="fa <?php _p($RoleMenu->MenuIdmenuObject->Icon); ?>"></i> 
                            <?php _p($RoleMenu->MenuIdmenuObject->Name); ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="padding: 0;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
<?php } ?>
<section id="content">
    <?php     
    if($findmenus){ ?>
	<h1>
            <i class="fa <?php _p($findmenu->Icon); ?>"></i>
            <?php _p($findmenu->Name); ?>
        </h1>
        <?php
        if($findmenu->Parrent == NULL)
        $L2Menus = RoleHasMenu::LoadArrayByParrent($findmenu->Idmenu);
        else
        $L2Menus = RoleHasMenu::LoadArrayByParrent($findmenu->Parrent);
            
        if($L2Menus){ ?>
    <div class="tabbable-panel slideup">
        <div class="tabbable-line">
                <ul class="nav nav-tabs"  style="margin-left: 200px;">
        <?php $tab = 1; foreach ($L2Menus as $L2Menu){ ?>
        <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == $tab){ ?>active<?php } ?>">
            <a href="<?php _p(__FORM_APPLICATION__.$L2Menu->MenuIdmenuObject->Link); ?>#<?php _p($tab++); ?>" >
            <i class="fa <?php _p($L2Menu->MenuIdmenuObject->Icon); ?> fa-fw"></i><?php _p($L2Menu->MenuIdmenuObject->Name); ?>
            </a>
        </li>
    <?php } ?>
        </ul>
    <?php } ?>
    <?php } ?>