<?php

require('../../qcubed.inc.php');

class InwardOutward extends QForm {

    protected $txtCode;
    protected $calDate;
    protected $arrTo;
    protected $txtTo;
    protected $txtTodept;
    protected $txtFromDept;
    protected $txtAsset;
    protected $txtQty;
    protected $txtLocation;
    protected $txtNarration;
    protected $lstCat;
    protected $lstPO;
    protected $chkLock;
    protected $txtDept;
    protected $caltransDate;
    protected $calfromdate;
    protected $arrDept;
    protected $txtprocode;
    //array controls
    //inward controls
    protected $txtInwardqty;
    protected $btnBarcode;
    protected $lbldel;
    //declaring button
    protected $btnSave;
    protected $btnCancel;
    protected $lbldelete;
    protected $btnDelete;
    protected $btnProductAdd;
    protected $btnSearch;
    
    //indvidual Outward controls
    protected $lstmember; 
    protected $lstitem;
    protected $lstserial;
    protected $txtDescription;
    protected $txtCode1;

    protected $calDate1;
    protected $chkrtDate;
    protected $btnSave1;
    protected $btnCancel1;  
    protected $lblEdit; 
    protected $lbldelete2;
    

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();
        if (!isset($_GET['cat']))
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?cat=2');

        $this->txtCode = new QTextBox($this);
        $this->txtCode->Name = "Code";
        $this->txtCode->Width = 100;
        $this->txtCode->ReadOnly = TRUE;

        
        $this->txtprocode = new QAjaxAutoCompleteTextBox($this, 'product_add');
        $this->txtprocode->Name = "Product";
        $this->txtprocode->Width = 300;


        $this->calDate = new QDateTimePicker($this);
        $this->calDate->Name = "Date";
        $this->calDate->Enabled = FALSE;
        $this->calDate->Width = 65;

        $this->chkLock = new QCheckBox($this);
        $this->chkLock->Name = "Lock PO";

        $this->txtTodept = new QSelect2ListBox($this);
        $this->txtTodept->Name = "To Department";
        $this->txtTodept->Width = 400;
        $this->txtTodept->AddItem('-Select One-', NULL);

        $this->txtFromDept = new QSelect2ListBox($this);
        $this->txtFromDept->Name = "From Department";
        $this->txtFromDept->Width = 400;
        $this->txtFromDept->AddItem('-Select One-', NULL);


        $this->txtDept = new QAjaxAutoCompleteTextBox($this, 'dept_change');
        $this->txtDept->Name = "Department";
        $this->txtDept->Width = 300;


        $this->caltransDate = new QCalendar($this);
        $this->caltransDate->Name = "ToDate";
        $this->caltransDate->Width = 100;

