<?php
	
	require('../../qcubed.inc.php');
        //require(__FORMBASE_CLASSES__ . '/DocCategoryEditFormBase.class.php');

	class DocCategoryEditForm extends QForm {
            protected $txtName;
            protected $btnAdd;
            
            protected $btnSave;
            protected $btnCancel;
            protected $btnDelete;
            
            protected $dtgDocCategory;
            protected $currentId;
            protected $editMode;
            
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = "Name";
                
                $this->btnAdd = new QButton($this);
                $this->btnAdd->Text = 'Add New';
                $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_Click'));

                $this->btnSave = new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
                
                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));

                $this->btnDelete = new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->Display = FALSE;
                $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
                
                //datagrid
                $this->dtgDocCategory = new QDataGrid($this);
                $this->dtgDocCategory->CssClass = "datagrid";

                $this->dtgDocCategory->ShowFilter = TRUE;

                $this->dtgDocCategory->Paginator = new QPaginator($this->dtgDocCategory);
                $this->dtgDocCategory->ItemsPerPage = 10;
                $this->dtgDocCategory->SetDataBinder('dtgDocCategory_Bind');

                $this->dtgDocCategory->RowActionParameterHtml='<?= $_ITEM->IddocCategory ?>';
                $this->dtgDocCategory->AddRowAction(new QClickEvent(), new QServerAction('dtgDocCategoryRow_Click'));

                $this->dtgDocCategory->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=10'));
                $this->dtgDocCategory->AddColumn(new QDataGridColumn('Name ',  '<?= $_ITEM->Name ?>', 'Width=150'));
                
                //extra controls
                $this->currentId = 0;
                $this->editMode = FALSE;
            }
            
            protected function btnSave_click() {
                if($this->editMode == FALSE){
                    $objDocCategory = new DocCategory();
                    $objDocCategory->Name = $this->txtName->Text;
                    $objDocCategory->Save();
                }
                elseif ($this->editMode == TRUE && $this->currentId != 0) {
                    $objDocCategory = DocCategory::LoadByIddocCategory($this->currentId);
                    $objDocCategory->Name = $this->txtName->Text;
                    $objDocCategory->Save();
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
                        $objDocCategory = DocCategory::LoadByIddocCategory($this->currentId);
                        $objDocCategory->Delete();
                        $this->txtName->Text = "";
                }
                else{
                    QApplication::DisplayAlert("No Such Doc Category Exists");
                }
                $this->btnDelete->Display = FALSE;
                $this->pageClearAll();
            }
            
            protected function dtgDocCategory_Bind(){
                $this->dtgDocCategory->TotalItemCount = DocCategory::QueryCount(
                        QQ::AndCondition(                                    
                                $this->dtgDocCategory->Conditions
                                ));
                $data = DocCategory::QueryArray(
                            QQ::AndCondition(
                                $this->dtgDocCategory->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::DocCategory()->IddocCategory, TRUE),
                        $this->dtgDocCategory->LimitClause
                ));

                $this->dtgDocCategory->DataSource = $data;
            }
            protected function dtgDocCategoryRow_Click($strFormId,$strControlId,$strParameter) {
                $this->btnDelete->Display = TRUE;
                $this->editMode = TRUE;

                if(isset($strParameter)){
                   $objDocCategory = DocCategory::LoadByIddocCategory($strParameter);
                   if($objDocCategory) {
                       $this->txtName->Text = $objDocCategory->Name;
                       $this->currentId = $objDocCategory->IddocCategory;
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

	DocCategoryEditForm::Run('DocCategoryEditForm');
?>