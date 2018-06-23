<?php
	$strPageTitle = QApplication::Translate('Role');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<h1>Hostel</h1>
	<?php $this->RenderBegin() ?>
            <?php //$roles = Role::LoadArrayByGrp(6);                   
               // foreach ($roles as $role){ ?>
                    <div class="form-controls">
                        <?php $this->txtName->RenderWithName(); ?>
                        <?php $this->txtFacilities1->RenderWithName(); ?>
                        <?php $this->txtIntake->RenderWithName(); ?>
                        <div style="clear: both; height: 5px;"></div>
                        <div class="form-actions">
                            <div class="pull-left" style="margin-left: 5px;"><?php $this->btnAdd->Render(); ?><?php $this->btnDelete->Render(); ?></div>
                            <div style="clear: both; height: 5px;"></div>
                        </div> 
                    </div>        
            <?php// } ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>