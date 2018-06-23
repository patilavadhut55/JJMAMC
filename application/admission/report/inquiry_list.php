<?php
	require('../../../qcubed.inc.php');
        class InquiryEditForm extends QForm {
		protected $btnimport;
                protected $btnexport;
                protected $btnadd;
                protected $btnSendSms;
                protected $dtg;
                protected $pnlPanel;
                protected $btnFollowup;
                protected $arrCourse;
                protected $lstCourse;
                protected $txtCourse;
                protected $btnShow;
                protected $chkAdmit;
                protected $chkTmpAdmit;
                protected $lblEdit;
                protected $lstStatus;


                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}
//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Program";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $courses = Role::LoadArrayByGrp(5);
                    foreach ($courses as $course){
                        $this->lstCourse->AddItem(delete_all_between("[", "]", $course->Name), $course->Idrole);
                    }
                    
                    $this->arrCourse =  array();
                    if(isset($_GET['dept']))$this->lstCourse->SelectedValue = $_GET['dept'];
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->ButtonMode = QButtonMode::Success;
                    $this->btnShow->Text = "Report";
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));
                    
                    
                    if(isset($_GET['dept']))
                    $inquiries = Inquiry::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']),
                                            QQ::Equal(QQN::Inquiry()->Admitted, 0)        
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
                    else
                        $inquiries = Inquiry::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::Inquiry()->Admitted, 0)        
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
                    if($inquiries){
                    foreach ($inquiries as $inquiry){
                    $this->chkAdmit[$inquiry->Idinquiry] = new QCheckBox($this);
                    $this->chkAdmit[$inquiry->Idinquiry]->Checked =  $inquiry->Admitted;
                    $this->chkAdmit[$inquiry->Idinquiry]->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to Admit '.$inquiry->FirstName.' '.$inquiry->LastName.' For '.$inquiry->SubjectObject) )));                     
                    $this->chkAdmit[$inquiry->Idinquiry]->AddAction(new QClickEvent(), new QAjaxAction('Admission'));
                    $this->chkAdmit[$inquiry->Idinquiry]->ActionParameter = $inquiry->Idinquiry;

                    $this->lblEdit[$inquiry->Idinquiry] =new QLabel($this);
                    $this->lblEdit[$inquiry->Idinquiry]->HtmlEntities = FALSE;
                    $this->lblEdit[$inquiry->Idinquiry]->Text = "<img width='15' height='15' src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png />";
                    $this->lblEdit[$inquiry->Idinquiry]->AddAction(new QClickEvent(), new QAjaxAction('edit'));
                    $this->lblEdit[$inquiry->Idinquiry]->ActionParameter = $inquiry->Idinquiry;
                    }
                    }
                        
                }
                protected function Report(){
                    if($this->lstCourse->SelectedValue != NULL){
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/inquiry_list.php?dept='.$this->lstCourse->SelectedValue); 
                    }else{
                        QApplication::DisplayAlert("Please Select Department");
                    }
                }

                protected function edit($strFormId, $strControlId, $strParameter){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/inquiry_edit.php?id='.$strParameter); 
                
                }
                
                protected function Admission($strFormId, $strControlId, $strParameter){
                    $id = intval($strParameter);
                    $inquiry = Inquiry::LoadByIdinquiry($id);
                    if( $this->chkAdmit[$inquiry->Idinquiry]->Checked == 1){
                       $inquiry->Admitted = 1;
                    }else{
                       $inquiry->Admitted = 0; 
                    }
                    $inquiry->Save(); 
                    
                    //Save Ledger
                    $ledger = new Ledger();
                    $set = Settings::LoadByName("Student");
                    $ledger->Code = "S".$set->Option;
                    $set->Option = $set->Option + 1;
                    $set->Save();
                    $ledger->Name = $inquiry->PrefixObject.' '.$inquiry->FirstName.' '.$inquiry->MiddleName.' '.$inquiry->LastName;
                    $ledger->Grp = 244; //student
                    $ledger->Save();
                    
                    //save profile
                    $profile  = Profile::LoadByIdprofile($ledger->Idledger);
                    if(!$profile){
                        $profile = new Profile();
                        $profile->Idprofile = $ledger->Idledger;
                        $profile->Prefix = $inquiry->Prefix;
                        $profile->FirstName = $inquiry->FirstName;
                        $profile->MiddleName = $inquiry->MiddleName;
                        $profile->LastName = $inquiry->LastName;                
                        $profile->Inquiry = $inquiry->Idinquiry;
                        $profile->Dob = $inquiry->Dob;
                        $profile->Age = $inquiry->Age;
                        $profile->Contact1 = $inquiry->Contact;
                        $profile->AddressLine1 = $inquiry->Address;                        
                        $profile->Save();
                    }
                    //save login
                    $login = Login::LoadByIdlogin($ledger->Idledger);
                    if($login){

                    }else{
                        $login = new Login();
                    }

                    $login->Idlogin = $ledger->Idledger;
                    $login->Username = $ledger->Code;
                    $login->Password = "stud123";
                    $login->IsEnabled = 1;
                    $login->Save();
                    
                    //get student role
                    $chkrole = Role::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Parrent, $inquiry->Course),
                            QQ::Like(QQN::Role()->Name, "%Student %")
                        )
                    );

                    //login has role
                    $loginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($ledger->Idledger,$chkrole->Idrole);
                    if($loginhasrole){

                    }else{
                        $loginhasrole = new LoginHasRole();
                    }

                    $loginhasrole->LoginIdlogin = $ledger->Idledger;
                    $loginhasrole->RoleIdrole = $chkrole->Idrole;
                    $loginhasrole->Active = 1;
                    $loginhasrole->Save();
                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/inquiry_print.php?id='.$inquiry->Idinquiry);        
                }

                
	}

	InquiryEditForm::Run('InquiryEditForm');
?>