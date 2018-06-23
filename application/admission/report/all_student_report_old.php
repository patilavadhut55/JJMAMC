<?php
	require('../../../qcubed.inc.php');
	
	class AdmittedReport extends QForm {
            protected $arrCourse;
            protected $lstCourse;
            protected $lstSemister;
            protected $lstYear;
            protected $lstAdmissionStatus;
            protected $btnShow;
            protected $btnBack;
            protected $txtCourse;

            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


            protected function Form_Create() {
                parent::Form_Create();

                $this->lstCourse = new QListBox($this);
                $this->lstCourse->Name = "Course";
                $this->lstCourse->AddItem('-Select One-', NULL);
                $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                foreach ($progs as $prog){
                    $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                }
                
                $this->lstAdmissionStatus  = new QListBox($this);
                $this->lstAdmissionStatus->Name = "Course";
                $this->lstAdmissionStatus->AddItem('-Select One-', NULL);
                $status = AdmissionStatus::LoadAll();
                foreach ($status as $statu){
                    $this->lstAdmissionStatus->AddItem($statu->Name,$statu->IdadmissionStatus);
                }
                $this->lstYear = new QListBox($this);
                $this->lstYear->AddItem("-Select One-",NULL);
                //year
                $years = CalenderYear::LoadAll();
                foreach ($years as $year){
                    $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                }
                $this->lstYear->Name = "Academic Year";

                $this->lstSemister = new QListBox($this);
                $this->lstSemister->Name = "Year";
                $this->lstSemister->AddItem("-Select One-", NULL);
                $sems = AcademicYear::LoadArrayByParrent(NULL);
                foreach ($sems as $sem){
                    $this->lstSemister->AddItem($sem->Name, $sem->IdacademicYear);
                }
                if(isset($_GET['course'])){
                    $course = Role::LoadByIdrole($_GET['course']);
                    $this->lstCourse->SelectedValue = $course->Idrole;
                    $this->lstSemister->SelectedValue = $_GET['semi'];
                    $this->lstYear->SelectedValue = $_GET['year'];
                    $this->lstAdmissionStatus->SelectedValue = $_GET['status'];

                }

                $this->btnShow = new QButton($this);
                $this->btnShow->Text = "Report";
                $this->btnShow->ButtonMode = QButtonMode::Success;
                $this->btnShow->AddAction(new QClickEvent(), new QServerAction('Report'));    

                $this->btnBack = new QButton($this);
                $this->btnBack->Text = "Ok";
                $this->btnBack->Visible = FALSE; 
                $this->btnBack->AddAction(new QClickEvent(), new QServerAction('Back'));    
                if(isset($_GET['merit'])){
                    $this->btnBack->Visible = TRUE; 
                }
            }
            
            protected function Report(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/all_student_report.php?course='.$this->lstCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue.'&status='.$this->lstAdmissionStatus->SelectedValue);
            }
            protected function Back(){
                $course = array_search($this->lstCourse->Text, $this->arrCourse);
                if($course)
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/merit_list.php?course='.$this->lstCourse->SelectedValue.'&year='.$_GET['year']);
                else
                    QApplication::DisplayAlert ("Invalid Programm");    
            }
           
        }
	AdmittedReport::Run('AdmittedReport');
?>