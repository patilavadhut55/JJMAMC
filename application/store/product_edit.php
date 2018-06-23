<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/ProductEditFormBase.class.php');

	class ProductEditForm extends ProductEditFormBase {
            
                protected $txtGroup;
                protected $ArrGroup;
                protected $txtCat;
                protected $ArrCat;
                
           	protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->txtCode->Width = 50;
                    $this->txtCode->ReadOnly = TRUE;
                    $this->txtPurchasePrice->Name = "Cost";
                    $this->lstBrandObject->Name = "Brand";
                    $this->lstUnitObject->Name = "Unit";
                    $this->lstUnitObject->Width = 120;
                    $this->txtPurchasePrice->Width = 100;
                    $this->txtSalePrice->Width = 100;
                    $this->txtMinStock->Width = 100;
                    $this->txtStockPeriod->Width = 100;
                    $this->txtMinQty->Width = 100;
                    $this->lstGroupObject->Name = "Group"; 
                   
                    //Auto Complete Group
                    $this->ArrGroup = array();
                    $objGroups = ProductGroup::LoadAll(QQ::OrderBy(QQN::ProductGroup()->Name));
                    foreach($objGroups as $objGroup){
                       $this->ArrGroup[$objGroup->IdproductGroup] = $objGroup->Name;
                    }
                    
                    $this->txtGroup = new QJavaScriptAutoCompleteTextBox($this, $this->ArrGroup);
                    $this->txtGroup->Name = 'Group';
                    
                    //Auto Complete Cat
                    $this->ArrCat = array();
                    $objCats = Catagory::LoadAll(QQ::OrderBy(QQN::Catagory()->Name));
                    foreach($objCats as $objCat){
                       $this->ArrCat[$objCat->Idcatagory] = $objCat->Name;
                    }
                    
                    $this->txtCat = new QJavaScriptAutoCompleteTextBox($this, $this->ArrCat);
                    $this->txtCat->Name = 'Category';
                    
                    if($this->mctProduct->EditMode == false){
                        $objCode = Code::LoadByName('product');
                        $this->txtCode->Text = $objCode->Code;
                        $objCode->Code = $objCode->Code + 1;
                        $objCode->Save();
                    }else{
                        $this->txtGroup->Text = $this->lstGroupObject->SelectedName;
                        $this->txtCat->Text = $this->lstCatagoryObject->SelectedName;
                    }
                    
                }
                
                 protected function other_save(){
                     
                    $Group = array_search($this->txtGroup->Text, $this->ArrGroup);
                    $this->lstGroupObject->SelectedValue = $Group;
                    
                    $Cat = array_search($this->txtCat->Text, $this->ArrCat);
                    $this->lstCatagoryObject->SelectedValue = $Cat;                
                    
                }
                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                        $this->other_save();
                        $this->mctProduct->SaveProduct();
			$this->RedirectToListPage();
		}
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__. '/store/product_edit.php');
		}
	}

	ProductEditForm::Run('ProductEditForm');
?>