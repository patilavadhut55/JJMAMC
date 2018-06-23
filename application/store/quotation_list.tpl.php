<?php
    $strPageTitle = QApplication::Translate('Vouchers') . ' - ' . QApplication::Translate('List All');

    require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
    <h1>
        Quotations For <?php if (isset($_GET['req']))
              $req = Voucher::LoadByIdvoucher($_GET['req']);  
            _t($req->Narration); ?>                 
    </h1>
    <div class="pull-right slideup" style="margin-right: 100px;"><?php $this->btnadd->Render(); ?></div>     
    <a href="requirement_list.php">
        <div class="btn btn-warning slideup" style="float: right;"><i class="fa fa-arrow-circle-o-left"></i> Back</div>    
    </a>
        <div class="form-controls">
            <table border="0" class="datagrid" style="font-size:12px;">
                <tr>
                    <td width="17%"><strong>Requirement Title </strong></td>
                    <td colspan="3"><?php _p($req->Narration); ?></td>
                </tr>
                <tr>
                    <td><strong>Code</strong></td>
                    <td width="33%"><?php _p($req->InvNo); ?></td>
                    <td width="21%"><strong>Date</strong></td>
                    <td width="29%"><?php _p(date('d/m/Y', strtotime($req->Date))); ?></td>
                </tr>
                <tr>
                    <td><strong>Requirement From</strong></td>
                    <td><?php if($req->DataBy != NULL){ _p($req->DataByObject->Name); } ?></td>
                    <td><strong>Approved By</strong></td>
                    <td><?php if($req->ApprovedBy != NULL ){ _p($req->ApprovedByObject->IdloginObject->Name); } ?></td>
                </tr>
                <tr>
                    <td><strong>Total Assets Qty</strong></td>
                    <td><?php 
                        $vhis = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
                        $qty = 0;
                        if($vhis){
                            foreach($vhis as $vhi){
                                $qty = $qty + 1;
                            }
                            _p($qty); 
                        }
                        ?></td>
                    <td><strong>Total Amount</strong></td>
                    <td><?php _p(number_format($req->Amount,2,'.','')); ?></td>
                </tr>
            </table>
            <div align="right" style="width: 100%"><?php $this->btnNeg->Render(); ?></div>
            <?php $this->dtg->Render(); ?>
        </div>
            
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>