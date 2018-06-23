<?php
require('../../qcubed.inc.php');

    $roles = Role::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::Role()->Grp, 5),
                    QQ::Equal(QQN::Role()->ParrentObject->Parrent, 250)//for mtech
                )
            );
    
    $depts = array();
    foreach ($roles as $role){
        $depts[] = $role->Idrole;    
    }
    
    $roles = Role::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::Role()->Grp, 5),
                    QQ::Equal(QQN::Role()->Parrent, 250)//for mtech
                )
            );
    
    foreach ($roles as $role){
        $chkrole = Role::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::Role()->Grp, 5),
                    QQ::Equal(QQN::Role()->Parrent, $role->Idrole)//for mtech
                )
            );
        if(!$chkrole){
            $depts[] = $role->Idrole;
        }
    }
    
    //just for display
    foreach ($depts as $key=>$dept){
        _t($key."<br>");
    }
    //-----------------

    
?>
