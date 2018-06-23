<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the BudgetCat class.  It uses the code-generated
	 * BudgetCatMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a BudgetCat columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both budget_cat_edit.php AND
	 * budget_cat_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class BudgetCatEditForm extends QForm {
		// Override Form Event Handlers as Needed
		protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}
    protected $dtgBudgetCats,$txtId,$txtbudgetTitle,$lstYaer,$lstBudgetType,$txtAmount,$btnAdd,$btnDelete,$btnCancel;
		protected function Form_Create() {
                    $this->dtgBudgetCats = new QDataGrid($this);
                    $this->dtgBudgetCats->CssClass = "datagrid";
                    $this->dtgBudgetCats->ShowFilter = TRUE;
                    $this->dtgBudgetCats->Paginator = new QPaginator($this->dtgBudgetCats);
                    $this->dtgBudgetCats->ItemsPerPage = 15;
                    $this->dtgBudgetCats->Width = '100%';
                    $this->dtgBudgetCats->SetDataBinder('dtgBudgetCats_Bind');
                    
                    $this->dtgBudgetCats->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>'));
            
                    $this->dtgBudgetCats->RowActionParameterHtml = '<?= $_ITEM->Idbudget ?>';
                    $this->dtgBudgetCats->AddRowAction(new QClickEvent(), new QServerAction('dtgBudgetCats_Click'));
                
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->BudgetGrpObject->Name ?>', 'HtmlEntities=false',
                    array(
                            'OrderByClause' => QQ::OrderBy(QQN::Budget()->BudgetGrpObject->Name),
                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Budget()->BudgetGrpObject->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Budget()->BudgetGrpObject->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgBudgetCats->AddColumn($Name);
                    
                    $this->dtgBudgetCats->AddColumn(new QDataGridColumn('Year', '<?= $_ITEM->AcademicYearObject->Name ?>'));

                    $this->dtgBudgetCats->AddColumn(new QDataGridColumn('Budget Category', '<?= $_ITEM->BudgetCatObject->Name ?>'));
                   $this->dtgBudgetCats->AddColumn(new QDataGridColumn('Amount', '<?= $_ITEM->Amount ?>'));

                    
                    $this->txtId = new QTextBox($this);
                    $this->txtbudgetTitle = new QSelect2ListBox($this);
                    $this->txtbudgetTitle->Name = 'Budget Title';
                    $this->txtbudgetTitle->AddItem('--Select Budget Title---');
                    $objBudgetTitle = Ledger::LoadArrayByGrp(8447);
                    foreach ($objBudgetTitle as $budgetTitle){
                        $this->txtbudgetTitle->AddItem($budgetTitle->Name,$budgetTitle->Idledger);
                    }
                    
                    $this->lstYaer = new QSelect2ListBox($this);
                    $this->lstYaer->Name = 'Year';
                    $this->lstYaer->AddItem('---Select Year---');
                    $objYear = CalenderYear::LoadAll();
                    foreach ($objYear as $year){
                        $this->lstYaer->AddItem($year->Name,$year->IdcalenderYear);
                    }
                    
                    $this->lstBudgetType = new QSelect2ListBox($this);
                    $this->lstBudgetType->Name = 'Budget Type';
                    $this->lstBudgetType->AddItem('--Select Budget Type---');
                    $objtype = BudgetCat::LoadAll();
                    foreach ($objtype as $type){
                        $this->lstBudgetType->AddItem($type->Name,$type->IdbudgetCat);
                    }
                    $this->txtAmount = new QTextBox($this);
                    $this->txtAmount->Name = 'Amout';
                    $this->txtAmount->Required = TRUE;
                    
                    $this->btnAdd = new QButton($this);
                    $this->btnAdd->ButtonMode = QButtonMode::Add;
                    $this->btnAdd->AddAction(new QClickEvent(),new QServerAction('Add_click'));
                    
                    $this->btnDelete = new QButton($this);
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                    $this->btnDelete->AddAction(new QClickEvent(),new QServerAction('delete_click'));
                      $this->btnDelete->Visible = False;
                      
                      $this->btnCancel = new QButton($this);
                      $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                      $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('Cancel_Click'));
                     if(isset($_GET['id']))
                {
                   $objbudgets = Budget::LoadByIdbudget($_GET['id']);
                   if($objbudgets){
                   $this->txtbudgetTitle->SelectedValue = $objbudgets->BudgetGrp;
                   $this->lstYaer->SelectedValue = $objbudgets->AcademicYear;
                   $this->lstBudgetType->SelectedValue = $objbudgets->BudgetCat;
                   $this->txtAmount->Text = $objbudgets->Amount;
                   $this->btnDelete->Visible = TRUE;
                   }
                }
                    
                    
                   }
                     protected function dtgBudgetCats_Click($strFormId, $strControlId, $strParameter){
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget.php?id='.$strParameter);
                
             
                }
                protected function Add_click(){
                    if(isset($_GET['id'])){
                    $objbudget = Budget::LoadByIdbudget($_GET['id']);
                    if($objbudget){
                         $objbudget->AcademicYear = $this->lstYaer->SelectedValue;
                         $objbudget->BudgetGrp = $this->txtbudgetTitle->SelectedValue;
                         $objbudget->Amount = $this->txtAmount->Text;
                         $objbudget->BudgetCat = $this->lstBudgetType->SelectedValue;
                         $objbudget->Save();                    
                       }
                    }
                  else {
                         $objbudget = new Budget();
                         $objbudget->AcademicYear = $this->lstYaer->SelectedValue;
                         $objbudget->BudgetGrp = $this->txtbudgetTitle->SelectedValue;
                         $objbudget->Amount = $this->txtAmount->Text;
                         $objbudget->BudgetCat = $this->lstBudgetType->SelectedValue;
                         $objbudget->Save();
                     }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget.php');
                    }
                    protected function delete_click($strFormId, $strControlId, $strParameter){
                      $objbudgets = Budget::LoadByIdbudget($_GET['id']);
                      $voucher = Voucher::LoadArrayByBudget($_GET['id']);
                      foreach ($voucher as $v){}
                      if($voucher){
                          QApplication::DisplayAlert('U can not delete this budget because voucher is created for this budget');
                      }else{
                            $objbudgets->Delete();
                      }
                      //  QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget.php');

                    }

                    protected function dtgBudgetCats_Bind(){
                         $data = Budget::QueryArray(
                                    QQ::AndCondition(
                                        $this->dtgBudgetCats->Conditions
                                        ),
                        QQ::Clause(
                                QQ::OrderBy(QQN::Budget()->Idbudget, TRUE),
                                $this->dtgBudgetCats->LimitClause
                        ));
                         $this->dtgBudgetCats->DataSource = $data;
                    }
                    protected function Cancel_Click(){
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget.php');
                    }
                
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// budget_cat_edit.tpl.php as the included HTML template file
	BudgetCatEditForm::Run('BudgetCatEditForm');
?>