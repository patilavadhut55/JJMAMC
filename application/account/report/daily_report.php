<?php
	require('../../../qcubed.inc.php');

	class ReportForm extends QForm {
            protected $calFromDate;
            protected $txtSearch;
            protected $btnSearch;
            protected $calToDate;
            protected $txtmember;
            protected $arrAutoCompletemember;
            protected $btnReport;
            protected $chkveri;
            
            protected $txtQuick;
            
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}

            protected function Form_Create() {
                   parent::Form_Create();
                   $_GET['tab'] = 5;
                   $objmembers = Ledger::LoadAll();
                    
                    $this->txtmember = new QSelect2ListBox($this);
                    $this->txtmember->AddItem("- Select -", NULL);
                    foreach ($objmembers as $objmember){
                        $this->txtmember->AddItem($objmember->Name, $objmember->Idledger);    
                    }
                    
                   $this->txtmember->Name = 'Ledger';
                   if(isset($_GET['party']))
                       $this->txtmember->SelectedValue = $_GET['party'];
                   
                   $this->calFromDate = new QCalendar($this);
                   $this->calFromDate->Name = "From";
                   if(isset($_GET['fdate'])) $this->calFromDate->Text = Date('F d Y', strtotime($_GET['fdate']));
                   $this->calFromDate->Required = TRUE;
                   
                   $this->calToDate = new QCalendar($this);
                   $this->calToDate->Name = "To";
                   if(isset($_GET['tdate'])) $this->calToDate->Text = Date('F d Y', strtotime($_GET['tdate']));
                   $this->calToDate->Required = TRUE;
                   
                   $this->txtmember->Width = 150;
                   $this->calFromDate->Width = $this->calToDate->Width = 100;
                    
                   $this->chkveri = new QCheckBox($this);
                   $this->chkveri->Name = 'Verified';
                    
                   $this->btnReport = new QButton($this);
                   $this->btnReport->Text = 'Report';
                   $this->btnReport->CausesValidation = TRUE;
                   $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));
                   
                   $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
                   $this->txtSearch->Name = 'Challan No';
                   $this->txtSearch->Width = 200;
                   
                    $this->btnSearch = new QButton($this);
                    $this->btnSearch->ButtonMode = QButtonMode::Success;
                    $this->btnSearch->Text = "<i class='fa fa-search '></i>";
                    $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));
                    
                    $this->txtQuick = new QTextBox($this);
                    $this->txtQuick->Placeholder = "Quick Search";
                    $this->txtQuick->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtQuick_enter'));
                }
                
            protected function txtQuick_enter(){
                $vou = Voucher::LoadByInvNo($this->txtQuick->Text);
                if($vou)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/challan_print.php?id='.$vou->Idvoucher);
                else
                    QApplication::DisplayAlert ("Invalid Voucher");
            }
            protected function btnReport_click(){
                if($this->calFromDate->Text != NULL &&  $this->calFromDate->Text != NULL){ 
                  
                   QApplication::Redirect("daily_report.php?fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text))); 
                }
            }
            
	}

	ReportForm::Run('ReportForm');
?>