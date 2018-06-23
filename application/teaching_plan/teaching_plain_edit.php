<?php
	require('../../qcubed.inc.php');

	class Teaching extends QForm {
            
            protected $lstCourse;
            protected $lstTeacher;
            protected $lstAcademicYear;
            protected $lstSubject;
            protected $calPlan;
            protected $calExecution; 
            protected $txtPlan;
            protected $txtReason;
            protected $calPospone;
            protected $lbledit;
            protected $btnSave;
       
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

            protected function Form_Create() {
                parent::Form_Create();
                    
                $this->lstTeacher = new QSelect2ListBox($this);
                $this->lstTeacher->Name = "Teaching Staff"; 
                $this->lstTeacher->AddItem('-Select Staff-',NULL);
                $teachers  = LoginHasRole::QueryArray(
                        QQ::OrCondition(
                            QQ::Equal(QQN::LoginHasRole()->RoleIdrole,800),
                            QQ::Equal(QQN::LoginHasRole()->RoleIdrole,799)
                        ),
                        QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin)
                        );
                        foreach ($teachers as $teacher) {
                            $this->lstTeacher->AddItem($teacher->LoginIdloginObject->IdloginObject->Name,$teacher->LoginIdlogin);
                            
                        }
                        
            
                $this->lstCourse = new QSelect2ListBox($this);
                $this->lstCourse->AddItem('-Select Course-',NULL);
                $roles = Role::LoadAll();
                foreach ($roles as $role) {
                    $this->lstCourse->AddItem($role->Name, $role->Idrole);
                }
                $this->lstCourse->Name = "Course";
                
                $this->lstAcademicYear = new QSelect2ListBox($this);
                $this->lstAcademicYear->Name = "Year";
                $this->lstAcademicYear->AddItem('-Select Year-',NULL);
                $years = CalenderYear:: LoadAll();
                foreach ($years as $year) {
                    $this->lstAcademicYear->AddItem($year->Name,$year->IdcalenderYear);
                    
                }
                
                $this->lstSubject = new QSelect2ListBox($this);
                $this->lstSubject->Name = "Subject";
                $this->lstSubject->AddItem('-Select Subject-',NULL);
                $Subjects = YearSubject::LoadAll();
                foreach ($Subjects as $Subject) {
                    $this->lstSubject->AddItem($Subject->SubjectObject->Name, $Subject->IdyearSubject);
                    
                }
                
                $this->txtPlan = new QTextBox($this);
                $this->txtPlan->Name = "Teaching Plan ";
                $this->txtPlan->TextMode = QTextMode::MultiLine;
                $this->txtPlan->Width = 800;
                $this->txtPlan->Height = 200;
                
                $this->txtReason = new QTextBox($this);
                $this->txtReason->Name = "Reason";
                $this->txtReason->Width = '100%';
               
                $this->calPlan = new QCalendar($this);
                $this->calPlan->DateTimeFormat = "dd/mm/yy";
                $this->calPlan->Text = date('d/m/Y',time());
                $this->calPlan->Name = "Planed Date";
                $this->calPlan->Width = 120;
                
                $this->calPospone = new QCalendar($this);
                $this->calPospone->DateTimeFormat = "dd/mm/yy";
                $this->calPospone->Name = "Pospone Date";
                $this->calPospone->Width = 150;
                $this->calPospone->AddAction(new QChangeEvent(), new QAjaxAction('calPospone_change'));
                
                $this->calExecution = new QCalendar($this);
                $this->calExecution->DateTimeFormat = "dd/mm/yy";
                $this->calExecution->Name = "Execution Date";
                $this->calExecution->Text = date('d/m/Y',time());
                $this->calExecution->Width = 120;
                
                $this->btnSave = new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
                
                if(isset($_GET['yearsubid'])){
                    $yearsub = YearSubject::LoadByIdyearSubject($_GET['yearsubid']);
                    $this->lstSubject->SelectedValue = $_GET['yearsubid'];
                    $this->lstCourse->SelectedValue = $yearsub->Course;
                  
                    $this->lstAcademicYear->SelectedValue = $_GET['yearid'];
                    $this->lstTeacher->SelectedValue = $_GET['staff'];
                    $this->calPlan->Text = date('d/m/Y',strtotime($_GET['cdate'])); 
                    $this->calExecution->Text = date('d/m/Y',strtotime($_GET['cdate'])); 
                    
                    
                    $this->lstAcademicYear->Enabled = FALSE;
                    $this->lstCourse->Enabled = FALSE;
                    $this->lstTeacher->Enabled = FALSE;
                    $this->lstSubject->Enabled = FALSE;
                    $this->calExecution->Enabled = FALSE;
                    $this->calPlan->Enabled = FALSE;
            
                    $techplan = TeachingPlain::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::TeachingPlain()->TimeSlot, $_GET['timeslot']),     
                                    QQ::Equal(QQN::TeachingPlain()->Course, $yearsub->Course),
                                    QQ::Equal(QQN::TeachingPlain()->YearlySubject, $_GET['yearsubid']),
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::TeachingPlain()->ExecutionDate, date('Y-d-m', strtotime($_GET['cdate']))),
                                        QQ::Equal(QQN::TeachingPlain()->PostponeDate, date('Y-d-m', strtotime($_GET['cdate'])))
                                    )
                                )
                            );
                    if($techplan){
                        foreach ($techplan as $tp){
                            $this->lbledit[$tp->IdteachingPlain] = new QLabel($this);
                            $this->lbledit[$tp->IdteachingPlain]->HtmlEntities = FALSE;
                            $this->lbledit[$tp->IdteachingPlain]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png  width=16  />";
                            $this->lbledit[$tp->IdteachingPlain]->ActionParameter = $tp->IdteachingPlain;
                            $this->lbledit[$tp->IdteachingPlain]->AddAction(new QClickEvent(), new QServerAction('lbledit_click'));
                        }
                    }

                }
                if(isset($_GET['id'])){
                    $tp = TeachingPlain::LoadByIdteachingPlain($_GET['id']);
                    $this->txtPlan->Text = $tp->Content;
                    $this->txtReason->Text = $tp->Reason;
                    if($tp->PostponeDate) $this->calPospone->Text = date('d/m/Y', strtotime($tp->PostponeDate));
                    
                }
            }
            protected function calPospone_change(){
                if(isset($_GET['yearsubid'])){
                    $yearsub = YearSubject::LoadByIdyearSubject($_GET['yearsubid']);
                    $timetables = Timetable::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Timetable()->TimeSlot, $_GET['timeslot']),     
                                    QQ::Equal(QQN::Timetable()->YearlySubjectObject->Course, $yearsub->Course),
                                    QQ::Equal(QQN::Timetable()->YearlySubject, $_GET['yearsubid']),
                                    QQ::Equal(QQN::Timetable()->Attendant, $_GET['staff'])
                                ));
                    if($timetables){
                        foreach($timetables as $timetable){}
                        $day = '';
                        if($this->calPospone->Text != ""){
                            $dtdate = explode("/", $this->calPospone->Text);
                            $date = date('Ymd', strtotime($dtdate[2].$dtdate[1].$dtdate[0]));
                        }else{
                            $date = "";
                        }
                        
                        if($timetable->Day == 1){
                           $day = 'Mon';
                        }
                        if($timetable->Day == 2){
                            $day = 'Tue';
                        }
                        if($timetable->Day == 3){
                            $day = 'Wed';
                        }
                        if($timetable->Day == 4){
                            $day = 'Thu';
                        }
                        if($timetable->Day == 5){
                            $day = 'Fri';
                        }
                        if($timetable->Day == 6){
                            $day = 'Sat';
                        }
                        if($timetable->Day == 7){
                            $day = 'Sun';
                        }
                        if($day != date('D', strtotime($date))){                            
                            QApplication::DisplayAlert('Sorry Period is not available for this date...');
                            $this->calPospone->Text = "";
                        }
                    }
                    
                }
            }
            protected function btnSave_Click(){
                if(isset($_GET['id'])){
                    $tp = TeachingPlain::LoadByIdTeachingPlain($_GET['id']);                  
                }else{
                    $tp = new TeachingPlain();                   
                }
                $tp->Teacher = $this->lstTeacher->SelectedValue ;
                $tp->Course = $this->lstCourse->SelectedValue;
                $tp->YearlySubject = $this->lstSubject->SelectedValue;
                $tp->CalendarYear = $this->lstAcademicYear->SelectedValue;
                $tp->Content = $this->txtPlan->Text;
                $tp->TimeSlot = $_GET['timeslot'];
                $tp->PlainedDate = QDateTime::FromTimestamp(strtotime($this->calPlan->Text));
                $tp->ExecutionDate = QDateTime::FromTimestamp(strtotime($this->calExecution->Text));
                if(isset($_GET['id'])){
                    $tp->PostponeDate = QDateTime::FromTimestamp(strtotime($this->calPospone->Text));
                    $tp->Reason = $this->txtReason->Text;
                }
                $tp->Save();
                if(isset($_GET['yearsubid'])){
                    $param = "?yearid=".$_GET['yearid']."&month=".$_GET['month']."&year=".$_GET['year']."&yearsubid=".$_GET['yearsubid']."&course=".$this->lstCourse->SelectedValue."&staff=".$_GET['staff'];
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/teaching_plan/teachingplanyearcal.php'.$param);
            }
            protected function lbledit_click($strFormId, $strControlId, $strParameter){
                if(isset($_GET['yearsubid'])){
                    $param = "?id=".$strParameter."&cdate=".$_GET['cdate']."&yearid=".$_GET['yearid']."&month=".$_GET['month']."&year=".$_GET['year']."&yearsubid=".$_GET['yearsubid']."&course=".$this->lstCourse->SelectedValue."&staff=".$_GET['staff']."&timeslot=".$_GET['timeslot'];
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/teaching_plan/teaching_plain_edit.php'.$param);
            }
        }


	Teaching::Run('Teaching');
?>