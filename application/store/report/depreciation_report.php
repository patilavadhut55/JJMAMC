<?php
        require('../../../qcubed.inc.php');

	class DepreciationReportForm extends QForm {
            protected $btnReport;
            protected $calFromDate;
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
	    }

            protected function Form_Create() {
                parent::Form_Create();
                $this->calFromDate = new QCalendar($this);
                $this->calFromDate->Name = "From";
                if(isset($_GET['date'])) $this->calFromDate->Text = Date('F d Y', strtotime($_GET['date']));
                $this->calFromDate->Required = TRUE;

                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = "Search";
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
            }
            
            protected function btnReport_click(){
              if($this->calFromDate->Text != NULL ){
                   QApplication::Redirect("depreciation_report.php?date=".date('Ymd',  strtotime ($this->calFromDate->Text)));
              }
            }
        }
        
        DepreciationReportForm::Run('DepreciationReportForm');
?>