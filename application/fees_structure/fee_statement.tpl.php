<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<style>
    th{
       text-align:center;
    }
    </style>
	<?php $this->RenderBegin() ?>

<div class="form-controls">
    
    <div class="col-md-4"><?php $this->calfrom->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->calto->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->lstCourse->RenderWithName(); ?></div>
    
    <div class="col-md-4"><?php $this->lstSemister->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->lstYear->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->lstBatch->RenderWithName(); ?></div>    
    <div style="clear: both;"></div>
    <div class="col-md-4"><?php $this->lstCat->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->btnShow->Render(); ?></div>
    <div style="clear: both;"></div>
</div>

<?php if(isset($_GET['year'])){ ?>
        
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
    <?php 
        if($this->lstSemister->SelectedValue != NULL){
            $years = AcademicYear::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::AcademicYear()->IdacademicYear, $this->lstSemister->SelectedValue)
                    )
                );
        
        }else{
            $years = AcademicYear::LoadArrayByParrent(NULL);
        }
        foreach ($years as $year){
            $counter = 0;
            $counter =  $counter + 1;
    ?>
    
    
    
    <div align="center"><b>DR.J.J.MAGDUM AYURVED MEDICAL COLLEG JAYSINGPUR</b></div> 
        <div align="center">
                    <strong>Academic Year : </strong><?php _p($this->lstYear->SelectedName); ?>
                    <strong>Class :</strong><?php _p($year->Name);?>
        </div>
        <div align="center"> <?php _p(date("d M Y",  strtotime($_GET['from']))." - ". date("d M Y",strtotime($_GET['to']))); ?> </div>
        
        <br>
        <div align="center"><strong>FEE STATEMENT REPORT</strong></div>

<?php
?>
<div id="titleBar">
    <?php 
        if (isset($_GET['course']))
            $course = Role::LoadByIdrole($_GET['course']);
          ?>  <?php 
    ?>
</div>

<table border="1" style="font-size:12px;" class="datagrid">
    <tr>
        <th width="31" rowspan="2">Sr</th>
        <th width="59" rowspan="2">Code</th>
        <th width="200" rowspan="2">Name</th>
        <th width="200" rowspan="2">Category</th>
        <th width="200" rowspan="2">Batch</th>
<!--        <th width="200" rowspan="2">Year</th>-->
        <th colspan="3">Payable Fees</th>
        <th colspan="3">Paid Fees</th>
        <th colspan="3">Fees Balance</th>
    </tr>
    
    <tr>
        <th width="60">Govt.</th>
        <th width="60">Student</th>
        <th width="60">Total</th>
        <th width="69">Govt.</th>
        <th width="76">Student</th>
        <th width="68">Total</th>
        <th width="68">Govt.</th>
        <th width="71">Student</th>
        <th width="77">Total</th>
    </tr>
            <?php
           // if($this->lstSemister->SelectedValue == NULL){
            ?>
<!--    <tr>
        <th style="text-align: center" colspan="14"> 
            <?php
//                QApplication::DisplayAlert("Pleas Select Year...");
                //_p($year->Name); 
                
            //}
                ?>
        </th>
    </tr>-->
  <?php 
  
    $sr = 1;
  
      $gtpay = $gtpaid = $stpaid = $stpay = 0;
      ?>
<?php    
    if($this->lstCat->SelectedValue  == NULL && $this->lstSemister->SelectedValue == NULL){
            $currents = CurrentStatus::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                            QQ::Equal(QQN::CurrentStatus()->Semister, $year->IdacademicYear),    
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue)
                        )
            ); 
    }elseif($this->lstSemister->SelectedValue == NULL){
       $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                        QQ::Equal(QQN::CurrentStatus()->Semister,  $year->IdacademicYear),
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->CasteCat,$this->lstCat->SelectedValue)
               )
    );
    }elseif($this->lstSemister->SelectedValue == NULL && $this->lstBatch->SelectedValue != NULL){
       $currents = CurrentStatus::QueryArray(
                QQ::AndCondition(
                   QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->Semister,  $year->IdacademicYear),
                    QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $this->lstBatch->SelectedValue)                        
                )
    );
    }elseif($this->lstBatch->SelectedValue == NULL && $this->lstCat->SelectedValue == NULL ){   
        $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue)                                                    
                )
        );
    }elseif($this->lstBatch->SelectedValue != NULL && $this->lstCat->SelectedValue == NULL ){   
        $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $this->lstBatch->SelectedValue)                        
                    )
                );
        
    }else{
        $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $this->lstBatch->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->CasteCat,$this->lstCat->SelectedValue)
                )
    );        
        
    }
    
    
    foreach ($currents as $current){
      
     //govt payable
    $gpay = $spay = $gpaid = $spaid =0; 
     $vhps = Voucher::QueryArray(
            QQ::AndCondition(                
                QQ::Equal(QQN::Voucher()->AcademicYear , $current->Semister),                
                QQ::Equal(QQN::Voucher()->DrObject->Grp,  $current->Student),
                QQ::Equal(QQN::Voucher()->Grp, 6)
            )
        );
     
    if($vhps){
        foreach ($vhps as $vhp){
            $gpay = $gpay + $vhp->Amount;
        }             
    }
    
    //student payable
    $vhps = Voucher::QueryArray(
            QQ::AndCondition(                
                QQ::Equal(QQN::Voucher()->Dr, $current->Student),
                QQ::Equal(QQN::Voucher()->Grp,6),
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Cancel,NULL),
                    QQ::Equal(QQN::Voucher()->Cancel,0)
                ),
                QQ::Equal(QQN::Voucher()->AcademicYear,$current->Semister)    
            ));
    if($vhps){
        foreach ($vhps as $vhp){
            $spay = $spay + $vhp->Amount;
        }             
    }
    //govt paid
    
    $vhps = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::Voucher()->Grp,7),
                QQ::Equal(QQN::Voucher()->Dr,22),
                QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244),
                QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($_GET['to']))),
                QQ::Equal(QQN::Voucher()->RefStatus,$current->IdcurrentStatus),
                QQ::Equal(QQN::Voucher()->AcademicYear,$current->Semister)    
            ));
    if($vhps){
        foreach ($vhps as $vhp) {
            //if((Date('Ymd000000', strtotime($vhp->Date)) <= Date('Ymd000000', strtotime($_GET['from']))) && (Date('Ymd000000', strtotime($vhp->Date)) <= Date('Ymd235959', strtotime($_GET['to'])))  ){
              $gpaid = $gpaid + $vhp->Amount; 
            //}
        }
    }
                
    
    
    //student paid      
    $vhps = Voucher::QueryArray(
            QQ::AndCondition(                                                                              
                QQ::Equal(QQN::Voucher()->RefNoObject->CrObject->Grp,5454),     //fees group
                QQ::Equal(QQN::Voucher()->Cr, $current->Student),
                QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($_GET['to']))),
                QQ::OrCondition(
                QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                QQ::Equal(QQN::Voucher()->Cancel,0)  
                ),
                QQ::Equal(QQN::Voucher()->AcademicYear, $current->Semister)
            ));

    if($vhps){
        foreach ($vhps as $vhp){
           //if((Date('Ymd000000', strtotime($vhp->Date)) <= Date('Ymd000000', strtotime($_GET['from']))) && (Date('Ymd000000', strtotime($vhp->Date)) <= Date('Ymd235959', strtotime($_GET['to'])))  ){
                $spaid = $spaid + $vhp->Amount;
            //}
        }
    }
  ?>  
 
  <tr>
    <td height="18"><?php _p($sr++); ?></td>
    <td><?php _p($current->StudentObject->IdloginObject->Code); ?></td>
    <td><?php _p($current->StudentObject->IdloginObject->Profile->PrefixObject.' '.$current->StudentObject->IdloginObject->Profile->FirstName.' '.$current->StudentObject->IdloginObject->Profile->MiddleName.' '.$current->StudentObject->IdloginObject->Profile->LastName); ?></td>
    <td align="center"><?php _p($current->StudentObject->IdloginObject->Profile->FeeConcessionObject); ?> </td>
    <td align="center"><?php _p($current->AdmissionStatusObject); ?></td>
