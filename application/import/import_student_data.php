<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    
    protected $btnAppliedExam;
    protected $lstCalender;
    protected $lstRoles;
    protected $lstProgram;
    protected $lstCode;
    protected $lstsem;
    protected $lstAdmissionstatus;
    protected $btnImport;
    protected $lstSpecialization;
    protected $lblLabel;
    protected $lblLabel1;
    protected $btnReport;
    

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
        $this->btnReport = new QButton($this);
        $this->btnReport->ButtonMode = QButtonMode::Success;
        $this->btnReport->Text = 'Report  <i class="fa fa-file-code-o"></i>';
        $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
   
        $this->btnImport = new QButton($this);
        $this->btnImport->ButtonMode = QButtonMode::Danger;
        $this->btnImport->Text = 'Import <i class="fa fa-upload"></i>';
        $this->btnImport->AddAction(new QClickEvent(), new QServerAction('btnImport_Click'));
        
        $this->lstCalender = new QSelect2ListBox($this);
        $this->lstCalender->AddItem("-Select Calender-", NULL);
        $this->lstCalender->Name = "Year";
        $calenders = CalenderYear::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CalenderYear()->Visible, 1)),
                        (QQ::OrderBy(QQN::CalenderYear()->Name,False)));
            foreach ($calenders as $calender) {
               $this->lstCalender->AddItem($calender->Name, $calender->IdcalenderYear);    
                if($calender->Active == 1){
                    $this->lstCalender->SelectedValue = $calender->IdcalenderYear;
                }
            }
         
        $this->lstRoles = new QSelect2ListBox($this);
        $this->lstRoles->AddItem('Select Program', NULL);
        $this->lstRoles->Width = 100;
        $this->lstRoles->Name = "Program";
        $Roles = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
        foreach ($Roles as $Role)
            $this->lstRoles->AddItem(delete_all_between("[","]",$Role->Name), $Role->Idrole);        
  
        $this->lstsem = new QSelect2ListBox($this);
        $this->lstsem->AddItem("-Select Semister-", NULL); 
        $this->lstsem->AddAction(new QClickEvent(), new QAjaxAction('lstProgram_Change'));
        $acads = AcademicYear::QueryArray(
                    QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                );
        
        foreach ($acads as $acad){
            $this->lstsem->AddItem($acad->Name, $acad->IdacademicYear); 
        }
        
        $this->lstAdmissionstatus = new QSelect2ListBox($this);
        $this->lstAdmissionstatus->AddItem("-Select Admission Status-", NULL); 
        $status = AdmissionStatus::LoadAll();
        foreach ($status as $statu){
            $this->lstAdmissionstatus->AddItem($statu->Name, $statu->IdadmissionStatus); 
        }
        
        $this->lstCalender->Width = $this->lstRoles->Width = '100%';

        
        if(isset($_GET['cal']) && isset($_GET['dept'])){
            $this->lstCalender->SelectedValue = $_GET['cal'];
            $this->lstRoles->SelectedValue = $_GET['dept'];
            $this->lstsem->SelectedValue = $_GET['semester'];
            $this->lstAdmissionstatus->SelectedValue = $_GET['status'];   
            
           
        }
    }
    
    
    protected function btnReport_Click(){
        if($this->lstCalender->SelectedValue != NULL && $this->lstRoles->SelectedValue != NULL && $this->lstsem->SelectedValue != NULL && $this->lstAdmissionstatus->SelectedValue != NULL){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/import/import_student_data.php?cal=".$this->lstCalender->SelectedValue."&dept=".$this->lstRoles->SelectedValue."&semester=".$this->lstsem->SelectedValue."&status=".$this->lstAdmissionstatus->SelectedValue);
        }
    }
    
    protected function btnImport_Click(){
        if(isset($_GET['cal']) && isset($_GET['dept']) && isset($_GET['semester'])){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/import/import_student.php?cal=".$_GET['cal']."&dept=".$_GET['dept']."&sem=".$_GET['semester']."&status=".$_GET['status']);
        }
    }

}
DayEditForm::Run('DayEditForm');
?>