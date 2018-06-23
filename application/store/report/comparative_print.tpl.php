<script anguage="javascript">
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
<script language="javascript">
        function Clickheretoprint(){
            var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("formPrint").innerHTML;

            var docprint=window.open("","",disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/table.css");.divdis{display:none;} .divdisp{display:block;}</style> <center>');
            docprint.document.write(content_vlue);
            docprint.document.write('</center></body></html>');
            docprint.document.close();
        }
</script>
<?php 

require(__CONFIGURATION__ . '/header.inc.php');

?>
  <?php $this->RenderBegin() ?>

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
<a href="../quotation_list.php?req=<?php _p($_GET['req']); ?>">
        <div class="btn btn-warning slideup" style="float: right;"><i class="fa fa-arrow-circle-o-left"></i> Back</div>    
    </a>
 <a href="javascript:Clickheretoprint()">
     <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
 </a>
<input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">

<div class="form-controls">
    <div id="formPrint" style="overflow: auto;">
    <table  style="width: 100%;" border="0" id="mytable">
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
              <div align="center" style="font-size:22px; margin:3px;"><p style="font-size:15px">Dr.J.J.Magdum Trust's</p><strong>Dr. J. J Magdum Ayurved Medical College</strong><p style="font-size:15px">Gat No.295,Shirol-Wadi Road,Agarbhag,JAYSINGPUR-416101<br>Approved by C.C.I.M.,New Delhi,Govt.of Maharashtra & <br> Affiliated to Maharashtra University Of Health Science(MUHS)Nashik<br> Phone No.(02322)221860/221861 Fax:(02322)221861 E-mail:jjmayu@rediffmail.com</p>
              </div>
              <hr>
            </td>
        </tr>
        <tr>
            <td>
                <div style="float:right; margin-right:20px; padding:4px;"><b>Date :-  <?php _p(date('d/m/Y',  strtotime($req->Date))); ?></b></div>
                <div>JJMAYU/2017-2018/65<br> To,<br>The Chairman Sir,<br>Dr.J.J.Magdum Trust,<br>Jaysingpur.</div><br>
            </td>
        </tr>
        <tr>
            <td>
                  <div style="float:left;margin-left:0px;"><strong> Subject:-</strong> </div>
                  <div style="margin-left:-10px;" class="divdis"><?php $this->txtSub->RenderWithName();?></div>
                  <div class="divdisp"  style="float:left"> <?php _p($req->CmpSubject);  ?></div>

            </td>
        </tr>
        <tr>
            <td>
                <div>Sir,<br></div>
                <div class="divdis"> <?php $this->txtDesc->Render();?></div><div class="divdisp"><?php _p($req->CmpDesc);?></div><br>
            </td>
        </tr>
        <tr>
            <td height="290"><table border="1" class="datagrid">
            <tr>
                <td rowspan="2"><div align="center"><strong>Sr. No</strong></div></td>
                <td rowspan="2"><div align="center"><strong>Particulars of Materials</strong></div></td>
                <td rowspan="2"><div align="center"><strong>Required Quantity</strong></div></td>
                <?php  foreach ($quotations as $quotation){ ?>
                <td ><div align="center">
                  <strong>
                  <?php _p($quotation->DrObject); ?>
                  <?php $supplier = Ledger::LoadByIdledger($quotation->Dr);
                  if($supplier){ ?><br>
                 <?php     
                    $address = Address::LoadArrayByOf($supplier->Idledger);
                    if($address) {
                        foreach($address as $add){}
                    _p($add->Contact1);
                    }
                  }
                  ?>
                  </strong></div></td>
                <?php } ?>
            </tr>
            <tr>
                <?php  foreach ($quotations as $quotation){ ?>  
                <td><div align="center">Amount</div></td> <?php } ?>
            </tr>
            <?php  $sr =1;  foreach($vhps as $vhp){ ?>
            <tr>
                <td><div align="center"><?php _p($sr++); ?>.</div></td>
                <td><?php _p($vhp->ItemObject); ?></td>
                <td><div align="center"><?php _p($vhp->Qty); ?></div></td>
                <?php  foreach ($quotations as $quotation){ ?>
                <td><div align="right">
                      <?php _p(number_format($vhp->Amount,2,'.','')); ?>
                    </div>
                </td>
                 <?php } ?>
            </tr>
            <?php 
                $qty = 0;
                $qty = $qty + $vhp->Qty;
            }
            ?>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="right"><strong>Total Amount</strong></div></td>
                <?php  foreach ($quotations as $quotation){ ?>
                <td><div align="right">
                  <?php _p(number_format($quotation->Amount,2,'.','')); ?>
                </div></td>
                <?php } ?>
            </tr>
             <?php  foreach ($quotations as $quotation){ ?>
                     <?php _p($quotation->Warranty); ?>
                <?php } ?>
               <?php
                   $vov = Voucher::LoadByIdvoucher($_GET['req']);
                   if($vov->Lock != 1){
               ?>
            <tr>
                <td colspan="3"><div align="right">Click On Button to Generate Final PO</div></td>
                <?php  foreach ($quotations as $quotation){ ?>  
                <td ><div align="center">
                 <?php  $this->btnnegotiate[$quotation->Idvoucher][$vhp->Item]->Render(); ?>
                </div></td> <?php } ?>
            </tr>
            <?php } ?>
    </table>
     <table  style="" >
          <p > Please sanction the quotation<br>Thanking you</p>
          <p align="right" style="margin-right:150px"> Yours faithfully</p>
          <br><br> </table></td>
  </tr>
</table>
        
              
    </div>
</div>
<?php } ?>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
