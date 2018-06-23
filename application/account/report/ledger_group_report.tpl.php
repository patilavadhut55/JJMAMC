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
 <div class="form-controls" >
     <div class="pull-right" style="width: 90%">
     <table width="534" border="0">
      <tr>
        <td width="235"><?php $this->lstledger->Render(); ?></td>
        <td width="230">&nbsp;<?php $this->btnReport->Render(); ?>&nbsp;</td>
      </tr>
     </table>
     </div>
     <div class="pull-left" style="width: 10%">
     <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
    </a>    
     </div>
     <div style="clear: both"></div>
<?php 
if(isset($_GET['ledger'])){
$ledger = Ledger::LoadByIdledger($_GET['ledger']);   
?>

 <div id="formPrint" style="background-color:#FFF;">
<h4><?php _p($this->lstledger->SelectedName); ?> Group Ledgers Report </h4>
<table width="100%" border="0" class="datagrid" style="font-size:16px; line-height:30px;">
  <tr>
    <th width="36">Sr</th>
    <th width="288">Ledger</th>
    <th width="162">Opening Balance</th>
    <th width="162">Closing Balance</th>
  </tr>
  <?php 
  $totalopening = $totalClosing =0 ;
  $subledgers = Ledger::LoadArrayByGrp($_GET['ledger']);
  $sr = 1;        
  foreach ($subledgers as $subledger){
  $m = date('m');
  $y = date('Y');
  if($m <= 3) $y = $y -1;
  $dr = $cr = $odr = $ocr = $closing = $opening =  0;
  
  //debit closing Balance
  $debits = Voucher::QueryArray(
            QQ::AndCondition(
            QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime($y.'0401')).'000000'),
            QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime(QDateTime::Now())).'235959'),
            QQ::OrCondition(
            QQ::Equal(QQN::Voucher()->Dr, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->DrObject->Grp, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, $subledger->Idledger)
                    )
                    ));
  if($debits){
      foreach ($debits as $debit){
          $dr = $dr + $debit->Amount;
      }
  }
  
 //credit closing Balance
  $credits = Voucher::QueryArray(
            QQ::AndCondition(
            QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime($y.'0401')).'000000'),
            QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime(QDateTime::Now())).'235959'),
            QQ::OrCondition(
            QQ::Equal(QQN::Voucher()->Cr, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->CrObject->Grp, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Grp, $subledger->Idledger)        
                    )        
                    ));
  if($credits){
      foreach ($credits as $credit){
          $cr = $cr + $credit->Amount;
      }
  }
  //debit opening Balance
  $odebits = Voucher::QueryArray(
            QQ::AndCondition(
            QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime($y.'0401')).'000000'),
            QQ::LessThan(QQN::Voucher()->Date, date('Ymd', strtotime(QDateTime::Now())).'235959'),
            QQ::OrCondition(
            QQ::Equal(QQN::Voucher()->Dr, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->DrObject->Grp, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, $subledger->Idledger)        
                    )        
                    ));
  if($odebits){
      foreach ($odebits as $odebit){
          $odr = $odr + $odebit->Amount;
      }
  }
  
 //credit opening Balance
  $ocredits = Voucher::QueryArray(
            QQ::AndCondition(
            QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime($y.'0401')).'000000'),
            QQ::LessThan(QQN::Voucher()->Date, date('Ymd', strtotime(QDateTime::Now())).'235959'),
            QQ::OrCondition(
            QQ::Equal(QQN::Voucher()->Cr, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->CrObject->Grp, $subledger->Idledger),
            QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Grp, $subledger->Idledger)        
                    )        
                    ));
  if($ocredits){
      foreach ($ocredits as $ocredit){
          $ocr = $ocr + $ocredit->Amount;
      }
  }
  $opening = $odr - $ocr;
          
  $closing = $dr - $cr;
 
  $subsubledgers = Ledger::LoadArrayByGrp($subledger->Idledger);
  ?>
   <tr onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/account/report/<?php if($subsubledgers) { ?>ledger_group_report.php<?php }else{ ?>new_ledger_report.php<?php } ?>?ledger=<?php _p($subledger->Idledger); ?>'">
   <td><?php _p($sr++); ?></td>
    <td><?php _p($subledger->Name); ?></td>
    <td align="right"><?php if($opening < 0 ){ $opening = $opening * -1;  _p(number_format($opening,2,'.','').' Cr'); }else{ _p(number_format($opening,2,'.','').' Dr'); } $totalopening = $totalopening + $opening; ?>&nbsp;</td>
    <td align="right"><?php if($closing < 0 ){ $closing = $closing * -1;  _p(number_format($closing,2,'.','').' Cr'); }else{ _p(number_format($closing,2,'.','').' Dr'); }   $totalClosing = $totalClosing + $closing;?>&nbsp;</td>
  </tr>
  <?php } ?>
  <tr>
      
    <td>&nbsp;</td>
    <td><div align="right"><strong>Total&nbsp;&nbsp;</strong></div></td>
    <td align="right"><div align="right"><strong>
      <?php _p(number_format($totalopening,2,'.','')); ?>
      &nbsp;</strong></div></td>
    <td align="right"><div align="right"><strong>
      <?php _p(number_format($totalClosing,2,'.','')); ?>
      &nbsp;</strong></div></td>
  </tr>

</table>

</div>
</div>
<?php } ?>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>