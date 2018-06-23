<?php

    require('../../qcubed.inc.php');

    $voucher = Voucher::LoadAll();
    foreach($voucher as $vou){
        $vou->DataBy = 5516; //verification
        $vou->ApprovedBy = 5505; //cashier
        $vou->ApprovedDate = $vou->Date;
        if($vou->Grp == 7){ //cash
            $currentstatus = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $vou->AcademicYear),
                    QQ::Equal(QQN::CurrentStatus()->Student, $vou->Cr)
                    ));
        }elseif($vou->Grp == 6){ //fee receipt
            $currentstatus = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $vou->AcademicYear),
                    QQ::Equal(QQN::CurrentStatus()->Student, $vou->Dr)
                    ));
        }
        if($currentstatus){
            foreach($currentstatus as $status){}
            $vou->RefStatus = $status->IdcurrentStatus;
        }
        $vou->Save();
        
    }       
?>

