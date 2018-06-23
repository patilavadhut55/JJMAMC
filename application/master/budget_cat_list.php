<?php
	
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/BudgetCatListFormBase.class.php');

	
	class BudgetCatListForm extends BudgetCatListFormBase {
		
		protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();		    
		}
                    protected $txtName,$txtId,$btnSave,$btndelete,$btnCancel;
		protected function Form_Create() { 
                    $this->txtName = new QTextBox($this);
                    $this->txtName->Name = 'Budgets Category';
                    $this->txtName->Width = 250;
                    $this->txtName->Required = True;
                    
                    $this->txtId = new QTextBox($this);
                    
                    $this->dtgBudgetCats = new QDataGrid($this);
                    $this->dtgBudgetCats->CssClass = "datagrid";
                    $this->dtgBudgetCats->ShowFilter = TRUE;
                    $this->dtgBudgetCats->Paginator = new QPaginator($this->dtgBudgetCats);
                    $this->dtgBudgetCats->ItemsPerPage = 15;
                    $this->dtgBudgetCats->SetDataBinder('dtgBudgetCats_Bind');
                    
                    $this->dtgBudgetCats->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));
            
                    $this->dtgBudgetCats->RowActionParameterHtml = '<?= $_ITEM->IdbudgetCat ?>';
                    $this->dtgBudgetCats->AddRowAction(new QClickEvent(), new QServerAction('dtgBudgetCats_Click'));
                
                    
                    $Name = new QDataGridColumn('Budget Category', '<?= $_ITEM->Name ?>', 'HtmlEntities=false', 'Width=200',
                    array(
                            'OrderByClause' => QQ::OrderBy(QQN::BudgetCat()->Name),
                            'ReverseOrderByClause' => QQ::OrderBy(QQN::BudgetCat()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::BudgetCat()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgBudgetCats->AddColumn($Name);

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
                    
                if(isset($_GET['id']))
                {
                   $objbudgets = BudgetCat::LoadByIdbudgetCat($_GET['id']);
                   if($objbudgets){
                   $this->txtName->Text = $objbudgets->Name;
                   $this->btndelete->Visible = TRUE;
                   }
                }
                    
                }
                protected function dtgBudgetCats_Bind(){
                        $data = BudgetCat::QueryArray(
                                    QQ::AndCondition(
                                        $this->dtgBudgetCats->Conditions
                                        ),
                        QQ::Clause(
                                QQ::OrderBy(QQN::BudgetCat()->IdbudgetCat, TRUE),
                                $this->dtgBudgetCats->LimitClause
                        ));
                         $this->dtgBudgetCats->DataSource = $data;
             }
             protected function dtgBudgetCats_Click($strFormId, $strControlId, $strParameter){
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget_cat_list.php?id='.$strParameter);
                }

             protected function Save_click(){
                 if($this->txtName->Text!= NULL){
                    $objbudgets = BudgetCat::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::BudgetCat()->Name, $this->txtName->Text)));
                    if(!$objbudgets){
                        if(isset($_GET['id'])){
                            $objbudgets = BudgetCat::LoadByIdbudgetCat($_GET['id']);
                        }  else {
                             $objbudgets = new BudgetCat();
                        }
                        $objbudgets->Name = $this->txtName->Text;
                        $objbudgets->Save();
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget_cat_list.php');
                    }else{
                       // QApplication::DisplayAlert('Already Exists');
                      
                         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget_cat_list.php');
                      
                  
                 }
                 }else{
                       QApplication::DisplayAlert('Please Enter Budget Category Name');
                  }
                  
                 
                }
                protected function Delete_Click($strFormId, $strControlId, $strParameter){
                    $objbudgets = BudgetCat::LoadByIdbudgetCat($_GET['id']);
                    $budget = Budget::LoadArrayByBudgetCat($objbudgets->IdbudgetCat);
                    if($budget){
                        QApplication::DisplayAlert('It connected to Budget head');
                    }  else {
                         if($objbudgets){
                             $objbudgets->Delete();
                              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget_cat_list.php');
                        }
                    }
                    
                }
                protected function cancel_click(){
                       QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/budget_cat_list.php');
                }
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// budget_cat_list.tpl.php as the included HTML template file
	BudgetCatListForm::Run('BudgetCatListForm');
?>