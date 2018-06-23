<?php
    require('../../qcubed.inc.php');

    class LedgerEditForm extends QForm {
        protected $txtName;
        //protected $txtMname;
        protected $txtCode;
        protected $btnSave;
        protected $btnCancel;
        protected $btnDelete;
        protected $btnList;
        protected $lstGroup;
        protected $dtgLedger;
        protected $chkGrp;
        protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }
        protected function Form_Create() {
            parent::Form_Create();
 
            $this->btnSave = new QButton($this);
            $this->btnCancel = new QButton($this);
            $this->btnDelete = new QButton($this);
            
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnList_Click'));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            
            $this->txtName = new QTextBox($this);
            $this->txtName->Placeholder = "Name";
            
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Placeholder = "Code";
            //$this->txtCode->ReadOnly = TRUE;
            $this->txtCode->Visible = FALSE;
            $this->txtCode->Width = 70;            
            $this->txtCode->Name = "Code";
            //if role is configrator then display textbox code            
            if($_SESSION['role']== "1"){
                $this->txtCode->Visible = TRUE;    
            }
            $counter = Settings::LoadByIdsettings(2);
            $this->txtCode->Text = $counter->Option;
            
//            $this->txtMname = new QTextBox($this);
//            $this->txtMname->Placeholder = "Marathi Name";
//            $this->txtMname->Width = "245px";
            
            $this->lstGroup = new QSelect2ListBox($this);
            $this->lstGroup->Name = "Group";
            $leds = Ledger::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Ledger()->IsGrp, 1)
                        )
                    );
            $this->lstGroup->AddItem("Select Group", NULL);    
            foreach ($leds as $led) $this->lstGroup->AddItem($led->Name, $led->Idledger);    

            $this->chkGrp = new QCheckBox($this);
            $this->chkGrp->Name = "Group";
            
            $this->dtgLedger = new QDataGrid($this);
            $this->dtgLedger->CssClass = "datagrid";

            $this->dtgLedger->ShowFilter = TRUE;

            $this->dtgLedger->Paginator = new QPaginator($this->dtgLedger);
            $this->dtgLedger->ItemsPerPage = 10;

            $this->dtgLedger->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgLedger->AddColumn($Name);
            

            //group
            $grp = new QDataGridColumn('Group', '<?= $_ITEM->GrpObject ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Ledger()->GrpObject->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->GrpObject->Name, false)));

            $grp->Filter = QQ::Like(QQN::Ledger()->GrpObject->Name, null);
            $grp->FilterPostfix = $grp->FilterPrefix = '%';
            $grp->FilterType = QFilterType::TextFilter;
            $this->dtgLedger->AddColumn($grp);

            $this->dtgLedger->AddColumn(new QDataGridColumn('Login', '<?= $_ITEM->Login ?>', 'Width=300'));
            $this->dtgLedger->AddColumn(new QDataGridColumn('Is Group', '<?= $_FORM-> renderacc($_ITEM) ?>', 'HtmlEntities=false', 'Width=50'));
            
            $this->dtgLedger->SetDataBinder('dtgLedger_Bind');

            $this->dtgLedger->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
            $this->dtgLedger->AddRowAction(new QClickEvent(), new QServerAction('dtgledgerRow_Click'));

                if(isset($_GET['id'])){
                    $this->btnDelete->Visible = TRUE;
                    $ledger = Ledger::LoadByIdledger($_GET['id']);
                    $this->txtCode->Text = $ledger->Code;
                    $this->txtName->Text = $ledger->Name;
                    $this->lstGroup->SelectedValue = $ledger->Grp;
                    $this->chkGrp->Checked = $ledger->IsGrp;
                   // $this->txtMname->Text = $ledger->Mname;
                }else{
                    $this->chkGrp->Checked = 0;
                }            
            }
            
            protected function dtgLedger_Bind(){
                
                $this->dtgLedger->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgLedger->Conditions,
                                        QQ::NotEqual(QQN::Ledger()->Grp, 79)
                                ));

                $data = Ledger::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgLedger->Conditions,
                                        QQ::NotEqual(QQN::Ledger()->Grp, 79)
                                ),
                QQ::Clause(
                        $this->dtgLedger->OrderByClause,
                        $this->dtgLedger->LimitClause
                ));

                $this->dtgLedger->DataSource = $data;
            }

        public function dtgledgerRow_Click($strFormId, $strControlId, $strParameter) {
            $login = Login::LoadByIdlogin($strParameter);
            if(!$login)
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/ledger_edit.php?id='.$strParameter);
            else
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php/'.$strParameter);
        }
        
        public function renderacc(Ledger $ledger) {
            $objControlId = 'acc'.$ledger->Idledger;
            if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QCheckBox($this, $objControlId);
            $objControl->AddAction(new QChangeEvent(), new QServerAction('renderacc_change')); 
            $objControl->ActionParameter = $ledger->Idledger;
            $objControl->Checked = $ledger->IsGrp;
            }

            return $objControl->Render(false);
        }

        public function renderacc_change($strFormId, $strControlId, $strParameter) {
            $ledger = Ledger::LoadByIdledger($strParameter);
            $ledger->IsGrp = $this->GetControl($strControlId)->Checked; 
            $ledger->Save();
            $this->btnList_Click();
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if(isset($_GET['id'])){
                $ledger = Ledger::LoadByIdledger($_GET['id']);
                $ledger->Code = $this->txtCode->Text;
            }else{
                $ledger = new Ledger();
                $counter = Settings::LoadByIdsettings(2);
                if($this->txtCode->Text == $counter->Option)
                    $ledger->Code = $counter->Option;
                else
                    $ledger->Code = $this->txtCode->Text;
                
                updateCounter($counter->Idsettings);
            }
            $ledger->Name = $this->txtName->Text;
            $ledger->Grp = $this->lstGroup->SelectedValue;
            $ledger->IsGrp = $this->chkGrp->Checked;
            //$ledger->Mname = $this->txtMname->Text;
            $ledger->Save();
            
            $this->btnList_Click();
        }

        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $ledger = Ledger::LoadByIdledger($_GET['id']);
            $ledger->Delete();
            
            $this->btnList_Click();
        }
        public function btnList_Click() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/ledger_edit.php');
        }
    }
    LedgerEditForm::Run('LedgerEditForm');
?>