                                                                                                                                                                                                                                                                                                                                                     <?php
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

    <table border="1" style="font-size:12px; " class="datagrid" >
  <tr>
    <th width="31" rowspan="2">Sr</th>
    <th width="200" rowspan="2">Class</th>
    <th width="200" rowspan="2">Batch</th>
    <th colspan="3">Applicable Fees</th>
    <th colspan="3">Received Fees</th>
    <th colspan="3"> Balance Fees</th>
    </tr>
    
        <tr>
            <th width="60">Tution.</th>
            <th width="60">Devlopment</th>
            <th width="60">Total</th>
            <th width="69">Tution.</th>
            <th width="76">Devlopment</th>
            <th width="68">Total</th>
            <th width="68">Tution.</th>
            <th width="71">Devlopment</th>
            <th width="77">Total</th>
        </tr>
<!--        <tr>
             <th width="60">Tution.</th>
            <th width="60">Devlopment</th>
            <th width="60">Total</th>
            <th width="69">Tution.</th>
            <th width="76">Devlopment</th>
            <th width="68">Total</th>
            <th width="68">Tution.</th>
            <th width="71">Devlopment</th>
            <th width="77">Total</th>
        </tr>-->
  <?php 
  
    $sr = 1;
    $gtpay = $gtpaid = $stpaid = $stpay = 0;
    $gtutpaytot = $gdevpaytot = $gdevpaidtot = $gtutpaidtot = 0;
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
                        $tpay = $dpay = $tpaid = $dpaid =0; 
                        $gtutpay = $gdevpay = $gtutpaid = $gdevpaid =0; 
                        
//-------------------------------Govt Tution Payable---------------------------------------//
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition(                
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, 244),
                                    QQ::Equal(QQN::Voucher()->Cr, 10288),                                            
                                    QQ::Equal(QQN::Voucher()->Grp, 6)
                                )
                            );

                        if($vhps){
                            foreach ($vhps as $vhp){
                                $gtutpay = $gtutpay + $vhp->Amount;
                            }       
                        }
//-------------------------------Govt Development Payable---------------------------------------//
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition(                
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Grp, 244),
                                    QQ::Equal(QQN::Voucher()->Cr, 10289),                                            
                                    QQ::Equal(QQN::Voucher()->Grp, 6)
                                )
                            );

                        if($vhps){
                            foreach ($vhps as $vhp){
                                $gdevpay = $gdevpay + $vhp->Amount;
                            }       
                        }
                         
                        //Tution Fee Payable
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition( 
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->DrObject->Grp,244),
                                    QQ::Equal(QQN::Voucher()->Grp,6),
                                    QQ::Equal(QQN::Voucher()->Cr,10288),
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                        QQ::Equal(QQN::Voucher()->Cancel,0)
                                    )
                                )
                            );
                        if($vhps){
                            foreach ($vhps as $vhp){
                                $tpay = $tpay + $vhp->Amount;
                            }             
                        }
                                              
                        
                        //Devlopment Fee Payable
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition( 
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->DrObject->Grp,244),
                                    QQ::Equal(QQN::Voucher()->Grp,6),
                                    QQ::Equal(QQN::Voucher()->Cr,10289),
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                        QQ::Equal(QQN::Voucher()->Cancel,0)
                                    )
                                )
                            );
                        if($vhps){
                            foreach ($vhps as $vhp){
                                $dpay = $dpay + $vhp->Amount;
                            }             
                        }
                        
//---------------------Govt Tution Paid---------------------------------------//
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition(                      
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10288),//TUTION id
                                    QQ::Equal(QQN::Voucher()->Dr,22),
                                    QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244)
                                )
                            );
                        if($vhps){
                            foreach ($vhps as $vhp) {
                                //if((Date('Ymd000000', strtotime($vhp->Date)) >= Date('Ymd000000', strtotime($_GET['from']))) ){
                                    $gtutpaid = $gtutpaid + $vhp->Amount; 
                                //}
                            }
                        }
                                               
