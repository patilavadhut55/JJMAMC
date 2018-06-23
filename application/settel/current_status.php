<?php
require('../../qcubed.inc.php');

$count = Ledger::CountByGrp(244);
_t($count."<br>");

$studs = LoginHasRole::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp, 244)
            )
        );
$sr = 1;
foreach ($studs as $stud){
    $chkcurrent = CurrentStatus::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->Student, $stud->LoginIdlogin),
                    QQ::Equal(QQN::CurrentStatus()->Role, $stud->RoleIdrole),
                    QQ::Equal(QQN::CurrentStatus()->Semister, $stud->Semister),
                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $stud->CalenderYear)
                )
            );
    if($chkcurrent){
        
    }else{
        $current = new CurrentStatus();
        $current->Student = $stud->LoginIdlogin;
        $current->Semister = $stud->Semister;
        $current->Role = $stud->RoleIdrole;
        $current->CalenderYear = $stud->CalenderYear;
        $current->From = $stud->From;
        $current->To = $stud->To;
        $current->Save();
    }
    //_t($sr++." -  " ." ".$stud->RoleIdroleObject->ParrentObject."-count = ".$stud->GetVirtualAttribute("team_member_count")."<br>");
}



_p("settel.........");
?>