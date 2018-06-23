<?php
    require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>
    <h1>fy</h1>
<?php $role = Settings::LoadByIdsettings(46);
    if ($_SESSION['role'] == $role->Option) {
 ?>

<?php } ?>
<div  class="form-controls">
    <div class="col-md-6"> <?php $this->lstMarkto->Render(); ?></div>  
    <div ><?php $this->btnSave->Render(); ?></div>    
</div>  
<div style="clear: both;"></div>
<div  class="form-controls">
<?php $this->dtgforward->Render(); ?>

</div>         

</div>
</div>
</div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>