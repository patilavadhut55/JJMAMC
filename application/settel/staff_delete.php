<?php
require('../../qcubed.inc.php');
//loginhasrole
$LoginRolls = Role::LoadByIdrole($_SESSION['role']);
              $teachers = LoginHasRole::QueryArray(
                        QQ::AndCondition(
                        QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                        QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, '%Professor%'),
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp,34)        
                    ));
                  foreach($teachers as $staff){
$ledgers = Ledger::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::Ledger()->Idledger, $staff->LoginIdlogin),
                QQ::Equal(QQN::Ledger()->Grp, 34),
                QQ::NotEqual(QQN::Ledger()->Idledger, 1)
            )
        );
foreach ($ledgers as $ledger){
    _t($ledger->Name."<br>");
    $login = Login::LoadByIdlogin($ledger->Idledger);
    if($login){
        $lhrs = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
        if($lhrs){
            foreach($lhrs as $lhr){
              $lhr->Delete();
            }
        }
        
        //subject tought
        $subtaughts = SubjectTought::LoadArrayByLogin($login->Idlogin);
        foreach ($subtaughts as $subtaught){
            $subtaught->Delete();
        }
        $login->Delete();
    }
    
    $profile = Profile::LoadByIdprofile($ledger->Idledger);
    if($profile){
        $qulisubs = ProfileHasQualifiedsubject::LoadArrayByProfile($ledger->Idledger);
        foreach ($qulisubs as $qulisub){
           $qulisub->Delete();
        }
        $profile->Delete();
    }
    $salary = Salary::LoadArrayByStaff($ledger->Idledger);
    if($salary){
        foreach($salary as $sal){
            $sal->Delete();
        }
    }
    //question papaer
    $exampapaers = Exampaper::LoadArrayBySetBy($ledger->Idledger);
    foreach ($exampapaers as $exampapaer){
        $exampapaer->Delete();
    }
    
    
    $address = Address::LoadArrayByOf($ledger->Idledger);
    if($address){
        foreach($address as $add){
            $add->Delete();
        }
    }
    $ledger->Delete();
}

        }
        QApplication::DisplayAlert('Delete Successfully');
?>
