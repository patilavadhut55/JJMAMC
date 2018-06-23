<?php
require('../../qcubed.inc.php');
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Times New Roamen";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    min-height: 29.7cm;
    padding: 2cm;
    margin: 1cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 1px black solid;
    height: 256mm;
    outline: 2cm #FFEAEA solid;
    
}

@page {
    size: A4;
    margin: 0;
}
@media print {
    html, body {
        width: 210mm;
        height: 297mm;
    }
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}
</style>
<style>
  #title p{
        margin-left:135px;
        font-size: 25px;
       
    }
    p{
        font-size: 17px;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    //padding:px;
}
</style>
<body>
<div class="book">
    <div class="page">
        <div class="subpage">
            <div id="title">
                <p> Shree Laxmi Stationary & Uniform<br> Manerajuri Road, Tasgaon</p>
            </div>
            <hr>
            
            <?php 
                if (isset($_GET['id'])) {
            ?>
            <div>
               <?php 
               
                 $vouche = Voucher::LoadByIdvoucher($_GET['id']);
                 $adds = Address::LoadArrayByOf($vouche->Dr);
                 foreach($adds as $add){
                 }      
               ?>
                
                <div style="float: right"><strong>Date :- </strong> <?php _p(date('d/m/Y',  strtotime($vouche->Date))); ?></div>
                <div><strong>Bill No :- </strong><?php _p($vouche->InvNo); ?> </div>
                <div>
                    <div><strong>Student :- </strong><?php _p($add->FirstName.'   '.$add->MiddelName.'    '.$add->LastName); ?> </div>
                    <div style="float: left"><strong>Address :- </strong><?php _p($add->AddressLine1); ?></div>
                    <div style="float: right"><strong>Contact :- </strong><?php _p($add->Contact1);?></div>
                    <div style="clear: both"></div>
                </div>
                <div style="margin-bottom:10px"><strong>Standard :- </strong><?php _P($vouche->RefCurrentStatus)?></div>
                
            </div>
            <div class=" info">
                <table style="width:100%" >
                    <tr>
                        <th width = "50">Sr.</th>
                        <th>Product</th>
                        <th width = "60">Qty</th>
                        <!--th width="80">Rate</th>
                        <th width = "80">Amount</th-->
                    </tr>
                    <?php
                     if (isset($_GET['id'])) {
                        $sr = 1;
                    $vitems = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                         if ($vitems) {
                        foreach ($vitems as $vitem) {
                    ?>
                    <tr>
                        <td align="center"><?php _p($sr++);  ?></td>
                        <td><?php _p($vitem->ItemObject->DisplayName); ?></td>
                        <td align="center"><?php _p($vitem->Qty); ?></td>  
                        <!--td align="right"><?php  //_p(number_format($vitem->Rate, 2, '.', '')); ?> </td>
                        <td align="right"> <?php // _p(number_format($vitem->ItemAmount, 2, '.', ''));?></td-->

                    </tr>
                        <?php }?>
                    <tr>

                        <!--td></td>
                        <td></td-->
                      
                        <td align="right" colspan="2"> <div style="margin-right:10px; font-weight: bold;">Total</div></td>
                        <td align="right"> <div style="margin-right:10px; font-weight: bold;"><?php _p(number_format($vouche->TotalAmount, 2, '.', '')); ?></div> </td>

                    </tr>
                    <tr>
                        <td colspan="3"> Amount Inwords : <?php _p(convert_number($vouche->TotalAmount));?></td>
                    </tr>
                <?php }} ?>
                    
                    
                </table>    
           
             </div>
                <?php } ?>
            
            <div style="font-weight: bold;margin-top:160px;">
                <div style="float:left;">Note : Items once sold not be taken</div>
                <div style="float:right">Authorized Signature</div>
                <div style="clear: both"></div>
            </div>
            <div style="margin-top:20px;margin-left:180px;">(This is computer generated receipt)</div>
    </div>
  </div>
</div>
</body>