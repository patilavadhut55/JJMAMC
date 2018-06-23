<?php

require('../../qcubed.inc.php');

class PersonalDiposite extends QForm {

    protected $txtSearch;
    protected $btnSearch;
    protected $btnAdd;
    protected $lstAmount;
    protected $caldate;
    protected $lblPaid;
    protected $lbldelete;
    protected $txtAmount;
    protected $lblDeldeposite;
    protected $lstPaymentMode;
    protected $lstYear;
    protected $lstFin;
    protected $btnPrint;
    protected $btnSave;

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

        
              $this->lstFin = new QListBox($this);
            $fins = CalenderYear::LoadAll();
            foreach ($fins as $fin){
                $this->lstFin->AddItem($fin->Name, $fin->IdcalenderYear);
            }
            $this->lstFin->Name = "Financial year";
            $this->lstFin->Visible = FALSE;
            $this->lstFin->AddAction(new QChangeEvent(), new QServerAction('lstFin_Change'));

        
        
        $this->lstYear = new QListBox($this);
        $years = AcademicYear::QueryArray(QQ::Equal(QQN::AcademicYear()->Parrent, NULL));
        foreach ($years as $year) {
            $this->lstYear->AddItem($year->Name, $year->IdacademicYear);
        }
        $this->lstYear->Name = "Year";
        $this->lstYear->Visible = FALSE;
        $this->lstYear->AddAction(new QChangeEvent(), new QServerAction(''));
        $this->lstAmount = new QListBox($this);
        $fees = Ledger::QueryArray(QQ::Equal(QQN::Ledger()->IsFeeRepeat, 1));
        $this->lstAmount->AddItem('-Select Fee Head-', NULL);
        foreach ($fees as $fee) {
            $this->lstAmount->AddItem($fee->Name, $fee->Idledger);
        }
        
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

