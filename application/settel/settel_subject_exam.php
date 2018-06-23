<?php
require('../../qcubed.inc.php');

/*
$deptyears = DeptYearEvents::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::DeptYearEvents()->CalenderYear, 5),
                QQ::Equal(QQN::DeptYearEvents()->ExamType, 3),
                QQ::Equal(QQN::DeptYearEvents()->Parrent, NULL)
            )
        );

foreach ($deptyears as $deptyear){
    $deptyear->Event = 1746;
    $deptyear->Save();
}
*/

$appliedexams = YearlySubject::QueryCount(
            QQ::AndCondition(
                QQ::OrCondition(
                    QQ::Equal(QQN::YearlySubject()->DeptYearObject->DepartmentObject->Parrent,250),
                    QQ::Equal(QQN::YearlySubject()->DeptYearObject->DepartmentObject->ParrentObject->Parrent,250)
                ),
                QQ::Equal(QQN::YearlySubject()->DeptYearObject->Calender, 5)                    
            )
        );

_p($appliedexams);

$appliedexams = YearlySubject::QueryArray(
            QQ::AndCondition(
                QQ::OrCondition(
                    QQ::Equal(QQN::YearlySubject()->DeptYearObject->DepartmentObject->Parrent,250),
                    QQ::Equal(QQN::YearlySubject()->DeptYearObject->DepartmentObject->ParrentObject->Parrent,250)
                ),
                QQ::Equal(QQN::YearlySubject()->DeptYearObject->Calender, 5)                    
            )
        );
?>
<table border="1">
    <tr>
        <th>Sr</th>
        <th>ID</th>
        <th>Code</th>
        <th>Event Subject</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
<?php 
    $sr = 1;
    foreach ($appliedexams as $appliedexam){
?>
    <tr>
        <td><?php _p($sr++); ?></td>
        <td><?php _p($appliedexam->IdyearlySubject) ?></td>
        <td><?php _p($appliedexam->Code); ?></td>
        <td><?php _p($appliedexam->SubjectObject); ?></td>
        <?php 
            $exams = DeptYearExam::LoadArrayByYearlySubject($appliedexam->IdyearlySubject);
            foreach ($exams as $exam){
                $chkeventsub = DeptYearEvents::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DeptYearEvents()->YearlySubject, $appliedexam->IdyearlySubject),
                                QQ::Equal(QQN::DeptYearEvents()->ExamType, $exam->Exam)
                            )
                        );
                
                foreach ($chkeventsub as $sub){}
                
                $counts = AppliedExam::QueryCount(
                            QQ::AndCondition(
                                QQ::Equal(QQN::AppliedExam()->EventSubject, $sub->IddeptYearEvents)
                            )
                        );
                $studapplieds = "";
                $studappliedscnt = 0;
                if($counts == 0 && $exam->Exam == 3){
                    
                    $studapplieds = AppliedExam::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::AppliedExam()->EventSubjectObject->YearlySubject, $appliedexam->IdyearlySubject),
                                QQ::Equal(QQN::AppliedExam()->EventExamObject->ExamType, 1)
                            )
                        );
                    
                    foreach ($studapplieds as $studapplied){
                      
                        $deptyears = DeptYearEvents::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DeptYearEvents()->CalenderYear, 5),
                                QQ::Equal(QQN::DeptYearEvents()->ExamType, 3),
                                QQ::Equal(QQN::DeptYearEvents()->Parrent, NULL),
                                QQ::Equal(QQN::DeptYearEvents()->DeptYear, $studapplied->EventExamObject->DeptYear)    
                            )
                        );
                        
                        if($deptyears){
                            foreach ($deptyears as $deptyear){}
                            $studappliedscnt++;
                            
                            //new entry in applied exam
                            /*
                            $stud = new AppliedExam();
                            $stud->Student = $studapplied->Student;
                            $stud->StudRole = $studapplied->StudRole;
                            $stud->EventExam = $deptyear->IddeptYearEvents;
                            $stud->EventSubject = $sub->IddeptYearEvents;
                            $stud->ExamType = 3;
                            $stud->YearlySubject = $appliedexam->IdyearlySubject;
                            $stud->LockExam = 0;
                            $stud->PrintDraft = 0;
                            $stud->Save();
                            */
                        }
                    }
                     
                     
                }
        ?>
        <td style="<?php if($chkeventsub) _p('background-color:green;'); if($counts == 0 && $exam->Exam == 3) _p('color:red;');  ?>" >
            <?php 
                /*if($sub->Event == 1747){    
                    $sub->Event = 1746;
                    $sub->Save();
                }*/
                
                if($studappliedscnt)
                    _t($studappliedscnt."<br>");
                
                _t($counts."<br>");
                _t($sub->Event."<br>");
                _t($sub->EventObject."<br>");
                _t($sub->IddeptYearEvents."<br>");
                _t($exam->Exam."<br>"); 
                _p($exam->ExamObject->Code); 
            ?>
        </td>
        <?php } ?>
    </tr>
<?php } ?>
</table>
