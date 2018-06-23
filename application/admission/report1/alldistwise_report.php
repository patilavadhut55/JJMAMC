<?php
	require('../../../qcubed.inc.php');
	
	class AdmittedReport extends QForm {
            protected $lstCourse;
            protected $lstYear;
            protected $lstdist;
            protected $btnShow;
            protected $lstTal;




            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


		protected function Form_Create() {
                    parent::Form_Create();
                     
                     $this->lstTal = new QListBox($this);
                     $this->lstTal->Name = "taluka";
                     $this->lstTal->AddItem("-select All-", NULL);
                     
                     
                    $this->lstdist = new QListBox($this);
                    $this->lstdist->Name = "District";
                    $this->lstdist->AddItem('-Select One-', NULL);
                    $dists = Place::LoadArrayByParrent(2);
                    foreach ($dists as $dist){
                        $this->lstdist->AddItem($dist->Name,$dist->Idplace);
                    }
                    
                     $this->lstdist->AddAction(new QChangeEvent(), new QServerAction("lstdist_Click"));
                     if (isset($_GET['dist'])) {
                     $districts = Place::LoadByIdplace($_GET['dist']);
                     $this->lstdist->SelectedValue = $districts->Idplace;
                     $this->lstdist_Click();
                     }
                     if (isset($_GET['id'])) {
                      $talukas = Place::LoadByIdplace($_GET['id']);
                      $this->lstTal->SelectedValue = $talukas->Idplace;
                      } 
                     
                     
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
                    $this->lstYear->Name = "Academic Year";
                    $this->lstYear->AddItem("-Select One-",NULL);
                    //year
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    
                    if(isset($_GET['year'])){
                        $this->lstYear->SelectedValue = $_GET['year'];
                    }
                        
                   
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Success;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    

                    
            }
            
            protected function lstdist_click(){
              
               if($this->lstdist->SelectedValue != NULL){
               $taluka = Place::QueryArray(   
                        QQ::AndCondition(
                            QQ::Equal(QQN::Place()->Parrent, $this->lstdist->SelectedValue),
                            QQ::Equal(QQN::Place()->Grp,7)
                            )) ;               
                $this->lstTal->RemoveAllItems();        
                $this->lstTal->AddItem("-select All-", NULL);
                if ($taluka) {
                foreach ($taluka as $talukas) {
                $this->lstTal->AddItem($talukas->Name, $talukas->Idplace);
                }
                 }


                }
              }

            protected function Report(){
                if($this->lstdist->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL && $this->lstCourse->SelectedValue != NULL && $this->lstTal->SelectedValue != NULL){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report1/alldistwise_report.php?dept='.$this->lstCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&dist='.$this->lstdist->SelectedValue.'&id='.$this->lstTal->SelectedValue);
                }
                elseif ($this->lstdist->SelectedValue != NULL && $this->lstYear->SelectedValue != NULL && $this->lstCourse->SelectedValue != NULL) {
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/report1/alldistwise_report.php?dept='.$this->lstCourse->SelectedValue.'&year='.$this->lstYear->SelectedValue.'&dist='.$this->lstdist->SelectedValue);
               
               }  else {
                   
               }
            }
            
        
           
        }
	AdmittedReport::Run('AdmittedReport');
?>