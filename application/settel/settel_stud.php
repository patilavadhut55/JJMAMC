<?php
require('../../qcubed.inc.php');
/*$cnt = 0;
$studs = Ledger::LoadArrayByGrp(244);
if($studs){
    foreach($studs as $stud){
        $cnt++;
        $profile  = Profile::LoadByIdprofile($stud->Idledger);
        if($profile){
            $profile->Delete();
        }
        $adds = Address::LoadArrayByOf($stud->Idledger);
        if($adds){
            foreach($adds as $add){
                $add->Delete();
            }
        }
        $education = Education::LoadArrayByMember($stud->Idledger);
        if($education){
            foreach($education as $edu){
                $marks = Marks::LoadArrayByEducation($edu->Ideducation);
                if($marks){
                    foreach($marks as $mark){
                        $mark->Delete();
                    }
                }
                $edu->Delete();
            }
        }
        $eduds = EducationDetails::LoadArrayByStudent($stud->Idledger);
        if($eduds){
            foreach($eduds as $edud){
                $edud->Delete();
            }
        }
        $memdocs = MemberDoc::LoadArrayByMember($stud->Idledger);
        if($memdocs){
            foreach($memdocs as $memdoc){
                $memdoc->Delete();
            }
        }
        $login = Login::LoadByIdlogin($stud->Idledger);
        if($login){
            $loginhasrole = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
            if($loginhasrole){
                foreach($loginhasrole as $role){
                    $role->Delete();
                }
            }
            $CurrentStatu = CurrentStatus::LoadArrayByStudent($login->Idlogin);
            if($CurrentStatu){
                foreach($CurrentStatu as $Current){
                    $Current->Delete();
                }
            }
            $login->Delete();
        }
        
        
        $stud->Delete();
    }
}*/

$profilecnt =  $logincnt = $currentcnt = $ledcnt =  $loginhasrolecnt = 0;
$studs = Ledger::LoadArrayByGrp(244);
if($studs){
    foreach($studs as $stud){
        $ledcnt++;
        $profile  = Profile::LoadByIdprofile($stud->Idledger);
        if($profile){
            $profilecnt++;
        }
        $login = Login::LoadByIdlogin($stud->Idledger);
        if($login){
            $logincnt++;
            $loginhasrole = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
            if($loginhasrole){
               $loginhasrolecnt++;
            }
            $CurrentStatu = CurrentStatus::LoadArrayByStudent($login->Idlogin);
            if($CurrentStatu){
                $currentcnt++;
            }
        }
    }
}
_p('Ledger = '.$ledcnt); echo '<br>';
_p('Profile = '.$profilecnt); echo '<br>';
_p('Login = '.$logincnt); echo '<br>';
_p('Loginhasrole = '.$loginhasrolecnt); echo '<br>';
_p('Current = '.$currentcnt);

?>