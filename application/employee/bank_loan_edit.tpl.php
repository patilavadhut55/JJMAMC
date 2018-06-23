<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css" />
       
<body <?php if(isset($_SESSION['login'])){ ?>style="background: none repeat scroll 0 0 #fff;" <?php } ?>>
	<?php $this->RenderBegin() ?>

    <h1>Bank Loan Details</h1>
    <div class="pull-right slideup"><?php $this->btnBack ->Render(); ?></div>
	<div class="form-controls">
<table width="100%" border="0">
  <tr>
    <td width="50%"><?php $this->lstBank->RenderWithName(); ?></td>
    <td width="50%">
      <?php $this->txtAmount->RenderWithName(); ?>
    </td>
  </tr>
  <tr>
    <td><?php $this->calFromDate->RenderWithName(); ?></td>
    <td><?php $this->calToDate->RenderWithName(); ?></td>
  </tr>
  <tr>
    <td><?php $this->chkShow->RenderWithName(); ?></td>
    <td>&nbsp;</td>
  </tr>
</table>

	<div class="form-actions">
		<div class="form-save"><?php $this->btnSave->Render(); ?>
		  <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
	</div>
</div>
<div class="form-controls">
    <table width="70%" border="1" class="datagrid">
  <tr>
    <th width="7%"><div align="center">Sr</div></th>
    <th width="33%"><div align="center">Bank</div></th>
    <th width="20%"><div align="center">Amount</div></th>
    <th width="20%"><div align="center">From Date</div></th>
    <th width="20%"><div align="center">To Date</div></th>
  </tr>
  <?php 
  $loans = BankLoan::LoadArrayByEmployee($this->lstEmployeeObject->SelectedValue);
  if($loans){
      $sr = 1;
      foreach ($loans as $loan){
  ?>
  <tr onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/employee/bank_loan_edit.php/<?php _p($loan->IdbankLoan); ?>?temp=<?php _p($_GET['temp']); ?>'">
    <td><div align="center">
      <?php _p($sr++); ?>
    </div></td>
    <td>&nbsp;<?php _p($loan->BankObject); ?></td>
    <td><div align="center">
      <?php _p($loan->Amount); ?>
    </div></td>
    <td><div align="center">
      <?php if($loan->FromDate) _p(date('d/m/Y', strtotime($loan->FromDate))); ?>
    </div></td>
    <td><div align="center">
      <?php if($loan->ToDate) _p(date('d/m/Y', strtotime($loan->ToDate))); ?>
    </div></td>
  </tr>
  <?php }} ?>
</table>

</div>
	<?php $this->RenderEnd() ?>
</body>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.js"></script>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/bootstrap.min.js"></script>
<script src="<?php _p(__APP_JS_ASSETS__) ; ?>/bootstrap-toggle.min.js"></script>