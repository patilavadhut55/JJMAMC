<?php
	class BloodgrpViewPanel extends QPanel {
            public $dtgBlood;

            // The Local Project object which this panel represents
            protected $objBlood;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'bloodgrpViewPanel.tpl.php';

            public function __construct($objParentObject, $objBlood, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objBlood= $objBlood;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgBlood= new QDataGrid($this);
                    $this->dtgBlood->CssClass = "datagrid";
                    $this->dtgBlood->ShowFilter = TRUE;
                    $this->dtgBlood->Paginator = new QPaginator($this->dtgBlood);
                    $this->dtgBlood->ItemsPerPage = 8;

                    $this->dtgBlood->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::BloodGroup()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::BloodGroup()->Name, false)));
                    
                    $Name->Filter = QQ::Like(QQN::BloodGroup()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgBlood->AddColumn($Name);
                    $this->dtgBlood->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                    // Let's make sorting Ajax-ified
                    $this->dtgBlood->UseAjax = true;

                    $this->dtgBlood->SetDataBinder('dtgBlood_Bind', $this);
			
		}
            public function dtgBlood_Bind() {
                $Bloods = BloodGroup::QueryArray(
                        QQ::AndCondition(
                               $this->dtgBlood->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgBlood->OrderByClause,
                                $this->dtgBlood->LimitClause
                        ));
                $this->dtgBlood->DataSource = $Bloods;

                $Count = BloodGroup::QueryCount(
                    QQ::AndCondition(
                           $this->dtgBlood->Conditions
                            ), QQ::OrderBy(QQN::BloodGroup()->Name)
                    );
                $this->dtgBlood->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
            public function EditColumn_Render(BloodGroup $objBlood) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditBlood' . $this->dtgBlood->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgBlood, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditBlood_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objBlood->IdbloodGroup;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

                // Event Handlers Here
            public function btnEditBlood_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                $objBloodToEdit = BloodGroup::LoadByIdbloodGroup($strParameter);
                new BloodgrpEditPanel($pnlRight, $objBloodToEdit, 'CloseRightPanel');
            }
	}
                 
           
?>