<?php
require('../../qcubed.inc.php');

class VoucherEditForm extends QForm {
    protected $txtInvNo;
    protected $calDate;
    protected $lstledger;
    protected $txtAmount;
    protected $lstList;
    protected $txtSr;
    protected $lstItem;
    protected $txtAmt;
    protected $txtQty;
    protected $txtRate;
    protected $txtDiscount;
    protected $txtTax;
    protected $txtGrossAmt;
    protected $lblGrossAmt;
    protected $lblTaxper;
    protected $lblDiscper;
    protected $lblPaidDis;
    protected $lblPaidTax;
    protected $lblNetAmount;
    protected $lblQty;
    protected $lblGross;
    protected $lblTax;
    protected $lblDiscount;
    protected $lbldel;
    protected $txtEMINO;
    protected $txtSerial;
    protected $lblSrdel;
    protected $lblserial;
    protected $txtInQty;
    protected $txtInRate;
    protected $txtNarrDesign;
    protected $txtNarration;
    protected $btnDesign;
    protected $btnCode;
    protected $chktaxontotal;
  
     protected $lbltotal;
      protected $lbltotaltax;

    protected $btnSave;
    protected $btnDelete;
    protected $btnPrint;
    protected $btnCancel;

      protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }
    protected function Form_Create() {
        parent::Form_Create();
        $this->btnSave = new QButton($this);
        $this->btnPrint = new QButton($this);
        $this->btnDelete = new QButton($this);

        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnPrint->Text = "Print";
        $this->btnPrint->ButtonMode = QButtonMode::Success;
        $this->btnDelete->ButtonMode = QButtonMode::Cancel;
        $this->btnDelete->Visible = FALSE;
        $this->btnPrint->Visible = FALSE;

        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
        $this->btnPrint->AddAction(new QClickEvent(), new QServerAction('btnPrint_Click'));
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));

        $this->btnCancel = new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));

        
        $this->txtInvNo = new QTextBox($this);
        $this->txtInvNo->Name = 'InvNo';
        $pur = VoucherGrp::LoadByIdvoucherGrp(3);
        $this->txtInvNo->Text = $pur->Abbrivation.''.$pur->Counter;
        $this->txtInvNo->Required = TRUE;
        
        $this->txtAmount = new QTextBox($this);
        $this->txtAmount->Name = 'Amount';
        $this->txtAmount->Required = TRUE;
        $this->txtAmount->Width = 100;
        $this->txtAmount->AddAction(new QEnterKeyEvent(), new QServerAction('txtAmount_EnterKey'));

        $this->calDate = new QDateTimePicker($this);
        //$this->calDate->DateTimePickerType = QDateTimePickerType::DateTime;
        $this->calDate->DateTime = QDateTime::Now();
        $this->calDate->Name = 'Date';
        $this->calDate->Width = 70;
        $this->calDate->Required = TRUE;

        $this->lstledger = new QSelect2ListBox($this);
        $this->lstledger->Width = 350;
        $this->lstledger->Required = TRUE;
        $leds = Ledger::QueryArray(
                QQ::AndCondition(
                QQ::NotEqual(QQN::Ledger()->IsGrp, 1),              
                QQ::OrCondition(
                QQ::Equal(QQN::Ledger()->Grp, 35),
                QQ::Equal(QQN::Ledger()->GrpObject->Grp, 35) //supplier        
                        )));
        $this->lstledger->Name = "Supplier";
         $this->lstledger->Width = 250;

        $this->txtSr = new QTextBox($this);
        $this->txtDiscount = new QTextBox($this);
        $this->txtRate = new QTextBox($this);
        $this->txtAmt = new QTextBox($this);
        $this->txtQty = new QTextBox($this);
        $this->txtTax = new QTextBox($this);
        $this->txtNarration = new QTextBox($this);
        $this->lblGrossAmt = new QLabel($this);
        $this->lblTaxper = new QLabel($this);
        $this->lblDiscper = new QLabel($this);
        $this->lblPaidDis = new QLabel($this);
        $this->lblPaidTax = new QLabel($this);
        $this->lblNetAmount = new QLabel($this);
        $this->lblQty = new QLabel($this);
        $this->lblTax = new QSelect2ListBox($this);
        $this->lblTax->AddItem(' ',NULL);
         $stks = StockGrp::LoadArrayByParrent(8);//Tax// 8
         foreach ($stks as $stk){
             $this->lblTax->AddItem($stk->Name,$stk->IdstockGrp);
         }
         $this->lblTax->AddAction(new QClickEvent(), new QServerAction('lblTax_click'));
        $this->lblDiscount = new QLabel($this);
        $this->lblGross = new QLabel($this);
        
        $this->txtEMINO = new QTextBox($this);
        $this->txtEMINO->Name = "EMI NO";
        $this->txtEMINO->Width = 200;
         
        $this->txtNarrDesign = new QFCKeditor($this);
        $this->txtNarrDesign->Width = "100%";
        $this->txtNarrDesign->Name = 'Print Design';
        $this->txtNarrDesign->Height = 200;
        $this->txtNarrDesign->Width = 250;
        
        $this->txtNarration->Height = 200;
        $this->txtNarration->Width = 250;
        $this->txtNarration->Visible = FALSE;
        
       
         
        $this->btnDesign = new QButton($this);
        $this->btnDesign->HtmlEntities = TRUE;
        $this->btnDesign->Text = "Design";
        $this->btnDesign->ButtonMode = QButtonMode::Success;
        $this->btnDesign->AddAction(new QClickEvent(), new QServerAction("btnDesign_Click"));

        $this->btnCode = new QButton($this);
        $this->btnCode->HtmlEntities = TRUE;
        $this->btnCode->Text = "Generate";
        $this->btnCode->ButtonMode = QButtonMode::Success;
        $this->btnCode->AddAction(new QClickEvent(), new QServerAction("btnCode_Click"));

        //function for claculating amount in voucher has item
        $this->txtQty->AddAction(new QEnterKeyEvent(), new QServerAction('txtQty_enter'));
        $this->txtRate->AddAction(new QEnterKeyEvent(), new QServerAction('calculate'));
        $this->txtDiscount->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculate'));
        $this->txtTax->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculate'));

        $this->txtAmt->AddAction(new QEnterKeyEvent(), new QAjaxAction('Add_Item'));
     

        //passing parameter for function
        $this->txtQty->ActionParameter = "1";
        $this->txtRate->ActionParameter = "2";
        $this->txtDiscount->ActionParameter = "3";
        $this->txtTax->ActionParameter = "4";

        $this->lstItem = new QSelect2ListBox($this);
            $ledds = LedgerDetails::QueryArray( 
                                QQ::AndCondition(
                                QQ::Equal(QQN::LedgerDetails()->IdledgerDetailsObject->Grp, 7102)      
                            ));
        $this->lstItem->AddItem("- Select One -", NULL);    
        foreach ($ledds as $ledd)
          $this->lstItem->AddItem($ledd->IdledgerDetailsObject->Name, $ledd->IdledgerDetails); 

        $vgrp = NULL;
        if(isset($_GET['id'])){
            $vou = Voucher::LoadByIdvoucher($_GET['id']);
            $this->txtInvNo->Text = $vou->InvNo;
            $this->calDate->DateTime = $vou->Date;
            $this->txtNarrDesign->Text = base64_decode($vou->Narration);
            $this->txtNarration->Text = base64_decode($vou->Narration);
            $vgrp = $vou->Grp;

            

            $this->lstledger->SelectedValue = $vou->Cr;
           
          
        }else{
         
            $this->calDate->DateTime = QDateTime::Now();
        }
         if(isset($_GET['flag'])){
            $this->chktaxontotal->Checked = $_GET['flag'];
         }

       
         $this->lstledger->AddItem("- Select One -", NULL);    
         foreach ($leds as $led) $this->lstledger->AddItem($led->Name, $led->Idledger); 
         if(isset($_GET['id'])){
            $vou = Voucher::LoadByIdvoucher($_GET['id']);
            $this->txtInvNo->Text = $vou->InvNo;
            $this->calDate->DateTime = $vou->Date;
            $vgrp = $vou->Grp;
            $this->lstledger->SelectedValue = $vou->Cr;
            
            $vhitms = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
            if($vhitms){
            foreach ($vhitms as $vhitm){  
            $this->lbldel[$vhitm->IdvoucherHasItem] = new QLabel($this);
            $this->lbldel[$vhitm->IdvoucherHasItem]->HtmlEntities = FALSE ;
            $this->lbldel[$vhitm->IdvoucherHasItem]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
            $this->lbldel[$vhitm->IdvoucherHasItem]->AddAction(new QClickEvent(), new QServerAction('Delete_Item'));
            $this->lbldel[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;

          
            
            $this->txtInQty[$vhitm->IdvoucherHasItem] = new QTextBox($this);
            $this->txtInQty[$vhitm->IdvoucherHasItem]->AddAction(new QEnterKeyEvent(), new QAjaxAction('change_value'));
            $this->txtInQty[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;
            
            $this->txtInRate[$vhitm->IdvoucherHasItem] = new QTextBox($this);
            $this->txtInRate[$vhitm->IdvoucherHasItem]->AddAction(new QEnterKeyEvent(), new QAjaxAction('change_value'));
            $this->txtInRate[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;
            
            }
            } 
            
         }
    }
    
      public function lblTax_click($strFormId, $strControlId, $strParameter){
            if($this->lblTax->SelectedValue != NULL){
                $stk = StockGrp::LoadByIdstockGrp($this->lblTax->SelectedValue);
                  if(isset($_GET['id'])){
                      $totalamt = 0;
                     $vhps = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                     foreach ($vhps as $vhp){
                         $totalamt = $totalamt + $vhp->Amount;
                     }
                          
               $total = number_format($totalamt + ($totalamt * $stk->VatRate)/100, 2,'.', '');
               $totaltax = number_format(($totalamt * $stk->VatRate)/100, 2,'.', '');
               $vou = Voucher::LoadByIdvoucher($_GET['id']);
               $vou->Amount = $total;
               $vou->Taxper = $this->lblTax->SelectedValue;
               $vou->TotalTax = $vou->TotalTax + $totaltax;
               $vou->Save();
                  
             }
         // QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/direct_purchase.php?id='.$_GET['id'].'&tax='.$this->lblTax->SelectedValue);               
       }        
     }
     protected function Add_Item(){
        $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
        $login = Login::LoadByIdlogin($_SESSION['login']);
        $product = LedgerDetails::LoadByIdledgerDetails($this->lstItem->SelectedValue);
         $net = $qty =$disc= $taxamt =$amount = $taxper = $discper = $grossamount=0;
        if (isset($_GET['id'])) {
            $voucher = Voucher::LoadByIdvoucher($_GET['id']);
        } else {
            $voucher = new Voucher();
            
            $code = VoucherGrp::LoadByIdvoucherGrp(3);
            $this->txtInvNo->Text = $code->Abbrivation.''.$code->Counter;
            $voucher->InvNo = $this->txtInvNo->Text;
            $code->Counter = $code->Counter + 1;
            $code->Save();
            
            $voucher->Grp = 3;
            $voucher->Amount = $this->txtAmt->Text;
        }
        $voucher->Date = $this->calDate->DateTime;
        $voucher->DataBy = $login->Idlogin;
        if ($voucher->Grp == 3) { //purchase
            $voucher->Cr = $this->lstledger->SelectedValue;
            $voucher->Dr = 57; //purchase account
        }
        $voucher->Save();
        //voucher has item  Entry
        $vhitm = new VoucherHasItem();
        $vhitm->Voucher = $voucher->Idvoucher;
        $vhitm->Item = $product->IdledgerDetails;
        $vhitm->Per = $product->Unit;
        $vhitm->Qty = $this->txtQty->Text;
        $vhitm->Rate = $this->txtRate->Text;
        $vhitm->DiscAmt = $this->txtDiscount->Text;
        $vhitm->DiscPer = $this->lblDiscper->Text;
        $vhitm->TaxAmt = $this->txtTax->Text;
        $vhitm->TaxPer = $this->lblTaxper->Text;
        $vhitm->Amount = $this->txtAmt->Text;
        $vhitm->Save();
        $VovHasProds = VoucherHasItem::LoadArrayByVoucher($voucher->Idvoucher);//voucher has product
                    foreach ($VovHasProds as $VovHasProd){
                        $amount =  $amount + $VovHasProd->Amount;
                        $qty =  $qty + $VovHasProd->Qty;
                        $discper = $discper + $VovHasProd->DiscPer;
                        $disc = $disc + $VovHasProd->DiscAmt;
                        $taxamt = $taxamt+ $VovHasProd->TaxAmt;
                        $grossamount = $grossamount + ($VovHasProd->Qty * $VovHasProd->Rate);
                    }
                $voucher =  Voucher::LoadByIdvoucher($voucher->Idvoucher);    
                    $voucher->Amount = $amount;
                    $voucher->TotalQty = $qty;
                    $voucher->Discount = $disc;
                    $voucher->Discper = $discper;
                    $voucher->GrossAmount = $grossamount;
                    $voucher->TotalTax =  $taxamt;
                     $voucher->Save();
        
        $this->Refresh();
        
        
    }
     
     protected function txtQty_enter(){
                $product = LedgerDetails::LoadByIdledgerDetails($this->lstItem->SelectedValue);
                if($product && $product->Mrp != NULL){
                    $this->txtRate->Text = number_format($product->Mrp,2,'.','');
                }else{
                    $this->txtRate->Text = 0;
                }
                $this->txtRate->Focus();
    }
            
     protected function calculate($strFormId, $strControlId, $strParameter){
        $vgrp = NULL;
        if(isset($_GET['id'])){
            $vou = Voucher::LoadByIdvoucher($_GET['id']);
            $vgrp = $vou->Grp;
        }
        $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
        $product = LedgerDetails::LoadByIdledgerDetails($this->lstItem->SelectedValue);
        $disc = Settings::LoadByName("Tax Discount");
        if($strParameter == 1){
           if($vgrp == 3){
              $this->txtRate->Text = $product->Cost;
            }
            $this->txtRate->Focus();
        }elseif($strParameter == 2){
            $this->lblGrossAmt->Text = number_format($this->txtRate->Text * $this->txtQty->Text, 2,'.','');
            
            $this->txtAmt->Text = number_format($this->lblGrossAmt->Text - $this->txtDiscount->Text + $this->txtTax->Text);
            $this->txtDiscount->Focus();
        }elseif($strParameter == 3){
            $this->lblDiscper->Text = number_format(($this->txtDiscount->Text / $this->lblGrossAmt->Text)*100,3,'.','');
            $this->txtTax->Text = number_format( (($this->lblGrossAmt->Text - $this->txtDiscount->Text)  * $this->lblTaxper->Text)/100 ,3,'.','');
            $this->txtAmt->Text = number_format($this->lblGrossAmt->Text - $this->txtDiscount->Text + $this->txtTax->Text,2,'.','');
            $this->txtTax->Focus();

        }elseif($strParameter == 4){
            $this->lblTaxper->Text = number_format(($this->txtTax->Text / ($this->lblGrossAmt->Text - $this->txtDiscount->Text))*100,2,'.','');
            $this->txtAmt->Text = number_format($this->lblGrossAmt->Text - $this->txtDiscount->Text + $this->txtTax->Text,2,'.','');
            $this->txtAmt->Focus();
        }
     }
    
               
    
    protected function btnSave_Click(){
        $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
        $login = Login::LoadByIdlogin($_SESSION['login']);
        if(isset($_GET['id'])){
            $links = Voucher::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->RefNo, $_GET['id'])        
                             ));
              if($links){
                foreach ($links as $link){
                    $link->Date =  $this->calDate->DateTime; 
                    $link->Save();
                }

            }
        }
        /*$outvats = Voucher::QueryArray(
                      QQ::AndCondition(
                       QQ::Equal(QQN::Voucher()->Parrent, $Voucher->Idvoucher),
                       QQ::Equal(QQN::Voucher()->Dr, $Voucher->Cr),
                       QQ::Equal(QQN::Voucher()->Cr, 53)        
                     ));
            if($outvats){
                foreach ($outvats as $outvat){}
            }else{
                $outvat = new Voucher();
                $code = VoucherGrp::LoadByIdvoucherGrp(3);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $outvat->DataBy = $login->Idlogin;
                $outvat->Parrent = $Voucher->Idvoucher;
                $outvat->InvNo = $code->Abbrivation.''.$code->Counter;
                $outvat->Date =  $Voucher->Date; 
                $outvat->Grp = 3;
                $outvat->Cr = 53; //output Vat
                $outvat->Dr = $Voucher->Cr;
            }
            $outvat->Amount = $this->lblPaidDis->Text;
            $outvat->Save();

            $indiscs = Voucher::QueryArray(
                      QQ::AndCondition(
                       QQ::Equal(QQN::Voucher()->Parrent, $Voucher->Idvoucher),
                       QQ::Equal(QQN::Voucher()->Dr,54),
                       QQ::Equal(QQN::Voucher()->Cr, $Voucher->Cr)        
                    ));
            if($indiscs){
                foreach ($indiscs as $indisc){}
            }else{
                $indisc = new Voucher();
                $code = VoucherGrp::LoadByIdvoucherGrp(3);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $indisc->DataBy = $login->Idlogin;
                $indisc->Parrent = $Voucher->Idvoucher;
                $indisc->InvNo = $code->Abbrivation.''.$code->Counter;
                $indisc->Date =  $Voucher->Date; 
                $indisc->Grp = 3;
                $indisc->Cr = $Voucher->Cr;
                $indisc->Dr = 54; //Input Discount
            }
            $indisc->Amount = $this->lblPaidDis->Text;
            $indisc->Save(); */
