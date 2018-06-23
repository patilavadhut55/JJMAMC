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
        <table style="width:100%" border="0">
            <tr>
                <td width="70">
                    <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo2.png" style="margin-left: 5px; height:80px; width: 70px;" />
                </td>
                <td  align="center" valign="top">
                    <div style="font-size: 12px;font-weight: bold;"><?php _p($collage->Description); ?></div>
                    <div style="font-size: 18px;font-weight: bold;"><?php _p($collage->Name); ?></div>
                    <div align="center" style="font-size: 10px;">Gat No.295,Shriol -Wadi Road ,Agarbhag,</div>
                   <div align="center" style="font-size: 10px;"> Jaysingpur -416101 Tal. Shirol Dist. Kolhapur,</div>
                   <div align="center" style="font-size: 10px;">Phone No: Office (02322)-221860 / 61, &nbsp; Fax (02322)221960 <br>Email: jjmayu@rediffmail.com
                    <?php 
                       /* $roleadds = $collage->GetAddressAsRollArray();
                        if($roleadds){
                            foreach ($roleadds as $roleadd){}
                            _t($roleadd->AddressLine1."<br>");
                            _t("Phone No: ".$roleadd->Contact1." Email: ".$roleadd->Email1."<br>");
                        }*/
                    ?>
                    </div>
                </td>
            </tr>
        </table>
        
            
               <?php 
       $firststatus = CurrentStatus::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->Student, $vov->RefStatusObject->Student)
                        ), QQ::OrderBy(QQN::CurrentStatus()->Semister)
        );
        if ($firststatus) {}
         
        $total1 = $total2 = $total3 = 0;
        $fees = Voucher::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Voucher()->Grp, 6),
                            QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']),
                            QQ::Equal(QQN::Voucher()->AcademicYear,$vov->AcademicYear)
                        )
        );
        if ($fees) {
            foreach ($fees as $fee) {
                $sr = $sr + 1;
                $totalpaid = $bal = $totalpayable = 0;
                
                //Payable Amount
                $totalpayable = round($fee->Amount);

                //Paid Amount
                $vhps = Voucher::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Cr), 
                                        QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']), 
                                        QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cancel, NULL),
                                            QQ::Equal(QQN::Voucher()->Cancel, 0)
                                        ),
                                         QQ::Equal(QQN::Voucher()->AcademicYear, $vov->AcademicYear)
                                )
                );

                if ($vhps) {
                    foreach ($vhps as $vhp) {
                        $totalpaid = round($totalpaid + $vhp->Amount);
                    }
                }
                //Balance
                $bal = round($totalpayable - $totalpaid);

                $total1 = $total1 + $totalpayable;
                $total2 = $total2 + $totalpaid;
                $total3 = $total3 + $bal;
            }
        }
        ?>
             <!-- Total Payable-->
        <div style="float: right;">Total :<?php _p(number_format($total1,2,'.',''));?> </div>
        <div style="clear: both"></div>
        <!-- Total Paid-->
        <div style="float: right;"> Paid :
            <?php _p(number_format($total2,2,'.',''));?>
        </div>
        <div style="clear: both"></div>
        <!-- Total Dues -->
        <div style="float: right;"> Dues : <?php _p(number_format($total3,2,'.','')); ?></div>
         
         <table style="width: 100%;" border="0"> 
            
            <tr>
                <td colspan="3"><div style=" margin-top:10px;"></div></td>
            </tr>
            <tr>
                <td align="center" colspan="3"> 
                    <div style="border-top: 1px solid #999;border-bottom: 1px solid #999;width: 100%;">
                        ADMISSION RECEIPT : <?php if($i == 1){ _p("[ Student Copy ]"); }else{ _p("[ Institute Copy ]"); } ?>
                    </div> 
                </td>            
            </tr>
        

       
                <tr>
                    <td><strong>Receipt No. </strong><?php _p($vov->InvNo); ?></td>            
                    <td><strong>Receipt Date: </strong> <?php _p(date('d/m/Y', strtotime($vov->Date))); ?></td>
                </tr>

            <tr>
                <td><strong>Name : </strong><?php _p($vov->CrObject->Profile->FirstName.' '.$vov->CrObject->Profile->MiddleName.' '.$vov->CrObject->Profile->LastName); ?> </td>
                <td><strong>ID : </strong><?php _p($vov->CrObject->Code); ?> </td>

            </tr>
            <tr>
                <td>
                    <strong>I'st Year Admission : A.Y.</strong>
                    <?php
                    $profile = Profile::LoadByIdprofile($_GET['mem']);
                        $firststatus = CurrentStatus::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Student, $vov->RefStatusObject->Student)
                                    ),
                                    QQ::OrderBy(QQN::CurrentStatus()->Semister)
                                );
                        if($firststatus){

                        }
                        if($profile){
                            _p($profile->CalenderYearObject);                    }
                    ?>
                </td>
                <td><strong> Paying Category : </strong><?php _p($vov->CrObject->Profile->FeeConcessionObject);?></td>
            </tr>
            <tr>
                <td><strong>Academic Year :</strong> <?php _p($vov->RefStatusObject->CalenderYearObject); ?></td>
                <td><strong>Class : </strong><?php if ($vov->AcademicYear) _p($vov->AcademicYearObject->Description); ?> <?php //_p(delete_all_between("[", "]", $vov->RefStatusObject->RoleObject->ParrentObject)); ?>
                </td>
            </tr>
            <tr>
                <td><?php if($i != 1){ _t("<strong>Mobile No </strong>".$vov->CrObject->Profile->Contact1); } ?></td>
            </tr>
        </table>
        <table width="93%"  border="1" class="datagrid" style="width:100%">
            <tr>
               <th width="11%">Sr.</th>
                <th width="57%" >Fee Head</th>
                <th style="text-align: right;">Amount</th>
            </tr>
            <?php 
            $fees = Voucher::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Voucher()->Grp, 7),
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Parrent,$_GET['id']),
                                QQ::Equal(QQN::Voucher()->Idvoucher,$_GET['id'])
                            )
                        ),
                        QQ::OrderBy(QQN::Voucher()->RefNoObject->Cr)
                    );    

                $sr = 1;
                $totalpaid = 0;
                foreach ($fees as $fee){
                     if($fee->Amount >0){
            ?>
            <tr>
            <td><?php _p($sr++); ?></td>
                <td><?php _p($fee->RefNoObject->CrObject);?></td>
                <td width="23%" align="right">
                    <?php
                            $totalpaid = $totalpaid + $fee->Amount;
                            _p(number_format($fee->Amount,2,'.',''));
                        }
                    ?>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td></td>
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
        <div float="right">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 1px solid lightgray; margin-right: 10px; float: right;width:65px; height: 65px;"></div>
        </div>
        <div style="clear: both;"></div>
        <div style="margin-top: 20px; margin-left: 10px;margin-bottom: 10px;">
            <div class="col-md-4" style="float: left;"><strong>Student</strong></div>
            <div class="col-md-4" style=""></div>
            <div class="col-md-4" style="float: right; margin-right: 10px;"><div><strong>Cashier </strong></div></div>
        </div>
        <div class="clearfix"></div>
    </div>
<?php }} ?>
</div>
<?php require(__CONFIGURATION__ .'/footer.inc.php');?>


