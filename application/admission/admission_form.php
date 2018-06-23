<?php

require('../../qcubed.inc.php');

class AdmissionForm extends QForm {

    protected $lstCourse;
    protected $lstYear;
    protected $lstConcession;
    protected $lstprefix;
    protected $lstBloodgroup;
    protected $lstcastecategory;
    protected $lstReligion;
    protected $lstStandard;
    protected $lstGender;
    protected $lstadmissionmode;
    protected $lstReservation;
    protected $lstHandicaped;
    protected $arrCaste;
    protected $txtCaste;
    protected $txtIncome;
    protected $txtOcupation;
    protected $txtRelation;
    protected $txtMarathiName;
    protected $txtPlaceOfBirth;
    protected $txtOldName;
    protected $txtReason;
    protected $chkMarried;
    protected $arrstate;
    protected $txtstate;
    protected $txtstate1;
    protected $arrdistrict;
    protected $txtdistrict;
    protected $txtdistrict1;
    protected $arrtaluka;
    protected $txttaluka;
    protected $txttaluka1;
    protected $txtCode;
    protected $txtFirstname;
    protected $txtMiddlename;
    protected $txtLastname;
    protected $txtFirstname1;
    protected $txtMiddlename1;
    protected $txtLastname1;
    protected $txtFmothername;
    protected $txtMmothername;
    protected $txtLmothername;
    protected $txtFfathername;
    protected $txtMfathername;
    protected $txtLfathername;
    protected $txtFatherOccupation;
    protected $txtMotherOccupation;
    protected $txtFatherIncome;
    protected $txtMotherIncome;
    protected $txtLastSchool;
    protected $txtClass;
    protected $txtYear;
    protected $CalLeftDate;
    protected $txtContact1;
    protected $txtContact2;
    protected $txtAddress1;
    protected $txtAddress2;
    protected $txtCity;
    protected $txtCity1;
    protected $txtAge;
    protected $chkCvc;
    protected $chkNcl;
    protected $calAdmitdate;
    protected $calDob;
    protected $calLeftdate;
    protected $btnSave;
    protected $btnView;
    protected $btnNext;
    protected $btnNext1;
    protected $btnNext2;
    protected $btnNext3;
    //protected $btnView1;
    protected $pnlForm;
    protected $btnDoc;
    protected $pnldoc;
    protected $txtArrMarks;
    protected $txtArrOutOf;
    protected $txtarrDetails;
    protected $lblEdit;
    protected $lstArrEduTitle;
    protected $txtArrEduName;
    protected $txtArrAddress;
    protected $txtArrUniversityPlace;
    protected $calArrYOP;
    protected $txtArrPer;
    protected $arrEduTitle;
    protected $lstEduTitle;
    protected $txtCollege;
    protected $txtAddress;
    protected $txtUniversityPlace;
    protected $calYearofpass;
    protected $txtPer;
    protected $txtSmlno;
    protected $ArrtxtSmlno;
    protected $txtRollno;
    protected $ArrtxtRollno;
    protected $btnMarks;
    protected $btnedudel;
    protected $pnlPanel;
    protected $txtDetails;
    protected $txtResult;
    protected $txtPhone;
    protected $arrresult;
    protected $arrphone;
    protected $txtlanguage;
    protected $arrlanguage;
    protected $btnDelete;
    protected $txtMarcks;
    protected $txtOutof;
    protected $chkAbove;
    //document 
    protected $txtNote;
    protected $btnScan;
    protected $lblAdd;
    protected $lblAddMark;
    protected $btnMarksClose;
    protected $btnAddClose;
    protected $btnUpload;
    protected $btnimgView;
    protected $lbldelete;
    protected $pnlScan;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        $this->chkCvc = new QCheckBox($this);
        $this->chkNcl = new QCheckBox($this);
        $this->chkMarried = new QCheckBox($this);
        $this->chkAbove = new QCheckBox($this);
        $this->chkAbove->AddAction(new QChangeEvent(), new QServerAction('Above_click'));

        //simple textboxs
        $this->txtFirstname = new QTextBox($this);
        $this->txtMiddlename = new QTextBox($this);
        $this->txtLastname = new QTextBox($this);
        $this->txtFirstname1 = new QTextBox($this);
        $this->txtMiddlename1 = new QTextBox($this);
        $this->txtLastname1 = new QTextBox($this);
        $this->txtFfathername = new QTextBox($this);
        $this->txtMfathername = new QTextBox($this);
        $this->txtLfathername = new QTextBox($this);
        $this->txtFmothername = new QTextBox($this);
        $this->txtMmothername = new QTextBox($this);
        $this->txtLmothername = new QTextBox($this);
        $this->txtFatherIncome = new QTextBox($this);
        $this->txtMotherIncome = new QTextBox($this);
        $this->txtMotherOccupation = new QTextBox($this);
        $this->txtFatherOccupation = new QTextBox($this);
        $this->txtLastSchool = new QTextBox($this);
        $this->txtClass = new QTextBox($this);
        $this->txtIncome = new QTextBox($this);
        $this->txtOcupation = new QTextBox($this);
        $this->txtRelation = new QTextBox($this);
        $this->txtMarathiName = new QTextBox($this);
        $this->txtOldName = new QTextBox($this);
        $this->txtReason = new QTextBox($this);
        $this->txtPlaceOfBirth = new QTextBox($this);
        $this->txtMarathiName->Width = "100%";
        $this->txtOldName->Width = $this->txtReason->Width = "80%";
        $this->txtFirstname->Width = $this->txtMiddlename->Width = $this->txtLastname->Width = $this->txtFfathername->Width = $this->txtMfathername->Width = $this->txtLfathername->Width = $this->txtFmothername->Width = $this->txtMmothername->Width = $this->txtLmothername->Width = "20%";

