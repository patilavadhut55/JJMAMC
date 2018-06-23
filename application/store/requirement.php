<?php
    require('../../qcubed.inc.php');

    class Requirement extends QForm {
            // Controls for Member's Data Fields
            protected $txtCode;
            protected $txtcalDate;
            protected $txtTitle;
            protected $lstbudget;
            protected $lblbudget;
            protected $txtQty;
            protected $txtEstQty;
            protected $txtAsset;
            Protected $txtRate;
            protected $txtpackSize;
            Protected $txtEstcost;
            Protected $txtRemark;
            protected $lstReqGroup;
            Protected $txtAmount;
            protected $txtTqty;
            protected $txtTamt;
            protected $txtDes;
            protected $arrayAsset;
            protected $btnSave;
            protected $btnDelete;
            protected $chkApprove;
            protected $lstProduct;
            protected $btnAdd;
            protected $lbldel;
            protected $btnprint;
            protected $lstdept;
            protected $lstsup;
            protected $txtterms;

            // Create QForm Event Handlers as Needed

            protected function Form_Create(){
                parent::Form_Create();
                
                $this->lstdept = new QSelect2ListBox($this);
                $this->lstdept->Name = "Department";
                $this->lstdept->AddItem('-Select One Department-',NULL);
                $depts = Role::LoadArrayByGrp(2);
                foreach ($depts as $dept){
                    $this->lstdept->AddItem(delete_all_between('[', ']', $dept->Name),$dept->Idrole);
                }
                $this->lstdept->Width = 300;
                
                $this->lblbudget = new QLabel($this);
                $this->lblbudget->Name = "Remaining Budget";
                
                $this->txtCode = new QTextBox($this);
                $this->txtCode->Name = "Required No";
                $this->txtCode->ReadOnly = TRUE;
                $this->txtCode->Width = 120;

                $this->txtcalDate = new QCalendar($this);
                $this->txtcalDate->Name = "Date";
                $this->txtcalDate->DateTimeFormat = 'dd/mm/yy';
                $this->txtcalDate->Width = 150;

                $this->txtTitle = new QTextBox($this);
                $this->txtTitle->Name = "Title";
                $this->txtTitle->Width = '85%';
                $this->txtTitle->Focus();
               
                
                $this->chkApprove = new QCheckBox($this);
                $this->chkApprove->Name ="Approve";
                
                if($_SESSION['role'] == 800) //principal
                    $this->chkApprove->Visible = TRUE;
                else
                    $this->chkApprove->Visible = FALSE;
                
                $this->lstProduct = new QSelect2ListBox($this);
                $this->lstProduct->AddItem("-Select Asset-",NULL);
                
                $assets = Ledger::LoadArrayByGrp(getsettingvalue('store_asset')); //store assets
                foreach ($assets as $asset){
                     $this->lstProduct->AddItem($asset->Name, $asset->Idledger);
                }
                $this->lstbudget = new QSelect2ListBox($this);
                $this->lstbudget->Name = "Budget Allocation Head";
                $this->lstbudget->Width = 300;
                $this->lstbudget->AddItem('-Select One-');
                $budgets = Budget::LoadAll();
                foreach ($budgets as $budget){
                    $this->lstbudget->AddItem($budget->BudgetGrpObject->Name.'  '.$budget->AcademicYearObject->Name.'   '.$budget->BudgetCatObject->Name,  $budget->Idbudget);
                }
                $this->lstbudget->AddAction(new QClickEvent(), new QAjaxAction('lstbudget_Click'));

             
                $this->txtQty = new QTextBox($this);
                
                $this->txtpackSize = new QTextBox($this);
                $this->txtpackSize->Width = 150;
                
                $this->txtEstQty = new QTextBox($this);
                $this->txtEstcost = new QTextBox($this);
                
                $this->txtRemark = new QTextBox($this);
                $this->txtRemark->TextMode = QTextMode::MultiLine;
                $this->txtRemark->Width = '100%';
                
                $this->txtDes = new QTextBox($this);
                $this->txtDes->Name = 'Description';
                $this->txtDes->Width = '85%';
                //$this->txtDes->TextMode = QTextMode::MultiLine;

                $this->txtRate = new QTextBox($this);
                $this->txtRate->Width = 100;
                
                $this->txtRate->AddAction(new QEnterKeyEvent(), new QAjaxAction('calculte'));
                //$this->txtRate->AddAction(new QFocusOutEvent(), new QAjaxAction('calculte'));
                
                $this->txtAmount = new QTextBox($this);
                $this->txtAmount->Width = 100;
                //$this->txtAmount->AddAction(new QEnterKeyEvent(), new QAjaxAction('AddAsset'));

                $this->txtTamt = new QLabel($this);
                $this->txtTamt->Name = "Total Amount";
                
                $this->lstsup = new QSelect2ListBox($this);
                $this->lstsup->Name = "Supplier";
                $this->lstsup->AddItem('Select One',NULL);
                $sups = Ledger::LoadArrayByGrp(35);
                foreach ($sups as $sup){
                    $this->lstsup->AddItem($sup->Name,$sup->Idledger);
                }
                
                $this->lstReqGroup = new QSelect2ListBox($this);
                $this->lstReqGroup->Width = '70%';
                $this->lstReqGroup->AddItem('-Select Requirement Type-',NULL);
                $grps = RequirementGrp::LoadAll();
                foreach ($grps as $grp){
                    $this->lstReqGroup->AddItem($grp->Name, $grp->IdrequirementGrp);
                }
                
                $this->txtterms = new QTextBox($this);
                $this->txtterms->Name = "Terms & Condition";
                $this->txtterms->TextMode = QTextMode::MultiLine;
                $this->txtterms->Height = 300;
                
                $this->txtTqty = new QLabel($this);
                $this->txtTqty->Name = "Total Qty";
                 
                $this->txtQty->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtQty_enter'));
                //$this->txtQty->AddAction(new QFocusOutEvent(), new QAjaxAction('txtQty_enter'));
                $this->txtQty->Width = 70;
               
                $this->btnAdd = new QButton($this);
                $this->btnAdd->Text = "Add";
                $this->btnAdd->ButtonMode = QButtonMode::Success;
                $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_Click'));
                
                
                $this->btnSave = new QButton($this);  
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));

                $this->btnDelete = new QButton($this);  
                $this->btnDelete->Text = "Delete";
                $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btDelete_Click'));
                
                $this->btnprint  = new QButton($this);
                $this->btnprint->ButtonMode = QButtonMode::Success;
                $this->btnprint->Text = "Print";
                $this->btnprint->AddAction(new QClickEvent(), new QServerAction('btnprint_Click'));

                if(!isset($_GET['id'])){
                    $code = VoucherGrp::LoadByName("Requirement"); //trancat
                    $this->txtCode->Text = $code->Abbrivation.$code->Counter;
                    //$code->Counter = $code->Counter + 1;
                    //$code->Save();
                    $this->txtcalDate->Text = date('d/m/Y');
                    $this->txtTamt->Text = 0;
                    $this->txtTqty->Text = 0;
                }else{
                    $vov = Voucher::LoadByIdvoucher($_GET['id']);
                    $this->txtCode->Text = $vov->InvNo;
                    $this->txtcalDate->Text = date("d/m/Y", strtotime($vov->Date));
                    $this->txtTitle->Text = $vov->Narration;
                    $this->txtTamt->Text = $vov->Amount;
                    $this->txtTqty->Text = $vov->TotalQty;
                    $this->lstdept->SelectedValue = $vov->Department;
                    $this->lstReqGroup->SelectedValue = $vov->RequirementGrp;
                    //$this->chkApprove->Checked = $vov->Approved;
                    $this->txtDes->Text = $vov->Description;
                    $this->txtterms->Text = $vov->Warranty;
                    
                    $this->lstbudget->SelectedValue = $vov->Budget;
                    $vhitms = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                    foreach ($vhitms as $vhitm){
                        $this->lbldel[$vhitm->IdvoucherHasItem] = new QLabel($this);
                        $this->lbldel[$vhitm->IdvoucherHasItem]->HtmlEntities = FALSE ;
                        $this->lbldel[$vhitm->IdvoucherHasItem]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                        $this->lbldel[$vhitm->IdvoucherHasItem]->AddAction(new QClickEvent(), new QConfirmAction('Do you really want to delete this record.'));
                        $this->lbldel[$vhitm->IdvoucherHasItem]->AddAction(new QClickEvent(), new QServerAction('Delete_Item'));
                        $this->lbldel[$vhitm->IdvoucherHasItem]->ActionParameter = $vhitm->IdvoucherHasItem;                    
                    }
                }
               
                $this->lblbudget->HtmlEntities = FALSE;
                $this->lblbudget->Text = '<div style="margin-top: 5px;">0.00</div>';
                
            }
            
            protected function lstbudget_Click(){
                if($this->lstbudget->SelectedValue != NULL){
                    $amt = 0;
                    $budget = Budget::LoadByIdbudget($this->lstbudget->SelectedValue);
                    $rembudgets = Voucher::LoadArrayByBudget($this->lstbudget->SelectedValue);
                    foreach ($rembudgets as $rembudget){
                        $amt = $budget->Amount - $rembudget->Amount;
                    }
                    $this->lblbudget->Text = $amt; 
                    $this->lstbudget->SelectedValue = $this->lstbudget->SelectedValue;
                }
               
            }

            protected function Delete_Item($strFormId, $strControlId, $strParameter){
                $vhitm = VoucherHasItem::LoadByIdvoucherHasItem($strParameter);
                $vhitm->Delete();
                $vhps = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                if(!$vhps){
                    $vocher = Voucher::LoadByIdvoucher($_GET['id']);
                    $vocher->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/requirement.php');  
                }else{
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/requirement.php?id='.$_GET['id']);  
                }
                
            }
            protected function btnprint_Click(){
                if($this->lstsup->SelectedValue != NULL){
                $req = Voucher::LoadByIdvoucher($_GET['id']);
                $req->Warranty = $this->txtterms->Text;
                $req->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inquiry.php?id='.$_GET['id'].'&sup='.$this->lstsup->SelectedValue);  
                }else{
                    QApplication::DisplayAlert('Please Select Supplier');
                }
               
            }

           protected function txtQty_enter(){
                $product = LedgerDetails::LoadByIdledgerDetails($this->lstProduct->SelectedValue);
                if($product && $product->Mrp != NULL){
                    $this->txtRate->Text = number_format($product->Mrp,2,'.','');
                }else{
                    $this->txtRate->Text = 0;
                }
                $this->txtRate->Focus();
            }
           protected function btnAdd_Click(){
               if($this->txtQty->Text != 0){
                if(isset($_GET['id'])){
                    $vov = Voucher::LoadByIdvoucher($_GET['id']);
                    $vovs = VoucherHasItem::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::VoucherHasItem()->Voucher, $vov->Idvoucher),
                                    QQ::Equal(QQN::VoucherHasItem()->Item, $this->lstProduct->SelectedValue)
                                ));
                    if(!$vovs){ 
                        $vhp = new VoucherHasItem();
                        $vhp->Voucher = $vov->Idvoucher;
                        $vhp->Item = $this->lstProduct->SelectedValue;
                        $vhp->Rate = $this->txtRate->Text;
                        $vhp->Qty = $this->txtQty->Text;
                        $vhp->PackSize = $this->txtpackSize->Text;
                        $vhp->Remark = $this->txtRemark->Text;
                        $vhp->Per = 1;
                        $vhp->DiscPer = 0;
                        $vhp->DiscAmt = 0;
                        $vhp->Amount =  $this->txtAmount->Text;


                        $vhp->Save();
                        $amount = 0; 
                        $qty = 0;
                        $VovHasProds = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
                        foreach ($VovHasProds as $VovHasProd){
                            $amount = $amount + $VovHasProd->Amount;
                            $qty = $qty + $VovHasProd->Qty;

                        }
                        $vov->Amount = $amount;
                        $vov->TotalQty = $qty;
                        $vov->RequirementGrp = $this->lstReqGroup->SelectedValue;
                        $vov->Save();
                    }else{
                       QApplication::DisplayAlert('This Item already exists');
                    }
                }else{
                    $vov = new Voucher();
                    $code = VoucherGrp::LoadByName("Requirement"); //trancat
                    $this->txtCode->Text = 'WCE'.$code->Abbrivation.$code->Counter;
                    $code->Counter = $code->Counter + 1;
                    $code->Save();
                    $vov->InvNo = $this->txtCode->Text;
                    $date = explode("/", $this->txtcalDate->Text);
                    $vov->Date = QDateTime::FromTimestamp(strtotime($date[2].$date[1].$date[0]));
                    $vov->Narration = $this->txtTitle->Text;
                    $vov->Description = $this->txtDes->Text;
                    $vov->Budget = $this->lstbudget->SelectedValue;
                    $vov->Department = $this->lstdept->SelectedValue;
                    $vov->RequirementGrp = $this->lstReqGroup->SelectedValue;
                   // $vov->BudgetObject->Amount = $this->lblbudget->Text;
                    $vov->DataBy = $_SESSION['login'];
                    $vov->Dr = $_SESSION['login'];
                    $vov->Grp = 11;
                    
                    $stores = LoginHasRole::LoadArrayByRoleIdrole(800);//principal
                    if($stores){
                        foreach ($stores as $store){}
                        $vov->Cr = $store->LoginIdlogin;
                    }
                   
                    $vov->Amount = $this->txtTamt->Text;
                    $vov->Save();
                    
                     
                    $amount = $qty = 0;
                    
                    $vhp = new VoucherHasItem();
                    $vhp->Voucher = $vov->Idvoucher;
                    $vhp->Item = $this->lstProduct->SelectedValue;
                    $vhp->Rate =  $this->txtRate->Text;
                    $vhp->Qty =  $this->txtQty->Text;
                    $vhp->PackSize = $this->txtpackSize->Text;
                    $vhp->Remark = $this->txtRemark->Text;
                    $vhp->Per = 1;
                    $vhp->DiscPer = 0;
                    $vhp->DiscAmt = 0;
                    $vhp->Amount =  $this->txtAmount->Text;
                    $vhp->Save();
                    
                    $VovHasProds = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);//voucher has product
                    foreach ($VovHasProds as $VovHasProd){
                        $amount =  $amount + $VovHasProd->Amount;
                        $qty =  $qty + $VovHasProd->Qty;
                    }
                    $vov->Amount = $amount;
                    //$vov->TotalQty = $qty;
                    $vov->Save();

                }
                $this->Refresh($vov->Idvoucher);
                }  else {
                    QApplication::DisplayAlert('Asset, Quantity is required');
                }
            }

            protected function calculte(){
                if($this->txtQty->Text != NULL && $this->txtRate->Text != NULL)
                    $this->txtAmount->Text = $this->txtQty->Text * $this->txtRate->Text;
                    $this->txtAmount->Focus();
            }
            protected function btnSave_Click(){
                if(isset($_GET['id'])){
                    $vov = Voucher::LoadByIdvoucher($_GET['id']);
                    $vov->RequirementGrp = $this->lstReqGroup->SelectedValue;
//                    if($this->chkApprove->Checked == TRUE){
//                        //$vov->ApprovedBy = $_SESSION['login'];
//                        $vov->ApprovedDate = QDateTime::Now();
//                    }
                    $vov->Save();        
                   // $this->Refresh(0);       
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/requirement_list.php'); 
                }else{
                    QApplication::DisplayAlert("You don't have item to save this requirement.");
                }
            }
            protected function refresh($strParameter){                
                if($strParameter){
                    
                    if(isset($_GET['budget'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/requirement.php?id='.$strParameter.'&budget='.$_GET['budget']); 
                    }  else {
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/requirement.php?id='.$strParameter); 
                    }
                }else{
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/requirement_list.php');
                }
            }
    }
    Requirement::Run('Requirement');
?>