<?php
	class FeeConcessionEditPanel extends QPanel {
		// General Form Variables
                protected $objFee;
		public $txtDescription;
                public $txtName;
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Controls for Person's Data Fields
                // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
                public $strTitleVerb;
		// Callback
		protected $strMethodCallBack;
                
                protected $strTemplate = 'FeeConcessionEditPanel.tpl.php';
		public function __construct($objParentObject, $objFee, $strMethodCallBack, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                     // Let's record the reference to the form's MethodCallBack
                    // See note in ProjectViewPanel for more on this.
                    $this->objFee = $objFee;
                    $this->strMethodCallBack = $strMethodCallBack;
                     
                     // Create/Setup Controls for Person's Data Fields
                    $this->txtName = new QTextBox($this);
                    $this->txtName->Name = QApplication::Translate('Name');
                    $this->txtName->Required = true;
                     
                    $this->txtDescription = new QTextBox($this);
                    $this->txtDescription->TextMode=  QTextMode::MultiLine;
                    $this->txtDescription->Name = QApplication::Translate('Description');
                    $this->txtDescription->Required = true;
                     
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
	            $this->btnDelete->Visible = FALSE;
                  
                    if($this->objFee == 'new'){
                        $this->objFee = new FeesConcession();
                        $this->strTitleVerb = "Add New Fee Concession Type";
                         
                    }else{
                        $this->btnDelete->Visible =TRUE;
                        $this->strTitleVerb = $this->objFee->Name;
                        $this->txtName->Text = $this->objFee->Name;
                        $this->txtDescription->Text = $this->objFee->Description;
                    }
		}

		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    $this->objFee->Name = $this->txtName->Text;
                    $this->objFee->Description = $this->txtDescription->Text;
                    $this->objFee->Save();

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
                    $this->objFee->Delete();
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(true);	
		}

	}
?>