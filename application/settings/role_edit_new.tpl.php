<?php
	$strPageTitle = QApplication::Translate('Role');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
            <div class="pull-right slideup" style="margin-top: -50px;">
                <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
            </div>
        <div style="clear: both;margin-top: 10px;"></div>
        <?php if($this->mctRole->EditMode == FALSE  && !isset($_GET['new'])){
            $this->txtName->Focus();
            //$this->dtgRoles->Render(); ?>
        <?php
            $orgs = Role::LoadArrayByGrp(1,  QQ::OrderBy(QQN::Role()->Code));
            $cnt=1;
            foreach ($orgs as $org){
                _t($org->Name."<br>");
                $strparam = $org->Idrole;
                back:
                $roles = Role::LoadArrayByParrent($strparam);
                foreach ($roles as $role){
                    _t("-> ".$role->Name."<br>");
                    $subroles = Role::LoadArrayByParrent($role->Idrole);
                    if($subroles){
                        $strparam = $role->Idrole;
                        goto back;
                    }
                }
            }
        ?>
        <?php } ?>
        <?php 
            if($this->mctRole->EditMode == TRUE || isset($_GET['new'])){
        ?>
        
<div class="tabbable-panel">
    <div class="tabbable-line slideup ">
                <ul class="nav nav-tabs">
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?> pull-left margin-left-large">
                                <a href="#0" data-toggle="tab">
                                <i class="fa fa-asterisk fa-fw"></i><?php _t('Name')?>
                                </a>
                    </li>
                    
                    <?php if($this->mctRole->EditMode == TRUE){ ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> pull-left">
                                <a href="#1" data-toggle="tab">
                                <i class="fa fa-map-marker fa-fw"></i><?php _t('Address Details')?>
                                </a>
                        </li>
                        <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?> pull-left">
                                <a href="#2" data-toggle="tab" aria-expanded="true">
                                <i class="fa fa-bars fa-fw"></i><?php _t('Menus')?>
                                </a>
                        </li>
                    <?php } ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?> pull-left">
                            <a href="#3" data-toggle="tab" aria-expanded="true">
                            <i class="fa fa-bars fa-fw"></i><?php _t('Group')?>
                            </a>
                    </li>    
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                        <?php 
                        if($this->mctRole->EditMode == TRUE || isset($_GET['new'])){
                            $this->txtName->Focus();
                        ?>
                        <div class="form-controls">            
                            <?php $this->txtCode->RenderWithName(); ?>
                            <?php $this->txtName->RenderWithName(); ?>
                            <?php $this->lstParrentObject->RenderWithName(); ?>	
                            <?php $this->txtDescription->RenderWithName(); ?>
                            <?php $this->lstGrpObject->RenderWithName(); ?>  
                            <?php $this->txtMname->RenderWithName(); ?>  
                            <?php $this->txtShortName->RenderWithName(); ?>  
                            <?php $this->txtCount->RenderWithName(); ?>  
                            
                            <?php if($this->lstGrpObject->SelectedValue == 3) $this->txtServiceYears->RenderWithName();  ?>
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                                <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                                <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>   
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ $this->txtTitle->Focus(); ?>active<?php } ?>" id="1">
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
                        <table class="table table-striped" id="mytable1">
                        <thead>
                        <tr>
                            <th><i class="fa fa-trash-o"  style="padding: 0 15px;"></i></th>
                            <th>Seq</th>
                            <th>Menu</th>
                            <th>Level</th>
                            <th>Parent</th>
                            <th>Permission</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php                
                            $mnuhasroles = RoleHasMenu::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $this->lblIdrole->Text)                                    
                                                ),
                                            QQ::Clause(
                                                QQ::OrderBy(QQN::RoleHasMenu()->Seq, TRUE)
                                                )
                                            );
                            foreach ($mnuhasroles as $mnuhasrole){
                        ?>
                        <tr>
                            <td><?php $this->lbldels[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></td>
                            <td>
                                <div class="pull-left"><?php $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></div>
                                <div class="pull-left"><?php $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></div>
                                <div class="pull-left"><?php $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Render(); ?></div>
                            </td>
                            <td><?php _p($mnuhasrole->MenuIdmenuObject->Name); ?></td>
                            <td><?php _p($mnuhasrole->Level); ?></td>
                            <td><?php _p($mnuhasrole->ParrentObject); ?></td>
                            <td><?php _p($mnuhasrole->Permission); ?></td>
                        </tr>
                            <?php } ?>
                        </tbody>
                    </table>    
                        <div class="form-actions">    
                            <div class="pull-left" style="width: 25%"><?php $this->lstMenu->Render(); ?></div>
                        <div class="pull-left"  style="width: 10%"><?php $this->txtlevel->Render(); ?></div>
                        <div class="pull-left"  style="width: 25%"><?php $this->lstParrent->Render(); ?></div>
                        <div class="pull-left"  style="width: 25%"><?php $this->txtPermision->Render(); ?></div>
                        <div class="pull-left" style="width: 15%"><?php $this->btnAdd->Render(); ?></div>
                        <div style="clear: both; height: 5px;"></div>
                        </div>
                    </div>
                </div>
            
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>" id="3">
                    <div class="form-controls">                        
                        <?php $this->dtgGroup->Render();?>
                        <div class="form-actions">
                            <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtGrpName->Render(); ?></div>
                            <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtGrpDescription->Render(); ?></div>
                            <div class="pull-left" style="margin-left: 5px;"><?php $this->btnGrpSave->Render(); ?><?php $this->btnGrpDelete->Render(); ?></div>
                            <div style="clear: both; height: 5px;"></div>
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