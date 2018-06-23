<?php
    require('../../qcubed.inc.php');
    

    class GroupEditForm extends QForm {        
        protected function Form_Run() {
            parent::Form_Run();
            
            QApplication::CheckRemoteAdmin();
        }
        
	protected function Form_Create() {
            parent::Form_Create();
            
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/group_edit.php');
        }
        
    }
 GroupEditForm::Run('GroupEditForm');
?>