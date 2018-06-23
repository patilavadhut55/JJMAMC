<?php
	$strPageTitle = QApplication::Translate('Products') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <?php _p('Product List'); ?>
</div>

<div id="formControls">
    <div style="float: right; background-color: #0066CC; padding: 10px; border-radius: 10px;">
    <?php if(isset($_GET['product'])){ ?>
    <a href="order_list.php?product=<?php _p($_GET['product']); ?>&date=<?php _p(date('Ymd')); ?>" target="_blank">Print Order List</a>
    <?php } ?>
    </div>
    <?php 
    $prgFrs = ProductGroup::LoadArrayBySubGroup(2);
    foreach ($prgFrs as $prgFr){
    ?>
    <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ ); ?>/report/stock_report/product_list.php?grpfr=<?php _p($prgFr->IdproductGroup); ?>">
        <div id="fromtab"  <?php if($_GET['grpfr'] == $prgFr->IdproductGroup){ ?> style="background-color: #0FF;"<?php } ?>>
            <?php _p($prgFr->Name); ?>
        </div>
    </a>
    <?php } ?>
    Date: <?php $this->calDate->Render(); ?><br/>
    <?php $this->lstgroup->Render(); ?><?php $this->btnGen->Render(); ?>
    <?php $this->btnClear->Render(); ?>
    <br/>
    
    <div style="float: right;"><?php $this->btnClearAll->Render(); ?></div>
    <?php //$this->btnCSV->Render(); ?><?php //$this->btnXLS->Render(); ?><?php //$this->btnCurPage->Render(); ?>
                        
    <?php //$this->dtgProducts->RenderWithName(); ?>
    
    <table class="datagrid">
        <tr>
            <th>Sr.</th><th>Product Name</th><th>Opening</th><th>Inward</th>
            <!--<th>sale</th>-->
            <th>Outward</th><th>Closing</th><th>Valuation</th>
        </tr>
        <?php
        if(isset($_GET['product']) && isset($_GET['date'])){
        $prods = Product::LoadArrayByGroup($_GET['product']);
        $sr = 1;
        foreach ($prods as $prod){
            $pps = ProductPrice::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::ProductPrice()->Date, Date('Ymd', strtotime($_GET['date']))),
                            QQ::Equal(QQN::ProductPrice()->Product, $prod->Idproduct)
                            )
                    );
        if($pps)foreach ($pps as $pp){}
        ?>
        <tr <?php if($pps){ ?>onclick="window.open('product_price_edit.php/<?php _p($pp->Id); ?>') <?php } ?>">
            <td align="left"><?php _p($sr); ?></td><td><?php _p($prod->Name); ?></td>
            <td align="center"><?php if($pps) _p(number_format($pp->Opening, 3, '.', '')); else _p(number_format(0, 3, '.', '')); ?></td>
            <td align="center"><?php if($pps) _p(number_format($pp->Inward, 3, '.', '')); else _p(number_format(0, 3, '.', '')); ?></td>
            <!--<td align="center"><?php //if($pps) _p(number_format($pp->SaleOutward, 3, '.', '')); else _p(number_format(0, 3, '.', '')); ?></td>-->
            <td align="center"><?php if($pps) _p(number_format($pp->Outward, 3, '.', '')); else _p(number_format(0, 3, '.', '')); ?></td>
            <td align="center" style="<?php if($pps){if($pp->Closinng <= 0) _p("background-color:  #F00"); 
            else if($pp->Closinng <= $prod->MinQty) _p("background-color: #FF0");} ?>">
                <?php if($pps) _p(number_format($pp->Closinng, 3, '.', '')); else _p(number_format(0, 3, '.', '')); ?></td>
            <td align="right"><?php if($pps) if($pp->Closinng > 0) _p("Rs.".number_format($pp->Closinng * $prod->PurchasePrice, 2, '.', '')); ?></td>
        </tr>
        <?php $sr = $sr + 1;
        }} ?>
    </table>
</div>1
	
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>