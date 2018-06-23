<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/VoucherGrpEditFormBase.class.php');

    class VoucherGrpEditForm extends VoucherGrpEditFormBase {
        protected $btnList;
        protected $dtgVoucherGrp;
        protected $btnNew;
        protected $txtPrintDesign;
        protected $txtPrintCode;
        protected $btnCode;
        protected $btnDesign;
        
        protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->txtPrintDesign = new QFCKeditor($this);
                $this->txtPrintDesign->Width = "100%";
                $this->txtPrintDesign->Height = 500;
                $this->txtPrintDesign->Name = "Print Design";
                
                $this->txtPrintCode = new QTextBox($this);
                $this->txtPrintCode->TextMode = QTextMode::MultiLine;
                $this->txtPrintCode->Width = "100%";
                $this->txtPrintCode->Height = 500;
                $this->txtPrintCode->Name = "Print Code";
                
                //$this->chkAutoNum->Width = 150;
                
                $this->txtPrintDesign->Visible = FALSE;
                $this->txtPrintCode->Visible = FALSE;
                
                $this->txtPrintContent->Visible = FALSE;
                $this->txtCounter->Visible = FALSE;
                
                
                $this->btnDesign = new QButton($this);
                $this->btnDesign->HtmlEntities = TRUE;
                $this->btnDesign->Text = "Design";
                $this->btnDesign->ButtonMode = QButtonMode::Success;
                $this->btnDesign->AddAction(new QClickEvent(), new QServerAction("btnDesign_Click"));
                
                $this->btnCode = new QButton($this);
                $this->btnCode->HtmlEntities = TRUE;
                $this->btnCode->Text = "Code";
                $this->btnCode->ButtonMode = QButtonMode::Success;
                $this->btnCode->AddAction(new QClickEvent(), new QServerAction("btnCode_Click"));
                
                $this->btnDesign->Visible = FALSE;
                $this->btnCode->Visible = FALSE;
                
                $this->dtgVoucherGrp = new QDataGrid($this);
                $this->dtgVoucherGrp->CssClass = "datagrid";

                $this->dtgVoucherGrp->ShowFilter = TRUE;

                $this->dtgVoucherGrp->Paginator = new QPaginator($this->dtgVoucherGrp);
                $this->dtgVoucherGrp->ItemsPerPage = 20;

                $this->dtgVoucherGrp->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  

                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::VoucherGrp()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::VoucherGrp()->Name, false)));

                $Name->Filter = QQ::Like(QQN::VoucherGrp()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgVoucherGrp->AddColumn($Name);

                $this->dtgVoucherGrp->AddColumn(new QDataGridColumn('Group', '<?= $_ITEM->GrpObject ?>', 'Width=50'));

                $this->dtgVoucherGrp->SetDataBinder('dtgVoucherGrp_Bind');

                $this->dtgVoucherGrp->RowActionParameterHtml = '<?= $_ITEM->IdvoucherGrp?>';
                $this->dtgVoucherGrp->AddRowAction(new QClickEvent(), new QServerAction('dtgVoucherGrpRow_Click'));
                
                $this->lstGrpObject->Name = 'Group';
                 
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                
                $this->btnList = new QButton($this);
                $this->btnList->ButtonMode = QButtonMode::listall;
                $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));
                
                $this->btnNew = new QButton($this);                
                $this->btnNew->ButtonMode = QButtonMode::AddNew;
                $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));
                
                $this->chkAutoNum->AddAction(new QChangeEvent(), new QServerAction("chkAutoNum_Click"));
                $this->chkPrint->AddAction(new QChangeEvent(), new QServerAction("chkPrint_Click"));
                
                if($this->mctVoucherGrp->EditMode == TRUE ){
                    if($this->chkAutoNum->Checked ==TRUE){
                        $this->txtCounter->Visible = TRUE;
                    }
                    
                    if($this->chkPrint->Checked == TRUE){
                        $this->txtPrintDesign->Visible = TRUE;
                        $this->txtPrintCode->Visible = FALSE;
                        $this->btnCode->Visible = TRUE;
                        $this->btnDesign->Visible = TRUE;
                    }
                    
                    $this->txtPrintDesign->Text = base64_decode($this->txtPrintContent->Text);
                }
            }
            
            protected function chkPrint_Click(){
                if($this->chkPrint->Checked == TRUE){
                    $this->txtPrintDesign->Visible = TRUE;
                    $this->txtPrintCode->Visible = FALSE;
                    $this->btnCode->Visible = TRUE;
                    $this->btnDesign->Visible = TRUE;
                }else{
                    $this->txtPrintDesign->Visible = FALSE;
                    $this->txtPrintCode->Visible = FALSE;
                    $this->btnCode->Visible = FALSE;
                    $this->btnDesign->Visible = FALSE;
                }
            }
            
            protected function chkAutoNum_Click(){
                if($this->chkAutoNum->Checked == TRUE){
                    $this->txtCounter->Visible = TRUE;
                }else{
                    $this->txtCounter->Visible = FALSE;
                }
            }

            protected function btnDesign_Click(){
                if($this->txtPrintDesign->Text != ""){
                    $this->txtPrintDesign->Text = $this->txtPrintCode->Text;      
                }
                    
                if($this->txtPrintCode->Text != ""){
                    $this->txtPrintDesign->Text = $this->txtPrintCode->Text;      
                }
                    
                $this->txtPrintDesign->Visible = TRUE;
                $this->txtPrintCode->Visible = FALSE;
                
                if($this->txtPrintCode->Text != ""){
                    $this->txtPrintContent->Text = base64_encode($this->txtPrintCode->Text);
                }
            }
            
            protected function btnCode_Click(){
                $this->txtPrintCode->Text = $this->txtPrintDesign->Text;                    
                $this->txtPrintDesign->Visible = FALSE;
                $this->txtPrintCode->Visible = TRUE;
                if($this->txtPrintCode->Text != ""){
                    $this->txtPrintContent->Text = base64_encode($this->txtPrintCode->Text);
                }
            }
            public function btnNew_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/voucher_grp_edit.php?new=1');
            }
            
            protected function dtgVoucherGrp_Bind(){
                $this->dtgVoucherGrp->TotalItemCount = VoucherGrp::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgVoucherGrp->Conditions
                                ));

                $data = VoucherGrp::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgVoucherGrp->Conditions
                                ),
                QQ::Clause(
                        $this->dtgVoucherGrp->OrderByClause,
                        $this->dtgVoucherGrp->LimitClause
                ));

                $this->dtgVoucherGrp->DataSource = $data;
            }

            public function dtgVoucherGrpRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/voucher_grp_edit.php/'.$strParameter);
            }
            
            public function btnList_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/voucher_grp_edit.php');
            }
            protected function RedirectToListPage() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/voucher_grp_edit.php');
            }
    }
    VoucherGrpEditForm::Run('VoucherGrpEditForm');
?>