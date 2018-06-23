
<?php
require('../../qcubed.inc.php');
    $from = date('Ymd',  strtotime('20160708'));
    $to = date('Ymd', strtotime('20160708')); 
    
    $vouss = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, $from."000000"),
                    QQ::LessThan(QQN::Voucher()->Date, $to."235959"),
                    QQ::Equal(QQN::Voucher()->Parrent, NULL),        
                    QQ::Equal(QQN::Voucher()->ApprovedBy, NULL)        
                ));
    
    if($vouss){            
        $cnt = 0;
        $chn = 0;
        foreach($vouss as $vov){
            $cnt++;
            $subs = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, $from."000000"),
                    QQ::LessThan(QQN::Voucher()->Date, $to."235959"),
                    QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher)                                                
                ));
            if($subs){
                foreach($subs as $sub){
                    if($sub->ApprovedBy != NULL && $sub->ApprovedDate != NULL){
                        $chn++;
                        $sub->ApprovedBy = NULL;
                        $sub->ApprovedDate = NULL;                    
                        $sub->Save();
                    }
                }
            }
        }
        
        _t($cnt." - ".$chn);
    }
    
    _p('----');
?>