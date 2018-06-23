<?php
require(__CONFIGURATION__ . '/header.inc.php');
$login = Login::LoadByIdlogin($_SESSION['login']);
$vov = Voucher::LoadByIdvoucher($_GET['id']);
$suuplier = Ledger::LoadByIdledger($vov->CrObject->Idledger);
$adds = Address::LoadArrayByOf($suuplier->Idledger);
?>
<?php $this->RenderBegin() ?>

<h1>
    <?php _p('Annul Maintenance Order for ' . $vov->RefNoObject->RefNoObject->Narration); ?>
</h1>
<script language="javascript">
    function Clickheretoprint()
    {
    var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
            disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("print").innerHTML;
            var docprint = window.open("", "", disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");.divdis{display:none;} .divdisp{display:block;}</style><center>');
            docprint.document.write(content_vlue);
            docprint.document.write('</center></body></html>');
            docprint.document.close();
    }
</script>  
<?php if ($_SESSION['role'] == 337) { //director   ?>
    <div class="form-controls">
        <table width="90%" border="0">
            <tr>
                <td width="20%"><strong>&nbsp;&nbsp;Approve&nbsp;&nbsp;&nbsp;&nbsp;<?php $this->chkApprove->Render(); ?></strong></td>
                <td width="80%">
                    <a href="javascript:Clickheretoprint()">
                        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
                    </a>
                    <input type="button" class="btn btn-success" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">
                </td>
            </tr>
        </table>
    </div>
<?php } else { ?>
<div style="float:left; width:200px;">
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
    </a>
    <input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">
</div>
<div style="">
    <strong>Without Letter Pad  </strong> <?php $this->chkhead->Render();?>
</div>
<?php } ?>
<a href="../requirement_list.php">
    <div class="btn btn-warning" style="float: right;"><i class="fa fa-arrow-circle-o-left"></i> Back</div>    
</a>
<div style="clear: both"></div>
<div class="form-controls">
    <div id="print">
        <div id="mytable">    
            <table width="80%" border="0" style="margin-top:5px;" >
                   <?php if(isset($_GET['id'])&&isset($_GET['flag'])){
                 if($_GET['flag']==1 || $this->chkhead->Checked == TRUE){
       
                     include 'letterhead.php';
                    }
                 }
                ?>
                <tr>
                    <td width="63%" valign="top">
                        <div style="padding-left:30px;" align="left"> Ref.No.JJMAYU/2016-17/
                            <?php _p($vov->InvNo); ?><br>
                            <strong>To,<br>
                                <?php _p($vov->CrObject); ?><br><?php
                                if ($adds) {
                                    foreach ($adds as $add) {
                                    }
                                    _p($add->AddressLine1);
                                    ?><br>Pin No. <?php _p($add->ZipCode); ?><br>Cell No.:<?php _p($add->Contact1); ?> 
                                </strong>
                            </div>
                        </td>
                    <?php } ?>
                    <td>
                        <div align="right" style="margin-right:150px;"> DATE:<strong>
                            <?php _p(date('d/m/Y', strtotime($vov->Date))); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <br><br></td>
                </tr>
                <tr>
                    <td>
                        <div style="float:left;margin-left:80px;"><strong> Kindly Attention:- </strong></div>
                        <div style="margin-left:15px;" class="divdis"><?php $this->txtkindly->Render(); ?></div>
                        <div class="divdisp"  style="float:left"> <?php _p($vov->CmpDesc); ?></div>
                    </td>
                </tr>
                <tr>
                    <td> <br></td>
                </tr>
                <tr>
                    <td>
                        <div style="float:left;margin-left:80px;"><strong> Subject:- </strong></div>
                        <div style="margin-left:15px;" class="divdis"><?php $this->txtSub->Render(); ?></div>
                        <div class="divdisp"  style="float:left"> <?php _p($vov->CmpSubject); ?></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="padding:25px;">Sir,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With reference to the above subject, we are pleased to place the order for the followings,           
                            <div align="center" style="margin:5px;"> 
                                <table width="649" border="1">
                                    <tr>
                                        <td width="22"><div align="center"><strong>Sr</strong></div></td>
                                        <td width="189"><div align="center"><strong>Description</strong></div></td>
                                        <td width="66"><div align="center"><strong>Rate</strong></div></td>
                                        <td width="60"><div align="center"><strong>Amount(Rs.)</strong></div></td>
                                    </tr>
                                    <?php
                                    $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
                                    $sr = $subtotal = 0;
                                    foreach ($vhps as $vhp) {
                                        $sr = $sr + 1;
                                        ?>
                                        <tr>
                                            <td><div align="center"><?php _p($sr); ?></div></td>
                                            <td>&nbsp;<?php _p($vhp->ItemObject); ?></td></div></td>
                                            <td><div align="right"><?php _p(number_format($vhp->Rate, 2, '.', '')); ?>&nbsp; </div></td>
                                            <td><div align="right"><?php _p(number_format($vhp->Amount, 2, '.', ''));
                                                $subtotal = $subtotal + $vhp->Amount;
                                        ?>&nbsp; </div></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3"><div align="right"><strong>Net Amount</strong>&nbsp;</div></td>
                                        <td ><div align="right"><?php _p(number_format($vov->Amount, 2, '.', '')); ?>&nbsp;</div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">&nbsp;&nbsp;<strong>(In Words : <?php _p(convert_number($vov->Amount)); ?>Only)</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"> <div style="font-size:12px;">material is to e supplied on Door Delivery basis.If you are unable to supply the material within the specified period, please inform us well in advance</div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"> <div style="font-size:15px;"><strong>Terms    &amp; Conditions:-</strong></div>
                                            <div>1. Taxes :- Inclusive of above price.</div> <div>2. Payment :- As mutually agreed.</div>
                                            <div>3. Destination:- Dr. J.J.Madum Ayurved Medical College, Jaysingpur.</div>
                                            <div>4. Warranty :- Annul Maintenance Contract For Libratory(19/10/2016-19/10/2017). .</div>
                                            <div>5. Insurance :- Transit insurance at your end.</div>
                                            <div>6. Work Order inclusive Annul Maintenance Contract.</div>
                                            <div>7. The said work order is issued exclusively subject to Jaysingpur Jurisdiction only.</div>
                                        </td>
                                    </tr>
                                     <tr>
                                         <td colspan="6">
                                               <div> No Material will be accepted on Sunday, which is our weekly holiday, and or any other Government Holiday.</div>
                                        </td>
                                     </tr>
                                </table>
                                <div style="margin-left:60px;font-size: 12px; "> This purchase ordre is issued subject to terms and conditions printed overleaf.</div>
                          </table>
                           </div>
                        </div>
                    </div> 
            <script>
            var tableToExcel = (function () {
                            var uri = 'data:application/vnd.ms-excel;base64,'
                    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
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
    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>