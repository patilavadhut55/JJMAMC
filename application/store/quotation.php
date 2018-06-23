<?php
    require('../../qcubed.inc.php');

    class VoucherEditForm extends QForm{
        protected $arrLedger;
        protected $txtNarration;
        protected $txtInvNo;
        protected $chkApproved;
        protected $txtTaxOn;
        protected $lbltotal;
        protected $txtAmount;
        protected $txtfrom;
        protected $calDate;
        protected $dtgvhp;
        protected $btnPO;
        protected $btnAdd;
        protected $pnlPanel;
        protected $chktax;
        protected $chktaxontotal;
        protected $lbltotaltax;
        protected $lbltotaldisc;
        protected $btnScan;
        protected $btnAddDoc;

        protected $btnSave;
        protected $btnDelete;
        protected $btnCancel;
        protected $btnUpload;


        protected function Form_Run() {
                parent::Form_Run();

                QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();

            $this->chktaxontotal = new QCheckBox($this);
            $this->chktaxontotal->Width = 18;
            $this->chktaxontotal->Height = 18;
            $this->chktaxontotal->AddAction(new QClickEvent(), new QServerAction('chktaxontotal_click'));

            //supplier listbox declaration
            $this->txtfrom = new QSelect2ListBox($this);
            $this->txtfrom->Width = 400;
            $this->txtfrom->Name = "Supplier";
            $this->txtfrom->AddItem('-Select One-', NULL);

            $froms = Ledger::LoadArrayByGrp(35);
            foreach ($froms as $from){
                $this->txtfrom->AddItem($from->Name, $from->Idledger);

            }
            $this->txtfrom->Required = TRUE;

            $this->calDate = new QDateTimePicker($this);
            $this->calDate->Width = 70;

            $this->txtNarration = new QTextBox($this);
            $this->txtNarration->Name = "Title";
            $this->txtNarration->Width = 400;

            $this->txtAmount = new QTextBox($this);
            $this->txtAmount->Width  = 70; 

            $this->txtTaxOn = new QTextBox($this);
            $this->txtTaxOn->Name = "Tax Per";
            $this->txtTaxOn->Width = 70;
            $this->txtTaxOn->AddAction(new QEnterKeyEvent(), new QServerAction('txtTaxOn_click'));
            $this->txtTaxOn->AddAction(new QFocusOutEvent(), new QServerAction('txtTaxOn_click'));


            $this->txtInvNo = new QTextBox($this);
            $this->txtInvNo->Width  = '100%'; 
            $this->txtInvNo->Name = 'Qt No.';
            $this->txtInvNo->ReadOnly = TRUE;

            $this->btnPO = new QButton($this);
            $this->btnPO->Text = 'Generate PO';
            $this->btnPO->AddAction(new QClickEvent(), new QAjaxAction('btnPO_Click'));
            $this->btnPO->Visible = FALSE;

            //add new supplier code
            $this->btnAdd = new QButton($this);
            $this->btnAdd->Text = 'Add New';
            $this->btnAdd->AddAction(new QClickEvent(), new QAjaxAction('btnPO_Click'));

            $this->btnScan = new QButton($this);
            $this->btnScan->Text = "<i class='fa fa-plus-circle'></i>";
            $this->btnScan->AddAction(new QClickEvent(), new QAjaxAction('btnScan_Click'));

            $this->chkApproved = new QCheckBox($this);
            $this->chkApproved->AddAction(new QClickEvent(),new QAjaxAction('chkApproved_click'));

            $this->lbltotal = new QLabel($this);
            $this->lbltotal->Name = "Total"; 

            $this->lbltotaltax = new QLabel($this);
            $this->lbltotaltax->Name = "Total Tax"; 

            $this->lbltotaldisc = new QLabel($this);
            $this->lbltotaldisc->Name = "Total Discount"; 

            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
           // $this->btnSave->CausesValidation = TRUE;

            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("RedirectToListPage"));

            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));

            $this->btnAddDoc = new QButton($this);
            $this->btnAddDoc->ButtonMode = QButtonMode::Success;
            $this->btnAddDoc->Text = "Add Doc";
            $this->btnAddDoc->AddAction(new QClickEvent(), new QServerAction('btnAddDoc_Click'));

            $this->dtgvhp = new QDataGrid($this);
            // filterbox declaration
            $this->dtgvhp->ShowFilter = TRUE;
            $this->dtgvhp->ShowFilterButton = FALSE;
            $this->dtgvhp->ShowFilterResetButton = FALSE;
            $this->dtgvhp->CssClass = "datagrid";
            $this->dtgvhp->BorderWidth = '1';
            //$this->dtgvhp->Width = 700;

            $this->dtgvhp->Paginator = new QPaginator($this->dtgvhp);
            $this->dtgvhp->ItemsPerPage = 10;

            $this->dtgvhp->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
            $this->dtgvhp->AddRowAction(new QMouseOutEvent(), new QCssClassAction());
            $this->dtgvhp->RowActionParameterHtml = '<?= $_ITEM->Voucher ?>';

            $this->dtgvhp->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=5'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Item','<?= $_ITEM->ItemObject ?>', 'HtmlEntities=false'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Qty', '<?= $_ITEM->Qty ?>', 'HtmlEntities=false', 'Width=70'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Pack Size', '<?= $_ITEM->PackSize ?>', 'HtmlEntities=false', 'Width=100'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Rate', '<?= $_FORM->renderate($_ITEM) ?>', 'HtmlEntities=false', 'Width=100'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Net Amount', '<?= $_FORM->rendernet($_ITEM) ?>', 'HtmlEntities=false', 'Width=100'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Total Discount', '<?= $_FORM-> renderdisc($_ITEM) ?>', 'HtmlEntities=false', 'Width=100'));
            /*$this->dtgvhp->AddColumn(new QDataGridColumn('Tax %', '<?= $_FORM->rendertax($_ITEM) ?>', 'HtmlEntities=false', 'Width=70'));
            $this->dtgvhp->AddColumn(new QDataGridColumn('Total Tax', '<?= $_FORM->rendertaxtot($_ITEM) ?>', 'HtmlEntities=false', 'Width=100'));*/
            $this->dtgvhp->AddColumn(new QDataGridColumn('Amount', '<?= $_FORM->renderamt($_ITEM) ?>', 'HtmlEntities=false', 'Width=100'));

            $this->dtgvhp->SetDataBinder('dtgvhp_Bind');


            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                if($vov->ApprovedBy != NULL){
                    $this->btnPO->Visible = TRUE;
                }
                $this->txtfrom->SelectedValue = $vov->Dr;
                $this->txtInvNo->Text = $vov->InvNo;
                $this->txtNarration->Text = $vov->Narration;
                $this->calDate->DateTime = $vov->Date;

                $totalamt = 0;
                $vhps = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                foreach ($vhps as $vhp){
                    $totalamt = $totalamt + $vhp->Amount;
                }
                if(($vov->Taxper != NULL && $vov->TotalTax != NULL && $vov->TotalTax != 0) || (isset($_GET['flag']) && $_GET['flag'] == 1 )){ 
                    $this->chktaxontotal->Checked = TRUE;
                    $totalamt = $totalamt + $vov->TotalTax;
                    $this->lbltotal->Text = $totalamt;
                    $this->lbltotaltax->Text = $vov->TotalTax;
                    $this->lbltotaldisc->Text = $vov->Discount;
                    $this->txtTaxOn->Text = $vov->Taxper;
                }else{
                    $this->lbltotal->Text = $vov->Amount ;
                    $this->lbltotaldisc->Text = $vov->Discount;
                    $this->lbltotaltax->Text = $vov->TotalTax;
                    $this->txtTaxOn->Text = $vov->Taxper;
                    $this->lbltotaltax->Text = 0;
                }
                if(!isset($_GET['flag']) ){
                    $_GET['flag'] = 0;
                }else {
                    $this->chktaxontotal->Checked = $_GET['flag'];
                }   
            }


            $this->btnUpload = new QButton($this);
            $this->btnUpload->ButtonMode = QButtonMode::Success;
            $this->btnUpload->Text = "Upload";
            $this->btnUpload->AddAction(new QClickEvent(), new QServerAction('btnUpload_Click'));
        }
        protected function chkApproved_click(){
            $this->Other_Save();
            $this->Refresh();
        }
        protected function btnScan_Click(){
            $scancode = Settings::LoadByName("Scan");
            $app = Voucher::LoadByIdvoucher($_GET['id']);
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/quotation.php?id='.$_GET['id'].'&code='.$scancode->Option.'&doc='.$scancode->Option.'&tab=2');
        }

        public function renderate(VoucherHasItem $vhp) {

            $objControlId = 'rate'.$vhp->IdvoucherHasItem;

            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QTextBox($this, $objControlId);
                $objControl->Width = '100%';
                $objControl->Text = $vhp->Rate;
                $objControl->AddAction(new QEnterKeyEvent(), new QAjaxAction("renderate_Click"));
                $objControl->ActionParameter = $vhp->IdvoucherHasItem;
            }
                 return $objControl->Render(false);
        }

        public function renderate_Click($strFormId, $strControlId, $strParameter) {
            $intInId = intval($strParameter);
            $objQuotation = VoucherHasItem::LoadByIdvoucherHasItem($intInId);
            $objQuotation->Rate = $this->GetControl($strControlId)->Text;
            $objQuotation->NetAmount = $this->GetControl($strControlId)->Text * $objQuotation->Qty;
            $objQuotation->DiscAmt = number_format($objQuotation->Qty * ($this->GetControl($strControlId)->Text * $objQuotation->DiscPer/100), 2,'.', '');
            $objQuotation->TaxAmt= number_format($objQuotation->Qty * ($this->GetControl($strControlId)->Text * $objQuotation->TaxPer/100), 2,'.', '');
            $objQuotation->Amount = number_format($objQuotation->NetAmount - $objQuotation->DiscAmt + $objQuotation->TaxAmt, 2,'.', '');
            $objQuotation->Save();
            $this->Other_Save();
            $this->Refresh();
        }
        /*
        public function rendertax(VoucherHasItem $vhp) {

            $objControlId = 'tax'.$vhp->IdvoucherHasItem;
            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QTextBox($this, $objControlId);
                $objControl->Width = "100%";
                if(isset($_GET['flag']) && $_GET['flag'] == 1 ){
                    $objControl->Enabled = FALSE;
                }  
                if(isset($_GET['flag']) && $_GET['flag'] == 0 ){
                    $objControl->Enabled = TRUE;
                }

                $objControl->Text = $vhp->TaxPer;
                $objControl->AddAction(new QEnterKeyEvent(), new QAjaxAction("rendertax_Click"));
                $objControl->ActionParameter = $vhp->IdvoucherHasItem;
            }
            return $objControl->Render(false);
        }

        public function rendertax_Click($strFormId, $strControlId, $strParameter) {
            $intInId = intval($strParameter);
            $objQuotation = VoucherHasItem::LoadByIdvoucherHasItem($intInId);
            $objQuotation->TaxPer = $this->GetControl($strControlId)->Text;
            $objQuotation->TaxAmt = number_format($objQuotation->Qty * ($objQuotation->Rate * $this->GetControl($strControlId)->Text/100), 2,'.', '');
            $objQuotation->Amount = number_format($objQuotation->NetAmount - $objQuotation->DiscAmt + $objQuotation->TaxAmt, 2,'.', '');
            $objQuotation->Save();
            $this->Other_Save();
            $this->Refresh();
        }
        public function rendertaxtot(VoucherHasItem $vhp) {

            $objControlId = 'tottax'.$vhp->IdvoucherHasItem;

            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QTextBox($this, $objControlId);
                $objControl->Width = '100%';
                if(isset($_GET['flag']) && $_GET['flag'] == 1 ){
                    $objControl->Enabled = FALSE;
                }  
                if(isset($_GET['flag']) && $_GET['flag'] == 0 ){
                    $objControl->Enabled = TRUE;
                }
                $objControl->Text = $vhp->TaxAmt;
                $objControl->AddAction(new QEnterKeyEvent(), new QAjaxAction("rendertaxtot_Click"));
                $objControl->ActionParameter = $vhp->IdvoucherHasItem;
            }
                 return $objControl->Render(false);
        }
        public function rendertaxtot_Click($strFormId, $strControlId, $strParameter) {
            $intInId = intval($strParameter);
            $objQuotation = VoucherHasItem::LoadByIdvoucherHasItem($intInId);
            $objQuotation->TaxAmt = $this->GetControl($strControlId)->Text;
            $objQuotation->Amount = number_format($objQuotation->NetAmount - $objQuotation->DiscAmt + $this->GetControl($strControlId)->Text, 2,'.', '');
            $objQuotation->Save();
            $this->Other_Save();
            $this->Refresh();
        }
        */
        public function renderdisc(VoucherHasItem $vhp) {

            $objControlId = 'discper'.$vhp->IdvoucherHasItem;

            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QTextBox($this, $objControlId);
                $objControl->Width = '100%';
                $objControl->Text = $vhp->DiscAmt;
                $objControl->AddAction(new QEnterKeyEvent(), new QServerAction("renderdisc_Click"));
                $objControl->ActionParameter = $vhp->IdvoucherHasItem;
            }
                 return $objControl->Render(false);
        }
        public function renderdisc_Click($strFormId, $strControlId, $strParameter) {
            $intInId = intval($strParameter);
            $objQuotation = VoucherHasItem::LoadByIdvoucherHasItem($intInId);
            $vov = Voucher::LoadByIdvoucher($objQuotation->Voucher);
            $vov->Discount = '0';
            $vov->Save();
            $objQuotation->DiscAmt = $this->GetControl($strControlId)->Text;
            $objQuotation->NetAmount = $objQuotation->Rate * $objQuotation->Qty;
            $objQuotation->Amount = number_format($objQuotation->NetAmount - $objQuotation->DiscAmt, 2,'.', '');
            $objQuotation->Save();
            $this->Other_Save();
            $this->Refresh();
        }
        public function renderamt(VoucherHasItem $vhp) {

            $objControlId = 'amt'.$vhp->IdvoucherHasItem;

            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QLabel($this, $objControlId);
                $objControl->Width = '100%';
                $objControl->Text = $vhp->Amount;
            }
            return $objControl->Render(false);
        }
        public function rendernet(VoucherHasItem $vhp) {

            $objControlId = 'netamt'.$vhp->IdvoucherHasItem;
            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QLabel($this, $objControlId);
                $objControl->Width = '100%';
                $vhp->NetAmount = $vhp->Qty * $vhp->Rate;
                $objControl->Text = $vhp->NetAmount;
            }
            return $objControl->Render(false);
        }
        protected function dtgvhp_Bind(){
            if(isset($_GET['id'])){
                $this->dtgvhp->TotalItemCount = VoucherHasItem::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgvhp->Conditions,
                                        QQ::Equal(QQN::VoucherHasItem()->Voucher, $_GET['id'])

                                ));

                $data =  VoucherHasItem::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgvhp->Conditions,
                                        QQ::Equal(QQN::VoucherHasItem()->Voucher, $_GET['id'])
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::VoucherHasItem()->Voucher, TRUE),
                        $this->dtgvhp->LimitClause
                ));

                $this->dtgvhp->DataSource = $data;
            }
        }
        protected function Other_Save(){
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            $vov->InvNo = $this->txtInvNo->Text;
            $vov->Date = $this->calDate->DateTime;
            $vov->Dr = $this->txtfrom->SelectedValue;
            //$vov->Cr = $this->lstCrObject->SelectedValue;
            //$vov->Amount = $this->txtAmount->Text;
            $vov->Narration = $this->txtNarration->Text;
            $vov->Grp = 10;
            $vov->DataBy = $_SESSION['login'];
            $vov->Save();
            $this->Refresh();
        }
        protected function btnAddDoc_Click(){
            $app = Voucher::LoadByIdvoucher($_GET['id']);
            if(!is_dir('../upload/documents/quotation/A'.$app->InvNo)){
                mkdir('../upload/documents/quotation/A'.$app->InvNo, 0777, true);
            }
            $scancode = Settings::LoadByName("Scan");
            if(isset($_GET['doc'])){
                $scancode->Option = $scancode->Option + 1;
                $scancode->Save();
                if($app->Scans){
                    $app->Scans = $app->Scans.','.$scancode->Option;
                }else{
                    $app->Scans = $scancode->Option + 1;
                }
            }else{
                $app->Scans = $scancode->Option;
                //$scancode->Option = $scancode->Option + 1;
                //$scancode->Save();
            }   
            $app->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation.php?id='.$_GET['id'].'&doc='.$scancode->Option.'&tab=2');

        }
        protected function btnUpload_Click($strFormId, $strControlId, $strParameter){
            if(isset($_GET['id'])){

                $app = Voucher::LoadByIdvoucher($_GET['id']);
                if(!is_dir('../upload/documents/quotation/A'.$app->InvNo)){
                    mkdir('../upload/documents/quotation/A'.$app->InvNo, 0777, true);
                }
                $target_dir = "../upload/documents/quotation/A".$app->InvNo."/";
                //$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
                $uploadOk = 1;

                $target_file = $target_dir . $_GET['doc']. ".png" ; 
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $msg = imageFileUpload($target_file, "imgupload"); 
            }   
        }
        protected function btnPO_Click(){
            $login = Login::LoadByIdlogin($_SESSION['login']); 
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            $req = Voucher::LoadByIdvoucher($this->lstRefTransactionObject->SelectedValue);
            $req->Lock = 1;
            $req->Save();
            $purchase = new Voucher();
            $code = VoucherGrp::LoadByIdvoucherGrp(12);
            $code->Code = $code->Code +1;
            $code->Save();
            $purchase->Code = $code->Abbrivation.$code->Code;
            $purchase->Grp = 12;
            $purchase->Dr = 9;
            $purchase->Cr= $vov->Dr;
            $purchase->Date = QDateTime::Now();
            $purchase->Amount = $vov->Amount;
            $purchase->TotalQty = $vov->TotalQty;
            $purchase->TaxAmt= $vov->TotalTax;
            $purchase->DiscAmt = $vov->DiscAmt;
            $purchase->Description = $vov->Description;

            $purchase->RefTransaction = $vov->Idvoucher;
            $purchase->Member = $login->Idlogin;
            $purchase->Approved = 1;
            $purchase->Lock = 0;
            $purchase->Titlte = $vov->Titlte;
            $purchase->GrossAmount = $vov->GrossAmount;
            $purchase->Save();

            $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
            foreach ($vhps as $vhp){
                $prod = new VoucherHasItem();
                $prod->ProductIdproduct = $vhp->ProductIdproduct;
                $prod->VoucherIdvoucher = $purchase->Idvoucher;
                $prod->Rate = $vhp->Rate;
                $prod->Qty = $vhp->Qty;
                /*$prod->TaxAmt= $vhp->TaxAmt;
                $prod->TaxAmt = $vhp->TaxAmt;*/
                $prod->DiscAmt = $vhp->DiscAmt;
                $prod->Description = $vhp->Description;
                $prod->DiscPer = $vhp->DiscPer;
                $prod->NetAmount = $vhp->NetAmount;
                $prod->Amount = $vhp->Amount;
                $prod->Save();
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/po_print.php?id='.$purchase->Idvoucher);
        }
        protected function Refresh(){
            $vov = Voucher::LoadByIdvoucher($_GET['id']); 
            $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
            $net = $qty = $disc = $tax = $amt = $taxper = $taxamt = 0;
            foreach ($vhps as $vhp){
                $qty = $qty + $vhp->Qty;
                $net = $net  + $vhp->NetAmount; 
                $disc = $disc + $vhp->DiscAmt;
                /*$tax = $tax + $vhp->TaxAmt;
                $taxper = $taxper + $vhp->TaxPer;*/
                $amt = $amt + $vhp->Amount;
            }
            $taxamt = $amt * $vov->Taxper / 100;
            $vov->TotalTax = number_format($taxamt,2,'.','');
            $amt = $amt + $taxamt ;
            $vov->Discount = number_format($disc,2,'.','');
            $vov->GrossAmount = number_format($net,2,'.','');
            $vov->Amount = number_format($amt,2,'.','');
            $vov->Save();
            if(isset($_GET['back'])){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/quotation.php?id='.$vov->Idvoucher.'?back=1');   
            }else{
                if(isset($_GET['flag'])){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/quotation.php?id='.$vov->Idvoucher.'&flag='.$_GET['flag']);
                }else{
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/quotation.php?id='.$vov->Idvoucher);
                }
            }

        }
        public function txtTaxOn_click($strFormId, $strControlId, $strParameter){
            if($this->txtTaxOn->Text != ''){
                $vou = Voucher::LoadByIdvoucher($_GET['id']);
                $vhps = VoucherHasItem::LoadArrayByVoucher($vou->Idvoucher);
                $net = $amt = 0;
                foreach ($vhps as $vhp){
                    $net = $net  + $vhp->NetAmount; 
                    $amt = $amt + $vhp->Amount;
                }
                $this->lbltotaltax->Text = number_format(($amt * $this->txtTaxOn->Text)/100, 2,'.', '');
                $this->lbltotal->Text = number_format($this->lbltotal->Text + $this->lbltotaltax->Text);

                $vou->Amount = $this->lbltotal->Text;
                $vou->Taxper = $this->txtTaxOn->Text;
                $vou->TotalTax = $this->lbltotaltax->Text;
                $vou->Save();
                //QApplication::DisplayAlert($this->lbltotal->Text);
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation.php?id='.$_GET['id'].'&flag=1');
            }

        }
        public function chktaxontotal_click($strFormId, $strControlId, $strParameter){

            if($this->chktaxontotal->Checked == TRUE){
                $vov = Voucher::LoadByIdvoucher($_GET['id']); 
                $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
                $net = $qty = $disc = $tax =$amt = $taxper =0;
                foreach ($vhps as $vhp){
                    $vhp->TaxAmt = '0';
                    $vhp->TaxPer = '0';
                    $vhp->NetAmount = $vhp->Qty * $vhp->Rate;
                    $vhp->Amount = $vhp->NetAmount - $vhp->DiscAmt;
                    $vhp->Save();
                    $qty = $qty + $vhp->Qty;
                    $net = $net  + $vhp->NetAmount; 
                    $disc = $disc + $vhp->DiscAmt;
                    $tax = $tax + $vhp->TaxAmt;
                    $taxper = $taxper + $vhp->TaxPer;
                    $amt = $amt + $vhp->Amount;
                }
                $vov->Taxper = number_format($taxper,2,'.','');
                $vov->TotalTax = number_format($tax,2,'.','');
                $vov->Discount = number_format($disc,2,'.','');
                $vov->GrossAmount = number_format($net,2,'.','');
                $vov->Amount = number_format($amt,2,'.','');
                $vov->Save();

                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation.php?id='.$_GET['id'].'&flag=1');
            }
            if($this->chktaxontotal->Checked == FALSE){
                $vov = Voucher::LoadByIdvoucher($_GET['id']); 
                $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
                $net = $qty = $disc = $tax =$amt = $taxper =0;
                foreach ($vhps as $vhp){
                    $vhp->NetAmount = $vhp->Qty * $vhp->Rate;
                    $vhp->Amount = $vhp->NetAmount - $vhp->DiscAmt;
                    $vhp->Save();
                    $taxper = $taxper + $vhp->TaxPer;
                    $tax = $tax + $vhp->TaxAmt;
                    $amt = $amt + $vhp->Amount;
                }
                $vov->TotalTax = number_format($tax,2,'.','');
                $vov->Taxper = number_format($taxper,2,'.','');
                $vov->Amount = number_format($amt,2,'.','');
                $vov->Save();

                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation.php?id='.$_GET['id'].'&flag=0'); 
            }
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $vov = Voucher::LoadByIdvoucher($_GET['id']);
            $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
            foreach ($vhps as $vhp){
                $vhp->Delete();
            }
            $vov->Delete();
             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation_list.php?req='.$vov->RefNo);
        }
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if($this->txtfrom->SelectedValue != NULL){
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                $vov->InvNo = $this->txtInvNo->Text;
                $vov->Date = $this->calDate->DateTime;
                $vov->Dr = $this->txtfrom->SelectedValue;
                $vov->Amount = $this->lbltotal->Text;
                $vov->Taxper = $this->txtTaxOn->Text;
                $vov->TotalTax = $this->lbltotaltax->Text;
                $vov->Discount = $this->lbltotaldisc->Text;
                $vov->Narration = $this->txtNarration->Text;
                $vov->Grp = 10;
                $vov->DataBy = $_SESSION['login'];
                $vov->Save();
                $this->RedirectToListPage();
            }else{
                QApplication::DisplayAlert("Please Select Suppiler...");
            }
        }
        protected function RedirectToListPage() {
            $vov = Voucher::LoadByIdvoucher($_GET['id']); 
            if(isset($_GET['back'])){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/negotiation.php?req='.$vov->RefNo);
            }else{
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation_list.php?req='.$vov->RefNo);
            }

        }
    }

    VoucherEditForm::Run('VoucherEditForm');
?>