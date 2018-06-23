<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $calfrom;
            protected $calto;
            protected $btnShow;
            protected $lstYear;
            protected $lstSemister;
            protected $lstadmission;

             protected $lstCourse;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
            }

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                       $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Course";
                    $this->lstCourse->AddItem("-Select One-", NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                    }
                    
                    
                    $this->calto = new QCalendar($this);
                    $this->calto->Name = "To";
                    $this->calto->Width = 150;
                    $this->calfrom = new QCalendar($this);
                    $this->calfrom->Name = "From";
                    $this->calfrom->Width = 150 ;
                   
                    if(isset($_GET['from'])) $this->calfrom->Text = Date('F d Y', strtotime($_GET['from']));
                    if(isset($_GET['to'])) $this->calto->Text = Date('F d Y', strtotime($_GET['to']));
                    if(isset($_GET['course'])){
                        $this->lstCourse->SelectedValue = $_GET['course'];
                    }
                    
                    $this->lstYear = new QListBox($this);
                    $this->lstYear->AddItem("-Select One-",NULL);
                    //year
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    $this->lstYear->Name = "Academic  Year";
                    $this->lstYear->Width = 180;
                    
                     if(isset($_GET['acdyear'])){
                         $this->lstYear->SelectedValue = $_GET['acdyear'];
                    }
                    //admission year
                    $this->lstadmission = new QListBox($this);
                    $this->lstadmission->AddItem("-Select One-",NULL);
                    //year
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstadmission->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    $this->lstadmission->Name = "Admission Year";
                    $this->lstadmission->Width = 180;
                    
                    
                    $this->lstSemister = new QListBox($this);
                    $this->lstSemister->Name = "Class";
                    $this->lstSemister->AddItem("-Select All-", NULL);
                    $sems = AcademicYear::LoadArrayByParrent(NULL);
                    foreach ($sems as $sem){
                        $this->lstSemister->AddItem($sem->Name, $sem->IdacademicYear);
                    }
                    $this->lstSemister->Width = 180;
                    
//                    if(isset($_GET['acdyear'])){
//                        $this->lstYear->SelectedValue = $_GET['acdyear'];
//                        $this->lstSemister->SelectedValue = $_GET['semi'];
//                        $this->lstadmission->SelectedValue = $_GET['addyear'];
//                    }
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Primary;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    
               }
               
                protected function Report(){
                       $parm = '';
                    
                    if($this->calfrom->Text != ""){
                        $parm = "?from=".date("Ymd",  strtotime($this->calfrom->Text));
                    }
                    
                    if($this->calfrom->Text != ""){
                        if($parm == ""){
                            $parm = "?to=".date("Ymd",  strtotime($this->calto->Text));
                        }else{
                            $parm .= "&to=".date("Ymd",  strtotime($this->calto->Text));
                        }
                    }
                    
                    if($this->lstCourse->SelectedValue != NULL){
                        if($parm == ""){
                            $parm = "?course=".$this->lstCourse->SelectedValue;
                        }else{
                            $parm .= "&course=".$this->lstCourse->SelectedValue;
                        }
                    }    
                    
                    if($this->lstYear->SelectedValue != Null){
                        if($parm == ""){
                            $parm = "?acdyear=".$this->lstYear->SelectedValue;
                        }else{
                            $parm .= "&acdyear=".$this->lstYear->SelectedValue;
                        }
                    }
                    
                    if($this->lstSemister->SelectedValue != NULL){
                        if($parm == ""){
                            $parm = "?semi=".$this->lstSemister->SelectedValue;
                        }else{
                            $parm .= "&semi=".$this->lstSemister->SelectedValue;
                        }
                    }
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/report/daily_fee_head_report.php'.$parm);
                    
            }
           }  
	MemberListForm::Run('MemberListForm');
?>