<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<script>
        var tableToExcel = (function(){var uri = 'data:application/vnd.ms-excel;base64,',
                                        template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                                                            , base64 = function (s) {
        return window.btoa(unescape(encodeURIComponent(s)))
                }
        , format = function (s, c) {
            return s.replace(/{(\w+)}/g, function (m, p) {
                return c[p];
            })
        }
        return function (table, name) {
            if (!table.nodeType)
                table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
        }
    })()

</script>
<script language="javascript">
                                function Clickheretoprint() {
                                var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
                                        disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
                                        var content_vlue = document.getElementById("formPrint").innerHTML;
                                        var docprint = window.open("", "", disp_setting);
                                        docprint.document.open();
                                        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/table.css");</style><center>');
                                        docprint.document.write(content_vlue);
                                        docprint.document.write('</center></body></html>');
                                        docprint.document.close();
                                }
</script>
<script src="dragtable.js"></script>
<script src="jquery-latest.js"></script>
<h1>
    <?php //_p('Report'); ?>
</h1>
<?php $this->RenderBegin() ?>
<?php
$login = Login::LoadByIdlogin($_SESSION['login']);
$recpts = 0;
$pays = 0;
?>
<div class="form-controls">
    <table width="800" border="0">
        <tr>
            <td width="15%" style="padding:4px;">From&nbsp;&nbsp;&nbsp;</td>
            <td width="25%" style="padding:4px;"><?php $this->calfrom->Render(); ?></td>
            <td width="15%" style="padding:4px;">To&nbsp;&nbsp;&nbsp;</td>
            <td width="25%" style="padding:4px;"><?php $this->calto->Render(); ?></td>
            <td width="15%" style="padding:4px;"><?php $this->btnSearch->Render(); ?></td>
        </tr>
    </table>
</div>

<?php $this->RenderEnd() ?>
<?php
if (isset($_GET["from"])) {
    $from = $_GET['from'];
    $to = $_GET['to'];
    ?>
    <div>
        <div style="float: left">
            <a href="javascript:Clickheretoprint()">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
            </a>
        </div>
        <div style="float: right">
            <div class="btn btn-success">Back</div>
        </div>
    </div>

    <div class="form-controls">
        <div id="formPrint" style="overflow: auto;">
            <div style="width:100%; " >
                <div align="center" style="line-height: 20px; margin-left:5%; margin-right:5%; font-family: arial; " >
                    <div style="float:left; margin-left:20%; margin-top: 10px; margin-bottom: 10px; ">
                        <img src="../../../assets/_core/images/logo.png" width="100" height="100" alt="" />
                    </div>
                    <div style="float:right; margin-right:20%; margin-top: 20px; ">  
                        
                        <div style="font-size: 16px;"><strong>Dr. J. J. Magdum Trust's</strong></div>
                        <div style="font-size: 20px;"><strong>Dr. J. J Magdum Ayurved Medical College</strong></div>
                        <div style="font-size: 14px; margin-top: 10px;"><strong>Jaysingpur- 416 101. Tal.Shirol, Dist. Kolhapur</strong>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div style="clear: both"></div>
            </div>
            <hr>
           
            <table  style="width: 100%;" border="0" align="center">
                <tr>
                    <td colspan="2" >
                        <table  border="1" align="center" class="datagrid" style="width: 1000px; margin-top: 15px;" >
                            <tr>
                                <th><div align="center">Sr</div></th>
                            <th><div align="center">Date</div></th>
                            <th><div align="center"> Item</div></th>
                            <th><div align="right"> Issued Name</div></th>
                            <th><div align="right">Serial </div></th>
                            <th><div align="center">Accepted Date</div></th>
                           <th><div align="center">Return Date</div></th>
                </tr>
            
                <?php
                   // if(isset($_GET['from'])&& isset($_GET['to'])){
               $depts = IssuedItems::QueryArray(
               QQ::AndCondition(
                   QQ::GreaterOrEqual(QQN::IssuedItems()->Date ,date('Ymd000000', strtotime($_GET['from']))),
                   QQ::LessOrEqual(QQN::IssuedItems()->Date, date('Ymd235959', strtotime($_GET['to'])))));
                  
                       if ($depts) {
                                 $sr = 1;
                    foreach ($depts as $dept) {
                    
                        ?>
                        <tr>
                            <td><?php _p($sr++); ?></td>
                            <td><?php _p(date('d/m/Y', strtotime($dept->Date))); ?></td>
                            <td><?php _p($dept->ItemObject->DisplayName); ?></td>
                            <td><?php _p($dept->MemberObject->IdloginObject->Name); ?></td>
                            <td><?php _p($dept->SerialsObject->Code); ?></td>
                            <td><?php if($dept->AcceptedDate != NULL) _p(date('d/m/y', strtotime($dept->AcceptedDate))); ?></td>
                            <td><?php if($dept->ReturnedDate != NULL) _p(date('d/m/y', strtotime($dept->ReturnedDate))); ?></td>


                        </tr>
             <?php }}
                    
                ?>
            </table>
            </td>
            </tr>
            </table>
             
        </div>
    </div>

    <?php
}?>