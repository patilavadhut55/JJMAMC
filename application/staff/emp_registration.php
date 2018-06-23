<?php

 require('../../qcubed.inc.php');
 
 class EmpRegistration Extends QForm{
  //employee details
    protected $calAdmitdate;
    protected $calDob;
    protected $lstdept;
    protected $lstdesignation;
    protected $lstappointment;
 
    protected $lstbloodgrp;
    protected $lstreligion;
    protected $lstcastecat;
    protected $lstcast;
    protected $lstgender;
    protected $lstmarride;
    protected $lstprefix;
    protected $txtempfname;
    protected $txtempmname;
    protected $txtemplname;
    protected $txtffname;
    protected $txtfmname;
    protected $txtflname;
    protected $txtempcode;
    protected $txtage;

    protected $btnAdmissionSave;
    protected $btnDelete;
    protected $btnNext;
      
      //presonal details
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
   
    protected  $txtpincode;
    protected  $txtpincode1;
    protected $chkAbove;
    protected $btnPersonalSave;
    
    //other info
    protected $txtContact1;
    protected $txtContact2;
    protected $txtemail;
    protected $txtbank;
    protected $txtbranch;
    protected $txtaccountno;
    protected $txtifsccode;
    protected $txtpanno;
    protected $lstpayscale;
   
    protected $btninfosave;
    
     //education details controls
    protected $txttitle;
    protected $txtInstitute;
    protected $txtaddress;
   // protected $txtPassYear;
    protected $calDate;
    protected $txtename;
    protected $txtmark;
    protected $txtTotalmark;
    protected $txtpercent;
    protected $btnEduDetailsSave;
    protected $lbldelete;

    //Experience
    protected $calappfrom;
    protected $calappto;
    protected $txtCompany;
    protected $txtNote;
    protected $txtDepartment;
    protected $txtPost;
    protected $calRetiredate;
    protected $calleftdate;
    protected $txtReason;
    protected $chkLeft;
    protected $btnexpsave;
    
    //Document Upload
    protected $lstDocs;
    protected $btnAdd;
    protected $lbldocdelete;
    protected $btnUpload;
    
      
    protected function Form_Run() {
         parent::Form_Run();
         
         QApplication::CheckRemoteAdmin();
     }
     
    protected function Form_Create() {
         parent::Form_Create();
         //employee Code
         
        $this->txtempcode = new QTextBox($this);
        $this->txtempcode->Width = 70;
        $this->txtempcode->ReadOnly = TRUE;
     
        //department
        $this->lstdept = new QSelect2ListBox($this);
        $this->lstdept->Width = 240;
        $this->lstdept->AddItem("-Select department-");
        $dept = Role::LoadArrayByGrp(2);
        foreach ($dept as $dept) {
            $this->lstdept->AddItem(delete_all_between('[', ']',$dept->Name),$dept->Idrole);
          }
            
         //designation
             
        $this->lstdesignation = new QSelect2ListBox($this);
        $this->lstdesignation->Width = 240;
        $this->lstdesignation->AddItem("-Select Designation-");
        $designation  = Role::LoadArrayByGrp(3);
        foreach ($designation as $desig){
           $this->lstdesignation->AddItem(delete_all_between('[',']', $desig->Name),$desig->Idrole);
        }
        
        $this->lstappointment = new QSelect2ListBox($this);
        $this->lstappointment->Width = 240;
        $this->lstappointment->AddItem("-Select Appointment-");
        $appoint  = AppoinmentCat::LoadAll();
        foreach ($appoint as $app){
           $this->lstappointment->AddItem($app->Name,$app->IdappoinmentCat);
        }
        
        //prefix
        $this->lstprefix = new QListBox($this);
        $this->lstprefix->Width = '100%';
        $this->lstprefix->AddItem("-Prefix-");
        $prefix = Prefix::LoadAll();
        foreach ($prefix as $pre) {
            $this->lstprefix->AddItem($pre->Name,$pre->Idprefix);
            
        }
                
        //employee name
        $this->txtempfname = new QTextBox($this);
        $this->txtempfname->Placeholder = "FirstName";
        $this->txtempfname->Width = 180;
        $this->txtemplname = new QTextBox($this);
        $this->txtemplname->Placeholder = "LastName";
        $this->txtemplname->Width = 180;
        $this->txtemplname->AddAction(new QEnterKeyEvent(), new QAjaxAction('Names'));
        $this->txtemplname->AddAction(new QFocusOutEvent(), new QAjaxAction('Names'));
        
        $this->txtempmname = new QTextBox($this);
        $this->txtempmname->Placeholder = "MiddleName";
        $this->txtempmname->Width = 180;
        
        //father name
        $this->txtffname = new QTextBox($this);
        $this->txtffname->Placeholder = "FirstName";
        $this->txtffname->Width = 190;
        $this->txtfmname = new QTextBox($this);
        $this->txtfmname->Placeholder = "MiddleName";
        $this->txtfmname->Width = 190;
        $this->txtflname = new QTextBox($this);
        $this->txtflname->Placeholder = "LastName";
        $this->txtflname->Width = 190;
        
        //Gender
        $this->lstgender = new QSelect2ListBox($this);
        $this->lstgender->Width = 150;
        $this->lstgender->AddItem('-Select gender-');
        $gender = Gender::LoadAll();
        foreach ($gender as $gender) {
            $this->lstgender->AddItem($gender->Name,$gender->Idgender);
        }
        
        //age
        $this->txtage = new QTextBox($this);
        $this->txtage->Width = 50;
        
        //blood group
        $this->lstbloodgrp = new QSelect2ListBox($this);
        $this->lstbloodgrp->Width = 240;
        $this->lstbloodgrp->AddItem('-Selecte bloodgroup-');
        $bldgrps = BloodGroup::LoadAll();
        foreach ($bldgrps as $bldgrp) {
            $this->lstbloodgrp->AddItem($bldgrp->Name, $bldgrp->IdbloodGroup);
        }
        
        //religion
        $this->lstreligion = new QSelect2ListBox($this);
        $this->lstreligion->Width = 240;
        $this->lstreligion->AddItem('-Select Religion-');
        $religion = Religion::LoadAll();
        foreach($religion as $religion){
            $this->lstreligion->AddItem($religion->Name, $religion->Idreligion);
        }
        
        //Cast Category 
        $this->lstcastecat = new QSelect2ListBox($this);
        $this->lstcastecat->Width = 240;
        $this->lstcastecat->AddItem('-Select CastCategory-');
        $castcat = FeesConcession::LoadAll();
        foreach($castcat as $castcat){
            $this->lstcastecat->AddItem($castcat->Name, $castcat->IdfeesConcession);
        }
        
        //Cast
        $this->lstcast = new QSelect2ListBox($this);
        $this->lstcast->Width = 240;
        $this->lstcast->AddItem('-Select Cast-');
        $cast = Cast::LoadAll();
        foreach($cast as $cast){
            $this->lstcast->AddItem($cast->Name, $cast->Idcast);
        }
        //marrital status
        $this->lstmarride = new QSelect2ListBox($this);
        $this->lstmarride->Width = 240;
        $this->lstmarride->AddItem('-Select One-');
        $staus = MarrialStatus::LoadAll();
        foreach($staus as $stau)
        {
            $this->lstmarride->AddItem($stau->Name,$stau->IdmarrialStatus);
                    
        }
        //Date of Birth
        $this->calDob = new QCalendar($this);
        $this->calDob->Width = 100;
        //$this->calDob->DateTimeFormat = 'dd/mm/yy';
        $this->calDob->AddAction(new QChangeEvent(), new QServerAction('calDob_Change'));
                  
          //joining date
        $this->calAdmitdate = new QCalendar($this);
        $this->calAdmitdate->Width = 100;
      //  $this->calAdmitdate->Text = date('d/m/Y',  strtotime(QDateTime::Now()));
       // $this->calAdmitdate->DateTimeFormat = 'dd/mm/yy';
         
        
        $this->btnAdmissionSave = new QButton($this);
        $this->btnAdmissionSave->ButtonMode = QButtonMode::Save;
        $this->btnAdmissionSave->AddAction(new QClickEvent(), new QAjaxAction('btnAdmissionSave_click'));
        
        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = "Delete";
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
        $this->btnDelete->Visible = FALSE;
        
        $this->txtempcode->ReadOnly = TRUE;
        $this->txtempcode->Width = 70;
        $counter = Settings::LoadByIdsettings(49);
        $this->txtempcode->Text = 'E'.$counter->Option;
                    
        //personal details
        $this->txtAddress1 = new QTextBox($this);
        $this->txtAddress2 = new QTextBox($this);
        $this->txtAddress1->Width = $this->txtAddress2->Width =  "72%";
        $this->txtAddress1->TextMode = $this->txtAddress2->TextMode =  QTextMode::MultiLine;

        $this->lststate = new QSelect2ListBox($this);
        $this->lststate->AddItem('-Select State-',NULL);
         $states = Place::QueryArray(
                 QQ::AndCondition(
                        QQ::Equal(QQN::Place()->Grp, 2)
                        ));
        foreach ($states as $state){
            $this->lststate->AddItem($state->Name,$state->Idplace);
        }
        $this->lststate->AddAction(new QClickEvent(), new QAjaxAction('lststate_Change'));
        
        $this->lststate1 = new QSelect2ListBox($this);
        $this->lststate1->AddItem('-Select State-',NULL);
        $states = Place::QueryArray(
                 QQ::AndCondition(
                        QQ::Equal(QQN::Place()->Grp, 2)
                        ));
        foreach ($states as $state){
            $this->lststate1->AddItem($state->Name,$state->Idplace);
        }
        $this->lststate1->AddAction(new QClickEvent(), new QAjaxAction('lststate1_Change'));
        
        $this->lstdistrict = new QSelect2ListBox($this);
        $this->lstdistrict->Width = 240;
        $this->lstdistrict->AddItem('-Select District-',NULL);
        $this->lstdistrict->AddAction(new QClickEvent(), new QAjaxAction('lstdistrict_Change'));

        $this->lstdistrict1 = new QSelect2ListBox($this);
        $this->lstdistrict1->Width = 240;
        $this->lstdistrict1->AddItem('-Select District-',NULL);
        $this->lstdistrict1->AddAction(new QClickEvent(), new QAjaxAction('lstdistrict1_Change'));

        $this->lsttaluka = new QSelect2ListBox($this);
        $this->lsttaluka->AddItem('-Select Taluka-',NULL);
        $this->lsttaluka->AddAction(new QClickEvent(), new QAjaxAction('lsttaluka_Change'));

        $this->lsttaluka1 = new QSelect2ListBox($this);
        $this->lsttaluka1->AddItem('-Select Taluka-',NULL);
        $this->lsttaluka1->AddAction(new QClickEvent(), new QAjaxAction('lsttaluka1_Change'));

        $this->txtCity = new QTextBox($this);
        $this->txtCity->Placeholder = "Enter City";
        $this->txtCity1 = new QTextBox($this);
        $this->txtCity1->Placeholder = "Enter City";
                        
        $this->txtpincode = new QTextBox($this);
        $this->txtpincode->MaxLength = 10;
        $this->txtpincode->Placeholder = "Enter Pincode";
        $this->txtpincode->TextMode = QTextMode::Mobile;
        
        $this->txtpincode1 = new QTextBox($this);
        $this->txtpincode1->MaxLength = 10;
        $this->txtpincode1->Placeholder = "Enter Pincode";
        $this->txtpincode1->TextMode = QTextMode::Mobile;
        
        $this->chkAbove = new QCheckBox($this);
        $this->chkAbove->Width =  20;
        $this->chkAbove->Height = 20;
        $this->chkAbove->AddAction(new QChangeEvent(), new QAjaxAction('Above_Click'));
        
        $this->btnPersonalSave = new QButton($this);
        $this->btnPersonalSave->ButtonMode = QButtonMode::Save;
        $this->btnPersonalSave->AddAction(new QClickEvent(), new QAjaxAction('btnPersonalSave_click'));

        $this->txtAddress1->Width = $this->txtAddress2->Width =  "72%";
        $this->txtAddress1->TextMode = $this->txtAddress2->TextMode =  QTextMode::MultiLine;

        $this->lststate->Width = $this->lststate1->Width = $this->lsttaluka->Width = 
        $this->lsttaluka1->Width ="90%";
        $this->txtCity->Width = $this->txtCity1->Width = $this->lstdistrict->Width = $this->lstdistrict1->Width = "70%";
        
       //Other Information
        $this->txtContact1 = new QTextBox($this);
        $this->txtContact1->MaxLength = 10;
        $this->txtContact1->TextMode = QTextMode::Mobile;
        $this->txtContact2 = new QTextBox($this);
        $this->txtContact2->MaxLength = 10;
        $this->txtContact2->TextMode = QTextMode::Mobile;
        
        $this->txtemail = new QTextBox($this);
        $this->txtbank = new QTextBox($this);
        $this->txtbranch = new QTextBox($this);
        $this->txtaccountno = new QTextBox($this);
        $this->txtifsccode = new QTextBox($this);
        $this->txtpanno = new QTextBox($this);
       
        $this->lstpayscale = new QSelect2ListBox($this);
        $this->lstpayscale->Width = 240;
        $this->lstpayscale->AddItem("-Select One-");
        $payscale  = PayScale::LoadAll();
        foreach ($payscale as $pay){
           $this->lstpayscale->AddItem($pay->Name,$pay->IdpayScale);
        }
        //$this->lstpayscale->AddAction(new QChangeEvent(), new QAjaxAction('lstpayscale_Change'));
        
        $this->btninfosave = new QButton($this);
        $this->btninfosave->ButtonMode = QButtonMode::Save;
        $this->btninfosave->AddAction(new QClickEvent(), new QAjaxAction('btninfosave_click'));

        $this->txtContact1->Width = $this->txtContact2->Width = $this->txtemail->Width = 
        $this->txtbank->Width = $this->txtbranch->Width =$this->txtaccountno->Width = 
        $this->txtpanno->Width =  $this->lstpayscale->Width = $this->txtifsccode->Width ="90%";
        
        //Education details
        $this->txttitle = new QSelect2ListBox($this);
        $this->txttitle->Name = "Pre Qualification";
        $prequals = Education::LoadAll();
        $this->txttitle->AddItem("-Select Education-",NULL);
        foreach ($prequals as $prequal){
            $this->txttitle->AddItem($prequal->Name,$prequal->Ideducation);
        }
        $this->txtInstitute = new QTextBox($this);
        $this->txtInstitute->Name ="Institute";
        
        $this->txtaddress = new QTextBox($this);
        $this->txtaddress->Name = "Address";

        $this->txtename = new QTextBox($this);
        $this->txtename->Name = "Education Name"; 
        
        $this->calDate = new QCalendar($this);
        $this->calDate->Width = 100;
       // $this->calDate->DateTimeFormat = 'dd/mm/yy';
        
        $this->txtmark = new QTextBox($this);
        $this->txtmark->Name ="Subject1";
        
        $this->txtTotalmark = new QTextBox($this);
        $this->txtTotalmark->Name = "TotalMarks";
        $this->txtTotalmark->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtTotalmark_Click'));

        $this->txtpercent = new QTextBox($this);
        $this->txtpercent->Name = "Percentage";
        $this->txtpercent->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtpercent_Click'));

        $this->btnEduDetailsSave = new QButton($this);
        $this->btnEduDetailsSave->ButtonMode = QButtonMode::Success;
        $this->btnEduDetailsSave->Text = "Submit";
        $this->btnEduDetailsSave->AddAction(new QClickEvent(), new QAjaxAction('btnEduDetailsSave_Click'));

        $this->btnNext = new QButton($this);
        $this->btnNext->ButtonMode = QButtonMode::Warning;
        $this->btnNext->Text = "Next >>";
        $this->btnNext->AddAction(new QClickEvent(), new QAjaxAction('btnNext_Click'));

        //Experience Details
        $this->calappfrom = new QCalendar($this);
        $this->calappfrom->Width = 100;
        //$this->calappfrom->DateTimeFormat = 'dd/mm/yy';
        $this->calappto = new QCalendar($this);
        $this->calappto->Width = 100;
        //$this->calappto->DateTimeFormat = 'dd/mm/yy';
         
        $this->txtCompany = new QTextBox($this);
        $this->txtCompany->Name = "Institute Name"; 
         
        $this->txtNote = new QTextBox($this);
        $this->txtNote->Name = "Note"; 
      //  $this->txtNote->AddAction(new QEnterKeyEvent(), new QServerAction('txtNote_EnterKey'));
                    
        $this->txtDepartment = new QTextBox($this);
        $this->txtDepartment->Name = "Department"; 
        $this->txtPost = new QTextBox($this);
        $this->txtPost->Name = "Post"; 
             
        $this->btnexpsave = new QButton($this);
        $this->btnexpsave->ButtonMode = QButtonMode::Save;
        $this->btnexpsave->AddAction(new QClickEvent(), new QAjaxAction('btnexpsave_click'));

        $this->calRetiredate = new QCalendar($this);
        $this->calRetiredate->Width = 100;
        //$this->calRetiredate->Text = date('d/m/Y',  strtotime(QDateTime::Now()));
        //$this->calRetiredate->DateTimeFormat = 'dd/mm/yy';
               
        $this->calleftdate = new QCalendar($this);
        $this->calleftdate->Width = 100;
        //$this->calleftdate->DateTimeFormat = 'dd/mm/yy';
        
        $this->txtReason = new QTextBox($this);
        $this->chkLeft = new QCheckBox($this);
        $this->chkLeft->Width = 20;
        $this->chkLeft->Height = 20;
        
        //document upload control
        $this->lstDocs = new QSelect2ListBox($this);
        $this->lstDocs->Name = "Docs";
        $this->lstDocs->AddItem("-Select Doc-",NULL);
        $setting = Settings::LoadByName("Document Ledger Group");
        $docs = Ledger::LoadArrayByGrp($setting->Option);
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
        
          
        if(isset($_GET['id'])){
            $employee = Address::LoadByIdaddress($_GET['id']);
            
            $this->txtempfname->Text = $employee->Fname;
            $this->txtempmname->Text = $employee->Mname;
            $this->txtemplname->Text = $employee->Lname;
            $this->txtffname->Text = $employee->Fatherfname;
            $this->txtfmname->Text = $employee->Fathermname;
            $this->txtflname->Text = $employee->Fatherlname;
            $this->lstcast->SelectedValue = $employee->Caste;
            $this->txtage->Text = $employee->Age;
            $this->lstdept->SelectedValue = $employee->Department;
            $this->lstdesignation->SelectedValue = $employee->Designation;
            $this->lstappointment->SelectedValue = $employee->AppointmentCat;
            $this->lstbloodgrp->SelectedValue = $employee->BloodGrp;
            $this->lstgender->SelectedValue = $employee->Gender;
            $this->lstmarride->SelectedValue = $employee->MarritalStatus;
            $this->lstreligion->SelectedValue = $employee->Religion;
            $this->lstprefix->SelectedValue = $employee->Prefix;
            $this->lstcastecat->SelectedValue = $employee->CasteCat;
            $this->lstcast->SelectedValue = $employee->Caste;
            $this->calDob->Text = date("M d Y",  strtotime($employee->Dob));
            $this->calAdmitdate->Text = date("M d Y",  strtotime($employee->AppoinmentDate));

            $this->txtAddress1->Text = $employee->AddressLine1;
            $this->txtAddress2->Text = $employee->AddressLine2;
            $this->txtpincode->Text = $employee->ZipCode;
            $this->txtpincode1->Text = $employee->Zipcode1;
            $this->txtCity->Text = $employee->City;
            $this->txtCity1->Text = $employee->City1;
            $this->lststate->SelectedValue = $employee->State;
            $this->lststate1->SelectedValue = $employee->State1;
            $this->lstdistrict->SelectedValue = $employee->District;
            $this->lstdistrict1->SelectedValue = $employee->District1;
            $this->lsttaluka->SelectedValue = $employee->Taluka;
            $this->lsttaluka1->SelectedValue = $employee->Taluka1;
            if($this->txtAddress2->Text != NULL)
                $this->chkAbove->Checked = TRUE;

            $this->txtContact1->Text = $employee->Contact1;
            $this->txtContact2->Text = $employee->Contact2;
            $this->txtemail->Text = $employee->Email1;
            $this->txtbank->Text = $employee->BankName;
            $this->txtbranch->Text = $employee->Branch;
            $this->txtaccountno->Text = $employee->BankAccNo;
            $this->txtifsccode->Text = $employee->IfscCode;
            $this->txtpanno->Text = $employee->PanNo;
            $this->lstpayscale->SelectedValue = $employee->Payscale; 


            $educations = Education::LoadArrayByMember($employee->Of);
            if($educations){
            foreach ($educations as $education){}
            $employee->Of = $education->Member;
            $this->txttitle->SelectedValue = $education->Title;
            $this->txttitle->SelectedName = $education->Name;
            $this->txtInstitute->Text = $education->UniversityPlace; 
            $this->txtaddress->Text = $education->Address; 
            $this->calDate->Text = date("M d Y",  strtotime($education->YearOfPassing));
            $this->txtmark->Text = $education->Marks;
            $this->txtTotalmark->Text = $education->OutOf; 
            $this->txtpercent->Text = $education->Percentage;
            }

            $experiences = Expirance::LoadArrayByMember($employee->Of);
            if($experiences){
                foreach($experiences as $experience){}
                $employee->Of = $experience->Member; 
                $this->calRetiredate->Text = date("M d Y",  strtotime($experience->ApprovalFromDate));
                $this->calappfrom->Text = date("M d Y",  strtotime($experience->From));
                $this->calappto->Text = date("M d Y",  strtotime($experience->To));
                $this->calleftdate->Text = date("M d Y",  strtotime($experience->ApprovalToDate));
                $this->txtCompany->Text = $experience->Company;
                $this->txtDepartment->Text = $experience->Department; 
                $this->txtNote->Text = $experience->Note; 
                $this->txtPost->Text = $experience->Post; 
            }
                
            $memdocs = MemberDoc::LoadArrayByMember($_GET['id']);
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
            
            if(isset($_GET['doc']) && isset($_GET['docid'])){
                $memdocs = MemberDoc::LoadByIdmemberDoc($_GET['docid']);
                $scans = explode(',', $memdocs->Scans);
                $add = 0;
                foreach ($scans as $scan){
                    if($scan == $_GET['doc']) $add = 1;
                }
                if($add == 0){
                    if(!$memdocs->Scans){
                        $memdocs->Scans = $_GET['doc'];
                    }else{
                        $memdocs->Scans = $memdocs->Scans.",".$_GET['doc'];
                    }
                    $setting = Settings::LoadByName("Scan");
                    if($setting){
                        $setting->Option = $setting->Option + 1;
                        $setting->Save();
                    }
                    
                }
                $memdocs->Save();
            }
        }
        
    }

    public function calDob_Change() {
        if($this->calDob->Text != ''){
            $dob = explode("/", $this->calDob->Text);
            $cnt = sizeof(explode("/", $this->calDob->Text));

            $error = 0;
            if($cnt == 3) {
                $this->txtage->Text = QDateTime::Now()->Year - $dob[2];
                
            } else {
                $error == 1;
            }
            if($error == 1) {
                QApplication::DisplayAlert("Student is not valid for Application.");
                $this->calDob->Text = $this->txtage->Text = "";
            }
        }
    }
    
    protected function btnAdmissionSave_click(){
        $error = 0;
        if($this->txtage->Text < 17) {
            $error = 1;
            QApplication::DisplayAlert("This Student is not valid for Admission Age is below 17");
        }
        if($error == 0) {
            if($this->txtempfname->Text != "" && $this->txtempmname->Text != "" && $this->txtemplname->Text != ""  && $this->calAdmitdate->Text != "" ) {
                if(isset($_GET['id'])){
                    $employee = Address::LoadByIdaddress($_GET['id']);
                }
                else{
                    $ledger = new Ledger();
                    $code = Settings::LoadByName("Employee");
                    $ledger->Code = 'E' . $code->Option ;
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $ledger->Name =  $this->lstprefix->SelectedName. ' ' .$this->txtempfname->Text . ' ' . $this->txtempmname->Text . ' ' . $this->txtemplname->Text;
                    $ledger->Grp = 34; //employee
                    $ledger->Save();
                    $employee = new Address();
                    $employee->Of = $ledger->Idledger;
                    if(!is_dir('../upload/documents/A'.$ledger->Code)){
                        mkdir('../upload/documents/A'.$ledger->Code, 0777, true);
                    }
                }
                
                $employee->Fname = $this->txtempfname->Text;
                $employee->Mname = $this->txtempmname->Text;
                $employee->Lname = $this->txtemplname->Text;
                $employee->Fatherfname = $this->txtffname->Text;
                $employee->Fathermname = $this->txtfmname->Text;
                $employee->Fatherlname = $this->txtflname->Text;
                $employee->Caste = $this->lstcast->SelectedValue;
                $employee->Age = $this->txtage->Text;
                $employee->Department = $this->lstdept->SelectedValue;
                $employee->Designation = $this->lstdesignation->SelectedValue;
                $employee->AppointmentCat = $this->lstappointment->SelectedValue;
                $employee->BloodGrp = $this->lstbloodgrp->SelectedValue;
                $employee->Gender = $this->lstgender->SelectedValue;
                $employee->MarritalStatus = $this->lstmarride->SelectedValue;
                $employee->Religion = $this->lstreligion->SelectedValue;
                $employee->Prefix = $this->lstprefix->SelectedValue;
                $employee->CasteCat = $this->lstcastecat->SelectedValue;
                $employee->Caste =  $this->lstcast->SelectedValue;
                $employee->Dob = QDateTime::FromTimestamp(strtotime($this->calDob->Text));
                $employee->AppoinmentDate = QDateTime::FromTimestamp(strtotime($this->calAdmitdate->Text));
                $employee->Save();
                
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/staff/emp_registration.php?id='.$employee->Idaddress.'&tab=2');
            }
            else {
                QApplication::DisplayAlert("Please fill required field !! ");
            }
        }
    }
    protected function btnPersonalSave_click(){
        if(isset($_GET['id'])) {
            $employee = Address::LoadByIdaddress($_GET['id']);
            
            $employee->AddressLine1 = $this->txtAddress1->Text;
            $employee->AddressLine2 = $this->txtAddress2->Text;
            $employee->ZipCode= $this->txtpincode->Text;
            $employee->Zipcode1 = $this->txtpincode1->Text;
            $employee->City = $this->txtCity->Text;
            $employee->City1 = $this->txtCity1->Text;
            $employee->State = $this->lststate->SelectedValue;
            $employee->State1 = $this->lststate1->SelectedValue;
            $employee->District = $this->lstdistrict->SelectedValue;
            $employee->District1 = $this->lstdistrict1->SelectedValue;
            $employee->Taluka = $this->lsttaluka->SelectedValue;
            $employee->Taluka1 = $this->lsttaluka1->SelectedValue;
            $employee->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/staff/emp_registration.php?id='.$_GET['id'].'&tab=3');
        }
        
    }
      protected function btninfosave_click(){
        if(isset($_GET['id'])) {
            $employee = Address::LoadByIdaddress($_GET['id']);
            $employee->Contact1 = $this->txtContact1->Text;
            $employee->Contact2 = $this->txtContact2->Text;
            $employee->Email1= $this->txtemail->Text;
            $employee->BankName = $this->txtbank->Text;
            $employee->Branch = $this->txtbranch->Text;
            $employee->BankAccNo = $this->txtaccountno->Text;
            $employee->IfscCode = $this->txtifsccode->Text;
            $employee->PanNo = $this->txtpanno->Text;
            $employee->Payscale = $this->lstpayscale->SelectedValue;
            $employee->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/staff/emp_registration.php?id='.$_GET['id'].'&tab=4');
        }
    }
     
    protected function Above_click() {
        if ($this->chkAbove->Checked == 1) {
            $this->txtAddress2->Text = $this->txtAddress1->Text;
            $this->lststate1->SelectedValue = $this->lststate->SelectedValue;
            $this->lststate1_Change();
            $this->lstdistrict1->SelectedValue = $this->lstdistrict->SelectedValue;
            $this->lstdistrict1_Change();
            $this->lsttaluka1->SelectedValue = $this->lsttaluka->SelectedValue;
            $this->txtCity1->Text = $this->txtCity->Text;
            $this->txtpincode1->Text = $this->txtpincode->Text;
        } else {
            $this->txtAddress2->Text = "";
            $this->lststate1->SelectedValue = NULL;
            $this->lstdistrict1->SelectedValue = NULL;
            $this->lsttaluka1->SelectedValue = NULL;
            $this->txtCity1->Text = "";
            $this->txtpincode1->Text = "";
        }

    }
       public function btnEduDetailsSave_Click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id'])){
            $employee = Address::LoadByIdaddress($_GET['id']);
            if($this->txttitle->SelectedValue != NULL){
                $studs = EducationDetails::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::EducationDetails()->Student, $employee->Of),
                                QQ::Equal(QQN::EducationDetails()->PreQualification, $this->txttitle->SelectedName)
                            )
                        );
                        if($studs){
                            foreach ($studs as $stud){}
                            $educatoins = Education::LoadArrayByMember($employee->Of);
                            foreach ($educatoins as $educatoin){
                                $education->Member = $employee->Of;
                                $education->Title = $this->txttitle->SelectedValue;
                                $education->Name = $this->txttitle->SelectedName;
                                $education->UniversityPlace = $this->txtInstitute->Text;
                                $education->Address = $this->txtaddress->Text;
                                $education->YearOfPassing =  QDateTime::FromTimestamp(strtotime($this->calDate->Text));
                                $education->Marks = $this->txtmark->Text;
                                $education->OutOf = $this->txtTotalmark->Text;
                                $education->Percentage = $this->txtpercent->Text;
                                $education->Save();
                            }
                        }  else {
                            //Save Education Details

                            $education = new Education();
                            $education->Member = $employee->Of;
                            $education->Title = $this->txttitle->SelectedValue;
                            $education->Name = $this->txttitle->SelectedName;
                            $education->UniversityPlace = $this->txtInstitute->Text;
                            $education->Address = $this->txtaddress->Text;
                            $education->YearOfPassing =  QDateTime::FromTimestamp(strtotime($this->calDate->Text));
                            $education->Marks = $this->txtmark->Text;
                            $education->OutOf = $this->txtTotalmark->Text;
                            $education->Percentage = $this->txtpercent->Text;
                            $education->Save();
                        }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__. '/staff/emp_registration.php?id='.$_GET['id'].'&tab=5'); 
            
            }else{
                QApplication::DisplayAlert("Enter Proper Qualification"); 
            }
        }
    }
    protected function lststate_Change() {
        if ($this->lststate->SelectedValue != NULL) {
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lststate->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lstdistrict->AddItem($place->Name, $place->Idplace);
            }
        }
    }
    protected function lstdistrict_Change() {
        if ($this->lstdistrict->SelectedValue != NULL) {
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lstdistrict->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lsttaluka->AddItem($place->Name, $place->Idplace);
            }
        }
    }
 

    protected function lststate1_Change() {
       if ($this->lststate1->SelectedValue != NULL) {
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lststate1->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lstdistrict1->AddItem($place->Name, $place->Idplace);
            }
        }
    }
    protected function lstdistrict1_Change() {
       if ($this->lstdistrict1->SelectedValue != NULL) {
            $places = Place::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Place()->Parrent, $this->lstdistrict1->SelectedValue)
                            ));
            foreach ($places as $place) {
                $this->lsttaluka1->AddItem($place->Name, $place->Idplace);
            }
        }
        }
    