        $this->txtLastname->AddAction(new QEnterKeyEvent(), new QAjaxAction('enter'));
        $this->txtContact1 = new QTextBox($this);
        $this->txtContact1->MaxLength = 12;
        $this->txtContact2 = new QTextBox($this);
        $this->txtCity = new QTextBox($this);
        $this->txtCity1 = new QTextBox($this);
        $this->txtCode = new QTextBox($this);
        $this->txtAge = new QTextBox($this);
        $this->txtCode->ReadOnly = TRUE;
        $this->txtCode->Width = "20%";
        //large text box
        $this->txtAddress1 = new QTextBox($this);
        $this->txtAddress2 = new QTextBox($this);
        $this->txtAddress1->Width = $this->txtAddress2->Width = $this->txtLastSchool->Width = "70%";
        $this->txtAge->Width = "10%";

        //list boxes
        $this->lstStandard = new QListBox($this);
        $this->lstStandard->AddItem("-Select On-", NULL);
        $standards = Semister::LoadAll(QQ::OrderBy(QQN::Semister()->Idsemister));
        foreach ($standards as $standard) {
            $this->lstStandard->AddItem($standard->Name, $standard->Idsemister);
        }
        $this->lstGender = new QListBox($this);
        $this->lstGender->AddItem("-Select-", NULL);
        $geders = Gender::LoadAll();
        foreach ($geders as $gender) {
            $this->lstGender->AddItem($gender->Name, $gender->Idgender);
        }
        //listbox declarations
        $this->lstBloodgroup = new QListBox($this);
        $this->lstConcession = new QListBox($this);
        $this->lstcastecategory = new QListBox($this);
        $this->lstCourse = new QListBox($this);
        $this->lstReligion = new QListBox($this);
        $this->lstYear = new QListBox($this);
        $this->lstadmissionmode = new QListBox($this);
        $this->lstReservation = new QListBox($this);
        $this->lstprefix = new QListBox($this);
        $this->lstHandicaped = new QListBox($this);

        $this->lstHandicaped->AddItem("-Select One-", NULL);

        $this->lstBloodgroup->AddItem("-Select One-", NULL);
        $this->lstReservation->AddItem("-Select One-", NULL);
        $this->lstConcession->AddItem("-Select One-", NULL);
        $this->lstcastecategory->AddItem("-Select One-", NULL);
        $this->lstCourse->AddItem("-Select One-", NULL);
        $this->lstReligion->AddItem("-Select One-", NULL);
        $this->lstYear->AddItem("-Select One-", NULL);
        $this->lstadmissionmode->AddItem("-Select One-", NULL);
        $this->lstprefix->AddItem("-Select One-", NULL);

        //handicaped
        $vars = Handicaped::LoadAll();
        foreach ($vars as $var) {
            $this->lstHandicaped->AddItem($var->Name, $var->Idhandicaped);
        }
        //bloodgroup
        $bgs = BloodGroup::LoadAll();
        foreach ($bgs as $bg) {
            $this->lstBloodgroup->AddItem($bg->Name, $bg->IdbloodGroup);
        }

