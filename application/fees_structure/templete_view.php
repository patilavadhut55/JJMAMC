<?php

    require_once('../../qcubed.inc.php');
    
    class FeeForm extends QForm {
        protected $btnApply;
        protected $cur;
        protected function Form_Create() {
            
            $this->btnApply = new QButton($this);
            $this->btnApply->ButtonMode = QButtonMode::Success;
            $this->btnApply->Text ="Apply Fees";
            $this->btnApply->AddAction(new QClickEvent(), new QServerAction('btnApply_click'));
            
            if(isset($_GET['mem'])){
                $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                        QQ::NotEqual(QQN::CurrentStatus()->AdmissionStatus, 2)
                    ),
                    QQ::Clause(
                        QQ::OrderBy(QQN::CurrentStatus()->Semister)
                    )
                );
                foreach ($currents as $current){}
                $this->cur = $current->IdcurrentStatus;
            }
        }
        protected function btnApply_click(){
            $voutures = Voucher::LoadArrayByCr($_GET['mem']);
            
            if(isset($_GET['vov'])){
                
                $prevamt = 0.0;
                $prevovs = Voucher::QueryArray(
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['vov']),
                                QQ::Equal(QQN::Voucher()->Parrent, $_GET['vov'])
                            )
                        );
                foreach ($prevovs as $prevov){
                    $prevamt = $prevamt + $prevov->Amount;
                }
                
                
                /*
                $app = Application::LoadByIdapplication($_GET['app']);
                $vovs = Voucher::QueryArray(
                        QQ::OrCondition(
                            QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['vov']),
                            QQ::Equal(QQN::Voucher()->Parrent, $_GET['vov'])
                        )
                    );
                
                foreach ($vovs as $vov){
                    $vov->Cancel = TRUE;
                    $vov->CancelBy = $_SESSION['login'];
                    $vov->CancelDate = QDateTime::Now();
                    $vov->Reason = $app->Reason;
                    $vov->Save();
                    
                    //for fee payable
                    $vovpay = Voucher::LoadByIdvoucher($vov->RefNo);
                    $vovpay->Cancel = TRUE;
                    $vovpay->CancelBy = $_SESSION['login'];
                    $vovpay->CancelDate = QDateTime::Now();
                    $vov->Reason = $app->Reason;
                    $vovpay->Save();
                }
                */
                
            }else{
                if($voutures){
                    foreach($voutures as $vouture)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vouture->Idvoucher);
                }
            }
            
            
            $login = Login::LoadByIdlogin($_SESSION['login']);
            $FEE = Ledger::LoadByIdledger(5454); //Fees
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $amt = 0;
            $feesvoucher =  NULL;
            $cashvoucher =  NULL;   
            $nowamt = 0.0;
            $current = CurrentStatus::LoadByIdcurrentStatus($this->cur);

                if($current->RoleObject->Parrent == 260){ //civil 
                    $fees = Fees::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                            QQ::Equal(QQN::Fees()->CalenderYear, $current->CalenderYear),
                            QQ::Equal(QQN::Fees()->AcademicYear, $current->SemisterObject->Parrent),
                            QQ::Equal(QQN::Fees()->Course, $current->RoleObject->ParrentObject->Parrent),
                            QQ::NotEqual(QQN::Fees()->Fee, 5466)      //mech  
                        ),
                        QQ::OrderBy(QQN::Fees()->AdmitAmt, FALSE)
                        );
                }elseif($current->RoleObject->Parrent == 268){
                    $fees = Fees::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                                QQ::Equal(QQN::Fees()->CalenderYear, $current->CalenderYear),
                                QQ::Equal(QQN::Fees()->AcademicYear, $current->SemisterObject->Parrent),
                                QQ::Equal(QQN::Fees()->Course, $current->RoleObject->ParrentObject->Parrent),
                                QQ::NotEqual(QQN::Fees()->Fee, 5488)    // civil    
                            ),
                            QQ::OrderBy(QQN::Fees()->AdmitAmt, FALSE)
                            );
                }else{
                    $fees = Fees::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $profile->FeeConcession),
                                QQ::Equal(QQN::Fees()->CalenderYear, $current->CalenderYear),
                                QQ::Equal(QQN::Fees()->AcademicYear, $current->SemisterObject->Parrent),
                                QQ::Equal(QQN::Fees()->Course, $current->RoleObject->ParrentObject->Parrent),
                                QQ::NotEqual(QQN::Fees()->Fee, 5488),    // civil    
                                QQ::NotEqual(QQN::Fees()->Fee, 5466)      //mech  
                            ),
                            QQ::OrderBy(QQN::Fees()->AdmitAmt, FALSE)
                            );
                }

                $HeadRcpt = NULL;
                $HeadCashRcpt = NULL;
                $payable = NULL; //for referance of payable with paid
                $feecnt = 1;
                $cashcnt = 1;
                $flg = 1;
                foreach($fees as $fee){
               
                    if($flg == 1){
                        
                        // for getting feeshead 
                        if($fee->AdmitAmt != NULL || $fee->AdmitAmt != 0){
                            $nowamt = $nowamt + $fee->AdmitAmt;
                            $chkvov = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            //QQ::Equal(QQN::Voucher()->RefStatus , $current->IdcurrentStatus),
                                            QQ::Equal(QQN::Voucher()->AcademicYear , $current->SemisterObject->Parrent),
                                            QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                            QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']),
                                            QQ::Equal(QQN::Voucher()->Grp, 6)
                                        )
                                    );
                            
                            if($chkvov){
                                
                            }else{
                                
                                $vov = new Voucher();
                                $vov->Date = QDateTime::Now();
                                $vov->Grp = 6; //fees Payable
                                $vov->Cr = $fee->Fee;
                                $vov->Dr = $_GET['mem'];
                                $vov->Amount = $fee->AdmitAmt;
                                $vov->DataBy = $_SESSION['login'];
                                $vov->AcademicYear = $current->SemisterObject->Parrent;
                                $vov->RefStatus = $current->IdcurrentStatus;
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
                            
                            $student = Ledger::LoadbyIdledger($_GET['mem']);
                            //chk scholarship ledger entry
                            $ledger = Ledger::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Ledger()->Grp, $student->Idledger),
                                    QQ::Like(QQN::Ledger()->Name, '%Scholarship%') 
                                ));
                            
                            if($ledger){
                                foreach($ledger as $led){}
                                $chkschvovs = Voucher::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $current->SemisterObject->Parrent),
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
                                $led->Name = $student->Code.' Scholarship';    
                                $led->Grp = $student->Idledger;
                                $led->Save();
                            }
                                
                            $chkvovgov = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            //QQ::Equal(QQN::Voucher()->RefStatus , $current->IdcurrentStatus),
                                            QQ::Equal(QQN::Voucher()->AcademicYear , $current->SemisterObject->Parrent),
                                            QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                            QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']),
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
                                $vov->AcademicYear = $current->SemisterObject->Parrent;
                                $vov->RefStatus = $current->IdcurrentStatus;

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

                    //cash  Entry
                    if($fee->AdmitAmt != NULL || $fee->AdmitAmt != 0){                        
                        $payable = Voucher::LoadByInvNo($payable);
                        if($payable){
                        $chkvovcash = Voucher::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->RefStatus , $current->IdcurrentStatus),
                                        QQ::Equal(QQN::Voucher()->AcademicYear , $current->SemisterObject->Parrent),
                                        QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),
                                        QQ::Equal(QQN::Voucher()->Dr, 22),
                                        QQ::Equal(QQN::Voucher()->Grp, 7),
                                        QQ::Equal(QQN::Voucher()->RefNo, $payable->Idvoucher)
                                    )
                                );

                        if($chkvovcash){
                            foreach($chkvovcash as $vovcash){}
                            if($HeadCashRcpt == NULL) $HeadCashRcpt = $vovcash->InvNo;
                        }else{
                        
                            $vhp = new Voucher();
                            $vhp->Date = QDateTime::Now();
                            $vhp->AcademicYear = $current->SemisterObject->Parrent;
                            $vhp->Grp = 7; //Fees Receipt
                            $vhp->Dr = 22;
                            $vhp->Cr = $_GET['mem'];
                            $vhp->Amount = $fee->AdmitAmt;
                            $vhp->DataBy = $_SESSION['login'];
                            $vhp->RefStatus = $current->IdcurrentStatus;

                            if($cashvoucher == NULL){ 
                                $code = VoucherGrp::LoadByIdvoucherGrp(7);
                                $vhp->InvNo = $code->Abbrivation.''.$code->Counter;
                                $code->Counter = $code->Counter + 1;
                                $code->Save();
                                if($HeadCashRcpt == NULL) $HeadCashRcpt = $vhp->InvNo;
                                $cashvoucher = $vhp->InvNo;
                            }else{
                                $parrentvou = Voucher::LoadByInvNo($cashvoucher);
                                $vhp->InvNo = $cashvoucher.'['.$cashcnt.']';
                                $vhp->Parrent = $parrentvou->Idvoucher;
                                $cashcnt++;
                            }

                            
                            $vhp->RefNo = $payable->Idvoucher;
                            $vhp->Save();
                        
                        }
                        }
                        
                    }
                    
                    }
                }
                
                if(isset($_GET['vov'])){
                    if($prevamt > $nowamt){
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
                        $payvov = new  Voucher();
                        $code = VoucherGrp::LoadByIdvoucherGrp(7);
                        $payvov->InvNo = $code->Abbrivation.''.$code->Counter;
                        $code->Counter = $code->Counter + 1;
                        $code->Save();
                        if($HeadCashRcpt == NULL) $HeadCashRcpt = $payvov->InvNo;                        
                        $payvov->Date = QDateTime::Now();
                        $payvov->AcademicYear = $current->SemisterObject->Parrent;;
                        $payvov->Parrent = NULL;
                        $payvov->Cr = $led->Idledger;
                        $payvov->Dr = 22; 
                        $payvov->Grp = 7; 
                        $payvov->RefNo = NULL;
                        $payvov->Amount = $prevamt - $nowamt;
                        $payvov->RefStatus = $current->IdcurrentStatus;
                        $payvov->DataBy = $_SESSION['login'];
                        $payvov->Save();                         
                    }
                }
                
                
                
                $HeadCashRcpt = Voucher::LoadByInvNo($HeadCashRcpt);
                if($HeadCashRcpt){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$HeadCashRcpt->Idvoucher);
                }else{
                    QApplication::DisplayAlert('Fee templete is not filled for this concession category');
                }
            
        }
        
    }
    FeeForm::Run('FeeForm');
?>


