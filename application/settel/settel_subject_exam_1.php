<?php
    require('../../qcubed.inc.php');
    
    $appliedexams = AppliedExam::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::AppliedExam()->YearlySubject, NULL)
                )
            );
    
    _p($appliedexams);
    /*
    $appliedexams = AppliedExam::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::AppliedExam()->YearlySubject, NULL)
                )
            );
    
    foreach ($appliedexams as $appliedexam){
        if($appliedexam->EventSubject)
            $appliedexam->YearlySubject = $appliedexam->EventSubjectObject->YearlySubject;
        if($appliedexam->EventExam)
            $appliedexam->ExamType = $appliedexam->EventExamObject->ExamType;
        $appliedexam->Save();
        
    }*/
    
    
    
?>