        //Course
        if ($_SESSION['post'] == 864)
            $courses = HierarchyHasHierarchy::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::HierarchyHasHierarchy()->HierarchyIdhierarchy, 854), QQ::Equal(QQN::HierarchyHasHierarchy()->HierarchyIdhierarchy1Object->Category, 8)
                            ), QQ::OrderBy(QQN::HierarchyHasHierarchy()->Seq)
            );
        else
            $courses = HierarchyHasHierarchy::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::HierarchyHasHierarchy()->HierarchyIdhierarchy1Object->Category, 8)
                            ), QQ::OrderBy(QQN::HierarchyHasHierarchy()->Seq)
            );
        foreach ($courses as $course) {
            $this->lstCourse->AddItem($course->HierarchyIdhierarchy1Object->Name, $course->HierarchyIdhierarchy1);
        }
        $this->lstCourse->AddAction(new QChangeEvent(), new QServerAction('Course'));
        //Admissionmode
        $caps = ReligionHierarchy::LoadArrayByCategory(7);
        foreach ($caps as $cap) {
            $this->lstadmissionmode->AddItem($cap->Name, $cap->IdreligionHierarchy);
        }
        //university Reservation
        $reservs = ReligionHierarchy::LoadArrayByCategory(10);
        foreach ($reservs as $reserv) {
            $this->lstReservation->AddItem($reserv->Name, $reserv->IdreligionHierarchy);
        }
        //concession
        $concess = ReligionHierarchy::LoadArrayByCategory(6);
        foreach ($concess as $conces) {
            $this->lstConcession->AddItem($conces->Name, $conces->IdreligionHierarchy);
        }
        //reliogion
        $religns = ReligionHierarchy::LoadArrayByCategory(2);
        foreach ($religns as $relign) {
            $this->lstReligion->AddItem($relign->Name, $relign->IdreligionHierarchy);
        }
        //preffix
        $prefixs = Prefix::LoadAll();
        foreach ($prefixs as $prefix) {
            $this->lstprefix->AddItem($prefix->Name, $prefix->Idprefix);
        }
        $this->lstprefix->Width = 70;
        //year
        $years = AcademicYear::LoadAll();
        foreach ($years as $year) {
            $this->lstYear->AddItem($year->Name, $year->IdacademicYear);
        }

        //caste catagories 
        $castecats = ReligionHierarchy::LoadArrayByCategory(1);
        foreach ($castecats as $castecat) {
            $this->lstcastecategory->AddItem($castecat->Name, $castecat->IdreligionHierarchy);
        }

        //auto suggestions
        $this->arrCaste = array();
        $this->arrdistrict = array();
        $this->arrstate = array();
        $this->arrtaluka = array();

        //caste
        $casts = ReligionHierarchy::LoadArrayByCategory(4);
        foreach ($casts as $cast) {
            $this->arrCaste[$cast->IdreligionHierarchy] = $cast->Name;
        }
        $this->txtCaste = new QJavaScriptAutoCompleteTextBox($this, $this->arrCaste);

        //state
        $states = State::LoadAll();
        foreach ($states as $state) {
            $this->arrstate[$state->Idstate] = $state->Name;
        }
        $this->txtstate = new QJavaScriptAutoCompleteTextBox($this, $this->arrstate);
        $this->txtstate1 = new QJavaScriptAutoCompleteTextBox($this, $this->arrstate);

        //district
        $dists = District::LoadAll();
        foreach ($dists as $dist) {
            $this->arrdistrict[$dist->Iddistrict] = $dist->Name;
        }
        $this->txtdistrict = new QJavaScriptAutoCompleteTextBox($this, $this->arrdistrict);
        $this->txtdistrict1 = new QJavaScriptAutoCompleteTextBox($this, $this->arrdistrict);

        //district
        $tals = Taluka::LoadAll();
        foreach ($tals as $tal) {
            $this->arrtaluka[$tal->Idtaluka] = $tal->Name;
        }
        $this->txttaluka = new QJavaScriptAutoCompleteTextBox($this, $this->arrtaluka);
        $this->txttaluka1 = new QJavaScriptAutoCompleteTextBox($this, $this->arrtaluka);

        $this->calLeftdate = new QDateTimePicker($this);
        $this->calDob = new QCalendar($this);
        //$this->calDob->MinimumYear = 1900;
        $this->calAdmitdate = new QCalendar($this);
        $this->calAdmitdate->DateTimeFormat = 'dd/mm/yy';
        $this->calDob->DateTimeFormat = 'dd/mm/yy';
        $this->calDob->AddAction(new QChangeEvent(), new QAjaxAction('calDob_Click'));
        //buttons
        $this->btnSave = new QButton($this);
        $this->btnView = new QButton($this);
        $this->btnView->Visible = FALSE;

        $this->btnSave->Text = "Save";
        $this->btnView->Text = "View Form";
        $this->btnView->AddAction(new QClickEvent(), new QAjaxAction('btnView_click'));
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_click'));

        $this->btnNext = new QButton($this);
        $this->btnNext3 = new QButton($this);
        $this->btnNext1 = new QButton($this);
        $this->btnNext2 = new QButton($this);

        $this->btnNext->Text = "Next >>";
        $this->btnNext1->Text = "Next >>";
        $this->btnNext3->Text = "Next >>";
        $this->btnNext2->Text = "Submit";

        $this->btnNext->AddAction(new QClickEvent(), new QServerAction('btnNext_click'));
        $this->btnNext1->AddAction(new QClickEvent(), new QServerAction('btnNext1_click'));
        $this->btnNext3->AddAction(new QClickEvent(), new QServerAction('btnNext3_click'));
        $this->btnNext2->AddAction(new QClickEvent(), new QServerAction('btnNext2_click'));

        //$this->btnView1 = new QButton($this);
        //$this->btnView1->Text = "View Document";
        //$this->btnView1->AddAction(new QClickEvent(), new QAjaxAction('btnView1_click'));

        $this->btnDoc = new QButton($this);
        $this->btnDoc->Text = "Add";
        $this->btnDoc->AddAction(new QClickEvent(), new QAjaxAction('btnDoc_click'));

        $this->lblAdd = new QLabel($this);
        $this->lblAdd->Visible = False;
        $this->lblAdd->HtmlEntities = FALSE;

        $this->lblAddMark = new QLabel($this);
        $this->lblAddMark->Visible = False;
        $this->lblAddMark->HtmlEntities = FALSE;

        $this->btnAddClose = new QLabel($this);
        $this->btnAddClose->Text = "<img width='25' src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/close2.png />";
        ;
        $this->btnAddClose->HtmlEntities = False;
        $this->btnAddClose->Visible = False;
        $this->btnAddClose->AddAction(new QClickEvent(), new QServerAction('btnAddClose_click'));

        $this->btnMarksClose = new QLabel($this);
        $this->btnMarksClose->Text = "<img width='25' src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/close2.png />";
        ;
        $this->btnMarksClose->HtmlEntities = False;
        $this->btnMarksClose->Visible = False;
        $this->btnMarksClose->AddAction(new QClickEvent(), new QServerAction('btnMarksClose_click'));


        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = "Delete";
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
        $this->btnDelete->Visible = FALSE;

        /* $this->pnldoc =  new QPanel($this);
          $this->pnldoc->AddControlToMove($this->pnldoc);
          $this->pnldoc->Position = QPosition::Absolute;
          $this->pnldoc->Top = 50;
          $this->pnldoc->Left = 200;
          $this->pnldoc->CssClass= 'openpanel';
          $this->pnldoc->Visible = FALSE;

          $this->pnlScan =  new QPanel($this);
          $this->pnlScan->AddControlToMove($this->pnlScan);
          $this->pnlScan->Position = QPosition::Absolute;
          $this->pnlScan->Top = 50;
          $this->pnlScan->Left = 200;
          $this->pnlScan->CssClass= 'openpanel';
          $this->pnlScan->Visible = FALSE; */

        //panel decalration
        $this->pnlForm = new QPanel($this);
        $this->pnlForm->AddControlToMove($this->pnlForm);
        $this->pnlForm->Position = QPosition::Absolute;
        $this->pnlForm->Top = 50;
        $this->pnlForm->Left = 200;
        $this->pnlForm->CssClass = 'openpanel';
        $this->pnlForm->Visible = FALSE;

        //education details
        $this->arrEduTitle = array();

        if (!isset($_GET['id'])) {
            $this->calAdmitdate->Text = date('d/m/Y');
            if ($this->lstCourse->SelectedValue == 838)
                $edus = EducationTitle::QueryArray(
                                QQ::OrCondition(
                                        QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 1), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 5), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 6), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 7)
                ));
            else
                $edus = EducationTitle::QueryArray(
                                QQ::OrCondition(
                                        QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 7), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 8), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 55), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 56), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 57)
                ));
        }else {
            $student = Member::LoadByIdmember($_GET['id']);
            $this->lstCourse->SelectedValue = $student->Course;
            if ($this->lstCourse->SelectedValue == 838)
                $edus = EducationTitle::QueryArray(
                                QQ::OrCondition(
                                        QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 1), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 5), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 6), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 7)
                ));
            else
                $edus = EducationTitle::QueryArray(
                                QQ::OrCondition(
                                        QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 7), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 8), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 55), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 56), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 57)
                ));
        }
        foreach ($edus as $edu) {
            $this->arrEduTitle[$edu->IdeducationTitle] = $edu->Name;
        }
        $this->lstEduTitle = new QJavaScriptAutoCompleteTextBox($this, $this->arrEduTitle);

        $this->txtYear = new QTextBox($this);
        $this->txtYear->Width = 70;

        $this->calYearofpass = new QCalendar($this);
        $this->calYearofpass->DateTimeFormat = 'dd/mm/yy';

        $this->txtCollege = new QTextBox($this);
        $this->txtAddress = new QTextBox($this);
        $this->txtUniversityPlace = new QTextBox($this);
        $this->txtMarcks = new QTextBox($this);
        $this->txtOutof = new QTextBox($this);
        $this->txtPer = new QTextBox($this);
        $this->txtSmlno = new QTextBox($this);
        $this->txtRollno = new QTextBox($this);
        $this->txtlanguage = new QTextBox($this);
        $this->txtlanguage->Width = 100;
        $this->txtMarcks->Width = $this->txtOutof->Width = $this->txtPer->Width = 50;
        $this->txtSmlno->Width = $this->txtRollno->Width = 50;
        $this->txtMarcks->AddAction(new QChangeEvent(), new QAjaxAction('txtPer_focus'));
        $this->txtOutof->AddAction(new QChangeEvent(), new QAjaxAction('txtPer_focus'));
        $this->txtPer->AddAction(new QEnterKeyEvent(), new QServerAction('txtPer_click'));

        //events
        $this->txtLastname->AddAction(new QFocusOutEvent(), new QAjaxAction('Names'));

        if (isset($_GET['id'])) {
            $this->btnDelete->Visible = TRUE;
            $this->btnView->Visible = TRUE;
            $student = Member::LoadByIdmember($_GET['id']);
            $this->txtCode->Text = $student->Code;
            $this->txtFirstname->Text = $student->FirstName;
            $this->txtMiddlename->Text = $student->MiddleName;
            $this->txtLastname->Text = $student->LastName;
            $this->txtFirstname1->Text = $student->FirstName;
            $this->txtMiddlename1->Text = $student->MiddleName;
            $this->txtLastname1->Text = $student->LastName;
            $this->txtFfathername->Text = $student->FatherFirstName;
            $this->txtMfathername->Text = $student->FatherMiddleName;
            $this->txtLfathername->Text = $student->FatherLastName;
            $this->txtFmothername->Text = $student->MotherFirstName;
            $this->txtMmothername->Text = $student->MotherMiddleName;
            $this->txtLmothername->Text = $student->MotherLastName;
            $this->txtAddress1->Text = $student->Address;
            $this->txtAddress2->Text = $student->Address2;
            $this->txtContact1->Text = $student->Contact;
            $this->txtContact2->Text = $student->Contact2;
            $this->calLeftdate->DateTime = $student->LeftDate;
            $this->txtAge->Text = $student->Age;
            $this->txtIncome->Text = $student->FannualIncome;
            $this->txtOcupation->Text = $student->Foccupation;
            $this->txtRelation->Text = $student->Relation;
            $this->chkMarried->Checked = $student->Married;
            $this->txtCity->Text = $student->City;
            $this->lstprefix->SelectedValue = $student->Prefix;
            $this->txtMarathiName->Text = $student->Details;
            $this->txtOldName->Text = $student->UgDetails;
            $this->txtReason->Text = $student->PgDetails;
            $this->txtPlaceOfBirth->Text = $student->CompanyName;

            if ($this->txtAddress1->Text == $this->txtAddress2->Text) {
                $this->chkAbove->Checked = True;
            }

            if ($student->Cast)
                $this->txtCaste->Text = $student->CastObject->Name;
            if ($student->State)
                $this->txtstate->Text = $student->StateObject->Name;
            if ($student->District)
                $this->txtdistrict->Text = $student->DistrictObject->Name;
            if ($student->Taluka)
                $this->txttaluka->Text = $student->TalukaObject->Name;

            if ($student->State2)
                $this->txtstate1->Text = $student->StateObject->Name;
            if ($student->District2)
                $this->txtdistrict1->Text = $student->DistrictObject->Name;
            if ($student->Taluka2)
                $this->txttaluka1->Text = $student->TalukaObject->Name;
            $this->chkCvc->Checked = $student->Cvc;
            $this->chkNcl->Checked = $student->Ncl;

            $this->lstBloodgroup->SelectedValue = $student->BloodGroup;
            $this->lstGender->SelectedValue = $student->Gender;
            $this->lstReligion->SelectedValue = $student->Religion;
            $this->lstYear->SelectedValue = $student->Year;
            $this->lstcastecategory->SelectedValue = $student->CasteCategory;
            $this->lstadmissionmode->SelectedValue = $student->AdmissionMode;
            $this->lstReservation->SelectedValue = $student->UnivercityReserve;
            $this->lstCourse->SelectedValue = $student->Course;
            $this->lstHandicaped->SelectedValue = $student->PhysicallyHandicaped;
            if ($student->Dob)
                $this->calDob->Text = date('d/m/Y', strtotime($student->Dob));
            if ($student->AddmissionDate)
                $this->calAdmitdate->Text = date('d/m/Y', strtotime($student->AddmissionDate));

            $edus = Education::LoadArrayByMember($_GET['id']);
            $sr = 1;
            if ($edus) {
                foreach ($edus as $edu) {
                    $this->btnMarks[$edu->Ideducation] = new QLabel($this);
                    $this->btnMarks[$edu->Ideducation]->Text = "<img width='25' src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/plus.png />";
                    $this->btnMarks[$edu->Ideducation]->HtmlEntities = FALSE;

                    $this->btnMarks[$edu->Ideducation]->AddAction(new QClickEvent(), new QAjaxAction('btnMarks_click'));
                    $this->btnMarks[$edu->Ideducation]->ActionParameter = $edu->Ideducation;

                    /* $this->pnlPanel[$edu->Ideducation] =  new QPanel($this);
                      $this->pnlPanel[$edu->Ideducation]->AddControlToMove($this->pnlPanel[$edu->Ideducation]);
                      $this->pnlPanel[$edu->Ideducation]->Position = QPosition::Absolute;
                      $this->pnlPanel[$edu->Ideducation]->Top = 50;
                      $this->pnlPanel[$edu->Ideducation]->Left = 200;
                      $this->pnlPanel[$edu->Ideducation]->CssClass= 'openpanel';
                      $this->pnlPanel[$edu->Ideducation]->Visible = FALSE; */

                    $this->lstArrEduTitle[$edu->Ideducation] = new QJavaScriptAutoCompleteTextBox($this, $this->arrEduTitle);
                    $this->lstArrEduTitle[$edu->Ideducation]->Text = $edu->TitleObject->Name;

                    $this->txtArrEduName[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrEduName[$edu->Ideducation]->Text = $edu->Name;

                    $this->txtarrDetails[$edu->Ideducation] = new QTextBox($this);
                    $this->txtarrDetails[$edu->Ideducation]->Text = $edu->Details;

                    $this->arrlanguage[$edu->Ideducation] = new QTextBox($this);
                    $this->arrlanguage[$edu->Ideducation]->Text = $edu->Language;
                    $this->arrlanguage[$edu->Ideducation]->Width = 100;

                    $this->txtArrAddress[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrAddress[$edu->Ideducation]->Text = $edu->Address;

                    $this->txtArrUniversityPlace[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrUniversityPlace[$edu->Ideducation]->Text = $edu->UniversityPlace;

                    $this->calArrYOP[$edu->Ideducation] = new QTextBox($this);
                    $this->calArrYOP[$edu->Ideducation]->Text = $edu->Grade;
                    $this->calArrYOP[$edu->Ideducation]->Width = 70;

                    $this->txtArrMarks[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrMarks[$edu->Ideducation]->AddAction(new QChangeEvent, new QAjaxAction('txtArrPer_Focus'));
                    $this->txtArrMarks[$edu->Ideducation]->ActionParameter = $edu->Ideducation;
                    $this->txtArrMarks[$edu->Ideducation]->Text = $edu->Marks;

                    $this->txtArrOutOf[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrOutOf[$edu->Ideducation]->AddAction(new QChangeEvent, new QAjaxAction('txtArrPer_Focus'));
                    $this->txtArrOutOf[$edu->Ideducation]->ActionParameter = $edu->Ideducation;
                    $this->txtArrOutOf[$edu->Ideducation]->Text = $edu->OutOf;

                    $this->ArrtxtRollno[$edu->Ideducation] = new QTextBox($this);
                    $this->ArrtxtRollno[$edu->Ideducation]->Text = $edu->Rollno;

                    $this->ArrtxtSmlno[$edu->Ideducation] = new QTextBox($this);
                    $this->ArrtxtSmlno[$edu->Ideducation]->Text = $edu->SmlNo;

                    $this->txtArrOutOf[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrOutOf[$edu->Ideducation]->AddAction(new QChangeEvent, new QAjaxAction('txtArrPer_Focus'));
                    $this->txtArrOutOf[$edu->Ideducation]->ActionParameter = $edu->Ideducation;
                    $this->txtArrOutOf[$edu->Ideducation]->Text = $edu->OutOf;

                    $this->txtArrPer[$edu->Ideducation] = new QTextBox($this);
                    $this->txtArrPer[$edu->Ideducation]->AddAction(new QEnterKeyEvent, new QServerAction('txtArrPer_EnterKey'));
                    $this->txtArrPer[$edu->Ideducation]->ActionParameter = $edu->Ideducation;
                    $this->txtArrPer[$edu->Ideducation]->Text = $edu->Percentage;

                    $this->txtArrMarks[$edu->Ideducation]->Width = $this->txtArrPer[$edu->Ideducation]->Width = $this->txtArrOutOf[$edu->Ideducation]->Width = $this->ArrtxtSmlno[$edu->Ideducation]->Width = $this->ArrtxtRollno[$edu->Ideducation]->Width = 50;

                    $this->btnedudel[$edu->Ideducation] = new QLabel($this);
                    $this->btnedudel[$edu->Ideducation]->Text = "<img src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/delete.png />";
                    $this->btnedudel[$edu->Ideducation]->HtmlEntities = FALSE;

                    $this->btnedudel[$edu->Ideducation]->AddAction(new QClickEvent(), new QServerAction('btnedudel_click'));
                    $this->btnedudel[$edu->Ideducation]->ActionParameter = $edu->Ideducation;

                    $this->lblEdit[$edu->Ideducation] = new QLabel($this);
                    $this->lblEdit[$edu->Ideducation]->HtmlEntities = FALSE;
                    $this->lblEdit[$edu->Ideducation]->Text = "<img width='15' height='15' src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/edit.png />";
                    $dis = "'dis('" . $edu->Ideducation . "');'";
                    $this->lblEdit[$edu->Ideducation]->AddAction(new QClickEvent(), new QJavaScriptAction("dis(" . $edu->Ideducation . ");"));
                    $this->lblEdit[$edu->Ideducation]->ActionParameter = $edu->Ideducation;
                }
            }
            //doument
            $docs = MemberDocs::LoadArrayByMember($_GET['id']);
            if ($docs) {
                foreach ($docs as $doc) {
                    $this->txtNote[$doc->Id] = new QTextBox($this);
                    $this->txtNote[$doc->Id]->Width = "95%";
                    $this->txtNote[$doc->Id]->Text = $doc->Description;
                    $this->txtNote[$doc->Id]->AddAction(new QChangeEvent(), new QAjaxAction('Doc_Save'));
                    $this->txtNote[$doc->Id]->ActionParameter = $doc->Id;

                    $this->btnScan[$doc->Id] = new QButton($this);
                    $this->btnScan[$doc->Id]->Text = "Scan";
                    $this->btnScan[$doc->Id]->AddAction(new QClickEvent(), new QAjaxAction('btnScan_Click'));
                    $this->btnScan[$doc->Id]->ActionParameter = $doc->Id;

                    $this->btnUpload[$doc->Id] = new QButton($this);
                    $this->btnUpload[$doc->Id]->Text = "Upload";
                    //$this->btnUpload-> $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Ledger'))));
                    $this->btnUpload[$doc->Id]->AddAction(new QClickEvent(), new QAjaxAction('btnUpload_Click'));
                    $this->btnUpload[$doc->Id]->ActionParameter = $doc->Id;

                    $this->btnimgView[$doc->Id] = new QButton($this);
                    $this->btnimgView[$doc->Id]->Text = "Doc View";
                    $this->btnimgView[$doc->Id]->AddAction(new QClickEvent(), new QAjaxAction('btnimgView_Click'));
                    $this->btnimgView[$doc->Id]->ActionParameter = $doc->Id;
                    // $this->btnimgView[$doc->Id]->Visible = false;
                    $this->btnimgView[$doc->Id]->Visible = TRUE;
                    $this->lbldelete[$doc->Id] = new QLabel($this);
                    $this->lbldelete[$doc->Id]->Text = "<img src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/delete.png />";
                    $this->lbldelete[$doc->Id]->HtmlEntities = FALSE;
                    $this->lbldelete[$doc->Id]->AddAction(new QClickEvent(), new QServerAction('lbldelete_click'));
                    $this->lbldelete[$doc->Id]->ActionParameter = $doc->Id;
                }
            }
        }
    }

    protected function Course() {
        if ($this->lstCourse->SelectedValue == 838)
            $edus = EducationTitle::QueryArray(
                            QQ::OrCondition(
                                    QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 1), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 5), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 6), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 7)
            ));
        else
            $edus = EducationTitle::QueryArray(
                            QQ::OrCondition(
                                    QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 7), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 8), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 55), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 56), QQ::Equal(QQN::EducationTitle()->IdeducationTitle, 57)
            ));
    }

    protected function Above_click() {
        if ($this->chkAbove->Checked == 1) {
            $this->txtAddress2->Text = $this->txtAddress1->Text;
            $this->txtstate1->Text = $this->txtstate->Text;
            $this->txtdistrict1->Text = $this->txtdistrict->Text;
            $this->txttaluka1->Text = $this->txttaluka->Text;
            $this->txtCity1->Text = $this->txtCity->Text;
        } else {
            $this->txtAddress2->Text = "";
            $this->txtstate1->Text = "";
            $this->txtdistrict1->Text = "";
            $this->txttaluka1->Text = "";
            $this->txtCity1->Text = "";
        }

        $this->btnSave_click();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Address');
    }

    protected function Names() {
        $this->txtFfathername->Text = $this->txtMmothername->Text = $this->txtMiddlename->Text;
        $this->txtLfathername->Text = $this->txtLmothername->Text = $this->txtLastname->Text;
    }

    //document functions
    protected function Doc_Save($strFormId, $strControlId, $strParameter) {
        $doc = MemberDocs::LoadById($strParameter);
        $doc->Description = $this->txtNote[$doc->Id]->Text;
        $doc->Save();
    }

    protected function btnScan_Click($strFormId, $strControlId, $strParameter) {
        $doc = MemberDocs::LoadById($strParameter);
        $doc->Description = $this->txtNote[$doc->Id]->Text;
        $doc->Save();
        $this->lblAdd->Visible = true;
        $this->btnAddClose->Visible = true;
        $this->lblAdd->Text = '<iframe src="' . __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/upload/cam/scanall.php?id=' . $_GET['id'] . '" height="700" width="800" ></iframe>';
    }

    protected function btnUpload_Click($strFormId, $strControlId, $strParameter) {
        $code = "";
        $doc = MemberDocs::LoadById($strParameter);
        $doc->Description = $this->txtNote[$doc->Id]->Text;
        $doc->Save();
        $code = $doc->Code + 1;
        $file = '../upload/documents/A' . $doc->MemberObject->Code;
        if (file_exists($file)) {
            //if (!mkdir('../upload/documents/A'.$doc->MemberObject->Code, 0777, true)){}
        } else {
            if (!mkdir('../upload/documents/A' . $doc->MemberObject->Code, 0777, true)) {
                
            }
        }

        $this->lblAdd->Visible = true;
        // $this->btnimgView[$doc->Id]->Visible = TRUE;
        $this->btnAddClose->Visible = true;
        $this->lblAdd->Text = '<iframe src="' . __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/upload/imageupload.php?id=' . $_GET['id'] . '&doc=' . $doc->Code . '&code=' . $code . '" height="300" width="400" ></iframe>';
        // $ths->pnlScan->Text ='<div align=right><div id="openpaneltext">Documents Upload</div><a href=""><img src="'.__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__.'/close2.png'.'"></a></div><iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/upload/imageupload.php?id='.$_GET['id'].'" height="300" width="400" ></iframe><div>';
    }

    protected function btnimgView_Click($strFormId, $strControlId, $strParameter) {
        $code = "";
        $doc = MemberDocs::LoadById($strParameter);
        $code = $doc->Code + 1;
        $file = '../upload/documents/A' . $doc->MemberObject->Code;
        if (file_exists($file)) {
            //if (!mkdir('../upload/documents/A'.$doc->MemberObject->Code, 0777, true)){}
        } else {
            if (!mkdir('../upload/documents/A' . $doc->MemberObject->Code, 0777, true)) {
                
            }
        }
        $this->lblAdd->Visible = true;
        $this->btnAddClose->Visible = true;
        $this->lblAdd->Text = '<iframe src="' . __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/upload/uploadedimage.php?id=' . $_GET['id'] . '&doc=' . $doc->Code . '&code=' . $code . '" height="700" width="700" ></iframe>';
    }

    protected function lbldelete_click($strFormId, $strControlId, $strParameter) {
        $doc = MemberDocs::LoadById($strParameter);
        $img = '../upload/documents/A' . $doc->MemberObject->Code . '/' . $doc->Code . '.png';
        if (file_exists($img)) {
            unlink($img);
        }
        $doc->Delete();
        if (isset($_GET['id'])) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Document');
        }
    }

    //education function
    public function calDob_Click() {
        //$this->btnExtraSave_Click();
        $dob = explode("/", $this->calDob->Text);
        $this->txtAge->Text = QDateTime::Now()->Year - $dob[2];
        //QApplication::DisplayAlert($this->calDob->DateTime);
    }

    protected function txtPer_focus() {
        if ($this->txtMarcks->Text != NULL && $this->txtOutof->Text != NULL) {
            $this->txtPer->Text = number_format($this->txtMarcks->Text / $this->txtOutof->Text * 100, 2, '.', '');
            $this->txtPer->Focus();
        }
    }

    protected function txtPer_click() {
        $edu = new Education();
        $edu->Member = $_GET['id'];
        $edu->Title = array_search($this->lstEduTitle->Text, $this->arrEduTitle);
        $edu->Name = $this->txtCollege->Text;
        $edu->Address = $this->txtAddress->Text;
        $edu->UniversityPlace = $this->txtUniversityPlace->Text;
        $edu->Grade = $this->txtYear->Text;
        $edu->Language = $this->txtlanguage->Text;
        $edu->SmlNo = $this->txtSmlno->Text;
        $edu->Rollno = $this->txtRollno->Text;
        $edu->Marks = $this->txtMarcks->Text;
        $edu->OutOf = $this->txtOutof->Text;
        $edu->Percentage = $this->txtPer->Text;
        $edu->Save();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Education');
    }

    protected function txtArrPer_Focus($strFormId, $strControlId, $strParameter) {
        if ($this->txtArrMarks[$strParameter]->Text != NULL && $this->txtArrOutOf[$strParameter]->Text != NULL) {
            $this->txtArrPer[$strParameter]->Text = number_format($this->txtArrMarks[$strParameter]->Text / $this->txtArrOutOf[$strParameter]->Text * 100, 2, '.', '');
            $this->txtArrPer[$strParameter]->Focus();
        }
    }

    protected function btnMarks_click($strFormId, $strControlId, $strParameter) {
        $edu = Education::LoadByIdeducation($strParameter);
        $this->lblAddMark->Visible = true;
        $this->btnMarksClose->Visible = true;
        $this->lblAddMark->Text = '<iframe src="' . __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/marks_edit.php?edu=' . $edu->Ideducation . '" height="300" width="720" ></iframe>';
    }

    protected function txtArrPer_EnterKey($strFormId, $strControlId, $strParameter) {
        $edu = Education::LoadByIdeducation($strParameter);
        $edu->Member = $_GET['id'];
        $title = EducationTitle::LoadByName($this->lstArrEduTitle[$strParameter]->Text);
        $edu->Title = $title->IdeducationTitle;
        $edu->Name = $this->txtArrEduName[$strParameter]->Text;
        $edu->Address = $this->txtArrAddress[$strParameter]->Text;
        $edu->UniversityPlace = $this->txtArrUniversityPlace[$strParameter]->Text;
        $edu->Grade = $this->calArrYOP[$strParameter]->Text;
        $edu->Language = $this->arrlanguage[$edu->Ideducation]->Text;
        $edu->Rollno = $this->ArrtxtRollno[$edu->Ideducation]->Text;
        $edu->SmlNo = $this->ArrtxtSmlno[$edu->Ideducation]->Text;
        $edu->Marks = $this->txtArrMarks[$edu->Ideducation]->Text;
        $edu->OutOf = $this->txtArrOutOf[$edu->Ideducation]->Text;
        $edu->Percentage = $this->txtArrPer[$edu->Ideducation]->Text;
        $edu->Save();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Education');
    }

    protected function btnedudel_click($strFormId, $strControlId, $strParameter) {
        $edu = Education::LoadByIdeducation($strParameter);

        $marks = Marks::LoadArrayByEducation($edu->Ideducation);
        if ($marks) {
            foreach ($marks as $mark) {
                $mark->Delete();
            }
        }
        $edu->Delete();

        $edu->Delete();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Education');
    }

    protected function btnSave_click() {
        if ($this->txtFirstname->Text != "" && $this->txtMiddlename->Text != "" && $this->txtLastname->Text != "" && $this->lstCourse->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL && $this->calAdmitdate->Text != "") {
            if (isset($_GET['id'])) {
                $student = Member::LoadByIdmember($_GET['id']);
            } else {
                $code = Code::LoadByName("Student");
                $code->Code = $code->Code + 1;
                $code->Save();
                $ledger = new Ledger();
                $ledger->Name = 'S' . $code->Code . ' ' . $this->txtFirstname->Text . ' ' . $this->txtMiddlename->Text . ' ' . $this->txtLastname->Text;
                $ledger->SubOf = 209;
                $ledger->Save();
                $student = new Member();
                $student->Code = 'S' . $code->Code;
                $student->Idmember = $ledger->Idledger;
                $student->MemberType = 2;
            }
            $student->FirstName = $this->txtFirstname->Text;
            $student->MiddleName = $this->txtMiddlename->Text;
            $student->LastName = $this->txtLastname->Text;
            $student->FatherFirstName = $this->txtFfathername->Text;
            $student->FatherMiddleName = $this->txtMfathername->Text;
            $student->FatherLastName = $this->txtLfathername->Text;
            $student->MotherFirstName = $this->txtFmothername->Text;
            $student->MotherMiddleName = $this->txtMmothername->Text;
            $student->MotherLastName = $this->txtLmothername->Text;
            $student->Address = $this->txtAddress1->Text;
            $student->Address2 = $this->txtAddress2->Text;
            $student->Contact = $this->txtContact1->Text;
            $student->Contact2 = $this->txtContact2->Text;
            $student->FannualIncome = $this->txtIncome->Text;
            $student->Foccupation = $this->txtOcupation->Text;
            $student->Relation = $this->txtRelation->Text;
            $student->Married = $this->chkMarried->Checked;
            $student->Details = $this->txtFirstname1->Text . ' ' . $this->txtMiddlename1->Text . ' ' . $this->txtLastname1->Text;
            $student->UgDetails = $this->txtOldName->Text;
            $student->PgDetails = $this->txtReason->Text;
            $student->CompanyName = $this->txtPlaceOfBirth->Text;
            $student->Prefix = $this->lstprefix->SelectedValue;
            $student->City = $this->txtCity->Text;
            $student->Admitted = 0;
            $student->Age = $this->txtAge->Text;
            $student->UnivercityReserve = $this->lstReservation->SelectedValue;
            $student->Cvc = $this->chkCvc->Checked;
            $student->Ncl = $this->chkNcl->Checked;
            $student->AdmissionMode = $this->lstadmissionmode->SelectedValue;
            $student->Course = $this->lstCourse->SelectedValue;

            $caste = array_search($this->txtCaste->Text, $this->arrCaste);
            if ($caste)
                $student->Cast = $caste;

            $state = array_search($this->txtstate->Text, $this->arrstate);
            if ($state)
                $student->State = $state;

            $district = array_search($this->txtdistrict->Text, $this->arrdistrict);
            if ($district)
                $student->District = $district;

            $taluka = array_search($this->txttaluka->Text, $this->arrtaluka);
            if ($taluka)
                $student->Taluka = $taluka;

            $state1 = array_search($this->txtstate1->Text, $this->arrstate);
            if ($state1)
                $student->State2 = $state1;

            $district1 = array_search($this->txtdistrict1->Text, $this->arrdistrict);
            if ($district1)
                $student->District2 = $district1;

            $taluka1 = array_search($this->txttaluka1->Text, $this->arrtaluka);
            if ($taluka1)
                $student->Taluka2 = $taluka1;

            $student->BloodGroup = $this->lstBloodgroup->SelectedValue;
            $student->Gender = $this->lstGender->SelectedValue;
            $student->Religion = $this->lstReligion->SelectedValue;
            $student->Year = $this->lstYear->SelectedValue;
            $student->CasteCategory = $this->lstcastecategory->SelectedValue;
            $student->PhysicallyHandicaped = $this->lstHandicaped->SelectedValue;
            $dob = explode("/", $this->calDob->Text);
            if ($dob)
                $student->Dob = QDateTime::FromTimestamp(strtotime($dob[2] . $dob[1] . $dob[0]));

            $date = explode("/", $this->calAdmitdate->Text);
            if ($date)
                $student->AddmissionDate = QDateTime::FromTimestamp(strtotime($date[2] . $date[1] . $date[0]));

            $student->Save();
            /* if(isset($_GET['id'])){
              QApplication::DisplayAlert(" Student Data Saved Succesfully !!");
              }else{
              QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission_form.php?id='.$student->Idmember);
              }
              QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission_form.php?id='.$student->Idmember.'#Address');
             */
        }else {
            QApplication::DisplayAlert("Please fill required field !! ");
        }
    }

    protected function btnDoc_click() {
        $this->lblAdd->Visible = true;
        $this->btnAddClose->Visible = true;
        $this->lblAdd->Text = '<iframe src="' . __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/document_add.php?id=' . $_GET['id'] . '" height="500" width="700" ></iframe>';
    }

    protected function btnNext3_click() {
        if (isset($_GET['id'])) {
            //$this->btnSave_click();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Address');
        }
    }

    protected function btnNext_click() {
        if (isset($_GET['id'])) {
            $this->btnSave_click();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Education');
        }
    }

    protected function btnNext1_click() {
        if (isset($_GET['id'])) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Document');
        }
    }

    protected function btnNext2_click() {
        if (isset($_GET['id'])) {
            //   QApplication::DisplayAlert("Student Profile Saved Successfully.....");    
            if ($_GET['id'] == $_SESSION['idlogin']) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
            } else {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/report/inquiry_list.php');
            }
        }
    }

    protected function btnView_click($strFormId, $strControlId, $strParameter) {
        $this->pnlForm->Visible = TRUE;
        $this->pnlForm->Text = '<div align=right><div id="openpaneltext">Admission Form</div><a href=""><img src="' . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/close2.png' . '"></a></div>
                    <iframe src="' . __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form_print.php?id=' . $_GET['id'] . '" height="600" width="1000" ></iframe>
                           <div>';
        //QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission_form.php?id='.$_GET['id'].'&page='.$_GET['page']);   
    }

    protected function btnDelete_Click() {
        $ledger = Ledger::LoadByIdledger($_GET['id']);
        $employee = Member::LoadByIdmember($ledger->Idledger);
        if ($employee) {
            //delete education
            $edus = Education::LoadArrayByMember($employee->Idmember);
            if ($edus) {
                foreach ($edus as $edu) {
                    $marks = Marks::LoadArrayByEducation($edu->Ideducation);
                    if ($marks) {
                        foreach ($marks as $mark) {
                            $mark->Delete();
                        }
                    }
                    $edu->Delete();
                }
            }
            //Experience delete
            $exps = Experiance::LoadArrayByMember($employee->Idmember);
            if ($exps) {
                foreach ($exps as $exp) {
                    $exp->Delete();
                }
            }
            //logins delete

            $login = Login::LoadByIdlogin($employee->Idmember);
            if ($login) {
                $loginposts = LoginHasHierarchy::LoadArrayByLogin($login->Idlogin);
                if ($loginposts) {
                    foreach ($loginposts as $loginpost) {
                        $loginpost->Delete();
                    }
                }
                $login->Delete();
            }
            $employee->Delete();
        }
        $ledger->Delete();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php');
    }

    protected function btnAddClose_click() {
        if (isset($_GET['id'])) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Document');
        }
    }

    protected function btnMarksClose_click() {
        if (isset($_GET['id'])) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/admission_form.php?id=' . $_GET['id'] . '#Education');
        }
    }

}

AdmissionForm::Run('AdmissionForm');
?>