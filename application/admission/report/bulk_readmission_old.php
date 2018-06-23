<?php
	require('../../../qcubed.inc.php');

        class StudentReport extends QForm {
            protected $btnReport;
            protected $lstSem;
            protected $lstCal;
            protected $lstProgram;
            protected $lbldel;
            protected $chkSelect;
            protected $chkSelectAll;
            
            protected $lstSemup;
            protected $lstCalup;
            protected $lstProgramup;
            protected $btnUpgrade;


            protected function Form_Run() {
                parent::Form_Run();
                QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
                parent::Form_Create();
                    $this->lstCal = new QSelect2ListBox($this);
                    $this->lstCal->AddItem('Select Calender Year', null, true);
                    $calenders = CalenderYear::LoadAll(QQ::OrderBy(QQN::CalenderYear()->Sequence, FALSE));
                    foreach ($calenders  as $calender){
                        $this->lstCal->AddItem($calender->Name, $calender->IdcalenderYear);
                        if($calender->Active == 1){
                            $this->lstCal->SelectedValue = $calender->IdcalenderYear;
                        }
                    }
                       
                    $this->lstProgram = new QSelect2ListBox($this);
                    $this->lstProgram->AddItem('Select Program', null, true);
                    $Roles = Role::LoadArrayByGrp(5);
                    foreach ($Roles as $Role){
                        $this->lstProgram->AddItem(delete_all_between ("[", "]", $Role->Name), $Role->Idrole);
                    }                    
                   
                    $this->lstSem = new QListBox($this);
                    $acads = AcademicYear::QueryArray(
                                    QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                                );
                    $this->lstSem->AddItem('-Select Year -', null, true);
                    foreach ($acads as $acad){
                        $this->lstSem->AddItem($acad->Name, $acad->IdacademicYear); 
                    }
                    
                    
                    $this->btnReport = new QButton($this);
                    $this->btnReport->ButtonMode = QButtonMode::Success;
                    $this->btnReport->Text = "Search";
                    $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
                    
                    $this->chkSelectAll = new QCheckBox($this);
                    $this->chkSelectAll->Width = 15;
                    $this->chkSelectAll->Height = 15;
                    $this->chkSelectAll->AddAction(new QChangeEvent(), new QAjaxAction("chkSelectAll_Click"));
                    
                    //upgrade controls
                    $this->lstCalup = new QSelect2ListBox($this);
                    $this->lstCalup->AddItem('Select Calender Year', null, true);
                    $calenders = CalenderYear::LoadAll(QQ::OrderBy(QQN::CalenderYear()->Sequence,FALSE));
                    foreach ($calenders  as $calender){
                        $this->lstCalup->AddItem($calender->Name, $calender->IdcalenderYear);
                    }
                    
                    $this->lstProgramup = new QSelect2ListBox($this);
                    $this->lstProgramup->Enabled = FALSE; 
                    $this->lstProgramup->AddItem('Select Program', null, true);
                    $Roles = Role::LoadArrayByGrp(5);
                    foreach ($Roles as $Role)
                        $this->lstProgramup->AddItem(delete_all_between ("[", "]", $Role->Name), $Role->Idrole);
                    
                    $this->lstSemup = new QSelect2ListBox($this);
                    $this->lstSemup->Enabled = FALSE;
                    $acads = AcademicYear::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::AcademicYear()->Parrent, NULL),
                                    QQ::NotEqual(QQN::AcademicYear()->IdacademicYear, $this->lstSem->SelectedValue)
                                ));
                    foreach ($acads as $acad){
                        $this->lstSemup->AddItem($acad->Name, $acad->IdacademicYear); 
                    }
                    
                    
                    $this->btnUpgrade = new QButton($this);
                    $this->btnUpgrade->ButtonMode = QButtonMode::Success;
                    $this->btnUpgrade->Text = 'Upgrade Student  <i class="fa fa-arrow-circle-right"></i>';
                    $this->btnUpgrade->AddAction(new QClickEvent(), new QServerAction('btnUpgrade_Click'));
                    
                    if(isset($_GET['cal'])){
                        $this->lstCal->SelectedValue = $_GET['cal'];
                        $Findrole = Role::LoadByIdrole($_GET['dept']);
                        $this->lstProgram->SelectedValue = $Findrole->Idrole;
                        $this->lstSem->SelectedValue = $_GET['sem'];
                        
                        $this->lstProgramup->SelectedValue = $Findrole->Idrole;
                        
                        if($this->lstSem->SelectedValue == 1){
                            $this->lstSemup->SelectedValue = 4;
                        }elseif($this->lstSem->SelectedValue == 4){
                            $this->lstSemup->SelectedValue = 7;
                        }elseif($this->lstSem->SelectedValue == 7){
                            $this->lstSemup->SelectedValue = 10;
                        }
                        
                        $students = CurrentStatus::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['dept']),
                                            QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSem->SelectedValue)
                                        ),QQ::OrderBy(QQN::CurrentStatus()->Student));

                        if($students){
                            foreach ($students as $student){   
                                $this->chkSelect[$student->Student.$student->Role] = new QCheckBox($this);
                                $this->chkSelect[$student->Student.$student->Role]->Width = 15;
                                $this->chkSelect[$student->Student.$student->Role]->Height = 15;
                                $this->chkSelect[$student->Student.$student->Role]->HtmlEntities = FALSE;
                                $this->chkSelect[$student->Student.$student->Role]->ActionParameter = $student->Student.$student->Role;

                                $this->lbldel[$student->Student.$student->Role] = new QLabel($this);
                                $this->lbldel[$student->Student.$student->Role]->Text = '<i class="fa fa-trash" style="color: #C00;"></i>';
                                $this->lbldel[$student->Student.$student->Role]->HtmlEntities = FALSE;
                                $this->lbldel[$student->Student.$student->Role]->ActionParameter = $student->IdcurrentStatus;
                                $this->lbldel[$student->Student.$student->Role]->AddAction(new QClickEvent(), new QAjaxAction('lbldel_Click'));
                            }
                        }
                }
            }
            
            protected function btnReport_Click(){
                if($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL  && $this->lstSem->SelectedValue){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/report/bulk_readmission.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&sem=".$this->lstSem->SelectedValue);
                }
            }
        
            protected function chkSelectAll_Click(){
                if(isset($_GET['cal'])){
                    $students = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['dept']),
                                    QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSem->SelectedValue)
                                ),QQ::OrderBy(QQN::CurrentStatus()->Student));

                    foreach ($students as $student){   
                        if($this->chkSelectAll->Checked == TRUE){
                            $this->chkSelect[$student->Student.$student->Role]->Checked = TRUE;
                        }else{
                            $this->chkSelect[$student->Student.$student->Role]->Checked = FALSE;
                        }
                    }
                }
            }
            protected function lblDel_Click($strFormId, $strControlId, $strParameter) {
                if(isset($_GET['cal'])){
                    $employee = CurrentStatus::LoadByIdcurrentStatus($strParameter);
                    $cnt = CurrentStatus::QueryCount(QQ::Equal(QQN::CurrentStatus()->Student, $employee->Student));
                    if($cnt > 1){
                        if($employee){
                            $employee->Delete();
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/report/bulk_readmission.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&sem=".$this->lstSem->SelectedValue);
                    }else{
                        QApplication::DisplayAlert('Can not Delete......');
                    }
                }
            }
            
            protected function btnUpgrade_Click(){
                if($this->lstCalup->SelectedValue != NULL && $this->lstProgramup->SelectedValue != NULL && $this->lstSemup->SelectedValue != NULL){
                    if($this->lstCal->SelectedValue != $this->lstCalup->SelectedValue){
                        $currentstatuss = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['dept']),
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['sem']),        
                                        QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Grp, 244)
                                    ));
                        if($currentstatuss){

                            foreach($currentstatuss as $currentstatus){
                                if($this->chkSelect[$currentstatus->Student.$currentstatus->Role]->Checked == TRUE){
                                    $chkcurrentstatuss = CurrentStatus::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstCalup->SelectedValue),
                                                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstProgramup->SelectedValue),
                                                    QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemup->SelectedValue),  
                                                    QQ::Equal(QQN::CurrentStatus()->Student, $currentstatus->Student),
                                                    QQ::Equal(QQN::CurrentStatus()->Role, $currentstatus->Role)
                                                ));

                                    if($chkcurrentstatuss){   
                                        foreach($chkcurrentstatuss as $chkcurrentstatus){}
                                    }else{    
                                        //chk student role 
                                        $chkrole = Role::QueryArray(
                                                        QQ::AndCondition(
                                                            QQ::Equal(QQN::Role()->Parrent, $this->lstProgramup->SelectedValue),
                                                            QQ::Like(QQN::Role()->Name, "%Student %")
                                                        ));

                                        if($chkrole) foreach($chkrole as $role){}
                                        //QApplication::DisplayAlert($role->Idrole);

                                        $chkcurrentstatus = new CurrentStatus();
                                        $chkcurrentstatus->CalenderYear = $this->lstCalup->SelectedValue;
                                        $chkcurrentstatus->Semister = $this->lstSemup->SelectedValue;
                                        $chkcurrentstatus->Student = $currentstatus->Student;
                                        $chkcurrentstatus->Role = $role->Idrole;
                                        $chkcurrentstatus->From = QDateTime::Now();
                                        $chkcurrentstatus->AdmissionStatus = 1;
                                        $chkcurrentstatus->Active = 0;
                                        $chkcurrentstatus->Save();
                                    }
                                }   
                            } 
                        }  
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/report/bulk_readmission.php?cal=".$this->lstCalup->SelectedValue."&dept=".$this->lstProgramup->SelectedValue."&sem=".$this->lstSemup->SelectedValue);
                    }else{
                        QApplication::DisplayAlert('Calender Year must be diffrent...');
                    }
                }
               
            }
        }
	StudentReport::Run('StudentReport');
?>