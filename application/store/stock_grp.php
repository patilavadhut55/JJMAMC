<?php
require('../../qcubed.inc.php');

	class StockGroupForm extends QForm {
	        protected $txtName;
                protected $lstParrentObject;
                protected $txtVatRate;
                protected $txtDutiesRate;
                protected $txtDepreciation;
                protected $btnSave;
                protected $btnCancel;
                protected $btnDelete;
                protected $dtgStkGrp;
                protected $btnNew;
                protected $btnList;
                  protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->txtName = new QTextBox($this);
                    $this->txtName->Name = "Name";
                    $this->txtName->Width = 250; 
                    
                    $this->lstParrentObject = new QSelect2ListBox($this);
                    $this->lstParrentObject->Name = "Parrent";
                    $this->lstParrentObject->Width = 150;
                    $this->lstParrentObject->AddItem("-select-",NULL);
                    $stkgrps = StockGrp::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::StockGrp()->Parrent,NULL)));
                    foreach ($stkgrps as $stkgrp){
                        $this->lstParrentObject->AddItem($stkgrp->Name, $stkgrp->IdstockGrp);    
                    }
                    $this->txtVatRate = new QTextBox($this);
                    $this->txtVatRate->Width = 100;  
                    $this->txtVatRate->Name = "Vat Rate";
                    
                    $this->txtDutiesRate = new QTextBox($this);
                    $this->txtDutiesRate->Width = 100;
                    $this->txtDutiesRate->Name = "Duties Rate";
                    
                    $this->txtDepreciation = new QTextBox($this);
                    $this->txtDepreciation->Width = 100;
                    $this->txtDepreciation->Name = "Depreciation Rate";

                    //Stock group

                    $this->dtgStkGrp = new QDataGrid($this);
                    $this->dtgStkGrp->CssClass = "datagrid";

                    $this->dtgStkGrp->ShowFilter = TRUE;

                    $this->dtgStkGrp->Paginator = new QPaginator($this->dtgStkGrp);
                    $this->dtgStkGrp->ItemsPerPage = 10;
                    $this->dtgStkGrp->SetDataBinder('dtgStockGrp_Bind');

                    $this->dtgStkGrp->RowActionParameterHtml = '<?= $_ITEM->IdstockGrp ?>';
                    $this->dtgStkGrp->AddRowAction(new QClickEvent(), new QServerAction('dtgStockGrpRow_Click'));

                    $this->dtgStkGrp->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));

                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::StockGrp()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::StockGrp()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::StockGrp()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgStkGrp->AddColumn($Name);            
                    $this->dtgStkGrp->AddColumn(new QDataGridColumn('Parrent', '<?= $_ITEM->ParrentObject ?>'));
                    $this->dtgStkGrp->AddColumn(new QDataGridColumn('Vat Rate', '<?= $_ITEM->VatRate ?>'));
                    $this->dtgStkGrp->AddColumn(new QDataGridColumn('Duties Rate', '<?= $_ITEM->DutiesRate ?>'));
                    $this->dtgStkGrp->AddColumn(new QDataGridColumn('Depreciation Rate', '<?= $_ITEM->Depreciation ?>'));
                    
                    $this->btnSave = new QButton($this);
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
                    
                    $this->btnCancel = new QButton($this);
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));

                    $this->btnDelete = new QButton($this);
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                    $this->btnDelete->Visible = FALSE;
                    $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
                    
                    $this->btnNew = new QButton($this);
                    $this->btnNew->ButtonMode = QButtonMode::AddNew;
                    $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));

                    $this->btnList = new QButton($this);
                    $this->btnList->ButtonMode = QButtonMode::listall;
                    $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));
                    
                    
                    
                     if(isset($_GET['id'])){
                        $this->btnDelete->Visible = TRUE;
                        
                        $stkgrp = StockGrp::LoadByIdstockGrp($_GET['id']);
                        $this->txtName->Text = $stkgrp->Name;
                        $this->lstParrentObject->SelectedValue = $stkgrp->Parrent;
                        $this->txtVatRate->Text = $stkgrp->VatRate;
                        $this->txtDutiesRate->Text = $stkgrp->DutiesRate;
                         $this->txtDepreciation->Text = $stkgrp->Depreciation;
                    }
                }
                protected function dtgStockGrp_Bind(){
                        $this->dtgStkGrp->TotalItemCount = StockGrp::QueryCount(
                                QQ::AndCondition(
                                            $this->dtgStkGrp->Conditions
                                        ));

                        $data = StockGrp::QueryArray(
                                    QQ::AndCondition(
                                            $this->dtgStkGrp->Conditions
                                        ),
                        QQ::Clause(
                                QQ::OrderBy(QQN::StockGrp()->IdstockGrp, TRUE),
                                $this->dtgStkGrp->LimitClause
                        ));

                        $this->dtgStkGrp->DataSource = $data;
                }
                public function dtgStockGrpRow_Click($strFormId, $strControlId, $strParameter){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/stock_grp.php?id='.$strParameter);
                }

                protected function btnSave_Click(){
                    if($this->txtName->Text != ""){
//                        $stkgrp = StockGrp::LoadByName($this->txtName->Text);
//                        if(!$stkgrp){
                        if(isset($_GET['id'])){
                            $stkgrp = StockGrp::LoadByIdstockGrp($_GET['id']);
                        }else{
                            $stkgrp = new StockGrp();
                        }
                        $stkgrp->Name =  $this->txtName->Text;
                        $stkgrp->Parrent = $this->lstParrentObject->SelectedValue;
                        $stkgrp->VatRate = $this->txtVatRate->Text;
                        $stkgrp->DutiesRate = $this->txtDutiesRate->Text;
                        $stkgrp->Depreciation = $this->txtDepreciation->Text;
                        $stkgrp->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/stock_grp.php');
//                        }  else {
//                            QApplication::DisplayAlert("Stock name alerady exist");   
//                        }
                    }else{
                        QApplication::DisplayAlert("Please enter at least group name");                
                    }
                }
                protected function btnNew_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/stock_grp.php?new=1');
                }
                protected  function btnDelete_Click(){
                        $stkgrp = StockGrp::LoadByIdstockGrp($_GET['id']);
                        $led = LedgerDetails::LoadArrayByStockGrp($stkgrp->IdstockGrp);
                        if($led){
                            QApplication::DisplayAlert('You cannot delete ');
                        }else{
                            $stkgrp->Delete();
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/stock_grp.php');
                        }
                }

                public function btnList_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/stock_grp.php');
                    
                }
                 public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/stock_grp.php');
                    
                }
        }
        StockGroupForm::Run('StockGroupForm');

?>

