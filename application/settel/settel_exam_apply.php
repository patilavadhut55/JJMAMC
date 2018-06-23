<?php
require('../../qcubed.inc.php');

$appliedexams = AppliedExam::QueryCount(
            QQ::AndCondition(
                QQ::Equal(QQN::AppliedExam()->EventExamObject->ExamType, 1),
                QQ::Equal(QQN::AppliedExam()->ExamType, NULL),
                QQ::Equal(QQN::AppliedExam()->EventSubjectObject->YearlySubjectObject->DeptYearObject->Calender, 5)
            )
        );

_p($appliedexams);

$appliedexams = AppliedExam::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::AppliedExam()->EventExamObject->ExamType, 1),
                QQ::Equal(QQN::AppliedExam()->ExamType, NULL),
                QQ::Equal(QQN::AppliedExam()->EventSubjectObject->YearlySubjectObject->DeptYearObject->Calender, 5)    
            ),
            QQ::Clause(
                QQ::LimitInfo(5000) 
            )
        );


if(isset($_POST['submit'])){
    
    
}
?>
<form action="#" method="POST" >
    <input type="submit" value="Submit" name="submit" id="submit" />
</form>
<table border="1">
    <tr>
        <th>Sr</th>
        <th>Id Applied Exam</th>
        <th>PRN</th>
        <th>Event Subject</th>
        <th>Event Exam</th>
        <th>Subject</th>
        <th>Exam</th>
    </tr>
<?php 
    $sr = 1;
    foreach ($appliedexams as $appliedexam){
        if(isset($_POST['submit'])){
            $appliedexam->ExamType = $appliedexam->EventExamObject->ExamType;
            $appliedexam->YearlySubject = $appliedexam->EventSubjectObject->YearlySubject;
            $appliedexam->Save();
        }
?>
    <tr>
        <td><?php _p($sr++); ?></td>
        <td><?php _p($appliedexam->IdappliedExam); ?></td>
        <td><?php _p($appliedexam->StudentObject); ?></td>
        <td><?php _p($appliedexam->EventSubjectObject->YearlySubjectObject); ?></td>
        <td><?php _p($appliedexam->EventExamObject->ExamTypeObject->Code); ?></td>
        <td>&nbsp;<?php _p($appliedexam->ExamTypeObject); ?></td>
        <td>&nbsp;<?php _p($appliedexam->YearlySubjectObject); ?></td>
    </tr>
<?php } ?>
</table>
