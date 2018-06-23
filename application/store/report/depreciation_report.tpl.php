<?php
  require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<h1>Depreciation Report</h1>
<div class="form-controls">
    <table style="margin-bottom: 10px;">
        <tr>
            <td width="30%%"><?php $this->calFromDate->Render(); ?></td>
            <td width="20%"><?php $this->btnReport->Render(); ?></td>
        </tr>
    </table>
    <?php if(isset($_GET['date'])) { 
        
        ?>
    <table class="datagrid">
        <tr>
            <th>Sr No.</th>
            <th>Code</th>
            <th>Name</th>
            <th>Purchase Price</th>
            <th>Category</th>
            <th>Disc Rate</th>
            <th>Depreciation Cost</th>
        </tr>
        <?php 
             $sr=1;
             $to = Date('Ymd', strtotime($_GET['date']));
            
             $serials = Serials::QueryArray(
                     QQ::AndCondition(
                                QQ::GreaterOrEqual(QQN::Serials()->RefVouObject->VoucherObject->Date, $to.'000000'),
                                QQ::LessOrEqual(QQN::Serials()->RefVouObject->VoucherObject->Date, $to."235959"),
                                 QQ::Equal(QQN::Serials()->RefVouObject->VoucherObject->Grp, 3)
                     ));
                foreach ($serials as $serial){
                   
                   
        ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($serial->Code); ?></td>
            <td><?php _p($serial->ItemObject->DisplayName); ?></td>
            <td><?php _p($serial->RefVouObject->Rate); ?></td>
            <td><?php _p($serial->ItemObject->StockGrpObject); ?></td>
            <td><?php _p($serial->RefVouObject->DiscAmt); ?></td>
            <?php 
            $purdate = date('Ymd', strtotime($serial->RefVouObject->VoucherObject->Date));
                   $from = date('Y', strtotime($serial->RefVouObject->VoucherObject->Date." 1 Year"));
                   $to = date('Y',  strtotime(QDateTime::Now()));
                   if($from >= $to){
                   $year = abs($to - $from);
                   for($i=0 ; $i >= $year ; $i++){
                       $dep = $serial->ItemObject->StockGrpObject->Depreciation;
                       $cal = $serial->RefVouObject->Rate - ($serial->RefVouObject->Rate * ($dep/100));
                       ?>
            <td><?php   _p($cal);?></td>
        </tr>
    <?php  }}}} ?> 
    </table>
</div>
<?php $this->RenderEnd() ?>