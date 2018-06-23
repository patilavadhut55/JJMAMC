<?php
require(__CONFIGURATION__ . '/header.inc.php');
     $vgrp = NULL;
            if(isset($_GET['id'])){
                $vou = Voucher::LoadByIdvoucher($_GET['id']);
                $vgrp = $vou->Grp;
            }
?>
<?php $this->RenderBegin() ?>
<h1><?php _t('Direct Purchase'); ?></h1>
<div class="form-controls">
            <div class="form-controls">
                    <div class="pull-left"><?php $this->txtInvNo->RenderWithName(); ?></div>
                    <div class="pull-right"><?php $this->calDate->Render(); ?></div>
                <div class="form-controls">
            <div class="pull-left" style="width: 75%">
                        <div class="pull-left" style="margin-left: 20px"> <?php $this->lstledger->RenderWithName(); ?></div>
                       
                        <div style="clear: both"></div>
                        <table width="99%" border="1" style="line-height:35px; border:1px solid #E5E5E5;" >
                        <tr>
                            <th width="3%"  height="36" bgcolor="#F2F2F2"></th>
                            <th width="7%"  height="36" bgcolor="#F2F2F2"><div align="center"><strong>Sr</strong></div></th>
                            <th width="31%" bgcolor="#F2F2F2"><div align="center"><strong>Items</strong></div></th>
                            <th width="9%"  bgcolor="#F2F2F2"><div align="center"><strong>Qty</strong></div></th>
                            <th width="10%" bgcolor="#F2F2F2"><div align="center"><strong>Rate</strong></div></th>
                            <th width="11%" bgcolor="#F2F2F2"><div align="center"><strong>Amount</strong></div></th>
                            <th width="9%"  bgcolor="#F2F2F2"><div align="center"><strong>Disc</strong></div></th>
                            <th width="9%"  bgcolor="#F2F2F2"><div align="center"><strong>Tax</strong></div></th>
                            <th width="11%" bgcolor="#F2F2F2"><div align="center"><strong>Net Amount</strong></div></th>
                        </tr>
                        <?php 
                        $tax = $disc = $amount = $qty = $grossamt = $taxper =$dicper = 0;
                        $sr = 1;
                        if(isset($_GET['id'])){
                            $vov = Voucher::LoadByIdvoucher($_GET['id']);
                            $vhitms = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                             if($vhitms){
                                
                             foreach ($vhitms as $vhitm){    
                        ?>
                        <tr>
                          <td><div align="center">
                            <?php $this->lbldel[$vhitm->IdvoucherHasItem]->Render();?>
                          </div></td>
                          <td><div align="center">
                            <?php _p($sr++); ?>
                          </div></td>
                          <td><div align="center">
                            <?php _p($vhitm->ItemObject->IdledgerDetailsObject->Name); ?>
                          </div>
                           <div style="font-size: 12px;">
                        
                               <div class="pull-right" style="margin-right: 5px"> <?php //$this->txtSerial[$vhitm->IdvoucherHasItem]->Render();?></div>
                        </div>        
                          </td>
                          <td><div align="center">
                            <?php $this->txtInQty[$vhitm->IdvoucherHasItem]->Text = number_format($vhitm->Qty,2,'.','');$this->txtInQty[$vhitm->IdvoucherHasItem]->Render(); $qty = number_format( $qty + $vhitm->Qty,2,'.','')?>
                          </div></td>
                          <td><div align="center">
                            <?php $this->txtInRate[$vhitm->IdvoucherHasItem]->Text = number_format($vhitm->Rate,2,'.',''); $this->txtInRate[$vhitm->IdvoucherHasItem]->Render();?>
                          </div></td>
                          <td><div align="center">
                            <?php _p(number_format(($vhitm->Qty * $vhitm->Rate),2,'.','')); $grossamt = number_format( $grossamt + ($vhitm->Qty * $vhitm->Rate),2,'.','')?>
                          </div></td>
                          <td><div align="center">
                            <?php _p(number_format($vhitm->DiscAmt,2,'.','')); $disc = number_format( $disc + $vhitm->DiscAmt,2,'.',''); ?>
                          </div></td>
                          <td><div align="center">
                            <?php _p(number_format($vhitm->TaxAmt,2,'.','')); $tax = number_format( $tax + $vhitm->TaxAmt,2,'.',''); ?>
                          </div></td>
                          <td><div align="center">
                            <?php _p(number_format(round($vhitm->Amount),2,'.','')); $amount = number_format( $amount + $vhitm->Amount,2,'.',''); ?>
                          </div></td>
                        </tr>
                       
                         <?php 
                           $taxper = number_format( $taxper + $vhitm->TaxPer,2,'.','');
                           $dicper = number_format( $dicper + $vhitm->DiscPer,2,'.','');     
                         ?>  
                        <?php }}}
                          if(isset($_GET['id'])){
                            $vov = Voucher::LoadByIdvoucher($_GET['id']);
                            $this->lblPaidDis->Text = number_format( $disc ,2,'.','');
                            $this->lblPaidTax->Text = number_format( $vou->TotalTax ,2,'.','');
                            $this->lblNetAmount->Text = number_format(round($vov->Amount) ,2,'.','');
                            $this->lblQty->Text = number_format( $vov->TotalQty ,2,'.','');
                            $this->lblGross->Text = number_format( $vov->GrossAmount ,2,'.','');
                            $this->lblTax->SelectedValue = number_format($vov->Taxper ,2,'.','');
                            $this->lblDiscount->Text = number_format( $dicper ,2,'.','');
                          }
                         ?>
                        <tr>
                            <td></td>
                            <td><div align="center"><?php //$this->txtSr->Render();?></div></td>
                            <td><div align="center"><?php $this->lstItem->Render();?></div></td>
                            <td><div align="center"><?php $this->txtQty->Render();?></div></td>
                            <td><div align="center"><?php $this->txtRate->Render();?></div></td>
                            <td><div align="center"><?php $this->lblGrossAmt->Render();?><?php //$this->lblTaxper->Render();?><?php //$this->lblDiscper->Render();?></div></td>
                            <td><div align="center"><?php $this->txtDiscount->Render();?></div></td>
                            
                            <td><div align="center"><?php $this->txtTax->Render();?></div></td>
                           
                            <td><div align="center"><?php $this->txtAmt->Render();?></div></td>
                        </tr>
                        <?php if(isset($_GET['flag']) && $_GET['flag']== 1 ){?>
                         <tr>
                            <td colspan="3"> <?php $this->lsttax->RenderWithName(); ?></td>
                            <td colspan="3"> <?php $this->lbltotaltax->RenderWithName(); ?></td>
                            <td colspan="3"> <?php $this->lbltotal->RenderWithName(); ?></td>
                        </tr>
                        <?php } ?>
                       </table>
                        <div style="clear: both"></div> 
                        </div>
                    <div class="pull-right" style="width: 24%">
                        <table width="100%" height="115">
                        <tr><td align="center" style="border-bottom: 1px solid #999; font-size:18px;" > <b>Amount</b></td></tr>
                           <tr>
                            <td width="11%" style="border-bottom: 1px solid #999;"><b>Quantity</b><div style="clear: both"></div> 
                            
                            <div class="pull-right" style="font-size:18px; margin-left: 70px"><?php $this->lblQty->Render();?></div></td>
                           </tr>    
                           <tr>
                            <td width="11%" style="border-bottom: 1px solid #999;"><b>Gross Amount</b><div style="clear: both"></div> <div class="pull-right" style=" font-size:18px;margin-left: 70px"><?php $this->lblGross->Render();?></div></td>
                           </tr>  
                            <tr>
                            <td width="11%" style="border-bottom: 1px solid #999;"><b>Discount Amount</b><div style="clear: both"></div> <div class="pull-right" style=" font-size:18px;margin-left: 70px"><?php $this->lblPaidDis->Render();?></div></td>
                           </tr> 
                           <tr>
                            <td width="11%" style="border-bottom: 1px solid #999;"><b>Dis Percentage</b><div style="clear: both"></div> <div class="pull-right" style="font-size:18px;margin-left: 70px"><?php $this->lblDiscount->Render();?></div></td>
                           </tr>
                            <tr>
                            <td width="11%" style="border-bottom: 1px solid #999;"><b>Tax Amount</b><div style="clear: both"></div> <div class="pull-right" style="font-size:18px;margin-left: 70px"><?php $this->lblPaidTax->Render();?></div></td>
                           </tr>
                           <tr>
                              <td style="border-bottom: 1px solid #999;"><b>Tax Percentage</b><div style="clear: both"></div> <div class="pull-right" style="font-size:18px; margin-left: 70px; width: 70px;"><?php $this->lblTax->Render(); ?></div></td>
                           </tr>
                           <tr>
                            <td style="border-bottom: 1px solid #999;"><b>Net Amount</b><div style="clear: both"></div> <div class="pull-right" style="font-size:18px; margin-left: 70px"><?php $this->lblNetAmount->Render(); ?></div></td>
                           </tr>
                        </table>
                    </div>
               <div style="clear: both"></div>
                   <div class="form-actions">
                         <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                         <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                         <div style="clear: both"></div>      
                </div>
            
     <div style="clear: both"></div> 
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>

