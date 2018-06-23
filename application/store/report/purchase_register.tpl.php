

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
<script language="javascript">
	function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formprint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script> 
<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<script src="dragtable.js"></script>
<script src="jquery-latest.js"></script>
<?php
$login = Login::LoadByIdlogin($_SESSION['login']);
$recpts = 0;
$pays= 0;
?>
<div class="form-controls">
    <table width="800" border="0">
        <tr>
           <td width="15%" style="padding:4px;">From&nbsp;&nbsp;&nbsp;</td>
           <td width="25%" style="padding:4px;"><?php $this->calfrom->Render(); ?></td>
           <td width="15%" style="padding:4px;">To&nbsp;&nbsp;&nbsp;</td>
           <td width="25%" style="padding:4px;"><?php $this->calto->Render(); ?></td>
           <td width="15%" style="padding:4px;"><?php $this->Srchbtn->Render(); ?></td>
        </tr>
    </table>
</div>
<?php if(isset($_GET["from"])){
        $from=$_GET['from'];
        $to = $_GET['to'];
?>
<div class="form-controls">
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
    </a>
    <input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">
    <div style="cursor: pointer;" id="formprint">
        <h3 align="center">Purchase Register From <?php _p(date('d/m/Y',strtotime($_GET['from']))); ?> To <?php _p(date('d/m/Y',strtotime($_GET['to']))); ?></h3>
        <table class="datagrid" id="mytable" width="100%" border="1" style="border:1px solid #999; border-spacing:0px; line-height:15px; font-size:12px;">
            <tr>
                <th height="27"><div align="center"><strong>Sr</strong></div></th>
                <th><div align="center"><strong>PO Date</strong></div></th>
                <th><div align="center"><strong>For Requirement</strong></div></th>
                <th><div align="center"><strong>Department</strong></div></th>
                <th><div align="center"><strong>Supplier</strong></div></th>
                <th><div align="center"><strong>Product Name</strong></div></th>
                <th><div align="center"><strong>Total Qty</strong></div></th>
                <th><div align="center"><strong>Amount</strong></div></th>
                <th><div align="center"><strong>Status</strong></div></th>
            </tr>
                <?php 
                $pos = Voucher::QueryArray(
                     QQ::AndCondition(
                     QQ::Equal(QQN::Voucher()->Grp, 3),//purchase
                     QQ::GreaterOrEqual(QQN::Voucher()->Date, $_GET['from']),
                     QQ::LessOrEqual(QQN::Voucher()->Date, $_GET['to'])        
                             ));
                if($pos){
                $sr = 1;
                foreach ($pos as $po){
                 ?>
            <tr>
                <td><div align="center">
                  <?php _p($sr++); ?>
                </div></td>
                <td><div align="center">
                  <?php _p(date('d/m/Y',  strtotime($po->Date))); ?>
                </div></td>
                <td><div align="center"><?php _p($po->Narration); ?></div></td>
                <td><div align="center"><?php _p($po->DepartmentObject); ?></div></td>
                <td><div align="center"><?php _p($po->CrObject); ?></div></td>
                <td><div align="center">
                  <?php $qtys = VoucherHasItem::LoadArrayByVoucher($po); foreach ($qtys as $qty){ _p($qty->ItemObject);} ?>
                </div></td>
                <td><div align="center">
                  <?php $qtys = VoucherHasItem::LoadArrayByVoucher($po); foreach ($qtys as $qty){ if($qty->TotalQty){ _p($qty->Qty); }}  ?>
                </div></td>
                <td><div align="center">
                  <?php _p(number_format($po->Amount,2,'.','')); ?>&nbsp;
                </div></td>
                <td><div align="center">
                  <?php if($po->ApprovedBy == NULL) _p('Approved'); else _p('In Progress'); ?>
                </div></td>
            </tr>
            <?php }} ?>
        </table>
    </div>
</div>
<?php } ?>

<?php $this->RenderEnd() ?>

