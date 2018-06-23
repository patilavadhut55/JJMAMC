<?php
    require('../../qcubed.inc.php');

    class Estab extends QForm {
        protected $btnNew;
        protected $btnList;
        protected $txtRole;
        protected $txtRoleDept;
        protected $chkActive;
        protected $btnRoleSave;
        protected $btnRoleDelete;
        //array declarations
        protected $lblEdit;
        protected $btnAddLink;
        
        //establishment 
        protected $txtAppname;
        protected $lstCategory;
        protected $calDate;
        protected $txtDetails;
        protected $calTerminationDate;
        protected $txtTermDetails;
        protected $txtSalary;
        protected $btnEstabSave;
        protected $btnEstabDelete;
        protected $btnEstabCancel;
        protected $chkEstabActive;
        protected $btnSalary;
        protected $btnLeave;
        protected $lstPost;
        protected $btnAddRole;
        protected $btnLoan;
        protected $btnCopy;

        protected $txtAdditionalpay;
        protected $txtPayDetails;
        protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            }

//		protected function Form_Load() {}

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->btnAddRole = new QButton($this);
                //$this->btnAddRole->ButtonMode = QButtonMode::Success();
                $this->btnAddRole->Text =  "Add New";
                $this->btnAddRole->AddAction(new QClickEvent(), new QAjaxAction('btnAddRole_Click'));
                
                
                
                $this->lstPost = new QSelect2ListBox($this);
                $this->lstPost->Name = "Appointment Name";
                $posts = Role::QueryArray(
                         QQ::AndCondition(
                         QQ::Equal(QQN::Role()->Grp, 3),
                         QQ::OrCondition(
                         QQ::Equal(QQN::Role()->Parrent, 9),
                         QQ::Equal(QQN::Role()->ParrentObject->Parrent, 9),
                         QQ::Equal(QQN::Role()->ParrentObject->ParrentObject->Parrent, 9)
                                 )        
                                 ), QQ::OrderBy(QQN::Role()->Code));
                $this->lstPost->AddItem("-Select One-", NULL);
                foreach ($posts as $post){
                $this->lstPost->AddItem($post->Name.' - '.$post->Mname, $post->Idrole);
                }
                $this->txtRoleDept = new QSelect2ListBox($this);
                $depts = Role::QueryArray(
                         QQ::AndCondition(
                         QQ::OrCondition(        
                         QQ::Equal(QQN::Role()->Parrent, 9),
                         QQ::Equal(QQN::Role()->ParrentObject->Parrent, 9)        
                                 ),
                         QQ::Equal(QQN::Role()->Grp, 2)        
                                 ), QQ::OrderBy(QQN::Role()->Parrent));
                $this->txtRoleDept->AddItem("-select Department- ", NULL);
                foreach ($depts as $dept) {
                    $this->txtRoleDept->AddItem($dept->Name.' - '.$dept->Mname, $dept->Idrole);    
                }
                $this->txtRoleDept->Name = "Department";
                
                $this->txtRole = new QSelect2ListBox($this);
                $this->txtRole->AddItem("-select Role-", NULL);
                $roles = Role::QueryArray(
                         QQ::AndCondition(
                         QQ::OrCondition(        
                         QQ::Equal(QQN::Role()->Parrent, 9),
                         QQ::Equal(QQN::Role()->ParrentObject->Parrent, 9)        
                                 ),
                         QQ::Equal(QQN::Role()->Grp, 3)        
                                 ), QQ::OrderBy(QQN::Role()->Parrent));
                foreach ($roles as $role) {
                    $this->txtRole->AddItem($role->Name.' - '.$role->Mname, $role->Idrole);    
                }
                $this->txtRole->Name = "Role";
                
                $this->chkActive = new QCheckBox($this);
                $this->chkActive->Width = 50;
                $this->chkActive->Name = "Active";
                
                $this->btnNew = new QButton($this);
                $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                $this->btnNew->ButtonMode = QButtonMode::AddNew;
                $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));
                
                $this->btnList = new QButton($this);
                $this->btnList->ButtonMode = QButtonMode::listall;
                $this->btnList->AddAction(new QClickEvent(), new QAjaxAction("btnEstabCancel_Click"));
                
                $this->btnRoleSave = new QButton($this);
                $this->btnRoleSave->ButtonMode = QButtonMode::Save;
                $this->btnRoleSave->AddAction(new QClickEvent(), new QServerAction("btnRoleSave_Click"));
                
                $this->btnRoleDelete = new QButton($this);
                $this->btnRoleDelete->Visible = FALSE;
                $this->btnRoleDelete->ButtonMode = QButtonMode::Delete;
                $this->btnRoleDelete->AddAction(new QClickEvent(), new QServerAction("btnRoleDelete_Click"));
                
                //establishment declarations
                $this->txtAppname = new QTextBox($this);
                $this->txtAppname->Name = "Appoinment Name";
                
                $this->txtSalary = new QTextBox($this);
                $this->txtSalary->Name = "Basic Salary";
                
                $this->txtDetails = new QTextBox($this);
                $this->txtDetails->Name = "Appoinment Details";
                $this->txtDetails->TextMode = QTextMode::MultiLine;
                
                $this->txtTermDetails = new QTextBox($this);
                $this->txtTermDetails->Name = "Termination Details";
                $this->txtTermDetails->TextMode = QTextMode::MultiLine;
                
                $this->calDate = new QDateTimePicker($this);
                $this->calDate->Name = "Appointment Date";
                
                $this->calTerminationDate = new QDateTimePicker($this);
                $this->calTerminationDate->Name = "Termination Date";
                if(isset($_GET['id'])){
                    $roles = LoginHasRole::QueryArray(
                                            QQ::AndCondition(
                                                    QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_GET['emprole']),
                                                    QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_GET['login'])
                                                    ));
                    $address = Address::LoadArrayByOf($roles->LoginIdlogin);
                    if($address){
                        foreach ($address as $addres){}
                        if($addres->Dob != NULL){
                        $year = 0;
                        $year =  $addres->Dob->Year + $roles->RoleIdroleObject->ServiceYears;
                        }//$this->calTerminationDate->DateTime = QDateTime::FromTimestamp( strtotime($year.$addres->Dob->Month.$addres->Dob->Day));
                    }
                }
                
                $this->calDate->Width = $this->calTerminationDate->Width = 100; 
                $this->lstCategory = new QListBox($this);
                $this->lstCategory->Name = "Appoinment Category";
                $this->lstCategory->AddItem("-Select One", NULL);
                $cats = AppointmentCategory::LoadAll();
                foreach ($cats as $cat){
                    $this->lstCategory->AddItem($cat->Name, $cat->IdappointmentCategory);
                }
                
                $this->chkEstabActive = new QCheckBox($this);
                $this->chkEstabActive->Name = "Active";
                
                $this->txtAdditionalpay = new QTextBox($this);
                $this->txtPayDetails = new QTextBox($this);
                $this->txtAdditionalpay->Name = "Aditional Pay Details";
                $this->txtPayDetails->Name = "Pay Details";
                $this->btnEstabSave = new QButton($this);
                $this->btnEstabSave->ButtonMode = QButtonMode::Save;
                $this->btnEstabSave->AddAction(new QClickEvent(), new QServerAction("btnEstabSave_Click"));
                
                $this->btnEstabCancel = new QButton($this);
                $this->btnEstabCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnEstabCancel->AddAction(new QClickEvent(), new QServerAction("btnEstabCancel_Click"));
                
                $this->btnEstabDelete = new QButton($this);
                $this->btnEstabDelete->ButtonMode = QButtonMode::Delete;
                $this->btnEstabDelete->AddAction(new QClickEvent(), new QConfirmAction('Are You Sure, To delete this Establishment, Data Like Salary Tempalte will be deleted Too'));
                $this->btnEstabDelete->AddAction(new QClickEvent(), new QServerAction("btnEstabDelete_Click"));
                
                $this->btnSalary = new QButton($this);                    
                $this->btnSalary->ButtonMode = QButtonMode::Success;
                $this->btnSalary->Text = "Salary Templet";
                $this->btnSalary->AddAction(new QClickEvent(), new QAjaxAction('btnSalary_Click'));
                
                $this->btnLeave = new QButton($this);                    
                $this->btnLeave->ButtonMode = QButtonMode::Success;
                $this->btnLeave->Text = "Leaves";
                $this->btnLeave->AddAction(new QClickEvent(), new QAjaxAction('btnLeave_Click'));
                $this->btnLeave->Visible = FALSE;
                $this->btnSalary->Visible = FALSE;
                
                if(isset($_GET['estab'])){
                    $this->calDate->Required = TRUE;
                    $this->lstCategory->Required = TRUE;
                    $this->txtSalary->Required = TRUE;
                    if($_GET['estab'] != 'new'){
                        $estab = Establishment::LoadByIdestablishment($_GET['estab']);
                        if($estab->Post == NULL){
                            $this->lstPost->SelectedValue = $estab->RoleObject->RoleIdrole;
                        }else{
                            $this->lstPost->SelectedValue = $estab->Post;
                        }
                        $this->txtAppname->Text = $estab->AppointmentName;
                        $this->txtDetails->Text = $estab->AppointmentDetails;
                        $this->txtSalary->Text = $estab->BasicSalary;
                        $this->lstCategory->SelectedValue = $estab->AppointmentCategory;
                        $this->txtTermDetails->Text = $estab->TerminationDetails;
                        $this->calDate->DateTime = $estab->AppointmentDate;
                        $this->calTerminationDate->DateTime = $estab->DateOfTermination;
                        $this->chkEstabActive->Checked = $estab->Active;
                        $this->txtAdditionalpay->Text = $estab->AdditionalPay;
                        $this->txtPayDetails->Text = $estab->PayDetails;	
                        $this->btnLeave->Visible = TRUE;
                        $this->btnSalary->Visible = TRUE;
                    }
                }
                if(isset($_GET['role'])){
                    
                    if($_GET['role'] != "new"){
                        $role = LoginHasRole::LoadById($_GET['role']);
                        $this->txtRole->SelectedValue = $role->RoleIdrole;
                        $this->txtRoleDept->SelectedValue = $role->Department;
                        $this->chkActive->Checked = $role->Active;
                        $this->btnRoleDelete->Visible = TRUE;
                   }
                }
                if(isset($_GET['emp'])){
                    $logins = LoginHasRole::LoadArrayByLoginIdlogin($_GET['emp']);
                    if($logins){
                        foreach ($logins as $login){
                        $this->lblEdit[$login->LoginIdlogin] = new QLabel($this);
                        $this->lblEdit[$login->LoginIdlogin]->HtmlEntities = FALSE;
                        $this->lblEdit[$login->LoginIdlogin]->Text = "<i class='fa fa-pencil'></i>";
                        $this->lblEdit[$login->LoginIdlogin]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                        $this->lblEdit[$login->LoginIdlogin]->ActionParameter = $login->LoginIdlogin;
                        
                        $this->btnAddLink[$login->LoginIdlogin] = new QButton($this);
                        $this->btnAddLink[$login->LoginIdlogin]->ButtonMode = QButtonMode::Link;
                        $this->btnAddLink[$login->LoginIdlogin]->Text = "Add";
                        $this->btnAddLink[$login->LoginIdlogin]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                        $this->btnAddLink[$login->LoginIdlogin]->ActionParameter = $login->LoginIdlogin;
                        $estabs = Establishment::LoadArrayByRole($login->LoginIdlogin);
                          if($estabs){
                            foreach ($estabs as $estab){    
                                $this->btnCopy[$login->LoginIdlogin][$estab->Idestablishment] = new QButton($this);
                                $this->btnCopy[$login->LoginIdlogin][$estab->Idestablishment]->ButtonMode = QButtonMode::Success;
                                $this->btnCopy[$login->LoginIdlogin][$estab->Idestablishment]->Text = "Copy";
                                $this->btnCopy[$login->LoginIdlogin][$estab->Idestablishment]->AddAction(new QClickEvent(), new QConfirmAction('Are You Sure, To Copy this Establishment, Data Like Salary Tempalte will be Copied Too'));
                                $this->btnCopy[$login->LoginIdlogin][$estab->Idestablishment]->AddAction(new QClickEvent(), new QServerAction('Copy_Estab'));
                                $this->btnCopy[$login->LoginIdlogin][$estab->Idestablishment]->ActionParameter = $estab->Idestablishment;
                            }
                          }
                        }
                    }        
                }

     }
     protected function Find(){
         //QApplication::DisplayAlert($this->txtRoleDept->SelectedValue);
     }

     protected function btnEstabDelete_Click(){
         $estab = Establishment::LoadByIdestablishment($_GET['estab']);
         $templates = SalaryTemplet::LoadArrayByEstablishment($estab->Idestablishment);
         if($templates){
             foreach ($templates as $template){
                 $shcs = SalaryHead::LoadArrayBySalaryTemplet($template->IdsalaryTemplet);
                 if($shcs){
                     foreach ($shcs as $shc){
                         $payslabs = PaySlabs::LoadArrayBySalaryhead($shc->IdsalaryHead);
                                        if($payslabs){
                                            foreach ($payslabs as $payslab){
                                                $payslab->Delete();
                                            }
                                        }
                                        //delete calculation
                                        $cals = Calculation::LoadArrayBySalaryHead($shc->IdsalaryHead);
                                        if ($cals){
                                            foreach ($cals as $cal){
                                               $cal->Delete(); 
                                        }
                                        }
                                        //based calculations
                                        $basecalcs = Calculation::QueryArray(
                                                     QQ::OrCondition(
                                                     QQ::Equal(QQN::Calculation()->SalaryHead1, $shc->IdsalaryHead),
                                                     QQ::Equal(QQN::Calculation()->SalaryHead2, $shc->IdsalaryHead)        
                                                             ));
                                        if($basecalcs){
                                            foreach ($basecalcs as $basecalc){
                                                $basecalc->Delete();
                                            }

                                        }
                                       //empty based on
                                        $baseds = SalaryHead::LoadArrayByBasedSalaryHead($shc->IdsalaryHead);
                                        if($baseds){
                                            foreach ($baseds as $based){
                                                $based->BasedSalaryHead = NULL;
                                                $based->Save();
                                            }
                                        }
                      $shc->Delete();                  
                     }
                 }
             }
         }
         $leaves = Leaves::LoadArrayByRefEstablishment($estab->Idestablishment);
         if($leaves){
             foreach ($leaves as $leave){
                 $leave->Delete();
             }
         }
         $rewards = Reward::LoadArrayByRefEstablishement($estab->Idestablishment);
         if($rewards){
             foreach ($rewards as $reward){
                 $reward->Delete();
             }
         }
         if($templates){
             foreach ($templates as $template){
                 $shcs = SalaryHead::LoadArrayBySalaryTemplet($template->IdsalaryTemplet);
                 if(!$shcs){
                     $template->Delete();
                 }
             }
         }
         $this->Delete_estab();
     }
     
     protected function Delete_estab(){
         $estab = Establishment::LoadByIdestablishment($_GET['estab']);
         $estab->Delete();
         $this->btnEstabCancel_Click();
     }

     protected function btnEstabSave_Click(){
         
         $roles = LoginHasRole::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_GET['login']),
                                        QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_GET['emprole'])));
                foreach ($roles as $role){}
         $role->RoleIdrole = $this->lstPost->SelectedValue;
         $role->Save();
         
         $address = Address::LoadArrayByOf($role->LoginIdlogin);
         foreach ($address as $addres){}
         if($_GET['estab'] == "new")
             $estab = new Establishment();
         else
        $estab = Establishment::LoadByIdestablishment ($_GET['estab']);
        $estab->Role = $_GET['id'];
        $estab->Post = $this->lstPost->SelectedValue;
        $estab->AppointmentName = $this->txtAppname->Text;
        $estab->AppointmentDetails =$this->txtDetails->Text;
        $estab->BasicSalary = $this->txtSalary->Text;
        $estab->AppointmentCategory = $this->lstCategory->SelectedValue;
        $estab->TeminationDetails = $this->txtTermDetails->Text;
        $estab->AppointmentDate = $this->calDate->DateTime;
        $estab->DateOfTermination = $this->calTerminationDate->DateTime;
        $estab->Active = $this->chkEstabActive->Checked;
        $estab->Employee = $addres->Idaddress;
        $estab->AdditonalPay = $this->txtAdditionalpay->Text;
        $estab->PayDeatils = $this->txtPayDetails->Text;
        $estab->Save();
        
        if($estab->Active == 1){
        $others = Establishment::QueryArray(
                  QQ::AndCondition(
                  QQ::Equal(QQN::Establishment()->Employee, $addres->Idaddress),
                  QQ::NotEqual(QQN::Establishment()->Idestablishment, $estab->Idestablishment)        
                ));
                foreach ($others as $other){
                    $other->Save();
                }
        }
        $this->btnEstabCancel_Click();
     }
     protected function btnSalary_Click(){
         $estab = Establishment::LoadByIdestablishment ($_GET['estab']);
            $salrytemplets = SalaryTemplet::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::SalaryTemplet()->Establishment, $estab->Idestablishment),
                            QQ::Equal(QQN::SalaryTemplet()->Active, 1)        
                                    ));
            if($salrytemplets){
                foreach ($salrytemplets as $salrytemplet){}
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/member_templet.php?estab='.$_GET['estab'].'&id='.$salrytemplet->IdsalaryTemplet);
            }else{
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/member_templet.php?estab='.$_GET['estab']);
            }
        }
        protected function btnLeave_Click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/establishment/leaves_edit.php?estab='.$_GET['estab']);
        }
     protected function btnEstabCancel_Click(){
         $roles = LoginHasRole::QueryArray(
                        QQ::AndCondition(
                                    QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_GET['emprole']),
                                    QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_GET['login'])
                                                    ));
                                                    foreach ($roles as $role){}
         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?emp='.$role->LoginIdlogin);
    
     }

     protected function btnNew_Click(){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?role='.'new'.'&emp='.$_GET['emp']);
     }
     protected function Copy_Estab($strFormId, $strControlId, $strParameter){
         $estab = Establishment::LoadByIdestablishment($strParameter);
         $newEstab = new Establishment();
         $newEstab->Active = $estab->Active;
         $newEstab->AdditonalPay = $estab->AdditonalPay ;
         $newEstab->AppointmentCategory = $estab->AppointmentCategory;
         $newEstab->AppointmentDate = $estab->DateOfTermination;
         $newEstab->AppointmentDetails = $estab->AppointmentDetails;
         $newEstab->AppointmentName = $estab->AppointmentName;
         $newEstab->BasicSalary = $estab->BasicSalary;
         $newEstab->DateOfTermination = QDateTime::Now();
         $newEstab->Employee = $estab->Employee;
         $newEstab->PayDeatils = $estab->PayDeatils;
         $newEstab->Post = $estab->Post;
         $newEstab->PostInfo = $estab->PostInfo;
         $newEstab->Reason = $estab->Reason;
         $newEstab->Role = $estab->Role;
         $newEstab->SalaryTemplet = $estab->SalaryTemplet;
         $newEstab->TeminationDetails = $estab->TeminationDetails;
         $newEstab->Vacancy = $estab->Vacancy;
         $newEstab->VacancyDetails = $estab->VacancyDetails;
         $newEstab->Save();
         $templates = SalaryTemplet::QueryArray(
                     QQ::AndCondition(
                     QQ::Equal(QQN::SalaryTemplet()->Establishment, $estab->Idestablishment),
                     QQ::Equal(QQN::SalaryTemplet()->Active, 1)        
                             ));
         if($templates){
             foreach ($templates as $template){}
             $membertemplet = new SalaryTemplet();
                    $code = Settings::LoadByName("SalaryTemplet");
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $membertemplet->Code =$code->Option;
                    $membertemplet->Employee  = $estab->Employee;
                    $membertemplet->Date = QDateTime::Now();
                    $membertemplet->RefTemplet = $estab->SalaryTemplet;
                    $membertemplet->Establishment = $newEstab->Idestablishment;
                    $membertemplet->Department = $template->Department;
                    $membertemplet->Designation = $template->Designation; 
                    $membertemplet->Active = 1;
                    $membertemplet->Save();
                    $tshs = SalaryHead::LoadArrayBySalaryTemplet($template->IdsalaryTemplet);
                    foreach ($tshs as $tsh){
                    $mtsh = new SalaryHead();
                    $mtsh->SalaryHead = $tsh->SalaryHead;
                    $mtsh->SalaryTemplet =  $membertemplet->IdsalaryTemplet;
                    $mtsh->CalculationGrp = $tsh->CalculationGrp;
                    $mtsh->AppliedMonth = $tsh->AppliedMonth;
                    $mtsh->GeneratedAmount = $mtsh->Amount = $tsh->GeneratedAmount;
                    $mtsh->Percentage = $tsh->Percentage;
                    $mtsh->ShowInSalary = $tsh->ShowInSalary;
                    $mtsh->Save();
                    }
                    $oldtemplates = SalaryTemplet::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::SalaryTemplet()->Employee, $estab->Employee),
                                    QQ::NotEqual(QQN::SalaryTemplet()->IdsalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                            ));
                    if($oldtemplates){
                        foreach ($oldtemplates as $oldtemplate){
                            $oldtemplate->Active = 0;
                            $oldtemplate->Save();
                        }
                    }
                    
                    $this->Calculation();
         }
         $estab->Active = 0;
         $estab->Save();
         
     }
     protected function Calculation(){
            $membertemplets = SalaryTemplet::QueryArray(
                             QQ::AndCondition(
                             QQ::Equal(QQN::SalaryTemplet()->Employee, $_GET['emp']),
                             QQ::Equal(QQN::SalaryTemplet()->Active, 1)));
            foreach ($membertemplets as $membertemplet){}
            $estab = Establishment::LoadByIdestablishment($membertemplet->Establishment);
            $reftemplet = SalaryTemplet::LoadByIdsalaryTemplet($estab->SalaryTemplet);
            $tshs = SalaryHead::LoadArrayBySalaryTemplet($reftemplet->IdsalaryTemplet);
            foreach ($tshs as $tsh){
                $mtshs = SalaryHead::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->SalaryHead),
                                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                        ));
                        if($mtshs){
                            foreach ($mtshs as $mtsh){}

                            if($mtsh->CalculationGrp == 2){
                                 
                             //caculation entry
                             $calculations = Calculation::LoadArrayBySalaryHead($tsh->IdsalaryHead);
                             if($calculations){
                                 foreach ($calculations as $calculation){
                                   $memclalcss = Calculation::QueryArray(
                                                 QQ::AndCondition(
                                                 QQ::Equal(QQN::Calculation()->SalaryHead, $mtsh->IdsalaryHead),
                                                 QQ::Equal(QQN::Calculation()->Operation, $calculation->Operation),
                                                 QQ::Equal(QQN::Calculation()->SalaryHead2Object->SalaryHead, $calculation->SalaryHead2Object->SalaryHead)        
                                                         ));
                                   if($memclalcss){
                                       foreach ($memclalcss as $memclalcs){}
                                       
                                   }else{
                                   $memclalcs = new Calculation();
                                   $memclalcs->SalaryHead = $mtsh->IdsalaryHead;
                                   }
                                   if($calculation->SalaryHead1 != NULL){
                                   $head1s = SalaryHead::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::SalaryHead()->SalaryHead, $calculation->SalaryHead1Object->SalaryHead),
                                            QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                                    ));
                                    if($head1s){
                                        foreach ($head1s as $head1){}
                                        $memclalcs->SalaryHead1 = $head1->IdsalaryHead;
                                    }
                                   }
                                    //head 2
                                    $head2s = SalaryHead::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::SalaryHead()->SalaryHead, $calculation->SalaryHead2Object->SalaryHead),
                                            QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                                    ));
                                    if($head2s){
                                        
                                        foreach ($head2s as $head2){}
                                        $memclalcs->SalaryHead2 = $head2->IdsalaryHead;
                                    }
                                    $memclalcs->Operation = $calculation->Operation;
                                    $memclalcs->Save();
                                 }
                             }
                            }
                            
                            if($mtsh->CalculationGrp == 3){
                                //payslab Entry
                                $payslabs = PaySlabs::LoadArrayBySalaryhead($tsh->IdsalaryHead);
                                if($payslabs){
                                foreach ($payslabs as $payslab){
                                    $memslab = new PaySlabs();
                                    $memslab->Salaryhead = $mtsh->IdsalaryHead;
                                    $memslab->From = number_format($payslab->From,2,'.','');
                                    $memslab->To = number_format($payslab->To,2,'.','');
                                    $memslab->Percentage = number_format($payslab->Percentage,2,'.','');
                                    $memslab->Amount = number_format($payslab->Amount,2,'.','');
                                    $memslab->Save();
                                }
                                }
                            }
                            
                            if($mtsh->CalculationGrp == 4){
                               $baseds = SalaryHead::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->BasedSalaryHeadObject->SalaryHead),
                                        QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $mtsh->SalaryTemplet)
                                                ));
                               if($baseds){
                                   foreach ($baseds as $based){}
                                   $mtsh->BasedSalaryHead = $based->IdsalaryHead;
                                   $mtsh->Save();
                               }
                                               
                            }
                        }    
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/member_templet.php?estab='.$membertemplet->Establishment.'&id='.$membertemplet->IdsalaryTemplet);
        }
     protected function lblEdit_Click($strFormId, $strControlId, $strParameter){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?role='.$strParameter.'&emp='.$_GET['emp']);
   
     }
    protected function btnAddLink_Click($strFormId, $strControlId, $strParameter){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?estab='.'new'.'&id='.$strParameter);
   
     }

     protected function btnRoleDelete_Click(){
        $role = LoginHasRole::LoadById($_GET['role']);
        $role->Delete();
        $others = LoginHasRole::LoadArrayByLoginIdlogin($_GET['emp']);
        if(!$others)
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?emp='.$_GET['emp'].'&role=new');
        else
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?emp='.$_GET['emp']);
            
    }
     protected function btnRoleSave_Click(){
                    $login = Login::LoadByIdlogin($_GET['emp']);
                    if($login){
                        if($this->txtRole->SelectedValue != NULL){
                            //following code is used for reset all active role to false
                            //because only one active role should be there so it reset to deactive all roles
                            //--------------------------------------------------------------------------
                            //This condition checks for Acive role if yes then reset active role 
                            if($this->chkActive->Checked == TRUE){
                                $resetLHRActives = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
                                foreach ($resetLHRActives as $resetLHRActive){
                                    $resetLHRActive->Active = FALSE;
                                    $resetLHRActive->Save();
                                }
                            }
                            //--------------------------------------------------------------------------
                            
                            if($_GET['role'] != "new"){
                               
                                $loginhasrole = LoginHasRole::LoadById($_GET['role']);
                            }else{
                                $loginhasrole = new LoginHasRole();
                            }
                            //Add new Role or set Active role for that login
                            $loginhasrole->LoginIdlogin = $login->Idlogin;
                            $loginhasrole->RoleIdrole = $this->txtRole->SelectedValue;
                            $loginhasrole->Department = $this->txtRoleDept->SelectedValue;
                            $loginhasrole->Active = $this->chkActive->Checked;
                            $loginhasrole->Save();
                            
                            $estabs = Establishment::LoadArrayByRole($loginhasrole->Id);
                            if(!$estabs)
                             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?estab=new&id='.$loginhasrole->Id);
                            else
                               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?emp='.$_GET['emp']);
                    
                        }
                    }else{
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/establishment.php?emp='.$_GET['emp']);
                
                    }
              }

   }
    Estab::Run('Estab');
?>