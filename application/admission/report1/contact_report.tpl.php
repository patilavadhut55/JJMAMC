<?php
	$strPageTitle = QApplication::Translate('Members') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
      
	<?php $this->RenderBegin() ?>
   
<div class="form-controls">
    <table style="width: 100%;" border="0">
        <tr>
            <td width="418"><?php $this->lstYear->RenderWithName(); ?></td>
            <td><?php $this->lstSemister->RenderWithName(); ?></td>
        </tr>
        
       
        <tr>
            
            <td width="421"><?php $this->btnShow->RenderWithName(); ?></td>
        </tr>
    </table>
</div>
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
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>

<input type="button" class="btn btn-success" onclick="tableToExcel('formPrint', 'W3C Example Table')" value="Export to Excel">    
  

<div style="overflow: auto;">
    
    
       <table width="100%" class="datagrid" border="1">
            <tr>
                <th><strong>Sr.No</strong></th>
                <th><strong>Name of Student</strong></th>
                <th><strong>Student Mobile No </strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Parents Mobile NO</strong></th>
            </tr>
             <?php 
      
          
               $dist =  CurrentStatus::QueryArray(
                   QQ::AndCondition(
                         QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue),
                         QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue)
                         )
                );  
           
                        ?>
                <?php 
                $Sr = 1;
                if( $dist){
                    foreach ( $dist as  $dists){
                        ?>
            <tr>
                        <td><?php _p($Sr++);?></td>
                        <td><?php _p($dists->StudentObject->IdloginObject->Profile->FirstName) . _p($dists->StudentObject->IdloginObject->Profile->FatherFirstName) . _p($dists->StudentObject->IdloginObject->Profile->LastName);?></td>
                        <td><?php _p($dists->StudentObject->IdloginObject->Profile->Contact1);?></td>
                        <td><?php _p($dists->StudentObject->IdloginObject->Profile->Email1);?></td>
                        <td><?php _p($dists->StudentObject->IdloginObject->Profile->Contact2);?></td>
                
                                             
            </tr>
              <?php }} ?>
        </table>
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

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>