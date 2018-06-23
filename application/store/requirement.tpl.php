  
<?php   require(__CONFIGURATION__ . '/header.inc.php'); ?>

<?php $this->RenderBegin(); ?>
<h1>Requirement</h1>

<div class="tabbable-panel">
    <div class="tabbable-line">
        <ul class="nav nav-tabs ">

            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 1 ) || !isset($_GET['tab'])) { ?>active<?php } ?>"id="1">
                <a href="requirement.php?tab=1<?php if (isset($_GET['id'])) { ?>&id=<?php _p($_GET['id']);} ?>" aria-expanded="true" id="link1 ">
                    <i class="fa fa-asterisk fa-fw"></i><?php _t('Requirement') ?>
                </a>                         
            </li>

            <?php if (isset($_GET['id'])) {
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                if($vov->ApprovedBy != NULL){
            ?>
                <li class="<?php if (isset($_GET['tab']) && $_GET['tab'] == 2) { ?>active<?php } ?>" id="2">
                    <a href='requirement.php?tab=2<?php if (isset($_GET['id'])) { ?>&id=<?php _p($_GET['id']); ?>' aria-expanded="true" <?php } ?> id="link2 ">
                        <i class="fa fa-asterisk fa-fw"></i><?php _t('Requirement Print') ?>
                    </a>
                </li>
            <?php }} ?>  

        </ul>
        <div class="tab-content">
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 1 || !isset($_GET['tab'])) { ?>active<?php } ?>" id="1">
                <div class="form-controls" >
                    <table  align="center" border="0" width="100%">
                        <tr>
                            <td width="15%"  height="40"><strong>Requirement No</strong></td>
                            <td width="25%" ><?php $this->txtCode->Render(); ?></td>
                            <td width="15%"align="right"><strong style="margin: 5px;">Date</strong></td>
                            <td width="45%"><?php $this->txtcalDate->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Requirement Title</strong></td>
                            <td colspan="3" align="left"><?php $this->txtTitle->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Department</strong></td>
                            <td><?php $this->lstdept->Render(); ?></td>
                            <td align="right"><strong style="margin: 5px;">Requirement Type</strong></td>
                            <td><?php $this->lstReqGroup->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Description</strong></td>
                            <td colspan="3"><?php $this->txtDes->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Budget Allocation Head</strong></td>
                            <td><?php $this->lstbudget->Render(); ?></td>
                            <td align="right"><strong style="margin: 5px;">Remaining Budget</strong></td>
                            <td><?php $this->lblbudget->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="98" colspan="4" >
                                <table align="left" class="datagrid"  border="1" style=" margin-top: 15px;" >
                                    <tr>
                                        <th></th>
                                        <th><div align="center">Sr</div></th>
                                        <th><div align="center">Asset</div></th>
                                        <th><div align="center">Qty</div></th>
                                        <th><div align="right">Estimated Rate</div></th>
                                        <th><div align="right">Estimated Amount</div></th>
                                        <th><div align="center">Pack Size</div></th>
                                        <th><div align="center">Remark</div></th>
                                        <th></th>
                                    </tr>
                                    <?php
                                        $total = 0;
                                        if (isset($_GET['id'])) {
                                            $vov = Voucher::LoadByIdvoucher($_GET['id']);
                                            $sr = 1;
                                            $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);

                                            if($vhps){
                                                foreach ($vhps as $vhp) {
                                    ?>  
                                    <tr>
                                        <td><div align="center"><?php $this->lbldel[$vhp->IdvoucherHasItem]->Render(); ?></div></td>
                                        <td><?php _p($sr++); ?></td>
                                        <td><?php _p($vhp->ItemObject); ?></td>
                                        <td>
                                            <div align="center">
                                                <?php
                                                $total = $total + $vhp->Qty;
                                                _p($vhp->Qty);
                                                ?>
                                            </div>
                                        </td>
                                        <td><div align="right"><?php _p(number_format($vhp->Rate, 2, '.', '')); ?></div></td>
                                        <td><div align="right"><?php _p(number_format($vhp->Amount, 2, '.', '')); ?></td>
                                        <td><?php _p($vhp->PackSize); ?></td>
                                        <td><div><?php _p($vhp->Remark); ?></div></td>
                                        <td><div>&nbsp;</div></td>
                                    </tr>
                                    <?php } } } ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><?php $this->lstProduct->Render(); ?></td>
                                        <td><div align="center"><?php $this->txtQty->Render(); ?></div></td>
                                        <td> <div align="right"><?php $this->txtRate->Render(); ?></div></td>
                                        <td><div align="right"><?php $this->txtAmount->Render(); ?></div></td>
                                        <td><div align="center"><?php $this->txtpackSize->Render(); ?></div></td>
                                        <td><?php $this->txtRemark->Render(); ?></td>
                                        <td><?php $this->btnAdd->Render(); ?></td>
                                    </tr> 
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Total Quantity</strong></td>
                            <td><?php $this->txtTqty->Text = $total;  $this->txtTqty->Render();  ?></td>
                            <td><strong>Total Amount</strong></td>
                            <td><?php $this->txtTamt->Render(); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php //$this->txtDes->RenderWithName();  ?></td>
                            <td></td>
                            <td><?php $this->chkApprove->RenderWithName(); ?></td>
                        </tr>
                    </table>
                    <div style="clear: both;"></div>

                    <div class="form-actions">
                        <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                        <div class ="form-action"><?php //$this->btnDelete->Render();?></div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <?php   if (isset($_GET['id'])) {
                $vov = Voucher::LoadByIdvoucher($_GET['id']);
                if($vov->ApprovedBy != NULL){
                
                ?>
                <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 2) { ?>active <?php } ?>" id="2">
                    <div class="form-controls">
                        <?php $this->lstsup->RenderWithName(); ?>
                        <?php $this->txtterms->RenderWithName(); ?>
                        <div class="form-actions">
                            <div class="form-delete"><?php $this->btnprint->Render(); ?></div>
                            <div style="clear: both"></div>
                        </div>

                    </div>

                </div>
            <?php } }?>
        </div>
    </div>
</div>


<?php $this->RenderEnd(); ?>
<?php
//require(__CONFIGURATION__ .'/footer.inc.php'); ?>