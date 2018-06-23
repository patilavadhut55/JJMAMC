<?php require('../../qcubed.inc.php'); ?>
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>

<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<body onLoad="window.print(); self.location='voucher_print.php';">

    <!--?php 
if (isset($_GET['id'])){
    $vov = Voucher::LoadByIdvoucher($_GET['id']);
?-->            
<table width="90%" border="1" style="font-family:Arial; line-height:15px; font-size:12px;">
  <tr>
    <td align="center" valign="top">
    <table width="690" border="0">
     <tr>
      <td colspan="2" >
        <div>
        <h3 align="center" >Tax Invoice</h3>
        <h4 align="center">
            <!--?php 
                $actcpy = Settings::LoadByName("Active Company");
                $company = Role::LoadByIdrole($actcpy->Option);
                 $add = Address::LoadArrayByRoll($company->Idrole);
                _p($company->Name.','.$add[0]->AddressLine1);
            ?-->
            <br/>
            <!--?php _p($add[0]->AddressLine1); ?-->
            <br/>
            <!--?php _p($add[0]->Contact1); ?-->
        </h4>
        </div>  
       </td>
     </tr>
     <tr>
       <td colspan="2">
           <table width="690" border="1">
         <tr>
          <td>
            <div>
               <div style="clear:both; float: left; margin: 10px;">
                    Invoice To<br>    
                    <strong>Customer Name:</strong><br/>
                    &nbsp;&nbsp;<!--?php _p($vov->DrObject); ?--><br/>
                    &nbsp;&nbsp;&nbsp;<!--?php $member = Address::LoadArrayByOf($vov->Dr);
                    if($member)
                        _p($member[0]->AddressLine1.' , '.$member[0]->DistrictObject);
                    ?-->
                </div>
                <div style="float: right;width: 300px;">
                    <div style="float: left;padding: 10px 0px 10px 0px;">Invoice No: <!--?php _p($vov->InvNo);?--></div>
                    <div style=" float: right;padding: 10px 0px 10px 0px;">Invoice Date: <!--?php _p(date('d/m/Y',  strtotime($vov->Date)));?--></div>
                    <div style="clear: both;"></div>
                    <div style="float: left;padding: 10px 0px 10px 0px;">
                        Narration : <br>
                            <!--?php _p($vov->GrpObject->CommanNarration); ?-->
                    </div>
                    <div style="padding: 10px 0px 10px 0px;float: right;">
                        SalesMan Name<br>
                            <!--?php _p($vov->DataByObject->Name); ?-->
                        </div>
                    </div>
            </div>
          </td>
          </tr>
         </table>
       </td>
     </tr>
     <tr>
        <td colspan="2" valign="top">
        <table width="690" border="1" style="font-size:12px; margin-top:5px;">
          <tr>
            <td width="30" height="20"><div align="center">Sr</div></td>
            <td width="90"><div align="center">Brand</div></td>
            <td width="198"><div align="center">Item Description</div></td>
            <td width="73"><div align="center">Qty</div></td>
            <td width="49"><div align="center">Per</div></td>
            <td width="88"><div align="center">Item Rate</div></td>
            <td width="116"><div align="center">Amount</div></td>
            </tr>
    <!--?php 
	$mainvhp = Voucher::LoadByIdvoucher($_GET['id']);
	$vhps = VoucherHasItem::LoadArrayByVoucher($_GET['id'], QQ::OrderBy(QQN::VoucherHasItem()->IdvoucherHasItem));
    $disc = $net = $mrp = $grossamt = $taxAmt = $discAmt = $amount = 0;
    if($vhps)
    {
     $sr= 0;   
     
    foreach ($vhps as $vhp){
        $product = LedgerDetails::LoadByIdledgerDetails($vhp->Item);
        $sr= $sr +1;
        $disc = $disc + ($product->Mrp * $vhp->Qty - $vhp->Amount);
        $net = $net + $vhp->Amount;
        $mrp = $mrp + $product->Mrp;
        
?-->        
          <tr>
            <td><div align="center"><!--?php _p($sr);?--></div></td>
            <td><div align="center"><!--?php _p($product->BrandObject); ?--></div></td>
            <td><div><div align="left" style="width:auto;">
                <!--?php 
                    _p($product->BrandObject->Name.' '.$product->IdledgerDetailsObject->Name);
                ?-->
                </div>
                    <div align="right" style="width:auto;">
                         SN : 
                <!--?php 
                  
                    $serials = Serials::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Serials()->Item, $vhp->Item),
                            QQ::Equal(QQN::Serials()->Ow, $vhp->IdvoucherHasItem)
                                )
                            );
                            foreach ($serials as $serial){
                                _t(' '.$serial->Serial);
                            
                ?-->
                         <!--?php } ?-->
                    </div>
                </div>
            </td>
            <td><div align="center"><!--?php _p($vhp->Qty);?--></div></td>
            <td><div align="center">Nos</div></td>
            <td><div align="right">
              <!--?php _p(number_format($product->Mrp,2,'.',' '));?-->&nbsp;
            </div></td>
            <td><div align="right">
              <!--?php $amount = round($vhp->Amount);_p(number_format($amount, 2, '.', ',')); $grossamt = $grossamt + ($vhp->Rate * $vhp->Qty); $discAmt = $discAmt + $vhp->DiscAmt;
                  $taxAmt = $taxAmt + $vhp->TaxAmt;?-->&nbsp;
            </div>
            </td>
            </tr>
    <!--?php }} ?-->  
            <tr>
                <td colspan="6" align="right">Gross Total&nbsp;&nbsp;</td>
                <td align="center"><div align="right">
                  <!--?php _p(number_format($grossamt, 2, '.', ',')); ?-->&nbsp;
                  
                </div></td>
            </tr>
            <tr>
                <td colspan="6" align="right">Discount&nbsp;&nbsp;</td>
                <td align="center"><div align="right">
                  <!--?php _p(number_format($discAmt, 2, '.', ',')); ?-->&nbsp;
                </div></td>
            </tr>
            <tr>
                <td colspan="6" align="right">Tax&nbsp;&nbsp;</td>
                <td align="center"><div align="right">
                  <!--?php _p(number_format($taxAmt, 2, '.', ',')); ?-->&nbsp;
                </div></td>
            </tr>
            <tr>
                <td colspan="6" align="right">Net Total&nbsp;&nbsp;</td>
                <td align="center"><div align="right">
                  <!--?php _p(number_format(round($grossamt-$discAmt+$taxAmt), 2, '.', ',')); ?-->&nbsp;
                </div></td>
            </tr>
          
             
          </table>
          </td>
      </tr>
     <tr>
        <td colspan="2">
            <table width="689" border="1">
                <tr>
                    <td>&nbsp;
                        Amount Chargeable (in words)<br>
                        &nbsp; <strong>INR <!--?php  _p(convert_number(round($grossamt-$discAmt+$taxAmt))); ?--> Only.</strong>
                     </td>                    
                </tr>
       
          </table></td>
      </tr>
     <tr>
        <td colspan="2">
            <div style="border: 1px solid black;">
            <table width="521" border="0" style="font-size:11px;">
               
          <tr>
            <td>&nbsp;Terms &amp; Conditions:-</td>
            </tr>
          <tr>
            <td>&nbsp;1. We are not responsible for breakage after delivery. </td>
            </tr>
          <tr>
            <td>&nbsp;2. Goods Once sold will not taken back.</td>
           </tr>
           <tr>
            <td>&nbsp;3.INTERESTAT AT 24% WILL BE CHARGED ON OVERDUE ACCOUNT</td>
          </tr>
        
          </table>
                <div style="clear: both;"></div>
            </div>
        </td>
      </tr>
     <tr>
        <td colspan="2">
            <table width="690" border="1" style="font-size:10px">
                <tr>
                    <td colspan="2" style="text-align:justify; padding:5px;">Declaration:-<br>"I/We hereby certify that My/Our Registration certificate under the Maharashtra Value added Tax Act 2002 is in force on the date which the sale of the goods specified in this Tax Invoice is made by Me/Us and that transaction of sale covered by this Tax Invoice has been affected by Me/Us and it shall be accounted for in the turnover of sales while filling of return and the due tax, if payable on the sale has been paid or shall be paid"</td>
                </tr>
                <tr>
                <td width="247" align="center">
                    Balance : <!--?php  _p(number_format(round($grossamt-$discAmt+$taxAmt), 2, '.', ',')); ?-->&nbsp;
                    <br/><br/>.<br/><br/>
                  Receivers Signature</td>
                <td width="247" align="center" valign="top">
                    <h4>For <span style="margin-left:5px;">
                    <!--?php 
                      $actcpy = Settings::LoadByName("Active Company");
                      $company = Role::LoadByIdrole($actcpy->Option);
                      _p($company->Name); 
                    ?-->
                     </span></h4>
                    <br/><br/>.<br/><br/>Authorised Signatory
                </td>
                </tr>
            </table>
            <div style="width: 100%;text-align: center;">This is Computer Generated Invoice</div>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<!--?php } ?-->