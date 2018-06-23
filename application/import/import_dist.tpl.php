<?php
    $strPageTitle = QApplication::Translate('Import Taluka');
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
        var content_vlue = document.getElementById("mytable").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/table.css"); @page { size: A4 portrait; margin: 5% 10% 10% 10%;} table{ width:100%; font-size: 12px; }  .subtable{ font-size: 9px; line-height: 10px; } body{ font-size: 12px; } </style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <script src="dragtable.js"></script>
    <div style=" margin-bottom: 10px; ">        
        <div style="padding: 1px;float:left;margin-left:150px;width:200px;"><strong>Please Select District</strong><?php $this->lstDist->Render(); ?></div>
        <div  style="float:left; margin-left:150px"><?php $this->btnImport->Render(); ?></div>
    </div>
    <div style="clear: both;"></div>
    <hr>
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
    </a>
    <input type="button" class="pull-left btn btn-success" onclick="tableToExcel('mytable', 'W3C Example Table');" value="Export to Excel" />
    <div style="clear: both;"></div>
   
    <?php 
    if(isset($_GET['dist'])){
       $sr = 1;
    ?>
    <table width="532" border="1" class="datagrid">
        <tr>
            <th width="23"><div align="center">Sr No</div></th>
            <th width="23"><div align="center">Taluka</div></th>        
        </tr>
        
        <?php 
        $places = Place::QueryArray(
                QQ::Equal(QQN::Place()->Grp, $_GET['dist']));
      
        $sr = 1;
        if($places){
        foreach ($places as $place){
        ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($place-> Name); ?></td>
        </tr>    
        <?php }} ?>    
    </table>
    <?php } ?>
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


