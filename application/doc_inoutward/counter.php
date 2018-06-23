<?php

require('../../qcubed.inc.php');

class SettingForm extends QForm {

    protected $txtAbbri;
    protected $txtName;
    protected $btnSave;
    protected $btnCancel;
    protected $btndelete;
    protected $dtgCounter;

    protected function Form_Run() {
        parent::Form_Run();
        // Security check for ALLOW_REMOTE_ADMIN
        // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
        QApplication::CheckRemoteAdmin();
    }

//     protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();
        //controls  
        $this->txtAbbri = new QTextBox($this);
        $this->txtAbbri->Name = 'Option';

        $this->txtName = new QTextBox($this);
        $this->txtName->Name = 'Name';
        $this->txtName->ReadOnly = TRUE;

        //Buttons
        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Add;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
        $this->btnSave->CausesValidation = TRUE;

        $this->btndelete = new QButton($this);
        $this->btndelete->ButtonMode = QButtonMode::Delete;
        $this->btndelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
        $this->btndelete->CausesValidation = TRUE;

        $this->dtgCounter = new QDataGrid($this);
        $this->dtgCounter->CssClass = "datagrid";
        $this->dtgCounter->ShowFilter = TRUE;
        //  $this->dtgCounter->Paginator = new QPaginator($this->dtgCounter);
        // $this->dtgCounter->ItemsPerPage = 8;
        $this->dtgCounter->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=1'));
        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Settings()->Name),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Settings()->Name, false)));
        $Name->Filter = QQ::Like(QQN::Settings()->Name, null);
        $Name->FilterPostfix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $this->dtgCounter->AddColumn($Name);



        $this->dtgCounter->AddColumn(new QDataGridColumn('Option', '<?= $_ITEM->Option ?>'));

        $this->dtgCounter->UseAjax = true;
        $this->dtgCounter->RowActionParameterHtml = '<?= $_ITEM->Idsettings ?>';
        $this->dtgCounter->AddRowAction(new QClickEvent(), new QAjaxAction('dtgCounterRow_Click'));

        $this->dtgCounter->SetDataBinder('dtgCounter_Bind', $this);

        if (isset($_GET['id'])) {
            $set = Settings::LoadByIdsettings($_GET['id']);
            $this->txtName->Text = $set->Name;
            $this->txtAbbri->Text = $set->Option;
        }
    }

    public function dtgCounter_Bind() {
        $Counter = Settings::QueryArray(
                        QQ::AndCondition(
                                $this->dtgCounter->Conditions, QQ::OrCondition(
                                        QQ::Equal(QQN::Settings()->Idsettings, 54), QQ::Equal(QQN::Settings()->Idsettings, 42), QQ::Equal(QQN::Settings()->Idsettings, 52), QQ::Equal(QQN::Settings()->Idsettings, 53)
                        )), QQ::Clause(
                                $this->dtgCounter->OrderByClause, $this->dtgCounter->LimitClause
        ));
        $this->dtgCounter->DataSource = $Counter;

        $Count = Settings::QueryCount(
                        QQ::AndCondition(
                                $this->dtgCounter->Conditions
                        ), QQ::OrderBy(QQN::Settings()->Name)
        );
        //  $this->dtgCounter->TotalItemCount = $Count;
    }

    public function dtgCounterRow_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/counter.php?id=' . $strParameter);
    }

    //Save for Settings
    protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
        if (isset($_GET['id'])) {
            $Set = Settings::LoadByIdsettings($_GET['id']);
            $Set->Name = $this->txtName->Text;
            $Set->Option = $this->txtAbbri->Text;
            $Set->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/counter.php?');
        }
    }

    protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
        if (isset($_GET['id'])) {
            $Set = Settings::LoadByIdsettings($_GET['id']);
            $Set->Delete();
        }
    }

}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// dept_year_events_edit.tpl.php as the included HTML template file
SettingForm::Run('SettingForm');
?>