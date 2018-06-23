<?php
  require('../../qcubed.inc.php');
  
  class BookEditForm extends QForm {
        protected $txtPRN;
        protected $txtInvNo;
        protected $btnDelete;
                
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
            $this->txtPRN = new QTextBox($this);
            $this->txtPRN->Name = "PRN No";
            $this->txtPRN->Required = TRUE;
            $this->txtPRN->Width = 180;
            
            $this->txtInvNo = new QTextBox($this);
            $this->txtInvNo->Name = "Challan No";
            $this->txtInvNo->Width = 180;
            $this->txtInvNo->Required = TRUE;
            $this->txtInvNo->AddAction(new QEnterKeyEvent(), new QServerAction('txtInvNo_Click'));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            
            if(isset($_GET['id'])){
                $led = Ledger::LoadByIdledger($_GET['id']);
                $cashvov = Voucher::LoadByIdvoucher($_GET['vov']);
                
                $this->txtPRN->Text = $led->Code;
                $this->btnDelete->Visible = TRUE;
                $this->txtInvNo->Text = $cashvov->InvNo;
            }
            
        }
        protected function txtInvNo_Click(){
            $led = Ledger::LoadByCode($this->txtPRN->Text);
            $cashvov = Voucher::LoadByInvNo($this->txtInvNo->Text);
            if($led && $cashvov){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settel/delete_challan.php?id='.$led->Idledger.'&vov='.$cashvov->Idvoucher);
            }else{
                QApplication::DisplayAlert('Incorrect Challan No or PRN No...');
            }
        }
        protected function btnDelete_Click(){
            $led = Ledger::LoadByCode($this->txtPRN->Text);
            $cashvov = Voucher::LoadByInvNo($this->txtInvNo->Text);
            $payvov = Voucher::LoadByIdvoucher($cashvov->RefNo);
            
            if($led && $cashvov){
                $cashvovs = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Cr,$led->Idledger),
                                QQ::Equal(QQN::Voucher()->Dr, 22),
                                QQ::Equal(QQN::Voucher()->Grp,7),
                                QQ::Equal(QQN::Voucher()->Parrent,$cashvov->Idvoucher)
                            ));
                if($cashvovs){
                    foreach($cashvovs as $cash){
                        $cash->Delete();
                    }
                }
                
                $payvovs = Voucher::LoadArrayByParrent($payvov->Idvoucher);
                if($payvovs){
                    foreach($payvovs as $pay){
                        $pay->Delete();
                    }
                }
                $cashvov->Delete();
                $payvov->Delete();
                
                $subleds = Ledger::LoadArrayByGrp($led->Idledger);
                if($subleds){
                    foreach($subleds as $sub){}
                    $sub->Delete();
                }
                //_p('Voucher Delete Successfully...');
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settel/delete_challan.php');
            }else{
                QApplication::DisplayAlert('Please enter valid PRN or Challan No.');
            }
        }
        
  }
  BookEditForm::Run('BookEditForm');
?>

