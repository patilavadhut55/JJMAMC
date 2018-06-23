<?php
	// This is the HTML template include file (.tpl.php) for the report_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Tree');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

        <?php 
            if(isset($_GET['role'])){
                $roles = Role::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Role()->Parrent, $_GET['role'])                            
                    ),
                    QQ::Clause(
                        QQ::OrderBy(QQN::Role()->Code,TRUE)                            
                        )
                    );
            }else{
                $roles = Role::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Role()->Parrent, NULL),
                    QQ::NotEqual(QQN::Role()->Idrole, 10)                            
                    ),
                    QQ::Clause(
                        QQ::OrderBy(QQN::Role()->Code,TRUE)
                        )
                    );
            }
                
            foreach ($roles as $role){
                if($role->Grp == 3){
        ?>
            <div><a href=""> <?php _p($role->Name."GRP - ".$role->GrpObject); ?></a></div>
                <?php } ?>
        <?php } ?>
        <?php 
            foreach ($roles as $role){
                if($role->Grp == 1 || $role->Grp == 2){
        ?>
            <div style="float: left;padding: 5px;margin: 5px;border: 1px solid lightgrey;"><a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/master/tree.php?role=<?php _p($role->Idrole); ?>"> <?php _p($role->Name); ?></a></div>
            
        <?php }} ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>