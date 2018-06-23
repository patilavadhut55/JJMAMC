<?php
require('../../qcubed.inc.php');
    class PayFees extends QForm {
        protected $txtSearch;
        protected $btnSearch;
        protected $btnSave;
        protected $txtnow;
        protected $caldate;
        protected $lblPaid;
        protected $lbldelete;
        protected $txtScolarship;
        protected $txtDeposite;
        protected $lblDeldeposite;
        protected $lstYear;
        protected $btnScolarship;
        protected $btnSaveAll;
        protected $chkApproved;
        protected $btnApproved;
        protected $lstPaymentMode;        
        protected $txtNarration;
        protected function Form_Run() {
                parent::Form_Run();
           QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->chkApproved = new QCheckBox($this);
            
            $this->btnApproved = new QButton($this);
            $this->btnApproved->ButtonMode = QButtonMode::Success;
            $this->btnApproved->Text ="Approved";
            $this->btnApproved->AddAction(new QClickEvent(), new QServerAction('btnApproved_click'));
            
            $this->btnSaveAll = new QButton($this);
            $this->btnSaveAll->ButtonMode = QButtonMode::Save;
            $this->btnSaveAll->AddAction(new QClickEvent(), new QServerAction('btnSaveAll_Click'));
           
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
            $this->lstYear->AddAction(new QChangeEvent(), new QAjaxAction('lstYear_Change'));

            $this->lstPaymentMode = new QSelect2ListBox($this);
            $this->lstPaymentMode->Name = "Payment Mode";
            $payments = PaymentMode::LoadAll();
            $this->lstPaymentMode->AddItem("-Payment Mode-",NULL);
            foreach ($payments as $payment){
                $this->lstPaymentMode->AddItem($payment->Name,$payment->IdpaymentMode);
            }
            $this->lstPaymentMode->AddAction(new QClickEvent(), new QServerAction('lstPaymentMode_Click'));
            
            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));

            $this->txtNarration = new QTextBox($this);
            $this->txtNarration->TextMode = QTextMode::MultiLine;
            
            //save button declaration
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
            $this->btnSave->Visible = FALSE;
            
            //delete button declaration
            $this->txtDeposite = new QTextBox($this);
            $this->txtDeposite->Width = 100;
            $this->txtDeposite->AddAction(new QEnterKeyEvent(), new QServerAction('txtDeposite_click'));
            
            $this->txtScolarship = new QTextBox($this);
            $this->txtScolarship->Width = 100;
            
            $this->btnScolarship = new QButton($this);
            $this->btnScolarship->ButtonMode = QButtonMode::Save;
            $this->btnScolarship->AddAction(new QClickEvent(), new QServerAction('btnScolarship_click'));
            
            $this->lblDeldeposite = new QLabel($this);
            $this->lblDeldeposite->HtmlEntities = FALSE;
            $this->lblDeldeposite->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
            $this->lblDeldeposite->AddAction(new QClickEvent(), new QServerAction("lblDeldeposite_Click"));
            
            $this->lblPaid = new QLabel($this);

            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            if(isset ($_GET['mem'])){
                
                $this->btnSaveAll->Visible = TRUE;
                $this->lstYear->Visible = TRUE;
                $this->txtNarration->Visible = FALSE;
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $ledger = Ledger::LoadByIdledger($_GET['mem']);
                $this->txtSearch->Text = $ledger->Code.' '.$ledger->Name;
               
                if(isset($_GET['year'])){
                    $CurrentStatus = CurrentStatus::QueryArray (
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['year']),
                                            QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                        ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));  
                }else{
                    $CurrentStatus = CurrentStatus::QueryArray (
                                                QQ::AndCondition(
                                                QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                            ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));  //LoadArrayByStudent($ledger->Idledger);
                }
                
                if($CurrentStatus){
                    foreach ($CurrentStatus as $CurrentStatu){}
                
                $course = Role::LoadByIdrole($CurrentStatu->RoleObject->Parrent);
                
                if(!isset($_GET['id']) && !isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $CurrentStatu->Semister;
                }elseif(isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $_GET['year'];
                }
                
              
                  $fees = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Grp, 6),
                                QQ::NotEqual(QQN::Voucher()->DrObject->Grp,$_GET['mem']),
                                QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus)
                            )
                        );
                    if($fees){
                    
                        $this->txtnow = array();
                        foreach ($fees as $fee){
                        
                            $this->txtnow[$fee->Idvoucher] = new QTextBox($this);
                            $this->txtnow[$fee->Idvoucher]->Width = 100;
                           // $this->txtnow[$fee->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('txtnow_Enter'));
                            $this->txtnow[$fee->Idvoucher]->ActionParameter = $fee->Idvoucher;

                            $this->lbldelete[$fee->Idvoucher] = new QLabel($this);
                            $this->lbldelete[$fee->Idvoucher]->HtmlEntities = FALSE;
                            $this->lbldelete[$fee->Idvoucher]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                            $this->lbldelete[$fee->Idvoucher]->AddAction(new QClickEvent(), new QServerAction("lbldels_Click"));
                            $this->lbldelete[$fee->Idvoucher]->Visible = FALSE;    

                            if(isset($_GET['id'])){
                                $this->btnSave->Visible = TRUE;
                                $this->txtNarration->Visible = TRUE;
                                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                                $this->lstPaymentMode->SelectedValue = $vov->PaymentMode;
                                $this->txtNarration->Text = $vov->Narration;

                                $this->caldate->DateTime = $vov->Date;
                                $this->lstYear->SelectedValue = $vov->AcademicYear;

                                $vhps = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                            QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Cr),
                                            //QQ::NotEqual(QQN::Voucher()->Cancel,1),
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                            )
                                        )
                                    );

                                if($vhps){
                                    foreach ($vhps as $vhp){}
                                    $this->lbldelete[$fee->Idvoucher]->Visible = TRUE;
                                    $this->lbldelete[$fee->Idvoucher]->ActionParameter = $vhp->Idvoucher;
                                    $this->txtnow[$fee->Idvoucher]->Text = $vhp->Amount;                                
                                }

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
        }
        protected function btnScolarship_click(){
            if(isset($_GET['id']) && isset($_GET['mem']) && $_SESSION['login'] == 1){
                $sclvovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue),
                                            QQ::Equal(QQN::Voucher()->DrObject->Grp,$_GET['mem']),
                                            QQ::Equal(QQN::Voucher()->Cr,5455)     
                                        )
                                    );
                if($sclvovs){
                    foreach ($sclvovs as $sclvov){}
                    $sclvov->Amount = $this->txtScolarship->Text ;
                    $sclvov->Save();
                }
            }
        }
        
        protected function lbldels_Click($strFormId, $strControlId, $strParameter){
            $vov = Voucher::LoadByIdvoucher($strParameter);            
                $refvov = Voucher::LoadArrayByParrent($vov->Idvoucher);
                if($refvov){
                    QApplication::DisplayAlert('You cannot delete this voucher...');
                }else{
                    $vov->Delete();
                    //late fee delete payable also
                    if($vov->RefNoObject->Cr == 6216){
                        $late = Voucher::LoadByIdvoucher($vov->RefNo);
                        if($late){
                            $late->Delete();
                        }                        
                    }
                }
                if($vov->Parrent == NULL){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem']);
                }else{
                    $this->Refresh();
                }
            
        }
        protected function btnSaveAll_Click($strFormId, $strControlId, $strParameter){
            if($this->txtnow[$strParameter]->Text != ""){
               $currents = CurrentStatus::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                           QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue)        
                        ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));
                foreach ($currents as $current){}
                $fee = Voucher::LoadByIdvoucher($strParameter);
                
                if(isset($_GET['id'])){
                    $vov = Voucher::LoadByIdvoucher($_GET['id']);
                    $vov->AcademicYear =  $this->lstYear->SelectedValue;
                    if(isset($_GET['sub'])){
                        $subvov = $_GET['sub']; 
                    }else{
                        $subvoucher = Voucher::LoadArrayByParrent($vov->Idvoucher);
                        if($subvoucher){
                            foreach($subvoucher as $sub){}
                            $subvov = get_string_between($sub->InvNo, '[', ']');
                            $subvov = $subvov + 1;
                        }else{
                            $subvov = 1;
                        }
                    }
                    $vhps = Voucher::QueryArray(
                            QQ::AndCondition(                                    
                                QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),   
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                    QQ::Equal(QQN::Voucher()->Cancel,0)
                                ),
                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Cr),     
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                    QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                )
                           ));

                    if(!$vhps){
                        $refvov =  Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                            QQ::Equal(QQN::Voucher()->Cancel,0)
                                        ),
                                        QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']), 
                                        QQ::Equal(QQN::Voucher()->Cr, $fee->Cr),                                        
                                        QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus),
                                        QQ::Equal(QQN::Voucher()->Grp, 6)
                                        )
                                    );
                        if($refvov){
                            
                            foreach($refvov as $ref){}
                            if($this->txtnow[$strParameter]->Text <= $ref->Amount){
                                $vhp = new Voucher();
                                $vhp->Date = $this->caldate->DateTime;
                                $vhp->InvNo = $vov->InvNo.'['.$subvov.']';
                                $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                $vhp->Parrent = $vov->Idvoucher;
                                $vhp->Dr = 22; //cash
                                $vhp->Cr = $_GET['mem'];
                                $vhp->Grp = 7;
                                $vhp->RefNo = $ref->Idvoucher;
                                $vhp->RefStatus = $current->IdcurrentStatus;
                                $vhp->Amount = $this->txtnow[$strParameter]->Text;
                                $vhp->DataBy = $_SESSION['login'];
                                $vhp->ExamFee = 0;
                                $vhp->Save();
                                $subvov = $subvov + 1;
                                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&sub='.$subvov);
                            }else{
                                
                                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id']);
                            }
                            
                        }else{
                            //QApplication::DisplayAlert("hello".$fees->FeeObject);
                        }
                    }else{                        
                        foreach($vhps as $vhp){}
                        if($this->txtnow[$strParameter]->Text <= $vhp->RefNoObject->Amount){
                            $vhp->Amount = $this->txtnow[$strParameter]->Text;
                            $vhp->Save();
                            $this->Refresh();
                        }else{
                            
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id']);
                        }
                    }

                }else{
                    //check ref voucher 
                    $refvov =  Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']),
                                    QQ::Equal(QQN::Voucher()->Cr, $fee->Cr),
                                    QQ::Equal(QQN::Voucher()->Grp, 6),
                                    QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus)
                               ));
                    if($refvov){
                        foreach($refvov as $ref){}
                        if($this->txtnow[$strParameter]->Text <= $ref->Amount){
                            $vhp = new Voucher();
                            $code = VoucherGrp::LoadByIdvoucherGrp(7);
                            $vhp->InvNo = $code->Abbrivation.''.$code->Counter;
                            $code->Counter = $code->Counter + 1;
                            $code->Save();
                            $vhp->Date = $this->caldate->DateTime;
                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                            $vhp->Parrent = NULL;
                            $vhp->Dr = 22;
                            $vhp->Cr = $_GET['mem'];
                            $vhp->Grp = 7; //fees receipt
                            $vhp->RefNo = $ref->Idvoucher;
                            $vhp->Amount = $this->txtnow[$strParameter]->Text;
                            $vhp->RefStatus = $current->IdcurrentStatus;
                            $vhp->DataBy = $_SESSION['login'];
                            $vhp->ExamFee = 0;
                            $vhp->Save();
                            //QApplication::DisplayAlert("if ".$ref->Amount);
                        }else{
                            //QApplication::DisplayAlert("else ".$ref->Amount);
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem']);
                        }
                    }else{
                        //QApplication::DisplayAlert("else2");
                    }    
                    
                    if(isset($_GET['year'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vhp->Idvoucher.'&year='.$_GET['year']);
                    }elseif(isset($_GET['view'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vhp->Idvoucher.'&view=1');
                    }else{
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vhp->Idvoucher);
                    }
                }
                QApplication::DisplayAlert('Do You Want To Save Fee');
            }else{
                QApplication::DisplayAlert('Please Enter amount....'.$strParameter);
            }
            
        }

       /* protected function txtnow_Enter($strFormId, $strControlId, $strParameter){
            if($this->txtnow[$strParameter]->Text != ""){
               $currents = CurrentStatus::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                           QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue)        
                        ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));
                foreach ($currents as $current){}
                $fee = Voucher::LoadByIdvoucher($strParameter);
                
                if(isset($_GET['id'])){
                    
                    $vov = Voucher::LoadByIdvoucher($_GET['id']);
                    $vov->AcademicYear =  $this->lstYear->SelectedValue;
                    if(isset($_GET['sub'])){
                        $subvov = $_GET['sub']; 
                    }else{
                        $subvoucher = Voucher::LoadArrayByParrent($vov->Idvoucher);
                        if($subvoucher){
                            foreach($subvoucher as $sub){}
                            $subvov = get_string_between($sub->InvNo, '[', ']');
                            $subvov = $subvov + 1;
                        }else{
                            $subvov = 1;
                        }
                    }
                    $vhps = Voucher::QueryArray(
                            QQ::AndCondition(                                    
                                QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),   
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                    QQ::Equal(QQN::Voucher()->Cancel,0)
                                ),
                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Cr),     
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                    QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                )
                           ));

                    if(!$vhps){
                      //  QApplication::DisplayAlert("hello".$fees->FeeObject.' '.$vov->Idvoucher);
                        //check ref voucher 
                        /*if($fees->Fee != 5456){
                            $refvov =  Voucher::QueryArray(
                                    QQ::AndCondition(                                    
                                        QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']), 
                                        QQ::Equal(QQN::Voucher()->Cr, $fees->Fee),
                                        QQ::Equal(QQN::Voucher()->Parrent, $vov->RefNo),    
                                        QQ::Equal(QQN::Voucher()->Grp, 6)
                                   ));*/
                        //}else{
              /*              $refvov =  Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->Cancel,NULL),
                                            QQ::Equal(QQN::Voucher()->Cancel,0)
                                        ),
                                        QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']), 
                                        QQ::Equal(QQN::Voucher()->Cr, $fee->Cr),                                        
                                        QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus),
                                        QQ::Equal(QQN::Voucher()->Grp, 6)
                                        )
                                    );
                        //}
                           
                        if($refvov){
                            
                            foreach($refvov as $ref){}
                            if($this->txtnow[$strParameter]->Text <= $ref->Amount){
                                $vhp = new Voucher();
                                $vhp->Date = $this->caldate->DateTime;
                                $vhp->InvNo = $vov->InvNo.'['.$subvov.']';
                                $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                $vhp->Parrent = $vov->Idvoucher;
                                $vhp->Dr = 22; //cash
                                $vhp->Cr = $_GET['mem'];
                                $vhp->Grp = 7;
                                $vhp->RefNo = $ref->Idvoucher;
                                $vhp->RefStatus = $current->IdcurrentStatus;
                                $vhp->Amount = $this->txtnow[$strParameter]->Text;
                                $vhp->DataBy = $_SESSION['login'];
                                $vhp->ExamFee = 0;
                                $vhp->Save();
                                $subvov = $subvov + 1;
                                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&sub='.$subvov);
                            }else{
                                
                                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id']);
                            }
                            
                        }else{
                            //QApplication::DisplayAlert("hello".$fees->FeeObject);
                        }
                    }else{                        
                        foreach($vhps as $vhp){}
                        if($this->txtnow[$strParameter]->Text <= $vhp->RefNoObject->Amount){
                            $vhp->Amount = $this->txtnow[$strParameter]->Text;
                            $vhp->Save();
                            $this->Refresh();
                        }else{
                            
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id']);
                        }
                    }

                }else{
                    //check ref voucher 
                    $refvov =  Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']),
                                    QQ::Equal(QQN::Voucher()->Cr, $fee->Cr),
                                    QQ::Equal(QQN::Voucher()->Grp, 6),
                                    QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus)
                               ));
                    if($refvov){
                        foreach($refvov as $ref){}
                        if($this->txtnow[$strParameter]->Text <= $ref->Amount){
                            $vhp = new Voucher();
                            $code = VoucherGrp::LoadByIdvoucherGrp(7);
                            $vhp->InvNo = $code->Abbrivation.''.$code->Counter;
                            $code->Counter = $code->Counter + 1;
                            $code->Save();
                            $vhp->Date = $this->caldate->DateTime;
                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                            $vhp->Parrent = NULL;
                            $vhp->Dr = 22;
                            $vhp->Cr = $_GET['mem'];
                            $vhp->Grp = 7; //fees receipt
                            $vhp->RefNo = $ref->Idvoucher;
                            $vhp->Amount = $this->txtnow[$strParameter]->Text;
                            $vhp->RefStatus = $current->IdcurrentStatus;
                            $vhp->DataBy = $_SESSION['login'];
                            $vhp->ExamFee = 0;
                            $vhp->Save();
                            //QApplication::DisplayAlert("if ".$ref->Amount);
                        }else{
                            //QApplication::DisplayAlert("else ".$ref->Amount);
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem']);
                        }
                    }else{
                        //QApplication::DisplayAlert("else2");
                    }    
                    
                    if(isset($_GET['year'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vhp->Idvoucher.'&year='.$_GET['year']);
                    }elseif(isset($_GET['view'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vhp->Idvoucher.'&view=1');
                    }else{
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$vhp->Idvoucher);
                    }
                }
            }else{
                QApplication::DisplayAlert('Please Enter amount....'.$strParameter);
            }
        }
               */
               
        protected function Refresh(){
            if(isset($_GET['year'])){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&year='.$_GET['year']);
            }elseif(isset($_GET['sub'])){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&sub='.$_GET['sub']);
            }else{      
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id']);  
            }
        }
        
        protected function lstYear_Change(){
            if(isset($_GET['mem']) && !isset($_GET['id'])){
                $CurrentStatus = CurrentStatus::QueryArray (
                                  QQ::AndCondition(
                                  QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                                  QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])        
                                           ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));   
                if($CurrentStatus){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&year='.$this->lstYear->SelectedValue); 
                }else{
                    QApplication::DisplayAlert("No Status for this student of year ".$this->lstYear->SelectedName.' Add from admission module or contact administrative person');
                }

            }elseif(isset($_GET['mem']) && isset($_GET['id'])){
              $CurrentStatus = CurrentStatus::QueryArray (
                              QQ::AndCondition(
                              QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                              QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])        
                                       ));   
                if($CurrentStatus){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&year='.$this->lstYear->SelectedValue); 
                }else{
                    QApplication::DisplayAlert("No Status for this student of year ".$this->lstYear->SelectedName.' Add from admission module or contact administrative person');
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
                        $result[] = $objMember->Code.' '.  GetFullNameNew($objMember->Name,$objMember->Code);
                }
                return $result;
        }
        protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
                $text= $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);
                $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                if($currents)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$mem->Idledger); 
                else
                    QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
        }
        protected function lstPaymentMode_Click(){
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            $vous = Voucher::QueryArray(
                        QQ::OrCondition(
                            QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                            QQ::Equal(QQN::Voucher()->Parrent, $_GET['id'])
                        )
                    );

            foreach ($vous as $vou){
                $vou->Date = $this->caldate->DateTime;
                $vou->PaymentMode = $this->lstPaymentMode->SelectedValue;
                $vou->Save();
            }
        }
        protected function btnSave_click($strFormId, $strControlId, $strParameter) {
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            $vous = Voucher::QueryArray(
                        QQ::OrCondition(
                            QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                            QQ::Equal(QQN::Voucher()->Parrent, $_GET['id'])
                        )
                    );

            foreach ($vous as $vou){
                $vou->Date = $this->caldate->DateTime;
                $vou->PaymentMode = $this->lstPaymentMode->SelectedValue;
                $vou->Narration = $this->txtNarration->Text;
                $vou->Save();
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/miscellaneous_receipt.php?id='.$_GET['id'].'&mem='.$_GET['mem']);                         
        }
        protected function txtDeposite_click(){
           if(isset($_GET['id'])){
               $currents = CurrentStatus::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                           QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstYear->SelectedValue)        
                        ));
                foreach ($currents as $current){}
                
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                $vov->AcademicYear = $this->lstYear->SelectedValue;
                if(isset($_GET['sub'])){
                    $subvov = $_GET['sub']; 
                }else{
                    $subvoucher = Voucher::LoadArrayByParrent($vov->Idvoucher);
                    if($subvoucher){
                        foreach($subvoucher as $sub){}
                        $subvov = get_string_between($sub->InvNo, '[', ']');
                        $subvov = $subvov + 1;
                    }else{
                        $subvov = 1;
                    }
                }
                
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
                
                //check voucher for personal deposite
                $depvovs = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                                QQ::Equal(QQN::Voucher()->CrObject->Grp,$_GET['mem'])    
                            )
                        );

                if($depvovs){
                    //for return deposite
                    foreach ($depvovs as $depvov){}
                    $depvov->Amount = $this->txtDeposite->Text;
                    $depvov->Save();                    
                    $this->Refresh();
                }else{
                    //regular process
                    $chkpayvov = Voucher::QueryArray(
                            QQ::AndCondition(                                    
                                QQ::Equal(QQN::Voucher()->Cr, $led->Idledger), 
                                QQ::Equal(QQN::Voucher()->Dr, 22),
                                QQ::NotEqual(QQN::Voucher()->Cancel,1),
                                QQ::Equal(QQN::Voucher()->Grp, 7),
                                QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher)    
                           ));
                    if($chkpayvov){
                        foreach($chkpayvov as $payvov){}
                            $payvov->Amount = $this->txtDeposite->Text;
                            $payvov->Save();
                            $this->Refresh();
                    }else{
                        // personal deposit
                        $payvov = new  Voucher();
                        $payvov->InvNo = $vov->InvNo.'['.$subvov.']';
                        $payvov->Date = $this->caldate->DateTime;
                        $payvov->AcademicYear = $this->lstYear->SelectedValue;
                        $payvov->Parrent = $vov->Idvoucher;
                        $payvov->Cr = $led->Idledger;
                        $payvov->Dr = 22; 
                        $payvov->Grp = 7; 
                        $payvov->RefNo = NULL;
                        $payvov->Amount = $this->txtDeposite->Text;
                        $payvov->RefStatus = $current->IdcurrentStatus;
                        $payvov->DataBy = $_SESSION['login'];
                        $payvov->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&sub='.$subvov);
                    }
                }
            }
        }
        protected function lblDeldeposite_Click(){
                $currentdeposite = Voucher::QueryArray(
                            QQ::AndCondition(                                                                              
                                QQ::Equal(QQN::Voucher()->Dr, 22),//personal depositr     
                                QQ::Equal(QQN::Voucher()->CrObject->Grp, $_GET['mem']),                                  
                                QQ::Equal(QQN::Voucher()->Parrent, $_GET['id']),    
                                QQ::Equal(QQN::Voucher()->AcademicYear, $this->lstYear->SelectedValue)
                            ));
                if($currentdeposite){
                   foreach($currentdeposite as $currentdep){}
                   $currentdep->Delete();
                }  
                $this->Refresh();
        }
        
    }
    
    PayFees::Run('PayFees');
?>
