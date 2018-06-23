<?php
    class AcademictempviewPanel extends QPanel {
        // Child Controls must be Publically Accessible so that they can be rendered in the template
        // Typically, you would want to do this by having public __getters for each control
        // But for simplicity of this demo, we'll simply make the child controls public, themselves.
     
        // Child Controls must be Publically Accessible so that they can be rendered in the template
        // Typically, you would want to do this by having public __getters for each control
        // But for simplicity of this demo, we'll simply make the child controls public, themselves.
        public $dtgRoles;
        
        // The Local Project object which this panel represents
        protected $objRole;

        // The Reference to the Main Form's "Right Panel" so that this panel
        // can make changes to the right panel on the page
        protected $strPanelLeftControlId;
        protected $strPanelRightControlId;
        
        // Specify the Template File for this custom QPanel
        protected $strTemplate = 'academictempviewPanel.tpl.php';

        // We Create a new __constructor that takes in the Project we are "viewing"
        // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality
        public function __construct($objParentObject, $objRole, $strPanelRightControlId, $strControlId = null) {
            // First, let's call the Parent's __constructor
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            
            // Next, we set the local project object
            $this->objRole = $objRole;
            
         
            $this->strPanelLeftControlId = $objParentObject;
            $this->strPanelRightControlId = $strPanelRightControlId;

          
            $this->dtgRoles = new QDataGrid($this);
            $this->dtgRoles->CssClass = "datagrid";
            
            $this->dtgRoles->Paginator = new QPaginator($this->dtgRoles);
            $this->dtgRoles->ItemsPerPage = 8;
            $this->dtgRoles->ShowFilter = TRUE;
            $this->dtgRoles->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Role()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Role()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Role()->Name, null);
            $Name->FilterPostfix  = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgRoles->AddColumn($Name);
            
            
            // Let's make sorting Ajax-ified
            $this->dtgRoles->UseAjax = true;

            // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
            // a datasource to the DataGrid
            $this->dtgRoles->SetDataBinder('dtgRoles_Bind', $this);
        }
        
        public function dtgRoles_Bind() {
            $Courses = Role::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Parrent, $this->objRole->Idrole),
                            QQ::Equal(QQN::Role()->Grp, 5)
                            ),
                    QQ::Clause(
                            $this->dtgRoles->OrderByClause,
                            $this->dtgRoles->LimitClause
                    ));
            $this->dtgRoles->DataSource = $Courses;
            
            $Count = Role::QueryCount(
                QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $this->objRole->Idrole),
                        QQ::Equal(QQN::Role()->Grp, 5)
                        ), QQ::OrderBy(QQN::Role()->Name)
                );
            $this->dtgRoles->TotalItemCount = $Count;
        }
        
        // DataGrid Render Handlers Below
        public function EditColumn_Render(Role $objRole) {
            // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
            $strControlId = 'btnEditRole' . $this->dtgRoles->CurrentRowIndex;

            $btnEdit = $this->objForm->GetControl($strControlId);
            if (!$btnEdit) {
                // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                $btnEdit = new QLabel($this->dtgRoles, $strControlId);
                $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                $btnEdit->HtmlEntities = FALSE;

                // Define an Event Handler on the Button
                // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditRole_Click'));
            }

            // Finally, update the Actionparameter for our button to store the $objPerson's ID.
            $btnEdit->ActionParameter = $objRole->Idrole;

            // Return the Rendered Button Control
            return $btnEdit->Render(false);
        }

        // Event Handlers Here
        public function btnEditRole_Click($strFormId, $strControlId, $strParameter) {
            // Get pnlRight from the Parent Form
            $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

            // First, remove all children panels from pnlRight
            $pnlRight->RemoveChildControls(true);
            
            $pnlRight->CssClass = "col-md-8 animated fadeInRight";
            $this->strPanelLeftControlId->CssClass = "smooth col-md-4";
            // Now create a new PersonEditPanel, setting pnlRight as its parent
            // and specifying parent form's "CloseRightPanel" as the method callback
            // See the note in _constructor, above, for more information
            $objRoleToEdit = Role::LoadByIdrole($strParameter);
            new AcademictempEditPanel($pnlRight, $objRoleToEdit, 'CloseRightPanel');
        }
        
        
    }
?>