        $this->calfromdate = new QCalendar($this);
        $this->calfromdate->Name = "Date";
        $this->calfromdate->Width = 100;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->ButtonMode = QButtonMode::Delete;
        $this->btnDelete->Visible = FALSE;
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));

        $this->btnSearch = new QButton($this);
        $this->btnSearch->Text = 'Search';
        $this->btnSearch->ButtonMode = QButtonMode::Success;
        $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_Click'));

        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));

        $this->btnProductAdd = new QButton($this);
        $this->btnProductAdd->Text = 'Add';
        $this->btnProductAdd->ButtonMode = QButtonMode::Success;
        $this->btnProductAdd->AddAction(new QClickEvent(), new QServerAction('btnpro_Add'));

        $depts = Role::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Grp, 2)
                        ));
        foreach ($depts as $dept) {
            $this->txtFromDept->AddItem($dept->Name, $dept->Idrole);
            $this->txtTodept->AddItem($dept->Name, $dept->Idrole);
        }


        $this->lstCat = new QListBox($this);
        $this->lstCat->AddItem("-Select-", NULL);
        $cats = IwowCat::LoadAll();
        foreach ($cats as $cat) {
            $this->lstCat->AddItem($cat->Name, $cat->IdiwowCat);
        }
        if (isset($_GET['cat']))
            $this->lstCat->SelectedValue = $_GET['cat'];
        $this->lstPO = new QSelect2ListBox($this);
        $this->lstPO->Name = "Purchase Orders";
        $this->lstPO->Width = 400;
        $this->lstPO->AddItem("-Select One-", NULL);

        $pos = Voucher::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Voucher()->Grp, 3),
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Lock, 0), 
                                QQ::Equal(QQN::Voucher()->Lock, NULL)
                            )
                        ));
        foreach ($pos as $po) {
            $this->lstPO->AddItem($po->CrObject . ' PO No. ' . $po->InvNo, $po->Idvoucher);
        }
        if (isset($_GET['po']))
            $this->lstPO->SelectedValue = $_GET['po'];

        //product price declarations
        $this->txtAsset = new QSelect2ListBox($this);
        $this->txtAsset->Name = "Asset";

        $assets = LedgerDetails::LoadArrayByStockGrp(10);
        foreach ($assets as $asset) {
            $this->txtAsset->AddItem($asset->DisplayName, $asset->IdledgerDetails);
        }
        if (isset($_GET['id'])) {
            $iwow = Iwow::LoadByIdiwow($_GET['id']);
            //$this->txtCode->Text = $iwow->Code;
            $this->lstPO->SelectedValue = $iwow->PoNo;
            $this->calDate->DateTime = $iwow->Date;
            $this->lstCat->SelectedValue = $iwow->IwowCat;
            $this->btnDelete->Visible = TRUE;
        } else {
            $code = Settings::LoadByName("IWOW");
            $this->txtCode->Text = $code->Option;
            $this->calDate->DateTime = QDateTime::Now();
            $this->lstPO->AddAction(new QClickEvent(), new QServerAction('lstPO_change'));
        }
        //voucher has product declartions
        if ($this->lstPO->SelectedValue != NULL) {
            $vhps = VoucherHasItem::LoadArrayByVoucher($this->lstPO->SelectedValue);
            if ($vhps) {
                $sr = 1;
                foreach ($vhps as $vhp) {
                    $this->txtInwardqty[$vhp->Item] = new QTextBox($this);
                    $this->txtInwardqty[$vhp->Item]->Width = 70;
                    $this->txtInwardqty[$vhp->Item]->ActionParameter = $vhp->IdvoucherHasItem;
                    $this->txtInwardqty[$vhp->Item]->AddAction(new QEnterKeyEvent(), new QServerAction('txtInwardqty_enter'));

                    $this->btnBarcode[$vhp->Item] = new QButton($this);
                    $this->btnBarcode[$vhp->Item]->ButtonMode = QButtonMode::Success;
                    $this->btnBarcode[$vhp->Item]->Text = "Barcode";
                    $this->btnBarcode[$vhp->Item]->ActionParameter = $vhp->IdvoucherHasItem;
                    $this->btnBarcode[$vhp->Item]->AddAction(new QClickEvent(), new QServerAction('btnBarcode_click'));
                }
            }
        }
        if (isset($_GET['Dept']) && isset($_GET['date'])) {
            $dept1 = Role::LoadByIdrole($_GET['Dept']);
            if ($dept1) {
                $this->txtDept->Text = delete_all_between('[', ']', $dept1->Name);
                $this->calfromdate->Text = date('M d Y', strtotime($_GET['date']));
            }
            $depttrans = DeptTransfer::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::DeptTransfer()->ToDept, $_GET['Dept']),
                                    QQ::GreaterOrEqual(QQN::DeptTransfer()->Date, date('Ymd000000', strtotime($_GET['date']))),
                                    QQ::LessOrEqual(QQN::DeptTransfer()->Date, date('Ymd359999', strtotime($_GET['date'])))
                                ), QQ::GroupBy(QQN::DeptTransfer()->Item));
            foreach ($depttrans as $dept) {
                $item = DeptTransfer::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::DeptTransfer()->Item, $dept->Item), 
                                        QQ::Equal(QQN::DeptTransfer()->ToDept, $_GET['Dept'])
                                    ));
                foreach ($item as $items) {
                    $this->lbldelete[$items->IddeptTransfer] = new QLabel($this);
                    $this->lbldelete[$items->IddeptTransfer]->HtmlEntities = FALSE;
                    $this->lbldelete[$items->IddeptTransfer]->Text = "<img src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/delete.png />";
                    //$this->lbldelete[$issue->IdissuedItems]->ButtonMode = QButtonMode::Danger;
                    $this->lbldelete[$items->IddeptTransfer]->AddAction(new QClickEvent(), new QServerAction('lbldelete1_click'));
                    $this->lbldelete[$items->IddeptTransfer]->ActionParameter = $items->IddeptTransfer;
                    $this->lbldelete[$items->IddeptTransfer]->ToolTip = QApplication::Translate('Delete');
                }
            }
        }
        
        //indvidual Outward controls
        
        $this->txtDescription = new QTextBox($this);
        $this->txtDescription->Placeholder = "Description"; 
        $this->txtDescription->Width = '100%';
        
        $this->txtCode1 = new QTextBox($this);
        $this->txtCode1->Placeholder = "Code"; 

        $this->lstmember = new QSelect2ListBox($this);
        $this->lstmember->Name = "Member";
        $this->lstmember->Width = 300;
        $this->lstmember->AddItem("-Select Member-",NULL);
        $members = Login::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::Login()->IdloginObject->Grp, 34)));
       // $this->lstmember->Width =300;
        foreach($members as  $member){
            $this->lstmember->AddItem($member->IdloginObject->Name,$member->Idlogin);
        }
        $this->lstmember->AddAction(new QClickEvent(),new QAjaxAction('lstmember_click'));

        if(isset($_GET['mem'])){ 
            $this->lstmember->SelectedValue = $_GET['mem'];
        }

        $this->lstitem = new QSelect2ListBox($this);
        $this->lstitem->Width = '100%';
        $this->lstitem->AddItem("-Select Item-",NULL);
        $ledgers = LedgerDetails::LoadAll();
        foreach ($ledgers as  $ledger){
            $this->lstitem->AddItem( $ledger->DisplayName, $ledger->IdledgerDetails);
        }
        $this->lstitem->AddAction(new QClickEvent(),new QServerAction('lstitem_click'));

        $this->lstserial = new QSelect2ListBox($this);
        $this->lstserial->Width = '100%';
        $this->lstserial->AddItem("-Select Serials-",NULL);

        $this->calDate1 =new QCalendar($this);
        $this->calDate1->Width =150;
        $this->calDate1->Name = "Date";

        if(isset($_GET['fdate'])){
            $this->calDate1->Text = Date('Y/m/d', strtotime($_GET['fdate']));
        }

        //Delete 
        if(isset($_GET['fdate']) && isset($_GET['mem'])){ 
            $issues = IssuedItems::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::IssuedItems()->Member,$_GET['mem']),
                    QQ::Equal(QQN::IssuedItems()->Date,date('Ymd', strtotime($this->calDate1->Text)))
                    ));
                    foreach ($issues as $issue){
                        $this->lbldelete2[$issue->IdissuedItems] = new QLabel($this);
                        $this->lbldelete2[$issue->IdissuedItems]->HtmlEntities = FALSE;
                        $this->lbldelete2[$issue->IdissuedItems]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                        $this->lbldelete2[$issue->IdissuedItems]->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are You sure you want to delete')));
                        $this->lbldelete2[$issue->IdissuedItems]->AddAction(new QClickEvent(), new QServerAction('lbldelete2_click'));
                        $this->lbldelete2[$issue->IdissuedItems]->ActionParameter = $issue->IdissuedItems;
                        $this->lbldelete2[$issue->IdissuedItems]->ToolTip = QApplication::Translate('Delete');

                        $this->chkrtDate[$issue->IdissuedItems] = new QCheckBox($this);
                        $this->chkrtDate[$issue->IdissuedItems]->Width = 20;
                        $this->chkrtDate[$issue->IdissuedItems]->Height = 20;
                        $this->chkrtDate[$issue->IdissuedItems]->ActionParameter = $issue->IdissuedItems;
                        $this->chkrtDate[$issue->IdissuedItems]->AddAction(new QClickEvent(), new QServerAction('chkrtDate_Click'));
                        if($issue->ReturnedDate != NULL)
                            $this->chkrtDate[$issue->IdissuedItems]->Checked = 1;
                        else
                            $this->chkrtDate[$issue->IdissuedItems]->Checked = 0;
                    }
        }
       //Buttons
        $this->btnSave1 = new QButton($this);
        $this->btnSave1->ButtonMode = QButtonMode::Add;
        $this->btnSave1->AddAction(new QClickEvent(),new QServerAction('btnSave1_Click'));
        $this->btnSave1->CausesValidation = TRUE;

        $this->btnCancel1 = new QButton($this);
        $this->btnCancel1->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel1->AddAction(new QClickEvent(),new QServerAction('btnCancel1_Click'));

        if(isset($_GET['id1'])){
            $pricehistorys = IssuedItems::LoadByIdissuedItems($_GET['id']);
            if($pricehistorys){
               $this->txtDescription->Text = $pricehistorys->Description;
               $this->lstserial->SelectedValue = $pricehistorys->Serials;
               $this->lstitem->SelectedValue = $pricehistorys->Item;
             //  $this->btn->Visible = TRUE;
            }
        }
    }

    protected function lstPO_change() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?cat=' . $_GET['cat'] . '&po=' . $this->lstPO->SelectedValue);
    }

    //printing barcode
    protected function btnBarcode_click($strFormId, $strControlId, $strParameter) {
        if(isset($_GET['po'])){

            $vhp = VoucherHasItem::LoadByIdvoucherHasItem($strParameter);
            $iwows = Iwow::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Iwow()->Item, $vhp->Item),
                                QQ::Equal(QQN::Iwow()->PoNo, $_GET['po'])
                            ));

            if ($iwows)
                foreach ($iwows as $iwow) {}
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/print_barcode.php?id=' . $iwow->Idiwow .'&po=' .$_GET['po'] .'&prod=' . $vhp->Item);
        }
    }

    //adding value 
    protected function txtInwardqty_enter($strFormId, $strControlId, $strParameter) {
        $vhp = VoucherHasItem::LoadByIdvoucherHasItem($strParameter);
        if (isset($_GET['po']) ) {
            $totqty = 0;
            $iwows = Iwow::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Iwow()->Item, $vhp->Item),
                                QQ::Equal(QQN::Iwow()->PoNo, $_GET['po'])
                            ));
            if($iwows){                
                foreach($iwows as $iwow){}
                $totqty = $vhp->Qty - $iwow->Qty;
            }else{
                $totqty = $vhp->Qty;
            }
            if($this->txtInwardqty[$vhp->Item]->Text <= $totqty){

                $iwows = Iwow::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Iwow()->Item, $vhp->Item),
                                    QQ::Equal(QQN::Iwow()->PoNo, $_GET['po'])
                                ));
                if($iwows){
                    foreach($iwows as $iwow){}
                }else{
                    $iwow = new Iwow();
                    $iwow->IwowCat = $_GET['cat'];
                    $code = Settings::LoadByName('IWOW');
                    $iwow->Code = $code->Option ;
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $iwow->ToDeparment = 801; //Central Store
                }
                $iwow->Item = $vhp->Item;
                $iwow->Qty = $iwow->Qty + $this->txtInwardqty[$vhp->Item]->Text;
                $iwow->DataBy = $_SESSION['login'];
                $iwow->PoNo = $this->lstPO->SelectedValue;
                $iwow->Date = $this->calDate->DateTime;
                $iwow->Save();


                for ($i = 1; $i <= $this->txtInwardqty[$vhp->Item]->Text; $i++) {
                    $accat = AccessionCat::LoadByIdaccessionCat(2); //cat Asset
                    $serial = new Serials();
                    $serial->Category = $accat->IdaccessionCat;
                    $serial->Code = $accat->ShortName . $accat->Code;
                    $accat->Code = $accat->Code + 1;
                    $accat->Save();
                    $serial->RefVou = $vhp->IdvoucherHasItem;
                    $serial->Item = $vhp->Item;
                    $serial->Ref = $iwow->Idiwow; //remain
                    $serial->Save();
                }
                //creating accessions
                //product price entry for stock
                $opening = 0;
                //calulating opening
                $oldstocks = PriceHistory::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::PriceHistory()->Item, $vhp->Item),
                                        QQ::Equal(QQN::PriceHistory()->Godown, $iwow->ToDeparment),
                                        QQ::LessThan(QQN::PriceHistory()->Date, date('Ymd', strtotime($iwow->Date)))
                                    ));
                if ($oldstocks) {
                    foreach ($oldstocks as $oldstock) {} $opening = $oldstock->Closing;
                }

                $stocks = PriceHistory::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::PriceHistory()->Item, $vhp->Item),
                                        QQ::Equal(QQN::PriceHistory()->Godown, $iwow->ToDeparment), 
                                        QQ::Equal(QQN::PriceHistory()->Date, date('Ymd', strtotime($iwow->Date)))
                                    ));
                if ($stocks) {
                    foreach ($stocks as $stock) { }
                    $stock->Inword = $stock->Inword + $this->txtInwardqty[$vhp->Item]->Text;
                } else {
                    $stock = new PriceHistory();
                    $stock->Date = $iwow->Date;
                    $stock->Item = $vhp->Item;
                    $stock->Godown = $iwow->ToDeparment;
                    $stock->RefVov = $vhp->IdvoucherHasItem;
                    $stock->RefIwow = $iwow->Idiwow;
                    $stock->Inword = $this->txtInwardqty[$vhp->Item]->Text;
                }
                $stock->Opening = $opening;
                $stock->Closing = $stock->Opening + $stock->Inword - $stock->Outward;
                $stock->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?id=' . $iwow->Idiwow .'&po='.$iwow->PoNo .'&cat=' . $iwow->IwowCat);
            }else {
                QApplication::DisplayAlert('Please enter valid quantity');
            }
        }
    }

    //start save function
    protected function btnSave_Click() {
        if (isset($_GET['id'])) {
            $iwow = Iwow::LoadByIdiwow($_GET['id']);
            $iwow->Date = $this->calDate->DateTime;
            $iwow->Save();
        }
        $this->btnCancel_Click();
    }

    //end save function
    //start cancel function
    protected function btnCancel_Click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?cat=2');
    }

    //start cancel function
    //start delete function
    protected function btnDelete_Click() {
        $iwow = Iwow::LoadByIdiwow($_GET['id']);

        //deleting accession
        $accs = Serials::LoadArrayByRef($iwow->Idiwow);
        if ($accs) {
            foreach ($accs as $acc) {
                $acc->Delete();
            }
        }
        //deleting stock
        $stocks = PriceHistory::LoadArrayByRefIwow($iwow->Idiwow);
        if ($stocks) {
            foreach ($stocks as $stock) {
                $stock->Delete();
            }
        }
        $iwow->Delete();
        $this->btnCancel_Click();
    }

    //end delete function

    public function dept_change($strParameter) {
        $dept = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Grp, 2), 
                        QQ::Like(QQN::Role()->Name, '%' . $strParameter . '%'))
        );
        $result = array();
        foreach ($dept as $depts) {
            $result[] = delete_all_between('[', ']', $depts->Name);
        }
        return $result;
    }

    public function product_add($strParameter) {
        $product = Serials::QueryArray(
                                QQ::AndCondition(
                                    QQ::Like(QQN::Serials()->ItemObject->DisplayName, '%' . $strParameter . '%')
                                ));
        $result = array();
        $dept = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_SESSION['login']),
                                QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_SESSION['role'])
                            ));
        foreach ($dept as $dept1) {}
        foreach ($product as $products) {
            $dept = DeptTransfer::QueryArray(
                            QQ::AndCondition(                                
                                QQ::Equal(QQN::DeptTransfer()->Serials,$products->Idserials)
                            ));
            if (!$dept) {
                $result[] = $products->Code . '-' . $products->ItemObject->DisplayName;
            }
        }
        return $result;
    }

    protected function btnpro_Add($strFormId, $strControlId, $strParameter) {
        if ($this->txtprocode->Text != NULL && isset($_GET['Dept']) ) {
            $dept = LoginHasRole::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_SESSION['login']),
                                        QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_SESSION['role'])
                                    ));
            foreach ($dept as $dept1) {}
            $items = explode("-", $this->txtprocode->Text);
            $item = LedgerDetails::LoadByDisplayName($items[1]);
            $data = explode("-", $this->txtDept->Text);
            $todept = Role::LoadByIdrole($_GET['Dept']);
            $serial = Serials::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Like(QQN::Serials()->Code, $items[0])
                                ));
            foreach ($serial as $serials) {
                
            }
            $dept_trans = new DeptTransfer();
            $dept_trans->Date = $this->calfromdate->DateTime;
            $dept_trans->FromDept = $dept1->RoleIdroleObject->Parrent;
            $dept_trans->Item = $item->IdledgerDetails;
            $dept_trans->ToDept = $todept->Idrole;
            $dept_trans->Qty = 1;
            $dept_trans->Serials = $serials->Idserials;
            $dept_trans->Save();

            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?cat='. $_GET['cat'] . '&Dept=' . $_GET['Dept'] . '&date=' . $_GET['date']);
        } else {
            QApplication::DisplayAlert('Please select product and Department');
        }
    }

    protected function btnSearch_Click() {
        if ($this->txtDept->Text != "") {
            $dept = Role::QuerySingle(
                        QQ::AndCondition(
                            QQ::Like(QQN::Role()->Name, $this->txtDept->Text.'%')
                        ));
            
            if ($dept)
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?cat='.$_GET['cat'] . '&Dept=' . $dept->Idrole . '&date=' . date('Ymd', strtotime($this->calfromdate->Text)));
            else
                QApplication::DisplayAlert("Invalid Department");

        }
    }

    protected function lbldelete1_click($strFormId, $strControlId, $strParameter) {
        $item = DeptTransfer::LoadByIddeptTransfer($strParameter);
        if($item && $item->AcceptedBy == NULL){
            $item->Delete();
        }else{
            QApplication::DisplayAlert('Item Accepted...');
        }
    }

    
    protected function btnSave1_Click($strFormId, $strControlId, $strParameter) {
        if($this->lstitem->SelectedValue !== NULL && $this->lstserial->SelectedValue !== NULL){
            $loginhasrole = LoginHasRole::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_SESSION['login']),
                                            QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_SESSION['role'])
                                        )); 
            foreach($loginhasrole as $role){}
            if(isset($_GET['id1'])){
                $issue = IssuedItems::LoadByIdissuedItems($_GET['id1']);
                if ($issue){
                    if(isset($_GET['mem'])){
                        $issue->Description = $this->txtDescription->Text;
                        $issue->Date = $this->calDate1->DateTime;
                        $issue->Item = $this->lstitem->SelectedValue;
                        $issue->Serials = $this->lstserial->SelectedValue;
                        $issue->FromDept = $role->RoleIdroleObject->Parrent;
                        $issue->Member = $_GET['mem'];
                        $issue->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?mem='.$this->lstmember->SelectedValue.'&fdate='.date('Ymd',  strtotime($this->calDate1->Text)).'&cat='.$_GET['cat']);
                    }
                }                      
            }else {
                $issue = new IssuedItems();
                $set = Settings::LoadByIdsettings(3);
                $issue->Code = $set->Option;
                $set->Option= $set->Option +1;
                $set->Save();
                $issue->Code = $set->Option ;
                $issue->Description = $this->txtDescription->Text;
                $issue->Date = $this->calDate1->DateTime;
                $issue->Item = $this->lstitem->SelectedValue;
                $issue->Serials = $this->lstserial->SelectedValue;
                $issue->FromDept = $role->RoleIdroleObject->Parrent;
                $issue->Member = $_GET['mem'];
                $issue->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?mem='.$this->lstmember->SelectedValue.'&fdate='.date('Ymd',  strtotime($this->calDate1->Text)).'&cat='.$_GET['cat']);
            }  
        }else{
            QApplication::DisplayAlert('Please Fields Value');
        }
    }
    
    public function chkrtDate_Click($strFormId, $strControlId, $strParameter) {
        $issue = IssuedItems::LoadByIdissuedItems($strParameter);
        if($issue->AcceptedBy != NULL){
            if($this->chkrtDate[$issue->IdissuedItems]->Checked == TRUE){
                $issue->ReturnedDate = QDateTime::Now();
                $issue->ReturnItem = 1;
                $issue->Save();
                QApplication::DisplayAlert(' Return this item by  ' .$issue->MemberObject->IdloginObject->Name); 
            }else{
                $issue->ReturnedDate = NULL;
                $issue->ReturnItem = NULL;
                $issue->Save();
            }
        }else{
            $this->chkrtDate[$issue->IdissuedItems]->Checked = 0;
            QApplication::DisplayAlert('Item not Accepted');
        }
    }

    public function lbldelete2_click($strFormId, $strControlId, $strParameter) {
        try{
          //   if(isset($_GET['id1'])){
            $issues = IssuedItems::LoadArrayByMember($_GET['mem']);
          if($issues){
            foreach ($issues as$issue){}
            $issue->Delete(); 
             } 
           //  }    
        }  catch (Exception $ex){
            QApplication::DisplayAlert(' This Item cannot be deleted '); 
        }
    }

    protected function lstmember_click($strFormId, $strControlId, $strParameter) {
        if($this->calDate1->Text != NULL && $this->lstmember->SelectedValue !== NULL){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/inward_outward.php?mem='.$this->lstmember->SelectedValue.'&fdate='.date('Ymd',  strtotime($this->calDate1->Text)).'&cat='.$_GET['cat']);
        }else{
            QApplication::DisplayAlert('Please Select Date');
        }
    }

    protected function lstitem_click($strFormId, $strControlId, $strParameter) {
        $this->lstserial->RemoveAllItems();
        $loginhasrole = LoginHasRole::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_SESSION['login']),
                                            QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_SESSION['role'])
                                        )); 
        foreach($loginhasrole as $role){}
        
        $issue = Serials::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Serials()->Item, $this->lstitem->SelectedValue)
                    ));
        foreach ($issue as $serial){
            $itemindept = array();
            $reqs = DeptTransfer::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::DeptTransfer()->Serials, $serial->Idserials),    
                                    QQ::Equal(QQN::DeptTransfer()->ToDept, $role->RoleIdroleObject->Parrent)
                                ));
            if($reqs){ 
                foreach ($reqs as $req) {
                    $issuedreqs = IssuedItems::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::IssuedItems()->Serials, $serial->Idserials),
                                QQ::Equal(QQN::IssuedItems()->FromDept, $role->RoleIdroleObject->Parrent),    
                                QQ::OrCondition(
                                    QQ::Equal(QQN::IssuedItems()->ReturnItem , NULL),
                                    QQ::Equal(QQN::IssuedItems()->ReturnItem , 0)
                                )));  
                    if(!$issuedreqs){
                        if(!array_key_exists($req->Serials, $itemindept)){
                            $itemindept[$req->Serials] = $req->SerialsObject->Code;
                        }
                    }
                    
                }
            }

            foreach($itemindept as $key => $itemindept){
                $this->lstserial->AddItem($itemindept, $key);
            }
        }
    }
}

InwardOutward::Run('InwardOutward');
?>        