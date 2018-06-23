<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	//require(__FORMBASE_CLASSES__ . '/SupplierCatEditFormBase.class.php');

    class SupplierCatEditForm extends QForm {
        protected $txtName;
        protected $txtIncome;

        protected $btnSave;
        protected $btnCancel;
        protected $btnDelete;

        protected $dtgSupplierType;
        protected $currentId;
        protected $editMode;
        // Override Form Event Handlers as Needed
        protected function Form_Run() {
            parent::Form_Run();

            // Security check for ALLOW_REMOTE_ADMIN
            // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
            QApplication::CheckRemoteAdmin();
        }

        //protected function Form_Load() {}

        protected function Form_Create() {
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Category Name";
            $this->txtName->Required = True;
            
            $this->txtIncome = new QTextBox($this);
            $this->txtIncome->Name = "Income";
            $this->txtIncome->Required = True;
            
            //datagrid
            $this->dtgSupplierType = new QDataGrid($this);
            $this->dtgSupplierType->CssClass = "datagrid";

            $this->dtgSupplierType->ShowFilter = TRUE;

            $this->dtgSupplierType->Paginator = new QPaginator($this->dtgSupplierType);
            $this->dtgSupplierType->ItemsPerPage = 10;
            $this->dtgSupplierType->SetDataBinder('dtgSupplierType_Bind');

            $this->dtgSupplierType->RowActionParameterHtml='<?= $_ITEM->IdsupplierCat ?>';
            $this->dtgSupplierType->AddRowAction(new QClickEvent(), new QServerAction('dtgSupplierTypeRow_Click'));

            $this->dtgSupplierType->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=10'));
            $this->dtgSupplierType->AddColumn(new QDataGridColumn('Name ',  '<?= $_ITEM->Name ?>', 'Width=150'));
            $this->dtgSupplierType->AddColumn(new QDataGridColumn('Income ',  '<?= $_ITEM->Income ?>', 'Width=150'));

            //button
            $this->btnSave=new QButton($this);
            //$this->btnSave->Text="Save";
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->CausesValidation = TRUE;
            $this->btnSave->AddAction(new QClickEvent(),new QServerAction('btnSave_click'));
            
            $this->btnCancel=new QButton($this);
            //$this->btnCancel->Text="Cancel";
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('btnCancel_click'));

            $this->btnDelete=new QButton($this);
            //$this->btnDelete->Text="Delete";
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Block Details'))));
            $this->btnDelete->AddAction(new QClickEvent(),new QServerAction('btnDelete_click'));
            $this->btnDelete->Display = FALSE;
            
            //extra controls
            $this->currentId = 0;
            $this->editMode = FALSE;
        }
        
        protected function btnSave_click() {
            if($this->editMode == FALSE){
                $objSupplierCat = new SupplierCat();
                $objSupplierCat->Name = $this->txtName->Text;
                $objSupplierCat->Income = $this->txtIncome->Text;
                $objSupplierCat->Save();
            }
            elseif ($this->editMode == TRUE && $this->currentId != 0) {
                $objSupplierCat = SupplierCat::LoadByIdsupplierCat($this->currentId);
                $objSupplierCat->Name = $this->txtName->Text;
                $objSupplierCat->Income = $this->txtIncome->Text;
                $objSupplierCat->Save();
            }
            $this->pageClearAll();
        }
        
        protected function btnCancel_click() {
           $this->txtName->Text = "";
           $this->txtIncome->Text = "";
           $this->currentId = 0;
           $this->editMode = FALSE;
           $this->btnDelete->Display = FALSE;
        }
        
        protected function btnDelete_click() {
            if($this->currentId != 0){
                $objSupplierCat = SupplierCat::LoadByIdsupplierCat($this->currentId);
                $objSupplierCat->Delete();
                $this->txtName->Text = "";
                $this->txtIncome->Text = "";
            }else{
                QApplication::DisplayAlert("No Such Supplier Category Exists");
            }
            $this->btnDelete->Display = FALSE;
            $this->pageClearAll();
        }
        
        protected function dtgSupplierType_Bind() {
            $this->dtgSupplierType->TotalItemCount = SupplierCat::QueryCount(
                    QQ::AndCondition(                                    
                            $this->dtgSupplierType->Conditions
                            ));
            $data = SupplierCat::QueryArray(
                        QQ::AndCondition(
                            $this->dtgSupplierType->Conditions
                            ),
            QQ::Clause(
                    QQ::OrderBy(QQN::SupplierCat()->IdsupplierCat, TRUE),
                    $this->dtgSupplierType->LimitClause
            ));

            $this->dtgSupplierType->DataSource = $data;
        }
        
        protected function dtgSupplierTypeRow_Click($styrFormId,$strControlId,$strParameter) {
            $this->btnDelete->Display = TRUE;
            $this->editMode = TRUE;
            if(isset($strParameter)){
               $objSupplierCat = SupplierCat::LoadByIdsupplierCat($strParameter);
               if($objSupplierCat) {
                   $this->txtName->Text = $objSupplierCat->Name;
                   $this->txtIncome->Text = $objSupplierCat->Income;
                   $this->currentId = $objSupplierCat->IdsupplierCat;
               }
            }
        }
        
        protected function pageClearAll() {
            $this->txtName->Text = "";
            $this->txtIncome->Text = "";
            $this->currentId = 0;
            $this->editMode = FALSE;
            $this->btnDelete->Display = FALSE;
        }
    }

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// supplier_cat_edit.tpl.php as the included HTML template file
	SupplierCatEditForm::Run('SupplierCatEditForm');
?>