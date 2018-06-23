<?php
	require('../../qcubed.inc.php');
        require('eventEditPanel.class.php');
        require('eventViewPanel.class.php');

	require(__FORMBASE_CLASSES__ . '/EventEditFormBase.class.php');

	class EventEditForm extends QForm {
		// Local declarations of our Qcontrols
                protected $btnNew;
                protected $pnlLeft;
                protected $pnlRight;
		protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}



		protected function Form_Create() {
                    parent::Form_Create();
                    // Setup our Left and Right Panel Placeholders
                    // Notice that both panels have "AutoRenderChildren" set to true so that
                    // instantiated child panels will automatically get displayed
                    $this->pnlLeft = new QPanel($this);
                    $this->pnlLeft->Position = QPosition::Relative;
                    $this->pnlLeft->CssClass = 'smooth col-md-12';
                    $this->pnlLeft->AutoRenderChildren = true;

                    $this->pnlRight = new QPanel($this);
                    $this->pnlRight->Position = QPosition::Relative;
                    $this->pnlRight->CssClass = 'col-md-6';
                    $this->pnlRight->AutoRenderChildren = true;

                    $this->objDefaultWaitIcon = new QWaitIcon($this);
                    
                    $this->btnNew = new QButton($this);
                    $this->btnNew->ButtonMode = QButtonMode::AddNew;
                    $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
                    
                    $pnlProjectright = new EventViewPanel($this->pnlLeft, 'Test', $this->pnlRight->ControlId);
                    
                }
                public function CloseRightPanel($blnUpdatesMade) {
                    // First, remove all children panels from both pnlRight
                    $this->pnlRight->RemoveChildControls(true);
                    $this->pnlLeft->CssClass = 'col-md-12 smooth';
                    // If Updates were Made, then Re-Draw Left Panel to reflect the changes
                    // Note that this is a "brute force" method to update the entire left panel
                    // Of course, if you want, you can more finely tune this update process by only updating specific
                    // controls, etc., depending on what was updated/changed.
                    if ($blnUpdatesMade) {
                        $this->pnlLeft->RemoveChildControls(true);
                        //if ($intRoleId = $this->lstRoles->SelectedValue)
                            $pnlEventView = new EventViewPanel($this->pnlLeft,  'Test', $this->pnlRight->ControlId);
                    }
                }
                
                public function btnNew_Click(){
                    $this->pnlRight->RemoveChildControls(true);
                    $this->pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    
                    $this->pnlLeft->CssClass = 'col-md-6 border1';
                    $pnlEventleft = new EventEditPanel($this->pnlRight, 'new', "CloseRightPanel");
                
                }
	}

	
	EventEditForm::Run('EventEditForm');
?>