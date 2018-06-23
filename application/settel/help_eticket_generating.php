<?php
require('../../qcubed.inc.php');

    $chkroles = LoginHasRole::QueryArray(
                    QQ::OrCondition(
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp, 244),
                        QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp, 34)
  
                    ));
    $sr = 1;
    $yes = $no = 0;
    if($chkroles){
        foreach ($chkroles as $chkrole){
        if($chkrole){
                    $menus = RoleHasMenu::QueryArray(
                            QQ::AndCondition(
                               QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $chkrole->RoleIdrole),
                               QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 302)
                           
           

                            ));
                if(!$menus){
                    $role = new RoleHasMenu();
                    $role->MenuIdmenu = 302;
                    $role->RoleIdrole = $chkrole->RoleIdrole;
                    $role->Parrent = 297;
                    $role->Level = 1;
                    $role->Seq = 3;

                    $role->Permission = "CRUDE";
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
                //_p($chkmenus[0]->RoleIdrole);
                $yes++;
            }
        }
    }
    _p('Update Successfully    No='.$no.'   Yes='.$yes);

?>