<?php
    require('../../qcubed.inc.php');

    class InwardOutward extends QForm {
        protected $txtCode;
        protected $calDate;
        protected $txtFrom;
        protected $txtdocument;
        protected $txtSender;
        protected $txtSubject;
        protected $arrMarkTo;
        protected $lstMarkto;
        protected $lstDept;
        protected $lstDesignation;
        protected $lstParrent;
        protected $lstCat;
        protected $txtAttachment;
        protected $txtDesign;
        protected $txtData;
        protected $btnDesign;
        protected $btnCode;
        protected $btnSave;
        protected $btnAdd;
        protected $btnNew;
        protected $btnList;
        protected $btnCancel;
        protected $dtgOutword;
        protected $dtgforward;
        protected $btnBack;
        protected $txtDescription;
        protected $btnSend;

        //document scan
        protected $btnScan;
        protected $btnAddDoc;
        protected $btnAttDoc;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
                parent::Form_Create();

            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = "Code";
            //$this->txtCode->Width = 350;

            $code = Settings::LoadByName("Inward Counter");
            $sete = Settings::LoadByName("Inward Abbrivation");

            $this->txtCode->Text = $sete->Option.$code->Option;
            $this->txtCode->ReadOnly = TRUE;

            $this->txtdocument = new QTextBox($this);
            $this->txtdocument->Name = "Document Code";
            $this->txtdocument->Width = 240;
            
            $this->calDate = new QDateTimePicker($this);
            $this->calDate->DateTime = QDateTime::Now();
            $this->calDate->Name = "Date";
            $this->calDate->Width = 80;

            $this->txtFrom = new QTextBox($this);
            $this->txtFrom->Name = "From";

            $this->txtSender = new QTextBox($this);
            $this->txtSender->Name = "Sender";
            $this->txtSender->Required = TRUE;
            $this->txtSender->TextMode = QTextMode::MultiLine;
            $this->txtSender->Width = 300;

            $this->txtAttachment = new QFCKeditor($this);
            $this->txtAttachment->Name = "Attachment";
            $this->txtAttachment->Width = 200;

            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Success;
            $this->btnSave->Text = "Next";
            $this->btnSave->CausesValidation = TRUE;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));

            $this->btnBack = new QButton($this);
            $this->btnBack->ButtonMode = QButtonMode::Success;
            $this->btnBack->Text = "Back to List";
            $this->btnBack->AddAction(new QClickEvent(), new QServerAction('btnBack_click'));

            $this->btnSend = new QButton($this);
            $this->btnSend->ButtonMode = QButtonMode::Success;
            $this->btnSend->Text = "Send";
            $this->btnSend->AddAction(new QClickEvent(), new QServerAction('btnSend_click'));

            $this->btnNew = new QButton($this);
            $this->btnNew->ButtonMode = QButtonMode::AddNew;
            $this->btnNew->CausesValidation = TRUE;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction('btnNew_click'));

            $this->btnList = new QButton($this);
            $this->btnList->ButtonMode = QButtonMode::listall;
            $this->btnList->CausesValidation = TRUE;
            $this->btnList->AddAction(new QClickEvent(), new QServerAction('btnList_click'));

            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->CausesValidation = TRUE;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_click'));

            $this->txtDescription = new QTextBox($this);
            $this->txtDescription->Name = "Description";
            $this->txtDescription->TextMode = QTextMode::MultiLine;
            $this->txtDescription->Height = 130;
            
            $this->txtSubject = new QTextBox($this);
            $this->txtSubject->Name = "Subject";
                
            $this->lstDept = new QSelect2ListBox($this);
            $this->lstDept->Width = 240;
            $this->lstDept->Name = "Department";
            $this->lstDept->AddItem("-Select One-", NULL);
            $depts = Role::LoadArrayByGrp(2);
                foreach ($depts as $dept){
                    $this->lstDept->AddItem($dept->Name,$dept->Idrole);
                }
            $this->lstDept->AddAction(new QClickEvent(), new QServerAction("lstDept_Click"));
                
            $this->lstDesignation = new QSelect2ListBox($this);
            $this->lstDesignation->Width = 240;
            $this->lstDesignation->Name = "Designation";
            $this->lstDesignation->AddItem("-Select One-", NULL);
            $this->lstDesignation->AddAction(new QClickEvent(), new QServerAction("lstDesignation_Click"));
                
            $this->lstMarkto = new QSelect2ListBox($this);
            $this->lstMarkto->Width = 240;
            $this->lstMarkto->Name = "Forward To";
            $this->lstMarkto->AddItem("-Select One-", NULL);

            $this->lstParrent = new QSelect2ListBox($this);
            $this->lstParrent->Width = 240;
            $this->lstParrent->Name = "Ref Document";
            $this->lstParrent->AddItem("-Select One-", NULL);
                $docs = DocInOut::QueryArray(
                        QQ::AndCondition(
                                 QQ::Equal(QQN::DocInOut()->RefDoc, NULL)
                                 ));
                foreach ($docs as $doc){
                     $this->lstParrent->AddItem($doc->Code,$doc->IddocInOut);
                }
            $this->lstParrent->AddAction(new QClickEvent(), new QServerAction("lstparrent_Click"));

            $this->lstCat = new QListBox($this);
            $this->lstCat->Width = 240;
            $this->lstCat->Name = "Category";
            $this->lstCat->AddItem("-Select One-",NULL);
            $docs = DocCategory::LoadAll();
            foreach($docs as $doc){
                $this->lstCat->AddItem($doc->Name,$doc->IddocCategory);
            }           
            
            $this->btnCancel = new QButton($this);
            $this->btnCancel->HtmlEntities = FALSE;
            $this->btnCancel->Text = "Cancel";
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_click'));

            $this->txtDesign = new QFCKeditor($this);
            $this->txtDesign->Width = 450;
            $this->txtDesign->Name = 'Print Design';
            $this->txtDesign->Height = 300;
            //$this->txtDesign->Visible = False;

            $this->txtData = new QTextBox($this);
            $this->txtData->Name = 'Print Code';
            $this->txtData->Visible = FALSE;
            $this->txtData->TextMode = QTextMode::MultiLine;
            $this->txtData->Width = 450;
            $this->txtData->Height = 300;
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


            $Name = new QDataGridColumn('Subject', '<?= $_ITEM->DocInOutObject->DocumentGrpObject->Name ?>', 'Width=200',
                        array(
                                'OrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrp),
                                'ReverseOrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrp, false)));

            $Name->Filter = QQ::Like(QQN::MarkTo()->DocInOutObject->DocumentGrp, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgOutword->AddColumn($Name);

            $this->dtgOutword->SetDataBinder('dtgOutword_Bind');

            $this->dtgOutword->RowActionParameterHtml = '<?= $_ITEM->DocInOutObject->IddocInOut ?>';
            $this->dtgOutword->AddRowAction(new QClickEvent(), new QAjaxAction('dtgOutwordRow_Click'));
               
            $this->dtgforward = new QDataGrid($this);
            $this->dtgforward->CssClass = "datagrid";

            $this->dtgforward->ShowFilter = FALSE;

            $this->dtgforward->Paginator = new QPaginator($this->dtgforward);
            $this->dtgforward->ItemsPerPage = 15;

            $this->dtgforward->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=1'));  

            $this->dtgforward->AddColumn(new QDataGridColumn('Date', '<?= date("d/m/Y",strtotime($_ITEM->DocInOutObject->Date)) ?>', 'Width=10'));

            $this->dtgforward->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->DocInOutObject->Code ?>','Width=20'));

            $Name = new QDataGridColumn('Subject', '<?= $_ITEM->DocInOutObject->DocumentGrp ?>', 'Width=200',
                        array(
                                'OrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrp),
                                'ReverseOrderByClause' => QQ::OrderBy(QQN::MarkTo()->DocInOutObject->DocumentGrp, false)));

            $Name->Filter = QQ::Like(QQN::MarkTo()->DocInOutObject->DocumentGrp, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgforward->AddColumn($Name);
            $this->dtgforward->AddColumn(new QDataGridColumn('Forwarded To', '<?= $_ITEM->ToObject->IdloginObject->Name  ?>','Width=150'));
            $this->dtgforward->AddColumn(new QDataGridColumn('Designation', '<?= $_FORM->designation($_ITEM) ?>', 'HtmlEntities=false','Width=150'));
            $this->dtgforward->SetDataBinder('dtgforward_Bind');
            $this->dtgforward->RowActionParameterHtml = '<?= $_ITEM->DocInOutObject->IddocInOut  ?>';
            //$this->dtgforward->AddRowAction(new QClickEvent(), new QAjaxAction('dtgforwardRow_Click'));
            
            // attach document
            $this->btnAddDoc = new QButton($this);
            $this->btnAddDoc->ButtonMode = QButtonMode::Success;
            $this->btnAddDoc->Text = "Add Doc";
            $this->btnAddDoc->AddAction(new QClickEvent(), new QServerAction('btnAddDoc_Click'));
                   
            $this->btnAttDoc = new QButton($this);
            $this->btnAttDoc->ButtonMode = QButtonMode::Success;
            $this->btnAttDoc->Text = "Attach Document";
            $this->btnAttDoc->AddAction(new QClickEvent(), new QServerAction('btnAttDoc_Click'));
           
            $this->btnScan = new QButton($this);
            $this->btnScan->Text = "<i class='fa fa-plus-circle'></i>";
            $this->btnScan->AddAction(new QClickEvent(), new QAjaxAction('btnScan_Click'));
            
            if(isset($_GET['id1'])){
                $docregister = DocInOut::LoadByIddocInOut($_GET['id1']);
                $this->lstParrent->SelectedValue = $docregister->RefDoc ;
                $marktos = MarkTo::LoadArrayByDocInOut($_GET['id1']);
                    foreach ($marktos as $markto){
                        $this->lstMarkto->SelectedValue = $markto->To ; 
                    }
                $this->calDate->DateTime = $docregister->Date ;
                $this->txtSubject->Text = $docregister->DocumentGrp;
                $this->txtFrom->Text = $docregister->From;
                $this->txtCode->Text = $docregister->Code;
                $this->txtdocument->Text = $docregister->DocumentCode;
                $this->txtDescription->Text = base64_decode($docregister->DescData);
            }
        }
        
        public function designation(MarkTo $design) {
            
            $objControlId = 'designation'.$design->IdmarkTo;
            if (!$objControl = $this->GetControl($objControlId)) {
                $objControl = new QLabel($this, $objControlId);
                if($design->Role){
                    $objControl->Text = $design->RoleObject->Name;
                }
                $objControl->HtmlEntities = FALSE;
            }
            return $objControl->Render(false);
        }
          
        protected function dtgforward_Bind(){
            if(isset($_GET['id1'])){
            $this->dtgforward->TotalItemCount = MarkTo::QueryCount(
                QQ::AndCondition(
                    $this->dtgforward->Conditions,
                    //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297),
                    //QQ::Equal(QQN::MarkTo()->DocInOutObject->Code, $this->txtCode->Text)
                    QQ::Equal(QQN::MarkTo()->DocInOut,$_GET['id1'])       

                ));

            $data = MarkTo::QueryArray(
                QQ::AndCondition(
                        $this->dtgforward->Conditions,
                        //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297), //docregister Subject
                        //QQ::Equal(QQN::MarkTo()->DocInOutObject->Code, $this->txtCode->Text)
                        QQ::Equal(QQN::MarkTo()->DocInOutObject, $_GET['id1'])
                      ),    
            QQ::Clause(
                     QQ::OrderBy(QQN::MarkTo()->IdmarkTo, TRUE),
                $this->dtgforward->LimitClause
            ));

            $this->dtgforward->DataSource = $data;
            
            }
        }
        
     /*   public function lstMarkto_Change($strParameter){
            $objMemberArray = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                              QQ::Equal(QQN::LoginHasRole()->RoleIdroleObject->Grp, 3),
                              QQ::OrCondition(
                                    QQ::Like(QQN::LoginHasRole()->LoginIdloginObject->IdloginObject->Name, '%'.$strParameter.'%'),
                                    QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, '%'.$strParameter.'%')
                                )
                            ),
                            QQ::Clause(QQ::GroupBy(QQN::LoginHasRole()->LoginIdlogin)));
                       
            $result = array();
            foreach($objMemberArray as $objMember){
                $result[] = GetFullNameNew($objMember->LoginIdloginObject->IdloginObject->Name, $objMember->LoginIdloginObject->IdloginObject->Code).' - '.delete_all_between('[', ']',$objMember->RoleIdroleObject).' - '.$objMember->LoginIdloginObject->Idlogin;
            }
            return $result;
        }  */      
        protected function dtgOutword_Bind(){
            $this->dtgOutword->TotalItemCount = MarkTo::QueryCount(
                QQ::AndCondition(
                    $this->dtgOutword->Conditions,
                    //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297), //docregister Subject
                    QQ::Equal(QQN::MarkTo()->From, $_SESSION['login']),
                    QQ::OrCondition(
                    QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, NULL),       
                    QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, FALSE)       
                    )
                ));

            $data = MarkTo::QueryArray(
                QQ::AndCondition(
                            $this->dtgOutword->Conditions,
                            //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297), //docregister Subject
                            QQ::Equal(QQN::MarkTo()->From, $_SESSION['login']),
                            QQ::OrCondition(
                            QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, NULL),       
                            QQ::Equal(QQN::MarkTo()->DocInOutObject->Closed, FALSE)       
                    )
                      ),    
            QQ::Clause(
                     QQ::OrderBy(QQN::MarkTo()->IdmarkTo, TRUE),
                $this->dtgOutword->LimitClause
            ));

            $this->dtgOutword->DataSource = $data;
        }
        
        protected function lstDept_Click(){
            if($this->lstDept->SelectedValue != NULL){
                $this->lstDesignation->RemoveAllItems();
                $this->lstDesignation->AddItem("-Select One-", NULL);
                $designs = Role::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Grp, 3),
                                QQ::Equal(QQN::Role()->Parrent, $this->lstDept->SelectedValue)
                            )
                        );
                foreach ($designs as $design){
                    $this->lstDesignation->AddItem($design->Name, $design->Idrole);
                }
            }
        }
        
        protected function btnSend_click(){
            if(isset($_GET['id1'])){
                $docs = DocInOut::LoadByIddocInOut($_GET['id1']);
                $docs->Send = 1;
                $docs->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/inward_outward_list.php');
            }
        }

        protected function lstDesignation_Click(){
            if($this->lstDesignation->SelectedValue != NULL){
                $this->lstMarkto->RemoveAllItems();
                $this->lstMarkto->AddItem("-Select One-", NULL);
                $refs = LoginHasRole::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $this->lstDesignation->SelectedValue)
                    ));
                foreach ($refs as $ref){
                    $this->lstMarkto->AddItem($ref->LoginIdloginObject->IdloginObject->Name,$ref->LoginIdlogin);
                }
            }
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

        public function dtgOutwordRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/inward_outward_list.php?id='.$strParameter);
        }
        protected function btnCancel_click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/inward_outward.php');
        }
        protected function btnList_click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/inward_outward_list.php');
        }
        protected function btnScan_Click(){
            $scancode = Settings::LoadByName("Scan");
            $apps = MemberDoc::LoadArrayByInOut($_GET['id']);
            foreach ($apps as $app){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/inward_outward.php?id='.$_GET['id'].'&code='.$scancode->Option.'&doc='.$scancode->Option.'&tab=3');
            }
        }
        protected function btnAddDoc_Click(){
            $scancode = Settings::LoadByName("Scan");
            $apps = MemberDoc::LoadArrayByInOut($_GET['id1']);
            if($apps){
                foreach ($apps as $app){
                    if(!is_dir('../upload/documents/inoutward/A'.$app->IdmemberDoc)){
                        mkdir('../upload/documents/inoutward/A'.$app->IdmemberDoc, 0777, true);
                    }
                    $scancode->Option = $scancode->Option + 1;
                    
                    if($app->Scans){
                        $app->Scans = $app->Scans.','.$scancode->Option;
                    }else{
                        $app->Scans = $scancode->Option;
                    }
                    $app->InOut = $_GET['id1'];
                    $app->Save();
                    $scancode->Save();
                }
            }  else {
                $docs = DocInOut::LoadByIddocInOut($_GET['id1']);
                $memberdocs = new MemberDoc();
                $memberdocs->InOut = $docs->IddocInOut;
                $memberdocs->Document = $docs->DocumentGrp;
                $memberdocs->Member = $docs->InwordBy;
                $memberdocs->Required = 1;
                $memberdocs->Save();
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/inward_outward.php?id1='.$_GET['id1'].'&doc='.$scancode->Option.'&tab=2');
        }
        
        protected function btnAttDoc_Click(){
            
        }
        
        protected function btnSave_click(){

            $doccheck =  DocInOut::QueryCount(
                    QQ::AndCondition(
                        QQ::Equal(QQN::DocInOut()->RefDoc, $this->lstParrent->SelectedValue)
                            ));
            if($this->txtSubject->Text != NULL){
                $docregisters = DocInOut::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::DocInOut()->Code, $this->txtCode->Text)        
                        ));
                if($docregisters){
                    foreach($docregisters as $docregister){}
                }else {
                    $code = Settings::LoadByName("Inward Counter");
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $docregister = new  DocInOut();
                    $docregister->Code = $this->txtCode->Text;
                    
                }
                $docregister->RefDoc =  $this->lstParrent->SelectedValue;
                $docregister->Date = QDateTime::FromTimestamp(strtotime($this->calDate->DateTime));
                $docregister->DocumentGrp = $this->txtSubject->Text;
                $docregister->DocumentCode = $this->txtdocument->Text;
                if($this->txtDescription->Text != ""){
                    $docregister->DescData =  $this->txtDescription->Text;
                }
                $docregister->From = $this->txtFrom->Text;
                $docregister->InwordBy = $_SESSION['login'];
                
                $docregister->DocCateogry  = $this->lstCat->SelectedValue;                                                                                                                                                                                                                                                                                                                                                    
                $docregister->Save();
             
            
