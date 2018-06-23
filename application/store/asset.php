<?php
  require('../../qcubed.inc.php');
  
  class BookEditForm extends QForm {
      protected $txtcode;
      protected $txtname;
      protected $dtgLedger;
      protected $btnSave;
      protected $btnCancel;
      protected $btnDelete;


      protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            }

        protected function Form_Create() {
         
            parent::Form_Create();
            $this->txtcode = new QTextBox($this);
            $this->txtcode->Name = "Code";
            $this->txtcode->Width = 90;
            $this->txtcode->ReadOnly = True;
           
            $this->txtname = new QTextBox($this);
            $this->txtname->Name = "Name";
            $this->txtname->Required = TRUE;
            $this->txtname->Width = 500;
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->CausesValidation = TRUE;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            
            $this->dtgLedger = new QDataGrid($this);
            $this->dtgLedger->CssClass = "datagrid";

            $this->dtgLedger->ShowFilter = TRUE;

            $this->dtgLedger->Paginator = new QPaginator($this->dtgLedger);
            $this->dtgLedger->ItemsPerPage = 10;
            
            $this->dtgLedger->SetDataBinder('dtgLedger_Bind');
           
            $this->dtgLedger->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));            
            //$this->dtgLedger->MetaAddColumn("Username");
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array('OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));
            $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $Name->FilterBoxSize = 15;    
            $this->dtgLedger->AddColumn($Name);
            $this->dtgLedger->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
            $this->dtgLedger->AddRowAction(new QClickEvent(), new QServerAction('dtgproassetRow_Click'));
            
            if(isset($_GET['id'])){
                $led = Ledger::LoadByIdledger($_GET['id']);
                $this->txtcode->Text = $led->Code;
                $this->txtname->Text = $led->Name;
                $this->btnSave->Text = "Update";
                $this->btnDelete->Visible = TRUE;
            }  else {
                $codes = Settings::LoadAll();
                foreach ($codes as $code){
                    if($code->Name == 'Ledger Counter'){
                        $this->txtcode->Text = $code->Option; 
                    }
                } 
            }
        }
        protected function dtgLedger_Bind(){
         
                $this->dtgLedger->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(                                    
                                $this->dtgLedger->Conditions,
                                QQ::Equal(QQN::Ledger()->Grp, getsettingvalue('store_asset'))
                                ));

                $data = Ledger::QueryArray(
                            QQ::AndCondition(
                                $this->dtgLedger->Conditions,
                                QQ::Equal(QQN::Ledger()->Grp, getsettingvalue('store_asset'))    
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Ledger()->Idledger, TRUE),
                        $this->dtgLedger->LimitClause
                ));
                $this->dtgLedger->DataSource = $data;
            
        }
        protected function btnSave_Click(){
               if(isset($_GET['id'])){
                    $led =  Ledger::LoadByIdledger($_GET['id']);
                   }else{
                        $led = new Ledger();
                        $code = Settings::LoadByIdsettings(2);
                        $this->txtcode->Text = $code->Option;
                        $code->Option = $code->Option + 1;
                        $code->Save();
                        $led->Code = $this->txtcode->Text;
                        
                    }
                    $led->Name = $this->txtname->Text;
                    $led->Grp = getsettingvalue('store_asset');//asset grp
                    $led->Save();
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/asset.php');
                    
               
            }
            protected function btnCancel_Click(){
                
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/asset.php');
                    
            }
            protected function btnDelete_Click(){
                if(isset($_GET['id'])){
                    $led =  Ledger::LoadByIdledger($_GET['id']);
                    $led->Delete();
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/asset.php');
                }
            }
            public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
                  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/asset.php?id='.$strParameter);
            }
            
        
  }
  BookEditForm::Run('BookEditForm');
?>

