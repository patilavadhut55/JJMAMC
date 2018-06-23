<?php
$strPageTitle = QApplication::Translate('Inquiry');
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls" >
    <table width="100%" border="0">
        <tr>
            <td width="42%" ><?php $this->lstStatus->RenderWithName(); ?></td>
            <td width="42%" > <?php $this->lstCourse->RenderWithName(); ?></td>
            <td width="16%" >&nbsp;</td>
        </tr>
        <tr>
            <td><?php $this->calFrom->RenderWithName(); ?></td>
            <td><?php $this->calTo->RenderWithName(); ?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?php $this->btnShow->Render(); ?>
                <?php $this->btnadd->Render(); ?></td>
        </tr>
    </table>
</div>

<script language="javascript">
    function Clickheretoprint()
    {
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
        disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formprint").innerHTML;

        var docprint = window.open("", "", disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/styles_blue.css");</style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>
<a href="javascript:Clickheretoprint();">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
</a>

<div class="form-controls" >
    <div id="formprint" >
        <?php if (isset($_GET['from'])) { ?>  <h4><?php _p($this->lstStatus->SelectedName); ?> Inquiry From <?php _p(date('d/m/Y', strtotime($_GET['from']))); ?> To <?php _p(date('d/m/Y', strtotime($_GET['to']))); ?></h4><?php } ?>
        <table width="100%" border="0" class="datagrid">
            <tr>
                <th>Sr</th>
                <th></th>
                <th></th>
                <th>Code</th>
                <th>Name</th>
                <th>Department</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Category-Caste</th>
                <?php  if(!isset($_GET['status']) || (isset($_GET['status']) && $_GET['status'] == 1)){ ?>
                <th><?php $this->chkSelectAll->Render();?>Select All</th>
                <?php }?>
            </tr>
            <?php
                if (isset($_GET['dept'])) {
                    if ($_GET['status'] == 1){
                        $inquiries = Inquiry::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), 
                                        QQ::Equal(QQN::Inquiry()->Finalized, 0), 
                                        QQ::Equal(QQN::Inquiry()->Admitted, 0),    
                                        QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), 
                                        QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                    ), QQ::OrderBy(QQN::Inquiry()->Course));
                    }elseif ($_GET['status'] == 2){
                        $inquiries = Inquiry::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), 
                                        QQ::Equal(QQN::Inquiry()->Finalized, 1), 
                                        QQ::Equal(QQN::Inquiry()->Admitted, 0),    
                                        QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), 
                                        QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                    ), QQ::OrderBy(QQN::Inquiry()->Course));
                    }
                }else{
                    $inquiries = Inquiry::QueryArray(
                                QQ::OrCondition(
                                    QQ::NotEqual(QQN::Inquiry()->Finalized, 1),
                                    QQ::Equal(QQN::Inquiry()->Admitted, 0)    
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
                }
                if($inquiries){
                    $sr = 1;
                    foreach ($inquiries as $inquirie) {
            ?>
            
            <tr>
                <td valign="top"><div align="center"><?php _p($sr++); ?></div></td>
                <td valign="top"><div align="center"><?php $this->lblDel[$inquirie->Idinquiry]->Render(); ?></div></td>
                <td valign="top"><div align="center"><?php $this->lblEdit[$inquirie->Idinquiry]->Render(); ?></div></td>
                <td valign="top"><div align="left"><?php _p($inquirie->Code); ?></div></td>
                <td valign="top"><?php _p($inquirie->PrefixObject . ' ' . $inquirie->FirstName . ' ' . $inquirie->MiddleName . ' ' . $inquirie->LastName); ?></td>
                <td valign="top"><div align="left"><?php _p(delete_all_between('[', ']',$inquirie->CourseObject)); ?></div></td>
                <td valign="top"><div align="left"><?php _p($inquirie->Contact); ?></div></td>
                <td valign="top"><div align="left"><?php _p($inquirie->Address); ?></div></td>
                <td valign="top"><div align="left"><?php _p($inquirie->CategoryObject); ?></div></td>
                <?php  if(!isset($_GET['status']) || (isset($_GET['status']) && $_GET['status'] == 1)){ ?>
                <td valign="top"><div align="left"><?php $this->chkAdmit[$inquirie->Idinquiry]->Render(); ?></td>
                <?php } ?>
            </tr>
            <?php }} ?>
        </table>
        <div class="form-actions">
            <div class="form-delete"><?php  if(!isset($_GET['status']) || (isset($_GET['status']) && $_GET['status'] == 1)){ $this->btnSubmit->Render(); } ?></div>
            <div class="form-delete"><?php $this->btnCancel->Render(); ?></div>
        <div style="clear: both;"></div> 
        </div>
    </div>
</div>

<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>