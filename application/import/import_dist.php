<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    
    protected $lstDist;  
    protected $btnImport;
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
        
        $this->lstDist = new QSelect2ListBox($this);
        $this->lstDist->AddItem('Select Program', NULL);
        $places = Place::LoadArrayByGrp(3,(QQ::Clause(QQ::OrderBy(QQN::Place()->Name))));
        foreach ($places as $place)
            $this->lstDist->AddItem(delete_all_between("[","]",$place->Name), $place->Idplace);        
  
        if(isset($_GET['dist']) ){
            $this->lstDist->SelectedValue = $_GET['dist'];
        }
    }
    protected function btnImport_Click(){
        if($this->lstDist->SelectedValue != NULL ){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/import/import_tal.php?dist=".$this->lstDist->SelectedValue);
        }
    }
}
DayEditForm::Run('DayEditForm');
?>