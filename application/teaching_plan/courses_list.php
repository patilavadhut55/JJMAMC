<?php
	require('../../qcubed.inc.php');
	class Addsubject extends QForm {
            protected $btnReport;
            protected $lstCalender;
            
            protected function Form_Run() {
                parent::Form_Run();

		QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->lstCalender = new QSelect2ListBox($this);
                $this->lstCalender->AddItem("-Select Academic Year-", NULL);
                $calenders =  CalenderYear::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::CalenderYear()->Visible, 1)),
                                (QQ::OrderBy(QQN::CalenderYear()->Name,False)));
                 foreach ($calenders as $calender) {
                    $this->lstCalender->AddItem($calender->Name, $calender->IdcalenderYear); 
                    if($calender->Active == 1){
                        $this->lstCalender->SelectedValue = $calender->IdcalenderYear;
                    }
                }
                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = 'Report';
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
                
                if(isset($_GET['cal'])) $this->lstCalender->SelectedValue = $_GET['cal'];
            }
            
            protected function btnReport_Click(){
                if($this->lstCalender->SelectedValue != NULL) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/teaching_plan/courses_list.php?cal=".$this->lstCalender->SelectedValue);
                }
            }
            
        }
        Addsubject::Run('Addsubject');
?>