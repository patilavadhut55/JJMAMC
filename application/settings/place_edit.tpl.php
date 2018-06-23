
<?php
	$strPageTitle = QApplication::Translate('Place') . ' - ' . $this->mctPlace->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        <h1><i class="fa 
            <?php if($this->mctPlace->TitleVerb == "Create") _p("fa-plus-circle"); else _p("fa-pencil-square"); ?>
            fa-fw"></i>
        <?php _t('Place')?>
            <div class="pull-right">
               <?php $this->btnList->Render(); ?>
            </div>
        </h1>
        
<div class="tabbable-panel">
        <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?>">
                                <a href="#1" data-toggle="tab">
                                   <i class="fa fa-globe fa-fw"></i><?php _t('Place')?>
                               </a>
                        </li>
                        <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>">
                                <a href="#2" data-toggle="tab" aria-expanded="true">
                                <i class="fa fa-list-alt fa-fw"></i><?php _t('Group')?>
                                </a>
                        </li>
                </ul>
                <div class="tab-content">
                <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="1">
                    <div class="form-controls">
                    <?php $this->txtCode->Focus(); $this->txtCode->RenderWithName(); ?>
                    <?php $this->txtName->RenderWithName(); ?>
                    <?php $this->lstGrpObject->RenderWithName(); ?>
                    <?php $this->lstParrentObject->RenderWithName(); ?>	

                    <div class="form-actions">
                        <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                        <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                        <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                    </div>
                </div>
                </div>
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>" id="2">
                 <div class="form-controls">
               <table class="table">
                <tr>
                    <th></th>
                    <th>Group</th>
                
                </tr>
                <?php 
                   $grps = PlaceGrp::LoadAll();
                  foreach ($grps as $grp){
                ?>
                <tr>
                    <td><?php  $this->lbldels[$grp->IdplaceGrp]->Render(); ?></td>
                    <td><?php _p($grp->Name); ?></td>
                </tr>
                    <?php } ?>
            </table>
            <div class="form-actions">    
            <div class="pull-left" style="margin-left: 5px; width: 40%"><?php $this->txtGroup->Render(); ?></div>
            <div class="pull-left" style="margin-left: 5px;"><?php $this->btnAdd->Render(); ?></div>
            <div style="clear: both; height: 5px;"></div>
            </div>
        </div>
                </div>
            </div>
                </div>
        </div>
    	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>