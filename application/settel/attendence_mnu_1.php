<?php
require('../../qcubed.inc.php');

 $roles = Role::QueryArray(
                    QQ::OrCondition(
                        QQ::Like(QQN::Role()->Name, '%professor%'),
                        QQ::Like(QQN::Role()->Name, '%hod%')
                    ));
    $sr = 1;
    $yes = $no = 0;
    foreach ($roles as $role){
       
        $menu = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($role->Idrole, 333);
         if(!$menu){
          
                $menu = new RoleHasMenu();
                $menu->RoleIdrole = $role->Idrole;
                $menu->Level = 2;
                $menu->MenuIdmenu = 333;
                $menu->Parrent = 137;
                $menu->Seq =20;
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
                $menu->Save();
                 $no++;
                 
           
        }else{
             $yes++;
        }
        
    }
   _p('Update Successfully    No='.$no.'   Yes='.$yes);

    
?>