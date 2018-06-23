<?php
	require('../../qcubed.inc.php');

	class ReportForm extends QForm {
            protected $txtProduct;
            protected $arrProduct;
            protected $txtQty;
            protected $lblBarcode;
                
            protected $btnGenerate;

            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();

                    $objCompany = Company::LoadByIdcompany(1);
                                       
                    

                    $this->txtQty = new QTextBox($this);
                    $this->txtQty->Name = 'Quantity';

                    if($objCompany->Language == 2){
                       $this->txtQty->Name = 'नग';
                       $this->lstProduct->Name = 'प्रॉडक्ट';
                    }
                    $this->txtQty->AddAction(new QFocusInEvent(), new QAjaxAction('lstProduct_change'));

                    
                    $this->lblBarcode = new QLabel($this);
                    $this->lblBarcode->HtmlEntities = FALSE;

                    $this->btnGenerate = new QButton($this);
                    $this->btnGenerate->Text = 'Generate';
                    $this->btnGenerate->AddAction(new QClickEvent(), new QAjaxAction('btnGenerate_click'));
                    $this->btnGenerate->AccessKey = 'g';
                    
                    //Auto Complete Cat
                    $this->arrProduct = array();
                    $objProducts = Product::LoadAll(QQ::OrderBy(QQN::Product()->Name));
                    foreach($objProducts as $objProduct){
                       $this->arrProduct[$objProduct->Idproduct] = $objProduct->Name;
                    }
                    
                    $this->txtProduct = new QJavaScriptAutoCompleteTextBox($this, $this->arrProduct);
                    $this->txtProduct->Name = 'Product';
                    

                }
                
                protected function lstProduct_change(){
                    $Product = array_search($this->txtProduct->Text, $this->arrProduct);
                    $pro = Product::LoadByIdproduct($Product);
                    $this->lblBarcode->Text = '<IMG SRC="barcode.php?barcode='.$pro->Code.'&width=180&height=60">';
                }

                protected function btnGenerate_click(){
                    $Product = array_search($this->txtProduct->Text, $this->arrProduct);
                    $pro = Product::LoadByIdproduct($Product);
                    $print = 'window.open("'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ .'/product/generate_barcode_print.php?id='.$pro->Code.'&qty='.$this->txtQty->Text.'","print","status=yes,scrollbars=1,toolbar=no,menubar=no,location=no,scrollbar=yes");';
                    QApplication::ExecuteJavaScript($print);
                }
                
	}

	ReportForm::Run('ReportForm');
?>