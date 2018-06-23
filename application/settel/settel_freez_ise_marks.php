<?php
    require('../../qcubed.inc.php');

    $appliedexams = AppliedExam::QueryCount(
            QQ::AndCondition(
                QQ::Equal(QQN::AppliedExam()->EventSubjectObject->CalenderYear, 5),
                QQ::Equal(QQN::AppliedExam()->EventExamObject->ExamType, 1),
                QQ::Equal(QQN::AppliedExam()->PrintDraft, 1),
                QQ::OrCondition(
                    QQ::Equal(QQN::AppliedExam()->LockExam, NULL),
                    QQ::Equal(QQN::AppliedExam()->LockExam, 0)
                )
            )
        );

    _p($appliedexams);
    $appliedexams = AppliedExam::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::AppliedExam()->EventSubjectObject->CalenderYear, 5),
                QQ::Equal(QQN::AppliedExam()->EventExamObject->ExamType, 1),
                QQ::Equal(QQN::AppliedExam()->PrintDraft, 1),
                QQ::OrCondition(
                    QQ::Equal(QQN::AppliedExam()->LockExam, NULL),
                    QQ::Equal(QQN::AppliedExam()->LockExam, 0)
                )
            )
        );

    foreach ($appliedexams as $appliedexam){
        $appliedexam->PrintDraft = TRUE;
        $appliedexam->LockExam = TRUE;
        $appliedexam->Save();
        //_p($appliedexam->EventExamObject->ExamTypeObject->Code);
    } 
 ?>
