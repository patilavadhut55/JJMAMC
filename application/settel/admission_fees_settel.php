<?php    
    require('../../qcubed.inc.php');
    
    class StudentReport extends QForm {
           //Control Declaration
            protected $btnReport;
            protected $lstSem;
            protected $lstCal;
            protected $lstProgram;
            protected $lstTeachDept;
            protected $lbldel;
            protected $chkSelect;
            protected $chkSelectAll;            
            protected $lstSemup;
            protected $lstCalup;
            protected $lstProgramup;
            protected $lstTeachDeptup;
            protected $btnUpgrade;
            protected $lstSpecialization;
            protected $btnTakePhotoSign;

            protected function Form_Run() {
                parent::Form_Run();
                QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
                parent::Form_Create();
                    //Control Define
                    $this->objDefaultWaitIcon = new QWaitIcon($this);
                    
                    //List Box
                    //Display List of Year
                    $this->lstCal = new QSelect2ListBox($this);
                    $calenders = CalenderYear::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::CalenderYear()->Visible, 1)),
                        (QQ::OrderBy(QQN::CalenderYear()->Name,False)));
                    foreach ($calenders  as $calender){
                        $this->lstCal->AddItem($calender->Name, $calender->IdcalenderYear);
                            if($calender->Active == 1){
                                $this->lstCal->SelectedValue = $calender->IdcalenderYear;
                            }
                    }
                    //Display List of Programme
                    $this->lstProgram = new QSelect2ListBox($this);
                    $this->lstProgram->AddItem('Select Program', null, true);
                    $Roles = Role::LoadArrayByGrp(4);
                    foreach ($Roles as $Role)
                        $this->lstProgram->AddItem(delete_all_between ("[", "]", $Role->Name), $Role->Idrole);
                    $this->lstProgram->AddAction(new QClickEvent(), new QAjaxAction('lstProgram_Change'));
                  
                    //Display List of Course
                    $this->lstTeachDept = new QSelect2ListBox($this);
                    $this->lstTeachDept->AddItem('Select Course', null, true);
                    $this->lstTeachDept->AddAction(new QClickEvent(), new QAjaxAction("lstTeachDept_Click"));
                   
                    //Display List of Semister
                    $this->lstSem = new QListBox($this);
                    $acads = AcademicYear::QueryArray(
                            QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                            );
                    foreach ($acads as $acad)
                        $this->lstSem->AddItem($acad->Name, $acad->IdacademicYear); 
                    
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
                        $this->lstTeachDept_Click();
                        if(isset($_GET['special']))
                        $this->lstSpecialization->SelectedValue = $_GET['special'];
                        $this->lstSem->SelectedValue = $_GET['sem'];
                    }
                    
                    //Buttons
                    //To create  buttons for Photo uploaded
                    $this->btnTakePhotoSign = new QButton($this);
                    $this->btnTakePhotoSign->Text = "Generate";
                    $this->btnTakePhotoSign->ButtonMode = QButtonMode::Success;
                    $this->btnTakePhotoSign->AddAction(new QClickEvent(), new QConfirmAction("Do you want to sure to generate this."));
                    $this->btnTakePhotoSign->AddAction(new QClickEvent(), new QServerAction("btnTakePhotoSign_Click"));
                    
                    $this->btnReport = new QButton($this);
                    $this->btnReport->ButtonMode = QButtonMode::Success;
                    $this->btnReport->Text = "Search";
                    $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
                  
            }
        
            protected function btnTakePhotoSign_Click(){     
                if($this->lstCal->SelectedValue != NULL && $this->lstSem->SelectedValue!= NULL && $this->lstTeachDept->SelectedValue!= NULL){ 
                    $students = CurrentStatus::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstCal->SelectedValue),
                                QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstTeachDept->SelectedValue),
                                QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstSem->SelectedValue)
                            ),QQ::GroupBy(QQN::CurrentStatus()->StudentObject->IdloginObject->Code));

                    foreach ($students as $student){
                        
                            $fees = Fees::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $student->StudentObject->IdloginObject->Profile->FeeConcession),
                                        QQ::Equal(QQN::Fees()->CalenderYear, $student->CalenderYear),
                                        QQ::Equal(QQN::Fees()->AcademicYear, $student->SemisterObject->Parrent),
                                        QQ::Equal(QQN::Fees()->Course, $student->RoleObject->ParrentObject->Parrent),
                                        QQ::Equal(QQN::Fees()->Fee, 5455)    // tuition fee                                            
                                    ),
                                    QQ::OrderBy(QQN::Fees()->AdmitAmt, FALSE)
                                    );
                        
                        
                        $chkled = Ledger::LoadArrayByGrp($student->Student);
                        foreach($fees as $fee){
                            if($fee->GovAmt != NULL || $fee->GovAmt != 0){
                                if($student->StudentObject->IdloginObject->Profile && $student->StudentObject->IdloginObject->Profile->FeeConcession != 1 && $student->StudentObject->IdloginObject->Profile->FeeConcession != 6 &&  $student->StudentObject->IdloginObject->Profile->FeeConcession != NULL){
                                    if(!$chkled){
                                        $led = new Ledger();
                                        $code = Settings::LoadByName("Ledger Counter");
                                        $led->Code = 'SCH'.$code->Option;
                                        $code->Option = $code->Option + 1;
                                        $code->Save();                        
                                        $led->Name = $student->StudentObject->IdloginObject->Code.' Scholarship';    
                                        $led->Grp = $student->Student;
                                        $led->Save();
                                    }else{
                                        foreach ($chkled as $led){}
                                    }
                                
                                $chkvov = Voucher::QueryArray(
                                            QQ::AndCondition(                                            
                                                QQ::Equal(QQN::Voucher()->AcademicYear, $_GET['sem']),
                                                QQ::Equal(QQN::Voucher()->Dr,$led->Idledger)
                                            )
                                        );                            
                                if($chkvov){

                                }else{
                                    $chkvovref = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->AcademicYear, $_GET['sem']),
                                                QQ::Equal(QQN::Voucher()->Dr,$student->Student),
                                                QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)    
                                            )
                                        );
                                    if($chkvovref){
                                        $chkcnt = Voucher::QueryCount(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Parrent, $chkvovref->Idvoucher),    
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );
                                        $chkcnt++;
                                        $vov = new Voucher();
                                        $vov->Date = QDateTime::Now();
                                        $vov->Grp = 6; //fees Payable
                                        $vov->Cr = 5455; //5455 Tuition fee
                                        $vov->Dr = $led->Idledger;
                                        $vov->Amount = $fee->GovAmt;
                                        $vov->DataBy = $_SESSION['login'];
                                        $vov->AcademicYear = $student->SemisterObject->Parrent;
                                        $vov->RefStatus = $student->IdcurrentStatus;
                                        $vov->InvNo = $chkvovref->InvNo.'['.$chkcnt.']';
                                        $vov->Parrent = $chkvovref->Idvoucher;
                                        $vov->Save();
                                    }                                
                                }
                            }
                            }
                        }
                    }
                }
            }


            //To show datewise report of Admission
        protected function btnReport_Click(){
//                if($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue){
//                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/report/admission_report.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&sem=".$this->lstSem->SelectedValue);
//                }
            if($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue && $this->lstSpecialization->SelectedValue){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/settel/admission_fees_settel.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&special=".$this->lstSpecialization->SelectedValue."&sem=".$this->lstSem->SelectedValue);
            }elseif($this->lstCal->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstTeachDept->SelectedValue != NULL && $this->lstSem->SelectedValue){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/settel/admission_fees_settel.php?cal=".$this->lstCal->SelectedValue."&dept=".$this->lstProgram->SelectedValue."&program=".$this->lstTeachDept->SelectedValue."&sem=".$this->lstSem->SelectedValue);
            }
        }
        
        protected function lstProgram_Change(){  
         //for displaying courses selected Branch 
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
        //if the selected course under M.Tech Branch then displayed respective Specialization course   
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
    
    StudentReport::Run('StudentReport');

?>