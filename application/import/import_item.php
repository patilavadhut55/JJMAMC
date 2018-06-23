<?php
require('../../qcubed.inc.php');

class DayEditForm extends QForm {
    
    protected $btnAppliedExam;
    protected $lstProgram;
    protected $lstCode;
    protected $lstsem;
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
        
      
        $this->lstsem = new QSelect2ListBox($this);
        $this->lstsem->AddItem("-Stock Group-", NULL); 
        $this->lstsem->AddAction(new QClickEvent(), new QAjaxAction('lstProgram_Change'));
        $acads = StockGrp::LoadAll();
                    
        foreach ($acads as $acad){
            $this->lstsem->AddItem($acad->Name, $acad->IdstockGrp); 
        }
        
       
        if(isset($_GET['grp'])){
            $this->lstsem->SelectedValue = $_GET['grp'];
            
           
        }
    }
    
    
    protected function btnReport_Click(){
        if(  $this->lstsem->SelectedValue != NULL ){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/import/import_item.php?grp=".$this->lstsem->SelectedValue);
        }
    }
    
    protected function btnImport_Click(){
        if(isset($_GET['grp'])){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/import/import_item_list.php?&sem=".$_GET['grp']);
        }
    }

}
DayEditForm::Run('DayEditForm');
?>