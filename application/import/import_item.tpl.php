<?php
    $strPageTitle = QApplication::Translate('Exam Set');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<style>
    .blanktable{
        display:none;
    }
</style>
<script language="javascript">
function Clickheretoprint(){
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("formPrint").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>

<!--h1>Open Elective</h1-->
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <script src="dragtable.js"></script>
    <div style=" margin-bottom: 10px; ">        
        <div style="padding: 1px;float:left;width:200px;"><strong>Please Select Group</strong><?php $this->lstsem->Render(); ?></div>
        
        <div class="pull-right">
            <strong>&nbsp;</strong>
            <div style="clear: both;"></div>
            <?php $this->btnReport->Render(); ?>
            <?php  if(isset($_GET['grp'])) $this->btnImport->Render(); ?>
        </div>
        
        <div style="clear: both;"></div>
    </div>
   <a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<input type="button" class="btn btn-success" onclick="tableToExcel('formPrint', 'W3C Example Table')" value="Export to Excel">     <div style="clear: both;"></div>
   <div id="formPrint">
    <?php 
    if(isset($_GET['grp'])){
       $sr = 1;
    ?>
    <table width="532" border="1" class="datagrid">
        <tr>
            <th width="10"><div align="center">Sr No</div></th>
            <th width="23"><div align="center">Code</div></th>
            <th width="30"><div align="center">Name</div></th>
            <th width="30"><div align="center">Price</div></th>
        </tr>
        
        <?php
        $ledgers = Ledger::LoadArrayByGrp(7102);
          $sr = 1;
        if($ledgers){
            foreach ($ledgers as $ledger) {
                 $leds = LedgerDetails::QueryArray(
                 QQ::AndCondition(
                         QQ::Equal(QQN::LedgerDetails()->IdledgerDetails,$ledger->Idledger),
                         QQ::Equal(QQN::LedgerDetails()->StockGrp,$_GET['grp'])));
                  if($leds){
                      foreach ($leds as $led){
                         ?>
                        <tr>
                            <td><?php _p($sr++);?></td>
                            <td><?php _p($led->IdledgerDetailsObject->Code);?></td>
                            <td><?php echo $led->DisplayName ;?></td>
                            <td><?php _p($led->Mrp);?></td>
                        </tr>
                  <?php }}}}?>
       
    </table>
    <?php } ?>
</div>
</div>
<?php $this->RenderEnd() ?>

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

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>


