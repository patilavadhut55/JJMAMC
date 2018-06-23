<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/MemberEditFormBase.class.php');

	class MemberEditForm extends MemberEditFormBase {
		protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}
		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->txtCode->Width = 70;
                    $this->txtCode->ReadOnly = TRUE;
                    $this->lstPrefixObject->Width = 70;
                    
                    $this->txtFirstName->Width =
                    $this->txtMiddleName->Width =
                    $this->txtLastName->Width = 150;    
                    if($this->mctMember->EditMode == FALSE){
                        $code = Code::LoadByName('Member');
                        $code->Code = $code->Code +1;
                        $code->Save();
                        $this->txtCode->Text = $code->Code; 
                        $this->lstMemberTypeObject->SelectedValue = 4;
                        $this->calDate->DateTime = QDateTime::Now();
                        $this->txtFirstName->Text ='First Name';
                        $this->txtMiddleName->Text = 'Middle Name';
                        $this->txtLastName->Text = 'Last Name';; 
                    }
                }
                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			$this->mctMember->SaveMember();
			$this->RedirectToListPage();
		}
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/member_edit.php');
		}
	}
        MemberEditForm::Run('MemberEditForm');
?>