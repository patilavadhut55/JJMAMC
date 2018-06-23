<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>

    <?php $this->RenderBegin() ?>
<h1>Negotiation</h1>
    <?php if (isset($_GET['req'])) {
        $req = Voucher::LoadByIdvoucher($_GET['req']);
            $vhps = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
            $sr = 0;
            $quotations = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp, 10),
                                    QQ::Equal(QQN::Voucher()->RefNo, $_GET['req'])        
                                ),QQ::OrderBy(QQN::Voucher()->Amount,TRUE));  
    ?>
<div class="form-controls" style="overflow: auto;">
    <table border="1" class="datagrid">
        <tr style="text-align: center;">
            <th rowspan="2">Sr. No</th>
            <th rowspan="2">Particulars of Materials</th>
            <th rowspan="2" >Required Quantity</th>
            <?php foreach ($quotations as $quotation) { ?> 
                <th colspan="2"><?php _p($quotation->DrObject); ?></th> 
            <?php } ?>
        </tr>
        <tr>
            <?php foreach ($quotations as $quotation) { ?> 
            <th>Rate</th>
            <th>Amount</th>
            <?php } ?>
        </tr>
        <?php $sr = 1;
        foreach ($vhps as $vhp) { ?>
            <tr>
                <td><div align="center"><?php _p($sr++); ?>.</div></td> 
                <td><?php _p($vhp->ItemObject); ?></td>
                <td><div align="center"><?php _p($vhp->Qty); ?></div></td>
                <?php foreach ($quotations as $quotation) { ?>   
                <td>
                    <div align="center">
                        <?php
                        $pos = VoucherHasItem::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::VoucherHasItem()->Voucher, $quotation->Idvoucher), 
                                                QQ::Equal(QQN::VoucherHasItem()->Item, $vhp->Item)
                                            ));
                        if($pos){
                            foreach ($pos as $po){} _p(number_format($po->Rate, 2, '.', ''));
                        }
                        ?>
                    </div>
                </td>
                <td><div align="right"><?php 
                        $pos = VoucherHasItem::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::VoucherHasItem()->Voucher, $quotation->Idvoucher), 
                                                QQ::Equal(QQN::VoucherHasItem()->Item, $vhp->Item)
                                            ));
                        if($pos){
                             foreach ($pos as $po){} 
                            _p(number_format($po->Amount, 2, '.', '')); 
                        }
                    ?></div></td> 
                <?php } ?>
            </tr>
            <?php } ?>
            <tr>
                <td>&nbsp;</td>
                <td><div align="center"><strong>Total</strong></div></td>
                <td><div align="center"><?php _p($req->TotalQty); ?></div></td>
                <?php foreach ($quotations as $quotation) { ?>
                <td colspan="2">&nbsp;</td> 
                <?php } ?>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="right"><strong>Discount Amount</strong></div></td>
                <?php foreach ($quotations as $quotation) { ?>   
                <td colspan="2">
                    <div align="center">
                    <?php $this->txtDiscount[$quotation->Idvoucher]->Render(); ?>
                    </div>
                </td>
                <?php } ?>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="right"><strong>Tax (%) </strong></div></td>
                <?php foreach ($quotations as $quotation) { ?>   
                <td colspan="2">
                    <div align="center">
                        <?php $this->txtVat[$quotation->Idvoucher]->Render(); ?>
                    </div>
                </td> 
                <?php } ?>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="right"><strong>Tax Amount </strong></div></td>
                <?php foreach ($quotations as $quotation) { ?>   
                <td colspan="2">
                    <div align="center"><?php $this->txttaxamt[$quotation->Idvoucher]->Render(); ?></div>
                </td> 
                <?php } ?>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="right"><strong>Total Amount</strong></div></td>
                <?php foreach ($quotations as $quotation) { ?>
                <td colspan="2">
                    <div align="center">
                        <?php _p(number_format($quotation->Amount, 2, '.', '')); ?>
                    </div>
                </td> <?php } ?>
            </tr>
            <tr>
                <td colspan="3">Terms &amp; Conditions</td>
                <?php foreach ($quotations as $quotation) { ?>   
                <td colspan="2"><div align="center"></div></td> 
                <?php } ?>
            </tr>
            <tr>
                <td>1.</td>
                <td colspan="2">DELIVERY:-</td>
                <?php foreach ($quotations as $quotation) { ?>   
                <td colspan="2">
                    <div align="center">
                    <?php $this->txtDelivery[$quotation->Idvoucher]->Render(); ?>
                    </div>
                </td> 
                <?php } ?>
            </tr> 
        </table>
    </div>
    <a href="requirement_list.php">
        <div style="float: right;" class="btn btn-success">Submit</div>
    </a>
    <div style="clear: both; height: 25px;"></div>
<?php } ?>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>