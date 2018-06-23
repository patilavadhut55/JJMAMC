<?php
require('../../qcubed.inc.php');

    class PersonalDiposite extends QForm {
        protected $txtSearch;
        protected $btnSearch;
        protected $btnSave;
        protected $txtnow;
        protected $caldate;
        protected $lblPaid;
        protected $lbldelete;
        protected $txtDeposite;
        protected $lblDeldeposite;
        protected $lstYear;
        protected $btnPrint;




        protected function Form_Run() {
                parent::Form_Run();
           QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            //For Student Search
            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Student ID';
            $this->txtSearch->Width = 500;
            
            $this->lstYear = new QListBox($this);
            $years = AcademicYear::QueryArray(QQ::Equal(QQN::AcademicYear()->Parrent, NULL));
            foreach ($years as $year){
                $this->lstYear->AddItem($year->Name, $year->IdacademicYear);
            }
            $this->lstYear->Name = "Year";
            $this->lstYear->Visible = FALSE;
           

            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));

            //save button declaration
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('txtDeposite_click'));
            $this->btnSave->Visible = FALSE;
            
            //delete button declaration
            $this->txtDeposite = new QTextBox($this);
            $this->txtDeposite->Width = 100;
            $this->txtDeposite->AddAction(new QEnterKeyEvent(), new QServerAction('txtDeposite_click'));
            
            $this->lblDeldeposite = new QLabel($this);
            $this->lblDeldeposite->HtmlEntities = FALSE;
            $this->lblDeldeposite->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
            $this->lblDeldeposite->AddAction(new QClickEvent(), new QServerAction("lblDeldeposite_Click"));
            
            $this->lblPaid = new QLabel($this);

            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            $this->btnPrint = new QButton($this);
            $this->btnPrint->ButtonMode = QButtonMode::Success;
            $this->btnPrint->Text = "Print";
            $this->btnPrint->Visible = FALSE;
            $this->btnPrint->AddAction(new QClickEvent(), new QServerAction('btnPrint_Click'));
            if(isset ($_GET['mem'])){
           
                $this->lstYear->Visible = TRUE;
               
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $ledger = Ledger::LoadByIdledger($_GET['mem']);
                $this->txtSearch->Text = $ledger->Code.' '.get_full_name($ledger->Name);
               
                if(isset($_GET['year'])){
                    $CurrentStatus = CurrentStatus::QueryArray (
                                QQ::AndCondition(
                                QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year']),
                                QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                            ));  
                }else{
                    $CurrentStatus = CurrentStatus::LoadArrayByStudent($ledger->Idledger);
                }
                
                if($CurrentStatus)foreach ($CurrentStatus as $CurrentStatu){}
                if($CurrentStatu->RoleObject->ParrentObject->ParrentObject->Parrent == 250){
                    $course = Role::LoadByIdrole($CurrentStatu->RoleObject->ParrentObject->ParrentObject->Parrent);
                }else{
                    $course = Role::LoadByIdrole($CurrentStatu->RoleObject->ParrentObject->Parrent);
                }
                if(!isset($_GET['id']) && !isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $CurrentStatu->SemisterObject->Parrent;
                }
                
                $fees = Fees::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->AcademicYear, $CurrentStatu->SemisterObject->Parrent),
                            QQ::Equal(QQN::Fees()->CalenderYear, $CurrentStatu->CalenderYear),
                            QQ::Equal(QQN::Fees()->Course, $course->Idrole),      
                            QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession) 
                            ),
                            QQ::Clause(QQ::OrderBy(QQN::Fees()->Seq, True)
                        ));
                $this->txtnow = array();
                foreach ($fees as $fee){
                    $cnt = 0;
                    $chkparrent =  Fees::LoadArrayByParrent($fee->IdfeesTemplet);
                    if($chkparrent){
                        foreach($chkparrent as $parrent){
                            $cnt++;
                        }
                    }
                if($cnt == 0){
                    $this->btnSave->Visible = TRUE;  
                        
                       
//                        
                        if(isset($_GET['id'])){
                            $this->btnSave->Visible = TRUE;    
                            $this->btnPrint->Visible = TRUE;
                            $vov = Voucher::LoadByIdvoucher($_GET['id']);
                            $this->caldate->DateTime = $vov->Date;
                            $this->lstYear->SelectedValue = $vov->AcademicYear;

                            
                            
                            $depvovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                            QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                                            QQ::Equal(QQN::Voucher()->CrObject->Grp,$_GET['mem'])    
                                        )
                                    );
                            
                            foreach ($depvovs as $depvov){
                                $this->txtDeposite->Text = $depvov->Amount;
                            }
                        }
                    }    
                }
            }
        
        }
        public function txtSearch_Change($strParameter){
                $objMemberArray = Ledger::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Ledger()->Grp, 244),        
                        QQ::OrCondition(
                            QQ::Like(QQN::Ledger()->Name, '%'.$strParameter . '%'),
                            QQ::Like(QQN::Ledger()->Code, '%'.$strParameter . '%')
                        )
                    )
                );

                $result = array();
                foreach($objMemberArray as $objMember){
                        $result[] = $objMember->Code.' '.GetFullNameNew($objMember->Name,$objMember->Code);
                }
                return $result;
        }
        protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
                $text= $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);
                $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                if($currents)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/personal_diposite.php?mem='.$mem->Idledger); 
                else
                    QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
        }
        
            protected function txtDeposite_click(){
            if(isset($_GET['mem'])){
               $currents = CurrentStatus::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                           QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstYear->SelectedValue)        
                        ));
                foreach ($currents as $current){}
                
                 $student = Ledger::LoadbyIdledger($_GET['mem']);
                //chk scholarship ledger entry
                $ledger = Ledger::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Ledger()->Grp, $student->Idledger),
                        QQ::Like(QQN::Ledger()->Name, '%PersonalDeposite%') 
                    ));
                if($ledger){ 
                    foreach($ledger as $led){}
                }else{
                    $led = new Ledger();
                    $code = Settings::LoadByName("Ledger Counter");
                    $led->Code = 'DEP'.$code->Option;
                    $code->Option = $code->Option + 1;
                    $code->Save();                        
                    $led->Name = $student->Code.' PersonalDeposite';    
                    $led->Grp = $student->Idledger;
                    $led->Save();
                }
                
                        // personal deposit
                        if(isset($_GET['id'])){
                           $payvov = Voucher::LoadByIdvoucher($_GET['id']);                  
                         }else{
                               
                           $payvov = new  Voucher();
                             $code = VoucherGrp::LoadByIdvoucherGrp(7);
                             $payvov->InvNo = $code->Abbrivation.''.$code->Counter;
                             $code->Counter = $code->Counter + 1;
                             $code->Save();
                            
                         }
                        
                        $payvov->Date = $this->caldate->DateTime;
                        $payvov->AcademicYear = $this->lstYear->SelectedValue;
                        
                        $payvov->Cr = $led->Idledger;
                        $payvov->Dr = 22; 
                        $payvov->Grp = 7; 
                        $payvov->RefNo = NULL;
                        $payvov->Amount = $this->txtDeposite->Text;
                        $payvov->RefStatus = $current->IdcurrentStatus;
                        $payvov->DataBy = $_SESSION['login'];
                        $payvov->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/personal_diposite.php?mem='.$_GET['mem']);
                    }
            }
                
           
       
        protected function lblDeldeposite_Click(){
                $currentdeposite = Voucher::QueryArray(
                            QQ::AndCondition(                                                                              
                                QQ::Equal(QQN::Voucher()->Dr, 22),//personal depositr     
                                QQ::Equal(QQN::Voucher()->CrObject->Grp, $_GET['mem']),                                  
                                  
                                QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue)
                            ));
                if($currentdeposite){
                   foreach($currentdeposite as $currentdep){}
                   $currentdep->Delete();
                }  
                //$this->Refresh();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/personal_diposite.php?mem='.$_GET['mem']);
        }
         
         protected function btnPrint_Click(){
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/challan_print.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&flag=1');
         }
    }
    PersonalDiposite::Run('PersonalDiposite');
?>
        