<?php
        $strPageTitle = QApplication::Translate('DeptYearEvents');
	//require(__CONFIGURATION__ . '/header.inc.php');
?>
<meta charset="<?php _p(QApplication::$EncodingType); ?>" />
<?php if (isset($strPageTitle)) { ?>
        <title><?php _p($strPageTitle); ?></title>
<?php }else{ ?>
        <title><?php _p($app->Option); ?></title>
<?php } ?> 
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__) ; ?>/animate.min.css">
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.min.js"></script>

<link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
<!-- SlidePanel Css -->
<link rel="stylesheet" href="<?php _p(__sidebar__); ?>/css/simple-sidebar.css" />

	<?php $this->RenderBegin() ?>
<h1><?php _t('Department Events'); ?></h1>

<div class="form-controls" style="width: 800px;">
            <?php $this->txtTitle->RenderWithName(); ?>
            <?php $this->lstEventObject->RenderWithName(); ?>
            <?php //$this->lstOrgnizationObject->RenderWithName(); ?>
            <?php $this->lstDepartmentObject->RenderWithName(); ?>
            <?php $this->lstDeptYearObject->RenderWithName(); ?>
            <?php $this->lstCalenderYearObject->RenderWithName(); ?>
            <?php $this->lstParrentObject->RenderWithName(); ?>
            <?php $this->calFrom->RenderWithName(); ?>
            <?php $this->calTo->RenderWithName(); ?>
            <?php $this->txtDescription->RenderWithName(); ?>	

	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
        </div>

	<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>