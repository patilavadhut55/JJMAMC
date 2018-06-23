<?php
    require('../../qcubed.inc.php');
   // require(__FORMBASE_CLASSES__ . '/PrefixEditFormBase.class.php');

    class PrefixEditForm extends QForm {
	protected $txtName;
        protected $txtShortName;
        protected $dtgprefix;
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
            
            $this->txtShortName = new QTextBox($this);
            $this->txtShortName->Placeholder = " Short Name";
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Add;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
            
            $this->btnNew = new QButton($this);
            $this->btnNew->Text = "";
            $this->btnNew->ButtonMode = QButtonMode::Success;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));                    
        
            $this->dtgprefix = new QDataGrid($this);
            $this->dtgprefix->CssClass = "datagrid";
            $this->dtgprefix->ShowFilter = TRUE;

            $this->dtgprefix->Paginator = new QPaginator($this->dtgprefix);
            $this->dtgprefix->ItemsPerPage = 20;

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Prefix()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Prefix()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Prefix()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgprefix->AddColumn($Name);

          
            $this->dtgprefix->SetDataBinder('dtgprefix_Bind');

            $this->dtgprefix->RowActionParameterHtml = '<?= $_ITEM->Idprefix ?>';
            $this->dtgprefix->AddRowAction(new QClickEvent(), new QAjaxAction('dtgprefixRow_Click'));
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;   
                $prefix = Prefix::LoadByIdprefix($_GET['id']);
                $this->txtName->Text = $prefix->Name;
                $this->txtShortName->Text =$prefix->ShortName;
            }
        }
        protected function dtgprefix_Bind(){
            $this->dtgprefix->TotalItemCount = Prefix::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgprefix->Conditions
                            ));

            $data = Prefix::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgprefix->Conditions
                            ),
            QQ::Clause(
                    $this->dtgprefix->OrderByClause,
                    $this->dtgprefix->LimitClause
            ));

            $this->dtgprefix->DataSource = $data;
        }

        public function dtgprefixRow_Click($strFormId, $strControlId, $strParameter) {            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/prefix_edit.php/?id='.$strParameter);
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $prefix = Prefix::LoadByIdprefix($strParameter);
            if($prefix){                    
                $prefix->Name = $this->txtName->Text;
                $prefix->ShortName = $this->txtShortName->Text;
                $prefix->Save();
            }else{
                $prefix = new Prefix();
                $prefix->Name = $this->txtName->Text;
                $prefix->ShortName = $this->txtShortName->Text;
                $prefix->Save();
            }
            $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $prefix = Prefix::LoadByIdprefix($_GET['id']);
            $prefix->Delete();
            $this->RedirectToListPage();
        }
        protected function btnNew_Click(){
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/prefix_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/prefix_edit.php');
        }
        
    }
 PrefixEditForm::Run('PrefixEditForm');
?>