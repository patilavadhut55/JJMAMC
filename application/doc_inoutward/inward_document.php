<?php

require('../../qcubed.inc.php');

class DocIN extends QForm {

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();
    }

}

DocIN::Run('DocIN');
?>
