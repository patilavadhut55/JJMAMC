<?php
    $strPageTitle = QApplication::Translate('Approval') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>
<?php if(isset($_GET['req'])){ ?>
    <h1>Requirement Approval</h1>
    <div class="form-controls">
        <?php  
            $sr=1;
            $req1 = Voucher::LoadByIdvoucher($_GET['req']);
                if($req1){
        ?>    
        <div style="font-size: 17px;"> 
            <div style="float: left; margin-right: 10px;"><strong>Requirement Title : </strong></div>
            <div style="float: left; margin-right: 10px;"><?php _p($req1->Narration); ?></div>
            <div style="float: right; margin-left: 10px;"><?php _p(date('d/m/Y', strtotime($req1->Date))); ?></div>
            <div style="float: right;"><strong>Date : </strong></div>
            <div style="clear: both;"></div>
        </div>
        <br>
        <div style="font-size: 17px;"><strong>Raised By : </strong>
            <?php if($req1->DataBy){ _p($req1->DataByObject->Name); } ?>
        </div>
        <table class="datagrid" border="1" style="margin-top: 15px;">
            <tr>
                <th width="2%">Sr</th>
                <th width="6%">Product</th>
                <th width="3%">Qty</th>
                <th width="6%"><div align="right"> Estimated Rate</div></th>
                <th width="6%"><div align="right">Estimated Amount</div></th>
            </tr>
            <?php $vhps = VoucherHasItem::LoadArrayByVoucher($req1->Idvoucher);
                foreach ($vhps as $vhp){ 
            ?>
            <tr>
                <td><?php _p($sr++)?></td>
                <td><?php _p($vhp->ItemObject)?></td>
                <td><?php _p($vhp->Qty)?></td>
                <td>
                    <div align="right">
                        <?php _p(number_format($vhp->Rate,2,'.','')); ?>
                    </div>
                </td>
                <td>
                    <div align="right">
                        <?php _p(number_format($vhp->Amount,2,'.','')); ?>
                    </div>
                </td>
            </tr>
            <?php }//} ?>
        </table>
        <div class="col-md-8 "><?php $this->txtReason->RenderWithName(); ?></div>
        <div class="pull-right "><?php $this->btnDenied->Render(); ?></div>  
        <div class="pull-right "><?php $this->btnApproval->Render(); ?></div>     
        <div class="clearfix"></div>
        <?php }} ?>
        <div class="clearfix"></div>
    </div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>