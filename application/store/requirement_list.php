<?php

require('../../qcubed.inc.php');

class VoucherListForm extends QForm {

    protected $btnexport;
    protected $btnadd;
    protected $btnnego;
    protected $btnquo;
    protected $dtg;
    protected $calfrom;
    protected $calto;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        $this->calfrom = new QCalendar($this);
        $this->calto = new QCalendar($this);

        if (isset($_GET['from'])) {
            $this->calfrom->Text = date('M d Y', strtotime($_GET['from']));
            $this->calto->Text = date('M d Y', strtotime($_GET['to']));
        }

        $this->calto->AddAction(new QChangeEvent(), new QAjaxAction('Search_Requirment'));

        //button delcaration for add
        $this->btnadd = new QButton($this);
        $this->btnadd->ButtonMode = QButtonMode::AddNew;
        $this->btnadd->AddAction(new QClickEvent(), new QAjaxAction('btnadd_click'));

        $this->dtg = new QDataGrid($this);
        // filterbox declaration
        $this->dtg->ShowFilter = TRUE;
        $this->dtg->ShowFilterButton = FALSE;
        $this->dtg->ShowFilterResetButton = FALSE;
        $this->dtg->CssClass = "datagrid";

        $this->dtg->Paginator = new QPaginator($this->dtg);
        $this->dtg->ItemsPerPage = 20;
        $this->dtg->CellPadding = 10;
        $this->dtg->CellSpacing = 5;

        $this->dtg->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
        $this->dtg->AddRowAction(new QMouseOutEvent(), new QCssClassAction());


