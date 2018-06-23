<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <div style="clear: both; margin-bottom: 10px;"></div>
    <?php //if($this->lstCat->SelectedValue == 5){ ?>
         <table style="width: 100%;">
                  <tr>
                        <td width="15%;"><?php  $this->calfromdate->RenderWithName(); ?></td>                        
                        <td width="50%;"><?php  $this->btnSearch->RenderWithName(); ?></td>
                  </tr>
                </table>
                <?php if(isset($_GET['date'])){
                ?>
                <div  style="width:80%;">
                        <table width="100%" border="0" class="datagrid">
                            <tr>
                                <th width="14%"><div align="center">Sr.No.</div></th>
                                <th width="14%">Requirement Code</th>
                                <th width="14%">Suplier Voucher</th>
                                <th width="14%">PO Code</th>
                                <th width="14%">Transfer To</th>
                                <th width="14%"></th>
                                
                            </tr>
                              <?php 
                                 $sr = 1;
                              $to = Date('Ymd', strtotime($_GET['date']));
                                $voucher = Voucher::QueryArray(
                                        QQ::AndCondition(
                                                    QQ::GreaterOrEqual(QQN::Voucher()->Date,Date('Ymd000000', strtotime($_GET['date']))),
                                                    QQ::LessOrEqual(QQN::Voucher()->Date,Date('Ymd235959', strtotime($_GET['date']))),
                                                    QQ::Equal(QQN::Voucher()->Grp,11)        
                                        ));
                                        
                               if($voucher){
                                   foreach ($voucher as $vouchers){
                                       //quatation
                              $voucher11 = Voucher::QueryArray(
                                       QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->RefNo,$vouchers->Idvoucher),
                                            QQ::Equal(QQN::Voucher()->Grp,10)        
                                        ));
                                
                                 $vpos = Voucher::QueryArray(QQ::AndCondition(
                                                  QQ::Equal(QQN::Voucher()->RefNoObject->RefNo,$vouchers->Idvoucher),
                                                  QQ::Equal(QQN::Voucher()->Grp, 3)       
                                          ));
                                   foreach ($vpos as $vpo){
                                      $transfer = LoginHasRole::QueryArray(QQ::AndCondition(
                                              QQ::Equal(QQN::LoginHasRole()->LoginIdlogin,$vpo->DataBy),
                                              QQ::Equal(QQN::LoginHasRole()->Active,1)        
                                           ));
                                      foreach ($transfer as $transfers){}
                                    ?>
                            <tr>
                                <td>
                                    <div align="center">
                                     <?php _p($sr++); ?>
                                    </div>
                                </td>
                                <td>
                                    <?php 
                                   _p($vouchers->InvNo);
                                   ?>
                                </td>
                                <td>
                                       <?php _p($vpo->RefNoObject->DrObject->Name); ?>
                                </td>
                                <td>
                                    <?php _p($vpo->InvNo)?>
                                </td>
                                <td>
                                    <?php _p($transfers->RoleIdroleObject->ParrentObject)?>
                                </td>
                                <td>
                                <?php 
                                         $item = VoucherHasItem::LoadArrayByVoucher($vpo->Idvoucher);
                                         foreach ($item as $items){}
                                         $serial = Serials::LoadArrayByItem($items->Item);
                                              foreach ($serial as $serials){}
                                        if($serials){
                                              $trans = DeptTransfer::QueryArray(
                                                  QQ::AndCondition(
                                                              QQ::Equal(QQN::DeptTransfer()->Item,$serials->Item),
                                                             QQ::Equal(QQN::DeptTransfer()->ToDept, $transfers->RoleIdroleObject->Parrent)
                                             ));
                                            if(!$trans){
                                            $this->btntransfer[$vpo->Idvoucher]->Render();}else{ ?>
                                        <?php $this->btnView[$vpo->Idvoucher]->Render();}}?>
                                </td>
                           </tr>
                                <?php }  }}?>
                         </table>
                </div>
                <?php }?>
          <div style="clear: both; margin-bottom: 10px;"></div>
    <?php //}?>
    <div style="clear: both; margin-bottom: 10px;"></div>
</div>
<div style="clear: both"></div>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
