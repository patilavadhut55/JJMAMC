<?php
    require_once('../../qcubed.inc.php');

    require('./courseEditPanel.class.php');
    require('./courseViewPanel.class.php');
    
    // Define the Qform with all our Qcontrols
    class ExamplesForm extends QForm {
        // Local declarations of our Qcontrols
        protected $lstRoles;
        protected $pnlLeft;
        protected $pnlRight;

        // Initialize our Controls during the Form Creation process
        protected function Form_Create() {
            // Setup the Dropdown of Project Names
            $this->lstRoles = new QListBox($this);
            $this->lstRoles->AddItem('Please Select Faculty to proceed', null, true);
                    
            $Roles = Role::LoadArrayByGrp(4, (QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
            
            foreach ($Roles as $Role)
                $this->lstRoles->AddItem($Role->Name, $Role->Idrole);

            $this->lstRoles->AddAction(new QChangeEvent(), new QAjaxAction('lstRoles_Change'));

            // Setup our Left and Right Panel Placeholders
            // Notice that both panels have "AutoRenderChildren" set to true so that
            // instantiated child panels will automatically get displayed
            $this->pnlLeft = new QPanel($this);
            $this->pnlLeft->Position = QPosition::Relative;
            $this->pnlLeft->CssClass = 'smooth col-md-12';
            $this->pnlLeft->AutoRenderChildren = true;

            $this->pnlRight = new QPanel($this);
            $this->pnlRight->Position = QPosition::Relative;
            $this->pnlRight->CssClass = 'col-md-6';
            $this->pnlRight->AutoRenderChildren = true;
            
            $this->objDefaultWaitIcon = new QWaitIcon($this);
        }

        // The "btnButton_Click" Event handler
        protected function lstRoles_Change($strFormId, $strControlId, $strParameter) {
            // First, remove all children panels from both pnlLeft and pnlRight
            $this->pnlLeft->RemoveChildControls(true);
            $this->pnlLeft->CssClass = 'col-md-12 smooth';
            
            $this->pnlRight->RemoveChildControls(true);
            
            // Now, we create a new ProjectViewPanel, and set its parent to pnlLeft
            if ($intRoleId = $this->lstRoles->SelectedValue)
                $pnlRoleView = new CourseViewPanel($this->pnlLeft, Role::LoadByIdrole($intRoleId), $this->pnlRight->ControlId);
        }

        // Method Call back for any of the RightPanel panels (see note in ProjectViewPanel for more information)
        public function CloseRightPanel($blnUpdatesMade) {
            // First, remove all children panels from both pnlRight
            $this->pnlRight->RemoveChildControls(true);
            $this->pnlLeft->CssClass = 'col-md-12 smooth';
            // If Updates were Made, then Re-Draw Left Panel to reflect the changes
            // Note that this is a "brute force" method to update the entire left panel
            // Of course, if you want, you can more finely tune this update process by only updating specific
            // controls, etc., depending on what was updated/changed.
            if ($blnUpdatesMade) {
                $this->pnlLeft->RemoveChildControls(true);
                if ($intRoleId = $this->lstRoles->SelectedValue)
                    $pnlRoleView = new CourseViewPanel($this->pnlLeft, Role::LoadByIdrole($intRoleId), $this->pnlRight->ControlId);
            }
        }
    }

    // Run the Form we have defined
    ExamplesForm::Run('ExamplesForm');
?>
