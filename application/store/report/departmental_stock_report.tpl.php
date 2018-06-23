

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
           <td width="15%" style="padding:4px;"><?php $this->lstDept->Render(); ?></td>
        </tr>
        <tr>
            <td>Show All&nbsp;&nbsp;&nbsp;
            <?php $this->chkAll->Render(); ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?php $this->Srchbtn->Render(); ?></td>
        </tr>
    </table>
</div>
    <div class="form-controls">
    <script src="dragtable.js"></script>
    <script src="jquery-latest.js"></script>
            <a href="javascript:Clickheretoprint()">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
            </a>
    <input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">

<div id="formprint" style="background-color: #FFF;">
    <?php if(isset($_GET["from"]) && isset($_GET["to"]) && !isset($_GET["dept"]) ){
        $from=$_GET['from'];
        $to = $_GET['to'];
    ?>
        <h2 align="center">Department Wise Stock Report </h2>
    <div align="center"><b>From <?php _p(date('Ymd', strtotime($from))); ?> To <?php _p(date('Ymd', strtotime($to))); ?></b></div>
        <table width="100%" id="mytable">
            <tr>
                <td>
                    <?php $depts = Role::LoadAll();
                        foreach ($depts as $dept){
                            $stocks =  PriceHistory::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::PriceHistory()->Godown, $dept->Idrole),
                                        QQ::GreaterOrEqual(QQN::PriceHistory()->Date, Date('Ymd', strtotime($_GET['from'])).'000000'),
                                        QQ::LessOrEqual(QQN::PriceHistory()->Date, Date('Ymd', strtotime($_GET['to'])).'235959')       
                                    ), QQ::OrderBy(QQN::PriceHistory()->Date));
                    if($stocks){
                       $sr = 1;
                    ?>
                    <table align="center" width="95%" border="1" style="line-height:20px; font-size:12px; border-spacing:0px; margin:10px;" class="draggable sortable">
                        <tr style="font-size:14px;">
                            <td colspan="11"><h3 align="center"><?php _p($dept->Name); ?></h3></td>
                        </tr>
                        <tr style="font-size:14px;">
                            <td width="4%"><div align="center"><strong>Sr</strong></div></td>
                            <td width="9%"><div align="center"><strong>Date</strong></div></td>
                            <td width="25%"><div align="center"><strong>Supplier</strong></div></td>
                            <td width="25%"><div align="center"><strong>Product Name</strong></div></td>
                            <td width="14%"><div align="center"><strong>Type</strong></div></td>
                            <td width="9%"><div align="center"><strong>Opening</strong></div></td>
                            <td width="9%"><div align="center"><strong>Inward</strong></div></td>
                            <td width="9%"><div align="center"><strong>Outward</strong></div></td>
                            <td width="9%"><div align="center"><strong>Closing</strong></div></td>
                            <td width="12%"><div align="center"><strong>From</strong></div></td>
                            <td width="12%"><div align="center"><strong>Amount</strong></div></td>
                        </tr>
                            <?php foreach ($stocks as $stock){ ?>
                        <tr>
                            <td><div align="center">
                              <?php _p($sr++); ?>
                                </div></td>
                            <td><div align="center">
                               <?php _p(date("d/m/Y", strtotime($stock->Date))); ?>
                               </div></td>
                            <td><div align="center"><?php if($stock->RefVov) _p($stock->RefVovObject->VoucherObject->CrObject); ?></div></td>
                            <td><div align="center"><?php _p($stock->ItemObject);  ?></div></td>
                            <td><div align="center">
                                <?php _p($stock->ItemObject->StockGrp);  ?>
                                </div></td>
                            <td><div align="center">
                                <?php _p($stock->Opening);  ?>
                                </div></td>
                            <td><div align="center">
                              <?php _p($stock->Inword); ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Outward);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Closing);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->RefVovObject->VoucherObject->DrObject);  ?>
                            </div></td>
                            <td align="right"><?php if($stock->RefVov)  _p($stock->RefVovObject->Amount); ?>&nbsp;</td>
                        </tr>
                    <?php } ?>
                    </table>
                <?php }} ?> 
                </td>
            </tr>
        </table>
    <?php } ?>
 
    <?php if(isset($_GET["dept"]) ){ 
        $dept =Role::LoadByIdrole($_GET['dept']);
    ?>
        <h2 align="center">Department Wise Stock Report  </h2>
        <?php if(isset($_GET['from']) && isset($_GET['to'])){ ?><div align="center"><b>From <?php _p(date('d/m/Y', strtotime($_GET['from']))); ?> To <?php _p(date('d/m/Y', strtotime($_GET['to']))); ?></b></div><?php  ?>
        <table width="100%" id="mytable">
            <tr>
                <td>
                <?php 
                    $from=$_GET['from'];
                    $to = $_GET['to'];
                    if(isset($_GET['from']) && isset($_GET['to']))
                        $stocks =  PriceHistory::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::PriceHistory()->Godown, $dept->Idrole),
                            QQ::GreaterOrEqual(QQN::PriceHistory()->Date, Date('Ymd', strtotime($_GET['from'])).'000000'),
                            QQ::LessOrEqual(QQN::PriceHistory()->Date, Date('Ymd', strtotime($_GET['to'])).'235959')               
                               ), QQ::OrderBy(QQN::PriceHistory()->Date));
                    else
                        $stocks =  PriceHistory::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::PriceHistory()->Godown, $dept->Idrole)
                                   ), QQ::OrderBy(QQN::PriceHistory()->Date));
                    
                        if($stocks){
                           $sr = 1;

                ?>
                    <table align="center" width="95%" border="1" style="line-height:20px; font-size:12px; border-spacing:0px; margin:10px;" class="draggable sortable">
                        <tr style="font-size:14px;">
                            <td colspan="11"><h3 align="center"><?php _p($dept->Name); ?></h3></td>
                        </tr>
                        <tr style="font-size:14px;">
                            <td width="4%"><div align="center"><strong>Sr</strong></div></td>
                            <td width="9%"><div align="center"><strong>Date</strong></div></td>
                            <td width="25%"><div align="center"><strong>Supplier</strong></div></td>
                            <td width="25%"><div align="center"><strong>Product Name</strong></div></td>
                            <td width="14%"><div align="center"><strong>Type</strong></div></td>
                            <td width="9%"><div align="center"><strong>Opening</strong></div></td>
                            <td width="9%"><div align="center"><strong>Inward</strong></div></td>
                            <td width="9%"><div align="center"><strong>Outward</strong></div></td>
                            <td width="9%"><div align="center"><strong>Closing</strong></div></td>
                            <td width="12%"><div align="center"><strong>From</strong></div></td>
                            <td width="12%"><div align="center"><strong>Amount</strong></div></td>
                        </tr>
                        <?php foreach ($stocks as $stock){ ?>
                        <tr>
                            <td><div align="center">
                              <?php _p($sr++); ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p(date("d/m/Y", strtotime($stock->Date))); ?>
                            </div></td>
                            <td><div align="center"><?php  if($stock->RefVov) _p($stock->RefVovObject->VoucherObject->CrObject); ?></div></td>
                            <td><div align="center"><?php _p($stock->ItemObject);  ?></div></td>
                            <td><div align="center">
                              <?php _p($stock->ItemObject->StockGrpObject);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Opening);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Inword); ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Outward);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Closing);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php if($stock->RefVov) _p($stock->RefVovObject->VoucherObject->DrObject);  ?>
                            </div></td>
                            <td align="right"><?php if($stock->RefVov) _p($stock->RefVovObject->Amount); ?>
                              &nbsp;</td>
                        </tr>
                               <?php } ?>
                    </table>
                    <?php } ?> 
                </td>
            </tr>
        </table>
    <?php }} ?>
    <?php
    if(isset($_GET['all'])){
    ?> <h2 align="center">Department Wise Stock Report All</h2>
        <table width="100%" id="mytable">
            <tr>
                <td>
                    <?php $depts = Role::LoadAll();
                        foreach ($depts as $dept){
                         $stocks = PriceHistory::LoadArrayByGodown($dept->Idrole, QQ::OrderBy(QQN::PriceHistory()->Date));
                    if($stocks){
                    $sr = 1;
                    ?>
                    <table align="center" width="95%" border="1" style="line-height:20px; font-size:12px; border-spacing:0px; margin:10px;" class="draggable sortable">
                        <tr style="font-size:14px;">
                            <td colspan="11"><h3 align="center"><?php _p($dept->Name); ?></h3></td>
                        </tr>
                        <tr style="font-size:14px;">
                            <td width="4%"><div align="center"><strong>Sr</strong></div></td>
                            <td width="9%"><div align="center"><strong>Date</strong></div></td>
                            <td width="25%"><div align="center"><strong>Supplier</strong></div></td>
                            <td width="25%"><div align="center"><strong>Product Name</strong></div></td>
                            <td width="14%"><div align="center"><strong>Type</strong></div></td>
                            <td width="9%"><div align="center"><strong>Opening</strong></div></td>
                            <td width="9%"><div align="center"><strong>Inward</strong></div></td>
                            <td width="9%"><div align="center"><strong>Outward</strong></div></td>
                            <td width="9%"><div align="center"><strong>Closing</strong></div></td>
                            <td width="12%"><div align="center"><strong>From</strong></div></td>
                            <td width="12%"><div align="center"><strong>Amount</strong></div></td>
                        </tr>
                          <?php foreach ($stocks as $stock){ ?>
                        <tr>
                            <td><div align="center">
                              <?php _p($sr++); ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p(date("Y-m-d", strtotime($stock->Date))); ?>
                            </div></td>
                            <td><div align="center"><?php IF($stock->RefVov) _p($stock->RefVovObject->VoucherObject->CrObject); ?></div></td>
                            <td><div align="center"><?php _p($stock->ItemObject);  ?></div></td>
                            <td><div align="center">
                              <?php _p($stock->ItemObject->StockGrpObject);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Opening);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Inword); ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Outward);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php _p($stock->Closing);  ?>
                            </div></td>
                            <td><div align="center">
                              <?php if($stock->RefVov) _p($stock->RefVovObject->VoucherObject->DrObject);  ?>
                            </div></td>
                             <td align="right"><?php if($stock->RefVov) _p($stock->RefVovObject->Amount); ?>
                              &nbsp;</td>
                        </tr>
                        <?php } ?>
                    </table>
                        <?php }} ?> 
                </td>
            </tr>
        </table>
    <?php } ?>
    </div>
</div>

<?php $this->RenderEnd() ?>

