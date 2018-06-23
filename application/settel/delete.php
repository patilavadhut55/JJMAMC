<?php
require('../../qcubed.inc.php');
    $from = date('Ymd',  strtotime('20160705'));
    $to = date('Ymd', strtotime('20160706')); 
    $cnt = $paycnt = 0;
   /* $vouss = Voucher::QueryArray(QQ::AndCondition(
                  QQ::LessThan(QQN::Voucher()->Date, $to."235959"),
                  QQ::GreaterOrEqual(QQN::Voucher()->Date, $from."000000"),
                  QQ::Equal(QQn::Voucher()->Dr, 22),
                  QQ::NotEqual(QQn::Voucher()->Parrent, NULL)
                ));
    if($vouss){            
        foreach($vouss as $vou){
            $vouchers = Voucher::LoadArrayByParrent($vou->Idvoucher);
            if($vouchers){
                foreach($vouchers as $vov){
                    $vov->Delete();
                    $cnt++;
                }
            }
            $cnt++;
            $vou->Delete();
        }
    }*/
    
    $vouss = Voucher::QueryArray(QQ::AndCondition(
                  QQ::LessThan(QQN::Voucher()->Date, $to."235959"),
                  QQ::GreaterOrEqual(QQN::Voucher()->Date, $from."000000"),
                  QQ::Equal(QQn::Voucher()->Dr, 22),
                  QQ::Equal(QQn::Voucher()->Parrent, NULL)
                ));
    if($vouss){            
        foreach($vouss as $vou){
            $cnt++;
            $vou->Delete();
        }
    }
    _p("Cash Count = ".$cnt);
    
    /*$payables = Voucher::QueryArray(QQ::AndCondition(
                  QQ::LessThan(QQN::Voucher()->Date, $to."235959"),
                  QQ::GreaterOrEqual(QQN::Voucher()->Date, $from."000000"),
                  QQ::Equal(QQn::Voucher()->CrObject->Grp, 5454),
                  QQ::NotEqual(QQn::Voucher()->Parrent, NULL)
                ));
    if($payables){            
        foreach($payables as $pay){
            $subpayables = Voucher::LoadArrayByParrent($pay->Idvoucher);
            if($subpayables){
                foreach($subpayables as $sub){
                    $sub->Delete();
                    $paycnt++;
                }
            }
            $paycnt++;
            $pay->Delete();
        }
    }*/
    
    $payables = Voucher::QueryArray(QQ::AndCondition(
                  QQ::LessThan(QQN::Voucher()->Date, $to."235959"),
                  QQ::GreaterOrEqual(QQN::Voucher()->Date, $from."000000"),
                  QQ::Equal(QQn::Voucher()->CrObject->Grp, 5454)
                  
                ));
    if($payables){            
        foreach($payables as $pay){
            $paycnt++;
            $pay->Delete();
        }
    }
 _p("payable Count = ".$paycnt);
        
    
        
        
        
        
        
        
    /*$vhs = VoucherGrp::LoadAll();
    foreach ($vhs as $vhb){
        $vhb->Counter = 1;
        //$vhb->Save();
    }*/
    

?>
