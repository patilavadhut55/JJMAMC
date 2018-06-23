<?php
	require('../../../qcubed.inc.php');
	
	class AdmittedReport extends QForm {
            protected $arrCourse;
            protected $txtCourse;
            protected $lstSemister;
            protected $lstYear;
            protected $btnShow;
            protected $btnBack;
            protected $lstAdmissionStatus;

            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


            protected function Form_Create() {
                parent::Form_Create();

                $this->txtCourse = new QListBox($this);
                $this->txtCourse->Name = "Course";
                $this->txtCourse->AddItem('-Select One-', NULL);
                $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                foreach ($progs as $prog){
                    $this->txtCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
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
                    $this->txtCourse->SelectedValue = $course->Idrole;
                    $this->lstSemister->SelectedValue = $_GET['semi'];
                    $this->lstYear->SelectedValue = $_GET['year'];
                    $this->lstAdmissionStatus->SelectedValue = $_GET['status'];

                }

                $this->btnShow = new QButton($this);
                $this->btnShow->Text = "Report";
                $this->btnShow->ButtonMode = QButtonMode::Success;
                $this->btnShow->AddAction(new QClickEvent(), new QServerAction('Report'));    

               
            }
            protected function Report(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/ccim_report.php?course='.$this->txtCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue.'&status='.$this->lstAdmissionStatus->SelectedValue);
            }
            
           
        }
	AdmittedReport::Run('AdmittedReport');
?>