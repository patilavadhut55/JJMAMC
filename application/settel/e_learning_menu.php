<?php
require('../../qcubed.inc.php');
// require('../../qcubed.inc.php');

//    $chkroles = LoginHasRole::QueryArray(
//                    QQ::OrCondition(
//                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp, 34)
//                    ));
//    $sr = 1;
//    $yes = $no = 0;
//    if($chkroles){
//        foreach ($chkroles as $chkrole){
//        if($chkrole){
//                    $menus = RoleHasMenu::QueryArray(
//                            QQ::AndCondition(
//                               QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
//                               QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 350)
//                            ));
//                if(!$menus){
//                    $role = new RoleHasMenu();
//                    $role->MenuIdmenu = 350;
//                    $role->RoleIdrole = $chkrole->RoleIdrole;
//                    $role->Level = 1;
//                    //$role->MenuIdmenuObject->Position = 4;
//                    //$role->Seq = 15;
//
//                    $role->Permission = "CRUDE";
//                    $role->Save();

//                        _p( $role->MenuIdmenuObject);
//                        echo '<br>';
//                        _p($role->RoleIdroleObject);
//                        echo '<br>';
//                        _p($role->Permission);
//                        echo '<br>';
//                        _p("level  :".$role->Level);
//                        echo '<br>';
//                        _p('Sr: '.$sr++);
//                        echo '<br>';
//                        echo '<br>';
//                        $no++;
               //}
//            }else{
//                //_p($chkmenus[0]->RoleIdrole);
//                $yes++;
           //}
      //}
    //}
//    _p('Update Successfully    No='.$no.'   Yes='.$yes);

    











/* applying menu to Student role   */
/*
    $chkroles = LoginHasRole::QueryArray(
                    QQ::AndCondition(
                        QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, "%Student %"),
                        QQ::NotEqual(QQN::LoginHasRole()->RoleIdroleObject->Idrole, 247),
                        QQ::NotEqual(QQN::LoginHasRole()->RoleIdroleObject->Idrole, 248)
                    ),QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin));
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
            $chkparrentmenus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                                QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 360),
                                QQ::Equal(QQN::RoleHasMenu()->Parrent, NULL)
                            ));
            if(!$chkparrentmenus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 360;
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
                            QQ::Equal(QQN::RoleHasMenu()->Parrent, 360),    
                            QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 351)
                        ));
            if(!$menus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 351;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = 360;
                $role->Level = 2;
                $role->Permission = "CRUDE";
                $role->Save();

                _p('No');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }else{
//                foreach ($menus as $menu){
//                    _p($menu->MenuIdmenuObject->Name);
//                    $menu->Delete();
//                }
                _p('Yes');
                _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                echo '<br>';
            }
        }
    }
    */
    
    
/* applying menu to Professor role   */

    $chkroles = LoginHasRole::QueryArray(
                    QQ::AndCondition(
                        QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, "%Professor%")
                    ),QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin));
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
            $chkparrentmenus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                                QQ::Equal(QQN::RoleHasMenu()->Level, 1),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 360),
                                QQ::Equal(QQN::RoleHasMenu()->Parrent, NULL)
                            ));
            if(!$chkparrentmenus){
                $role = new RoleHasMenu();
                $role->MenuIdmenu = 360;
                $role->RoleIdrole = $chkrole->RoleIdrole;
                $role->Parrent = NULL;
                $role->Level = 1;
                $role->Permission = "CRUDE";
                $role->Save();
            }
            
            $profmenus = array(347,348,350);
            foreach ($profmenus as $profmenu){
            
                $menus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                                QQ::Equal(QQN::RoleHasMenu()->Level, 2),
                                QQ::Equal(QQN::RoleHasMenu()->Parrent, 360),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, $profmenu)
                                
                            ));
                if(!$menus){

                        $role = new RoleHasMenu();
                        $role->MenuIdmenu = $profmenu;
                        $role->RoleIdrole = $chkrole->RoleIdrole;
                        $role->Parrent = 360;
                        $role->Level = 2;
                        $role->Permission = "CRUDE";
                        $role->Save();

                        _p('No');
                        _p($sr++.' - '. $chkrole->RoleIdroleObject->Name.' '. $role->MenuIdmenuObject->Name);
                        echo '<br>';

                }else{
                    _p('Yes');
                    _p($sr++.' - '. $chkrole->RoleIdroleObject->Name);
                    echo '<br>';
                }
            }
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//    $chkroles = LoginHasRole::QueryArray(
//                    QQ::AndCondition(
//                        QQ::Equal(QQN::LoginHasRole()->RoleIdrole,409)
//                       // QQ::Like(QQN::Role()->Name, '%hod%')
//                    ));
//    $sr = 1;
//    $yes = $no = 0;
//    if($chkroles){
//        foreach ($chkroles as $chkrole){
//         
//        $chkmenus = RoleHasMenu::QueryArray(
//                        QQ::AndCondition(
//                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
//                            QQ::OrCondition(
//                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 323),
//                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 324)
//                            )
//                        ));
//        if(!$chkmenus){
//            foreach ($chkmenus as $chkmenu){}
//                    $menus = RoleHasMenu::QueryArray(
//                            QQ::AndCondition(
//                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
//                                QQ::OrCondition(
//                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 323),
//                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 324)
//                                )
//                            ));
//                  if(!$menus){     
//                foreach ($menus as $menu){
//                    
//                    $role = new RoleHasMenu();
//                   // $role->MenuIdmenu = $menu->MenuIdmenu;
//                    $role->RoleIdrole = $chkrole->Idrole;
//
//                    if($menu->MenuIdmenu == 323){
//                       $role->Level = 1;
//                       $role->Seq = 13;
//                    }
//                    if($menu->MenuIdmenu == 324){
//                        $role->Level = 2;
//                        $role->Parrent = 323;
//                        $role->Seq = 2;
//                    }
//
//                    $role->Permission = $menu->Permission;
//                   // $role->Save();
//
//                        _p( $role->MenuIdmenuObject);
//                        echo '<br>';
//                        _p($role->RoleIdroleObject);
//                        echo '<br>';
//                        _p($role->Permission);
//                        echo '<br>';
//                        _p("level  :".$role->Level);
//                        echo '<br>';
//                        _p('Sr: '.$sr++);
//                        echo '<br>';
//                        echo '<br>';
//                        $no++;
//                }
////            }else{
////                _p($chkmenus[0]->RoleIdrole); 
////                $yes++;
//          }
      // }
  //  }
    //_p('Update Successfully    No='.$no.'   Yes='.$yes);

?>