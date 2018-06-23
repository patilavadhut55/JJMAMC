<?php
    require('../../qcubed.inc.php');
 
    class TimeSlotEditForm extends QForm {
	protected $lstCourse;
        protected $lstYear;
        protected $lstSubject;
     
        protected $btnAdd;
        protected $btnSearch;

        protected function Form_Run() {
            parent::Form_Run();
            
            QApplication::CheckRemoteAdmin();
        }
	protected function Form_Create() {
            parent::Form_Create();
            
            //List Box
            $this->lstCourse = new QSelect2ListBox($this);
            $this->lstCourse->AddItem('Select Course');
            $Roles = Role::LoadAll();
            foreach ($Roles as $Role){
                $this->lstCourse->AddItem(delete_all_between ('[', ']', $Role->Name), $Role->Idrole);
            }
            
            $this->lstYear= new QSelect2ListBox($this);
            $this->lstYear->AddItem('Select Year');
            $years = AcademicYear::LoadAll();
            foreach ($years as $year){
                $this->lstYear->AddItem($year->Name, $year->IdacademicYear);
            }
            
            $this->lstSubject = new QSelect2ListBox($this);
            $this->lstSubject->AddItem('Select Subject');
            $subjects = Subject::LoadAll();
            foreach ($subjects as $subject) {
                
                   $this->lstSubject->AddItem($subject->Name, $subject->Idsubject);
            }
          
           
             
            //Buttons
            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
            
            $this->btnSearch = new QButton($this);
            $this->btnSearch ->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "Search";
            $this->btnSearch ->AddAction(new QClickEvent(), new QServerAction("btnSearch_Click"));
            
            if (isset($_GET['dept']) && isset($_GET['year'])) {
                $this->lstCourse->SelectedValue = $_GET['dept'];
                $this->lstYear->SelectedValue = $_GET['year'];
                $years = YearSubject::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::YearSubject()->Course, $_GET['dept']),
                                QQ::Equal(QQN::YearSubject()->Semester, $_GET['year']), QQ::Equal(QQN::YearSubject()->Subject, $this->lstSubject->SelectedValue)
                ));
                if ($years){
                    foreach ($years as $year) {
                        $this->lstSubject->SelectedValue = $year->Subject;
                        $this->lstCourse->SelectedValue = $year->Course;
                        $this->lstYear->SelectedValue = $year->Semester;
                    }
                }
            }
        }
        
        //save
        protected function btnAdd_Click($strFormId, $strControlId, $strParameter) {

        if ($this->lstCourse->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL) {
            $years = YearSubject::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::YearSubject()->Course, $_GET['dept']), 
                                    QQ::Equal(QQN::YearSubject()->Semester, $_GET['year']), 
                                    QQ::Equal(QQN::YearSubject()->Subject, $this->lstSubject->SelectedValue)
            ));

            if ($years) {
                foreach ($years as $year) {
                   
                }
            
            }else {
                $year = new YearSubject();
            }
             $year->Subject = $this->lstSubject->SelectedValue;
             $year->Course = $this->lstCourse->SelectedValue;
             $year->Semester = $this->lstYear->SelectedValue;
            
            $year->Save();
          //  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/timetable/yearsubject.php?dept=' . $this->lstCourse->SelectedValue . '&year=' . $this->lstYear->SelectedValue);
        }
    }

    protected function btnSearch_Click($strFormId, $strControlId, $strParameter) {
            if($this->lstCourse->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL){
               QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/timetable/yearsubject.php?dept='.$this->lstCourse->SelectedValue .'&year='.$this->lstYear->SelectedValue);
            }
        }
    }
    
 TimeSlotEditForm::Run('TimeSlotEditForm');
?>