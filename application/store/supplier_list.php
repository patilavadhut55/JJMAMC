<?php
	require('../../qcubed.inc.php');


	class LedgerListForm extends QForm {
            protected $btnexport;
            protected $btnadd;
            protected $btnNeg;
            protected $dtg;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
		}


		protected function Form_Create() {
                    parent::Form_Create();
                                        //button delcaration for add
                    $this->btnadd = new QButton($this);
                    $this->btnadd->ButtonMode = QButtonMode::AddNew;
                    $this->btnadd->AddAction(new QClickEvent(), new QServerAction('btnadd_click'));
                    
                    $this->dtg = new QDataGrid($this);
                    // filterbox declaration
                    $this->dtg->ShowFilter = TRUE;
                    $this->dtg->ShowFilterButton = TRUE;
                    $this->dtg->ShowFilterResetButton = TRUE;
                    //$this->dtg->Width = 700;
                    
                    $this->dtg->CssClass = "datagrid";
                    $this->dtg->Paginator = new QPaginator($this->dtg);
                    $this->dtg->ItemsPerPage = 10;
                    $this->dtg->SetDataBinder('dtg_Bind');
    
                    
                    
//                    $this->dtg->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
//                    $this->dtg->AddRowAction(new QMouseOutEvent(), new QCssClassAction());
                      $this->dtg->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=5'));
                 
                    $Name = new QDataGridColumn('Supplier Name', '<?= $_ITEM->Name ?>', 'Width=50','HtmlEntities=false',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                  
                    $this->dtg->AddColumn($Name);
                    
                    $this->dtg->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
                    $this->dtg->AddRowAction(new QClickEvent(), new QAjaxAction('dtgRow_Click'));
                       
                    
                }
                     protected function dtg_Bind(){
                    $this->dtg->TotalItemCount = Ledger::QueryCount(
                            QQ::AndCondition(
                                            $this->dtg->Conditions,
                                            QQ::Equal(QQN::Ledger()->Grp, 35)

                                    ));

                    $data =  Ledger::QueryArray(
                                QQ::AndCondition(
                                            $this->dtg->Conditions,
                                              QQ::Equal(QQN::Ledger()->Grp, 35)
                                    ),
                    QQ::Clause(
                            QQ::OrderBy(QQN::Ledger()->Name, TRUE),
                            $this->dtg->LimitClause
                    ));

                    $this->dtg->DataSource = $data;
                    
                }
                   
                protected function dtgRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/suplier.php?id='.$strParameter);
                }
                protected function btnadd_click(){
                           QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/suplier.php');
              
              }
	
        }        

	LedgerListForm::Run('LedgerListForm');
?>