<?php
	require('../../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/VoucherListFormBase.class.php');

	class VoucherListForm extends QForm {
            protected $calfrom;
            protected $calto;
            protected $lstStatus;
            protected $btnReport;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
		}


            protected function Form_Create() {
                parent::Form_Create();

                $this->calfrom = new QCalendar($this);
                $this->calto = new QCalendar($this);

                $this->lstStatus = new QListBox($this);
                $this->lstStatus->Name = "Status";
                $this->lstStatus->AddItem("-Show All-",1);
                $this->lstStatus->AddItem("In Progress",2);
                $this->lstStatus->AddItem("Approved",3);
                $this->lstStatus->AddItem("Closed",4);
                $this->lstStatus->Width =200;
                if(isset($_GET['status']))$this->lstStatus->SelectedValue = $_GET['status'];

                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = "Report";
                $this->btnReport->AddAction(new QClickEvent(), new QAjaxAction('Search_Requirment'));

                if(isset($_GET['from'])){
                    $this->calfrom->Text = date('M d Y',  strtotime($_GET['from']));
                    $this->calto->Text = date('M d Y',  strtotime($_GET['to']));
                }
            }
            
            protected function Search_Requirment(){
              //  if((isset($_GET['from'])) || (isset($_GET['to']))){
                $from = date('Ymd',  strtotime($this->calfrom->DateTime));
                        $to = date('Ymd',  strtotime($this->calto->DateTime));
                        if($from <= $to){
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/requirement_list.php?from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime.'&status='.$this->lstStatus->SelectedValue);
                        }else {
                             QApplication::DisplayAlert('Invalid Date');
                                
                        }
            }
          //  }
	}

	VoucherListForm::Run('VoucherListForm');
?>