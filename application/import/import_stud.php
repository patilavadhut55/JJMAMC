<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    protected $btnGenerate;
    protected $lstCalender;
    protected $lstRoles;
    protected $lstProgram;
    
    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
        
        $this->btnGenerate = new QButton($this);
        $this->btnGenerate->ButtonMode = QButtonMode::Success;
        $this->btnGenerate->Text = '<i class="fa fa-refresh fa-fw"></i> Generate Year & Program';
        $this->btnGenerate->AddAction(new QClickEvent(), new QServerAction('btnGenerate_Click'));
        
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
        foreach ($Roles as $Role){
            $this->lstRoles->AddItem(delete_all_between('[',']',$Role->Name), $Role->Idrole);
        }
      //  $this->lstRoles->AddAction(new QChangeEvent(), new QAjaxAction('lstRoles_Change'));
        
        $this->lstProgram = new QListBox($this);
        $this->lstProgram->AddItem("-Select Program-", NULL); 
        $progRoles = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
        foreach ($progRoles as $progRole){
            $this->lstProgram->AddItem(delete_all_between('[',']',$progRole->Name, $progRole->Idrole));
        }
        
        if(isset($_GET['prog'])){
            $programs = Role::QueryArray(
                                QQ::AndCondition(
                                QQ::Like(QQN::Role()->ShortName, '%'.$_GET['prog'].'%')
                                ));
                if($programs){
                    foreach($programs as $program){
                    //$this->lstRoles->AddItem($Role->Name, $program->Idrole);
                    //$this->lstProgram->AddItem($Role->Name, $program->Idrole);
                        $this->lstRoles->SelectedValue = $program->Parrent;
                  
                        $this->lstProgram->SelectedValue = $program->Idrole;
                    
                        
                    }
                }
        }
    }   
    protected function lstRoles_Change(){
//         $this->lstProgram->RemoveAllItems();
//        $depts = Role::LoadArrayByParrent($this->lstRoles->SelectedValue);
//            foreach ($depts as $dept){
//                $this->lstProgram->AddItem($dept->Name, $dept->Idrole);    
//            }
    }
    protected function btnGenerate_Click(){
        if(isset($_GET['prog'])){
        $programs = Role::QueryArray(
                            QQ::AndCondition(
                            QQ::like(QQN::Role()->ShortName, '%'.'DME'.'%')
                        ));
        if($programs){
            
            $setting = Settings::LoadByName("Import");
            $cnt = $setting->Option+1;
            $chkrole = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, 270),
                        QQ::Like(QQN::Role()->Name, "%Student %")
                        )
                    );
            if($chkrole){
               // QApplication::DisplayAlert('hello');
                foreach ($chkrole as $role){}
                
                $pros = array();
                $count = 1;
                $stds = Ledger::LoadArrayByGrp(244);
                $c = 1;
                foreach ($stds as $std){
                    $found = substr($std->Code, 4, -3);
                    if(!in_array($found, $pros) && $found != ""){
                        $pros[$c] = $found;
                        $c++;
                    }
                }
                $sr = 1;
                foreach ($pros as $pro){
                    $programs[$sr++] = $pro;
                }

                $yfrom = 2012; $yto = 2015;
                $xtotal = $ytotal = array();
                $total = 0;

                for($i = $yfrom; $i<=$yto; $i++)
                foreach ($programs as $key => $program)
                $Students = Ledger::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Ledger()->Grp, 244),
                                QQ::Like(QQN::Ledger()->Code, "%".$_GET['prog']."%"),
                                QQ::Like(QQN::Ledger()->Code, $_GET['year']."%")
                                )
                        );
                foreach($Students as $Student){
                   // QApplication::DisplayAlert('hello');
                    //chk semister
                        $prog = $_GET['prog'];
                        $prncode = explode($prog, $Student->Code);

                    //calender date
                    $calenderyear = CalenderYear::LoadByIdcalenderYear($this->lstCalender->SelectedValue);

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
                            $loginhasrole->CalenderYear = $this->lstCalender->SelectedValue;
                            $loginhasrole->Active = TRUE;

                            if($prncode[1] > 0 && $prncode[1] < 200){
                                $loginhasrole->Semister = 2;
                            }elseif($prncode[1] > 200 ){
                                $loginhasrole->Semister = 5;
                            }

                            //$loginhasrole->From = $calenderyear->From;
                            //$loginhasrole->To = $calenderyear->To;
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
                                $chkcurrentstatus->CalenderYear = $this->lstCalender->SelectedValue;
                                $chkcurrentstatus->Semister = $loginhasrole->Semister;
                                $chkcurrentstatus->Student = $Student->Idledger;
                                $chkcurrentstatus->Role = $role->Idrole;
                                //$chkcurrentstatus->From = $loginhasrole->From;
                                //$chkcurrentstatus->To = $loginhasrole->To;
                                $chkcurrentstatus->Active = 0;
                                $chkcurrentstatus->Save();
                            }
                 
                    //create application 
                    //chk application
                    if($address)foreach($address as $add){}
                    $checkapps = Application::LoadArrayByApplicant($add->Idaddress);
                    foreach($checkapps as $app){}
                    if(!$checkapps){
                        $app = new Application();
                        $app->Code = 'IP-'.$cnt++; //.$cnt++.'D'.date('Ymdhis', strtotime($calenderyear->From));
                        $app->Date = $calenderyear->From;
                        $app->Applicant = $add->Idaddress;
                        $app->DataEntryBy = $_SESSION['login'];
                        $app->AppliedFor = 1;
                        $app->FinalDecision = 3;
                        $app->Status = 3;

                        if($prncode[1] > 0 && $prncode[1] < 200){
                            $app->Semister = 2;
                        }elseif($prncode[1] > 200 ){
                            $app->Semister = 5;
                        }
                        $app->Program = $this->lstProgram->SelectedValue;
                        $app->CalenderYear = $this->lstCalender->SelectedValue;
                        $app->Save();
                    }
                }
            }
            $setting->Option = $cnt;
            $setting->Save();
            
           QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/report/student_report.php?cal=".$this->lstCalender->SelectedValue."&program=270&year=1");
        }else{
            QApplication::DisplayAlert('Program not found...');
        }
       }
    }
}

DayEditForm::Run('DayEditForm');
?>