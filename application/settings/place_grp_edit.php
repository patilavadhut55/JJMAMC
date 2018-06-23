<?php
    require('../../qcubed.inc.php');
    
    require(__FORMBASE_CLASSES__ . '/PlaceGrpEditFormBase.class.php');
    
    class PlaceGrpEditForm extends PlaceGrpEditFormBase {
        protected $dtgPlaceGrp;
        protected function Form_Run() {
                parent::Form_Run();
                QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
                
            $this->dtgPlaceGrp = new QDataGrid($this);
            $this->dtgPlaceGrp->CssClass = "datagrid";

            $this->dtgPlaceGrp->ShowFilter = TRUE;

            $this->dtgPlaceGrp->Paginator = new QPaginator($this->dtgPlaceGrp);
            $this->dtgPlaceGrp->ItemsPerPage = 20;

            $this->dtgPlaceGrp->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::PlaceGrp()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::PlaceGrp()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Place()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgPlaceGrp->AddColumn($Name);
          
            $this->dtgPlaceGrp->SetDataBinder('dtgPlaceGrp_Bind');

            $this->dtgPlaceGrp->RowActionParameterHtml = '<?= $_ITEM->IdplaceGrp ?>';
            $this->dtgPlaceGrp->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));

            }
            
        protected function dtgPlace_Bind(){
            $this->dtgPlace->TotalItemCount = PlaceGrp::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgPlaceGrp->Conditions
                            ));

            $data = PlaceGrp::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgPlaceGrp->Conditions
                            ),
            QQ::Clause(
                    $this->dtgPlaceGrp->OrderByClause,
                    $this->dtgPlaceGrp->LimitClause
            ));

            $this->dtgPlaceGrp->DataSource = $data;
        }

        public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_edit.php/'.$strParameter);
        }
    }
    PlaceGrpEditForm::Run('PlaceGrpEditForm');
?>