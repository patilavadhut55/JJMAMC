<?php
    $strPageTitle = QApplication::Translate('Login');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

    <div class="tabbable-panel">
        <div class="tabbable-line slideup">
                <ul class="nav nav-tabs ">
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> pull-right ">
                            <a href="#1" data-toggle="tab" aria-expanded="true" id="link3">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Change Password')?>
                            </a>
                    </li>
                    
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?> pull-right">
                        <a href="#0" data-toggle="tab" id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Profile')?>
                        </a>
                    </li>
                    
                    
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                   
                    <div class="form-controls">
                        
                        <?php $this->txtName->RenderWithName(); ?>
                        <?php //$this->txtMname->RenderWithName(); ?>
                        <?php $this->txtTitle->RenderWithName(); ?>
                        <?php $this->txtAddressLine1->RenderWithName(); ?>
                        <?php $this->txtAddressLine2->RenderWithName(); ?>
                        <?php $this->txtCountry->RenderWithName(); ?>
                        <?php $this->txtState->RenderWithName(); ?>
                        <?php $this->txtDistrict->RenderWithName(); ?>
                        <?php $this->txtTaluka->RenderWithName(); ?>
                        <?php $this->txtCity->RenderWithName(); ?>
                        <?php $this->txtZipCode->RenderWithName(); ?>
                        <?php $this->txtContact1->RenderWithName(); ?>
                        <?php $this->txtContact2->RenderWithName(); ?>
                        <?php $this->txtWeb->RenderWithName(); ?>
                        <?php $this->txtEmail1->RenderWithName(); ?>
                        <?php $this->txtEmail2->RenderWithName(); ?>
                       
                        
                        <div class="form-actions">
                            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>                            
                        </div>
                    </div>
                 
                    </div>
                    
                   
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <?php $this->txtUserName->RenderWithName(); ?>
                            <?php $this->txtPassword->RenderWithName(); ?>   
                            <?php $this->txtConfirm->RenderWithName(); ?>
                            
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnLogin->Render(); ?></div> 
                                <div class="form-cancel"><?php $this->btnCancel1->Render(); ?></div>                            

                            </div>   
                        </div>
                    </div> 
                </div>
        </div>
    </div>
</div>
           

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>