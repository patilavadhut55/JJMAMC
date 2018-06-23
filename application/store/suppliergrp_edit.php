<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	//require(__FORMBASE_CLASSES__ . '/SuppliertypeEditFormBase.class.php');

class SuppliertypeEditForm extends QForm {
    protected $txtName;

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

//		protected function Form_Load() {}

    protected function Form_Create() {
        $this->txtName = new QTextBox($this);
        $this->txtName->Name = "Group Name";
        $this->txtName->Required = True;

        //datagrid
        $this->dtgSupplierType = new QDataGrid($this);
        $this->dtgSupplierType->CssClass = "datagrid";

        $this->dtgSupplierType->ShowFilter = TRUE;

        $this->dtgSupplierType->Paginator = new QPaginator($this->dtgSupplierType);
        $this->dtgSupplierType->ItemsPerPage = 10;
        $this->dtgSupplierType->SetDataBinder('dtgSupplierType_Bind');

        $this->dtgSupplierType->RowActionParameterHtml='<?= $_ITEM->IdsupplierGrp ?>';
        $this->dtgSupplierType->AddRowAction(new QClickEvent(), new QServerAction('dtgSupplierTypeRow_Click'));

        $this->dtgSupplierType->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=10'));
        $this->dtgSupplierType->AddColumn(new QDataGridColumn('Name ',  '<?= $_ITEM->Name ?>', 'Width=150'));


        //button
        $this->btnSave=new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->CausesValidation = TRUE;
        $this->btnSave->AddAction(new QClickEvent(),new QServerAction('btnSave_click'));

        $this->btnCancel=new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('btnCancel_click'));

        $this->btnDelete=new QButton($this);
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
            $objSupplierGrp = new SupplierGrp();
            $objSupplierGrp->Name = $this->txtName->Text;
            $objSupplierGrp->Save();
        }
        elseif ($this->editMode == TRUE && $this->currentId != 0) {
            $objSupplierGrp = SupplierGrp::LoadByIdsupplierGrp($this->currentId);
            $objSupplierGrp->Name = $this->txtName->Text;
            $objSupplierGrp->Save();
        }
        $this->pageClearAll();
    }
        
    protected function btnCancel_click() {
       $this->txtName->Text = "";
       $this->currentId = 0;
       $this->editMode = FALSE;
       $this->btnDelete->Visible = FALSE;
    }

    protected function btnDelete_click() {
        if($this->currentId != 0){
                $objSupplierGrp = SupplierGrp::LoadByIdsupplierGrp($this->currentId);
                $objSupplierGrp->Delete();
                $this->txtName->Text = "";
        }
        else{
            QApplication::DisplayAlert("No Such Supplier Group Exists");
        }
        $this->btnDelete->Display = FALSE;
        $this->pageClearAll();
    }

    protected function dtgSupplierType_Bind(){
            $this->dtgSupplierType->TotalItemCount = SupplierGrp::QueryCount(
                    QQ::AndCondition(                                    
                            $this->dtgSupplierType->Conditions
                            ));
            $data = SupplierGrp::QueryArray(
                        QQ::AndCondition(
                            $this->dtgSupplierType->Conditions
                            ),
            QQ::Clause(
                    QQ::OrderBy(QQN::SupplierGrp()->IdsupplierGrp, TRUE),
                    $this->dtgSupplierType->LimitClause
            ));

            $this->dtgSupplierType->DataSource = $data;
        }
        protected function dtgSupplierTypeRow_Click($strFormId,$strControlId,$strParameter) {
            $this->btnDelete->Display = TRUE;
            $this->editMode = TRUE;
            
            if(isset($strParameter)){
               $objSupplierGrp = SupplierGrp::LoadByIdsupplierGrp($strParameter);
               if($objSupplierGrp) {
                   $this->txtName->Text = $objSupplierGrp->Name;
                   $this->currentId = $objSupplierGrp->IdsupplierGrp;
               }
            }
        }
        protected function pageClearAll() {
            $this->txtName->Text = "";
            $this->currentId = 0;
            $this->editMode = FALSE;
            $this->btnDelete->Display = FALSE;
        }
    
}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// suppliertype_edit.tpl.php as the included HTML template file
	SuppliertypeEditForm::Run('SuppliertypeEditForm');
?>