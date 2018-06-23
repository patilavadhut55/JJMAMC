<?php
    class CourseViewPanel extends QPanel {
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
        protected $strTemplate = 'courseViewPanel.tpl.php';

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
            
            /* Let's record the reference to the form's RightPanel
             * Note: this ProjectViewPanel needs the reference to the main form's RightPanel so that it can
             * "update" the RightPanel's contents during the ProjectViewPanel's event handlers (e.g., when the user
             * click's "Edit" on a Person, this ProjectViewPanel's btnEdit_Click handler will update RightPanel
             * to display the PersonEditPanel panel.
             *
             * HOWEVER, realize that this interaction can be done many different ways.
             * A very suitable alternative would be for this __construct to take in a public method name from the Form instead
             * of $strPanelRightControlId.  And btnEdit_Click, instead of updating the right panel directly, could simply
             * make a call to the Form's method, and the interaction could be defined on the Form itself.
             *
             * This design decision depends on how tightly coupled the custom panels are together, or if each panel
             * is to be more independent and you want the Form to define the interaction only.  So it would depend on how
             * the developer would want to do it.
             *
             * We show an example of accessing the RightPanel direclty in ProjectViewPanel, and we show examples
             * of MethodCallbacks on the Form in ProjectEditPanel and PersonEditPanel.
             */
            $this->strPanelLeftControlId = $objParentObject;
            $this->strPanelRightControlId = $strPanelRightControlId;

            // Now, let's set up this custom panel's child controls
            // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
            // This is because the render handler is defined in this ProjectViewPanel, which ends up
            // being the datagrid's ("$_CONTROL") parent control object.
            $this->dtgRoles = new QDataGrid($this);
            $this->dtgRoles->CssClass = "datagrid";
            
            $this->dtgRoles->Paginator = new QPaginator($this->dtgRoles);
            $this->dtgRoles->ItemsPerPage = 8;
            
            $this->dtgRoles->AddColumn(new QDataGridColumn('<i class="fa fa-pencil fa-lg"></i>', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
            $this->dtgRoles->AddColumn(new QDataGridColumn('Faculty Name', '<?= $_ITEM->Name ?>', 
                    array('OrderByClause' => QQ::OrderBy(QQN::Role()->Name), 
                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Role()->Name, false))));
            
            // Let's make sorting Ajax-ified
            $this->dtgRoles->UseAjax = true;

            // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
            // a datasource to the DataGrid
            $this->dtgRoles->SetDataBinder('dtgRoles_Bind', $this);
        }
        
        // This is the method that will perform the actual databinding on the dtgMembers datagrid
        // Note that because it is called by the QForm, this needs to be public
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
            new courseEditPanel($pnlRight, $objRoleToEdit, 'CloseRightPanel');
        }
        
    }
?>