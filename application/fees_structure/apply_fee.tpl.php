<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<h1>Pay Fees</h1>

<div class="form-controls" >
    <?php if(isset($_GET['view']) != 1){?>
    <div style=" margin-bottom: 10px; "> 
        <div style="padding: 1px;" class="col-md-8">
            <div class="pull-left" style="width: 88%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
            <div class="pull-left" style="margin-top: 4px; margin-left: 5px;"><?php $this->btnSearch->Render(); ?></div>
            <div style="clear: both;"></div>
        </div>
        <div style="padding: 1px;" class="col-md-4"><?php  $this->caldate->RenderWithName();?></div>
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>
    <?php }?>
    <table border="0" style="width:100%; margin-top: 30px;">
        
        <?php if(isset($_GET['mem'])){ 
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $ledger = Ledger::LoadByIdledger($_GET['mem']);

            if(isset($_GET['year'])){
                $CurrentStatus = CurrentStatus::QueryArray (
                                  QQ::AndCondition(
                                  QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year']),
                                  QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                           ));  
            }else{
                 $CurrentStatus = CurrentStatus::LoadArrayByStudent($ledger->Idledger);
            }

            if($CurrentStatus)foreach ($CurrentStatus as $CurrentStatu){}   

        ?>
        <tr>
            <td width="70%">
                <?php if(isset($_GET['view']) != 1){?>
                <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
                <table border="0" width="100%">
                    <tr height="30">
                        <td width="70" rowspan="3"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/prof.png" width="75" height="75"  style="padding-right: 15px;"alt=""/></td>
                        <td width="62" >Name</td>
                        <td width="14"><strong>:</strong></td>
                        <td colspan="4"><strong>
                          <?php _p(get_full_name($ledger->Name)); ?>
                        </strong></td>
                    </tr>
                    <tr height="30">
                        <td>Program</td>
                        <td><strong>:</strong></td>
                        <td width="200"><?php _p(delete_all_between('[',']',$CurrentStatu->RoleObject->ParrentObject)); ?></td>
                        <td width="70">Concession</td>
                        <td width="7">:</td>
                        <td width="136"><?php _p($profile->FeeConcessionObject->Name); ?></td>
                    </tr>
                    <tr height="30">
                        <td>Year</td>
                        <td><strong>:</strong></td>
                        <td colspan="4"><?php _p($CurrentStatu->SemisterObject->ParrentObject.', '.$CurrentStatu->SemisterObject);     ?></td>
                    </tr>
                </table>
                </div>
                <?php } ?>
            </td>
            <td valign="top" width="30%">
                <?php if(isset($_GET['view']) != 1){ ?>
                <div style="float:left; width: 100%; margin-left: 20px;">
                    <div class="pull-left"><b>Year&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                    <div class="pull-left"><?php $this->lstYear->Render(); ?></div>
                    <div style="clear: both;"></div>
                </div>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php 
                    $course = Role::LoadByIdrole($CurrentStatu->RoleObject->ParrentObject->Parrent);
                ?>
                <div style="float: left; width: 70%; margin-top: 15px;">
                    <table width="100%" border="1" class="datagrid" >
                        <tr>
                            <th><div align="center">Sr </div></th>
                            <th><div align="center">Fees</div></th>
                            <th><div align="center">Payable</div></th>
                            <th><div align="center">Paid</div></th>
                            <th><div align="center">Balance</div></th>
                            <th><div align="center">Now</div></th>
                            <?php if(isset($_GET['id'])){ ?>
                               <th>&nbsp;</th>
                            <?php } ?>
                        </tr>
                        <?php
                        $sr = $total1=$total2=$total3=$now=0;     
                        
                        if($CurrentStatu->RoleObject->Parrent == 260){ //civil diploma
                            $fees = Fees::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                                    QQ::Equal(QQN::Fees()->CalenderYear, $CurrentStatu->CalenderYear),
                                    QQ::Equal(QQN::Fees()->AcademicYear, $CurrentStatu->SemisterObject->Parrent),
                                    QQ::Equal(QQN::Fees()->Course, $CurrentStatu->RoleObject->ParrentObject->Parrent),
                                    QQ::NotEqual(QQN::Fees()->AdmitAmt, NULL),
                                    QQ::NotEqual(QQN::Fees()->Fee, 5466)      //mech  
                                ),
                                QQ::OrderBy(QQN::Fees()->Seq, TRUE)
                                );
                        }elseif($CurrentStatu->RoleObject->Parrent == 268){
                            $fees = Fees::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                                        QQ::Equal(QQN::Fees()->CalenderYear, $CurrentStatu->CalenderYear),
                                        QQ::Equal(QQN::Fees()->AcademicYear, $CurrentStatu->SemisterObject->Parrent),
                                        QQ::Equal(QQN::Fees()->Course, $CurrentStatu->RoleObject->ParrentObject->Parrent),
                                        QQ::NotEqual(QQN::Fees()->AdmitAmt, NULL),
                                        QQ::NotEqual(QQN::Fees()->Fee, 5488)    // civil    
                                    ),
                                    QQ::OrderBy(QQN::Fees()->Seq, TRUE)
                                    );
                        }else{
                            $fees = Fees::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                                        QQ::Equal(QQN::Fees()->CalenderYear, $CurrentStatu->CalenderYear),
                                        QQ::Equal(QQN::Fees()->AcademicYear, $CurrentStatu->SemisterObject->Parrent),
                                        QQ::Equal(QQN::Fees()->Course, $CurrentStatu->RoleObject->ParrentObject->Parrent),
                                        QQ::NotEqual(QQN::Fees()->AdmitAmt, NULL),
                                        QQ::NotEqual(QQN::Fees()->Fee, 5488),    // civil    
                                        QQ::NotEqual(QQN::Fees()->Fee, 5466)      //mech  
                                    ),
                                    QQ::OrderBy(QQN::Fees()->Seq, TRUE)
                                    );
                        }
                            foreach ($fees as $fee){
                                $cnt = 0;
                                $chkparrent =  Fees::LoadArrayByParrent($fee->IdfeesTemplet);
                                if($chkparrent){
                                    foreach($chkparrent as $parrent){
                                        $cnt++;
                                    }
                                }
                                if($cnt == 0){
                                    $sr = $sr +1;
                                    $totalpaid = $bal = $totalpayable = 0;

                        ?>
                        <tr>
                            <td><?php _p($sr);?></td>
                            <td><?php _p($fee->FeeObject);?></td>
                            <td align="right"><?php 
                                $vhps = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                            QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']),
                                            QQ::Equal(QQN::Voucher()->Grp,6),    
                                            QQ::Equal(QQN::Voucher()->AcademicYear,$CurrentStatu->SemisterObject->Parrent)    
                                        ));
                                if($vhps){
                                    foreach ($vhps as $vhp){
                                        $totalpayable = $totalpayable + $vhp->Amount;
                                    }
                                    _p(number_format($totalpayable,2,'.','')); 
                                }
                               
                                ?>
                            </td>
                            <td>
                            <div align="right">
                                <?php                               
                                $vhps = Voucher::QueryArray(
                                        QQ::AndCondition(                                                                              
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr,$fee->Fee),     
                                            QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),
                                            QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue)
                                        ));
                                
                                if($vhps){
                                    foreach ($vhps as $vhp){
                                        $totalpaid = $totalpaid + $vhp->Amount;
                                    }
                                    _p(number_format($totalpaid,2,'.','')); 
                                }
                               
                                ?>
                            </div></td>
                            <td><div align="right"><?php  $bal = $totalpayable - $totalpaid; _p(number_format($bal,2,'.','')); ?></div></td>
                            <td><div align="center"><?php $this->txtnow[$fee->IdfeesTemplet]->Render();  ?></div></td>
                            <?php if(isset($_GET['id'])){ ?>
                                <td align="center"><?php $this->lbldelete[$fee->IdfeesTemplet]->Render(); ?></td>
                            <?php } ?>
                        </tr>
                        <?php 
                            $total1 = $total1 +  $fee->AdmitAmt;
                            $total2 = $total2 +  $totalpaid;
                            $total3 = $total3 +  $bal;
                        
                            } }?>
                        <?php if(isset($_GET['id'])){?>
                        <tr>
                            <td><?php _p($sr + 1);?></td>
                            <td align="left">PERSONAL DEPOSITE</td>
                            <td align="right"><?php ?></td>
                            <td>
                            <div align="right">
                                <?php   
                                $totdeposite = $baldeposite = 0;
                                $depositevhps = Voucher::QueryArray(
                                            QQ::AndCondition(                                                                              
                                                QQ::Equal(QQN::Voucher()->Dr, 22),//personal deposit     
                                                QQ::Equal(QQN::Voucher()->CrObject->Grp, $_GET['mem']),
                                                QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue)
                                            ));
                                
                                if($depositevhps){
                                    foreach ($depositevhps as $deposite){
                                        $totdeposite = $totdeposite + $deposite->Amount;
                                    }
                                   _p(number_format($totdeposite,2,'.','')); 
                                }
                                $currentdeposite = Voucher::QueryArray(
                                                QQ::AndCondition(                                                                              
                                                    QQ::Equal(QQN::Voucher()->Dr, 22),//personal depositr     
                                                    QQ::Equal(QQN::Voucher()->CrObject->Grp, $_GET['mem']),
                                                    QQ::Equal(QQN::Voucher()->Parrent, $_GET['id']),    
                                                    QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue)
                                                ));
                                    if($currentdeposite){
                                       foreach($currentdeposite as $currentdep){}
                                       $this->txtDeposite->Text = $currentdep->Amount;
                                    }
                               
                                ?>
                            </div></td>
                            <td><div align="right"><?php  _p(number_format($baldeposite,2,'.','')); ?></div></td>
                            <td><div align="center"><?php $this->txtDeposite->Render();  ?></div></td>
                            <td align="center"><?php $this->lblDeldeposite->Render(); ?></td>
                        </tr>
                        <?php }?>
                        <tr>
                            <th></th>
                            <th>Total</th>
                            <th><div align="right"><?php _p(number_format($total1,2,'.','')); ?>&nbsp;</div></th>
                            <th><div align="right"><?php _p(number_format($total2,2,'.','')); ?>&nbsp;</div></th>
                            <th><div align="right"><?php _p(number_format($total3,2,'.','')); ?>&nbsp;</div></th>
                            <th><div align="right">
                            <?php
                                if(isset($_GET['id'])){
                                    $nowvov = Voucher::LoadByIdvoucher($_GET['id']);
                                        if($nowvov){
                                        $nowvhps = Voucher::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue),
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Parrent,$nowvov->Idvoucher),                                            
                                                QQ::Equal(QQN::Voucher()->Idvoucher,$nowvov->Idvoucher)    
                                            ))
                                           );
                                        foreach ($nowvhps as $nowvhp){
                                            $now = $now + $nowvhp->Amount;
                                        }

                                }}
                            $this->lblPaid->Text =  number_format($now,2,'.','');
                            $this->lblPaid->Render(); ?>
                            </div></th>
                            <?php if(isset($_GET['id'])){ ?>
                                <th align="center">&nbsp; </th>
                            <?php } ?>
                        </tr>
                </table>
                </div> 
                <div style="float: right; width:300px; margin-top: 15px;">
                <?php if(isset($_GET['view']) != 1){?>    
                <table width="290" border="0" class="datagrid">
                    <tr>
                        <th colspan="3">Year Wise Fees Balance</th>
                    </tr>
                    <tr>
                        <th width="26">Sr</th>
                        <th width="107">Date</th>
                        <th width="106">Amount</th>
                    </tr>
                    <?php 
                        $statuss = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                    )//,
                                       //QQ::Clause(QQ::GroupBy(QQN::CurrentStatus()->SemisterObject->Parrent))
                                    );
                            foreach ($statuss as $status){
                      ?>
                    <tr>
                        <td colspan="3"><div align="center"><strong>
                          <?php _p($status->SemisterObject->ParrentObject.', '.$status->SemisterObject); ?>
                          </strong></div>
                        </td>
                    </tr>
                    <?php
                        $totpaid = 0;
                        $paids = Voucher::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 7),
                                    QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger),
                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),        
                                    QQ::Equal(QQN::Voucher()->AcademicYear, $status->SemisterObject->Parrent)       
                                ),QQ::Clause(QQ::OrderBy(QQN::Voucher()->InvNo))
                                );
                        if($paids){
                            $sr = 1;
                            $totalamt = 0;
                            foreach ($paids as $paid){
                                $totalamt = 0;
                                $paidamt = Voucher::QueryArray(
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Parrent,$paid->Idvoucher),                                            
                                                QQ::Equal(QQN::Voucher()->Idvoucher,$paid->Idvoucher)    
                                            )
                                           );
                                if($paidamt){
                                    foreach ($paidamt as $amt){
                                        $totalamt = $totalamt + $amt->Amount;
                                    }
                                }
                    ?>
                    <tr onclick="window.open('pay_fees.php?mem=<?php _p($_GET['mem']); ?>&id=<?php _p($paid->Idvoucher); ?>')">
                        <td><div align="center"><?php _p($paid->InvNo); ?></div></td>
                        <td><div align="center"><?php _p(date('d/m/Y', strtotime($paid->Date)));  ?></div></td>
                        <td><div align="right">
                            <?php  _p(number_format($totalamt,2,'.','')); $totpaid = $totpaid + $totalamt; ?>
                        </div></td>
                    </tr>
                    <?php }} ?>
                    <tr>
                        <td>&nbsp;</td>
                        <td><div align="right"><strong>Total</strong></div></td>
                        <td><div align="right"><strong><?php _p(number_format($totpaid,2,'.',''));?></strong></div></td>
                    </tr>
                    <?php } ?>
                    <tr><td colspan="3">&nbsp;</td></tr>
                </table>
                <?php }?>
                </div>
            </td>
        </tr>
        <tr>
            <td height="34" colspan="2" >
                <div style="float:left; "><?php //$this->btnDelete->Render(); ?></div>
                <div style="float:right; "><?php $this->btnSave->Render(); ?></div>
            </td>
        </tr>
        <?php }?>
    </table>
    <div style="clear: both;"></div>    
</div>

<?php $this->RenderEnd() ?>
    <?php //require(__CONFIGURATION__ .'/footer.inc.php');?>