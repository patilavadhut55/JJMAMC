<?php
	require('../../../qcubed.inc.php');

	class ReportForm extends QForm {
            protected $calToDate;
            protected $txtGroup;
            protected $arrAutoCompleteGroup;
            protected $btnReport;
            protected $lstCompany;
            protected $dtg;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}

            protected function Form_Create() {
                   parent::Form_Create();                   
                    $actbrand = Settings::LoadByName("Active Brand");
                    $Groups = StockGrp::LoadArrayByParrent($actbrand->Option);
                    $this->txtGroup = new QSelect2ListBox($this);
                    $this->txtGroup->AddItem("-All Product -", NULL); 
                    foreach ($Groups as $Group){
                        $this->txtGroup->AddItem($Group->Name, $Group->IdstockGrp);    
                    }
                    
                    $this->calToDate = new QCalendar($this);
                    $this->calToDate->Placeholder = "Date";
                    $this->txtGroup->Name = 'Item Brand';
                    $this->calToDate->Name = 'Date';
                    $this->txtGroup->Width = 180;
                    $this->calToDate->Width = 100;
                    $this->calToDate->AddAction(new QChangeEvent(), new QServerAction('calToDate_change'));
                    $this->txtGroup->AddAction(new QClickEvent(), new QServerAction('txtGroup_change'));
                }
                
                protected function calToDate_change(){
                    
                }


                protected function txtGroup_change(){                     
                   
                }                                
	}

	ReportForm::Run('ReportForm');
?>