<?php

require('../../qcubed.inc.php');

class VoucherListForm extends QForm {

    protected $btnexport;
    protected $btnadd;
    protected $btnNeg;
    protected $dtg;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        //button delcaration for add
        $this->btnadd = new QButton($this);
        $this->btnadd->ButtonMode = QButtonMode::Success;
        $this->btnadd->Text = '<i class="fa fa-plus"></i>  Add Quotation';
        $this->btnadd->AddAction(new QClickEvent(), new QServerAction('btnadd_click'));

        $this->btnNeg = new QButton($this);
        $this->btnNeg->ButtonMode = QButtonMode::Success;
        $this->btnNeg->Text = "<i class='fa fa-navicon'></i> Negotiation";
        $this->btnNeg->AddAction(new QClickEvent(), new QAjaxAction('btnNeg_click'));
        $Qts = Voucher::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Grp, 10), QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])
        ));
        if ($Qts)
            $this->btnNeg->Visible = TRUE;
        else
            $this->btnNeg->Visible = FALSE;

        $this->dtg = new QDataGrid($this);
        // filterbox declaration
        $this->dtg->ShowFilter = TRUE;
        $this->dtg->ShowFilterButton = FALSE;
        $this->dtg->ShowFilterResetButton = FALSE;
        $this->dtg->CssClass = "datagrid";

        //$this->dtg->Width = 700;

        $this->dtg->Paginator = new QPaginator($this->dtg);
        $this->dtg->ItemsPerPage = 20;
        $this->dtg->CellPadding = 10;
        $this->dtg->CellSpacing = 5;

        $this->dtg->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
        $this->dtg->AddRowAction(new QMouseOutEvent(), new QCssClassAction());

        $this->dtg->RowActionParameterHtml = '<?= $_ITEM->Idvoucher ?>';
        //$this->dtg->AddRowAction(new QClickEvent(), new QAjaxAction('dtgRow_Click'));

        $this->dtg->AddColumn(new QDataGridColumn('Edit', '<a href="quotation.php?id=<?= $_ITEM->Idvoucher ?>">Edit</a>', 'Width=50', 'HtmlEntities=false'));
        $Code = new QDataGridColumn('<div align="center">No</div>', '<div align="center"> <?= $_ITEM->InvNo ?></div>', 'Width=50', 'HtmlEntities=false', array(
            'OrderByClause' => QQ::OrderBy(QQN::Voucher()->InvNo),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Voucher()->InvNo, false)));

        $Code->Filter = QQ::Like(QQN::Voucher()->InvNo, null);
        $Code->FilterPostfix = $Code->FilterPrefix = '%';
        $Code->FilterType = QFilterType::TextFilter;
        $Code->FilterBoxSize = 6;
        $this->dtg->AddColumn($Code);

        $this->dtg->AddColumn(new QDataGridColumn('<div align="center">Date</div>', '<div align="center"><?= $_ITEM->Date->Day ?>/<?= $_ITEM->Date->Month ?>/<?= $_ITEM->Date->Year ?></div>', 'Width=100', 'HtmlEntities=false'));

        $Name = new QDataGridColumn('Title', '<?= $_ITEM->Narration ?>', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Voucher()->Narration),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Voucher()->Narration, false)));

        $Name->Filter = QQ::Like(QQN::Voucher()->Narration, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $Name->FilterBoxSize = 15;
        $this->dtg->AddColumn($Name);

        $To = new QDataGridColumn('Supplier', '<?= $_ITEM->DrObject ?>', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Voucher()->DrObject->Name),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Voucher()->DrObject->Name, false)));
        $To->Filter = QQ::Like(QQN::Voucher()->DrObject->Name, null);
        $To->FilterPostfix = $To->FilterPrefix = '%';
        $To->FilterType = QFilterType::TextFilter;
        $To->FilterBoxSize = 15;
        $this->dtg->AddColumn($To);

        $this->dtg->AddColumn(new QDataGridColumn('<div align="right">Total Amount</div>', '<div align="right"><?= $_ITEM->Amount ?></div>', 'Width=100', 'HtmlEntities=false'));



        $this->dtg->SetDataBinder('dtg_Bind');
        // Button  download entire datagrid as Microsoft Excel .xls file
    }

    protected function dtg_Bind() {
        if (isset($_GET['req'])) {
            $this->dtg->TotalItemCount = Voucher::QueryCount(
                            QQ::AndCondition(
                                    $this->dtg->Conditions, QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])
            ));

            $data = Voucher::QueryArray(
                            QQ::AndCondition(
                                    $this->dtg->Conditions, QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])
                            ), QQ::Clause(
                                    QQ::OrderBy(QQN::Voucher()->Idvoucher, TRUE), $this->dtg->LimitClause
            ));

            $this->dtg->DataSource = $data;
        }
    }

    

    protected function btnadd_click() {
        $login = Login::LoadByIdlogin($_SESSION['login']);
        $req = Voucher::LoadByIdvoucher($_GET['req']);
        $vov = new Voucher();
        $code = VoucherGrp::LoadByIdvoucherGrp(10);
        $code->Counter = $code->Counter + 1;
        $code->Save();
        $vov->InvNo = 'WCE' . $code->Abbrivation . $code->Counter;
        $vov->Date = QDateTime::Now();
        $vov->Cr = $req->Cr;
        $vov->Grp = 10;
        $vov->Narration = $req->Narration;
        $vov->Amount = $req->Amount;
        $vov->DataBy = $login->Idlogin;
        $vov->RefNo = $req->Idvoucher;
        $vov->Save();
        $reqvhps = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
        if ($reqvhps) {
            foreach ($reqvhps as $reqvhp) {
                $vhp = new VoucherHasItem();
                $vhp->Voucher = $vov->Idvoucher;
                $vhp->Item = $reqvhp->Item;
                $vhp->Qty = $reqvhp->Qty;
                $vhp->Amount = $reqvhp->Amount;
                $vhp->PackSize = $reqvhp->PackSize;
                $vhp->Rate = $reqvhp->Rate;
                $vhp->Per = $reqvhp->Per;
                $vhp->DiscPer = $reqvhp->DiscPer;
                $vhp->DiscAmt = $reqvhp->DiscAmt;
                $vhp->Save();
            }
        }
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation.php?id=' . $vov->Idvoucher);
    }

    protected function btnNeg_click() {
        $req = Voucher::LoadByIdvoucher($_GET['req']);
        if ($req->Lock == 1)
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/comparative_print.php?req=' . $_GET['req']);
        else
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/negotiation.php?req=' . $_GET['req']);
    }

}

VoucherListForm::Run('VoucherListForm');
?>