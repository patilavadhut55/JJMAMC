<?php

require('../../qcubed.inc.php');

//require(__FORMBASE_CLASSES__ . '/LedgerEditFormBase.class.php');

class LedgerEditForm extends QForm {

    protected $txtCode;
    protected $txtName;
    protected $lstGrp;
    protected $btnList;
    protected $btnNew;
    protected $btnSave;
    protected $btnCancel;
    protected $btnDelete;
    protected $dtgLogin;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();
        $this->txtName = new QTextBox($this);
        $this->txtName->Name = "Name";

        $this->txtCode = new QTextBox($this);
        $this->txtCode->Name = "Code";
        $this->txtCode->ReadOnly = TRUE;


        $this->dtgLogin = new QDataGrid($this);
        $this->dtgLogin->CssClass = "datagrid";

        $this->dtgLogin->ShowFilter = TRUE;

        $this->dtgLogin->Paginator = new QPaginator($this->dtgLogin);
        $this->dtgLogin->ItemsPerPage = 10;

        if (!isset($_GET['id']) && !isset($_GET['new'])) {
            $this->dtgLogin->SetDataBinder('dtgLogin_Bind');
        }
        $this->dtgLogin->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));
        //$this->dtgLogin->MetaAddColumn("Username");
        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200', array('OrderByClause' => QQ::OrderBy(QQN::Ledger()->Name),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));
        $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $Name->FilterBoxSize = 15;
        $this->dtgLogin->AddColumn($Name);
        $this->dtgLogin->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
        $this->dtgLogin->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));


        $this->lstGrp = new QListBox($this);
        $this->lstGrp->Name = "Group";
        $this->lstGrp->AddItem("-select-", NULL);
        $grps = Ledger::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Ledger()->IsGrp, 1), QQ::OrCondition(
                                        QQ::Equal(QQN::Ledger()->GrpObject->Code, "D17"), QQ::Equal(QQN::Ledger()->GrpObject->Code, "D21")
                                )
        ));
        foreach ($grps as $grp) {
            $this->lstGrp->AddItem($grp->Name, $grp->Idledger);
        }
        $this->lstGrp->AddAction(new QChangeEvent(), new QServerAction("lstGrp_Change"));
        if (isset($_GET['grp'])) {
            foreach ($grps as $grp) {
                if ($grp->Code == 59) {
                    $this->lstGrp->SelectedValue = $grp->Idledger;
                }
            }
        }

        $this->btnSave = new QButton($this);
        $this->btnSave->Text = QApplication::Translate('Save');
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
        $this->btnSave->CausesValidation = true;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = QApplication::Translate('Cancel');
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = QApplication::Translate('Delete');
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Ledger'))));
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
        //$this->btnDelete->Visible = $this->mctLedger->EditMode;

        $this->btnDelete->Text = 'Delete';
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnDelete->ButtonMode = QButtonMode::Delete;


        $this->btnNew = new QButton($this);
        $this->btnNew->ButtonMode = QButtonMode::AddNew;
        $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));

        $this->btnList = new QButton($this);
        $this->btnList->ButtonMode = QButtonMode::listall;
        $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));

        if (isset($_GET['id'])) {
            $led = Ledger::LoadByIdledger($_GET['id']);
            $this->txtCode->Text = $led->Code;
            $this->txtName->Text = $led->Name;


            $this->lstGrp->SelectedValue = $led->Grp;

            $this->btnSave->Text = "Update";
        } else {
            $codes = Settings::LoadAll();
            foreach ($codes as $code) {
                if ($code->Name == 'Ledger Counter') {
                    $this->txtCode->Text = $code->Option;
                }
            }
        }
    }

    protected function dtgLogin_Bind() {
        $this->dtgLogin->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(
                                $this->dtgLogin->Conditions, QQ::Equal(QQN::Ledger()->GrpObject->Code, "IWSUB")
                        )
        );

        $data = Ledger::QueryArray(
                        QQ::AndCondition(
                                $this->dtgLogin->Conditions, QQ::Equal(QQN::Ledger()->GrpObject->Code, "IWSUB")
                        ), QQ::Clause(
                                QQ::OrderBy(QQN::Ledger()->Idledger, TRUE), $this->dtgLogin->LimitClause
                        )
        );
        $this->dtgLogin->DataSource = $data;
    }

    public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/document_edit.php?id=' . $strParameter);
    }

    protected function lstGrp_Change() {
        //$this->lstGrpObject->SelectedValue = $this->lstGrp->SelectedValue;
    }

    protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
        if (isset($_GET['id'])) {
            $led = Ledger::LoadByIdledger($_GET['id']);
        } else {
            $led = new Ledger();
            $code = Settings::LoadByIdsettings(2);
            $this->txtCode->Text = $code->Option;
            $code->Option = $code->Option + 1;
            $code->Save();
            $led->Code = $this->txtCode->Text;
        }

        $led->Name = $this->txtName->Text;
        $grp = Ledger::LoadByCode("IWSUB");
        $led->Grp = $grp->Idledger;
        $led->Save();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/document_edit.php');
    }

    protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
        $led = Ledger::LoadByCode($this->txtCode->Text);
        $led->Delete();
        //$this->mctLedger->DeleteLedger();
        $this->RedirectToListPage();
    }

    protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {

        $this->RedirectToListPage();
    }

    protected function btnNew_Click() {
        $param = "";

        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/document_edit.php?new=1' . $param);
    }

    public function btnList_Click($strFormId, $strControlId, $strParameter) {
        $param = "";

        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/document_edit.php' . $param);
    }

    protected function RedirectToListPage() {
        $param = "";
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/document_edit.php' . $param);
    }

}

LedgerEditForm::Run('LedgerEditForm');
?>