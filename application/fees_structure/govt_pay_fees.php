<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $calfrom;
            protected $lstYear;
            protected $lstCourse;
            protected $lstSemister;
            protected $txtnow;
            protected $lblsave;
            protected $txtdevnow;
            
            protected $btnShow;
            
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
            }

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                   
                    ///Academic year
                    $this->lstYear = new QListBox($this);
                    $this->lstYear->AddItem("-Select One-",NULL);
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    $this->lstYear->Name = "Academic Year";
                    
                    //course
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Course";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                    }
                    
                    //Semister 
                    $this->lstSemister = new QListBox($this);
                    $this->lstSemister->Name = "Year";
                    $this->lstSemister->AddItem("-Select One-", NULL);
                    $sems = AcademicYear::LoadArrayByParrent(NULL);
                    foreach ($sems as $sem){
                        $this->lstSemister->AddItem($sem->Name, $sem->IdacademicYear);
                    }
                    $this->calfrom = new QCalendar($this);
                    $this->calfrom->Name = "From";
                    $this->calfrom->Width = 280 ;
                   
                    if(isset($_GET['from'])) $this->calfrom->Text = Date('F d Y', strtotime($_GET['from']));
                   
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Primary;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    
                   
                    
                    
                     if(isset($_GET['course'])){
                        $this->lstCourse->SelectedValue = $_GET['course'];
                        $this->lstSemister->SelectedValue = $_GET['semi'];
                        $this->lstYear->SelectedValue = $_GET['year'];
                    }
                    if(isset($_GET['course'])){
                        $currents = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent,$_GET['course']),
                                    QQ::Equal(QQN::CurrentStatus()->Semister,$_GET['semi']),
                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear,$_GET['year'])
                                )
                            );
                    if($currents){
                        $this->txtnow = array();
                        $this->txtdevnow = array();
                             
                        foreach ($currents as $current) {
                                //$this->txtdevnow = array();
                            $this->txtnow[$current->IdcurrentStatus] = new QTextBox($this);
                            $this->txtnow[$current->IdcurrentStatus]->Width = 100;
                            $this->txtnow[$current->IdcurrentStatus]->AddAction(new QEnterKeyEvent(), new QServerAction('txtnow_Enter'));
                            $this->txtnow[$current->IdcurrentStatus]->ActionParameter = $current->IdcurrentStatus;
                            $chkvhp = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Dr, 22),                                                                 
                                        QQ::Equal(QQN::Voucher()->CrObject->Grp,$current->Student),
                                        QQ::Equal(QQN::Voucher()->Grp, 7),
                                        QQ::Equal(QQN::Voucher()->RefNoObject->Cr, 10288),        
                                        QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus)
                                    )
                                );
                            if($chkvhp){
                                $this->txtnow[$current->IdcurrentStatus]->Text = $chkvhp->Amount;
                            }
                            
                            
                            $this->txtdevnow[$current->IdcurrentStatus] = new QTextBox($this);
                            $this->txtdevnow[$current->IdcurrentStatus]->Width = 100;
                            $this->txtdevnow[$current->IdcurrentStatus]->AddAction(new QEnterKeyEvent(), new QServerAction('txtdevnow_Enter'));
                            $this->txtdevnow[$current->IdcurrentStatus]->ActionParameter = $current->IdcurrentStatus;
                            $chkvhp = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Dr, 22),                                                                 
                                        QQ::Equal(QQN::Voucher()->CrObject->Grp,$current->Student),
                                        QQ::Equal(QQN::Voucher()->Grp, 7),
                                        QQ::Equal(QQN::Voucher()->RefNoObject->Cr, 10289),        
                                        QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus)
                                    )
                                );
                            if($chkvhp){
                                $this->txtdevnow[$current->IdcurrentStatus]->Text = $chkvhp->Amount;
                            }
                            
                            
                            
                            $this->lblsave[$current->IdcurrentStatus] = new QButton($this);
                            $this->lblsave[$current->IdcurrentStatus]->HtmlEntities = FALSE;
                            $this->lblsave[$current->IdcurrentStatus]->ButtonMode = QButtonMode::Add;
                            
                            $this->lblsave[$current->IdcurrentStatus]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/add.png />";
                            $this->lblsave[$current->IdcurrentStatus]->AddAction(new QClickEvent(), new QServerAction("lblsave_Click"));
                            $this->lblsave[$current->IdcurrentStatus]->ActionParameter = $current->IdcurrentStatus;
                           
                             
                        }
                    }
                    }
                }
                protected function Report(){
                    if ($this->calfrom->Text != ""  && $this->lstCourse->SelectedValue != NULL && $this->lstSemister->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL)  {
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/govt_pay_fees.php?from='.date("Ymd",  strtotime($this->calfrom->Text)).'&course='.$this->lstCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue);
                    }
                }
                protected function lblsave_Click($strFormId, $strControlId, $strParameter){
                    //QApplication::DisplayAlert($strParameter);
                        if($this->txtnow[$strParameter]->Text != "" ){
                            $currents = CurrentStatus::LoadByIdcurrentStatus($strParameter);
                            
                                if($currents){     
                                    $refvovs = Voucher::QuerySingle(
                                                        QQ::AndCondition(
                                                            QQ::Equal(QQN::Voucher()->Grp,6),
                                                            QQ::Equal(QQN::Voucher()->RefStatus, $currents->IdcurrentStatus),
                                                            QQ::Equal(QQN::Voucher()->Cr,10288),
                                                            QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                                              )
                                    );
                                      
                                    if($refvovs){
                                        if($this->txtnow[$strParameter]->Text <= $refvovs->Amount){
                                            $chkvhp = Voucher::QueryArray(
                                                        QQ::AndCondition(
                                                            QQ::Equal(QQN::Voucher()->Dr, 22),                                                                 
                                                            QQ::Equal(QQN::Voucher()->Cr,$refvovs->Dr),
                                                            QQ::Equal(QQN::Voucher()->Grp, 7),
                                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr, 10288),        
                                                            QQ::Equal(QQN::Voucher()->RefStatus, $currents->IdcurrentStatus)
                                                        )
                                                    );
                                            if(!$chkvhp){
                                                $vhp = new Voucher();
                                                $code = Settings::LoadByName("Government");
                                                $vhp->InvNo = 'GOVT'.''.$code->Option;
                                                $code->Option = $code->Option + 1;
                                                $code->Save();
                                            }else{
                                                foreach ($chkvhp as $vhp){}
                                            }
                                                
                                                $vhp->Date = QDateTime::FromTimestamp(strtotime($this->calfrom->Text));
                                                $vhp->AcademicYear = $_GET['semi'];
                                                $vhp->Parrent = NULL;
                                                $vhp->Dr = 22;
                                                $vhp->Cr = $refvovs->Dr;
                                                $vhp->Grp = 7; //fees receipt
                                                $vhp->RefNo = $refvovs->Idvoucher;
                                                $vhp->Amount = $this->txtnow[$strParameter]->Text;
                                                $vhp->RefStatus = $currents->IdcurrentStatus;
                                                $vhp->DataBy = $_SESSION['login'];
                                                $vhp->Save();
                                            }                                            
                                        }
                                       
                                       // check refvov                                       
                                        $refvov = Voucher::QuerySingle(
                                                        QQ::AndCondition(
                                                            QQ::Equal(QQN::Voucher()->Grp,6),
                                                            QQ::Equal(QQN::Voucher()->RefStatus, $currents->IdcurrentStatus),
                                                            QQ::Equal(QQN::Voucher()->Cr,10289),
                                                            QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                                                        )
                                                    );
                                        
                                        if($refvov){
                                            if($this->txtdevnow[$strParameter]->Text <= $refvov->Amount){
                                                 $chkvhp = Voucher::QueryArray(
                                                        QQ::AndCondition(
                                                            QQ::Equal(QQN::Voucher()->Dr, 22),                                                                 
                                                            QQ::Equal(QQN::Voucher()->Cr,$refvovs->Dr),
                                                            QQ::Equal(QQN::Voucher()->Grp, 7),
                                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr, 10289),
                                                            QQ::Equal(QQN::Voucher()->RefStatus, $currents->IdcurrentStatus)
                                                        )
                                                    );
                                                if(!$chkvhp){
                                                $subvhp = new Voucher();
                                               // $code = VoucherGrp::LoadByIdvoucherGrp(7);
                                                $code = Settings::LoadByName("Government");
                                                $subvhp->InvNo = $vhp->InvNo.'[0]';
                                                }else{
                                                    foreach ($chkvhp as $subvhp){}
                                                }
                                                $subvhp->Date = QDateTime::FromTimestamp(strtotime($this->calfrom->Text));
                                                $subvhp->AcademicYear = $_GET['semi'];
                                                $subvhp->Parrent = $vhp->Idvoucher;
                                                $subvhp->Dr = 22;
                                                $subvhp->Cr = $refvov->Dr;
                                                $subvhp->Grp = 7; //fees receipt
                                                $subvhp->RefNo = $refvov->Idvoucher;
                                                
                                                $subvhp->Amount = $this->txtdevnow[$strParameter]->Text;
                                                $subvhp->RefStatus = $currents->IdcurrentStatus;
                                                $subvhp->DataBy = $_SESSION['login'];
                                                $subvhp->Save();
                                                
                                                }
                                            }
                                    }
                                }
                            }
                        }
                    
           
          
	MemberListForm::Run('MemberListForm');
?>