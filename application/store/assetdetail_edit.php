<?php
  require('../../qcubed.inc.php');
  
class BookDetailEditForm extends QForm {
        protected $txtCode;
        protected $txtName;
        protected $lstCat;
        protected $lstUnit;
        protected $lstauthor;
        protected $txtprice;
        protected $btnSave;
        protected $btnCancel;
        protected $btnDelete;
       
        protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            } 
        protected function Form_Create() {
             parent::Form_Create();
             
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = "Code";
            //book counter
            $code = Settings::LoadByIdsettings(63);
            $this->txtCode->Text = 'PR'.$code->Option;
            $this->txtCode->Width = 150;
            $this->txtCode->ReadOnly = TRUE;
         
            
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Name";
            $this->txtName->Required = TRUE;
            
            $this->lstUnit = new QSelect2ListBox($this);
            $this->lstUnit->Name = "Unit";
            $this->lstUnit->AddItem('Select One',NULL);
             $units = Unit::LoadAll();
             foreach($units as $unit){
                 $this->lstUnit->AddItem($unit->Name,$unit->Idunit);
             }
             $this->lstUnit->Required = TRUE;
             
             $this->lstCat = new QSelect2ListBox($this);
             $this->lstCat->Name = "Category";
             $this->lstCat->AddItem('-Select Product Category',NULL);
           //  $sets = Settings::LoadByName('depreciation');
             $stkgrps = StockGrp::LoadAll();
                    foreach ($stkgrps as $stkgrp){
                        $this->lstCat->AddItem($stkgrp->Name ,$stkgrp->IdstockGrp);
                    }
             
            $this->txtprice = new QTextBox($this);
            $this->txtprice->Name = "Price";
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->CausesValidation = TRUE;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));
          
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;
                $item = LedgerDetails::LoadByIdledgerDetails($_GET['id']);
                $this->txtCode->Text = $item->IdledgerDetailsObject->Code;
                $this->txtName->Text = $item->DisplayName;
                $this->lstUnit->SelectedValue = $item->Unit;
                $this->txtprice->Text = $item->Mrp; 
                $this->lstCat->SelectedValue = $item->StockGrp;
            }
        }
        protected function btnSave_Click(){
            if(isset($_GET['id'])){
                $ledd = LedgerDetails::LoadByIdledgerDetails($_GET['id']);
                $ledger = Ledger::LoadByIdledger($ledd->IdledgerDetails);
                $ledger->Name = $this->txtName->Text.'-'.$this->txtCode->Text;
                $ledd->DisplayName = $this->txtName->Text;
                $ledd->Mrp = $this->txtprice->Text;                
                $ledd->Unit = $this->lstUnit->SelectedValue;
                $ledd->StockGrp = $this->lstCat->SelectedValue;
                $ledd->Save();
                $ledger->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/assetdetail_list.php');    
            }else{
                $led1 = LedgerDetails::LoadByDisplayName($this->txtName->Text);
                if(!$led1){
                    $ledger = new Ledger();
                    $code = Settings::LoadByIdsettings(63); //Store Asset counter
                    $this->txtCode->Text = 'PR'.$code->Option;                
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $ledger->Name = $this->txtName->Text.'-'.$this->txtCode->Text;
                    $ledger->Code = $this->txtCode->Text;
                    $ledger->Grp = getsettingvalue('store_asset'); //Store Asset Group
                    $ledger->IsGrp = 0;
                    $ledger->Save();

                    $ledd = new LedgerDetails();
                    $ledd->IdledgerDetails = $ledger->Idledger;
                    $ledd->DisplayName = $this->txtName->Text;
                    $ledd->Mrp = $this->txtprice->Text;                
                    $ledd->Unit = $this->lstUnit->SelectedValue;
                    $ledd->StockGrp = $this->lstCat->SelectedValue;
                    $ledd->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/assetdetail_list.php');   
                }else{
                    QApplication::DisplayAlert('Asset already exists');
                }
            }
        }
        
        protected function btnDelete_Click(){
            $item = LedgerDetails::LoadByIdledgerDetails($_GET['id']);
            $ledger = Ledger::LoadByIdledger($item->IdledgerDetails);
            $item->Delete();
            $ledger->Delete();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/assetdetail_list.php');     
        }
        protected function btnCancel_Click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/assetdetail_list.php');   
        }
       
}
 BookDetailEditForm::Run('BookDetailEditForm');
?>
