<?php
require('../../qcubed.inc.php');

    $chkroles = Role::QueryArray(
                    QQ::OrCondition(
                        QQ::Like(QQN::Role()->Name, '%professor%'),
                        QQ::Like(QQN::Role()->Name, '%hod%')
                    ));
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
         
        $chkmenus = RoleHasMenu::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->Idrole),
                            QQ::OrCondition(
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 136),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 135)
                            )
                        ));
        if(!$chkmenus){
            foreach ($chkmenus as $chkmenu){}
                    $menus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, 409),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 136),
                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 135)
                                )
                            ));
                foreach ($menus as $menu){
                    
                    $role = new RoleHasMenu();
                    $role->MenuIdmenu = $menu->MenuIdmenu;
                    $role->RoleIdrole = $chkrole->Idrole;

                    if($menu->MenuIdmenu == 136){
                       $role->Level = 1;
                       $role->Seq = 3;
                    }
                    if($menu->MenuIdmenu == 135){
                        $role->Level = 2;
                        $role->Parrent = 136;
                        $role->Seq = 4;
                    }

                    $role->Permission = $menu->Permission;
                    $role->Save();

                        _p( $role->MenuIdmenuObject);
                        echo '<br>';
                        _p($role->RoleIdroleObject);
                        echo '<br>';
                        _p($role->Permission);
                        echo '<br>';
                        _p("level  :".$role->Level);
                        echo '<br>';
                        _p('Sr: '.$sr++);
                        echo '<br>';
                        echo '<br>';
                        $no++;
                }
            }else{
                _p($chkmenus[0]->RoleIdrole);
                $yes++;
            }
        }
    }
    _p('Update Successfully    No='.$no.'   Yes='.$yes);

?>