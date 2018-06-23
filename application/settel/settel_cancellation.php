<?php
    require('../../qcubed.inc.php');
    $curs = CurrentStatus::LoadArrayByRole(385);
    $sr = 1;
    foreach ($curs as $cur){
        $profile = Profile::LoadByIdprofile($cur->Student);
        if($profile){
            
            $chkrole = Role::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Role()->Parrent, $profile->CourseOfAddmission),
                    QQ::Like(QQN::Role()->Name, "%Student %")
                )
            );
            
            if($chkrole){
                foreach ($chkrole as $role){}
                _t($sr++." ".$cur->StudentObject->IdloginObject->Code." ".$profile->CourseOfAddmissionObject." ".$role->Name."<br>");
                //$cur->Role = $role->Idrole;
                //$cur->Save();
            }
            
        }
        
    }
    
    
    
    
    
?>