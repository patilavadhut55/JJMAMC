<?php
require('../../qcubed.inc.php');

    $logins = Role::QueryArray(
            QQ::AndCondition(
                    QQ::NotEqual(QQN::Role()->Idrole, 309),
                    QQ::Equal(QQN::Role()->Grp, 3)));
    $sr = 1;
    foreach ($logins as $login){
         
    $menus = RoleHasMenu::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, 309),
                QQ::OrCondition(
                        QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 213),
                                QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, 215))));
           foreach ($menus as $menu){
               $role = new RoleHasMenu();
               $role->MenuIdmenu = $menu->MenuIdmenu;
               $role->RoleIdrole = $login->Idrole;
               if($menu->MenuIdmenu == 213){
                   $role->Level = 1;
                   $role->Seq = 34;
               }
               if($menu->MenuIdmenu == 215){
                   $role->Level = 2;
                   $role->Parrent = 213;
                    $role->Seq = 35;
                  
               }
               $role->Permission = $menu->Permission;
               //$role->Save();
              _p( $role->MenuIdmenuObject);
                echo '<br>';
               _p($role->RoleIdroleObject);
                echo '<br>';
               _p($role->Permission);
                echo '<br>';
                _p($role->Level);
                echo '<br>';
                _p($sr++);
              echo '<br>';
                echo '<br>';
                  echo '<br>';
          
      }
    }
 
?>