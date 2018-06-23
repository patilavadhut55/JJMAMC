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

<div id="formprint" class="form-controls">    
    <div id="titleBar" align="center">INFORMATION OF CANDIDATES ADMITTED IN &nbsp;
        <?php _p($semester->Name); ?>, &nbsp; <?php _p($year->Name); ?>
    </div>
    <div align="center"><h3>Student Admitted For Program &nbsp;&nbsp;
        <?php _p(delete_all_between("[", "]", $course->Name)); ?></h3></div>
<div style="overflow: auto;" width="100%">
<table  border="1"  class="datagrid" style="line-height:27px; " >
    <tr>
        <th width="36" bgcolor="#F7F7F7"><div align="center">Sr</div></th>
        <th width="216" bgcolor="#F7F7F7"><div align="center">Name</div></th>
        <th width="109" bgcolor="#F7F7F7"><div align="center">Category</div></th>
        <th width="74" bgcolor="#F7F7F7"><div align="center">Gender</div></th>
        <th width="108" bgcolor="#F7F7F7"><div align="center">Date Of Birth</div></th>
        <th colspan="2" bgcolor="#F7F7F7" valign="bottom" ><div align="center">Cet
            <table width="147" border="1">
                <tr>
                    <td width="61"><div align="center">Aso-Cet</div></td>
                    <td width="70"><div align="center">MH-Cet</div></td>
                </tr>
            </table></div>
        </th>
        <th width="69" bgcolor="#F7F7F7"><div align="center">NEET %</div></th>
        <th width="69" bgcolor="#F7F7F7"><div align="center">12th Total</div></th>
        <th width="48" bgcolor="#F7F7F7"><div align="center">12th %</div></th>
        <th width="58" bgcolor="#F7F7F7"><div align="center">English</div></th>
        <th width="58" bgcolor="#F7F7F7"><div align="center">Physics</div></th>
        <th width="69" bgcolor="#F7F7F7"><div align="center">Chemistry</div></th>
        <th width="57" bgcolor="#F7F7F7"><div align="center">Biology</div></th>
        <th width="57" bgcolor="#F7F7F7"><div align="center">Total Group</div></th>
        <th width="67" bgcolor="#F7F7F7"><div align="center">Group Marks %</div></th>
        <th width="85" bgcolor="#F7F7F7">Mobile No</th>
        <th width="200" bgcolor="#F7F7F7">Address</th>
    </tr>
    <?php   if(isset($_GET['course']))
                $course = Role::LoadByIdrole($_GET['course']);
            
    ?>
      
      <tr>
