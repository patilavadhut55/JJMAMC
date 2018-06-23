<?php
	require('../../qcubed.inc.php');

        class StudentReport extends QForm {
            protected $btnReport;
            protected $lstSem;
            protected $lstCal;
            protected $lstProgram;
            protected $lstTeachDept;
            protected $txtRollNo;
            protected $btnSave;
            protected $lstSpecialization;
            
            
            protected function Form_Run() {
                parent::Form_Run();
                QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
                parent::Form_Create();
                    $this->lstCal = new QSelect2ListBox($this);
                    $calenders = CalenderYear::LoadAll();
                    foreach ($calenders  as $calender)
                        $this->lstCal->AddItem($calender->Name, $calender->IdcalenderYear);
                    
                    $this->lstProgram = new QSelect2ListBox($this);
                    $this->lstProgram->AddItem('Select Program', null, true);
                    $Roles = Role::LoadArrayByGrp(4);
                    foreach ($Roles as $Role)
                        $this->lstProgram->AddItem(delete_all_between ("[", "]", $Role->Name), $Role->Idrole);
                    
                    $this->lstProgram->AddAction(new QClickEvent(), new QAjaxAction('lstProgram_Change'));
                
                    $this->lstTeachDept = new QSelect2ListBox($this);
                    
                    $this->lstSem = new QListBox($this);
                    $acads = AcademicYear::QueryArray(
                            QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                            );
                    foreach ($acads as $acad)
                        $this->lstSem->AddItem($acad->Name, $acad->IdacademicYear); 
                    
                    $this->btnReport = new QButton($this);
                    $this->btnReport->ButtonMode = QButtonMode::Success;
                    $this->btnReport->Text = "Search";
                    $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
                    
                    $this->btnSave = new QButton($this);
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
                    
                    $this->lstSpecialization = new QSelect2ListBox($this);
                    $this->lstSpecialization->Name = "Specialisation";
                    $this->lstSpecialization->Visible = FALSE;
                    $this->lstSpecialization->AddItem("-Select One-",NULL);
                    
                    
                    if(isset($_GET['cal'])){
                        $this->lstCal->SelectedValue = $_GET['cal'];
                        $Findrole = Role::LoadByIdrole($_GET['program']);
                        $this->lstProgram->SelectedValue = $Findrole->Parrent;
                        $this->lstProgram_Change();
                        $this->lstTeachDept->SelectedValue = $_GET['program'];
                        $this->lstSem->SelectedValue = $_GET['year'];
                        
                            $students = CurrentStatus::QueryArray(
                                                    QQ::AndCondition(
                                                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['program']),
                                                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year'])
                                                    ),QQ::OrderBy(QQN::CurrentStatus()->Student));
                            foreach ($students as $student){   
                                
                                $this->txtRollNo[$student->IdcurrentStatus] = new QTextBox($this);
                                $this->txtRollNo[$student->IdcurrentStatus]->Width = 200;
                                $this->txtRollNo[$student->IdcurrentStatus]->ActionParameter = $student->IdcurrentStatus;
                                $this->txtRollNo[$student->IdcurrentStatus]->AddAction(new QFocusOutEvent(), new QAjaxAction('txtRollNo_Click'));
                                
                                $this->txtRollNo[$student->IdcurrentStatus]->Text = $student->RollNo; 
                                 
                            }
                    }
            }
            protected function btnReport_Click(){
                if($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/document/rollno_list.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&year=".$this->lstSem->SelectedValue);
                }
            }
            
            protected function lstProgram_Change(){                
                $this->lstTeachDept->RemoveAllItems();
                if($this->lstProgram->SelectedValue != NULL){
                    $teachings = Role::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Role()->Grp, 5),
                                            QQ::Equal(QQN::Role()->Parrent, $this->lstProgram->SelectedValue)
                                        ));
                    foreach ($teachings as $teaching)
                        $this->lstTeachDept->AddItem(delete_all_between ("[", "]", $teaching->Name), $teaching->Idrole);
                }
            }
            protected function txtRollNo_Click($strFormId, $strControlId, $strParameter){
                $current = CurrentStatus::LoadByIdcurrentStatus($strParameter);
                $current->RollNo = $this->txtRollNo[$current->IdcurrentStatus]->Text;
                $current->Save();
            }
            protected function btnSave_Click(){
                $students = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['program']),
                                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year'])
                                    ),QQ::OrderBy(QQN::CurrentStatus()->Student));
                if($students){
                    foreach ($students as $student){  
                        $student->RollNo = $this->txtRollNo[$student->IdcurrentStatus]->Text;
                        $student->Save();
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/rollno_list.php');
                }
            }
            
            
        }
	StudentReport::Run('StudentReport');
?>