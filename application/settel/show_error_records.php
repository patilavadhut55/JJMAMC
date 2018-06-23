<?php
    require('../../qcubed.inc.php');
    
    $vouchers = Voucher::QueryArray(
                QQ::AndCondition(
                    QQ::LessOrEqual(QQN::Voucher()->Date, date("Ym13235959")),
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date("Ym12000000")),
                    QQ::Equal(QQN::Voucher()->Grp, 7),
                    QQ::Equal(QQN::Voucher()->Parrent, NULL)
                )
            );
    $sr = 1;
    foreach ($vouchers as $voucher){
        $data = explode(".", $voucher->CrObject);
        $str = "";
        if(isset($data[1])){
            $str = $data[1];
            $name = explode(" ", $data[1]);
        }else{
            $str = $data[0];
            $name = explode(" ", $data[0]);
        }
        
        
        $cnt = 0;        
        foreach ($name as $nm){
           $cnt++;
        }
        
        $cnt1 = substr_count($str,$voucher->CrObject->Code);
        
        
        if($cnt1 > 1){
            if(isset($data[1])){
                $str = $data[0].".".$voucher->CrObject->Code." ".str_replace($voucher->CrObject->Code,'', $data[1]);
            }else{
                $str = $voucher->CrObject->Code." ".str_replace($voucher->CrObject->Code,'', $data[0]);
            }            
            
            $led = Ledger::LoadByIdledger($voucher->Cr);
            $led->Name = $str;
            $led->Save();
            
            _t($sr++.' ] '.$led->Name.' '.$cnt1.'<br>');            
            
        }
    }    
?>