<?php
    /* Note that most of the code from this was copied from the code generated PersonEditFormBase.
     * The main differences is we add a new constructor (replacing Form_Create).  And also, instead
     * of using the QueryString to determine the person, SetupPerson() takes in an nullable $objPerson
     * parameter.
     *
     * Finally, Save and Cancel simply closes/removes the control from the form, itself, instead
     * of "redirecting" to a List page.  (Delete was removed for purposes of the demo).  To implement
     * this, we updated btnSave_Create() and btnCancel_Create() to execute QAjaxControlActions instead of
     * QServerActions.  And then the event handlers themselves calls the Form's MethodCallback instead of
     * QApplication::Redirect().
     *
     * Also, the template file was modified so that $_CONTROL-> is used instead of $this->
     */

    class courseEditPanel extends QPanel {
        // General Form Variables
        protected $objRole;
        
        // The Method CallBack after Save or Cancel has been clicked
        protected $strMethodCallBack;

        // Controls for Person's Data Fields
        // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
        public $strTitleVerb;
        public $txtName;
        
        // Button Actions
        public $btnSave;
        public $btnCancel;
        
        // Specify the Teamplte File
        protected $strTemplate = 'courseEditPanel.tpl.php';
        
        public function __construct($objParentObject, $objRole, $strMethodCallBack, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Let's record the reference to the form's MethodCallBack
            // See note in ProjectViewPanel for more on this.
            $this->objRole = $objRole;
            $this->strTitleVerb = $this->objRole->Name;
            $this->strMethodCallBack = $strMethodCallBack;
            
            // Create/Setup Controls for Person's Data Fields
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = QApplication::Translate('Name');
            $this->txtName->Text = $this->objRole->Name;
            $this->txtName->Required = true;
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
            $this->btnCancel->CausesValidation = false;
        }
        
        // Event Handlers
        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $this->objRole->Name = $this->txtName->Text;
            $this->objRole->Save();

            // And call the Form's Method CallBack, passing in "true" to state that we've made an update
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(true);
        }

        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            // Call the Form's Method CallBack, passing in "false" to state that we've made no changes
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(false);
        }
    }
?>