<?php
require('../../qcubed.inc.php');
    class PayFees extends QForm {
        protected $txtSearch;        
        protected $txtReceiptNo;        
        protected $btnSave;
        protected $chkApproved;
        
        protected function Form_Run() {
                parent::Form_Run();
           QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->chkApproved = new QCheckBox($this);
            $this->chkApproved->Width = 20;
            $this->chkApproved->Height = 20;
            $this->chkApproved->Name = "With Payable";
            

            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Student ID';
            $this->txtSearch->Width = 500;

            $this->txtReceiptNo = new QTextBox($this);
            $this->txtReceiptNo->Name = 'Challan NO.';

            //save button declaration
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = "Submit";
            $this->btnSave->ButtonMode = QButtonMode::Success;
            $this->btnSave->AddAction(new QClickEvent(), new QConfirmAction('Do you want to delete this fees'));
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
            $this->btnSave->Visible = TRUE;
            
        
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

        protected function btnSave_click($strFormId, $strControlId, $strParameter) {
            if($this->txtSearch->Text != "" && $this->txtReceiptNo->Text != ""){
                $code = explode(" ", $this->txtSearch->Text);
                $mem = Ledger::LoadByCode($code[0]);
                $fee = Voucher::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->InvNo, $this->txtReceiptNo->Text),
                                QQ::Equal(QQN::Voucher()->Cr, $mem->Idledger)
                            )
                        );
                if($mem && $fee){
                    $application = Application::LoadArrayByVoucher($fee->Idvoucher);
                    if(!$application){
                    $paids = Voucher::QueryArray(
                                QQ::AndCondition(
                                    //QQ::Equal(QQN::Voucher()->Idvoucher, $fee->Idvoucher),
                                    QQ::Equal(QQN::Voucher()->Parrent, $fee->Idvoucher)
                                ),
                                QQ::OrderBy(QQN::Voucher()->Idvoucher,FALSE)
                            );
                    $pay = "";
                    if($paids){                        
                        $flg = 0;
                        foreach ($paids as $paid){
                            if($flg == 0){
                                $pay = $paid->RefNo;
                                $flg = 1;
                            }                            
                            $paid->Delete();
                        }
                    }else{
                        $pay = $fee->RefNo;
                    }
                    
                        $fee->Delete();
                    
                        $payables = Voucher::QueryArray(
                                QQ::OrCondition(                                    
                                    QQ::Equal(QQN::Voucher()->Parrent, $pay)
                                ),
                                QQ::OrderBy(QQN::Voucher()->Idvoucher,FALSE)
                            );                             
                        if($this->chkApproved->Checked == 1){
                            foreach ($payables as $payable){
                                $chkvovs = Voucher::LoadArrayByRefNo($payable->Idvoucher);
                                if(!$chkvovs){
                                    $payable->Delete();
                                }
                            }
                            $chkvovs = Voucher::LoadArrayByRefNo($pay);
                            if(!$chkvovs){
                                $payable = Voucher::LoadByIdvoucher($pay);
                                if($payable) {
                                    $payable->Delete();
                                }
                            }
                        }                        
                        QApplication::DisplayAlert("delete this challan successfully.");    
                    }else{
                        QApplication::DisplayAlert("Can not delete this challan.");    
                    }
                                        
                    
                }else{
                    QApplication::DisplayAlert("Incorrect student or challan no.");
                }
                
            }
            
        }
    }
    
    PayFees::Run('PayFees');
?>
