<?php
	require('../../../qcubed.inc.php');
        class InquiryEditForm extends QForm {
		protected $lstCourse;
                protected $lstYear;
                protected $btnSave;

                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}
//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $inquiry = Inquiry::LoadByIdinquiry($_GET['id']);
                    
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Program";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $courses = Role::LoadArrayByGrp(5);
                    foreach ($courses as $course){
                        $this->lstCourse->AddItem(delete_all_between("[", "]", $course->Name), $course->Idrole);
                    }
                    $this->lstCourse->SelectedValue = $inquiry->Course;
                    
                    $this->lstYear = new QListBox($this);
                    $this->lstYear->AddItem("-Select One-", NULL);
                    $this->lstYear->Name = "Year";
                    $years = CalenderYear::LoadAll(QQ::OrderBy(QQN::CalenderYear()->From, FALSE));
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);   
                    }
                    
                    
                    
                            
                    $this->btnSave = new QButton($this);
                    $this->btnSave->Text = "Save";
                    $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
                        
                }
                protected function btnSave_Click(){
                    
                    $inquiry = Inquiry::LoadByIdinquiry($_GET['id']);
                    $students = Profile::LoadArrayByInquiry($_GET['id']);
                    if($students){
                        foreach ($students as $student){}
                        $student->FeeConcession = $inquiry->Category;
                        $student->CourseOfAddmission = $this->lstCourse->SelectedValue;                    
                        $student->Save();
                    }
                    //get student role
                    $chkrole = Role::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Parrent, $inquiry->Course),
                            QQ::Like(QQN::Role()->Name, "%Student %")
                        )
                    );
                    
                    //current Status                       
                    $current_statuss = CurrentStatus::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::CurrentStatus()->Role, $chkrole->Idrole),
                                QQ::Equal(QQN::CurrentStatus()->Student, $student->Idprofile),
                                QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                                QQ::Equal(QQN::CurrentStatus()->Semister, 1)
                            )
                        );
                    
                    if($current_statuss){
                            foreach ($current_statuss as $current_status){}
                    }else{
                        $current_status = new CurrentStatus();
                    }

                    $current_status->Student = $student->Idprofile;
                    $current_status->Role = $chkrole->Idrole;
                    $current_status->AdmissionStatus = 1;
                    $current_status->Cancel = 0;                    
                    $current_status->Active = 1;
                    $current_status->Semister = 1;
                    $current_status->CalenderYear = $this->lstYear->SelectedValue;
                    $current_status->From = $current_status->CalenderYearObject->From;
                    $current_status->To = $current_status->CalenderYearObject->To;
                    $current_status->Save();     
                    
                    //fee payable add
                    $fees = Fees::QueryArray(
                            QQ::AndCondition(
                                   QQ::Equal(QQN::Fees()->AcademicYear, 1),
                                   QQ::Equal(QQN::Fees()->CalenderYear, $this->lstYear->SelectedValue),
                                   QQ::Equal(QQN::Fees()->Course, $this->lstCourse->SelectedValue),
                                   QQ::Equal(QQN::Fees()->Category, $student->FeeConcession)
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
                                                QQ::Equal(QQN::Voucher()->Dr, $student->Idprofile),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );

                                if($chkvov){

                                }else{
                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; //fees Payable
                                    $vov->Cr = $fee->Fee;
                                    $vov->Dr = $student->Idprofile;
                                    $vov->Amount = $fee->AdmitAmt;
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

                                $stud = Ledger::LoadbyIdledger($student->Idprofile);
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

                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; 
                                    $vov->Dr = $led->Idledger;
                                    $vov->Cr = $fee->Fee;
                                    $vov->Amount = $fee->GovAmt;
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
                    }
                    
                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$current_status->Student);
                }
	}

	InquiryEditForm::Run('InquiryEditForm');
?>