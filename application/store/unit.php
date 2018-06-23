<?php

require('../../qcubed.inc.php');

	class UnitForm extends QForm {
            protected $dtgUnit;
              protected $btnList;
              protected $txtName;
              protected $txtDecimalPlaces;
              protected $txtQtyInvolved;
              protected $txtDescription;
              protected $btnSave;
              protected $btnCancel;
              protected $btnDelete;
              protected $btnNew;
              protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->txtName = new QTextBox($this);
                    $this->txtName->Name = "Unit Name";
                    
                    $this->txtDecimalPlaces = new QTextBox($this);
                    $this->txtDecimalPlaces->Name = "Decimal Places";
                    
                    $this->txtQtyInvolved = new QTextBox($this);
                    $this->txtQtyInvolved->Name ="Quntity";
                    
                    $this->txtDescription = new QTextBox($this);
                    $this->txtDescription->Name = "Description";
                    $this->txtDescription->TextMode = QTextMode::MultiLine;
                    
                    $this->btnSave = new QButton($this);
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
                    
                    $this->btnCancel = new QButton($this);
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));

                    $this->btnDelete = new QButton($this);
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                    $this->btnDelete->Visible = FALSE;
                    $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
                    
                    $this->btnNew = new QButton($this);
                    $this->btnNew->ButtonMode = QButtonMode::AddNew;
                    $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));

                    $this->btnList = new QButton($this);
                    $this->btnList->ButtonMode = QButtonMode::listall;
                    $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));
                    
                    $this->dtgUnit = new QDataGrid($this);
                    $this->dtgUnit->CssClass = "datagrid";

                    $this->dtgUnit->ShowFilter = TRUE;

                    $this->dtgUnit->Paginator = new QPaginator($this->dtgUnit);
                    $this->dtgUnit->ItemsPerPage = 20;

                    $this->dtgUnit->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  

                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=50',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Unit()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Unit()->Name, false)));

                    $Name->Filter = QQ::Like(QQN::Unit()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgUnit->AddColumn($Name);

                   
                    $this->dtgUnit->AddColumn(new QDataGridColumn('Oty Involved', '<?= $_ITEM->QtyInvolved ?>', 'Width=100'));
                     $this->dtgUnit->AddColumn(new QDataGridColumn('Description', '<?= $_ITEM->Description ?>', 'Width=50'));

                    $this->dtgUnit->SetDataBinder('dtgUnit_Bind');

                    $this->dtgUnit->RowActionParameterHtml = '<?= $_ITEM->Idunit ?>';
                    $this->dtgUnit->AddRowAction(new QClickEvent(), new QAjaxAction('dtgUnitRow_Click'));
                    
                    if(isset($_GET['id'])){
                        $unit = Unit::LoadByIdunit($_GET['id']);
                        $this->txtName->Text = $unit->Name;
                         $this->txtQtyInvolved->Text = $unit->QtyInvolved;
                        $this->txtDescription->Text = $unit->Description;
                        $this->btnDelete->Visible = TRUE;
                        
                    }
                }
                protected function dtgUnit_Bind(){
                $this->dtgUnit->TotalItemCount = Unit::QueryCount(
                        QQ::AndCondition(
                                        $this->dtgUnit->Conditions
                                ));

                $data = Unit::QueryArray(
                            QQ::AndCondition(
                                        $this->dtgUnit->Conditions
                                ),
                QQ::Clause(
                        $this->dtgUnit->OrderByClause,
                        $this->dtgUnit->LimitClause
                ));

                $this->dtgUnit->DataSource = $data;
            }

            public function dtgUnitRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/unit.php?id='.$strParameter);
            }

            public function btnList_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/unit.php');
            }
            protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/unit.php');
            }
            protected function btnSave_Click(){
                    if($this->txtName->Text != ""){
                        if(isset($_GET['id'])){
                            $unit = Unit::LoadByIdunit($_GET['id']);
                        }else{
                            $unit = new Unit();
                        }
                        $unit->Name =  $this->txtName->Text;
                        $unit->Description = $this->txtDescription->Text;
                        $unit->QtyInvolved = $this->txtQtyInvolved->Text;
                        $unit->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/unit.php');
                    }else{
                        QApplication::DisplayAlert("Please enter at least group name");                
                    }
                }
                protected function btnNew_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/unit.php?new=1');
                }
                protected  function btnDelete_Click(){
                        $unit = Unit::LoadByIdunit($_GET['id']);
                        $led = LedgerDetails::LoadArrayByUnit($unit->Idunit);
                        if($led){
                            QApplication::DisplayAlert('You cannot delete ');
                        }else{
                            $unit->Delete();
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/unit.php');
                        }
                }

              
                 public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/unit.php');
                    
                }
           
        }
         UnitForm::Run('UnitForm');

?>
