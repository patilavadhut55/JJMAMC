<?php
$strPageTitle = QApplication::Translate('yearsubject');
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls" style="height:70px;">
    <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstCourse->Render(); ?></div>
    <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstYear->Render(); ?></div>
    <div class="pull-left" style="margin-left: 5px; width: 20%"><?php $this->btnSearch->Render(); ?></div>
</div>  

<?php if (isset($_GET['dept'])&& isset($_GET['year'])) { ?>
    <div class="form-controls">
        <table class="datagrid" border="1">
            <tr>
             
                <th><div align="center">Sr</div></th>
                <th><div align="center">subject</div></th> 
               
            </tr> 
            <?php
              $years = YearSubject::QueryArray(
                      QQ::AndCondition(
                               QQ::Equal(QQN::YearSubject()->Course, $_GET['dept']),
                               QQ::Equal(QQN::YearSubject()->Semester, $_GET['year'])
                            ));
                    
                $sr = 1;
                if($years){
                foreach ($years as $year) {
              
            ?>
            <tr>
                <td width="1%"><?php _p($sr++); ?></td>
                <td width="50%"><div align="center"><?php _p($year->SubjectObject->Name); ?></td>
                 
            </tr>
<?php }} ?>
        </table> 
        <div class="form-controls" style="height: 50px; width:80%;margin-left:90px;">
           
            <div class= "col-md-6" ><?php $this->lstSubject->Render(); ?></div>
            <div class=" col-md-1"><?php $this->btnAdd->Render(); ?></div>
        </div>
    </div>
<?php } ?>
                    
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>