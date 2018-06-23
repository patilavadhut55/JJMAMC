<?php 
  require('../../../qcubed.inc.php');
  class Documents extends QForm {
            protected $calfrom;
            protected $calto;
            protected $chkDetail;
            
            protected function Form_Run() {
               parent::Form_Run();
               QApplication::CheckRemoteAdmin();
            }
                 protected function Form_Create() {
                     parent::Form_Create();
                        $_GET['tab'] = 3;
                        $this->calfrom = new QCalendar($this);
                        $this->calto = new QCalendar($this);
                        $this->chkDetail = new QCheckBox($this);
                        $this->calfrom->Name = 'From';
                        $this->calto->Name = 'To';
                        $this->chkDetail->Name = 'Show Detail';
                        $this->calto->Width = 100;
                        $this->calfrom->Width = 100 ;

                        if(date('m') <= 3) $Y = date('Y') - 1;
                        else $Y = date ('Y');
                        $this->calfrom->Text = Date('M d Y', strtotime($Y.'0401'));
                        $this->calto->Text = Date('M d Y', strtotime(date('Ymd')));
                           
                        $this->calfrom->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
                       $this->calto->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
                        $this->chkDetail->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
                }
                protected function calto_change(){
                     //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/balance_sheet.php?from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime.'&all='.$this->chkDetail->Checked);
                }
     
   }
   
   Documents::Run('Documents');
?>

