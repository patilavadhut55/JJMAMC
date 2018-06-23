<?php
require('../../qcubed.inc.php');
    class IssueDocumentForm extends QForm {
        protected $txtSearch;
        protected $txtReason;
        protected $caldate;
        protected $txtcompaddrs;
        protected $txtcompname;
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
        protected $dlgSimpleMessage;
        protected $dlgYesNo;
        protected $lstdept;
        protected $lstcalyear,$caldate1,$txtlecturefee,$txtpracttutfee;
        protected $txtadvertisedetails,$txtpersonaddrs,$meetingdate;
        protected $txtyears,$txtpayonappoinment,$txtpayband,$txtaccademicgradepay;
        protected $txtjoingdate,$txtlaterrecevereddate;
        protected $txtpost;

        protected function Form_Run() {
                parent::Form_Run();
           QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->lblView = new QLabel($this);
            $this->lblView->HtmlEntities = FALSE;
            
            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Staff ID';
            $this->txtSearch->Width = 450;
            
            $this->txtReason = new QTextBox($this);
            $this->txtReason->Name = 'Reason';
            $this->txtReason->Width ="100%";
            
            // Define the Simple Message Dialog Box
            $this->dlgYesNo = new QDialog($this);
            $this->dlgYesNo->Modal = true;
            $this->dlgYesNo->Resizable = false;
            $this->dlgYesNo->AutoOpen = false;

            // Make sure this Dislog Box is "hidden"
            // Like any other QPanel or QControl, this can be toggled using the "Display" or the "Visible" property
            $this->dlgYesNo->Display = false;
            $this->dlgYesNo->AddButton ('Yes', 'yesBtnId');
            $this->dlgYesNo->AddAction (new QDialog_ButtonEvent(), new QAjaxAction ('Yes_Click'));
            $this->dlgYesNo->AddButton ('No', 'noBtnId');
            $this->dlgYesNo->AddAction (new QDialog_ButtonEvent(), new QAjaxAction ('No_Click'));
 
        
           
            
            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            $this->lstdoc = new QSelect2ListBox($this);
            $this->lstdoc->Name = 'Document';
            $this->lstdoc->AddItem('--Select Document--');
             $certificate = CertificateTemplet::QueryArray(
                     QQ::AndCondition(
                             QQ::Equal(QQN::CertificateTemplet()->Group,4),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,9),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,10),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,13),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,14),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,15),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,16),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,17),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,18),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,19),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,20),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,21),
                             QQ::NotEqual(QQN::CertificateTemplet()->IdcertificateTemplet,22)

                             ));
             foreach ($certificate as $cer){
                     $this->lstdoc->AddItem($cer->Name,$cer->IdcertificateTemplet);
             }
            
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
            
            if(isset($_GET['mem'])&&$_GET['doc']){
                $this->lstdoc->Enabled = FALSE;
                 $this->btnSearch->Visible = False;
                $app = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']);
                $appaddr = Application::LoadByIdapplication($_GET['mem']);
                $led = Ledger::LoadByIdledger($_GET['mem']);
                $this->txtSearch->Text = $led->Name;
                $this->lstdoc->SelectedName = $app->Name;
                  if($app->IdcertificateTemplet==23){
                        $this->lstdept = new QSelect2ListBox($this);
                        $this->lstdept->Name = 'Department';
                        $this->lstdept->Width ="100%";
                        $dept = Role::LoadArrayByGrp(2);
                        foreach ($dept as $depts){
                            $this->lstdept->AddItem($depts->Name);
                        }
                        $this->caldate1 = new QCalendar($this);
                        $this->caldate1->Name = 'w.e.f Date';
                        $this->caldate1->Width ="100%";
                        
                        $this->lstcalyear = new QSelect2ListBox($this);
                        $this->lstcalyear->Name = 'Academic Year';
                        $this->lstcalyear->Width ="100%";
                        $year = CalenderYear::LoadAll();
                        foreach ($year as $years){
                            $this->lstcalyear->AddItem($years->Name);
                        }
                        
                        $this->txtlecturefee = new QTextBox($this);
                        $this->txtlecturefee->Name = 'Lecture Fee';
                        $this->txtlecturefee->Width ="100%";
                        
                        $this->txtpracttutfee = new QTextBox($this);
                        $this->txtpracttutfee->Name = 'Practical and Tutorial Fee';
                        $this->txtpracttutfee->Width ="100%";
                        
                     }
                   if($app->IdcertificateTemplet == 24)  {
                       
                       $this->lstdept = new QSelect2ListBox($this);
                        $this->lstdept->Name = 'Department';
                        $this->lstdept->Width ="100%";
                        $dept = Role::LoadArrayByGrp(2);
                        foreach ($dept as $depts){
                            $this->lstdept->AddItem($depts->Name);
                        }
                        
                         $this->txtpersonaddrs = new QTextBox($this);
                         $this->txtpersonaddrs->Name = 'Address of person';
                         $this->txtpersonaddrs->TextMode = QTextMode::MultiLine;
                         $this->txtpersonaddrs->Width ="100%";
                         
                        $this->txtadvertisedetails = new QTextBox($this);
                        $this->txtadvertisedetails->Name = 'Advertisement published In daily';
                        $this->txtadvertisedetails->TextMode = QTextMode::MultiLine;
                        $this->txtadvertisedetails->Width ="100%";
                        
                        $this->meetingdate = new QCalendar($this);
                        $this->meetingdate->Name = 'Selection committe held on';
                        $this->meetingdate->Width ="100%";
                        
                        $this->txtyears = new QTextBox($this);
                        $this->txtyears->Name = 'Maximum period up to';
                        $this->txtyears->Width ="100%";
                        
                        $this->txtpayonappoinment = new QTextBox($this);
                        $this->txtpayonappoinment->Name = 'Pay on appointment';
                        $this->txtpayonappoinment->Width ="100%";
                        
                        $this->txtpayband = new QTextBox($this);
                        $this->txtpayband->Name = 'Pay Band';
                        $this->txtpayband->Width ="100%";
                        
                        $this->txtaccademicgradepay = new QTextBox($this);
                        $this->txtaccademicgradepay->Name = 'Accedemic Grade Pay';
                        $this->txtaccademicgradepay->Width ="100%";
                        
                        $this->txtjoingdate = new QTextBox($this);
                        $this->txtjoingdate->Name = 'Joning Period';
                        $this->txtjoingdate->Width ="100%";
                   }
                     if($app->IdcertificateTemplet == 25)  {
                       
                       $this->lstdept = new QSelect2ListBox($this);
                        $this->lstdept->Name = 'Department';
                        $this->lstdept->Width ="100%";
                        $dept = Role::LoadArrayByGrp(2);
                        foreach ($dept as $depts){
                            $this->lstdept->AddItem($depts->Name);
                        }
                         $this->lstcalyear = new QSelect2ListBox($this);
                        $this->lstcalyear->Name = 'Year';
                        $this->lstcalyear->Width ="100%";
                        $year = CalenderYear::LoadAll();
                        foreach ($year as $years){
                            $this->lstcalyear->AddItem($years->Name);
                        }
                         $this->txtpersonaddrs = new QTextBox($this);
                         $this->txtpersonaddrs->Name = 'Address of person';
                         $this->txtpersonaddrs->TextMode = QTextMode::MultiLine;
                         $this->txtpersonaddrs->Width ="100%";
                         
                        $this->txtpayonappoinment = new QTextBox($this);
                        $this->txtpayonappoinment->Name = 'Pay on appointment';
                        $this->txtpayonappoinment->Width ="100%";
                        
                        $this->txtjoingdate = new QTextBox($this);
                        $this->txtjoingdate->Name = 'Joning Period';
                        $this->txtjoingdate->Width ="100%";
                   }
                     if($app->IdcertificateTemplet == 26)  {
                       
                        $this->lstdept = new QSelect2ListBox($this);
                         $this->lstdept->Name = 'Department';
                        $this->lstdept->Width ="100%";
                        $dept = Role::LoadArrayByGrp(2);
                        foreach ($dept as $depts){
                            $this->lstdept->AddItem($depts->Name);
                        }
                        
                         $this->txtpersonaddrs = new QTextBox($this);
                         $this->txtpersonaddrs->Name = 'Address of person';
                         $this->txtpersonaddrs->TextMode = QTextMode::MultiLine;
                         $this->txtpersonaddrs->Width ="100%";
                    
                        $this->meetingdate = new QCalendar($this);
                        $this->meetingdate->Name = 'Selection committe held on';
                        $this->meetingdate->Width ="100%";
                        
                        $this->txtlaterrecevereddate = new QCalendar($this);
                        $this->txtlaterrecevereddate->Name = 'Letter received from DTE Mumbai ';
                        $this->txtlaterrecevereddate->Width ="100%";
                        
                        $this->txtpayonappoinment = new QTextBox($this);
                        $this->txtpayonappoinment->Name = 'Pay on appointment';
                        $this->txtpayonappoinment->Width ="100%";
                        
                        $this->txtaccademicgradepay = new QTextBox($this);
                        $this->txtaccademicgradepay->Name = 'Scale Rs.';
                        $this->txtaccademicgradepay->Width ="100%";
                        
                   }
                    if($app->IdcertificateTemplet == 27)  {
                       
                        $this->lstdept = new QSelect2ListBox($this);
                         $this->lstdept->Name = 'Department';
                        $this->lstdept->Width ="100%";
                        $dept = Role::LoadArrayByGrp(2);
                        foreach ($dept as $depts){
                            $this->lstdept->AddItem($depts->Name);
                        }
                        
                        $this->txtyears = new QTextBox($this);
                        $this->txtyears->Name = 'Maximum period up to';
                        $this->txtyears->Width ="100%";
                        
                        $this->caldate1 = new QCalendar($this);
                        $this->caldate1->Name = 'Date';
                        $this->caldate1->Width ="100%";
                         
                        $this->txtpost = new QTextBox($this);
                        $this->txtpost->Name = 'Post';
                        $this->txtpost->Width ="100%";
                        
                          
                         $this->txtpersonaddrs = new QTextBox($this);
                         $this->txtpersonaddrs->Name = 'Address of person';
                         $this->txtpersonaddrs->TextMode = QTextMode::MultiLine;
                         $this->txtpersonaddrs->Width ="100%";
                        
                   }
        }
      }
        public function txtSearch_Change($strParameter){
            $objMemberArray = Ledger::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Ledger()->Grp, 34),        
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
            if($this->txtSearch->Text != NULL && $this->lstdoc->SelectedValue!=NULL){
                $text= $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);
                if($this->lstdoc->SelectedValue == 27){
                 $appnt = Application::QueryArray(QQ::AndCondition(
                                 QQ::Equal(QQN::Application()->ApplicantObject->Of,$mem->Idledger),
                                 QQ::Equal(QQN::Application()->AppliedFor,25)
                                 ));
                                 if($appnt){
                                     foreach ($appnt as $appnts){}
                                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/apply_document_staff.php?mem='.$mem->Idledger.'&doc='.$this->lstdoc->SelectedValue); 

                                 }else{
                                     QApplication::DisplayAlert('contractual offer leter not generated please first offer letter');
                                 }
                }
                if($mem){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/apply_document_staff.php?mem='.$mem->Idledger.'&doc='.$this->lstdoc->SelectedValue); 
                }else{
                    QApplication::DisplayAlert ("Person not found !!");
                }
            }
            else{
                QApplication::DisplayAlert('Please select Person Name and document type.');
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
                    $currentstatuses = CurrentStatus::LoadArrayByStudent($_GET['mem']);
                    foreach ($currentstatuses as $currentstatus){}
                    $app = new Application();
                    $app->Applicant = $address->Idaddress;
                        $app->AppliedFor = $this->lstdoc->SelectedValue; //Bonafide
                        $counter = CertificateTemplet::LoadByIdcertificateTemplet($this->lstdoc->SelectedValue); 
                        $app->Code = $counter->Abbrivation." ".$counter->Counter;
                        $counter->Counter = $counter->Counter + 1;
                        $counter->Save();

                    $app->Date = QDateTime::Now();                                                             
                    $app->FinalDecision = 3;
                    $app->DataEntryBy = $_SESSION['login'];
                    $app->Reason = $this->txtReason->Text;
                    $app2 = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']);
                    
                        if($app2->IdcertificateTemplet == 23){
                             $app->Data2 = $this->lstdept->SelectedName;
                             $app->Data3 = $this->lstcalyear->SelectedName;
                             $app->Data4 = $this->caldate1->Text;
                             $app->Data5 = $this->txtlecturefee->Text;
                             $app->Data6 = $this->txtpracttutfee->Text;
                        }
                            else{
                                QApplication::DisplayAlert('Please fill remark');
                            } 
                             if($app2->IdcertificateTemplet == 24){
                             $app->Data2 = $this->lstdept->SelectedName;
                             $app->Data8 = $this->txtpersonaddrs->Text;
                             $app->Data7 = $this->txtadvertisedetails->Text;
                             $app->Data9 = $this->meetingdate->Text;
                             $app->Data3 = $this->txtyears->Text;
                             $app->Data4 = $this->txtpayonappoinment->Text;
                             $app->Data5 = $this->txtpayband->Text;
                             $app->Data6 = $this->txtaccademicgradepay->Text;
                             $app->Data10 =$this->txtjoingdate->Text;
                        }
                            else{
                                QApplication::DisplayAlert('Please fill remark');
                            } 
                             if($app2->IdcertificateTemplet == 25){
                             $app->Data2 = $this->lstdept->SelectedName;
                             $app->Data8 = $this->txtpersonaddrs->Text;
                             $app->Data4 = $this->txtpayonappoinment->Text;
                             $app->Data10 = $this->txtjoingdate->Text;
                             $app->Data1 = $this->lstcalyear->SelectedName;
                        }
                            else{
                                QApplication::DisplayAlert('Please fill remark');
                            } 
                              if($app2->IdcertificateTemplet == 26){
                             $app->Data2 = $this->lstdept->SelectedName;
                             $app->Data8 = $this->txtpersonaddrs->Text;
                             $app->Data9 = $this->meetingdate->Text;
                             $app->Data4 = $this->txtpayonappoinment->Text;
                             $app->Data5 = $this->txtlaterrecevereddate->Text;
                             $app->Data6 = $this->txtaccademicgradepay->Text;
                        }
                            else{
                                QApplication::DisplayAlert('Please fill remark');
                            } 
                              if($app2->IdcertificateTemplet == 27){
                                 $appnt = Application::QueryArray(QQ::AndCondition(
                                 QQ::Equal(QQN::Application()->Applicant,$app->Applicant),
                                 QQ::Equal(QQN::Application()->AppliedFor,25)
                                 ));
                                 if($appnt){
                                     foreach ($appnt as $appnts){}
                                     $app->Data2 = $this->lstdept->SelectedName;
                                     $app->Data3 = $this->txtyears->Text;
                                     $app->Data4 = $this->caldate1->Text;
                                     $app->Data5 = $this->txtpost->Text;
                                     $app->Data6 = $this->txtpersonaddrs->Text;
                                 }else{
                                     QApplication::DisplayAlert('contractual offer leter not generated please first offer letter');
                                 }
                            }
                            else{
                                QApplication::DisplayAlert('Please fill remark');
                            } 
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
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/doc_view_staff.php?id='.$app->Idapplication.'&appfor='.$app->AppliedFor.'&print=2&view=1');  
                    }
            }
          
             
              protected function btnCancel_click($strFormId, $strControlId, $strParameter) {
                  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
              }
    }
    IssueDocumentForm::Run('IssueDocumentForm');
?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              