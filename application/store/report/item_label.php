<?php
    require('../../../qcubed.inc.php');

    class ItemLabel extends QForm {
            protected $btnimport;
            protected $btnexport;
            protected $dtg;
            protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();		    
            }
            protected function Form_Create() {
                parent::Form_Create();

                    $this->btnimport  = new QButton($this);

                    $this->btnimport->Text = "<img src='".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/import.png' width=35 height=30 /><br/>Import";
                    $this->btnimport->HtmlEntities = FALSE; 


                    $this->dtg = new ProductDataGrid($this);
                    // Style the DataGrid (if desired)
                    $this->dtg->Width = 900;
                    $this->dtg->ShowFilter = FALSE;

                    $this->dtg->Paginator = new QPaginator($this->dtg);
                    $this->dtg->ItemsPerPage = 15;
                    $this->dtg->ShowFilter = TRUE;
                    $this->dtg->ShowFilterButton = FALSE;
                    $this->dtg->ShowFilterResetButton = FALSE;

                    $Code = new QDataGridColumn('Code', '<?= $_ITEM->Idproduct ?>', 'Width=50',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Product()->Code),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Product()->Code, false)));

                    $Code->Filter = QQ::Like(QQN::Product()->Code, null);
                    $Code->FilterPostfix  = $Code->FilterPrefix = '%';
                    $Code->FilterType = QFilterType::TextFilter;
                    $Code->FilterBoxSize = 10;    
                    $this->dtg->AddColumn($Code);       

                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                            array(
                                      'OrderByClause' => QQ::OrderBy(QQN::Product()->Name),
                                      'ReverseOrderByClause' => QQ::OrderBy(QQN::Product()->Name, false)));
                    $Name->Filter = QQ::Like(QQN::Product()->Name, null);
                    $Name->FilterType = QFilterType::TextFilter;
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterBoxSize = 20;
                    $this->dtg->AddColumn($Name);
                    
                   $isbn = new QDataGridColumn('ISBN', '<?= $_ITEM->Isbn ?>', 'Width=200',
                            array(
                                      'OrderByClause' => QQ::OrderBy(QQN::Product()->Isbn),
                                      'ReverseOrderByClause' => QQ::OrderBy(QQN::Product()->Isbn, false)));
                    $isbn->Filter = QQ::Like(QQN::Product()->Isbn, null);
                    $isbn->FilterType = QFilterType::TextFilter;
                    $isbn->FilterPostfix = $isbn->FilterPrefix = '%';
                    $isbn->FilterBoxSize = 20;
                    $this->dtg->AddColumn($isbn);

                    $this->dtg->SetDataBinder('dtg_Bind');
                    
                    $this->dtg->RowActionParameterHtml = '<?= $_ITEM->Idproduct ?>';
                    $this->dtg->AddRowAction(new QClickEvent(), new QAjaxAction('dtgRow_Click'));

                    // Button  download entire datagrid as Microsoft Excel .xls file
                    $this->btnexport = new QDataGridExporterButton($this, $this->dtg);
                    $this->btnexport->DownloadFormat = QDataGridExporterButton::EXPORT_AS_XLS;
                    $this->btnexport->Text = "<img src='".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/export.png' width=30 /><br/>Export";
                    $this->btnexport->HtmlEntities = FALSE;

                    $this->btnimport->AddAction(new QClickEvent(), new QAjaxAction('btnimport_click'));
                }
               protected function dtg_Bind(){
                $this->dtg->TotalItemCount = Product::QueryCount(
                        QQ::AndCondition(
                                        $this->dtg->Conditions

                                ));

                $data =  Product::QueryArray(
                            QQ::AndCondition(
                                        $this->dtg->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Product()->Idproduct, TRUE),
                        $this->dtg->LimitClause
                ));

                $this->dtg->DataSource = $data;

        }
        public function dtgProductsRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/library/AACR2.php/'.$strParameter);
                }
        protected function btnimport_click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/import/book.php');

        }
        
    }
    ItemLabel::Run('ItemLabel');
?>