//            $code = VoucherGrp::LoadByIdvoucherGrp(3);                    
//            $code->Counter = $code->Counter + 1;
//            $code->Save();
            
          
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/direct_purchase.php');            
    }
    protected function Delete_Item($strFormId, $strControlId, $strParameter){
           $vhitm = VoucherHasItem::LoadByIdvoucherHasItem($strParameter);
           $vhitm->Delete();

        $vhps = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
        if(!$vhps){
            $vocher = Voucher::LoadByIdvoucher($_GET['id']);
            $refs = Voucher::LoadArrayByParrent($_GET['id']);
            if($refs){
                foreach ($refs as $ref){
                    $ref->Delete();
                }
            }
            $vocher->Delete();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/direct_purchase.php');  
        }else{
            $this->Refresh();
        }
    }
    protected function btnDesign_Click(){
        if($this->txtNarrDesign->Text != ""){
            $this->txtNarrDesign->Text = $this->txtNarration->Text;      
        }

        if($this->txtNarration->Text != ""){
            $this->txtNarrDesign->Text = $this->txtNarration->Text;      
        }
        $this->txtNarrDesign->Visible = TRUE;
        $this->txtNarration->Visible = FALSE;

    } 
    protected function btnCode_Click(){
        $this->txtNarration->Text = $this->txtNarrDesign->Text;                    
        $this->txtNarrDesign->Visible = FALSE;
        $this->txtNarration->Visible = TRUE;
       
    }
    
    protected function Refresh() {
        $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/direct_purchase.php?id='.$Voucher->Idvoucher);  
    }

    protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/direct_purchase.php');
    }
    protected function btnPrint_Click($strFormId, $strControlId, $strParameter) {
        $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
       // QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/print.php?id='.$Voucher->Idvoucher);
    }
}
VoucherEditForm::Run('VoucherEditForm');
?>

