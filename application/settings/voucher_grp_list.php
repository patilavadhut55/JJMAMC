<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/VoucherGrpListFormBase.class.php');
        class VoucherGrpListForm extends VoucherGrpListFormBase {
            protected $dtgVoucherGrp;
            protected $btnNew;
            protected function Form_Run() {
			parent::Form_Run();
		QApplication::CheckRemoteAdmin();		    
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->dtgVoucherGrp = new QDataGrid($this);
                    $this->dtgVoucherGrp->CssClass = "datagrid";

                    $this->dtgVoucherGrp->ShowFilter = TRUE;

                    $this->dtgVoucherGrp->Paginator = new QPaginator($this->dtgVoucherGrp);
                    $this->dtgVoucherGrp->ItemsPerPage = 20;

                    $this->dtgVoucherGrp->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  

                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::VoucherGrp()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::VoucherGrp()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::VoucherGrp()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgVoucherGrp->AddColumn($Name);

                    $this->dtgVoucherGrp->AddColumn(new QDataGridColumn('Group', '<?= $_ITEM->Grp ?>', 'Width=50'));
                 
                    $this->dtgVoucherGrp->SetDataBinder('dtgVoucherGrp_Bind');

                    $this->dtgVoucherGrp->RowActionParameterHtml = '<?= $_ITEM->IdvoucherGrp?>';
                    $this->dtgVoucherGrp->AddRowAction(new QClickEvent(), new QAjaxAction('dtgVoucherGrpRow_Click'));

                    $this->btnNew = new QButton($this);
                    $this->btnNew->HtmlEntities = FALSE;
                    $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                    $this->btnNew->ButtonMode = QButtonMode::Success;
                    $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
                }


                protected function dtgVoucherGrp_Bind(){
                    $this->dtgVoucherGrp->TotalItemCount = VoucherGrp::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgVoucherGrp->Conditions
                                    ));

                    $data = VoucherGrp::QueryArray(
                                QQ::AndCondition(
                                            $this->dtgVoucherGrp->Conditions
                                    ),
                    QQ::Clause(
                            $this->dtgVoucherGrp->OrderByClause,
                            $this->dtgVoucherGrp->LimitClause
                    ));

                    $this->dtgVoucherGrp->DataSource = $data;
                }

                public function dtgVoucherGrpRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/voucher_grp_edit.php/'.$strParameter);
                }

                public function btnNew_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/voucher_grp_edit.php');
                }

                  
            }

	VoucherGrpListForm::Run('VoucherGrpListForm');
?>