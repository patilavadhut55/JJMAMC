<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/CastEditFormBase.class.php');

	class CastEditForm extends CastEditFormBase {
		// Override Form Event Handlers as Needed
                protected $dtgCast;
                protected $btnList;
                protected $btnNew;
                protected $lstParent;
                protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();                    
                    $this->lstParent = new QSelect2ListBox($this);                    
                    $this->lstParent->Name = "Category"; 
                    $this->lstParent->AddItem("-Select-",NULL);
                    $cats = Cast::LoadAll();
                    foreach ($cats as $cat){
                        $this->lstParent->AddItem($cat->Name,$cat->Idcast);    
                    }
                    
                    $this->btnNew = new QButton($this);
                    $this->btnNew->HtmlEntities = FALSE;
                    $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                    $this->btnNew->ButtonMode = QButtonMode::AddNew;
                    $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));
                    
                    $this->btnList = new QButton($this);
                    $this->btnList->ButtonMode = QButtonMode::listall;
                    $this->btnList->AddAction(new QClickEvent(), new QAjaxAction("btnList_Click"));
                    
                    
                    $this->dtgCast = new QDataGrid($this);
                    $this->dtgCast->CssClass = "datagrid";
                    
                    $this->dtgCast->ShowFilter = TRUE;

                    $this->dtgCast->Paginator = new QPaginator($this->dtgCast);
                    $this->dtgCast->ItemsPerPage = 150;

                    $this->dtgCast->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));

                    $Name = new QDataGridColumn('Caste', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Cast()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Cast()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Cast()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgCast->AddColumn($Name);

                    $this->dtgCast->AddColumn(new QDataGridColumn('Category', '<?= $_ITEM->ParentObject ?>', 'Width=300'));
                    $this->dtgCast->AddColumn(new QDataGridColumn('Resolution No.','<?= $_ITEM->Print ?>', 'Width=300'));
                    $this->dtgCast->SetDataBinder('dtgCast_Bind');

                    $this->dtgCast->RowActionParameterHtml = '<?= $_ITEM->Idcast ?>';
                    $this->dtgCast->AddRowAction(new QClickEvent(), new QServerAction('dtgledgerRow_Click'));
                    
                    
                    // Create Buttons and Actions on this Form
                    $this->btnSave = new QButton($this);
                    $this->btnSave->Text = QApplication::Translate('Save');
                    $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
                    $this->btnSave->CausesValidation = true;

                    $this->btnCancel = new QButton($this);
                    $this->btnCancel->Text = QApplication::Translate('Cancel');
                    $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

                    $this->btnDelete = new QButton($this);
                    $this->btnDelete->Text = QApplication::Translate('Delete');
                    $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Cast'))));
                    $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
                    $this->btnDelete->Visible = $this->mctCast->EditMode;
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                }
                
                protected function dtgCast_Bind(){
                    $this->dtgCast->TotalItemCount = Cast::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgCast->Conditions
                                    ));

                    $data = Cast::QueryArray(
                                QQ::AndCondition(
                                        $this->dtgCast->Conditions
                                    ),
                    QQ::Clause(
                            $this->dtgCast->OrderByClause,
                            $this->dtgCast->LimitClause
                    ));
                    $this->dtgCast->DataSource = $data;
                }

                public function dtgledgerRow_Click($strFormId, $strControlId, $strParameter) {           
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/cast_edit.php/'.$strParameter);
                }
                
                public function btnList_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/cast_edit.php');
                }
                
                protected function btnNew_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/cast_edit.php?new=1');
		}
                
                // Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CastMetaControl
                        $this->lstParentObject->SelectedValue = $this->lstParent->SelectedValue;
			$this->mctCast->SaveCast();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CastMetaControl
			$this->mctCast->DeleteCast();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/cast_edit.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// cast_edit.tpl.php as the included HTML template file
	CastEditForm::Run('CastEditForm');
?>