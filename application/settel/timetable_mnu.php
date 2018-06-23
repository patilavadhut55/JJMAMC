<?php
require('../../qcubed.inc.php');

$roles = Role::QueryArray(
            QQ::AndCondition(
                   QQ::Equal(QQN::Role()->Grp, 3),
             QQ::OrCondition(
                        QQ::Like(QQN::Role()->Name, '%hod%'),
                        QQ::Like(QQN::Role()->Name, '%principal%')
                      ))
               );
    $sr = 1;
    foreach ($roles as $role){
        $menu = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($role->Idrole, 188);
         if(!$menu){
          
                $menu = new RoleHasMenu();
                $menu->RoleIdrole = $role->Idrole;
                $menu->Level = 2;
                $menu->MenuIdmenu = 188;
                $menu->Parrent = 137;
                $menu->Seq =15;
                $menu->Permission = "CRUDE";
                _p($menu->RoleIdroleObject->Name);
                  echo '<br>';
                _p($menu->MenuIdmenuObject->Name);
                  echo '<br>';
                _p($menu->Seq);
                  echo '<br>';
                _p($menu->Permission);
                  echo '<br>';
                _p($menu->ParrentObject->Name);
                  echo '<br>';
                _p('Sr='.$sr++);
                 echo '<br>';
                 echo '<br>';
                 
                 
           
        }
    }
 

    
?>