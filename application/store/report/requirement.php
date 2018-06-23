<?php 

  require('../../../qcubed.inc.php');
    
  class Documents extends QForm {
            protected $calfrom;
            protected $calto;
            protected $lststatus;
            Protected $Srchbtn;
            
     protected function Form_Run() {
	           parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		 }
                 protected function Form_Create() {
                     parent::Form_Create();
                        $this->calfrom = new QCalendar($this);
                        $this->calto = new QCalendar($this);
                        
                        $this->calfrom->Name = 'From';
                        $this->calto->Name = 'To';
                        
                        $this->calto->Width = 250;
                        $this->calfrom->Width = 250 ;
                       
                        
                          //List Box lstlststatus
                        $this->lststatus = new QListBox($this);
                        $this->lststatus->Name = 'Status';
                        $this->lststatus->Width = 200;
                        $this->lststatus->AddItem('-Select One-',0);
                        $this->lststatus->AddItem('Approved',1);
                        $this->lststatus->AddItem('InProcess',2);
                        $this->lststatus->AddItem('Closed',3);
                          
                         //Button Search
                        $this->Srchbtn = new QButton($this);
                        $this->Srchbtn->ButtonMode = QButtonMode::Success;
                        $this->Srchbtn->Text = 'Search';
//                        $this->Srchbtn->Height = 30;
                        
                        
                        if(isset($_GET['from'])){
                        $this->calfrom->Text = Date('M d Y', strtotime($_GET['from']));
                        $this->calto->Text = Date('M d Y', strtotime($_GET['to']));
                        $this->lststatus->SelectedValue = $_GET['status'];
                        }else{
                           //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/requirement.php?from='.date('Y').'0401&to='.date('Ymd').'&all=0');
                        }
                        
                        $this->Srchbtn->AddAction(new QClickEvent(), new QAjaxAction('Srchbtn_Click'));
                        //$this->chkDetail->AddAction(new QChangeEvent(), new QAjaxAction('calto_change'));
                }
                 protected function Srchbtn_Click(){
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/requirement.php?from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime.'&status='.$this->lststatus->SelectedValue);
                }
     
   }
   
   Documents::Run('Documents');
?>

