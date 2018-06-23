<?php
	
	class CalenderYearListPanel extends QPanel {
	public $lblEdit;
        protected $strMethodCallBack;
        protected $strPanelLeftControlId;
        protected $panelleft;

        // Specify the Template File for this custom QPanel
        protected $strTemplate = 'calenderYearListPanel.tpl.php';
        
        public function __construct($objParentObject, $panelleft, $objProject, $strPanelLeftControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

            $this->panelleft = $panelleft;
            $this->panelleft->CssClass = 'col-md-6';
            $this->strPanelLeftControlId = $strPanelLeftControlId;
            
            $years = CalenderYear::LoadAll();
            if($years) foreach($years as $year){
                $this->lblEdit[$year->IdcalenderYear] = new QLabel($this);
                $this->lblEdit[$year->IdcalenderYear]->HtmlEntities = FALSE;
                $this->lblEdit[$year->IdcalenderYear]->Text = "<i class='fa fa-pencil'></i> ".$year->Name;
                $this->lblEdit[$year->IdcalenderYear]->AddAction(new QClickEvent(), new QAjaxControlAction($this, "lblEdit_Click"));
                $this->lblEdit[$year->IdcalenderYear]->ActionParameter = $year->IdcalenderYear;
            }
        }

	public function lblEdit_Click($strFormId, $strControlId, $strParameter){
            // Get pnlRight from the Parent Form
            $pnlLeft = $this->objForm->GetControl($this->strPanelLeftControlId);

            // First, remove all children panels from pnlRight
            $pnlLeft->RemoveChildControls(true);
            
            
            $this->panelleft->CssClass = 'col-md-6';
            
            // Now create a new PersonEditPanel, setting pnlRight as its parent
            // and specifying parent form's "CloseRightPanel" as the method callback
            // See the note in _constructor, above, for more information
            $objRoleToEdit = CalenderYear::Load($strParameter);
            new CalenderYearEditPanel($pnlLeft, $objRoleToEdit, 'CloseRightPanel');
        }
	}
?>