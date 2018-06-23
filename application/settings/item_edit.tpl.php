
<?php
    $strPageTitle = QApplication::Translate('Item');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<h1><?php _t('Item'); ?></h1>
    <?php $this->RenderBegin() ?>
    <div class="pull-right slideup">
        <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
    </div>
    <?php
        //if(isset($_GET['id']) || !isset($_GET['new'])){
    ?>
    <div class="tabbable-panel">
        <div class="tabbable-line slideup">
                <ul class="nav nav-tabs">
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?> pull-left margin-left-large">
                        <a href="#0" data-toggle="tab" id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Item')?>
                        </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> pull-left">
                        <a href="#1" data-toggle="tab" id="link2">
                            <i class="fa fa-map-marker fa-fw"></i><?php _t('Unit')?>
                        </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?> pull-left">
                        <a href="#2" data-toggle="tab" aria-expanded="true" id="link3">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Stock Group')?>
                        </a>
                    </li>                    
                </ul>
            
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                    <?php if(!isset($_GET['id']) && !isset($_GET['new'])){?>
                        <div class="form-controls">
                            <?php $this->dtgItem->Render(); ?>
                        </div>
                    <?php } ?>    
                    <?php 
                    if(isset($_GET['id']) || isset($_GET['new'])){
                    ?>
                    <div class="form-controls">
                        
                        <?php $this->txtCode->RenderWithName(); ?>
                        <?php $this->txtName->RenderWithName(); ?>
                        <?php $this->txtBrand->RenderWithName(); ?>
                        <?php $this->txtStockGrp->RenderWithName(); ?>
                        <?php $this->txtUnit->RenderWithName(); ?>
                        <?php $this->txtCost->RenderWithName(); ?>
                        <?php $this->txtDp->RenderWithName(); ?>
                        <?php $this->txtmrp->RenderWithName(); ?>
                        <?php $this->txtMinStock->RenderWithName(); ?>
                        <?php $this->txtVatRate->RenderWithName(); ?>
                        <?php $this->txtDutiesRate->RenderWithName(); ?>
                        
                        <div class="form-actions">
                            <div class="form-save"><?php  $this->btnSave->Render(); ?></div>
                            <div class="form-save"><?php $this->btnCancel->Render(); ?></div>                            
                            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                        </div>
                        
                    </div>
                    <?php } ?>
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 1){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <?php $this->dtgUnit->Render(); ?>
                            
                            <div class="form-actions">
                                <div class="pull-left" style="margin-left: 10px;"><?php $this->txtUnitName->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtDescription->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtDecimalPlaces->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtQtyInvolved->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->btnUnit->Render(); ?><?php $this->btnDelete1->Render(); ?></div>                                
                                <div style="clear: both;"></div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>    
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>" id="2">
                        <div class="form-controls">                            
                            <?php $this->dtgStkGrp->Render(); ?>
                            <div class="form-actions">
                                <div class="pull-left" style="margin-left: 10px;"><?php $this->txtStkgrpName->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtStkgrpParrent->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtStkgrpVatRate->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtStkgrpDutiesRate->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->btnStkGrpSave->Render(); ?><?php $this->btnDelete2->Render(); ?></div> 
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
            <?php //} ?>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>