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
                           QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 342)
                           ));
        if(!$chkmenus){
            foreach ($chkmenus as $chkmenu){}
                    $menus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, 389),
                                
                                    QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 342)//Student Attendence Report
                                
                            ));
                foreach ($menus as $menu){
                    
                    $role = new RoleHasMenu();
                    $role->MenuIdmenu = $menu->MenuIdmenu;
                    $role->RoleIdrole = $chkrole->Idrole;

                 
                        $role->Level = 1;
                        $role->Parrent = 137;
                        $role->Seq = 24;
                    

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
                //_p($chkmenus[0]->RoleIdroleObject);
                 echo '<br>';
               // _p($chkmenus[0]->MenuIdmenuObject);
                  echo '<br>';
                 echo '<br>';
                  echo '<br>';
                $yes++;
            }
        }
    }
    _p('Update Successfully    No='.$no.'   Yes='.$yes);

?>