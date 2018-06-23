<?php 
    require('../../qcubed.inc.php');
    
    class FeeForm extends QForm {
        //DD Details
        protected $txtBank;
        protected $txtBranch;
        protected $txtDD;
        
        //Update Details button
        protected $btnUpdate;
        
        protected $chkApproved;
        protected $btnApproved;
        protected $chkDuplicate;
        protected $lblDuplicate;
        protected $lblDuplicate1;
        protected $lblDuplicate2;
        protected function Form_Create() {
            
            //Checkbox to print Duplicate copy on each receipt
            $this->chkDuplicate = new QCheckBox($this);
            $this->chkDuplicate->Name = "Duplicate";
            $this->chkDuplicate->AddAction(new QChangeEvent, new QAjaxAction("chkDuplicate_Change"));
            
            $this->lblDuplicate = new QLabel($this);
            $this->lblDuplicate->Text = "(Duplicate)";
            $this->lblDuplicate->Visible = FALSE;
            
            $this->lblDuplicate1 = new QLabel($this);
            $this->lblDuplicate1->Text = "(Duplicate)";
            $this->lblDuplicate1->Visible = FALSE;
            
            $this->lblDuplicate2 = new QLabel($this);
            $this->lblDuplicate2->Text = "(Duplicate)";
            $this->lblDuplicate2->Visible = FALSE;
            
            //Textboxes for DD details
            $this->txtBank = new QTextBox($this);
            $this->txtBank->Placeholder = "Bank";
            $this->txtBranch = new QTextBox($this);
            $this->txtBranch->Placeholder = "Branch";
            $this->txtDD = new QTextBox($this);
            $this->txtDD->Placeholder = "DD";
            
            //To save DD details
            $this->btnUpdate = new QButton($this);
            $this->btnUpdate->ButtonMode = QButtonMode::Success;
            $this->btnUpdate->Text ="Update Details";
            $this->btnUpdate->AddAction(new QClickEvent(), new QServerAction('btnUpdate_click'));
            
            $this->chkApproved = new QCheckBox($this);
            $this->chkApproved->Width = 25;
            $this->chkApproved->Height = 25;
                    
            $this->btnApproved = new QButton($this);
            $this->btnApproved->ButtonMode = QButtonMode::Success;
            $this->btnApproved->Text ="Approve";
            $this->btnApproved->AddAction(new QClickEvent(), new QServerAction('btnApproved_click'));
        }
        
        protected function chkDuplicate_Change(){
            //receipts change to label as '(Duplicate)'
            if($this->chkDuplicate->Checked == TRUE){
                $this->lblDuplicate->Visible = TRUE;
                $this->lblDuplicate1->Visible = TRUE;
                $this->lblDuplicate2->Visible = TRUE;
            }else{
                $this->lblDuplicate->Visible = FALSE;
                $this->lblDuplicate1->Visible = FALSE;
                $this->lblDuplicate2->Visible = FALSE;
            }
        }

        //To save the details added in DD details
        protected function btnUpdate_click(){
            if(isset($_GET['id'])){
                $vhps =  Voucher::QueryArray(
                           QQ::OrCondition(
                           QQ::Equal(QQN::Voucher()->Parrent,$_GET['id']),
                           QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id'])        
                        ));
                foreach ($vhps as $vhp){
                    if($vhp->Dr == 22)   //If voucher tranction is 'Cash' then only DD details will save
                    $vhp->Narration = "Being Paid by Bank:".$this->txtBank->Text.
                            " Branch:".$this->txtBranch->Text.
                            " DD No.".$this->txtDD->Text;
                    $vhp->Save();
                }
            }
        }
        
        protected function btnApproved_click(){
            if(isset($_GET['id']) && $this->chkApproved->Checked){
                $vhps =  Voucher::QueryArray(
                           QQ::OrCondition(
                           QQ::Equal(QQN::Voucher()->Parrent,$_GET['id']),
                           QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id'])        
                        ));
                foreach ($vhps as $vhp){
                    $vhp->ApprovedBy = $_SESSION['login'];
                    $vhp->ApprovedDate = QDateTime::Now();
                    //$vhp->Save();
                }
            }
        }
    }
    FeeForm::Run('FeeForm');
?>
    
