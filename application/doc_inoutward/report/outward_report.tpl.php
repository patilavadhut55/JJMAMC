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
<?php
$strPageTitle = QApplication::Translate('Opening');
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <table width="100%" border="0">
        <tr>
            <td width="5%" valign="middle">From</td>
            <td width="14%"><?php $this->calFromDate->Render(); ?></td>
            <td width="5%" valign="middle">&nbsp;&nbsp;&nbsp;To</td>
            <td width="14%"><?php $this->calToDate->Render(); ?></td>
            <td width="14%"><?php $this->lstCat->Render(); ?></td>
            <td width="18%"><?php $this->btnReport->Render(); ?></td>
        </tr>
    </table>
</div>
<div class="pull-left" style="width: 10%">
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
    </a>
</div><div style="clear: both"></div>

<?php if (isset($_GET['fdate'])) { ?>
    <div class="form-controls"  id="formPrint"> 
        <h3>OutWard Report</h3>
        <table class="datagrid" border="1">
            <tr>
                <th width="2%"><div align="center">Sr</div></th>
            <th width="8%"><div align="center">Date</div></th>
            <th width="7%"><div align="center">Ref & Outward No.</div></th>
            <th width="12%"><div align="center">Name and Address</div></th>
            <th width="4%"><div align="center">Place</div></th>
            <th width="5%"><div align="center">By Email </div></th>
            <th width="4%"><div align="center">By Hand</div></th>
            <th width="6%"><div align="center">Register AD Rs.</div></th>
            <th width="4%"><div align="center">Speed Post Rs.</div></th>
            <th width="4%"><div align="center">Courier Charges</div></th>
            <th width="4%"><div align="center">Postage</div></th>
            <th width="4%"><div align="center">Remark</div></th>
            </tr>
            <?php
            $sr = 1;
            if($this->lstCat->SelectedValue != NULL){ 
            $docwords = DocInOut::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['fdate'])) . '000000'),
                                    QQ::LessOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['tdate'])) . '235959'),
                                    QQ::Equal(QQN::DocInOut()->DocCateogry, $_GET['cat']),
                                    QQ::Equal(QQN::DocInOut()->Outward, 1)
            ));
            }else{
            $docwords = DocInOut::QueryArray(
                        QQ::AndCondition(
                                QQ::GreaterOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['fdate'])) . '000000'),
                                QQ::LessOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['tdate'])) . '235959'),
                             QQ::Equal(QQN::DocInOut()->Outward, 1)
            ));
          
            }
            foreach ($docwords as $docword) {
                ?>
                <tr> 
                    <td><div align="center"> <?php _p($sr++); ?></div></td>
                    <td><div align="center"> <?php _p(date('Y-m-d', strtotime($docword->Date))); ?></div></td>
                    <td><div align="center"><?php _p($docword->Code); ?></div></td>
                    <td><div align="center"><?php _p($docword->Name); ?>&nbsp;&nbsp;<?php _p($docword->Address); ?></div></td>
                    <td><div align="center"><?php _p($docword->Place); ?></div></td>
                    <td><div align="center"><?php _p($docword->To); ?></div></td>
                    <td><div align="center"><?php _p($docword->TableNo); ?></div></td>
                    <td><div align="center"><?php _p($docword->FilenoName); ?></div></td>
                    <td><div align="center"> <?php _p($docword->SerialNo); ?></div></td>
                    <td><div align="center"><?php _p($docword->CourierCharges); ?></div></td>
                    <td><div align="center"><?php _p($docword->Postage); ?></div></td>
                    <td></td>
                </tr>
            <?php } ?>
            <div style="clear: both;"></div> 
        </table>
    </div>
<?php } ?>
<div style="clear: both"></div>
<?php $this->RenderEnd() ?>

<?php
//require(__CONFIGURATION__ .'/footer.inc.php'); ?>