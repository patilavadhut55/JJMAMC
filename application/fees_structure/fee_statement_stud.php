<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $lstYear;
            protected $lstSemister;
            protected $arrCourse;
            protected $txtCourse;
            protected $btnShow;
            protected $lstCourse;
            protected $lstCat;
            protected $calfrom;
            protected $calto;
            
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
            }

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Course";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                    }
                    
                    $this->lstCat = new QListBox($this);
                    $this->lstCat->Name = "Caste";
                    $this->lstCat->AddItem("-Select All-", NULL);
                    $category = FeesConcession:: LoadAll();
                    foreach ($category as $cat) {
                        $this->lstCat->AddItem($cat->Name, $cat->IdfeesConcession);
                        
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
                    $this->lstSemister->AddItem("-Select All-", NULL);
                    $sems = AcademicYear::LoadArrayByParrent(NULL);
                    foreach ($sems as $sem){
                        $this->lstSemister->AddItem($sem->Name, $sem->IdacademicYear);
                    }
                    
                    $this->calfrom = new QCalendar($this);
                    $this->calfrom->Name = "From";
                    $this->calfrom->Width = 280;
                    
                    $this->calto = new QCalendar($this);
                    $this->calto->Name = "To";
                    $this->calto->Width = 280;
                    
                    if(isset($_GET['from'])) $this->calfrom->Text = Date('F d Y', strtotime($_GET['from']));
                    if(isset($_GET['to'])) $this->calto->Text = Date('F d Y', strtotime($_GET['to']));
                
                    if(isset($_GET['course'])){
                        $this->lstCourse->SelectedValue = $_GET['course'];
                    }
                    if(isset($_GET['year'])){
                         $this->lstYear->SelectedValue = $_GET['year'];
                    }
                    if(isset($_GET['cat'])){
                        $this->lstCat->SelectedValue = $_GET['cat'];
                    }
                    if(isset($_GET['semi'])){
                        $this->lstSemister->SelectedValue = $_GET['semi'];
                    }

                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Success;
                    $this->btnShow->AddAction(new QClickEvent(), new QServerAction('Report'));    
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
                            $parm = "?year=".$this->lstYear->SelectedValue;
                        }else{
                            $parm .= "&year=".$this->lstYear->SelectedValue;
                        }
                    }
                    
                    if($this->lstSemister->SelectedValue != NULL){
                        if($parm == ""){
                            $parm = "?semi=".$this->lstSemister->SelectedValue;
                        }else{
                            $parm .= "&semi=".$this->lstSemister->SelectedValue;
                        }
                    }
                                  
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/fee_statement_stud.php'.$parm);
            }
           }  
	MemberListForm::Run('MemberListForm');
?>