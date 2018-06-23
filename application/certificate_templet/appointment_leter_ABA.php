<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	//require(__FORMBASE_CLASSES__ . '/CertificateTempletEditFormBase.class.php');

	class GrOffer extends QForm{
		// Override Form Event Handlers as Needed
                protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
               
                }
              
	}
	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// certificate_templet_edit.tpl.php as the included HTML template file
        GrOffer::Run('GrOffer');
?>