<?php
require('../../qcubed.inc.php');


/* applying Leave menu to Regular-NonTeaching office staff   */
/*
    $chkroles = LoginHasRole::QueryArray(
                    QQ::AndCondition(
                        QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->LeaveStaffGroup, 3) //Regular-NonTeaching office
                    ),QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin));

    //$chkroles = Role::LoadArrayByParrent(233);
    
    $sr = 1;
    $yes = $no = 0;
    
    if($chkroles){
        foreach ($chkroles as $chkrole){
            //$profmenus = array(323,327,329);
            $chkparrentmenus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                                QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 327), //Leave  323- Leave Balance
                                QQ::Equal(QQN::RoleHasMenu()->Parrent, NULL)
                            ));
            if(!$chkparrentmenus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 327;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = NULL;
                $role->Level = 1;
                $role->Permission = "CRUDE";
                $role->Save();
            }
            
            $menus = RoleHasMenu::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                            QQ::Equal(QQN::RoleHasMenu()->Level, 2),
                            QQ::Equal(QQN::RoleHasMenu()->Parrent, 327),
                            QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 328) //Leave Application[F]
                        ));
//                        foreach ($menus as $menu){
//                            
//                            if($menu->MenuIdmenu == 370){
//                                _p($menu->MenuIdmenuObject->Name);
//                                echo '<br>';
//                                $menu->Delete();
//                            }
//                            
//                        }
            
            
            
            if(!$menus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 328;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = 327;
                $role->Level = 2;
                $role->Permission = "CRUDE";
                $role->Save();
               
                _p('No');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }else{
                foreach ($menus as $menu){
                    _p($menu->MenuIdmenuObject->Name);
                    //$menu->Delete();
                }
                
                _p('Yes');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }
        }
    }
    */
    /* Regular Teaching  */
    
    $chkroles = LoginHasRole::QueryArray(
                    QQ::AndCondition(
                        QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->LeaveStaffGroup, 2) //Regular-Teaching 
                    ),QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin));
            
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
            $chkparrentmenus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                                QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 327), //Leave
                                QQ::Equal(QQN::RoleHasMenu()->Parrent, NULL)
                            ));
            if(!$chkparrentmenus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 327;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = NULL;
                $role->Level = 1;
                $role->Permission = "CRUDE";
                //$role->Save();
            }
            
            $menus = RoleHasMenu::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                            QQ::Equal(QQN::RoleHasMenu()->Level, 2),
                            QQ::Equal(QQN::RoleHasMenu()->Parrent, 327),
                            QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 367) //Leave Application[E]
                        ));
            if(!$menus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 367;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = 327;
                $role->Level = 2;
                $role->Permission = "CRUDE";
                //$role->Save();
                
                _p('No');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }else{
                foreach ($menus as $menu){
                    _p($menu->MenuIdmenuObject->Name);
                    $menu->Delete();
                }
                _p('Yes');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }
        }
    }
    
    
    /* Contract Basis */
    /*
    $chkroles = LoginHasRole::QueryArray(
                    QQ::AndCondition(
                        QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->LeaveStaffGroup, 1) //Contract Basis
                    ),QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin));
            
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
            $chkparrentmenus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                                QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 327), //Leave
                                QQ::Equal(QQN::RoleHasMenu()->Parrent, NULL)
                            ));
            if(!$chkparrentmenus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 327;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = NULL;
                $role->Level = 1;
                $role->Permission = "CRUDE";
                //$role->Save();
            }
            
            $menus = RoleHasMenu::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                            QQ::Equal(QQN::RoleHasMenu()->Level, 2),
                            QQ::Equal(QQN::RoleHasMenu()->Parrent, 327),
                            QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 368) //Leave Application[H]
                        ));
            if(!$menus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 368;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = 327;
                $role->Level = 2;
                $role->Permission = "CRUDE";
                //$role->Save();
                
                _p('No');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }else{
                foreach ($menus as $menu){
                    _p($menu->MenuIdmenuObject->Name);
                    $menu->Delete();
                }
                _p('Yes');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }
        }
    }
    */

    
?>
