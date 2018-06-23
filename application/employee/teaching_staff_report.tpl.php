<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<script language="javascript">
        function Clickheretoprint(){
            var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("formPrint").innerHTML;

            var docprint=window.open("","",disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/table.css");</style><center>');
            docprint.document.write(content_vlue);
            docprint.document.write('</center></body></html>');
            docprint.document.close();
        }
    </script>
	<?php $this->RenderBegin() ?>
	
        <table>
            <tr>
                <td width="70"> <a href="javascript:Clickheretoprint()">
                    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                    </a></td>
                    <td width="70"> <a href="javascript:tableToExcel('mytable')">
                          <input type="button" class="btn btn-success" onclick="tableToExcel('mytable')" value="Export to Excel">
                    </a>
                    </td>
            </tr>
        </table> 
    
     <div style="clear: both"></div>
     &nbsp;
        <div class="form-controls" id="formPrint">
            <div style="overflow: auto; width: 100%;" id="mytable">
            <table class="datagrid" border="1" style="width:70%">
                <tr>
                    <th><div align="center">Sr.No</div></th>
                    <th><div align="center">Name</div></th>
                    <th><div align="center">Department</div></th>
                    <th><div align="center">UserName</div></th>
                    <th><div align="center">Password</div></th>
                    <th></th>
                </tr>
                    <?php 
                        $sr = 0;
                        $LoginRolls = Role::LoadByIdrole($_SESSION['role']);
                        $teachers = LoginHasRole::QueryArray(
                                QQ::AndCondition(
                                QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                                QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, '%Professor%')
                            ));
                            foreach($teachers as $staff){
                              $sr++;
                    ?>
                    <tr>
                        <td><?php _p($sr);?></td>
                        <td><?php
                        $name = delete_all_between('[',']',$staff->LoginIdloginObject->IdloginObject->Name);
                        _p($name); ?></td>
                        <td><?php 
                        $parrent = delete_all_between('[',']',$staff->RoleIdroleObject->ParrentObject->Name);
                        _p($parrent);?></td>
                        <td><?php _p($staff->LoginIdloginObject->Username);?></td>
                        <td><?php _p($staff->LoginIdloginObject->Password);?></td>
                        <td><?php $this->btnprofile[$staff->LoginIdlogin]->Render(); ?></td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
        </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
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