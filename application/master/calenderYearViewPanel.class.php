<?php
	
	class CalenderYearViewPanel extends QPanel {
            // Child Controls must be Publically Accessible so that they can be rendered in the template
                // Typically, you would want to do this by having public __getters for each control
                // But for simplicity of this demo, we'll simply make the child controls public, themselves.
                public $dtgCalender;

                // The Local Project object which this panel represents
                protected $objCalender;

                // The Reference to the Main Form's "Right Panel" so that this panel
                // can make changes to the right panel on the page
                protected $strPanelLeftControlId;
                protected $strPanelRightControlId;

                // Specify the Template File for this custom QPanel
                protected $strTemplate = 'calenderYearViewPanel.tpl.php';

                // We Create a new __constructor that takes in the Project we are "viewing"
                // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality

            public function __construct($objParentObject, $objCalender, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                        $this->objCalender = $objCalender;

                    
                        $this->strPanelLeftControlId = $objParentObject;
                        $this->strPanelRightControlId = $strPanelRightControlId;

                        // Now, let's set up this custom panel's child controls
                        // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
                        // This is because the render handler is defined in this ProjectViewPanel, which ends up
                        // being the datagrid's ("$_CONTROL") parent control object.
                        $this->dtgCalender = new QDataGrid($this);
                        $this->dtgCalender->CssClass = "datagrid";

                        $this->dtgCalender->Paginator = new QPaginator($this->dtgCalender);
                        $this->dtgCalender->ItemsPerPage = 8;
                        $this->dtgCalender->ShowFilter = TRUE;
                        $this->dtgCalender->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>',
                                                    array(
                                                            'OrderByClause' => QQ::OrderBy(QQN::CalenderYear()->Name),
                                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::CalenderYear()->Name, false)));
                        $this->dtgCalender->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                        
                        $Name->Filter = QQ::Like(QQN::CalenderYear()->Name, null);
                        $Name->FilterPostfix  = '%';
                        $Name->FilterType = QFilterType::TextFilter;
                        $this->dtgCalender->AddColumn($Name);
                        $this->dtgCalender->AddColumn(new QDataGridColumn('Sequence','<?= $_ITEM->Sequence ?>'));

                        // Let's make sorting Ajax-ified
                        $this->dtgCalender->UseAjax = true;

                        // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
                        // a datasource to the DataGrid
                        $this->dtgCalender->SetDataBinder('dtgCalender_Bind', $this);

            
            }

            public function dtgCalender_Bind() {
                $Calenders = CalenderYear::QueryArray(
                        QQ::AndCondition(
                               $this->dtgCalender->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgCalender->OrderByClause,
                                $this->dtgCalender->LimitClause
                        ));
                $this->dtgCalender->DataSource = $Calenders;

                $Count = CalenderYear::QueryCount(
                    QQ::AndCondition(
                           $this->dtgCalender->Conditions
                            ), QQ::OrderBy(QQN::CalenderYear()->Name)
                    );
                $this->dtgCalender->TotalItemCount = $Count;
             }

                    // DataGrid Render Handlers Below
            public function EditColumn_Render(CalenderYear $objCalender) {
                // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditCalender' . $this->dtgCalender->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgCalender, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    // Define an Event Handler on the Button
                    // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditCalender_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objCalender->IdcalenderYear;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

            // Event Handlers Here
            public function btnEditCalender_Click($strFormId, $strControlId, $strParameter) {
                // Get pnlRight from the Parent Form
                $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";

                // Now create a new PersonEditPanel, setting pnlRight as its parent
                // and specifying parent form's "CloseRightPanel" as the method callback
                // See the note in _constructor, above, for more information
                $objCalenderToEdit = CalenderYear::LoadByIdcalenderYear($strParameter);
                new CalenderYearEditPanel($pnlRight, $objCalenderToEdit, 'CloseRightPanel');
            }
	}
?>