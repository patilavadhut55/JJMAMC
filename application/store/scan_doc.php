<?php
    require('../../qcubed.inc.php');

    class ScanDoc extends QForm {
         protected function Form_Create(){
                parent::Form_Create();
         }
    }
     ScanDoc::Run('ScanDoc');
?>
