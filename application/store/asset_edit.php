<?php
    require('../../qcubed.inc.php');

    class AssetEdit extends QForm {
            protected $txtCode;
            protected $txtName;
            protected $txtSubName;
            protected $lstBrandObject;
            protected $lstGroupObject;
            Protected $lstUnitObject;
            Protected $txtPrice;
            protected $txtIdproduct;
            protected $txtOpeningQty;
            protected $txtOpeningAmt;
            protected $btnSave;
            protected $btnDelete;

            protected function Form_Create(){
                parent::Form_Create();

                $this->txtCode = new QTextBox($this);
                $this->txtCode->Name = "Code";
                $this->txtCode->Required = "True";
                $this->txtCode->Width = 70;

                $this->txtName = new QTextBox($this);
                $this->txtName->Name = "Name";
                $this->txtName->Required = "True";
                $this->txtName->Focus();

                $this->txtSubName = new QTextBox($this);
                $this->txtSubName->Name = "Description";
                $this->txtSubName->Width = 500 ;
                
                $this->txtPrice = new QTextBox($this);
                $this->txtPrice->Name = "Price";
                            
                $this->lstBrandObject = new QListBox($this);
                $this->lstBrandObject->Name = "Brand";
                $this->lstBrandObject->AddItem('- Select one -', NULL );
                
                $this->lstGroupObject = new QListBox($this);
                $this->lstGroupObject->Name = "Group";
                $this->lstGroupObject->AddItem('- Select one -', NULL );
                
                $this->lstUnitObject = new QListBox($this);
                $this->lstUnitObject->Name = "Unit";
                
                $this->txtOpeningQty = new QTextBox($this);
                $this->txtOpeningQty->Name = "Opening Stock Qty";
                $this->txtOpeningQty->Width = 100;
                
                $this->txtOpeningAmt = new QTextBox($this);
                $this->txtOpeningAmt->Name = "Valuation";
                $this->txtOpeningAmt->Width = 100;
                
                $units = ProductUnit::LoadAll(QQ::OrderBy(QQN::ProductUnit()->IdproductUnit));
                    foreach ($units as $unit){
                        $this->lstUnitObject->AddItem($unit->Name, $unit->IdproductUnit);
                }
                
                $grops = ProductGroup::LoadAll();
                    foreach ($grops as $grop){
                        $this->lstGroupObject->AddItem($grop->Name, $grop->IdproductGroup);
                }
                
                $brands = Brand::LoadAll();
                    foreach ($brands as $brand){
                        $this->lstBrandObject->AddItem($brand->Name, $brand->Idbrand);
                }
                
                $this->txtOpeningQty->AddAction(new QChangeEvent(), new QAjaxAction('cal'));
                
                $this->btnSave = new QButton($this);  
                $this->btnSave->Text = "Save";
                $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));

                $this->btnDelete = new QButton($this);  
                $this->btnDelete->Text = "Delete";
                $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
                $this->btnDelete->Visible = FALSE;
           
                if(!isset($_GET['id'])){
                   $code = Code::LoadByName("Asset");
                   $this->txtCode->Text = $code->Code;
                   $code->Code = $code->Code + 1;
                   $code->Save();
                }else{
                    $this->btnDelete->Visible = TRUE;   
                    $prod = Product::LoadByIdproduct($_GET['id']);
                    $this->txtCode->Text = $prod->Code;
                    $this->txtName->Text = $prod->Name ;
                    $this->txtPrice->Text = $prod->PurchasePrice ;
                    $this->txtSubName->Text = $prod->SubName;
                    $this->lstGroupObject->SelectedValue = $prod->Group;
                    $y = date('Y');
                    $m = date('m');
                    if($m <= 3)
                    $y = $y -1 ; 
                    $openings = Voucher::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::Voucher()->To, 6283),
                           QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($y.'0401')))        
                                   ));
                    if($openings){
                     foreach ($openings as $opening ){}
                        $vhps = VoucherHasProduct::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::VoucherHasProduct()->Product, $prod->Idproduct),
                                QQ::Equal(QQN::VoucherHasProduct()->Voucher, $opening->Idvoucher)        
                                        ));
                        if($vhps){
                            foreach ($vhps as $vhp){  }
                            $this->txtOpeningQty->Text = $vhp->Qty;
                            $this->txtOpeningAmt->Text = $vhp->Amount;        
                        }
                }
                }
            }
            
            protected function cal(){
                $this->txtOpeningAmt->Text = $this->txtOpeningQty->Text * $this->txtPrice->Text;
            }
            protected function btnSave_Click(){
                
                $prod = Product::LoadByCode($this->txtCode->Text);
                if($prod){
                    $prod->Code = $this->txtCode->Text;
                    $prod->Name = $this->txtName->Text;
                    $prod->SubName = $this->txtSubName->Text;
                    $prod->PurchasePrice = $this->txtPrice->Text;
                    $prod->Unit = $this->lstUnitObject->SelectedValue;
                    $prod->Group = $this->lstGroupObject->SelectedValue;
                    $prod->Save();
                }else{
                    $ledger = new Ledger();
                    $ledger->Name = $this->txtName->Text;
                    $ledger->SubOf = 3;
                    $ledger->Category = 2;
                    $ledger->Save();
                    
                    $prod = new Product();
                    $prod->Idproduct = $ledger->Idledger;
                    $prod->Code = $this->txtCode->Text;
                    $prod->Name = $this->txtName->Text;
                    $prod->Group = $this->lstGroupObject->SelectedValue; 
                    $prod->PurchasePrice = $this->txtPrice->Text;
                    $prod->SubName = $this->txtSubName->Text;
                    $prod->Save();
                    
                   
                  
                }
                 //opening value store
                    $y = date('Y');
                    $m = date('m');
                    if($m <= 3)
                    $y = $y -1 ;    
                    $logins = LoginHasHierarchy::QueryArray(
                          QQ::AndCondition(
                          QQ::Equal(QQN::LoginHasHierarchy()->Hierarchy, $_SESSION['post']),        
                          QQ::Equal(QQN::LoginHasHierarchy()->Login, $_SESSION['idlogin'])        
                                  ));
                    foreach ($logins as $login){}
                    $openings = Voucher::QueryArray(
                           QQ::AndCondition(
                           QQ::Equal(QQN::Voucher()->To, 6283),
                           QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($y.'0401')))        
                                   ));
                    if(!$openings){
                        $opening = new Voucher();
                        $opening->Date = QDateTime::FromTimestamp(strtotime($y.'0401'));
                        $code = Code::LoadByName("voucher");
                        $code->Code = $code->Code + 1;
                        $code->Save();
                        $opening->Code = $code->Code;
                        $opening->To = 6283;
                        $opening->Member = $login->Login;
                        $opening->TotalQty = $this->txtOpeningQty->Text;
                        $opening->Amount = $this->txtOpeningAmt->Text;
                        $opening->Company = $login->Company;
                        $opening->Save();
                        $vhps = VoucherHasProduct::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::VoucherHasProduct()->Product, $prod->Idproduct),
                                QQ::Equal(QQN::VoucherHasProduct()->Voucher, $opening->Idvoucher)        
                                        ));
                        if($vhps){
                            foreach ($vhps as $vhp){ $vhp->Delete(); }
                        }else{
                            $vhp = new VoucherHasProduct();
                            $vhp->Voucher = $opening->Idvoucher;
                            $vhp->Product = $prod->Idproduct;
                            $vhp->Qty = $this->txtOpeningQty->Text;
                            $vhp->Rate = $this->txtPrice->Text;
                            $vhp->Amount = $vhp->NetAmount = number_format($this->txtOpeningQty->Text * $this->txtPrice->Text,2,'.','');
                            $vhp->Save();
                        }
                    }else{
                        foreach ($openings as $opening ){}
                        $vhps = VoucherHasProduct::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::VoucherHasProduct()->Product, $prod->Idproduct),
                                QQ::Equal(QQN::VoucherHasProduct()->Voucher, $opening->Idvoucher)        
                                        ));
                        if($vhps){
                            foreach ($vhps as $vhp){ $vhp->Delete(); }
                        }else{
                            $vhp = new VoucherHasProduct();
                            $vhp->Voucher = $opening->Idvoucher;
                            $vhp->Product = $prod->Idproduct;
                            $vhp->Qty = $this->txtOpeningQty->Text;
                             $vhp->Rate = $this->txtPrice->Text;
                            $vhp->Amount = $vhp->NetAmount = number_format($this->txtOpeningQty->Text * $this->txtPrice->Text,2,'.','');
                            $vhp->Save();
                        }
                    }
              $this->refresh();
            }
            protected function btnDelete_Click(){
                    $ledger = Ledger::LoadByIdledger($_GET['id']);
                    $prod = Product::LoadByIdproduct($ledger->Idledger);
                    $prod->Delete();
                    $ledger->Delete();
                    $this->refresh();
            }
            protected function refresh(){
                //$prod = Product::LoadByCode($this->txtCode->Text);
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/asset_edit.php'); 
            }
    }

    AssetEdit::Run('AssetEdit');
?>