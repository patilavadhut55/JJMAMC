<?php
require('../../qcubed.inc.php');
    class PayFees extends QForm {
        protected $txtSearch;
        protected $btnSearch;
        protected $btnSave;
        protected $txtnow;
        protected $txtnowgov;
        protected $caldate;
        protected $lblPaid;
        protected $lblgovPaid;
        protected $lbldelete;
        
        protected $lbldeleteGov;
        
        protected $txtScolarship;
        protected $txtDeposite;
        protected $lblDeldeposite;
        protected $lstYear;
        protected $lstFin;
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
            $this->btnSaveAll->AddAction(new QClickEvent(), new QConfirmAction("Do you Want to Save fees !"));
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

            
              $this->lstFin = new QListBox($this);
            $fins = CalenderYear::LoadAll();
            foreach ($fins as $fin){
                $this->lstFin->AddItem($fin->Name, $fin->IdcalenderYear);
            }
            $this->lstFin->Name = "Financial year";
            $this->lstFin->Visible = FALSE;
            $this->lstFin->AddAction(new QChangeEvent(), new QServerAction('lstFin_Change'));

            
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
            $this->btnSave->ButtonMode = QButtonMode::Primary;
            $this->btnSave->Text = "<i class='fa fa-print'> Print";
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
            $this->lblgovPaid = new QLabel($this);
            
            $this->caldate = new QDateTimePicker($this);
            $this->caldate->Width = 70;
            $this->caldate->Name = "Date"; 
            $this->caldate->DateTime = QDateTime::Now();
            
            if(isset ($_GET['mem'])){
                $del= "";
                $this->btnSaveAll->Visible = TRUE;
                $this->lstYear->Visible = TRUE;
               $this->lstFin->Visible = TRUE;
              
                $this->txtNarration->Visible = FALSE;
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $ledger = Ledger::LoadByIdledger($_GET['mem']);
                $this->txtSearch->Text = $ledger->Code.' '.$ledger->Name;
                
                
                 
                if(isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $_GET['year'];
                }
                
                if(isset($_GET['year'])){
                    $CurrentStatus = CurrentStatus::QueryArray (
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['year']),
                                            QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                        ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));  
                }else{
                    $CurrentStatus = CurrentStatus::QueryArray (
                                                QQ::AndCondition(
                                                 QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),        
                                                        
                                                QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                                        
                                                        
                                            ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));  //LoadArrayByStudent($ledger->Idledger);
                }
                
                if($CurrentStatus){
                    foreach ($CurrentStatus as $CurrentStatu){}
                    $this->lstYear->SelectedValue = $CurrentStatu->Semister;
                     $this->lstFin->SelectedValue = $CurrentStatu->CalenderYear;
               
                $course = Role::LoadByIdrole($CurrentStatu->RoleObject->Parrent);
               
                
              
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
                        
                            $delete = 0;
                            $this->txtnow[$fee->Idvoucher] = new QTextBox($this);
                            $this->txtnow[$fee->Idvoucher]->Width = 100;
                           // $this->txtnow[$fee->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('txtnow_Enter'));
                            $this->txtnow[$fee->Idvoucher]->ActionParameter = $fee->Idvoucher;

                            
                            
                            
                            
                            
                            $this->lbldelete[$fee->Idvoucher] = new QLabel($this);
                            $this->lbldelete[$fee->Idvoucher]->HtmlEntities = FALSE;
                            $this->lbldelete[$fee->Idvoucher]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                            $this->lbldelete[$fee->Idvoucher]->AddAction(new QClickEvent(), new QConfirmAction("Do You Want To Delete(First Delete Subvoucher) "));
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
                                $this->lstFin->SelectedValue = $vov->CalenderYear;
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
                    
                    $gtutions = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Grp,6),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->Student, $CurrentStatu->Student),                                
                                QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                            )
                        );
                    
                    
                    if($gtutions){
                        foreach ($gtutions as $gtution){
                            
                            $this->txtnowgov[$gtution->Idvoucher] = new QTextBox($this);
                            $this->txtnowgov[$gtution->Idvoucher]->Width = 100;
                           // $this->txtnow[$fee->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('txtnow_Enter'));
                            $this->txtnowgov[$gtution->Idvoucher]->ActionParameter = $gtution->Idvoucher;
                            
                            $this->lbldeleteGov[$gtution->Idvoucher] = new QLabel($this);
                            $this->lbldeleteGov[$gtution->Idvoucher]->HtmlEntities = FALSE;
                            $this->lbldeleteGov[$gtution->Idvoucher]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                            $this->lbldeleteGov[$gtution->Idvoucher]->AddAction(new QClickEvent(), new QConfirmAction("Do You Want To Delete(First Delete Subvoucher) "));
                            $this->lbldeleteGov[$gtution->Idvoucher]->AddAction(new QClickEvent(), new QServerAction("lbldels_Click"));
                           
                            $this->lbldeleteGov[$gtution->Idvoucher]->Visible = FALSE;   
                            
                            if(isset($_GET['id'])){                                
                                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                                $vhps = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                            QQ::Equal(QQN::Voucher()->Cr, $gtution->Dr),
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $gtution->Cr),
                                            //QQ::NotEqual(QQN::Voucher()->Cancel,1),
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Idvoucher, $vov->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->Parrent,$vov->Idvoucher)        
                                            )
                                        )
                                    );
                                
                                if($vhps){
                                    foreach ($vhps as $vhp){                                    
                                        $this->txtnowgov[$gtution->Idvoucher]->Text = $vhp->Amount;
                                        $this->lbldeleteGov[$gtution->Idvoucher]->Visible = TRUE;
                                        $this->lbldeleteGov[$gtution->Idvoucher]->ActionParameter = $vhp->Idvoucher;
                                    }
//                                    $this->txtnowgov[$gtution->Idvoucher]->Text = $vhp->Amount;    
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
         protected function lstFin_Change(){
            
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
        protected function btnSaveAll_Click(){
                if(isset($_GET['year'])){
                    $CurrentStatus = CurrentStatus::QueryArray (
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['year']),
                                            QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                                        ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));  
                }else{
                    $CurrentStatus = CurrentStatus::QueryArray (
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                                                QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])        
                                            ),QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister)));  //LoadArrayByStudent($ledger->Idledger);
                }
                
                if($CurrentStatus){
                    foreach ($CurrentStatus as $CurrentStatu){}
                    //student paid
                    $fees = Voucher::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Grp, 6),
                                        QQ::NotEqual(QQN::Voucher()->DrObject->Grp,$_GET['mem']),
                                        QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus)
                                    )
                                );
                    $mainvov = "";
                    $flg = 0;
                    if($fees){                    
                        foreach ($fees as $fee){
                            
                            $currentamt = $this->txtnow[$fee->Idvoucher]->Text;
                            if($currentamt != "" && is_numeric($currentamt) && $currentamt > 0){
                                
                            //check balance
                            $paidamts = Voucher::QuerySingle(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->RefNo, $fee->Idvoucher),
                                            QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus)    
                                        ),
                                        QQ::Clause(
                                            QQ::Sum(QQN::Voucher()->Amount, "paidamt")
                                        )
                                    );
                            $paidamt = 0;
                            $payableamt = 0;                            
                            if($paidamts && $paidamts->GetVirtualAttribute("paidamt")){
                                $paidamt = $paidamts->GetVirtualAttribute("paidamt");
                                $payableamt = $paidamts->RefNoObject->Amount;
                            }else{
                                $payableamt = $fee->Amount;
                            }
                            $balance = $fee->Amount - $paidamt;

                                
                            if(isset($_GET['id'])){
                                $mainvov = Voucher::LoadByIdvoucher($_GET['id']);
                                $mainvov->Narration = $this->txtNarration->Text;
                                $mainvov->Save();
                                $vhp = Voucher::QuerySingle(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Cr),    
                                            QQ::Equal(QQN::Voucher()->Grp, 7),
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Parrent,$mainvov->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->Idvoucher,$mainvov->Idvoucher)
                                            )    
                                        )
                                    );
                                
                                if($vhp){
                                    if($payableamt >= (($paidamt - $vhp->Amount) + $currentamt)/*$currentamt <= $balance && $balance > 0  */){
                                        $vhp->Amount = $this->txtnow[$fee->Idvoucher]->Text;
                                        $vhp->Save();   
                                    }
                                }else{
                                    if($mainvov != ""){
                                        //QApplication::DisplayAlert($payableamt.">=".$paidamt."-0+".$currentamt);
                                        if($currentamt <= $balance && $balance > 0){
                                            $subvov = Voucher::CountByParrent($mainvov->Idvoucher);
                                            $subvov = $subvov + 1;
                                            $vhp = new Voucher();
                                            $vhp->Date = $this->caldate->DateTime;
                                            $vhp->InvNo = $mainvov->InvNo.'['.$subvov.']';
                                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                            $vhp->CalenderYear = $this->lstFin->SelectedValue;
                                            $vhp->Parrent = $mainvov->Idvoucher;
                                            $vhp->Dr = 22; //cash
                                            $vhp->Cr = $_GET['mem'];
                                            $vhp->Grp = 7;
                                            $vhp->RefNo = $fee->Idvoucher;
                                            $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                                            $vhp->Amount = $this->txtnow[$fee->Idvoucher]->Text;
                                            $vhp->DataBy = $_SESSION['login'];
                                            $vhp->ExamFee = 0;
                                            $vhp->Save();
                                        }
                                    }
                                }
                            }else{                                
                                if($flg == 0){                                    
                                    $cnt = Voucher::QueryCount(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Voucher()->Dr,22),
                                                    QQ::Equal(QQN::Voucher()->Parrent,NULL),
                                                    QQ::OrCondition(
                                                        QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, NULL),
                                                        QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat,0)
                                                    )
                                                )
                                            );
                                    //main voucher                            
                                    $vhp = new Voucher();                                
                                    if($currentamt <= $balance && $balance > 0){
//                                        $code = VoucherGrp::LoadByIdvoucherGrp(7);
                                        $calyr = CalenderYear::LoadByIdcalenderYear($this->lstFin->SelectedValue);
                                        $calyr->CounterFr=str_pad($calyr->CounterFr,3, "0",STR_PAD_LEFT);
                                        $vhp->InvNo = $calyr->AbbrivationFr.''.$calyr->CounterFr;
//                                        $vhp->InvNo = $code->Abbrivation.''.$code->Counter;
                                        $calyr->CounterFr = $calyr->CounterFr + 1;
//                                        $code->Counter = $code->Counter + 1;
                                        $calyr->Save();
//                                        $code->Save();

                                        $vhp->Date = $this->caldate->DateTime;
                                        $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                        $vhp->CalenderYear = $this->lstFin->SelectedValue;
                                        $vhp->Parrent = NULL;
                                        $vhp->Dr = 22;
                                        $vhp->Cr = $_GET['mem'];
                                        $vhp->Grp = 7; //fees receipt
                                        $vhp->RefNo = $fee->Idvoucher;
                                        $vhp->Amount = $this->txtnow[$fee->Idvoucher]->Text;
                                        $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                                        $vhp->DataBy = $_SESSION['login'];
                                        $vhp->ExamFee = 0;
                                       
                                        $vhp->Seq = $cnt + 1;
                                        $vhp->Save();                                
                                        $mainvov = $vhp;
                                        $mainvov->Narration = $this->txtNarration->Text;
                                        $mainvov->Save();
                                        $flg = 1;
                                    }                            
                                    
                                    
                                }else{
                                    //sub voucher
                                    if($mainvov != ""){
                                        if($currentamt <= $balance && $balance > 0 ){
                                            $subvov = Voucher::CountByParrent($mainvov->Idvoucher);
                                            $subvov = $subvov + 1;
                                            $vhp = new Voucher();
                                            $vhp->Date = $this->caldate->DateTime;
                                            $vhp->InvNo = $mainvov->InvNo.'['.$subvov.']';
                                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                            $vhp->CalenderYear = $this->lstFin->SelectedValue;
                                            $vhp->Parrent = $mainvov->Idvoucher;
                                            $vhp->Dr = 22; //cash
                                            $vhp->Cr = $_GET['mem'];
                                            $vhp->Grp = 7;
                                            $vhp->RefNo = $fee->Idvoucher;
                                            $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                                            $vhp->Amount = $this->txtnow[$fee->Idvoucher]->Text;
                                            $vhp->DataBy = $_SESSION['login'];
                                            $vhp->ExamFee = 0;
                                            $vhp->Save();
                                        }
                                    }
                                }
                            }
                            }
                        }
                       
                    }
                    
                    //----------------------------------
                    
                    
                    //govt. Paid 
                    $gtutions = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Grp,6),
                                QQ::Equal(QQN::Voucher()->RefStatusObject->Student, $CurrentStatu->Student),                                
                                QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus),
                                QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                            )
                        );
                    
                    
                    if($gtutions){
                        foreach ($gtutions as $gtution){
                            $currentamt = $this->txtnowgov[$gtution->Idvoucher]->Text;
                            
                            if($currentamt != "" && is_numeric($currentamt) && $currentamt > 0){
                                //check balance
                                $paidamts = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->RefNo, $gtution->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->RefStatus, $CurrentStatu->IdcurrentStatus)    
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount, "paidamt")
                                            )
                                        );
                                $paidamt = 0;
                                $payableamt = 0;                            
                                if($paidamts && $paidamts->GetVirtualAttribute("paidamt")){
                                    $paidamt = $paidamts->GetVirtualAttribute("paidamt");
                                    $payableamt = $paidamts->RefNoObject->Amount;
                                }else{
                                    $payableamt = $gtution->Amount;
                                }
                                $balance = $gtution->Amount - $paidamt;
                                
                            if(isset($_GET['id'])){
                                $mainvov = Voucher::LoadByIdvoucher($_GET['id']);
                                $mainvov->Narration = $this->txtNarration->Text;
                                $mainvov->Save();
                                
                                
                                $vhps = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Cr, $gtution->Dr),                                                
                                            QQ::Equal(QQN::Voucher()->RefNo, $gtution->Idvoucher),
                                            QQ::Equal(QQN::Voucher()->Grp, 7),
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Idvoucher, $mainvov->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->Parrent, $mainvov->Idvoucher)
                                            )   
                                        )
                                    );
                                
                                if($vhps){
                                    
                                    foreach ($vhps as $vhp){}
                                    if($payableamt >= (($paidamt - $vhp->Amount) + $currentamt)/*$currentamt <= $balance && $balance > 0  */){
                                        $vhp->Amount = $this->txtnowgov[$gtution->Idvoucher]->Text;
                                        $vhp->Save();   
                                    }                                   
                                }else{
                                    
                                    if($mainvov != ""){
                                        if($currentamt <= $balance && $balance > 0){
                                            $subvov = Voucher::CountByParrent($mainvov->Idvoucher);
                                            $subvov = $subvov + 1;
                                            $vhp = new Voucher();
                                            $vhp->Date = $this->caldate->DateTime;
                                            $vhp->InvNo = $mainvov->InvNo.'['.$subvov.']';
                                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                            $vhp->CalenderYear = $this->lstFin->SelectedValue;
                                            $vhp->Parrent = $mainvov->Idvoucher;
//                                          $vhp->Parrent = NULL;
                                            $vhp->Dr = 22; //cash
                                            $vhp->Cr = $gtution->Dr;//id scholarship
                                            $vhp->Grp = 7;
                                            $vhp->RefNo = $gtution->Idvoucher;
                                            $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                                            $vhp->Amount = $this->txtnowgov[$gtution->Idvoucher]->Text;
                                            $vhp->DataBy = $_SESSION['login'];
                                            $vhp->ExamFee = 0;
                                            $vhp->Save();
                                        }
                                    }else{
                                        //QApplication::DisplayAlert($payableamt.">=".$paidamt."-0+".$currentamt);
                                    }
                                }
                            }else{                                
                                if($flg == 0){                                    
                                    $cnt = Voucher::QueryCount(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Voucher()->Dr,22),
                                                    QQ::Equal(QQN::Voucher()->Parrent,NULL),
                                                    QQ::OrCondition(
                                                        QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, NULL),
                                                        QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat,0)
                                                    )
                                                )
                                            );
                                    //main voucher                            
                                    $vhp = new Voucher();                                
                                    if($currentamt <= $balance && $balance > 0){
                                        $calyr = CalenderYear::LoadByIdcalenderYear($this->lstFin->SelectedValue);
                                        $calyr->CounterFr=str_pad($calyr->CounterFr,3, "0",STR_PAD_LEFT);
                                        $vhp->InvNo = $calyr->AbbrivationFr.''.$calyr->CounterFr;
                                        $calyr->CounterFr = $calyr->CounterFr + 1;
                                        $calyr->Save();

                                        $vhp->Date = $this->caldate->DateTime;
                                        $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                        $vhp->CalenderYear = $this->lstFin->SelectedValue;
                                        $vhp->Parrent = NULL;
                                        $vhp->Dr = 22;
                                        $vhp->Cr = $gtution->Dr;//id scholarship
                                        $vhp->Grp = 7; //fees receipt
                                        $vhp->RefNo = $gtution->Idvoucher;
                                        $vhp->Amount = $this->txtnowgov[$gtution->Idvoucher]->Text;
                                        $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                                        $vhp->DataBy = $_SESSION['login'];
                                        $vhp->ExamFee = 0;
                                       
                                        $vhp->Seq = $cnt + 1;
                                        $vhp->Save();                                
                                        $mainvov = $vhp;
                                        $mainvov->Narration = $this->txtNarration->Text;
                                        $mainvov->Save();
                                        $flg = 1;
                                    }
                                }else{
                                    //sub voucher
                                    if($mainvov != ""){
                                        if($currentamt <= $balance && $balance > 0 ){
                                            $subvov = Voucher::CountByParrent($mainvov->Idvoucher);
                                            $subvov = $subvov + 1;
                                            $vhp = new Voucher();
                                            $vhp->Date = $this->caldate->DateTime;
                                            $vhp->InvNo = $mainvov->InvNo.'['.$subvov.']';
                                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                                            $vhp->CalenderYear = $this->lstFin->SelectedValue;
                                            $vhp->Parrent = $mainvov->Idvoucher;
                                            $vhp->Dr = 22; //cash
                                            $vhp->Cr = $gtution->Dr;
                                            $vhp->Grp = 7;
                                            $vhp->RefNo = $gtution->Idvoucher;
                                            $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                                            $vhp->Amount = $this->txtnowgov[$gtution->Idvoucher]->Text;
                                            $vhp->DataBy = $_SESSION['login'];
                                            $vhp->ExamFee = 0;
                                            $vhp->Save();
                                        }
                                    }
                                }
                            }
                                
                                
                                
                                
                            }   
                        }   
                        
                    }
                    //---------------------------------------
                    if($mainvov != ""){
                        $vov = Voucher::LoadByIdvoucher($mainvov->Idvoucher);
                        $vous = Voucher::QueryArray(
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $mainvov->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Parrent, $mainvov->Idvoucher)
                                    )
                                );

                        foreach ($vous as $vou){
                            $vou->Date = $this->caldate->DateTime;
                            $vou->PaymentMode = $this->lstPaymentMode->SelectedValue;
                            $vou->Narration = $this->txtNarration->Text;
                            $vou->Save();
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$mainvov->Idvoucher.'&year='.$_GET['year']);   
                    }
                }
             
        }
        
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
                $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger,  QQ::OrderBy(QQN::CurrentStatus()->Semister));
                if($currents){
                    foreach ($currents as $current){}
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$mem->Idledger. '&year='.$current->Semister);                     
                }else{
                    QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                }
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
//            $vov = Voucher::LoadByIdvoucher($_GET['id']);
//            $vous = Voucher::QueryArray(
//                        QQ::OrCondition(
//                            QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
//                            QQ::Equal(QQN::Voucher()->Parrent, $_GET['id'])
//                        )
//                    );
//
//            foreach ($vous as $vou){
//                $vou->Date = $this->caldate->DateTime;
//                $vou->PaymentMode = $this->lstPaymentMode->SelectedValue;
//                $vou->Narration = $this->txtNarration->Text;
//                $vou->Save();
//            }
         
            $gtutions = Voucher::QueryArray(
                     QQ::AndCondition(
                                QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244),
//                            QQ::NotEqual(QQN::Voucher()->CrObject->Grp, 244)
                                QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id'])
                        )
                    );
            if($gtutions){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/govt_receipt.php?id='.$_GET['id'].'&mem='.$_GET['mem']);                         
            }  
            else {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/miscellaneous_receipt.php?id='.$_GET['id'].'&mem='.$_GET['mem']);
            }
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
                        $payvov->CalenderYear= $this->lstFin->SelectedValue;
                       
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
