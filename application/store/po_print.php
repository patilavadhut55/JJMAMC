<?php require('../../qcubed.inc.php');
        $login = Login::LoadByIdlogin($_SESSION['login']); 
        $vov = Voucher::LoadByIdvoucher($_GET['id']);  
        $suuplier = Ledger::LoadByIdledger($vov->Dr);
?>
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>
<body onLoad="window.print(); self.location='requirement_list.php';">

<table width="713" border="1" height="900">
  <tr>
    <td width="703" valign="top" align="center"><table width="690" border="0" style="line-height:30px;">
      <tr>
        <td colspan="2"><div align="center">
          <table width="650" border="0">
            <tr>
              <td width="73" rowspan="3"><img src="../../assets/_core/images/logo.png" width="100"   alt=""/></td>
              <td width="567"><h3 align="center">Demo College</h3></td>
              </tr>
            <tr>
              <td><div align="center">
                      Sangli
                  </div></td>
              </tr>
            <tr>
              <td><div align="center">
               98985623568, 9514785266
              </div></td>
            </tr>
            </table>
          </div></td>
      </tr>
      <tr>
        <td height="42" colspan="2" align="center"><table width="675" border="0">
          <tr>
            <td width="515" align="center"><h4>Purchase Order No <?php _p($vov->InvNo); ?></h4></td>
            <td width="150"><strong>Date <?php _p(date('d/m/Y',  strtotime($vov->Date))); ?></strong></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2">To,</td>
      </tr>
      <tr>
        <td colspan="2"><?php _p($vov->DrObject);?></td>
      </tr>
      <tr>
          <td colspan="2">Ref .  Your Quotation No <?php _p($vov->RefNoObject->InvNo);?>. Date <?php _p(date('d/m/Y', strtotime($vov->RefNoObject->Date)));?></td>
      </tr>
      <tr>
        <td colspan="2">We have pleasure in placing with you our order for the following:-</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="498" colspan="2" align="center" valign="top"><table width="649" border="1">
          <tr>
            <td width="22"><div align="center">Sr</div></td>
            <td width="189"><div align="center">Particulars</div></td>
            <td width="51"><div align="center">Quantity</div></td>
            <td width="66"><div align="center">Rate Per Unit</div></td>
            <td width="60"><div align="center">Amount</div></td>
            <td width="79"><div align="center">Net Amount</div></td>
            </tr>
            <?php $vhps = VoucherHasItem::LoadArrayByVoucherIdvoucher($vov->Idvoucher);
                  $sr = 0;
                foreach ($vhps as $vhp){  
                $sr = $sr + 1;    
            ?>
          <tr>
            <td><div align="center">
              <?php _p($sr); ?>
            </div></td>
            <td>&nbsp;<?php _p($vhp->ItemObject); ?></td>
            <td><div align="center">
              <?php _p($vhp->Qty); ?>
            </div></td>
            <td><div align="right">
              <?php _p(number_format($vhp->Rate,2,'.','')); ?>&nbsp;
            </div></td>
            <td><div align="right">
              <?php _p(number_format($vhp->Amount,2,'.','')); ?>&nbsp;
            </div></td>
            <td><div align="right">
              <?php _p(number_format($vhp->NetAmount,2,'.','')); ?>&nbsp;
            </div></td>
            </tr>
                  <?php } ?>
          <tr>
            <td colspan="5"><div align="right">Net Amount&nbsp;</div></td>
            <td ><div align="right"><?php _p(number_format($vov->Amount,2,'.','')); ?>&nbsp;</div></td>
            </tr>
          <tr>
              <td colspan="6">&nbsp;&nbsp;(Ruppes In Words <?php _p(convert_number($vov->Amount)); ?> Only)</td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td colspan="2"><div style="font-size:12px;">Taxes &amp; Statutory duties:  ( please put mark) to the  clause  applicable :<br>ii) Price is exclusive of tax  and  following  additional  amount to be paid  on taxes and statutory dues;(as stated above)<br>Payment Terms : Payment after delivery/Payment against proforma</div></td>
      </tr>
      <tr>
          <td width="341" height="65" valign="bottom"><strong>Date: <?php _p(date('d/m/Y',  strtotime($vov->Date))); ?></strong></td>
        <td width="339" valign="bottom" align="center"><strong>Signature</strong></td>
      </tr>
    </table></td>
  </tr>
</table>
