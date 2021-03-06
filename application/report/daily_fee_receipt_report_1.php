<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $calfrom;
            protected $calto;
            protected $btnShow;
            protected $lstYear;
            protected $lstSemister;
            protected $lstadmission;

            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
            }

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    
                    $this->calto = new QCalendar($this);
                    $this->calto->Name = "To";
                    $this->calto->Width = 150;
                    $this->calfrom = new QCalendar($this);
                    $this->calfrom->Name = "From";
                    $this->calfrom->Width = 150 ;
                   
                    if(isset($_GET['from'])) $this->calfrom->Text = Date('F d Y', strtotime($_GET['from']));
                    if(isset($_GET['to'])) $this->calto->Text = Date('F d Y', strtotime($_GET['to']));

                    $this->lstYear = new QListBox($this);
                    $this->lstYear->AddItem("-Select One-",NULL);
                    //year
                    $years = CalenderYear::LoadAll();
                    foreach ($years as $year){
                        $this->lstYear->AddItem($year->Name, $year->IdcalenderYear);
                    }
                    $this->lstYear->Name = "Current Year";
                    $this->lstYear->Width = 180;
                    
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
                    
                    if(isset($_GET['acdyear'])){
                        $this->lstYear->SelectedValue = $_GET['acdyear'];
                        $this->lstSemister->SelectedValue = $_GET['semi'];
                        $this->lstadmission->SelectedValue = $_GET['addyear'];
                    }
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Primary;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    
               }
               
                protected function Report(){
                    if ($this->calfrom->Text != "" && $this->calto->Text != "" && $this->lstYear->SelectedValue == NULL && $this->lstSemister->SelectedValue == NULL && $this->lstadmission->SelectedValue == NULL) {
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/report/daily_fee_receipt_report'. '.php?from='.date("Ymd",  strtotime($this->calfrom->Text)).'&to='.date("Ymd",  strtotime($this->calto->Text)));
                    }
                    if ($this->calfrom->Text != "" && $this->calto->Text != "" && $this->lstYear->SelectedValue != NULL && $this->lstSemister->SelectedValue != NULL && $this->lstadmission->SelectedValue != NULL) {
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/report/daily_fee_receipt_report'. '.php?from='.date("Ymd",  strtotime($this->calfrom->Text)).'&to='.date("Ymd",  strtotime($this->calto->Text)).'&acdyear='.$this->lstYear->SelectedValue.'&semi='.$this->lstSemister->SelectedValue.'&addyear='.$this->lstadmission->SelectedValue);
                    }
                    
            }
           }  
	MemberListForm::Run('MemberListForm');
?>