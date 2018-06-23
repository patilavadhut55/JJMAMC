<?php
	require('../../qcubed.inc.php');

	class ProductListForm extends QForm {
	        protected $calDate;
                protected $btnsearch;
                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->calDate = new QCalendar($this);
                    $this->calDate->Width = 120;
                    $this->calDate->Name = "Date";
                    $this->calDate->DateTimeFormat = "dd/mm/yy";
                    if(isset($_GET['date']))$this->calDate->Text = date ("d/m/Y", strtotime ($_GET['date']));
                    
                    $this->btnsearch = new QButton($this);
                    $this->btnsearch->Text = "Search";
                    $this->btnsearch->AddAction(new QClickEvent(), new QAjaxAction('btnsearch_click'));
                    
            }
            protected function btnsearch_click(){
                if($this->calDate->Text != ""){
                 $date = explode("/", $this->calDate->Text);   
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/stock_report.php?date='.$date[2].$date[1].$date[0]);
                }else{
                    QApplication::DisplayAlert("Please Select Date");
                }        
                        
                }
        }
        ProductListForm::Run('ProductListForm');
?>