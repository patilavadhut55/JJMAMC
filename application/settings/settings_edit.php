<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/SettingsEditFormBase.class.php');
    class SettingsEditForm extends SettingsEditFormBase {
            protected $btnList;
            protected $dtgSetting;
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                
                $this->btnList = new QButton($this);
                $this->btnList->ButtonMode = QButtonMode::listall;
                $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));
        
                 $this->dtgSetting = new QDataGrid($this);
                $this->dtgSetting->CssClass = "datagrid";

                $this->dtgSetting->ShowFilter = TRUE;

                $this->dtgSetting->Paginator = new QPaginator($this->dtgSetting);
                $this->dtgSetting->ItemsPerPage = 20;

                $this->dtgSetting->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  

                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Settings()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Settings()->Name, false)));

                $Name->Filter = QQ::Like(QQN::Settings()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgSetting->AddColumn($Name);

                $this->dtgSetting->AddColumn(new QDataGridColumn('Option', '<?= $_ITEM->Option ?>', 'Width=50'));
               
                $this->dtgSetting->SetDataBinder('dtgSetting_Bind');

                $this->dtgSetting->RowActionParameterHtml = '<?= $_ITEM->Idsettings ?>';
                $this->dtgSetting->AddRowAction(new QClickEvent(), new QServerAction('dtgSettingRow_Click'));

            }


            protected function dtgSetting_Bind(){
                $this->dtgSetting->TotalItemCount = Settings::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgSetting->Conditions
                                ));

                $data = Settings::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgSetting->Conditions
                                ),
                QQ::Clause(
                        $this->dtgSetting->OrderByClause,
                        $this->dtgSetting->LimitClause
                ));

                $this->dtgSetting->DataSource = $data;
            }

            public function dtgSettingRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/settings_edit.php/'.$strParameter);
            }

                
            public function btnList_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/settings_edit.php');
            }
            protected function RedirectToListPage() {
		QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/settings_edit.php');
            }
    }

    SettingsEditForm::Run('SettingsEditForm');
?>