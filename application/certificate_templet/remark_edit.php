<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/RemarkEditFormBase.class.php');

	class RemarkEditForm extends RemarkEditFormBase {
            protected $txtName;
            
            protected $btnSave;
            protected $btnCancel;
            protected $btnDelete;
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}


		protected function Form_Create() {
                    parent::Form_Create();
                    
                    //$this->txtName->PlaceHolder = 'Name';
                    
                    $this->txtName->Width = 450;
                    
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                }
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/remark_edit.php');
		}
	}

	RemarkEditForm::Run('RemarkEditForm');
?>