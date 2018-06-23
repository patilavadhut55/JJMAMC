<?php

require('../../qcubed.inc.php');

class LedgerEditForm extends QForm {

    protected $txtName;
    //protected $txtMname;
    protected $txtCode;
    protected $chkIsfeerepeat;
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
        $this->txtName->Width = 250;

        $this->txtCode = new QTextBox($this);
        $this->txtCode->Placeholder = "Code";
        $this->txtCode->Visible = FALSE;
        $this->txtCode->Width = 70;
        $this->txtCode->Name = "Code";
        //if role is configrator then display textbox code            
        if ($_SESSION['role'] == "1") {
            $this->txtCode->Visible = TRUE;
        }
        $counter = Settings::LoadByIdsettings(2);
        $this->txtCode->Text = $counter->Option;

        $this->lstGroup = new QSelect2ListBox($this);
        $this->lstGroup->Name = "Group";
        $leds = Ledger::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Ledger()->IsGrp, 1)
                        )
        );
        $this->lstGroup->AddItem("Select Group", NULL);
        foreach ($leds as $led)
            $this->lstGroup->AddItem($led->Name, $led->Idledger);
        $this->lstGroup->SelectedValue = 5454;

        $this->chkGrp = new QCheckBox($this);
        $this->chkGrp->Width = 18;
        $this->chkGrp->Height = 18;

        
        $this->chkIsfeerepeat = new QCheckBox($this);
        $this->chkIsfeerepeat->Width = 18;
        $this->chkIsfeerepeat->Height = 18;
        
        $this->dtgLedger = new QDataGrid($this);
        $this->dtgLedger->CssClass = "datagrid";

        $this->dtgLedger->ShowFilter = TRUE;

        $this->dtgLedger->Paginator = new QPaginator($this->dtgLedger);
        $this->dtgLedger->ItemsPerPage = 10;

        $this->dtgLedger->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));


        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

        $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $this->dtgLedger->AddColumn($Name);

        $this->dtgLedger->AddColumn(new QDataGridColumn('Is Group', '<?= $_FORM->renderacc($_ITEM) ?>', 'HtmlEntities=false', 'Width=50'));
        $this->dtgLedger->AddColumn(new QDataGridColumn('Is Fee Repeat', '<?= $_FORM->renderchkisfeerepeat($_ITEM) ?>', 'HtmlEntities=false', 'Width=50'));

        $this->dtgLedger->SetDataBinder('dtgLedger_Bind');

        $this->dtgLedger->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
        $this->dtgLedger->AddRowAction(new QClickEvent(), new QServerAction('dtgledgerRow_Click'));

        if (isset($_GET['id'])) {
            $this->btnDelete->Visible = TRUE;
            $ledger = Ledger::LoadByIdledger($_GET['id']);
            $this->txtCode->Text = $ledger->Code;
            $this->txtName->Text = $ledger->Name;
            $this->lstGroup->SelectedValue = $ledger->Grp;
            $this->chkGrp->Checked = $ledger->IsGrp;
            $this->chkIsfeerepeat->Checked = $ledger->IsFeeRepeat;
        } else {
            $this->chkIsfeerepeat->Checked = 0;
            $this->chkGrp->Checked = 0;
        }
    }

    protected function dtgLedger_Bind() {

        $this->dtgLedger->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(
                                $this->dtgLedger->Conditions, QQ::Equal(QQN::Ledger()->Grp, 5454)
                        )
        );

        $data = Ledger::QueryArray(
                        QQ::AndCondition(
                                $this->dtgLedger->Conditions, QQ::Equal(QQN::Ledger()->Grp, 5454)
                        ), QQ::Clause(
                                $this->dtgLedger->OrderByClause, $this->dtgLedger->LimitClause
                        )
        );

        $this->dtgLedger->DataSource = $data;
    }

    public function dtgledgerRow_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/ledger_edit.php?id=' . $strParameter);
    }

    public function renderacc(Ledger $ledger) {
        $objControlId = 'acc' . $ledger->Idledger;
        if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QCheckBox($this, $objControlId);
            $objControl->Width = 15;
            $objControl->Height = 15;
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
    
    public function renderchkisfeerepeat(Ledger $ledger) {
        $objControlId = 'rep' . $ledger->Idledger;
        if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QCheckBox($this, $objControlId);
            $objControl->Width = 15;
            $objControl->Height = 15;
            $objControl->AddAction(new QChangeEvent(), new QServerAction('renderchkisfeerepeat_change'));
            $objControl->ActionParameter = $ledger->Idledger;
            $objControl->Checked = $ledger->IsFeeRepeat;
        }

        return $objControl->Render(false);
    }

    public function renderchkisfeerepeat_change($strFormId, $strControlId, $strParameter) {
        $ledger = Ledger::LoadByIdledger($strParameter);
        $ledger->IsFeeRepeat = $this->GetControl($strControlId)->Checked;
        $ledger->Save();
        $this->btnList_Click();
    }

    protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
        if (isset($_GET['id'])) {
            $ledger = Ledger::LoadByIdledger($_GET['id']);
            $ledger->Code = $this->txtCode->Text;
        } else {
            $ledger = new Ledger();
            $counter = Settings::LoadByIdsettings(2);
            if ($this->txtCode->Text == $counter->Option)
                $ledger->Code = $counter->Option;
            else
                $ledger->Code = $this->txtCode->Text;

            updateCounter($counter->Idsettings);
        }
        $ledger->Name = $this->txtName->Text;
        $ledger->Grp = $this->lstGroup->SelectedValue;
        $ledger->IsGrp = $this->chkGrp->Checked;
        $ledger->IsFeeRepeat = $this->chkIsfeerepeat->Checked;
        $ledger->Save();

        $this->btnList_Click();
    }

    protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
        $ledger = Ledger::LoadByIdledger($_GET['id']);
        $ledger->Delete();

        $this->btnList_Click();
    }

    public function btnList_Click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/ledger_edit.php');
    }

}

LedgerEditForm::Run('LedgerEditForm');
?>