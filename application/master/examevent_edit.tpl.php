
<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls ">
        <?php $this->lstEvent->RenderWithName(); ?>
   
<?php  if(isset($_GET['event'])){ ?>

    <table class='datagrid'>
            <tr>
                <th width="50"></th>
                <th width="50">sr</th>
                <th>Exam</th>
                <th></th>
            </tr>
        <?php
        $exams = ExamHasEventtemplet::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::ExamHasEventtemplet()->Eventtemplet,$_GET['event']))
                       );
        $sr=1;               
        if($exams){
        foreach($exams as $exam){?>
            <tr>
                <td><?php $this->lbldelete[$exam->IdexamHasEventtemplet]->Render(); ?></td>
                <td><?php _p($sr++); ?></td>
                <td><?php _p($exam->ExamObject)?></td>
                <td></td>
            </tr>
        <?php }} ?>
            <tr>
                <td></td>
                <td></td>
                <td class="col-md-4"><?php $this->lstExam->Render(); ?></td>
                <td><?php $this->btnSave->Render(); ?></td>
            </tr>
    </table>    


<?php } ?>
  </div>
	<?php $this->RenderEnd() ;?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>