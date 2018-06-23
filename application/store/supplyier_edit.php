<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/MemberEditFormBase.class.php');

	class MemberEditForm extends MemberEditFormBase {
                 protected $dtgsupply;
		protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();
		}


		protected function Form_Create() {
                    parent::Form_Create();
                    
                   $this->txtCode->Width = 70;
                    $this->txtCode->ReadOnly = TRUE;
                    $this->lstPrefixObject->Width = 70;
                    
                    $this->txtFirstName->Width =
                    $this->txtMiddleName->Width =
                    $this->txtLastName->Width = 150;    
                    if($this->mctMember->EditMode == FALSE){
                        $code = Code::LoadByName('Member');
                        $code->Code = $code->Code +1;
                        $code->Save();
                        $this->txtCode->Text = $code->Code; 
                        $this->lstMemberTypeObject->SelectedValue = 4;
                        $this->calDate->DateTime = QDateTime::Now();
                        $this->txtFirstName->Text ='First Name';
                        $this->txtMiddleName->Text = 'Middle Name';
                        $this->txtLastName->Text = 'Last Name';; 
                    }
                    
                      //datagrid
                    $this->dtgsupply = new QDataGrid($this, 'dtgsupply');
                    // filterbox declaration
                    $this->dtgsupply->Width = 800;
                    $this->dtgsupply->ShowFilter = TRUE;
                    $this->dtgsupply->ShowFilterButton = FALSE;
                    $this->dtgsupply->ShowFilterResetButton = FALSE;
    
                    $this->dtgsupply->Paginator = new QPaginator($this->dtgsupply);
                    $this->dtgsupply->ItemsPerPage = 10;
                    $this->dtgsupply->CellPadding = 10;
                    $this->dtgsupply->CellSpacing = 5;
           
                    $this->dtgsupply->SetDataBinder('dtgsupply_Bind'); 
                    
                    $this->dtgsupply->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
                    $this->dtgsupply->AddRowAction(new QMouseOutEvent(), new QCssClassAction());
                    
                    $this->dtgsupply->RowActionParameterHtml = '<?= $_ITEM->Idmember ?>';
                    $this->dtgsupply->AddRowAction(new QClickEvent(), new QAjaxAction('dtgsupplyRow_Click'));
                   
                 
                    
                    
                    $Code = new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=70',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Member()->Code),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Member()->Code, false)));

                    $Code->Filter = QQ::Like(QQN::Member()->Code, null);
                    $Code->FilterPostfix  = $Code->FilterPrefix = '%';
                    $Code->FilterType = QFilterType::TextFilter;
                    $Code->FilterBoxSize = 10;    
                    $this->dtgsupply->AddColumn($Code);
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->FirstName ?> <?= $_ITEM->MiddleName ?> <?= $_ITEM->LastName ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Member()->LastName),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Member()->LastName, false)));

                    $Name->Filter = QQ::Like(QQN::Member()->LastName, null);
                    $Name->FilterPostfix  = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $Name->FilterBoxSize = 20;    
                    $this->dtgsupply->AddColumn($Name);
                    
                    $this->dtgsupply->AddColumn(new QDataGridColumn('Contact', '<?= $_ITEM->Contact ?>', 'Width=100'));
                    $this->dtgsupply->AddColumn(new QDataGridColumn('Contact2', '<?= $_ITEM->Contact2 ?>', 'Width=100'));
                    $this->dtgsupply->AddColumn(new QDataGridColumn('Address', '<?= $_ITEM->Address ?>', 'Width=100'));

                }
                protected function dtgsupply_Bind(){
                    $this->dtgsupply->TotalItemCount = Member::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgsupply->Conditions,
                                            QQ::Equal(QQN::Member()->MemberType, 4)

                                    ));

                    $data =  Member::QueryArray(
                                QQ::AndCondition(
                                            $this->dtgsupply->Conditions,
                                            QQ::Equal(QQN::Member()->MemberType, 4)
                                    ),
                    QQ::Clause(
                            QQ::OrderBy(QQN::Member()->Code, TRUE),
                            $this->dtgsupply->LimitClause
                    ));

                    $this->dtgsupply->DataSource = $data;
            
                }
                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                       
                        $this->mctMember->SaveMember();
                        $mem = Member::LoadByCode($this->txtCode->Text);
                        $ledger = Ledger::LoadByName($this->txtFirstName->Text.' '.$this->txtMiddleName->Text.' '.$this->txtLastName->Text.' '.$this->txtCode->Text);
			if(!$ledger){
                            $ledger = new Ledger();
                        }
                        $ledger->Name = $this->txtFirstName->Text.' '.$this->txtMiddleName->Text.' '.$this->txtLastName->Text.' '.$this->txtCode->Text;
                        $ledger->SubOf = 60;
                        $ledger->Member = $mem->Idmember;
                        $ledger->Save();
			$this->RedirectToListPage();
		}
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/supplyier_edit.php');
		}
	}

	
	MemberEditForm::Run('MemberEditForm');
?>