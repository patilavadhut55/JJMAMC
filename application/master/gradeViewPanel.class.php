<?php
	class GradeViewPanel extends QPanel {
            public $dtgGrade;

            // The Local Project object which this panel represents
            protected $objGrade;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'gradeViewPanel.tpl.php';

            public function __construct($objParentObject, $objGrade, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objGrade = $objGrade;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgGrade= new QDataGrid($this);
                    $this->dtgGrade->CssClass = "datagrid";
                    $this->dtgGrade->ShowFilter = TRUE;
                    $this->dtgGrade->Paginator = new QPaginator($this->dtgGrade);
                    $this->dtgGrade->ItemsPerPage = 8;

                    $this->dtgGrade->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Grade()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Grade()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Grade()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgGrade->AddColumn($Name);
                    $this->dtgGrade->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Desc?>'));
                    // Let's make sorting Ajax-ified
                    // Let's make sorting Ajax-ified
                    $this->dtgGrade->UseAjax = true;

                    $this->dtgGrade->SetDataBinder('dtgGrade_Bind', $this);
			
		}
                public function dtgGrade_Bind() {
                    $Grades = Grade::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgGrade->Conditions
                                    ),
                            QQ::Clause(
                                    $this->dtgGrade->OrderByClause,
                                    $this->dtgGrade->LimitClause
                            ));
                    $this->dtgGrade->DataSource = $Grades;

                    $Count = Grade::QueryCount(
                        QQ::AndCondition(
                               $this->dtgGrade->Conditions
                                ), QQ::OrderBy(QQN::Grade()->Name)
                        );
                    $this->dtgGrade->TotalItemCount = $Count;
                }

                // DataGrid Render Handlers Below
                public function EditColumn_Render(Grade $objGrade) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditSalary' . $this->dtgGrade->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgGrade, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditGrade_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objGrade->Idgrade;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditGrade_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                  
                    $objGradeToEdit = Grade::LoadByIdgrade($strParameter);
                    new GradeEditPanel($pnlRight, $objGradeToEdit, 'CloseRightPanel');
                }
	}
?>