        //save button declaration
        $this->btnAdd = new QButton($this);
        $this->btnAdd->ButtonMode = QButtonMode::Add;
        $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('txtAmount_click'));
        
        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->AddAction(new QClickEvent(),new QConfirmAction('Do You Want To Finalize Following Fee'));
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
        
        $this->txtAmount = new QTextBox($this);
        $this->txtAmount->Width = 100;
        
        $this->caldate = new QDateTimePicker($this);
        $this->caldate->Width = 70;
        $this->caldate->Name = "Date";
        $this->caldate->DateTime = QDateTime::Now();

        $this->btnPrint = new QButton($this);
        $this->btnPrint->ButtonMode = QButtonMode::Success;
        $this->btnPrint->Text = '<i class="fa fa-print"></i> Print';
        $this->btnPrint->AddAction(new QClickEvent(), new QServerAction('btnPrint_Click'));
        
        if (isset($_GET['mem'])) {
            if(isset($_GET['id'])){
                $mainvov = Voucher::LoadByIdvoucher($_GET['id']);
                $this->caldate->DateTime = $mainvov->Date;
                
                $vovs = Voucher::QueryArray(
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Parrent, $_GET['id']),
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id'])
                                    ));
                    foreach($vovs as $vov){
                        $this->lblDeldeposite[$vov->Idvoucher] = new QButton($this);
                        $this->lblDeldeposite[$vov->Idvoucher]->HtmlEntities = FALSE;
                        $this->lblDeldeposite[$vov->Idvoucher]->ActionParameter = $vov->Idvoucher;
                        $this->lblDeldeposite[$vov->Idvoucher]->Text = '<i class="fa fa-trash"></i>';
                        $this->lblDeldeposite[$vov->Idvoucher]->ButtonMode = QButtonMode::Danger;
                        $this->lblDeldeposite[$vov->Idvoucher]->AddAction(new QClickEvent(), new QServerAction("lblDeldeposite_Click"));
                    }
                    $this->lstPaymentMode->SelectedValue = $vov->PaymentMode;
                    $this->lstYear->SelectedValue = $vov->RefStatusObject->Semister;
                    $this->lstFin->SelectedValue = $vov->CalenderYear;
                    
            }
        
            $this->lstYear->Visible = TRUE;
             $this->lstFin->Visible = TRUE;
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $ledger = Ledger::LoadByIdledger($_GET['mem']);
            $this->txtSearch->Text = $ledger->Code . ' ' . get_full_name($ledger->Name);

            if ($this->lstYear->SelectedValue != NULL) {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                                        QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                ),
                              QQ::OrderBy(QQN::CurrentStatus()->Semister)
                        );
            } else {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                ),
                              QQ::OrderBy(QQN::CurrentStatus()->Semister)
                        );
            }

            if ($CurrentStatus)
                foreach ($CurrentStatus as $CurrentStatu) {}
           
            if (!isset($_GET['id']) && !isset($_GET['year'])) {
                $this->lstYear->SelectedValue = $CurrentStatu->Semister;
                  $this->lstFin->SelectedValue = $CurrentStatu->CalenderYear;
           
                }
            
        }
    }

    public function txtSearch_Change($strParameter) {
        $objMemberArray = Ledger::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Ledger()->Grp, 244), 
                            QQ::OrCondition(
                            QQ::Like(QQN::Ledger()->Name, '%' . $strParameter . '%'), 
                            QQ::Like(QQN::Ledger()->Code, '%' . $strParameter . '%')
                            )
                        ));

        $result = array();
        foreach ($objMemberArray as $objMember) {
            $result[] = $objMember->Code . ' ' . GetFullNameNew($objMember->Name, $objMember->Code);
        }
        return $result;
    }

    protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
        $text = $this->txtSearch->Text;
        $code = explode(" ", $text);
        $mem = Ledger::LoadByCode($code[0]);
        $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
        if ($currents)
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee.php?mem=' . $mem->Idledger);
        else
            QApplication::DisplayAlert("Student Haven't been admitted yet !!");
    }

    protected function txtAmount_click(){
        if(isset($_GET['mem'])) {
            if (isset($_GET['year'])) {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['year']),
                                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                                ));
            }else{
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                                ));
            }

            if($CurrentStatus)
                foreach ($CurrentStatus as $CurrentStatu) {}
          
            if(isset($_GET['id'])){
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                $cnt = Voucher::QueryCount(
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Parrent,$vov->Idvoucher),
                                       QQ::Equal(QQN::Voucher()->Idvoucher, $vov->Idvoucher)
                                    ));
                                    
                    $chkvovs = Voucher::QueryArray(
                                        QQ::AndCondition(    
                                            QQ::Equal(QQN::Voucher()->Dr, $this->lstAmount->SelectedValue),
                                            QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, 1),
                                            QQ::OrCondition(
                                                QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                                QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)
                                            )
                                        ));
                    if(!$chkvovs){
                        $vhp = new Voucher();
                       
                        $vhp->InvNo = $vov->InvNo.'['.$cnt.']';
                        $vhp->Grp = 13;
                        $vhp->DataBy = $_SESSION['login'];
                        $vhp->Date = $this->caldate->DateTime;
                        $vhp->AcademicYear = $this->lstYear->SelectedValue;
                        $vhp->CalenderYear = $this->lstFin->SelectedValue;
                       
                        $vhp->Dr =  $this->lstAmount->SelectedValue; //cash
                        $vhp->Cr = $_GET['mem'];
                        $vhp->Parrent = $vov->Idvoucher;
                        $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                        $vhp->Amount = $this->txtAmount->Text;
                        $vhp->DataBy = $_SESSION['login'];
                        $vhp->ExamFee = 0;
                        $vhp->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee.php?mem=' . $_GET['mem'].'&id='.$vov->Idvoucher);
                    }else{
                        QApplication::DisplayAlert('Already added');
                    }
                }else{
                    $vhp = new Voucher();
//                    $calyr = CalenderYear::LoadByIdcalenderYear($CurrentStatu->CalenderYear);
//                    $vhp->InvNo = $calyr->AbbrivationMfr.''.$calyr->CounterMfr;
//                    $calyr->CounterMfr = $calyr->CounterMfr + 1;
//                    $calyr->Save();
//                    
                    $code = VoucherGrp::LoadByIdvoucherGrp(13);
                    $vhp->InvNo = $code->Abbrivation.''.$code->Counter;
                    $code->Counter = $code->Counter + 1;
                    $code->Save();
                    
                    $vhp->Grp = 13;
                    $vhp->DataBy = $_SESSION['login'];
                    $vhp->Date = $this->caldate->DateTime;
                    $vhp->AcademicYear = $this->lstYear->SelectedValue;
                    $vhp->CalenderYear = $this->lstFin->SelectedValue;
                    
                    $vhp->Dr =  $this->lstAmount->SelectedValue; //cash
                    $vhp->Cr = $_GET['mem'];
                    $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                    $vhp->Amount = $this->txtAmount->Text;
                    $vhp->ExamFee = 0;
                    $vhp->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee.php?mem=' . $_GET['mem'].'&id='.$vhp->Idvoucher);
                }
       
        }
        
    }
    protected function btnSave_Click(){
       if(isset($_GET['mem'])&& isset($_GET['id'])) {  
          
           
           if (isset($_GET['year'])) {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['year']),
                                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                                ));
            }else{
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue),
                                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstFin->SelectedValue),
                                        
                                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                                ));
            }

            if($CurrentStatus)
                foreach ($CurrentStatus as $CurrentStatu) {}
            $mainvov = Voucher::LoadByIdvoucher($_GET['id']);
            $mainvov->Date = $this->caldate->DateTime;
            $mainvov->Save();
            $vovs = Voucher::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Voucher()->Parrent,NULL ),
                        QQ::Equal(QQN::Voucher()->Idvoucher,$_GET['id'])

                    )
            );
           
            if($vovs){
                foreach ($vovs as $vov){
                    
                    $cnt = Voucher::QueryCount(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->DrObject->IsFeeRepeat, 1),
                                QQ::Equal(QQN::Voucher()->Parrent,NULL)
                                
                            )
                        );
                    
                    //$calyr = CalenderYear::LoadByIdcalenderYear($this->lstYear->SelectedValue);
                    //$code = VoucherGrp::LoadByIdvoucherGrp(12);
                    if($vov->Grp != 7){
                        $calyr = CalenderYear::LoadByIdcalenderYear($this->lstFin->SelectedValue);
                    $vov->InvNo = $calyr->AbbrivationMfr.''.$calyr->CounterMfr;
                    $calyr->CounterMfr = $calyr->CounterMfr + 1;
                    $calyr->Save();
                        //$vov->InvNo = $calyr->AbbrivationMfr.''.$calyr->CounterMfr;
                        //$calyr->CounterMfr = $calyr->CounterMfr + 1;
                        //$calyr->Save();
                        $vov->Grp = 7;
                        $vov->Seq = $cnt + 1;
                        $vov->Save();
                    }
                    else{
                        QApplication::DisplayAlert('Already Saved');
                    }
                }
            }
            
            $cnt = 1;
            $vhps = Voucher::QueryArray(
                    QQ::AndCondition(    
                        QQ::OrCondition(
                            QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher)
                            
                        )
                    ));
            if($vhps){
                foreach ($vhps as $vhp){
                    if($vhp->Grp != 7){
                        $vhp->InvNo = $vov->InvNo.'['.$cnt.']';
                        $vhp->Grp = $vov->Grp;
                        $vhp->Save();
                        $cnt++;
                    }
                    else{
                          QApplication::DisplayAlert('Already Saved');
                    }
                }
            }
        }
       QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee.php?mem=' . $_GET['mem']);
    }
    protected function lstFin_Change(){
        
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
    protected function lblDeldeposite_Click($strFormId, $strControlId, $strParameter) {
        if(isset($_GET['id'])){
            if($_GET['id'] == $strParameter){
                $vov = Voucher::LoadArrayByParrent($strParameter);
                if(!$vov){
                    $vhp = Voucher::LoadByIdvoucher($strParameter);
                    $vhp->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee.php?mem=' . $_GET['mem']);
                }else{
                    QApplication::DisplayAlert('Can not delete....');
                }
            }else{
                $vhp = Voucher::LoadByIdvoucher($strParameter);
                $vhp->Delete();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee.php?mem=' . $_GET['mem'].'&id='.$_GET['id']);
            }
        }
    }

    protected function btnPrint_Click() {
        
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
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/repeat_fee_print.php?mem=' . $_GET['mem'] . '&id=' . $_GET['id'] . '&flag=1');
    }

}

PersonalDiposite::Run('PersonalDiposite');
?>
        