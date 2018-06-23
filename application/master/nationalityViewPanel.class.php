<?php
	class NationalityViewPanel extends QPanel {
            public $dtgNationality;

            // The Local Project object which this panel represents
            protected $objNationality;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'nationalityViewPanel.tpl.php';

            public function __construct($objParentObject, $objNationality, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objNationality= $objNationality;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgNationality= new QDataGrid($this);
                    $this->dtgNationality->CssClass = "datagrid";
                    $this->dtgNationality->ShowFilter = TRUE;
                    $this->dtgNationality->Paginator = new QPaginator($this->dtgNationality);
                    $this->dtgNationality->ItemsPerPage = 8;

                    $this->dtgNationality->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Nationality()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Nationality()->Name, false)));
                    
                    $Name->Filter = QQ::Like(QQN::Nationality()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgNationality->AddColumn($Name);
                    
                    // Let's make sorting Ajax-ified
                    $this->dtgNationality->UseAjax = true;

                    $this->dtgNationality->SetDataBinder('dtgNationality_Bind', $this);
			
	    }
            public function dtgNationality_Bind() {
                $Nationality = Nationality::QueryArray(
                        QQ::AndCondition(
                               $this->dtgNationality->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgNationality->OrderByClause,
                                $this->dtgNationality->LimitClause
                        ));
                $this->dtgNationality->DataSource = $Nationality;

                $Count =  Nationality::QueryCount(
                    QQ::AndCondition(
                           $this->dtgNationality->Conditions
                            ), QQ::OrderBy(QQN::Nationality()->Name)
                    );
                $this->dtgNationality->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
            public function EditColumn_Render(Nationality $objNationality) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditNationality' . $this->dtgNationality->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgNationality, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditNationality_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objNationality->Idnationality;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

                // Event Handlers Here
            public function btnEditNationality_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                $objNationToEdit = Nationality::LoadByIdnationality($strParameter);
                new NationalityEditPanel($pnlRight, $objNationToEdit, 'CloseRightPanel');
            }
	}
                 
           
?>