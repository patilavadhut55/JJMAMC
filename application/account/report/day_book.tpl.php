<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
 <?php $this->RenderBegin() ?>
<script language="javascript">
	function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("print").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>
<?php
//$login = Login::LoadByIdlogin($_SESSION['idlogin']);
$recpts = 0;
$pays= 0;
?>

<div class="form-controls">
    <div class="pull-right" style="width: 90%"> <?php $this->caldate->RenderWithName(); ?></div>
    <div class="pull-left" style="width: 10%">
        <a href="javascript:Clickheretoprint()">
           <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //$this->btnPrint->Render(); ?>
    </div>
    <div style="clear: both"></div>
<?php 
if($this->caldate->Text != ""){
        $date = date('Ymd', strtotime($this->caldate->Text));
?>
<div id="print" style="background-color:#FFF;">
    <?php 
    $dr =  $cr = 0;
    $y = Date('Y');
    if(date('m') <= 3) $y = $y - 1;
    $vovs = Voucher::QueryArray(
                  QQ::AndCondition(
                  QQ::LessThan(QQN::Voucher()->Date, date('Ymd', strtotime($date)).'000000'),
                  QQ::GreaterOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($y.'0401')).'000000'),
                  QQ::OrCondition(
                  QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Code, "D13"),
                  QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Code, "D13")
                    )
                )); 
    if($vovs)
        foreach ($vovs as $vov){
            if($vov->DrObject->GrpObject->Code == "D13") $dr = $dr + $vov->Amount;
            else $cr = $cr + $vov->Amount;
        }
       $opning = $dr - $cr;
       $dr =  $cr = 0;
    ?>
    <div style="text-align: center">        
         <h3>
            <?php
                $actcpy = Settings::LoadByName("Active Company");
                $company = Role::LoadByIdrole($actcpy->Option);
                $add = Address::LoadArrayByRoll($company->Idrole);
                if($add) _p($company->Name.','.$add[0]->AddressLine1.','.$add[0]->Contact1);
               
            ?>
        </h3>
        <h4>Day Book</h4>
        <h4><?php _p('Date '.'-' .$this->caldate->Text);?></h4>
    </div>
    <table width="100%" border="1" >
              <tr>
                <th width="267" height="40"><div align="center"><strong>Particular</strong></div></th>
                <th width="73"><div align="right"><strong>Amount&nbsp;</strong></div></th>
                <th width="73"><div align="right"><strong>Amount&nbsp;</strong></div></th>
                <th width="267" height="40"><div align="center"><strong>Particular</strong></div></th>
                <th width="73"><div align="right"><strong>Amount&nbsp;</strong></div></th>
                <th width="73"><div align="right"><strong>Amount&nbsp;</strong></div></th>
              </tr>
              <tr>
              <?php if($opning > 0){ ?>
                <td height="20">&nbsp;<strong>Opening Balance</strong></td>
                <td></td>
                <td><div align="right"><strong><?php _p(number_format($opning,2,'.','')); $dr = $opning; ?>&nbsp;</strong></div></td>
              <?php }else{ ?>
                <td></td>
                <td></td>
                <td></td>
              <?php } ?>
              <?php
                if($opning < 0){ ?>
                <td height="20">&nbsp;<strong>Opening Balance</strong></td>
                <td></td>
                <td><div align="right"><strong>
                  <?php _p(number_format($opning*-1,2,'.','')); $cr = $opning*-1; ?>&nbsp;
                </strong></div>
                </td>
              <?php }else{ ?>
                <td></td>
                <td></td>
                <td></td>
              <?php } ?>
          </tr>
          <?php 
          $Vouchers = Voucher::QueryArray(
                    QQ::AndCondition(
                        QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime($date)).'235959'),
                        QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd', strtotime($date)).'000000'),
                        QQ::OrCondition(
                            QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Code, "D13"),
                            QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Code, "D13")
                        )
                    )
                );
          $ledger = array();
          $vou = array();
          
          foreach ($Vouchers as $Voucher){
              if($Voucher->DrObject->GrpObject->Code != "D13")
              if(array_key_exists($Voucher->Dr, $ledger)) $ledger[$Voucher->Dr] = $ledger[$Voucher->Dr] + $Voucher->Amount;
              else $ledger[$Voucher->Dr] = $Voucher->Amount;
              
              if($Voucher->CrObject->GrpObject->Code != "D13")
              if(array_key_exists($Voucher->Cr, $ledger)) $ledger[$Voucher->Cr] = $ledger[$Voucher->Cr] - $Voucher->Amount;
              else $ledger[$Voucher->Cr] = -$Voucher->Amount;
          }
          
          foreach ($ledger as $key => $ledge){
              $getled = Ledger::LoadByIdledger($key);
              if($ledge == 0){}else if($ledge < 0){
                  $amt = $ledge * -1;
                  $dr = $dr + $amt;
          ?>
        <tr>
            <td width="267" height="20"
                onClick="document.location='ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($date); ?>&to=<?php _p($date); ?>'"
                ><div align="left"><?php _p($getled->Name); ?></div></td>
            <td width="73"><div align="right"><?php _p(number_format($amt, 2, '.', '')); ?>&nbsp;</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="267"><div align="left"></div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"></div></td>
        </tr>
          <?php }else{
             $cr = $cr + $ledge;
          ?>
          <tr>
            <td width="267" height="20"><div align="left"></div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"></div></td>
            <td width="267"
            onClick="document.location='ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($date); ?>&to=<?php _p($date); ?>'"><div align="left"><?php _p($getled->Name); ?></div></td>
            <td width="73"><div align="right"><?php _p(number_format($ledge, 2, '.', '')); ?>&nbsp;</div></td>
            <td width="73"><div align="right"></div></td>
          </tr>
          <?php }} ?>
          <tr>
            <td width="267" height="20"><div align="right">Total</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"><?php if($opning > 0) _p(number_format($dr - $opning, 2, '.', '')); else _p(number_format($dr, 2, '.', '')); ?>&nbsp;</div></td>
            <td width="267" height="20"><div align="right">Total</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"><?php if($opning < 0) _p(number_format($cr - $opning, 2, '.', '')); else _p(number_format($cr, 2, '.', '')); ?>&nbsp;</div></td>
          </tr>
          <?php if($dr == $cr){}elseif($dr < $cr){ ?>
          <tr>
            <td width="267" height="20"><div align="right">Closing Balance</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"><?php _p(number_format($cr - $dr, 2, '.', '')); ?>&nbsp;</div></td>
            <td width="267" height="20"><div align="right">Total</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"></div></td>
          </tr>
          <?php }else{ ?>
          <tr>
            <td width="267" height="20"><div align="right"></div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"></div></td>
            <td width="267" height="20"><div align="right">Closing Balance</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"><?php _p(number_format($dr - $cr, 2, '.', '')); ?>&nbsp;</div></td>
          </tr>
          <?php } ?>
          <tr>
            <td width="267" height="20"><div align="right">Total</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"><?php if($dr < $cr) _p(number_format($cr, 2, '.', '')); else  _p(number_format($dr, 2, '.', '')); ?>&nbsp;</div></td>
            <td width="267" height="20"><div align="right">Total</div></td>
            <td width="73"><div align="right"></div></td>
            <td width="73"><div align="right"><?php if($dr < $cr) _p(number_format($cr, 2, '.', '')); else  _p(number_format($dr, 2, '.', '')); ?>&nbsp;</div></td>
          </tr>
        </table>
</div>
</div>
<?php } ?>

<?php $this->RenderEnd() ?>