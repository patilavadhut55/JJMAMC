<?php

require('../../qcubed.inc.php');

class AdmissionForm extends QForm {

    protected $lstCourse;
    protected $lstprefix;
    protected $lstBloodgroup;
    protected $lstcastecategory;
    protected $lstadmissionmode;
    protected $txtCode;
    protected $txtFirstname;
    protected $txtMiddlename;
    protected $txtLastname;
    protected $txtFfathername;
    protected $txtFMothername;
    protected $lstCET;
    protected $txtCetPer;
    protected $txtCetOutof;
    protected $txtCetmarks;
    protected $txthscMarks;
    protected $txtHscOutof;
    protected $txthscPer;
    protected $txtP;
    protected $txtB;
    protected $txtChem;
    protected $lblGroupMarks;
    protected $lblGroupper;
    protected $txtTotal;
    protected $txtotalPer;
    //protected $lstSubject;
    protected $txtContact1;
    protected $txtContact2;
    protected $txtAddress1;
    protected $txtAge;
    protected $arrCaste;
    protected $txtCaste;
    protected $calAdmitdate;
    protected $calDob;
    protected $btnSave;
    protected $btnDelete;
    protected $chktakeform;
    protected $txtformamt;
    //protected $arrCourse;
    
    //document 
    protected $txtNote;
    protected $btnNew;
    protected $btnList;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        //simple textboxs
        $this->txtCode = new QTextBox($this);
        $this->txtCode->ReadOnly = TRUE;
        $this->txtCode->Width = "25%";
        
        $this->lblGroupMarks = new Qlabel($this);
        $this->lblGroupper = new Qlabel($this);

        $this->txtFirstname = new QTextBox($this);
        $this->txtFirstname->Required = TRUE;

        $this->txtMiddlename = new QTextBox($this);
        $this->txtMiddlename->Required = TRUE;
        
        $this->txtLastname = new QTextBox($this);
        $this->txtLastname->Required = TRUE;
        $this->txtLastname->AddAction(new QFocusOutEvent(), new QAjaxAction('Names'));
        
        $this->txtFirstname->Width = $this->txtMiddlename->Width = 
        $this->txtLastname->Width = "100%";

        $this->txtFfathername = new QTextBox($this);
        $this->txtFMothername = new QTextBox($this);
        $this->txtFMothername->Width = "60%"; 
        
        $this->txtContact1 = new QTextBox($this);
        $this->txtContact1->MaxLength = 10;
        $this->txtContact1->TextMode = QTextMode::Mobile;
            
        $this->txtContact2 = new QTextBox($this);
        $this->txtContact2->MaxLength = 10;
        $this->txtContact2->TextMode = QTextMode::Mobile;
        $this->txtContact2->Width = "60%";
        
        $this->txtAge = new QTextBox($this);
        $this->txtAge->Width = "100%";
        
        //large text box
        $this->txtAddress1 = new QTextBox($this);
        $this->txtAddress1->TextMode = QTextMode::MultiLine;
        $this->txtAddress1->Width = "70%";

        $this->txtCetPer = new QTextBox($this);
        $this->txtCetOutof = new QTextBox($this);
        $this->txtCetmarks = new QTextBox($this);
        $this->txtTotal = new QTextBox($this);
        $this->txtP = new QTextBox($this);
        $this->txtB = new QTextBox($this);
        $this->txtChem = new QTextBox($this);
        $this->txthscMarks = new QTextBox($this);
        $this->txtHscOutof = new QTextBox($this);
        $this->txthscPer = new QTextBox($this);

        $this->txtCetPer->Width = $this->txtCetOutof->Width = 
        $this->txtCetmarks->Width = $this->txtTotal->Width = $this->txtP->Width = 
        $this->txtB->Width = $this->txtChem->Width = $this->txthscMarks->Width = 
        $this->txtHscOutof->Width = $this->txthscPer->Width = 70;

