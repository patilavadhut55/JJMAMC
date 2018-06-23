<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<?php
//$login = Login::LoadByIdlogin($_SESSION['idlogin']);
$recpts = 0;
$pays= 0;
?>

    <?php if($this->calfrom->Text != "" && $this->calto->Text != ""){
        $from = date('Ymd',  strtotime($this->calfrom->Text));
        $to = date('Ymd', strtotime($this->calto->Text));        
    ?>
<script language="javascript">
	function Clickheretoprint(){
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("formprint").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>  

<div class="form-controls">
    
    <div class="pull-left" style="width: 10%">
        <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>    
    <div class="pull-right" style="width: 90%">
        <table width="100%" border="0">
            <tr>
                <td><?php $this->calfrom->RenderWithName(); ?></td>
                <td><?php $this->calto->RenderWithName(); ?></td>
                <td width="30%"><?php $this->chkDetail->Render(); ?><strong>Show Details</strong></td>
            </tr>        
        </table>
    </div>
    <div style="clear: both;"></div>
  <div id="formprint" align="center" style="line-height:25px; ">
      
      <div style="text-align: center">        
         <h3>
            <?php
                $actcpy = Settings::LoadByName("Active Company");
                $company = Role::LoadByIdrole($actcpy->Option);
                $add = Address::LoadArrayByRoll($company->Idrole);
                if($add) _p($company->Name.','.$add[0]->AddressLine1.','.$add[0]->Contact1);
               
            ?>
        </h3>
        <h4>Balance Sheet</h4>
        <h4><?php _p('From '.' ' .$this->calfrom->Text.'  '.'To '.' ' .$this->calto->Text);?></h4>
    </div>
    <table width="100%" border="1" style="line-height: 20px;">
<tr>
<td >
    <?php $dr = 0; $cr = 0;
               //_p($login->CompanyObject->Name); ?>
<table width="100%" border="0">
  
  <tr>
      <td height="39" colspan="4" align="center"><h4>
          <div style="float: left; margin-left:5px;">Balance Sheet</div><div style="float: right;"></div></h4>
        <table width="100%" border="1">
          <tr>
            <td width="487"><div style="float:left; line-height: 30px; font-size:16px"><strong>&nbsp;
                <?php $Liability = Ledger::LoadByCode("D3"); ?><?php _p($Liability->Name); ?> </strong></div>
              <span style="float: right; line-height: 30px;">
              <?php _p(Date('d M Y', strtotime($from)).' to '.Date('d M Y', strtotime($to))); ?>
            &nbsp;</span></td>
            <td width="490"><div style="float:left; line-height: 30px; font-size:16px;"><strong>&nbsp;
                        <?php $Asset = Ledger::LoadByCode("D2"); $Gptotal = 0;?><?php _p($Asset->Name); ?></strong></div>
              <span style="float: right;  line-height: 30px;">
            <?php _p(Date('d M Y', strtotime($from)).' to '.Date('d M Y', strtotime($to))); ?>
            	&nbsp;</span></td>
          </tr>
          <tr>
            <td valign="top">
            <table width="100%" border="0" style="margin-top: 30px;">
              <?php 
              $Gtotal = $Gptotal = 0;
              $ledgers = Ledger::LoadArrayByGrp($Liability->Idledger);
              foreach ($ledgers as $ledger){
              ?>
                <tr>
                <td width="250"><strong>&nbsp;
                <?php
                    $ledgerofs = Ledger::LoadArrayByGrp($ledger->Idledger);
                    $total = 0; 
                        $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Dr, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->DrObject->Grp, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, $ledger->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total - $vouture->Amount; 
                        }
                        
                        $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->CrObject->Grp, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Grp, $ledger->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total + $vouture->Amount; 
                        }
                ?><?php _p($ledger->Name); ?></strong></td>
                <td width="110"><div align="right"></div></td>
                <td width="111"><div align="right">
                    <?php _p(number_format($total, 2, '.', ','));
                    $Gtotal = $Gtotal + $total; $dr = $dr + $total; 
                    ?>&nbsp;
                    </div></td>
              </tr>
              <?php
              if($this->chkDetail->Checked == TRUE)
              foreach ($ledgerofs as $ledgerof){
                  $total = 0; 
                  $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Dr, $ledgerof->Idledger),
                                            QQ::Equal(QQN::Voucher()->DrObject->Grp, $ledgerof->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total - $vouture->Amount; 
                        }
                        
                        $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $ledgerof->Idledger),
                                            QQ::Equal(QQN::Voucher()->CrObject->Grp, $ledgerof->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total + $vouture->Amount; 
                        }
              ?>
              <tr>
                <td height="25"><a href="ledger_group_report.php?ledger=<?php _p($ledgerof->Idledger); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>&varified=1" target="_blank">&nbsp;&nbsp;&nbsp;<?php _p($ledgerof->Name); ?>
                </a></td>
                 <td width="110"><div align="right">
                    <?php _p(number_format($total, 2, '.', ','));
                    $Gtotal = $Gtotal + $total;
                    ?>&nbsp;
                    </div>
                 </td>
              </tr>
              <?php } ?>
              <tr>
                <td></td>
                <td><div style="border-bottom: 1px solid #000;"></div></td>
                <td><div align="right"></div></td>
              </tr>
              <?php } ?>
            </table></td>
            <td valign="top">
                <table width="100%" border="0" style="margin-top: 30px;">
              <?php 
              $Gtotal = $Gptotal = 0;
              $ledgers = Ledger::LoadArrayByGrp($Asset->Idledger);
              foreach ($ledgers as $ledger){
              ?>
              <tr>
                <td width="256"><strong>&nbsp;
                  <?php
                    $ledgerofs = Ledger::LoadArrayByGrp($ledger->Idledger);
                    $total = 0; 
                        $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Dr, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->DrObject->Grp, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, $ledger->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total - $vouture->Amount; 
                        }
                        
                        $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->CrObject->Grp, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Grp, $ledger->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total + $vouture->Amount; 
                        }
                ?>
                  <?php _p($ledger->Name); ?>
                </strong></td>
                <td width="110"><div align="right"></div></td>
                <td width="110"><div align="right">
                  <?php _p(number_format($total * -1, 2, '.', ','));
                    $Gtotal = $Gtotal + $total; $cr = $cr + $total * -1;
                    ?>
                  &nbsp; </div></td>
              </tr>
              <?php
              if($this->chkDetail->Checked == TRUE)
              foreach ($ledgerofs as $ledgerof){
                  $total = 0; 
                  $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Dr, $ledgerof->Idledger),
                                            QQ::Equal(QQN::Voucher()->DrObject->Grp, $ledgerof->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total - $vouture->Amount; 
                        }
                        
                        $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($from))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($to))),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $ledgerof->Idledger),
                                            QQ::Equal(QQN::Voucher()->CrObject->Grp, $ledgerof->Idledger)
                                            )
                            )
                            );
                        foreach($voutures as $vouture){
                            $total = $total + $vouture->Amount; 
                        }
              ?>
              <tr>
                <td height="25"><a href="ledger_group_report.php?ledger=<?php _p($ledgerof->Idledger); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>&varified=1" target="_blank">&nbsp;&nbsp;&nbsp;
                  <?php _p($ledgerof->Name); ?>
                </a></td>
                <td width="110"><div align="right">
                  <?php _p(number_format($total*-1, 2, '.', ',')); 
                    $Gtotal = $Gtotal + $total;
                    ?>
                  &nbsp; </div></td>
              </tr>
              <?php } ?>
              <tr>
                <td></td>
                <td><div style="border-bottom: 1px solid #000;"></div></td>
                <td><div align="right"></div></td>
              </tr>
              <?php } ?>
            </table></td>
          </tr>
          <?php 
          //This code is used for getting PNDL Value
          $led = Ledger::LoadByCode("D33");
          $pndl = $led->Description;
          
          if($pndl < 0){
          ?>
          <tr>
            <td><strong><div style="float:left">&nbsp;Profit & loss A/C</div><div style="float:right;"><?php _p(number_format($pndl * -1, 2, '.', ',')); $dr = $dr + $pndl * -1; ?>&nbsp;</div></strong></td>
            <td></td>
          </tr>
          <?php }else{ ?>
          <tr>
            <td></td>
            <td><strong><div style="float:left">&nbsp;Profit & loss A/C</div><div style="float:right;"><?php _p(number_format($pndl, 2, '.', ',')); $cr = $cr + $pndl; ?>&nbsp;</div></strong></td>
          </tr>
          <?php } ?>
          <tr>
            <td><strong><div style="float:left">&nbsp;Bal.</div><div style="float:right;"><?php if($dr < $cr) _p(number_format($cr - $dr, 2, '.', ',')); ?>&nbsp;</div></strong></td>
            <td><strong><div style="float:left">&nbsp;Bal.</div><div style="float:right;"><?php if($dr > $cr) _p(number_format($dr - $cr, 2, '.', ',')); ?>&nbsp;</div></strong></td>
          </tr>
          <tr>
            <td><strong><div style="float:left">&nbsp;Total</div><div style="float:right;"><?php if($dr > $cr) _p(number_format($dr, 2, '.', ',')); else _p(number_format($cr, 2, '.', ',')); ?>&nbsp;</div></strong></td>
            <td><strong><div style="float:left">&nbsp;Total</div><div style="float:right;"><?php if($dr > $cr) _p(number_format($dr, 2, '.', ',')); else _p(number_format($cr, 2, '.', ',')); ?>&nbsp;</div></strong></td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><div align="center"></div></td>
  
  </tr>
  <tr>
    <td colspan="3" valign="top"><div align="right"></div></td>
  
  </tr>
  </table>
</td>
</tr>
</table>
  </div>
</div>
<?php } ?>
<?php $this->RenderEnd() ?>