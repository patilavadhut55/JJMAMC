<?php
    $strPageTitle = QApplication::Translate('Report');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
   <?php $this->RenderBegin() ?>
       <div class="pull-right slideup">                
            <?php $this->btnNew->Render(); ?><?php $this->btnList->Render(); ?>
        </div>
        <?php if($this->mctReport->EditMode == FALSE && !isset($_GET['new'])){ ?>	
        <?php $this->dtgReport->Render(); ?>
        <?php } ?>
        <?php if(isset($_GET['new']) || $this->mctReport->EditMode == TRUE ){ ?>
	<div class="form-controls">
            <?php $this->txtCode->RenderWithName(); ?>
            <?php $this->txtName->RenderWithName(); ?>
            <?php $this->lstParentObject->RenderWithName(); ?>
            <?php $this->txtAbbr->RenderWithName(); ?>
            <?php $this->txtIntro->RenderWithName();  ?>
              <div style="float: left;"><?php $this->btnDesign->RenderWithName(); ?></div>
              <div style="float: left;"><?php $this->btnCode->RenderWithName(); ?></div>
            <?php $this->txtPrintDesign->Render(); ?>
            <?php $this->txtPrintCode->Render(); ?>
            <?php //$this->txtData->Render(); ?>
          
        <div class="form-actions">
            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
        </div>
        <?php } ?>
    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>