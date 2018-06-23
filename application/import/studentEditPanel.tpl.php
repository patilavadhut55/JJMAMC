<?php
   $strPageTitle = QApplication::Translate('');
    require(__CONFIGURATION__ . '/header.inc.php');
    ?>
<h2><?php _p($_CONTROL->strTitleVerb); ?></h2>
    <div class="form-controls">
    <div class="col-md-3"><?php $this->lstCalender->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstRoles->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstProgram->Render(); ?></div>
   
    <?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>