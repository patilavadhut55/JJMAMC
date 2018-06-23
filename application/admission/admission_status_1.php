<?php

require('../../qcubed.inc.php');

class AdmissionModeEditForm extends QForm {

    protected $txtName;
    protected $txtDesc;
    protected $btnSave;
    protected $btnCancel;
    protected $btnDelete;
    protected $dtgAdmissionStatus;
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
       $this->txtName->Width = 220;
        $this->txtName->Required = True;

        $this->txtDesc = new QTextBox($this);
        $this->txtDesc->Name = "Description";
        $this->txtDesc->Width = 220;
        $this->txtDesc->Required = TRUE;

        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->CausesValidation = TRUE;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));

        $this->btnCancel = new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->ButtonMode = QButtonMode::Delete;
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Block Details'))));
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_click'));
        $this->btnDelete->Display = FALSE;

        //datagrid
        $this->dtgAdmissionStatus = new QDataGrid($this);
        $this->dtgAdmissionStatus->CssClass = "datagrid";

        $this->dtgAdmissionStatus->ShowFilter = TRUE;

        $this->dtgAdmissionStatus->Paginator = new QPaginator($this->dtgAdmissionStatus);
        $this->dtgAdmissionStatus->ItemsPerPage = 10;
        $this->dtgAdmissionStatus->SetDataBinder('dtgAdmissionStatus_Bind');

        $this->dtgAdmissionStatus->RowActionParameterHtml = '<?= $_ITEM->IdadmissionStatus ?>';
        $this->dtgAdmissionStatus->AddRowAction(new QClickEvent(), new QServerAction('dtgAdmissionStatusRow_Click'));

        $this->dtgAdmissionStatus->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));

        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'HtmlEntities=false', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::AdmissionStatus()->IdadmissionStatus),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::AdmissionStatus()->Name, false)));

        $Name->Filter = QQ::Like(QQN::AdmissionStatus()->Name, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $this->dtgAdmissionStatus->AddColumn($Name);

        $this->dtgAdmissionStatus->AddColumn(new QDataGridColumn('Description ', '<?= $_ITEM->Description ?>', 'Width=100'));
        
        $this->currentId = 0;
        $this->editMode = FALSE;
    }

    protected function btnSave_click() {
        if ($this->editMode == FALSE) {
            $adstatus = new AdmissionStatus();
            $adstatus->Name = $this->txtName->Text;
            $adstatus->Description = $this->txtDesc->Text;
            $adstatus->Save();
        } elseif ($this->editMode == TRUE && $this->currentId != 0) {
            $adstatus = AdmissionStatus::LoadByIdadmissionStatus($this->currentId);
            $adstatus->Name = $this->txtName->Text;
            $adstatus->Description = $this->txtDesc->Text;
            $adstatus->Save();
        }
        $this->pageClearAll();
    }

    protected function btnCancel_click() {
        $this->txtName->Text = "";
        $this->txtDesc->Text = "";
        $this->currentId = 0;
        $this->editMode = FALSE;
        $this->btnDelete->Visible = FALSE;
    }

    protected function btnDelete_click() {
        if ($this->currentId != 0) {
            $adstatus = AdmissionStatus::LoadByIdadmissionStatus($this->currentId);
            $adstatus->Delete();
            $this->txtName->Text = "";
            $this->txtDesc->Text = "";
        } else {
            QApplication::DisplayAlert("No Such Admission Mode Exists");
        }
        $this->btnDelete->Display = FALSE;
        $this->pageClearAll();
    }

    protected function dtgAdmissionStatus_Bind() {
        $this->dtgAdmissionStatus->TotalItemCount = AdmissionStatus::QueryCount(
                        QQ::AndCondition(
                                $this->dtgAdmissionStatus->Conditions
        ));
        $data = AdmissionStatus::QueryArray(
                        QQ::AndCondition(
                                $this->dtgAdmissionStatus->Conditions
                        ), QQ::Clause(
                                QQ::OrderBy(QQN::AdmissionStatus()->IdadmissionStatus, TRUE), $this->dtgAdmissionStatus->LimitClause
        ));

        $this->dtgAdmissionStatus->DataSource = $data;
    }

    protected function dtgAdmissionStatusRow_Click($strFormId, $strControlId, $strParameter) {
        $this->btnDelete->Display = TRUE;
        $this->editMode = TRUE;

        if (isset($strParameter)) {
            $adstatus = AdmissionStatus::LoadByIdadmissionStatus($strParameter);
            if ($adstatus) {
                $this->txtName->Text = $adstatus->Name;
                $this->txtDesc->Text = $adstatus->Description;
                $this->currentId = $adstatus->IdadmissionStatus;
            }
        }
    }

    protected function pageClearAll() {
        $this->txtName->Text = "";
        $this->txtDesc->Text = "";
        $this->currentId = 0;
        $this->editMode = FALSE;
        $this->btnDelete->Display = FALSE;
    }

}

AdmissionModeEditForm::Run('AdmissionModeEditForm');
?>