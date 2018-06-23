    <?php
	$strPageTitle = QApplication::Translate('Person') . ' - ' . $this->mctPerson->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
    ?>
	<?php $this->RenderBegin() ?>

	<h1><i class="fa <?php if($this->mctPerson->TitleVerb == "Create") _p("fa-user-plus"); else _p("fa-pencil-square"); ?>fa-fw"></i> 
            <?php _t('Person')?></h1>

    <div class="form-controls">
         <?php $this->txtName->RenderWithName(); ?>
         <?php $this->txtUser->RenderWithName(); ?>
         <?php $this->txtPassword->RenderWithName(); ?>
         <?php $this->txtVerify->RenderWithName(); ?>
	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
    </div>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>