<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    protected $btnGenerate;
    protected $lstSem;
    protected $lstCal;
    protected $lstProgram;
    protected $lstTeachDept;
    protected $lstSpecialization;
    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
        
        $this->btnGenerate = new QButton($this);
        $this->btnGenerate->ButtonMode = QButtonMode::Success;
        $this->btnGenerate->Text = 'admmit';
        $this->btnGenerate->AddAction(new QClickEvent(), new QServerAction('btnGenerate_Click'));
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
                        $this->lstCal->SelectedValue = $_GET['year'];
                        $Findrole = Role::LoadByIdrole($_GET['prog']);
                        $this->lstProgram->SelectedValue = $Findrole->Parrent;
                        $this->lstProgram_Change();
                        $this->lstTeachDept->SelectedValue = $_GET['prog'];
                        $this->lstTeachDept_Click();
                        if(isset($_GET['special']))
                        $this->lstSpecialization->SelectedValue = $_GET['special'];
                        $this->lstSem->SelectedValue = $_GET['sem'];
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
    protected function btnGenerate_Click(){
            $chkrole = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $this->lstTeachDept->SelectedValue),
                        QQ::Like(QQN::Role()->Name, "%Student %")
                        )
                    );
            if($chkrole){
                foreach ($chkrole as $role){}
 
                $Student = Ledger::LoadByIdledger($_GET['mem']);
                        //QueryArray(
                       // QQ::AndCondition(
                               // QQ::Equal(QQN::Ledger()->Grp, 244),
                               // QQ::Equal(QQN::Ledger()->Idledger , $_GET['mem'])
                                
                               // QQ::Like(QQN::Ledger()->Code, $this->lstCal->SelectedValues)
                               // )
                     //   );
                //foreach($Students as $Student){
                     //calender date
                if($Student){
                    $calenderyear = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);

                    //address
                    $address = Address::LoadArrayByOf($Student->Idledger);
                    if($address)foreach($address as $add){}

                    //create login 
                    $chklogin = Login::LoadByIdlogin($Student->Idledger);
                    if(!$chklogin){                                    
                        $login = new Login();
                        $login->Idlogin = $Student->Idledger;
                        $login->Username = $Student->Code;
                        $login->Password = "stud@wce";
                        $login->IsEnabled = TRUE;
                        $login->Save();                    
                    }                   

                        //chk login has role
                        $chkloginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($Student->Idledger, $role->Idrole);
                        if(!$chkloginhasrole){
                            $loginhasrole = new LoginHasRole();
                            $loginhasrole->RoleIdrole = $role->Idrole;
                            $loginhasrole->LoginIdlogin = $Student->Idledger;
                            $loginhasrole->CalenderYear = $this->lstCal->SelectedValue;
                            $loginhasrole->Department = $this->lstTeachDept->SelectedValue;
                            $loginhasrole->Semister = $this->lstSem->SelectedValue;
                            $loginhasrole->Active = TRUE;

//                            if($prncode[1] > 0 && $prncode[1] < 200){
//                                $loginhasrole->Semister = 2;
//                            }elseif($prncode[1] > 200 ){
//                                $loginhasrole->Semister = 5;
//                            }

                            $loginhasrole->From = $calenderyear->From;
                            $loginhasrole->To = $calenderyear->To;
                            $loginhasrole->Save();
                        }else{
                            $loginhasrole = $chkloginhasrole;
                        }
                        
                         $chkcurrentstatuss = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Student, $Student->Idledger),
                                    QQ::Equal(QQN::CurrentStatus()->Role,$role->Idrole)
                                ));
                            if($chkcurrentstatuss){   
                                foreach($chkcurrentstatuss as $chkcurrentstatus){}
                            }else{
                                $chkcurrentstatus = new CurrentStatus();
                                $chkcurrentstatus->CalenderYear = $this->lstCal->SelectedValue;
                                $chkcurrentstatus->Semister = $loginhasrole->Semister;
                                $chkcurrentstatus->Student = $Student->Idledger;
                                $chkcurrentstatus->Role = $role->Idrole;
                                $chkcurrentstatus->Active = 0;
                                $chkcurrentstatus->RollNo = $Student->Code;
                                $chkcurrentstatus->From =  $loginhasrole->From;
                                $chkcurrentstatus->To =  $loginhasrole->To;
                                $chkcurrentstatus->Save();
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/readmission.php?mem=".$Student->Idledger);
      
                            }
                }
            }
        }
    }
//}

DayEditForm::Run('DayEditForm');
?>