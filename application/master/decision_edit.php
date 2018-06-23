<?php
    require('../../qcubed.inc.php');
   // require(__FORMBASE_CLASSES__ . '/DecisionEditFormBase.class.php');

    class DecisionEditForm extends QForm {
	protected $txtName;
        protected $dtgdecision;
        protected $btnSave;
        protected $btnDelete;
        protected $btnNew;
        
        protected function Form_Run() {
            parent::Form_Run();
            
            QApplication::CheckRemoteAdmin();
        }
	protected function Form_Create() {
            parent::Form_Create();

            $this->txtName = new QTextBox($this);
            $this->txtName->Placeholder = "Name";
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Add;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
            
            $this->btnNew = new QButton($this);
            $this->btnNew->Text = "Role";
            $this->btnNew->ButtonMode = QButtonMode::Success;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));                    
            
            
            $this->dtgdecision = new QDataGrid($this);
            $this->dtgdecision->CssClass = "datagrid";
            $this->dtgdecision->ShowFilter = TRUE;

            $this->dtgdecision->Paginator = new QPaginator($this->dtgdecision);
            $this->dtgdecision->ItemsPerPage = 20;

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Decision()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Decision()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Decision()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgdecision->AddColumn($Name);

          
            $this->dtgdecision->SetDataBinder('dtgdecision_Bind');

            $this->dtgdecision->RowActionParameterHtml = '<?= $_ITEM->Iddecision ?>';
            $this->dtgdecision->AddRowAction(new QClickEvent(), new QAjaxAction('dtgdecisionRow_Click'));
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;   
                $decison = Decision::LoadByIddecision($_GET['id']);
                $this->txtName->Text = $decison->Name;
              
            }
        }
        protected function dtgdecision_Bind(){
            $this->dtgdecision->TotalItemCount = Decision::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgdecision->Conditions
                            ));

            $data = Decision::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgdecision->Conditions
                            ),
            QQ::Clause(
                    $this->dtgdecision->OrderByClause,
                    $this->dtgdecision->LimitClause
            ));

            $this->dtgdecision->DataSource = $data;
        }

        public function dtgdecisionRow_Click($strFormId, $strControlId, $strParameter) {            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/decision_edit.php/?id='.$strParameter);
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $decison = Decision::LoadByIddecision($strParameter);
            if($decison){                    
                $decison->Name = $this->txtName->Text;
                $decison->Save();
            }else{
                $decison = new Decision();
                $decison->Name = $this->txtName->Text;
                $decison->Save();
            }
            $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $decison = Decision::LoadByIddecision($_GET['id']);
            $decison->Delete();
            $this->RedirectToListPage();
        }
        protected function btnNew_Click(){
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/decision_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/decision_edit.php');
        }
        
    }
            DecisionEditForm::Run('DecisionEditForm');
?>