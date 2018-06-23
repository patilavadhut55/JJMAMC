<?php

require('../../qcubed.inc.php');

    $chkroles = Role::QueryArray(
                    QQ::AndCondition(
                        QQ::NotLike(QQN::Role()->Name, '%DX-Admin%'),
                        QQ::NotLike(QQN::Role()->Name, '%Dx Systems%'),
                        QQ::NotLike(QQN::Role()->Name, '%Student%')
                    ));
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
         
        $chkmenus = RoleHasMenu::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->Idrole),
                            QQ::OrCondition(
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 205),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 273)
                            )
                        ));
        if(!$chkmenus){
            foreach ($chkmenus as $chkmenu){}
                    $menus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, 309),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 205),
                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 273)
                                )
                            ));
                foreach ($menus as $menu){
                    
                    $role = new RoleHasMenu();
                    $role->MenuIdmenu = $menu->MenuIdmenu;
                    $role->RoleIdrole = $chkrole->Idrole;

                    if($menu->MenuIdmenu == 205){
                       $role->Level = 1;
                       $role->Seq = 43;
                    }
                    if($menu->MenuIdmenu == 273){
                        $role->Level = 2;
                        $role->Parrent = 205;
                        $role->Seq = 44;
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