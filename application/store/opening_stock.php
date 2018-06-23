<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	class OpeningStockForm extends QForm {
            protected $calDate;
            protected $txtOpening;
            protected $lstDepartment;
            protected$lstItem;
            protected $btnReport;
            protected $btnAdd;
            protected $btnDelete;
            protected $btnCancel;
            protected $dtgopeningstock;

            // Override Form Event Handlers as Needed
            protected function Form_Run() {
                    parent::Form_Run();
                  QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                $this->calDate =new QCalendar($this);
                $this->calDate->Width =150;
                $this->calDate->Name = "Date";
           
                if(isset($_GET['fdate'])){
                    $this->calDate->Text = Date('Y/m/d', strtotime($_GET['fdate']));
                }
                
                $this->lstDepartment = new QSelect2ListBox($this);
                $this->lstDepartment->Name = "Department";
                $this->lstDepartment->AddItem("-All Departments-", 0);
                $depts = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::OrCondition( 
                            QQ::Equal(QQN::Role()->Parrent, 134),
                            QQ::Equal(QQN::Role()->ParrentObject->Parrent, 134),        
                            QQ::Equal(QQN::Role()->Grp, 5) ,  
                            QQ::Equal(QQN::Role()->Grp, 2))),   
                            QQ::OrderBy(QQN::Role()->Parrent));
                    foreach ($depts as $dept){
                        $this->lstDepartment->AddItem($dept->Name, $dept->Idrole); 
                    }
                $this->lstItem = new QSelect2ListBox($this);
                $this->lstItem->AddItem("-Select Item-",NULL);
                $ledgers = LedgerDetails::LoadAll();
                    foreach ($ledgers as  $ledger){
                        $this->lstItem->AddItem( $ledger->DisplayName, $ledger->IdledgerDetails);
                    }
             //   $this->lstItem->AddAction(new QClickEvent(),new QServerAction('lstItem_click'));
            
                $this->txtOpening = new QTextBox($this);
                $this->txtOpening->Placeholder = 'Opening';
                  //  $this->txtOpening->Required = TRUE;
                    
                $this->btnAdd = new QButton($this);
                $this->btnAdd->ButtonMode = QButtonMode::Add;
                $this->btnAdd->AddAction(new QClickEvent(),new QServerAction('Add_click'));
                
                $this->btnDelete = new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->Visible = FALSE;
                $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are You sure you want to delete')));
                $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('delete_click'));

                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('Cancel_Click'));
               
                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = "Search";
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));

                $this->dtgopeningstock = new QDataGrid($this);
                $this->dtgopeningstock->CssClass = "datagrid";
                $this->dtgopeningstock->ShowFilter = TRUE;
                $this->dtgopeningstock->Paginator = new QPaginator($this->dtgopeningstock);
                $this->dtgopeningstock->ItemsPerPage = 15;
                $this->dtgopeningstock->Width = '100%';
                $this->dtgopeningstock->SetDataBinder('dtgopeningstock_Bind');

                $this->dtgopeningstock->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>','Width=20'));

                $this->dtgopeningstock->RowActionParameterHtml = '<?= $_ITEM->IdpriceHistory ?>';
                $this->dtgopeningstock->AddColumn(new QDataGridColumn('Date', '<?= (date("Y-m-d",strtotime($_ITEM->Date))) ?>','Width=80'));
                $this->dtgopeningstock->AddRowAction(new QClickEvent(), new QServerAction('dtgopeningstock_Click'));
                $Name = new QDataGridColumn('Department', '<?= $_ITEM->GodownObject->Name ?>', 'HtmlEntities=false','Width=40',
                array(
                        'OrderByClause' => QQ::OrderBy(QQN::PriceHistory()->Godown),
                        'ReverseOrderByClause' => QQ::OrderBy(QQN::PriceHistory()->Godown, false)));

                $Name->Filter = QQ::Like(QQN::PriceHistory()->Godown, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgopeningstock->AddColumn($Name);
                $this->dtgopeningstock->AddColumn(new QDataGridColumn('Item', '<?= $_ITEM->ItemObject->DisplayName ?>','Width=120'));
                $this->dtgopeningstock->AddColumn(new QDataGridColumn('Opening', '<?= $_ITEM->Opening ?>','Width=250'));

                if(isset($_GET['id'])){
                    $pricehistorys = PriceHistory::LoadByIdpriceHistory($_GET['id']);
                    if($pricehistorys){
                       $this->txtOpening->Text = $pricehistorys->Opening;
                       $this->lstDepartment->SelectedValue = $pricehistorys->Godown;
                       $this->lstItem->SelectedValue = $pricehistorys->Item;
                       $this->btnDelete->Visible = TRUE;
                    }
                }
            }
            protected function dtgopeningstock_Click($strFormId, $strControlId, $strParameter){
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/opening_stock.php?id='.$strParameter.'&fdate='.date('Ymd',  strtotime($this->calDate->Text)));
            }

            protected function Add_click($strFormId, $strControlId, $strParameter){
                $flg = 0;
                if($this->lstDepartment->SelectedValue !== NULL && $this->lstItem->SelectedValue !== NULL){
                   $price = PriceHistory::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::PriceHistory()->Godown, $this->lstDepartment->SelectedValue),
                                    QQ::Equal(QQN::PriceHistory()->Item, $this->lstItem->SelectedValue),
                                    QQ::Equal(QQN::PriceHistory()->Date, $this->calDate->DateTime)
                                ));
                        if(!$price){
                            if(isset($_GET['id'])){
                                $pricehistory = PriceHistory::LoadByIdpriceHistory($_GET['id']);
                                if ($pricehistory){
                                    $pricehistory->Godown = $this->lstDepartment->SelectedValue;
                                    $pricehistory->Item = $this->lstItem->SelectedValue;
                                    $pricehistory->Opening = $this->txtOpening->Text;
                                    $pricehistory->Date = $this->calDate->DateTime;
                                    $pricehistory->Save();
                                       QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/opening_stock.php?fdate='.date('Ymd',  strtotime($this->calDate->Text)));
                            
                                }
                            }else {
                                $pricehistory = new PriceHistory();
                                $pricehistory->Godown = $this->lstDepartment->SelectedValue;
                                $pricehistory->Item = $this->lstItem->SelectedValue;
                                $pricehistory->Opening = $this->txtOpening->Text;
                                $pricehistory->Date = $this->calDate->DateTime;
                                $pricehistory->Save();
                                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/opening_stock.php?fdate='.date('Ymd',  strtotime($this->calDate->Text)));
                                $flg++;
                            }   
                        }else{
                          //  if($flg == 0){
                               QApplication::DisplayAlert('Duplicate value');
                         //   } 
                        }
                }else{
                       // if($flg == 1){
                          QApplication::DisplayAlert('Please Select Value');
                       // }
                }
            }
            
            protected function delete_click($strFormId, $strControlId, $strParameter){
                try{
                    $pricehistorys = PriceHistory::LoadByIdpriceHistory($_GET['id']);
                    $pricehistorys->Delete();
                }  catch (Exception $ex){
                    QApplication::DisplayAlert(' This Item cannot be deleted '); 
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/opening_stock.php?fdate='.date('Ymd',  strtotime($this->calDate->Text)));
            }

            protected function dtgopeningstock_Bind(){
                $data = PriceHistory::QueryArray(
                        QQ::AndCondition(
                            $this->dtgopeningstock->Conditions,
                                QQ::Equal(QQN::PriceHistory()->Date, $_GET['fdate'])    
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::PriceHistory()->IdpriceHistory, TRUE),
                            $this->dtgopeningstock->LimitClause
                ));
                 $this->dtgopeningstock->DataSource = $data;
            }

            protected function Cancel_Click(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/opening_stock.php');
            }

            protected function btnReport_Click(){
                if($this->calDate->Text != NULL){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/opening_stock.php?fdate='.date('Ymd',  strtotime($this->calDate->Text)));
                } 
            }
	}
            OpeningStockForm::Run('OpeningStockForm');
?>