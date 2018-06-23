<?php
    require('../../qcubed.inc.php');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<div class="form-controls" >
    <?php
        $roles = Role::LoadArrayByGrp(1, QQ::OrderBy(QQN::Role()->Code));
        foreach ($roles as $role){
    ?>
    <div class="form-controls">
        <?php _p($role->Name); ?>
        <br/>Designations
        <?php
        $desegs = Role::QueryArray(
                QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $role->Idrole),
                        QQ::Equal(QQN::Role()->Grp, 3)
                        )
                );
        
                foreach ($desegs as $deseg){
        ?>
        <div class="form-controls">
        <?php _p($deseg->Name); ?>
        </div>
        <?php
                }
        ?>
        <div class="clear">Departments</div>
        <?php
        $subdepts = Role::QueryArray(
                QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $role->Idrole)
                        )
                );
        
                foreach ($subdepts as $subdept){
        ?>
        <div class="form-controls pull-left" style="clear: none; width: 240px; margin: 5px;">
        <?php _p($subdept->Name); ?>
        <?php
        $subdeptdesegs = Role::QueryArray(
                QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $subdept->Idrole),
                        QQ::Equal(QQN::Role()->Grp, 3)
                        )
                );
        
                foreach ($subdeptdesegs as $subdeptdeseg){
        ?>
        <div class="form-controls">
        <?php _p($subdeptdeseg->Name); ?>
        </div>
        <?php
                }
        ?>
        </div>
        <?php
                }
        ?>
        <div class="clear"></div>
    </div>
    <?php
        }
    ?>
</div>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>