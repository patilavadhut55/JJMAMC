<?php
	$strPageTitle = QApplication::Translate('Fill Roll No');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/jquery.dialogbox.css">       

<div class="form-controls">
    <div class="col-md-2"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstProgram->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstTeachDept->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstSpecialization->RenderWithName();?></div>
    <div class="col-md-3"><?php $this->lstSem->Render(); ?></div>
    <div class="col-md-1"><?php $this->btnReport->Render(); ?></div>
    <div style="clear: both; margin-bottom: 10px;"></div>
    <?php 
        if($this->lstCal->SelectedValue  && $this->lstSem->SelectedValue && $this->lstTeachDept->SelectedValue){
            $Sr = 1;
            if(isset($_GET['special'])){
                $students = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstCal->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['special']),
                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstSem->SelectedValue)
                    ),
                    QQ::GroupBy(QQN::CurrentStatus()->Student)
                    );
            }else{
                $students = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstCal->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstTeachDept->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstSem->SelectedValue)
                    ),
                    QQ::GroupBy(QQN::CurrentStatus()->Student)
                    );
            }
            
            
            if($students){
    ?>
        <script src="dragtable.js"></script>
        <table border="1" class="datagrid col-md-12 draggable sortable">
            <tr>
                <th><div align="center">Sr.</div></th>  
                <th><div align="center">PRN No</div></th>
                <th><div align="center">Name</div></th>
                <th><div align="center">Roll No</div></th>
            </tr>
                <?php                   
                    foreach ($students as $student){
                        if($student->StudentObject->IdloginObject->Cancel == 0 || $student->StudentObject->IdloginObject->Cancel == NULL){
                ?>
                <tr>
                    <td><div align="center"><?php _p($Sr++); ?></div></td>
                    <td><div align="center"><?php _p($student->StudentObject->IdloginObject->Code); ?></div></td>
                    <td><?php _p(GetFullNameNew($student->StudentObject->IdloginObject->Name,$student->StudentObject->IdloginObject->Code));?></td>      
                    <td><div align="center"><?php if($student->RoleObject->ParrentObject->Parrent != 249){ $this->txtRollNo[$student->IdcurrentStatus]->Render(); }else{ _p($student->RollNo); } ?></div></td>    
                </tr>
                <?php }} ?>
        </table>
        
        <div class="clearfix"></div>
        <div class="pull-right">
            <?php 
            if($student->RoleObject->ParrentObject->Parrent != 249){
                $this->btnSave->Render(); 
            }
            ?>
        </div>
        <div class="clearfix"></div>
    <?php }} ?>
</div>

<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