//---------------------Govt Development Paid---------------------------------------//
                        $vhps = Voucher::QueryArray(
                                QQ::AndCondition(                      
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::Voucher()->AcademicYear,$semi->IdacademicYear ),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['year']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->AdmissionStatus,$batch->IdadmissionStatus),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10289),//DEVELOPMENT id
                                    QQ::Equal(QQN::Voucher()->Dr,22),
                                    QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244)
                                )
                            );
                        if($vhps){
                            foreach ($vhps as $vhp) {
                                //if((Date('Ymd000000', strtotime($vhp->Date)) >= Date('Ymd000000', strtotime($_GET['from']))) ){
                                    $gdevpaid = $gdevpaid + $vhp->Amount; 
                                //}
                            }
                        }
                        
                        //Tution Fee Paid
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
                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10288),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                    QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                    QQ::Equal(QQN::Voucher()->Cancel,0)  
                                    )
                                )    
                            );

                        if($vhps){
                            foreach ($vhps as $vhp){
                                $tpaid = $tpaid + $vhp->Amount;
                            }        
                        }
                         //Devlopment Fee Paid
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
                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10289),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                    QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                    QQ::Equal(QQN::Voucher()->Cancel,0)  
                                    )
                                )    
                            );

                        if($vhps){
                            foreach ($vhps as $vhp){
                                $dpaid = $dpaid + $vhp->Amount;
                            }        
                        }
                       
                        ?>

                        <tr>
                            <td><?php _p($sr++);?></td>
                            <td><?php if($flag == 1) _p($semi->Name); $flag = 0;?></td>
                            <td><?php _p($batch->Name);?></td>
                            <!-- Payable Fee (APPLICABLE)-->
                            <td><?php _p(number_format($tpay + $gtutpay, 2,'.',''));$gtpay = $gtpay + ($gtutpay + $tpay); ?></td>
                            <td><?php _p(number_format($dpay + $gdevpay, 2,'.',''));$stpay = $stpay + ($gdevpay + $dpay); ?></td>
                            <td><?php _p(number_format(($tpay + $dpay) + ($gtutpay + $gdevpay), 2,'.','')); ?></td>
                            <!-- Paid Fee (RECEIVED)-->
                            <td><?php _p(number_format($tpaid + $gtutpaid, 2,'.','')); $gtpaid = $gtpaid + ($gtutpaid + $tpaid);?></td>
                            <td><?php _p(number_format($dpaid + $gdevpaid, 2,'.',''));$stpaid = $stpaid + ($gdevpaid + $dpaid); ?></td>
                            <td><?php _p(number_format(($tpaid + $dpaid) + ($gtutpaid + $gdevpaid), 2,'.','')); ?></td>
                            <!--Balance-->
                            <td><?php _p(number_format(($tpay + $gtutpay) - ($tpaid + $gtutpaid), 2,'.','')); ?></td>
                            <td><?php _p(number_format(($dpay + $gdevpay) - ($dpaid + $gdevpaid), 2,'.','')); ?></td>
                            <td><?php _p(number_format(($tpay + $dpay + $gtutpay + $gdevpay) - ($tpaid + $dpaid + $gdevpaid), 2,'.','')); ?></td>
                        </tr>
<!--                         <tr>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td align="right"><?php ?>Govt.</td>
                             Govt Payable Fee
                            <td><?php _p(number_format($gtutpay, 2,'.',''));  $gtutpaytot = $gtutpaytot + $gtutpay; ?></td>
                            <td><?php _p(number_format($gdevpay, 2,'.',''));  $gdevpaytot = $gdevpaytot + $gdevpay; ?></td>
                            <td><?php _p(number_format($gtutpay + $gdevpay, 2,'.','')); ?></td>
                            
                              Govt Paid Fee
                            <td><?php _p(number_format($gtutpaid, 2,'.',''));  $gtutpaidtot = $gtutpaidtot + $gtutpaid; ?></td>
                            <td><?php _p(number_format($gdevpaid, 2,'.',''));  $gdevpaidtot= $gdevpaidtot + $gdevpaid; ?></td>
                            <td><?php _p(number_format($gtutpaid + $gdevpaid, 2,'.','')); ?></td>
                            
                            Govt Balance
                            <td><?php _p(number_format($gtutpay - $gtutpaid, 2,'.','')); ?></td>
                            <td><?php _p(number_format($gdevpay - $gdevpaid, 2,'.','')); ?></td>
                            <td><?php _p(number_format(($gtutpay + $gdevpay) - ($gtutpaid + $gdevpaid), 2,'.','')); ?></td>
                        </tr>-->
    
             <?php 
                        }
                    }
                }
            }
            ?>
                        <tr>
                            <td colspan="3" align="right" > <strong>Total</strong></td>
                            <td><strong> <?php _p(number_format($gtpay, 2,'.',''));  ?></strong></td>
                            <td><strong> <?php _p(number_format($stpay, 2,'.',''));  ?></strong></td>
                            <td><strong> <?php _p(number_format($stpay + $gtpay , 2,'.',''));  ?></strong></td>
                                                                                    
                            <td><strong> <?php _p(number_format($gtpaid, 2,'.',''));  ?></strong></td>
                            <td><strong> <?php _p(number_format($stpaid, 2,'.',''));  ?></strong></td>
                            <td><strong> <?php _p(number_format($stpaid + $gtpaid , 2,'.','')); ?></strong></td>
                            
                            <td><strong> <?php _p(number_format($gtpay - $gtpaid , 2,'.','')); ?></strong></td>
                            <td><strong> <?php _p(number_format($stpay - $stpaid , 2,'.','')); ?></strong></td>
                            <td><strong> <?php _p(number_format(($gtpay - $gtpaid) + ($stpay - $stpaid) , 2,'.','')); ?></strong></</td>
                        </tr>
                      
                            <!----- GOVT---TOTAL -->
