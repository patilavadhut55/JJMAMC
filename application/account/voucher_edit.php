<?php
require('../../qcubed.inc.php');

//require(__FORMBASE_CLASSES__ . '/VoucherEditFormBase.class.php');

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
       
        $this->txtInvNo->Required = TRUE;
        $this->txtAmount = new QTextBox($this);
        $this->txtAmount->Name = 'Amount';
        $this->txtAmount->Required = TRUE;
        $this->txtAmount->Width = 100;
        $this->txtAmount->AddAction(new QEnterKeyEvent(), new QServerAction('txtAmount_EnterKey'));

        $this->calDate = new QDateTimePicker($this);
        $this->calDate->DateTimePickerType = QDateTimePickerType::DateTime;
        $this->calDate->DateTime = QDateTime::Now();
        $this->calDate->Name = 'Date';
        $this->calDate->Width = 70;
        $this->calDate->Required = TRUE;

        $this->lstledger = new QSelect2ListBox($this);
        $this->lstledger->Width = 200;
        $this->lstledger->Required = TRUE;

        $this->lstList = new QListBox($this);
        $this->lstList->AddItem('Dr',1);
        $this->lstList->AddItem('Cr',2);
        $this->lstList->Width = 70;

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
        $this->lblTax = new QLabel($this);
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
        $this->txtQty->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculate'));
        $this->txtRate->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculate'));
        $this->txtDiscount->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculate'));
        $this->txtTax->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculate'));

        $this->txtAmt->AddAction(new QEnterKeyEvent(), new QAjaxAction('Add_Item'));
        $this->txtEMINO->AddAction(new QEnterKeyEvent(), new QServerAction('txtEMINO_Enter'));

        //passing parameter for function
        $this->txtQty->ActionParameter = "1";
        $this->txtRate->ActionParameter = "2";
        $this->txtDiscount->ActionParameter = "3";
        $this->txtTax->ActionParameter = "4";

        $this->lstItem = new QSelect2ListBox($this);
            $ledds = LedgerDetails::QueryArray( 
                                QQ::AndCondition(
                                QQ::Equal(QQN::LedgerDetails()->IdledgerDetailsObject->Grp, 52)      
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

            $this->lstList->SelectedValue = 2;

            if($vgrp == 4){
                $this->lstledger->SelectedValue = $vou->Dr;
            }elseif($vgrp == 3){
                $this->lstledger->SelectedValue = $vou->Cr;
            }elseif($vgrp == 6){
                $this->lstledger->SelectedValue = $vou->Grp;
            }
            
            // $_GET['tab'] = $vou->Grp;
            if(!isset($_GET['tab'])) {                
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/account/voucher_edit.php?id='.$_GET['id'].'&tab='.$vou->Grp);
            }
        }else{
          if(isset($_GET['tab'])){
            $inv = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
            $this->txtInvNo->Text = $inv->Abbrivation.''.$inv->Counter;
            $this->txtNarrDesign->Text = $inv->CommanNarration;
            $this->txtNarration->Text = $inv->CommanNarration;
            $vgrp = $_GET['tab'];
          }
            $this->calDate->DateTime = QDateTime::Now();
        }

        if($vgrp == 3){
            $this->lstledger->Focus();
        $leds = Ledger::QueryArray(
                QQ::AndCondition(
                QQ::NotEqual(QQN::Ledger()->IsGrp, 1),              
                QQ::OrCondition(
                QQ::Equal(QQN::Ledger()->Grp, 35),
                QQ::Equal(QQN::Ledger()->GrpObject->Grp, 35) //supplier        
                        )));
        $this->lstledger->Name = "Supplier";
         $this->lstledger->Width = 250;
        
        }elseif($vgrp == 4){
        $leds = Ledger::QueryArray(
                QQ::AndCondition(
                QQ::NotEqual(QQN::Ledger()->IsGrp, 1),
                QQ::OrCondition(
                QQ::Equal(QQN::Ledger()->Code, "D16"),        
                QQ::Equal(QQN::Ledger()->Grp, 36),
                QQ::Equal(QQN::Ledger()->GrpObject->Grp, 36) //custmer       
                        )));
        $this->lstledger->Name = "Customer";
         $this->lstledger->Width = 280;
        } elseif($vgrp == 6){
        $leds = Ledger::QueryArray(
                    QQ::AndCondition(
                    QQ::NotEqual(QQN::Ledger()->IsGrp, 1),
                    QQ::OrCondition(
                    QQ::Equal(QQN::Ledger()->Grp, 63)//salesman        
                 )));
        $this->lstledger->Name = "Salesmans";
        $this->lstledger->Width = 250;
        }else{
            $leds = Ledger::QueryArray(
                    QQ::AndCondition(
                    QQ::NotEqual(QQN::Ledger()->IsGrp, 1)
                    ));        
                
        }
         $this->lstledger->AddItem("- Select One -", NULL);    
         foreach ($leds as $led) $this->lstledger->AddItem($led->Name, $led->Idledger); 
         if(isset($_GET['id'])){
            $vou = Voucher::LoadByIdvoucher($_GET['id']);
            $this->txtInvNo->Text = $vou->InvNo;
            $this->calDate->DateTime = $vou->Date;
            $vgrp = $vou->Grp;

            if($vgrp == 4){
                $this->lstledger->SelectedValue = $vou->Dr;
            }elseif($vgrp == 3){
                $this->lstledger->SelectedValue = $vou->Cr;
            }elseif($vgrp == 6){
                $this->lstledger->SelectedValue = $vou->Cr;
            }
            
            $vhitms = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
            if($vhitms){
            foreach ($vhitms as $vhitm){  
            $this->lbldel[$vhitm->IdvoucherHasItem] = new QLabel($this);
            $this->lbldel[$vhitm->IdvoucherHasItem]->HtmlEntities = FALSE ;
            $this->lbldel[$vhitm->IdvoucherHasItem]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
            $this->lbldel[$vhitm->IdvoucherHasItem]->AddAction(new QClickEvent(), new QServerAction('Delete_Item'));
            $this->lbldel[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;

            $this->txtSerial[$vhitm->IdvoucherHasItem] = new QTextBox($this);
            $this->txtSerial[$vhitm->IdvoucherHasItem]->Placeholder = "EMI No";
            $this->txtSerial[$vhitm->IdvoucherHasItem]->Width = 100;
            $this->txtSerial[$vhitm->IdvoucherHasItem]->Height = 25;
            $this->txtSerial[$vhitm->IdvoucherHasItem]->AddAction(new QEnterKeyEvent(), new QAjaxAction('Add_Serial'));
            $this->txtSerial[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;
            
            $this->txtInQty[$vhitm->IdvoucherHasItem] = new QTextBox($this);
            $this->txtInQty[$vhitm->IdvoucherHasItem]->AddAction(new QEnterKeyEvent(), new QAjaxAction('change_value'));
            $this->txtInQty[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;
            
            $this->txtInRate[$vhitm->IdvoucherHasItem] = new QTextBox($this);
            $this->txtInRate[$vhitm->IdvoucherHasItem]->AddAction(new QEnterKeyEvent(), new QAjaxAction('change_value'));
            $this->txtInRate[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;
            
            if(isset($_GET['tab'])&& $_GET['tab']== 3)
            $serials = Serials::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Serials()->Iw, $vhitm->IdvoucherHasItem),
                                QQ::Equal(QQN::Serials()->Item, $vhitm->Item)
                        ));
            else 
            $serials = Serials::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Serials()->Ow, $vhitm->IdvoucherHasItem),
                            QQ::Equal(QQN::Serials()->Item, $vhitm->Item)
                    ));
            if($serials){
                foreach ($serials as $serial){
                    $this->lblserial[$vhitm->IdvoucherHasItem][$serial->Idserials] = new QLabel($this);
                    $this->lblserial[$vhitm->IdvoucherHasItem][$serial->Idserials]->ActionParameter = $vhitm->IdvoucherHasItem.'|'.$serial->Idserials;

                    $this->lblSrdel[$vhitm->IdvoucherHasItem][$serial->Idserials] = new QLabel($this);
                    $this->lblSrdel[$vhitm->IdvoucherHasItem][$serial->Idserials]->HtmlEntities = FALSE ;
                    $this->lblSrdel[$vhitm->IdvoucherHasItem][$serial->Idserials]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                    $this->lblSrdel[$vhitm->IdvoucherHasItem][$serial->Idserials]->AddAction(new QClickEvent(), new QServerAction('Delete_Serial'));
                    $this->lblSrdel[$vhitm->IdvoucherHasItem][$serial->Idserials]->ActionParameter = $vhitm->IdvoucherHasItem.'|'.$serial->Idserials;
                }
              }
            }
          }
        }
    }
    
    protected function txtEMINO_Enter(){
        $item = Serials::QueryArray(
                      QQ::AndCondition (
                      QQ::Equal(QQN::Serials()->Serial, $this->txtEMINO->Text)                
                ));
        if($item){
            $chkitem = Serials::QueryArray(
                            QQ::AndCondition (
                            QQ::Equal(QQN::Serials()->Serial, $this->txtEMINO->Text),
                            QQ::Equal(QQN::Serials()->Sow, NULL)        
                ));
            if($chkitem){
                foreach ($chkitem as $product){}
                if(isset($_GET['id'])){
                    $voucher = Voucher::LoadByIdvoucher($_GET['id']);
                }else{
                    $voucher = new Voucher();
                    $voucher->Date = QDateTime::Now();
                    $code = VoucherGrp::LoadByIdvoucherGrp(6);
                    $voucher->InvNo = $code->Abbrivation.''.$code->Counter;
                    $code->Counter = $code->Counter + 1;
                    $code->Save();
                    $voucher->Grp = 6;
                    $voucher->DataBy = $_SESSION['login'];
                    $voucher->Amount = 0.0;                    
                }
                $voucher->Dr = 79;//id for godown
                $voucher->Cr = $this->lstledger->SelectedValue;
                $voucher->Save();
                
                $chkvhi = VoucherHasItem::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::VoucherHasItem()->Voucher, $voucher->Idvoucher),
                            QQ::Equal(QQN::VoucherHasItem()->Item, $product->Item)
                          )
                        );
                if($chkvhi){
                    foreach ($chkvhi as $vhi){}                                                            
                    $vhi->Qty = $vhi->Qty + 1;                    
                    $vhi->Save();
                }else{                        
                    $vhi = new VoucherHasItem();
                    $vhi->Voucher = $voucher->Idvoucher;
                    $vhi->Item = $product->Item;
                    $vhi->Qty = 1;
                    $vhi->Rate = $product->ItemObject->Mrp;
                    $vhi->Per = $product->ItemObject->Unit;
                    $vhi->DiscPer = 0.0;
                    $vhi->DiscAmt = 0.0;
                    $vhi->Amount = 0.0;
                    $vhi->Save();
                }
                $product->Sow = $vhi->IdvoucherHasItem;
                $product->Save();
                
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/account/voucher_edit.php?id='.$voucher->Idvoucher.'&tab=6');
            }else{
                QApplication::DisplayAlert("EMI number already used");
            }
        }else{
            QApplication::DisplayAlert("Invalid EMI number");
        }
    }

    protected function txtAmount_EnterKey(){
        $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
        $login = Login::LoadByIdlogin($_SESSION['login']);

         if(isset($_GET['id'])){
            $vov =  Voucher::LoadByIdvoucher($_GET['id']);
            if($vov->Dr == NULL || $vov->Cr == NULL){
            if($vov->Dr == NULL)
                $vov->Dr = $ledger->Idledger;
            else
                $vov->Cr = $ledger->Idledger;
            $vov->Save(); 
            $this->Refresh();
        }else{
            $Voucher =  Voucher::LoadByIdvoucher($_GET['id']);    
            $vov = new Voucher();
            $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
            $code->Counter = $code->Counter + 1;
            $code->Save();
            
            $vov->DataBy = $login->Idlogin;
            $vov->InvNo = $code->Abbrivation.''.$code->Counter;
            $vov->Date =  $Voucher->Date; 
            $vov->Grp = $_GET['tab'];
            if($this->txtNarration->Text != ""){
               $vov->Narration  = base64_encode($this->txtNarration->Text);
            }
            $links = Voucher::QueryArray(
                     QQ::OrCondition(
                     QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                     QQ::Equal(QQN::Voucher()->RefNo, $_GET['id'])        
                    ));
            if($links){
            foreach ($links as $link){}
             if($this->lstList->SelectedValue == 1){
                $vov->Cr = $link->Cr;
              }
            }
            if($this->lstList->SelectedValue == 1){
                $vov->Dr = $ledger->Idledger;
            }
            if($this->lstList->SelectedValue == 2){
               $vov->Cr = $ledger->Idledger;
               $vov->Dr = $Voucher->Dr;
            }  
            $vov->Amount = $this->txtAmount->Text;
            $vov->RefNo = $Voucher->Idvoucher;
            $vov->Save();
            }
            $this->Refresh();
           }else{             
            $vov = new Voucher();
            $vov->InvNo = $this->txtInvNo->Text;
            $vov->Date =  $this->calDate->DateTime; 
            $vov->DataBy = $login->Idlogin;
            $vov->Grp = $_GET['tab'];
            $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
            $code->Counter = $code->Counter + 1;
            $code->Save();
            if($this->lstList->SelectedValue == 2)$vov->Cr = $ledger->Idledger;
            if($this->lstList->SelectedValue == 1)$vov->Dr = $ledger->Idledger;
            $vov->Amount = $this->txtAmount->Text;
            if($this->txtNarration->Text != ""){
               $vov->Narration  = base64_encode($this->txtNarration->Text);
            }
            $vov->Save();
            $this->Refresh();
        }
    }
    protected function calculate($strFormId, $strControlId, $strParameter){
        $vgrp = NULL;
        if(isset($_GET['id'])){
            $vou = Voucher::LoadByIdvoucher($_GET['id']);
            $vgrp = $vou->Grp;
        }else{
          if(isset($_GET['tab']))
            $vgrp = $_GET['tab'];
        }
        $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
        $product = LedgerDetails::LoadByIdledgerDetails($this->lstItem->SelectedValue);
        $disc = Settings::LoadByName("Tax Discount");
        if($strParameter == 1){
            if($vgrp == 4){
            if($ledger->Grp == 47) //Delear   
            $this->txtRate->Text = $product->Dp;
            else
              $this->txtRate->Text = number_format($product->Mrp,2,'.','');
              $this->lblTaxper->Text = number_format($product->BrandObject->VatRate,2,'.','');  
              $this->lblDiscper->Text = number_format($disc->Option * $this->lblTaxper->Text, 2,'.','');
            }elseif($vgrp == 3){
              $this->txtRate->Text = $product->Cost;
            }
            $this->txtRate->Focus();
        }elseif($strParameter == 2){
            $this->lblGrossAmt->Text = number_format($this->txtRate->Text * $this->txtQty->Text, 2,'.','');
            if($vgrp == 4){
            $this->txtDiscount->Text = number_format( ($this->lblGrossAmt->Text * $this->lblDiscper->Text)/100 ,3,'.','');
            $this->txtTax->Text = number_format( (($this->lblGrossAmt->Text - $this->txtDiscount->Text)  * $this->lblTaxper->Text)/100 ,2,'.','');
            }
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
    protected function change_value($strFormId, $strControlId, $strParameter){
        $vhi = VoucherHasItem::LoadByIdvoucherHasItem($strParameter);
        $perunitdic = $perunittax = $gamt = $tax = $dis = $amt =0;
        $perunitdic = number_format(($vhi->DiscAmt / $vhi->Qty),2,'.','');
        $perunittax = number_format(($vhi->TaxAmt / $vhi->Qty),2,'.','');
   
        $Qty = $this->txtInQty[$strParameter]->Text;
        $rate = $this->txtInRate[$strParameter]->Text;
        
        $gamt = number_format(($Qty * $rate),2,'.','');
        $dis = number_format(($Qty * $perunitdic),2,'.','');
        $tax = number_format(($Qty * $perunittax),2,'.','');
 
        $amt = number_format($gamt - $dis + $tax,2,'.','');
        
        $taxper = number_format(($tax/($gamt-$dis))*100,2,'.','');
        $dicper = number_format(($dis/$gamt)*100,3,'.','');
         
       $vhi->Amount = $amt;
       $vhi->TaxAmt = $tax;
       $vhi->TaxPer = $taxper;
       $vhi->DiscPer =$dicper;
       $vhi->DiscAmt = $dis;
       $vhi->Qty = $Qty;
       $vhi->Rate = $rate;
       $vhi->Save();
       $amount = 0;
       $vhps = VoucherHasItem::LoadArrayByVoucher($vhi->Voucher);
       foreach ($vhps as $vhp){
           $amount = $amount + $vhp->Amount;
       }
       $vov = Voucher::LoadByIdvoucher($vhi->Voucher);
       $vov->Amount = number_format($amount,2,'.','');
       $vov->Save();
       $this->Refresh();
    }
    protected function Add_Item(){
        $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
        $login = Login::LoadByIdlogin($_SESSION['login']);
        $product = LedgerDetails::LoadByIdledgerDetails($this->lstItem->SelectedValue);

        if(isset($_GET['id'])){
          $voucher = Voucher::LoadByIdvoucher($_GET['id']); 
        }else{
            $voucher = new Voucher();
            $voucher->InvNo = $this->txtInvNo->Text;
            $voucher->Grp = $_GET['tab'];
            $voucher->Amount = $this->txtAmt->Text;
        }
            $voucher->Date = $this->calDate->DateTime; 
            $voucher->DataBy = $login->Idlogin;
            if($voucher->Grp == 4){ //sales
                $voucher->Dr = $this->lstledger->SelectedValue;
                $voucher->Cr = 56; //sales account
            }elseif($voucher->Grp == 3){ //purchase
                $voucher->Cr = $this->lstledger->SelectedValue;
                $voucher->Dr = 57; //purchase account
            }
            $voucher->Save();
            //voucher has item  Entry
            $vhitm = new VoucherHasItem();
            $vhitm->Voucher = $voucher->Idvoucher;
            $vhitm->Item  = $product->IdledgerDetails;
            $vhitm->Per = $product->Unit;
            $vhitm->Qty = $this->txtQty->Text;
            $vhitm->Rate = $this->txtRate->Text;
            $vhitm->DiscAmt = $this->txtDiscount->Text;
            $vhitm->DiscPer = $this->lblDiscper->Text;
            $vhitm->TaxAmt = $this->txtTax->Text;
            $vhitm->TaxPer = $this->lblTaxper->Text;
            $vhitm->Amount = $this->txtAmt->Text;
            $vhitm->Save();
            $this->Refresh();
    }
    protected function Add_Serial(){
       $vhps = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
       foreach ($vhps as $vhp){}
        if($_GET['tab'] == 3){
            $item = Serials::QueryArray(
                    QQ::AndCondition (
                     QQ::Equal(QQN::Serials()->Iw, $vhp->IdvoucherHasItem),
                     QQ::Equal(QQN::Serials()->Item, $vhp->Item),
                     QQ::Equal(QQN::Serials()->Serial, $this->txtSerial[$vhp->IdvoucherHasItem]->Text)        
                  ));
            if(!$item){
                $serial = new Serials();
                $serial->Iw = $vhp->IdvoucherHasItem;
                $serial->Item = $vhp->Item;
                $serial->Serial = $this->txtSerial[$vhp->IdvoucherHasItem]->Text;
                $serial->Save();
                $this->Refresh();
            }else{
                QApplication::DisplayAlert("Serial No Already Exist");   
            }
        }else{
            $oldSerial = Serials::QueryArray (
                    QQ::AndCondition (
                      QQ::Equal(QQN::Serials()->Item, $vhp->Item),        
                      QQ::Equal(QQN::Serials()->Serial, $this->txtSerial[$vhp->IdvoucherHasItem]->Text)       
                   ));
            if($oldSerial){
              $oldSerial[0]->Ow = $vhp->IdvoucherHasItem;
              $oldSerial[0]->Save();
              $this->Refresh();
            }else{
                QApplication::DisplayAlert("plz enter valid Serial No");  
            }
          }
       // $this->Refresh();
    }
    protected function btnSave_click(){
        $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
        $login = Login::LoadByIdlogin($_SESSION['login']);
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
         if($Voucher->Grp == 1 || $Voucher->Grp == 2 || $Voucher->Grp == 5){
             
             $this->btnCode_Click();
              $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
          if($Voucher){
              if($this->txtNarration->Text != ""){
               $Voucher->Narration  = base64_encode($this->txtNarration->Text);
            }
          }
         }
         if($Voucher->Grp == 4){ //sales
            $invats = Voucher::QueryArray(
                      QQ::AndCondition(
                      QQ::Equal(QQN::Voucher()->Parrent, $Voucher->Idvoucher),
                      QQ::Equal(QQN::Voucher()->Dr, 51),
                      QQ::Equal(QQN::Voucher()->Cr, $Voucher->Dr)        
                              ));
            if($invats){
                foreach ($invats as $invat){}
            }else{
                $invat = new Voucher();
                $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $invat->DataBy = $login->Idlogin;
                $invat->Parrent = $Voucher->Idvoucher;
                $invat->InvNo = $code->Abbrivation.''.$code->Counter;
                $invat->Date =  $Voucher->Date; 
                $invat->Grp = $_GET['tab'];
                $invat->Cr = $Voucher->Dr;
                $invat->Dr = 51; //Input vat;
            }
            $invat->Amount = $this->lblPaidTax->Text;
            $invat->Save();

            $outdiscs = Voucher::QueryArray(
                      QQ::AndCondition(
                      QQ::Equal(QQN::Voucher()->Parrent, $Voucher->Idvoucher),
                      QQ::Equal(QQN::Voucher()->Dr,$Voucher->Dr),
                      QQ::Equal(QQN::Voucher()->Cr, 55)        
                    ));
            if($outdiscs){
                foreach ($outdiscs as $outdisc){}
            }else{
                $outdisc = new Voucher();
                $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $outdisc->DataBy = $login->Idlogin;
                $outdisc->Parrent = $Voucher->Idvoucher;
                $outdisc->InvNo = $code->Abbrivation.''.$code->Counter;
                $outdisc->Date =  $Voucher->Date; 
                $outdisc->Grp = $_GET['tab'];
                $outdisc->Cr = 55; //output discount
                $outdisc->Dr = $Voucher->Dr;
            }
            $outdisc->Amount = $this->lblPaidTax->Text;
            $outdisc->Save(); 
        }elseif($Voucher->Grp == 3){ //purchase
            $outvats = Voucher::QueryArray(
                      QQ::AndCondition(
                       QQ::Equal(QQN::Voucher()->Parrent, $Voucher->Idvoucher),
                       QQ::Equal(QQN::Voucher()->Dr, $Voucher->Cr),
                       QQ::Equal(QQN::Voucher()->Cr, 53)        
                     ));
            if($outvats){
                foreach ($outvats as $outvat){}
            }else{
                $outvat = new Voucher();
                $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $outvat->DataBy = $login->Idlogin;
                $outvat->Parrent = $Voucher->Idvoucher;
                $outvat->InvNo = $code->Abbrivation.''.$code->Counter;
                $outvat->Date =  $Voucher->Date; 
                $outvat->Grp = $_GET['tab'];
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
                $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);
                $code->Counter = $code->Counter + 1;
                $code->Save();
                $indisc->DataBy = $login->Idlogin;
                $indisc->Parrent = $Voucher->Idvoucher;
                $indisc->InvNo = $code->Abbrivation.''.$code->Counter;
                $indisc->Date =  $Voucher->Date; 
                $indisc->Grp = $_GET['tab'];
                $indisc->Cr = $Voucher->Cr;
                $indisc->Dr = 54; //Input Discount
            }
            $indisc->Amount = $this->lblPaidDis->Text;
            $indisc->Save(); 

        }
            $code = VoucherGrp::LoadByIdvoucherGrp($_GET['tab']);                    
            $code->Counter = $code->Counter + 1;
            $code->Save();
            if($_GET['tab']== 1 || $_GET['tab']== 2 || $_GET['tab']== 4 ){
                $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/print.php?id='.$Voucher->Idvoucher);
            }
            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/voucher_edit.php?tab='.$_GET['tab']);            
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
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/voucher_edit.php?tab='.$_GET['tab']);  
    }else{
        $this->Refresh();
    }
    }
    protected function Delete_Serial($strFormId, $strControlId, $strParameter){
        $id = explode("|", $strParameter);
        $vhp = VoucherHasItem::LoadByIdvoucherHasItem($id[0]);
        $serial = Serials::LoadByIdserials($id[1]);
        if($vhp->IdvoucherHasItem == $serial->Ow){
            $serial->Ow = NULL;
            if($serial->Iw !=NULL){
               $serial->Ow = NULL;
               $serial->Save();
            }else{
               $serial->Save(); 
            }
        }elseif($vhp->IdvoucherHasItem == $serial->Iw) {
             $serial->Iw = NULL;
            if($serial->Ow ==NULL){
               $serial->Delete(); 
            }else{
               $serial->Save(); 
            }
        }
	$this->Refresh();				
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
         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/voucher_edit.php?id='.$Voucher->Idvoucher.'&tab='.$_GET['tab']);  
    }

    protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/voucher_edit.php');
    }
    protected function btnPrint_Click($strFormId, $strControlId, $strParameter) {
        $Voucher = Voucher::LoadByInvNo($this->txtInvNo->Text);
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/print.php?id='.$Voucher->Idvoucher);
    }
}

VoucherEditForm::Run('VoucherEditForm');
?>