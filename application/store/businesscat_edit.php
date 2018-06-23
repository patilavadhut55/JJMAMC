<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	//require(__FORMBASE_CLASSES__ . '/BusinesstypeEditFormBase.class.php');

        class BusinesstypeEditForm extends QForm {
            protected $txtName;
            protected $dtgBusinessType;
            
            protected $btnSave;
            protected $btnCancel;
            protected $btnDelete;
            
            //extra controls
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
            $this->dtgBusinessType = new QDataGrid($this);
            $this->dtgBusinessType->CssClass = "datagrid";

            $this->dtgBusinessType->ShowFilter = TRUE;

            $this->dtgBusinessType->Paginator = new QPaginator($this->dtgBusinessType);
            $this->dtgBusinessType->ItemsPerPage = 10;
            $this->dtgBusinessType->SetDataBinder('dtgBusinessType_Bind');

            $this->dtgBusinessType->RowActionParameterHtml='<?= $_ITEM->IdbusinessCat ?>';
            $this->dtgBusinessType->AddRowAction(new QClickEvent(), new QServerAction('dtgBusinessTypeRow_Click'));

            $this->dtgBusinessType->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));

           $this->dtgBusinessType->AddColumn(new QDataGridColumn('Name ',  '<?= $_ITEM->Name ?>', 'Width=100'));


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
                $objBusiness = new BusinessCat();
                $objBusiness->Name = $this->txtName->Text;
                $objBusiness->Save();
            }
            elseif ($this->editMode == TRUE && $this->currentId != 0) {
                $objBusiness = BusinessCat::LoadByIdbusinessCat($this->currentId);
                $objBusiness->Name = $this->txtName->Text;
                $objBusiness->Save();
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
                $objBusinessCat = BusinessCat::LoadByIdbusinessCat($this->currentId);
                $objBusinessCat->Delete();
                $this->txtName->Text = "";
            }
            else{
                QApplication::DisplayAlert("No Such Business Group Exists");
            }
            $this->btnDelete->Display = FALSE;
            $this->pageClearAll();
        }
        
        protected function dtgBusinessType_Bind(){
            $this->dtgBusinessType->TotalItemCount = BusinessCat::QueryCount(
                    QQ::AndCondition(                                    
                            $this->dtgBusinessType->Conditions
                            ));
            $data = BusinessCat::QueryArray(
                        QQ::AndCondition(
                            $this->dtgBusinessType->Conditions
                            ),
            QQ::Clause(
                    QQ::OrderBy(QQN::BusinessCat()->IdbusinessCat, TRUE),
                    $this->dtgBusinessType->LimitClause
            ));

            $this->dtgBusinessType->DataSource = $data;
        }
        protected function dtgBusinessTypeRow_Click($strFormId,$strControlId,$strParameter) {
            $this->btnDelete->Display = TRUE;
            $this->editMode = TRUE;
            
            if(isset($strParameter)){
               $objBusinessCat = BusinessCat::LoadByIdbusinessCat($strParameter);
               if($objBusinessCat) {
                   $this->txtName->Text = $objBusinessCat->Name;
                   $this->currentId = $objBusinessCat->IdbusinessCat;
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
	// businesstype_edit.tpl.php as the included HTML template file
	BusinesstypeEditForm::Run('BusinesstypeEditForm');
?>