<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<div class="form-controls" >
    
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
                        <td width="136"><?php if($profile->FeeConcession) _p($profile->FeeConcessionObject->Name); ?></td>
                    </tr>
                    <tr height="30">
                        <td>Year</td>
                        <td><strong>:</strong></td>
                        <td colspan="4"><?php _p($CurrentStatu->SemisterObject->ParrentObject.', '.$CurrentStatu->SemisterObject);     ?></td>
                    </tr>
                </table>
                </div>
               
            </td>
            <td valign="top" width="30%">
               
                <div style="float:left; width: 100%; margin-left: 20px;">
                    <div class="pull-left"><b>Year&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                    <div class="pull-left"><?php $this->lstYear->Render(); ?></div>
                    <div style="clear: both;"></div>
                </div>
              
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php 
                $sr = 1 ;
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
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <tr>
                            <td><?php  _p($sr);?></td>
                            <td align="left">PERSONAL DEPOSITE</td>
                            <td align="right"><?php ?></td>
                            <td>
                            <div align="right">
                                <?php   
                                 $totdeposite = $baldeposite = 0;
                               if(isset($_GET['id'])){
                                  
                                        $depvovs = Voucher::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                                    QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                                                    QQ::Equal(QQN::Voucher()->CrObject->Grp,$_GET['mem'])    
                                                )
                                            );

                                    foreach ($depvovs as $depvov){
                                        $this->txtDeposite->Text = $depvov->Amount;
                                        $totdeposite = $totdeposite + $depvov->Amount;
                                    }
                                     
                                   _p(number_format($totdeposite,2,'.','')); 
                                
                                } 
                                ?>
                            </div></td>
                            <td><div align="right"><?php  _p(number_format($baldeposite,2,'.','')); ?></div></td>
                            <td><div align="center"><?php $this->txtDeposite->Render();  ?></div></td>
                                <td> <div align="center"><?php $this->btnSave->Render(); ?></div></td>
                            <td align="center"><?php $this->lblDeldeposite->Render(); ?></td>
                        </tr>
                       
                        
                </table>
                </div> 
                <div style="float: right; width:300px; margin-top: 15px;">
              
                <table width="290" border="0" class="datagrid">
                    <tr>
                        <th colspan="4">Year Wise Transaction</th>
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
                        <td colspan="4">
                            <div align="center">
                                <strong>
                                    <?php _p($status->SemisterObject->ParrentObject.', '.$status->SemisterObject); ?>
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
                    <tr >
                        <td><div align="center"><?php _p($paid->InvNo); ?></div></td>
                        <td><div align="center"><?php _p(date('d/m/Y', strtotime($paid->Date)));  ?></div></td>
                        <td>
                            <div align="right">
                                <?php  _p(number_format($totalamt,2,'.','')); if(!$amt->Cancel) $totpaid = $totpaid + $totalamt; ?>
                            </div>
                        </td>                        
                    </tr>
                    <?php }} ?>
                  <?php
                        $deppaids = Voucher::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 7),
                                    QQ::Equal(QQN::Voucher()->CrObject->Grp, $ledger->Idledger),
                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                    //QQ::NotEqual(QQN::Voucher()->Cancel,1),
                                    QQ::Equal(QQN::Voucher()->AcademicYear, $status->SemisterObject->Parrent)       
                                ),QQ::Clause(QQ::OrderBy(QQN::Voucher()->InvNo))
                                );
                        if($deppaids){
                            foreach ($deppaids as $deppaid){}
                    ?>
                    <tr onclick="window.open('personal_diposite.php?mem=<?php _p($_GET['mem']); ?>&id=<?php _p($deppaid->Idvoucher); ?>')">
                        <td><div align="center"><?php _p($deppaid->InvNo); ?></div></td>
                        <td><div align="center"><?php _p(date('d/m/Y', strtotime($deppaid->Date)));  ?></div></td>
                        <td>
                            <div align="right">
                                <?php  _p(number_format($deppaid->Amount,2,'.','')); $totpaid = $totpaid + $deppaid->Amount; ?>
                            </div>
                        </td>                        
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    <tr><td colspan="3">&nbsp;</td></tr>
                </table>
               
                </div>
            </td>
        </tr>
        <tr>
            <td height="34" colspan="2" >
                <div style="float:left; "><?php  ?></div>
                <div style="float:right; "><?php if(isset($_GET['id'])){ $this->btnPrint->Render(); } ?></div>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div style="clear: both;"></div>    
</div>

<?php $this->RenderEnd() ?>
    <?php //require(__CONFIGURATION__ .'/footer.inc.php');?>