<?php
require('../../qcubed.inc.php');
/*
$ledgers = Ledger::QueryArray(
        QQ::AndCondition(
            QQ::Equal(QQN::Ledger()->Grp, 34),
            QQ::NotEqual(QQN::Ledger()->Idledger, 1)
        )
        );
foreach ($ledgers as $ledger){
    
    $address = Address::LoadArrayByOf($ledger->Idledger);
    if($address){
        foreach($address as $add){
            $add->Delete();
        }
    }
    $login = Login::LoadByIdlogin($ledger->Idledger);
    if($login){
        $lhrs = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
        if($lhrs){
            foreach($lhrs as $lhr){
                $lhr->Delete();
            }
        }
        $login->Delete();
    }
    $profile = Profile::LoadByIdprofile($ledger->Idledger);
    if($profile){
        $profile->Delete();
    }
    $salary = Salary::LoadArrayByStaff($ledger->Idledger);
    if($salary){
        foreach($salary as $sal){
            $sal->Delete();
        }
    }
    $ledger->Delete();
     
}*/
$fees = array(6,7);
$vovs = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::In(QQN::Voucher()->Grp, $fees) 
            )
        );
foreach ($vovs as $vov){
    $vov->Parrent = NULL;
    $vov->RefNo = NULL;
    $vov->Save();        
}

foreach ($vovs as $vov){
    $vovhasitems = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
    foreach ($vovhasitems as $vovhasitem){
        $vovhasitem->Delete();
    }
    $vov->Delete();
}

_p('Delete Successfully');
?>
