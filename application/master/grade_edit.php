<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/GradeEditFormBase.class.php');

    class GradeEditForm extends GradeEditFormBase {
        protected $dtgGrade;

        protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }
            protected function Form_Create() {
                parent::Form_Create();
               
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                
                $this->lstGrpObject->Name = 'Grade Group';
                
                $this->dtgGrade = new QDataGrid($this);
                $this->dtgGrade->CssClass = "datagrid";

                $this->dtgGrade->ShowFilter = TRUE;

                $this->dtgGrade->Paginator = new QPaginator($this->dtgGrade);
                $this->dtgGrade->ItemsPerPage = 8;

                $this->dtgGrade->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  
                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Grade()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Grade()->Name, false)));

                $Name->Filter = QQ::Like(QQN::Grade()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgGrade->AddColumn($Name);

                $this->dtgGrade->AddColumn(new QDataGridColumn('Group', '<?= $_ITEM->GrpObject ?>', 'Width=300'));
                
                $this->dtgGrade->AddColumn(new QDataGridColumn('Min', '<?= $_ITEM->Min ?>', 'Width=300'));
                
                $this->dtgGrade->AddColumn(new QDataGridColumn('Max', '<?= $_ITEM->Max ?>', 'Width=300'));

                $this->dtgGrade->AddColumn(new QDataGridColumn('Factor', '<?= $_ITEM->Factor ?>', 'Width=300'));
                
                $this->dtgGrade->AddColumn(new QDataGridColumn('Expected', '<?= $_ITEM->Exp ?>', 'Width=300'));
                $this->dtgGrade->AddColumn(new QDataGridColumn('Grade Points', '<?= $_ITEM->Gradepoint ?>', 'Width=300'));
                
                $this->dtgGrade->SetDataBinder('dtgGrade_Bind');

                $this->dtgGrade->RowActionParameterHtml = '<?= $_ITEM->Idgrade ?>';
                $this->dtgGrade->AddRowAction(new QClickEvent(), new QAjaxAction('dtgGradeRow_Click'));
            }
            protected function dtgGrade_Bind(){
                $this->dtgGrade->TotalItemCount = Grade::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgGrade->Conditions
                                ));

                $data = Grade::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgGrade->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Grade()->Idgrade, TRUE),
                        $this->dtgGrade->LimitClause
                ));

                $this->dtgGrade->DataSource = $data;
            }

            public function dtgGradeRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/grade_edit.php/'.$strParameter);
            }
            protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                $this->mctGrade->SaveGrade();
                $this->RedirectToListPage();
            }

            protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                $this->mctGrade->DeleteGrade();
                $this->RedirectToListPage();
            }

            protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                $this->RedirectToListPage();
            }

            protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/grade_edit.php');
            }
    }
    GradeEditForm::Run('GradeEditForm');
?>