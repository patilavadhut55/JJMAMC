<?php 
  require('../../../qcubed.inc.php');
    
    class Documents extends QForm {
            protected $txtmember;
            protected $calFromDate;
            protected $calToDate;
            protected $btnPrint;
            protected $btnReport;
            protected $chkveri;
            protected function Form_Run() {
	           parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
            parent::Form_Create();
                $objmembers = Ledger::LoadAll();
                    
                $this->txtmember = new QSelect2ListBox($this);
                $this->txtmember->AddItem("- Select -", NULL);
                foreach ($objmembers as $objmember){
                    $this->txtmember->AddItem($objmember->Name, $objmember->Idledger);    
                }

                $this->txtmember->Name = 'Ledger';
            
                $this->calFromDate = new QCalendar($this);
                $this->calFromDate->Name = 'From';
                $this->calFromDate->Width = 100;

                $this->calToDate = new QCalendar($this);
                $this->calToDate->Name = 'To';
                $this->calToDate->Width = 100;
                
                $this->chkveri = new QCheckBox($this);
                $this->chkveri->Name = 'Verified';

                $this->btnReport = new QButton($this);
                $this->btnReport->Text = 'Report';
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));
                $this->btnReport->AccessKey = 'r';                
                
                $this->calFromDate->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
                if(isset($_GET['ledger'])){                        
                    $this->txtmember->SelectedValue = $_GET['ledger'];
                    if(isset($_GET['from'])) $this->calFromDate->Text = Date('M d Y', strtotime($_GET['from']));
                    if(isset($_GET['to'])) $this->calToDate->Text = Date('M d Y', strtotime($_GET['to']));                   
                }
            }


        protected function calto_change(){
            //QApplication::Redirect('day_book.php?date='.$this->caldate->DateTime);
        }
     
   }
   
   Documents::Run('Documents');
?>
