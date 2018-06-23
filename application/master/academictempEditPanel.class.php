<?php
   
    class AcademictempEditPanel extends QPanel {
         public $objRole;
        
        protected $strMethodCallBack;
        
        public $objParentObject;

        public $strTitleVerb;
        public $strDescription;
        
        public $lstyear;
        public $lstsemi;
        
        public $lbldel;
        public $lblCourses;
        
        public $btnGenerate;
        public $btnCancel;
        
        protected $strTemplate = 'academictempEditPanel.tpl';
        
        public function __construct($objParentObject, $objRole, $strMethodCallBack, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->objRole = $objRole;
            $this->strTitleVerb = $this->objRole->Name;
            $this->strDescription = $this->objRole->Description;
            $this->strMethodCallBack = $strMethodCallBack;
            
            $this->objParentObject = $objParentObject;
            
           
            $this->lstyear = new QListBox($this);
            $this->lstyear->Name = QApplication::Translate('Year');
            $this->lstyear->Required = true;
            //$this->lstsemi->Focus();
            $this->lstyear->AddItem("-select-",NULL);
            $years = AcademicYear::LoadAll();
            foreach ($years  as $year){
                $this->lstyear->AddItem($year->Name, $year->IdacademicYear);
            }
            
            $this->lstsemi = new QListBox($this);
            $this->lstsemi->Name = QApplication::Translate('Year');
            $this->lstsemi->Required = true;
            //$this->lstsemi->Focus();
            $this->lstsemi->AddItem("-select-",NULL);
            $year = AcademicYear::LoadAll();
            foreach ($years  as $year){
                $this->lstsemi->AddItem($year->Parrent, $year->IdacademicYear);
            }
            
            $this->btnGenerate = new QButton($this);
            $this->btnGenerate->ButtonMode = QButtonMode::Save;
            $this->btnGenerate->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnGenerate_Click'));
            $this->btnGenerate->PrimaryButton = true;
            $this->btnGenerate->CausesValidation = true;
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
            $this->btnCancel->CausesValidation = false;
         }
    
        public function btnGenerate_Click($strFormId, $strControlId, $strParameter) {
           
                
                // And call the Form's Method CallBack, passing in "true" to state that we've made an update
           
        }
        
        public function lbldel_Click($strFormId, $strControlId, $strParameter) {
           $deptyear = DeptYear::LoadByIddeptYear($strParameter);
           $deptyear->Delete();
        
           $this->refresh();
        }
        
        public function lblAddCourse_Click($strFormId, $strControlId, $strParameter) {
           $this->objParentObject->RemoveChildControls(true);
           $deptyear = DeptYear::LoadByIddeptYear($strParameter);
           new subjectEditPanel($this->objParentObject, $deptyear, 'CloseRightPanel');
        }
        
        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            $strMethodCallBack = $this->strMethodCallBack;
            $this->objForm->$strMethodCallBack(false);	
        }
        
        public function refresh(){
            $this->objParentObject->RemoveChildControls(true);
            new courseEditPanel($this->objParentObject, $this->objRole, 'CloseRightPanel');
        }
    }
?>