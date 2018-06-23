<?php
    require('../../qcubed.inc.php');
    
    class PayFees extends QForm {
        protected $txtSearch;
        protected $btnSearch;
        protected $lblView;
        
        protected $lstSemup;
        protected $lstCalup;
        protected $lstConcession;
        protected $lstTeachDeptup;
        protected $lstAdmissionStatus;
        protected $lstStatus;
        protected $btnUpgrade;
        
        protected $btnApplyFees;
        protected $lstAdmission;
        protected $chkapprove;
        
        protected $btnDel;
        protected $lstConcessionArray;
        protected $cur;
        protected $lblResult1;
        protected $btnUpload;

        protected function Form_Run() {
                parent::Form_Run();
           QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            if(isset($_GET['mem']))
                QApplication::ExecuteJavaScript("showHint('".$_GET['mem']."')");
            $this->lblView = new QLabel($this);
            $this->lblView->HtmlEntities = FALSE;
            $this->lblView->Width =  '100%';
            
            
            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Student ID';
            $this->txtSearch->Width = 500;
            
           
            $this->btnUpload = new QButton($this);
            $this->btnUpload->ButtonMode = QButtonMode::Success;
            $this->btnUpload->Text = "Upload";
            $this->btnUpload->Width = "100%";
            $this->btnUpload->AddAction(new QClickEvent(), new QServerAction('btnUpload_click'));

            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));
            
            //upgrade controls
            $this->lstCalup = new QSelect2ListBox($this);
            $calenders = CalenderYear::LoadAll();
            foreach ($calenders  as $calender)
                $this->lstCalup->AddItem($calender->Name, $calender->IdcalenderYear);

            $this->lstConcession = new QListBox($this);
            $this->lstConcession->AddItem("-Select One-",NULL);
            $Concessions = FeesConcession::LoadAll();
            foreach ($Concessions as $Concession)
                $this->lstConcession->AddItem($Concession->Name, $Concession->IdfeesConcession);
            
            
            $this->lstAdmissionStatus = new QSelect2ListBox($this);
            $this->lstAdmissionStatus->AddItem("-Admission Status-",NULL);
            $Statuses = AdmissionStatus::LoadAll();
            foreach ($Statuses as $Status){
                $this->lstAdmissionStatus->AddItem($Status->Name, $Status->IdadmissionStatus);
            }

            $this->lstTeachDeptup = new QListBox($this);
            $programs = Role::QueryArray(
                    QQ::AndCondition(
                            QQ::OrCondition(
                                QQ::Equal(QQN::Role()->Parrent, 235), //Diploma
                                QQ::Equal(QQN::Role()->Parrent, 249), //BTE 
                                QQ::Equal(QQN::Role()->Parrent, 250),
                                QQ::Equal(QQN::Role()->Parrent, 354),
                                QQ::Equal(QQN::Role()->ParrentObject->Parrent, 250)//MTE
                            ),
                            QQ::Equal(QQN::Role()->Grp, 5)
                            )
                    );
            foreach ($programs as $program)
                $this->lstTeachDeptup->AddItem($program->ShortName, $program->Idrole); 

            $this->lstSemup = new QListBox($this);
            $acads = AcademicYear::QueryArray(
                            QQ::AndCondition(
                            QQ::NotEqual(QQN::AcademicYear()->Parrent, NULL)
                        ));

            foreach ($acads as $acad)
                $this->lstSemup->AddItem($acad->Name, $acad->IdacademicYear); 

            $this->lstAdmission = new QSelect2ListBox($this);
            $this->lstAdmission->Width = 140;
            $admissions = CalenderYear::QueryArray(
                    QQ::All(),
                    QQ::OrderBy(QQN::CalenderYear()->Sequence));
            $this->lstAdmission->AddItem("-Admission Year-",NULL);
            foreach ($admissions as $admission) {
                $this->lstAdmission->AddItem($admission->Name,$admission->IdcalenderYear);
            }
            $this->lstAdmission->AddAction(new QChangeEvent(), new QServerAction('lstAdmission_Click'));
            
            $this->btnUpgrade = new QButton($this);
            $this->btnUpgrade->ButtonMode = QButtonMode::Success;
            $this->btnUpgrade->Text = 'Upgrade Student  <i class="fa fa-arrow-circle-right"></i>';
            $this->btnUpgrade->AddAction(new QClickEvent(), new QServerAction('btnUpgrade_Click'));
            
            $this->lstConcessionArray = new QListBox($this);
            $this->lstConcessionArray->AddItem("-Select One",NULL);
            foreach ($Concessions as $Concession)
                $this->lstConcessionArray->AddItem($Concession->Name, $Concession->IdfeesConcession);
            
            if(isset($_GET['mem'])){
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $this->lstConcessionArray->SelectedValue = $profile->FeeConcession;
             $ledger = Ledger::LoadByIdledger($_GET['mem']);
                $this->txtSearch->Text = $ledger->Code.' '.$ledger->Name;
            }
            
            $this->lstConcessionArray->AddAction(new QChangeEvent(), new QServerAction('lstConcessionArray_Click'));
                
            $this->btnApplyFees = new QButton($this);
            $this->btnApplyFees->ButtonMode = QButtonMode::Success;
            $this->btnApplyFees->Text = 'Apply Fees  <i class="fa fa-arrow-circle-right"></i>';
            $confirmflg = 0;
            if(isset($_GET['mem'])){
                $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                    ),
                        QQ::Clause(
                            QQ::OrderBy(QQN::CurrentStatus()->Semister)
                        )
                    );
                if($currents){
                    foreach ($currents as $current){}
                    $vouture = Voucher::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Grp, 7),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cr, 10288),
                                    QQ::Equal(QQN::Voucher()->Cr, 10289)
                                ),
                                QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus)));
                    if($vouture){
                        $this->btnApplyFees->Text = 'verified <i class="fa fa-arrow-circle-right"></i>';
                        $confirmflg = 1;
                    }
                }
            }
            if($confirmflg == 0){
                $this->btnApplyFees->AddAction(new QClickEvent(), new QConfirmAction("Are you sure to apply fees !"));
            }
            $this->btnApplyFees->AddAction(new QClickEvent(), new QServerAction('ApplyFees_Click'));
            
            //delete currents
            if(isset($_GET['mem'])){
            $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                    ),
                        QQ::Clause(
                            QQ::OrderBy(QQN::CurrentStatus()->Semister)
                        )
                    );
            foreach ($currents as $current){
                $this->btnDel[$current->IdcurrentStatus] = new QButton($this);
                $this->btnDel[$current->IdcurrentStatus]->ButtonMode = QButtonMode::Danger;
                $this->btnDel[$current->IdcurrentStatus]->HtmlEntities = FALSE;
                $this->btnDel[$current->IdcurrentStatus]->Text = "<i class='fa fa-trash'></i>";
                $this->btnDel[$current->IdcurrentStatus]->AddAction(new QClickEvent(), new QServerAction('btnDel_Click'));
                $this->btnDel[$current->IdcurrentStatus]->ActionParameter = $current->IdcurrentStatus;
                
                $this->lstStatus[$current->IdcurrentStatus] = new QSelect2ListBox($this);
                $this->lstStatus[$current->IdcurrentStatus]->AddItem('- Admission Status -',NULL);
                $Statuses = AdmissionStatus::LoadAll();
                 foreach ($Statuses as $Status){
                         $this->lstStatus[$current->IdcurrentStatus]->AddItem($Status->Name, $Status->IdadmissionStatus);
                 }
                $this->lstStatus[$current->IdcurrentStatus]->AddAction(new QChangeEvent(), new QServerAction('lstStatus_Click'));
                $this->lstStatus[$current->IdcurrentStatus]->ActionParameter = $current->IdcurrentStatus;
                $this->lstStatus[$current->IdcurrentStatus]->SelectedValue = $current->AdmissionStatus;
            }
            $this->cur = $current->IdcurrentStatus;
           // QApplication::DisplayAlert($this->cur);
            }
            if(isset($_GET['mem'])){
            $profiles = Profile::LoadByIdprofile($_GET['mem']);

            if($profiles){
                foreach ($profiles as $profile) {
                    $this->lstAdmission->SelectedValue = $profiles->CalenderYear;
                    
                }
                
            }
            }
        }  
        
        protected function  btnUpload_click(){            
            $target_file = "../upload/photo/".$_GET['mem'].'.png';
            imageFileUpload($target_file, "imgupload");
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/readmission.php?mem='.$_GET['mem']); 
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
                $result[] = $objMember->Code.' '.  GetFullNameNew($objMember->Name,$objMember->Code);
            }
            return $result;
        }

        protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
                $text = $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);
                $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                if($currents)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/readmission.php?mem='.$mem->Idledger); 
                else
                    QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/readmission_status.php?mem='.$mem->Idledger.'&admit=1');
              
        }
        
        protected function btnUpgrade_Click(){
            $current = new CurrentStatus();
            $current->From = QDateTime::Now();
            $current->CalenderYear = $this->lstCalup->SelectedValue;
            $current->Student = $_GET['mem'];
            $current->Semister = $this->lstSemup->SelectedValue;
            $current->AdmissionStatus = $this->lstAdmissionStatus->SelectedValue;
            
            $chkrole = Role::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Parrent, $this->lstTeachDeptup->SelectedValue),
                            QQ::Like(QQN::Role()->Name, "%Student %")
                            ));
            if($chkrole) foreach($chkrole as $role){}
            $current->Role = $role->Idrole;
            $current->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/readmission.php?mem='.$_GET['mem']); 
        }
        
        protected function lstConcessionArray_Click() {
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            //$profile->FeeConcessionApplicable = 1;
            $profile->FeeConcession = $this->lstConcessionArray->SelectedValue;
            $profile->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/readmission.php?mem='.$_GET['mem']);
        }
        
        protected function lstAdmission_Click(){
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $profile->CalenderYear = $this->lstAdmission->SelectedValue ;
            $profile->Save();
            $currss = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::CurrentStatus()->Student,$_GET['mem']),
                                QQ::Equal(QQN::CurrentStatus()->Semister,1)
                    ));
            if($currss){
                foreach ($currss as $currs){}
                $currs->CalenderYear = $this->lstAdmission->SelectedValue;
                $currs->Save();
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/readmission.php?mem='.$_GET['mem']);
        }
        
        protected function btnDel_Click($strFormId, $strControlId, $strParameter) {
            $current = CurrentStatus::LoadByIdcurrentStatus($strParameter);
            $current->Delete();
        }
        
        protected function ApplyFees_Click(){
            $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                    ),
                        QQ::Clause(
                            QQ::OrderBy(QQN::CurrentStatus()->Semister)
                        )
                    );
            if($currents){
                foreach ($currents as $current_status){}
                $voutures = Voucher::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Grp, 7),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cr, 10288),
                                    QQ::Equal(QQN::Voucher()->Cr, 10289)
                                ),
                                QQ::Equal(QQN::Voucher()->RefStatus, $current_status->IdcurrentStatus)));
                                        
                if($voutures){
                    foreach($voutures as $vouture)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vouture->Idvoucher);
                }else{
                     //fees Payable 
                    $fees = Fees::QueryArray(
                            QQ::AndCondition(
                                   QQ::Equal(QQN::Fees()->AcademicYear, $current_status->Semister),
                                   QQ::Equal(QQN::Fees()->CalenderYear, $this->lstAdmission->SelectedValue),
                                   QQ::Equal(QQN::Fees()->Course, $current_status->RoleObject->Parrent),
                                   QQ::Equal(QQN::Fees()->Category, $current_status->StudentObject->IdloginObject->Profile->FeeConcession)
                            ),
                            QQ::Clause(QQ::OrderBy(QQN::Fees()->Seq, TRUE))
                        );
                    $nowamt = $feesvoucher = $feecnt = 0;
                    if($fees){
                        foreach($fees as $fee){
                            // for getting feeshead 
                            if($fee->AdmitAmt != NULL || $fee->AdmitAmt != 0){
                                $nowamt = $nowamt + $fee->AdmitAmt;
                                $chkvov = Voucher::QueryArray(
                                            QQ::AndCondition(
                                                //QQ::Equal(QQN::Voucher()->RefStatus , $current->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $current_status->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                                QQ::Equal(QQN::Voucher()->Dr, $current_status->Student),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );
                                
                                if($chkvov){

                                }else{
                                    $feeper = 0;
                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; //fees Payable
                                    $vov->Cr = $fee->Fee;
                                    $vov->Dr = $current_status->Student;
                                    //$feeper = round($fee->AdmitAmt + ($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                    /*if($current_status->Semister == 1 && $fee->CalenderYearObject->Approved == TRUE){
                                        
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    elseif($fee->CalenderYearObject->Approved == TRUE && $current_status->Semister !=1 && $current_status->Semister !=10 ){
                                        
                                        $vov->Amount = $feeper;
                                        
                                    }
                                     
                                    elseif($current_status->Semister != 10 && $fee->CalenderYearObject->Approved == FALSE){
                                        
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    elseif($current_status->Semister == 10  && $fee->CalenderYearObject->Approved == TRUE){
                                       // $amt = $fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        $vov->Amount = round($feeper + (($feeper)/2)). " ";
                                    }
                                   
                                   // $vov->Amount = ceil($vov->Amount);
                                    elseif($current_status->Semister == 10  && $fee->CalenderYearObject->Approved == FALSE){
                                        $vov->Amount = $fee->AdmitAmt + (($fee->AdmitAmt)/2);
                                        $vov->Amount = round($vov->Amount);
                                    }
                                    else{*/
                                        $vov->Amount = $fee->AdmitAmt;
                                    //}
                                    //$vov->Amount = ($vov->Amount);
                                    
                                    $vov->DataBy = $_SESSION['login'];
                                    $vov->AcademicYear = $current_status->Semister;
                                    $vov->RefStatus = $current_status->IdcurrentStatus;
                                    if($feesvoucher == NULL){
                                        $code = VoucherGrp::LoadByIdvoucherGrp(6);
                                        $vov->InvNo = $code->Abbrivation.''.$code->Counter;
                                        //if($HeadRcpt == NULL) $HeadRcpt = $vov->InvNo;
                                        $code->Counter = $code->Counter + 1;
                                        $code->Save();
                                        $feesvoucher = $vov->InvNo;
                                    }else{
                                        $voucherparr = Voucher::LoadByInvNo($feesvoucher);
                                        $vov->InvNo = $feesvoucher.'['.$feecnt.']';
                                        $vov->Parrent = $voucherparr->Idvoucher;
                                        $feecnt++;
                                    }
                                    $payable = $vov->InvNo;
                                    $vov->Save();

                                }

                            }

                            if($fee->GovAmt != NULL || $fee->GovAmt != 0){

                                $stud = Ledger::LoadbyIdledger($current_status->Student);
                                //chk scholarship ledger entry
                                $ledger = Ledger::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Ledger()->Grp, $stud->Idledger),
                                        QQ::Like(QQN::Ledger()->Name, '%Scholarship%') 
                                    ));

                                if($ledger){
                                    foreach($ledger as $led){}
                                    $chkschvovs = Voucher::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Voucher()->AcademicYear , $current_status->Semister),
                                                    QQ::Equal(QQN::Voucher()->Dr, $led->Idledger),
                                                    QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),    
                                                    QQ::Equal(QQN::Voucher()->Grp, 6)
                                                ));
                                    if($chkschvovs){
                                        foreach($chkschvovs as $chkschvov){
                                            $chkschvov->Amount = 0;
                                            $chkschvov->Save();
                                        }
                                    }

                                }else{
                                    $led = new Ledger();
                                    $code = Settings::LoadByName("Ledger Counter");
                                    $led->Code = 'SCH'.$code->Option;
                                    $code->Option = $code->Option + 1;
                                    $code->Save();                        
                                    $led->Name = $stud->Code.' Scholarship';    
                                    $led->Grp = $stud->Idledger;
                                    $led->Save();
                                }

                                $chkvovgov = Voucher::QueryArray(
                                            QQ::AndCondition(
                                                //QQ::Equal(QQN::Voucher()->RefStatus , $current_status->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $current_status->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                                QQ::Equal(QQN::Voucher()->Dr, $led->Idledger),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );

                                if($chkvovgov){

                                }else{
                                    $govper = 0;
                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; 
                                    $vov->Dr = $led->Idledger;
                                    $vov->Cr = $fee->Fee;
                                    //$govper = round($fee->GovAmt + ($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                    
                                    /*if($current_status->Semister == 1 && $fee->CalenderYearObject->Approved == TRUE){
                                        
                                        $vov->Amount = $fee->GovAmt;
                                    }
                                    elseif($fee->CalenderYearObject->Approved == TRUE && $current_status->Semister !=1 && $current_status->Semister !=10 ){
                                        
                                        $vov->Amount = $govper;
                                        
                                    }
                                    elseif($current_status->Semister == 10  && $fee->CalenderYearObject->Approved == TRUE){
                                        //$amt = $fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                           $vov->Amount = round($govper + (($govper)/2)). " ";
                                    }
                                    // $vov->Amount = ceil($vov->Amount);
                                    elseif($current_status->Semister == 10  && $fee->CalenderYearObject->Approved == FALSE){
                                        $vov->Amount = $fee->GovAmt + (($fee->GovAmt)/2);
                                         $vov->Amount = round($vov->Amount);
                                    }else{*/
                                        $vov->Amount = $fee->GovAmt;
                                    //}
                
                                    //$vov->Amount = ceil($vov->Amount);
                                    $vov->DataBy = $_SESSION['login'];
                                    $vov->AcademicYear = $current_status->Semister;
                                    $vov->RefStatus = $current_status->IdcurrentStatus;

                                    if($feesvoucher == NULL){
                                        $code = VoucherGrp::LoadByIdvoucherGrp(6);
                                        $vov->InvNo = $code->Abbrivation.''.$code->Counter;
                                        $code->Counter = $code->Counter + 1;
                                        $code->Save();
                                        $feesvoucher = $vov->InvNo;
                                    }else{
                                        $voucherparr = Voucher::LoadByInvNo($feesvoucher);
                                        $vov->InvNo = $feesvoucher.'['.$feecnt.']';
                                        $vov->Parrent = $voucherparr->Idvoucher;
                                        $feecnt++;
                                    }
                                    $vov->Save();

                                }
                            }
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/sum.php?mem='.$_GET['mem']);
                    }else {
                        QApplication::DisplayAlert("Templet not defined for this fees consession Category");
                    }
                }
            }
        }
        
        protected function lstStatus_Click($strFormId, $strControlId, $strParameter){
            $current = CurrentStatus::LoadByIdcurrentStatus($strParameter);
            $current->AdmissionStatus = $this->lstStatus[$strParameter]->SelectedValue;
            $current->Save();            
        }
    }
    
    PayFees::Run('PayFees');
?>
