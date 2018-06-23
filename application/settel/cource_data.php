<?php
require('../../qcubed.inc.php');
//delete yearly subject data and deptyearhasexamdata
/*
$deptyears = DeptYearEvents::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::DeptYearEvents()->Event, 1748),
                QQ::Equal(QQN::DeptYearEvents()->Parrent, NULL)
            ));
    if($deptyears){
        foreach($deptyears as $deptyear){
            $subdeptyears = DeptYearEvents::LoadArrayByParrent($deptyear->IddeptYearEvents);
            if($subdeptyears){
                foreach($subdeptyears as $subdeptyear){
                    $subdeptyear->Delete();
                }
            }
           $deptyear->Delete();
        }
    }    
  /*   
$yearlysubs = YearlySubject::LoadAll();
if($yearlysubs){
    foreach($yearlysubs as $yearlysub){
        $deptyearexams = DeptYearExam::LoadArrayByYearlySubject($yearlysub->IdyearlySubject);
        if($deptyearexams){
            foreach($deptyearexams as $deptyearexam){
                $deptyearexam->Delete();
            }
        }
        $yearlysub->Delete();
        
    }
}
*/
?>
