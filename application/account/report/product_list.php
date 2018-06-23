<?php
	require('../../../qcubed.inc.php');

	class ProductListForm extends QForm {
		protected $dtgProducts;
                
                // Download buttons
        protected $btnCSV;
        protected $btnXLS;
        protected $lstgroup;
        protected $btnCurPage;
        protected $lstFR;
        protected $lstProducts;
        protected $calDate;
        protected $btnGen;
        protected $btnClear;
        protected $btnClearAll;
        
// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgProducts = new ProductDataGrid($this);

			// Style the DataGrid (if desired)
		        $this->dtgProducts->Width = 900;
                        $this->dtgProducts->ShowFilter = FALSE;

			// Add Pagination (if desired)
			$this->dtgProducts->Paginator = new QPaginator($this->dtgProducts);
			$this->dtgProducts->ItemsPerPage = 40;
                        $this->dtgProducts->ShowFilter = TRUE;
                        $this->dtgProducts->ShowFilterButton = FALSE;
                        $this->dtgProducts->ShowFilterResetButton = FALSE;

                        $this->calDate = new QCalendar($this);
                        $this->calDate->Width = 100;
                        if(isset($_GET['date'])) $this->calDate->Text = date('M d Y', strtotime($_GET['date']));
                        else $this->calDate->Text = date('M d Y');
                        $this->btnGen = new QButton($this);
                        $this->btnGen->Text = "Generate";
                        $this->btnGen->AddAction(new QClickEvent(), new QServerAction('btnGen_change'));
         
                        $Name = new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=20',
				array(
					  'OrderByClause' => QQ::OrderBy(QQN::Product()->Code),
					  'ReverseOrderByClause' => QQ::OrderBy(QQN::Product()->Code, false)));
			$Name->Filter = QQ::Like(QQN::Product()->Code, null);
                        $Name->FilterType = QFilterType::TextFilter;
                        $Name->FilterPostfix = $Name->FilterPrefix = '%';
                        $Name->FilterBoxSize = 10;
                        $this->dtgProducts->AddColumn($Name);
                        
                        
                        $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=400',
				array(
					  'OrderByClause' => QQ::OrderBy(QQN::Product()->Name),
					  'ReverseOrderByClause' => QQ::OrderBy(QQN::Product()->Name, false)));
			$Name->Filter = QQ::Like(QQN::Product()->Name, null);
                        $Name->FilterType = QFilterType::TextFilter;
                        $Name->FilterPostfix = $Name->FilterPrefix = '%';
                        $Name->FilterBoxSize = 25;
                        $this->dtgProducts->AddColumn($Name);
                        
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Opening', '<?= $_FORM->renderOpening($_ITEM) ?>', 'Width=50', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Inword', '<?= $_FORM->renderIw($_ITEM) ?>', 'Width=50', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Kichen O/W', '<?= $_FORM->renderKow($_ITEM) ?>', 'Width=50', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Sales O/W', '<?= $_FORM->renderSow($_ITEM) ?>', 'Width=50', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Total O/W', '<?= $_FORM->renderOw($_ITEM) ?>', 'Width=50', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Closing', '<?= $_FORM->renderCl($_ITEM) ?>', 'Width=50', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('@', '<div style="Text-Align:right"><?= $_ITEM->SalePrice ?></div>', 'Width=60', 'HtmlEntities=false'));
                        $this->dtgProducts->AddColumn(new QDataGridColumn('Valuation', '<div style="Text-Align:right"><?= $_FORM->renderCost($_ITEM) ?></div>', 'Width=60', 'HtmlEntities=false'));
                        
                        $this->dtgProducts->SetDataBinder('dtgProducts_Bind');
                        $this->dtgProducts->AddRowAction(new QMouseOverEvent(), new QCssClassAction('selectedStyle'));
                        $this->dtgProducts->AddRowAction(new QMouseOutEvent(), new QCssClassAction());
                    
                        $this->dtgProducts->RowActionParameterHtml = '<?= $_ITEM->Idproduct ?>';
                        $this->dtgProducts->AddRowAction(new QClickEvent(), new QAjaxAction('dtgProductsRow_Click'));
                        
                        // Button 1: download entire datagrid as a comma-separated values file
            $this->btnCSV = new QDataGridExporterButton($this, $this->dtgProducts);
            $this->btnCSV->DownloadFormat = QDataGridExporterButton::EXPORT_AS_CSV;
            $this->btnCSV->Text = "Download all pages as CSV";
            
            // Button 2: download entire datagrid as Microsoft Excel .xls file
            $this->btnXLS = new QDataGridExporterButton($this, $this->dtgProducts);
            $this->btnXLS->DownloadFormat = QDataGridExporterButton::EXPORT_AS_XLS;
            $this->btnXLS->Text = "Download all pages as XLS";
            
            // Button 3: download only the current page of the datagrid as CSV file
            $this->btnCurPage = new QDataGridExporterButton($this, $this->dtgProducts);
            $this->btnCurPage->Text = "Download this page only as CSV";
            $this->btnCurPage->DownloadFormat = QDataGridExporterButton::EXPORT_AS_CSV;
            $this->btnCurPage->DownloadMode = QDataGridExporterButton::DOWNLOAD_CURRENT_PAGE;
            $this->btnCurPage->Width = $this->btnXLS->Width = $this->btnCSV->Width = 300;
            
            $this->btnClear = new QButton($this);
            $this->btnClear->Text = "Clear";
            $this->btnClear->AddAction(new QClickEvent(), new QServerAction('btnClear_Click'));
            
            $this->btnClearAll = new QButton($this);
            $this->btnClearAll->Text = "Clear All";
            $this->btnClearAll->AddAction(new QClickEvent(), new QServerAction('btnClearAll_Click'));
            
            $this->lstgroup = new QListBox($this);
            $this->lstgroup->AddItem('All Products', NULL);
            
                  
        //group list
          
            $pgroups = ProductGroup::LoadAll();
            foreach ($pgroups as $pgroup){
                $this->lstgroup->AddItem($pgroup->Name, $pgroup->IdproductGroup);
            }
            $this->lstgroup->AddAction(new QChangeEvent(), new QAjaxAction('lstgroup_change'));
          
            if (isset($_GET['product'])){
                $this->lstgroup->SelectedValue = $_GET['product'];
            }

                    //productList
                    $this->lstProducts = new QListBox($this);
                    $this->lstProducts->AddItem('-All Products-', NULL);
                     if(isset($_GET['product'])){
                  
                   $products = Product::LoadArrayByGroup($_GET['product']);
                   foreach ($products as $product){
                        $this->lstProducts->AddItem($product->Name, $product->Idproduct);
                    }
                    $this->lstProducts->FontSize = 12;
                    $this->lstProducts->Width = 80;
                 }
                  $this->lstProducts->AddAction(new QChangeEvent(), new QAjaxAction('lstProducts_change'));
		   
                }
                
                protected function btnClearAll_Click(){
                    if($this->calDate->Text != ""){
                        $prods = ProductPrice::LoadAll();
                        foreach ($prods as $prod) {
                            $prod->Delete();
                        }
                    }
                }
                
                 protected function btnClear_Click(){
                    if($this->calDate->Text != ""){
                        $prods = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime)
                                        )
                                );
                        foreach ($prods as $prod) {
                            $prod->Delete();
                        }
                    }
                }
                
                public function dtgProductsRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/stock_report/product_edit.php/'.$strParameter);
                }
                
                public function renderOpening(Product $objPp) {
                    	$objControlId = "op" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = $pp->Opening;
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                public function renderIw(Product $objPp) {
                    	$objControlId = "iw" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = $pp->Inward;
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                public function renderSow(Product $objPp) {
                    	$objControlId = "sow" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = $pp->SaleOutward;
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                public function renderKow(Product $objPp) {
                    	$objControlId = "kow" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = $pp->KitchenOutward;
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                public function renderOw(Product $objPp) {
                    	$objControlId = "ow" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = $pp->Outward;
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                public function renderCl(Product $objPp) {
                    	$objControlId = "clo" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = $pp->Closinng;
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                public function renderCost(Product $objPp) {
                    	$objControlId = "cost" . $objPp->Idproduct;
			
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::ProductPrice()->Product, $objPp->Idproduct)
                                        )
                                );
                                
			if (!$objControl = $this->GetControl($objControlId)) {
				$objControl = new QLabel($this, $objControlId);
				if($pps){
                                    foreach ($pps as $pp){}
                                    $objControl->Text = number_format($pp->Closinng * $objPp->PurchasePrice, 2, '.', '');
                                }else{
                                    $objControl->Text = 0;
                                }
			}

			return $objControl->Render(false);					
	        }
                
                protected function dtgProducts_Bind(){
                    if(isset($_GET['product']) && $_GET['product'] != NULL){
                    $this->dtgProducts->TotalItemCount = Product::QueryCount(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Product()->Group, $_GET['product']),
                                            $this->dtgProducts->Conditions
                                    ));

                    $data = Product::QueryArray(
                                QQ::AndCondition(
                                         QQ::Equal(QQN::Product()->Group, $_GET['product']),
                                            $this->dtgProducts->Conditions
                                            ),
                    QQ::Clause(
                            $this->dtgProducts->OrderByClause,
                            $this->dtgProducts->LimitClause
                    ));
                    }else{
                    $this->dtgProducts->TotalItemCount = Product::QueryCount(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Product()->GroupObject->SubGroup, $_GET['grpfr']),
                                    $this->dtgProducts->Conditions
                                    ));

                    $data = Product::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Product()->GroupObject->SubGroup, $_GET['grpfr']),
                                    $this->dtgProducts->Conditions
                                    ),
                    QQ::Clause(
                            $this->dtgProducts->OrderByClause,
                            $this->dtgProducts->LimitClause
                    ));
                    }
                    $this->dtgProducts->DataSource = $data;
                    
                }
                
                protected function btnGen_change(){
                    if(isset($_GET['product'])){
                        $prods = Product::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Product()->Group, $_GET['product'])
                                    )
                                );
                    }else{
                        $prods = Product::LoadAll ();
                    }
                    foreach ($prods as $prod){
                        $vhps = VoucherHasProduct::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::VoucherHasProduct()->VoucherIdvoucherObject->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::VoucherHasProduct()->ProductIdproduct, $prod->Idproduct)
                                    )
                                );
                        $iw = $ow = 0;
                        foreach ($vhps as $vhp){
                            if($vhp->VoucherIdvoucherObject->Cat == 1) $iw = $iw + $vhp->Qty;
                            //if($vhp->VoucherIdvoucherObject->Cat == 6) $kit = $kit + $vhp->Qty;
                            if($vhp->VoucherIdvoucherObject->Cat == 2) $ow = $ow + $vhp->Qty;
                        }
                        
                        $pps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Product, $prod->Idproduct),
                                        QQ::Equal(QQN::ProductPrice()->Date, $this->calDate->DateTime)
                                        )
                                );
                        if($pps){
                            foreach ($pps as $pp){}
                        }else{
                        $oldpps = ProductPrice::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::ProductPrice()->Product, $prod->Idproduct),
                                        QQ::LessOrEqual(QQN::ProductPrice()->Date, $this->calDate->DateTime)
                                        )
                                );
                        if($oldpps){ 
                            foreach($oldpps as $oldpp){} $op = $oldpp->Closinng; 
                        }else{
                            $op = 0;
                            $vhps = VoucherHasProduct::QueryArray(
                                QQ::AndCondition(
                                        QQ::LessThan(QQN::VoucherHasProduct()->VoucherIdvoucherObject->Date, $this->calDate->DateTime),
                                        QQ::Equal(QQN::VoucherHasProduct()->ProductIdproduct, $prod->Idproduct)
                                    )
                                );
                            foreach ($vhps as $vhp){
                                if($vhp->VoucherIdvoucherObject->Cat == 1) $op = $op + $vhp->Qty;
                                //if($vhp->VoucherIdvoucherObject->Cat == 6) $kit = $kit + $vhp->Qty;
                                if($vhp->VoucherIdvoucherObject->Cat == 2) $op = $op - $vhp->Qty;
                            }
                        }
                      
                        $pp = new ProductPrice();
                        $pp->Date = $this->calDate->DateTime;
                        $pp->Company = 6;
                        $pp->Product = $prod->Idproduct;
                        $pp->Opening = $op;
                        }
                 
                        $pp->Inward = $iw;
                        $pp->SaleOutward = $ow;
                        $pp->KitchenOutward = 0;
                        $pp->Consump = 0;
                        $pp->Outward = $ow;
                        $pp->Closinng = $pp->Opening + $pp->Inward - $pp->Outward;
                        $pp->Save();
                        
//                        QApplication::DisplayAlert($ow);
                    }
                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/stock_report/product_list.php?product='.$this->lstgroup->SelectedValue.'&date='.$this->calDate->DateTime);
                }
                
                protected function lstgroup_change(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/stock_report/product_list.php?product='.$this->lstgroup->SelectedValue.'&date='.$this->calDate->DateTime);
                }
                
                protected function lstFR_change(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/report/stock_report/product_list.php?grpfr='.$this->lstFR->SelectedValue.'&date='.$this->calDate->DateTime);
                }
                
                protected function lstProducts_change(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/product/product_list.php?pr='.$this->lstProducts->SelectedValue.'&date='.$this->calDate->DateTime);
                }
	}
	ProductListForm::Run('ProductListForm');
?>