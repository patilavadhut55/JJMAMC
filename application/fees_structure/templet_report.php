<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $lstYear;
            protected $lstSemister;
            protected $arrCourse;
            protected $txtCourse;
            protected $btnShow;
            protected $lstCourse;
            protected $chkexam;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
            }

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    $this->chkexam = new QCheckBox($this);
                    $this->chkexam->Name = "Exam";
                    $this->chkexam->Width = 20;
                    $this->chkexam->Height = 20;
                    
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Course";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
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
                        $this->lstCourse->SelectedValue = $_GET['course'];
                        $this->lstSemister->SelectedValue = $_GET['semi'];
                       // $this->lstYear->SelectedValue = $_GET['year'];
                        
                    }
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    
                    
               }
               
                protected function Report(){
              
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/templet_report'.'.php?course='.$this->lstCourse->SelectedValue.'&semi='.$this->lstSemister->SelectedValue);
                
            }
           }  
	MemberListForm::Run('MemberListForm');
?>