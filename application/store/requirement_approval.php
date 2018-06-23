<?php
	require('../../qcubed.inc.php');

	class Requirment extends QForm {
                //voucher form controls
                protected $txtNote;
                protected $lstApproval;
                protected $btnSave;
                protected $btnCancel;
                protected $btnDelete;
                protected $chkApprov;
                //voucher has product form controls
                protected $txtProduct;
                protected $txtQty;
                //voucher has product array controls
                protected $lbldelete;
                protected $arrqty;
                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    //Approval form controls declarations
                    $this->chkApprov = new QCheckBox($this);
                    $this->chkApprov->Name = "Approve";
                    
                    $this->txtNote = new QTextBox($this);
                    $this->txtNote->Name = "Note";
                    $this->txtNote->TextMode = QTextMode::MultiLine;
                   
                    $this->lstApproval = new QListBox($this);
                    $this->lstApproval->Name = "Approval";
                    $this->lstApproval->AddItem("-Select-",NULL);
                    $this->lstApproval->AddItem("Approve",1);
                    $this->lstApproval->AddItem("Reject",2);
                    
                    //button declaration with thier events
                    $this->btnCancel = new QButton($this);
                    $this->btnCancel->Text = "Cancel";
                    $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));
                    
                    $this->btnDelete = new QButton($this);
                    $this->btnDelete->Text = "Delete";
                    $this->btnDelete->Visible = FALSE;
                    $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
                    
                    $this->btnSave = new QButton($this);
                    $this->btnSave->Text = "Save";
                    $this->btnSave->Visible = FALSE;
                    $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
                    
                    //voucher has product form controls
                    $this->txtProduct = new QAjaxAutoCompleteTextBox($this, "txtProduct_search");
                    $this->txtProduct->Width = 300;
                    
                    $this->txtQty = new QTextBox($this);
                    $this->txtQty->Width = 50;
                    
                    //event declation for saving voucher & voucher has product
                    $this->txtQty->AddAction(new QEnterKeyEvent(), new QAjaxAction('Save'));
                    //edit mode declartion
                    if(isset($_GET['id'])){
                        $this->txtProduct->Focus();
                        $req = Voucher::LoadByIdvoucher($_GET['id']);
                        $approval = VoucherHasApproval::LoadById($_GET['appro']);
                        if($approval->Approval == 1)
                        $this->lstApproval->SelectedValue = 1;
                        elseif($approval->Reject == 1)
                        $this->lstApproval->SelectedValue = 2; 
                        $this->txtNote->Text = $approval->Note;
                        $this->chkApprov->Checked = $approval->Approval;
                        //voucher has product lable declaration
                        $vhps = VoucherHasProduct::LoadArrayByVoucher($req->Idvoucher);
                        if($vhps){
                            foreach ($vhps as $vhp){
                            $this->lbldelete[$vhp->Id] = new QLabel($this);
                            $this->lbldelete[$vhp->Id]->HtmlEntities = FALSE;
                            $this->lbldelete[$vhp->Id]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                        
                            $this->lbldelete[$vhp->Id]->AddAction(new QClickEvent(), new QServerAction("lbldelete_Click"));
                            $this->lbldelete[$vhp->Id]->ActionParameter = $vhp->Id;
                            
                            //textbox declaration for qty
                            $this->arrqty[$vhp->Id] = new QTextBox($this);
                            $this->arrqty[$vhp->Id]->Width = 50;
                            $this->arrqty[$vhp->Id]->Text = $vhp->Qty;
                            $this->arrqty[$vhp->Id]->AddAction(new QEnterKeyEvent(), new QServerAction('arrqty_change'));
                            $this->arrqty[$vhp->Id]->AddAction(new QChangeEvent(), new QServerAction('arrqty_change'));
                            $this->arrqty[$vhp->Id]->ActionParameter = $vhp->Id;
                            
                            }
                        }
                        //button visiblity on edit mode
                         $this->btnDelete->Visible = TRUE;
                         $this->btnSave->Visible = TRUE;
                    }
                    
                }
                //function for change in quantity
                protected function arrqty_change($strFormId, $strControlId, $strParameter){
                    $vhp = VoucherHasProduct::LoadById($strParameter);
                    $vhp->Qty = $this->arrqty[$vhp->Id]->Text;
                    $vhp->Amount = $vhp->NetAmount = $vhp->Qty * $vhp->Rate;
                    $vhp->Save();
                    $amt = $qty = 0;
                    $req = Voucher::LoadByIdvoucher($_GET['id']);
                    $totals = VoucherHasProduct::LoadArrayByVoucher($req->Idvoucher);
                        foreach ($totals as $total){
                        $amt = $amt + $total->Amount;
                        $qty = $qty + $total->Qty;
                        }
                    $req->Amount = $amt;
                    $req->TotalQty = $qty;
                    $req->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_approval.php?id='.$req->Idvoucher.'&appro='.$_GET['appro']);

                }
                //product search function
                 public function txtProduct_search($strParameter){
                    $products = Product::QueryArray(
                                          QQ::OrCondition(
                                          QQ::Like(QQN::Product()->Name, $strParameter . '%'),
                                          QQ::Like(QQN::Product()->Code, $strParameter . '%')        
				));

			$result = array();
			foreach($products as $product){
				$result[] = $product->Name.'-'.$product->Code;
                	}
                	return $result;
                }
                //save function on qty textbox enter
                protected function Save(){
                    //variables for Default 
                    $logins = LoginHasHierarchy::QueryArray(
                             QQ::AndCondition(
                             QQ::Equal(QQN::LoginHasHierarchy()->Login, $_SESSION['idlogin']),
                             QQ::Equal(QQN::LoginHasHierarchy()->Hierarchy, $_SESSION['post'])        
                                     ));
                    foreach ($logins as $login){}
                    //explodind calender text for date
                    
                    //exploding text for code of product
                    $code = explode("-", $this->txtProduct->Text);
                    $product = Product::LoadByCode($code[1]);
                    if($product){
                        
                    //if function is open on edit mode
                    if(isset($_GET['id'])){
                        $amt = $qty = 0;
                        $req = Voucher::LoadByIdvoucher($_GET['id']);
                        //voucher has product entry
                        $vhps = VoucherHasProduct::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::VoucherHasProduct()->Voucher, $req->Idvoucher),
                                QQ::Equal(QQN::VoucherHasProduct()->Product, $product->Idproduct)        
                                        ));
                        if($vhps){
                            foreach ($vhps as $vhp){}
                        $vhp->Qty =  $vhp->Qty  + $this->txtQty->Text;
                        $vhp->Rate = $product->PurchasePrice;
                        $vhp->Amount = $vhp->NetAmount = number_format($product->PurchasePrice * $vhp->Qty,2,'.','');
                        $vhp->Save();
                        }else{
                        $vhp = new VoucherHasProduct();
                        $vhp->Product = $product->Idproduct;
                        $vhp->Voucher = $req->Idvoucher;
                        $vhp->Rate = $product->PurchasePrice;
                        $vhp->Qty = $this->txtQty->Text;
                        $vhp->Amount = $vhp->NetAmount = number_format($product->PurchasePrice * $this->txtQty->Text,2,'.','');
                        $vhp->Save();
                        }
                        
                        //loading all voucher has product entries for total 
                        $totals = VoucherHasProduct::LoadArrayByVoucher($req->Idvoucher);
                        if($totals){
                            foreach ($totals as $total){
                            $amt = $amt + $total->Amount;
                            $qty = $qty + $total->Qty;
                            }
                        }
                        $req->Amount = $amt;
                        $req->TotalQty = $qty;
                        $req->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_approval.php?id='.$req->Idvoucher.'&appro='.$_GET['appro']);
                }
                    }else{
                        QApplication::DisplayAlert("Please Enter Proper Name Of Asset !!");
                    }//validition for voucher entry 
                }
                //deleting voucher has product entry on label click
                protected function lbldelete_Click($strFormId, $strControlId, $strParameter){
                    $req = Voucher::LoadByIdvoucher($_GET['id']);
                    $vhp = VoucherHasProduct::LoadById($strParameter);
                    $vhp->Delete();
                    $amt = $qty = 0;
                     //loading all voucher has product entries for total 
                        $totals = VoucherHasProduct::LoadArrayByVoucher($req->Idvoucher);
                        if($totals){
                            foreach ($totals as $total){
                            $amt = $amt + $total->Amount;
                            $qty = $qty + $total->Qty;
                            }
                        
                        $req->Amount = $amt;
                        $req->TotalQty = $qty;
                        $req->Save();
                          QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_approval.php?id='.$req->Idvoucher.'&appro='.$_GET['appro']);
                        }else{
                            $approvals = VoucherHasApproval::LoadArrayByVoucher($req->Idvoucher);
                            foreach ($approvals as $approval){
                                $approval->Delete();
                            }
                            $req->Delete();
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_list.php');
                        }
                        
                }
                //button save click function
                protected function btnSave_Click(){
                    $approval = VoucherHasApproval::LoadById($_GET['appro']);
                    if($this->lstApproval->SelectedValue == 1)
                    $approval->Approval = 1;
                    elseif($this->lstApproval->SelectedValue == 2)
                    $approval->Reject = 1;    
                    $approval->Note = $this->txtNote->Text;
                    $approval->ApprovedBy = $_SESSION['idlogin'];
                    $approval->Date = QDateTime::Now();
                    $approval->Save();
                    
                    
                    $nexts = VoucherHasApproval::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::VoucherHasApproval()->Seq, $approval->Seq +1),
                            QQ::Equal(QQN::VoucherHasApproval()->Voucher, $_GET['id'])        
                                     ));
                    if($nexts){
                        foreach ($nexts as $next){}
                        if( $approval->Approval == 1)
                            $next->Previous = 1;
                            $next->Save();
                    }
                    $req = Voucher::LoadByIdvoucher($_GET['id']);
                    if($approval->Hiearchy == $req->CatObject->FinalApproval && $this->lstApproval->SelectedValue == 1)
                    {
                      $req->FinalApproval =1;
                      $req->FinalApprovalBy = $approval->ApprovedBy;
                    }
                    $req->Save();
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_approval.php?id='.$req->Idvoucher.'&appro='.$_GET['appro']);

                }
                //button cancel click function
                protected function btnCancel_Click(){
                    $req = Voucher::LoadByIdvoucher($_GET['id']);
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_approval.php?id='.$req->Idvoucher.'&appro='.$_GET['appro']);

                }
                //button deletre click function
               
        }
	Requirment::Run('Requirment');
?>