<?php
	require('../../qcubed.inc.php');
      
	

	class EventForm extends QForm {
		// Local declarations of our Qcontrols
                protected $calFromDate;
                protected $calToDate;
                protected $lstEvent;
                
                protected $btnSave;
                protected $btnDelete;
                protected $btnCancel;
                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}



		protected function Form_Create() {
                    parent::Form_Create();
                    // Setup our Left and Right Panel Placeholders
                    //$this->calFromDate = new QCalendar($this);
                $this->calFromDate = new QDateTimePicker($this);
                $this->calFromDate->Name = QApplication::Translate('From Date');
                $this->calFromDate->Width =70;

                // $this->calFixedToDate = new QCalendar($this);
                $this->calToDate = new QDateTimePicker($this);
                $this->calToDate->Name = QApplication::Translate('To Date');
                $this->calToDate->Width = 70;
                
                
                $this->btnSave = new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QServerAction($this, 'btnSave_Click'));
                $this->btnSave->CausesValidation = $this;

                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(), new QServerAction($this, 'btnCancel_Click'));

                $this->btnDelete = new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Event'))));
                $this->btnDelete->AddAction(new QClickEvent(), new QServerAction($this, 'btnDelete_Click'));
                $this->btnDelete->Visible = FALSE;

                }
                
	}

	
	EventForm::Run('EventForm');
?>