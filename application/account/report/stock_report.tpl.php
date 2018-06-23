<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
<div class="pull-left slideup" style="margin-left: 150px;">
    <div class="pull-left" style="margin-right: 10px;"><?php $this->txtGroup->Render(); ?></div>
    <div class="pull-left"><?php $this->calToDate->Render(); ?></div>
</div>

<div class="pull-right slideup">
    <?php 
    $sets = Settings::QueryArray(
            QQ::OrCondition(
            QQ::Equal(QQN::Settings()->Idsettings, 15),
            QQ::Equal(QQN::Settings()->Idsettings, 16),
            QQ::Equal(QQN::Settings()->Idsettings, 17),
            QQ::Equal(QQN::Settings()->Idsettings, 18)
                )
            );
    foreach ($sets as $set){
    ?>
    <div class="pull-left" style="background-color: <?php _p($set->Option); ?>;padding: 6px; height: 34px; border-radius: 5px; margin-right: 5px;"><?php _p($set->Name); ?></div>
    <?php } ?>    
</div>

<div class="form-controls">
    
    <div style="clear: both"></div>
<table width="100%" class="datagrid">    
    <tr>
    <th width="53"><div align="center">Sr NO.</div></th>
    <th width="93"><div align="center">Product</div></th>
    <th width="93"><div align="center">Opening</div></th>
    <th width="85"><div align="center">Inward</div></th>
    <th width="104"><div align="center">Outward</div></th>
    <th width="102"><div align="center">Closing</div></th>
    <th width="100"><div align="center">Valuation</div></th>
    </tr>
    
    <?php
    
     $Sr = 1;
     $tamt = 0;
    if($this->calToDate->Text != ""){
    $date = date('Ymd',  strtotime($this->calToDate->Text));    
    $actbrand = Settings::LoadByName("Active Brand");
    if($this->txtGroup->SelectedValue != NULL){
        
    $prods = LedgerDetails::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::LedgerDetails()->BrandObject->Parrent, $actbrand->Option),
                    QQ::Equal(QQN::LedgerDetails()->Brand, $this->txtGroup->SelectedValue)
                )
            );
    }else {
        $prods = LedgerDetails::QueryArray(
            QQ::AndCondition(
                    QQ::Equal(QQN::LedgerDetails()->BrandObject->Parrent, $actbrand->Option)                    
                    )
            );
    }
    foreach ($prods as $prod){
    $stocks = VoucherHasItem::QueryArray(
            QQ::AndCondition(                
                QQ::Equal(QQN::VoucherHasItem()->Item, $prod->IdledgerDetails),                        
                QQ::LessThan(QQN::VoucherHasItem()->VoucherObject->Date , $date.'000000')
            ));
    
    $curstocks = VoucherHasItem::QueryArray(
            QQ::AndCondition(                    
                QQ::Equal(QQN::VoucherHasItem()->Item, $prod->IdledgerDetails),                        
                QQ::LessOrEqual(QQN::VoucherHasItem()->VoucherObject->Date , $date.'235959'),
                QQ::GreaterOrEqual(QQN::VoucherHasItem()->VoucherObject->Date , $date.'000000')
          ));
   
    $open = 0;
    $inword = 0;
    $outword = 0;
    $close = $val =0;
 
    foreach ($stocks as $stock){
       if($stock->VoucherObject->Grp == 3) $open = $open + $stock->Qty;
       if($stock->VoucherObject->Grp == 4) $open = $open - $stock->Qty;
    }
    
    foreach ($curstocks as $curstock){
       if($curstock->VoucherObject->Grp == 3) $inword = $inword + $curstock->Qty;
       if($curstock->VoucherObject->Grp == 4) $outword = $outword + $curstock->Qty;
    }
    
    $close = $open + $inword - $outword;
    $val = $close * ($prod->Mrp);
    $tamt = $tamt + $val; 
    ?>
    <tr>
        <td align="Center"><?php _p($Sr++); ?></td>
        <td align="Center"><?php _p($prod->IdledgerDetailsObject->Name); ?></td>
        <td align="Center"><?php _p($open); ?></td>
        <td align="Center"><?php _p($inword); ?></td>
        <td align="Center"><?php _p($outword); ?></td>
        <td align="Center">
            <a class="mytooltip">
            <?php             
            $set = Settings::LoadByName("Tollerns Percent");
            $amt = $prod->MinStock * ($set->Option / 100);                
            if($close < 0){ ?>            
            <div style="background-color: <?php _p($sets[0]->Option); ?>;padding: 5px; border-radius: 5px;">
                <span>
                <img class="callout" src="<?php _P(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__)  ?>/callout.gif" />
                    <?php _p($sets[0]->Name); ?> Available
                </span>    
            <?php }elseif($close < $prod->MinStock && $close >= 0){ ?>
                <div style="background-color: <?php _p($sets[1]->Option); ?>;padding: 5px;border-radius: 5px;">
                <span >
                <img class="callout" src="<?php _P(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__)  ?>/callout.gif" />
                    <?php _p($sets[1]->Name); ?> Level
                </span>    
            <?php }elseif($close >= $prod->MinStock && $close <= ceil($prod->MinStock + $amt)){ ?>
                <div style="background-color: <?php _p($sets[2]->Option); ?>;padding: 5px;border-radius: 5px;">
                <span>
                <img class="callout" src="<?php _P(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__)  ?>/callout.gif" />
                    <?php _p($sets[2]->Name); ?> Level
                </span>
            <?php }else{ ?>
                <div style="background-color: <?php _p($sets[3]->Option); ?>;padding: 5px;border-radius: 5px;">
                <span>
                <img class="callout" src="<?php _P(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__)  ?>/callout.gif" />
                    <?php _p($sets[3]->Name); ?>
                </span>    
            <?php } ?>        
            <?php _p($close); ?>
                </div>
            </a>     
        </td>
        <td align="Center"><?php _p(number_format($val, 2,'.','')); ?></td> 
    </tr>
         <?php } ?>
    <tr>
        <th width="53"><div align="center"></div></th>
        <th width="93"><div align="center"></div></th>
        <th width="93"><div align="center"></div></th>
        <th width="85"><div align="center"></div></th>
        <th width="104"><div align="center"></div></th>
        <th width="102"><div align="center">Total</div></th>
        <th width="100"><div align="center"><?php _p(number_format($tamt, 2,'.','')); ?></div></th>
    </tr> 
   
</table>
   <?php } ?>
</div>
<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>