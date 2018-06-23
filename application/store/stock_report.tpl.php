<?php
    $strPageTitle = QApplication::Translate('Stock');
    require(__CONFIGURATION__ . '/header.inc.php');
?>

    <?php $this->RenderBegin() ?>

    <div id="titleBar">
        <?php _t('Stock Report'); ?>  
    </div>
<br>
    <div id="formControls" style="width: 900px;">
        <table width="100%">
            <tr>
                <td width="60%"><?php  $this->calDate->RenderWithName(); ?></td>
                <td><?php  $this->btnsearch->Render(); ?></td>
            </tr>
        </table> 
    </div>
<?php if(isset($_GET['date'])){ ?>
<div id="formControls" style="width: 900px;">
    <table class="datagrid">
        <tr>
            <th>Sr.</th>
            <th>Date</th>
            <th>Product</th>
            <th>Opening</th>
            <th>Inward</th>
            <th>Outward</th>
            <th>Closing</th>
        </tr>
        <?php 
        $stocks = ProductPrice::QueryArray(
                 QQ::AndCondition(
                 QQ::Equal(QQN::ProductPrice()->Date, $_GET['date'])         
                         ), QQ::OrderBy(QQN::ProductPrice()->Product));
        if($stocks){
            $sr =1;
            foreach ($stocks as $stock){
           
        ?>
        <tr>
            <td><div align="center">
              <?php _p($sr++); ?>
            </div></td>
            <td><div align="center">
              <?php _p(date("d/m/Y", strtotime($stock->Date))); ?>
            </div></td>
            <td><div align="center">
              <?php _p($stock->ProductObject); ?>
            </div></td>
            <td><div align="center">
              <?php _p($stock->Opening); ?>
            </div></td>
            <td><div align="center">
              <?php _p($stock->Inward); ?>
            </div></td>
            <td><div align="center">
              <?php _p($stock->Outward); ?>
            </div></td>
            <td><div align="center">
              <?php _p($stock->Closinng); ?>
            </div></td>
        
        </tr>
        <?php  }
        } ?>
    </table>
</div>
<?php } ?>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>