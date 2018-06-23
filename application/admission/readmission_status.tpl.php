
<?php
    $strPageTitle = QApplication::Translate('Registration');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    

<h1>Import Summary</h1>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <?php   if(isset($_GET['mem'])){
    $led = Ledger::LoadByIdledger($_GET['mem']);
   ?>
    <div><strong> Name&nbsp;:-&nbsp;&nbsp;</strong><?php _p($led->Name) ?></div>
    <div><strong>PRN&nbsp;:-&nbsp;&nbsp;&nbsp;</strong><?php _p($led->Code) ?></div>
    <br>
    <script src="dragtable.js"></script>
    <div class="col-md-2"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-2"><?php $this->lstProgram->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstTeachDept->Render(); ?></div>    
    <div class="col-md-2"><?php $this->lstSpecialization->Render();?></div>
    <div class="col-md-2"><?php $this->lstSem->Render(); ?></div>
    <div style="float: right;"><?php $this->btnGenerate->Render(); ?></div>
    <div style="clear: both;"></div>
    <?php } ?>
</div>  
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
