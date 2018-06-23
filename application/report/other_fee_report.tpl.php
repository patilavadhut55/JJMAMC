<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>

<script language="javascript">
    function Clickheretoprint() {
    var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
            disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("formPrint").innerHTML;
            var docprint = window.open("", "", disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/table.css");</style><center>');
            docprint.document.write(content_vlue);
            docprint.document.write('</center></body></html>');
            docprint.document.close();
    }
</script>

<div class="form-controls">    
    <div class="pull-right" style="width: 100%">
        <div style=" margin-top: 20px; "> 
            <table width="100%" border="0">
                <tr>

                </tr>
                <tr>
                    <td width="80px"><strong>From Date</strong></td>
                    <td width="200px"><?php $this->calFromDate->Render(); ?></td>
                    <td width="60px" ><strong>To Date</strong></td>
                    <td width="200px"><?php $this->calToDate->Render(); ?></td>
                    <td width="150px" style="padding:4px;"><?php $this->lstCalyear->Render(); ?></td>
                    <td width="160px" style="padding:4px;"><?php $this->lstCourse->Render(); ?></td>
                    <td width="160px" style="padding:4px;"><?php $this->lstAcadyear->Render(); ?></td>

                    <td width="80px"><?php $this->btnReport->Render(); ?></td>
                </tr>
            </table>
        </div>
        <hr>
    </div>
    <div class="pull-left" style="width: 10%">
        <a href="javascript:Clickheretoprint()">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
    <input type="button" class="btn btn-success" onclick="tableToExcel('formPrint', 'W3C Example Table')" value="Export to Excel">    
    <div style="clear: both"></div>
    <?php $this->RenderEnd() ?>
    <div>
        <?php
        if (isset($_GET['fdate']) && isset($_GET['todate'])) {
            $to = Date('Ymd', strtotime($_GET['fdate']));
            $sr = 1;
            ?>
            <div style=" width: 100%;overflow: auto;" id="formPrint">
                <br>
                <div align="center"><b>DR.J.J.MAGDUM AYURVED MEDICAL COLLEG JAYSINGPUR</b></div> 
                <div align="center"><b>Miscellaneous Fee Report</b></div> 
                <div style="width:100%; " >
                    <div align="center">Fee On Date <?php _p(date('d/m/Y', strtotime($this->calFromDate->Text))); ?> To <?php _p(date('d/m/Y', strtotime($this->calToDate->Text))); ?></div>
                    <div style="clear: both"></div>
                </div>
                <br>
                <table border="1" width="80%" align="center" class="datagrid">
                    <?php
                    $from = Date('Ymd', strtotime($_GET['fdate']));
                    $to = Date('Ymd', strtotime($_GET['todate']));
                    
                    if ($this->lstCalyear->SelectedValue != NULL && $this->lstAcadyear->SelectedValue != NULL && $this->lstCourse->SelectedValue ) {
                        $vovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                                QQ::GreaterOrEqual(QQN::Voucher()->Date, $from . '000000'),
                                                QQ::LessOrEqual(QQN::Voucher()->Date, $to . "235959"),
                                                QQ::Equal(QQN::Voucher()->Grp, 7),
                                                QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, 1),
                                                QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                                QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear, $this->lstCalyear->SelectedValue),
                                                 QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstAcadyear->SelectedValue)
                                        ), QQ::Clause(
                                                QQ::OrderBy(QQN::Voucher()->Seq, TRUE)
                                        )
                        );
                    }else {
                        $vovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                                QQ::GreaterOrEqual(QQN::Voucher()->Date, $from . '000000'),
                                                QQ::LessOrEqual(QQN::Voucher()->Date, $to . "235959"),
                                                QQ::Equal(QQN::Voucher()->Grp, 7), 
                                                QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, 1), 
                                                QQ::Equal(QQN::Voucher()->Parrent, NULL)
                                        ), QQ::Clause(
                                                QQ::OrderBy(QQN::Voucher()->Seq, TRUE)
                                        )
                        );
                    }
                    ?>
                    <tr>
                        <th>Sr.</th>
                        <th>Date</th>
                        <th> Challan No.</th>
                        <th> Payment Mode</th>
                        <th>PRN No.</th>
                        <th> Name</th>
                    <?php
                    $leds = Ledger::QueryArray(
                                    QQ::Equal(QQN::Ledger()->IsFeeRepeat, 1)
                    );

                    if ($leds) {
                        foreach ($leds as $led) {
                            $arrfees[$led->Idledger] = 0;
                            ?>
                            <th><?php _p($led->Name); ?></th>
                       <?php }}?>
                        <th> Total</th>
                    </tr>

                    <tr>
                        <?php
                        $totalamtpaid = 0;
                        if ($vovs) {
                            foreach ($vovs as $vov) {
                                $totalamt = 0;
                                ?>
                                <td align="center"><?php _p($sr++); ?></td>
                                <td><?php _p(date("M d Y", strtotime($vov->Date))); ?></td>
                                <td ><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . "/fees_structure/repeat_fee_print.php?mem=" . $vov->RefStatusObject->Student . "&id=" . $vov->Idvoucher . "&flag=1"); ?>"> <?php _p($vov->InvNo); ?></a></td>
                                <td><?php _p($vov->PaymentModeObject);?></td>
                                <td><?php _p($vov->RefStatusObject->StudentObject->IdloginObject->Code); ?></td>
                                <td><?php _p($vov->RefStatusObject->StudentObject->IdloginObject->Name); ?></td>
                                <?php
                                if ($leds) {
                                    foreach ($leds as $led) {

                                        $amt = 0;
                                        $vous = Voucher::QueryArray(
                                                        QQ::AndCondition(
                                                                QQ::GreaterOrEqual(QQN::Voucher()->Date, $from . '000000'),
                                                                QQ::LessOrEqual(QQN::Voucher()->Date, $to . "235959"), 
                                                                QQ::Equal(QQN::Voucher()->Grp, 7),
                                                                QQ::Equal(QQN::Voucher()->Dr, $led->Idledger),
                                                                QQ::Equal(QQN::Voucher()->Cr, $vov->RefStatusObject->Student),
                                                                QQ::OrCondition(
                                                                    QQ::Equal(QQN::Voucher()->Parrent,$vov->Idvoucher),
                                                                    QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)
                                                                )
                                                                
                                                        ), QQ::Clause(QQ::OrderBy(QQN::Voucher()->InvNo, TRUE))
                                        );

                                        foreach ($vous as $vou) {
                                            $amt = $vou->Amount;
                                        }
                                        $arrfees[$led->Idledger] += $amt;
                                        ?>
                                        <td align="center"> <?php _p($amt); ?></td>
                                        <?php $totalamt = $totalamt + $amt;
                                        ?>
                                    <?php }
                                } ?>
                                <td align="center"> 
                                    <strong>
                                    <?php $totalamtpaid = $totalamtpaid + $totalamt;
                                          _p($totalamt);
                                    ?>
                                    </strong>
                                </td>
                            </tr>

                            <?php } ?> 
                        <?php } ?>
                    <tr>
                        <td colspan="6" align="right"><strong>Total</strong></td>
                        <?php
                        if ($leds) {
                            foreach ($leds as $led) {
                                ?>
                        <td align="center"><strong><?php _p($arrfees[$led->Idledger]); ?></strong></td>
                            <?php }
                        } ?>
                                <td align="center"><strong><?php _p($totalamtpaid) ?></strong></td>
                    </tr>
                </table>
            </div>
        <?php } ?>

        <div style="clear: both;"></div>
        <div style="margin-top: 50px;">
            <div style="float: left"><strong>Accountant</strong></div>
            <div style="float: right"><strong>Cashier</strong></div>
        </div>
        <div style="clear: both;"></div>
    </div>
</div>
<script>
        var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,' , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
          return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
        }
        })()

</script>
