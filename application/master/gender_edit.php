<?php
    require('../../qcubed.inc.php');
   // require(__FORMBASE_CLASSES__ . '/GenderEditFormBase.class.php');

    class GenderEditForm extends QForm {
	protected $txtName;
        protected $dtggender;
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
            
            
            $this->dtggender = new QDataGrid($this);
            $this->dtggender->CssClass = "datagrid";
            $this->dtggender->ShowFilter = TRUE;

            $this->dtggender->Paginator = new QPaginator($this->dtggender);
            $this->dtggender->ItemsPerPage = 20;

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Gender()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Gender()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Gender()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtggender->AddColumn($Name);

          
            $this->dtggender->SetDataBinder('dtggender_Bind');

            $this->dtggender->RowActionParameterHtml = '<?= $_ITEM->Idgender ?>';
            $this->dtggender->AddRowAction(new QClickEvent(), new QAjaxAction('dtggenderRow_Click'));
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;   
                $gend = Gender::LoadByIdgender($_GET['id']);
                $this->txtName->Text = $gend->Name;
              
            }
        }
        protected function dtggender_Bind(){
            $this->dtggender->TotalItemCount = Gender::QueryCount(
                    QQ::AndCondition(
                                    $this->dtggender->Conditions
                            ));

            $data = Gender::QueryArray(
                        QQ::AndCondition(
                                    $this->dtggender->Conditions
                            ),
            QQ::Clause(
                    $this->dtggender->OrderByClause,
                    $this->dtggender->LimitClause
            ));

            $this->dtggender->DataSource = $data;
        }

        public function dtggenderRow_Click($strFormId, $strControlId, $strParameter) {            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/gender_edit.php/?id='.$strParameter);
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $gend = Gender::LoadByIdgender($strParameter);
            if($gend){                    
                $gend->Name = $this->txtName->Text;
                $gend->Save();
            }else{
                $gend = new Gender();
                $gend->Name = $this->txtName->Text;
                $gend->Save();
            }
            $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $gend = Gender::LoadByIdgender($_GET['id']);
            $gend->Delete();
            $this->RedirectToListPage();
        }
        protected function btnNew_Click(){
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/gender_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/gender_edit.php');
        }
        
    }
 GenderEditForm::Run('GenderEditForm');
?>