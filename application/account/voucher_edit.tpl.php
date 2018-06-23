<?php
  
    //$strPageTitle = QApplication::Translate('Voucher') . ' - ' . $this->mctVoucher->TitleVerb;
    require(__CONFIGURATION__ . '/header.inc.php');
     $vgrp = NULL;
            if(isset($_GET['id'])){
                $vou = Voucher::LoadByIdvoucher($_GET['id']);
                $vgrp = $vou->Grp;
            }else{
              if(isset($_GET['tab']))
                $vgrp = $_GET['tab'];
             
            }
?>
    <?php $this->RenderBegin() ?>
    <div class="tabbable-panel slideup">
    <div class="tabbable-line">
       <ul class="nav nav-tabs">
            <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> pull-right">
                <a href="voucher_edit.php?tab=1" >
                   <i class="fa fa-newspaper-o fa-fw"></i><?php _t('Receipt')?>
                </a>
            </li>
            <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?> pull-right">
                <a href="voucher_edit.php?tab=2" aria-expanded="true">
                <i class="fa fa-money fa-fw"></i><?php _t('Payment')?>
                </a>
            </li>
            <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php } ?> pull-right">
                <a href="voucher_edit.php?tab=5" aria-expanded="true">
                <i class="fa fa-joomla fa-fw"></i><?php _t('Journal')?>
                </a>
            </li>
              <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?> pull-right">
                  <a href="voucher_edit.php?tab=3" >
                   <i class="fa  fa-download fa-fw"></i><?php _t('Purchase')?>
                </a>
            </li>
            <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 4){ ?>active<?php } ?> pull-right">
                <a href="voucher_edit.php?tab=4" aria-expanded="true">
                <i class="fa fa-upload fa-fw"></i><?php _t('Sales')?>
                </a>
            </li>
            <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 6){ ?>active<?php } ?> pull-right">
                <a href="voucher_edit.php?tab=6" aria-expanded="true">
                <i class="fa fa-outdent fa-fw"></i><?php _t('Salesmans O/W')?>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane <?php if(isset($_GET['tab'])){ ?>active<?php } ?> id=1">
                 <?php if(isset($_GET['tab']) || isset($_GET['id'])){ ?>
                <div class="form-controls">
                    <div class="pull-left"><?php $this->txtInvNo->RenderWithName(); ?></div>
                    <div class="pull-right"><?php $this->calDate->Render(); ?></div>
                <div class="form-controls">
                    <?php if($_GET['tab']== 1 ||$_GET['tab']== 2||$_GET['tab']== 5 ){ ?>
                    <div class="pull-left" style="width: 64%">
                       <table width="99%" border="0" style="line-height:35px; border:1px solid #E5E5E5;">
                        <tr>
                          <th width="41" height="36" bgcolor="#F2F2F2"><div align="center"></div></th>
                          <th width="384" bgcolor="#F2F2F2"><div align="center"><strong>Particular</strong></div></th>
                          <th width="117" bgcolor="#F2F2F2"><div align="center"><strong>Dr.</strong></div></th>
                          <th width="129" bgcolor="#F2F2F2"><div align="center"><strong>Cr.</strong></div></th>
                        </tr>
                          <?php
                          $dr = $cr =0;
                          if(isset($_GET['id'])){
                          $vovs = Voucher::QueryArray(
                                        QQ::OrCondition(
                                         QQ::Equal(QQN::Voucher()->Idvoucher, $_GET['id']),
                                         QQ::Equal(QQN::Voucher()->RefNo, $_GET['id'])        
                                        ));
                            if($vovs){
                            $froms = array();
                            $tos = array();
                            $fsr = 1; $tsr = 1;
                            foreach ($vovs as $vov){
                            if($vov->Dr){
                              //Debit
                             if(array_key_exists($vov->Dr, $froms)){
                                $froms[$vov->Dr] = $froms[$vov->Dr] + $vov->Amount;
                             }else{
                                $froms[$vov->Dr] = $vov->Amount;
                                $fname[$fsr] = $vov->DrObject->Name;
                                $fsr = $fsr + 1;
                             }
                            }
                            
                            if($vov->Cr){
                            //Credit
                             if(array_key_exists($vov->Cr, $tos)){
                                $tos[$vov->Cr] = $tos[$vov->Cr] + $vov->Amount;
                             }else{
                                $tos[$vov->Cr] = $vov->Amount;
                               if($vov->Cr){
                                $tname[$tsr] = $vov->Cr;
                                $name[$tsr] = $vov->CrObject->Name;
                                $tsr = $tsr + 1;
                                }
                              }
                             }
                            }
                            $fsr = 1;
                            foreach ($froms as $from){
                             ?>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;Dr <?php _p($fname[$fsr]);  $fsr = $fsr + 1; ?></td>
                          <td align="right">&nbsp;<?php _p($from); $dr = $dr + $from; ?> &nbsp;&nbsp;</td>
                          <td align="right">&nbsp;</td>
                        </tr>
                        <?php }
                        $tsr = 1;
                        foreach ($tos as $to){
                         ?>
                        <tr>
                          <td>
                            <div align="center">
                              <?php  if(isset($tname)){ 
                              $ledger = Ledger::LoadByIdledger($tname[$tsr]);
                              $vovs = Voucher::QueryArray(
                                      QQ::AndCondition(
                                      QQ::Equal(QQN::Voucher()->RefNo, $_GET['id']),
                                      QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger)
                                      ));
                                if($vovs){
                                foreach ($vovs as $vov){}
                                ?>
                              <?php } } ?>
                              </div>
                          </td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;Cr <?php if(isset($tname)){ if($tname[$tsr]) _p($name[$tsr]);  $tsr = $tsr + 1; } ?></td>
                          <td align="right">&nbsp;</td>
                          <td align="right"><?php _p($to); $cr = $cr + $to; ?>&nbsp;&nbsp;</td>
                        </tr>
                        <?php }}} ?>
                        <tr>
                         <td>&nbsp;</td>
                         <td>
                            <div class="pull-left" ><?php  $this->lstList->Focus(); $this->lstList->Render(); ?></div>
                            <div class="pull-left" style="margin-left: 5px"><?php $this->lstledger->Render(); ?></div>
                         </td>
                         <td colspan="2" align="center"><?php $this->txtAmount->Render(); ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td align="right"><h4>Amount</h4></td>
                          <td align="right"><b><?php _p(number_format($dr,2,'.','')); ?></b>&nbsp;&nbsp;</td>
                          <td align="right"><b><?php _p(number_format($cr,2,'.','')); ?></b>&nbsp;&nbsp;</td>
                        </tr>
                       </table>
                      <div style="clear: both"></div> 
                    </div>
                     <div class="pull-right" style="width: 35%">
                       <table width="100%" height="115">
                          <tr>
                              <td>
                               <div style="float: left;"><?php //$this->btnDesign->Render(); ?></div>
                                <div style="float: left;"><?php //$this->btnCode->Render(); ?></div>
                            </td>
                           </tr>
                            <tr>
                            <td>
                              <?php $this->txtNarrDesign->Render(); ?>
                              <?php $this->txtNarration->Render(); ?>
                            </td>
                          </tr>
                       </table>   
                     </div>    
                    <?php }elseif($_GET['tab']== 3 ||$_GET['tab']== 4){ $this->lstledger->SetFocus(); ?>
                    <div class="pull-left" style="width: 75%">
                        <div class="pull-left" style="margin-left: 20px"> <?php $this->lstledger->RenderWithName(); ?></div>
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
                        <?php               
                            //Displaying serials
                        if(isset($_GET['tab'])&& $_GET['tab']== 3)
                            $serials = Serials::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Serials()->Iw, $vhitm->IdvoucherHasItem),
                                            QQ::Equal(QQN::Serials()->Item, $vhitm->Item)
                                    ));
                        else 
                            $serials = Serials::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Serials()->Ow, $vhitm->IdvoucherHasItem),
                                        QQ::Equal(QQN::Serials()->Item, $vhitm->Item)
                                ));

                            $data = " ";
                            $sr = 1;
                            $cnt = 0;
                            foreach ($serials as $serial){$cnt++;}
                            if($cnt == $vhitm->Qty){
                                $this->txtSerial[$vhitm->IdvoucherHasItem]->Visible = FALSE;
                            }
                            foreach ($serials as $serial){
							$this->lblserial[$vhitm->IdvoucherHasItem][$serial->Idserials]->Text = $serial->Serial;
							?>
                            <div style="float:left; border: 1px solid #CCC; border-radius:10px; background-color:#E6E6E6">
							  <?php 
							   $this->lblSrdel[$vhitm->IdvoucherHasItem][$serial->Idserials]->Render();
                               $this->lblserial[$vhitm->IdvoucherHasItem][$serial->Idserials]->Render();
                              ?>
                            </div>
                            <?php }?>
                               <div class="pull-right" style="margin-right: 5px"> <?php $this->txtSerial[$vhitm->IdvoucherHasItem]->Render();?></div>
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
                            <?php _p(number_format(round($vhitm->Amount),2,'.','')); $amount = number_format( $amount + $vhitm->Amount,2,'.','');$this->txtSerial[$vhitm->IdvoucherHasItem]->Focus(); ?>
                          </div></td>
                        </tr>
                         <?php 
                           $taxper = number_format( $taxper + $vhitm->TaxPer,2,'.','');
                           $dicper = number_format( $dicper + $vhitm->DiscPer,2,'.','');     
                         ?>  
                        <?php }}} 
                            $this->lblPaidDis->Text = number_format( $disc ,2,'.','');
                            $this->lblPaidTax->Text = number_format( $tax ,2,'.','');
                            $this->lblNetAmount->Text = number_format(round($amount) ,2,'.','');
                            $this->lblQty->Text = number_format( $qty ,2,'.','');
                            $this->lblGross->Text = number_format( $grossamt ,2,'.','');
                            $this->lblTax->Text = number_format( $taxper ,2,'.','');
                            $this->lblDiscount->Text = number_format( $dicper ,2,'.','');
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
                              <td style="border-bottom: 1px solid #999;"><b>Tax Percentage</b><div style="clear: both"></div> <div class="pull-right" style="font-size:18px; margin-left: 70px"><?php $this->lblTax->Render(); ?></div></td>
                           </tr>
                           <tr>
                            <td style="border-bottom: 1px solid #999;"><b>Net Amount</b><div style="clear: both"></div> <div class="pull-right" style="font-size:18px; margin-left: 70px"><?php $this->lblNetAmount->Render(); ?></div></td>
                           </tr>
                        </table>
                    </div>
                    <?php }  else { ?>
                      <div class="pull-left" style="margin-left: 20px"> <?php $this->lstledger->RenderWithName(); ?></div>
                      <div class="form-controls">
                        <?php $this->txtEMINO->RenderWithName(); ?>
                        <?php if(isset($_GET['id'])){ ?>  
                        <table class="datagrid" border="1">
                            <tr>
                                <th width="30">Sr</th>
                                <th>Item</th>
                                <th>Qty</th>
                            </tr>
                            <?php 
                                $vhis = VoucherHasItem::LoadArrayByVoucher($_GET['id']);
                                $sr = 1;
                                foreach ($vhis as $vhi){
                            ?>
                            <tr>
                                <td><?php _p($sr++); ?></td>
                                <td><?php _p($vhi->ItemObject->DisplayName); ?></td>
                                <td><?php _p($vhi->Qty); ?></td>
                            </tr>
                            <?php } ?>      
                        </table>  
                        <?php } ?>  
                      </div>
                      
                      
                    <?php }?>
                      <div style="clear: both"></div>
                </div>
                <div class="form-actions">
	         <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                 <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                </div>
            </div>
                 <?php }?>
            </div>
        </div>    
        </div>
        </div>    

    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>