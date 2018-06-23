<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	//require(__FORMBASE_CLASSES__ . '/DeptYearEventsEditFormBase.class.php');

            class subjectEditPanel extends QForm {
                protected $lststaff;
                protected $btnprofile;
                protected $btnReport;
                protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

                protected function Form_Create() {
               //profile
//                    $this->btnprofile = new QButton($this);
//                    $this->btnprofile->ButtonMode = QButtonMode::Success;
//                    $this->btnprofile->Text = "Profile";
//                    $this->btnprofile->AddAction(new QClickEvent(), new QServerAction('btnProfile_Click'));
                 
                    $this->lststaff = new QSelect2ListBox($this);
                    $this->btnReport = new QButton($this);
                    $this->btnReport->ButtonMode = QButtonMode::Success;
                    $this->btnReport->Text = "Search";
                    $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
                    if(isset($_GET['cal'])){
                        $this->lstCal->SelectedValue = $_GET['cal'];
                        $Findrole = Role::LoadByIdrole($_GET['program']);
                        $this->lstProgram->SelectedValue = $Findrole->Parrent;
                        $this->lstProgram_Change();
                        $this->lstTeachDept->SelectedValue = $_GET['program'];
                        $this->lstTeachDept_Click();
                        if(isset($_GET['special']))
                        $this->lstSpecialization->SelectedValue = $_GET['special'];
                        $this->lstSem->SelectedValue = $_GET['sem'];
                    }
                    
                    $LoginRolls = Role::LoadByIdrole($_SESSION['role']);
                        $teachers = LoginHasRole::QueryArray(
                                QQ::AndCondition(
                                QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                                QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, '%Professor%')
                            ));
                            foreach($teachers as $staff){
                                    $this->btnprofile[$staff->LoginIdlogin] = new QButton($this);
                                    $this->btnprofile[$staff->LoginIdlogin]->HtmlEntities = FALSE ;
                                    $this->btnprofile[$staff->LoginIdlogin]->Text = "View";
                                    $this->btnprofile[$staff->LoginIdlogin]->ButtonMode = QButtonMode::Success;
                                    $this->btnprofile[$staff->LoginIdlogin]->AddAction(new QClickEvent(), new QServerAction('lblview_Click'));
                                    $this->btnprofile[$staff->LoginIdlogin]->ActionParameter = $staff->LoginIdlogin;
                            }
	        }
                
                protected function lblview_Click($strFormId, $strControlId, $strParameter){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/employee/employee_profile.php?id=".$strParameter);
                }
                
                protected function btnReport_Click(){
//                if($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue){
//                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/report/admission_report.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&sem=".$this->lstSem->SelectedValue);
//                }
                 if($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue && $this->lstSpecialization->SelectedValue){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/event/course_report.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&special=".$this->lstSpecialization->SelectedValue."&sem=".$this->lstSem->SelectedValue);
                }elseif($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/event/course_report.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&sem=".$this->lstSem->SelectedValue);
                }
            }
         protected function lstProgram_Change(){                
                $this->lstTeachDept->RemoveAllItems();
                if($this->lstProgram->SelectedValue != NULL){
                    if($this->lstProgram->SelectedValue == 250){
                        $this->lstSpecialization->Visible = TRUE;
                    }
                    $this->lstTeachDept->AddItem('Select Course', null, true);
                    $teachings = Role::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Role()->Grp, 5),
                                            QQ::Equal(QQN::Role()->Parrent, $this->lstProgram->SelectedValue)
                                        ));
                    foreach ($teachings as $teaching)
                        $this->lstTeachDept->AddItem(delete_all_between ("[", "]", $teaching->Name), $teaching->Idrole);
                    
                    $this->lstTeachDept_Click();
                    
                }
            }
        protected function lstTeachDept_Click(){
                 if($this->lstTeachDept->SelectedValue != NULL){
                    $this->lstSpecialization->RemoveAllItems();
                    $this->lstSpecialization->AddItem("-Select Specilization-",NULL);
                    $specials = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $this->lstTeachDept->SelectedValue),
                        QQ::Equal(QQN::Role()->Grp,5)
                        ));
                    foreach ($specials as $special){
                            $this->lstSpecialization->AddItem(delete_all_between ("[", "]",$special->Name), $special->Idrole);
                    }
                }       
            }
              
     }
	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// dept_year_events_edit.tpl.php as the included HTML template file
	subjectEditPanel::Run('subjectEditPanel');
?>