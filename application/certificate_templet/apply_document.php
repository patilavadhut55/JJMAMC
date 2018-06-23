<?php
require('../../qcubed.inc.php');
    class IssueDocumentForm extends QForm {
        protected $txtSearch;
        protected $txtReason;
        protected $txtLast;
        protected $txtProgress;
        protected $txtNo;
        protected $caldate;
        protected $txtcompaddrs;
        protected $lstcompname;
        protected $lstdoc;
        protected $txtinstidues;
        protected $txtconduct;
        protected $txtremark;
        protected $btnSearch;
        protected $txtexamno;
        protected $txtcpi;
        protected $btnSave;
        protected $btnCancel;
        protected $lblView;
        protected $calPassDate;
        protected $refcaldate;
        
        //for LC only
        protected $caldoa;
        protected $caldop;
        protected $caldob;
        protected $txtCaste;
        protected $txtReligion;
        protected $btnOld;
        protected $lstNationality;
        protected $txtplace;
        protected $txtYearin;
        protected $txtDes;
        protected $txtdob;
        protected $lstprefix;
        protected $txtFirstname;
        protected $txtMiddlename;
        protected $txtLastname;
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
            if(isset($_GET['mem'])){
                $this->txtSearch->Visible = False;
            }
            
            $this->txtReason = new QTextBox($this);
            $this->txtReason->Name = 'Reason';
            $this->txtReason->Width ="100%";
            
            $this->txtYearin = new QTextBox($this);
            $this->txtYearin->Name = "Year in Which studying";
            $this->txtYearin->Width = "100%";
            
            $this->txtLast = new QTextBox($this);
            $this->txtLast->Name = 'Last School Attended';
            $this->txtLast->Width = "100%";
            
            $this->txtdob = new QTextBox($this);
            $this->txtdob->Name = "Dob In Words";
            $this->txtdob->Width = "100%";
            
            $this->txtplace = new QTextBox($this);
            $this->txtplace->Width = "100%";
            $this->txtplace->Name = "Place Of Birth";
            
            
            $this->txtProgress = new QTextBox($this);
            $this->txtProgress->Name = 'Progress';
            $this->txtProgress->Width = "100%";
            
            $this->txtNo = new QTextBox($this);
            $this->txtNo->Name = "Registration No";
            $this->txtNo->Width = "100%";
            
            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            $this->refcaldate = new QDateTimePicker($this);
            $this->refcaldate->Width = 70;
            $this->refcaldate->Name = 'Reference Date';
            
            //preffix
            $this->lstprefix = new QListBox($this);
            $this->lstprefix->Name = "Prefix";
            $this->lstprefix->Height = 34;
            $prefixs = Prefix::LoadAll();
            $this->lstprefix->AddItem("Select Prefix", NULL);
            foreach ($prefixs as $prefix) {
                $this->lstprefix->AddItem($prefix->Name, $prefix->Idprefix);
            }
            $this->lstprefix->Width = '100%';

            $this->txtFirstname = new QTextBox($this);
            $this->txtFirstname->Placeholder = 'First Name';

            $this->txtMiddlename = new QTextBox($this);
            $this->txtMiddlename->Placeholder = 'Middel Name';

            $this->txtLastname = new QTextBox($this);
            $this->txtLastname->Placeholder = 'Last Name';
            
            if(isset($_GET['mem'])){
                $pro = Profile::LoadByIdprofile($_GET['mem']);
                if($pro){
                   // foreach ($prof as $pro){
                        
                $this->lstprefix->SelectedValue = $pro->Prefix;
                $this->txtFirstname->Text = $pro->FirstName;
                $this->txtMiddlename->Text = $pro->MiddleName;
                $this->txtLastname->Text = $pro->LastName;
                  //  }
                }
            }

            $this->lstdoc = new QSelect2ListBox($this);
            
            $this->lstdoc->Name = 'Document';
            $certificate = CertificateTemplet::QueryArray(
                     QQ::AndCondition(
                             QQ::Equal(QQN::CertificateTemplet()->Group,4),
                             QQ::Equal(QQN::CertificateTemplet()->IdcertificateTemplet,22)
                     ));
             foreach ($certificate as $cer){
                     $this->lstdoc->AddItem($cer->Name,$cer->IdcertificateTemplet);
             }
            
            $this->txtCaste = new QTextBox($this);
            $this->txtReligion = new QTextBox($this);
            
            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));
            
            $this->btnOld = new QButton($this);
            $this->btnOld->ButtonMode = QButtonMode::Success;
            $this->btnOld->Text = " Old Student LC";
            $this->btnOld->AddAction(new QClickEvent(), new QAjaxAction('btnOld_click'));
            
            $this->lstNationality = new QListBox($this);
            $this->lstNationality->Name = "Nationality";
            $this->lstNationality->AddItem("-Select One-", NULL);
            $nations = Nationality::LoadAll();
            if($nations){
                foreach ($nations as $nation){
                    $this->lstNationality->AddItem($nation->Name, $nation->Idnationality);
                }
            }
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Success;
            $this->btnSave->Text ="Apply";
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_click'));
            
            if(isset($_GET['mem']) && isset($_GET['doc'])){
                $this->lstdoc->Enabled = FALSE;
                $this->btnSearch->Visible = False;
                $app = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']);
                $applications = Application::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Application()->ApplicantObject, $_GET['mem']),
                                            QQ::Equal(QQN::Application()->AppliedFor, 22)    
                                        ));
               
                foreach($applications as $application){}
               
                $led = Ledger::LoadByIdledger($_GET['mem']);
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $this->txtSearch->Text = $led->Name;
                $this->lstdoc->SelectedName = $app->Name;
                
                
                if($app->IdcertificateTemplet == 22){
                    
                    $this->txtinstidues = new QTextBox($this);
                    $this->txtinstidues->Name = 'Institute fees,Other Charges & Dues';
                    $this->txtinstidues->TextMode = QTextMode::MultiLine;
                    $this->txtinstidues->Width ="100%";

                    $this->txtconduct = new QTextBox($this);
                    $this->txtconduct->Name = 'Conduct';
                    $this->txtconduct->TextMode = QTextMode::MultiLine;
                    $this->txtconduct->Width ="100%";
                    
                    $this->txtCaste->Width = $this->txtReligion->Width = $this->txtconduct->Width ="100%";
                    
                    $this->txtremark = new QTextBox($this);
                    $this->txtremark->Name = 'Remark';
                    $this->txtremark->TextMode = QTextMode::MultiLine;
                   
                    
                    $this->txtProgress = new QTextBox($this);
                    $this->txtProgress->Name = 'Progress';
                    $this->txtProgress->Width = "100%";
                    
                    $this->caldoa = new QCalendar($this);
                    $this->caldoa->Width = 150;
                    $this->caldoa->Name = "Addmission Date";
                    $this->caldoa->DateTimeFormat = 'dd/mm/yy';
                    if($profile->AdmittedDate != NULL)
                        $this->caldoa->Text = date('d/m/Y', strtotime($profile->AdmittedDate));
                    
                    $this->txtDes = new QTextBox($this);
                    $this->txtDes->Width ="70%";
            
                    
                    $this->caldop = new QCalendar($this);
                    $this->caldop->Width = 100;
                    $this->caldop->Name = "Passout Date";
                    $this->caldop->DateTimeFormat = 'dd/mm/yy';
                    if($profile->LeaveDate != NULL)
                        $this->caldop->Text = date('d/m/Y', strtotime($profile->LeaveDate));
                    
                    $this->caldob = new QCalendar($this);
                    $this->caldob->Width = 150;
                    $this->caldob->Name = "Date Of Birth";
                    $this->caldob->DateTimeFormat = 'dd/mm/yy';
                    
                    
                    
                    if(!$applications){
                        $this->txtReason->Text = 'FURTHER EDUCATION';
                        if($profile->Caste) $this->txtCaste->Text = $profile->CasteObject->Name;
                        if($profile->Religion) $this->txtReligion->Text = $profile->ReligionObject->Name;
                        if($profile->Dob) $this->caldob->Text = date ('d/m/Y', strtotime ($profile->Dob));
                    }else{
                        if($application->Reason != NULL)
                            $this->txtReason->Text = $application->Reason;
                        else
                            $this->txtReason->Text = 'FURTHER EDUCATION';
                        
                        $this->txtCaste->Text = $application->Data9;
                        $this->txtReligion->Text = $application->Data8;
                        $this->txtconduct->Text = $application->Conduct;
                        $this->txtremark->Text = $application->Data4;
                        $this->txtLast->Text = $application->Data10;
                        $this->txtProgress->Text = $application->Data11;
                        $this->txtDes->Text = $application->Data5;
                        $this->txtNo->Text = $application->Data12;
                        $this->lstNationality->SelectedValue = $application->Natinality;
                        $this->txtplace->Text = $application->PlaceOfBirth;
                        $this->txtdob->Text = $application->DobWords;
                        if($application->DateOfBirth != NULL)
                        $this->caldob->Text = date('d/m/Y', strtotime($application->DateOfBirth));
                        $this->txtYearin->Text = $application->YearInWhich;
                        
                      
                    }
                }
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
            if($this->txtSearch->Text != NULL && $this->lstdoc->SelectedValue!=NULL){
                $text= $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);
                if($mem){
                    $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                    if($currents)
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/apply_document.php?mem='.$mem->Idledger.'&doc='.$this->lstdoc->SelectedValue); 
                    else
                        QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                }else{
                    QApplication::DisplayAlert ("Student not found !!");
                }
            }
            else{
                QApplication::DisplayAlert('Please select student and document type.');
            }
        }
        protected function btnOld_click(){
             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/apply_document_oldstud.php');  
        }

        protected function btnSave_click($strFormId, $strControlId, $strParameter) {
            if(isset($_GET['mem'])){
                if($_GET['doc'] == 22){
                    if($this->caldoa->Text != NULL ){
                        $apps = Application::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::Application()->ApplicantObject, $_GET['mem']),
                                            QQ::Equal(QQN::Application()->AppliedFor, 22)        
                                            ));
                        if($apps){
                            foreach($apps as $app){}
                            
                            $profile = Profile::LoadByIdprofile($_GET['mem']);
                            if($this->caldop->Text != ''){ 
                                $dob = explode('/', $this->caldop->Text);
                                $profile->LeaveDate = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                            }else{
                                $profile->LeaveDate = NULL;
                            }
                            if($this->caldoa->Text != ''){ 
                                $dob = explode('/', $this->caldoa->Text);
                                $profile->AdmittedDate = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                            }
                            $profile->Save();
                            
                            $app->Reason = $this->txtReason->Text;
                            $app->Data9 = $this->txtCaste->Text;
                            $app->Data8 = $this->txtReligion->Text;
                            $app->Data2 = 'NIL';
                            $app->Data3 = 'GOOD';
                            $app->Data4 = $this->txtremark->Text;
                            $app->Conduct = $this->txtconduct->Text;
                            if($this->lstprefix->SelectedValue != NULL){
                                $app->Data6 = $this->lstprefix->SelectedName.' '.$this->txtLastname->Text.' '. $this->txtFirstname->Text.' '.$this->txtMiddlename->Text;
                            }else{
                                $app->Data6 = $this->txtLastname->Text.' '. $this->txtFirstname->Text.' '.$this->txtMiddlename->Text;
                            }
                            $app->Data10 = $this->txtLast->Text;
                            $app->Data11 = $this->txtProgress->Text;
                            $app->Data12 = $this->txtNo->Text;
                            $app->Natinality = $this->lstNationality->SelectedValue;
                            $app->PlaceOfBirth = $this->txtplace->Text;
                            $app->DobWords = $this->txtdob->Text;
                            if($this->caldob->Text != ''){ 
                                $dob = explode('/', $this->caldob->Text);
                                 $app->DateOfBirth = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                            }
                            
                            
                            $app->YearInWhich = $this->txtYearin->Text;
                            $app->Data5 = $this->txtDes->Text; 
                            $app->Save();
                            
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/leaving_certificate.php?id='.$app->Idapplication.'&appfor='.$app->AppliedFor.'&view=1');  
                        }else{
                            $addresses = Address::LoadArrayByOf($_GET['mem']);
                             $leds = Ledger::LoadByIdledger($_GET['mem']);
                            $currentstatuses = CurrentStatus::LoadArrayByStudent($_GET['mem']);
                            foreach ($currentstatuses as $currentstatus){}
                            $app = new Application();
                            $app->Applicant = $leds->Idledger;
                            $app->AppliedFor = $this->lstdoc->SelectedValue; //Bonafide
                            $counter = CertificateTemplet::LoadByIdcertificateTemplet($this->lstdoc->SelectedValue); 
                            $app->Code = $counter->Abbrivation."".$counter->Counter;
                            $counter->Counter = $counter->Counter + 1;
                            $counter->Save();

                            $profile = Profile::LoadByIdprofile($_GET['mem']);
                            if($this->caldop->Text != ''){ 
                                $dob = explode('/', $this->caldop->Text);
                                $profile->LeaveDate = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                            }
                            if($this->caldoa->Text != ''){ 
                                $dob = explode('/', $this->caldoa->Text);
                                $profile->AdmittedDate = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                            }
                            $profile->Save();

                            $app->Date = QDateTime::Now();                                                             
                            $app->FinalDecision = 3;
                            $app->DataEntryBy = $_SESSION['login'];
                            $app->Reason = $this->txtReason->Text;
                            $app->Data9 = $this->txtCaste->Text;
                            $app->Data8 = $this->txtReligion->Text;
                            $app->Data2 = 'Nil';
                            $app->Data3 = 'Good';
                            $app->Data4 = $this->txtremark->Text;
                            $app->Conduct = $this->txtconduct->Text;
                             if($this->lstprefix->SelectedValue != NULL){
                                $app->Data6 = $this->lstprefix->SelectedName.' '.$this->txtLastname->Text.' '. $this->txtFirstname->Text.' '.$this->txtMiddlename->Text;
                            }else{
                                $app->Data6 = $this->txtLastname->Text.' '. $this->txtFirstname->Text.' '.$this->txtMiddlename->Text;
                            }
                            $app->Data10 = $this->txtLast->Text;
                            $app->Data11 = $this->txtProgress->Text;
                            $app->Data12 = $this->txtNo->Text;
                            $app->Natinality = $this->lstNationality->SelectedValue;
                            $app->PlaceOfBirth = $this->txtplace->Text;
                            $app->DobWords = $this->txtdob->Text;
                            if($this->caldob->Text != ''){ 
                                $dob = explode('/', $this->caldob->Text);
                                 $app->DateOfBirth = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                            }
                            $app->YearInWhich = $this->txtYearin->Text;
                            $app->Data5 = $this->txtDes->Text;
                        }
                        $app->Save(); 


                        $counter = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']); 
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
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/leaving_certificate.php?id='.$app->Idapplication.'&appfor='.$app->AppliedFor);  
             
                    }else{
                        QApplication::DisplayAlert('Please select Admission date & Passout date..');
                    }
                }else{
                    $addresses = Address::LoadArrayByOf($_GET['mem']);
                    if($addresses){
                        foreach ($addresses as $address){}
                    }else{
                        $address = new Address();
                    //    $address->Title ="-";
                        $address->Save();
                    }    
                    $currentstatuses = CurrentStatus::LoadArrayByStudent($_GET['mem']);
                    foreach ($currentstatuses as $currentstatus){}
                    $app = new Application();
                    $app->Applicant = $address->Idaddress;
                    $app->AppliedFor = $this->lstdoc->SelectedValue; //Bonafide
                    
                    $counter = CertificateTemplet::LoadByIdcertificateTemplet($this->lstdoc->SelectedValue); 
                    $app->Code = $counter->Abbrivation."".$counter->Counter;
                    $counter->Counter = $counter->Counter + 1;
                    $counter->Save();
                    
                    $app->Date = QDateTime::Now();                                                             
                    $app->FinalDecision = 3;
                    $app->DataEntryBy = $_SESSION['login'];
                    $app->Reason = $this->txtReason->Text;
                    
                    $app2 = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']);
                    if($app2->IdcertificateTemplet == 21){
                        if($this->lstcompname->SelectedValue !=NULL && $this->txtcompaddrs->Text!=NULL){
                            $app->Data1 = $this->txtcompaddrs->Text;
                            $app->Company = $this->lstcompname->SelectedValue;
                            $app->Data6 = $this->txtexamno->Text;
                            $app->Data7 = $this->txtcpi->Text;
                            $app->CertificateGeneratedDate = $this->refcaldate->DateTime;
                        }else{
                            QApplication::DisplayAlert('Please fill company name and address');
                        }
                    }
                    $app->Save(); 
                    $profile = Profile::LoadByIdprofile($_GET['mem']);
                    if($this->caldop->Text != ''){ 
                        $dob = explode('/', $this->caldop->Text);
                        $profile->LeaveDate = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                    }
                    if($this->caldoa->Text != ''){ 
                        $dob = explode('/', $this->caldoa->Text);
                        $profile->AddmissionDate = QDateTime::FromTimestamp (strtotime($dob[2].$dob[1].$dob[0]));
                    }
                    $profile->Save();

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
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/leaving_certificate.php?id='.$app->Idapplication.'&appfor='.$app->AppliedFor);  
                }
            }
        }
        protected function btnCancel_click($strFormId, $strControlId, $strParameter) {
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
          }
        protected function comp_select(){
            $comp = CompanyMaster::LoadByIdcompanyMaster($this->lstcompname->SelectedValue);
            $this->txtcompaddrs->Text = $comp->Address;
            $this->txtcompaddrs->Enabled = False;
        }
    }
    IssueDocumentForm::Run('IssueDocumentForm');
?>

