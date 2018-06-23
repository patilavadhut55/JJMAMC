<?php
	class DeptYearEditPanel extends QPanel {
		
		public $txtName;
		
		public $lstDepartmentObject;
		public $lstCalenderObject;
		public $lstAcademicObject;
                public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// The Local Project object which this panel represents
                protected $objProject;
		// Callback
		protected $strMethodCallBack;
                
                protected $strTemplate = 'DeptYearEditPanel.tpl.php';

                      public function __construct($objParentObject, $objProject, $strMethodCallBack, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                        $this->objProject = $objProject;
                        $this->strMethodCallBack = $strMethodCallBack;
			

			
			$this->txtName = new QTextBox($this, 'txtName');
			$this->lstDepartmentObject = new QSelect2ListBox($this, 'lstdept');
			$this->lstCalenderObject = new QSelect2ListBox($this, 'lstcalender');
			$this->lstAcademicObject = new QSelect2ListBox($this, 'lstacademic');
                        
                        $this->txtName->Name = 'Name';
                        $this->txtName->Required = true;
                        $this->txtName->CausesValidation = true;

                        $this->txtName->AddAction(new QEnterKeyEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
                        $this->txtName->AddAction(new QEnterKeyEvent(), new QTerminateAction());
                        $this->txtName->AddAction(new QEscapeKeyEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
                        $this->txtName->AddAction(new QEscapeKeyEvent(), new QTerminateAction());
                        
                        
                        $this->lstDepartmentObject->Name = 'Department Name';
                        $this->lstDepartmentObject->Required = true;
                        $this->lstDepartmentObject->CausesValidation = true;
                        $this->lstDepartmentObject->AddItem('-Select One-');
                        $depts =  Role::LoadArrayByGrp(2);
                        foreach ($depts as $dept){
                            $this->lstDepartmentObject->AddItem($dept->Name,$dept->Idrole);
                        }
                        
                        $this->lstCalenderObject->Name = 'Calender Year';
                        $this->lstCalenderObject->Required = true;
                        $this->lstCalenderObject->CausesValidation = true;
                        $this->lstCalenderObject->AddItem('-Select One-');
                        $cals = CalenderYear::LoadAll();
                        foreach ($cals as $cal){
                            $this->lstCalenderObject->AddItem($cal->Name,$cal->IdcalenderYear);
                        }
                        
                        $this->lstAcademicObject->Name = 'Acememic Year';
                        $this->lstAcademicObject->Required = true;
                        $this->lstAcademicObject->CausesValidation = true;
                        $this->lstAcademicObject->AddItem('-Select One-');
                        $acads = AcademicYear::LoadAll();
                        foreach ($acads as $acad){
                            $this->lstAcademicObject->AddItem($acad->Name,$acad->IdacademicYear);
                        }
                        $this->lstAcademicObject->AddAction(new QChangeEvent(), new QAjaxAction($this, 'Change_event'));
                        
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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DeptYear'))));
                        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = FALSE;
                        
                        if($objProject != "New"){
                          $this->btnDelete->Visible = TRUE;
                          
                          $this->txtName->Text = $objProject->Name;
                          $this->lstDepartmentObject->SelectedValue = $objProject->Department;
                          $this->lstCalenderObject->SelectedValue = $objProject->Calender;
                          $this->lstAcademicObject->SelectedValue = $objProject->Academic;
                     }
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			 if($this->objProject == "New"){
                        $this->objProject = new DeptYear();
                        }
                        
                        $this->objProject->Name = $this->txtName->Text;
                        $this->objProject->Department = $this->lstDepartmentObject->SelectedValue;
                        $this->objProject->Calender = $this->lstCalenderObject->SelectedValue;
                        $this->objProject->Academic = $this->lstAcademicObject->SelectedValue;
                        $this->objProject->Save();


                        // And call the Form's Method CallBack, passing in "true" to state that we've made an update
                        $strMethodCallBack = $this->strMethodCallBack;
                        $this->objForm->$strMethodCallBack(true);
                }

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                    $this->objProject->Delete();
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
		 // Call the Form's Method CallBack, passing in "false" to state that we've made no changes
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(false);		
		}
                public function Change_event(){
                    
                }


	}
?>