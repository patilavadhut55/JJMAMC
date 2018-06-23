<?php

include './calendar.class.php';

	class CalenderEditPanel extends QPanel {
		
                protected $objEvent;
                protected $lblCalander;
                public $lblMonths;
                public $objParentObject;
		// Callback
		protected $strMethodCallBack;
                
                protected $strTemplate = 'CalenderEditPanel.tpl.php';
		
                public function __construct($objParentObject, $objEvent, $strMethodCallBack, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Let's record the reference to the form's MethodCallBack
                        // See note in ProjectViewPanel for more on this.
                         $this->objEvent = $objEvent;
                         $this->strMethodCallBack = $strMethodCallBack;
                         $this->objParentObject = $objParentObject;
                         if(isset($_GET['new'])){
                            $this->lblCalander = new QLabel($this);
                            $this->lblCalander->HtmlEntities = FALSE;

                            for($i=1; $i<=12; $i++){
                                if($i < 10) $i = "0".$i; //month needs 2 char

                                $this->lblMonths[$i] = new QButton($this);
                                $this->lblMonths[$i]->ButtonMode = QButtonMode::Warning;
                                $this->lblMonths[$i]->Text = Date('M', strtotime("2016".$i."01"));
                                $this->lblMonths[$i]->Visible = FALSE;
                                $this->lblMonths[$i]->Width = 50;
                                $this->lblMonths[$i]->ActionParameter = $i;
                                $this->lblMonths[$i]->AddAction(new QClickEvent(), new QAjaxAction('lblMonths_Click'));
                            }
                            $calendar = new Calendar();
                            $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($objEvent->From)),date('m',  strtotime($objEvent->From)));

                            for ($i=1; $i<=12; $i++){
                                if($i < 10) $i = "0".$i; //month needs 2 char

                                $this->lblMonths[$i]->Visible = TRUE;
                            }
                         }
		}
                public function lblMonths_Click($strFormId, $strControlId, $strParameter){
                     if($this->lstCal->SelectedValue != NULL){
                         for ($i=1; $i<=12; $i++){
                        if($i < 10) $i = "0".$i; 
                            $cal = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
                            $calendar = new Calendar();
                            $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($cal->From)), $strParameter, 
                            $this->lstTeachDept->SelectedValue, 
                            $this->lstAcadYear->SelectedValue);
                         }
                      }
                 }

		
		

	}
?>