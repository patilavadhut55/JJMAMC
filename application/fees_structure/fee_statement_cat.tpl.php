<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

<div class="form-controls">
<table width="910" border="0">
     <tr>
        <td width="421"><?php $this->calfrom->RenderWithName(); ?></td>
        <td width="434"><?php $this->calto->RenderWithName(); ?></td>
   
    </tr>
  <tr>
    <td width="421"><?php $this->lstCourse->RenderWithName(); ?></td>
    <td><?php $this->lstYear->RenderWithName(); ?></td>
   
  </tr>
  <!--tr>
    <td><?php //$this->lstCat->RenderWithName(); ?></td>
  </tr-->
  <tr>
      <td></td>
        <td align="right"><?php $this->btnShow->Render(); ?></td>
  </tr>
</table>
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
        <div align="center"><b>DR.J.J.MAGDUM AYURVED MEDICAL COLLEG JAYSINGPUR</b></div> 
        <div align="center">
                    <strong>Academic Year : </strong><?php _p($this->lstYear->SelectedName); ?>
                    <!--<strong>Class :</strong>-->
                        <?php _p($this->lstSemister->SelectedName);?>
        </div>
        <br>
        <div align="center"><strong>FEE STATEMENT REPORT</strong></div>

<?php
    $year = AcademicYear::LoadByIdacademicYear($_GET['year']);
?>
    <div id="titleBar">
    <?php 
        if (isset($_GET['course']))
            $course = Role::LoadByIdrole($_GET['course']);
            //_p($this->lstCourse->SelectedName.' - '); ?>  <?php //_p($this->lstSemister->SelectedName); 
    ?>
</div>

<table border="1" style="font-size:12px;" class="datagrid">
    <tr>
        <th width="31" rowspan="2">Sr</th>
        <th width="200" rowspan="2">Class</th>
        <th width="200" rowspan="2">Batch</th>
        <th colspan="3">Applicable </th>
        <th colspan="3">Received </th>
        <th colspan="3"> Balance</th>
    </tr>
    
    <tr>
        <th width="60">Total</th>
        <th width="60">receivable From Government Student</th>
        <th width="60">receivable From Student</th>
        <th width="68">Total</th>
        <th width="69">receivable From Government Student</th>
        <th width="76">receivable From Student</th>
        <th width="77">Total</th>
        <th width="68">receivable From Government Student</th>
        <th width="71">receivable From Student</th>
    </tr>
  <?php 
  
    $sr = 1;
  
    $gtpay = $gtpaid = $stpaid = $stpay = 0;
      ?>
    <?php

    if(isset($_GET['from']) && isset($_GET['to']) && isset($_GET['course']) && isset($_GET['year'])){
        
        $semis = AcademicYear::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::AcademicYear()->Parrent,NULL)
                    )
                );
        if($semis){
            foreach ($semis as $semi){
                $flag = 1;
                $batchs = AdmissionStatus::LoadAll();
                if($batchs){
                    foreach ($batchs as $batch){
                        $gpay = $spay = $gpaid = $spaid =0; 
                        
                        // Govt Payable
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition(                
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, 244),
                                    QQ::Equal(QQN::Voucher()->Grp, 6)
                                )
                            );

                        if($vhps){
                            foreach ($vhps as $vhp){
                                $gpay = $gpay + $vhp->Amount;
                            }       
                        }
                            
                        //Student Payable
                        $vhps = Voucher::QueryArray(
                            QQ::AndCondition(          
                                QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                QQ::Equal(QQN::Voucher()->DrObject->Grp,244),
                                QQ::Equal(QQN::Voucher()->Grp,6),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                    QQ::Equal(QQN::Voucher()->Cancel,0)
                                )
                            )
                        );
                        if($vhps){
                            foreach ($vhps as $vhp){
                                $spay = $spay + $vhp->Amount;
                            }             
                        }
                        
                        //Govt Paid
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                    QQ::Equal(QQN::Voucher()->Dr,22),
                                    QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244)
                                )
                            );
                        if($vhps){
                            foreach ($vhps as $vhp) {
                                //if((Date('Ymd000000', strtotime($vhp->Date)) >= Date('Ymd000000', strtotime($_GET['from']))) ){
                                    $gpaid = $gpaid + $vhp->Amount; 
                                //}
                            }
                        }
                        //Student Paid
                        $vhps = Voucher::QueryArray(
                            QQ::AndCondition(    
                                QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($_GET['from']))),
                                QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($_GET['to']))),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                QQ::Equal(QQN::Voucher()->RefNoObject->CrObject->Grp,5454),     //fees group
                                QQ::Equal(QQN::Voucher()->CrObject->Grp,244),
                                QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                QQ::Equal(QQN::Voucher()->Cancel,0)  
                                )
                            )
                        );

                        if($vhps){
                            foreach ($vhps as $vhp){
                                //if((Date('Ymd000000', strtotime($vhp->Date)) >= Date('Ymd000000', strtotime($_GET['from']))) ){
                                    $spaid = $spaid + $vhp->Amount;
                                //}        
                            }
                        }
                        
                    ?>
    
  <tr>
    <td height="18"><?php _p($sr++); ?></td>
    <td><?php if($flag == 1) _p($semi->Name);$flag = 0; ?></td>
    <td><?php _p($batch->Name);?></td>
    
    <!-- Payable-->
    <td><?php _p(number_format($gpay + $spay, 2,'.','')); ?></td>
    <td><?php _p(number_format($gpay, 2,'.','')); $gtpay = $gtpay + $gpay; ?></td>
    <td><?php _p(number_format($spay, 2,'.','')); $stpay = $stpay + $spay;?></td>
    
    <!-- Paid -->
    <td><?php _p(number_format($gpaid + $spaid, 2,'.','')); ?></td>
    <td><?php _p(number_format($gpaid, 2,'.','')); $gtpaid = $gtpaid + $gpaid;?></td>
    <td><?php _p(number_format($spaid, 2,'.','')); $stpaid = $stpaid + $spaid;?></td>
    
    <!-- Balance -->
    <td><?php _p(number_format(($gpay - $gpaid) + ($spay - $spaid) , 2,'.',''));?></td>
    <td><?php _p(number_format($gpay - $gpaid , 2,'.','')); ?></td>
    <td><?php _p(number_format($spay - $spaid , 2,'.',''))?></td>
  
  </tr>
    
    <?php       
                    }
                }
            }
            
        }
    ?>
 
  <?php } ?>
  <tr>
    <th colspan="3  " align="right">Total</th>
    
    <!-- Payable total-->
    <th><div align="right">
      <?php _p(number_format($stpay + $gtpay , 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($gtpay, 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpay, 2,'.',''));  ?>
    </div></th>
    <!-- Paid Total-->
    <th><div align="right">
      <?php _p(number_format($stpaid + $gtpaid , 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($gtpaid, 2,'.',''));  ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpaid, 2,'.',''));  ?>
    </div></th>
    
    <!-- Balance Total-->
    <th><div align="right">
      <?php _p(number_format(($gtpay - $gtpaid) + ($stpay - $stpaid) , 2,'.','')); ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($gtpay - $gtpaid , 2,'.','')); ?>
    </div></th>
    <th><div align="right">
      <?php _p(number_format($stpay - $stpaid , 2,'.','')); ?>
    </div></th>
    
  </tr>
   </table>
           <div style="clear: both;"></div>
        <div style="margin-top: 60px;">
            <div style="float: left"><strong>Accountant</strong></div>
            <div style="float: right"><strong>Cashier</strong></div>
        </div>
        <div style="clear: both;"></div>
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