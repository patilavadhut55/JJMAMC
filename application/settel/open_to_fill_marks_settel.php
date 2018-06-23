<?php
    require('../../qcubed.inc.php');
    $flag = 1;
    $appliedexams = AppliedExam::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::AppliedExam()->EventSubjectObject->YearlySubject, 1264),
                QQ::OrCondition(
                    QQ::Equal(QQN::AppliedExam()->PrintDraft,TRUE),
                    QQ::Equal(QQN::AppliedExam()->LockExam, TRUE)
                )
            )
        );
        foreach($appliedexams as $appliedexam){
            if($flag == 1){
                _p($appliedexam->EventSubject);
                $flag = 0;
            }
            $appliedexam->PrintDraft = 0;
            $appliedexam->LockExam = NULL;
            $appliedexam->Save();
        } 
 ?>
