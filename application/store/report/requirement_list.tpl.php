
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
	$strPageTitle = QApplication::Translate('Vouchers') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <table width="700" border="0">
        <tr>
            <td width="111" height="40">From</td>
            <td width="292"><?php $this->calfrom->Render(); ?></td>
            <td width="51">To</td>
            <td width="228"><?php $this->calto->Render(); ?></td>
        </tr>
        <tr>
            <td height="40">Status</td>
            <td ><?php $this->lstStatus->Render(); ?></td>
            <td >&nbsp;</td>
            <td ><?php $this->btnReport->Render(); ?></td>
        </tr>
    </table>
</div>
 <script src="dragtable.js"></script>
  <script src="jquery-latest.js"></script>
<input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">

<?php if(isset($_GET['from'])) { ?>
 <div class="form-controls">
    <div align="center"><h2>Requirements of all Departments</h2></div>
        <table width="878" border="0" class="datagrid" id="mytable">
            <tr>
                <th width="42"><div align="center">Sr</div></th>
                <th width="258"><div align="center">Requirement</div></th>
                <th width="132"><div align="center">Date</div></th>
                <th width="110"><div align="center">Department</div></th>
                <th width="86"><div align="center">Total Qty</div></th>
                <th width="110"><div align="center">Amount</div></th>
            </tr>
            <?php
            $from = $_GET['from'];
            $to = $_GET['to'];
            if($_GET['status'] == 1)
            $reqs = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Voucher()->Grp, 11),
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($from))),
                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($to)))
                            ));
            else if($_GET['status'] == 2)
            $reqs = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Voucher()->Grp, 11),
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($from))),
                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($to))),
                    QQ::NotEqual(QQN::Voucher()->ApprovedBy, NULL)        
                            ));
            else if($_GET['status'] == 3)
            $reqs = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Voucher()->Grp, 11),
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($from))),
                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($to))),
                    QQ::OrCondition (        
                    QQ::Equal(QQN::Voucher()->ApprovedBy,0 ),
                    QQ::Equal(QQN::Voucher()->ApprovedBy, NULL)        
                            
            ))
                    );
            else if($_GET['status'] == 4)
            $reqs = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Voucher()->Grp,11),
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($from))),
                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($to))),
                    QQ::Equal(QQN::Voucher()->Lock, 1)        
                            ));
            $sr = 0;
            if($reqs){
            foreach ($reqs as $req){
                $sr = $sr + 1;
                $from = Ledger::LoadByIdledger($req->Dr);
            ?>
            <tr>
                <td><div align="center">
                  <?php _p($sr); ?>
                </div></td>
                <td><div align="center"><?php _p($req->Narration); ?></div></td>
                <td><div align="center">
                  <?php _p(date('d/m/Y',  strtotime($req->Date))); ?>
                </div></td>
                <td><div align="center">
                  <?php if($req->Department) _p($req->DepartmentObject); ?>
                </div></td>
                <td><div align="center">
                   <?php $qtys = VoucherHasItem::LoadArrayByVoucher($req); foreach ($qtys as $qty) if($qty->TotalQty) _p($qty->TotalQty); ?>
                </div></td>
                <td><div align="center">
                  <?php _p(number_format($req->Amount,2,'.','')); ?>&nbsp;
                </div></td>
            </tr>
            <?php }} ?>
        </table>
    </div>
<?php } ?>

 <?php $this->RenderEnd() ?>

<?php// require(__CONFIGURATION__ . '/footer.inc.php'); ?>