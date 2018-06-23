<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $btnShow;
            protected $lstCourse;
            protected $lstcast;
            
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
                    
                    $this->lstcast = new QListBox($this);
                    $this->lstcast->Name = "Cast";
                    $this->lstcast->AddItem("-Select Cast-", NULL);
                    $casts = FeesConcession::LoadAll();
                    foreach ($casts as $cast) {
                        $this->lstcast->AddItem($cast->Name, $cast->IdfeesConcession);
                    }
                    if(isset($_GET['course'])){
                        $this->lstCourse->SelectedValue = $_GET['course'];
                    }

                    if(isset($_GET['cast'])){
                            $this->lstcast->SelectedValue = $_GET['cast'];
                    }
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Primary;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    
            }
               
                protected function Report(){
                    if($this->lstCourse->SelectedValue != NULL && $this->lstcast->SelectedValue != NULL){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/fee_templet_report.php?course='.$this->lstCourse->SelectedValue.'&cast='.$this->lstcast->SelectedValue);
                    }  
                    elseif ($this->lstCourse->SelectedValue != NULL && $this->lstcast->SelectedValue == NULL){
                      QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/fee_templet_report.php?course='.$this->lstCourse->SelectedValue);
                    }    
                     
            }
           }  
	MemberListForm::Run('MemberListForm');
?>