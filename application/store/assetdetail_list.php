<?php
  require('../../qcubed.inc.php');
  
  class BookDetailListForm extends QForm {
      protected $dtgLedger;
      protected $btnAdd;
        protected function Form_Run() {
                parent::Form_Run();

                // Security check for ALLOW_REMOTE_ADMIN
                // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
                QApplication::CheckRemoteAdmin();
        } 
        protected function Form_Create() {
             parent::Form_Create();
             
             $this->dtgLedger = new QDataGrid($this);
            $this->dtgLedger->CssClass = "datagrid";

            $this->dtgLedger->ShowFilter = TRUE;

            $this->dtgLedger->Paginator = new QPaginator($this->dtgLedger);
            $this->dtgLedger->ItemsPerPage = 10;
            $this->dtgLedger->SetDataBinder('dtgLedger_Bind');
            
            //$this->dtgLedger->MetaAddColumn("Username");
            $this->dtgLedger->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));
            $Name = new QDataGridColumn('Title', '<?= $_ITEM->DisplayName ?>', 'Width=100',
                                        array('OrderByClause' => QQ::OrderBy(QQN::LedgerDetails()->DisplayName),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::LedgerDetails()->DisplayName, false)));
            $Name->Filter = QQ::Like(QQN::LedgerDetails()->DisplayName, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $Name->FilterBoxSize = 15;
            $this->dtgLedger->AddColumn($Name);
            $this->dtgLedger->AddColumn(new QDataGridColumn('Group', '<?= $_ITEM->StockGrpObject ?>', 'Width=50'));
            $this->dtgLedger->AddColumn(new QDataGridColumn('Price', '<?= $_ITEM->Mrp ?>', 'Width=50'));
            
            $this->dtgLedger->RowActionParameterHtml = '<?= $_ITEM->IdledgerDetails ?>';
            $this->dtgLedger->AddRowAction(new QClickEvent(), new QServerAction('dtgproassetRow_Click'));
            
            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
        }
        protected function dtgLedger_Bind(){
            $this->dtgLedger->TotalItemCount = LedgerDetails::QueryCount(
                    QQ::AndCondition(                                    
                            $this->dtgLedger->Conditions,
                            QQ::Equal(QQN::LedgerDetails()->IdledgerDetailsObject->Grp, getsettingvalue('store_asset'))
                            ));

            $data = LedgerDetails::QueryArray(
                        QQ::AndCondition(
                            $this->dtgLedger->Conditions,
                            QQ::Equal(QQN::LedgerDetails()->IdledgerDetailsObject->Grp, getsettingvalue('store_asset'))    
                            ),
            QQ::Clause(
                    QQ::OrderBy(QQN::LedgerDetails()->IdledgerDetails, TRUE),
                    $this->dtgLedger->LimitClause
            ));
            $this->dtgLedger->DataSource = $data;
        }
        protected function btnAdd_Click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/assetdetail_edit.php');
        }
        protected function dtgproassetRow_Click($strFormId, $strControlId, $strParameter){
             QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/assetdetail_edit.php?id='.$strParameter);
        }
  }
  
  BookDetailListForm::Run('BookDetailListForm');
?>
