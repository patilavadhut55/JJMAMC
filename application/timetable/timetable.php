<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    protected $btnReport;
    protected $pnlPanel;
    protected $lstCalender;
    protected $lstRoles;
    protected $btnSave;
    protected $btnCancel;
    protected $lblAdd;
    protected $lbledit;
    protected $semister;
    protected $acads;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
       
        $this->btnCancel = new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
      
       
        
        if(isset($_GET['cal']) && isset($_GET['dept'])){
            $times = ProgramHasTimeslot::LoadArrayByRole($_GET['dept']);
            foreach ($times as $time){
                $weekdays = array(1=>'Monday', 2=>'Tuesday', 3=>'Wednesday',4=>'Thursday',5=>'Friday',6=>'Saturday',7=>'Sunday');
                
                foreach($weekdays as $key => $value){
                    
                    $this->lblAdd[$time->TimeSlot.$key] = new QLabel($this);
                    $this->lblAdd[$time->TimeSlot.$key]->HtmlEntities = FALSE;
                    $this->lblAdd[$time->TimeSlot.$key]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/plus.png  width=20  />";
                    $this->lblAdd[$time->TimeSlot.$key]->ActionParameter = $time->TimeSlot.','.$key;
                    $this->lblAdd[$time->TimeSlot.$key]->AddAction(new QClickEvent(), new QServerAction('lblAdd_click'));

                    $timetables = Timetable::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Timetable()->TimeSlot,$time->TimeSlot),
                                QQ::Equal(QQN::Timetable()->Day, $key),
                                QQ::Equal(QQN::Timetable()->YearlySubjectObject->Course, $_GET['dept']),
                                QQ::Equal(QQN::Timetable()->YearlySubjectObject->Semester, $_GET['sem'])
                                ));
                    if($timetables){
                        foreach ($timetables as $timetable){
                        $this->lbledit[$timetable->Idtimetable] = new QLabel($this);
                        $this->lbledit[$timetable->Idtimetable]->HtmlEntities = FALSE;
                        $this->lbledit[$timetable->Idtimetable]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png  width=16  />";
                        $this->lbledit[$timetable->Idtimetable]->ActionParameter = $time->TimeSlot.','.$key.','.$timetable->Idtimetable;
                        $this->lbledit[$timetable->Idtimetable]->AddAction(new QClickEvent(), new QServerAction('lbledit_click'));

                        }
                    }
                }
            }
        }
        
                    
    }   
    protected function lblAdd_click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['cal'])){
            $data = explode(',', $strParameter);
            $ids = $_GET['cal'].','.$_GET['dept'].','.$_GET['sem'].','.$data[0].','.$data[1];
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/timetable/timetable_add.php?id=".$ids);
        }
        
    }
    protected function lbledit_click($strFormId, $strControlId, $strParameter){
       if(isset($_GET['cal'])){
            $data = explode(',', $strParameter);
            $ids = $_GET['cal'].','.$_GET['dept'].','.$_GET['sem'].','.$data[0].','.$data[1].','.$data[2];
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/timetable/timetable_add.php?id=".$ids);
            
       }
    }
    protected function btnCancel_Click(){
        QApplication::ExecuteJavaScript("showdialog('".$_GET['cal']."')");
     }

}

DayEditForm::Run('DayEditForm');
?>