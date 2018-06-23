<?php

// Load the QCubed Development Framework
require('../../qcubed.inc.php');

class document extends QForm {

    protected $btnSave;
    protected $btnCancel;
    protected $btnDelete;
    protected $txtname;
    protected $dtgdisplay;
    protected $editMode;

    protected function Form_Run() {
        parent::Form_Run();


        QApplication::CheckRemoteAdmin();
    }

//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        $this->txtname = new QTextBox($this);
        $this->txtname->Name = "Document Name";
        $this->txtname->Width = "440";

        //datagrid
        $this->dtgdisplay = new QDataGrid($this);
        $this->dtgdisplay->CssClass = "datagrid";

        $this->dtgdisplay->ShowFilter = TRUE;

        $this->dtgdisplay->Paginator = new QPaginator($this->dtgdisplay);
        $this->dtgdisplay->ItemsPerPage = 10;
        $this->dtgdisplay->SetDataBinder('dtgdisplay_Bind');

        $this->dtgdisplay->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';

        $this->dtgdisplay->AddRowAction(new QClickEvent(), new QServerAction('dtgdisplayRow_Click'));

        $this->dtgdisplay->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));

        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'HtmlEntities=false', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Idledger),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

        $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $this->dtgdisplay->AddColumn($Name);
        $this->editMode = FALSE;





        $this->btnSave = new QButton($this);
        $this->btnSave->Text = QApplication::Translate('Save');
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
        $this->btnSave->CausesValidation = true;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = QApplication::Translate('Cancel');
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = QApplication::Translate('Delete');
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = FALSE;

        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnDelete->ButtonMode = QButtonMode::Delete;

        if (isset($_GET['id'])) {
            $this->btnDelete->Visible = TRUE;
            $student = Ledger::LoadByIdledger($_GET['id']);
            $this->txtname->Text = $student->Name;
        }
    }

    protected function btnSave_Click() {
    
        if ($this->txtname->Text != NULL) {
            if (isset($_GET['id'])) {
                $student = Ledger::LoadByIdledger($_GET['id']);
            } else {
                $code = Settings::LoadByName("Document Ledger Group");
                $code->Option = $code->Option + 1;
                $code->Save();
                $student = new Ledger();
                $student->Code = 'C' . $code->Option;
                $student->Name = $this->txtname->Text;
                $student->Grp = 5297;
                $student->Save();
            }
            $student->Name = $this->txtname->Text;
            $student->Grp = 5297;

            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/document.php?id=' . $student->Idledger);
        }
    }

    protected function dtgdisplay_Bind() {
        $this->dtgdisplay->TotalItemCount = Ledger::QueryCount(
                        QQ::AndCondition(
                                $this->dtgdisplay->Conditions, QQ::Equal(QQN::Ledger()->Grp, 5297)
        ));
        $data = Ledger::QueryArray(
                        QQ::AndCondition(
                                $this->dtgdisplay->Conditions, QQ::Equal(QQN::Ledger()->Grp, 5297)
                        ), QQ::Clause(
                                QQ::OrderBy(QQN::Ledger()->Idledger, TRUE), $this->dtgdisplay->LimitClause
        ));

        $this->dtgdisplay->DataSource = $data;
    }

    protected function dtgdisplayRow_Click($strFormId, $strControlId, $strParameter) {
 
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/document.php?id=' . $strParameter);
        
       
    }

    protected function btnDelete_Click() {
        if (isset($_GET['id'])) {
            $student = Ledger::LoadByIdledger($_GET['id']);

            $student->Delete();
            $this->txtname->Text = " ";
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/document.php');
        
       
        }
    }

    protected function btnCancel_Click() {

        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/document.php');
    }

    // Other Methods

    protected function RedirectToListPage() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/document.php');
    }

}

document::Run('document');
?>