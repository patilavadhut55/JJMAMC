<?php 
require('../../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');

?>
<?php if (isset($_GET['req'])) {
    $req = Voucher::LoadByIdvoucher($_GET['req']);
                $vhps = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
                $sr = 0;
                $quotations = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Voucher()->Grp, 10),
                    QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])        
                            ));  
              
                   
                  
                
    ?>
<h1>
    <?php _p('Comparitive statement'); ?>
</h1>
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
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">

<div id="formControls">
    <div id="print">
    <table width="100%" border="0" id="mytable">
  <tr>
    <td align="center" ><div>
      <div align="center" style="font-size:22px; margin:3px;"><strong>DX Systems Demo College</strong></div>
      </div>
      <div align="center"> <div style="padding-right:10px;"></div></div></td>
  </tr>
  <tr>
      <td><h2 align="center">Required <?php _p($req->Narration); ?></h2><div style="float:right; margin-right:20px; padding:4px;"><b>Date :-  <?php _p(date('d/m/Y',  strtotime($req->Date))); ?></b></div></td>
  </tr>
  <tr>
    <td><div align="center" style="margin:5px;"><strong>NAME OF THE SUPPLIERS &amp; RATES</strong></div></td>
  </tr>
  <tr>
    <td height="290"><table border="1" class="datagrid">
      <tr>
        <td rowspan="2"><div align="center"><strong>Sr. No</strong></div></td>
        <td rowspan="2"><div align="center"><strong>Particulars of Materials</strong></div></td>
        <td rowspan="2"><div align="center"><strong>Required Quantity</strong></div></td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="center">
          <strong>
          <?php _p($quotation->DrObject); ?>
          <?php $supplier = Ledger::LoadByIdledger($quotation->Dr);
          if($supplier){ ?><br>
         <?php     
            $address = Address::LoadArrayByOf($supplier->Idledger);
            if($address) foreach($address as $add){}
            _p($add->Contact1);
          }
          ?>
          </strong></div></td>
        <?php } ?>
      </tr>
      <tr>
         <?php  foreach ($quotations as $quotation){ ?> <td><div align="center">Rate</div></td> 
         <td><div align="center">Amount</div></td> <?php } ?>
      </tr>
      <?php  $sr =1;  foreach($vhps as $vhp){ ?>
      <tr>
        <td><div align="center">
          <?php _p($sr++); ?>
          .</div></td>
        <td><?php _p($vhp->ItemObject); ?></td>
        <td><div align="center">
          <?php _p($vhp->Qty); ?>
        </div></td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td><div align="right">
          <?php _p(number_format($vhp->Rate,2,'.','')); ?>
        </div></td>
        <td><div align="right">
          <?php _p(number_format($vhp->NetAmount,2,'.','')); ?>
        </div></td>
        <?php } ?>
      </tr>
      <?php 
          $qty = 0;
          $qty = $qty + $vhp->Qty;
      
        } ?>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"><strong>Total</strong></div></td>
        <td><div align="center">
          <?php _p($qty); ?>
        </div></td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2">&nbsp;</td>
        <?php } ?>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>Discount</strong></div></td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="right">
          <?php _p(number_format($quotation->Discount,2,'.','')); ?>
        </div></td>
        <?php } ?>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>Vat 12.5%</strong></div></td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="right">
          <?php _p(number_format($quotation->TotalTax,2,'.','')); ?>
        </div></td>
        <?php } ?>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>Total Amount</strong></div></td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="right">
          <?php _p(number_format($quotation->Amount,2,'.','')); ?>
        </div></td>
        <?php } ?>
      </tr>
      <tr>
        <td colspan="3">Terms &amp; Conditions</td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="center"></div></td>
        <?php } ?>
      </tr>
      <tr>
        <td>1.</td>
        <td colspan="2">PAYMENT:-</td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="center">
          <?php if($quotation->Paymode)  _p($quotation->PaymodeObject->Name);  ?>
        </div></td>
        <?php } ?>
      </tr>
      <tr>
        <td>2.</td>
        <td colspan="2">DELIVERY:-</td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="center"></div></td>
        <?php } ?>
      </tr>
      <tr>
        <td>3.</td>
        <td colspan="2">WARRANTY/GUARANTEE</td>
        <?php  foreach ($quotations as $quotation){ ?>
        <td colspan="2"><div align="center"></div></td>
        <?php } ?>
      </tr>
    </table>
      <br>
    <br><br><br>
      <table cellspacing="0" cellpadding="0" align="center">
    <td colspan="9" width="100%" style="font-size:16px;"> <strong>Clerk.             Registrar                PRINCIPAL.           DX Society Trustee                        HON. SECRETARY.</strong></td>
      </table></td>
  </tr>
</table>
    </div>
</div>
<?php } ?>
<script>
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()

</script>