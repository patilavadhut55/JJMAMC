<?php
	class FeeConcessionViewPanel extends QPanel {
            // Child Controls must be Publically Accessible so that they can be rendered in the template
            // Typically, you would want to do this by having public __getters for each control
            // But for simplicity of this demo, we'll simply make the child controls public, themselves.
            public $dtgFeeConcession;

            // The Local Project object which this panel represents
            protected $objFee;

            // The Reference to the Main Form's "Right Panel" so that this panel
            // can make changes to the right panel on the page
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;

            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'FeeConcessionViewPanel.tpl.php';

            // We Create a new __constructor that takes in the Project we are "viewing"
            // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality
        
            public function __construct($objParentObject, $objFee, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objFee = $objFee;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    // Now, let's set up this custom panel's child controls
                    // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
                    // This is because the render handler is defined in this ProjectViewPanel, which ends up
                    // being the datagrid's ("$_CONTROL") parent control object.
                    $this->dtgFeeConcession = new QDataGrid($this);
                    $this->dtgFeeConcession->CssClass = "datagrid";
                    $this->dtgFeeConcession->ShowFilter = TRUE;
                    $this->dtgFeeConcession->Paginator = new QPaginator($this->dtgFeeConcession);
                    $this->dtgFeeConcession->ItemsPerPage = 8;

                    $this->dtgFeeConcession->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                  
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::FeesConcession()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::FeesConcession()->Name, false)));
                    
                    $Name->Filter = QQ::Like(QQN::FeesConcession()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgFeeConcession->AddColumn($Name);

                    $this->dtgFeeConcession->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                    // Let's make sorting Ajax-ified
                    $this->dtgFeeConcession->UseAjax = true;

                    // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
                    // a datasource to the DataGrid
                    $this->dtgFeeConcession->SetDataBinder('dtgFeeConcession_Bind', $this);
			
		}
                public function dtgFeeConcession_Bind() {
                    $Fees = FeesConcession::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgFeeConcession->Conditions
                                    ),
                            QQ::Clause(
                                    $this->dtgFeeConcession->OrderByClause,
                                    $this->dtgFeeConcession->LimitClause
                            ));
                    $this->dtgFeeConcession->DataSource = $Fees;

                    $Count = FeesConcession::QueryCount(
                            QQ::AndCondition(
                                $this->dtgFeeConcession->Conditions
                                ), QQ::OrderBy(QQN::FeesConcession()->Name)
                        );
                    $this->dtgFeeConcession->TotalItemCount = $Count;
                }

                // DataGrid Render Handlers Below
                public function EditColumn_Render(FeesConcession $objFee) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditExam' . $this->dtgFeeConcession->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgFeeConcession, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditExam_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objFee->IdfeesConcession;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditExam_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                    // Now create a new PersonEditPanel, setting pnlRight as its parent
                    // and specifying parent form's "CloseRightPanel" as the method callback
                    // See the note in _constructor, above, for more information
                    $objFeeToEdit = FeesConcession::LoadByIdfeesConcession($strParameter);
                    new FeeConcessionEditPanel($pnlRight, $objFeeToEdit, 'CloseRightPanel');
                }
	}
?>