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
	class Company extends QForm {
		// Override Form Event Handlers as Needed
		protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();		    
		}
                protected $txtName;
                protected $txtAddress;
                protected $dtgComp;
                protected $btnSave;
                protected $btndelete;
                protected $btnCancel;
//		protected function Form_Load() {}
		protected function Form_Create() { 
                    $this->txtName = new QTextBox($this);
                    $this->txtName->Name = 'Name';
                    //$this->txtName->Width="120%";
                    $this->txtName->Required = True;
                    
                    $this->txtAddress = new QTextBox($this);
                    $this->txtAddress->Name = "Address";
                    $this->txtAddress->TextMode = QTextMode::MultiLine;
                   // $this->txtAddress->Width="150%";

                    $this->txtAddress->Required = True;
                                        
                    $this->dtgComp = new QDataGrid($this);
                    $this->dtgComp->CssClass = "datagrid";
                    $this->dtgComp->ShowFilter = TRUE;
                    $this->dtgComp->Paginator = new QPaginator($this->dtgComp);
                    $this->dtgComp->ItemsPerPage = 15;
                    $this->dtgComp->SetDataBinder('dtgComp_Bind');
                    
                    $this->dtgComp->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));
                 
                    $this->dtgComp->RowActionParameterHtml = '<?= $_ITEM->IdcompanyMaster ?>';
                    $this->dtgComp->AddRowAction(new QClickEvent(), new QServerAction('dtgComp_Click'));
                
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'HtmlEntities=false', 'Width=200',
                    array(
                            'OrderByClause' => QQ::OrderBy(QQN::CompanyMaster()->Name),
                            'ReverseOrderByClause' => QQ::OrderBy(QQN::CompanyMaster()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::CompanyMaster()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgComp->AddColumn($Name);

                     $this->dtgComp->AddColumn(new QDataGridColumn('Address', '<?= $_ITEM->Address ?>', 'Width=300'));

                    $this->btnSave = new QButton($this);
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnSave->AddAction(new QClickEvent(),new QServerAction('Save_click'));
                 
                    $this->btndelete = new QButton($this);
                    $this->btndelete->ButtonMode = QButtonMode::Delete;
                    $this->btndelete->AddAction(new QClickEvent(),new QServerAction('Delete_Click'));
                    $this->btndelete->Visible = FALSE;
                    
                    $this->btnCancel = new QButton($this);
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnCancel->AddAction(new QClickEvent(),new QAjaxAction('cancel_click'));
                    
                if(isset($_GET['id'])){
                   $objcomp =  CompanyMaster::LoadByIdcompanyMaster($_GET['id']);
                    if($objcomp){
                        $this->txtName->Text = $objcomp->Name;
                        $this->txtAddress->Text = $objcomp->Address;
                        $this->btndelete->Visible = TRUE;
                    }
                }
                    
                }
                protected function dtgComp_Bind(){
                     $this->dtgComp->TotalItemCount = CompanyMaster::QueryCount(
                            QQ::AndCondition(
                                            $this->dtgComp->Conditions
                                    ));
                    $data = CompanyMaster::QueryArray(
                                QQ::AndCondition(
                                        $this->dtgComp->Conditions
                                    ),
                    QQ::Clause(
                            $this->dtgComp->OrderByClause,
                            $this->dtgComp->LimitClause
                    ));
                    $this->dtgComp->DataSource = $data;
                    }
             protected function dtgComp_Click($strFormId, $strControlId, $strParameter){
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/company_master_edit.php?id='.$strParameter);
               }

           protected function Save_click(){
                 if(isset($_GET['id'])){
                      $comp = CompanyMaster::LoadByIdcompanyMaster($_GET['id']);
                      $comp->Name = $this->txtName->Text;
                      $comp->Address = $this->txtAddress->Text;
                      $comp->Save();
                   QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/company_master_edit.php');

                 }else{
                      $comp = new CompanyMaster();
                      $comp->Name = $this->txtName->Text;
                      $comp->Address = $this->txtAddress->Text;
                      $comp->Save();
                      QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/company_master_edit.php');
                 }
                }
                protected function Delete_Click($strFormId, $strControlId, $strParameter){
                    $objcompny = CompanyMaster::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::CompanyMaster()->IdcompanyMaster,$_GET['id'])
                            ));
                    if($objcompny){
                    foreach ($objcompny as $comp){}
                     $comp1 = Application::LoadArrayByCompany($comp->IdcompanyMaster);
                    if($comp1){
                         QApplication::DisplayAlert('U can not delete this company details beacuse it is used for verification application ');
                     }else{
                         $comp->Delete();
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/company_master_edit.php');
                      }
                        }
                      else{
                   }
                }
                protected function cancel_click(){
                       QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/company_master_edit.php');
                }
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// budget_cat_list.tpl.php as the included HTML template file
	Company::Run('Company');
?>