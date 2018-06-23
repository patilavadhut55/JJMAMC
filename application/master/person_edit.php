<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/PersonEditFormBase.class.php');

    class PersonEditForm extends PersonEditFormBase {
        protected $txtUser;
        protected $txtPassword;
        protected $txtVerify;
        protected function Form_Run() {
                parent::Form_Run();

                QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            $this->txtName->Focus();
            
            $this->txtUser = new QTextBox($this);
            $this->txtUser->Name = "User Name";
            $this->txtUser->Focus();
            $this->txtUser->Visible = FALSE;
            
            $this->txtPassword = new QTextBox($this);
            //$this->txtPassword->TextMode = QTextMode::Password;
            $this->txtPassword->Name = "Password";
            $this->txtPassword->Visible = FALSE;
           
            $this->txtVerify = new QTextBox($this);
            //$this->txtVerify->TextMode = QTextMode::Password;
            $this->txtVerify->Name = "Verify Password";
            $this->txtVerify->Visible = FALSE;
            
            $this->txtName->AddAction(new QEnterKeyEvent(), new QServerAction("btnSave_Click"));
          
         if($this->mctPerson->EditMode == FALSE){
//              $this->mctPerson->SavePerson();
//              //$this->RedirectToListPage();
//              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/person_edit.php/'.$strParameter);
           }else{
               $this->txtUser->Visible = TRUE;
               $this->txtPassword->Visible = TRUE;
               $this->txtVerify->Visible = TRUE;
               $this->btnSave->Text = 'Update';
               $this->txtUser->Text = $this->txtName->Text;
           }
            
        }
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $this->mctPerson->SavePerson();
              
            //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/person_edit.php/'.$strParameter);
        }
       
    }

    PersonEditForm::Run('PersonEditForm');
?>