<?php
	
	$strPageTitle = QApplication::Translate('Import Stock');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Stock Import')?>
	</div>

	<div id="formControls">
            <?php  $this->txtdepartment->RenderWithName(); ?>
                <?php
//Upload File
if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {

        echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
        echo "<h2>Displaying contents:</h2>";
        //readfile($_FILES['filename']['tmp_name']);      
    }
    ?>
     <input type="button" onclick="tableToExcel('taluka', 'talukaTable')" value="Table Export to Excel">
    
    <table width="532" border="1" id="taluka" class="datagrid">
      <tr>
        <th width="86">Date</th>
        <th width="199">Supplier</th>
        <th width="115">Asset</th>
        <th width="49">Qty</th>
        <th width="87">Amount</th>
        <th width="87">Location</th>
        </tr>
      <?php 
      
      $handle = fopen($_FILES['filename']['tmp_name'], "r");
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
     $product = Product::LoadByName($data[3]);
     $dept = array_search($this->txtdepartment->Text,  $this->arrdept);
     if(!$product){
        $product = new Product();
        $objCode = Code::LoadByName('product');
        $product->Code = $objCode->Code;
        $objCode->Code = $objCode->Code + 1;
        $objCode->Save();
        $product->Group = 1;
        $product->Catagory =1;
        $product->Name = $data[3];
        $product->Save();
     }
     $supplier = Ledger::LoadByName($data[1]);
     if(!$supplier){
         $group = Ledger::LoadByName("Supplier");
         $supplier = new Ledger();
         $supplier->SubOf = $group->Idledger;
         $supplier->Name = $data[1];
         $supplier->Save();
     }
    if($data[0] != ""){
    $date = explode("-", $data[0]);
      
    $purchases = Voucher::QueryArray(
                  QQ::AndCondition(
                  QQ::Equal(QQN::Voucher()->Date, $date[2].$date[1].$date[0]),
                  QQ::Equal(QQN::Voucher()->From, 1),
                  QQ::Equal(QQN::Voucher()->To, $supplier->Idledger)
                          ));
    if($purchases){
        foreach ($purchases as $purchase){}
    }else{
        $purchase = new Voucher();
        $code = TranCat::LoadByIdtranCat(7);
        $purchase->Code = $code->ShortCode.$code->Counter;
        $purchase->Date = QDateTime::FromTimestamp(strtotime($date[2].$date[1].$date[0]));
        $purchase->From = 1;
        $purchase->To = $supplier->Idledger;
        $purchase->Amount = is_float($data[5]);
        $purchase->Member = $_SESSION['idlogin'];
        $purchase->TotalQty = $data[4];
        $purchase->Save();
    }
    $vhps = VoucherHasProduct::QueryArray(
            QQ::AndCondition(
            QQ::Equal(QQN::VoucherHasProduct()->ProductIdproduct, $product->Idproduct),
            QQ::Equal(QQN::VoucherHasProduct()->VoucherIdvoucher, $purchase->Idvoucher)       
                    ));
    $qty = $amt = 0;
    if($vhps){
        foreach ($vhps as $vhp){
            $qty = $qty + $vhp->Qty;
            $amt = $amt + $vhp->Amount;
        }
        $vhp->Qty = $vhp->Qty + $data[4];
        $vhp->Amount = number_format($vhp->Amount,2,'.','') + number_format($data[5],2,'.','');
        $vhp->Save();
        
    }else{
        $vhp = new VoucherHasProduct();
        $vhp->VoucherIdvoucher = $purchase->Idvoucher;
        $vhp->ProductIdproduct = $product->Idproduct;
    }
    $purchase->Amount = number_format($amt,2,'.','');
    $purchase->TotalQty = $qty ;
    $purchase->Save();
    
    $stock = ProductPrice::QueryArray(
             QQ::AndCondition(
             QQ::Equal(QQN::ProductPrice()->Date, $date[2].$date[1].$date[0]),
             QQ::Equal(QQN::ProductPrice()->Product,$product->Idproduct)
                     
                     ));
     
     }
        
    //view upload form
?>
       <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($data[0]);?></div></td>
        <td><?php _p($data[1]);?></td>
        <td><?php _p($data[2]);?></td>
        <td><?php _p($data[3]);?></td>
        <td><?php _p($data[4]);?></td>
        <td><?php _p($data[5]);?></td>
        <td><?php _p($data[6]);?></td>
      </tr>
        <?php } ?>
    </table>
   <?php fclose($handle);
   print "Import done";
   }else {    
    ?>
      <table width="594" border="0">
  <tr>
      <td> 
      Upload new csv by browsing to file and clicking on Upload<br />
      <form enctype='multipart/form-data' action='import_stock.php' method='post'>
    File name to import:<br />
    <input size='50' type='file' name='filename' class="button" style="width:300px; margin:5px;"><br />
    <input type='submit' name='submit' value='Upload' class="button" style="width:333px; margin:5px;"></form>
    </td>
  </tr>
    </table>
      <?php } ?>
        </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>