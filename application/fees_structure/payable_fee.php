<?php

require('../../qcubed.inc.php');

class PersonalDiposite extends QForm {

    protected $txtSearch;
    protected $btnSearch;
    protected $btnSave;
    protected $lstAmount;
    protected $caldate;
    protected $lblPaid;
    protected $lbldelete;
    protected $txtAmount;
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
        foreach ($years as $year) {
            $this->lstYear->AddItem($year->Name, $year->IdacademicYear);
        }
        $this->lstYear->Name = "Year";
        $this->lstYear->Visible = FALSE;

        
        $this->lstAmount = new QListBox($this);
        $fees = Ledger::LoadArrayByGrp(5454);
        $this->lstAmount->AddItem('-Select Fee Head-', NULL);
        foreach ($fees as $fee) {
            $this->lstAmount->AddItem($fee->Name, $fee->Idledger);
        }
        

        $this->btnSearch = new QButton($this);
        $this->btnSearch->ButtonMode = QButtonMode::Success;
        $this->btnSearch->Text = "<i class='fa fa-search '></i>";
        $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));

        //save button declaration
        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Add;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('txtAmount_click'));
        
        $this->txtAmount = new QTextBox($this);
        $this->txtAmount->Width = 100;
        
        $this->caldate = new QDateTimePicker($this);
        $this->caldate->Width = 70;
        $this->caldate->Name = "Date";
        $this->caldate->DateTime = QDateTime::Now();

        $this->btnPrint = new QButton($this);
        $this->btnPrint->ButtonMode = QButtonMode::Success;
        $this->btnPrint->Text = '<i class="fa fa-print"></i> Submit';
        $this->btnPrint->AddAction(new QClickEvent(), new QServerAction('btnPrint_Click'));
        
        if (isset($_GET['mem'])) {
            if(isset($_GET['id'])){
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
            }
        
            $this->lstYear->Visible = TRUE;
            $profile = Profile::LoadByIdprofile($_GET['mem']);
            $ledger = Ledger::LoadByIdledger($_GET['mem']);
            $this->txtSearch->Text = $ledger->Code . ' ' . get_full_name($ledger->Name);

            if (isset($_GET['year'])) {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year']),
                                        QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                                ));
            } else {
                $CurrentStatus = CurrentStatus::LoadArrayByStudent($ledger->Idledger);
            }

            if ($CurrentStatus)
                foreach ($CurrentStatus as $CurrentStatu) {}
           
           
            if (!isset($_GET['id']) && !isset($_GET['year'])) {
               $this->lstYear->SelectedValue = $CurrentStatu->Semister;
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
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php?mem=' . $mem->Idledger );
        else
            QApplication::DisplayAlert("Student Haven't been admitted yet !!");
    }

    protected function txtAmount_click(){
            if(isset($_GET['mem'])) {
            /*if (isset($_GET['year'])) {
                $CurrentStatus = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year']),
                                        QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem'])
                                ));
            }else{*/
                $CurrentStatus = CurrentStatus::QueryArray (
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Student, $_GET['mem']),
                                    QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstYear->SelectedValue)
                                ),
                                QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister))
                            );
                
            }

            if($CurrentStatus){
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
                                                QQ::Equal(QQN::Voucher()->Grp,6),
                                                QQ::Equal(QQN::Voucher()->AcademicYear,$CurrentStatu->Semister),
                                                QQ::Equal(QQN::Voucher()->Cr, $this->lstAmount->SelectedValue),
                                                QQ::OrCondition(
                                                    QQ::Equal(QQN::Voucher()->Parrent, $vov->Idvoucher),
                                                    QQ::Equal(QQN::Voucher()->Idvoucher,$vov->Idvoucher)
                                                )
                                            ));
                        if(!$chkvovs){
                            $vhp = new Voucher();
                            $vhp->InvNo = $vov->InvNo.'['.$cnt.']';
                            $vhp->Grp = 6;
                            $vhp->DataBy = $_SESSION['login'];
                            $vhp->Date = $this->caldate->DateTime;
                            $vhp->AcademicYear = $this->lstYear->SelectedValue;
                            $vhp->Cr =  $this->lstAmount->SelectedValue; //cash
                            $vhp->Dr = $_GET['mem'];
                            $vhp->Parrent = $vov->Idvoucher;
                            $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                            $vhp->Amount = $this->txtAmount->Text;
                            $vhp->DataBy = $_SESSION['login'];
                            $vhp->ExamFee = 0;
                            $vhp->Save();
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php?mem=' . $_GET['mem'].'&id='.$vov->Idvoucher);
                        }else{
                            QApplication::DisplayAlert('Already added');
                        }
                    }else{
                        $vhp = new Voucher();
                        $code = VoucherGrp::LoadByIdvoucherGrp(6);
                        $vhp->InvNo = $code->Abbrivation.''.$code->Counter;
                        $code->Counter = $code->Counter + 1;
                        $code->Save();
                        $vhp->Grp = 6;
                        $vhp->DataBy = $_SESSION['login'];
                        $vhp->Date = $this->caldate->DateTime;
                        $vhp->AcademicYear = $this->lstYear->SelectedValue;
                        $vhp->Cr =  $this->lstAmount->SelectedValue; //cash
                        $vhp->Dr = $_GET['mem'];
                        $vhp->RefStatus = $CurrentStatu->IdcurrentStatus;
                        $vhp->Amount = $this->txtAmount->Text;
                        $vhp->ExamFee = 0;
                        $vhp->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php?mem=' . $_GET['mem'].'&id='.$vhp->Idvoucher);
                    }
            }    
    }
    protected function lblDeldeposite_Click($strFormId, $strControlId, $strParameter) {
        if(isset($_GET['id'])){
            if($_GET['id'] == $strParameter){
                $vov = Voucher::LoadArrayByParrent($strParameter);
                if(!$vov){
                    $vhp = Voucher::LoadByIdvoucher($strParameter);
                    $vhp->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php?mem=' . $_GET['mem']);
                }else{
                    QApplication::DisplayAlert('Can not delete....');
                }
            }else{
                $vhp = Voucher::LoadByIdvoucher($strParameter);
                $vhp->Delete();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php?mem=' . $_GET['mem'].'&id='.$_GET['id']);
            }
        }
    }
    protected function btnPrint_Click(){
        //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php?mem=' . $_GET['mem'] . '&id=' . $_GET['id'] . '&flag=1');
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/payable_fee.php');
   
    }
}

PersonalDiposite::Run('PersonalDiposite');
?>
     