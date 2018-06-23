<?php
require('../../qcubed.inc.php');
   //Admission Fee Receipt Sequence
/*  $cnts = Voucher::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::Voucher()->Dr,22),
                QQ::Equal(QQN::Voucher()->Parrent,NULL),
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, NULL),
                    QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat,0)
                )
            )
        );
    if($cnts){
        $seq =1;
        foreach($cnts as $cnt){
        
            
            $cnt->Seq = $seq;
            $seq++;
            $cnt->Save();
            _p($cnt->InvNo .' '. $cnt->Seq);
            
        }
         }
 */
//Miscellaneous Fee Receipt Sequence

$cnts = Voucher::QueryArray(
    QQ::AndCondition(
        QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, 1),
        QQ::Equal(QQN::Voucher()->Parrent,NULL)

    )
);
if($cnts){
    $seq = 1;
    foreach ($cnts as $cnt){
       $cnt->Seq = $seq;
       $seq++;
       $cnt->Save();
       _p($cnt->InvNo .' '. $cnt->Seq.' ');
        
    }
}
 
 
?>