//                $markto = new MarkTo();
//                $markto->DocInOut = $docregister->IddocInOut;
//                $markto->Date =  QDateTime::FromTimestamp(strtotime($this->calDate->DateTime));
//                $markto->From = $_SESSION['login'];
//                $markto->To = $this->lstMarkto->SelectedValue;
//                $markto->Save();
                    $memberdocs = new MemberDoc();
                    $memberdocs->InOut = $docregister->IddocInOut;
                    $memberdocs->DocName = $docregister->DocumentGrp;
                    $memberdocs->Member = $docregister->InwordBy;
                    $memberdocs->Required = 1;
                    $memberdocs->Save();
                
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/inward_outward.php?id1='.$docregister->IddocInOut.'&tab=2');
            
            }else{
                QApplication::DisplayAlert('Subject is Required');
            }
                QApplication::DisplayAlert('Document'.$doccheck);
        }
        
        protected function btnNew_click($strFormId, $strControlId, $strParameter){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/inward_outward.php?tab=1');
        }
        
        protected function lstparrent_Click(){
            $cnt = 0;
              if($this->lstParrent->SelectedValue != NULL){
            $doca = DocInOut::LoadByIddocInOut($this->lstParrent->SelectedValue);
         
                $docs = DocInOut::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::DocInOut()->RefDoc, $this->lstParrent->SelectedValue)
                                    ));
                if($docs){
                    foreach($docs as $doc){
                        $cnt ++;
                    }                
                }
                $code = alpha($cnt);
                $this->txtCode->Text = $doca->Code.$code;
            }
        }
        
       
   
        protected function btnAdd_click($strFormId, $strControlId, $strParameter){
            if(isset($_GET['id1'])){
                $marktos = MarkTo::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::MarkTo()->To, $this->lstMarkto->SelectedValue),
                                QQ::Equal(QQN::MarkTo()->Role, $this->lstDesignation->SelectedValue),
                                QQ::Equal(QQN::MarkTo()->From,  $_SESSION['login']), 
                                QQ::Equal(QQN::MarkTo()->DocInOut,  $_GET['id1'])      
                                ));
                if($marktos){
                    //foreach($marktos as $markto){}
                    QApplication::DisplayAlert('Already forward to this Person!!!!!');
                }else{
                    $markto = new MarkTo();
                    $markto->To = $this->lstMarkto->SelectedValue;
                    $markto->From = $_SESSION['login'];
                    $markto->DocInOut = $_GET['id1'];
                    $markto->Role = $this->lstDesignation->SelectedValue;
                    $markto->Date = QDateTime::Now();
                    $markto->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/inward_outward.php?id1='.$markto->DocInOut.'&tab=2');
                }
            }
        }
        
        public function btnBack_click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/inward_outward_list.php');
        }
    }
    
    InwardOutward::Run('InwardOutward');    
?>        