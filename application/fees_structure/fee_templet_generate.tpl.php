<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls">
    <table width="910" border="0">
        <tr>
            <td width="421"><?php $this->lstCourse->RenderWithName(); ?></td>
            <td width="434"><?php $this->lstcast->RenderWithName(); ?></td>
            <td align="right"><?php $this->btnShow->Render(); ?></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td><?php $this->lstYear->RenderWithName(); ?></td>
            <td><?php $this->btnGenerate->Render(); ?></td>    
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
<div class="form-controls" style="overflow: auto;">
<div id="formPrint">
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
	    <th colspan="2" rowspan="2">Fee Approval Year</th>
        <th colspan="3">I Year Fee</th>
        <th colspan="3">II Year Fee</th>
        <th colspan="3">III Year Fee</th>
        <th colspan="3">IV Year Fee</th>
      </tr>

      <tr>
<!--        <th width="60" rowspan="2">Tution Fee </th>
        <th width="76" rowspan="2">Dev. Fee</th>
        <th width="71" rowspan="2">Total</th>-->
        <th width="60" align="left">Tution Fee </th>
        <th width="76" >Dev. Fee</th>
        <th width="71" >Total</th>
        
        <th width="60" >Tution Fee </th>
        <th width="76" >Dev. Fee</th>
        <th width="71">Total</th>
        <th width="60" >Tution Fee </th>
        <th width="76" >Dev. Fee</th>
        <th width="71" >Total</th>
        <th width="60" >Tution Fee </th>
        <th width="76" >Dev. Fee</th>
        <th width="71" >Total</th>
      </tr>
    
     
<?php 
    $cals = CalenderYear::QueryArray(            
            QQ::All(),
            QQ::Clause(
                QQ::OrderBy(QQN::CalenderYear()->Sequence)    
            )
        );
    if($cals){
        foreach ($cals as $cal){    		 
?>    
    <tr>
        <td width="50" rowspan="2"><?php  _p($cal->Name); ?></td>
        <td width="50">Student</td>
        <?php 
            $academicyears = AcademicYear::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                        )
                    );
            foreach ($academicyears as $academicyear){
                $tut = Fees::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                            QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                            QQ::Equal(QQN::Fees()->Fee,10288)
                        ),
                        QQ::Clause(
                            QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                            QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                        )                        
                    ); 
                 $dep = Fees::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                            QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                            QQ::Equal(QQN::Fees()->Fee,10289)
                        ),
                        QQ::Clause(
                            QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                            QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                        )                        
                    );
        ?>
        <td>
            <?php         
                
                $tution = $tut->GetVirtualAttribute("stud_amt") + $tut->GetVirtualAttribute("govt_amt");
                $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render();
                               
                $toatal1 =  $tution;                                   
            ?>
            <?php  //$this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render(); ?>
        </td>
        
        <td>
            <?php
                $dev = $dep->GetVirtualAttribute("stud_amt") + $dep->GetVirtualAttribute("govt_amt");
                $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render();                
                $total2 =  $dev;                
            ?>
            <?php //$this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render(); ?>
        </td>
        
        <td rowspan="2"><?php _p($toatal1 + $total2);?></td>
        <?php } ?>
        

    </tr> 
      
    
    
    <tr>
        
        <td width="50">Govt</td>
             <?php 
            $academicyears = AcademicYear::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                        )
                    );
            foreach ($academicyears as $academicyear){
                $tut = Fees::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                            QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                            QQ::Equal(QQN::Fees()->Fee,10288)
                        ),
                        QQ::Clause(
                            QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                            QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                        )                        
                    ); 
                 $dep = Fees::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                            QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                            QQ::Equal(QQN::Fees()->Fee,10289)
                        ),
                        QQ::Clause(
                            QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                            QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                        )                        
                    );
        ?>
        <td>
            <?php  $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render(); ?>
        </td>
        
        <td>
            <?php $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render(); ?>
        </td>
        <?php } ?>
       
     
    </tr> 
      
    <?php 
        /*
            $academicyears = AcademicYear::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                        )
                    );
            foreach ($academicyears as $academicyear){                
                $tut = Fees::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                            QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                            QQ::Equal(QQN::Fees()->Fee,10288)
                        ),
                        QQ::Clause(
                            QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                            QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                        )                        
                    );
                
                $dep = Fees::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                            QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                            QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                            QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                            QQ::Equal(QQN::Fees()->Fee,10289)
                        ),
                        QQ::Clause(
                            QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                            QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                        )                        
                    );
        ?>
        
            
        <!-- First Year Fee -->
        <td>
            <?php         
                
                $tution = $tut->GetVirtualAttribute("stud_amt") + $tut->GetVirtualAttribute("govt_amt");
                $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render();
               
                //_p($tution);
                $toatal1 =  $tution;                                   
            ?>
            <?php  $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render(); ?>
        </td>
        
        <td>
            <?php
                $dev = $dep->GetVirtualAttribute("stud_amt") + $dep->GetVirtualAttribute("govt_amt");
                $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render();
                
                //_p($dev);
                $total2 =  $dev;                
            ?>
            <?php $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Render(); ?>
        </td>
        
        <td><?php _p($toatal1 + $total2);?></td>
        <?php }        
        */
    ?>      
      
      
      
      



        
 <?php }}?>
    </table>
<?php }} ?>
    
    <div class="pull-right"><?php $this->btnSave->Render(); ?>    </div>
    <div class="clearfix"></div>
    
    </div>
</div>
<?php } ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>