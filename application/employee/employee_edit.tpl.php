<?php
    $strPageTitle = QApplication::Translate('Login');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        <div class="pull-right slideup">
            <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
        </div>
	
        <?php if($this->mctLedger->EditMode == FALSE  && !isset($_GET['new'])) //$this->dtgLogin->Render(); ?>

        <?php 
            if($this->mctLedger->EditMode == TRUE || isset($_GET['new'])){
        ?>
    <div class="tabbable-panel">
        <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?>">
                        <a href="#0" data-toggle="tab" id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Ledger')?>
                        </a>
                    </li>
                    <?php if($this->mctLedger->EditMode == TRUE){ ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?>">
                            <a href="#1" data-toggle="tab" id="link2">
                            <i class="fa fa-map-marker fa-fw"></i><?php _t('Details')?>
                            </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>">
                            <a href="#2" data-toggle="tab" aria-expanded="true" id="link3">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Login')?>
                            </a>
                    </li>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>">
                            <a href="#3" data-toggle="tab" aria-expanded="true" id="link4">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Roles')?>
                            </a>
                    </li>
                    <?php } ?>
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                    <?php 
                    if($this->mctLedger->EditMode == TRUE || isset($_GET['new'])){
                    ?>
                    <div class="form-controls">
                        <?php $this->txtCode->RenderWithName(); ?>
                        <?php $this->txtName->RenderWithName(); ?>
                        <?php $this->lstGrp->RenderWithName(); ?>
                        
                        <div class="form-actions">
                            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 1){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
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
                            <?php $this->txtTinSalesTaxNo->RenderWithName(); ?>
                            <?php $this->txtCstNo->RenderWithName(); ?>
                            
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnUpdate->Render(); ?></div>
                                <div class="form-delete"><?php $this->btnRemove->Render(); ?></div>
                            </div>
                        </div>    
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>" id="2">
                        <div class="form-controls">
                         <?php $this->txtUserName->RenderWithName(); ?>
                         <?php $this->txtPassword->RenderWithName(); ?>   
                         <?php $this->txtConfirm->RenderWithName(); ?>
                             <?php $this->chkIsEnabled->RenderWithName();?>
                           <div class="form-actions">
                                <div class="form-save"><?php $this->btnLogin->Render(); ?></div>
                                <div class="form-delete"><?php //$this->btnRemove->Render(); ?></div>
                            </div>   
                        </div>
                    </div> 
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>" id="3">
                        <div class="form-controls">
                            <?php $this->dtgRole->Render(); ?>
                            <div class="form-actions">
                                <div class="pull-left" style="margin-left: 10px;"><?php $this->txtRole->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;width: 150px;">Active<?php $this->chkActive->Render(); ?></div>                                
                                <div class="pull-left" style="margin-left: 45px;"><?php $this->btnRoleSave->Render(); ?></div>                                
                                <div class="pull-right" style="margin-left: 15px;"><?php $this->btnRoleDelete->Render(); ?></div>                                                                
                                <div style="clear: both;"></div>
                            </div>   
                            <div style="clear: both;"></div>
                        </div>
                    </div> 
                    
            </div>
        </div>
    </div>
</div>
        <h3>            
        </h3>
            <?php } ?>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>