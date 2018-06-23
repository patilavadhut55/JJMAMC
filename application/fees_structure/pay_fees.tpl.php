<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <?php if(isset($_GET['view']) != 1){ ?>
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
    <?php } ?>
    <table border="0" style="width:100%; margin-top: 30px;">
        
        <?php 
        if(isset($_GET['mem'])){ 
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $ledger = Ledger::LoadByIdledger($_GET['mem']);

            if(isset($_GET['year'])){
                $CurrentStatus = CurrentStatus::QueryArray (
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['year']),
                                    QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                ),
                                QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister))
                            );
            }else{
                 $CurrentStatus = CurrentStatus::QueryArray (
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger),
                                    QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue)                                                     
                                ),
                                QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister))
                            );//LoadArrayByStudent($ledger->Idledger);
            }
            if($CurrentStatus){
                foreach ($CurrentStatus as $CurrentStatu){}
            

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
                          <?php _p($ledger->Name); ?>
                        </strong></td>
                    </tr>
                    
                    <tr height="30">
                        <td>Program</td>
                        <td><strong>:</strong></td>
                        <td width="200"><?php _p(delete_all_between('[',']',$CurrentStatu->RoleObject->ParrentObject)); ?></td>
                        <td width="70">Concession</td>
                        <td width="7">:</td>
                        <td width="136"><?php if($profile->FeeConcession) _p($profile->FeeConcessionObject->Name); ?></td>
                    </tr>
                    
                    <tr height="30">
                        <td>Year</td>
                        <td><strong>:</strong></td>
                        <td ><?php _p($CurrentStatu->SemisterObject);     ?></td>
                        <?php if(isset($_GET['id'])){ ?>
                        <td>Payment Mode</td>
                        <td> : </td>
                        <td><?php $this->lstPaymentMode->Render(); ?></td>
                        <?php }else{ ?>
                        <td colspan="3"></td>                        
                        <?php } ?>
                    </tr>
                </table>
                </div>
                <?php }?>
            </td>
            <td valign="top" width="30%">
                <?php if(isset($_GET['view']) != 1){ ?>
                <div style="float:left; width: 50%; margin-left: 20px;">
                    <div class="pull-left"><b>Year&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                    <div class="pull-left"><?php $this->lstYear->Render(); ?></div>
                    <div class="pull-left"><b>Financial year&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                   
                    <div class="pull-left"><?php $this->lstFin->Render(); ?></div>
                   
                    <div style="clear: both;"></div>
                </div>
                <?php }?>
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
                            <th rowspan="2"><div align="center">Sr </div></th>
                            <th rowspan="2"><div align="center">Fees</div></th>
                            <th colspan="2"><div align="center">Payable</div></th>
                            <th colspan="2"><div align="center">Paid</div></th>
                            <th colspan="2"><div align="center">Balance</div></th>
                            <th colspan="4"><div align="center">Now</div></th>
                            <?php if(isset($_GET['id'])){ ?>
                            <?php } ?>
                        </tr>
                        <tr>
                            
                            <th><div align="center">Stud</div></th>
                            <th><div align="center">Govt</div></th>
                             <th><div align="center">Stud</div></th>
                            <th><div align="center">Govt</div></th> 
                            <th><div align="center">Stud</div></th>
                            <th><div align="center">Govt</div></th>
                            <th colspan="2"><div align="center">Stud</div></th>
                            <th colspan="2"><div align="center">Govt</div></th>
                               
                        </tr>
                        <?php
                        $sr = $total1 = $total2 = $total3 = $now = $total4 = $total5 = $total6=0;     
                            $fees = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Grp, 6),
                                            QQ::NotEqual(QQN::Voucher()->DrObject->Grp,$_GET['mem']),                                                                                            
                                            QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus)
                                        )
                                    );
                            if($fees){
                                foreach ($fees as $fee){
                                    $sr = $sr +1;
                                    $totalpaid = $bal = $totalpayable = 0;

                        ?>
                        <tr>
                            <td><?php _p($sr);?></td>
                            <td><?php _p($fee->CrObject); ?></td>
                            <td align="right">
                                <?php 
                                    _p($fee->Amount);             
                                    $totalpayable = $fee->Amount;
                                ?>
                            </td>
                            <?php 
                                    $gtution = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Grp,6),
                                                QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->Cr,$fee->Cr),
                                                QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount,"tution")
                                            )
                                    );
                                    if($gtution){
                                        $govtpayable = $gtution->GetVirtualAttribute("tution");
                                ?>
                            <td align="right"> <?php 
                                                if($govtpayable == ""){
                                                    _p(0);
                                                }else{
                                                    _p($govtpayable);
                                                }
                                            ?> </td>
                            <?php }else { ?>
                                        <td align="right">
                                            <?php _p(0); ?>
                                        </td> 
                                    <?php }?>
                            <td>
                                <div align="right">
                                    <?php                               
                                    $vhps = Voucher::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Voucher()->RefNoObject->Cr,$fee->Cr),
                                                    QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),
                                                    QQ::OrCondition(
                                                        QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                                        QQ::Equal(QQN::Voucher()->Cancel,0)
                                                    ),
                                                    QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue)
                                                )
                                            );

                                    if($vhps){
                                        foreach ($vhps as $vhp){
                                            $totalpaid = $totalpaid + $vhp->Amount;
                                        }
                                         _p(number_format($totalpaid,2,'.',''));
                                    }else{
                                        _p(number_format("0",2,'.',''));
                                    }

                                    ?>
                                </div>
                            </td>
                             <?php 
                                    $gptution = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Grp,7),
                                                QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->Dr,22),      
                                                QQ::Equal(QQN::Voucher()->CrObject->Grp,$CurrentStatu->Student),      
                                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr,$fee->Cr),
                                                QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244)
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount,"paidtution")
                                            )
                                    );
                                    if($gptution){
                                        $paidtution = $gptution->GetVirtualAttribute("paidtution");
                                ?><td align="right">
                                            <?php 
                                                if($paidtution == ""){
                                                    _p(0);
                                                }else{
                                                    _p($paidtution);
                                                }
                                            ?>
                                        </td>
                         
                                    <?php }else {?>
                                        <td align="right">
                                            <?php _p(0); ?>
                                        </td> 
                                    <?php }?>
                            <td>
                                <div align="right">
                                <?php  
                                    $studbal = $totalpayable - $totalpaid; 
                                    
                                    _p(number_format($studbal,2,'.','')); ?>
                                </div>
                            </td>
                            
                            <td align="right">
                                 <?php 
                                    $govtbal = $govtpayable - $paidtution;
                                    _p($govtbal);  ?>
                                
                            </td>
                            
                            
                            
                            <td>
                                <div align="center">
                                    <?php 
                                    if($fee){
                                    if($studbal > 0 || (isset($_GET['id'])&& $this->txtnow[$fee->Idvoucher]->Text != "")) 
                                        $this->txtnow[$fee->Idvoucher]->Render();
                                    }
                                    ?>
                                        <td align="center"> 
                                            <?php if(isset($_GET['id'])){ 
                                            
                                            $this->lbldelete[$fee->Idvoucher]->Render();
                                            } ?>
                                        </td>
                                </div>
                            </td>
                                
                             <td>
                                <div align="center">
                                    <?php 
                                        if($gtution && $gtution->Idvoucher != ""){
                                            if($govtbal > 0 || (isset($_GET['id'])&& $this->txtnowgov[$gtution->Idvoucher]->Text != ""))
                                            $this->txtnowgov[$gtution->Idvoucher]->Render();
                                        }
                                    ?>
                                </div>
                            </td>
                            <?php if($gtution && $gtution->Idvoucher != ""){ ?>
                            <td align="center">
                                <?php $this->lbldeleteGov[$gtution->Idvoucher]->Render(); ?>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php 
                            $total1 = $total1 +  $totalpayable;
                            $total2 = $total2 +  $totalpaid;
                            $total3 = $total3 +  $studbal;
                            
                            $total4 = $total4 + $govtpayable;
                            $total5 = $total5 + $paidtution;
                            $total6 = $total6 + $govtbal;
                        
                             }?>
                        <?php /* if(isset($_GET['id'])){?>
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
                                                QQ::OrCondition(
                                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                                    QQ::Equal(QQN::Voucher()->Cancel,0)  
                                                ),
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
                                                    QQ::OrCondition(
                                                        QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                                                        QQ::Equal(QQN::Voucher()->Cancel,0)  
                                                    ),
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
                        <?php } */ ?>
                        
                        <?php } ?>
                        
                        <tr>
                            <th></th>
                            <th>Total</th>
                            <th><div align="right"><?php _p(number_format($total1,2,'.','')); ?>&nbsp;</div></th>
                            <th><div align="right"><?php _p(number_format($total4,2,'.','')); ?>&nbsp;</div></th>
                    
                            <th><div align="right"><?php _p(number_format($total2,2,'.','')); ?>&nbsp;</div></th>
                            <th><div align="right"><?php _p(number_format($total5,2,'.','')); ?>&nbsp;</div></th>
                    
                            <th><div align="right"><?php _p(number_format($total3,2,'.','')); ?>&nbsp;</div></th>                    
                            <th><div align="right"><?php _p(number_format($total6,2,'.','')); ?>&nbsp;</div></th>
                            <th colspan="2">
                                <div align="right">                                
                                    <?php
                                        $nowstud = 0;
                                        $nowgovt = 0;
                                        if(isset($_GET['id'])){
                                            $nowvov = Voucher::LoadByIdvoucher($_GET['id']);
                                                if($nowvov){
                                                $nowvhps = Voucher::QueryArray(
                                                    QQ::AndCondition(
                                                    //QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                                    //QQ::NotEqual(QQN::Voucher()->Cancel,1),        
                                                    QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue),
                                                    QQ::OrCondition(                                                        
                                                        QQ::Equal(QQN::Voucher()->Parrent,$nowvov->Idvoucher),                                            
                                                        QQ::Equal(QQN::Voucher()->Idvoucher,$nowvov->Idvoucher)    
                                                    )
                                                    )
                                                   );
                                                foreach ($nowvhps as $nowvhp){
                                                    if($nowvhp->CrObject->Grp != 244){
                                                        $nowgovt = $nowgovt + $nowvhp->Amount;
                                                    }else{
                                                        $nowstud = $nowstud + $nowvhp->Amount;
                                                    }
                                                }

                                        }}

                                    $this->lblPaid->Text =  number_format($nowstud,2,'.','');
                                    $this->lblPaid->Render(); ?>
                                </div>
                            </th>
                            
                            <th colspan="2">
                            <div align="right"> 
                                    <?php $this->lblgovPaid->Text =  number_format($nowgovt,2,'.','');
                                    $this->lblgovPaid->Render(); ?>
                                </div>
                            </th>
                            
                            <?php if(isset($_GET['id'])){ ?>
                    <!--<th align="center">&nbsp; </th>-->
                            <?php } ?>
                        </tr>
                        
                </table>
                    <table>
                        <tr>
                            <td align="left"style="padding-right:500px;">
                                <?php $this->btnSaveAll->Render(); ?>
                            </td>
                            <td align="right"><?php $this->btnSave->Render(); ?></td>
                        </tr>
                    </table>
                  
                </div> 
                <div style="float: right; width:25%; margin-top: 10px;">
                    <?php if(isset($_GET['view']) != 1){?>    
                    <table width="290" border="0" class="datagrid">
                        <tr>
                            <th colspan="3">Year Wise Transaction</th>
                        </tr>
                        <tr>
                            <th width="26">Sr</th>
                            <th width="80">Date</th>
                            <th width="106">Amount</th>
                        </tr>
                        <?php 
                            $statuss = CurrentStatus::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                        ),
                                           QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister))
                                        );
                                foreach ($statuss as $status){
                          ?>
                        <tr>
                            <td colspan="3">
                                <div align="center">
                                    <strong>
                                        <?php _p($status->SemisterObject);  ?>
                                    </strong>
                                </div>
                            </td>
                        </tr>
                        
                        <?php
                            $totpaid = 0;
                            $paids = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Grp, 7),
                                        QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger),
                                        QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                        //QQ::NotEqual(QQN::Voucher()->Cancel,1),
                                        QQ::Equal(QQN::Voucher()->AcademicYear, $status->Semister),
                                        QQ::Equal(QQN::Voucher()->ExamFee, 0)
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
                        <tr onclick="window.open('pay_fees.php?mem=<?php _p($_GET['mem']); ?>&id=<?php _p($paid->Idvoucher); ?>&year=<?php _p($paid->AcademicYear); ?>')">
                            <?php if($paid->DrObject->IsFeeRepeat != '1'){?>
                            <td><div align="center"><?php _p($paid->InvNo); ?></div></td>
                            <td><div align="center"><?php _p(date('d/m/Y', strtotime($paid->Date)));  ?></div></td>
                            <td>
                                <div align="right">
                                    <?php  _p(number_format($totalamt,2,'.','')); if(!$amt->Cancel) $totpaid = $totpaid + $totalamt; ?>
                                </div>
                            </td>                        
                        </tr>
                            <?php }} }?>

                        <?php
                        
                            $deppaids = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Grp, 7),
                                        QQ::Equal(QQN::Voucher()->CrObject->Grp, $ledger->Idledger),
                                        QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                        //QQ::NotEqual(QQN::Voucher()->Cancel,1),
                                        QQ::Equal(QQN::Voucher()->AcademicYear, $status->Semister)                                                
                                    ),QQ::Clause(QQ::OrderBy(QQN::Voucher()->InvNo))
                                    );
                            if($deppaids){
                                foreach ($deppaids as $deppaid){
                        ?>
                        <tr onclick="window.open('pay_fees.php?mem=<?php _p($_GET['mem']); ?>&id=<?php _p($deppaid->Idvoucher); ?>&year=<?php _p($deppaid->AcademicYear); ?>')">
                            <td><div align="center"><?php _p($deppaid->InvNo); ?></div></td>
                            <td><div align="center"><?php _p(date('d/m/Y', strtotime($deppaid->Date)));  ?></div></td>
                            <td>
                                <div align="right">
                                    <?php  
                                    $totalamt = 0;
                                    $paidamt = Voucher::QueryArray(
                                                    QQ::OrCondition(
                                                        QQ::Equal(QQN::Voucher()->Parrent,$deppaid->Idvoucher),                                            
                                                        QQ::Equal(QQN::Voucher()->Idvoucher,$deppaid->Idvoucher)
                                                    )
                                                );
                                    if($paidamt){
                                        foreach ($paidamt as $amt){
                                            $totalamt = $totalamt + $amt->Amount;
                                            
                                        }
                                    }
                                    _p(number_format($totalamt,2,'.','')); 
                                    $totpaid = $totpaid + $totalamt; ?>
                                </div>
                            </td>                        
                        </tr>
                        <?php }} ?>
    <!--                    <tr>
                            <td>&nbsp;</td>                        
                            <td><div align="right"><strong>Total</strong></div></td>
                            <td><div align="right"><strong><?php //_p(number_format($totpaid,2,'.',''));?></strong></div></td>                        
                        </tr>-->
                        <?php } ?>
                        <tr><td colspan="3">&nbsp;</td></tr>
                        <?php 
                        if(isset($_GET['id']) && isset($_GET['mem']) && $_SESSION['login'] == 1){
                            $sclvovs = Voucher::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue),
                                                QQ::Equal(QQN::Voucher()->DrObject->Grp,$_GET['mem']),
                                                QQ::Equal(QQN::Voucher()->Cr,5455)     
                                            )
                                        );
                                if($sclvovs){
                                    foreach ($sclvovs as $sclvov){}
                                        $this->txtScolarship->Text = $sclvov->Amount;
                        ?>
                        <tr style="background: #EFEFEF;">
                            <td><strong>Scholarship<strong></td>
                            <td><div align="left"><?php $this->txtScolarship->Render(); ?></div></td>
                            <td><div align="right"><?php $this->btnScolarship->Render(); ?></td>
                        </tr>
                        <?php } }}?>
                    </table>
                <?php }?>
                    <strong>Narration</strong>
                    <?php $this->txtNarration->Render(); ?>
                    
                   
                </div>
            </td>
        </tr>        
                <?php }?>
    </table>
    <div style="clear: both;"></div>    
</div>

<?php $this->RenderEnd() ?>
    <?php //require(__CONFIGURATION__ .'/footer.inc.php');?>