//  protected function lstpayscale_Change() {
//        if ($this->lstpayscale->SelectedValue != NULL) {
//            $payscale = Address::QueryArray(
//                            QQ::AndCondition(
//                                QQ::Equal(QQN::Address()->Payscale, $this->lstpayscale->SelectedValue)
//                            ));
//            foreach ($places as $place) {
//                $this->lstdistrict->AddItem($place->Name, $place->Idaddress);
//            }
//        }
//    }
    protected function Names() {
        $this->txtffname->Text = $this->txtempmname->Text;
        $this->txtflname->Text = $this->txtemplname->Text;
    }
     

    protected function txtpercent_Click(){
        $this->txtpercent->Text = number_format(($this->txtmark->Text / $this->txtTotalmark->Text)*100,2,'.','');
        $this->txtpercent->Focus();
      
    }
    
    protected function txtNote_EnterKey(){
                    if($this->calappfrom->Text != "" && $this->calappto->Text != "" && $this->txtCompany->Text != "" && $this->txtDepartment->Text != ""){
                    $exper = new Expirance();
                    $exper->Member = $_GET['id'];
                    
                    if($this->calappfrom->Text != ""){
                        $appfrom = explode("/", $this->calappfrom->Text);
                        $exper->ApprovalFromDate = QDateTime::FromTimestamp(strtotime($appfrom[2].$appfrom[1].$appfrom[0]));;
                    }
                    if($this->calappto->Text != ""){
                        $appto = explode("/", $this->calappto->Text);
                        $exper->ApprovalToDate = QDateTime::FromTimestamp(strtotime($appto[2].$appto[1].$appto[0]));;
                    }
                   
                    if($this->calappfrom->Text != "" && $this->calappto->Text != ""){
                        $appfrom = explode("/", $this->calappfrom->Text);
                        $appto = explode("/", $this->calappto->Text);
                        $month = $appto[1]- $appfrom[1];
                        if($month < 0 )$month = $month * -1;
                        $exper->TotalExp = $appto[2]- $appfrom[2].'.'.$month;
                    }
                    $post = array_search($this->txtPost->Text, $this->arrRolls);
                    
                    $exper->Company = $this->txtCompany->Text;
                    $exper->Department = $this->txtDepartment->Text;
                    $exper->Note = $this->txtNote->Text;
                   
                    $exper->Save();
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/staff/emp_registration.php?id='.$_GET['id'].'#Experience');   
                    }else {
                        QApplication::DisplayAlert('Please Enter Valid field');
                    }
                }
    
    protected function btnexpsave_Click(){
        if(isset($_GET['id']) && $this->calRetiredate->Text != "" && $this->calleftdate->Text != "" ){
            $employee = Address::LoadByIdaddress($_GET['id']);
            
            $experiences = Expirance::LoadArrayByMember($employee->Of);
            if($experiences){
                foreach ($experiences as $experience){}
                $experience->Member = $employee->Of;
                $experience->ApprovalFromDate  =  QDateTime::FromTimestamp(strtotime($this->calRetiredate->Text));
                $experience->From  =  QDateTime::FromTimestamp(strtotime($this->calappfrom->Text));
                $experience->To =  QDateTime::FromTimestamp(strtotime($this->calappto->Text));
                $experience->ApprovalToDate =  QDateTime::FromTimestamp(strtotime($this->calleftdate->Text));
                $experience->Company = $this->txtCompany->Text;
                $experience->Department = $this->txtDepartment->Text;
                $experience->Note = $this->txtNote->Text;
                $experience->Post = $this->txtPost->Text;
                $experience->Save();
            }else{
                $experience = new Expirance();
                $experience->Member = $employee->Of;
                $experience->ApprovalFromDate  =  QDateTime::FromTimestamp(strtotime($this->calRetiredate->Text));
                $experience->From  =  QDateTime::FromTimestamp(strtotime($this->calappfrom->Text));
                $experience->To =  QDateTime::FromTimestamp(strtotime($this->calappto->Text));
                $experience->ApprovalToDate =  QDateTime::FromTimestamp(strtotime($this->calleftdate->Text));
                $experience->Company = $this->txtCompany->Text;
                $experience->Department = $this->txtDepartment->Text;
                $experience->Note = $this->txtNote->Text;
                $experience->Post = $this->txtPost->Text;
                $experience->Save();
               /* $memdoc = new MemberDoc();
                $memdoc->Member = $employee->Idledger;
                $memdoc->Save();*/
            
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/staff/emp_registration.php?id='.$_GET['id'].'#Document');
        }
    }
    
    protected function btnAdd_Click(){
        if($this->lstDocs->SelectedValue != NULL && isset($_GET['id'])){
            //To Scan For Upload Documents
            $scancode = Settings::LoadByName("Scan");
            $employee = Ledger::LoadByIdledger($_GET['id']);
            if($employee){
                //Save Application Documents
                $memdoc = new MemberDoc();
                $memdoc->Member = $employee->Idledger;
                $memdoc->Document = $this->lstDocs->SelectedValue;
                $memdoc->Required = TRUE;
                $memdoc->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/staff/emp_registration.php?id='.$_GET['id'].'&docid='.$memdoc->IdmemberDoc.'&doc='.$scancode->Option.'&tab=6');
            }
        }else{
            QApplication::DisplayAlert("Please select any document");
        }
    }
    
    protected function btnUpload_Click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['id'])){
            $file_name = $_FILES['imgupload']['name'];
                $array = explode('.', $file_name);
                $file_ext = end($array);
                //QApplication::DisplayAlert($file_ext);
                
               //$file_ext = strtolower(end(explode('.',$_FILES["imgupload"]["name"])));
                $employee = Ledger::LoadByIdledger($_GET['id']);
                /*$appdocs = MemberDoc::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::MemberDoc()->Member, $employee->Of),
                            QQ::Equal(QQN::MemberDoc()->Document, $_GET['doc'])
                            ));
                if($appdocs){
                    foreach($appdocs as $appdoc){}
                    $appdoc->Scans = $_GET['doc'];
                    $appdoc->Save();
                }*/
                //$appdocs = MemberDoc::LoadArrayByMember($employee->Of);
                
                 if(!is_dir('../upload/documents/A'.$employee->Code)){
                    mkdir('../upload/documents/A'.$employee->Code, 0777, true);
                }
     
                $target_file = "../upload/documents/A".$employee->Code."/".$_GET['doc'].'.png';
                $files = glob('../upload/documents/A'.$employee->Code."/*.*");
                    for ($i=0; $i<count($files); $i++) {
                        $path_info = pathinfo($files[$i]);
                        if($_GET['doc'] == $path_info['filename']){
                            if(file_exists($files[$i])){
                                unlink($files[$i]);
                            }
                        }
                    }
                $msg = imageFileUpload($target_file, "imgupload");
            
                //QApplication::DisplayAlert($msg);
            
            
            
//                if(!is_dir('../upload/documents/A'.$employee->OfObject->Code)){
//                    mkdir('../upload/documents/A'.$employee->OfObject->Code, 0777, true);
//                }
//                $target_dir = "../upload/documents/A".$employee->OfObject->Code."/";
//                $target_file = $target_dir . $_GET['doc']. ".png" ; 
//                $uploadOk = 1;
//                if(file_exists($target_file)){
//                    unlink($target_file);
//                }
//                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//
//                $memdocs = MemberDoc::QueryArray(
//                            QQ::AndCondition(
//                            QQ::Equal(QQN::MemberDoc()->Member, $employee->Of),
//                            QQ::Equal(QQN::MemberDoc()->Document, $_GET['doc'])
//                            ));
//                if($memdocs){
//                    foreach($memdocs as $memdoc){}
//                    $memdoc->Scans = $_GET['doc'];
//                    $memdoc->Save();
//                }
//            
//            $msg = imageFileUpload($target_file, "imgupload"); 
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
        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/staff/emp_registration.php?id='.$_GET['id'].'&tab=6');
    } 
}
 
EmpRegistration::Run('EmpRegistration');
?>