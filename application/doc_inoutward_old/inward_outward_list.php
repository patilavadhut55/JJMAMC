<?php
    require('../../qcubed.inc.php');

        class InwardOutward extends QForm{
            protected $dtgOutword;
            protected $calDate;
            protected $txtNote;
            protected $lstMarkto;
            protected $chkClose;
            protected $arrMarkTo;
            protected $txtDesign;
            protected $txtData;
            protected $btnDesign;
            protected $btnCode;
            protected $btnSave;
            protected $btnAdd;
            protected $btnForword;
            protected $btnEdit;
            
            protected function Form_Run() {
                parent::Form_Run();
                QApplication::CheckRemoteAdmin();
            }
            protected function Form_Create() {
                parent::Form_Create();

                $this->calDate = new QDateTimePicker($this);
                $this->calDate->DateTime = QDateTime::Now();
                $this->calDate->Name = "Date";
                $this->calDate->Width = 80;

                $this->lstMarkto = new QListBox($this);
                $this->lstMarkto->Width = 240;
                $this->lstMarkto->Name = "Remark To";
                $this->lstMarkto->AddItem("-Select One-", NULL);
                    $desigs = LoginHasRole::QueryArray(
                              QQ::AndCondition(
                                      QQ::Equal(QQN::LoginHasRole()->RoleIdroleObject->Grp, 3)
                                      ),
                                    QQ::Clause(QQ::GroupBy(QQN::LoginHasRole()->RoleIdrole)));
                    foreach ($desigs as $desig){
                         $this->lstMarkto->AddItem(delete_all_between('[', ']', $desig->RoleIdroleObject->Name).' '.delete_all_between('[', ']',$desig->RoleIdroleObject->ParrentObject),$desig->LoginIdlogin);
                    }

                $this->txtNote = new QTextBox($this);
                $this->txtNote->Name = "Note";
                $this->txtNote->TextMode = QTextMode::MultiLine;
                $this->txtNote->Width = 300;

                $this->chkClose = new QCheckBox($this);
                $this->chkClose->Name = "Closed";

                $this->btnSave = new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));

                $this->btnAdd = new QButton($this);
                $this->btnAdd->ButtonMode = QButtonMode::Success;
                $this->btnAdd->Text = "Inward Register";
                $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_click'));

                $this->txtDesign = new QFCKeditor($this);
                $this->txtDesign->Width = "60%";
                $this->txtDesign->Name = 'Print Design';
                $this->txtDesign->Height = 500;
                //$this->txtDesign->Visible = False;

                $this->txtData = new QTextBox($this);
                $this->txtData->Name = 'Print Code';
                $this->txtData->Visible = FALSE;
                //$this->txtData->Required = TRUE;
                $this->txtData->TextMode = QTextMode::MultiLine;
                $this->txtData->Width = "60%";
                $this->txtData->Height = 500;
                $this->txtData->CrossScripting = QCrossScripting::Allow;

                $this->btnDesign = new QButton($this);
                $this->btnDesign->HtmlEntities = TRUE;
                $this->btnDesign->Text = "Design";
                $this->btnDesign->ButtonMode = QButtonMode::Success;
                $this->btnDesign->AddAction(new QClickEvent(), new QServerAction("btnDesign_Click"));

                $this->btnCode = new QButton($this);
                $this->btnCode->HtmlEntities = TRUE;
                $this->btnCode->Text = "Code";
                $this->btnCode->ButtonMode = QButtonMode::Success;
                $this->btnCode->AddAction(new QClickEvent(), new QServerAction("btnCode_Click"));

                $this->dtgOutword = new QDataGrid($this);
                $this->dtgOutword->CssClass = "datagrid";

                $this->dtgOutword->ShowFilter = FALSE;

                $this->dtgOutword->Paginator = new QPaginator($this->dtgOutword);
                $this->dtgOutword->ItemsPerPage = 15;

                $this->dtgOutword->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=1'));  

                $this->dtgOutword->AddColumn(new QDataGridColumn('Date', '<?= date("d/m/Y",strtotime($_ITEM->DocInOutObject->Date)) ?>', 'Width=10'));

                $this->dtgOutword->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->DocInOutObject->Code ?>','Width=20'));


                $Name = new QDataGridColumn('Subject', '<?= $_ITEM->DocInOutObject->DocumentGrp ?>', 'Width=200',
                            array(
                                    'OrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrp),
                                    'ReverseOrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrp, false)));

                $Name->Filter = QQ::Like(QQN::MarkTo()->DocInOutObject->DocumentGrp, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgOutword->AddColumn($Name);

                $this->dtgOutword->AddColumn(new QDataGridColumn('Status', '<?= $_ITEM->DocInOutObject->Closed  ?>','Width=150'));


                $this->dtgOutword->SetDataBinder('dtgOutword_Bind');

                $this->dtgOutword->RowActionParameterHtml = '<?= $_ITEM->DocInOutObject->IddocInOut  ?>';
                //$this->dtgOutword->AddRowAction(new QClickEvent(), new QAjaxAction('dtgOutwordRow_Click'));

                if(isset($_GET['id'])){
                    $doc = DocInOut::LoadByIddocInOut($_GET['id']);
                    $this->txtData->Text  = base64_encode($doc->DescData);
                    $this->txtDesign->Text  = base64_decode($doc->DescData);
                }
                
                $marktos = MarkTo::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::MarkTo()->To, $_SESSION['login'])       
                    ));
                    if($marktos){
                        foreach ($marktos as $markto){
                         $findmarkto = MarkTo::QueryCount(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::MarkTo()->DocInOut, $markto->DocInOut),
                                    QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, 1)
                                    )
                                );
                            if($findmarkto <= 0 ){
                                $this->btnEdit[$markto->IdmarkTo] = new QButton($this);
                                $this->btnEdit[$markto->IdmarkTo]->ButtonMode = QButtonMode::Success;                
                                $this->btnEdit[$markto->IdmarkTo]->Text = "View";
                                $this->btnEdit[$markto->IdmarkTo]->AddAction(new QClickEvent(), new QServerAction("btnEdit_Click"));
                                $this->btnEdit[$markto->IdmarkTo]->ActionParameter = $markto->IdmarkTo;

                                $this->btnForword[$markto->IdmarkTo] = new QButton($this);
                                $this->btnForword[$markto->IdmarkTo]->ButtonMode = QButtonMode::Success;                
                                $this->btnForword[$markto->IdmarkTo]->Text = "Add";
                                $this->btnForword[$markto->IdmarkTo]->AddAction(new QClickEvent(), new QServerAction("btnForward_Click"));
                                $this->btnForword[$markto->IdmarkTo]->ActionParameter = $markto->DocInOut;
                            }
                        }
                    }
            }
            
            protected function dtgOutword_Bind(){
                $this->dtgOutword->TotalItemCount = MarkTo::QueryCount(
                    QQ::AndCondition(
                        $this->dtgOutword->Conditions,
                        //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297),
                        QQ::Equal(QQN::MarkTo()->To, $_SESSION['role']),
                        QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, 1)       
                            
                    ));

                $data = MarkTo::QueryArray(
                    QQ::AndCondition(
                            $this->dtgOutword->Conditions,
                            //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp, 5297), //docregister Subject
                            QQ::Equal(QQN::MarkTo()->To, $_SESSION['role']),
                            QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, 1)
                          ),    
                QQ::Clause(
                         QQ::OrderBy(QQN::MarkTo()->IdmarkTo, TRUE),
                    $this->dtgOutword->LimitClause
                ));

                $this->dtgOutword->DataSource = $data;
            }

            public function dtgOutwordRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/inward_outward_list.php?id='.$strParameter);
            }
            
            public function btnForward_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/forward_list.php?id='.$strParameter);
            }
            
            public function btnSave_click(){
                if(isset($_GET['id'])){
                    if($this->chkClose->Checked == TRUE){
                        $markto = new MarkTo();
                        $markto->To = 1; //Head clerk
                        
                    }else{
                        $markto = new MarkTo();
                       
                        $markto->To = $this->lstMarkto->SelectedValue;
                    }
                    $markto->From = $_SESSION['login'];
                    $markto->DocInOut = $_GET['id'];
                    $markto->Date =  QDateTime::FromTimestamp(strtotime($this->calDate->DateTime));
                    $markto->Note = $this->txtNote->Text;
                    //$markto->DocInOutObject->Closed = $this->chkClose->Checked;
                    $markto->Save();
                    
                    
                    $docin = DocInOut::LoadByIddocInOut($_GET['id']);
                    $docin->Closed = $this->chkClose->Checked;
                    $docin->InwordBy = $_SESSION['login'];
                    $docin->From = $_SESSION['login'];
                    $docin->To = $markto->To;
                    $docin->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/inward_outward_list.php');
                }    
            }
            
            public function btnAdd_click(){
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/inward_outward.php');
            }
            
            protected function btnDesign_Click(){
                if($this->txtDesign->Text != ""){
                    $this->txtDesign->Text = $this->txtData->Text;      
                }

                if($this->txtData->Text != ""){
                    $this->txtDesign->Text = $this->txtData->Text;      
                }
                $this->txtDesign->Visible = TRUE;
                $this->txtData->Visible = FALSE;
            } 
            
            protected function btnCode_Click(){
                $this->txtData->Text = $this->txtDesign->Text;                    
                $this->txtDesign->Visible = FALSE;
                $this->txtData->Visible = TRUE;

            }
            
            protected function btnEdit_Click($strFormId, $strControlId, $strParameter){
                $markto = MarkTo::LoadByIdmarkTo($strParameter);
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__. '/doc_inoutward/inward_outward_list.php?id='.$markto->DocInOut);
            }
        
       
    }
    InwardOutward::Run('InwardOutward');    
?>        