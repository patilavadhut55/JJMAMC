<?php require('../../qcubed.inc.php');
        
//    $fees = Fees::l
//    $vov = Voucher::LoadByIdvoucher($_GET['id']);
    require(__CONFIGURATION__ . '/header.inc.php');
    $role = Role::LoadByIdrole(134);
    
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
?>
<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formprint").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close(); "><style type="text/css">@import url("<?php  _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__);  ?>/table.css");</style>');
        docprint.document.write(content_vlue);
        docprint.document.write('</body></html>');
        docprint.document.close();
    }
</script>
<style>
    body{
        background-color: #ffffff !important;
    }
</style>

<body   >
<div class="pull-left" style="margin-bottom: 5px;">
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
    </a>
</div>
<div style="clear: both;"></div>
<div id="formprint">
<?php
if(isset($_GET['id'])){
$vov = Voucher::LoadByIdvoucher($_GET['id']);    
for ($i=1; $i<=2; $i++){ 
    
?>
    <div style=" <?php if($i == 1){ ?>float: left; <?php }else{ ?>float:right; <?php } ?> line-height:20px; width:46%;padding:10px 5px 10px 5px;border: 1px solid #000;margin-right: 0px;">    
    <table style="width:100%" border="0">
        <tr>
            <td width="100">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo2.png" style="margin-left: 15px; height:80px; width: 70px;" />
            </td>
            
            <td colspan="2" align="center" valign="top">
                <div style="font-size: 12px;font-weight: bold;"><?php _p($collage->Description); ?></div>
                <div style="font-size: 14px;font-weight: bold;"><?php _p($collage->Name); ?></div>
                <div style="font-size: 12px;">
                 <?php 
                $roleadds = $collage->GetAddressAsRollArray();
                if($roleadds){
                    foreach ($roleadds as $roleadd){}
                    _p($roleadd->AddressLine1); 
                }
                ?>
                </div>
            </td>
        </tr>
        
        <tr>
            <td colspan="3"><div style=" margin-top:10px;"></div></td>
        </tr>
        
        <tr>
            <td align="center" colspan="3"> 
                <div style="border-top: 1px solid #999;border-bottom: 1px solid #999;width: 100%;">
                    EXAM FEE RECEIPT : <?php if($i == 1){ _p("[ Student Copy ]"); }else{ _p("[ Institute Copy ]"); } ?>
                </div> 
            </td>            
        </tr>
    </table>
         <table style="width:100%;" border="0"> 
             <tr style="font-size: 14px">
            <td><strong>Academic Year</strong> <?php _p($vov->RefStatusObject->CalenderYearObject); ?></td>
            <td>
                <strong>Admission Year</strong>
                <?php             
                    $firststatus = CurrentStatus::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Student, $vov->RefStatusObject->Student)
                                ),
                                QQ::OrderBy(QQN::CurrentStatus()->Semister)
                            );
                    
                    if($firststatus){
                        _p($firststatus->CalenderYearObject); 
                    }
                ?>
            </td>
        </tr>
        
        <tr>
            <td><strong>Name : </strong><?php _p($vov->CrObject->Profile->FirstName.' '.$vov->CrObject->Profile->MiddleName.' '.$vov->CrObject->Profile->LastName); ?> </td>
            <td><?php if($i != 1){ _t("<strong>Mobile No </strong>".$vov->CrObject->Profile->Contact1); }else{ ?> <strong>Class </strong> <?php _p(delete_all_between("[", "]", $vov->RefStatusObject->RoleObject->ParrentObject)); if($vov->AcademicYear) _p($vov->AcademicYearObject->Description);  } ?></td>
        </tr>
        
        <tr>
            <td>
                <?php if($i != 1){ ?>
                    <strong>Class </strong> <?php _p(delete_all_between("[", "]", $vov->RefStatusObject->RoleObject->ParrentObject)); ?>
                    <?php if($vov->AcademicYear) _p($vov->AcademicYearObject->Description); ?>
                    &nbsp;&nbsp;&nbsp;                            
                    <strong>Receipt Date: </strong><?php _p(date('d/m/Y',  strtotime($vov->Date)));  ?>&nbsp;&nbsp;&nbsp
                <?php }else{ ?>
                    <strong>Receipt Date: </strong> <?php _p(date('d/m/Y',  strtotime($vov->Date)));  ?>
                <?php } ?>
            </td>
            <td><strong>Receipt No. </strong><?php _p($vov->InvNo); ?></td>            
        </tr>
    </table>
        

    <table width="93%"  border="1" class="datagrid" style="width:100%">
        <tr>
            <th width="11%">Sr.</th>
             <th width="57%">Particulars</th>
            <th colspan="2">Amount</th>
        </tr>
                <?php 
            $fees = Fees::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Fees()->Category, $vov->CrObject->Profile->FeeConcession),
                    QQ::Equal(QQN::Fees()->CalenderYear, $vov->RefStatusObject->CalenderYear),
                    QQ::Equal(QQN::Fees()->AcademicYear, $vov->RefStatusObject->Semister),
                    QQ::Equal(QQN::Fees()->Course, $vov->RefStatusObject->RoleObject->Parrent),
                    QQ::NotEqual(QQN::Fees()->AdmitAmt, NULL),
                    QQ::Equal(QQN::Fees()->AfterDueDate, 1)
                ),
                QQ::OrderBy(QQN::Fees()->Seq, TRUE)
            );
            $sr = 1;
            $totalpaid = 0;
            foreach ($fees as $fee){
        ?>
        <tr>
            <td><?php _p($sr++);?></td>
            <td><?php _p($fee->FeeObject); ?></td>
            <td width="23%">
                <?php                               
                    $vhp = Voucher::QuerySingle(
                                QQ::AndCondition(                                                                              
                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr,$fee->Fee),     
                                    QQ::Equal(QQN::Voucher()->Cr, $vov->Cr),
                                    QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                    QQ::Equal(QQN::Voucher()->Cancel,0)  
                                    ),
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                                        QQ::Equal(QQN::Voucher()->Parrent, $_GET['id'])
                                    ),                                            
                                    QQ::Equal(QQN::Voucher()->AcademicYear, $vov->RefStatusObject->Semister)
                                ),
                                QQ::Clause(
                                    QQ::Sum(QQN::Voucher()->Amount, "amt")
                                )
                            );

                        if($vhp){
                            
                            $totalpaid = $totalpaid + $vhp->GetVirtualAttribute("amt");                        
                            _p(number_format($vhp->GetVirtualAttribute("amt"),2,'.','')); 
                        }                    
                ?>
            </td>
            <td width="9%">&nbsp;</td>            
        </tr>
        <?php } ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="right"><strong>Total</strong></div></td>
          <td><?php _p(number_format($totalpaid,2,'.','')); ?></td>
          <td>&nbsp;</td>
        </tr>
    </table>
    
    <div style="margin-left: 10px;"><strong>Received Rs. </strong><u><?php _p(convert_number($totalpaid)); ?>  Only.</u></div>
<div style="margin-top: 30px; ">
    <div class="col-md-4" style="float:left"><strong>Cashier &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong></div>
    <div class="col-md-4" style="float:left;margin-left: 0px;"><strong>Student  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></div>
    <div class="col-md-4" style="float:left;margin-left: 0px;"><strong>Principal </strong></div>
</div>
<div class="clearfix"></div>
</div>
<?php }} ?>
</div>    
<div class="clearfix"></div>
<?php require(__CONFIGURATION__ .'/footer.inc.php');?>