<?php 

  require('../../../qcubed.inc.php');
    
  class Documents extends QForm {
        protected $calfrom;
        protected $calto;
        protected $chkDetails;
        protected function Form_Run() {
	           parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		 }
                 protected function Form_Create() {
                     parent::Form_Create();
                        $_GET['tab'] = 2;
                        $this->calfrom = new QCalendar($this);
                        $this->calto = new QCalendar($this);
                        $this->calfrom->Name = 'From';
                        $this->calto->Name = 'To';
                        $this->calto->Width = 100;
                        $this->calfrom->Width = 100;
                        
                        if(date('m') <= 3) $Y = date('Y') - 1;
                        else $Y = date ('Y');
                        $this->calfrom->Text = Date('M d Y', strtotime($Y.'0401'));
                        $this->calto->Text = Date('M d Y', strtotime(date('Ymd')));

                        $this->calto->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
                        
                        $this->chkDetails = new QCheckBox($this);
                        $this->chkDetails->AddAction(new QChangeEvent(), new QServerAction('chkDetails_Change'));
                }
                
                protected function chkDetails_Change(){
                    
                }
                
                protected function calto_change(){
                    //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/Profit_loss.php?from='.date('Ymd',  strtotime($this->calfrom->Text)).'&to='.date('Ymd', strtotime($this->calto->Text)));
                }
     
   }
   
   Documents::Run('Documents');
?>

