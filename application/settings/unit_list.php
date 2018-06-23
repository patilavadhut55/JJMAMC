<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/UnitListFormBase.class.php');
    class UnitListForm extends UnitListFormBase {
            protected $dtgUnit;
            protected $btnNew;
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();		    
            }

            protected function Form_Create() {
                parent::Form_Create();
                $this->dtgUnit = new QDataGrid($this);
                $this->dtgUnit->CssClass = "datagrid";

                $this->dtgUnit->ShowFilter = TRUE;

                $this->dtgUnit->Paginator = new QPaginator($this->dtgUnit);
                $this->dtgUnit->ItemsPerPage = 20;

                $this->dtgUnit->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  

                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Unit()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Unit()->Name, false)));

                $Name->Filter = QQ::Like(QQN::Unit()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgUnit->AddColumn($Name);

                $this->dtgUnit->AddColumn(new QDataGridColumn('Decimal Place', '<?= $_ITEM->DecimalPlaces ?>', 'Width=50'));
                $this->dtgUnit->AddColumn(new QDataGridColumn('Oty Involved', '<?= $_ITEM->QtyInvolved ?>', 'Width=100'));
               
                $this->dtgUnit->SetDataBinder('dtgUnit_Bind');

                $this->dtgUnit->RowActionParameterHtml = '<?= $_ITEM->Idunit ?>';
                $this->dtgUnit->AddRowAction(new QClickEvent(), new QAjaxAction('dtgUnitRow_Click'));

                $this->btnNew = new QButton($this);
                $this->btnNew->HtmlEntities = FALSE;
                $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                $this->btnNew->ButtonMode = QButtonMode::Success;
                $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
            }


            protected function dtgUnit_Bind(){
                $this->dtgUnit->TotalItemCount = Unit::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgUnit->Conditions
                                ));

                $data = Unit::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgUnit->Conditions
                                ),
                QQ::Clause(
                        $this->dtgUnit->OrderByClause,
                        $this->dtgUnit->LimitClause
                ));

                $this->dtgUnit->DataSource = $data;
            }

            public function dtgUnitRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/unit_edit.php/'.$strParameter);
            }

            public function btnNew_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/unit_edit.php');
            }

        }
            
    UnitListForm::Run('UnitListForm');
?>