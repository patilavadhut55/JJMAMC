<?php 
    require('../../qcubed.inc.php');
    require(__CONFIGURATION__ . '/header.inc.php');
//    $fees = Fees::l
//    $vov = Voucher::LoadByIdvoucher($_GET['id']);
    
    $role = Role::LoadByIdrole(134);
    
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
?>
<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=50, top=10, right=50 ";
        var content_vlue = document.getElementById("formprint").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close(); "><style type="text/css">@import url("<?php  _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__);  ?>/table.css");</style>');
        docprint.document.write(content_vlue);
        docprint.document.write('</body></html>');
        docprint.document.close();
    }
</script>
<body>
<style>
    body{
        background-color: #ffffff !important;
    }    
</style>
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
<div style=" <?php if($i == 1){ ?>float: left; <?php }else{ ?>float:right; <?php } ?> line-height:20px; width:45%;padding:10px 5px 10px 5px;border: 1px solid #000;margin-right: 2px;">    
    <table style="width:90%" border="0">
        <tr>
            <td width="100">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo2.png" style="margin-left:10px; height:80px; width: 70px;" />
            </td>
            <td colspan="2" align="center" valign="top">
                <div style="font-size: 12px;font-weight: bold;"><?php _p($collage->Description); ?></div>
                <div style="font-size: 13px;font-weight: bold;"><?php _p($collage->Name); ?></div>
                <div style="font-size: 10px;">
                <?php 
                    $roleadds = $collage->GetAddressAsRollArray();
                    if($roleadds){
                        foreach ($roleadds as $roleadd){}
                        _t($roleadd->AddressLine1."<br>");
                        _t("Phone No: ".$roleadd->Contact1." Email: ".$roleadd->Email1."<br>");
                    }
                ?>
                </div>
            </td>
        </tr>
       <tr>
            <td colspan="3"><div style=" margin-top:10px;"></div></td>
        </tr>
    </table>
    
    <table style="width: 100%;" border="0"> 
             <div align="center" style="border-top: 1px solid #999;border-bottom: 1px solid #999;width: 100%;">
                
           
                    Fee RECEIPT : <?php if($i == 1){ _p("[ Student Copy ]"); }else{ _p("[ Institute Copy ]"); } ?>
                    
           
            </div>
        <tr>
            <td><strong>Academic Year</strong> <?php _p($vov->RefStatusObject->CalenderYearObject); ?></td>
            <td>
                <strong>Admission Year</strong>
                <?php             
                if(isset($_GET['mem'])){
                    $profiles = Profile::LoadByIdprofile($_GET['mem']);
                    if($profiles){
                        _p($profiles->CalenderYearObject);
                    }
                }
                
                ?>
            </td>
        </tr>
        
        <tr>
            <td><strong>Name : </strong><?php _p($vov->CrObject->Profile->FirstName.' '.$vov->CrObject->Profile->MiddleName.' '.$vov->CrObject->Profile->LastName); ?> </td>
            <td><?php if($i != 1){ _t("<strong>Mobile No </strong>".$vov->CrObject->Profile->Contact1); }else{ ?> 
                <strong>Class </strong><?php if($vov->AcademicYear) _p($vov->AcademicYearObject->Description);?> <?php _p(delete_all_between("[", "]", $vov->RefStatusObject->RoleObject->ParrentObject)); 
              } ?></td>
        </tr>
        
        <tr>
            <td><?php if ($i != 1) { ?>
                    <strong>Class </strong><?php if ($vov->AcademicYear) _p($vov->AcademicYearObject->Description); ?>
                     <?php _p(delete_all_between("[", "]", $vov->RefStatusObject->RoleObject->ParrentObject)); ?>
                    &nbsp;&nbsp;&nbsp;
            </td>
            <td>
                <strong>Receipt Date: </strong><?php _p(date('d/m/Y', strtotime($vov->Date))); ?>&nbsp;  &nbsp;&nbsp;&nbsp;
                <?php }else { ?>
                <strong>Receipt Date: </strong> <?php _p(date('d/m/Y', strtotime($vov->Date))); ?>
                 <?php } ?>
            </td>
        </tr>
        <tr>
            <td><strong>Receipt No. </strong><?php _p($vov->InvNo); ?></td>            
        </tr>
    </table>
    
    <table width="0%"  border="1" class="datagrid" style="">
        <tr>
<!--            <th width="11%">Sr.</th>-->
            <th width="57%" >Fee Head</th>
            <th style="text-align: right;">Amount</th>
        </tr>
        <?php 
            $fees = Fees::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Fees()->Category, $vov->CrObject->Profile->FeeConcession),
                    QQ::Equal(QQN::Fees()->CalenderYear, $vov->RefStatusObject->CalenderYear),
                    QQ::Equal(QQN::Fees()->AcademicYear, $vov->RefStatusObject->Semister),
                    QQ::Equal(QQN::Fees()->Course, $vov->RefStatusObject->RoleObject->Parrent),
                    QQ::NotEqual(QQN::Fees()->AdmitAmt, NULL),
                    QQ::Equal(QQN::Fees()->AfterDueDate, 0)
                ),
                QQ::OrderBy(QQN::Fees()->Seq, TRUE)
            );
            $sr = 1;
            $totalpaid = 0;
            foreach ($fees as $fee){
        ?>
        <tr>
<!--            <td><?php //_p($sr++);?></td>-->
            <td><?php _p($fee->FeeObject); ?></td>
            <td width="23%" align="right">
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
        </tr>
        <?php } ?>
        
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
            <td><div align="right"><strong>Total</strong></div></td>
            <td align="right"><?php _p(number_format($totalpaid,2,'.','')); ?></td>
        </tr>
    </table>
    

<div style="border-top: 1px solid #999; border-bottom: 1px solid #999;margin-top: 10px;"><strong>Rs.(in words) </strong><?php _p(convert_number($totalpaid)); ?>  Only.</div>
<div style="margin-top: 20px;margin-bottom: 20px;">
    <strong>Payment Moade : </strong> <?php if($vov) { _p($vov->PaymentModeObject); } ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php if($vov) { _p($vov->Narration); } ?>
</div>
<div style="margin-top: 20px; margin-left: 10px;">
    <div class="col-md-4" style="float: left;"><strong>Student</strong></div>
    <div class="col-md-4" style=""></div>
    <div class="col-md-4" style="float: right;"><strong>Authority </strong></div>
</div>
<div class="clearfix"></div>
</div>
<?php }} ?>
</div>
<?php require(__CONFIGURATION__ .'/footer.inc.php');?>