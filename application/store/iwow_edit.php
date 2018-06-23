<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/IwowEditFormBase.class.php');

	class IwowEditForm extends IwowEditFormBase {
            protected $txtFrom;
            protected $arrledger;
            protected $txtTo;
            protected $txtAsset;
            protected $arrdept;
            protected $lstpo;
            protected $arraseet;
            protected $dtgpurcahse;
            protected $chkClosed;
            protected $txtfromdept;
            protected $txttodept;
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                   
                    $this->btnDelete->Visible = FALSE;
                    $this->btnSave->Visible = FALSE;
                    $this->btnCancel->Visible = FALSE;
                        
                    $this->txtCode->Width = 70;
                    $this->txtCode->ReadOnly = TRUE;
                    $this->txtQty->Width = 70;
                    
                    $this->arraseet = array();
                    $this->arrledger = array();
                    
                     if(isset($_GET['cat'])){
                        $this->btnDelete->Visible = TRUE;
                        $this->btnSave->Visible = TRUE;
                        $this->btnCancel->Visible = TRUE;
                        $this->lstCategoryObject->SelectedValue = $_GET['cat']; 
                    }
                    
                    $ledgers = Ledger::LoadArrayBySubOf(60);
                      foreach ($ledgers as $ledger){
                      $this->arrledger[$ledger->Idledger] = $ledger->Name;
                    }
                    
                    $this->txtFrom = new QJavaScriptAutoCompleteTextBox($this, $this->arrledger);
                    $this->txtFrom->Name = 'From';
                    $this->txtTo = new QJavaScriptAutoCompleteTextBox($this, $this->arrledger);
                    $this->txtTo->Name = 'To';
                    if($this->lstCategoryObject->SelectedValue == 3){
                        $this->txtTo->Name = 'To Supplier';
                    }
                    
                    $assets = Product::LoadArrayByCatagory(1);
                    foreach ($assets as $asset){
                        $this->arraseet[$asset->Idproduct] = $asset->Name;   
                    }
                    $this->txtAsset = new QJavaScriptAutoCompleteTextBox($this, $this->arraseet);
                    $this->txtAsset->Name = 'Asset';
                    
                    $this->lstpo = new QListBox($this);
                    $this->lstpo->Name = 'Refrence Of PO';
                    $this->lstpo->AddItem('-Select One-',NULL);
                    $this->lstpo->Width = 400;
                    $this->lstpo->Visible= FALSE;
                    
                    $pos = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Cat, 1),
                                QQ::Equal(QQN::Voucher()->Approved, 1),
                                QQ::NotEqual(QQN::Voucher()->Lock, 1)    
                                    ));
                    foreach ($pos as $po){
                        $this->lstpo->AddItem($po->Titlte, $po->Idvoucher);
                    }
                    if(isset($_GET['po'])){
                        $this->lstpo->SelectedValue = $_GET['po'];
                        $this->lstpo->Visible= TRUE;
                    }
                    $this->chkClosed = new QCheckBox($this);
                    $this->chkClosed->Name = 'Close';
                    $this->chkClosed->Visible = FALSE;
                    
                    
                    // Style the DataGrid (if desired)
                    $this->dtgpurcahse = new QDataGrid($this);
                    $this->dtgpurcahse->CssClass = 'datagrid';
                    $this->dtgpurcahse->AlternateRowStyle->CssClass = 'alternate';
                    $this->dtgpurcahse->Width = 600;
                    
                    $this->dtgpurcahse->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=5'));
                    $this->dtgpurcahse->AddColumn(new QDataGridColumn('Product','<?= $_ITEM->ProductIdproductObject ?>', 'HtmlEntities=false'));
                    $this->dtgpurcahse->AddColumn(new QDataGridColumn('Qty', '<div align="center"><?= $_ITEM->Qty ?></div>', 'HtmlEntities=false', 'Width=50'));
                    $this->dtgpurcahse->AddColumn(new QDataGridColumn('Received', '<div align="center"><?= $_FORM-> rendereceived($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=5'));
                    $this->dtgpurcahse->AddColumn(new QDataGridColumn('Pending', '<div align="center"><?= $_FORM-> renderpending($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=5'));
                    $this->dtgpurcahse->AddColumn(new QDataGridColumn('Receive', '<?= $_FORM-> rendereceive($_ITEM) ?>', 'HtmlEntities=false', 'Width=5'));
                    
                    $this->dtgpurcahse->SetDataBinder('dtgpurcahse_Bind');
                    
                    $this->lstpo->AddAction(new QChangeEvent(), new QAjaxAction('lstpo_Change'));
                    
                    $this->txtAsset->Visible = FALSE;
                    $this->txtFrom->Visible = FALSE;
                    $this->txtTo->Visible = FALSE;
                    $this->txtCode->Visible = FALSE;
                    $this->txtQty->Visible = FALSE;
                    $this->dtgpurcahse->Visible = FALSE;
                    
                    //if/else conditions for field visibility
                    if($this->lstCategoryObject->SelectedValue == 2){
                      $this->lstpo->Visible= TRUE;
                      $this->dtgpurcahse->Visible = TRUE;
                      $this->btnSave->Visible = TRUE;
                      $this->btnCancel->Visible = TRUE;
                      $this->chkClosed->Visible = TRUE;
                    }elseif ($this->lstCategoryObject->SelectedValue == 3 ) {
                    $this->txtAsset->Visible = TRUE;
                    $this->txtFrom->Visible = FALSE;
                    $this->txtTo->Visible = TRUE;
                    $this->txtCode->Visible = TRUE;
                    $this->txtQty->Visible = TRUE;
                    $this->btnSave->Visible = TRUE;
                    $this->btnCancel->Visible = TRUE;
                    }
                    if($this->mctIwow->EditMode == FALSE){
                        if ($this->lstCategoryObject->SelectedValue == 3 || $this->lstCategoryObject->SelectedValue == 4 || $this->lstCategoryObject->SelectedValue == 5) {
                        $code = Code::LoadByName('Store IW/OW');
                        $code->Code = $code->Code +1;
                        $code->Save();
                        $this->txtCode->Text = 'S'.$code->Code;
                        }
                        
                        $this->calDate->DateTime = QDateTime::Now();
                        
                    }else{
                        $this->btnDelete->Visible = TRUE;
                        $this->btnSave->Visible = TRUE;
                        $this->btnCancel->Visible = TRUE;
                        $this->txtFrom->Text = $this->lstByObject->SelectedName;
                        $this->txtTo->Text = $this->lstToObject->SelectedName;
                        $this->txtAsset->Text = $this->lstProductObject->SelectedName;
                    }
                }
               
                protected function lstpo_Change(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/iwow_edit.php?cat=2&po='.$this->lstpo->SelectedValue);
                }
                public function rendereceive(VoucherHasProduct $vhp) {
                    $objControlId = 'receive'.$vhp->Id;
                    if (!$objControl = $this->GetControl($objControlId)) {
                        $objControl = new QTextBox($this, $objControlId);
                        $objControl->Width = 70;
                        $objControl->AddAction(new QEnterKeyEvent(), new QServerAction("rendereceive_Click"));
                        $objControl->ActionParameter = $vhp->Id;
                        $inwards = Iwow::LoadArrayByRefPo($vhp->Id);
                    
                        if($inwards){
                        $ins =$pending= 0;
                        foreach ($inwards as $inward){
                        $ins =  $ins +$inward->Qty;
                        }
                        $pending = $vhp->Qty - $ins;
                        if($pending == 0){
                        $objControl->Visible =  FALSE;    
                        }
                        }
                    }
                         return $objControl->Render(false);
               }

               public function rendereceive_Click($strFormId, $strControlId, $strParameter) {
                    $intInId = intval($strParameter);
                    $vov = Voucher::LoadByIdvoucher($_GET['po']);
                    $vhp = VoucherHasProduct::LoadById($intInId);
                    $login = Login::LoadByIdlogin($_SESSION['idlogin']);
                    $ledgers = Ledger::LoadArrayByMember($login->Idlogin);
                    foreach ($ledgers as $ledger){}
                    $inward = new Iwow();
                    $inward->Product = $vhp->ProductIdproduct;
                    $inward->RefPo = $vhp->Id;
                    $inward->Qty = $this->GetControl($strControlId)->Text;
                    $inward->By = $vov->To;
                    $inward->To = $ledger->Idledger;
                    $inward->Category = 2;
                    $inward->ToDepartment = $login->IdloginObject->Department;
                    $inward->Date = QDateTime::Now();
                    $code = Code::LoadByName('Store IW/OW');
                    $code->Code = $code->Code +1;
                    $code->Save();
                    $inward->Code = 'S'.$code->Code;
                    
                    $inward->Save();
                    
                    $stocks = ProductPrice::QueryArray(
                                 QQ::AndCondition(
                                 QQ::Equal(QQN::ProductPrice()->Product, $vhp->ProductIdproduct),
                                 QQ::Equal(QQN::ProductPrice()->Date, date('Ymd',  strtotime($inward->Date))),
                                 QQ::Equal(QQN::ProductPrice()->Department, $inward->ToDepartment)        
                                        ));
                    if($stocks){
                        foreach ($stocks as $stock){}
                        $stock->Inward = $stock->Inward + $this->GetControl($strControlId)->Text;
                        $stock->Closinng = $stock->Opening + $stock->Inward - $stock->Outward;
                        $stock->Save();

                    }else{
                        $oldstocks = ProductPrice::QueryArray(
                                 QQ::AndCondition(
                                 QQ::Equal(QQN::ProductPrice()->Product, $vhp->ProductIdproduct),
                                 QQ::Equal(QQN::ProductPrice()->Department, $login->IdloginObject->Department)        
                                        ));
                        $stock = new ProductPrice();
                        $stock->Date = QDateTime::Now();
                        $stock->Product = $vhp->ProductIdproduct;
                        $stock->Company = $login->Company;
                        $stock->Department = $inward->ToDepartment;
                        $stock->PurchasePrice = $vhp->Rate;
                        if($oldstocks){
                            foreach ($oldstocks as $oldstock){}
                            $stock->Opening = $oldstock->Closinng;
                        }else{
                            $stock->Opening = 0;
                        }
                        $stock->Outward =0;
                        $stock->Inward = $this->GetControl($strControlId)->Text;
                        $stock->Closinng = $stock->Opening + $stock->Inward - $stock->Outward;
                        $stock->Save();
                    }

                    $this->Refresh();
                }
                
                public function renderpending(VoucherHasProduct $vhp) {
                    $objControlId = 'pending'.$vhp->Id;
                    if (!$objControl = $this->GetControl($objControlId)) {
                        $objControl = new QLabel($this, $objControlId);
                        $objControl->Width = 50;
                        $inwards = Iwow::LoadArrayByRefPo($vhp->Id);
                        $pending =0;
                        if($inwards)
                            foreach ($inwards as $inward){
                            $pending = $pending +$inward->Qty;
                            }
                            
                        $objControl->Text = $vhp->Qty - $pending;
                         }
                         return $objControl->Render(false);
               }
                public function rendereceived(VoucherHasProduct $vhp) {
                    $objControlId = 'revc'.$vhp->Id;
                    if (!$objControl = $this->GetControl($objControlId)) {
                        $objControl = new QLabel($this, $objControlId);
                        $objControl->Width = 50;
                        $inwards = Iwow::LoadArrayByRefPo($vhp->Id);
                        $pending =0;
                        if($inwards)
                            foreach ($inwards as $inward){
                            $pending =$pending +$inward->Qty;
                            }
                            $objControl->Text =  $pending;
                          
                        
                         }
                         return $objControl->Render(false);
               }
               
               protected function dtgpurcahse_Bind(){
                    if(isset($_GET['po'])){
                    $vhp = VoucherHasProduct::LoadArrayByVoucherIdvoucher($_GET['po']);
                    $this->dtgpurcahse->DataSource = $vhp;
                    }
                }
                protected function Refresh(){
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/iwow_edit.php?cat=2&po='.$this->lstpo->SelectedValue);    
                }
                 protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                        $login = Login::LoadByIdlogin($_SESSION['idlogin']);
			if($this->lstCategoryObject->SelectedValue == 2){
                          if($this->chkClosed->Checked == 1){
                             $PO = Voucher::LoadByIdvoucher($_GET['po']);
                             $PO->Lock =1;
                             $PO->Save();
                          }  
                        }else{
                        $from = Ledger::LoadByIdledger(array_search($this->txtFrom->Text, $this->arrledger));
                        $to = Ledger::LoadByIdledger(array_search($this->txtTo->Text, $this->arrledger));
                        $prod = array_search($this->txtAsset->Text, $this->arraseet);
                        $ledgers = Ledger::LoadArrayByMember($login->Idlogin);
                        foreach ($ledgers as $ledger){}
                        if($this->lstCategoryObject->SelectedValue == 3){
                            $this->lstByObject->SelectedValue = $ledger->Idledger;
                            $this->lstToObject->SelectedValue = $to->Idledger;
                            $this->lstFromDepartmentObject->SelectedValue = $ledger->MemberObject->Department;
                        }elseif($this->lstCategoryObject->SelectedValue == 4){
                            $this->lstByObject->SelectedValue = $from ->Idledger;
                            $this->lstToObject->SelectedValue = $ledger->Idledger;
                            $this->lstFromDepartmentObject->SelectedValue = $from->MemberObject->Department;
                            $this->lstToDepartmentObject->SelectedValue = $ledger->MemberObject->Department;
                        }elseif($this->lstCategoryObject->SelectedValue == 5){
                            $this->lstByObject->SelectedValue = $ledger ->Idledger;
                            $this->lstToObject->SelectedValue = $to->Idledger;
                            $this->lstFromDepartmentObject->SelectedValue = $ledger->MemberObject->Department;
                            $this->lstToDepartmentObject->SelectedValue = $to->MemberObject->Department;
                        }
                        $this->lstProductObject->SelectedValue = $prod;
                        $this->mctIwow->SaveIwow();
                        $inward = Iwow::LoadByCode($this->txtCode->Text);
                        
                        if($inward->FromDepartment !=NULL){ 
                        $fromstocks = ProductPrice::QueryArray(
                                     QQ::AndCondition(
                                     QQ::Equal(QQN::ProductPrice()->Date, date('Ymd',  strtotime($inward->Date))),
                                     QQ::Equal(QQN::ProductPrice()->Product, $inward->Product),
                                     QQ::Equal(QQN::ProductPrice()->Department, $inward->FromDepartment)        
                                             ));
                        if($fromstocks){
                            foreach ($fromstocks as $fromstock){}
                            if($inward->Category == 3 || $inward->Category == 5){
                               $fromstock->Outward = $fromstock->Outward +  $inward->Qty;
                            }elseif($inward->Category == 4){
                                $fromstock->Inward = $fromstock->Inward  + $inward->Qty;
                            }
                            $fromstock->Closinng = ($fromstock->Opening + $fromstock->Inward) -$fromstock->Outward ;
                            $fromstock->Save();
                        }else{
                             $fromoldstocks  =  ProductPrice::QueryArray(
                                     QQ::AndCondition(
                                     QQ::Equal(QQN::ProductPrice()->Product, $inward->Product),
                                     QQ::Equal(QQN::ProductPrice()->Department, $inward->FromDepartment)        
                                             ));
                             
                             $fromstock = new ProductPrice();
                             $fromstock->Date = $inward->Date;
                             $fromstock->Department = $inward->FromDepartment;
                             $fromstock->Product = $inward->Product;
                             $fromstock->Company = $login->Company;
                             if($fromoldstocks){
                                 foreach ($fromoldstocks as $fromoldstock){}
                                 $fromstock->Opening = $fromoldstock->Closinng;
                             }else{
                                 $fromstock->Opening =0;
                             }
                             if($inward->Category == 3 || $inward->Category == 5){
                               $fromstock->Outward = $inward->Qty;
                               $fromstock->Inward = 0;
                            }elseif($inward->Category == 4){
                                $fromstock->Inward = $inward->Qty;
                                $fromstock->Outward = 0;
                            }
                            
                            $fromstock->Closinng = ($fromstock->Opening + $fromstock->Inward) -$fromstock->Outward ;
                            $fromstock->Save();
                        }
                        }
                        //todepartment
                        if($inward->ToDepartment !=NULL){ 
                        $tostocks = ProductPrice::QueryArray(
                                     QQ::AndCondition(
                                     QQ::Equal(QQN::ProductPrice()->Date, date('Ymd',  strtotime($inward->Date))),
                                     QQ::Equal(QQN::ProductPrice()->Product, $inward->Product),
                                     QQ::Equal(QQN::ProductPrice()->Department, $inward->ToDepartment)        
                                             ));
                        if($tostocks){
                            foreach ($tostocks as $tostock){}
                            if($inward->Category == 3 || $inward->Category == 5){
                                $tostock->Inward = $tostock->Inward  + $inward->Qty;
                               
                            }elseif($inward->Category == 4){
                                $tostock->Outward = $tostock->Outward + $inward->Qty;
                            }
                            $tostock->Closinng = ($tostock->Opening + $tostock->Inward) -$tostock->Outward ;
                            $tostock->Save();
                        }else{
                             $tooldstocks  =  ProductPrice::QueryArray(
                                     QQ::AndCondition(
                                     QQ::Equal(QQN::ProductPrice()->Product, $inward->Product),
                                     QQ::Equal(QQN::ProductPrice()->Department, $inward->ToDepartment)        
                                             ));
                             
                             $tostock = new ProductPrice();
                             $tostock->Date = $inward->Date;
                             $tostock->Department = $inward->FromDepartment;
                             $tostock->Product = $inward->Product;
                             $tostock->Company = $login->Company;
                             if($tooldstocks){
                                 foreach ($tooldstocks as $tooldstock){}
                                 $tostock->Opening = $tooldstock->Closinng;
                             }else{
                                 $tostock->Opening =0;
                             }
                             if($inward->Category == 3 || $inward->Category == 5){
                               $tostock->Inward = $inward->Qty;
                               $tostock->Outward = 0;  
                            }elseif($inward->Category == 4){
                               $tostock->Outward = $inward->Qty;
                               $tostock->Inward = 0; 
                            }
                            
                            $tostock->Closinng = ($tostock->Opening + $tostock->Inward) -$tostock->Outward ;
                            $tostock->Save();
                        }
                        }
                        
                        }
			$this->RedirectToListPage();
		}
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/iwow_edit.php');
		}
                
        }

	IwowEditForm::Run('IwowEditForm');
?>