<?php
	class HandicapedViewPanel extends QPanel {
            public $dtgHandicaped;

            // The Local Project object which this panel represents
            protected $objHandicaped;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'handicapedViewPanel.tpl.php';

            public function __construct($objParentObject, $objHandicaped, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objHandicaped = $objHandicaped;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgHandicaped= new QDataGrid($this);
                    $this->dtgHandicaped->CssClass = "datagrid";
                    $this->dtgHandicaped->ShowFilter = TRUE;
                    $this->dtgHandicaped->Paginator = new QPaginator($this->dtgHandicaped);
                    $this->dtgHandicaped->ItemsPerPage = 8;

                    $this->dtgHandicaped->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::HandicapedCat()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::HandicapedCat()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::HandicapedCat()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgHandicaped->AddColumn($Name);

                    // Let's make sorting Ajax-ified
                    $this->dtgHandicaped->UseAjax = true;

                    $this->dtgHandicaped->SetDataBinder('dtgHandicaped_Bind', $this);
			
		}
                public function dtgHandicaped_Bind() {
                    $Handicapeds =HandicapedCat::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgHandicaped->Conditions
                                    ),
                            QQ::Clause(
                                    $this->dtgHandicaped->OrderByClause,
                                    $this->dtgHandicaped->LimitClause
                            ));
                    $this->dtgHandicaped->DataSource = $Handicapeds;

                    $Count = HandicapedCat::QueryCount(
                        QQ::AndCondition(
                               $this->dtgHandicaped->Conditions
                                ), QQ::OrderBy(QQN::HandicapedCat()->Name)
                        );
                    $this->dtgHandicaped->TotalItemCount = $Count;
                }

                // DataGrid Render Handlers Below
                public function EditColumn_Render(HandicapedCat $objHandicaped) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditExam' . $this->dtgHandicaped->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgHandicaped, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditHandicaped_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objHandicaped->IdhandicapedCat;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditHandicaped_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                  
                    $objExamToEdit = HandicapedCat::LoadByIdHandicapedCat($strParameter);
                    new HandicapedEditPanel($pnlRight, $objExamToEdit, 'CloseRightPanel');
                }
	}
?>