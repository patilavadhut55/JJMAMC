<?php
require('../../qcubed.inc.php');
 
    $chkroles = LoginHasRole::QueryArray(
                    QQ::OrCondition(
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
                               QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 323)
                            ));
                if(!$menus){
                    $role = new RoleHasMenu();
                    $role->MenuIdmenu = 323;
                    $role->RoleIdrole = $chkrole->RoleIdrole;
                    $role->Level = 2;
                    $role->Parrent = 327;
                    //$role->Seq = 15;

                    $role->Permission = "CRUDE";
                   $role->Save();

//                        _p( $role->MenuIdmenuObject);
//                      echo '<br>';
//                       _p($role->RoleIdroleObject);
//                     echo '<br>';
//                       _p($role->Permission);
//                      echo '<br>';
//                      _p("level  :".$role->Level);
//                       echo '<br>';
//                       _p('Sr: '.$sr++);
//                       echo '<br>';
//                       echo '<br>';
//                       $no++;
                }
//            }else{
//                //_p($chkmenus[0]->RoleIdrole);
//                $yes++;
           }
       }
    }
  //  _p('Update Successfully    No='.$no.'   Yes='.$yes);

    

?>