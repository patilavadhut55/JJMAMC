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
    <div class="pull-right" style=" width: 90%">
            <table width="100%" border="0">
                <tr>
                    <td width="41%"><?php $this->txtmember->RenderWithName(); ?></td>
                    <td width="27%"><?php $this->calFromDate->RenderWithName(); ?> </td>
                    <td width="20%"><?php $this->calToDate->RenderWithName(); ?></td>
                    <td width="12%"><?php $this->btnReport->Render(); ?></td>
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
   if(isset($_GET["from"])){
       $from = $_GET["from"];
       $to = $_GET["to"];
       $ledger = Ledger::LoadByIdledger($_GET["ledger"]);
?>
<div id="formPrint">
<h2><?php if(isset($_GET["ledger"])) _p($ledger->Name); ?> Ledger</h2>
From <?php _p(Date('d-m-Y', strtotime($from))); ?> To <?php _p(Date('d-m-Y', strtotime($to))); ?>
<table width="100%" border="1" class="datagrid">
  <tr>
    <th width="53" bgcolor="#CCCCCC" height="30"><div align="left">Sr.no.</div></th>
    <th width="77" bgcolor="#CCCCCC"><div align="center">V. No.</div></th>
    <th width="122" bgcolor="#CCCCCC"><div align="center">Date</div></th>
    <th width="344" bgcolor="#CCCCCC"><div align="center">Particulars</div></th>
    <th width="100" bgcolor="#CCCCCC"><div align="center">Cheque No &amp; Date</div></th>
    <th width="100" bgcolor="#CCCCCC"><div align="center">Dr.</div></th>
    <th width="100" bgcolor="#CCCCCC"><div align="center">Cr.</div></th>
    <th width="114" bgcolor="#CCCCCC"><div align="center">Closing Balance</div></th>
  </tr>
  <?php 
  $Sr =1;
  $dr = $cr = 0;
  $closing = 0;
  ?>
<tr>
    <td align="Center" height="30"><?php _p($Sr); $Sr = $Sr +1; ?></td>
    <td align="Center" height="30"></td>
    <td align="Center" height="30"></td>
    <td align="Center" height="30">Balance C/F</td>
    <td align="Center"></td>
    <?php 
    if(Date('m') <= 3) $Opy = Date('Y') - 1;
    else $Opy = Date('Y');
    
    $voutures = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::Voucher()->Date , date ('Ymd',  strtotime($Opy."0401"))),
                QQ::LessOrEqual(QQN::Voucher()->Date , date ('Ymd',  strtotime ($from))),
                QQ::Equal(QQN::Voucher()->Grp , NULL),
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Dr , $_GET["ledger"]),
                    QQ::Equal(QQN::Voucher()->Cr , $_GET["ledger"])
                )
            ),
                    QQ::OrderBy(QQN::Voucher()->Date, true)
            );
    $bal = 0;
    foreach ($voutures as $vouture){
       if($vouture->Dr == $_GET["ledger"]) $bal = $bal + $vouture->Amount;
       else $bal = $bal - $vouture->Amount;
    }
    ?>
    <td align="right">
      <div align="right">
        <?php
        if($bal >= 0){
            _p(number_format($bal, 2, '.', ','));
            $dr = $dr + $bal;
        }
        ?>&nbsp;
      </div></td>
    <td align="right">
      <div align="right">
        <?php
        if($bal <= 0){
            $bal = $bal * -1;
            _p(number_format($bal, 2, '.', ','));
            $cr = $cr + $bal;
        }
        ?>&nbsp;
    </div></td>
    <td align="right">
      <div align="right">
       <?php
       $closing = $dr - $cr;
             if($closing < 0){
                 $closing = $closing * -1;
                 _p($closing.' Cr.');
             }else{
                 _p($closing.' Dr.');
             }
      ?>
      </div></td>
  </tr>
