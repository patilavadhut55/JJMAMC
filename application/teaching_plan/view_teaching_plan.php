<?php
	require('../../qcubed.inc.php');
	class ViewTeachingPlan extends QForm {
            protected $lstYear;
            protected function Form_Run() {
                parent::Form_Run();

		QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                $this->lstYear = new QListBox($this);
                $this->lstYear->Name = "Year";
                $this->lstYear->AddItem("- Select -",NULL);
                $years = HierarchyHasSemister::LoadArrayByHierarchy($_GET['course']);
                foreach ($years as $year){
                    $this->lstYear->AddItem($year->SemisterObject->Name,$year->Semister);
                }
                
                if(isset($_GET['year'])){
                    $this->lstYear->SelectedValue = $_GET['year'];
                }
                $this->lstYear->AddAction(new QChangeEvent(), new QServerAction("lstYear_Change"));
            }           
            
            protected function lstYear_Change(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/teaching_plan/view_teaching_plan.php?course='.$_GET['course'].'&year='.$this->lstYear->SelectedValue);
            }
        }   
        
        ViewTeachingPlan::Run('ViewTeachingPlan');
?>