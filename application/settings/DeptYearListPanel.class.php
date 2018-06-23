<?php
	
	class DeptYearListPanel extends QPanel {
		public $lblEdit;
                protected $strMethodCallBack;
                protected $strPanelLeftControlId;
                protected $panelleft;

                    // Specify the Template File for this custom QPanel
                protected $strTemplate = 'DeptYearListPanel.tpl.php';

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

                        $deptyears = DeptYear::LoadAll();
                        if($deptyears) foreach($deptyears as $deptyear){
                            $this->lblEdit[$deptyear->IddeptYear] = new QLabel($this);
                            $this->lblEdit[$deptyear->IddeptYear]->HtmlEntities = FALSE;
                            $this->lblEdit[$deptyear->IddeptYear]->Text = "<i class='fa fa-pencil'></i> ".$deptyear->Name;
                            $this->lblEdit[$deptyear->IddeptYear]->AddAction(new QClickEvent(), new QAjaxControlAction($this, "lblEdit_Click"));
                            $this->lblEdit[$deptyear->IddeptYear]->ActionParameter = $deptyear->IddeptYear;
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
                    $objRoleToEdit = DeptYear::Load($strParameter);
                    new DeptYearEditPanel($pnlLeft, $objRoleToEdit, 'CloseRightPanel');
                }

		
	}
?>