<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    protected $btnReport;
    protected $lstCalender;
    protected $lstRoles;
    protected $lblAdd;
    protected $semister;
    protected $acads;
    protected $lstSpecialization;
    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create(){
        
        $this->btnReport = new QButton($this);
        $this->btnReport->ButtonMode = QButtonMode::Success;
        $this->btnReport->Text = 'Submit';
        $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
     
        $this->lstCalender = new QSelect2ListBox($this);
        $this->lstCalender->AddItem("-Select Academic Year-", NULL);
        $calenders =  CalenderYear::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::CalenderYear()->Visible, 1)),
                        (QQ::OrderBy(QQN::CalenderYear()->Name,False)));
         foreach ($calenders as $calender) {
            $this->lstCalender->AddItem($calender->Name, $calender->IdcalenderYear); 
            if($this->lstCalender->SelectedValue == NULL){
                if(date('Y') == date('Y',  strtotime($calender->From))){
                    $this->lstCalender->SelectedValue = $calender->IdcalenderYear; 
                }
            }
            if($calender->Active == 1){
                $this->lstCalender->SelectedValue = $calender->IdcalenderYear;
            }
        }
          
        
        $this->lstRoles = new QSelect2ListBox($this);
        $this->lstRoles->AddItem('Select Program', NULL);
        $Roles = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
        foreach ($Roles as $Role)
            $this->lstRoles->AddItem(delete_all_between('[', ']', $Role->Name), $Role->Idrole);
        $this->lstRoles->AddAction(new QClickEvent(), new QAjaxAction('lstRoles_Change'));
        $this->lstCalender->Width = $this->lstRoles->Width  = '100%';
      

        if(isset($_GET['cal']) && isset($_GET['dept'])){
            $this->lstCalender->SelectedValue = $_GET['cal'];
            $this->lstRoles->SelectedValue = $_GET['dept'];
            
            $sems = AcademicYear::QueryArray(QQ::Equal(QQN::AcademicYear()->Parrent, NULL));
            foreach($sems as $sem){
                $this->lblAdd[$sem->IdacademicYear] = new QLabel($this);
                $this->lblAdd[$sem->IdacademicYear]->HtmlEntities = FALSE;
                $this->lblAdd[$sem->IdacademicYear]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/view1.png  width=20  />View ";
                $this->lblAdd[$sem->IdacademicYear]->ActionParameter = $sem->IdacademicYear;
                $this->lblAdd[$sem->IdacademicYear]->AddAction(new QClickEvent(), new QAjaxAction('lblAdd_click'));
                $this->lblAdd[$sem->IdacademicYear]->ToolTip = "View Timetable";
            }
            
            
        }
    }   
    protected function lblAdd_click($strFormId, $strControlId, $strParameter){
        if(isset($_GET['cal'])){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/timetable/timetable.php?cal=".$_GET['cal']."&dept=".$_GET['dept']."&sem=".$strParameter);
        
        }
    }
    protected function btnReport_Click(){
        if($this->lstCalender->SelectedValue != NULL && $this->lstRoles->SelectedValue != NULL) {
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/timetable/timetable_list.php?cal=".$this->lstCalender->SelectedValue."&dept=".$this->lstRoles->SelectedValue);
        }
      
    }
  
}

DayEditForm::Run('DayEditForm');
?>