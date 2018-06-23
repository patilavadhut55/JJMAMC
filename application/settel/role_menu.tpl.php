<?php
	$strPageTitle = QApplication::Translate('Settle Menu');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<div style="clear: both;margin-top: 10px;"></div>

            
<div class="form-controls">

    <?php $this->lstDept->Render(); ?>
    <div style="clear: both;"></div>
    <?php 
        if($this->lstDept->SelectedValue != NULL){
            //designations
            $designations = Role::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Grp, 3),
                                QQ::Equal(QQN::Role()->Parrent,$this->lstDept->SelectedValue)
                            )
                        );
            foreach ($designations as $designation){
    ?>
    <div class="col-md-4" style="padding: 10px;margin-top: 5px;margin-bottom: 5px; border:1px solid lightgray; border-radius: 5px;">
        <?php $this->chkRole[$designation->Idrole]->Render(); ?>
        <?php _p(delete_all_between("[", "]", $designation->Name)); ?>
    </div>    
    <?php             
            }
        }
    ?>
    <div style="clear: both;"></div>    


    <div class="form-actions">    
    <div class="pull-left" style="width: 25%"><?php $this->lstMenu->Render(); ?></div>
    <div class="pull-left"  style="width: 10%"><?php $this->txtlevel->Render(); ?></div>
    <div class="pull-left"  style="width: 25%"><?php $this->lstParrent->Render(); ?></div>
    <div class="pull-left"  style="width: 25%"><?php $this->txtPermision->Render(); ?></div>
    <div class="pull-left" style="width: 15%"><?php $this->btnAdd->Render(); ?></div>
    <div style="clear: both; height: 5px;"></div>
    </div>
</div>
                
             
                    
                
            

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>