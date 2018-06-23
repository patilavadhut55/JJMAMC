<?php
require('../../qcubed.inc.php');
   
   $fees = Fees::LoadAll();
   if($fees){
       foreach($fees as $fee){
           if($fee->AfterDueDate == 1){
               $fee->Delete();
           }
       }
   }
?>
