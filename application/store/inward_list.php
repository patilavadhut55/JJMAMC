<?php
require('../../qcubed.inc.php');

        class InwardList extends QForm {
            protected $dtgpurcahse;
            protected $lstpo;
            protected $calfrom;
            protected $calto;
            protected function Form_Run() {
			parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		}
            protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->calfrom = new QCalendar($this);
                    $this->calto = new QCalendar($this);
                    $this->calto->AddAction(new QChangeEvent(), new QAjaxAction('Search_PO'));
                    
                    $this->lstpo = new QListBox($this);
                    $this->lstpo->Name = 'Refrence Of PO';
                    $this->lstpo->AddItem('-Select One-',NULL);
                    $this->lstpo->Width = 400;
                    $this->lstpo->Visible= FALSE;
                    
                    if(isset($_GET['from'])){
                    
                    $this->calfrom->Text = date('M d Y',  strtotime($_GET['from']));
                    $this->calto->Text = date('M d Y',  strtotime($_GET['to']));
                    
                    $this->lstpo->Visible= TRUE;
                    
                    $pos = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Cat, 1),
                                QQ::Equal(QQN::Voucher()->Approved, 1),
                                QQ::NotEqual(QQN::Voucher()->Lock, 1),
                                QQ::GreaterOrEqual(QQN::Voucher()->Date, $_GET['from']),
                                QQ::LessOrEqual(QQN::Voucher()->Date, $_GET['to'])    
                                    ));
                    foreach ($pos as $po){
                        $this->lstpo->AddItem($po->Titlte, $po->Idvoucher);
                    }
                    if(isset($_GET['po'])){
                        $this->lstpo->SelectedValue = $_GET['po'];
                        $this->lstpo->Visible= TRUE;
                    }
                    }
                    
                    
                    $this->dtgpurcahse = new QDataGrid($this);
                    
                    // Style the DataGrid (if desired)
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
            } 
            protected function lstpo_Change(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_list.php?po='.$this->lstpo->SelectedValue.'&from='.$_GET['from'].'&to='.$_GET['to']);
            }
            public function rendereceive(VoucherHasProduct $vhp) {
                    $objControlId = 'receive'.$vhp->Id;
                    if (!$objControl = $this->GetControl($objControlId)) {
                        $objControl = new QTextBox($this, $objControlId);
                        $objControl->Width = 70;
                        $objControl->AddAction(new QEnterKeyEvent(), new QAjaxAction("rendereceive_Click"));
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
                    $vhp = VoucherHasProduct::LoadById($intInId);
                    $login = Login::LoadByIdlogin($_SESSION['idlogin']);
                        
                    $inward = new Iwow();
                    $inward->Product = $vhp->ProductIdproduct;
                    $inward->RefPo = $vhp->Id;
                    $inward->Qty = $this->GetControl($strControlId)->Text;
                    $inward->By = $login->Idlogin;
                    $inward->Category = 2;
                    $inward->Date = QDateTime::Now();
                    $code = Code::LoadByName('Store IW/OW');
                    $code->Code = $code->Code +1;
                    $code->Save();
                    $inward->Code = 'S'.$code->Code;
                    //$inward->Department = $login->IdloginObject->Department;
                    $inward->Save();
                    
                    $stocks = ProductPrice::QueryArray(
                                 QQ::AndCondition(
                                 QQ::Equal(QQN::ProductPrice()->Product, $vhp->ProductIdproduct),
                                 QQ::Equal(QQN::ProductPrice()->Date, date('Ymd',  strtotime(QDateTime::Now())))        
                                         ));
                    if($stocks){
                        foreach ($stocks as $stock){}
                        $stock->Inward = $stock->Inward + $this->GetControl($strControlId)->Text;
                        $stock->Closinng = $stock->Closinng + $stock->Inward + $this->GetControl($strControlId)->Text;
                        $stock->Save();

                    }else{
                        $oldstocks = ProductPrice::LoadArrayByProduct($vhp->ProductIdproduct);
                        $stock = new ProductPrice();
                        $stock->Date = QDateTime::Now();
                        $stock->Product = $vhp->ProductIdproduct;
                        $stock->Company = $login->Company;
                        
                        if($oldstocks){
                            foreach ($oldstocks as $oldstock){}
                            $stock->Opening = $oldstock->Opening;
                        }else{ 
                            $stock->Opening =  $this->GetControl($strControlId)->Text;   
                        }
                        $stock->Inward = $this->GetControl($strControlId)->Text;
                        $stock->Closinng = $stock->Opening + 
                        $stock->Save();
                    }
                    $po = Voucher::LoadByIdvoucher($_GET['po']);
                    $prods = VoucherHasProduct::LoadArrayByVoucherIdvoucher($po->Idvoucher);
                    $pending=0;
                    foreach ($prods as $prod){
                     $inwards = Iwow::QueryArray(
                               QQ::AndCondition(
                               QQ::Equal(QQN::Iwow()->Category, 2),
                               QQ::Equal(QQN::Iwow()->RefPo, $prod->Id)        
                                       ));   
                        $ins = 0;
                        foreach ($inwards as $inward){
                           $ins = $ins + $inward->Qty; 
                        }
                        $pending = $prod->Qty - $ins;
                      }
                      if($pending == 0){
                          //QApplication::DisplayAlert('Puechase Order Inward Completed');
                          $po->Lock = 1;
                          $po->Save();
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
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_list.php?po='.$this->lstpo->SelectedValue);    
                }
                protected function Search_PO(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_list.php?from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime);
                }
                   
        }
    InwardList::Run('InwardList');    
?>        

