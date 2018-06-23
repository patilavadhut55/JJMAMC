<?php
    require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
<script language="javascript">
	function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("formPrint").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>
<div class="form-controls">
    <div class="pull-right" style="width: 90%">
     <table width="534" border="0">
      <tr>
        <td width="235"><?php $this->lstledger->Render(); ?></td>
        <td width="230">&nbsp;<?php $this->btnReport->Render(); ?>&nbsp;
          <?php $this->btnCustome->Render(); ?></td>
      </tr>
     </table>
    </div>
    <div class="pull-left"style="width: 10%">
        <a href="javascript:Clickheretoprint()">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>  
    </div>
    <div style="clear: both"></div>  
<?php 
if(isset($_GET['ledger'])){
$ledger = Ledger::LoadByIdledger($_GET['ledger']);   
?>

<div id="formPrint" style="line-height:25px;">
<h4><?php if($ledger->GrpObject->Grp == 23 || $ledger->GrpObject->Grp == 27){_p($this->lstledger->SelectedName);?>'s <?php }else{_p($this->lstledger->SelectedName);}?> Ledger Report </h4>
<table width="100%" border="0" class="datagrid" style="line-height:25px; font-size:16px;">
  <tr>
    <th width="225"><div align="center">Month</div></th>
    <th width="138"><div align="center">Opening Balance</div></th>
    <th width="138"><div align="center">Closing Balance</div></th>
  </tr>
<?php
    $y = 2015;
    $m = 4;
    $op = 0;
    for($i=1; $i <= 12; $i++){
        
        if($m < 10){ 
            $m = (int)$m;
            $m = "0".$m; }        
    $bal = $dr = $cr = 0;
    
    $voutures = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::Voucher()->Date , date ('Ymd',  strtotime ($y.$m."01")).'000000'),
                QQ::LessOrEqual(QQN::Voucher()->Date , date ('Ymd',  strtotime ($y.$m."31")).'235959'),
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Dr , $_GET["ledger"]),
                    QQ::Equal(QQN::Voucher()->Cr , $_GET["ledger"])
                )
            ),
                    QQ::OrderBy(QQN::Voucher()->Date, true)
            );
    if($voutures){
    foreach ($voutures as $vouture){
        if($vouture->Dr == $_GET["ledger"]){
            $bal = $bal + $vouture->Amount;
        }else{
            $bal = $bal - $vouture->Amount;
        }
    }
        
?>
<tr onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/account/report/ledger_report_edit.php?ledger=<?php _p($_GET["ledger"]);?>&from=<?php _p(date ('Ymd',  strtotime ($y.$m."01"))); ?>&to=<?php _p(date ('Ymd',  strtotime ($y.$m."31"))); ?>'">
  <td width="225"><div align="left">&nbsp;
    <?php _p(date("M Y", strtotime($y.$m."01"))); ?></div></td>
    <td width="138"><div align="right">
    <?php
    $bal = $bal + $op;
    if($m == 4){
        $opns = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Dr , $_GET["ledger"]),
                    QQ::Equal(QQN::Voucher()->Cr , $_GET["ledger"])
                )
            ),
                    QQ::OrderBy(QQN::Voucher()->Date, true)
            );
        if($opns){foreach ($opns as $opn){} $op = $opn->Amount;}
    }
    if($op < 0){ $op = $op * -1; $op = $op." Cr."; }else{ $op = $op." Dr."; }
    _p($op); ?>&nbsp;</div></td>
    <td width="138"><div align="right"><?php 
        $op = $bal;
        if($bal < 0){ $bal = $bal * -1; $bal = $bal." Cr."; }else{ $bal = $bal." Dr."; }
        _p($bal);
    ?>&nbsp;</div></td>
  </tr>
<?php 
    
    }
    $m = $m + 1;
        if($m == 13){
            $m = 1;
            $y = 2016;  
        }
        } ?>
</table>
</div>
</div>
<?php } ?>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>