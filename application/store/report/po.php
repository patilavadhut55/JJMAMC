<?php 

  require('../../../qcubed.inc.php');
    
  class Documents extends QForm {
            protected $calfrom;
            protected $calto;
            protected $ChkUsed;
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
                        
                        $this->calto->Width = 100;
                        $this->calfrom->Width = 100 ;
                          
                        //Button Search
                        $this->Srchbtn = new QButton($this);
                        $this->Srchbtn->Text = 'Search';
                        
                         //Box Check 
                        $this->ChkUsed = new QCheckBox($this);
                        $this->ChkUsed->Name = 'Closed';
//                        $this->Srchbtn->Height = 30;
                        
                        
                        if(isset($_GET['from'])){
                        $this->calfrom->Text = Date('M d Y', strtotime($_GET['from']));
                        $this->calto->Text = Date('M d Y', strtotime($_GET['to']));
                        $this->ChkUsed->Checked = $_GET['usedchk'];
                        if($_GET['usedchk'] != 1){
                        $this->ChkUsed->Name = 'Open';    
                        }
                        }
                        $this->Srchbtn->AddAction(new QClickEvent(), new QAjaxAction('Srchbtn_Click'));
                        $this->ChkUsed->AddAction(new QClickEvent(), new QAjaxAction('Srchbtn_Click'));
                         }
                 protected function Srchbtn_Click(){
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/po.php?from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime.'&usedchk='.$this->ChkUsed->Checked);
                }
     
   }
   
   Documents::Run('Documents');
?>