<!--                        <tr>
                            <td colspan="3" align="right"> <strong>Govt Total</strong></td>
                            <td> <?php _p(number_format($gtutpaytot, 2,'.',''));  ?></td>
                            <td> <?php _p(number_format($gdevpaytot, 2,'.',''));  ?></td>
                            <td><strong> <?php _p(number_format($gtutpaytot + $gdevpaytot , 2,'.',''));  ?></strong></td>

                            <td> <?php _p(number_format($gtutpaidtot, 2,'.',''));  ?></td>
                            <td> <?php _p(number_format($gdevpaidtot, 2,'.',''));  ?></td>
                            <td><strong> <?php _p(number_format($gtutpaidtot + $gdevpaidtot , 2,'.',''));  ?></strong></td>

                            <td> <?php _p(number_format($gtutpaytot - $gtutpaidtot, 2,'.',''));  ?></td>
                            <td> <?php _p(number_format($gdevpaytot - $gdevpaidtot, 2,'.',''));  ?></td>
                            <td><strong> <?php _p(number_format(($gtutpaytot - $gtutpaidtot) + ($gdevpaytot - $gdevpaidtot), 2,'.',''));  ?></strong></td>
                        </tr>-->
                         
<!--                         <tr>
                            -GRAND---PAYABLE----TOTAL
                            <td colspan="3" align="right"> <strong>Grand Total</strong></td>
                            <td> <?php _p(number_format($gtpay + $gtutpaytot, 2,'.',''));  ?></td>
                            <td> <?php _p(number_format($stpay + $gdevpaytot, 2,'.',''));  ?></td>
                            <td><strong> <?php _p(number_format(($gtutpaytot + $gdevpaytot) + ($stpay + $gtpay) , 2,'.',''));  ?></strong></td>
                            
                            GRAND---PAiD----TOTAL
                            <td> <?php _p(number_format($gtpaid + $gtutpaidtot, 2,'.',''));  ?></td>
                            <td> <?php _p(number_format($stpaid + $gdevpaidtot, 2,'.',''));  ?></td>
                            <td><strong> <?php _p(number_format(($gtutpaidtot + $gdevpaidtot) + ($stpaid + $gtpaid) , 2,'.',''));  ?></strong></td>
                            
                            GRAND---BALANCE----TOTAL
                            <td>
                               
                                    <?php 
                                        $grandtotpay = 0;
                                        $grandtotpay = (($gtutpaytot + $gdevpaytot) + ($stpay + $gtpay)); 
                                        _p(number_format($grandtotpay, 2,'.',''));  
                                    ?>
                                
                            </td>
                            <td>
                               
                                    <?php 
                                        $grandtotpaid = 0;
                                        $grandtotpaid = (($gtutpaidtot + $gdevpaidtot) + ($stpaid + $gtpaid));
                                        _p(number_format($grandtotpaid, 2,'.',''));  
                                    ?>
                                
                            </td>
                            <td>
                                <strong>
                                    <?php 
                                        $grandtotbal = 0;
                                        $grandtotbal = $grandtotpay - $grandtotpaid;
                                        _p(number_format($grandtotbal, 2,'.',''));  
                                    ?>
                                </strong>
                            </td>
                        </tr>-->

    <?php } ?>  
  <?php } ?>
   </table>
       <div style="clear: both;"></div>
        <div style="margin-top: 60px;">
            <div style="float: left"><strong>Accountant</strong></div>
            <div style="float: right"><strong>Cashier</strong></div>
        </div>
        <div style="clear: both;"></div>
</div>
</div>
<?php  ?>
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

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            