<?php
	$strPageTitle = QApplication::Translate('Place');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        <div class="tabbable-panel">
            <div class="tabbable-line slideup">
                <ul class="nav nav-tabs ">
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?> pull-right">
                        <a href="#3" data-toggle="tab" id="link">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Taluka')?>
                        </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?> pull-right">
                        <a href="#2" data-toggle="tab"  id="link">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('District')?>
                        </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> pull-right">
                        <a href="#1" data-toggle="tab" aria-expanded="true" id="link">
                            <i class="fa fa-map-marker fa-fw"></i><?php _t('State')?>
                        </a>
                    </li>
                    
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?> pull-right">
                        <a href="#0" data-toggle="tab" aria-expanded="true" id="link">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Nation')?>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])) { ?>active<?php } ?>" id="0">
                        <div class="form-controls">
                            <?php $this->dtgNation->Render();?>
                            <div class="form-actions"> 
                              <div class="pull-left" style="margin-left: 5px; width: 10%"><?php $this->txtcode->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtNation->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px;"><?php $this->btnAdd->Render(); ?><?php $this->btnDelete->Render(); ?></div>
                              <div style="clear: both; height: 5px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <?php $this->dtgState->Render();?>
                            <div class="form-actions">
                             <div class="pull-left" style="margin-left: 5px; width: 10%"><?php $this->txtStatecode->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtState->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstParanet->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px;"><?php $this->btnAdd1->Render(); ?><?php $this->btnDelete1->Render(); ?></div>
                              <div style="clear: both; height: 5px;"></div>
                            </div>
                            
                        </div>
                    </div>
                     <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>" id="2">
                        <div class="form-controls">
                              <?php $this->dtgDist->Render();?>
                            <div class="form-actions">
                              <div class="pull-left" style="margin-left: 5px; width: 10%"><?php $this->txtDistcode->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtDist->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstState->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px;"><?php $this->btnAdd2->Render(); ?><?php $this->btnDelete2->Render(); ?></div>
                              <div style="clear: both; height: 5px;"></div>
                            </div>
                         </div>
                    </div>
                     <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>" id="3">
                        <div class="form-controls">
                              <?php $this->dtgTal->Render();?>
                            <div class="form-actions">
                             <div class="pull-left" style="margin-left: 5px; width: 10%"><?php $this->txtTalcode->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->txtTal->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstDist->Render(); ?></div>
                               <div class="pull-left" style="margin-left: 5px;"><?php $this->btnAdd3->Render(); ?><?php $this->btnDelete3->Render(); ?></div>
                              <div style="clear: both; height: 5px;"></div>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
        </div>
</div>
       
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>