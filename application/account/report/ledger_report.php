<?php
	require('../../../qcubed.inc.php');

	class ReportForm extends QForm {
            protected $dtgledger;
            protected $txtledger;
            protected $arrAutoCompletemember;
            protected $btnReport;
            
            protected function Form_Run() {
                parent::Form_Run();                
                QApplication::CheckRemoteAdmin();
            }

//		protected function Form_Load() {}
            protected function Form_Create() {
                parent::Form_Create();
                $_GET['tab'] = 4;
                $arrAutoCompletemember = array();
                $objmembers = Ledger::LoadAll();
                foreach ($objmembers as $objmember){
                    $this->arrAutoCompletemember[$objmember->Idledger.'l'] = $objmember->Name;
                }

                $this->txtledger = new QSelect2ListBox($this);
                $this->txtledger->AddItem("- Select - ", $objmember->Idledger);
                foreach ($objmembers as $objmember){
                    $this->txtledger->AddItem($objmember->Name, $objmember->Idledger);
                }
                $this->txtledger->Name = 'Ledger';
                $this->txtledger->Width = 200;

                $this->btnReport = new QButton($this);
                $this->btnReport->Text = 'Report';
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));
                $this->btnReport->AccessKey = 'r';

                $this->dtgledger = new QDataGrid($this);

                $this->dtgledger->Paginator = new QPaginator($this->dtgledger);
                $this->dtgledger->CssClass = "datagrid";
                $this->dtgledger->ItemsPerPage = 20;
                $this->dtgledger->ShowFilter = TRUE;
                $this->dtgledger->ShowFilterButton = FALSE;
                $this->dtgledger->ShowFilterResetButton = FALSE;
                $this->dtgledger->Width = "100%";
                $this->dtgledger->SetDataBinder('dtgledger_Bind'); 

                $this->dtgledger->AddColumn(new QDataGridColumn('Srn', '<?= $_ITEM->Idledger ?>', 'Width=50'));


                $this->dtgledger->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
                $this->dtgledger->AddRowAction(new QMouseOutEvent(), new QCssClassAction());

                $this->dtgledger->AddRowAction(new QClickEvent(), new QAjaxAction('dtgledgerRow_Click'));
                $this->dtgledger->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';

                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                            array(
                                      'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
                                      'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

                $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $Name->FilterBoxSize = 20;
                $this->dtgledger->AddColumn($Name);

                $SubOf =new QDataGridColumn('Group','<?= $_ITEM->GrpObject ?>','Width=150',
                       array(
                                      'OrderByClause' => QQ::OrderBy(QQN::Ledger()->GrpObject->Name),
                                      'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->GrpObject->Name, false)));
                $SubOf->Filter = QQ::Like(QQN::Ledger()->GrpObject->Name, null);
                $SubOf->FilterPrefix = $SubOf->FilterPostfix='%';
                $SubOf->FilterType = QFilterType::TextFilter;
                $SubOf->FilterBoxSize = 15;
                $this->dtgledger->AddColumn($SubOf);


                $this->dtgledger->AddColumn(new QDataGridColumn('Opening Bal', '<div align="right"><?= $_FORM-> renderDr($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=100'));                    
            }
                
                
            public function renderDr(Ledger $obj) {                    
                $objControlId = 'Dr'.$obj->Idledger;
                
                $m = date('m');
                $y = date('Y');
                if($m <= 3) $y = $y -1;
                
                if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QLabel($this, $objControlId);
                    
                    $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Date, $y.'0401'),
                                    QQ::Equal(QQN::Voucher()->Dr, $obj->Idledger),
                                    QQ::Equal(QQN::Voucher()->CrObject->Code, "D34") //opeaning balence
                                )
                            );

                    if($voutures){
                        foreach ($voutures as $vouture){}
                        $objControl->Text = $vouture->Amount.'(Dr)' ;
                    }
                            
                    $vovs = Voucher::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Date, $y.'0401'),
                                        QQ::Equal(QQN::Voucher()->Cr, $obj->Idledger),
                                        QQ::Equal(QQN::Voucher()->DrObject->Code, "D34")
                                        )
                                );
                    
                    if($vovs){
                        foreach ($vovs as $vov){}
                        $objControl->Text = $vov->Amount.'(Cr)' ;
                    }                            
                }   
                return $objControl->Render(false);
            }
            
            public function renderCr(Ledger $obj) {
                
                $objControlId = 'Cr'.$obj->Idledger;

                if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QLabel($this, $objControlId);
                    $voutures = Voucher::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Date, $y.'0401'),
                                    QQ::Equal(QQN::Voucher()->Cr, $obj->Idledger),
                                    QQ::Equal(QQN::Voucher()->DrObject->Code, "D34")
                                )
                            );
                    if($voutures){
                        foreach ($voutures as $vouture){}
                        $objControl->Text = $vouture->Amount ;
                    }
                }   
                return $objControl->Render(false);
            }    
           
            protected function dtgledger_Bind(){
                $this->dtgledger->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgledger->Conditions
                                ));

                $data = Ledger::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgledger->Conditions          
                                ),
                QQ::Clause(
                        $this->dtgledger->OrderByClause,
                        $this->dtgledger->LimitClause
                ));
               //$data->AppointmentObject->Name
                $this->dtgledger->DataSource = $data;
                //$data->ExactDesignationObject->Name
            }   
                
                public function dtgledgerRow_Click($strFormId, $strControlId, $strParameter) {
                    $subledger = Ledger::LoadArrayByGrp($strParameter);
                    if($subledger)
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_group_report.php?ledger='.$strParameter);
                    else
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/new_ledger_report.php?ledger='.$strParameter);
                }
                 protected function btnReport_click(){
                    
                    $ledger = Ledger::LoadByIdledger($this->txtledger->SelectedValue);
                    
                    if($ledger){
                        $subledger = Ledger::LoadArrayByGrp($ledger->Idledger);
                        if($subledger)
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/ledger_group_report.php?ledger='.$ledger->Idledger);
                        else
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/new_ledger_report.php?ledger='.$ledger->Idledger);
                    }else{
                        QApplication::DisplayAlert("Please Select Proper Ledger");
                    }
                }
            
	}

	ReportForm::Run('ReportForm');
?>