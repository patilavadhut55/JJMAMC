<?php
require('../../qcubed.inc.php');
if(isset($_GET['cal']) && isset($_GET['dept'])&& isset($_GET['sem'])){
    $vovs = Voucher::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear, $_GET['cal']),
                    QQ::Equal(QQN::Voucher()->RefStatusObject->RoleObject->Parrent, $_GET['dept']),
                    QQ::Equal(QQN::Voucher()->RefStatusObject->Semister, $_GET['sem']),
                    QQ::Equal(QQN::Voucher()->Parrent, NULL),
                    QQ::Equal(QQN::Voucher()->Grp, 6)    
                )
            );
    
    foreach ($vovs as $vov){
        $subvovs = Voucher::LoadArrayByParrent($vov->Idvoucher);
        foreach ($subvovs as $subvov){
            $refsubvovs = Voucher::LoadArrayByRefNo($subvov->Idvoucher);
            foreach ($refsubvovs as $refsubvov){
                $refvovs = Voucher::LoadArrayByParrent($refsubvov->Idvoucher);
                foreach ($refvovs as $refvov){
                    $refvov->Delete();
                }
                $refsubvov->Delete();
            }
            $subvov->Delete();
        }
        
        $refvovs = Voucher::LoadArrayByRefNo($vov->Idvoucher);
        foreach ($refvovs as $refvov){
            $refvov->Delete();
        }
        $vov->Delete();
    }
    echo "Delete all";
}
?>
