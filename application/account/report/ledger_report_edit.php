<?php
	require('../../../qcubed.inc.php');

	class ReportForm extends QForm {
            protected $lstmember;
            protected $calFromDate;
            protected $calToDate;
            protected $txtmember;
            protected $arrAutoCompletemember;
            protected $btnReport;
            protected $chkveri;

            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    $_GET['tab'] = 4;
                    $objmembers = Ledger::LoadAll();
                    
                    $this->txtmember = new QSelect2ListBox($this);
                    $this->txtmember->AddItem("- Select -", NULL);
                    foreach ($objmembers as $objmember){
                        $this->txtmember->AddItem($objmember->Name, $objmember->Idledger);    
                    }
                    
                    $this->txtmember->Name = 'Ledger';

                    $this->calFromDate = new QCalendar($this);
                    $this->calFromDate->Name = 'From';

                    $this->calToDate = new QCalendar($this);
                    $this->calToDate->Name = 'To';
                    
                    $this->txtmember->Width = 150;
                    $this->calFromDate->Width = $this->calToDate->Width = 100;
                    
                    $this->chkveri = new QCheckBox($this);
                    $this->chkveri->Name = 'Verified';
                    
                    $this->btnReport = new QButton($this);
                    $this->btnReport->Text = 'Report';
                    $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));
                    $this->btnReport->AccessKey = 'r';
                    
                    if(isset($_GET['ledger'])){                        
                        $this->txtmember->SelectedValue = $_GET['ledger'];
                        
                        if(isset($_GET['from'])) $this->calFromDate->Text = Date('M d Y', strtotime($_GET['from']));
                        if(isset($_GET['to'])) $this->calToDate->Text = Date('M d Y', strtotime($_GET['to']));
                   
                    }
                }

                protected function btnReport_click(){
                    $ledger = Ledger::LoadByIdledger($this->txtmember->SelectedValue);
                    if($ledger){
                        $subledger = Ledger::LoadArrayByGrp($ledger->Idledger);
                        if($subledger)
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_group_report.php?ledger='.$ledger->Idledger);
                        else
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_report_edit.php?ledger='.$ledger->Idledger.'&from='.date('Ymd',  strtotime($this->calFromDate->Text)).'&to='.date('Ymd',  strtotime($this->calToDate->Text)));
                    }else{
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_report_edit.php?member='.$this->txtmember->SelectedValue.'&from='.date('Ymd',  strtotime($this->calFromDate->Text)).'&to='.date('Ymd',  strtotime($this->calToDate->Text)));
                    }
                }
	}

	ReportForm::Run('ReportForm');
?>