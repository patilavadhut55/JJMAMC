<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/LedgerEditFormBase.class.php');
	
	class LedgerEditForm extends LedgerEditFormBase {
		protected $dtgledger;
                protected $autocompletesub;
                protected $txtsubof;
                protected $txtdr;
                protected $txtcr;
                protected $arrProduct;
                protected $txtProduct;
                protected $lblcurrentbal;
                protected $btnexport;
                
                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->txtName->Name = "naav";
                            
                    $this->lblcurrentbal = new QLabel($this);
                    $this->lblcurrentbal->HtmlEntities = FALSE;
                    $this->lblcurrentbal->Name = "Current Balance";        
                    $this->txtBalance->ReadOnly = TRUE;
                    
                    $login = Login::LoadByIdlogin($_SESSION['idlogin']);
                    
                    if($this->mctLedger->EditMode == False)
                    
                    $this->autocompletesub = array();
                    $objnames = Ledger::LoadAll(QQ::OrderBy(QQN::Ledger()->Name));
                    foreach($objnames as $objname){
                        $this->autocompletesub[$objname->Idledger] = $objname->Name;
                    }
                    $this->txtsubof = new QJavaScriptAutoCompleteTextBox($this,$this->autocompletesub);
                    $this->txtsubof->Width=200;
                    $this->txtsubof->Name='Group';
                    
                    //autocomplete declarations for product
                    
                    $this->arrProduct = array();
                    $products = Product::LoadAll(QQ::OrderBy(QQN::Product()->Name));
                    
                    foreach($products as $product){
                        $this->arrProduct[$product->Idproduct] = $product->Name;
                    }
                    
                    $this->txtProduct = new QJavaScriptAutoCompleteTextBox($this, $this->arrProduct);
                    $this->txtProduct->Name = 'Fees / Assets';
                    $this->txtProduct->Width = 200;
                    
                    $this->txtdr = new QTextBox($this);
                    $this->txtcr = new QTextBox($this);
                    $this->txtcr->Name = "Cr.";
                    $this->txtdr->Name = "Dr.";
                    
                    
                    $this->txtDescription->TextMode = QTextMode::SingleLine;
                    $this->txtDescription->Width = 600;
                    $this->chkTrialbal->Name = "Show in Trial Balance";
                    
                    
                    $this->dtgledger = new QDataGrid($this);
                
                    $this->dtgledger->Paginator = new QPaginator($this->dtgledger);
                    $this->dtgledger->ItemsPerPage = 15;
                    $this->dtgledger->ShowFilter = TRUE;
                    $this->dtgledger->ShowFilterButton = FALSE;
                    $this->dtgledger->ShowFilterResetButton = FALSE;
                    $this->dtgledger->Width = 800;
                    $this->dtgledger->SetDataBinder('dtgledger_Bind'); 
                    
                    $this->dtgledger->AddColumn(new QDataGridColumn('Srn', '<?= $_ITEM->Idledger ?>', 'Width=50'));
                    
                    
                    $this->dtgledger->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
                    $this->dtgledger->AddRowAction(new QMouseOutEvent(), new QCssClassAction());
                 
                    $this->dtgledger->AddRowAction(new QClickEvent(), new QAjaxAction('dtgledgerRow_Click'));
                    $this->dtgledger->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=150',
				array(
					  'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
					  'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));
            
                    $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $Name->FilterBoxSize = 20;
                    $this->dtgledger->AddColumn($Name);
                    
                    $SubOf =new QDataGridColumn('Group','<?= $_ITEM->SubOfObject ?>',
                           array(
					  'OrderByClause' => QQ::OrderBy(QQN::Ledger()->SubOfObject->Name),
					  'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->SubOfObject->Name, false)));
                    $SubOf->Filter = QQ::Like(QQN::Ledger()->SubOfObject->Name, null);
                    $SubOf->FilterPrefix = $SubOf->FilterPostfix='%';
                    $SubOf->FilterType = QFilterType::TextFilter;
                    $SubOf->FilterBoxSize = 15;
                    $this->dtgledger->AddColumn($SubOf);
                    
                    $this->dtgledger->AddColumn(new QDataGridColumn('Reference', '<?= $_ITEM->MemberObject ?><?= $_ITEM->ProductObject ?>', 'Width=150'));
                    
                    $this->dtgledger->AddColumn(new QDataGridColumn('Opening Bal', '<div align="right"><?= $_FORM-> renderDr($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=100'));
                    
                    $Y = date('Y');
                    $M = date('m');
                    if($M <= 3)$Y = $Y -1;
                 If($this->mctLedger->EditMode == TRUE){
                    $objSubof = Ledger::LoadByIdledger($this->lblIdledger->Text);
                    $this->txtsubof->Text = (string)$objSubof->SubOfObject; 
                    
                    $voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->From, $this->lblIdledger->Text),
                                            QQ::Equal(QQN::Voucher()->To, 103)
                                            )
                                    );
                            if($voutures){
                                foreach ($voutures as $vouture){}
                                 $this->txtdr->Text = $vouture->Amount ;
                            }
                           if($this->chkLock->Checked == 1){
                               $this->txtsubof->Visible = FALSE;
                           }else{
                               $this->txtsubof->Visible = TRUE;
                               $this->txtsubof->Required = TRUE;
                           }
                        }
                        $vovs = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->To, $this->lblIdledger->Text),
                                            QQ::Equal(QQN::Voucher()->From, 103)
                                            )
                                    );
                            if($vovs){
                                foreach ($vovs as $vov){}
                                 $this->txtcr->Text = $vov->Amount ;
                            }
                       
                        $balance = number_format($this->txtBalance->Text,2,'.','');
                        if($balance < 0 ){
                            $balance = $balance * -1;
                            $this->lblcurrentbal->Text = $balance.'<b> Cr.</b>';
                        }elseif($balance == 0){
                            $this->lblcurrentbal->Text = $balance;
                        }else{
                            $this->lblcurrentbal->Text = $balance.'<b> Dr.</b>';
                        }
                    // Button  download entire datagrid as Microsoft Excel .xls file
                    $this->btnexport = new QDataGridExporterButton($this, $this->dtgledger);
                    $this->btnexport->DownloadFormat = QDataGridExporterButton::EXPORT_AS_XLS;
                    $this->btnexport->Text = "Export To Excel";
                    $this->btnexport->HtmlEntities = FALSE;
                    
                                
            }
            public function renderDr(Ledger $obj) {
                $Y = date('Y');
                    $M = date('m');
                    if($M <= 3)$Y = $Y -1;
                $objControlId = 'Dr'.$obj->Idledger;

                if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QLabel($this, $objControlId);
                    $voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->From, $obj->Idledger),
                                            QQ::Equal(QQN::Voucher()->To, 103)
                                            )
                                    );
                            if($voutures){
                                foreach ($voutures as $vouture){}
                                $objControl->Text = $vouture->Amount.'(Dr)' ;
                            }
                            
                        $vovs = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->To, $obj->Idledger),
                                            QQ::Equal(QQN::Voucher()->From, 103)
                                            )
                                    );
                            if($vovs){
                                foreach ($vovs as $vov){}
                                $objControl->Text = $vov->Amount.'(Cr)' ;
                            }    
                            
                        }
   
                     return $objControl->Render(false);
           }
            public function renderCr(Ledger $obj) {
                $Y = date('Y');
                    $M = date('m');
                    if($M <= 3)$Y = $Y -1;    
                $objControlId = 'Cr'.$obj->Idledger;

                if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QLabel($this, $objControlId);
                    $voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->To, $obj->Idledger),
                                            QQ::Equal(QQN::Voucher()->From, 103)
                                            )
                                    );
                            if($voutures){
                                foreach ($voutures as $vouture){}
                                $objControl->Text = $vouture->Amount ;
                            }
                        }
   
                     return $objControl->Render(false);
           }    
                protected function dtgledger_Bind(){
                    $this->dtgledger->TotalItemCount = Ledger::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgledger->Conditions
                                            
                                    ));

                    $data = Ledger::QueryArray(
                                QQ::AndCondition(
                                            $this->dtgledger->Conditions
                                    ),
                    QQ::Clause(
                            $this->dtgledger->OrderByClause,
                            $this->dtgledger->LimitClause
                    ));
                   //$data->AppointmentObject->Name
                    $this->dtgledger->DataSource = $data;
                    //$data->ExactDesignationObject->Name
                }   
                
                public function dtgledgerRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/ledger_edit.php/'.$strParameter);
                }
                
                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    $Y = date('Y');
                    $M = date('m');
                    if($M <= 3)$Y = $Y -1;
                        $this->lstSubOfObject->SelectedValue = array_search($this->txtsubof->Text, $this->autocompletesub);
			$this->lstProductObject->SelectedValue = array_search($this->txtProduct->Text, $this->arrProduct);
                        $this->mctLedger->SaveLedger();
                        
                        $ledger = Ledger::LoadByName($this->txtName->Text);
                        
                        $voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                        QQ::OrCondition(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->From, $ledger->Idledger),
                                                QQ::Equal(QQN::Voucher()->To, 103)
                                            ),
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->To, $ledger->Idledger),
                                                QQ::Equal(QQN::Voucher()->From, 103)
                                            )
                                            )
                                    ));
                        if($voutures)foreach ($voutures as $vouture) $vouture->Delete();
                        
                        if($this->txtdr->Text != NULL){
                            $voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->From, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->To, 103)
                                            )
                                    );
                            if(!$voutures){
                                $vouture = new Voucher();
                                $vou = Code::LoadByName("vouture");
                                $vou->Code = $vou->Code + 1;
                                $vou->Save();
                                $vouture->Code = $vou->Code;
                                $vouture->Date = QDateTime::FromTimestamp(strtotime($Y.'0401'));
                                $vouture->From = $ledger->Idledger;
                                $vouture->To = 103;
                                $vouture->Amount = $this->txtdr->Text;
                            $vouture->Save();
                            }else{
                                foreach ($voutures as $vouture){}
                                $vouture->Amount = $this->txtdr->Text;
                            $vouture->Save();
                            }
                            
                        }
                        
                        if($this->txtcr->Text != NULL){
                            $voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Date, date('Ymd', strtotime($Y.'0401'))),
                                            QQ::Equal(QQN::Voucher()->To, $ledger->Idledger),
                                            QQ::Equal(QQN::Voucher()->From, 103)
                                            )
                                    );
                            if(!$voutures){
                                $vouture = new Voucher();
                                $vou = Code::LoadByName("vouture");
                                $vouture->Code = $vou->Code;
                                $vou->Code = $vou->Code + 1;
                                $vou->Save();
                                
                                $vouture->Date = QDateTime::FromTimestamp(strtotime($Y.'0401'));
                                $vouture->To = $ledger->Idledger;
                                $vouture->From = 103;
                            }else{
                                foreach ($voutures as $vouture){}
                            }
                            $vouture->Amount = $this->txtcr->Text;
                            $vouture->Save();
                        }
                        
			$this->RedirectToListPage();
		}
                
                protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                        $vouchers = Voucher::QueryArray(
                                    QQ::OrCondition(
                                            QQ::Equal(QQN::Voucher()->To, $this->lblIdledger->Text),
                                            QQ::Equal(QQN::Voucher()->From, $this->lblIdledger->Text)
                                            )
                                    );
                        foreach ($vouchers as $voucher) $voucher->Delete();
                        
                        $this->mctLedger->DeleteLedger();
			$this->RedirectToListPage();
		}
                
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/ledger_edit.php');
		}
	}

	
	LedgerEditForm::Run('LedgerEditForm');
?>