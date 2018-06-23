<?php
   // require('./subjectEditPanel.class.php');
    require('../../qcubed.inc.php');

    class StudentEditPanel extends QForm {
        protected $objStudent;
         // The Method CallBack after Save or Cancel has been clicked
        protected $strMethodCallBack;
        // Controls for Person's Data Fields
        // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
        public $strTitleVerb;
        public $btnUpdate;
        public $btnCancel;
        public $lstCalender;
        public $lstRoles;
        public $lstProgram;
        public $txtOldprn;
        public $txtNewprn;
        public $txtName;
        public $txtAddress;
        public $txtContact;
        
       // Specify the Teamplte File
        protected $strTemplate = 'studentEditPanel.tpl.php';
        public function __construct($objParentObject, $objStudent, $strMethodCallBack, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            // Let's record the reference to the form's MethodCallBack
            // See note in ProjectViewPanel for more on this.
        $this->objStudent = $objStudent;
            //$this->strTitleVerb = $this->objCounter->Name;
        $this->strMethodCallBack = $strMethodCallBack;
        
        $this->btnUpdate= new QButton($this);
        $this->btnUpdate->ButtonMode = QButtonMode::Success;
        $this->btnUpdate->AddAction(new QClickEvent(), new QServerAction('btnUpdate_Click'));
        
        $this->btnCancel= new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnUpdate->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
        
        $this->txtOldprn= new QTextBox($this);
        $this->txtOldprn->Name= "Old PRN";
                
        $this->txtNewprn= new QTextBox($this);
        $this->txtNewprn->Name= "New PRN";
        
        $this->txtName= new QTextBox($this);
        $this->txtName->Name= "Name";
                
        $this->txtAddress= new QTextBox($this);
        $this->txtAddress->Name= "Address";
        
        $this->txtContact= new QTextBox($this);
        $this->txtContact->Name= "Contact";       
                
                
        $this->lstCalender = new QSelect2ListBox($this);
        $this->lstCalender->AddItem("-Select Calender-", NULL);
        $calenders = CalenderYear::LoadAll();
        foreach ($calenders as $calender) {
            $this->lstCalender->AddItem($calender->Name, $calender->IdcalenderYear);    
            if(isset($_GET['year'])){
                if(date('Y',  strtotime($calender->From)) == $_GET['year'])
                    $this->lstCalender->SelectedValue = $calender->IdcalenderYear;
            }
        }
        
        $this->lstRoles = new QListBox($this);
        $this->lstRoles->AddItem('Select Department', NULL);
        $Roles = Role::LoadArrayByGrp(4,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
        foreach ($Roles as $Role)
            $this->lstRoles->AddItem($Role->Name, $Role->Idrole);
        $this->lstRoles->AddAction(new QChangeEvent(), new QAjaxAction('lstRoles_Change'));
        
        $this->lstProgram = new QSelect2ListBox($this);
        $this->lstProgram->AddItem("-Select Program-", NULL); 
        $Roles = Role::LoadAll();
        foreach ($Roles as $Role)
            $this->lstProgram->AddItem($Role->Name, $Role->Idrole);
     /*   
        if(isset($_GET['prog'])){
            $programs = Role::QueryArray(QQ::AndCondition(QQ::Equal(QQN::Role()->ShortName, $_GET['prog'])));
                if($programs){
                    foreach($programs as $program){}
                    $this->lstRoles->AddItem($Role->Name, $program->Idrole);
                    $this->lstProgram->SelectedValue = $program->Idrole;
                   $this->lstRoles->SelectedValue = $program->Parrent;
                }
        */
    //}
     
       
      
        
        if(isset($_GET['year'])){
                   $year= CalenderYear::LoadByIdcalenderYear($_GET['year']);
                   $this->lstCalender->SelectedValue = $year->IdcalenderYear;
                   if(isset($_GET['prog'])){
                   $role= Role::LoadByIdrole($_GET['prog']);
                   $this->lstRoles->SelectedValue = $role->Parrent;
                   $this->lstProgram->SelectedValue =$role->Name;
                   }        
             }
        }
        protected function lstRoles_Change(){
        $depts = Role::LoadArrayByParrent($this->lstRoles->SelectedValue);
            foreach ($depts as $dept){
                $this->lstProgram->AddItem($dept->Name, $dept->Idrole);    
            }
         }
      /*
        protected function btnUpdate_Click(){
            $led = Ledger::LoadByIdledger();
            $led->Name = $this->txtName->Text;
            $led->Save();  
            $address = Address::LoadArrayByOf($led->Idledger);
            if($address){
                foreach ($address as $addres){}
            }else{
                $addres = new Address();
            }
            $addres->Of = $led->Idledger;
            $addres->Contact1 = $this->txtContact->Text;
            $addres->AddressLine1 = $this->txtAddress->Text;
            $addres->Save();
            $profile =  Profile::LoadByIdprofile();
            $profile->OldPrn = $this->txtOldprn->Text;
            $profile->Save();
        
        }
       
       */
        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(false);	
        }
        
    } 
    StudentEditPanel::Run('StudentEditPanel');
?>    