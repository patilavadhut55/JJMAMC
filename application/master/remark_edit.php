<?php
    require('../../qcubed.inc.php');
   // require(__FORMBASE_CLASSES__ . '/RemarkEditFormBase.class.php');

    class RemarkEditForm extends QForm {
	protected $txtName;
        protected $dtgremark;
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
            
            
            $this->dtgremark = new QDataGrid($this);
            $this->dtgremark->CssClass = "datagrid";
            $this->dtgremark->ShowFilter = TRUE;

            $this->dtgremark->Paginator = new QPaginator($this->dtgremark);
            $this->dtgremark->ItemsPerPage = 20;

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Remark()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Remark()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Remark()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgremark->AddColumn($Name);

          
            $this->dtgremark->SetDataBinder('dtgremark_Bind');

            $this->dtgremark->RowActionParameterHtml = '<?= $_ITEM->Idremark ?>';
            $this->dtgremark->AddRowAction(new QClickEvent(), new QAjaxAction('dtgremarkRow_Click'));
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;   
                $gend = Remark::LoadByIdremark($_GET['id']);
                $this->txtName->Text = $gend->Name;
              
            }
        }
        protected function dtgremark_Bind(){
            $this->dtgremark->TotalItemCount = Remark::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgremark->Conditions
                            ));

            $data = Remark::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgremark->Conditions
                            ),
            QQ::Clause(
                    $this->dtgremark->OrderByClause,
                    $this->dtgremark->LimitClause
            ));

            $this->dtgremark->DataSource = $data;
        }

        public function dtgremarkRow_Click($strFormId, $strControlId, $strParameter) {            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/remark_edit.php/?id='.$strParameter);
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $gend = Remark::LoadByIdremark($strParameter);
            if($gend){                    
                $gend->Name = $this->txtName->Text;
                $gend->Save();
            }else{
                $gend = new Remark();
                $gend->Name = $this->txtName->Text;
                $gend->Save();
            }
            $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $gend = Remark::LoadByIdremark($_GET['id']);
            $gend->Delete();
            $this->RedirectToListPage();
        }
        protected function btnNew_Click(){
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/remark_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/remark_edit.php');
        }
        
    }
 RemarkEditForm::Run('RemarkEditForm');
?>