<?php
    require('../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/ReportListFormBase.class.php');

    class ReportListForm extends ReportListFormBase {
        protected $dtgReport;
        protected function Form_Run() {
                    parent::Form_Run();
            QApplication::CheckRemoteAdmin();		    
            }

        protected function Form_Create() {
            parent::Form_Create();
            
            $this->dtgReport = new QDataGrid($this);
            $this->dtgReport->CssClass = "datagrid";

            $this->dtgReport->ShowFilter = TRUE;

            $this->dtgReport->Paginator = new QPaginator($this->dtgReport);
            $this->dtgReport->ItemsPerPage = 20;

            $this->dtgReport->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Report()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Report()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Report()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgReport->AddColumn($Name);

            $this->dtgReport->AddColumn(new QDataGridColumn('Parent', '<?= $_ITEM->ParentObject ?>', 'Width=50'));

            $this->dtgReport->SetDataBinder('dtgReport_Bind');

            $this->dtgReport->RowActionParameterHtml = '<?= $_ITEM->Idreport ?>';
            $this->dtgReport->AddRowAction(new QClickEvent(), new QServerAction('dtgReportRow_Click'));
        
            }
            
        protected function dtgReport_Bind(){
            $this->dtgReport->TotalItemCount = Report::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgReport->Conditions
                            ));

            $data = Report::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgReport->Conditions
                            ),
            QQ::Clause(
                    $this->dtgReport->OrderByClause,
                    $this->dtgReport->LimitClause
            ));

            $this->dtgReport->DataSource = $data;
        }
        public function dtgReportRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/report_edit.php?id='.$strParameter.'&new=1');
        }    
        
    }

	ReportListForm::Run('ReportListForm');
?>