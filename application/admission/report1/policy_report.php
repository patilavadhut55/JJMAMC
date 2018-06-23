<?php
	require('../../../qcubed.inc.php');
	
	class AdmittedReport extends QForm {
          
           
            protected $lstSemister;
            protected $lstYear;
            protected $btnShow;
          
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


		protected function Form_Create() {
                    parent::Form_Create();
                      
                     
                      
                    $this->lstYear = new QListBox($this);
                    $this->lstYear->AddItem("-Select One-",NULL);
                    //year
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    $this->lstYear->Name = "Academic Year";
                    if(isset($_GET['year'])){
                        $this->lstYear->SelectedValue = $_GET['year'];
                    }
                    
                    
                    $this->lstSemister = new QListBox($this);
                    $this->lstSemister->Name = "Year";
                    $this->lstSemister->AddItem("-Select One-", NULL);
                    $sems = AcademicYear::LoadArrayByParrent(NULL);
                    foreach ($sems as $sem){
                        $this->lstSemister->AddItem($sem->Name, $sem->IdacademicYear);
                    }
                     if(isset($_GET['semi'])){
                        $this->lstSemister->SelectedValue = $_GET['semi'];
                    }
                    
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Success;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    

                    
            }
            
            
       

            protected function Report(){
                if($this->lstSemister->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report1/policy_report.php?year='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue);
                }else{
                    }
            }
            
        
           
        }
	AdmittedReport::Run('AdmittedReport');
?>