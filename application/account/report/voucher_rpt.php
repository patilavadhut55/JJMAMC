<?php
    require('../../../qcubed.inc.php');

    class ReportForm extends QForm {
       //controls declaration
        protected $calFromDate;
        protected $txtSearch;
        protected $btnSearch;
        protected $calToDate;
        protected $txtmember;
        protected $arrAutoCompletemember;
        protected $btnReport;
        protected $lstveri;
        protected $voutures;
        protected $lbldate;
        protected $chkApprove;
        protected $txtQuick;

        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            //Controls Define
               parent::Form_Create();
                $_GET['tab'] = 5;
                $objmembers = Ledger::LoadAll();

                $this->txtmember = new QSelect2ListBox($this);
                $this->txtmember->AddItem("- Select -", NULL);
                foreach ($objmembers as $objmember){
                    $this->txtmember->AddItem($objmember->Name, $objmember->Idledger);    
                }

                $this->txtmember->Name = 'Ledger';
                if(isset($_GET['party']))
                   $this->txtmember->SelectedValue = $_GET['party'];
                
                $this->calFromDate = new QCalendar($this);
                $this->calFromDate->Name = "From";
                if(isset($_GET['fdate'])) $this->calFromDate->Text = Date('F d Y', strtotime($_GET['fdate']));
                $this->calFromDate->Required = TRUE;

                $this->calToDate = new QCalendar($this);
                $this->calToDate->Name = "To";
                if(isset($_GET['tdate'])) $this->calToDate->Text = Date('F d Y', strtotime($_GET['tdate']));
                $this->calToDate->Required = TRUE;

                $this->txtmember->Width = 150;
                $this->calFromDate->Width = $this->calToDate->Width = 100;

                $this->lstveri = new QListBox($this);
                $this->lstveri->Name = 'Verified';
                $this->lstveri->AddItem(" All ",3);
                $this->lstveri->AddItem("Verified",1);
                $this->lstveri->AddItem("Non Verified",2);
                $this->lstveri->AddAction(new QChangeEvent(), new QServerAction('lstveri_click'));
                
                //Button
                $this->btnReport = new QButton($this);
                $this->btnReport->Text = 'Report';
                $this->btnReport->CausesValidation = TRUE;
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));

                $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
                $this->txtSearch->Name = 'Challan No';
                $this->txtSearch->Width = 200;

                $this->btnSearch = new QButton($this);
                $this->btnSearch->ButtonMode = QButtonMode::Success;
                $this->btnSearch->Text = "<i class='fa fa-search '></i>";
                $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));

                $this->txtQuick = new QTextBox($this);
                $this->txtQuick->Placeholder = "Quick Search";
                $this->txtQuick->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtQuick_enter'));
                
                if(isset($_GET["tdate"])) {
                    if(isset($_GET['verify'])){
                            $this->lstveri->SelectedValue = $_GET['verify'];
                    }
                    
                    if(isset($_GET["party"])){
                        if(!isset($_GET["cat"])){
                        $this->voutures = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['fdate'])).'000000'),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['tdate'])).'235959'),
                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),    
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Dr, $_GET['party']),
                                        QQ::Equal(QQN::Voucher()->Cr, $_GET['party'])
                                    )
                                ));    
                        }else{
                            $this->voutures = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, $_GET['cat']),
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['fdate'])).'000000'),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['tdate'])).'235959'),
                                    QQ::Equal(QQN::Voucher()->Parrent, NULL),
                                    QQ::OrCondition(
                                        QQ::Equal(QQN::Voucher()->Dr, $_GET['party']),
                                        QQ::Equal(QQN::Voucher()->Cr, $_GET['party'])
                                    )
                                )
                                );
                        }
                    }else{
                            if(!isset($_GET["cat"])){
                                $this->voutures = Voucher::QueryArray(
                                    QQ::AndCondition(
                                            QQ::GreaterOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['fdate'])).'000000'),
                                            QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['tdate'])).'235959'),
                                            QQ::Equal(QQN::Voucher()->Parrent, NULL)
                                        ));
                            }else{
                                $this->voutures = Voucher::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->Grp, $_GET['cat']),
                                            QQ::GreaterOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['fdate'])).'000000'),
                                            QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['tdate'])).'235959'),
                                            QQ::Equal(QQN::Voucher()->Parrent, NULL)
                                        ));
                            }
                        }
                        foreach ($this->voutures as $vouture){
                            $this->chkApprove[$vouture->Idvoucher] = new QCheckBox($this);
                            $this->chkApprove[$vouture->Idvoucher]->HtmlEntities = FALSE;
                            $this->chkApprove[$vouture->Idvoucher]->Width = 18;
                            $this->chkApprove[$vouture->Idvoucher]->Height = 18;        
                            $this->chkApprove[$vouture->Idvoucher]->ActionParameter = $vouture->Idvoucher;
                            $this->chkApprove[$vouture->Idvoucher]->AddAction(new QClickEvent(), new QAjaxAction('chkApprove_click'));;

                            $this->lbldate[$vouture->Idvoucher] = new QCalendar($this);
                            $this->lbldate[$vouture->Idvoucher]->ActionParameter = $vouture->Idvoucher;
                            $this->lbldate[$vouture->Idvoucher]->AddAction(new QChangeEvent(), new QAjaxAction('lbldate_click'));;

                            if($vouture->ApprovedBy != NULL){
                                $this->chkApprove[$vouture->Idvoucher]->Checked = TRUE;
                                $this->lbldate[$vouture->Idvoucher]->Text = date('d/m/Y',  strtotime($vouture->ApprovedDate));
                            }
                        }
                }
        }
        
        protected function lstveri_click(){
            if($this->lstveri->SelectedValue != NULL){
                if(isset($_GET['cat'])){ 
                   $party = $this->txtmember->SelectedValue; 
                   if($party)
                   QApplication::Redirect("voucher_rpt.php?cat=".$_GET['cat']."&party=".$party.
                           "&fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)).'&verify='.$this->lstveri->SelectedValue);
                   else
                   QApplication::Redirect("voucher_rpt.php?cat=".$_GET['cat'].
                           "&fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)).'&verify='.$this->lstveri->SelectedValue); 
                }else{
                   $party = $this->txtmember->SelectedValue; 
                   if($party)
                   QApplication::Redirect("voucher_rpt.php?party=".$party.
                           "&fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)).'&verify='.$this->lstveri->SelectedValue);
                   else
                   QApplication::Redirect("voucher_rpt.php?fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)).'&verify='.$this->lstveri->SelectedValue); 
                }
            }
        }

        protected function chkApprove_click($strFormId, $strControlId, $strParameter){
            $vovs = Voucher::QueryArray(
                                QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, $strParameter),
                                QQ::Equal(QQN::Voucher()->Idvoucher,$strParameter)        
                            ));
            if($vovs){
                foreach($vovs as $vov){
                    if($this->chkApprove[$strParameter]->Checked == TRUE){
                        $vov->ApprovedBy = $_SESSION['login'];
                        $vov->ApprovedDate = QDateTime::Now();
                        $this->lbldate[$strParameter]->Text = date('d/m/Y',  strtotime($vov->ApprovedDate));
                    }
                    if($this->chkApprove[$strParameter]->Checked == FALSE){
                        $vov->ApprovedBy = NULL;
                        $vov->ApprovedDate = NULL;
                        $this->lbldate[$strParameter]->Text = '';
                    }
                    $vov->Save();
                }
            }    
            if(isset($_GET['verify'])){
            //    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/voucher_rpt.php?cat='.$_GET['cat'].'&fdate='.$_GET['fdate'].'&tdate='.$_GET['tdate'].'&verify='.$this->lstveri->SelectedValue);
            }
            //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/voucher_rpt.php?cat='.$_GET['cat'].'&fdate='.$_GET['fdate'].'&tdate='.$_GET['tdate']);
        }

        protected function lbldate_click($strFormId, $strControlId, $strParameter){
            $vovs = Voucher::QueryArray(
                                QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, $strParameter),
                                QQ::Equal(QQN::Voucher()->Idvoucher,$strParameter)        
                            ));
            if($vovs){
                foreach($vovs as $vov){
                    if($this->chkApprove[$strParameter]->Checked == TRUE){
                        $vov->ApprovedBy = $_SESSION['login'];
                        $vov->ApprovedDate = QDateTime::Now();
                        $this->lbldate[$strParameter]->Text = date('d/m/Y',  strtotime($vov->ApprovedDate));
                    }
                    if($this->chkApprove[$strParameter]->Checked == FALSE){
                        $vov->ApprovedBy = NULL;
                        $vov->ApprovedDate = NULL;
                        $this->lbldate[$strParameter]->Text = '';
                    }
                    $vov->Save();
                }
            }
            if(isset($_GET['verify'])){
            //    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/voucher_rpt.php?cat='.$_GET['cat'].'&fdate='.$_GET['fdate'].'&tdate='.$_GET['tdate'].'&verify='.$this->lstveri->SelectedValue);
            }
            //QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/account/report/voucher_rpt.php?cat='.$_GET['cat'].'&fdate='.$_GET['fdate'].'&tdate='.$_GET['tdate']);
        }

        protected function txtQuick_enter(){
            $vou = Voucher::LoadByInvNo($this->txtQuick->Text);
            if($vou)
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/challan_print.php?id='.$vou->Idvoucher);
            else
                QApplication::DisplayAlert ("Invalid Voucher");
        }
        
        protected function btnReport_click(){
            if(isset($_GET['cat'])){ 
               $party = $this->txtmember->SelectedValue; 
               if($party)
               QApplication::Redirect("voucher_rpt.php?cat=".$_GET['cat']."&party=".$party.
                       "&fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)));
               else
               QApplication::Redirect("voucher_rpt.php?cat=".$_GET['cat'].
                       "&fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text))); 
            }else{
               $party = $this->txtmember->SelectedValue; 
               if($party)
               QApplication::Redirect("voucher_rpt.php?party=".$party.
                       "&fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text)));
               else
               QApplication::Redirect("voucher_rpt.php?fdate=".date('Ymd',  strtotime ($this->calFromDate->Text))."&tdate=".date('Ymd',  strtotime ($this->calToDate->Text))); 
            }
        }

        public function txtSearch_Change($strParameter){
            $objMemberArray = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::Like(QQN::Voucher()->InvNo, $strParameter . '%')
                                ));

            $result = array();
            foreach($objMemberArray as $objMember){
                    $result[] = date('Y').'-'.$objMember->InvNo;
            }
            return $result;
        }

        protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
            $text= $this->txtSearch->Text;
            $code = explode("-", $text);
            $vovs = Voucher::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Voucher()->InvNo,$code[1]),
                        QQ::Equal(QQN::Voucher()->CrObject->Grp, 5454), //fees
                        QQ::Equal(QQN::Voucher()->DrObject->Grp, 244), //Student
                        QQ::Equal(QQN::Voucher()->Parrent, NULL)
                        ));
            if($vovs){
                foreach($vovs as $vov){}
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/fees_structure/challan_print.php?id='.$vov->Idvoucher.'&view=1'); 
            }else{
                QApplication::DisplayAlert ("Please Enter Valid No...");
            }
        }
    }

    ReportForm::Run('ReportForm');
?>