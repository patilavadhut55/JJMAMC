<?php
	class ReligionViewPanel extends QPanel {
            public $dtgReligion;

            // The Local Project object which this panel represents
            protected $objReligion;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'religionViewPanel.tpl.php';

            public function __construct($objParentObject, $objReligion, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objReligion = $objReligion;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgReligion= new QDataGrid($this);
                    $this->dtgReligion->CssClass = "datagrid";
                    $this->dtgReligion->ShowFilter = TRUE;
                    $this->dtgReligion->Paginator = new QPaginator($this->dtgReligion);
                    $this->dtgReligion->ItemsPerPage = 8;

                    $this->dtgReligion->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Religion()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Religion()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Religion()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgReligion->AddColumn($Name);

                    // Let's make sorting Ajax-ified
                    $this->dtgReligion->UseAjax = true;

                    $this->dtgReligion->SetDataBinder('dtgReligionCat_Bind', $this);
			
		}
                public function dtgReligionCat_Bind() {
                    $Religions = Religion::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgReligion->Conditions
                                    ),
                            QQ::Clause(
                                    $this->dtgReligion->OrderByClause,
                                    $this->dtgReligion->LimitClause
                            ));
                    $this->dtgReligion->DataSource = $Religions;

                    $Count = Religion::QueryCount(
                        QQ::AndCondition(
                               $this->dtgReligion->Conditions
                                ), QQ::OrderBy(QQN::Religion()->Name)
                        );
                    $this->dtgReligion->TotalItemCount = $Count;
                }

                // DataGrid Render Handlers Below
                public function EditColumn_Render(Religion $objReligion) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditSalary' . $this->dtgReligion->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgReligion, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditReligion_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objReligion->Idreligion;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditReligion_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                  
                    $objReligionToEdit = Religion::LoadByIdreligion($strParameter);
                    new ReligionEditPanel($pnlRight, $objReligionToEdit, 'CloseRightPanel');
                
                }
	}
?>