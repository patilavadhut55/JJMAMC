<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

<div class="form-controls">
<table width="910" border="0">
   <tr>
            <td><?php $this->calfrom->RenderWithName(); ?></td>
            <td><?php $this->calto->RenderWithName(); ?></td>
            <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="421"><?php $this->lstCourse->RenderWithName(); ?></td>
    <td width="434"><?php $this->lstSemister->RenderWithName(); ?></td>
  </tr>
       
  <tr>
    <td><?php $this->lstYear->RenderWithName(); ?></td>
   
    <td><?php $this->btnShow->Render(); ?></td>
  </tr>
</table>
     </div>

<?php if(isset($_GET['from'])){ ?>
        
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
<?php if (isset($_GET["from"])) {
    $from = $_GET['from'];
    $to = $_GET['to'];
    ?>
   
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<div class="form-controls" style="overflow: auto;">
<div id="formPrint">
<?phps
//if(isset($_GET['from'])){
  //  $year = AcademicYear::LoadByIdacademicYear($_GET['year']);
// }
    ?>
<div id="titleBar">
    <?php 
        if (isset($_GET['course']))
            $course = Role::LoadByIdrole($_GET['course']);
            _p($this->lstCourse->SelectedName.' - '); ?> Fees Statement <?php _p($this->lstSemister->SelectedName); 
    ?>
</div>
    <?php if(isset($_GET["from"]) && isset($_GET["to"])){
        
        $from=$_GET['from'];
        $to = $_GET['to'];
        ?>
    <div align="center"><b>From  <?php  _p(date('Y/m/d', strtotime($from))); ?> To  <?php _p(date('Y/m/d', strtotime($to))); ?></b></div>
      
<table border="1" cellspacing ="0" style="font-size:12px;" class="datagrid">
    <tr>
        <th width="31" rowspan="2">Sr</th>
        <th width="59" rowspan="2">Code</th>
        <th width="200" rowspan="2">Name</th>
        <?php 
        $ledcnt = Ledger::QueryCount(
                QQ::AndCondition(    
                    QQ::Equal(QQN::Ledger()->Grp, 5454),    
                    QQ::OrCondition(    
                        QQ::Equal(QQN::Ledger()->IsFeeRepeat, 0),
                        QQ::Equal(QQN::Ledger()->IsFeeRepeat, NULL)
                    )
                )
            );
        ?>
        <th colspan = "<?php echo $ledcnt; ?>">Paid Fees</th>
    </tr>
    <tr>
    <?php
    $total = 0;
        $leds = Ledger::QueryArray(
            QQ::AndCondition(    
                QQ::Equal(QQN::Ledger()->Grp, 5454),    
                QQ::OrCondition(    
                    QQ::Equal(QQN::Ledger()->IsFeeRepeat, 0),
                    QQ::Equal(QQN::Ledger()->IsFeeRepeat, NULL)
                )
            )
        );
                ?>
        <?php
           
            if ($leds){
                foreach ($leds as $led) {
                    ?>
                    <th> <?php _p($led->Name); ?></th>
                <?php 
                }
            }
        ?>
        <?php
            $fees = array();
            if ($leds) {
                foreach ($leds as $led) {
                    $fees[] = $led->Idledger;
            ?>
            <?php }} ?>
    </tr>
    <?php
        $sr = 1;
        $from = Date('Ymd', strtotime($_GET['from']));
        $to = Date('Ymd', strtotime($_GET['to']));
    ?>
    <?php
        /*$currents = CurrentStatus::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue)
            )
        );
        */
    if($this->lstCourse->SelectedValue == NULL && $this->lstSemister->SelectedValue == NULL && $this->lstYear->SelectedValue == NULL && $this->calfrom->Text != "" && $this->calto->Text != ""){
        $currents  = Voucher::QueryArray(
                                QQ::AndCondition(                                    
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date , Date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::In(QQN::Voucher()->RefNoObject->Cr, $fees),
                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                    QQ::Equal(QQN::Voucher()->Grp, 7)                                    
                                ),
                                QQ::GroupBy(QQN::Voucher()->Cr)
                            );
    }else{
         $currents  = Voucher::QueryArray(
                                QQ::AndCondition(                                    
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date , Date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$_GET['semi']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::In(QQN::Voucher()->RefNoObject->Cr, $fees),
                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                    QQ::Equal(QQN::Voucher()->Grp, 7)                                    
                                ),
                                QQ::GroupBy(QQN::Voucher()->Cr)
                            );
    }
    
        foreach ($currents as $current) {
            
            
            
            if ($leds) {
                foreach ($leds as $led) {
                    $payvous  = Voucher::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Cr, $current->Cr),
                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $led->Idledger),
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date , Date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::Equal(QQN::Voucher()->Grp, 7)                                    
                                ),
                                QQ::Clause(
                                    QQ::Sum(QQN::Voucher()->Amount, "paidamt")
                                )
                            );
                    $paidamt = 0;
                    $arrpaidable[$current->Cr][$led->Idledger] = "0";
                    if($payvous){
                        $paidamt = $payvous->GetVirtualAttribute("paidamt");
                    }     
                   
                    if($paidamt)
                    $arrpaidable[$current->Cr][$led->Idledger] = $paidamt;
                }
            }
    ?>  

        <tr>
            <td height="18"><?php _p($sr++); ?></td>
            <td><?php _p($current->CrObject->Code); ?></td>
            <td><?php _p($current->CrObject->Profile->PrefixObject . ' ' . $current->CrObject->Profile->FirstName . ' ' . $current->CrObject->Profile->MiddleName . ' ' . $current->CrObject->Profile->LastName); ?></td>
            <?php 
            
            if ($leds) {
                foreach ($leds as $led) {
                    
            ?>                
            <td><div align="right"><?php _p($arrpaidable[$current->Cr][$led->Idledger]); $total = $total + ($arrpaidable[$current->Cr][$led->Idledger]); ?></div></td>
            <?php ?>
            <?php }
            
                } ?>
        </tr>
    <?php }} ?>
      
 </table>
    </div>
</div>
<?php }} ?>
	<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>