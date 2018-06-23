  <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css" />
       
<body <?php if(isset($_SESSION['login'])){ ?>style="background: none repeat scroll 0 0 #fff;" <?php } ?>>
    <?php $this->RenderBegin() ?>
<h1> Salary Head Calculation</h1>

    <div class="form-controls">
    <table width="100%" border="0">
  <tr>
    <td width="89%" valign="top">
        <?php $this->lstSalaryhead->RenderWithName(); ?>
        <?php $this->lstType->RenderWithName(); ?>
        <?php $this->lstBased->RenderWithName(); ?>
        <?php $this->txtPer->RenderWithName(); ?>
        <?php $this->txtAmount->RenderWithName(); ?>
    <!--  Pay Slab Table !-->  
    <div class="renderWithName">
        <div class="form-name"></div>
        <div class="form-field">
    <?php if($this->lstType->SelectedValue == 3){?>
   <table class="datagrid" width="100%"  border="1" style="border:1px solid #CCC; line-height:20px;">
  <tr>
    <th width="9%"><div align="center"><strong>Sr</strong></div></th>
    <th width="27%"><div align="center"><strong>From Amount</strong></div></th>
    <th width="27%"><div align="center"><strong>To Amount</strong></div></th>
    <th width="17%"><div align="center"><strong>Per %</strong></div></th>
    <th width="20%"><div align="center"><strong>Amount</strong></div></th>
  </tr>
    <?php 
       $sr = 1;
       $payslabs = PaySlabs::LoadArrayBySalaryhead($_GET['id']);
       if($payslabs){
       foreach ($payslabs  as $payslab){   
      ?>
  <tr>
    <td> <div align="center">
      <?php $this->lbldelPay[$payslab->IdpaySlabs]->Render(); _p($sr++); ?>
    </div></td>
    <td><div align="center">
      <?php _p($payslab->From);?>
    </div></td>
    <td><div align="center">
      <?php _p($payslab->To);?>
    </div></td>
    <td><div align="center">
      <?php _p($payslab->Percentage);?>
    </div></td>
    <td><div align="center">
      <?php _p($payslab->Amount);?>
    </div></td>
  </tr>
    <?php }}?>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><?php $this->txtFromamt->Render(); ?></div></td>
    <td><div align="center"><?php $this->txtToamt->Render(); ?></div></td>
    <td><div align="center"><?php $this->txtPayper->Render(); ?></div></td>
    <td><div align="center"><?php $this->txtPayAmt->Render(); ?></div></td>
  </tr>
   </table>
    <?php } ?>
    <!--  Pay Slab Table !-->  
    <?php if($this->lstType->SelectedValue == 2){?>
   <table class="datagrid" width="90%"  border="1" style="border:1px solid #CCC; line-height:20px; ">
     <tr>
        <th width="9%"><div align="center"><strong>Sr</strong></div></th>
        <th width="37%"><div align="center"><strong>Salary Head 1</strong></div></th>
        <th width="17%"><div align="center"><strong>Calculation</strong></div></th>
        <th width="37%"><div align="center"><strong>Salary Head 2</strong></div></th>
     </tr>
     <?php 
       $sr = 1;
       $cals = Calculation::LoadArrayBySalaryHead($_GET['id']);
       if($cals){
       foreach ($cals as $cal){   
      ?>
     <tr>
       <td> <div align="center">
         <?php  $this->lbldelCal[$cal->Idcalculation]->Render();  _p($sr++); ?>
       </div></td>
       <td><div align="center">
           <?php _p($cal->SalaryHead1Object);?>
         </div></td>
       <td>
         <div align="center">
           <?php _p($cal->Operation);?>
         </div></td>
       <td>
         <div align="center">
           <?php _p($cal->SalaryHead2Object);?>
         </div></td>
     </tr>
       <?php }}?>
     <tr>
       <td>&nbsp;</td>
       <td><?php $this->lstHead1->Render(); ?></td>
       <td><?php $this->txtOperation->Render(); ?></td>
       <td><?php $this->lstHead2->Render(); ?></td>
     </tr>
   </table>
    <?php } ?>
    
        </div></div>
</td>
    <td width="11%" valign="top">
        <?php if(isset($_GET['id'])){ ?>
    	&nbsp;<?php $this->chkAllmonth->Render(); ?>Select All
  <?php 
  $j = 0;
  for($i=1; $i<=12; $i++){ ?>
  <div style="margin:5px; width:40%; float:left; ">
 <?php $this->chkMonths[$i]->Render(); ?> <?php $y = date('Y');  if($i < 10)$y = $y.'0';     _p(date('M', strtotime($y.$i.'01'))); ?>
    </div>
   <?php   }   ?>
        <?php } ?>    
    </td>
  </tr>
</table>
        <div class="form-actions">
          <div class="form-save"><?php $this->btnSave->Render(); ?></div>
            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
      </div>
    </div>

    <?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>