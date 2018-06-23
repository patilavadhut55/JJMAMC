<?php
$strPageTitle = QApplication::Translate('Members') . ' - ' . QApplication::Translate('List All');
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <div>
        <div style="float: left; margin-right: 5px;"><strong>Course</strong></div>
        <div style="float: left; margin-right: 15px;"><?php $this->lstCourse->Render(); ?></div>
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
<?php if (isset($_GET['year'])) { ?>

    <script language="javascript">
        function Clickheretoprint()
        {
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
                disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
                var content_vlue = document.getElementById("formprint").innerHTML;
                var docprint = window.open("", "", disp_setting);
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
        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
    </a>
    <input type="button" class="button" onclick="tableToExcel('formprint', 'W3C Example Table')" value="Export to Excel">

    <div id="formprint" class="form-controls">    
        <div id="titleBar" align="center">INFORMATION OF CANDIDATES ADMITTED IN &nbsp;
            <?php _p($semester->Name); ?>, &nbsp; <?php _p($year->Name); ?>
        </div>
        <div align="center"><h3>Student Admitted For Program &nbsp;&nbsp;
                <?php _p(delete_all_between("[", "]", $course->Name)); ?></h3></div>
        <div style="overflow: auto; width: 900px;">
            <table border="1" width="100%" class="draggable sortable" style="line-height:27px;">
                <tr>
                    <th width="50" bgcolor="#F7F7F7"><div align="center">Sr</div></th>
                    <th width="216" bgcolor="#F7F7F7"><div align="center">Name</div></th>
                    <th width="109" bgcolor="#F7F7F7"><div align="center">Category</div></th>
                    <th width="120" bgcolor="#F7F7F7"><div align="center">Gender</div></th>
                    <th width="108" bgcolor="#F7F7F7"><div align="center">Date Of Birth</div></th>
                    <th width="150" bgcolor="#F7F7F7"><div align="center">Pre-Qualification</div></th>
                    <th width="69" bgcolor="#F7F7F7"><div align="center">Institute</div></th>
                    <th width="48" bgcolor="#F7F7F7"><div align="center">Passing Year</div></th>
                    <th width="58" bgcolor="#F7F7F7"><div align="center">Percentage</div></th>
                    <th width="85" bgcolor="#F7F7F7"><div align="center">Mobile No</div></th>
                    <th width="750"bgcolor="#F7F7F7"><div align="center">Address</div></th>
                </tr>
                <?php
                if (isset($_GET['course']))
                    $course = Role::LoadByIdrole($_GET['course']);
                ?>
                    <?php
                    $currents = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole), 
                                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue), 
                                            QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue), 
                                            QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status'])
                    ));
                    
                    if ($currents) {
                        $sr = 1;
                        foreach ($currents as $current) {
                            $student_edu_details_cnt = EducationDetails::CountByStudent($current->Student);
                            ?>
                        <tr>
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>">
                                <div align="center">
                                    <?php _p($sr++); ?>
                                </div>
                            </td>
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>"><?php _p($current->StudentObject->IdloginObject->Profile->PrefixObject . ' ' . $current->StudentObject->IdloginObject->Profile->FirstName . ' ' . $current->StudentObject->IdloginObject->Profile->MiddleName . ' ' . $current->StudentObject->IdloginObject->Profile->LastName); ?></td>
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>">
                                <div align="center">
                                    <?php _p($current->StudentObject->IdloginObject->Profile->FeeConcessionObject); ?>
                                </div>
                            </td>
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>">
                                <div align="center">
                                    <?php _p($current->StudentObject->IdloginObject->Profile->GenderObject); ?>
                                </div>
                            </td>
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>">
                                <div align="center">
                                    <?php if ($current->StudentObject->IdloginObject->Profile->Dob) _p(date('d/m/Y', strtotime($current->StudentObject->IdloginObject->Profile->Dob))); ?>
                                </div>
                            </td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>">
                                <div align="center">
                                    <?php _p($current->StudentObject->IdloginObject->Profile->Contact1); ?>
                                </div>
                            </td>
                            
                            <td rowspan="<?php _p($student_edu_details_cnt+1); ?>">
                                <div align="center">
                                    <?php _p($current->StudentObject->IdloginObject->Profile->AddressLine1); ?>
                                </div>
                            </td>
                            

                        </tr>
                        
                        
                        <?php
                            $student_edu_details = EducationDetails::LoadArrayByStudent($current->Student);
                            foreach ($student_edu_details as $student_edu_detail) {
                        ?>
                        <tr>
                            <td>
                                <div align="center">
                                    <?php _t($student_edu_detail->PreQualificationObject->Name); ?>
                                </div>
                            </td>
                            
                            <td>
                                <div align="center">
                                    <?php _t($student_edu_detail->Institute); ?>                                    
                                </div>
                            </td>
                            
                            <td>
                                <div align="center">
                                    <?php _t($student_edu_detail->PassingYear); ?>                                    
                                </div>
                            </td>
                            
                            <td>
                                <div align="center">                                                                                 
                                    <?php _t($student_edu_detail->Percentage); ?>                                    
                                </div>
                            </td>      
                            
                        </tr>                        
                        <?php } ?>      
                        
                       
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>

<?php } ?>
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