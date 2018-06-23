<?php
	require('../../qcubed.inc.php');
        
	class RoleEditPanel extends QPanel {
		
		protected $mctRole;
		public $lblIdrole;
		public $txtName;
		public $txtDescription;
		public $lstParrentObject;
		public $txtMname;
		public $lstGrpObject;
		public $txtShortName;
		public $txtAbbrivation;
		public $txtServiceYears;
		public $txtCode;
		public $txtCount;

		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intIdrole = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/RoleEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the RoleMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctRole = RoleMetaControl::Create($this, $intIdrole);

			// Call MetaControl's methods to create qcontrols based on Role's data fields
			$this->lblIdrole = $this->mctRole->lblIdrole_Create();
			$this->txtName = $this->mctRole->txtName_Create();
			$this->txtDescription = $this->mctRole->txtDescription_Create();
			$this->lstParrentObject = $this->mctRole->lstParrentObject_Create();
			$this->txtMname = $this->mctRole->txtMname_Create();
			$this->lstGrpObject = $this->mctRole->lstGrpObject_Create();
			$this->txtShortName = $this->mctRole->txtShortName_Create();
			$this->txtAbbrivation = $this->mctRole->txtAbbrivation_Create();
			$this->txtServiceYears = $this->mctRole->txtServiceYears_Create();
			$this->txtCode = $this->mctRole->txtCode_Create();
			$this->txtCount = $this->mctRole->txtCount_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Role'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctRole->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the RoleMetaControl
			$this->mctRole->SaveRole();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the RoleMetaControl
			$this->mctRole->DeleteRole();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}

			// Check for records that may violate Unique Clauses
	public function Validate() {
		$blnToReturn = true;
			if (($objRole = Role::LoadByName($this->txtName->Text)) && ($objRole->Idrole != $this->mctRole->Role->Idrole )){
				$blnToReturn = false;
				$this->txtName->Warning = QApplication::Translate("Already in Use");
			}
		return $blnToReturn;
	}

	}
?>