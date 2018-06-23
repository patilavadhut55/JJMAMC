<?php
	class MarrialStatusViewPanel extends QPanel {
            public $dtgMarrialStatus;

            // The Local Project object which this panel represents
            protected $objMarrialStatus;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'marrialstatusViewPanel.tpl.php';

            public function __construct($objParentObject, $objMarrialStatus, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objMarrialStatus= $objMarrialStatus;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgMarrialStatus= new QDataGrid($this);
                    $this->dtgMarrialStatus->CssClass = "datagrid";
                    $this->dtgMarrialStatus->ShowFilter = TRUE;
                    $this->dtgMarrialStatus->Paginator = new QPaginator($this->dtgMarrialStatus);
                    $this->dtgMarrialStatus->ItemsPerPage = 8;

                    $this->dtgMarrialStatus->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::MarrialStatus()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::MarrialStatus()->Name, false)));
                    
                    $Name->Filter = QQ::Like(QQN::MarrialStatus()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgMarrialStatus->AddColumn($Name);
                    
                    // Let's make sorting Ajax-ified
                    $this->dtgMarrialStatus->UseAjax = true;

                    $this->dtgMarrialStatus->SetDataBinder('dtgMarrialStatus_Bind', $this);
			
	    }
            public function dtgMarrialStatus_Bind() {
                $MarrialStatus = MarrialStatus::QueryArray(
                        QQ::AndCondition(
                               $this->dtgMarrialStatus->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgMarrialStatus->OrderByClause,
                                $this->dtgMarrialStatus->LimitClause
                        ));
                $this->dtgMarrialStatus->DataSource = $MarrialStatus;

                $Count =  MarrialStatus::QueryCount(
                    QQ::AndCondition(
                           $this->dtgMarrialStatus->Conditions
                            ), QQ::OrderBy(QQN::MarrialStatus()->Name)
                    );
                $this->dtgMarrialStatus->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
            public function EditColumn_Render(MarrialStatus $objMarrialStatus) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditNationality' . $this->dtgMarrialStatus->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgMarrialStatus, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditMarrialStatus_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objMarrialStatus->IdmarrialStatus;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

                // Event Handlers Here
            public function btnEditMarrialStatus_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                $objMarrialToEdit = MarrialStatus::LoadByIdmarrialStatus($strParameter);
                new MarrialStatusEditPanel($pnlRight, $objMarrialToEdit, 'CloseRightPanel');
            }
	}
                 
           
?>