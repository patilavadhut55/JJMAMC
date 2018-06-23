<?php

require('../../qcubed.inc.php');

class AdmissionForm extends QForm {
    //admission controls 
    protected $txtCode;
    protected $calAdmitdate;
    protected $lstYear;
    protected $lstadmissionmode;
    protected $lstReservation;
    protected $lstCourse;
    protected $lstprefix;
    protected $txtFirstname;
    protected $txtMiddlename;
    protected $txtLastname;
    protected $txtFirstname1;
    protected $txtMiddlename1;
    protected $txtLastname1;
    protected $txtOldName;
    protected $txtReason;
    protected $lstGender;
    protected $calDob;
    protected $txtAge;
    protected $txtFmothername;
    protected $txtMmothername;
    protected $txtLmothername;
    protected $txtFfathername;
    protected $txtMfathername;
    protected $txtLfathername;
    protected $lstBloodgroup;
    protected $lstReligion;
    protected $lstcastecategory;
    protected $lstCaste;
    protected $chkCvc;
    protected $chkNcl;
    protected $lstHandicaped;
    protected $lstConcession;
    protected $lstSem;
    
    protected $btnAdmissionSave;
    protected $btnDelete;
    
    //personal details
    protected $txtAddress1;
    protected $txtAddress2;
    protected $lststate;
    protected $lststate1;
    protected $lstdistrict;
    protected $lstdistrict1;
    
    protected $lsttaluka;
    protected $lsttaluka1;
    protected $txtCity;
    protected $txtCity1;
    protected $txtContact1;
    protected $txtContact2;
    
    protected $txtPlaceOfBirth;
    protected $lstMarried;
    protected $chkAbove;
    protected $txtRelation;
    protected $txtIncome;
    protected $txtOcupation;
    
    protected $btnPersonalSave;
   
    //education details controls
    protected $txtPreQual;
    protected $txtInstitute;
    protected $txtTotal;
    protected $txtOutoftotal;
    protected $txtPassYear;
    protected $txtSub1Mrk;
    protected $btnEduDetailsSave;
    protected $lbldelete;
    protected $lblAdd;
    protected $btnNext;
    protected $lstSubject;
    protected $txtMark;
    protected $txtOutOfMark;
    protected $txtMarkPer;
    protected $btnAddMark;
    protected $lblDeleteMark;
 

    //document Upload
    protected $lstDocs;
    protected $btnAdd;
    protected $lbldocdelete;
    protected $btnUpload;
    protected $lstCalender;
    protected $btnFinalize;


