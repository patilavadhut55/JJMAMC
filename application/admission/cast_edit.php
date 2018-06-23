<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/CastEditFormBase.class.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Cast class.  It uses the code-generated
	 * CastMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Cast columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both cast_edit.php AND
	 * cast_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class CastEditForm extends CastEditFormBase {
		// Override Form Event Handlers as Needed
		protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

                protected function Form_Create() {
			parent::Form_Create();

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the CastMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctCast = CastMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Cast's data fields
			$this->lblIdcast = $this->mctCast->lblIdcast_Create();
			$this->txtName = $this->mctCast->txtName_Create();
			$this->txtMarName = $this->mctCast->txtMarName_Create();			
			$this->lstParentObject = $this->mctCast->lstParentObject_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Cast'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctCast->EditMode;
                        
                        $this->btnSave->ButtonMode = QButtonMode::Save;
                        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                        $this->btnDelete->ButtonMode = QButtonMode::Delete;
                       
                        
		}
                // Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CastMetaControl
                        $this->txtMarName->Text = "";
                        //$this->txtAbbrivation->Text = " ";
                        $this->txtPrint->Text = "";
			$this->mctCast->SaveCast();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CastMetaControl
			$this->mctCast->DeleteCast();
			$this->RedirectToListPage();
		}
             
                protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                    $this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/cast_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// cast_edit.tpl.php as the included HTML template file
	CastEditForm::Run('CastEditForm');
?>