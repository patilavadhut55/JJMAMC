<?php
require('../../qcubed.inc.php');
//$chkroles = Role::QueryArray(
//            QQ::AndCondition(
//                QQ::Equal(QQN::Role()->Grp, 3),
//            
//                     QQ::OrCondition(
//                        QQ::Like(QQN::Role()->Idrole, $_SESSION['role']),
//                        QQ::Like(QQN::Role()->Name, '%hod%')
//                    ) ));
//           if($chkroles){
//            foreach ($chkroles as $role){
//               $menu = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($role->Idrole, 290);
//                if(!$menu){
//                   $menu = new RoleHasMenu();
//                   $menu->RoleIdrole = $role->Idrole;
//                   $menu->MenuIdmenu = 290;
//                   $menu->Seq =1;
//                   $menu->Permission = "CRUDE";
//                   $menu->Parrent = 213;
//                   $menu->Level = 2;
//                   $menu->Save();
//                   _p(  $menu->RoleIdrole); 
//                    echo '<br>';
//                   _p(   $menu->MenuIdmenu);
//                    echo '<br>';
//                   _p(    $menu->Seq);
//                    echo '<br>';
//                   _p(  $menu->Parrent);
//                    echo '<br>';
//                     _p(  $menu->Permission);
//                    echo '<br>';
//                     _p(  $menu->Level);
//                      echo '<br>';
//                       echo '<br>';
//               }        
//            }
//           }
?>

