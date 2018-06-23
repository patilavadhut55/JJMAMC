<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
<h1><?php _t('Challan Print '); ?></h1>
<?php 
    //require('../../qcubed.inc.php');
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
    $vov = Voucher::LoadByIdvoucher($_GET['id']);
    $student = Ledger::LoadByIdledger($_GET['mem']);
    $profile = Profile::LoadByIdprofile($_GET['mem']);
    $currentstatus = CurrentStatus::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->Student, $student->Idledger),
                    QQ::NotEqual(QQN::CurrentStatus()->AdmissionStatus, 2)                        
                ),
                QQ::Clause(
                    QQ::OrderBy(QQN::CurrentStatus()->Semister)
                )
            );
    if($currentstatus)foreach($currentstatus as $current){}
    
?>
<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formprint").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close(); "><style type="text/css">@import url("<?php  _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__);  ?>/table.css");</style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>

<div>
    <div class="pull-right" style="margin-bottom: 5px;">
        <a href="javascript:Clickheretoprint()">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
    <span class="pull-left" style="margin: 7px;">
        DD Details :
    </span>
    <span class="pull-left"><?php $this->txtBank->Render(); ?></span>
    <span class="pull-left"><?php $this->txtBranch->Render(); ?></span>
    <span class="pull-left"><?php $this->txtDD->Render(); ?></span>
    <span class="pull-left"><?php $this->btnUpdate->Render(); ?></span>
    <span class="pull-left" style="width: 150px;" ><?php $this->chkDuplicate->RenderWithName(); ?></span>
    <?php if($vov){ ?>
    <a href="../admission/admission_confirm.php?id=<?php _p($vov->Cr);?>" target="_blank">
        <span class="pull-right" style="margin-right: 20px; background: #fbb450; color: #FFF; border-radius: 5px; padding: 7px 10px;"> Profile Print </span>
    </a>
    <?php }?>
    <div style="clear: both;"></div>
