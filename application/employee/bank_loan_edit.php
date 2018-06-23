<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/BankLoanEditFormBase.class.php');

	class BankLoanEditForm extends BankLoanEditFormBase {
            protected $lstBank;
            protected $btnBack;
            
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->btnBack = new QButton($this);
                    $this->btnBack->ButtonMode = QButtonMode::Success;
                    $this->btnBack->Text = "<< Back";
                    $this->btnBack->AddAction(new QClickEvent(), new QAjaxAction('btnBack_click'));
                    $this->calFromDate->Width = 60;
                    $this->calToDate->Width = 60;
                    $this->lstBank = new QSelect2ListBox($this);
                    $this->lstBank->AddItem("-Select Bank", NULL);
                    $banks = Ledger::LoadArrayByGrp(21);
                    foreach ($banks as $bank){
                        $this->lstBank->AddItem($bank->Name, $bank->Idledger);
                    }
                    if(isset($_GET['emp']))$this->lstEmployeeObject->SelectedValue = $_GET['emp'];
                    if($this->mctBankLoan->EditMode == TRUE){
                        $this->lstBank->SelectedValue = $this->lstBankObject->SelectedValue;
                    }
                }
                protected function btnBack_click(){
                    $temp = SalaryTemplet::LoadByIdsalaryTemplet($_GET['temp']);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/employee/member_templet.php?estab='.$temp->Establishment.'&id='.$temp->IdsalaryTemplet);
                }

                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			$this->lstBankObject->SelectedValue = $this->lstBank->SelectedValue;
			$this->mctBankLoan->SaveBankLoan();
			$this->RedirectToListPage();
		}
                protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/employee/bank_loan_edit.php?emp='.$this->lstEmployeeObject->SelectedValue.'&temp='.$_GET['temp']);
		}
	}

	BankLoanEditForm::Run('BankLoanEditForm');
?>