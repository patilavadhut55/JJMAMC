<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/StockGrpListFormBase.class.php');

    class StockGrpListForm extends StockGrpListFormBase {
           protected $dtgStockGrp;
           protected $btnNew;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();		    
        }
        protected function Form_Create() {
            parent::Form_Create();
            $this->dtgStockGrp = new QDataGrid($this);
            $this->dtgStockGrp->CssClass = "datagrid";

            $this->dtgStockGrp->ShowFilter = TRUE;

            $this->dtgStockGrp->Paginator = new QPaginator($this->dtgStockGrp);
            $this->dtgStockGrp->ItemsPerPage = 20;

            $this->dtgStockGrp->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  
            
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::StockGrp()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::StockGrp()->Name, false)));

            $Name->Filter = QQ::Like(QQN::StockGrp()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgStockGrp->AddColumn($Name);

            $this->dtgStockGrp->AddColumn(new QDataGridColumn('Under', '<?= $_ITEM->ParrentObject ?>', 'Width=50'));
            $this->dtgStockGrp->AddColumn(new QDataGridColumn('Vat Rate', '<?= $_ITEM->VatRate ?>', 'Width=100'));
            $this->dtgStockGrp->AddColumn(new QDataGridColumn('Duties Rate', '<?= $_ITEM->DutiesRate ?>', 'Width=100'));
            
            $this->dtgStockGrp->SetDataBinder('dtgStockGrp_Bind');

            $this->dtgStockGrp->RowActionParameterHtml = '<?= $_ITEM->IdstockGrp ?>';
            $this->dtgStockGrp->AddRowAction(new QClickEvent(), new QAjaxAction('dtgStockGrpRow_Click'));

            $this->btnNew = new QButton($this);
            $this->btnNew->HtmlEntities = FALSE;
            $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
            $this->btnNew->ButtonMode = QButtonMode::Success;
            $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
        }
        protected function dtgStockGrp_Bind(){
            $this->dtgStockGrp->TotalItemCount = StockGrp::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgStockGrp->Conditions
                            ));

            $data = StockGrp::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgStockGrp->Conditions
                            ),
            QQ::Clause(
                    $this->dtgStockGrp->OrderByClause,
                    $this->dtgStockGrp->LimitClause
            ));

            $this->dtgStockGrp->DataSource = $data;
        }

        public function dtgStockGrpRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/stock_grp_edit.php/'.$strParameter);
        }

        public function btnNew_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/stock_grp_edit.php');
        }

    }
 StockGrpListForm::Run('StockGrpListForm');
?>