<?php
    require('../../qcubed.inc.php');
    
    $leds = Ledger::LoadArrayByGrp(244);
    $sr=1;
    foreach ($leds as $led){
        $cntapps = Application::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Application()->ApplicantObject->Of, $led->Idledger),
                    QQ::Equal(QQN::Application()->AppliedFor, 1)
                )
            );
        
        if($cntapps > 1){
            $apps = Application::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Application()->ApplicantObject->Of, $led->Idledger),
                    QQ::Equal(QQN::Application()->AppliedFor, 1)
                )
            );
            
            foreach ($apps as $app){
                
                _p($app->Code.", ");
                
                
            }
            
            _t("<br>".$sr++." ".$led->Name."<br>");
        }
    }
?>