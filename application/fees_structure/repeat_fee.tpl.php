<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>

<div class="form-controls" >

    <div style=" margin-bottom: 10px; "> 
        <div style="padding: 1px;" class="col-md-8">
            <div class="pull-left" style="width: 88%;"><?php $this->txtSearch->RenderWithName(); ?></div>
            <div class="pull-left" style="margin-top: 4px; margin-left: 5px;"><?php $this->btnSearch->Render(); ?></div>
            <div style="clear: both;"></div>
        </div>
        <div style="padding: 1px;" class="col-md-4"><?php $this->caldate->RenderWithName(); ?></div>
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>

    <table border="0" style="width:100%; margin-top: 30px;">

        <?php
        if (isset($_GET['mem'])) {
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $ledger = Ledger::LoadByIdledger($_GET['mem']);

            if ($this->lstYear->SelectedValue != NULL) {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                                    QQ::Equal(QQN::CurrentStatus()->Student,$ledger->Idledger)
                                ),
                                QQ::OrderBy(QQN::CurrentStatus()->Semister)
                        );
            } else {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(                                    
                                    QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                ),
                                QQ::OrderBy(QQN::CurrentStatus()->Semister)
                            );
            }

            if ($CurrentStatus){
                foreach ($CurrentStatus as $CurrentStatu) {}
            }
            ?>
            <tr>
                <td width="70%">

                    <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
                        <table border="0" width="100%">
                            <tr height="30">
                                <td width="70" rowspan="3"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/prof.png" width="75" height="75"  style="padding-right: 15px;"alt=""/></td>
                                <td width="62" >Name</td>
                                <td width="14"><strong>:</strong></td>
                                <td colspan="4"><strong><?php _p($ledger->Name); ?></strong></td>
                            </tr>
                            <tr height="30">
                                <td>Program</td>
                                <td><strong>:</strong></td>
                                <td width="200"><?php
                                if ($CurrentStatus){
                                    foreach ($CurrentStatus as $CurrentStatu) {}
                                    _p(delete_all_between('[', ']', $CurrentStatu->RoleObject->ParrentObject)); 
                                }
                                ?></td>
                                <td width="70">Concession</td>
                                <td width="7">:</td>
                                <td width="136"><?php if ($profile->FeeConcession) _p($profile->FeeConcessionObject->Name); ?></td>
                            </tr>
                              <tr height="30">
                                <td>Year</td>
                                <td><strong>:</strong></td>
                                <td width="200"><?php
                                if ($CurrentStatus){
                                    foreach ($CurrentStatus as $CurrentStatu) {}
                                    _p($CurrentStatu->SemisterObject); 
                                }
                                ?></td>
                                <?php if(isset($_GET['id'])){ ?>
                                <td width="70">Payment Mode</td>
                                <td width="7">:</td>
                                <td width="136"><?php $this->lstPaymentMode->Render(); ?></td>
                                <?php }?>
                              </tr>
                        </table>
                    </div>

                </td>
                <td valign="top" width="30%">

                    <div style="float:left; width: 50%; margin-left: 20px;">
                        <div class="pull-left"><b>Year&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                        <div class="pull-left"><?php $this->lstYear->Render(); ?></div>
<!--                        <div class="pull-left"><b>Financial Year&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
                        <div class="pull-left"><?php //$this->lstFin->Render(); ?></div>-->
                        
                        <div style="clear: both;"></div>
                    </div>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php
                    $sr = 1;                                        
                    ?>
                    <div style="float: left; width: 70%; margin-top: 15px;">
                        <table width="100%" border="1" class="datagrid" >
                            <tr>
                                <th><div align="center">Sr </div></th>
                                <th><div align="center">Fees</div></th>
                                <th><div align="center">Amount</div></th>
                                <th>&nbsp;</th>
                            </tr>
                            <?php 
                                $sr = 1;
                                if(isset($_GET['id'])){
                                $vovs = Voucher::QueryArray(
                                                    QQ::OrCondition(
                                                        QQ::Equal(QQN::Voucher()->Parrent, $_GET['id']),
                                                        QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id'])
                                                    ));
                                    foreach($vovs as $vov){
                            ?>
                            <tr>
                                <td><?php _p($sr++); ?></td>
                                <td align="left"><?php _p(strtoupper($vov->DrObject));?></td>
                                <td align="center"><?php _p(number_format($vov->Amount, 2, '.', ''));?></td>
                                <td align="center"><?php $this->lblDeldeposite[$vov->Idvoucher]->Render(); ?></td>
                            </tr>
                                <?php }}?>
                            <tr>
                                <td></td>
                                <td align="left"><?php $this->lstAmount->Render();?></td>
                                <td align="center"><?php $this->txtAmount->Render();?></td>
                                <td align="center"><?php $this->btnAdd->Render();?></td>
                                
                            </tr>
                        </table>
                        <div align="right"><?php $this->btnSave->Render(); ?></div>
                    </div> 
                    
                    
                    
                    <div style="float: right; width:250px; margin-top: 15px;">

                        <table width="290" border="0" class="datagrid">
                            <tr>
                                <th colspan="3">Year Wise Transaction</th>
                            </tr>
                            <tr>
                                <th width="26">Sr</th>
                                <th width="107"><div style="text-align: center;">Date</div></th>
                                <th width="106"><div style="text-align: right;">Amount</div></th>
                            </tr>
                            <?php
                                $statuss = CurrentStatus::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                            ),
                                            QQ::OrderBy(QQN::CurrentStatus()->Semister)
                                        
                                        );
                                    foreach ($statuss as $status) {
                            ?>
                            <tr>
                                <td colspan="3">
                                    <div align="center">
                                        <strong>
                                            <?php _p($status->SemisterObject); ?>
                                        </strong>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                $totpaid = 0;
                                $paids = Voucher::QueryArray(
                                                QQ::AndCondition(
                                                        QQ::Equal(QQN::Voucher()->Grp,7), 
                                                        QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger), 
                                                        QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, 1), 
                                                        QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                                        QQ::Equal(QQN::Voucher()->AcademicYear, $status->Semister)
                                                ), QQ::Clause(QQ::OrderBy(QQN::Voucher()->InvNo))
                                                );
                                if ($paids) {
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
                            <tr onclick="window.open('repeat_fee.php?mem=<?php _p($_GET['mem']); ?>&id=<?php _p($paid->Idvoucher); ?>')">
                                <td><div align="center"><?php _p($paid->InvNo); ?></div></td>
                                <td><div align="center"><?php _p(date('d/m/Y', strtotime($paid->Date))); ?></div></td>
                                <td><div align="right"><?php _p(number_format($totalamt, 2, '.', ''));?></div></td>                        
                            </tr>
                            <?php }}} ?>
                            <tr><td colspan="3">&nbsp;</td></tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td height="34" colspan="2" >
                    <div style="float:left; "><?php ?></div>
                    <div style="float:right; "><?php if (isset($_GET['id'])) { $this->btnPrint->Render(); } ?></div>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div style="clear: both;"></div>    
</div>

<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php');?>