    protected function Form_Create() {
        parent::Form_Create();

        $this->txtCode = new QTextBox($this);
        $this->txtCode->ReadOnly = TRUE;
        $this->txtCode->Width = "30%";
        $code = Settings::LoadByName("Student");
        $this->txtCode->Text = 'S'.$code->Option;
        
        $this->calAdmitdate = new QCalendar($this);
        $this->calAdmitdate->DateTimeFormat = 'dd/mm/yy';
        $this->calAdmitdate->Text = date('d/m/Y',  strtotime(QDateTime::Now()));
        $this->calAdmitdate->Width = 150;
        //year
        $this->lstYear = new QListBox($this);
        $this->lstYear->AddItem("- Select Year -", NULL);
        $this->lstYear->Width = '100%';
        $years = AcademicYear::QueryArray(QQ::Equal(QQN::AcademicYear()->Parrent, NULL));
        foreach ($years as $year) {
            $this->lstYear->AddItem($year->Name, $year->IdacademicYear);
        }
        //Admissionmode
        $this->lstadmissionmode = new QSelect2ListBox($this);
        $this->lstadmissionmode->AddItem("- Select Admission Mode -", NULL);
        $this->lstadmissionmode->Width = "100%";
        $caps = AdmissionMode::LoadAll();
        foreach ($caps as $cap) {
            $this->lstadmissionmode->AddItem($cap->Name, $cap->IdadmissionMode);
        }
        //university Reservation
        $this->lstReservation = new QListBox($this);
        $this->lstReservation->Width = "75%";
        $this->lstReservation->AddItem("- Select Reservation -", NULL);
        $reservs = UniversityReservation::LoadAll();
        foreach($reservs as $reserv){
            $this->lstReservation->AddItem($reserv->Name, $reserv->IduniversityReservation);
        }
        //Course
        $this->lstCourse = new QListBox($this);
        $this->lstCourse->AddItem("- Select Course -", NULL);
        $this->lstCourse->Required = TRUE;
        $this->lstCourse->Width = "100%";
        $courses = Role::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Grp, 5) //program
                        ), QQ::OrderBy(QQN::Role()->Code)
                    );
        foreach ($courses as $course) {
            $this->lstCourse->AddItem(delete_all_between('[', ']', $course->Name), $course->Idrole);
        }
        $this->lstCourse->SelectedValue = 793; //BAMS
        
        //preffix
        $this->lstprefix = new QListBox($this);
        $prefixs = Prefix::LoadAll();
        foreach ($prefixs as $prefix) {
            $this->lstprefix->AddItem($prefix->Name, $prefix->Idprefix);
        }
        $this->lstprefix->Width = '100%';
        
        
        //Gender            
        $this->lstGender = new QListBox($this);
        $this->lstGender->Width = "75%";
        $this->lstGender->AddItem("- Select Gender -", NULL);
        $geders = Gender::LoadAll();
        foreach ($geders as $gender) {
            $this->lstGender->AddItem($gender->Name, $gender->Idgender);
        }
        //caste catagories 
        $this->lstcastecategory = new QListBox($this);
        $this->lstcastecategory->Width = "100%";
        $this->lstcastecategory->AddItem("-Select Caste Category -", NULL);
        $castecats = FeesConcession::LoadAll();
        foreach ($castecats as $castecat) {
            $this->lstcastecategory->AddItem($castecat->Name, $castecat->IdfeesConcession);
        }
        //reliogion
        $this->lstReligion = new QListBox($this);
        $this->lstReligion->Width = "100%";
        $this->lstReligion->AddItem("- Select Religion -", NULL);
        $religns = Religion::LoadAll();
        foreach ($religns as $relign) {
            $this->lstReligion->AddItem($relign->Name, $relign->Idreligion);
        }
        //handicaped
        $this->lstHandicaped = new QListBox($this);
        $this->lstHandicaped->Width = "75%";
        $this->lstHandicaped->AddItem("- Select Category -", NULL);
        $vars = HandicapedCat::LoadAll();
        foreach ($vars as $var) {
            $this->lstHandicaped->AddItem($var->Name, $var->IdhandicapedCat);
        }
        //bloodgroup
        $this->lstBloodgroup = new QListBox($this);
        $this->lstBloodgroup->Width = "75%";
        $this->lstBloodgroup->AddItem("- Select Blood Group -", NULL);
        $bgs = BloodGroup::LoadAll();
        foreach ($bgs as $bg) {
            $this->lstBloodgroup->AddItem($bg->Name,$bg->IdbloodGroup);
        }
        //caste
        $this->lstCaste = new QSelect2ListBox($this);
        $this->lstCaste->Width = "100%";
        $this->lstCaste->AddItem("- Select Caste -", NULL);
        $casts = Cast::LoadAll();
        foreach ($casts as $cast) {
            $this->lstCaste->AddItem($cast->Name, $cast->Idcast);
        }
        
        $this->calDob = new QCalendar($this);
        $this->calDob->DateTimeFormat = 'dd/mm/yy';
        $this->calDob->Placeholder = 'dd/mm/yyyy';
        $this->calDob->Width = 130;
        $this->calDob->AddAction(new QChangeEvent(), new QAjaxAction('calDob_Click'));
        
        //simple textboxs
        $this->txtFirstname = new QTextBox($this);
        $this->txtFirstname->Placeholder = 'First Name';
        
        $this->txtMiddlename = new QTextBox($this);
        $this->txtMiddlename->Placeholder = 'Middel Name';
        
        $this->txtLastname = new QTextBox($this);
        $this->txtLastname->Placeholder = 'Last Name';
        $this->txtLastname->AddAction(new QEnterKeyEvent(), new QAjaxAction('Names'));
        $this->txtLastname->AddAction(new QFocusOutEvent(), new QAjaxAction('Names'));
        
        $this->txtFirstname1 = new QTextBox($this);
        $this->txtFirstname1->Placeholder = 'First Name';
        
        $this->txtMiddlename1 = new QTextBox($this);
        $this->txtMiddlename1->Placeholder = 'Middel Name';
        
        $this->txtLastname1 = new QTextBox($this);
        $this->txtLastname1->Placeholder = 'Last Name';
        
        $this->txtFfathername = new QTextBox($this);
        $this->txtFfathername->Placeholder = 'Father First Name';
        
        $this->txtMfathername = new QTextBox($this);
        $this->txtMfathername->Placeholder = 'Father Middel Name';
        
        $this->txtLfathername = new QTextBox($this);
        $this->txtLfathername->Placeholder = 'Father Last Name';
        
        $this->txtFmothername = new QTextBox($this);
        $this->txtFmothername->Placeholder = 'Mother First Name';
        
        $this->txtMmothername = new QTextBox($this);
        $this->txtMmothername->Placeholder = 'Mother Middel Name';
        
        $this->txtLmothername = new QTextBox($this);
        $this->txtLmothername->Placeholder = 'Mother Last Name';
        
        $this->txtAge = new QTextBox($this);
        $this->txtOldName = new QTextBox($this);
        $this->txtReason = new QTextBox($this);
        $this->chkCvc = new QCheckBox($this);
        $this->chkNcl = new QCheckBox($this);
        $this->chkCvc->Width = $this->chkNcl->Width = 20;
        $this->chkCvc->Height = $this->chkNcl->Height = 20;
        
        $this->txtAge->Width = "100%";
        $this->txtOldName->Width = "75%";
        $this->txtReason->Width = "80%";
        
        $this->txtFirstname->Width = $this->txtMiddlename->Width = $this->txtLastname->Width = 
        $this->txtFfathername->Width = $this->txtMfathername->Width = $this->txtLfathername->Width = 
        $this->txtFirstname1->Width = $this->txtMiddlename1->Width = $this->txtLastname1->Width =         
        $this->txtFmothername->Width = $this->txtMmothername->Width = $this->txtLmothername->Width = "100%";
        
        $this->btnAdmissionSave = new QButton($this);
        $this->btnAdmissionSave->ButtonMode = QButtonMode::Save;
        $this->btnAdmissionSave->AddAction(new QClickEvent(), new QAjaxAction('btnAdmissionSave_click'));
        
        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = "Delete";
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
        $this->btnDelete->Visible = FALSE;
        
        //presonal Details Controls
        $this->txtContact1 = new QTextBox($this);
        $this->txtContact1->MaxLength = 10;
        $this->txtContact1->TextMode = QTextMode::Mobile;
        $this->txtContact2 = new QTextBox($this);
        $this->txtContact2->MaxLength = 10;
        $this->txtContact2->TextMode = QTextMode::Mobile;
        
        $this->txtCity = new QTextBox($this);
        $this->txtCity1 = new QTextBox($this);
        
        //large text box
        $this->txtAddress1 = new QTextBox($this);
        $this->txtAddress2 = new QTextBox($this);
        $this->txtAddress1->Width = $this->txtAddress2->Width =  "72%";
        $this->txtAddress1->TextMode = $this->txtAddress2->TextMode =  QTextMode::MultiLine;

        $this->lstMarried = new QListBox($this);
        $this->lstMarried->AddItem("- Select State -",NULL);
        $status = MarrialStatus::LoadAll();
        foreach ($status as $statu){
            $this->lstMarried->AddItem($statu->Name,$statu->IdmarrialStatus);
        }
        
        $this->chkAbove = new QCheckBox($this);
        $this->chkAbove->Width =  20;
        $this->chkAbove->Height = 20;
        $this->chkAbove->AddAction(new QChangeEvent(), new QAjaxAction('Above_click'));
        
        $this->txtIncome = new QTextBox($this);
        $this->txtOcupation = new QTextBox($this);
        $this->txtRelation = new QTextBox($this);
        $this->txtPlaceOfBirth = new QTextBox($this);
        
        $this->lststate = new QSelect2ListBox($this);
        $this->lststate->AddItem('-Select State-',NULL);
        $states = Place::QueryArray(
                 QQ::AndCondition(
                        QQ::Equal(QQN::Place()->Grp, 2)
                        ));
        foreach ($states as $state){
            $this->lststate->AddItem($state->Name,$state->Idplace);
        }
        $this->lststate->AddAction(new QChangeEvent(), new QAjaxAction('lststate_Click'));

        $this->lstdistrict = new QSelect2ListBox($this);
        $this->lstdistrict->AddItem('-Select District-',NULL);
        $this->lstdistrict->AddAction(new QChangeEvent(), new QAjaxAction('lstdistrict_Click'));

        $this->lsttaluka = new QSelect2ListBox($this);
        $this->lsttaluka->AddItem('-Select Taluka-',NULL);
        
        $this->lststate1 = new QSelect2ListBox($this);
        $this->lststate1->AddItem("- Select State -",NULL);
        $states = Place::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Place()->Grp, 2)
                        ));
        foreach ($states as $state){
            $this->lststate1->AddItem($state->Name, $state->Idplace);
        }
        $this->lststate1->AddAction(new QChangeEvent(),new QAjaxAction('lststate1_Click'));

        $this->lstdistrict1 = new QSelect2ListBox($this);
        $this->lstdistrict1->AddItem("- Select District -",NULL);
        $this->lstdistrict1->AddAction(new QChangeEvent(),new QAjaxAction('lstdistrict1_Click'));

        $this->lsttaluka1 = new QSelect2ListBox($this);
        $this->lsttaluka1->AddItem('- Select Taluka -',NULL);
        
        $this->btnPersonalSave = new QButton($this);
        $this->btnPersonalSave->ButtonMode = QButtonMode::Save;
        $this->btnPersonalSave->AddAction(new QClickEvent(), new QAjaxAction('btnPersonalSave_click'));

        $this->lststate->Width = $this->lststate1->Width = $this->lsttaluka->Width = 
        $this->lsttaluka1->Width = $this->txtPlaceOfBirth->Width = $this->txtContact1->Width =  
        $this->txtIncome->Width = $this->txtRelation->Width =  "90%";
        $this->txtCity->Width = $this->txtCity1->Width = $this->txtContact2->Width = $this->lstMarried->Width =
        $this->lstdistrict->Width = $this->lstdistrict1->Width = $this->txtOcupation->Width = "50%";
        
        $this->txtPreQual = new QSelect2ListBox($this);
        $this->txtPreQual->Name = "Pre Qualification";
        $prequals = EducationTitle::LoadAll();
        $this->txtPreQual->AddItem("-Select One-",NULL);
        foreach ($prequals as $prequal){
            $this->txtPreQual->AddItem($prequal->Name,$prequal->IdeducationTitle);
        }

        $this->txtInstitute = new QTextBox($this);
        $this->txtInstitute->Name ="Institute";
        
        $this->txtTotal = new QTextBox($this);
        $this->txtTotal->Name = "Total";
        
        $this->txtOutoftotal = new QTextBox($this);
        $this->txtOutoftotal->Name = "OutOf";

        $this->txtPassYear =  new QTextBox($this);
        $this->txtPassYear->Name = "Passing Year";

        $this->txtSub1Mrk = new QTextBox($this);
        $this->txtSub1Mrk->Name ="Subject1";
        $this->txtSub1Mrk->AddAction(new QClickEvent(),new QServerAction("txtSub1Mark_Click"));
        
        $this->lstSubject = new QSelect2ListBox($this);
        $this->lstSubject->Name = "Subject";
        $this->lstSubject->AddItem("--Select One", NULL);
        $subjects = Subject::LoadAll();
        if($subjects){
            foreach ($subjects as $sub){
                $this->lstSubject->AddItem($sub->Name, $sub->Idsubject);
            }
        }
        
        $this->txtMark = new QTextBox($this);
        $this->txtMark->Name = "Mark";
        
        $this->txtOutOfMark = new QTextBox($this);
        $this->txtOutOfMark->Name = "OutOf";
        
        $this->txtMarkPer = new QTextBox($this);
        $this->txtMarkPer->Name = "Percentage";
        $this->txtMarkPer->AddAction(new QClickEvent(),new QServerAction("txtMarkper_Click"));
        
       
        
        $this->btnAddMark = new QButton($this);
        $this->btnAddMark->ButtonMode = QButtonMode::Add;
        $this->btnAddMark->Text = "Add";
        $this->btnAddMark->AddAction(new QClickEvent(), new QAjaxAction('btnAddMark_Click'));

        
        $this->btnEduDetailsSave = new QButton($this);
        $this->btnEduDetailsSave->ButtonMode = QButtonMode::Success;
        $this->btnEduDetailsSave->Text = "Submit";
        $this->btnEduDetailsSave->AddAction(new QClickEvent(), new QAjaxAction('btnEduDetailsSave_Click'));

        $this->btnNext = new QButton($this);
        $this->btnNext->ButtonMode = QButtonMode::Warning;
        $this->btnNext->Text = "Next >>";
        $this->btnNext->AddAction(new QClickEvent(), new QAjaxAction('btnNext_Click'));

        //document upload control
        $this->lstDocs = new QSelect2ListBox($this);
        $this->lstDocs->Name = "Docs";
        $this->lstDocs->AddItem("-Select Doc-",NULL);
       // $setting = Settings::LoadByName("Document Ledger Group");
        $docs = Ledger::LoadArrayByGrp(5297);
        foreach ($docs as $doc){
            $this->lstDocs->AddItem($doc->Name,$doc->Idledger);    
        }

        $this->btnAdd = new QButton($this);
        $this->btnAdd->ButtonMode = QButtonMode::Add;
        $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));

        $this->btnUpload = new QButton($this);
        $this->btnUpload->ButtonMode = QButtonMode::Success;
        $this->btnUpload->Text = "Upload";
        $this->btnUpload->AddAction(new QClickEvent(), new QServerAction('btnUpload_Click'));
        
        $this->lstCalender = new QSelect2ListBox($this);
        $this->lstCalender->AddItem("-Select Calender-", NULL);
        $this->lstCalender->Width = 200;
        $calenders = CalenderYear::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::CalenderYear()->Visible, 1)),
                                QQ::Clause(QQ::OrderBy(QQN::CalenderYear()->Name,False)
                            ));
            foreach ($calenders as $calender) {
               $this->lstCalender->AddItem($calender->Name, $calender->IdcalenderYear);    
                if($calender->Active == 1){
                    $this->lstCalender->SelectedValue = $calender->IdcalenderYear;
                }
            }
        
        $this->btnFinalize = new QButton($this);
        $this->btnFinalize->ButtonMode = QButtonMode::Warning;
        $this->btnFinalize->Text = 'Finalize';
        $this->btnFinalize->AddAction(new QClickEvent(), new QAjaxAction('btnFinalize_click'));
        
        
        
       //edit data code 
        if(isset($_GET['code'])){
            $doc = MemberDoc::LoadByIdmemberDoc($_GET['docid']);
            $scancode = Settings::LoadByName("Scan");
            $scancode->Option = $_GET['code'] + 1 ;
            $scancode->Save();
            if($doc->Scans == NULL){ 
               $doc->Scans = $_GET['code'];
               $doc->Save();
            }else{
                //$this->btnPrint->Visible = TRUE;
                $add = 0;
                $scans = explode(',', $doc->Scans);
                foreach ($scans as $scan){
                    if($scan == $_GET['code']) $add = 1;
                }
                if($add == 0)$doc->Scans = $doc->Scans.','.$_GET['code'];
                $doc->Save();
            }
        }
        
        
        if(isset($_GET['id'])){
            $this->btnDelete->Visible = TRUE;
            $student = Profile::LoadByIdprofile($_GET['id']);
            $this->txtCode->Text = $student->IdprofileObject->Code;
            $this->lstprefix->SelectedValue = $student->Prefix;
            
            $this->txtFirstname->Text = $student->FirstName;
            $this->txtMiddlename->Text = $student->MiddleName;
            $this->txtLastname->Text = $student->LastName;
            
            $this->txtFirstname1->Text = $student->MfirstName;
            $this->txtMiddlename1->Text = $student->MmiddleName;
            $this->txtLastname1->Text = $student->MlastName;
            
            $this->txtFfathername->Text = $student->FatherFirstName;
            $this->txtMfathername->Text = $student->FatherMiddleName;
            $this->txtLfathername->Text = $student->FatherLastName;
            
            $this->txtFmothername->Text = $student->MotherFirstName;
            $this->txtMmothername->Text = $student->MotherMiddleName;
            $this->txtLmothername->Text = $student->MotherLastName;
            
            $this->txtAge->Text = $student->Age;
            $this->txtOldName->Text = $student->OldName;
            $this->txtReason->Text = $student->ReasonOfNameChange;
           
            $this->lstCaste->SelectedValue = $student->Caste;
            $this->chkCvc->Checked = $student->Cvc;
            $this->chkNcl->Checked = $student->Ncl;
            
            $this->lstBloodgroup->SelectedValue = $student->BloodGroup;
            $this->lstGender->SelectedValue = $student->Gender;
            $this->lstReligion->SelectedValue = $student->Religion;
            
            $this->lstYear->SelectedValue = $student->Year;
            $this->lstcastecategory->SelectedValue = $student->CasteCat;
            $this->lstadmissionmode->SelectedValue = $student->AdmissionMode;
            
            $this->lstReservation->SelectedValue = $student->UniversityReservation;
            $this->lstCourse->SelectedValue = $student->CourseOfAddmission;
            $this->lstHandicaped->SelectedValue = $student->HandicapedCat;
            
            if($student->Dob)
                $this->calDob->Text = date('d/m/Y', strtotime($student->Dob));
            if($student->AdmittedDate)
                $this->calAdmitdate->Text = date('d/m/Y', strtotime($student->AdmittedDate));
            
            $this->txtAddress1->Text = $student->AddressLine1 ;
            $this->txtAddress2->Text = $student->AddressLine2;
            $this->txtContact1->Text = $student->Contact1;
            $this->txtContact2->Text = $student->Contact2;
            $this->txtIncome->Text = $student->AnnualFamilyIncome;
            $this->txtPlaceOfBirth->Text = $student->BirthPlace;
            $this->txtOcupation->Text = $student->Occupation;
            $this->txtRelation->Text = $student->RelationOfApplicantWithGuardian;
            $this->lstMarried->SelectedValue = $student->MarrtialStatus ;
            $this->txtCity->Text = $student->City;
            $this->txtCity1->Text = $student->City1;
            $this->lststate->SelectedValue = $student->State;
            $this->lststate1->SelectedValue = $student->State1;
             $this->lststate_Click();
            $this->lstdistrict->SelectedValue = $student->District;
             $this->lststate1_Click();
            $this->lstdistrict1->SelectedValue =  $student->District1;
             $this->lstdistrict_Click();
            $this->lsttaluka->SelectedValue = $student->Taluka;
             $this->lstdistrict1_Click();   
            $this->lsttaluka1->SelectedValue = $student->Taluka1;
            
            $this->lstCalender->SelectedValue = $student->CalenderYear;
            
            $edus = EducationDetails::LoadArrayByStudent($_GET['id']);
            if($edus){
                foreach ($edus as $edu){
                    $this->lbldelete[$edu->IdeducationDetails] = new QButton($this);
                    $this->lbldelete[$edu->IdeducationDetails]->Text = "<i class='fa fa-trash'></i>";
                    $this->lbldelete[$edu->IdeducationDetails]->ButtonMode = QButtonMode::Danger;
                    $this->lbldelete[$edu->IdeducationDetails]->HtmlEntities = FALSE;
                    $this->lbldelete[$edu->IdeducationDetails]->AddAction(new QClickEvent(), new QServerAction('lbldelete_click'));
                    $this->lbldelete[$edu->IdeducationDetails]->ActionParameter = $edu->IdeducationDetails;
                    
                    $this->lblAdd[$edu->IdeducationDetails] = new QButton($this);
                    $this->lblAdd[$edu->IdeducationDetails]->Text = "<i class='fa fa-plus'></i>";
                    $this->lblAdd[$edu->IdeducationDetails]->ButtonMode = QButtonMode::Primary;
                    $this->lblAdd[$edu->IdeducationDetails]->HtmlEntities = FALSE;
                    $this->lblAdd[$edu->IdeducationDetails]->AddAction(new QClickEvent(), new QServerAction('lblAdd_click'));
                    $this->lblAdd[$edu->IdeducationDetails]->ActionParameter = $edu->IdeducationDetails;
               
                }
            }
            
            $memdocs = MemberDoc::LoadArrayByMember($student->Idprofile);
            if($memdocs){
                foreach ($memdocs as $memdoc){
                    $this->lbldocdelete[$memdoc->IdmemberDoc] = new QButton($this);
                    $this->lbldocdelete[$memdoc->IdmemberDoc]->Text = "<i class='fa fa-trash'></i>";
                    $this->lbldocdelete[$memdoc->IdmemberDoc]->ButtonMode = QButtonMode::Danger;
                    $this->lbldocdelete[$memdoc->IdmemberDoc]->HtmlEntities = FALSE;
                    $this->lbldocdelete[$memdoc->IdmemberDoc]->AddAction(new QClickEvent(), new QServerAction('lbldocdelete_click'));
                    $this->lbldocdelete[$memdoc->IdmemberDoc]->ActionParameter = $memdoc->IdmemberDoc;
                }
            }
        }
        if(isset($_GET['sub'])){
            $markss = Marks::LoadArrayByStudentEducation($_GET['sub']);
                if($markss){
                    foreach ($markss as $mark){
                        $this->lblDeleteMark[$mark->Idmarks] = new QButton($this);
                        $this->lblDeleteMark[$mark->Idmarks]->Text = "<i class='fa fa-trash'></i>";
                        $this->lblDeleteMark[$mark->Idmarks]->ButtonMode = QButtonMode::Danger;
                        $this->lblDeleteMark[$mark->Idmarks]->HtmlEntities = FALSE;
                        $this->lblDeleteMark[$mark->Idmarks]->AddAction(new QClickEvent(), new QServerAction('lblDeleteMark_Click'));
                        $this->lblDeleteMark[$mark->Idmarks]->ActionParameter = $mark->Idmarks;
                    
                    }
            }
        }
    }
 
    protected function Names() {
        $this->txtFfathername->Text = $this->txtMmothername->Text = $this->txtMiddlename->Text;
        $this->txtLfathername->Text = $this->txtLmothername->Text = $this->txtLastname->Text;
    }
    public function calDob_Click() {
        if($this->calDob->Text != ''){
            $dob = explode("/", $this->calDob->Text);
            $cnt = sizeof(explode("/", $this->calDob->Text));

            $error = 0;
            if($cnt == 3) {
                $this->txtAge->Text = QDateTime::Now()->Year - $dob[2];
                if($this->txtAge->Text < 17) {
                    $error = 1;
                }
                if($this->txtAge->Text == 17 && $dob[1] >= 10 && $dob[0] >= 2) {
                    $error = 1;
                }
                if($this->txtAge->Text == 17 && $dob[1] > 10 && $dob[0] == 1) {
                    $error = 1;
                }
            } else {
                $error == 1;
            }
            if($error == 1) {
                QApplication::DisplayAlert("Student is not valid for Application.");
                $this->calDob->Text = $this->txtAge->Text = "";
            }
        }
    }
    public function lststate_Click() {
        if ($this->lststate->SelectedValue != NULL) {
            $this->lstdistrict->RemoveAllItems();
            $this->lstdistrict->AddItem('-Select District-',NULL);
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lststate->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lstdistrict->AddItem($place->Name, $place->Idplace);
            }
        }
    }
    public function lstdistrict_Click() {
        if ($this->lstdistrict->SelectedValue != NULL) {
            $this->lsttaluka->RemoveAllItems();
            $this->lsttaluka->AddItem('-Select Taluka-',NULL);
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lstdistrict->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lsttaluka->AddItem($place->Name, $place->Idplace);
            }
        }
    }
    public function lststate1_Click() {
        if ($this->lststate1->SelectedValue != NULL) {
            $this->lstdistrict1->RemoveAllItems();
            $this->lstdistrict1->AddItem('-Select District-',NULL);
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lststate1->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lstdistrict1->AddItem($place->Name, $place->Idplace);
            }
        }
    }
    public function lstdistrict1_Click() {
        if ($this->lstdistrict1->SelectedValue != NULL) {
            $this->lsttaluka1->RemoveAllItems();
            $this->lsttaluka1->AddItem('-Select Taluka-',NULL);
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lstdistrict1->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lsttaluka1->AddItem($place->Name, $place->Idplace);
            }
        }
    }
    protected function Above_click() {
        if ($this->chkAbove->Checked == 1) {
            $this->txtAddress2->Text = $this->txtAddress1->Text;
            $this->lststate1->SelectedValue = $this->lststate->SelectedValue;
            $this->lststate1_Click();
            $this->lstdistrict1->SelectedValue = $this->lstdistrict->SelectedValue;
            $this->lstdistrict1_Click();
            $this->lsttaluka1->SelectedValue = $this->lsttaluka->SelectedValue;
            $this->txtCity1->Text = $this->txtCity->Text;
        } else {
            $this->txtAddress2->Text = "";
            $this->lststate1->SelectedValue = NULL;
            $this->lstdistrict1->SelectedValue = NULL;
            $this->lsttaluka1->SelectedValue = NULL;
            $this->txtCity1->Text = "";
        }

    }
    
    //save data functions
    protected function btnAdmissionSave_click(){
     
        $error = 0;
        if($this->txtAge->Text < 17) {
            $error = 1;
            QApplication::DisplayAlert("This Student is not valid for Admission Age is below 17");
        }
        if($error == 0) {
            if($this->txtFirstname->Text != "" && $this->txtMiddlename->Text != "" && $this->txtLastname->Text != "" && $this->lstCourse->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL && $this->calAdmitdate->Text != "" && $this->lstCaste->SelectedValue != NULL && $this->lstReligion->SelectedValue != NULL) {
                if(isset($_GET['id'])){
                    $student = Profile::LoadByIdprofile($_GET['id']);
                    $leds = Ledger::LoadByIdledger($_GET['id']);
                }else{
                    $code = Settings::LoadByName("Student");
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $studger = new Ledger();
                    $studger->Code = 'S' . $code->Option ;
                    $studger->Name =  $this->lstprefix->SelectedName. ' ' .$this->txtFirstname->Text . ' ' . $this->txtMiddlename->Text . ' ' . $this->txtLastname->Text;
                    $studger->Grp = 244; //Student
                    $studger->Save();
                    $student = new Profile();
                    $student->Idprofile = $studger->Idledger;

                }
                $student->Prefix = $this->lstprefix->SelectedValue;

                $student->FirstName = $this->txtFirstname->Text;
                $student->MiddleName = $this->txtMiddlename->Text;
                $student->LastName = $this->txtLastname->Text;
                
                $student->MfirstName = $this->txtFirstname1->Text;
                $student->MmiddleName = $this->txtMiddlename1->Text;
                $student->MlastName = $this->txtLastname1->Text;

                $student->FatherFirstName = $this->txtFfathername->Text;
                $student->FatherMiddleName = $this->txtMfathername->Text;
                $student->FatherLastName = $this->txtLfathername->Text;

                $student->MotherFirstName = $this->txtFmothername->Text;
                $student->MotherMiddleName = $this->txtMmothername->Text;
                $student->MotherLastName = $this->txtLmothername->Text;

                $student->OldName = $this->txtOldName->Text;
                $student->ReasonOfNameChange  = $this->txtReason->Text;
                $student->Caste = $this->lstCaste->SelectedValue;

                $student->Age = $this->txtAge->Text;
                $student->UniversityReservation = $this->lstReservation->SelectedValue;
                $student->Cvc = $this->chkCvc->Checked;

                $student->Ncl = $this->chkNcl->Checked;
                $student->AdmissionMode = $this->lstadmissionmode->SelectedValue;
                $student->CourseOfAddmission = $this->lstCourse->SelectedValue;

                $student->BloodGroup = $this->lstBloodgroup->SelectedValue;
                $student->Gender = $this->lstGender->SelectedValue;
                $student->Religion = $this->lstReligion->SelectedValue;

                $student->Year = $this->lstYear->SelectedValue;
                $student->CasteCat = $this->lstcastecategory->SelectedValue;
                $student->FeeConcession = $this->lstcastecategory->SelectedValue;
                $student->Caste =  $this->lstCaste->SelectedValue;
                $student->HandicapedCat = $this->lstHandicaped->SelectedValue;


                $dob = explode("/", $this->calDob->Text);
                if($dob && $this->calDob->Text != ''){
                    $student->Dob = QDateTime::FromTimestamp(strtotime($dob[2] . $dob[1] . $dob[0]));
                }    
                $date = explode("/", $this->calAdmitdate->Text);
                if ($date)
                    $student->AdmittedDate = QDateTime::FromTimestamp(strtotime($date[2] . $date[1] . $date[0]));

                $student->Save();
                
                $leds = Ledger::LoadByIdledger($student->Idprofile);
                $leds->Name = $this->lstprefix->SelectedName.' '.$this->txtFirstname->Text.' '.$this->txtMiddlename->Text.' '.$this->txtLastname->Text;
                $leds->Save();
                
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission.php?id='.$student->Idprofile.'&tab=2');
            }else {
                QApplication::DisplayAlert("Please fill required field !! ");
            }
        }
        
        
    }
    
    protected function btnPersonalSave_click(){
        if(isset($_GET['id'])) {
            $student = Profile::LoadByIdprofile($_GET['id']);
            
            $student->AddressLine1 = $this->txtAddress1->Text;
            $student->AddressLine2 = $this->txtAddress2->Text;
            $student->Contact1 = $this->txtContact1->Text;
            $student->Contact2 = $this->txtContact2->Text;
            $student->AnnualFamilyIncome = $this->txtIncome->Text;
            $student->BirthPlace = $this->txtPlaceOfBirth->Text;
            $student->Occupation = $this->txtOcupation->Text;
            $student->RelationOfApplicantWithGuardian = $this->txtRelation->Text;
            $student->MarrtialStatus = $this->lstMarried->SelectedValue;
            $student->City = $this->txtCity->Text;
            $student->City1 = $this->txtCity1->Text;
            $student->State = $this->lststate->SelectedValue;
            $student->State1 = $this->lststate1->SelectedValue;
            $student->District = $this->lstdistrict->SelectedValue;
            $student->District1 = $this->lstdistrict1->SelectedValue;
            $student->Taluka = $this->lsttaluka->SelectedValue;
            $student->Taluka1 = $this->lsttaluka1->SelectedValue;
            $student->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission.php?id='.$_GET['id'].'&tab=3');
        }
        
    }
    public function txtSub1Mark_Click(){
        if(isset($_GET['id'])){
            $total = ($this->txtTotal->Text /$this->txtOutoftotal->Text )*100;
            $this->txtSub1Mrk->Text = number_format($total,2,'.','');
        }
    }

    //Save For Academic Detail 
    public function btnEduDetailsSave_Click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id'])){
            $data = explode('-',$this->txtPassYear->Text);
            if($this->txtPreQual->SelectedValue != NULL){
            //if( strpos($this->txtPassYear->Text,'-') == 4 && intval($data)){
                $stud = Profile::LoadByIdprofile($_GET['id']);
                //Save Education Details
                $education = new EducationDetails();
                $education->Student = $stud->Idprofile;
                $education->PreQualification = $this->txtPreQual->SelectedValue;
                $education->Institute = $this->txtInstitute->Text;
                $education->OutOf = $this->txtOutoftotal->Text;
                $education->Total = $this->txtTotal->Text;
                $education->PassingYear = $this->txtPassYear->Text;
                $education->Percentage = $this->txtSub1Mrk->Text;
                $education->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$stud->Idprofile.'&tab=3');  
          /*  }else {
                QApplication::DisplayAlert("Enter Proper Passing Year"); 
            }*/
            }else{
                QApplication::DisplayAlert("Enter Proper Qualification"); 
            }
        }
    }
    
    protected function lbldelete_click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id'])){
            $education = EducationDetails::LoadByIdeducationDetails($strParameter);
            $education->Delete();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=3');
        }
    }
    protected function lblDeleteMark_Click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['sub'])){
            $markss = Marks::LoadByIdmarks($strParameter);
            if($markss){
                $markss->Delete();
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=3&sub='.$_GET['sub']);
        }
        
    }

    protected function lblAdd_click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id'])){
               QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=3&sub='.$strParameter);
        }
    }
    protected function btnAddMark_Click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id']) && isset($_GET['sub'])){
            if($this->lstSubject->SelectedValue != NULL){
            $mark = new Marks();
            $mark->StudentEducation = $_GET['sub'];
            $mark->Subject = $this->lstSubject->SelectedValue;
            $mark->MarksObtained = $this->txtMark->Text;
            $mark->OutOf = $this->txtOutOfMark->Text;
            $mark->Per = 0;
            $mark->Save();
            
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=3&sub='.$_GET['sub']);
        }
    }

    protected function btnNext_Click(){
        if(isset($_GET['id'])){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=4');
        }
    }

    protected function btnAdd_Click(){
        if($this->lstDocs->SelectedValue != NULL && isset($_GET['id'])){
            //To Scan For Upload Documents
            $scancode = Settings::LoadByName("Scan");
            $profile = Profile::LoadByIdprofile($_GET['id']);
            if($profile){
                //Save Application Documents
                $memdoc = new MemberDoc();
                $memdoc->Member = $profile->Idprofile;
                $memdoc->Document = $this->lstDocs->SelectedValue;
                $memdoc->Required = TRUE;
                $memdoc->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&docid='.$memdoc->IdmemberDoc.'&code='.$scancode->Option.'&doc='.$scancode->Option.'&tab=4');
            }
        }else{
            QApplication::DisplayAlert("Please select any document");
        }
    }
        
    protected function btnUpload_Click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id'])){
            $profile = Profile::LoadByIdprofile($_GET['id']);
            if($profile){
                if(!is_dir('../upload/documents/A'.$profile->IdprofileObject->Code)){
                    mkdir('../upload/documents/A'.$profile->IdprofileObject->Code, 0777, true);
                }
                $target_dir = "../upload/documents/A".$profile->IdprofileObject->Code."/";
                $file_ext = strtolower(end(explode('.',$_FILES["imgupload"]["name"])));
                if($file_ext == 'png' || $file_ext == 'jpg' || $file_ext == 'gif' || $file_ext == 'jpeg'){
                    $target_file = $target_dir . $_GET['doc']. ".png" ; 
                }else{
                    $target_file = $target_dir . $_GET['doc'].'.'.$file_ext ; 
                }
                $uploadOk = 1;
                if(file_exists($target_file)){
                    unlink($target_file);
                }
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                $memdocs = MemberDoc::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::MemberDoc()->Member, $profile->Idprofile),
                            QQ::Equal(QQN::MemberDoc()->Document, $_GET['doc'])
                            ));
                if($memdocs){
                    foreach($memdocs as $memdoc){}
                    $memdoc->Scans = $_GET['doc'];
                    $memdoc->Save();
                }
            }
            $msg = imageFileUpload($target_file, "imgupload"); 
        }   
    }

    //Delete For Certificate Deposite Tab
    protected function lbldocdelete_click($strFormId, $strControlId, $strParameter){
        $memdoc = MemberDoc::LoadByIdmemberDoc($strParameter);
        if($memdoc->Scans != NULL){
            $scans = explode(",", $memdoc->Scans); 
            if(key_exists(0, $scans)){ 
                foreach ($scans as $scan){
                    $img = '../upload/documents/A'.$memdoc->MemberObject->Code.'/'.(int)$scan.'.png'; 
                    if(file_exists ($img)){
                        unlink($img);
                    }
                }
            }
        }
        $memdoc->Delete();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=4');
    } 
    
    protected function btnFinalize_click(){
        if(isset($_GET['id'])){
            $profile = Profile::LoadByIdprofile($_GET['id']);
            if($profile){
                if($this->lstCalender->SelectedValue != NULL){
                    $profile->CalenderYear = $this->lstCalender->SelectedValue;
                    $profile->Save();
                    
                    //save login
                    $login = Login::LoadByIdlogin($profile->Idprofile);
                    if(!$login){
                        $login = new Login();
                        $login->Idlogin = $profile->Idprofile;
                    }
                    $login->Username = $profile->IdprofileObject->Code;
                    $login->Password = "stud123";
                    $login->IsEnabled = 1;
                    $login->Save();
                        
                    //get student role
                    $chkrole = Role::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Parrent, $profile->CourseOfAddmission),
                            QQ::Like(QQN::Role()->Name, "%Student %")
                        )
                    );
                    if($login){
                          //login has role
                        $loginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($profile->Idprofile,$chkrole->Idrole);
                        if(!$loginhasrole){
                            $loginhasrole = new LoginHasRole();
                        }
                        $loginhasrole->LoginIdlogin = $profile->Idprofile;
                        $loginhasrole->RoleIdrole = $chkrole->Idrole;
                        $loginhasrole->Active = 1;
                        $loginhasrole->Save();
                        
                    }
                    //current Status                       
                    $current_statuss = CurrentStatus::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->Role, $chkrole->Idrole),
                            QQ::Equal(QQN::CurrentStatus()->Student, $profile->Idprofile),
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $profile->CalenderYear),
                            QQ::Equal(QQN::CurrentStatus()->Semister, $profile->Year)
                        )
                    );

                    if($current_statuss){
                        foreach ($current_statuss as $current_status){}
                    }else{
                        $current_status = new CurrentStatus();
                    }

                    $current_status->Student = $profile->Idprofile;
                    $current_status->Role = $chkrole->Idrole;
                    $current_status->AdmissionStatus = 1;
                    $current_status->Cancel = 0;
                    $current_status->Active = 0;
                    $current_status->Semister = $profile->Year;
                    $current_status->CalenderYear = $profile->CalenderYear;
                    $current_status->From = $current_status->CalenderYearObject->From;
                    $current_status->To = $current_status->CalenderYearObject->To;
                    $current_status->Save();
                    
                    //fees Payable 
                    $fees = Fees::QueryArray(
                            QQ::AndCondition(
                                   QQ::Equal(QQN::Fees()->AcademicYear, $profile->Year),
                                   QQ::Equal(QQN::Fees()->CalenderYear, $profile->CalenderYear),
                                   QQ::Equal(QQN::Fees()->Course, $profile->CourseOfAddmission),
                                   QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession)
                            ),
                            QQ::Clause(QQ::OrderBy(QQN::Fees()->Seq, TRUE))
                        );
                    $nowamt = $feesvoucher = $feecnt = 0;
                    if($fees){
                        foreach($fees as $fee){
                            // for getting feeshead 
                            if($fee->AdmitAmt != NULL || $fee->AdmitAmt != 0){
                                $nowamt = $nowamt + $fee->AdmitAmt;
                                $chkvov = Voucher::QueryArray(
                                            QQ::AndCondition(
                                                //QQ::Equal(QQN::Voucher()->RefStatus , $current->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $current_status->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                                QQ::Equal(QQN::Voucher()->Dr, $profile->Idprofile),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );

                                if($chkvov){

                                }else{
                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; //fees Payable
                                    $vov->Cr = $fee->Fee;
                                    $vov->Dr = $profile->Idprofile;
                                    $vov->Amount = $fee->AdmitAmt;
                                    $vov->DataBy = $_SESSION['login'];
                                    $vov->AcademicYear = $current_status->Semister;
                                    $vov->RefStatus = $current_status->IdcurrentStatus;
                                    if($feesvoucher == NULL){
                                        $code = VoucherGrp::LoadByIdvoucherGrp(6);
                                        $vov->InvNo = $code->Abbrivation.''.$code->Counter;
                                        //if($HeadRcpt == NULL) $HeadRcpt = $vov->InvNo;
                                        $code->Counter = $code->Counter + 1;
                                        $code->Save();
                                        $feesvoucher = $vov->InvNo;
                                    }else{
                                        $voucherparr = Voucher::LoadByInvNo($feesvoucher);
                                        $vov->InvNo = $feesvoucher.'['.$feecnt.']';
                                        $vov->Parrent = $voucherparr->Idvoucher;
                                        $feecnt++;
                                    }
                                    $payable = $vov->InvNo;
                                    $vov->Save();

                                }

                            }

                            if($fee->GovAmt != NULL || $fee->GovAmt != 0){

                                $stud = Ledger::LoadbyIdledger($profile->Idprofile);
                                //chk scholarship ledger entry
                                $ledger = Ledger::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Ledger()->Grp, $stud->Idledger),
                                        QQ::Like(QQN::Ledger()->Name, '%Scholarship%') 
                                    ));

                                if($ledger){
                                    foreach($ledger as $led){}
                                    $chkschvovs = Voucher::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Voucher()->AcademicYear , $current_status->Semister),
                                                    QQ::Equal(QQN::Voucher()->Dr, $led->Idledger),
                                                    QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),    
                                                    QQ::Equal(QQN::Voucher()->Grp, 6)
                                                ));
                                    if($chkschvovs){
                                        foreach($chkschvovs as $chkschvov){
                                            $chkschvov->Amount = 0;
                                            $chkschvov->Save();
                                        }
                                    }

                                }else{
                                    $led = new Ledger();
                                    $code = Settings::LoadByName("Ledger Counter");
                                    $led->Code = 'SCH'.$code->Option;
                                    $code->Option = $code->Option + 1;
                                    $code->Save();                        
                                    $led->Name = $stud->Code.' Scholarship';    
                                    $led->Grp = $stud->Idledger;
                                    $led->Save();
                                }

                                $chkvovgov = Voucher::QueryArray(
                                            QQ::AndCondition(
                                                //QQ::Equal(QQN::Voucher()->RefStatus , $current_status->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $current_status->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                                QQ::Equal(QQN::Voucher()->Dr, $led->Idledger),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );

                                if($chkvovgov){

                                }else{

                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; 
                                    $vov->Dr = $led->Idledger;
                                    $vov->Cr = $fee->Fee;
                                    $vov->Amount = $fee->GovAmt;
                                    $vov->DataBy = $_SESSION['login'];
                                    $vov->AcademicYear = $current_status->Semister;
                                    $vov->RefStatus = $current_status->IdcurrentStatus;

                                    if($feesvoucher == NULL){
                                        $code = VoucherGrp::LoadByIdvoucherGrp(6);
                                        $vov->InvNo = $code->Abbrivation.''.$code->Counter;
                                        $code->Counter = $code->Counter + 1;
                                        $code->Save();
                                        $feesvoucher = $vov->InvNo;
                                    }else{
                                        $voucherparr = Voucher::LoadByInvNo($feesvoucher);
                                        $vov->InvNo = $feesvoucher.'['.$feecnt.']';
                                        $vov->Parrent = $voucherparr->Idvoucher;
                                        $feecnt++;
                                    }
                                    $vov->Save();

                                }
                            }
                        }
                    }else {
                        QApplication::DisplayAlert("Templet not defined for this fees consession Category");
                    }
                    
                }else{
                    QApplication::DisplayAlert("Please Select Calender Year");
                }
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php');
        }
    }
}

AdmissionForm::Run('AdmissionForm');
?>