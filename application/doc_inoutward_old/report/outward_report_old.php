<?php
	// Load the QCubed Development Framework
	require('../../../qcubed.inc.php');

	class OpeningStockForm extends QForm {
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
                if(isset($_GET['fdate'])) $this->calFromDate->Text = Date('F d Y', strtotime($_GET['fdate']));
                $this->calFromDate->Required = TRUE;

                $this->calToDate = new QCalendar($this);
                $this->calToDate->Name = "To";
                if(isset($_GET['tdate'])) $this->calToDate->Text = Date('F d Y', strtotime($_GET['tdate']));
                $this->calToDate->Required = TRUE;
                   
                $this->calDate =new QCalendar($this);
                $this->calDate->Width =150;
                $this->calDate->Name = "Date";
                
                $this->calDate =new QCalendar($this);
                $this->calDate->Width =150;
                $this->calDate->Name = "Date";
                   
                $this->lstCat = new QListBox($this);
                $this->lstCat->Width = 240;
                $this->lstCat->Name = "Category";
                $this->lstCat->AddItem("-Select one-",NULL);
                $docs = DocCategory::LoadAll();
                foreach($docs as $doc){
                    $this->lstCat->AddItem($doc->Name,$doc->IddocCategory);
                }       
        
                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = "Search";
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
            }
           
            protected function btnReport_Click(){
              
               $fdate = date('Ymd',  strtotime($this->calFromDate->Text));
               $tdate = date('Ymd',  strtotime($this->calToDate->Text));
          //       if($this->calFromDate->Text != NULL && $this->calToDate->Text != Null && $this->lstCat->SelectedValue != Null ){
               if(($fdate < $tdate || $fdate == $tdate )&&($this->lstCat->SelectedValue != NULL)){
                  
                      
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/report/outward_report.php?fdate='.date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text))."&cat=".$this->lstCat->SelectedValue);
                       }
                       QApplication::DisplayAlert('Select Category of Report');
                    }
                elseif(($fdate < $tdate || $fdate == $tdate )&&($this->lstCat->SelectedValue == Null )){

                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/report/inward_report.php?fdate='.date('Ymd',  strtotime($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)));
                    
                    }
                }
            OpeningStockForm::Run('OpeningStockForm');
?>