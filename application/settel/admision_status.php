<?php
require('../../qcubed.inc.php');
  
   $currentstatuses = CurrentStatus::LoadAll();
   foreach ($currentstatuses as $currentstatus){
       $currentstatus->AdmissionStatus = 1 ;
       $currentstatus->Save();
       _p($currentstatus->StudentObject->IdloginObject->Name.' '.$currentstatus->AdmissionStatusObject->Name);
        echo '<br>';
   }
?>
