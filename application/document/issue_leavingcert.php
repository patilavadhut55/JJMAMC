<?php
     require('../../qcubed.inc.php');
    class IssueLeavingCertForm extends QForm {
        protected $txtSearch;
        protected $txtReason;
        protected $txtRemark;
        protected $txtConduct;
        protected $txtReasonLeave;
        protected $caldate;
        protected $btnSearch;
        protected $btnSave;
        protected $btnCancel;
          protected function Form_Run() {
                parent::Form_Run();
           QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Student ID';
            $this->txtSearch->Width = 450;
            
            $this->txtConduct = new QTextBox($this);
            $this->txtConduct->Placeholder = 'Conduct';
            $this->txtConduct->Width ="100%";
            
            $this->txtReason = new QTextBox($this);
            $this->txtReason->Placeholder = 'Reason of leaving Institution';
            $this->txtReason->Width ="100%";
            
            $this->txtRemark = new QTextBox($this);
            $this->txtRemark->Placeholder = 'Remark';
            $this->txtRemark->Width ="100%";
            
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
                $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                if($currents)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/issue_leavingcert.php?mem='.$mem->Idledger); 
                else
                    QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
               }
        }
        protected function btnSave_click($strFormId, $strControlId, $strParameter) {
            if(isset($_GET['mem'])){
                $addresses = Address::LoadArrayByOf($_GET['mem']);
                if($addresses){
                    foreach ($addresses as $address){}
                }else{
                    $address = new Address();
                    $address->Title ="-";
                    $address->Save();
                }    
                $app = new Application();
                $app->Applicant = $address->Idaddress;
                $app->AppliedFor = 10; //Diploma Leaving Cert
                $counter = CertificateTemplet::LoadByIdcertificateTemplet(10); //Leaving Certificate for Diploama
                $app->Code = $counter->Abbrivation."".$counter->Counter;
                $counter->Counter = $counter->Counter + 1;
                $counter->Save();
                $app->Date = QDateTime::Now();                                                             
                $app->FinalDecision = 3;
                $app->DataEntryBy = $_SESSION['login'];
                $app->Reason = $this->txtReason->Text;
                $app->Remark = $this->txtRemark->Text;
                $app->Data1 = $this->txtConduct->Text;
                $app->Save(); 
                
                $approvals = Approvel::LoadArrayByCertificateTemplet($counter->IdcertificateTemplet);
                foreach ($approvals as $approval){
                            $appaproval = new AppApproval();
                            $appaproval->Application = $app->Idapplication;
                            $appaproval->Roll = $approval->Roll;
                            $appaproval->Code = $approval->Code;
                            $appaproval->IsFinalAuthority = $approval->IsFinalAuthority;
                            $appaproval->Decision = 3;
                            $appaproval->Save();
                    }
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/doc_view.php?id='.$app->Idapplication);  
                }
             }
              protected function btnCancel_click($strFormId, $strControlId, $strParameter) {
                  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
              }
    }
    IssueLeavingCertForm::Run('IssueLeavingCertForm');
?>
