<?php
require('../../qcubed.inc.php');
$from = '20151201';
$to = '20151222';

$depts = Role::QueryArray(
           QQ::AndCondition(
           QQ::Equal(QQN::Role()->Parrent, 9),
            QQ::NotEqual(QQN::Role()->Idrole, 79)        
                   ),
                    QQ::OrderBy(QQN::Role()->Code)       
          );   
foreach ($depts as $dept){

$staffss = LoginHasRole::QueryArray(
            QQ::AndCondition(
            QQ::Equal(QQN::LoginHasRole()->Active, 1),
            QQ::Equal(QQN::LoginHasRole()->Department, $dept->Idrole)        
                    ), QQ::OrderBy(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Seq));
    foreach ($staffss as $staff){
         for ($date = $from; $date <= $to; $date++){
        $atts = Attendance::QueryArray(
              QQ::AndCondition(
              QQ::Equal(QQN::Attendance()->Staff, $staff->LoginIdlogin),
              QQ::GreaterOrEqual(QQN::Attendance()->InTme, $date.'000000'),
              QQ::LessOrEqual(QQN::Attendance()->InTme, $date.'235959')
                      ));  
        if(!$atts){
            $att = new Attendance();
            $att->Staff = $staff->LoginIdlogin;
            $att->InTme = QDateTime::FromTimestamp(strtotime($date.'100000'));
            $att->OutTime = QDateTime::FromTimestamp(strtotime($date.'000000')); 
            $att->DayCategory = 1;
            $att->Present = 1;
            $att->Save();
                    }

         }
        
 }
}
?>