<!--    <td align="center"><?php //_p($current->SemisterObject->Name);?></td>-->
    <!-- payable -->
    <td>
        <div align="right">
            <?php _p(number_format($gpay, 2,'.','')); $gtpay = $gtpay + $gpay; ?>
        </div>
    </td>
    <td>
        <div align="right">
        <?php _p(number_format($spay, 2,'.','')); $stpay = $stpay + $spay;?>
        </div>
    </td>
    <td><div align="right">
      <?php _p(number_format($spay + $gpay , 2,'.','')); ?>
    </div></td>
    
    <!-- paid -->
    <td><div align="right">
      <?php _p(number_format($gpaid, 2,'.','')); $gtpaid = $gtpaid + $gpaid; ?>
    </div></td>
    <td><div align="right">
      <?php _p(number_format($spaid, 2,'.','')); $stpaid = $stpaid + $spaid;?>
    </div></td>    
    <td><div align="right">
      <?php _p(number_format($gpaid + $spaid , 2,'.','')); ?>
    </div></td>
    
    <!--balance -->
    <td><div align="right">
      <?php _p(number_format($gpay - $gpaid , 2,'.','')); ?>
    </div></td>
    <td><div align="right">
      <?php _p(number_format($spay - $spaid , 2,'.','')); ?>
    </div></td>
    <td><div align="right">
      <?php _p(number_format(($gpay - $gpaid) + ($spay - $spaid) , 2,'.','')); ?>
    </div></td>
  </tr>
  <?php } ?>
  <tr>
    <th colspan="5" align="right">Total</th>
    <th><div align="right">
      <?php _p(number_format($gtpay, 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpay, 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpay + $gtpay , 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($gtpaid, 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpaid, 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpaid + $gtpaid , 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($gtpay - $gtpaid , 2,'.','')); ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpay - $stpaid , 2,'.','')); ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format(($gtpay - $gtpaid) + ($stpay - $stpaid) , 2,'.','')); ?>
    </div></th>
  </tr>
</table>
        
<?php } ?>        
        
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

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>