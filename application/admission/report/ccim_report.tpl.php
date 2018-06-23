<?php
	$strPageTitle = QApplication::Translate('Members') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
<div class="form-controls">
    
    <div>
        <div style="float: left; margin-right: 5px;"><strong>Course</strong></div>
        <div style="float: left; margin-right: 15px;"><?php $this->txtCourse->Render(); ?></div>
        <div style="float: left; margin-right: 5px;"><strong>Year</strong></div>
        <div style="float: left; margin-right: 15px;"><?php $this->lstSemister->Render(); ?></div>
        <div style="float: left; margin-right: 5px;"><strong>Academic Year</strong></div>
        <div style="float: left; margin-right: 15px;"><?php $this->lstYear->Render(); ?></div>
        <div style="float: left; margin-right: 5px;"><strong>Admission Status</strong></div>
        <div style="float: left;"><?php $this->lstAdmissionStatus->Render(); ?></div>
        <div style="clear: both;"></div>
        <div style="float: right;"><?php $this->btnShow->Render(); ?></div>    
        <div style="clear: both;"></div>
    </div>
</div>
<?php if(isset($_GET['year'])){ ?>
<script language="javascript">
    function Clickheretoprint()
        {
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formprint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script>  
<script src="dragtable.js"></script>
<script src="jquery-latest.js"></script>
<?php
    $course = Role::LoadByIdrole($_GET['course']);
    $year = CalenderYear::LoadByIdcalenderYear($_GET['year']);
    $semester = AcademicYear::LoadByIdacademicYear($_GET['semi']);
?>
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<input type="button" class="button" onclick="tableToExcel('mytable', 'W3C Example Table')" value="Export to Excel">

<div class="form-controls" id="formprint" align="center">    
    <table width="850" border="0" style="line-height:25px;">
            <tr>
                <td><div align="center"><strong>ANNEXURE - I</strong></div></td>
            </tr>
            <tr>
                <td><div align="center">
                        <strong>DETAILS OF UNDERGRADUATE  STUDENTS ADMITTED IN THE YEAR- <?php _p($year->Name); ?></strong>
                    </div>
                </td>
            </tr>
        </table>

    <table border="1"  class="draggable sortable" style="line-height:35px;" >
        <tr>
            <th width="39" bgcolor="#F7F7F7"><div align="center">Sr</div></th>
            <th width="198" bgcolor="#F7F7F7"><div align="center">Name</div></th>
            <th width="105" bgcolor="#F7F7F7"><div align="center">Father's Name</div></th>
            <th width="96" bgcolor="#F7F7F7"><div align="center">DOB</div></th>
            <th width="109" bgcolor="#F7F7F7"><div align="center">Fee Receipt No. &amp; Date</div></th>
            <th width="140" bgcolor="#F7F7F7"><div align="center">Residential Address</div></th>
            <th width="144" bgcolor="#F7F7F7"><div align="center">Govt./ Management Quato</div></th>
            <th width="104" bgcolor="#F7F7F7"><div align="center">% of PCB 10+2</div></th>
            <th width="154" bgcolor="#F7F7F7"><div align="center">Category</div></th>
        </tr>
            <?php
            if (isset($_GET['course'])) {
                $currents = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['course']), 
                                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['year']), 
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['semi']), 
                                        QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status'])
                ));
                if ($currents) {
                    $sr = 1;
                    foreach ($currents as $current) {
            ?>
        <tr>
            <td><div align="center"><?php _p($sr++); ?></div></td>
            <td><?php _p($current->StudentObject->IdloginObject->Profile->PrefixObject . ' ' . $current->StudentObject->IdloginObject->Profile->FirstName . ' ' . $current->StudentObject->IdloginObject->Profile->LastName); ?></td>
            <td><div align="center"><?php _p($current->StudentObject->IdloginObject->Profile->MiddleName); ?></div></td>
            <td><div align="center"><?php if ($current->StudentObject->IdloginObject->Profile->Dob) _p(date('d/m/Y', strtotime($current->StudentObject->IdloginObject->Profile->Dob))); ?></div></td>
            <td><div align="center"></div></td>
            <td><div align="center"><?php _p($current->StudentObject->IdloginObject->Profile->AddressLine1); ?></div></td>
            <td><div align="center"><?php _p($current->StudentObject->IdloginObject->Profile->AdmissionModeObject); ?></div></td>
            <td><div align="right">
                <?php
                //total %
                $hscs = Education::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Education()->Member, $current->Student), QQ::Equal(QQN::Education()->Title, 5)
                ));
                if ($hscs) {
                    foreach ($hscs as $hsc) {
                        
                    }
                    $phy = $chem = $bio = $total = 0;
                    $marks = Marks::LoadArrayByEducation($hsc->Ideducation);
                    if ($marks) {
                        foreach ($marks as $mark) {
                            if ($mark->Subject == 1)
                                $phy = $phy + $mark->MarksObtained;
                            elseif ($mark->Subject == 2)
                                $chem = $chem + $mark->MarksObtained;
                            elseif ($mark->Subject == 3)
                                $bio = $bio + $mark->MarksObtained;
                        }
                        $total = ($phy + $chem + $bio) / 300 * 100;
                        _p(number_format($total, 2, '.', ''));
                    }
                }
                ?>
            &nbsp; </div></td>
            <td><div align="center"><?php _p($current->StudentObject->IdloginObject->Profile->FeeConcessionObject); ?></div></td>
        </tr>
        <?php }}} ?>
    </table>
  
</div>
</div>
<?php } ?>
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

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>