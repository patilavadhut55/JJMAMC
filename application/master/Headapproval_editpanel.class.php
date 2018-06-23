<?php
	
	require('../qcubed.inc.php');

	
	class HeadapprovedEditPanel extends QPanel {
        // General Form Variables
        protected $objHead;
         // The Method CallBack after Save or Cancel has been clicked
        protected $strMethodCallBack;
        // Controls for Person's Data Fields
        // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
        public $strTitleVerb;
        public $lstName;
       
        // Button Actions
        public $btnSave;
        public $btnCancel;
        public $btnDelete;
        // Specify the Teamplte File
        protected $strTemplate = 'Headapproval_editpanel.tpl.php';
        
        public function __construct($objParentObject, $objCounter, $strMethodCallBack, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            $this->objHead = $objHead;
            //$this->strTitleVerb = $this->objCounter->Name;
            $this->strMethodCallBack = $strMethodCallBack;
            // Create/Setup Controls for Person's Data Fields
            $this->lstName = new QListBox($this);
          
            $this->lstName->Name = QApplication::Translate('Name');
            $this->lstName->Required = true;
            $this->lstName->Focus();
            $this->lstName->AddItem("-select-",NULL);
            $Roles = Role::LoadAll();
            foreach ($Roles  as $Role){
                $this->lstName->AddItem($Posi->Name, $Posi->Idrole);
            }
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
            $this->btnSave->PrimaryButton = true;
            $this->btnSave->CausesValidation = true;
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
            $this->btnCancel->CausesValidation = false;
            
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
           
        }
         public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $this->objHead->Name = $this->lstName->Text;
           
            $this->objHead->Save();

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
			 
                    $this->objHead->Delete();
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(true);	
         }

    }
?>