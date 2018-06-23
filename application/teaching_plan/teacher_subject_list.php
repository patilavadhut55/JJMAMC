<?php
	require('../../qcubed.inc.php');
	class Addsubject extends QForm {
            protected function Form_Run() {
                parent::Form_Run();

		QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
            }           
        }
        Addsubject::Run('Addsubject');
?>