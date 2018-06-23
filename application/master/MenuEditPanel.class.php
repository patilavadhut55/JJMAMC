<?php

        class MenuEditPanel extends QPanel {
        // General Form Variables
        protected $objMenu;
         // The Method CallBack after Save or Cancel has been clicked
        protected $strMethodCallBack;
        // Controls for Person's Data Fields
        // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
        public $strTitleVerb;
        Public $lstPosition;
        public $lstParrent;
        public $txtLevel;
        public $txtCode;
        public $txtName;
        Public $txtSubName;
        public $lstIconList;
        public $txtLink;
        Public $txtLinkOption;
        // Button Actions
        public $btnSave;
        public $btnCancel;
        public $btnDelete;
        // Specify the Teamplte File
        protected $strTemplate = 'MenuEditPanel.tpl.php';
        
        public function __construct($objParentObject, $objMenu, $strMethodCallBack, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            // Let's record the reference to the form's MethodCallBack
            // See note in ProjectViewPanel for more on this.
            $this->objMenu = $objMenu;
            //$this->strTitleVerb = $this->objMenu->Name;
            $this->strMethodCallBack = $strMethodCallBack;
            // Create/Setup Controls for Person's Data Fields
           
            
            $this->lstPosition = new QListBox($this);
            $this->lstPosition->Name = QApplication::Translate('Position');
            $this->lstPosition->Required = true;
            $this->lstPosition->Focus();
            $this->lstPosition->AddItem("-select-",NULL);
            $Positions = MenuPosition::LoadAll();
            foreach ($Positions  as $Posi){
                $this->lstPosition->AddItem($Posi->Name, $Posi->IdmenuPosition);
            }
             $this->lstPosition->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstPosition_Change'));
            
             
            $this->lstParrent = new QListBox($this);
            $this->lstParrent->Name = QApplication::Translate(' Parrent');
            $this->lstParrent->AddItem("-select-",NULL);
            $Parrents= Menu::LoadArrayByParrent($this->lstParrent->SelectedValue);
            
            foreach ($Parrents  as  $Parrent){
                $this->lstParrent->AddItem($Parrent->Name, $Parrent->Idmenu);
            }
            //Icon
            $this->lstIconList = new QSelect2ListBox($this);
            $this->lstIconList->Name = "Icon";
            $this->lstIconList->AddItem("Select",NULL);
            $myfile = fopen("../settel/Document.txt", "r") or die("Unable to open file!");
            $cnt = 1;
            while(!feof($myfile)) {
                $val = trim(fgets($myfile));
                $this->lstIconList->AddItem('<i style="width:20px;" class="fa '.$val.'"></i> '.$val,$val);                            
            }
            fclose($myfile);
            //$this->lstIconList->AddAction(new QClickEvent(), new QServerControlAction($this,'lstIconList_Click'));
          //Icon
 
            $this->txtLevel = new QTextBox($this);
            $this->txtLevel->Name = QApplication::Translate(' Level');
                        
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = QApplication::Translate(' Code');
            $this->txtCode->Required = true;
            
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = QApplication::Translate(' Name');
            $this->txtName->Required = true;
            
            $this->txtSubName = new QTextBox($this);
            $this->txtSubName->Name = QApplication::Translate('Sub Name');
            
            
            $this->txtLink = new QTextBox($this);
            $this->txtLink->Name = QApplication::Translate(' Link');
            $this->txtLink->Required = true;
            
            $this->txtLinkOption = new QTextBox($this);
            $this->txtLinkOption->Name = QApplication::Translate(' Link Option');
         
           
            
            if($this->objMenu == 'new'){
                         $this->objMenu = new Menu();
                         $this->strTitleVerb = "Add New Menu";
                     }else{
                        $this->strTitleVerb = $this->objMenu->Name;
                        $this->lstPosition->SelectedValue = $this->objMenu->Position;
                        $this->lstParrent->SelectedValue = $this->objMenu->Parrent;
                        $this->txtLevel->Text = $this->objMenu->Level;
                        $this->txtCode->Text = $this->objMenu->Code;
                        $this->txtName->Text = $this->objMenu->Name;
                        $this->txtSubName->Text = $this->objMenu->SubName;
                        $this->lstIconList->SelectedValue = $this->objMenu->Icon;
                        $this->txtLink->Text = $this->objMenu->Link;
                        $this->txtLinkOption->Text = $this->objMenu->LinkOption;                  
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
        
            // Setup
        // Event Handlers
        public function lstPosition_Change($strFormId, $strControlId, $strParameter){
            //QApplication::DisplayAlert('event generated');
            $Position = MenuPosition::LoadByIdmenuPosition($this->lstPosition->SelectedValue);
            $this->txtCode->Text = $Position->ShortName.' '.$Position->Counter;                    
            $this->txtName->Focus();
        }
                
        protected function lstIconList_Click(){                    
                    $this->txtIcon->Text = $this->lstIconList->SelectedValue;
        }
        
        public function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $Position = MenuPosition::LoadByIdmenuPosition($this->lstPosition->SelectedValue);
            $Position->Counter = $Position->Counter + 1;
            $Position->Save();
            $this->objMenu->Position =  $this->lstPosition->SelectedValue;
            $this->objMenu->Parrent=  $this->lstParrent->SelectedValue;
            $this->objMenu->Level = $this->txtLevel->Text;
            $this->objMenu->Code = $this->txtCode->Text;
            $this->objMenu->Name = $this->txtName->Text;  
            $this->objMenu->SubName = $this->txtSubName->Text;
            $this->objMenu->Icon =  $this->lstIconList->SelectedValue;
            $this->objMenu->Link = $this->txtLink->Text;
            $this->objMenu->LinkOption = $this->txtLinkOption->Text;
            $this->objMenu->Save();
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
		    $this->objMenu->Delete();
                    $strMethodCallBack = $this->strMethodCallBack;
                    $this->objForm->$strMethodCallBack(true);	
        }
    }
    
?>