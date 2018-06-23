<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/LedgerDetailsListFormBase.class.php');
	class LedgerDetailsListForm extends LedgerDetailsListFormBase {
		
                protected $btnadd;
                protected $pnlPanel;
                protected $lblDel;
                protected $lblEdit;
                protected $txtStock;
                protected $calDate;
                protected $lstGroup;

                protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->lstGroup = new QListBox($this);
                    $this->lstGroup->Name = "Asset Type";
                    $this->lstGroup->AddItem("-Select One-", NULL);
                    $groups = Ledger::LoadAll();
                    foreach ($groups as $group){
                       $this->lstGroup->AddItem($group->Name, $group->Idledger);  
                    }
                    
                    $this->lstGroup->AddAction(new QChangeEvent(), new QServerAction('lstGroup_change'));
                    if(isset($_GET['group']))$this->lstGroup->SelectedValue = $_GET['group'];
                    if($this->lstGroup->SelectedValue == NULL)
                    $prods = LedgerDetails::QueryArray(
                                    QQ::AndCondition (
                                                QQ::Equal (QQN::LedgerDetails ()->IdledgerDetailsObject->Grp, getsettingvalue('store_asset'))
                                            )); 
                    else
                    $prods = LedgerDetails::QueryArray(
                                    QQ::AndCondition (
                                                QQ::Equal (QQN::LedgerDetails ()->IdledgerDetailsObject->Grp, $this->lstGroup->SelectedValue)
                                            ));
                    foreach ($prods as $prod) {
                        
                        $this->lblDel[$prod->IdledgerDetails] =new QLabel($this);
                        $this->lblDel[$prod->IdledgerDetails]->HtmlEntities = FALSE;
                        $this->lblDel[$prod->IdledgerDetails]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                        
                        $this->lblDel[$prod->IdledgerDetails]->AddAction(new QClickEvent(), new QServerAction("lblDel_Click"));
                        $this->lblDel[$prod->IdledgerDetails]->ActionParameter = $prod->IdledgerDetails ;
                      
                        $this->lblEdit[$prod->IdledgerDetails] =new QLabel($this);
                        $this->lblEdit[$prod->IdledgerDetails]->HtmlEntities = FALSE;
                        $this->lblEdit[$prod->IdledgerDetails]->Text = "<img width='15' height='15' src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png />";
                        
                        $this->lblEdit[$prod->IdledgerDetails]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                        $this->lblEdit[$prod->IdledgerDetails]->ActionParameter = $prod->IdledgerDetails;
                        
                        
                        $this->calDate[$prod->IdledgerDetails] = new QCalendar($this);
                        $this->calDate[$prod->IdledgerDetails]->DateTimeFormat = "dd/mm/yy";
                        $this->calDate[$prod->IdledgerDetails]->Width = 100;
                        
                        $this->txtStock[$prod->IdledgerDetails] = new QTextBox($this);
                        $this->txtStock[$prod->IdledgerDetails]->Width = 100;
                        $this->txtStock[$prod->IdledgerDetails]->AddAction(new QEnterKeyEvent(), new QAjaxAction('Add_Stock'));
                        $this->txtStock[$prod->IdledgerDetails]->ActionParameter = $prod->IdledgerDetails;
                                
                                
                                             
                       }
                    
                    $this->btnadd = new QButton($this);
                    $this->btnadd->Text = "Add";
                    $this->btnadd->AddAction(new QClickEvent(), new QServerAction("btnadd_Click"));
                                        
                    $this->pnlPanel =  new QPanel($this);
                    $this->pnlPanel->AddControlToMove($this->pnlPanel);
                    $this->pnlPanel->Position = QPosition::Absolute;
                    $this->pnlPanel->Top = 50;
                    $this->pnlPanel->Left = 200;
                    $this->pnlPanel->CssClass= 'openpanel';
                    $this->pnlPanel->Visible = FALSE;
                }
                protected function lstGroup_change(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/product_list.php?group='.$this->lstGroup->SelectedValue);
		 
                }

                protected function save_cat($strFormId, $strControlId, $strParameter){
                    $prod = LedgerDetails::LoadByIdledgerDetails($strParameter);
                    $prod->Group = $this->lstCategory[$strParameter]->SelectedValue;
                    $prod->Save();    
                }

                protected function lblDel_Click($strFormId, $strControlId, $strParameter){
                        $prods = LedgerDetails::LoadByIdledgerDetails($strParameter);
                        $prods->Delete();
                        $this->RedirectToListPage();
                }
                
                protected function lblEdit_Click($strFormId, $strControlId, $strParameter){
                    $this->pnlPanel->Visible = true;
                    $this->pnlPanel->Text ='<div align=right><div id="openpaneltext">Edit Asset</div><a href=""><a href=""><img src="'.__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__.'/close2.png'.'"></a></div>
                      <iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/store/product_edit.php/'.$strParameter.'" height="350" width="850" ></iframe>
                           <div>'; 
                }
                //add stock
                protected function Add_Stock($strFormId, $strControlId, $strParameter){
                    if($this->calDate[$strParameter]->Text != ""){
                    $date = explode("/", $this->calDate[$strParameter]->Text);
                    
                    $stocks = LedgerDetailsPrice::QueryArray(
                              QQ::AndCondition(
                              QQ::Equal(QQN::LedgerDetailsPrice()->LedgerDetails, $strParameter),
                              QQ::Equal(QQN::LedgerDetailsPrice()->Date, $date[2].$date[1].$date[0])        
                                      ));
                    if($stocks){
                        foreach ($stocks as $stock){}
                    }else{
                        $stock = new LedgerDetailsPrice();
                    }
                        $stock->Date = QDateTime::FromTimestamp(strtotime( $date[2].$date[1].$date[0]));
                        $stock->LedgerDetails = $strParameter;
                        $stock->Company = 1;
                        $stock->Opening = $stock->Closinng = $this->txtStock[$strParameter]->Text;
                        $stock->Inward = $stock->Outward = 0;
                        $stock->Save();
                         QApplication::DisplayAlert(" Data Saved Succesfully");
                    }else{
                        QApplication::DisplayAlert(" Please Select Date");
                    }
                }
                protected function btnadd_Click(){
                    $this->pnlPanel->Visible = true;
                    $this->pnlPanel->Text ='<div align=right><div id="openpaneltext">Create Asset</div><a href=""><a href=""><img src="'.__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__.'/close2.png'.'"></a></div><iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/store/product_edit.php" height="350" width="850" ></iframe><div>';
                }
                
                protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/product_list.php/');
		}
                }

        LedgerDetailsListForm::Run('LedgerDetailsListForm');
?>