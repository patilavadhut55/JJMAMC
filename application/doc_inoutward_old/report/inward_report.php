<?php
	// Load the QCubed Development Framework
	require('../../../qcubed.inc.php');

	class InwordReportForm extends QForm {
            protected $calDate;
            protected $btnReport;
            protected $calFromDate;
            protected $calToDate;
            protected $lstCat;

        // Override Form Event Handlers as Needed
            protected function Form_Run() {
                    parent::Form_Run();
                  QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
              
                $this->calFromDate = new QCalendar($this);
                $this->calFromDate->Name = "From";
                if(isset($_GET['fdate'])) $this->calFromDate->Text = Date('M d Y', strtotime($_GET['fdate']));
                $this->calFromDate->Required = TRUE;

                $this->calToDate = new QCalendar($this);
                $this->calToDate->Name = "To";
                if(isset($_GET['tdate'])) $this->calToDate->Text = Date('M d Y', strtotime($_GET['tdate']));
                $this->calToDate->Required = TRUE;
               
              
                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = "Search";
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
           
               
                $this->lstCat = new QListBox($this);
                $this->lstCat->Width = 240;
                $this->lstCat->Name = "Category";
                $this->lstCat->AddItem("-Select One-",NULL);
                $docs = DocCategory::LoadAll();
                foreach($docs as $doc){
                    $this->lstCat->AddItem($doc->Name,$doc->IddocCategory);
                }   
                 if(isset($_GET['cat'])){
                    $this->lstCat->SelectedValue = $_GET['cat'];
                }
            }
           
            protected function btnReport_Click(){
                $fdate = date('Ymd',  strtotime($this->calFromDate->Text));
                $tdate = date('Ymd',  strtotime($this->calToDate->Text));
                   
                if(($fdate < $tdate || $fdate == $tdate )&&($this->lstCat->SelectedValue != Null )){

                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/report/inward_report.php?fdate='.date('Ymd',  strtotime($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text))."&cat=".$this->lstCat->SelectedValue);
                    
                    }
                     elseif(($fdate < $tdate || $fdate == $tdate )&&($this->lstCat->SelectedValue == Null )){

                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/report/inward_report.php?fdate='.date('Ymd',  strtotime($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)));
                    
                    }
                QApplication::DisplayAlert('Select Category of Report');
            }
	}
           InwordReportForm::Run('InwordReportForm');
?>