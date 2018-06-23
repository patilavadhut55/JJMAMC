<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
<h1><?php _t('Fee Strucure '); ?></h1>
 
    <div class="form-controls">
        <div align="center">
            <?php 
            if(isset($_GET['mem'])) { 
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $ledger = Ledger::LoadByIdledger($_GET['mem']);
            
                if(isset($_GET['acdyear'])){
                    $CurrentStatus = CurrentStatus::QueryArray (
                                       QQ::AndCondition(
                                       QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['acdyear']),
                                       QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                    )                                    
                            );  
                }else{
                    $CurrentStatus = CurrentStatus::LoadArrayByStudent($ledger->Idledger);
                }

                if($CurrentStatus)foreach ($CurrentStatus as $CurrentStatu){}   

            ?>
        </div>
        <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
          
            <table border="0" width="100%" >
                <tr height="30">
                    <td width="75" rowspan="3"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/prof.png" width="75" height="75"  style="padding-right: 15px;"alt=""/></td>
                    <td width="62" >Name</td>
                    <td width="14"><strong>:</strong></td>
                    <td colspan="4">
                        <strong>
                            <?php _p(GetFullNameNew($ledger->Name,$ledger->Code)); ?>
                        </strong>
                    </td>
                </tr>
                
                <tr height="30">
                    <td>Program</td>
                    <td><strong>:</strong></td>
                    <td width="321"><?php _p(delete_all_between('[',']',$CurrentStatu->RoleObject->ParrentObject)); ?></td>
                    <td width="85">Department</td>
                    <td width="9">:</td>
                    <td width="376"><?php _p(delete_all_between('[',']',$CurrentStatu->RoleObject->ParrentObject->ParrentObject)); ?></td>
                </tr>
                
                <tr height="30">
                    <td>Year</td>
                    <td><strong>:</strong></td>
                    <td><?php _p($CurrentStatu->SemisterObject->ParrentObject.', '.$CurrentStatu->SemisterObject);     ?></td>
                    <td width="85">Concession</td>
                    <td width="9">:</td>
                    <td width="376"><b><?php _p($profile->FeeConcessionObject->Name); ?></b></td>
                </tr>
            </table>
          
        </div>
        <div style="clear: both;"></div>
        <table class="datagrid" style='margin-top: 10px; width: 80%; ' border="1">
            <tr>
                <th><div align="center">Sr.</div></th>
                <th><div align="left">Fees Title</div></th>
                <th><div align="center">Student</div></th>
                <th><div align="center">Government</div></th>
            </tr>
            <?php 
                $sr=1;
                if(isset($_GET['acdyear']) && isset($_GET['cal']) && isset($_GET['prog']) && isset($_GET['concession'])){
                $totaladmit = $totalgov =  0;
                $fees = Fees::QueryArray(
                            QQ::AndCondition(
                               QQ::Equal(QQN::Fees()->AcademicYear, $_GET['acdyear']),
                               QQ::Equal(QQN::Fees()->CalenderYear, $_GET['cal']),
                               QQ::Equal(QQN::Fees()->Course, $_GET['prog']),
                               QQ::Equal(QQN::Fees()->Category, $_GET['concession'])
                            ),
                            QQ::Clause(
                                QQ::OrderBy(QQN::Fees()->Seq, True)
                            )
                        );
                    if($fees){
                    foreach($fees as $fee){
                        $totaladmit = $totaladmit + $fee->AdmitAmt;
                        $totalgov = $totalgov + $fee->GovAmt;
            ?>
            <tr>
                <td><div align="center"><?php _p($sr++); ?></div></td>
                <td><div align="left"><?php _p($fee->FeeObject->Name); ?></div></td>
                <td><div align="right"><?php _p(number_format($fee->AdmitAmt,2,'.',''));  ?></div></td>
                <td><div align="right"><?php _p(number_format($fee->GovAmt,2,'.','')); ?></div></td>
            </tr>
            
            <?php } ?>
            <tr>
                <th colspan="2"><div align="right">Total Fee :<?php _p(number_format($totaladmit + $totalgov),2,'.','');?></div></th>
                <th><div align="right"><?php _p(number_format($totaladmit),2,'.','');?></div></th>
                <th><div align="right"><?php _p(number_format($totalgov),2,'.','')?></div></th>
            </tr>
            <?php }?>  
            
        </table>
        <div style="clear: both;"></div>
        <div class="pull-right"><?php $this->btnApply->Render();?></div>
        <div style="clear: both;"></div>
          <?php }} ?>
    </div>

<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>