        $this->txtCetOutof->AddAction(new QFocusOutEvent(), new QAjaxAction('Cet_per'));
        $this->txtCetOutof->AddAction(new QEnterKeyEvent(), new QAjaxAction('Cet_per'));
        $this->txtHscOutof->AddAction(new QFocusOutEvent(), new QAjaxAction('Hsc_per'));
        $this->txtHscOutof->AddAction(new QEnterKeyEvent(), new QAjaxAction('Hsc_per'));
        $this->txtB->AddAction(new QFocusOutEvent(), new QAjaxAction('Group_per'));
        $this->txtB->AddAction(new QEnterKeyEvent(), new QAjaxAction('Group_per'));

        //caste
        $this->txtCaste = new QSelect2ListBox($this);
        $this->txtCaste->AddItem("-Select Caste-", NULL);
        $this->txtCaste->Width = "60%";
        $casts = Cast::LoadAll();
        foreach ($casts as $cast) {
            $this->txtCaste->AddItem($cast->Name, $cast->Idcast);
        }
        
        //listbox declarations
        $this->lstCET = new QListBox($this);
        $this->lstCET->AddItem("-Select-", NULL);
        $this->lstCET->Width = 120;
        $cets = EducationTitle::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::EducationTitle()->Cet, 1)        
                            ));
        foreach ($cets as $cet) {
            $this->lstCET->AddItem($cet->Name, $cet->IdeducationTitle);
        }
        
         //consession catagories 
        $this->lstcastecategory = new QSelect2ListBox($this);
        $this->lstcastecategory->AddItem("-Select One-", NULL);
        $this->lstcastecategory->Width = "70%";
        $castecats = FeesConcession::LoadAll();
        foreach ($castecats as $castecat) {
            $this->lstcastecategory->AddItem($castecat->Name, $castecat->IdfeesConcession);
        }
        
        //Admissionmode
        $this->lstadmissionmode = new QSelect2ListBox($this);
        $this->lstadmissionmode->AddItem("-Select One-", NULL);
        $this->lstadmissionmode->Width = "70%";
        $caps = AdmissionMode::LoadAll();
        foreach ($caps as $cap) {
            $this->lstadmissionmode->AddItem($cap->Name, $cap->IdadmissionMode);
        }
        
        //prefix
        $this->lstprefix = new QListBox($this);
        $this->lstprefix->AddItem("-Select-", NULL);
        $this->lstprefix->Width = 100;
        $prefixs = Prefix::LoadAll();
        foreach ($prefixs as $prefix) {
            $this->lstprefix->AddItem($prefix->Name, $prefix->Idprefix);
        }

        $this->lstCourse = new QListBox($this);
        $this->lstCourse->AddItem("-Select One-", NULL);
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
        if(!isset($_GET['id'])) $this->lstCourse->SelectedValue = 793; 

        $this->calDob = new QCalendar($this);
        $this->calDob->DateTimeFormat = 'dd/mm/yy';
        $this->calDob->Width = '100%';
        $this->calDob->AddAction(new QChangeEvent(), new QAjaxAction('calDob_Click'));
        
        $this->calAdmitdate = new QCalendar($this);
        $this->calAdmitdate->DateTimeFormat = 'dd/mm/yy';
        $this->calAdmitdate->Width = 150;
                
        $this->chktakeform = new QCheckBox($this);
        $this->chktakeform->Width = 20;
        $this->chktakeform->Height = 20;
        $this->chktakeform->AddAction(new QClickEvent(), new QAjaxAction('chktakeform_Click'));
        
        $this->txtformamt = new QTextBox($this);
        $this->txtformamt->Width = 150;
        $this->txtformamt->Visible = FALSE;
        $this->txtformamt->Placeholder = 'Form Amount';
        //buttons
        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
        $this->btnSave->CausesValidation = TRUE;

        $this->btnList = new QButton($this);
        $this->btnList->ButtonMode = QButtonMode::listall;
        $this->btnList->AddAction(new QClickEvent(), new QAjaxAction('btnList_click'));

        $this->btnNew = new QButton($this);
        $this->btnNew->ButtonMode = QButtonMode::AddNew;
        $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction('btnadd_click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->ButtonMode = QButtonMode::Delete;
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this Inquiry. All Data Related Inquiry Will be lost'))));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = FALSE;
        

        if(isset($_GET['id'])) {
            $this->btnDelete->Visible = TRUE;
            $student = Inquiry::LoadByIdinquiry($_GET['id']);
            $this->txtCode->Text = $student->Code;
            $this->txtFirstname->Text = $student->FirstName;
            $this->txtMiddlename->Text = $student->MiddleName;
            $this->txtLastname->Text = $student->LastName;
            $this->txtFfathername->Text = $student->FatherMiddleName;
            //$this->txtFMothername->Text = $student->MotherName;
            $this->txtAddress1->Text = $student->Address;
            $this->txtContact1->Text = $student->Contact;
            $this->txtContact2->Text = $student->Coontact2;
            $this->txtAge->Text = $student->Age;
            $this->lstprefix->SelectedValue = $student->Prefix;
            $this->lstcastecategory->SelectedValue = $student->Category;
            $this->lstadmissionmode->SelectedValue = $student->AdmissionMode;
            $this->lstCourse->SelectedValue = $student->Course;
            if($student->IsTakeForm == 1){
                $this->chktakeform->Checked = $student->IsTakeForm;
                $this->chktakeform_Click();
                $this->txtformamt->Text = $student->FormFee;
            }
            if($student->Dob)
                $this->calDob->Text = date('d/m/Y', strtotime($student->Dob));
            if($student->AdmissionDate)
                $this->calAdmitdate->Text = date('d/m/Y', strtotime($student->AdmissionDate));
            if($student->Caste)
                $this->txtCaste->SelectedValue = $student->Caste;
                       
            $hscs = Education::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Education()->Title, 5), 
                                QQ::Equal(QQN::Education()->Inquiry, $student->Idinquiry)
                            ));
            if($hscs) {
                foreach ($hscs as $hsc) {}
              
                $this->txthscMarks->Text = $hsc->Marks;
                $this->txtHscOutof->Text = $hsc->OutOf;
                $this->txthscPer->Text = $hsc->Percentage;
                
                $physics = Marks::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation), 
                                    QQ::Equal(QQN::Marks()->Subject, 1)
                                ));
                if($physics){
                    foreach ($physics as $physic){}
                    $this->txtP->Text = $physic->MarksObtained;
                }
                $bios = Marks::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation), 
                                        QQ::Equal(QQN::Marks()->Subject, 3)
                                ));
                if($bios){
                    foreach ($bios as $bio){}
                    $this->txtB->Text = $bio->MarksObtained;
                }

                $chems = Marks::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation), 
                                        QQ::Equal(QQN::Marks()->Subject, 2)
                                ));
                if($chems){
                    foreach($chems as $chem){}
                    $this->txtChem->Text = $chem->MarksObtained;
                }
            }
            //cet
            $cets = Education::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Inquiry, $student->Idinquiry), 
                                    QQ::NotEqual(QQN::Education()->Title, 5)
                            ));
            if($cets){
                foreach ($cets as $cet){}
                
                $this->txtCetmarks->Text = $cet->Marks;
                $this->txtCetOutof->Text = $cet->OutOf;
                $this->txtCetPer->Text = $cet->Percentage;
                $this->lstCET->SelectedValue = $cet->Title;
            }
            $this->Group_per();
        }else{
            $this->calAdmitdate->Text = date('d/m/Y');
            $code = Settings::LoadByName("Inquiry");
            $this->txtCode->Text = date('Y', strtotime(QDateTime::Now())) . $code->Option;
            $code->Save();
            $this->txtHscOutof->Text = $this->txthscMarks->Text = $this->txthscPer->Text = 
            $this->txtCetOutof->Text = $this->txtCetPer->Text = $this->txtCetmarks->Text = 
            $this->txtChem->Text = $this->txtB->Text = $this->txtP->Text = 0;
        }
    }
    protected function chktakeform_Click(){
        if($this->chktakeform->Checked == TRUE){
            $this->txtformamt->Visible = TRUE;
        }else{
            $this->txtformamt->Visible = FALSE;
        }
    }

    protected function btnList_click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_list.php');
    }

    protected function btnadd_click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_edit.php');
    }

    protected function Cet_per() {
        $this->txtCetPer->Text = number_format($this->txtCetmarks->Text / $this->txtCetOutof->Text * 100, 2, '.', '');
    }

    protected function Group_per() {
        $total = $this->txtP->Text + $this->txtB->Text + $this->txtChem->Text;
        $this->lblGroupMarks->Text = $total.'  / 300';
        $this->lblGroupper->Text = number_format(($this->lblGroupMarks->Text / 300) * 100, 2, ".", "").'%';
    }

    protected function Hsc_per() {
        $this->txthscPer->Text = number_format($this->txthscMarks->Text / $this->txtHscOutof->Text * 100, 2, '.', '');
    }

   
    protected function Names() {
        $this->txtFfathername->Text = $this->txtMiddlename->Text;
    }

  
    function validateDate($date) {
        $d = DateTime::createFromFormat('Y-m-d', $date);
        return $d && $d->format('Y-m-d') == $date;
    }

    
    //education function
    public function calDob_Click() {
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

    protected function btnSave_click() {
        $error = 0;
        if($this->txtAge->Text < 17) {
            $error = 1;
            QApplication::DisplayAlert("This Student is not valid for Admission Age is below 17");
        }
        if($this->chktakeform->Checked == TRUE &&  ($this->txtformamt->Text == '0' || $this->txtformamt->Text == '')){
            $error = 1;
            QApplication::DisplayAlert("Please enter Admission Form fee");
        }
        if($error == 0) {
            if($this->txtFirstname->Text != "" && $this->txtMiddlename->Text != "" && $this->txtLastname->Text != "" && $this->lstCourse->SelectedValue != NULL) {
                if(isset($_GET['id'])) {
                    $student = Inquiry::LoadByIdinquiry($_GET['id']);
                }else{
                    $code = Settings::LoadByName("Inquiry");
                    $this->txtCode->Text = date('Y', strtotime(QDateTime::Now())). $code->Option;
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $student = new Inquiry();
                    $student->Code = $this->txtCode->Text;
                    $student->Admitted = 0;
                    $student->Finalized = 0;
                }
                $student->Prefix = $this->lstprefix->SelectedValue;
                $student->FirstName = $this->txtFirstname->Text;
                $student->MiddleName = $this->txtMiddlename->Text;
                $student->LastName = $this->txtLastname->Text;
                $student->FatherMiddleName = $this->txtFfathername->Text;
                $student->Address = $this->txtAddress1->Text;
                $student->Contact = $this->txtContact1->Text;
                $student->Coontact2 = $this->txtContact2->Text;
                $student->Age = $this->txtAge->Text;
                $student->Caste = $this->txtCaste->SelectedValue;
                $student->AdmissionMode = $this->lstadmissionmode->SelectedValue;
                $student->Course = $this->lstCourse->SelectedValue;
                $student->Category = $this->lstcastecategory->SelectedValue;
                if($this->chktakeform->Checked == TRUE){
                    $student->IsTakeForm = $this->chktakeform->Checked;
                    $student->FormFee = $this->txtformamt->Text;
                }
                $dob = explode("/", $this->calDob->Text);
                if($dob)
                    $student->Dob = QDateTime::FromTimestamp(strtotime($dob[2] . $dob[1] . $dob[0]));

                $date = explode("/", $this->calAdmitdate->Text);
                if($date)
                    $student->AdmissionDate = QDateTime::FromTimestamp(strtotime($date[2] . $date[1] . $date[0]));

                $student->Save();
                
                if($this->txtHscOutof->Text != "0" || $this->txthscMarks->Text != "0" || $this->txthscPer->Text != "0") {
                    $hscs = Education::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Education()->Title, 5), 
                                        QQ::Equal(QQN::Education()->Inquiry, $student->Idinquiry)
                                    ));
                    if($hscs) {
                        foreach ($hscs as $hsc){}
                    }else{
                        $hsc = new Education();
                        $hsc->Title = 5;
                        $hsc->Name = "HSC";
                    }
                    $hsc->Inquiry = $student->Idinquiry;
                    $hsc->Marks = $this->txthscMarks->Text;
                    $hsc->OutOf = $this->txtHscOutof->Text;
                    $hsc->Percentage = number_format($this->txthscPer->Text, 2, '.', '');
                    $hsc->Save();

                    if($this->txtP->Text != "0") {
                        $physics = Marks::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation), QQ::Equal(QQN::Marks()->Subject, 1)
                                        ));
                        if($physics) {
                            foreach ($physics as $physic) {}
                        }else{
                            $physic = new Marks();
                            $physic->Education = $hsc->Ideducation;
                            $physic->Subject = 1;
                            $physic->OutOf = 0;
                            $physic->Per = 0;
                        } 
                        $physic->MarksObtained = $this->txtP->Text;
                        $physic->Save();
                    }
                    if($this->txtB->Text != "0") {
                        $bios = Marks::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation), 
                                            QQ::Equal(QQN::Marks()->Subject, 3)
                                        ));
                        if($bios){
                            foreach($bios as $bio){}
                        }else{
                            $bio = new Marks();
                            $bio->Education = $hsc->Ideducation;
                            $bio->Subject = 3;
                            $bio->OutOf = 0;
                            $bio->Per = 0;
                        } 
                        $bio->MarksObtained = $this->txtB->Text;
                        $bio->Save();
                    }

                    if($this->txtChem->Text != "0") {
                        $chems = Marks::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation), 
                                            QQ::Equal(QQN::Marks()->Subject, 2)
                                        ));
                        if($chems){
                            foreach($chems as $chem){}
                        }else{
                            $chem = new Marks();
                            $chem->Education = $hsc->Ideducation;
                            $chem->Subject = 2;
                            $chem->OutOf = 0;
                            $chem->Per = 0;
                        } 
                        $chem->MarksObtained = $this->txtChem->Text;
                        $chem->Save();
                    }
                }
                
                //cet details
                if($this->lstCET->SelectedValue != NULL){
                    $cets = Education::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Education()->Inquiry, $student->Idinquiry), 
                                        QQ::NotEqual(QQN::Education()->Title, 5)
                                    ));
                    if($cets){
                        foreach ($cets as $cet) {}
                    }else{
                        $cet = new Education();
                        $cet->Inquiry = $student->Idinquiry;
                        $cet->Name = "CET";
                    } 
                    $cet->Title = $this->lstCET->SelectedValue;
                    $cet->Marks = $this->txtCetmarks->Text;
                    $cet->OutOf = $this->txtCetOutof->Text;
                    $cet->Percentage = number_format($this->txtCetPer->Text, 2, '.', '');
                    $cet->Save();
                    
                }
                
                if($student->IsTakeForm == 1){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/ad_form_fee_rcpt.php?id=' . $student->Idinquiry);
                }else{
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_list.php');
                }
            }else{
                QApplication::DisplayAlert("Please fill required field !! ");
            }
        }
    }

    protected function btnDelete_Click() {
        $employee = Inquiry::LoadByIdinquiry($_GET['id']);
        if($employee) {
            //delete education
            $edus = Education::LoadArrayByInquiry($employee->Idinquiry);
            if($edus) {
                foreach ($edus as $edu) {
                    $marks = Marks::LoadArrayByEducation($edu->Ideducation);
                    if($marks) {
                        foreach ($marks as $mark) {
                            $mark->Delete();
                        }
                    }
                    $edu->Delete();
                }
            }
            $employee->Delete();
        }
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_edit.php');
    }

}

AdmissionForm::Run('AdmissionForm');
?>