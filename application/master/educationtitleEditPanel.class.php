<?php
	class EducationtitleEditPanel extends QPanel {
		// General Form Variables
            protected $objEducationtitle;
            public $txtName;
            public $txtDescription;
            public $chkCET;
            public $btnSave;
            public $btnDelete;
            public $btnCancel;

            // Controls for Person's Data Fields
            // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
            public $strTitleVerb;
            // Callback
            protected $strMethodCallBack;

            protected $strTemplate = 'educationtitleEditPanel.tpl.php';
            public function __construct($objParentObject, $objEducationtitle, $strMethodCallBack, $strControlId = null) {
                    // Call the Parent
                    try {
                            parent::__construct($objParentObject, $strControlId);
                    } catch (QCallerException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                    }
                 // Let's record the reference to the form's MethodCallBack
                // See note in ProjectViewPanel for more on this.
                $this->objEducationtitle = $objEducationtitle;
                $this->strMethodCallBack = $strMethodCallBack;

                 // Create/Setup Controls for Person's Data Fields
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = QApplication::Translate('Name');
                $this->txtName->Required = true;

                $this->txtDescription = new QTextBox($this);
                $this->txtDescription->Name = QApplication::Translate('Description');
                $this->txtDescription->TextMode=  QTextMode::MultiLine;
                
                $this->chkCET = new QCheckBox($this);
                $this->chkCET->Name = "CET";
                //$this->chkCET->Required = true;
                
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
                
                if($this->objEducationtitle == 'new'){
                    $this->objEducationtitle = new EducationTitle();
                    $this->strTitleVerb = "Add New Education Title";
                }else{
                    $this->btnDelete->Visible = TRUE;
                    $this->strTitleVerb = $this->objEducationtitle->Name;
                    $this->txtName->Text = $this->objEducationtitle->Name;
                    $this->txtDescription->Text = $this->objEducationtitle->Description;
                }
            }

            public function btnSave_Click($strFormId, $strControlId, $strParameter) {
                $this->objEducationtitle->Name = $this->txtName->Text;
                $this->objEducationtitle->Description = $this->txtDescription->Text;
                $this->objEducationtitle->Cet = $this->chkCET->Checked;
                $this->objEducationtitle->Save();
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
                $this->objEducationtitle->Delete();
                $strMethodCallBack = $this->strMethodCallBack;
                $this->objForm->$strMethodCallBack(true);	
            }
    }
?>