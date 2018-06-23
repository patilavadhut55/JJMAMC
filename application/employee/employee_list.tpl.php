<?php
    $strPageTitle = QApplication::Translate('Employee');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

    <div class="pull-right ">
        <?php $this->btnNew->Render(); ?> 
   </div>
	
       
 <div class="pull-left col-md-6"><?php $this->lstDepartment->Render(); ?></div>
<?php if(isset($_GET['dept'])){ 
$des = Role::LoadByIdrole($_GET['dept']);
?>
 <div class="pull-left col-md-6"><h4> Designation - <?php _p($des->Name);  ?></h4></div> 
<?php } ?>
        <?php $this->dtgemployee->Render(); ?>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>