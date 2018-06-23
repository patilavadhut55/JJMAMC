<?php
	require('../../../qcubed.inc.php');
	
	class AdmittedReport extends QForm {
            protected $arrCourse;
            protected $lstCourse;
            protected $lstSemister;
            protected $lstYear;
            protected $lstCity;
            protected $btnShow;
            protected $btnBack;
            protected $txtCourse;
            protected $lstCategory;
            protected $lstAdmissionStatus;
            protected $btnSynop;
            protected $txtRfidNo;
            protected $btnFind;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


		protected function Form_Create() {
                    parent::Form_Create();
                      
                    $this->lstCity = new QListBox($this);
                    $this->lstCity->Name = "District";
                    $this->lstCity->AddItem('-Select One-', NULL);
                    $citys = Place::LoadArrayByParrent(2);
                    foreach ($citys as $city){
                        $this->lstCity->AddItem($city->Name,$city->Idplace);
                    }
                  //  $this->lstCity->AddAction(new QChangeEvent(), new QServerAction('lstCity_change'));
                
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Department";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                    }
                    
                    $this->lstAdmissionStatus  = new QListBox($this);
                    $this->lstAdmissionStatus->Name = "Admission Status";
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
                    if(isset($_GET['semi'])) $this->lstSemister->SelectedValue = $_GET['semi'];
                    if(isset($_GET['year'])) $this->lstYear->SelectedValue = $_GET['year'];
                    if(isset($_GET['city'])) $this->lstCity->SelectedValue = $_GET['city'];
                      
                    if(isset($_GET['dept'])){ 
                        $this->lstCourse->SelectedValue = $_GET['dept'];  
                        $this->lstAdmissionStatus->SelectedValue = $_GET['status']; 
                        
                    }
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Success;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    

                    
            }

            protected function Report(){
                if($this->lstCity->SelectedValue != NULL){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/admitted_report.php?dept='.$this->lstCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue.'&status='.$this->lstAdmissionStatus->SelectedValue.'&city='.$this->lstCity->SelectedValue);
                }else{
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report/admitted_report.php?dept='.$this->lstCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue.'&status='.$this->lstAdmissionStatus->SelectedValue);
                }
            }
            
        
           
        }
	AdmittedReport::Run('AdmittedReport');
?>