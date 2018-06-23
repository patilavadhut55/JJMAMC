<?php
require('../../qcubed.inc.php');
    $currents = CurrentStatus::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::CurrentStatus()->RoleObject->ParrentObject->Parrent, 250) //B.Tech
                ));
    if($currents){
        foreach($currents as $status){
            $status->RollNo = $status->StudentObject->IdloginObject->Code;
            $status->Save();
            _p($status->RollNo.' - '.$status->StudentObject->IdloginObject->Code.',  ');
        }
    }
    
    /*$currents = CurrentStatus::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::CurrentStatus()->From, NULL) 
                ));
    if($currents){
        foreach($currents as $status){
            $profile = Profile::LoadByIdprofile($status->StudentObject->Idlogin);
            $status->From = $profile->AddmissionDate;
            $status->Save();
            
        }
    }*/

?>


