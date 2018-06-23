<?php
    require('../../qcubed.inc.php');
    require(__FORMBASE_CLASSES__ . '/LedgerListFormBase.class.php');
    class LedgerListForm extends LedgerListFormBase {
            protected $dtgLedger;
            protected $btnNew;
            protected function Form_Run() {

                parent::Form_Run();

                QApplication::CheckRemoteAdmin();		    
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->dtgLedger = new QDataGrid($this);
                $this->dtgLedger->CssClass = "datagrid";

                $this->dtgLedger->ShowFilter = TRUE;

                $this->dtgLedger->Paginator = new QPaginator($this->dtgLedger);
                $this->dtgLedger->ItemsPerPage = 20;

                $this->dtgLedger->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));

                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

                $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgLedger->AddColumn($Name);

                //group
                $grp = new QDataGridColumn('Group', '<?= $_ITEM->GrpObject ?>', 'Width=200',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Ledger()->GrpObject),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->GrpObject, false)));

                $grp->Filter = QQ::Like(QQN::Ledger()->GrpObject, null);
                $grp->FilterPostfix = $grp->FilterPrefix = '%';
                $grp->FilterType = QFilterType::TextFilter;
                $this->dtgLedger->AddColumn($grp);
                
                $this->dtgLedger->AddColumn(new QDataGridColumn('Login', '<?= $_ITEM->Login ?>', 'Width=300'));
                  
                $this->dtgLedger->SetDataBinder('dtgLedger_Bind');

                $this->dtgLedger->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
                $this->dtgLedger->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));

                $this->btnNew = new QButton($this);
                $this->btnNew->HtmlEntities = FALSE;
                $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                $this->btnNew->ButtonMode = QButtonMode::Success;
                $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
            }


            protected function dtgLedger_Bind(){
                $this->dtgLedger->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgLedger->Conditions
                                ));

                $data = Ledger::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgLedger->Conditions
                                ),
                QQ::Clause(
                        $this->dtgLedger->OrderByClause,
                        $this->dtgLedger->LimitClause
                ));

                $this->dtgLedger->DataSource = $data;
            }

            public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php/'.$strParameter);
            }

            public function btnNew_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php');
            }

}
    LedgerListForm::Run('LedgerListForm');
?>