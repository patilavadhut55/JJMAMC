<?php
	
	$strPageTitle = QApplication::Translate('Remark') . ' - ' . $this->mctRemark->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
<div class="form-controls">
<table class="datagrid">
    <tr><th>Sr</th><th>Name</th></tr>
    <?php 
    $remarks = Remark::LoadAll();
    if($remarks){
        $sr = 1;
        foreach ($remarks as $remark){
    ?>
    <tr onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/certificate_templet/remark_edit.php/<?php _p($remark->Idremark); ?>'">
  <td><?php _p($sr++); ?></td><td><?php _p($remark->Name); ?></td></tr>
        <?php }} ?>
</table>
    <div class="form-actions">
     <div class="pull-left" style="margin-left: 5px; width: 40%"> <?php $this->txtName->Render(); ?></div>
     <div class="pull-left" style="margin-left: 150px;"><?php $this->btnSave->Render(); ?><?php $this->btnCancel->Render(); ?><?php $this->btnDelete->Render(); ?></div>
     <div style="clear: both; height: 5px;"></div>
     </div>
    </div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>