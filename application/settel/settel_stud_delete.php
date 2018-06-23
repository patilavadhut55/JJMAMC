<?php
require('../../qcubed.inc.php');
$ledid = '';
$profilecnt =  $logincnt = $currentcnt = $ledcnt =  $loginhasrolecnt = 0;
$CurrentStatu = CurrentStatus::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, 17),
                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, 793),
                            QQ::Equal(QQN::CurrentStatus()->Semister, 1)
                            //QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, 1)    
                        )
                    );
if($CurrentStatu){
    foreach($CurrentStatu as $Current){
        $currentcnt++;
    
        $loginhasrole = LoginHasRole::LoadArrayByLoginIdlogin($Current->Student);
        if($loginhasrole){
           $loginhasrolecnt++;
           foreach($loginhasrole as $role)
           $role->Delete();
        }
        
        $ledid = $Current->Student;
        $Current->Delete();
        
        $profile  = Profile::LoadByIdprofile($Current->Student);
        if($profile){
            $profilecnt++;
            $profile->Delete();
        }
        
        $login = Login::LoadByIdlogin($Current->Student);
        if($login){
            $logincnt++;
            $login->Delete();

        }
        $studs = Ledger::LoadByIdledger($ledid);
        if($studs){
            $ledcnt++;
            $studs->Delete();
        }
    }
}
_p('Ledger = '.$ledcnt); echo '<br>';
_p('Profile = '.$profilecnt); echo '<br>';
_p('Login = '.$logincnt); echo '<br>';
_p('Loginhasrole = '.$loginhasrolecnt); echo '<br>';
_p('Current = '.$currentcnt);

/*
$CurrentStatu = LoginHasRole::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::LoginHasRole()->CalenderYear, 5),
                            QQ::Equal(QQN::LoginHasRole()->RoleIdroleObject->Parrent, 793),
                            QQ::Equal(QQN::LoginHasRole()->Semister, 7)
                            //QQ::Equal(QQN::LoginHasRole()->AdmissionStatus, 1)    
                        )
                    );
if($CurrentStatu){
    foreach($CurrentStatu as $Current){
        _p($Current->LoginIdlogin);
    }
}
*/
?>