        $this->dtg->AddColumn(new QDataGridColumn('Edit', '<a href="requirement.php?id=<?= $_ITEM->Idvoucher ?>">Edit</a>', 'Width=50', 'HtmlEntities=false'));
        $Code = new QDataGridColumn('<div align="center">Code</div>', '<div align="center"> <?= $_ITEM->InvNo ?></div>', 'Width=50', 'HtmlEntities=false', array(
            'OrderByClause' => QQ::OrderBy(QQN::Voucher()->InvNo),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Voucher()->InvNo, false)));

        $Code->Filter = QQ::Like(QQN::Voucher()->InvNo, null);
        $Code->FilterPostfix = $Code->FilterPrefix = '%';
        $Code->FilterType = QFilterType::TextFilter;
        $Code->FilterBoxSize = 7;
        $this->dtg->AddColumn($Code);

        $this->dtg->AddColumn(new QDataGridColumn('<div align="center">Date</div>', '<div align="center"><?= $_ITEM->Date->Day ?>/<?= $_ITEM->Date->Month ?>/<?= $_ITEM->Date->Year ?></div>', 'Width=100', 'HtmlEntities=false'));

        $Name = new QDataGridColumn('Requirement', '<?= $_ITEM->Narration ?>', 'Width=200', array(
            'OrderByClause' => QQ::OrderBy(QQN::Voucher()->Narration),
            'ReverseOrderByClause' => QQ::OrderBy(QQN::Voucher()->Narration, false)));

        $Name->Filter = QQ::Like(QQN::Voucher()->Narration, null);
        $Name->FilterPostfix = $Name->FilterPrefix = '%';
        $Name->FilterType = QFilterType::TextFilter;
        $Name->FilterBoxSize = 15;
        $this->dtg->AddColumn($Name);

        $this->dtg->AddColumn(new QDataGridColumn('Approved By', '<div align="left"><?= $_FORM->renderBy($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=150'));
        $this->dtg->AddColumn(new QDataGridColumn('Budget', '<div align="left"><?= $_ITEM->Amount ?></div>', 'Width=120', 'HtmlEntities=false'));

        $this->dtg->AddColumn(new QDataGridColumn('<div align="center" >Status</div>', '<div align="center"><?= $_FORM-> renderstatus($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=5'));

        $this->dtg->AddColumn(new QDataGridColumn('<div align="center" >Quotation</div>', '<div align="center" ><?= $_FORM-> renderquo($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=5'));


        $this->dtg->SetDataBinder('dtg_Bind');
        // Button  download entire datagrid as Microsoft Excel .xls file
        /* $this->btnexport = new QDataGridExporterButton($this, $this->dtg);
          $this->btnexport->DownloadFormat = QDataGridExporterButton::EXPORT_AS_XLS;
          $this->btnexport->Text = "<img src='".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/export.png' width=30 /><br/>Export";
          $this->btnexport->HtmlEntities = FALSE;
          $this->btnexport->Width = 80; */
    }

    protected function dtg_Bind() {
        if (isset($_GET['from'])) {
            if ($_SESSION['role'] == 487) {
                $this->dtg->TotalItemCount = Voucher::QueryCount(
                                QQ::AndCondition(
                                    $this->dtg->Conditions, QQ::Equal(QQN::Voucher()->Grp, 11), 
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, $_GET['from']), 
                                    QQ::LessOrEqual(QQN::Voucher()->Date, $_GET['to'])
                                ));

                $data = Voucher::QueryArray(
                                QQ::AndCondition(
                                    $this->dtg->Conditions, QQ::Equal(QQN::Voucher()->Grp, 11), 
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, $_GET['from']), 
                                    QQ::LessOrEqual(QQN::Voucher()->Date, $_GET['to'])
                                ), QQ::Clause(
                                    QQ::OrderBy(QQN::Voucher()->InvNo, TRUE), $this->dtg->LimitClause
                                ));
            } else {
                $this->dtg->TotalItemCount = Voucher::QueryCount(
                                QQ::AndCondition(
                                    $this->dtg->Conditions, QQ::Equal(QQN::Voucher()->Grp, 11), 
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, $_GET['from']), 
                                    QQ::LessOrEqual(QQN::Voucher()->Date, $_GET['to']), 
                                    QQ::Equal(QQN::Voucher()->DataBy, $_SESSION['login'])
                                ));

                $data = Voucher::QueryArray(
                                QQ::AndCondition(
                                    $this->dtg->Conditions, QQ::Equal(QQN::Voucher()->Grp, 11), 
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, $_GET['from']), 
                                    QQ::LessOrEqual(QQN::Voucher()->Date, $_GET['to']), 
                                    QQ::Equal(QQN::Voucher()->DataBy, $_SESSION['login'])
                                ), QQ::Clause(
                                    QQ::OrderBy(QQN::Voucher()->InvNo, TRUE), $this->dtg->LimitClause
                                ));
            }

            $this->dtg->DataSource = $data;
        }
    }

    //status lable creation
    public function renderstatus(Voucher $objvoucher) {
        $objControlId = 'status' . $objvoucher->Idvoucher;

        if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QButton($this, $objControlId);
            $objControl->ButtonMode = QButtonMode::Info;
            $quos = Voucher::QueryCount(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 10), 
                                    QQ::Equal(QQN::Voucher()->RefNo, $objvoucher->Idvoucher)
                                ));
            if($quos > 1){
                
                if ($objvoucher->Lock == 1)
                    $objControl->Text = "PO Generated";
                else
                    $objControl->Text = "View Comparitive";

                $objControl->AddAction(new QClickEvent(), new QAjaxAction('renderstatus_click'));
                $objControl->ActionParameter = $objvoucher->Idvoucher;
            }else{
                $objControl->Visible = FALSE;
            }
        }
        return $objControl->Render(false);
    }

    public function renderstatus_click($strFormId, $strControlId, $strParameter) {
        $req = Voucher::LoadByIdvoucher($strParameter);
        if ($req->Lock == 1) {
            $pos = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 3), 
                                    QQ::Equal(QQN::Voucher()->RefNoObject->RefNo, $req->Idvoucher)
                                ));
            foreach ($pos as $po) {
                
            }
        if($req->RequirementGrp == 1){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/po_print.php?id=' . $po->Idvoucher);
       }
       if($req->RequirementGrp == 2){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/annual_print.php?id=' . $po->Idvoucher);
      
       }
       if($req->RequirementGrp == 3)
       {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/work_print.php?id=' . $po->Idvoucher);
      
       }
       }
       else {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/comparative_print.php?req=' . $strParameter);
        }
    }

    public function renderBy(Voucher $objvoucher) {
        $objControlId = 'Negociation' . $objvoucher->Idvoucher;

        if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QLabel($this, $objControlId);
            $member = Ledger::LoadByIdledger($objvoucher->Cr);
            if ($objvoucher->ApprovedBy != NULL)
                $objControl->Text = $objvoucher->ApprovedByObject->IdloginObject->Name;
        }
        return $objControl->Render(false);
    }

    public function renderquo(Voucher $objvoucher) {
        $objControlId = 'Quotation' . $objvoucher->Idvoucher;

        if (!$objControl = $this->GetControl($objControlId)) {
            $objControl = new QButton($this, $objControlId);
            $qts = Voucher::QueryCount(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 10), QQ::Equal(QQN::Voucher()->RefNo, $objvoucher->Idvoucher)
            ));

            $objControl->Width = 150;
            $chkreqvovs = Voucher::LoadByIdvoucher($objvoucher->Idvoucher); /* QueryArray(
              QQ::AndCondition(
              QQ::Equal(QQN::Voucher()->Idvoucher, $objvoucher->Idvoucher),
              QQ::Equal(QQN::Voucher()->ApprovedBy, NULL))); */
            if ($chkreqvovs->ApprovedBy == NULL && $chkreqvovs->Cancel == NULL) {
                $objControl->BackColor = " Orange";
                $objControl->ForeColor = "#FFF";
                $objControl->Text = "Approval pending";
            } elseif ($chkreqvovs->CancelBy != NULL || $chkreqvovs->Cancel == 1) {
                $objControl->BackColor = "Red";
                $objControl->ForeColor = "#FFF";
                $objControl->Text = "Requirement Cancel";
            } else {

                $objControl->ButtonMode = QButtonMode::Success;
                $objControl->Text = "Quotations - " . $qts;
            }

            $objControl->AddAction(new QClickEvent(), new QAjaxAction("btnquo_click"));
            $objControl->ActionParameter = $objvoucher->Idvoucher;
        }
        return $objControl->Render(false);
    }

    public function btnquo_click($strFormId, $strControlId, $strParameter) {
        $intInId = intval($strParameter);
        //$objQuotation = Voucher::LoadByIdvoucher($intInId);
        $chkreqvovs = Voucher::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Idvoucher, $intInId), QQ::Equal(QQN::Voucher()->ApprovedBy, NULL), QQ::Equal(QQN::Voucher()->Cancel, NULL)));
        $chkvov = Voucher::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->Idvoucher, $intInId), QQ::Equal(QQN::Voucher()->Cancel, 1)));
        if ($chkreqvovs) {
            QApplication::DisplayAlert("Approval is Pending");
        } elseif ($chkvov) {
            QApplication::DisplayAlert("Requirement is denied");
        } else {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/quotation_list.php?req=' . $strParameter);
        }
    }

    protected function dtgRow_Click($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/requirement.php?id=' . $strParameter);
    }

    protected function btnadd_click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/requirement.php');
    }

    protected function Search_Requirment() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/requirement_list.php?from=' . date('Ymd', strtotime($this->calfrom->DateTime)) . '&to=' . date('Ymd', strtotime($this->calto->DateTime)));
    }

}

VoucherListForm::Run('VoucherListForm');
?>