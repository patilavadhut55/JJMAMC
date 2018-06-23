<?php
	$strPageTitle = QApplication::Translate('Bulk Readmission') ;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/jquery.dialogbox.css">       
<!--h1>Bulk Readmission</h1-->
<div class="form-controls">
    <div class="col-md-3"><strong>Select Calender Year</strong></div>
    <div class="col-md-3"><strong>Select Program</strong></div>
    <div class="col-md-3"><strong>Select Year</strong></div>
    <div style="clear: both;"></div>
    <div class="col-md-3"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstProgram->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstSem->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstBatch->Render(); ?></div>
    <div style="clear: both;"></div>
    <br>
    
    <div align="right" ><?php $this->btnReport->Render(); ?></div>
    <div style="clear: both; height: 25px;"></div>
    <?php if($this->lstCal->SelectedValue && $this->lstSem->SelectedValue && $this->lstProgram->SelectedValue){ ?>
        <script src="dragtable.js"></script>
        <table border="1" class="datagrid col-md-12 draggable sortable">
            <tr>
                <th><div align="center">Sr.</div></th>  
                <th><div align="center">PRN No</div></th>
                <th><div align="center">Name</div></th>
                <th><div align="center">Gender</div></th>
                <th><div align="center">Contact</div></th>
                <th><div align="center">Concession Category</div></th>
                <th>Select All<?php $this->chkSelectAll->Render();?></th>
            </tr>
                <?php
                    if(isset($_GET['cal'])){
                    $Sr = 1;
                    $students = CurrentStatus::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['dept']),
                                            QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSem->SelectedValue),
                                            QQ::Equal(QQN::CurrentStatus()->AdmissionStatus,$this->lstBatch->SelectedValue)
                                        ),QQ::OrderBy(QQN::CurrentStatus()->Student));
                    
                    if($students){
                        foreach ($students as $student){                

                           $profile = Profile::LoadByIdprofile($student->Student);
                           //$address = Address::LoadArrayByOf($student->Student);
                           //foreach ($address as $addres){
                           if($profile){
                ?>
                <tr>
                    <td><?php /*  $this->lbldel[$student->Student]->Render();*/ _p('  '.$Sr++); ?></td>
                    <td><?php _p($student->StudentObject->IdloginObject->Code); ?></td>
                    <td><?php $name = explode(' ', $student->StudentObject->IdloginObject->Name);
                        _p(GetFullNameNew($student->StudentObject->IdloginObject->Name, $student->StudentObject->IdloginObject->Code));
                    ?></td>
                    <td><?php if($profile->Gender) _p($profile->GenderObject); ?></td>
                    <td><?php _p($profile->Contact1.",".$profile->Contact2);?></td>  
                    <td><?php if($profile) _p($profile->FeeConcessionObject);?></td>      
                    <td>
                        <div>
                            <div style="float: left; margin-right: 15px;"><?php $this->chkSelect[$student->IdcurrentStatus]->Render(); ?></div>
                            <div style="float: left;"><?php $this->lbldel[$student->IdcurrentStatus]->Render();?></div>
                        </div>
                    </td>
                </tr>
                        <?php }}}
                    }    
                ?>
        </table>
        
        <div class="clearfix"></div>
        <?php  if($students){ ?>
        <div class="form-actions">
            <div class="col-md-3"><?php $this->lstCalup->Render(); ?></div>
            <div class="col-md-3"><?php $this->lstProgramup->Render(); ?></div>
            <div class="col-md-3"><?php $this->lstSemup->Render(); ?></div>
            <div class="col-md-3"><?php $this->lstBatchup->Render(); ?></div>
            <div class="clearfix"></div>
            <br>
            <div class="col-md-3 pull-right"><?php $this->btnUpgrade->Render();?></div>
            <div class="clearfix"></div>
        </div>
    <?php }} ?>
</div>

<script src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/jquery-2.2.3.min.js"></script>
<script src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/jquery.dialogBox.js"></script>
<script type="text/javascript" >
	function showdialog(id){  
            //alert('hello');
            //load external page or url dialogBox
            $('#iframe-dialogBox').dialogBox({
                    hasClose: true,
                    hasMask: true,                    
                    effect: 'flip-vertical',
                    title: ' ',            
                    content: '../summary.php?id='+id+'&view=1&edit=1',
            });
        }
</script>    

<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
<script type='text/javascript'>
 jQuery.noConflict();
</script>