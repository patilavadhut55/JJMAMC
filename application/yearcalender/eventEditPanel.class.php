<?php
	
	class EventEditPanel extends QPanel {
            // General Form Variables
            protected $objEvent;
            public $txtName;
            /** @var QTextBox  */
            public $txtColor;
            /** @var QTextBox  */
            public $txtDescription;
            /** @var QSelect2ListBox  */
            public $lstParrentObject;
            /** @var QSelect2ListBox  */
            public $lstDepartmentObject;
            /** @var QCalender  */
            public $calFromDate;
            /** @var QCalender  */
            public $calFixedToDate;
            /** @var QSelect2ListBox  */
            public $lstOccuranceObject;

            // Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

            // Other Controls
            /**
             * @var QButton Save
             */
            public $btnSave;
            /**
             * @var QButton Delete
             */
            public $btnDelete;
            /**
             * @var QButton Cancel
             */
            public $btnCancel;

            // Controls for Person's Data Fields
            // Notice that because the FORM is rendering these items, we need to make sure the controls are "public"
            public $strTitleVerb;
            // Callback
            protected $strMethodCallBack;

            protected $strTemplate = 'eventEditPanel.tpl.php';

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
                 
                /// Create/Setup Controls for Person's Data Fields
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = QApplication::Translate('Name');
                $this->txtName->Required = true;


                $this->txtColor = new QTextBox($this);
                $this->txtColor->Name = QApplication::Translate('Color');


                $this->txtDescription = new QTextBox($this);
                $this->txtDescription->Name = QApplication::Translate('Description');
                $this->txtDescription->TextMode = QTextMode::MultiLine;


                $this->lstParrentObject = new QSelect2ListBox($this);
                $this->lstParrentObject->Name = QApplication::Translate('Parrent');
                $this->lstParrentObject->AddItem("-Select One-",NULL);
                $parrents = Event::LoadArrayByParrent(NULL);
                    foreach ($parrents as $parrent){
                    $this->lstParrentObject->AddItem($parrent->Name,$parrent->Idevent);
                 }

                $this->lstDepartmentObject = new QSelect2ListBox($this);
                $this->lstDepartmentObject->Name = QApplication::Translate('Department');
                $this->lstDepartmentObject->Required = true;
                $this->lstDepartmentObject->AddItem("-Select One-",NULL);
                $depts = Role::QueryArray(
                        QQ::AndCondition(
                                QQ::NotEqual(QQN::Role()->Grp, 3)
                        ));
                            foreach ($depts as $dept){
                        $this->lstDepartmentObject->AddItem($dept->Name,$dept->Idrole);
                }

                 //$this->calFromDate = new QCalendar($this);
                $this->calFromDate = new QDateTimePicker($this);
                $this->calFromDate->Name = QApplication::Translate('From Date');
                $this->calFromDate->Width =70;

                // $this->calFixedToDate = new QCalendar($this);
                $this->calFixedToDate = new QDateTimePicker($this);
                $this->calFixedToDate->Name = QApplication::Translate('To Date');
                $this->calFixedToDate->Width = 70;
                $this->lstOccuranceObject = new QSelect2ListBox($this);
                $this->lstOccuranceObject->Name = QApplication::Translate('Occurence');
                $this->lstOccuranceObject->Required = true;
                $this->lstOccuranceObject->AddItem("-Select One-",NULL);
                $occurances = Occurance::LoadAll();
                    foreach ($occurances as $occurance){
                $this->lstOccuranceObject->AddItem($occurance->Name,$occurance->Idoccurance);
                }

                // Create Buttons and Actions on this Form
                $this->btnSave = new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
                $this->btnSave->CausesValidation = $this;

                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

                $this->btnDelete = new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Event'))));
                $this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
                $this->btnDelete->Visible = FALSE;

                if($this->objEvent == 'new'){
                   $this->objEvent = new Event();
                   $this->strTitleVerb = "Add New Event";
                }else{
                   $this->btnDelete->Visible = TRUE;
                   $this->strTitleVerb = $this->objEvent->Name;
                   $this->txtName->Text = $this->objEvent->Name;
                   $this->txtColor->Text = $this->objEvent->Color;
                   $this->txtDescription->Text = $this->objEvent->Description;
                   $this->lstParrentObject->SelectedValue = $this->objEvent->Parrent;
                   $this->lstDepartmentObject->SelectedValue = $this->objEvent->Department;
                   $this->calFromDate->DateTime = $this->objEvent->FromDate;
                   $this->calFixedToDate->DateTime = $this->objEvent->FixedToDate ;
                   $this->lstOccuranceObject->SelectedValue = $this->objEvent->Occurance;
                }
            }

        // Control AjaxAction Event Handlers
            public function btnSave_Click($strFormId, $strControlId, $strParameter) {
                $this->objEvent->Name = $this->txtName->Text;
                $this->objEvent->Color = $this->txtColor->Text;
                $this->objEvent->Description = $this->txtDescription->Text;
                $this->objEvent->Parrent = $this->lstParrentObject->SelectedValue;
                $this->objEvent->Department = $this->lstDepartmentObject->SelectedValue;
                $this->objEvent->FromDate = $this->calFromDate->DateTime;
                $this->objEvent->FixedToDate = $this->calFixedToDate->DateTime;
                $this->objEvent->Occurance = $this->lstOccuranceObject->SelectedValue;
                $this->objEvent->Save();

                // And call the Form's Method CallBack, passing in "true" to state that we've made an update
                $strMethodCallBack = $this->strMethodCallBack;
                $this->objForm->$strMethodCallBack(true);

        }

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			$this->objEvent->Delete();
                        $strMethodCallBack = $this->strMethodCallBack;
                        $this->objForm->$strMethodCallBack(true);	 
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                            // Call the Form's Method CallBack, passing in "false" to state that we've made no changes
                            $strMethodCallBack = $this->strMethodCallBack;
                            $this->objForm->$strMethodCallBack(false);
		}

		

	}
?>