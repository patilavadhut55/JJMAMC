<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/CertificateTempletEditFormBase.class.php');

	class cat_certifiacte_edit extends CertificateTempletEditFormBase {
		// Override Form Event Handlers as Needed
                protected $dtgCast;
                protected $btnList;
                protected $btnNew;
                protected $lstCategory;
                protected $txtResubmission;
                protected $txtResubmissionLimit;

                protected $txtPrintDesign;
                protected $txtPrintCode;
                protected $btnCode;
                protected $btnDesign;

                protected $txtTokenPrintDesign;
                protected $txtTokenPrintCode;
                protected $btnTokenCode;
                protected $btnTokenDesign;
                
                //documents
                protected $txtDocName;
                protected $txtDocInstruction;
                protected $lblDelDoc;
                protected $chkOnCerti;
                protected $chkRequired;

                //approvel
                protected $txtRollName;
                protected $txtTask;
                protected $txtSeqarr;
                protected $lblDelApproval;
                protected $chkFinal;
                protected $chkcanRejected;

                protected $lstgroup;
                
                protected $txtRemark;
                protected $btnAddremark;
                protected $lbldeleteremark;
                
                //rates
                protected $lbldel;
                protected $calEffectFromDate;
                protected $txtGovShare;
                protected $txtSetuShare;
                protected $txtTax;
                protected $txtTotal;
                protected $btnRatesave;
                protected $btnRateCancel;

                protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();      
                    
                    $this->txtAbbrivation->Name = 'Abbriviation';
                    $this->txtAbbrivation->Width = 200;
                    
                    $this->txtCounter->Placeholder = 'Counter';
                    $this->txtCounter->Required = TRUE;
                    $this->txtCounter->Width = 200;
                  
                    $this->txtResubmission->Name = 'Resubmission';
                    $this->txtResubmission->Width = 200;
                    
                    
                    $this->txtResubmissionLimit->Placeholder = 'Resubmission Limit';
                    $this->txtResubmissionLimit->Width = 200;
                    
                    $this->calEffectFromDate = new QDateTimePicker($this);
                    $this->calEffectFromDate->Width = 70;
                    $this->calEffectFromDate->DateTime = QDateTime::Now();
                    
                    $this->txtGovShare = new QTextBox($this);
                    $this->txtGovShare->Placeholder = "Gov. Share";
                    
                    $this->txtSetuShare = new QTextBox($this);
                    $this->txtSetuShare->Placeholder = "Setu Share";
                    
                    $this->txtTax = new QTextBox($this);
                    $this->txtTax->Placeholder = "Tax";
                    $this->txtTax->AddAction(new QFocusOutEvent(), new QAjaxAction("txtTax_Click"));
                    
                    $this->txtTotal = new QTextBox($this);
                    $this->txtTotal->Placeholder = "Total";
                    
                    $this->btnRatesave = new QButton($this);
                    $this->btnRatesave->ButtonMode = QButtonMode::Add;
                    $this->btnRatesave->AddAction(new QClickEvent(), new QServerAction("btnRatesave_Click"));
                    
                    $this->lstgroup = new QSelect2ListBox($this);
                    $this->lstgroup->AddItem('-Select Group-',NULL);
                    $this->lstgroup->Placeholder = "Group";
                    $this->lstgroup->Width = "100%";
                    $this->lstgroup->Height = 30;
                    $grps = CertificateGroup::LoadAll();
                    foreach ($grps as $grp) {
                    $this->lstgroup->AddItem($grp->Name, $grp->IdcertificateGroup);
                    }
                    $this->lstgroup->AddAction(new QClickEvent(), new QAjaxAction('search_change'));
                    
                    if(isset($_GET['group'])){   $this->lstgroup->SelectedValue = $_GET['group'];}
                    
                    $this->txtPrintDesign = new QFCKeditor($this);                    
                    $this->txtPrintDesign->Width = "100%";
                    $this->txtPrintDesign->Height = 600;
                    $this->txtPrintDesign->Name = "Print Design";

                    $this->txtPrintCode = new QTextBox($this);
                    $this->txtPrintCode->TextMode = QTextMode::MultiLine;
                    $this->txtPrintCode->Width = "100%";
                    $this->txtPrintCode->Height = 600;
                    $this->txtPrintCode->Name = "Print Code";

                    $this->txtPrintCode->Visible = FALSE;

                    //$this->txtData->Visible = FALSE;

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
                    
                    $this->txtTokenPrintDesign = new QFCKeditor($this);                    
                    $this->txtTokenPrintDesign->Width = "100%";
                    $this->txtTokenPrintDesign->Height = 300;
                    $this->txtTokenPrintDesign->Name = "Print Design";

                    $this->txtTokenPrintCode = new QTextBox($this);
                    $this->txtTokenPrintCode->TextMode = QTextMode::MultiLine;
                    $this->txtTokenPrintCode->Width = "100%";
                    $this->txtTokenPrintCode->Height = 300;
                    $this->txtTokenPrintCode->Name = "Print Code";

                    $this->txtTokenPrintCode->Visible = FALSE;

                    //$this->txtData->Visible = FALSE;

                    $this->btnTokenDesign = new QButton($this);
                    $this->btnTokenDesign->HtmlEntities = TRUE;
                    $this->btnTokenDesign->Text = "Design";
                    $this->btnTokenDesign->ButtonMode = QButtonMode::Success;
                    $this->btnTokenDesign->AddAction(new QClickEvent(), new QServerAction("btnTokenDesign_Click"));

                    
                    $this->btnTokenCode = new QButton($this);
                    $this->btnTokenCode->HtmlEntities = TRUE;
                    $this->btnTokenCode->Text = "Code";
                    $this->btnTokenCode->ButtonMode = QButtonMode::Success;
                    $this->btnTokenCode->AddAction(new QClickEvent(), new QServerAction("btnTokenCode_Click"));
                    
                    $this->lstCategory = new QSelect2ListBox($this);                    
                    $this->lstCategory->Name = "Category"; 
                    $this->lstCategory->AddItem("-Select-",NULL);
                    $cats = Cast::LoadArrayByParent(NULL);
                    foreach ($cats as $cat){
                        $this->lstCategory->AddItem($cat->Name,$cat->Idcast);    
                    }
                    
                    $this->btnNew = new QButton($this);
                    $this->btnNew->HtmlEntities = FALSE;
                    $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                    $this->btnNew->ButtonMode = QButtonMode::AddNew;
                    $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));
                    
                    $this->btnList = new QButton($this);
                    $this->btnList->ButtonMode = QButtonMode::listall;
                    $this->btnList->AddAction(new QClickEvent(), new QAjaxAction("btnList_Click"));
                    
                    $this->dtgCast = new QDataGrid($this);
                    $this->dtgCast->CssClass = "datagrid";
                    
                    $this->dtgCast->ShowFilter = TRUE;

                    $this->dtgCast->Paginator = new QPaginator($this->dtgCast);
                    $this->dtgCast->ItemsPerPage = 150;

                    $this->dtgCast->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));

                    $Name = new QDataGridColumn('Certificate Templet', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::CertificateTemplet()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::CertificateTemplet()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::CertificateTemplet()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgCast->AddColumn($Name);

                    $this->dtgCast->SetDataBinder('dtgCast_Bind');

                    $this->dtgCast->RowActionParameterHtml = '<?= $_ITEM->IdcertificateTemplet ?>';
                    $this->dtgCast->AddRowAction(new QClickEvent(), new QServerAction('dtgledgerRow_Click'));
                    // Create Buttons and Actions on this Form
                    $this->btnSave = new QButton($this);
                    $this->btnSave->Text = QApplication::Translate('Save');
                    //$this->btnNew->HtmlEntities = TRUE;
                    $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
                    $this->btnSave->CausesValidation = true;

                    $this->btnCancel = new QButton($this);
                    $this->btnCancel->Text = QApplication::Translate('Cancel');
                    $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

                    $this->btnDelete = new QButton($this);
                    $this->btnDelete->Text = QApplication::Translate('Delete');
                    $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('CertificateTemplet'))));
                    $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
                    $this->btnDelete->Visible = $this->mctCertificateTemplet->EditMode;
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                    if($this->mctCertificateTemplet->EditMode == TRUE){
                        $certemp = CertificateTemplet::LoadByIdcertificateTemplet($this->lblIdcertificateTemplet->Text);
                        $this->txtPrintDesign->Text = base64_decode($certemp->CertificateHtml);                        
                        $this->txtTokenPrintDesign->Text = base64_decode($certemp->TokenHtml);
                        $this->lstCategory->SelectedValue = $this->lstCategoryObject->SelectedValue;
                    }else{
                        $this->txtCertificateHtml->Text = "-";
                        $this->txtTokenHtml->Text = "-";
                    }
                    
                    //documents
                    $this->txtDocName = new QSelect2ListBox($this);
                    $setting = Settings::LoadByName("Document Ledger Group");
                    $docs = Ledger::LoadArrayByGrp($setting->Option);
                    foreach ($docs as $doc){
                        $this->txtDocName->AddItem($doc->Name, $doc->Idledger);
                    }
                    
                    $this->txtDocInstruction = new QTextBox($this);
                    $this->txtDocInstruction->AddAction(new QEnterKeyEvent(), new QServerAction('txtDocInstruction_enter'));
                    
                    $TempDocs = TempletDocuments::LoadArrayByCertificateTemplet($this->lblIdcertificateTemplet->Text);
                    foreach ($TempDocs as $doc){
                        $this->lblDelDoc[$doc->IdtempletDocuments] = new QButton($this);
                        $this->lblDelDoc[$doc->IdtempletDocuments]->ButtonMode = QButtonMode::Remove;
                        $this->lblDelDoc[$doc->IdtempletDocuments]->AddAction(new QClickEvent(), new QServerAction("lblDelDoc_Click"));
                        $this->lblDelDoc[$doc->IdtempletDocuments]->ActionParameter = $doc->IdtempletDocuments;

                        $this->chkOnCerti[$doc->IdtempletDocuments] = new QCheckBox($this);
                        $this->chkOnCerti[$doc->IdtempletDocuments]->Checked = $doc->ShowOnCertificate;
                        $this->chkOnCerti[$doc->IdtempletDocuments]->AddAction(new QClickEvent(), new QAjaxAction("chkOnCerti_Click"));
                        $this->chkOnCerti[$doc->IdtempletDocuments]->ActionParameter = $doc->IdtempletDocuments;
                        
                        $this->chkRequired[$doc->IdtempletDocuments] = new QCheckBox($this);
                        $this->chkRequired[$doc->IdtempletDocuments]->Checked = $doc->Required;
                        $this->chkRequired[$doc->IdtempletDocuments]->AddAction(new QClickEvent(), new QAjaxAction("chkRequired_Click"));
                        $this->chkRequired[$doc->IdtempletDocuments]->ActionParameter = $doc->IdtempletDocuments;
                    }
                    
                    //approvel
                    $this->txtRollName = new QSelect2ListBox($this);
                    /*$setting = Settings::LoadByName("Approval authorities");
                    $rolls = explode(',', $setting->Option);
                     */
                    $rolls = Role::LoadArrayByGrp(3);
                    foreach ($rolls as $roll){
                        
                        $this->txtRollName->AddItem($roll->Name, $roll->Idrole);
                    }
                    
                    $this->txtTask = new QTextBox($this);
                    $this->txtTask->AddAction(new QEnterKeyEvent(), new QServerAction('txtTask_enter'));
                    
                    $TempAppr = Approvel::LoadArrayByCertificateTemplet($this->lblIdcertificateTemplet->Text);
                    foreach ($TempAppr as $doc){
                        $this->lblDelApproval[$doc->Idapprovel] = new QButton($this);
                        $this->lblDelApproval[$doc->Idapprovel]->ButtonMode = QButtonMode::Remove;
                        $this->lblDelApproval[$doc->Idapprovel]->AddAction(new QClickEvent(), new QServerAction("lblDelApproval_Click"));
                        $this->lblDelApproval[$doc->Idapprovel]->ActionParameter = $doc->Idapprovel;

                        $this->chkFinal[$doc->Idapprovel] = new QCheckBox($this);
                        $this->chkFinal[$doc->Idapprovel]->Checked = $doc->IsFinalAuthority;
                        $this->chkFinal[$doc->Idapprovel]->AddAction(new QClickEvent(), new QServerAction("chkFinal_Click"));
                        $this->chkFinal[$doc->Idapprovel]->ActionParameter = $doc->Idapprovel;

                        $this->chkcanRejected[$doc->Idapprovel] = new QCheckBox($this);
                        $this->chkcanRejected[$doc->Idapprovel]->Checked = $doc->CanRejected;
                        $this->chkcanRejected[$doc->Idapprovel]->AddAction(new QClickEvent(), new QServerAction("chkcanRejected_Click"));
                        $this->chkcanRejected[$doc->Idapprovel]->ActionParameter = $doc->Idapprovel;
                    
                        $this->txtSeqarr[$doc->Idapprovel] = new QTextBox($this);
                        $this->txtSeqarr[$doc->Idapprovel]->Text = $doc->Code;                            
                        $this->txtSeqarr[$doc->Idapprovel]->AddAction(new QEnterKeyEvent(), new QServerAction("txtSeqarr_Enter"));
                        $this->txtSeqarr[$doc->Idapprovel]->ActionParameter = $doc->Idapprovel;
                        $this->txtSeqarr[$doc->Idapprovel]->Width = 30;
                        $this->txtSeqarr[$doc->Idapprovel]->Height = 20;
                    }
                    
                    $this->txtRemark = new QSelect2ListBox($this);
                    $this->txtRemark->Name = "Remark";
                    $this->txtRemark->AddItem("-Select Remark-", NULL);
                    $remraks = Remark::LoadAll();
                    foreach ($remraks as $remrak){
                        $this->txtRemark->AddItem($remrak->Name, $remrak->Idremark);
                    }
                    $this->btnAddremark = new QButton($this);
                    $this->btnAddremark->ButtonMode = QButtonMode::Save;
                    $this->btnAddremark->AddAction(new QClickEvent(), new QAjaxAction('btnAddremark_click'));
                    $remarks = CertificateTempletHasRemark::LoadArrayByCertificateTempletIdcertificateTemplet($this->lblIdcertificateTemplet->Text);
                    if($remarks){
                        foreach ($remarks as $remark){
                            $this->lbldeleteremark[$remark->CertificateTempletIdcertificateTemplet][$remark->RemarkIdremark] = new QButton($this);
                            $this->lbldeleteremark[$remark->CertificateTempletIdcertificateTemplet][$remark->RemarkIdremark]->ButtonMode = QButtonMode::Remove;
                            $this->lbldeleteremark[$remark->CertificateTempletIdcertificateTemplet][$remark->RemarkIdremark]->AddAction(new QClickEvent(), new QServerAction("lbldeleteremark_Click"));
                            $this->lbldeleteremark[$remark->CertificateTempletIdcertificateTemplet][$remark->RemarkIdremark]->ActionParameter = $remark->CertificateTempletIdcertificateTemplet.','.$remark->RemarkIdremark;                    
                        }
                    }
                    
                }
                protected function txtTax_Click(){
                    if($this->txtGovShare->Text != NULL && $this->txtSetuShare->Text != NULL && $this->txtTax->Text != NULL){
                        $this->txtTotal->Text = $this->txtGovShare->Text + $this->txtSetuShare->Text + $this->txtTax->Text;
                    }
                }
                protected function btnRatesave_Click(){
                    $rates = Rate::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Rate()->EffectFrom, $this->calEffectFromDate->DateTime)
                            ));
                    if($rates){
                        foreach($rates as $rate){}
                    }else{
                        $rate = new Rate();
                        $rate->CertificateTemplet = $this->lblIdcertificateTemplet->Text;
                        $rate->EffectFrom = QDateTime::FromTimestamp(strtotime($this->calEffectFromDate->DateTime));
                        $rate->GovShare = $this->txtGovShare->Text;
                        $rate->SetuShare = $this->txtSetuShare->Text;
                        $rate->Tax = $this->txtTax->Text;
                        $rate->Total = $this->txtTotal->Text;
                        $rate->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=6');
                    }
                }
                protected function txtSeqarr_Enter($strFormId, $strControlId, $strParameter){
                    $seq = Approvel::LoadByIdapprovel($strParameter);
                    $seq->Code = $this->txtSeqarr[$seq->Idapprovel]->Text;
                    $seq->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=2');                   
                }
                protected function lbldel_Click($strFormId, $strControlId, $strParameter){
                    $rate = Rate::LoadByIdrate($strParameter);
                    $rate->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=6');
                }

                protected function btnAddremark_click(){
                    $remarks = CertificateTempletHasRemark::LoadByCertificateTempletIdcertificateTempletRemarkIdremark($this->lblIdcertificateTemplet->Text,  $this->txtRemark->SelectedValue);
                    if(!$remarks){
                        $remarks = new CertificateTempletHasRemark();
                        $remarks->CertificateTempletIdcertificateTemplet =$this->lblIdcertificateTemplet->Text;
                        $remarks->RemarkIdremark = $this->txtRemark->SelectedValue;
                        $remarks->Save();
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=5');
                    }else{
                        QApplication::DisplayAlert("Remark Already Exists");
                    }
                    
                }

                protected function lbldeleteremark_Click($strFormId, $strControlId, $strParameter){
                    $id= explode(",", $strParameter);
                    $remark = CertificateTempletHasRemark::LoadByCertificateTempletIdcertificateTempletRemarkIdremark($id[0],$id[1]);
                    $remark->Delete();
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=5');
                    
                }

                protected function txtDocInstruction_enter(){
                    $tempDoc = new TempletDocuments();
                    $count = TempletDocuments::CountByCertificateTemplet($this->lblIdcertificateTemplet->Text);
                    $tempDoc->Code = $count + 1;
                    $tempDoc->CertificateTemplet = $this->lblIdcertificateTemplet->Text;
                    $tempDoc->Document = $this->txtDocName->SelectedValue;
                    $tempDoc->ShowOnCertificate = 1;
                    $tempDoc->Required = 0;
                    $tempDoc->Description = $this->txtDocInstruction->Text;
                    $tempDoc->Save();
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=1');
                }
                
                protected function chkOnCerti_Click($strFormId, $strControlId, $strParameter) {
                    $tempDoc = TempletDocuments::LoadByIdtempletDocuments($strParameter);
                    $tempDoc->ShowOnCertificate = $this->chkOnCerti[$strParameter]->Checked;
                    $tempDoc->Save();
                }
                protected function chkRequired_Click($strFormId, $strControlId, $strParameter){
                    $tempDoc = TempletDocuments::LoadByIdtempletDocuments($strParameter);
                    $tempDoc->Required = $this->chkRequired[$strParameter]->Checked;
                    $tempDoc->Save();
                }

                protected function lblDelDoc_Click($strFormId, $strControlId, $strParameter) {
                    $tempDoc = TempletDocuments::LoadByIdtempletDocuments($strParameter);
                    $tempDoc->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'#1');
                }
                
                protected function txtTask_enter(){
                    $Approvel = new Approvel();
                    $count = Approvel::CountByCertificateTemplet($this->lblIdcertificateTemplet->Text);
                    $Approvel->Code = $count + 1;
                    $Approvel->CertificateTemplet = $this->lblIdcertificateTemplet->Text;
                    $Approvel->Roll = $this->txtRollName->SelectedValue;
                    $Approvel->IsFinalAuthority = 0;
                    $Approvel->Task = $this->txtTask->Text;
                    $Approvel->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=2');
                }
                
                protected function lblDelApproval_Click($strFormId, $strControlId, $strParameter) {
                    $tempDoc = Approvel::LoadByIdapprovel($strParameter);
                    $tempDoc->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'?tab=2');
                }
                
                protected function chkFinal_Click($strFormId, $strControlId, $strParameter) {
                    //to clear final app
                    $clears = Approvel::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Approvel()->CertificateTemplet, $this->lblIdcertificateTemplet->Text),
                                    QQ::Equal(QQN::Approvel()->IsFinalAuthority, 1)
                                    )
                            );
                            foreach ($clears as $clear){
                                $clear->IsFinalAuthority = NULL;
                                $clear->Save();
                            } 
                                
                    $tempDoc = Approvel::LoadByIdapprovel($strParameter);
                    $tempDoc->IsFinalAuthority = $this->chkFinal[$strParameter]->Checked;
                    $tempDoc->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'#2');
                }
                
                protected function chkcanRejected_Click($strFormId, $strControlId, $strParameter) {
                    
//                    $clears = Approvel::QueryArray(
//                            QQ::AndCondition(
//                                    QQ::Equal(QQN::Approvel()->CertificateTemplet, $this->lblIdcertificateTemplet->Text),
//                                    QQ::Equal(QQN::Approvel()->CanRejected, 1)
//                                    )
//                            );
//                            foreach ($clears as $clear){
//                                $clear->CanRejected = NULL;
//                                $clear->Save();
//                            } 
                                
                    $tempDoc = Approvel::LoadByIdapprovel($strParameter);
                    $tempDoc->CanRejected = $this->chkcanRejected[$strParameter]->Checked;
                    $tempDoc->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$this->lblIdcertificateTemplet->Text.'#2');
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
                    $_GET['tab'] = 3;
                    if($this->txtPrintCode->Text != ""){
                    $this->txtCertificateHtml->Text = base64_encode($this->txtPrintCode->Text);
                    }
                }

                protected function btnCode_Click(){
                    $this->txtPrintCode->Text = $this->txtPrintDesign->Text;                    
                    $this->txtPrintDesign->Visible = FALSE;
                    $this->txtPrintCode->Visible = TRUE;
                    $_GET['tab'] = 3;
                    if($this->txtPrintCode->Text != ""){
                    $this->txtCertificateHtml->Text = base64_encode($this->txtPrintCode->Text);
                    }
                }
                
                protected function btnTokenDesign_Click(){
                    if($this->txtTokenPrintDesign->Text != ""){
                        $this->txtTokenPrintDesign->Text = $this->txtTokenPrintCode->Text;      
                    }
                    
                    if($this->txtTokenPrintCode->Text != ""){
                        $this->txtTokenPrintDesign->Text = $this->txtTokenPrintCode->Text;      
                    }

                    $this->txtTokenPrintDesign->Visible = TRUE;
                    $this->txtTokenPrintCode->Visible = FALSE;
                    $_GET['tab'] = 4;
                    if($this->txtTokenPrintCode->Text != ""){
                        $this->txtTokenHtml->Text = base64_encode($this->txtTokenPrintCode->Text);
                    }
                }

                protected function btnTokenCode_Click(){
                    $this->txtTokenPrintCode->Text = $this->txtTokenPrintDesign->Text;                    
                    $this->txtTokenPrintDesign->Visible = FALSE;
                    $this->txtTokenPrintCode->Visible = TRUE;
                    $_GET['tab'] = 4;
                    if($this->txtTokenPrintCode->Text != ""){
                        $this->txtTokenHtml->Text = base64_encode($this->txtTokenPrintCode->Text);
                    }
                }
                
                protected function dtgCast_Bind(){
                 if(isset($_GET['group'])){
                    $this->dtgCast->TotalItemCount = CertificateTemplet::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgCast->Conditions,
                                            QQ::Equal(QQN::CertificateTemplet()->GroupObject, $_GET['group'])
                                    ));

                    $data = CertificateTemplet::QueryArray(
                                QQ::AndCondition(
                                        $this->dtgCast->Conditions,
                                        QQ::Equal(QQN::CertificateTemplet()->GroupObject, $_GET['group'])
                                    ),
                    QQ::Clause(
                            $this->dtgCast->OrderByClause,
                            $this->dtgCast->LimitClause
                    ));
                    $this->dtgCast->DataSource = $data;
                 } 
                }
                protected function search_change(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php?group='.$this->lstgroup->SelectedValue);
                }
                public function dtgledgerRow_Click($strFormId, $strControlId, $strParameter) {           
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php/'.$strParameter);
                }
                
                
                public function btnList_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php');
                }
                
                protected function btnNew_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php?new=1');
		}
                
                // Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CertificateTempletMetaControl
                       // $this->lstCategoryObject->SelectedValue = $this->lstCategory->SelectedValue;
                        //$this->txtCertificateHtml->Text = base64_encode($this->txtPrintCode->Text);
                	$this->mctCertificateTemplet->SaveCertificateTemplet();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CertificateTempletMetaControl
			$this->mctCertificateTemplet->DeleteCertificateTemplet();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/certificate_templet_edit.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// certificate_templet_edit.tpl.php as the included HTML template file
	cat_certifiacte_edit::Run('cat_certifiacte_edit');
?>