<?php
  require('../../qcubed.inc.php');
  
    class Employeelist extends QForm {
        protected $lstDepartment;
        protected $lstDesignation;
        protected $dtgemployee;
        protected $btnNew;
        protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
                }

        protected function Form_Create() {
            parent::Form_Create();            
            $this->lstDepartment = new QSelect2ListBox($this);
            $this->lstDesignation = new QSelect2ListBox($this);
            $this->lstDepartment->AddItem("-Select Organisation/Department-", NULL);    
            $this->lstDesignation->AddItem("-Select Designation-", NULL);  
            $grps = array(1,3);
            $roles = Role::QueryArray(
                    QQ::AndCondition(
                        QQ::In(QQN::Role()->Grp, $grps)
                    ),
                    QQ::OrderBy(QQN::Role()->Code)                    
                    );
            foreach ($roles as $role){
               $this->lstDepartment->AddItem($role->Name, $role->Idrole);                    
            }
            
            if(isset($_GET['dept'])){
                $des = Role::LoadByIdrole($_GET['dept']);
                //$this->lstDepartment->SelectedValue = $des->Parrent;
                $this->lstDepartment->SelectedValue = $_GET['dept'];
            }
            $this->btnNew = new QButton($this);
            $this->btnNew->ButtonMode = QButtonMode::AddNew;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));                    
            
            $this->dtgemployee = new QDataGrid($this);
            $this->dtgemployee->CssClass = "datagrid";

            $this->dtgemployee->ShowFilter = TRUE;
            $this->dtgemployee->Paginator = new QPaginator($this->dtgemployee);
            $this->dtgemployee->ItemsPerPage = 100;
            $this->dtgemployee->SetDataBinder('dtgemployee_Bind');
           
            $this->dtgemployee->AddColumn(new QDataGridColumn('Seq', '<?= $_FORM-> renderacc($_ITEM) ?>', 'HtmlEntities=false', 'Width=50'));
           
            $this->dtgemployee->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->LoginIdloginObject->IdloginObject->Code ?> ', 'Width=50'));            
            //$this->dtgemployee->MetaAddColumn("Username");
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->LoginIdloginObject->IdloginObject->Name ?>', 'Width=400',
                                        array('OrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Name, false)));
            $Name->Filter = QQ::Like(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $Name->FilterBoxSize = 20;    
            $this->dtgemployee->AddColumn($Name);
            
            $Dept = new QDataGridColumn('Designation', '<?= $_ITEM->RoleIdroleObject->Name ?> ', 'Width=200',
                                        array('OrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->RoleIdroleObject->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->RoleIdroleObject->Name, false)));
            $Dept->Filter = QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, null);
            $Dept->FilterPostfix = $Dept->FilterPrefix = '%';
            $Dept->FilterType = QFilterType::TextFilter;
            $Dept->FilterBoxSize = 20;    
            $this->dtgemployee->AddColumn($Dept);
            
            $this->dtgemployee->AddColumn(new QDataGridColumn('Edit', '<?= $_FORM-> renderedit($_ITEM) ?>', 'HtmlEntities=false', 'Width=50'));
           
            
            $this->dtgemployee->RowActionParameterHtml = '<?= $_ITEM->LoginIdlogin ?>';
            
            //$this->dtgemployee->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));
            
            $this->lstDepartment->AddAction(new QClickEvent(), new QServerAction("lstDepartment_Click"));
            
        }
        protected function lstDepartment_Click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_list.php?dept='.$this->lstDepartment->SelectedValue);
            
        }
        public function renderedit(LoginHasRole $login) {
            $objControlId = 'edit'.$login->LoginIdlogin."a".$login->RoleIdrole;
            if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QButton($this, $objControlId);
            $objControl->ButtonMode = QButtonMode::Success;
            $objControl->Text = "Edit";
            $objControl->AddAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));
            $objControl->ActionParameter = $login->LoginIdlogin;
            }
            return $objControl->Render(false);
        }
         public function renderedit_change($strFormId, $strControlId, $strParameter) {
             $ledger = Ledger::LoadByIdledger($strParameter);
             $ledger->Seq = $this->GetControl($strControlId)->Text;
             $ledger->Save();
         }

        public function renderacc(LoginHasRole $login) {
                    $objControlId = 'acc'.$login->LoginIdlogin."a".$login->RoleIdrole;
                    if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QTextBox($this, $objControlId);
                    $objControl->Text = $login->LoginIdloginObject->IdloginObject->Seq;
                    
                    $objControl->AddAction(new QChangeEvent(), new QAjaxAction('renderacc_change'));
                    $objControl->ActionParameter = $login->LoginIdlogin;
                    }
                    return $objControl->Render(false);
        }
        public function renderacc_change($strFormId, $strControlId, $strParameter) {
             $ledger = Ledger::LoadByIdledger($strParameter);
             $ledger->Seq = $this->GetControl($strControlId)->Text;
             $ledger->Save();
        }
        
        protected function dtgemployee_Bind(){
            if(isset($_GET['dept']) ){
                 $this->dtgemployee->TotalItemCount = LoginHasRole::QueryCount(
                            QQ::AndCondition(                                    
                                $this->dtgemployee->Conditions,
                                QQ::Equal(QQN::LoginHasRole()->Active, 1),    
                                QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_GET['dept']),    
                                QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp,34),
                                QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1)
                            )
                        );

                $data = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgemployee->Conditions,
                                    QQ::Equal(QQN::LoginHasRole()->Active, 1),    
                                    QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                                    QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_GET['dept']),
                                    QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp,34)
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::LoginHasRole()->LoginIdlogin, TRUE),
                        $this->dtgemployee->LimitClause
                ));
                 $this->dtgemployee->DataSource = $data;
            }else{
                $this->dtgemployee->TotalItemCount = LoginHasRole::QueryCount(
                        QQ::AndCondition(                                    
                            $this->dtgemployee->Conditions,
                            QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                            QQ::Equal(QQN::LoginHasRole()->Active, 1),
                            QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp,34)
                        )
                    );
                $data = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                                $this->dtgemployee->Conditions,
                                QQ::NotEqual(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Idledger,1),
                                QQ::Equal(QQN::LoginHasRole()->Active, 1),
                                QQ::Equal(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Grp,34)                                    
                            ),
                            QQ::Clause(
                                    QQ::OrderBy(QQN::LoginHasRole()->LoginIdlogin, TRUE),
                                    $this->dtgemployee->LimitClause
                            )
                        );
                 $this->dtgemployee->DataSource = $data;
            }
        }
        
        protected function btnNew_Click() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?new=1');
        }
        
        public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$strParameter);
        }

        public function dtgRoleRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$_GET['emp'].'&role='.$strParameter.'&tab=4');
        }
    }                
Employeelist::Run('Employeelist');
?>
