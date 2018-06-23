<?php 
  require('../../../qcubed.inc.php');
    
    class Documents extends QForm {
            protected $caldate;
            protected $btnPrint;
            protected function Form_Run() {
	           parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
            parent::Form_Create();
                $_GET['tab'] = 1;
                $this->caldate = new QCalendar($this);
                $this->caldate->Name = 'Day';
                $this->caldate->Width = 100;

                $this->btnPrint = new QButton($this);
                $this->btnPrint->Text = "Print Receipts";
                $this->btnPrint->AddAction(new QClickEvent(), new QAjaxAction('print_all'));
                
                $this->caldate->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
            }


        protected function calto_change(){
            //QApplication::Redirect('day_book.php?date='.$this->caldate->DateTime);
        }
     
   }
   
   Documents::Run('Documents');
?>
