<?php
	require('../../qcubed.inc.php');

	class AdmissionModeEditForm extends QForm {
            protected $txtName;
            protected $btnSave;
            protected $btnCancel;
            protected $btnDelete;
            protected $dtgAdmissionModes;

            protected $currentId;
            protected $editMode;
            
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = "Name";
                $this->txtName->Required = True;
                
                $this->btnSave=new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->CausesValidation = TRUE;
                $this->btnSave->AddAction(new QClickEvent(),new QServerAction('btnSave_click'));

                $this->btnCancel=new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('btnCancel_click'));

                $this->btnDelete=new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Block Details'))));
                $this->btnDelete->AddAction(new QClickEvent(),new QServerAction('btnDelete_click'));
                $this->btnDelete->Display = FALSE;
                
                //datagrid
                $this->dtgAdmissionModes = new QDataGrid($this);
                $this->dtgAdmissionModes->CssClass = "datagrid";

                $this->dtgAdmissionModes->ShowFilter = TRUE;

                $this->dtgAdmissionModes->Paginator = new QPaginator($this->dtgAdmissionModes);
                $this->dtgAdmissionModes->ItemsPerPage = 10;
                $this->dtgAdmissionModes->SetDataBinder('dtgAdmissionModes_Bind');

                $this->dtgAdmissionModes->RowActionParameterHtml='<?= $_ITEM->IdadmissionMode ?>';
                $this->dtgAdmissionModes->AddRowAction(new QClickEvent(), new QServerAction('dtgAdmissionModesRow_Click'));

                $this->dtgAdmissionModes->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));

                $this->dtgAdmissionModes->AddColumn(new QDataGridColumn('Name ',  '<?= $_ITEM->Name ?>', 'Width=100'));

                $this->currentId = 0;
                $this->editMode = FALSE;
            }
            
            protected function btnSave_click(){
                if($this->editMode == FALSE){
                    $admode = new AdmissionMode();
                    $admode->Name = $this->txtName->Text;
                    $admode->Save();
                }elseif ($this->editMode == TRUE && $this->currentId != 0) {
                    $admode = AdmissionMode::LoadByIdadmissionMode($this->currentId);
                    $admode->Name = $this->txtName->Text;
                    $admode->Save();
                }
                $this->pageClearAll();
            }
            
            protected function btnCancel_click(){
                $this->txtName->Text = "";
                $this->currentId = 0;
                $this->editMode = FALSE;
                $this->btnDelete->Visible =FALSE;
            }
            
            protected function btnDelete_click(){
                if($this->currentId != 0){
                    $admode = AdmissionMode::LoadByIdadmissionMode($this->currentId);
                    $admode->Delete();
                    $this->txtName->Text = "";
                }else{
                    QApplication::DisplayAlert("No Such Admission Mode Exists");
                }
                $this->btnDelete->Display = FALSE;
                $this->pageClearAll();
            }
            
            protected function dtgAdmissionModes_Bind(){
                $this->dtgAdmissionModes->TotalItemCount = AdmissionMode::QueryCount(
                        QQ::AndCondition(                                    
                                $this->dtgAdmissionModes->Conditions
                                ));
                $data = AdmissionMode::QueryArray(
                            QQ::AndCondition(
                                $this->dtgAdmissionModes->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::AdmissionMode()->IdadmissionMode, TRUE),
                        $this->dtgAdmissionModes->LimitClause
                ));

                $this->dtgAdmissionModes->DataSource = $data;
            }
            
            protected function dtgAdmissionModesRow_Click($strFormId,$strControlId,$strParameter) {
                $this->btnDelete->Display = TRUE;
                $this->editMode = TRUE;

                if(isset($strParameter)){
                   $admode = AdmissionMode::LoadByIdadmissionMode($strParameter);
                   if($admode) {
                       $this->txtName->Text = $admode->Name;
                       $this->currentId = $admode->IdadmissionMode;
                   }
                }
            }
            protected function pageClearAll() {
                $this->txtName->Text = "";
                $this->currentId = 0;
                $this->editMode = FALSE;
                $this->btnDelete->Display = FALSE;
            }
	}
	AdmissionModeEditForm::Run('AdmissionModeEditForm');
?>