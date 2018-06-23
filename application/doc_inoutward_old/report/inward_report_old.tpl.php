<script language="javascript">
        function Clickheretoprint(){
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
    <table width="800" border="0">
        <tr>
            <td width="5%" valign="middle">From</td>
            <td width="14%"><?php $this->calFromDate->Render(); ?></td>
            <td width="5%" valign="middle">&nbsp;&nbsp;&nbsp;To</td>
            <td width="14%"><?php $this->calToDate->Render(); ?></td>
            <td width="14%"><?php $this->lstCat->Render(); ?></td>
            <td width="25%" style="padding:4px;"><?php $this->btnReport->Render(); ?></td>
        </tr>
    </table>
</div>
<div class="pull-left" style="width: 10%">
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
    </a>
</div>
<div style="clear: both"></div>
<?php if (isset($_GET['fdate']) && isset($_GET['tdate'])) { ?>
    <div class="form-controls" id="formPrint"> 
        <h3>Inward Register Report</h3>
        <table class="datagrid"border="1">
            <tr>
                <th width="2%"><div align="center">Sr</div></th>
                <th width="4%"><div align="center">Inward Letter No.</div></th>
                <th width="6%"><div align="center">From Whom Received</div></th>
                <th width="6%"><div align="center">Their outward No. and Date</div></th>
                <th width="6%"><div align="center">Contents of Inward Letter</div></th>
                <th width="4%"><div align="center">Person to whom letter marked</div></th>
            </tr>
            <?php
            $sr = 1;
           
               if($this->lstCat->SelectedValue != NULL){ 
            $inwards = DocInOut::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['fdate'])) . '000000'), 
                                    QQ::LessOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['tdate'])) . '235959'),
                                    QQ::Equal(QQN::DocInOut()->DocCateogry, $_GET['cat']),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::DocInOut()->Outward, 0),
                                            QQ::Equal(QQN::DocInOut()->Outward, NULL))
            ));
               } else{
              
                 $inwards = DocInOut::QueryArray(
                            QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['fdate'])) . '000000'), 
                                    QQ::LessOrEqual(QQN::DocInOut()->Date, Date('Ymd', strtotime($_GET['tdate'])) . '235959'),
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::DocInOut()->Outward, 0),
                                            QQ::Equal(QQN::DocInOut()->Outward, NULL))
            ));
            }
            
            foreach ($inwards as $inward) {
                $marks = MarkTo::LoadArrayByDocInOut($inward->IddocInOut);
                if ($marks) {
                    foreach ($marks as $mark) {
                        ?>
                        <tr> 
                            <td><div align="center"> <?php _p($sr++); ?></div></td>
                            <td><div align="center"><?php _p($inward->Code); ?></div></td>
                            <td><div align="center"><?php _p($inward->From); ?></div></td>
                            <td><div align="center"><?php _p(date('Y-m-d', strtotime($inward->Date))); ?></div></td>
                            <td><div align="center"> <?php _p(base64_decode($inward->DescData)); ?></div></td>
                            <td><div align="center"><?php _p($mark->ToObject->IdloginObject->Name); ?></div></td>
                        </tr>
                    <?php
                    }
            }
            }
            ?>
            <div style="clear: both;"></div> 
        </table>
    </div>
<?php  } ?>
        <div style="clear: both"></div>
	<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>