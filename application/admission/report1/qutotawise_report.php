<?php
	require('../../../qcubed.inc.php');
	
	class AdmittedReport extends QForm {
            protected $lstCourse;
            protected $lstYear;
            protected $btnShow;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


		protected function Form_Create() {
                    parent::Form_Create();
                     
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Department";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                    }
                     if(isset($_GET['dept'])){
                        $this->lstCourse->SelectedValue = $_GET['dept'];
                    }
                    
                    $this->lstYear = new QListBox($this);
                    $this->lstYear->AddItem("-Select One-",NULL);
                    //year
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    $this->lstYear->Name = "Academic Year";
                   
                    if(isset($_GET['cal'])){
                        $this->lstYear->SelectedValue = $_GET['cal'];
                    }
                        
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Success;
                    $this->btnShow->AddAction(new QClickEvent(), new QServerAction('Report'));    

                    
            }

            protected function Report(){
                if($this->lstYear->SelectedValue != NULL && $this->lstCourse->SelectedValue != NULL){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report1/qutotawise_report.php?dept='.$this->lstCourse->SelectedValue.'&cal='.$this->lstYear->SelectedValue);
                }else{
                    
                }
            }
            
        
           
        }
	AdmittedReport::Run('AdmittedReport');
?>