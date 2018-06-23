<?php
	class SalaryViewPanel extends QPanel {
            public $dtgSalary;

            // The Local Project object which this panel represents
            protected $objSalary;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'salaryViewPanel.tpl.php';

            public function __construct($objParentObject, $objSalary, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objSalary = $objSalary;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgSalary= new QDataGrid($this);
                    $this->dtgSalary->CssClass = "datagrid";
                    $this->dtgSalary->ShowFilter = TRUE;
                    $this->dtgSalary->Paginator = new QPaginator($this->dtgSalary);
                    $this->dtgSalary->ItemsPerPage = 8;

                    $this->dtgSalary->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::SalaryCat()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::SalaryCat()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::SalaryCat()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgSalary->AddColumn($Name);

                    // Let's make sorting Ajax-ified
                    $this->dtgSalary->UseAjax = true;

                    $this->dtgSalary->SetDataBinder('dtgSalaryCat_Bind', $this);
			
		}
                public function dtgSalaryCat_Bind() {
                    $SalaryCats =  SalaryCat::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgSalary->Conditions
                                    ),
                            QQ::Clause(
                                    $this->dtgSalary->OrderByClause,
                                    $this->dtgSalary->LimitClause
                            ));
                    $this->dtgSalary->DataSource = $SalaryCats;

                    $Count = SalaryCat::QueryCount(
                        QQ::AndCondition(
                               $this->dtgSalary->Conditions
                                ), QQ::OrderBy(QQN::SalaryCat()->Name)
                        );
                    $this->dtgSalary->TotalItemCount = $Count;
                }

                // DataGrid Render Handlers Below
                public function EditColumn_Render(SalaryCat $objSalary) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditSalary' . $this->dtgSalary->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgSalary, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditSalaryCat_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objSalary->IdsalaryCat;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditSalaryCat_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                  
                    $objExamToEdit = SalaryCat::LoadByIdsalaryCat($strParameter);
                    new SalaryEditPanel($pnlRight, $objExamToEdit, 'CloseRightPanel');
                }
	}
?>