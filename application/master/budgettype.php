<?php

// Load the QCubed Development Framework
require('../../qcubed.inc.php');

//require(__FORMBASE_CLASSES__ . '/BudgetCatListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the BudgetCat class.  It uses the code-generated
 * BudgetCatDataGrid control which has meta-methods to help with
 * easily creating/defining BudgetCat columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both budget_cat_list.php AND
 * budget_cat_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class BudgetCatListForm extends QForm {

    // Override Form Event Handlers as Needed
    protected function Form_Run() {
        parent::Form_Run();

        // Security check for ALLOW_REMOTE_ADMIN
        // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
        QApplication::CheckRemoteAdmin();
    }

//		protected function Form_Load() {}
    protected $txtCode, $dtgBudgetCats, $txtName, $txtId, $btnSave, $btndelete, $btnCancel;

    protected function Form_Create() {
        $this->txtName = new QTextBox($this);
        $this->txtName->Name = 'Budgets Type';
        $this->txtName->Required = True;

        $this->txtCode = new QTextBox($this);
        $this->txtCode->Placeholder = "Code";
        $this->txtCode->Visible = FALSE;
        $this->txtCode->Width = 70;
        $this->txtCode->Name = "Code";

        $counter = Settings::LoadByIdsettings(2);
        $this->txtCode->Text = $counter->Option;
        $counter->Option = $counter->Option + 1;

        $this->txtId = new QTextBox($this);

        $this->dtgBudgetCats = new QDataGrid($this);
        $this->dtgBudgetCats->CssClass = "datagrid";
        $this->dtgBudgetCats->ShowFilter = TRUE;
        $this->dtgBudgetCats->Paginator = new QPaginator($this->dtgBudgetCats);
        $this->dtgBudgetCats->ItemsPerPage = 15;
        $this->dtgBudgetCats->SetDataBinder('dtgBudgetCats_Bind');

        $this->dtgBudgetCats->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));

        $this->dtgBudgetCats->RowActionParameterHtml = '<?= $_ITEM->Idledger ?>';
        $this->dtgBudgetCats->AddRowAction(new QClickEvent(), new QServerAction('dtgBudgetCats_Click'));


        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'HtmlEntities=false', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Ledger()->Idledger),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Ledger()->Name, false)));

        $Name->Filter = QQ::Like(QQN::Ledger()->Name, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $this->dtgBudgetCats->AddColumn($Name);

        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('Save_click'));

        $this->btndelete = new QButton($this);
        $this->btndelete->ButtonMode = QButtonMode::Delete;
        $this->btndelete->AddAction(new QClickEvent(), new QServerAction('Delete_Click'));
        $this->btndelete->Visible = FALSE;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->ButtonMode = QButtonMode::Cancel;
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('cancel_click'));

        if (isset($_GET['id'])) {
            $objbudgets = Ledger::LoadByIdledger($_GET['id']);
            if ($objbudgets) {
                $this->txtName->Text = $objbudgets->Name;
                $this->btndelete->Visible = TRUE;
            }
        }
    }

    protected function dtgBudgetCats_Bind() {


        $objledger = Ledger::LoadArrayByGrp(8447);

        $data = Ledger::QueryArray(
                        QQ::AndCondition(
                                $this->dtgBudgetCats->Conditions, QQ::Equal(QQN::Ledger()->Grp, 8447)
                        ), QQ::Clause(
                                QQ::OrderBy(QQN::Ledger()->Idledger, TRUE), $this->dtgBudgetCats->LimitClause
        ));
        $this->dtgBudgetCats->DataSource = $data;
    }

    protected function dtgBudgetCats_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budgettype.php?id=' . $strParameter);
    }

    protected function Save_click() {
        if ($this->txtName->Text != NULL) {
            $ledger = Ledger::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Ledger()->Name, $this->txtName->Text)));
            if (!$ledger) {
                if (isset($_GET['id'])) {
                    $ledger = Ledger::LoadByIdledger($_GET['id']);
                } else {
                    $ledger = new Ledger();
                    $counter = Settings::LoadByIdsettings(2);
                    $this->txtCode->Text = $counter->Option;
                    $counter->Option = $counter->Option + 1;
                    $counter->Save();
                    $ledger->Code = $this->txtCode->Text;
                    $ledger->Name = $this->txtName->Text;
                    $ledger->Grp = 8447;
                    $ledger->Save();
                }
                $ledger->Name = $this->txtName->Text;
                $ledger->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budgettype.php');
            } else {
                // QApplication::DisplayAlert('Already Exists');

                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budgettype.php');
            }
        } else {
            //  QApplication::DisplayAlert('Please Enter Budget Category Name');
        }
    }

    protected function Delete_Click($strFormId, $strControlId, $strParameter) {
        $objbudgets = Ledger::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Ledger()->Idledger, $_GET['id']), QQ::Equal(QQN::Ledger()->Grp, 8447)
        ));
        if ($objbudgets) {
            foreach ($objbudgets as $leder) {
                
            }

            $leder->Delete();
        } else {
            
        }
    }

    protected function cancel_click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budgettype.php');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// budget_cat_list.tpl.php as the included HTML template file
BudgetCatListForm::Run('BudgetCatListForm');
?>