<?php
    require('../../qcubed.inc.php');
    // 6 , 7, 12
     $vhps = Voucher::QueryArray(
                QQ::AndCondition(                
                    QQ::Equal(QQN::Voucher()->Grp, 12)
                   // QQ::Equal(QQN::Voucher()->Grp, 7),
                   // QQ::Equal(QQN::Voucher()->Grp, 12)
                        
                )
            );
             
            foreach ( $vhps as $vhp){
                // _p($vhp->InvNo);
                $vhp->CalenderYear= 14;
                $vhp->Save(); 
          
            }
?>