<?php $currents = CurrentStatus::QueryArray(
                  QQ::AndCondition(
                      QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                      QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                      QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue),
                      QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status'])    
                  ));
       if($currents){
          $sr =1;
          foreach ($currents as $current){
          ?>
          
        <td><div align="center"><?php _p($sr++); ?></div></td>
        
        <td><?php _p($current->StudentObject->IdloginObject->Profile->PrefixObject.' '.$current->StudentObject->IdloginObject->Profile->FirstName.' '.$current->StudentObject->IdloginObject->Profile->MiddleName.' '.$current->StudentObject->IdloginObject->Profile->LastName); ?></td>
       
        <td>
            <div align="center">
               <?php _p($current->StudentObject->IdloginObject->Profile->FeeConcessionObject); ?>
            </div>
        </td>
       
        <td>
           <div align="center">
                <?php _p($current->StudentObject->IdloginObject->Profile->GenderObject); ?>
            </div>
       </td>
       
       <td>
            <div align="center">
                <?php if($current->StudentObject->IdloginObject->Profile->Dob) _p(date('d/m/Y', strtotime($current->StudentObject->IdloginObject->Profile->Dob))); ?>
            </div>
       </td>
       
       <!-- Aso-cet -->
       <td width="65"><div align="right">
         <?php $asocets = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student),
                            QQ::Equal(QQN::EducationDetails()->PreQualification, 7)
                                    )); 
                 if($asocets){
                     foreach ($asocets as $asocet){}
                     _p(number_format($asocet->Total,2,'.',''));
                 }                   
                 ?>&nbsp;
       </div></td>
       <!-- MH-cet -->
       <td width="72"><div align="right">
         <?php $govs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student),
                            QQ::Equal(QQN::EducationDetails()->PreQualification, 8)
                                    ));
                 if($govs){
                     foreach ($govs as $gov){}
                    _p(number_format($gov->Total,2,'.',''));
                 }                   
       ?>&nbsp;
       </div></td>
         <!-- NEET -->
       <td width="72"><div align="right">
         <?php $neets = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student),
                            QQ::Equal(QQN::EducationDetails()->PreQualification, 64)
                                    ));
                 if($neets){
                     foreach ($neets as $neet){}
                    _p(number_format($neet->Percentage,2,'.',''));
                 }                   
       ?>&nbsp;
       </div></td>
       
       
       <!-- 12 total -->
       <td><div align="right">  
           <?php $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student),
                            QQ::Equal(QQN::EducationDetails()->PreQualification, 5)
                                    ));
                 if($hscs){
                     foreach ($hscs as $hsc){}
                     _p(number_format($hsc->Total,2,'.',''));
                 }                   
       ?>&nbsp;
       </div></td>
       <!-- 12 per -->
       <td><div align="right">  
           <?php $hscs =EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student),
                            QQ::Equal(QQN::EducationDetails()->PreQualification, 5)
                                    ));
                 if($hscs){
                     foreach ($hscs as $hsc){}
                     _p(number_format($hsc->Percentage,2,'.',''));
                 }                   
       ?>&nbsp;
       </div></td>
       
       <!-- English  -->
       
       <td><div align="right">  
           <?php 
           //english
                   $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student)
                                    )); 
                 if($hscs){
                        foreach ($hscs as $hsc){
                     
                     $engs = Marks::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Marks()->StudentEducation, $hsc->IdeducationDetails),
                            QQ::Equal(QQN::Marks()->Subject, 7)        
                                    ));
                     if($engs){
                         foreach ($engs as $eng){}
                     _p(number_format($eng->MarksObtained,2,'.',''));
                     }
                 }             
                 }
       ?>&nbsp;
       </div></td>
       
       <!-- Physics  -->
       <td> <div align="right">   <?php 
           //physics
           $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student)
                                    )); 
                 if($hscs){
                        foreach ($hscs as $hsc){
                        $phys = Marks::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Marks()->StudentEducation, $hsc->IdeducationDetails),
                            QQ::Equal(QQN::Marks()->Subject, 1)        
                                    ));
                        if($phys){
                            foreach ($phys as $phy){}
                            _p(number_format($phy->MarksObtained,2,'.',''));
                        }
                        }
                 }                   
       ?>&nbsp;
       </div></td>
       
       <!-- Chemistry  -->
       <td><div align="right">  <?php 
           //chmeistry
           $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student)
                                    )); 
                  if($hscs){
                        foreach ($hscs as $hsc){
                        $chems = Marks::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Marks()->StudentEducation, $hsc->IdeducationDetails),
                            QQ::Equal(QQN::Marks()->Subject, 2)        
                                    ));
                     if($chems){
                         foreach ($chems as $chem){}
                     _p(number_format($chem->MarksObtained,2,'.',''));
                     }
                        }
                 }                   
       ?>&nbsp;
       </div></td>
       
       <!-- Biology  -->
       <td><div align="right">  
           <?php 
           //biology
           $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student)
                                    )); 
                  if($hscs){
                        foreach ($hscs as $hsc){
                        $bios = Marks::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Marks()->StudentEducation, $hsc->IdeducationDetails),
                            QQ::Equal(QQN::Marks()->Subject, 6)        
                                    ));
                     if($bios){
                         foreach ($bios as $bio){}
                     _p(number_format($bio->MarksObtained,2,'.',''));
                     }
                        }
                 }                   
       ?>&nbsp;
       </div></td>
       
       <!-- Total Group  -->
       <td><div align="right">  
           <?php 
             $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student)
                                    )); 
                 if($hscs){
                     foreach ($hscs as $hsc){
                     $phy = $chem = $bio = $total = 0;
                     $marks = Marks::LoadArrayByStudentEducation($hsc->IdeducationDetails);
                     if($marks){
                         foreach ($marks as $mark){
                             
                             if($mark->Subject == 1)$phy = $phy + $mark->MarksObtained;
                             elseif($mark->Subject == 2)$chem = $chem + $mark->MarksObtained;
                             elseif($mark->Subject == 6)$bio = $bio + $mark->MarksObtained;
                             
                         $total = $phy + $chem + $bio;
                         }
                     _p($total);
                     }
                 }          
                 }
       ?>&nbsp;
       </div></td>
       
       <!-- Group per  -->
       <td><div align="right">  
           <?php 
           //total %
            $hscs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::EducationDetails()->Student, $current->Student)
                                    )); 
                 if($hscs){
                     foreach ($hscs as $hsc){
                     $phy = $phyout = $chem = $cheout = $bio = $bioout = $total = 0;
                     $marks = Marks::LoadArrayByStudentEducation($hsc->IdeducationDetails);
                     if($marks){
                         foreach ($marks as $mark){
                            if($mark->Subject == 1){
                                 $phy = $phy + $mark->MarksObtained;
                                 $phyout = $phyout + $mark->OutOf;
                            }elseif($mark->Subject == 2){
                                $chem = $chem + $mark->MarksObtained;
                                $cheout = $cheout + $mark->OutOf;
                            }elseif($mark->Subject == 6){
                                $bio = $bio + $mark->MarksObtained;
                                $bioout = $bioout + $mark->OutOf;
                            } 
                         }
                         $total = ($phy + $chem + $bio)/($phyout + $cheout + $bioout) * 100;
                     _p(number_format($total,2,'.',''));
                     }
                     }
                 }                   
       ?>&nbsp;
       </div></td>
       
       <!-- Mobile  -->
       <td><div align="center">
         <?php _p($current->StudentObject->IdloginObject->Profile->Contact1); ?>
       </div></td>
       
       <!-- Address  -->
       <td><div align="center">
         <?php _p($current->StudentObject->IdloginObject->Profile->AddressLine1); ?>
       </div></td>
       
      </tr>
<?php }}} ?>
</table>
</div>
</div>

<?php  ?>
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