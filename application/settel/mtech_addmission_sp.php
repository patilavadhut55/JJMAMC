
<?php
    require('../../qcubed.inc.php');
    
    $CurrentStatus = CurrentStatus::QueryArray(
                        QQ::AndCondition(
                            QQ::OrCondition(
                                QQ::Equal(QQN::CurrentStatus()->RoleObject->ParrentObject->Parrent, 250),
                                QQ::Equal(QQN::CurrentStatus()->RoleObject->ParrentObject->ParrentObject->Parrent, 250)
                            ),
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, 5),
                            QQ::Equal(QQN::CurrentStatus()->Semister, 2)
                                
                        ));
    $cnt = 0;
    if($CurrentStatus){
        foreach($CurrentStatus as $Status){
            $profile  = Profile::LoadByIdprofile($Status->Student);
            _p($Status->StudentObject->IdloginObject->Name.' ------- '.$profile->SpecificationObject);  
            $cnt++;
            
            
            /*if($profile->CourseOfAddmissionObject->Parrent == 250){
                
                //$profile->Specification = $profile->CourseOfAddmission;
                //$profile->CourseOfAddmission = $profile->CourseOfAddmissionObject->Parrent;
                //$profile->Save();
                
                
            }else{*/
                
                
                $roles = Role::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Parrent, $profile->Specification),
                                QQ::Like(QQN::Role()->Name,"%Student%")    
                            )
                        );
                
                if($roles){
                    foreach ($roles as $role){}
                    $Status->Role = $role->Idrole;
                    $Status->Save();
                    
                    $loginhasroles = LoginHasRole::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $Status->Student)
                                )
                            );
                    
                    foreach ($loginhasroles as $loginhasrole){
                        $loginhasrole->RoleIdrole = $role->Idrole;
                        $loginhasrole->Save();
                    }
                    
                }else{
                    
                }
                
                echo '<br>';
            //}

        }
    }
    _p($cnt);
?>