<?php
require('../../qcubed.inc.php');
$yes = $no = $total = 0;

$statuscnt = 1;
$leds = Ledger::LoadArrayByGrp(244);
if($leds){
    foreach($leds as $led){
        $total++;
        $CurrentStatu = CurrentStatus::LoadArrayByStudent($led->Idledger);
        if($statuscnt <= 1){
            foreach($CurrentStatu as $Status){
                $statuscnt++;
            }
        }
        $adds = Address::LoadArrayByOf($led->Idledger);
        if($adds){
            foreach($adds as $add){}
            $apps = Application::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Application()->Applicant, $add->Idaddress),
                    QQ::Equal(QQN::Application()->AppliedFor, 1)
                ));
            if($apps){
                $yes++;
                foreach($apps as $app){}
            }else{
                $app = new Application();
                $setting = Settings::LoadByName("Import");
                $cnt = $setting->Option;
                $app->Code = 'IP-'.$cnt;
                $setting->Option = $cnt + 1;
                $setting->Save();
                $app->Date =  $Status->CalenderYearObject->From;
                $app->Applicant = $add->Idaddress;
                $app->DataEntryBy = $_SESSION['login'];
                $app->AppliedFor = 1;
                $app->FinalDecision = 3;
                $app->Status = 3;
                $app->Semister = $Status->Semister;
                $app->Program = $Status->RoleObject->Parrent;
                $app->CalenderYear = $Status->CalenderYear;
                $app->Save();
                $no++;
            }
        }else{
            _p('Address not found'.$led->Name);
            echo '<br>';
        }
    }
}

_p($yes.' + '.$no.' = '.$total);
echo '<br>';

?>