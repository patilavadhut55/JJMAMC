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

                     //Button Search
                    $this->Srchbtn = new QButton($this);
                    $this->Srchbtn->ButtonMode = QButtonMode::Success;
                    $this->Srchbtn->Text = 'Search';
//                        $this->Srchbtn->Height = 30;


                    if(isset($_GET['from'])){
                        $this->calfrom->Text = Date('F d Y', strtotime($_GET['from']));
                        $this->calto->Text = Date('F d Y', strtotime($_GET['to']));
                    }

                    $this->Srchbtn->AddAction(new QClickEvent(), new QAjaxAction('Srchbtn_Click'));
                    //$this->chkDetail->AddAction(new QChangeEvent(), new QAjaxAction('calto_change'));
            }
                
            protected function Srchbtn_Click(){
                $from = date('Ymd',  strtotime($this->calfrom->DateTime));
                        $to = date('Ymd',  strtotime($this->calto->DateTime));
                        if($from <= $to){
                           QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/purchase_register.php?from='.date('Ymd',strtotime($this->calfrom->DateTime)).'&to='.date('Ymd',strtotime($this->calto->DateTime)));
                        }else {
                             QApplication::DisplayAlert('Invalid Date');
                                
                        }
            }
    }
   
   Documents::Run('Documents');
?>

