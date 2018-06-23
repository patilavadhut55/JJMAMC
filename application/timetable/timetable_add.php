<?php
require('../../qcubed.inc.php');

class TimetableAddForm extends QForm {
    protected $lstYearSubject;
    protected $txtDay;
    protected $lstTimeSlot;
    protected $lstAttendant;
    protected $txtNote;
    protected $btnSave;
    protected $btnCancel;
    protected $btnDelete;
    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
        $this->lstYearSubject = new QSelect2ListBox($this);
        $this->lstYearSubject->Name = "Subject";
        $this->lstYearSubject->AddItem('-Select One-',NULL);
        $this->lstYearSubject->Required = TRUE;
        $this->lstYearSubject->AddAction(new QClickEvent(), new QServerAction('lstYearSubject_Click'));
        
        $this->lstAttendant = new QSelect2ListBox($this);
        $this->lstAttendant->AddItem('-Select One-',NULL);
        $this->lstAttendant->Name = "Attendant";
          
        $this->txtNote = new QTextBox($this);
        $this->txtNote->Name = "Note";
        $this->txtNote->TextMode = QTextMode::MultiLine;

        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->AddAction(new QClickEvent(),new QServerAction('btnSave_Click'));
        $this->btnSave->CausesValidation = TRUE;
       
        $this->btnCancel = new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_click'));
       
        $this->btnDelete = new QButton($this);
        $this->btnDelete->ButtonMode = QButtonMode::Delete;
        $this->btnDelete->Visible = FALSE;
        $this->btnDelete->AddAction(new QClickEvent(),new QServerAction('btnDelete_Click'));
       
        $count = 0;
        if(isset($_GET['id'])){
             
            $data = explode(',', $_GET['id']);
            foreach($data as $cnt){
                $count++;
            }
            
            $subs = YearSubject::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::YearSubject()->Course, $data[1]),
                            QQ::Equal(QQN::YearSubject()->Semester, $data[2])
                        ));
                foreach ($subs as $sub){
                    $this->lstYearSubject->AddItem($sub->SubjectObject->Name,$sub->IdyearSubject);
                }
               
                
            if($count > 5){    
                $timetable = Timetable::LoadByIdtimetable($data[5]);
                if($timetable){
                    $this->btnDelete->Visible = TRUE;
                    $this->lstYearSubject->SelectedValue = $timetable->YearlySubject;
                    $this->lstYearSubject_Click();
                    if($timetable->Attendant != NULL)
                    $this->lstAttendant->SelectedValue = $timetable->Attendant;
                    $this->txtNote->Text = $timetable->Note;
                }
            }
        }
    
       
    }
    protected function lstYearSubject_Click(){
        if($this->lstYearSubject->SelectedValues != NULL){
            $this->lstAttendant->RemoveAllItems();
            $teachers = SubjectTought::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::SubjectTought()->Subject, $this->lstYearSubject->SelectedValue)
                        )); 
                foreach ($teachers as $teacher ){
                    $this->lstAttendant->AddItem($teacher->LoginObject->IdloginObject->Name, $teacher->LoginObject->Idlogin);
                }
        }
    }

    protected function btnSave_Click($strFormId, $strControlId, $strParameter){
        $count = 0;
        if(isset($_GET['id'])){
        $data = explode(',', $_GET['id']);
            foreach($data as $cnt){
                $count++;
            }
            if($count > 5){
                $timetable = Timetable::LoadByIdtimetable($data[5]);
            }else{
                $timetables = Timetable::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Timetable()->YearlySubject,$this->lstYearSubject->SelectedValue),
                                        QQ::Equal(QQN::Timetable()->TimeSlot,  $data[3])
                                    ));
                if($timetables){
                    foreach($timetables as $timetable){}
                }else{
                    $timetable = new Timetable();
                }
            }    
                $timetable->Day = $data[4];
                $timetable->TimeSlot = $data[3];
                $timetable->YearlySubject = $this->lstYearSubject->SelectedValue;
                $timetable->Attendant = $this->lstAttendant->SelectedValue;
                $timetable->Note = $this->txtNote->Text;
                $timetable->Save();
                
            $dept = Role::LoadByIdrole($data[1]);    
            if($dept)
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/timetable/timetable.php?cal='.$data[0].'&dept='.$data[1].'&sem='.$data[2]);
   
        }
      }  
    
    protected function btnDelete_Click(){
        if(isset($_GET['id'])){
         $data = explode(',', $_GET['id']);
          $timetable = Timetable::LoadByIdtimetable($data[5]);
          $timetable->Delete();
         $dept = Role::LoadByIdrole($data[1]);    
            if($dept)
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/timetable/timetable.php?cal='.$data[0].'&dept='.$data[1].'&sem='.$data[2]);
        }
    }
    protected function btnCancel_Click(){
        if(isset($_GET['id'])){
        $data = explode(',', $_GET['id']);
         $dept = Role::LoadByIdrole($data[1]);    
            if($dept)
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/timetable/timetable.php?cal='.$data[0].'&dept='.$data[1].'&sem='.$data[2]);
      }
    }
    
}
TimetableAddForm::Run('TimetableAddForm');
?>