<?php 
    $voutures = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::Voucher()->Date , date ('Ymd',  strtotime ($from))),
                QQ::LessOrEqual(QQN::Voucher()->Date , date ('Ymd',  strtotime ($to))),
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Dr , $_GET["ledger"]),
                    QQ::Equal(QQN::Voucher()->Cr , $_GET["ledger"])
                )
            ),
                    QQ::OrderBy(QQN::Voucher()->Date, true)
            );
    
    foreach ($voutures as $vouture){
        if($vouture->DrObject->Code == "D34" || $vouture->CrObject->Code == "D34"){}else{
?>
  <tr>
    <td align="Center" height="30"><?php _p($Sr); $Sr = $Sr +1; ?></td>
    <td align="Center">
<a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/account/voucher_edit.php?id<?php _p($vouture->Idvoucher); ?>" target="_blank">
<?php //if($ledger->Product == NULL) 
    _p($vouture->Code); //
//else _p($vouture->VoucherIdvoucherObject->Code);  ?>
    </a>
<?php
$refs = Voucher::QueryArray( 
                QQ::AndCondition(
                 QQ::Equal(QQN::Voucher()->RefNo, $vouture->Idvoucher)      
            ));
          
if($refs) foreach ($refs as $ref){ ?>
<a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/vouture/voucher_edit.php/<?php _p($ref->Idvoucher); ?>" target="_blank">
<?php _P("<br/>Ref.".$ref->InvNo, FALSE); ?>
</a>
<?php } ?>
    </td>
    <td align="Center"><?php //if($ledger->Product == NULL) 
        _p(date('d-m-Y', strtotime($vouture->Date)));  ?></td>
    <td>&nbsp;<?php 
        if($vouture->Dr != $_GET["ledger"]) _p($vouture->DrObject); else _p($vouture->CrObject); 
     ?>
    <?php  
        if($vouture->Narration != NULL){ 
            _P('<Br/>'.$vouture->Narration, FALSE);
        }else{
           _P('<Br/>'.$vouture->GrpObject->CommanNarration, FALSE);         
        }
    ?></td>
    <td align="right"><?php /*if($vouture->ChkDdNo != NULL) _p($vouture->ChkDdNo.' - '.date('d/m/Y',  strtotime ($vouture->Dated)));*/?></td>
    <td align="right">
      <div align="right">
        <?php
     
        if($vouture->Dr == $_GET["ledger"]){
            _p(number_format($vouture->Amount, 2, '.', ','));
            $dr = $dr + $vouture->Amount;
        }
        ?>&nbsp;
      </div></td>
    <td align="right"><div align="right">
      <?php
        
        if($vouture->Cr == $_GET["ledger"]){
            _p(number_format($vouture->Amount, 2, '.', ','));
            $cr = $cr + $vouture->Amount;
        }
        ?>
      &nbsp; </div></td>
    <td align="right">
      <div align="right">
       <?php
       $closing = $dr - $cr;
             if($closing < 0){
                 $closing = $closing * -1;
                 _p($closing.' Cr.');
             }else{
                 _p($closing.' Dr.');
             }
      ?>
      </div></td>
  </tr>
   <?php }} ?>
  <tr>
    <th width="53" height="30"><div align="center">-</div></th>
    <th width="77"><div align="center"></div></th>
    <th width="122"><div align="center"></div></th>
    <th width="344"><div align="center"></div></th>
    <th width="100">&nbsp;</th>
    <th width="100"><div align="right"></div></th>
    <th width="100"><div align="right"></div></th>
    <th width="114"><div align="right"></div></th>
  </tr>
  <tr>
    <th width="53" height="30"><div align="center"></div></th>
    <th width="77"><div align="center"></div></th>
    <th width="122"><div align="center"></div></th>
    <th width="344"><div align="right">Balance C/f &nbsp;</div></th>
    <th width="100">&nbsp;</th>
    <th width="100"><div align="right">
      <?php
        if($cr >= $dr) _p(number_format ($cr - $dr,2,'.','')); else _p(0);
        ?>&nbsp;
    </div></th>
    <th width="100"><div align="right">
      <?php
        if($dr >= $cr) _p(number_format ($dr - $cr,2,'.','')); else _p(0);
        ?>
      &nbsp; </div></th>
    <th width="114"><div align="right">&nbsp;
    </div></th>
  </tr>
  <tr>
    <th width="53" height="30"><div align="center"></div></th>
    <th width="77"><div align="center"></div></th>
    <th width="122"><div align="center"></div></th>
    <th width="344"><div align="right">Total&nbsp;</div></th>
    <th width="100">&nbsp;</th>
    <th width="100"><div align="right">
      <?php
      if($dr == $cr) _p(number_format ($dr,2,'.',''));
      if($dr > $cr) _p(number_format ($dr,2,'.',''));
      if($cr > $dr) _p(number_format ($cr,2,'.',''));
    ?>&nbsp;
    </div></th>
    <th width="100"> <div align="right">
      <?php
      if($dr == $cr) _p(number_format ($dr,2,'.',''));
      if($dr > $cr) _p(number_format ($dr,2,'.',''));
      if($cr > $dr) _p(number_format ($cr,2,'.',''));
    ?>
      &nbsp; </div></th>
    <th width="114"> <div align="right">&nbsp;
    </div></th>
  </tr>
</table>
   <?php } ?>            
</div>
</div>

<?php $this->RenderEnd() ?>