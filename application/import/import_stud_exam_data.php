<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    protected $btnGenerate;
    protected $lstCalender;
    protected $lstRoles;
    protected $lstProgram;
    
    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
        
        
    }       
}

DayEditForm::Run('DayEditForm');
?>