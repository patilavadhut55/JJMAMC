<?php
    require('../../qcubed.inc.php');

    class InwardOutward extends QForm{
        protected $txtCode;
        protected $txtSubject;
        protected $lstdept;
        protected $calDate;
        protected $txtFileno;
        protected $txtContent;
        protected $txtDept;
        protected $txtTableNo;
        protected $txtSrNo;
        protected $txtName;
        protected $txtAddress;
        protected $txtPlace;
        protected $txtSub;
        protected $txtCourier;
        protected $txtPostage;
        protected $lblCode;
        protected $arrMarkTo;
        protected $lstMarkto;
        protected $lstDept;
        protected $lstDesignation;
         protected $dtgforward;
        
        protected $btnSave;
        protected $btnDelete;
        protected $btnCancel;
        protected $btnBack;
        protected $btnSend;


        //document scan
        protected $btnScan;
        protected $btnAddDoc;
        protected $btnAdd;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->calDate = new QCalendar($this);
            $this->calDate->Name = "Date";
            $this->calDate->Width = 150;
            $this->calDate->Required = TRUE;
            
            $this->lblCode = new QLabel($this);
            $this->lblCode->Name = "Ref. No.";
            $set = Settings::LoadByName("outword counter");
            $sete = Settings::LoadByName("Outward Abbrivation");
            $this->lblCode->Text = $sete->Option."".$set->Option;
            
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = "Ref No.";
            $this->txtCode->Width = 150;
            
           
            
            $this->txtSubject = new QTextBox($this);
            //$this->txtSubject->AddItem("-Select One-", NULL);
            $this->txtSubject->Name = "Document";
            $this->txtSubject->Required = TRUE;
//            $subs = Ledger::LoadArrayByGrp(5297);//Document
////                $subs = DocRegisterSubject::LoadArrayByGrp(3);
//                foreach ($subs as $sub){
//                    $this->txtSubject->AddItem($sub->Name, $sub->Idledger);
//                }
                
            $this->lstdept = new QSelect2ListBox($this);
            $this->lstdept->AddItem("-Select One-", NULL);
            $this->lstdept->Name = "Department";
            $depts = Role::QueryArray(
            QQ::AndCondition(
            QQ::Equal(QQN::Role()->Grp,5)));
                foreach ($depts as $dept){
                    $this->lstdept->AddItem($dept->Name, $dept->Idrole);
                }
            
            $this->txtFileno = new QTextBox($this);
            $this->txtFileno->Name = "Register AD Rs.";
            
            $this->txtAddress = new QTextBox($this);
            $this->txtAddress->Name = "Address";
            $this->txtAddress->TextMode = QTextMode::MultiLine;
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Name";
          
            $this->txtCourier = new QTextBox($this);
            $this->txtCourier->Name = "Courier ";
            
            $this->txtContent = new QTextBox($this);
            $this->txtContent->Name = "Contents";
         
            $this->txtPlace = new QTextBox($this);
            $this->txtPlace->Name = "Place";
          
            $this->txtSub = new QTextBox($this);
            $this->txtSub->Name = "Subject";
            
            $this->txtSrNo = new QTextBox($this);
            $this->txtSrNo->Name = "Speed Post Rs.";
          
            $this->txtDept = new QTextBox($this);
            $this->txtDept->Name = "By E-mail";
          
            $this->txtTableNo = new QTextBox($this);
            $this->txtTableNo->Name = "By Hand";
          
            $this->txtPostage = new QTextBox($this);
            $this->txtPostage->Name = "Postage";
            
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
            
            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->CausesValidation = TRUE;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_click'));
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_click'));
             
            $this->btnCancel = new QButton($this);
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_click'));
          
            $this->btnBack = new QButton($this);
            $this->btnBack->ButtonMode = QButtonMode::Success;
            $this->btnBack->Text = "New";
            $this->btnBack->AddAction(new QClickEvent(), new QServerAction('btnBack_click'));
          
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are You sure you want to delete')));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_click'));
            $this->btnDelete->Visible = FALSE; 
           
            //document
            //$this->btnAdd = new QButton($this);
            //$this->btnAdd->Text = 'Add New';
           // $this->btnAdd->AddAction(new QClickEvent(), new QAjaxAction('btnPO_Click'));
            
            $this->btnAddDoc = new QButton($this);
            $this->btnAddDoc->ButtonMode = QButtonMode::Success;
            $this->btnAddDoc->Text = "Add Doc";
            $this->btnAddDoc->AddAction(new QClickEvent(), new QServerAction('btnAddDoc_Click'));
                   
            $this->btnScan = new QButton($this);
            $this->btnScan->Text = "<i class='fa fa-plus-circle'></i>";
            $this->btnScan->AddAction(new QClickEvent(), new QAjaxAction('btnScan_Click'));
            
            $this->btnSend = new QButton($this);
            $this->btnSend->ButtonMode = QButtonMode::Success;
            $this->btnSend->Text = "Send";
            $this->btnSend->AddAction(new QClickEvent(), new QServerAction('btnSend_click'));
            
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
            $this->dtgforward->SetDataBinder('dtgforward_Bind');
            $this->dtgforward->RowActionParameterHtml = '<?= $_ITEM->DocInOutObject->IddocInOut  ?>';
                   
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE; 
                $docout= DocInOut::LoadByIddocInOut($_GET['id']);
                $this->txtCode->Text = $docout->Code  ;
                $this->txtAddress->Text = $docout->Address  ;
                $this->txtContent->Text = $docout->DescIntro  ;
                $this->txtFileno->Text = $docout->FilenoName ;
                $this->calDate->DateTime = $docout->Date  ;
                $this->txtName->Text = $docout->Name;
                $this->txtPlace->Text = $docout->Place  ;
                $this->txtSub->Text = $docout->Subject;
                $this->txtPostage->Text = $docout->Postage  ;
                $this->txtTableNo->Text = $docout->TableNo ;
                $this->txtSrNo->Text = $docout->SerialNo ;
                $this->txtCourier->Text = $docout->CourierCharges ;
                $this->lstdept->SelectedValue = $docout->Dept ;
                $this->txtDept->Text = $docout->To;
                //$this->lstdept->SelectedValue = $docout->Dept;
                $this->txtSubject->Text = $docout->DocumentGrp ;
            }
        }    
        
            protected function btnScan_Click(){
                $scancode = Settings::LoadByName("Scan");
                $apps = MemberDoc::LoadArrayByInOut($_GET['id']);
                foreach ($apps as $app){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/outward_edit.php?id='.$_GET['id'].'&code='.$scancode->Option.'&doc='.$scancode->Option.'&tab=2');
            }
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
             protected function dtgforward_Bind(){
            if(isset($_GET['id'])){
            $this->dtgforward->TotalItemCount = MarkTo::QueryCount(
                QQ::AndCondition(
                    $this->dtgforward->Conditions,
                    //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297),
                    //QQ::Equal(QQN::MarkTo()->DocInOutObject->Code, $this->txtCode->Text)
                    QQ::Equal(QQN::MarkTo()->DocInOut,$_GET['id'])       

                ));

            $data = MarkTo::QueryArray(
                QQ::AndCondition(
                        $this->dtgforward->Conditions,
                        //QQ::Equal(QQN::MarkTo()->DocInOutObject->DocumentGrpObject->Grp,5297), //docregister Subject
                        //QQ::Equal(QQN::MarkTo()->DocInOutObject->Code, $this->txtCode->Text)
                        QQ::Equal(QQN::MarkTo()->DocInOutObject, $_GET['id'])
                      ),    
            QQ::Clause(
                     QQ::OrderBy(QQN::MarkTo()->IdmarkTo, TRUE),
                $this->dtgforward->LimitClause
            ));

            $this->dtgforward->DataSource = $data;
            
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
            protected function btnAddDoc_Click(){
                $apps = MemberDoc::LoadArrayByInOut($_GET['id']);
                foreach ($apps as $app){
                    if(!is_dir('../upload/documents/inoutward/A'.$app->IdmemberDoc)){
                        mkdir('../upload/documents/inoutward/A'.$app->IdmemberDoc, 0777, true);
                    }
                    $scancode = Settings::LoadByName("Scan");
                    if(isset($_GET['doc'])){
                        $scancode->Option = $scancode->Option + 1;
                        $scancode->Save();
                        if($app->Scans){
                            $app->Scans = $app->Scans.','.$_GET['doc'];
                        }else{
                            $app->Scans = $_GET['doc'];
                        }
                       // $app->InOut = $_GET['id'];
                        $app->Save();
                    }  
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php?id='.$_GET['id'].'&doc='.$scancode->Option.'&tab=2');
                }
            }
            
            public function btnSave_click($strFormId, $strControlId, $strParameter){
                if($this->txtSubject->Text != '' && $this->calDate->DateTime != Null){
                if(isset($_GET['id'])){
                    $docout= DocInOut::LoadByIddocInOut($_GET['id']);
                    $docout->Address = $this->txtAddress->Text;
                    $docout->FilenoName = $this->txtFileno->Text;
                    $docout->Date = $this->calDate->DateTime;
                    $docout->Name = $this->txtName->Text;
                    $docout->Place = $this->txtPlace->Text;
                    $docout->Subject = $this->txtSub->Text;
                    $docout->Postage = $this->txtPostage->Text;
                    $docout->TableNo = $this->txtTableNo->Text;
                    $docout->SerialNo = $this->txtSrNo->Text;
                    $docout->CourierCharges = $this->txtCourier->Text;
                    $docout->InwordBy = $_SESSION['login'];
                    $docout->DescIntro = $this->txtContent->Text;
                    $docout->To = $this->txtDept->Text;
                    $docout->Dept = $this->lstdept->SelectedValue;
                    $docout->DocumentGrp = $this->txtSubject->Text;
                    $docout->Outward = 1;
                    $docout->Save();
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php?id='.$docout->IddocInOut."&tab=2");
                  
                }else {
                  
                    $docout = new DocInOut();
                    $set = Settings::LoadByName("outword counter");
                    $sete = Settings::LoadByName("Outward Abbrivation");
                    $this->lblCode->Text = $sete->Option."".$set->Option;
                   // $docout->Code = $set->Option;
                    $set->Option= $set->Option + 1;
                    $set->Save();
                    
                    $docout->Code = $this->lblCode->Text;
                    $docout->Address = $this->txtAddress->Text;
                    $docout->FilenoName = $this->txtFileno->Text;
                    $docout->Date = $this->calDate->DateTime;
                    $docout->Name = $this->txtName->Text;
                    $docout->Place = $this->txtPlace->Text;
                    $docout->Subject = $this->txtSub->Text;
                    $docout->Postage = $this->txtPostage->Text;
                    $docout->TableNo = $this->txtTableNo->Text;
                    $docout->SerialNo = $this->txtSrNo->Text;
                    $docout->CourierCharges = $this->txtCourier->Text;
                    $docout->InwordBy = $_SESSION['login'];
                    $docout->DescIntro = $this->txtContent->Text;
                    $docout->To = $this->txtDept->Text;
                    $docout->Dept = $this->lstdept->SelectedValue;
                    $docout->DocumentGrp = $this->txtSubject->Text;
                    $docout->Outward= 1;
                    $docout->Save();
                    $memberdocs = new MemberDoc();
                    $memberdocs->InOut = $docout->IddocInOut;
                    $memberdocs->DocName = $docout->DocumentGrp;
                    $memberdocs->Member = $docout->InwordBy;
                    $memberdocs->Required = 1;
                    $memberdocs->Save();
                }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php?id='.$docout->IddocInOut."&tab=2");
                   
            }else {
                QApplication::DisplayAlert('Please Select Values');
            }
            }
            
            protected function btnSend_click(){
                if(isset($_GET['id'])){
                    $docs = DocInOut::LoadByIddocInOut($_GET['id']);
                    $docs->Send = 1;
                    $docs->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php');
                }
            }
        
            protected function btnAdd_click($strFormId, $strControlId, $strParameter){
                    if(isset($_GET['id'])){
                        $markto = new MarkTo();
                        $markto->To = $this->lstMarkto->SelectedValue;
                        $markto->From = $_SESSION['login'];
                        $markto->DocInOut = $_GET['id'];
                        $markto->Date = QDateTime::Now();
                        $markto->Role = $this->lstDesignation->SelectedValue;
                        $markto->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/outward_edit.php?id='.$markto->DocInOut.'&tab=2');
                    }
                }

            public function btnDelete_click(){
                try{
                if(isset($_GET['id'])){
                   $memberdocs= MemberDoc::LoadArrayByInOut($_GET['id']);
                   foreach ($memberdocs as $memberdoc){
                         $memberdoc->Delete();
                   }
                   $docout= DocInOut::LoadByIddocInOut($_GET['id']);
                   $docout->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php');
                }
                }  catch (Exception $ex){
                      QApplication::DisplayAlert(' This Item cannot be deleted '); 
                }
            }
            
            public function btnCancel_click(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php');
            }
            
            public function btnBack_click(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/doc_inoutward/outward_edit.php');
            }
    }
    InwardOutward::Run('InwardOutward');    
?>        