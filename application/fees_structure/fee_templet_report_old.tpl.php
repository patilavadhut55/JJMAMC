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
<div class="form-controls">
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
        <th width="200" rowspan="2">Fee Approval Year</th>
        <th colspan="3" >Approved Fee</th>
        <th colspan="3">I Year Fee</th>
        <th colspan="3">II Year Fee</th>
        <th colspan="3">III Year Fee</th>
        <th colspan="3">IV Year Fee</th>
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
    $cals = CalenderYear::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::CalenderYear()->Approved,TRUE)
            )
        );
    if($cals){
        foreach ($cals as $cal){     
?>    
<tr>
    <td><?php  _p($cal->Name); ?></td>   
<?php 
    if(isset($_GET['cast'])){
      $fees = Fees::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::Fees()->Category,$cat->IdfeesConcession),
                    QQ::Equal(QQN::Fees()->Course, $_GET['course']),
                    QQ::Equal(QQN::Fees()->CalenderYearObject->Approved,TRUE),
                    QQ::Equal(QQN::Fees()->AcademicYear,1),
                    QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear)
                )
            );
    }else{
         $fees = Fees::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::Fees()->Category, $cat->IdfeesConcession),
                    QQ::Equal(QQN::Fees()->Course, $_GET['course']),
                    QQ::Equal(QQN::Fees()->CalenderYearObject->Approved,TRUE),
                    QQ::Equal(QQN::Fees()->AcademicYear,1),
                    QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear)
                )
            );
    }
if($fees){
    $tution =$tutper = $devper = $dev = $total1 = $total2 = $amt = $amt1 = $amt2 = 0;
    foreach ($fees as $fee) {
        if($fee->Fee == 10288){
            $tutper = ceil($fee->AdmitAmt + ($fee->AdmitAmt * ($cal->FeePercentage))/100) + ceil($fee->GovAmt + ($fee->GovAmt *($cal->FeePercentage))/100);
            
            $tution = ceil($fee->AdmitAmt + $fee->GovAmt);
        }
        
        if($fee->Fee == 10289){
            $devper = ceil($fee->AdmitAmt + ($fee->AdmitAmt * ($cal->FeePercentage))/100) + ceil($fee->GovAmt + ($fee->GovAmt *($cal->FeePercentage))/100);
            
            $dev = ceil($fee->AdmitAmt + $fee->GovAmt);
        }        
    }
?>   
        <!-- Approve Fee -->
        <td>
            <?php                 
                _p($tution); 
                $toatal1 =  $tution;                                   
            ?>
        </td>
    
        <td>
            <?php
                _p($dev);
                $total2 =  $dev;                
            ?>
        </td>
        <td><?php _p($toatal1 + $total2);?></td>
        <!-- First Year Fee -->
        <td>
            <?php                 
                _p($tution); 
                $toatal1 =  $tution;                                   
            ?>
        </td>
    
        <td>
            <?php
                _p($dev);
                $total2 =  $dev;                
            ?>
        </td>
        <td><?php _p($toatal1 + $total2);?></td>

        <!-- second Year Fee -->
        <td>
            <?php 
                //$total1 = ceil(($tution) + (($tution)* ($cal->FeePercentage))/100);
                _p($tutper);            
            ?>
        </td>
        <td>
            <?php 
               // $total2 = ceil(($dev)+ (($dev)* ($cal->FeePercentage))/100);
                _p($devper);
            ?>
        </td>
        <td><?php _p($tutper + $devper);?></td>
        
        <!-- 3rd Year Fee -->
        <td>
            <?php 
                //$total1 = ceil(($tution) + (($tution)* ($cal->FeePercentage))/100);
                _p($tutper);            
            ?>
        </td>
        <td>
            <?php 
               // $total2 = ceil(($dev)+ (($dev)* ($cal->FeePercentage))/100);
                _p($devper);
            ?>
        </td>
        <td><?php _p($tutper + $devper);?></td>
        
        <!-- 4th Year Fee -->       
        <td>
            <?php                  
               // $amt = ceil(($tution)+ (($tution)* ($cal->FeePercentage))/100);
                $amt1 = ceil($tutper +(($tutper)/2));
                _p($amt1);            
            ?>
        </td>
        <td>
            <?php                  
               // $amt = ceil(($dev)+ (($dev)* ($cal->FeePercentage))/100);
                $amt2 = ceil($devper +(($devper)/2));
                _p($amt2);         
            ?>
        </td>
        <td><?php _p($amt1 + $amt2);?></td>
    <?php     
}else{?>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
<?php }?>

</tr>
        
 <?php }}?>
    </table>
<?php }} ?>
    </div>
</div>
<?php } ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>