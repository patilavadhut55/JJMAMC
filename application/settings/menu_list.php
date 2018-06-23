<?php
	require('../../qcubed.inc.php');

	class MenuListForm extends QForm {
            protected $dtgMenus;
            protected $btnNew;
            
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();		    
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->dtgMenus = new QDataGrid($this);
                    $this->dtgMenus->CssClass = "datagrid";
                    
                    $this->dtgMenus->ShowFilter = TRUE;
                    
                    $this->dtgMenus->Paginator = new QPaginator($this->dtgMenus);
                    $this->dtgMenus->ItemsPerPage = 20;

                    $this->dtgMenus->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Menu()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Menu()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Menu()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgMenus->AddColumn($Name);
                    
                    $this->dtgMenus->AddColumn(new QDataGridColumn('Link', '<?= $_ITEM->Link ?>', 'Width=300'));
                    
                    $this->dtgMenus->SetDataBinder('dtgMenus_Bind');
                    
                    $this->dtgMenus->RowActionParameterHtml = '<?= $_ITEM->Idmenu ?>';
                    $this->dtgMenus->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));
                    
                    $this->btnNew = new QButton($this);
                    $this->btnNew->HtmlEntities = FALSE;
                    $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                    $this->btnNew->ButtonMode = QButtonMode::Success;
                    $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
                }
                
                
                protected function dtgMenus_Bind(){
                    $this->dtgMenus->TotalItemCount = Menu::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgMenus->Conditions
                                    ));

                    $data = Menu::QueryArray(
                                QQ::AndCondition(
                                            $this->dtgMenus->Conditions
                                    ),
                    QQ::Clause(
                            $this->dtgMenus->OrderByClause,
                            $this->dtgMenus->LimitClause
                    ));
                   
                    $this->dtgMenus->DataSource = $data;
                }
                
                public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/menu_edit.php/'.$strParameter);
                }
            
                public function btnNew_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/menu_edit.php');
                }
            
	}

	MenuListForm::Run('MenuListForm');
?>