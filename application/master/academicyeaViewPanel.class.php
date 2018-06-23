<?php
	class AcademicYearViewPanel extends QPanel {
            // Child Controls must be Publically Accessible so that they can be rendered in the template
            // Typically, you would want to do this by having public __getters for each control
            // But for simplicity of this demo, we'll simply make the child controls public, themselves.
            public $dtgAcademicYear;

            // The Local Project object which this panel represents
            protected $objAcademicYear;

            // The Reference to the Main Form's "Right Panel" so that this panel
            // can make changes to the right panel on the page
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;

            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'academicyeaViewPanel.tpl.php';

            // We Create a new __constructor that takes in the Project we are "viewing"
            // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality
        
            public function __construct($objParentObject, $objAcademicYear, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objAcademicYear = $objAcademicYear;
                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgAcademicYear = new QDataGrid($this);
                    $this->dtgAcademicYear->CssClass = "datagrid";
                    $this->dtgAcademicYear->ShowFilter = TRUE;
                    $this->dtgAcademicYear->Paginator = new QPaginator($this->dtgAcademicYear);
                    $this->dtgAcademicYear->ItemsPerPage = 8;
                    $this->dtgAcademicYear->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Academic Year', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::AcademicYear()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::AcademicYear()->Name, false)));
                    
                    
                    $Name->Filter = QQ::Like(QQN::AcademicYear()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgAcademicYear->AddColumn($Name);

           
                    $this->dtgAcademicYear->UseAjax = true;
                    $this->dtgAcademicYear->SetDataBinder('dtgAcademicYear_Bind', $this);
        }
                   public function dtgAcademicYear_Bind() {
                      $academic = AcademicYear::QueryArray(
                    QQ::AndCondition(
                               $this->dtgAcademicYear->Conditions
                           ),
                    
                    QQ::Clause(
                            $this->dtgAcademicYear->OrderByClause,
                            $this->dtgAcademicYear->LimitClause
                    ));
                    $this->dtgAcademicYear->DataSource = $academic;
            
                     $Count = AcademicYear::QueryCount(
                        QQ::AndCondition(
                        $this->dtgAcademicYear->Conditions
                               //  QQ::OrderBy(QQN::AcademicYear()->Name)
                       
               ) );
            $this->dtgAcademicYear->TotalItemCount = $Count;
        }
        
                // DataGrid Render Handlers Below
                public function EditColumn_Render(AcademicYear $objAcademicYear) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditobjAcademicYear' . $this->dtgAcademicYear->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgAcademicYear, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditAcademicYear_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objAcademicYear->IdacademicYear;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditAcademicYear_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                    // Now create a new PersonEditPanel, setting pnlRight as its parent
                    // and specifying parent form's "CloseRightPanel" as the method callback
                    // See the note in _constructor, above, for more information
                    $objEditAcademicYearToEdit = AcademicYear::LoadByIdacademicYear($strParameter);
                    new AcademicYearEditPanel($pnlRight, $objEditAcademicYearToEdit, 'CloseRightPanel');
                }
	}
?>