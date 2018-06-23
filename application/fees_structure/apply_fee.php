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
        protected $txtDeposite;
        protected $lblDeldeposite;
        protected $lstYear;
        
        protected $chkApproved;
        protected $btnApproved;
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

            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));

            //save button declaration
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
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
                
                $course = Role::LoadByIdrole($CurrentStatu->RoleObject->ParrentObject->Parrent);
                
                if(!isset($_GET['id']) && !isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $CurrentStatu->SemisterObject->Parrent;
                }elseif(isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $_GET['year'];
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
                        
                        $this->txtnow[$fee->IdfeesTemplet] = new QTextBox($this);
                        $this->txtnow[$fee->IdfeesTemplet]->Width = 100;
                        $this->txtnow[$fee->IdfeesTemplet]->AddAction(new QEnterKeyEvent(), new QServerAction('txtnow_Enter'));
                        $this->txtnow[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;

                        $this->lbldelete[$fee->IdfeesTemplet] = new QLabel($this);
                        $this->lbldelete[$fee->IdfeesTemplet]->HtmlEntities = FALSE;
                        $this->lbldelete[$fee->IdfeesTemplet]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                        $this->lbldelete[$fee->IdfeesTemplet]->AddAction(new QClickEvent(), new QServerAction("lbldels_Click"));
                        $this->lbldelete[$fee->IdfeesTemplet]->Visible = FALSE;    
                        
                        if(isset($_GET['id'])){
                            $this->btnSave->Visible = TRUE;    
                            $vov = Voucher::LoadByIdvoucher($_GET['id']);
                            $this->caldate->DateTime = $vov->Date;
                            $this->lstYear->SelectedValue = $vov->AcademicYear;

                            $vhps = Voucher::QueryArray(
                                    QQ::AndCondition(                                    
                                        QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                        QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),    
                                        QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fee->Fee),     
                                        QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                        )
                                   ));

                            if($vhps){
                                foreach ($vhps as $vhp){}
                                    $this->lbldelete[$fee->IdfeesTemplet]->Visible = TRUE;
                                    $this->lbldelete[$fee->IdfeesTemplet]->ActionParameter = $vhp->Idvoucher;
                                    $this->txtnow[$fee->IdfeesTemplet]->Text = $vhp->Amount;
                                
                            }
                        }
                    }    
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
            }
            $this->Refresh();
        }
        protected function txtnow_Enter($strFormId, $strControlId, $strParameter){
            if($this->txtnow[$strParameter]->Text != ""){
               $currents = CurrentStatus::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                           QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstYear->SelectedValue)        
                        ));
                foreach ($currents as $current){}
                $fees = Fees::LoadByIdfeesTemplet($strParameter);
                
                if(isset($_GET['id'])){
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
                    $vhps = Voucher::QueryArray(
                            QQ::AndCondition(                                    
                                QQ::Equal(QQN::Voucher()->Dr, 22), //cash
                                QQ::Equal(QQN::Voucher()->Cr, $_GET['mem']),    
                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr, $fees->Fee),     
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                    QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)        
                                )
                           ));

                    if(!$vhps){
                        //check ref voucher 
                        $refvov =  Voucher::QueryArray(
                                    QQ::AndCondition(                                    
                                        QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']), 
                                        QQ::Equal(QQN::Voucher()->Cr, $fees->Fee),
                                        QQ::Equal(QQN::Voucher()->Parrent, $vov->RefNo),    
                                        QQ::Equal(QQN::Voucher()->Grp, 6)
                                   ));
                        if($refvov){
                            foreach($refvov as $ref){}

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
                            $vhp->Save();
                            $subvov = $subvov + 1;
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&sub='.$subvov);
                        }
                    }else{
                        foreach($vhps as $vhp){}
                        $vhp->Amount = $this->txtnow[$strParameter]->Text;
                        $vhp->Save();
                        $this->Refresh();
                    }

                }else{
                    //check ref voucher 
                    $refvov =  Voucher::QueryArray(
                                QQ::AndCondition(                                    
                                    QQ::Equal(QQN::Voucher()->Dr, $_GET['mem']), 
                                    QQ::Equal(QQN::Voucher()->Cr, $fees->Fee),
                                    QQ::Equal(QQN::Voucher()->Grp, 6)
                               ));
                    if($refvov){
                        foreach($refvov as $ref){}

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
                        $vhp->Save();
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
                                  QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstYear->SelectedValue),
                                  QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])        
                                           ));   
                if($CurrentStatus){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&year='.$this->lstYear->SelectedValue); 
                }else{
                    QApplication::DisplayAlert("No Status for this student of year ".$this->lstYear->SelectedName.' Add from admission module or contact administrative person');
                }

            }elseif(isset($_GET['mem']) && isset($_GET['id'])){
              $CurrentStatus = CurrentStatus::QueryArray (
                              QQ::AndCondition(
                              QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstYear->SelectedValue),
                              QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])        
                                       ));   
                if($CurrentStatus){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&year='.$this->lstYear->SelectedValue); 
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
                        $result[] = $objMember->Code.' '.get_full_name($objMember->Name);
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
        protected function btnSave_click($strFormId, $strControlId, $strParameter) {
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            if(isset($_GET['view'])){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/fee_receipt.php?id='.$_GET['id'].'&view=1'); 
            }else{    
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/challan_print.php?mem='.$_GET['mem'].'&id='.$_GET['id']); 
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
                $chkpayvov = Voucher::QueryArray(
                        QQ::AndCondition(                                    
                            QQ::Equal(QQN::Voucher()->Cr, $led->Idledger), 
                            QQ::Equal(QQN::Voucher()->Dr, 22),
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
                    $payvov->Dr = 22; //student personal deposite
                    $payvov->Grp = 7; //personal deposite receipt
                    $payvov->RefNo = NULL;
                    $payvov->Amount = $this->txtDeposite->Text;
                    $payvov->RefStatus = $current->IdcurrentStatus;
                    $payvov->DataBy = $_SESSION['login'];
                    $payvov->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/pay_fees.php?mem='.$_GET['mem'].'&id='.$_GET['id'].'&sub='.$subvov);
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
