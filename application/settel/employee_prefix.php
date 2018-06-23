<?php

    require('../../qcubed.inc.php');
    
     $ledger = Ledger::QueryArray(
               QQ::AndCondition(
                       QQ::Equal(QQN::Ledger()->Grp,34),
                       QQ::Like(QQN::Ledger()->Name,'%N/A%')));
     foreach ($ledger as $led){
        $data = explode('N/A', $led->Name);
        _t($data[1]."<br>");
        $led->Name = $data[1];
        $led->Save();
        _t('save');
     }
    
    
    ?>
