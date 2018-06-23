<?php
    require('../../qcubed.inc.php');
    require(__FORMBASE_CLASSES__ . '/GroupEditFormBase.class.php');

    class GroupEditForm extends GroupEditFormBase {
	protected $txtGrpName;
        protected $txtGrpDescription;
        protected $dtgGroup;
        
        protected $btnGrpSave;
        protected $btnGrpDelete;
        protected $btnGrpNew;
        
        protected function Form_Run() {
            parent::Form_Run();
            
            QApplication::CheckRemoteAdmin();
        }
	protected function Form_Create() {
            parent::Form_Create();

            $this->txtGrpName = new QTextBox($this);
            $this->txtGrpName->Placeholder = "Name";
            
            $this->txtGrpDescription = new QTextBox($this);
            $this->txtGrpDescription->Placeholder = "Description";
            
            $this->btnGrpSave = new QButton($this);
            $this->btnGrpSave->ButtonMode = QButtonMode::Add;
            $this->btnGrpSave->AddAction(new QClickEvent(), new QServerAction("btnGrpSave_Click"));
            
            $this->btnGrpDelete = new QButton($this);
            $this->btnGrpDelete->ButtonMode = QButtonMode::Delete;
            $this->btnGrpDelete->Visible = FALSE;
            $this->btnGrpDelete->AddAction(new QClickEvent(), new QServerAction("btnGrpDelete_Click"));
            
            $this->btnGrpNew = new QButton($this);
            $this->btnGrpNew->Text = "Role";
            $this->btnGrpNew->ButtonMode = QButtonMode::Success;
            $this->btnGrpNew->AddAction(new QClickEvent(), new QServerAction("btnGrpNew_Click"));                    
            
            
            $this->dtgGroup = new QDataGrid($this);
            $this->dtgGroup->CssClass = "datagrid";
            $this->dtgGroup->ShowFilter = TRUE;

            $this->dtgGroup->Paginator = new QPaginator($this->dtgGroup);
            $this->dtgGroup->ItemsPerPage = 20;

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Group()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Group()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Group()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgGroup->AddColumn($Name);

            $this->dtgGroup->AddColumn(new QDataGridColumn('Description', '<?= $_ITEM->Description ?>', 'Width=300'));

            $this->dtgGroup->SetDataBinder('dtgGroup_Bind');

            $this->dtgGroup->RowActionParameterHtml = '<?= $_ITEM->Idgroup ?>';
            $this->dtgGroup->AddRowAction(new QClickEvent(), new QAjaxAction('dtgGroupRow_Click'));
            
            if(isset($_GET['id'])){
                $this->btnGrpDelete->Visible = TRUE;   
                $grp = Group::LoadByIdgroup($_GET['id']);
                $this->txtGrpName->Text = $grp->Name;
                $this->txtGrpDescription->Text = $grp->Description;
                $this->btnGrpSave->ActionParameter = $_GET['id'];
            }
        }
        protected function dtgGroup_Bind(){
            $this->dtgGroup->TotalItemCount = Group::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgGroup->Conditions
                            ));

            $data = Group::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgGroup->Conditions
                            ),
            QQ::Clause(
                    $this->dtgGroup->OrderByClause,
                    $this->dtgGroup->LimitClause
            ));

            $this->dtgGroup->DataSource = $data;
        }

        public function dtgGroupRow_Click($strFormId, $strControlId, $strParameter) {            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdgroup->Text.'?id='.$strParameter.'&tab=4');
        }
        
        protected function btnGrpSave_Click($strFormId, $strControlId, $strParameter) {
            $grp = Group::LoadByIdgroup($strParameter);
            if($grp){                    
                $grp->Name = $this->txtGrpName->Text;
                $grp->Description = $this->txtGrpDescription->Text;
                $grp->Save();
            }else{
                $grp = new Group();
                $grp->Name = $this->txtGrpName->Text;
                $grp->Description = $this->txtGrpDescription->Text;
                $grp->Save();
            }
            $this->RedirectToListPage();
        }
        protected function btnGrpDelete_Click($strFormId, $strControlId, $strParameter) {
            $grp = Group::LoadByIdgroup($_GET['id']);
            $grp->Delete();
            $this->RedirectToListPage();
        }
        protected function btnGrpNew_Click(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/group_edit.php');
        }
        
    }
 GroupEditForm::Run('GroupEditForm');
?>