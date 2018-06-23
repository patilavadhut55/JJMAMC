<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls">
    <table width="910" border="0">
        <tr>
            <td width="421"><?php $this->lstCourse->RenderWithName(); ?></td>
            <td width="434"><?php $this->lstcast->RenderWithName(); ?></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><?php $this->btnShow->Render(); ?></td>
        </tr>
    </table>
</div>

<?php if(isset($_GET['course'])){ ?>
        
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
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<input type="button" class="btn btn-success" onclick="tableToExcel('formPrint', 'W3C Example Table')" value="Export to Excel">    

<div class="form-controls">
<div id="formPrint">
   <div align="center"><b>DR.J.J.MAGDUM AYURVED MEDICAL COLLEG JAYSINGPUR</b></div> 
        
<?php
    //$cast = AcademicYear::LoadByIdacademicYear($_GET['cast']);
if($this->lstcast->SelectedValue != NULL){
    $categorys = FeesConcession::QueryArray(
                  QQ::AndCondition(
                  QQ::Equal(QQN::FeesConcession()->IdfeesConcession,$_GET['cast'])));
}
elseif($this->lstcast->SelectedValue == NULL){
    $categorys = FeesConcession::LoadAll();
}
if($categorys){
    foreach ($categorys as $cat){

?>
<div id="titleBar">
    <?php 
        if (isset($_GET['course']) )
            $course = Role::LoadByIdrole($_GET['course']);?>
    <div align="center"> <strong><?php _p($this->lstCourse->SelectedName.' - '); ?> Fees Statement - <?php _p($cat->Name);?></strong></div> 
    <br>
</div>

    <table border="1" style="font-size:12px;" class="datagrid">
      <tr>
        <th width="200" rowspan="2">Fee Approval Year</th>
        <th colspan="3">Approved Fee</th>
        <th colspan="3">First Year</th>
        <th colspan="3">Second Year</th>
        <th colspan="3">Third Year</th>
        <th colspan="3">Final Year</th>
      </tr>

      <tr>
           <th width="60">Tution Fee </th>
        <th width="76">Dev. Fee</th>
        <th width="71">Total</th>
        <th width="60">Tution Fee </th>
        <th width="76">Dev. Fee</th>
        <th width="71">Total</th>
         <th width="60">Tution Fee </th>
        <th width="76">Dev. Fee</th>
        <th width="71">Total</th>
         <th width="60">Tution Fee </th>
        <th width="76">Dev. Fee</th>
        <th width="71">Total</th>
         <th width="60">Tution Fee </th>
        <th width="76">Dev. Fee</th>
        <th width="71">Total</th>
      </tr>
    <?php
        $cals = CalenderYear::LoadAll();
            if($cals){
                foreach ($cals as $cal){     
    ?>    
<tr>
    <td><?php  _p($cal->Name); ?></td>   
<?php 
    $tut = $dev = $total = $tut1 = $dev1 = $total1 = $tut12 = $dev2 = $total2 = $tut3 = $dev3 = $total13 =0;
//    $academicyears = AcademicYear::QueryArray(
//                    QQ::AndCondition(
//                        QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
//                    )
//                );
//        foreach ($academicyears as $academicyear){}
            if(isset($_GET['cast'])){
                $fees = Fees::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category,$cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),
                        //    QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear)
                        )
                    );
                }else{
                $fees = Fees::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),
                       //     QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear)
                        )
                    );
                 }
                if($fees){
                    foreach ($fees as $fee){
                        if($fee->AcademicYear == 1){
                            if($fee->Fee == 10288){
                                $tut = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            if($fee->Fee == 10289){
                                $dev = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            
                        }
                        if($fee->AcademicYear == 4){
                            if($fee->Fee == 10288){
                                $tut1 = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            if($fee->Fee == 10289){
                                $dev1 = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            
                        }
                         if($fee->AcademicYear == 7){
                            if($fee->Fee == 10288){
                                $tut2 = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            if($fee->Fee == 10289){
                                $dev2 = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            
                        }
                         if($fee->AcademicYear == 10){
                            if($fee->Fee == 10288){
                                $tut3 = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            if($fee->Fee == 10289){
                                $dev3 = $fee->AdmitAmt + $fee->GovAmt;
                            }
                            
                        }
                    }
                ?>
                    <td><?php _p($tut);?></td>
                    <td><?php _p($dev);?></td>
                    <td><?php _p($tut + $dev); ?></td>
                    <td><?php _p($tut);?></td>
                    <td><?php _p($dev);?></td>
                    <td><?php _p($tut + $dev); ?></td>
                    <td><?php _p($tut1);?></td>
                    <td><?php _p($dev1);?></td>
                    <td><?php _p($tut1 + $dev1); ?></td>
                    <td><?php _p($tut2);?></td>
                    <td><?php _p($dev2);?></td>
                    <td><?php _p($tut2 + $dev2); ?></td>
                    <td><?php _p($tut3);?></td>
                    <td><?php _p($dev3);?></td>
                    <td><?php _p($tut3 + $dev3); ?></td>
                 <?php }else{?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td></td>
                    <td></td>
                    <td></td>
                    
                    
                 <?php }?>
</tr>
        
 <?php }?>
    </table>
    <?php }}} ?>
    </div>
</div>
<?php } ?>
	<?php $this->RenderEnd() ?>
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

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>