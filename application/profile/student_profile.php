<?php

    require('../../qcubed.inc.php');
    class IssueDocumentForm extends QForm {
        protected $txtSearch;
        protected $txtReason;
        protected $caldate;
        protected $btnSearch;
        protected $btnSave;
        protected $btnCancel;
        protected $lblView;
        
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();            
        }
        
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->lblView = new QLabel($this);
            $this->lblView->HtmlEntities = FALSE;
            
            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Student ID';
            $this->txtSearch->Width = 450;
            
            $this->txtReason = new QTextBox($this);
            $this->txtReason->Placeholder = 'Reason';
            $this->txtReason->Width ="100%";
            
            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Success;
            $this->btnSave->Text ="Apply";
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_click'));
            
            if(isset($_GET['mem'])){
                $led = Ledger::LoadByIdledger($_GET['mem']);
                $this->txtSearch->Text = $led->Name;
            }
        }
        public function txtSearch_Change($strParameter){
            $objMemberArray = Ledger::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Ledger()->Grp, 244),        
                    QQ::OrCondition(
                        QQ::Like(QQN::Ledger()->Name, '%'.$strParameter . '%'),
                        QQ::Like(QQN::Ledger()->Code, '%'.$strParameter . '%')
                    )
                )
            );

            $result = array();
            foreach($objMemberArray as $objMember){
                $result[] = $objMember->Code.' '.get_full_name($objMember->Name);
            }
            return $result;
        }
        
        protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
            if($this->txtSearch->Text != ""){
                $text= $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);
                if($mem){
                    $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                    if($currents)
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission.php?id='.$mem->Idledger); 
                    else
                        QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                }else{
                    QApplication::DisplayAlert ("Student not found !!");
                }
            }
        }
        
        protected function btnCancel_click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
        }
    }
    IssueDocumentForm::Run('IssueDocumentForm');
?>

