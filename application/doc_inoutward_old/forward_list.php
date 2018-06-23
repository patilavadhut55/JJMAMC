<?php

require('../../qcubed.inc.php');

class InwardOutward extends QForm {

    protected $dtgforward;
    protected $lstMarkto;
    protected $btnSave;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();


        $this->lstMarkto = new QListBox($this);
        $this->lstMarkto->Width = 240;
        $this->lstMarkto->Name = "Remark To";
        $this->lstMarkto->AddItem("-Select One-", NULL);
        $desigs = LoginHasRole::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::LoginHasRole()->RoleIdroleObject->Grp, 3)
                        ), QQ::Clause(QQ::GroupBy(QQN::LoginHasRole()->RoleIdrole)));
        foreach ($desigs as $desig) {
            $this->lstMarkto->AddItem(delete_all_between('[', ']', $desig->RoleIdroleObject->Name) . ' ' . delete_all_between('[', ']', $desig->RoleIdroleObject->ParrentObject), $desig->LoginIdlogin);
        }


        $this->btnSave = new QButton($this);
        $this->btnSave->ButtonMode = QButtonMode::Save;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));


        $this->dtgforward = new QDataGrid($this);
        $this->dtgforward->CssClass = "datagrid";

        $this->dtgforward->ShowFilter = FALSE;

        $this->dtgforward->Paginator = new QPaginator($this->dtgforward);
        $this->dtgforward->ItemsPerPage = 15;

        $this->dtgforward->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=1'));

        $this->dtgforward->AddColumn(new QDataGridColumn('Date', '<?= date("d/m/Y",strtotime($_ITEM->DocInOutObject->Date)) ?>', 'Width=10'));

        $this->dtgforward->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->DocInOutObject->Code ?>', 'Width=20'));


        $Name = new QDataGridColumn('Subject', '<?= $_ITEM->DocInOutObject->DocumentGrpObject->Name ?>', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Name),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Name, false)));

        $Name->Filter = QQ::Like(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Name, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $this->dtgforward->AddColumn($Name);
        $this->dtgforward->AddColumn(new QDataGridColumn('Forward To', '<?= $_ITEM->ToObject->IdloginObject->Name  ?>', 'Width=150'));

        $this->dtgforward->AddColumn(new QDataGridColumn('Status', '<?= $_ITEM->DocInOutObject->Closed  ?>', 'Width=150'));


        $this->dtgforward->SetDataBinder('dtgforward_Bind');

        $this->dtgforward->RowActionParameterHtml = '<?= $_ITEM->DocInOutObject->IddocInOut  ?>';
        //$this->dtgforward->AddRowAction(new QClickEvent(), new QAjaxAction('dtgforwardRow_Click'));


        if (isset($_GET['id'])) {
            
        }
    }

    protected function dtgforward_Bind() {
        $this->dtgforward->TotalItemCount = MarkTo::QueryCount(
                        QQ::AndCondition(
                                $this->dtgforward->Conditions, QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp, 5297),
                                // QQ::Equal(QQN::MarkTo()->To, $_SESSION['role']),
                                QQ::Equal(QQN::MarkTo()->DocInOut, $_GET['id'])
        ));

        $data = MarkTo::QueryArray(
                        QQ::AndCondition(
                                $this->dtgforward->Conditions, QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp, 5297), //docregister Subject
                                // QQ::Equal(QQN::MarkTo()->To, $_SESSION['role']),
                                QQ::Equal(QQN::MarkTo()->DocInOutObject, $_GET['id'])
                        ), QQ::Clause(
                                QQ::OrderBy(QQN::MarkTo()->IdmarkTo, TRUE), $this->dtgforward->LimitClause
        ));

        $this->dtgforward->DataSource = $data;
    }

    // public function dtgforwardRow_Click($strFormId, $strControlId, $strParameter) {
    //   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/inward_outward_list.php?id='.$strParameter);
    //  }


    public function btnSave_click() {
        $markto = new MarkTo();
        $markto->To = $this->lstMarkto->SelectedValue;
        $markto->From = $_SESSION['login'];
        $markto->DocInOut = $_GET['id'];
        $markto->Date = QDateTime::Now();
        //$markto->Note = $this->txtNote->Text;
        //$markto->DocInOutObject->Closed = $this->chkClose->Checked;
        $markto->Save();


        $docin = DocInOut::LoadByIddocInOut($_GET['id']);
        // $docin->Closed = $this->chkClose->Checked;
        $docin->InwordBy = $_SESSION['login'];
        $docin->From = $_SESSION['login'];
        $docin->To = $markto->To;
        $docin->Save();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/forward_list.php?id=' . $_GET['id']);
    }

}

InwardOutward::Run('InwardOutward');
?>        