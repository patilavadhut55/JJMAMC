<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/examples.inc.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php _p(QApplication::$EncodingType); ?>" />
		<title><?php _p(Examples::PageName(), false); ?> - QCubed PHP 5 Development Framework - Examples</title>
		<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__ . '/styles.css'); ?>"></link>
		<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __EXAMPLES__ . '/includes/examples.css'); ?>"></link>
                <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
                <style>
                    body{
                        background-color: #FFF;
                    }
                </style>
	</head>
	<body>
		<header>
			<div class="breadcrumb">
<?php		if(!isset($mainPage)) { ?>
				<span class="category-name"><?php _p((Examples::GetCategoryId() + 1) . '. ' . Examples::$Categories[Examples::GetCategoryId()]['name'], false); ?></span> / 
<?php		} ?>
				<strong class="page-name"><?php _p(Examples::PageName(), false); ?></strong>
			</div>
			
<?php	if(!isset($mainPage)) { ?>
			<nav class="page-links"><?php _p(Examples::PageLinks(), false); ?></nav>
<?php	} ?>
			
		</header>
		<section id="content">