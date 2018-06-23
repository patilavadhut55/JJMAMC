<?php
	
	require('../../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/DeptYearEventsEditFormBase.class.php');

	
	class DeptYearEventsEditForm extends DeptYearEventsEditFormBase {
           
            protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

	 protected function Form_Create() {
             parent::Form_Create();
             
              $this->lstEventObject->Name = "Event";
              $this->lstDepartmentObject->Name = "Department"; 
              $this->lstDeptYearObject->Name ="Department Year";
              $this->lstCalenderYearObject->Name= "Calender Year";
              $this->lstParrentObject->Name = "Parrent"; 
              $this->calFrom->Width = 70;
              $this->calTo->Width = 70; 
              
              $this->btnSave->ButtonMode = QButtonMode::Save;
              $this->btnCancel->ButtonMode = QButtonMode::Cancel;
              $this->btnDelete->ButtonMode = QButtonMode::Delete;
              
                     
             
         }
         protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                // Delegate "Save" processing to the DeptYearEventsMetaControl
                $this->mctDeptYearEvents->SaveDeptYearEvents();
                $this->RedirectToListPage();
        }

        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                // Delegate "Delete" processing to the DeptYearEventsMetaControl
                $this->mctDeptYearEvents->DeleteDeptYearEvents();
                $this->RedirectToListPage();
        }

        protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                $this->RedirectToListPage();
        }

        // Other Methods

        protected function RedirectToListPage() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/dept_year_events_edit.php');
        }
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// dept_year_events_edit.tpl.php as the included HTML template file
	DeptYearEventsEditForm::Run('DeptYearEventsEditForm');
?>