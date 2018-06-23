<?php
require('../../qcubed.inc.php');
    class IssueDocumentForm extends QForm {
        protected $txtSearch;
        protected $txtReason;
        protected $txtClass;
        protected $txtRoll;
        protected $txtYear;
        protected $caldob;
        protected $txtdob;
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
            $this->txtReason->TextMode = QTextMode::MultiLine;
            
            $this->txtClass = new QTextBox($this);
            $this->txtClass->Name = "Class";
            $this->txtClass->Width = "80%";
            $this->txtClass->Visible = FALSE;
            
            $this->txtdob = new QTextBox($this);
            $this->txtdob->Name = "Date Of Birth In Words";
            $this->txtdob->TextMode = QTextMode::MultiLine;
            
            $this->txtRoll = new QTextBox($this);
            $this->txtRoll->Name = "Roll No";
            $this->txtRoll->Width = "100";
            $this->txtRoll->Visible = FALSE;
            
            $this->txtYear = new QTextBox($this);
            $this->txtYear->Name = "Year";
           // $this->txtYear->Width = "250";
            $this->txtYear->Visible = FALSE;
            
            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            $this->caldob = new QCalendar($this);
            $this->caldob->Width = 180;
            $this->caldob->Name = "Date Of Birth";
            //$this->caldob->DateTimeFormat = 'dd/mm/yy';
            $this->caldob->Visible = FALSE;

            
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
                $this->txtClass->Visible = TRUE;
                 $this->txtRoll->Visible = TRUE;
                 $this->txtYear->Visible = TRUE;
                 $this->caldob->Visible = TRUE;
                 
                $led = Ledger::LoadByIdledger($_GET['mem']);
              
                $prof = Profile::LoadByIdprofile($_GET['mem']);
                $this->txtSearch->Text = $led->Name;
                $this->caldob->Text = date('M d Y',  strtotime($prof->Dob));
                
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
                $result[] = $objMember->Code.' '.  GetFullNameNew($objMember->Name,$objMember->Code);
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
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/issue_document.php?mem='.$mem->Idledger); 
                    else
                        QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                }else{
                    QApplication::DisplayAlert ("Student not found !!");
                }
            }
        }
        
        protected function btnSave_click($strFormId, $strControlId, $strParameter) {
            if(isset($_GET['mem'])){
              
                $currentstatuses = CurrentStatus::LoadArrayByStudent($_GET['mem']);
                foreach ($currentstatuses as $currentstatus){}
                $app = new Application();
                $app->Applicant = $_GET['mem'];
                
                $app->AppliedFor = 9; //Bonafide
                $counter = CertificateTemplet::LoadByIdcertificateTemplet(9); //Bonafide
                $app->Code = $counter->Abbrivation."".$counter->Counter;
                $counter->Counter = $counter->Counter + 1;
                $counter->Save();
   
                $app->Date = QDateTime::Now();                                                             
                $app->FinalDecision = 3;
                $app->DataEntryBy = $_SESSION['login'];
                $app->Reason = $this->txtReason->Text;
                $app->Data1 = $this->txtClass->Text;
                $app->Data2 = $this->txtRoll->Text;
                $app->Data3 = $this->txtYear->Text;
                $app->DateOfBirth = $this->caldob->DateTime;
                $app->DobWords = $this->txtdob->Text;
                $app->Data6 = $this->txtSearch->Text;
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
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/bonafide.php?id='.$app->Idapplication);  
                }
             }
              protected function btnCancel_click($strFormId, $strControlId, $strParameter) {
                  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
              }
    }
    IssueDocumentForm::Run('IssueDocumentForm');
?>

