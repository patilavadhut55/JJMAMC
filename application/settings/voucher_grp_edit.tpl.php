<?php
	$strPageTitle = QApplication::Translate('Voucher Group') . ' - ' . $this->mctVoucherGrp->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        <!--
	<h1>
            <i class="fa 
            <?php 
            /*
            if($this->mctVoucherGrp->EditMode == FALSE && !isset($_GET['new'])){
                _p("fa-vimeo-square");
            }else{
                if($this->mctVoucherGrp->TitleVerb == "Create") 
                    _p("fa-plus-circle"); 
                else 
                    _p("fa-pencil-square"); 
            }*/
            ?>
            fa-fw"></i>
            <?php //_t('Voucher Group')?>
        </h1>-->
        <div class="pull-right slideup">                
            <?php $this->btnNew->Render(); ?><?php $this->btnList->Render(); ?>
        </div>
        <?php if($this->mctVoucherGrp->EditMode == FALSE && !isset($_GET['new'])){ ?>	
        <?php $this->dtgVoucherGrp->Render(); ?>
        <?php } ?>
        <?php if(isset($_GET['new']) || $this->mctVoucherGrp->EditMode == TRUE ){ ?>
	<div class="form-controls">
        <table width="800" >
          <tr>
            <td colspan="3"><?php $this->txtName->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->lstGrpObject->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->txtAbbrivation->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3">
                <?php $this->chkAutoNum->RenderWithName(); ?>
            </td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->txtCounter->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->txtCommanNarration->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->chkPrint->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td width="146">&nbsp;</td>
            <td colspan="2">
                <div style="float: left;"><?php $this->btnDesign->RenderWithName(); ?></div>
                <div style="float: left;"><?php $this->btnCode->RenderWithName(); ?></div>
            </td>
          </tr>
          <tr>
              <td colspan="3"><?php $this->txtPrintDesign->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->txtPrintCode->RenderWithName(); ?></td>
          </tr>
          <tr>
            <td colspan="3"><?php $this->txtPrintContent->RenderWithName(); ?></td>
          </tr>

        </table>
        <div class="form-actions">
          <div class="form-save"><?php $this->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	    </div>
        </div>
        <?php } ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>