<?php
    require('../../qcubed.inc.php');
    class PrintEdit extends QForm {
        protected $btnNew;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->btnNew = new QButton($this);
            $this->btnNew->ButtonMode = QButtonMode::AddNew;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));  
        }
        protected function btnNew_Click() {
             if(isset($_GET['id'])){
               $vov = Voucher::LoadByIdvoucher($_GET['id']);
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/voucher_edit.php?tab='.$vov->Grp);
            }
        }
    }
    PrintEdit::Run('PrintEdit');
?>