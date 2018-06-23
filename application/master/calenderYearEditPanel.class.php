<?php
	
	class CalenderYearEditPanel extends QPanel {
                public $chkvisible;
                public $chkactive;
                public $txtName;
		public $txtDescription;
                public $txtPercentage;
                public $chkapprove;
                public $calForm;
                public $calTo;
                public $txtSeq;
                public $btnSave;
		public $btnDelete;
		public $btnCancel;
              
                protected $objProject;
                protected $strMethodCallBack;
                public $strTitleVerb;
                protected $strTemplate = 'calenderYearEditPanel.tpl.php';

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
                     
			// Setup Callback and Template
			
			$this->txtName = new QTextBox($this, 'txtName');
                        $this->txtDescription = new QTextBox($this, 'txtDescription');
                        $this->txtPercentage = new QTextBox($this, 'txtPercentage');
                        $this->calForm = new QCalendar($this, 'calFrom');
                        $this->calTo = new QCalendar($this, 'calTo');
                        $this->chkactive = new QCheckBox($this,'chkactive');
                        $this->chkapprove = new QCheckBox($this, 'chkapprove');
                        $this->chkvisible = new QCheckBox($this,'chkvisible');
                        $this->txtSeq = new QTextBox($this, 'txtSeq');
                     
                        $this->txtName->Name = 'Year (YYYY-YY)';
                        $this->txtName->Required = true;
                        $this->txtName->CausesValidation = true;
                        
                        $this->txtDescription->Name = ' Description';
                        $this->txtDescription->Required = true;
                        $this->txtDescription->CausesValidation = true;
                        
                        $this->calForm->Name ='From Date';
                        $this->calForm->Width =120;
                        
                        $this->calTo-> Name ='To Date';
                        $this->calTo->Width =120;
                        
                        $this->chkactive->Name = 'Active' ;
                        $this->chkvisible->Name ='Visible';
                        $this->chkapprove->Name = 'Approved';
                        
                        $this->chkactive->Width = 120 ;
                        $this->chkvisible->Width =120;
                        $this->chkapprove->Width = 120;
                        
                        $this->txtSeq->Name = 'Sequence' ;
                        $this->txtSeq->Width = 100;
                       
                        $this->txtPercentage->Name = 'Percentage';
                        $this->txtPercentage->Width = 100;
                        
			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
                        $this->btnSave->ButtonMode = QButtonMode::Save;
			$this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
                        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
			$this->btnCancel->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
                        $this->btnDelete->ButtonMode = QButtonMode::Delete;
			$this->btnDelete->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnDelete_Click'));
                        $this->btnDelete->Visible = FALSE;
                        
                        if($this->objProject == 'new'){
                           $this->objProject = new CalenderYear();
                           $this->strTitleVerb = "Add New Institute Calendar Year";
                        }else{
                            $this->strTitleVerb = $this->objProject->Name;
                            $this->btnDelete->Visible = TRUE;
                            $this->txtName->Text = $objProject->Name;
                            $this->txtDescription->Text = $objProject->Description; 
                            $this->txtPercentage->Text = $objProject->FeePercentage;
                            $this->calForm->DateTime = $objProject->From;
                            $this->calTo->DateTime = $objProject->To;
                            $this->chkactive->Checked = $objProject->Active;
                            $this->chkvisible->Checked = $objProject->Visible;
                            $this->chkapprove->Checked = $objProject->Approved;
                            
                        }
                    }
	
	        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    if($this->objProject == "New"){
                       $this->objProject = new CalenderYear();
                    }
                        $this->objProject->Name = $this->txtName->Text;
                        $this->objProject->Description = $this->txtDescription->Text;
                        $this->objProject->FeePercentage = $this->txtPercentage->Text;
                        $this->objProject->From = $this->calForm->DateTime;
                        $this->objProject->To = $this->calTo->DateTime;
                        $this->objProject->Sequence = $this->txtSeq->Text;
                        if ($this->chkvisible->Checked == TRUE){
                            $this->objProject->Visible = $this->chkvisible->Checked;
                        } else {
                             $this->objProject->Visible = 0;
                       }
                        
                        if ($this->chkactive->Checked == TRUE){
                            $this->objProject->Active = $this->chkactive->Checked;
                        }else {
                            $this->objProject->Active = 0;
                        }
                        if ($this->chkapprove->Checked == TRUE){
                            $this->objProject->Approved = $this->chkapprove->Checked;
                        } else {
                             $this->objProject->Approved = 0;
                       }
                        $this->objProject->Save();
                    // And call the Form's Method CallBack, passing in "true" to state that we've made an update
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(true);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/master/calender.php');
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
		// Call the Form's Method CallBack, passing in "false" to state that we've made no changes
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(false);	
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
		    $this->objProject->Delete();
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(true);	
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/master/calender.php');
		}
	
	}
?>