<?php
	require('../../../qcubed.inc.php');

	class ReportForm extends QForm {
            protected $lstledger;
            protected $arrAutoCompletemember;
            protected $btnReport;
            protected $btnCustome;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    $_GET['tab'] = 4;
                    
                    $this->lstledger = new QSelect2ListBox($this);
                    $leds = Ledger::LoadAll();
                    $this->lstledger->AddItem("- Select ledger -", NULL);    
                    foreach ($leds as $led)
                      $this->lstledger->AddItem($led->Name, $led->Idledger); 
                
                    if(isset($_GET['ledger'])){
                        $this->lstledger->SelectedValue = $_GET['ledger'];
                    }
                    $this->btnReport = new QButton($this);
                    $this->btnReport->Text = 'Report';
                    $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));
                    $this->btnReport->AccessKey = 'r';
                   
                    $this->btnCustome = new QButton($this);
                    $this->btnCustome->Text = 'Custome Report';
                    $this->btnCustome->AddAction(new QClickEvent(), new QServerAction('btnCustome_click'));
                   
                }
                protected function btnCustome_click(){
                    $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
                    if($ledger){
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_report_edit.php?ledger='.$ledger->Idledger);
                    }else{
                        QApplication::DisplayAlert("Please Select Proper Ledger00");
                    }
                }
                protected function btnReport_click(){
                    $ledger = Ledger::LoadByIdledger($this->lstledger->SelectedValue);
                    if($ledger){
                        $subledger = Ledger::LoadArrayByGrp($ledger->Idledger);
                    if($subledger)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_group_report.php?ledger='.$ledger->Idledger);
                    else
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/new_ledger_report.php?ledger='.$ledger->Idledger);
                    }else{
                        QApplication::DisplayAlert("Please Select Proper Ledger00");
                    }
                }
	}

	ReportForm::Run('ReportForm');
?>