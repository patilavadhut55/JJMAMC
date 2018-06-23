<?php

require('../../../qcubed.inc.php');

class Comparative extends QForm {

    protected $btnnegotiate;
    protected $txtSub;
    protected $txtDesc;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        $this->txtSub = new QTextBox($this);
        $this->txtSub->Width = 500;
        
        $this->txtDesc = new QTextBox($this);
        $this->txtDesc->Width = 800;
        $this->txtDesc->TextMode = QTextMode::MultiLine;
        $this->txtDesc->AddAction(new QClickEvent(), new QAjaxAction('txtDesc_click'));
   
        if (isset($_GET['req'])) {
            $req = Voucher::LoadByIdvoucher($_GET['req']);
            $vhps = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
            $sr = $totaltax = $totaldisc = 0;
            $quotations = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 10), QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])
                            ), QQ::OrderBy(QQN::Voucher()->Amount, TRUE));

            foreach ($vhps as $vhp) {
                foreach ($quotations as $quotation) {
                    $prods = VoucherHasItem::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::VoucherHasItem()->Voucher, $quotation->Idvoucher), QQ::Equal(QQN::VoucherHasItem()->Item, $vhp->Item)
                    ));
                    foreach ($prods as $prod) {
                        $this->btnnegotiate[$quotation->Idvoucher][$prod->Item] = new QButton($this);
                        $this->btnnegotiate[$quotation->Idvoucher][$prod->Item]->ButtonMode = QButtonMode::Success;
                        $this->btnnegotiate[$quotation->Idvoucher][$prod->Item]->Text = 'Generate PO';
                        $this->btnnegotiate[$quotation->Idvoucher][$prod->Item]->AddAction(new QClickEvent(), new QAjaxAction('btnnegotiate_click'));
                        $this->btnnegotiate[$quotation->Idvoucher][$prod->Item]->ActionParameter = $prod->IdvoucherHasItem;
                    }
                }
            }
        }
    }
    protected function txtDesc_Click(){
        if(isset($_GET['req'])){
            $vovs = Voucher::LoadByIdvoucher($_GET['req']);
                 $vovs->CmpDesc = $this->txtDesc->Text;
                  $vovs->CmpSubject = $this->txtSub->Text;
        } $vovs->Save();
    }
    protected function btnnegotiate_click($strFormid, $strctrlid, $strparamitter) {
        
        $login = Login::LoadByIdlogin($_SESSION['login']);
        $prod = VoucherHasItem::LoadByIdvoucherHasItem($strparamitter);
         
        $vov = Voucher::LoadByIdvoucher($prod->Voucher);
        $req = Voucher::LoadByIdvoucher($vov->RefNo);
        $req->Lock = 1;
        $req->Save();
        $purchase = new Voucher();
        $code = VoucherGrp::LoadByIdvoucherGrp(3);
        $code->Counter = $code->Counter + 1;
        $code->Save();
        $purchase->InvNo = $code->Abbrivation . $code->Counter;
        $puchaseaccount = Ledger::LoadByIdledger(57); //"Purchase Account"
        $purchase->Grp = 3;
        $purchase->Dr = $puchaseaccount->Idledger;
        $purchase->Cr = $vov->Dr;
        $purchase->Date = QDateTime::Now();
        $purchase->Amount = $vov->Amount;
        $purchase->RefNo = $vov->Idvoucher;
        $purchase->DataBy = $login->Idlogin;
        $purchase->ApprovedBy = NULL;
        $purchase->Lock = 0;
        $purchase->Narration = $vov->Narration;
        $purchase->Save();

        $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
        foreach ($vhps as $vhp) {
            $prod = new VoucherHasItem();
            $prod->Item = $vhp->Item;
            $prod->Voucher = $purchase->Idvoucher;
            $prod->Rate = $vhp->Rate;
            $prod->Qty = $vhp->Qty;
            $prod->TaxAmt = $vhp->TaxAmt;
            $prod->DiscAmt = $vhp->DiscAmt;
            $prod->DiscPer = $vhp->DiscPer;
            $prod->Per = $vhp->Per;
            $prod->NetAmount = $vhp->NetAmount;
            $prod->Amount = $vhp->Amount;
            $prod->Save();
        }
       if($req->RequirementGrp == 1){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/po_print.php?id=' . $purchase->Idvoucher);
       }
       if($req->RequirementGrp == 2){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/annual_print.php?id=' . $purchase->Idvoucher);
      
       }
       if($req->RequirementGrp == 3)
       {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/work_print.php?id=' . $purchase->Idvoucher);
      
       }
       }
}
Comparative::Run('Comparative');
?>      