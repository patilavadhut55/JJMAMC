<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the YearlySubject class.  It uses the code-generated
	 * YearlySubjectMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a YearlySubject columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both yearly_subject_edit.php AND
	 * yearly_subject_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class YearlySubjectEditPanel extends QPanel {
		// Local instance of the YearlySubjectMetaControl
		/**
		 * @var YearlySubjectMetaControl
		 */
		protected $mctYearlySubject;

		// Controls for YearlySubject's Data Fields
		/** @var QLabel  */
		public $lblIdyearlySubject;
		/** @var QTextBox  */
		public $txtCode;
		/** @var QSelect2ListBox  */
		public $lstSubjectObject;
		/** @var QSelect2ListBox  */
		public $lstDeptYearObject;
		/** @var QCheckBox  */
		public $chkAllDept;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		public $btnSave;
		/**
		 * @var QButton Delete
		 */
		public $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intIdyearlySubject = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/YearlySubjectEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the YearlySubjectMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctYearlySubject = YearlySubjectMetaControl::Create($this, $intIdyearlySubject);

			// Call MetaControl's methods to create qcontrols based on YearlySubject's data fields
			$this->lblIdyearlySubject = $this->mctYearlySubject->lblIdyearlySubject_Create();
			$this->txtCode = $this->mctYearlySubject->txtCode_Create();
			$this->lstSubjectObject = $this->mctYearlySubject->lstSubjectObject_Create();
			$this->lstDeptYearObject = $this->mctYearlySubject->lstDeptYearObject_Create();
			$this->chkAllDept = $this->mctYearlySubject->chkAllDept_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('YearlySubject'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctYearlySubject->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the YearlySubjectMetaControl
			$this->mctYearlySubject->SaveYearlySubject();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the YearlySubjectMetaControl
			$this->mctYearlySubject->DeleteYearlySubject();
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
			if (($objYearlySubject = YearlySubject::LoadByCode($this->txtCode->Text)) && ($objYearlySubject->IdyearlySubject != $this->mctYearlySubject->YearlySubject->IdyearlySubject )){
				$blnToReturn = false;
				$this->txtCode->Warning = QApplication::Translate("Already in Use");
			}
		return $blnToReturn;
	}

	}
?>