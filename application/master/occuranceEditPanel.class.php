<<?php
        class OccuranceEditPanel extends QPanel {
        // General Form Variables
        protected $objsubject;
         // The Method CallBack after Save or Cancel has been clicked
        protected $strMethodCallBack;
        // Controls for Person's Data Fields
        // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
        public $strTitleVerb;
        public $txtName;
     
        // Button Actions
        public $btnSave;
        public $btnCancel;
        public $btnDelete;
       // Specify the Teamplte File
        protected $strTemplate = 'occuranceEditPanel.tpl.php';
        
        public function __construct($objParentObject, $objOccurance, $strMethodCallBack, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            // Let's record the reference to the form's MethodCallBack
            // See note in ProjectViewPanel for more on this.
            $this->objsubject = $objOccurance;
            //$this->strTitleVerb = $this->objsubject->Name;
            $this->strMethodCallBack = $strMethodCallBack;
            // Create/Setup Controls for Person's Data Fields
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = QApplication::Translate(' occurance Name');
            //$this->txtName->Text = $this->objsubject->Name;
            $this->txtName->Required = true;
          
            
            if($this->objsubject == 'new'){
                         $this->objsubject = new Occurance();
                         $this->strTitleVerb = " Add New occurance";
                     }else{
                        $this->strTitleVerb = $this->objsubject->Name;
                        $this->txtName->Text = $this->objsubject->Name;
                       
                     }
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
           
            }
        
        // Event Handlers
        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $this->objsubject->Name = $this->txtName->Text;
          
            $this->objsubject->Save();

            // And call the Form's Method CallBack, passing in "true" to state that we've made an update
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(true);
        }

        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            // Call the Form's Method CallBack, passing in "false" to state that we've made no changes
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(false);
        }
        public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			 
            $this->objsubject->Delete();
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(true);	
        }

    }
?>