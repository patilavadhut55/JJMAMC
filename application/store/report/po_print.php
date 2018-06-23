<?php

require('../../../qcubed.inc.php');

class PO extends QForm {

    protected $txtSub;
    protected $chkApprove;
    protected $chkhead;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        $this->txtSub = new QTextBox($this);
        $this->txtSub->Width = 240;
        $this->txtSub->AddAction(new QClickEvent(), new QAjaxAction('txtSub_click'));

        $this->chkhead = new QCheckBox($this);
        $this->chkhead->Name = 'Without letter pad';
        $this->chkhead->AddAction(new QClickEvent(), new QAjaxAction('chkhead_Click'));

        $this->chkApprove = new QCheckBox($this);
        $this->chkApprove->AddAction(new QClickEvent(), new QAjaxAction('chkApprove_click'));
        $vov = Voucher::LoadByIdvoucher($_GET['id']);
        if ($vov->ApprovedBy != NULL)
            $this->chkApprove->Checked = TRUE;
    }

    protected function txtSub_Click() {
        if (isset($_GET['id'])) {
            $vovs = Voucher::LoadByIdvoucher($_GET['id']);

            $vovs->CmpSubject = $this->txtSub->Text;
        } $vovs->Save();
    }

    protected function chkApprove_click() {
        $vov = Voucher::LoadByIdvoucher($_GET['id']);
        //$vov->Approved = $this->chkApprove->Checked;
        $vov->Save();
        $status = NULL;
        if ($this->chkApprove->Checked == 1)
            $status = "Approved";
        else
            $status = "Rejected";
        QApplication::DisplayAlert("Purchase Order for " . $vov->Narration . ' To supplier' . $vov->ToObject . ' has ' . $status);
    }

    protected function chkhead_Click() {
    
              if (isset($_GET['id'])) {

        $flag = 0;
        if($this->chkhead->Checked == TRUE){
            $flag = 1;
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/po_print.php?id='.$_GET['id'].'&flag=1');
                    
        }
        else{
            $flag = 0;
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/po_print.php?id='.$_GET['id'].'&flag=0');
      
        }
        
        }    
    }

}

PO::Run('PO');
?>        
