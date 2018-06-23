<?php
  require('../../qcubed.inc.php');  

    class ItemEditForm extends QForm {
        protected $btnNew;
	protected $btnList;
        protected $btnSave;
        protected $btnUnit;
        protected $btnDelete;
        protected $btnDelete1;      
        protected $btnDelete2;
        
        protected $btnCancel;        
        protected $dtgItem;
        protected $dtgUnit;
        protected $dtgStkGrp;


        protected $txtCode;
        protected $txtName;
        protected $txtBrand;
        protected $txtStockGrp;
        protected $txtUnit;
        protected $txtCost;
        protected $txtDp;
        protected $txtmrp;
        protected $txtMinStock;
        protected $txtVatRate;
        protected $txtDutiesRate;

        protected $txtUnitName;
        protected $txtDescription;
        protected $txtDecimalPlaces;
        protected $txtQtyInvolved;
        
        protected $txtStkgrpName;
        protected $txtStkgrpParrent;
        protected $txtStkgrpVatRate;
        protected $txtStkgrpDutiesRate;
        protected $btnStkGrpSave;

        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
            
            //textboxes
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = "Code";
            $code = Settings::LoadByIdsettings(3);
            $this->txtCode->Text = 'I'.$code->Option;
            
            $this->txtCode->ReadOnly = TRUE;
            $this->txtCode->Width = 70;
            
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Name";
            $this->txtName->Required = TRUE;
            //Code for getting Active group and brand            
            $actbrand = Settings::LoadByName("Active Brand");
            $actstkgrp = Settings::LoadByName("Active Group");
            
            $this->txtBrand = new QSelect2ListBox($this);
            $this->txtBrand->Name = "Brand";
            $this->txtBrand->AddItem("-Select-",NULL);
            $brands = StockGrp::LoadArrayByParrent($actbrand->Option);
            foreach ($brands as $brand){
                $this->txtBrand->AddItem($brand->Name, $brand->IdstockGrp);
            }
            
            $this->txtStockGrp = new QSelect2ListBox($this);
            $this->txtStockGrp->Name = "Stock Group";
            $this->txtStockGrp->AddItem("-Select-",NULL);
            $stkgrps = StockGrp::LoadArrayByParrent($actstkgrp->Option);
            foreach ($stkgrps as $stkgrp){
                $this->txtStockGrp->AddItem($stkgrp->Name, $stkgrp->IdstockGrp);
            }
            
            $this->txtUnit = new QSelect2ListBox($this);
            $this->txtUnit->Name = "Unit";
            $this->txtUnit->Required = TRUE;
            $this->txtUnit->AddItem("-Select-",NULL);
            $units = Unit::LoadAll();
            foreach ($units as $unit){
                $this->txtUnit->AddItem($unit->Name, $unit->Idunit);
            }
            
            $this->txtCost = new QTextBox($this);
            $this->txtCost->Name = "Cost";
            $this->txtDp = new QTextBox($this);
            $this->txtDp->Name = "DP";
            $this->txtmrp = new QTextBox($this);
            $this->txtmrp->Name = "MRP";
            $this->txtMinStock = new QTextBox($this);
            $this->txtMinStock->Name = "Min Stock";
            $this->txtVatRate = new QTextBox($this);
            $this->txtVatRate->Name = "Vat Rate";
            $this->txtDutiesRate = new QTextBox($this);
            $this->txtDutiesRate->Name = "Duties Rate";
            
            $this->txtUnitName = new QTextBox($this);
            $this->txtDecimalPlaces = new QTextBox($this);
            $this->txtDescription = new QTextBox($this);
            $this->txtQtyInvolved = new QTextBox($this);
            
            $this->txtUnitName->Width = 150;            
            $this->txtDescription->Width = 150;
            $this->txtDecimalPlaces->Width = 100;
            $this->txtQtyInvolved->Width = 100;
            
            $this->txtUnitName->Placeholder = "Unit Name";            
            $this->txtDescription->Placeholder = "Description";
            $this->txtDecimalPlaces->Placeholder = "Decimal Places";
            $this->txtQtyInvolved->Placeholder = "Qty Involved";
            
            $this->txtStkgrpName = new QTextBox($this);
            $this->txtStkgrpName->Width = 150;            
            $this->txtStkgrpParrent = new QSelect2ListBox($this);
            $this->txtStkgrpParrent->Width = 150;
            $this->txtStkgrpParrent->AddItem("-select-",NULL);
            $stkgrps = StockGrp::LoadAll();
            foreach ($stkgrps as $stkgrp){
                $this->txtStkgrpParrent->AddItem($stkgrp->Name, $stkgrp->IdstockGrp);    
            }
            $this->txtStkgrpVatRate = new QTextBox($this);
            $this->txtStkgrpVatRate->Width = 100;            
            $this->txtStkgrpDutiesRate = new QTextBox($this);
            $this->txtStkgrpDutiesRate->Width = 100;
            
            $this->txtStkgrpName->Placeholder = "Group Name";
            $this->txtStkgrpParrent->Placeholder = "Parrent";
            $this->txtStkgrpVatRate->Placeholder = "Vat Rate";
            $this->txtStkgrpDutiesRate->Placeholder = "Duties Rate";
                
            //Item
            $this->dtgItem = new QDataGrid($this);
            $this->dtgItem->CssClass = "datagrid";

            $this->dtgItem->ShowFilter = TRUE;

            $this->dtgItem->Paginator = new QPaginator($this->dtgItem);
            $this->dtgItem->ItemsPerPage = 10;
            $this->dtgItem->SetDataBinder('dtgItem_Bind');
            
            $this->dtgItem->RowActionParameterHtml = '<?= $_ITEM->IdledgerDetails ?>';
            $this->dtgItem->AddRowAction(new QClickEvent(), new QServerAction('dtgItemRow_Click'));
            $this->dtgItem->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));
            $this->dtgItem->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->IdledgerDetailsObject->Code ?>', 'Width=50'));
            
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->DisplayName ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::LedgerDetails()->DisplayName),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::LedgerDetails()->DisplayName, false)));

            $Name->Filter = QQ::Like(QQN::LedgerDetails()->DisplayName, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgItem->AddColumn($Name);
            
            $this->dtgItem->AddColumn(new QDataGridColumn('Brand', '<?= $_ITEM->BrandObject ?>'));
            $this->dtgItem->AddColumn(new QDataGridColumn('Stock Group', '<?= $_ITEM->StockGrpObject ?>'));
                        
            //Unit
            $this->dtgUnit = new QDataGrid($this);
            $this->dtgUnit->CssClass = "datagrid";

            $this->dtgUnit->ShowFilter = TRUE;

            $this->dtgUnit->Paginator = new QPaginator($this->dtgUnit);
            $this->dtgUnit->ItemsPerPage = 10;
            $this->dtgUnit->SetDataBinder('dtgUnit_Bind');
            
            $this->dtgUnit->RowActionParameterHtml = '<?= $_ITEM->Idunit ?>';
            $this->dtgUnit->AddRowAction(new QClickEvent(), new QServerAction('dtgUnitRow_Click'));
                        
            $this->dtgUnit->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Unit()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Unit()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Unit()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgUnit->AddColumn($Name);
            
            $this->dtgUnit->AddColumn(new QDataGridColumn('Description', '<?= $_ITEM->Description ?>'));
            $this->dtgUnit->AddColumn(new QDataGridColumn('Decimal Places', '<?= $_ITEM->DecimalPlaces ?>'));
            $this->dtgUnit->AddColumn(new QDataGridColumn('Qty Involved', '<?= $_ITEM->QtyInvolved ?>'));
            
            //Stock group
            
            $this->dtgStkGrp = new QDataGrid($this);
            $this->dtgStkGrp->CssClass = "datagrid";

            $this->dtgStkGrp->ShowFilter = TRUE;

            $this->dtgStkGrp->Paginator = new QPaginator($this->dtgStkGrp);
            $this->dtgStkGrp->ItemsPerPage = 10;
            $this->dtgStkGrp->SetDataBinder('dtgStockGrp_Bind');
            
            $this->dtgStkGrp->RowActionParameterHtml = '<?= $_ITEM->IdstockGrp ?>';
            $this->dtgStkGrp->AddRowAction(new QClickEvent(), new QServerAction('dtgStockGrpRow_Click'));
            
            $this->dtgStkGrp->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));
            
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::StockGrp()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::StockGrp()->Name, false)));

            $Name->Filter = QQ::Like(QQN::StockGrp()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgStkGrp->AddColumn($Name);            
            $this->dtgStkGrp->AddColumn(new QDataGridColumn('Parrent', '<?= $_ITEM->ParrentObject ?>'));
            $this->dtgStkGrp->AddColumn(new QDataGridColumn('Vat Rate', '<?= $_ITEM->VatRate ?>'));
            $this->dtgStkGrp->AddColumn(new QDataGridColumn('Duties Rate', '<?= $_ITEM->DutiesRate ?>'));
                    
            
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
            
            $this->btnUnit = new QButton($this);         
            $this->btnUnit->AddAction(new QClickEvent(), new QServerAction("btnUnit_Click"));
            
            $this->btnStkGrpSave = new QButton($this);
            
            $this->btnStkGrpSave->AddAction(new QClickEvent(), new QServerAction("btnStkGrpSave_Click"));
            
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
            
            $this->btnDelete1 = new QButton($this);
            $this->btnDelete1->ButtonMode = QButtonMode::Delete;
            $this->btnDelete1->Visible = FALSE;
            $this->btnDelete1->AddAction(new QClickEvent(), new QServerAction("btnDelete1_Click"));            
            
            $this->btnDelete2 = new QButton($this);
            $this->btnDelete2->ButtonMode = QButtonMode::Delete;
            $this->btnDelete2->Visible = FALSE;
            $this->btnDelete2->AddAction(new QClickEvent(), new QServerAction("btnDelete2_Click"));            
            
            
            $this->btnNew = new QButton($this);
            $this->btnNew->ButtonMode = QButtonMode::AddNew;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));
            
            $this->btnList = new QButton($this);
            $this->btnList->ButtonMode = QButtonMode::listall;
            $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));
            
            if(isset($_GET['stkgrp'])){
                $this->btnDelete2->Visible = TRUE;
                $this->btnStkGrpSave->ButtonMode = QButtonMode::Save;
                $stkgrp = StockGrp::LoadByIdstockGrp($_GET['stkgrp']);
                $this->txtStkgrpName->Text = $stkgrp->Name;
                $this->txtStkgrpParrent->SelectedValue = $stkgrp->Parrent;
                $this->txtStkgrpVatRate->Text = $stkgrp->VatRate;
                $this->txtStkgrpDutiesRate->Text = $stkgrp->DutiesRate;
            }else{
                $this->btnStkGrpSave->ButtonMode = QButtonMode::Add;    
            }
            
            if(isset($_GET['unit'])){
                $this->btnDelete1->Visible = TRUE;
                $this->btnUnit->ButtonMode = QButtonMode::Save;
                $unit = Unit::LoadByIdunit($_GET['unit']);           
                $this->txtUnitName->Text = $unit->Name;
                $this->txtDescription->Text = $unit->Description;
                $this->txtDecimalPlaces->Text = $unit->DecimalPlaces ;
                $this->txtQtyInvolved->Text = $unit->QtyInvolved;                
            }else{
                $this->btnUnit->ButtonMode = QButtonMode::Add;
            }
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;
                $item = LedgerDetails::LoadByIdledgerDetails($_GET['id']);
                $this->txtCode->Text = $item->IdledgerDetailsObject->Code;
                $this->txtName->Text = $item->DisplayName;
                $this->txtBrand->SelectedValue = $item->Brand;
                $this->txtStockGrp->SelectedValue = $item->StockGrp;
                $this->txtUnit->SelectedValue = $item->Unit;
                $this->txtCost->Text = $item->Cost;
                $this->txtDp->Text = $item->Dp;
                $this->txtmrp->Text = $item->Mrp;                
                $this->txtMinStock->Text = $item->MinStock;
                $this->txtVatRate->Text = $item->VatRate;
                $this->txtDutiesRate->Text = $item->DutiesRate;                
            }
            
            if(isset($_GET['new'])){
                $this->txtName->Focus();
            }
            
            if(isset($_GET['tab'])&&$_GET['tab'] == 1){
                $this->txtUnitName->Focus();
            }
            
            if(isset($_GET['tab'])&&$_GET['tab'] == 2){
                $this->txtStkgrpName->Focus();
            }
        }
        
        protected function dtgItem_Bind(){
                $this->dtgItem->TotalItemCount = LedgerDetails::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgItem->Conditions
                                ));

                $data = LedgerDetails::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgItem->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::LedgerDetails()->IdledgerDetails, TRUE),
                        $this->dtgItem->LimitClause
                ));

                $this->dtgItem->DataSource = $data;
        }
        
        protected function dtgUnit_Bind(){
                $this->dtgUnit->TotalItemCount = Unit::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgUnit->Conditions
                                ));

                $data = Unit::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgUnit->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Unit()->Idunit, TRUE),
                        $this->dtgUnit->LimitClause
                ));

                $this->dtgUnit->DataSource = $data;
        }
        
        protected function dtgStockGrp_Bind(){
                $this->dtgStkGrp->TotalItemCount = StockGrp::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgStkGrp->Conditions
                                ));

                $data = StockGrp::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgStkGrp->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::StockGrp()->IdstockGrp, TRUE),
                        $this->dtgStkGrp->LimitClause
                ));

                $this->dtgStkGrp->DataSource = $data;
        }

        protected function btnSave_Click(){
            if(isset($_GET['id'])){
                $item = LedgerDetails::LoadByIdledgerDetails($_GET['id']);
                $ledger = Ledger::LoadByIdledger($item->IdledgerDetails);                
                $ledger->Name = $this->txtName->Text.'-'.$ledger->Code;
                $ledger->Save();
            }else{
                $ledger = new Ledger();
                $code = Settings::LoadByIdsettings(3);
                $this->txtCode->Text = 'I'.$code->Option;                
                $code->Option = $code->Option + 1;
                $code->Save();
                $ledger->Name = $this->txtName->Text.'-'.$this->txtCode->Text;
                $ledger->Code = $this->txtCode->Text;
                $ledger->Grp = 52;
                $ledger->IsGrp = 0;
                $ledger->Save();
                
                $item = new LedgerDetails();
                $item->IdledgerDetails = $ledger->Idledger;
            }
            
            $item->DisplayName = $this->txtName->Text;
            $item->Brand = $this->txtBrand->SelectedValue;
            $item->StockGrp = $this->txtStockGrp->SelectedValue;
            $item->Unit = $this->txtUnit->SelectedValue;
            $item->Cost = $this->txtCost->Text;
            $item->Dp = $this->txtDp->Text;
            $item->Mrp = $this->txtmrp->Text;                
            $item->MinStock = $this->txtMinStock->Text;
            $item->VatRate = $this->txtVatRate->Text;
            $item->DutiesRate = $this->txtDutiesRate->Text;
            $item->Save();
            $this->RedirectToListPage();
        }
        
        protected function btnUnit_Click(){
            if($this->txtUnitName->Text != ""){
                if(isset($_GET['unit'])){
                    $unit = Unit::LoadByIdunit($_GET['unit']);
                }else{
                    $unit = new Unit();
                }
                $unit->Name = $this->txtUnitName->Text;
                $unit->Description = $this->txtDescription->Text;
                $unit->DecimalPlaces = $this->txtDecimalPlaces->Text;
                $unit->QtyInvolved = $this->txtQtyInvolved->Text;
                $unit->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?tab=1#1');
            }else{
                QApplication::DisplayAlert("Please enter at least unit name");                
            }            
        }

        protected function btnStkGrpSave_Click(){
            if($this->txtStkgrpName->Text != ""){
                if(isset($_GET['stkgrp'])){
                    $stkgrp = StockGrp::LoadByIdstockGrp($_GET['stkgrp']);
                }else{
                    $stkgrp = new StockGrp();
                }
                $stkgrp->Name =  $this->txtStkgrpName->Text;
                $stkgrp->Parrent = $this->txtStkgrpParrent->SelectedValue;
                $stkgrp->VatRate = $this->txtStkgrpVatRate->Text;
                $stkgrp->DutiesRate = $this->txtStkgrpDutiesRate->Text;
                $stkgrp->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?tab=2');
            }else{
                QApplication::DisplayAlert("Please enter at least group name");                
            }
        }
        
        protected function btnCancel_Click(){
            $this->RedirectToListPage();
        }
        
        protected function btnDelete_Click(){
            $item = LedgerDetails::LoadByIdledgerDetails($_GET['id']);
            $ledger = Ledger::LoadByIdledger($item->IdledgerDetails);
            $item->Delete();
            $ledger->Delete();
            $this->RedirectToListPage();
        }

        protected  function btnDelete1_Click(){
            $unit = Unit::LoadByIdunit($_GET['unit']);
            $unit->Delete();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?tab=1#1');
        }
        protected  function btnDelete2_Click(){
            $stkgrp = StockGrp::LoadByIdstockGrp($_GET['stkgrp']);
            $stkgrp->Delete();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?tab=2');
        }
        
        public function dtgItemRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?id='.$strParameter);
        }
        
        public function dtgUnitRow_Click($strFormId, $strControlId, $strParameter){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?unit='.$strParameter.'&tab=1#1');
        }
        
        public function dtgStockGrpRow_Click($strFormId, $strControlId, $strParameter){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?stkgrp='.$strParameter.'&tab=2#2');
        }
        
        
        protected function btnNew_Click() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php?new=1');
        }
        
        public function btnList_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/item_edit.php');
        }
    }

ItemEditForm::Run('ItemEditForm');
?>