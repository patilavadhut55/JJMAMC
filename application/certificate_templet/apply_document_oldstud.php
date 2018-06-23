<?php
require('../../qcubed.inc.php');
    class IssueDocumentForm extends QForm {
        protected $lstYear;
        protected $lstPrifix;
        protected $txtFname;
        protected $txtMname;
        protected $txtLname;
        protected $txtCast;
        protected $txtReligon;
        protected $lstNationality;
        protected $calDob;
        protected $txtPob;
        protected $txtLast;
        protected $calAddmission;
        protected $txtProgress;
        protected $txtConduct;
        protected $txtYearinwhich;
        protected $txtReason;
        protected $txtRemark;
        protected $txtRegNo;
        protected $btnSave;
        protected $btnApply;
        protected $btnCancel;
       
        protected function Form_Run() {
                parent::Form_Run();
                QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            //academic
           
            $this->lstYear = new QListBox($this);
            $this->lstYear->Required = TRUE;
            $this->lstYear->Width = 150;
            $this->lstYear->AddItem("-Select One-", NULL);
            $this->lstYear->Name = "Academic Year";
            $years = CalenderYear::LoadAll();
            if($years){
                foreach ($years as $year){
                    $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                }
            }
            //Name
            $this->lstPrifix = new QListBox($this);
            
            $this->lstPrifix->Name = "Name";
            $this->lstPrifix->Width = 70;
            $pres = Prefix::LoadAll();
            if($pres){
                foreach ($pres as $pre){
                    $this->lstPrifix->AddItem($pre->Name, $pre->Idprefix);
                }
            }
            
            $this->txtFname = new QTextBox($this);
            $this->txtFname->Name = "First Name";
            $this->txtFname->Width = 180;
            
            $this->txtMname = new QTextBox($this);
            $this->txtMname->Name = "Middle Name";
            $this->txtMname->Width = 180;
            
            //Name
            $this->txtLname = new QTextBox($this);
            $this->txtLname->Name = "Last Name";
            $this->txtLname->Width = 180;
            
            //Cast
            $this->txtCast = new QTextBox($this);
            $this->txtCast->Name = "Cast";
            $this->txtCast->Width = 150;
            $this->txtCast->Visible = FALSE;
            
            //Religon
            $this->txtReligon = new QTextBox($this);
            $this->txtReligon->Name = "Religon";
            $this->txtReligon->Width = 150;
            $this->txtReligon->Visible = FALSE;
            
            //Nationality
            $this->lstNationality = new QListBox($this);
            $this->lstNationality->Name = "Nationality";
            $this->lstNationality->Width = 150;
            $this->lstNationality->AddItem("-Select One-", Null);
            $nations = Nationality::LoadAll();
            if($nations){
                foreach ($nations as $nation){
                    $this->lstNationality->AddItem($nation->Name, $nation->Idnationality);
                }
            }
            //place of birth
            $this->txtPob = new QTextBox($this);
            $this->txtPob->Name = "Place Of Birth";
            $this->txtPob->Width = 180;
            
            //date of birth
            $this->calDob = new QCalendar($this);
            $this->calDob->Width = 150;
            $this->calDob->Name = "Date of Birth";
          
            
            //last SAchool
            $this->txtLast = new QTextBox($this);
            $this->txtLast->Name ="Last School Attended";
            $this->txtLast->Width = 300;
            $this->txtLast->Visible = FALSE;
            //date of admission
            $this->calAddmission = new QCalendar($this);
            $this->calAddmission->Width = 150;
            $this->calAddmission->Name = "Date Of Admission";
            
            //Progress
            $this->txtProgress = new QTextBox($this);
            $this->txtProgress->Name = "Progress";
            $this->txtProgress->Width = 300;
            $this->txtProgress->Visible = FALSE;
            
            //Conduct
            $this->txtConduct = new QTextBox($this);
            $this->txtConduct->Name = "Conduct";
            $this->txtConduct->Width = 300;
            $this->txtConduct->Visible = FALSE;
            
            //year in which
            $this->txtYearinwhich = new QTextBox($this);
            $this->txtYearinwhich->Name = "Year in which studying and since when";
            $this->txtYearinwhich->Width = 300;
            $this->txtYearinwhich->Visible = FALSE;
            
            //rerason
            $this->txtReason = new QTextBox($this);
            $this->txtReason->Name = "Reason for leaving college";
            $this->txtReason->Width = 300;
            $this->txtReason->Visible = FALSE;
            
            //remark
            $this->txtRemark = new QTextBox($this);
            $this->txtRemark->Name = "Remark";
            $this->txtRemark->Width = 300;
            $this->txtRemark->Visible = FALSE;
            
            //Registration No
            $this->txtRegNo = new QTextBox($this);
            $this->txtRegNo->Name = "Registration No";
            $this->txtRegNo->Width = 150;
            $this->txtRegNo->Visible = FALSE;
            
            //save
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = "Save";
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(),new QAjaxAction("btnSave_Click"));
            
            $this->btnApply = new QButton($this);
            $this->btnApply->Text = "Apply";
            $this->btnApply->ButtonMode = QButtonMode::Success;
            $this->btnApply->AddAction(new QClickEvent(),new QAjaxAction("btnApply_Click"));
            $this->btnApply->Visible = FALSE;
            
            //save
            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = "cancel";
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(),new QServerAction("btnCancel_Click"));
            
            if(isset($_GET['mem'])){
                $this->btnApply->Visible = TRUE;
                $this->btnSave->Visible = FALSE;
                $this->txtCast->Visible = TRUE;
                $this->txtReligon->Visible = TRUE;
                $this->txtLast->Visible = TRUE;
                $this->txtRegNo->Visible = TRUE;
                $this->txtProgress->Visible = TRUE;
                $this->txtConduct->Visible = TRUE;
                $this->txtYearinwhich->Visible = TRUE;
                $this->txtReason->Visible = TRUE;
                $this->txtRemark->Visible = TRUE;
                
                $profs = Profile::LoadByIdprofile($_GET['mem']);
                $this->lstPrifix->SelectedValue = $profs->PrefixObject->Name;
                $this->txtFname->Text = $profs->FirstName;
                $this->txtMname->Text = $profs->MiddleName;
                $this->txtLname->Text = $profs->LastName;
                $this->lstNationality->SelectedValue = $profs->Nationality;
                $this->calDob->Text = date('d/m/Y', strtotime($profs->Dob));
                $this->txtPob->Text = $profs->BirthPlace;
                $this->calAddmission->Text = date('d/m/Y',  strtotime( $profs->AdmittedDate));
                $currents = CurrentStatus::LoadArrayByStudent($_GET['mem']);
                if($currents){
                    foreach ($currents as $cur){
                        $this->lstYear->SelectedValue = $cur->CalenderYear;
                    }
                }
                
            }
            
        }
        protected function btnCancel_Click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/certificate_templet/apply_document.php');
        }
            
        protected function btnSave_Click(){
            if($this->lstYear->SelectedValue != NULL){
                $code = Settings::LoadByName("Student");
                $code->Option = $code->Option + 1;
                $code->Save();
                $studger = new Ledger();
                $studger->Code = 'S' . $code->Option ;
                $studger->Name = $this->lstPrifix->SelectedName.' '.$this->txtFname->Text.' '.$this->txtMname->Text.' '.$this->txtLname->Text;
                $studger->Grp = 244; //Student
                $studger->Save();
                $student = new Profile();
                $student->Idprofile = $studger->Idledger;
                $student->Prefix = $this->lstPrifix->SelectedValue;
                $student->FirstName = $this->txtFname->Text;
                $student->MiddleName = $this->txtMname->Text;
                $student->LastName = $this->txtLname->Text;
    //            $student->Nationality = $this->lstNationality->SelectedValue;
    //            $student->Dob = $this->calDob->DateTime;
    //            $student->BirthPlace = $this->txtPob->Text;
    //            $student->AdmittedDate = $this->calAddmission->DateTime;
                $student->CourseOfAddmission = 793;
                $student->Save();
                $logins = new Login();
                $logins->Idlogin = $studger->Idledger;
                $logins->Username = $studger->Code;
                $logins->Password = "stud123";
                $logins->IsEnabled = 1;
                $logins->Save();
                $currents = new CurrentStatus();
                $currents->Role = 795;
                $currents->Student = $studger->Idledger;
                $currents->Semister = 1;
                $currents->CalenderYear = $this->lstYear->SelectedValue;
                $currents->Save();
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/apply_document.php?mem='.$studger->Idledger.'&doc=22');  
            }  else {
                $this->lstYear->Warning = "Please Select Year";
            }
        }
        
        protected function btnApply_Click(){
//            if(isset($_GET['mem']) && isset($_GET['doc'])){
//
//                $app = new Application();
//                $app->Applicant = $_GET['mem'];
//                $app->AppliedFor = 22;
//                $counter = CertificateTemplet::LoadByIdcertificateTemplet(22); 
//                $app->Code = $counter->Abbrivation."".$counter->Counter;
//                $counter->Counter = $counter->Counter + 1;
//                $counter->Save();
//                $app->Date = QDateTime::Now();    
//                $app->FinalDecision = 3;
//                $app->DataEntryBy = $_SESSION['login'];
//                $app->Reason = $this->txtReason->Text;
//                $app->Data9 = $this->txtCast->Text;
//                $app->Data8 = $this->txtReligon->Text;
//                $app->Data2 = 'NIL';
//                $app->Data3 = 'GOOD';
//                $app->Data4 = $this->txtRemark->Text;
//                $app->Data10 = $this->txtLast->Text;
//                $app->Data11 = $this->txtProgress->Text;
//                $app->Data12 = $this->txtRegNo->Text;
//                $app->Data1 = $this->txtYearinwhich->Text;
//                $app->Save();
//                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/leaving_certificate.php?id='.$app->Idapplication.'&appfor=22'.'&view=1');  
//            
//                $counter = CertificateTemplet::LoadByIdcertificateTemplet(22); 
//                $approvals = Approvel::LoadArrayByCertificateTemplet($counter->IdcertificateTemplet);
//                foreach ($approvals as $approval){
//                    $appaproval = new AppApproval();
//                    $appaproval->Application = $app->Idapplication;
//                    $appaproval->Roll = $approval->Roll;
//                    $appaproval->Code = $approval->Code;
//                    $appaproval->IsFinalAuthority = $approval->IsFinalAuthority;
//                    $appaproval->Decision = 3;
//                    $appaproval->Save();
//                }
//                     
//
//
//                      //  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/leaving_certificate.php?id='.$app->Idapplication.'&appfor= 22');  
//                }
            }
        
     
    }
    IssueDocumentForm::Run('IssueDocumentForm');
?>

