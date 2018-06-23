<?php
	
	require('../../qcubed.inc.php');
        
        require('CalenderYearEditPanel.class.php');
        require('CalenderYearListPanel.class.php');
        
	class CalenderYearEditForm extends QForm{
		protected $pnlLeft;
                protected $pnlRight;
                protected $btnnew;
		protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}
                protected function Form_Create() {
                    parent::Form_Create();
                    $this->pnlLeft = new QPanel($this);
                    $this->pnlLeft->Position = QPosition::Relative;
                    $this->pnlLeft->CssClass = 'col-md-6 border1';
                    $this->pnlLeft->AutoRenderChildren = true;

                    $this->pnlRight = new QPanel($this);
                    $this->pnlRight->Position = QPosition::Relative;
                    $this->pnlRight->CssClass = 'col-md-6 border1';
                    $this->pnlRight->AutoRenderChildren = true;

                    $this->btnnew = new QButton($this);
                    $this->btnnew->Text = "New";
                    $this->btnnew->AddAction(new QClickEvent(), new QAjaxAction("btnnew_Click"));

                    $this->objDefaultWaitIcon = new QWaitIcon($this);

                    $this->pnlLeft->RemoveChildControls(true);
                    $this->pnlRight->RemoveChildControls(true);
                    $pnlProjectright = new CalenderYearListPanel($this->pnlRight, $this->pnlLeft, 'Test', $this->pnlLeft->ControlId);
                    
                }
                public function CloseRightPanel($blnUpdatesMade) {
                // First, remove all children panels from both pnlRight
                    $this->pnlLeft->RemoveChildControls(true);
                    $this->pnlRight->RemoveChildControls(true);

                    $this->pnlLeft->CssClass = 'col-md-6 border1';

                    $pnlProjectright = new CalenderYearListPanel($this->pnlRight, $this->pnlLeft, 'Test', $this->pnlLeft->ControlId);
                }

                public function btnnew_Click(){
                    $this->pnlLeft->CssClass = 'col-md-6 border1';
                    $pnlProjectleft = new CalenderYearEditPanel($this->pnlLeft, 'New', "CloseRightPanel");
                }
	}


	CalenderYearEditForm::Run('CalenderYearEditForm');
?>