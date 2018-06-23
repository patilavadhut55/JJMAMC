<?php
    require('../../qcubed.inc.php');
    //code for settel eventhasgrade table
    $eventhasgrades = EventHasGrade::LoadAll();
    $cnt = 0;
    foreach ($eventhasgrades as $eventhasgrade){
        $cnt++;
        $eventhasgrade->YearlySubject = $eventhasgrade->DeptYearEventsObject->YearlySubject;
        $eventhasgrade->Save();
    }
    
    _p($cnt);



?>