</div>
<div class="form-controls" id="formprint">
    <?php $cnt = 3;
        for($i=1; $i<=$cnt; $i++){
    ?>
        <div style="float: left; width: 31%; margin-left: 5px; border: 1px solid lightgrey; padding: 5px;" >
            <div style="text-align: center; margin-bottom: 5px;">
                <div style="font-size: 14px; font-weight: bolder;"><?php _p($collage->Name); ?></br>
                <?php 
                $roleadds = $collage->GetAddressAsRollArray();
                if($roleadds){
                    foreach ($roleadds as $roleadd){}
                    _p($roleadd->AddressLine1); 
                }
                ?></div>
            <?php 
            
                if($i == 1){ _p('Student Copy'); $this->lblDuplicate->Render(); }
                if($i == 2){ _p('College Copy'); $this->lblDuplicate1->Render();}
                if($i == 3){ _p('Bank Copy'); $this->lblDuplicate2->Render();}
                
            ?>
              
            </div>
            <table style="width: 100%;" >
                <tr><td colspan="4" style="font-size: 13px;">Paid into credit of S.B.A/C No:150710200000340</td></tr>   
                <tr><td width="18%">Challan:</td><td width="30%"><?php //_p(date('Y',  strtotime(QDateTime::Now())).'-');?><?php _p($vov->InvNo); ?></td><td width="23%" colspan="2">Date: <?php _p(date('d/m/Y',  strtotime($vov->Date))); ?></td></tr>  
                <tr><td>PRN No: </td><td><?php _p($student->Code); ?></td><td>Category:</td><td><?php if($profile) _p($profile->FeeConcessionObject);?></td></tr>  
                <tr><td height="27">Branch: </td><td><?php _p(delete_all_between('[', ']',$current->RoleObject->ParrentObject).' '.$current->SemisterObject->ParrentObject); ?></td><td>Roll No:</td><td> <?php //_p($student->Code); ?></td></tr>  
                <tr>
                  <td><strong>NAME</strong>:</td><td colspan="3"> <?php _p(get_full_name($student->Name)); ?></td></tr>  
            </table>
            <div align="center">
                <table width="100%">
                    <tr style="border-bottom: 1px solid #000 !important; border-top: 1px solid #000 !important; ">
                        <td width="11%" align="left"><div align="center"><strong>No</strong></div></td>
                        <td width="62%" <?php if($i != 3){ ?>align="left"<?php }else{?>align="center"<?php }?>><strong>PARTICULARS</strong></td>
                        <td width="27%" align="right"><strong>AMOUNT</strong></td>
                    </tr>
                    <?php 
                    $vhps = "";
                    if($i != 3){
                        $headcnt = 0;
                        $total = 0;
                        $sr = 1;
                      
                                                  
                        $fees = Fees::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                                    QQ::Equal(QQN::Fees()->CalenderYear, $current->CalenderYear),
                                    QQ::Equal(QQN::Fees()->AcademicYear, $current->Semister),
                                    QQ::Equal(QQN::Fees()->Course, $current->RoleObject->Parrent),
                                    QQ::Equal(QQN::Fees()->Parrent, NULL),
                                    QQ::Equal(QQN::Fees()->GovAmt, NULL)
                                ),
                                QQ::OrderBy(QQN::Fees()->Seq, TRUE)
                            );
                            
                            
                        
                        foreach($fees as $fee){
                        $headcnt++;
                        
                        $totalamt = 0;
                            $chkfeestemplet = Fees::LoadArrayByParrent($fee->IdfeesTemplet);
                            if($chkfeestemplet){
                                //sub feeheads 
                                foreach($chkfeestemplet as $templet){
                                    $vhps = Voucher::QueryArray(
                                                QQ::AndCondition(          
                                                    
                                                    //QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $templet->Fee), 
                                                        
                                                    QQ::OrCondition(
                                                    /*QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                                    QQ::Equal(QQN::Voucher()->Cancel,0),    */
                                                    QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                                    QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                                    )
                                               ));

                                        if($vhps){
                                            foreach ($vhps as $vhp){
                                                $totalamt = $totalamt + $vhp->Amount;
                                            }
                                        }        
                                    }
                                //_p(number_format($totalamt,2,'.',''));

                            }else{
                                $vhps = Voucher::QueryArray(
                                            QQ::AndCondition(                                                                  
                                                //QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Fee),     
                                                QQ::OrCondition(
                                                /*QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                                QQ::Equal(QQN::Voucher()->Cancel,0),  */
                                                QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                                )
                                           ));

                                if($vhps){
                                    foreach ($vhps as $vhp){
                                        $totalamt = $totalamt + $vhp->Amount;
                                    }
                                   // _p(number_format($totalamt,2,'.',''));     
                                } 
                                //_p(number_format($totalamt,2,'.',''));     
                            }
                            
                        if($totalamt != 0){
                    ?>
                    <tr>
                       <td align="left"><div align="center">
                         <?php _p($sr++); ?>
                       </div></td>
                       <td align="left"><?php _p($fee->FeeObject); ?></td>
                       <td align="right"><?php 
                            _p(number_format($totalamt,2,'.',''));     
                            $total = $total + $totalamt;
                     ?></td>
                    </tr>
                    <?php }} ?>
                    <?php 
                        $deposite = 0;
                            $currentdeposite = Voucher::QueryArray(
                                        QQ::AndCondition(      
                                            QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                            QQ::Equal(QQN::Voucher()->Dr, 22),//personal depositr     
                                            QQ::Equal(QQN::Voucher()->CrObject->Grp, $vov->Cr),
                                            QQ::Equal(QQN::Voucher()->Parrent, $_GET['id']),    
                                            QQ::Equal(QQN::Voucher()->AcademicYear, $current->SemisterObject->Parrent)
//                                            QQ::OrCondition(
//                                            QQ::Equal(QQN::Voucher()->Cancel,NULL),    
//                                            QQ::Equal(QQN::Voucher()->Cancel,0)  
//                                            )
                                        ));
                            if($currentdeposite){
                               foreach($currentdeposite as $currentdep){}
                               $deposite = $deposite + $currentdep->Amount;
                            }
                        $depvovs = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                                QQ::Equal(QQN::Voucher()->CrObject->Grp,$_GET['mem'])    
                            )
                            );

                        if($depvovs){
                            //for return deposite
                            foreach ($depvovs as $depvov){}
                            $deposite = $deposite + $depvov->Amount;                            
                        }
                            
                        if($deposite != 0){
                    ?>
                    <tr>
                        <td align="left"><div align="center">
                         <?php _p($sr++); ?>
                        </div></td>
                        <td align="left">PERSONAL DEPOSITE</td>
                        <td align="right"><?php _p(number_format($deposite,2,'.','')); ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php
                        $reqrow = 11 - ($headcnt + 1);
                        for($row=1; $row <= $reqrow; $row++){
                    ?>
                    <tr>
                        <td colspan="3"><div align="center">&nbsp;</div></td>
                    </tr>
                    <?php }} ?>
                    <?php if($i == 3){ ?>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="center">Notes</div></td>
                        <td>
                            <div align="right">
                            <div style="float: left; width: 49%;">Rs</div>
                            <div style="float: left; width: 49%;">Ps</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 1000</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td>
                            <div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 500</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                       <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 100</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 50</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 20</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 10</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 5</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 2</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 49%;">&nbsp;</div>
                            <div style="float: left; width: 49%;">* 1</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                       
                    </tr>
                    <tr>
                        <td><div align="center"></div></td>
                        <td><div align="left">
                            <div style="float: left; width: 39%;">&nbsp;</div>
                            <div style="float: left; width: 60%;">Coins</div>
                            <div style="clear: both;"></div>
                            </div>
                        </td>
                        <td></td>
                       
                    </tr>
                    <?php 
                        $reqrow = $headcnt - 11;
                        for($row=1; $row <= $reqrow; $row++){
                    ?>
                    <tr>
                        <td colspan="3"><div align="center">&nbsp;</div></td>
                    </tr>
                    
                        <?php }} ?>
                    <tr style="border-bottom: 1px solid #000; border-top: 1px solid #000;">
                        <td><div align="center"></div></td>
                        <td align="right"><strong>TOTAL&nbsp;</strong></td>
                        <td align="right"><strong><?php _p(number_format($total + $deposite ,2,'.','')); ?></strong></td>
                    </tr>
                </table>
            </div>
             <table height="124"  style="width: 100%;">
                <tr><td width="23%" height="21" valign="top">In Words: </td><td colspan="3"><?php _p(convert_number($total + $deposite).' only.'); ?> </td></tr>   
                <tr><td height="21" colspan="4"><?php if($vhps) _p($vhp->Narration); else _p($vov->Narration) ?></td></tr>  
                <tr><td height="21">Amount</td><td colspan="3"><?php _p(number_format($total + $deposite,2,'.','')); ?></td></tr>
                <tr><td height="49" colspan="3">VERIFYING OFFICER </td><td colspan="1" align="center"> RECEPIENTS</td></tr>
            </table>
        </div> 
    <?php } ?>
    <div style="clear: both;"></div>
</div>
<div class="pull-right" style="height: 100px;">
        <div style="float: left;"><?php $this->chkApproved->Render(); ?></div>
        <div style="float: left;"><?php $this->btnApproved->Render(); ?></div>
        <div style="clear: both;"></div>
    </div>
    
   
<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>