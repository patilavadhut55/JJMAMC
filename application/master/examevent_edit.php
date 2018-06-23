<?php
    require('../../qcubed.inc.php');
    class ExamEventEditForm extends QForm {
        protected $lstEvent; 
        protected $lstExam;
        protected $btnSave;
        protected $btnCancel;  
        protected $lblEdit; 
        protected $lbldelete;
        
        protected function Form_Run() {
            parent::Form_Run();
                // Security check for ALLOW_REMOTE_ADMIN
                // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
            QApplication::CheckRemoteAdmin();
        }

//     protected function Form_Load() {}

        protected function Form_Create() {
            parent::Form_Create();
             //controls  
            $this->lstEvent = new QSelect2ListBox($this);
            $this->lstEvent->Name = "Event";
            $this->lstEvent->AddItem("-Select Event-",NULL);
            $events = Event::LoadArrayByParrent(55);
            $this->lstEvent->Width =300;
            foreach($events as $event){
                $this->lstEvent->AddItem($event->Name,$event->Idevent);
            }
            $this->lstEvent->AddAction(new QClickEvent(),new QServerAction('lstevent_click'));
         
            $this->lstExam = new QSelect2ListBox($this);
            $this->lstExam->Name ="Exam";
            $this->lstExam->AddItem("-Select Exam-",NULL);
            $exams = Exam::LoadAll();
            foreach ($exams as $exam){
                $this->lstExam->AddItem($exam->Name,$exam->Idexam);
            }
            if(isset($_GET['event'])){
                $this->lstEvent->SelectedValue = $_GET['event'];
            }
            //Delete 
            if(isset($_GET['event'])){
               $exams = ExamHasEventtemplet::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::ExamHasEventtemplet()->Eventtemplet,$_GET['event']))
                       );
                if($exams){
                foreach($exams as $exam){
                    $this->lbldelete[$exam->IdexamHasEventtemplet] = new QLabel($this);
                    $this->lbldelete[$exam->IdexamHasEventtemplet]->HtmlEntities = FALSE;
                    $this->lbldelete[$exam->IdexamHasEventtemplet]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                  //$this->lbldelete[$exam->IdexamHasEventtemplet]->ButtonMode = QButtonMode::Danger;
                    $this->lbldelete[$exam->IdexamHasEventtemplet]->AddAction(new QClickEvent(), new QServerAction('lbldelete_click'));
                    $this->lbldelete[$exam->IdexamHasEventtemplet]->ActionParameter = $exam->IdexamHasEventtemplet;
                    $this->lbldelete[$exam->IdexamHasEventtemplet]->ToolTip = QApplication::Translate('Delete');
                }
                }
            }
           
            //Buttons
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Add;
            $this->btnSave->AddAction(new QClickEvent(),new QServerAction('btnSave_Click'));
            $this->btnSave->CausesValidation = TRUE;

            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('btnCancel_Click'));
        }
        
        //Save for Events
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                $event = new ExamHasEventtemplet();
                $event->Exam = $this->lstExam->SelectedValue;
                $event->Eventtemplet = $_GET['event'];
                $event->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/examevent_edit.php?event='.$this->lstEvent->SelectedValue);
        }

        public function lbldelete_click($strFormId, $strControlId, $strParameter) {
                $subjects = ExamHasEventtemplet::LoadArrayByEventtemplet($_GET['event']);
                foreach ($subjects as $subject){}
                    $subject->Delete(); 
        }

        protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
               // $this->RedirectToListPage();
        }
        // Other Methods

        protected function lstevent_click($strFormId, $strControlId, $strParameter) {
          QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/examevent_edit.php?event='.$this->lstEvent->SelectedValue);
          // QApplication::DisplayAlert($this->lstEvent->SelectedValue);
        }
    }

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// dept_year_events_edit.tpl.php as the included HTML template file
	ExamEventEditForm::Run('ExamEventEditForm');
?>