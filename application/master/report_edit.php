<?php
    require('../../qcubed.inc.php');
    require(__FORMBASE_CLASSES__ . '/ReportEditFormBase.class.php');
    class ReportEditForm extends ReportEditFormBase {
        protected $txtCode;
        protected $txtName;
        protected $txtAbbr;
        protected $txtIntro;
        protected $txtData;

        protected $btnList;
        protected $dtgReport;
        protected $btnNew;
        protected $txtPrintDesign;
        protected $txtPrintCode;
        protected $btnCode;
        protected $btnDesign;
        protected $lstParentObject;
        
        protected $btnSave;
        protected $btnDelete;
        protected $btnCancel;
        protected function Form_Run() {
            parent::Form_Run();

            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = "Code";
            $this->txtCode->Width = "15%";
            $code = Settings::LoadByName("Report");
            $this->txtCode->Text = $code->Option;
            
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Name";
            
            $this->txtAbbr = new QTextBox($this);
            $this->txtAbbr->Name = "Abbrivation";
            
            $this->txtData = new QTextBox($this);
            $this->txtIntro = new QTextBox($this);
            $this->txtIntro->Name = "Intro";
            
            $this->lstParentObject = new QSelect2ListBox($this);
            $rpt = Report::LoadAll();
                $this->lstParentObject->AddItem("-Select Parent-", NULL);    
            foreach ($rpt as $rpts) {
                $this->lstParentObject->AddItem($rpts->Name, $rpts->Idreport);    
            }
            $this->lstParentObject->Name = "Parent";
            
            $this->btnSave = new QButton($this);
            $this->btnCancel = new QButton($this);
            $this->btnDelete = new QButton($this);
            
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
         
            $this->txtPrintDesign = new QFCKeditor($this);
            $this->txtPrintDesign->Width = "100%";
            $this->txtPrintDesign->Height = 500;
            $this->txtPrintDesign->Name = "Print Design";

            $this->txtPrintCode = new QTextBox($this);
            $this->txtPrintCode->TextMode = QTextMode::MultiLine;
            $this->txtPrintCode->Width = "100%";
            $this->txtPrintCode->Height = 500;
            $this->txtPrintCode->Name = "Print Code";

            $this->txtPrintCode->Visible = FALSE;

            $this->txtData->Visible = FALSE;
          
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

            //$this->btnDesign->Visible = FALSE;
            //$this->btnCode->Visible = FALSE;
            
            $this->btnList = new QButton($this);
            $this->btnList->ButtonMode = QButtonMode::listall;
            $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));

            $this->btnNew = new QButton($this);                
            $this->btnNew->ButtonMode = QButtonMode::AddNew;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));
            
            $this->dtgReport = new QDataGrid($this);
            $this->dtgReport->CssClass = "datagrid";

            $this->dtgReport->ShowFilter = TRUE;

            $this->dtgReport->Paginator = new QPaginator($this->dtgReport);
            $this->dtgReport->ItemsPerPage = 20;

            $this->dtgReport->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  
            $this->dtgReport->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=5'));  
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Report()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Report()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Report()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgReport->AddColumn($Name);

            $this->dtgReport->AddColumn(new QDataGridColumn('Parent', '<?= $_ITEM->ParentObject ?>', 'Width=50'));

            $this->dtgReport->SetDataBinder('dtgReport_Bind');

            $this->dtgReport->RowActionParameterHtml = '<?= $_ITEM->Idreport ?>';
            $this->dtgReport->AddRowAction(new QClickEvent(), new QServerAction('dtgReportRow_Click'));
        
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;
                $rpt = Report::LoadByIdreport($_GET['id']);
                $this->txtPrintDesign->Text = base64_decode($rpt->Data);
                $this->txtPrintCode->Text = base64_decode($rpt->Data);
                $this->txtCode->Text = $rpt->Code;
                $this->txtName->Text = $rpt->Name;
                $this->txtAbbr->Text = $rpt->Abbr;
                $this->txtIntro->Text = $rpt->Intro;
                $this->lstParentObject->SelectedValue = $rpt->Parent;
            } 
        }
        
        protected function btnDesign_Click(){
            if($this->txtPrintDesign->Text != ""){
                $this->txtPrintDesign->Text = $this->txtPrintCode->Text;      
            }

            if($this->txtPrintCode->Text != ""){
                $this->txtPrintDesign->Text = $this->txtPrintCode->Text;      
            }

            $this->txtPrintDesign->Visible = TRUE;
            $this->txtPrintCode->Visible = FALSE;

        }

        protected function btnCode_Click(){
            $this->txtPrintCode->Text = $this->txtPrintDesign->Text;                    
            $this->txtPrintDesign->Visible = FALSE;
            $this->txtPrintCode->Visible = TRUE;
           
        }
        public function btnNew_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/report_edit.php?new=1');
        }

        protected function dtgReport_Bind(){
            $this->dtgReport->TotalItemCount = Report::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgReport->Conditions
                            ));

            $data = Report::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgReport->Conditions
                            ),
            QQ::Clause(
                    $this->dtgReport->OrderByClause,
                    $this->dtgReport->LimitClause
            ));

            $this->dtgReport->DataSource = $data;
        }
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
             if(isset($_GET['id'])){
                $rpt = Report::LoadByIdreport($_GET['id']);
            }else{
                $rpt = new Report();
                $code = Settings::LoadByName("Report");
                $code->Option = $code->Option + 1;
                $code->Save();
                $rpt->Code = $this->txtCode->Text;
               
            }
                $rpt->Name = $this->txtName->Text;
                $rpt->Abbr = $this->txtAbbr->Text;
               // if($this->txtPrintCode->Text != ""){
                  $rpt->Data = base64_encode($this->txtPrintCode->Text);
                //}
                $rpt->Intro = $this->txtIntro->Text;
                $rpt->Parent = $this->lstParentObject->SelectedValue;
                $rpt->Save();
            $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
	    $rpt = Report::LoadByIdreport($_GET['id']);
            $rpt->Delete();
            $this->RedirectToListPage();
          
        }
        public function dtgReportRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/report_edit.php?id='.$strParameter.'&new=1');
        }

        public function btnList_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/report_edit.php');
        }
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/report_edit.php');
        }
    }

    ReportEditForm::Run('ReportEditForm');
?>