<?php

require('../../qcubed.inc.php');

$ledid = '';
$currentcnt = 0;
$CurrentStatus = CurrentStatus::QueryArray(
                QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, 14),
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, 793),
                        QQ::Equal(QQN::CurrentStatus()->Semister, 10),
                        QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, 3)
                       
        ));

if ($CurrentStatus) {

    foreach ($CurrentStatus as $Current) {
        $currentcnt++;
        $ledid = $Current->Student;
        $Current->Delete();
    }
}
_p('Current = ' . $currentcnt);
?>