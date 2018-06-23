<?php
    require('../../qcubed.inc.php');
    $students = CurrentStatus::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, 14)
                )
            );
    foreach ($students as $student){
        if($student->StudentObject->IdloginObject->Profile->CalenderYear != NULL){
            //fees Payable 
                    $fees = Fees::QueryArray(
                            QQ::AndCondition(
                                   QQ::Equal(QQN::Fees()->AcademicYear, 1),
                                   QQ::Equal(QQN::Fees()->CalenderYear, $student->StudentObject->IdloginObject->Profile->CalenderYear),
                                   QQ::Equal(QQN::Fees()->Course, $student->RoleObject->Parrent),
                                   QQ::Equal(QQN::Fees()->Category, $student->StudentObject->IdloginObject->Profile->FeeConcession)
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
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $student->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                                QQ::Equal(QQN::Voucher()->Dr, $student->Student),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );
                                
                                if($chkvov){
                                     if($student->Semister == 1 && $fee->CalenderYearObject->Approved == TRUE){
                                        
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    elseif($fee->CalenderYearObject->Approved == TRUE && $student->Semister !=1 && $student->Semister !=10 ){
                                        
                                        $vov->Amount = $fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == TRUE){
                                       // $amt = $fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        $vov->Amount = ($fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100)) + (($fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100))/2). " ";
                                    }
                                    
                                    elseif($student->Semister != 10 && $fee->CalenderYearObject->Approved == FALSE){
                                        
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == FALSE){
                                        $vov->Amount = $fee->AdmitAmt + (($fee->AdmitAmt)/2);
                                    }
                                    else{
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    $vov->Amount = ceil($vov->Amount);
                                    

                                }else{
                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; //fees Payable
                                    $vov->Cr = $fee->Fee;
                                    $vov->Dr = $student->Student;
                                    if($student->Semister == 1 && $fee->CalenderYearObject->Approved == TRUE){
                                        
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    elseif($fee->CalenderYearObject->Approved == TRUE && $student->Semister !=1 && $student->Semister !=10 ){
                                        
                                        $vov->Amount = $fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == TRUE){
                                       // $amt = $fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        $vov->Amount = ($fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100)) + (($fee->AdmitAmt + (($fee->AdmitAmt *($fee->CalenderYearObject->FeePercentage))/100))/2). " ";
                                    }
                                    
                                    elseif($student->Semister != 10 && $fee->CalenderYearObject->Approved == FALSE){
                                        
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == FALSE){
                                        $vov->Amount = $fee->AdmitAmt + (($fee->AdmitAmt)/2);
                                    }
                                    else{
                                        $vov->Amount = $fee->AdmitAmt;
                                    }
                                    $vov->Amount = ceil($vov->Amount);
                                    
                                    $vov->DataBy = $_SESSION['login'];
                                    $vov->AcademicYear = $student->Semister;
                                    $vov->RefStatus = $student->IdcurrentStatus;
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

                                $stud = Ledger::LoadbyIdledger($student->Student);
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
                                                    QQ::Equal(QQN::Voucher()->AcademicYear , $student->Semister),
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
                                                //QQ::Equal(QQN::Voucher()->RefStatus , $student->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->AcademicYear , $student->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $fee->Fee),
                                                QQ::Equal(QQN::Voucher()->Dr, $led->Idledger),
                                                QQ::Equal(QQN::Voucher()->Grp, 6)
                                            )
                                        );

                                if($chkvovgov){
                                    if($student->Semister == 1 && $fee->CalenderYearObject->Approved == TRUE){
                                        
                                        $vov->Amount = $fee->GovAmt;
                                    }
                                    elseif($fee->CalenderYearObject->Approved == TRUE && $student->Semister !=1 && $student->Semister !=10 ){
                                        
                                        $vov->Amount = $fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == TRUE){
                                        //$amt = $fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                           $vov->Amount = ($fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100)) + (($fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100))/2). " ";
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == FALSE){
                                        $vov->Amount = $fee->GovAmt + (($fee->GovAmt)/2);
                                    }
                                    else{
                                        $vov->Amount = $fee->GovAmt;
                                    }
                
                                    $vov->Amount = ceil($vov->Amount);
                                    

                                }else{

                                    $vov = new Voucher();
                                    $vov->Date = QDateTime::Now();
                                    $vov->Grp = 6; 
                                    $vov->Dr = $led->Idledger;
                                    $vov->Cr = $fee->Fee;
                                    if($student->Semister == 1 && $fee->CalenderYearObject->Approved == TRUE){
                                        
                                        $vov->Amount = $fee->GovAmt;
                                    }
                                    elseif($fee->CalenderYearObject->Approved == TRUE && $student->Semister !=1 && $student->Semister !=10 ){
                                        
                                        $vov->Amount = $fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == TRUE){
                                        //$amt = $fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100);
                                        
                                           $vov->Amount = ($fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100)) + (($fee->GovAmt + (($fee->GovAmt *($fee->CalenderYearObject->FeePercentage))/100))/2). " ";
                                    }
                                    elseif($student->Semister == 10  && $fee->CalenderYearObject->Approved == FALSE){
                                        $vov->Amount = $fee->GovAmt + (($fee->GovAmt)/2);
                                    }
                                    else{
                                        $vov->Amount = $fee->GovAmt;
                                    }
                
                                    $vov->Amount = ceil($vov->Amount);
                                    $vov->DataBy = $_SESSION['login'];
                                    $vov->AcademicYear = $student->Semister;
                                    $vov->RefStatus = $student->IdcurrentStatus;

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
    
    
    QApplication::DisplayAlert('Settel Successfully');
?>
