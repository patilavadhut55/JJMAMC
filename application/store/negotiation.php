<?php
require('../../qcubed.inc.php');

    class Negotiate extends QForm {
        protected $btnnegotiate;
        protected $txtRate;
        protected $chkdisc;
        protected $txttaxamt;
        protected $txtDiscount;
        protected $txtVat;
        protected $txtAmount;
        protected $chkFinal;
        protected $lstPaymode;
        protected $txtWarranty;
        protected $txtDelivery;
        
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();

            $this->chkdisc = new QCheckBox($this);
            $this->chkdisc->Text = 'Discount in Absolute/%';
            $this->chkdisc->Width = 20;
            $this->chkdisc->Height = 20;
            $this->chkdisc->AddAction(new QClickEvent(), new QServerAction('chkdisc_click'));
            
            if(isset($_GET['flag'])){
                $this->chkdisc->Checked = $_GET['flag'];
            }
            
            if(isset($_GET['req'])) {
                $req = Voucher::LoadByIdvoucher($_GET['req']);
                $vhps = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
                $sr = $totaltax = $totaldisc = 0;
                $quotations = Voucher::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Grp, 10),
                                        QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])        
                                    ),
                                    QQ::OrderBy(QQN::Voucher()->Amount,TRUE));  

                foreach ($vhps as $vhp){
                    foreach ($quotations as $quotation){
                        
                        $this->txtDiscount[$quotation->Idvoucher] = new QTextBox($this);
                        $this->txtDiscount[$quotation->Idvoucher]->Width = 100;
                        $this->txtDiscount[$quotation->Idvoucher]->Placeholder = 'Discount Amt';
                        $this->txtDiscount[$quotation->Idvoucher]->Text = $quotation->Discount;
                        $this->txtDiscount[$quotation->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('txtDiscount_Enter'));
                        $this->txtDiscount[$quotation->Idvoucher]->ActionParameter = $quotation->Idvoucher;

                        $this->txtVat[$quotation->Idvoucher] = new QTextBox($this);
                        $this->txtVat[$quotation->Idvoucher]->Width = 100;
                        $this->txtVat[$quotation->Idvoucher]->ReadOnly = TRUE;
                        if($quotation->Taxper != NULL) 
                            $this->txtVat[$quotation->Idvoucher]->Text = $quotation->Taxper;
                        else
                            $this->txtVat[$quotation->Idvoucher]->Text = '0';
                        
                        $this->txtVat[$quotation->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('txtVat_Enter'));
                        $this->txtVat[$quotation->Idvoucher]->ActionParameter = $quotation->Idvoucher;

                        $this->txttaxamt[$quotation->Idvoucher] = new QTextBox($this);
                        $this->txttaxamt[$quotation->Idvoucher]->Width = 100;
                        $this->txttaxamt[$quotation->Idvoucher]->ReadOnly = TRUE;
                        if($quotation->TotalTax != NULL) 
                            $this->txttaxamt[$quotation->Idvoucher]->Text = $quotation->TotalTax;
                        else 
                            $this->txttaxamt[$quotation->Idvoucher]->Text = '0';
                        $this->txttaxamt[$quotation->Idvoucher]->Placeholder = 'Tax Amt';
                        $this->txttaxamt[$quotation->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('txttaxamt_Enter'));
                        $this->txttaxamt[$quotation->Idvoucher]->ActionParameter = $quotation->Idvoucher;
                        
                        
                        $this->txtDelivery[$quotation->Idvoucher] = new QTextBox($this);
                        $this->txtDelivery[$quotation->Idvoucher]->Width = 150;
                        $this->txtDelivery[$quotation->Idvoucher]->Height = 50;
                        $this->txtDelivery[$quotation->Idvoucher]->TextMode = QTextMode::MultiLine;
                        $this->txtDelivery[$quotation->Idvoucher]->Text = $quotation->Delivery;
                        $this->txtDelivery[$quotation->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('Save_Qt'));
                        $this->txtDelivery[$quotation->Idvoucher]->ActionParameter = $quotation->Idvoucher;

                        $this->txtWarranty[$quotation->Idvoucher] = new QTextBox($this);
                        $this->txtWarranty[$quotation->Idvoucher]->Width = 150;
                        $this->txtWarranty[$quotation->Idvoucher]->Height = 50;
                        $this->txtWarranty[$quotation->Idvoucher]->TextMode = QTextMode::MultiLine;
                        $this->txtWarranty[$quotation->Idvoucher]->Text = $quotation->Warranty;
                        $this->txtWarranty[$quotation->Idvoucher]->AddAction(new QEnterKeyEvent(), new QServerAction('Save_Qt'));
                        $this->txtWarranty[$quotation->Idvoucher]->ActionParameter = $quotation->Idvoucher;

                        $this->btnnegotiate[$quotation->Idvoucher] = new QButton($this);
                        $this->btnnegotiate[$quotation->Idvoucher]->ButtonMode = QButtonMode::Success;
                        $this->btnnegotiate[$quotation->Idvoucher]->Text = 'Generate PO';
                        $this->btnnegotiate[$quotation->Idvoucher]->AddAction(new QClickEvent(), new QServerAction('btnnegotiate_click'));
                        $this->btnnegotiate[$quotation->Idvoucher]->ActionParameter = $quotation->Idvoucher;
                    }
                }        
            }
        }

        protected function chkdisc_click(){

               if($this->chkdisc->Checked == TRUE){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/negotiation.php?req='.$_GET['req'].'&flag=1');
                }
                if($this->chkdisc->Checked == FALSE){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/negotiation.php?req='.$_GET['req'].'&flag=0'); 
                }

        }
        protected function txtDiscount_Enter($strFormid, $strctrlid, $strparamter){
            $vov = Voucher::LoadByIdvoucher($strparamter);
            $vhis = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
            $qty = $disc = $amt = $taxamt = 0;
            foreach($vhis as $vhi){
                if($vhi->DiscAmt != NULL && $vhi->DiscAmt != 0){
                    $vhi->Amount =  $vhi->Amount + $vhi->DiscAmt;
                    $vhi->DiscAmt = '0';
                    $vhi->Save();
                }
                $amt = $amt + $vhi->Amount;
                
            }
            $disc = $this->txtDiscount[$vov->Idvoucher]->Text;
            $amt = $amt - $disc;
            $taxamt = $amt * $vov->Taxper / 100;
            $amt = $amt + $taxamt ;
            $vov->TotalTax = number_format($taxamt,2,'.','');
            $vov->Discount = number_format($disc,2,'.','');
            $vov->Amount = number_format(($amt),2,'.','');
            $vov->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/negotiation.php?req='.$_GET['req']); 
        }
        
        //generating po by checkbox
        protected function Finalise_PO($strFormid, $strctrlid, $strparamitter){

            $login = Login::LoadByIdlogin($_SESSION['idlogin']); 
            $vhp = VoucherHasItem::LoadByIdvoucherHasItem($strparamitter);
            $purchases = Voucher::LoadArrayByGrp($vhp->Voucher);
            if(!$purchases){
                $purchase = new Voucher();
                $code = VoucherGrp::LoadByIdvoucherGrp(3);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $purchase->Counter = $code->Abbrivation.$code->Counter;

                $purchase->Grp = 3; //purchese
                $purchase->Dr = 9; //liablities
                $purchase->Cr = $vhp->VoucherObject->Dr;
                $purchase->Date = QDateTime::Now();
                $purchase->Amount = $vhp->NetAmount;
                $purchase->RefNo = $vhp->VoucherObject->Idvoucher;
                $purchase->Member = $login->Idlogin;
                $purchase->Lock = 0;
                $purchase->Narration = $vhp->VoucherObject->Narration;
                $purchase->TotalQty = $vov->TotalQty;
                $purchase->TotalTax = $vov->TotalTax;
                $purchase->Discount = $vov->Discount;
                $purchase->Warranty = $vov->Warranty;
                $purchase->Delivery =$vov->Delivery ;
                $purchase->GrossAmount = $vov->GrossAmount;
                $purchase->Save();
            }else{
                foreach ($purchases as $purchase){}
            }
            $povhp = new VoucherHasItem();
            $povhp->Voucher = $purchase->Idvoucher;
            $povhp->Item = $vhp->Item;
            $povhp->Rate = $vhp->Rate;
            $povhp->DiscAmt = $vhp->DiscAmt;
            $povhp->DiscPer = $vhp->DiscPer;
            $povhp->Amount = $vhp->Amount;
            $povhp->NetAmount = $vhp->NetAmount;
            $povhp->Qty = $vhp->Qty;
            $povhp->Per = $vhp->Per;
            $povhp->TaxAmt = $vhp->TaxAmt;
            $povhp->TaxPer = $vhp->TaxPer;
            $povhp->Save();

        }
        //generating purchase order function start
        protected function btnnegotiate_click($strFormid, $strctrlid, $strparamitter){

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
                $purchase->InvNo = $code->Abbrivation.$code->Counter;
                $puchaseaccount = Ledger::LoadByIdledger(57); //"Purchase Account"
                $purchase->Grp = 3;
                $purchase->Dr = $puchaseaccount->Idledger;
                $purchase->Cr= $vov->Dr;
                $purchase->Date = QDateTime::Now();
                $purchase->Amount = $vov->Amount;
                $purchase->RefNo = $vov->Idvoucher;
                $purchase->DataBy = $login->Idlogin;
                $purchase->ApprovedBy = NULL;
                $purchase->Lock = 0;
                $purchase->Narration = $vov->Narration;
                $purchase->Save();

                $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
                foreach ($vhps as $vhp){
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

                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/po_print.php?id='.$purchase->Idvoucher);


                }

    }
    Negotiate::Run('Negotiate');    
?>        

