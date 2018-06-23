<?php   require(__CONFIGURATION__ . '/header.inc.php');?>

<?php $this->RenderBegin() ?>
<h1 >Store In / Out ward </h1>
    <div style=" margin-bottom: 20px; ">
        <?php 
            $cats = IwowCat::QueryArray(
                        QQ::OrCondition(
                        QQ::Equal(QQN::IwowCat()->IdiwowCat, 2),
                        QQ::Equal(QQN::IwowCat()->IdiwowCat, 3),
                        QQ::Equal(QQN::IwowCat()->IdiwowCat, 4)
                    ));
            foreach ($cats as $cat) { 
        ?>
        <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/inward_outward.php?cat=<?php _p($cat->IdiwowCat);  ?>"> <div class="uppertab" <?php if(isset($_GET['cat']) &&  ($_GET['cat'] == $cat->IdiwowCat)){ ?> style="color:#FFF;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(181,189,200,1)), color-stop(52%,rgba(130,140,149,1)), color-stop(100%,rgba(40,52,59,1))); /* Chrome,Safari4+ */
                "<?php } ?>><?php _p($cat->Name); ?></div>
            </a>
        <?php } ?>
    </div>
    <div style="clear: both; margin-bottom: 10px;"></div>
<div class="form-controls">
     <?php if($this->lstCat->SelectedValue == 2){ ?>
        <div style="float: right; width: 40%">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  $this->calDate->Render();?></div>
        <div style="float: left; width: 60%"><?php  $this->lstPO->RenderWithName(); ?></div>
        <div style="float: left; width: 60%"><?php  //$this->txtCode->RenderWithName(); ?></div>
            <div style="width:80%;">
                <table width="100%" border="1" class="datagrid">
                    <tr>
                        <th width="6%"><div align="center">Sr.No.</div></th>
                        <th width="40%">Asset Name</th>
                        <th width="14%">Required Quantity</th>
                        <th width="14%">In warded Quantity</th>
                        <th width="14%">Inward Now</th>
                        <th width="13%">Barcode</th>
                    </tr>
                      <?php 
                      if($this->lstPO->SelectedValue != NULL){
                      $totalqty = $totalin =0;

                      $vhps = VoucherHasItem::LoadArrayByVoucher($this->lstPO->SelectedValue);
                      if( $vhps){
                        $sr = 1;
                        foreach ( $vhps as  $vhp){
                      ?>
                    <tr>
                        <td><div align="center"><?php _p($sr++); ?></div></td>
                        <td><?php _p($vhp->ItemObject); ?></td>
                        <td><div align="center"><?php _p($vhp->Qty); ?></div></td>
                        <td><div align="center"><?php
                            $qty = Serials::QueryCount(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Serials()->RefVou, $vhp->IdvoucherHasItem)        
                                            ));
                            _p($qty); $totalin = $totalin + $qty;

                            ?></div>
                        </td>
                        <td><div align="center">
                          <?php  if($qty <= $vhp->Qty && $qty != $vhp->Qty){ $this->txtInwardqty[$vhp->Item]->Render(); } ?>
                        </div></td>
                        <td><div align="center"><?php if($qty != 0) $this->btnBarcode[$vhp->Item]->Render(); ?></div></td>
                    </tr>

                      <?php }  //voucher has product end   ?>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Total</th>
                        <th><div align="center"><?php _p($vhp->Qty); ?></div></th>
                        <th><div align="center"><?php _p($totalin); ?></div></th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php   } } ?>
                </table>
            </div>
            <div class="form-actions">
                <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                <div style="clear: both;"></div>
            </div>
    <?php } ?>
    
    <?php if($this->lstCat->SelectedValue == 3){ ?>
        <table style="width: 100%;">
            <tr>
                <td width="10%;"><?php  $this->txtDept->RenderWithName(); ?></td>
                <td width="15%;"><?php  $this->calfromdate->RenderWithName(); ?></td>                        
                <td width="10%;"><?php  $this->btnSearch->RenderWithName(); ?></td>
            </tr>
        </table>
        <?php if(isset($_GET['Dept'])&& isset($_GET['date'])){ ?>
            <div style="clear: both; margin-bottom: 10px; margin-top: 20px; border-top: 2px solid #0077b3; "></div>
            <div  style="width:80%;">
                <div><strong style="font-size: 18px; margin-bottom: 10px;">Outward Item List </strong> </div>
                <table width="100%" border="1" class="datagrid">
                    <tr>
                        <th width="6%"><div align="center">Sr.No.</div></th>
                        <th width="40%">Asset Name</th>
                        <th width="10%">Quantity</th>
                    </tr>
                    <?php 

                        $depttrans = DeptTransfer::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::DeptTransfer()->ToDept,$_GET['Dept']),
                                    QQ::GreaterOrEqual(QQN::DeptTransfer()->Date,date('Ymd000000',strtotime($_GET['date']))),
                                    QQ::LessOrEqual(QQN::DeptTransfer()->Date,date('Ymd359999',strtotime($_GET['date'])))
                                ),
                                QQ::GroupBy(QQN::DeptTransfer()->Item));

                        $sr = 1;
                        if($depttrans){
                            foreach ( $depttrans as  $dept){
                    ?>
                    <tr>
                        <td><div align="center"><?php _p($sr++); ?></div></td>
                        <td>
                            <?php   _p($dept->ItemObject);_p('-');
                            $item = DeptTransfer::QueryArray(
                                                QQ::AndCondition(
                                                   QQ::Equal(QQN::DeptTransfer()->Item,$dept->Item),
                                                   QQ::Equal(QQN::DeptTransfer()->ToDept,$dept->ToDept),
                                                   QQ::GreaterOrEqual(QQN::DeptTransfer()->Date,date('Ymd000000',strtotime($_GET['date']))) ,
                                                   QQ::LessOrEqual(QQN::DeptTransfer()->Date,date('Ymd359999',strtotime($_GET['date'])))       
                                               ));
                            if($item){
                                foreach ($item as $items){
                                    _p(' ');$this->lbldelete[$items->IddeptTransfer]->Render();_p(' ');
                                    _p($items->SerialsObject->Code);
                                }
                            }
                            ?>
                        </td>
                           
                        <td><div>
                            <?php
                                $productcount = DeptTransfer::QueryCount(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::DeptTransfer()->Item,$dept->Item),
                                                    QQ::Equal(QQN::DeptTransfer()->ToDept,$_GET['Dept']),
                                                    QQ::GreaterOrEqual(QQN::DeptTransfer()->Date,date('Ymd000000',strtotime($_GET['date']))) ,
                                                    QQ::LessOrEqual(QQN::DeptTransfer()->Date,date('Ymd359999',strtotime($_GET['date'])))
                                                ));
                                _p($productcount); 
                            ?></div>
                        </td>
                    <?php   //voucher has product end   ?>
                    </tr>
                    <?php }}?>
                </table>
            </div>
            <div style="clear: both; margin-bottom: 10px; border-top: 2px solid #0077b3; "></div>
            <div  style="float: left; width: 50%;">
                <table style="width: 100%;">
                    <tr><td colspan="2" height="40"><strong style="font-size: 18px;">Select Item For Outward</strong></td></tr>
                    <tr>
                        <td><Strong>Items </strong>&nbsp;&nbsp;&nbsp;<?php  $this->txtprocode->Render();?></td>
                        <td><?php  $this->btnProductAdd->Render();?></td>
                    </tr>
                </table>  
            </div>
            <div style="clear: both; "></div>
        <?php } ?>
            
        <div class="form-actions">  
            <a href="inward_outward.php?cat=2">
                <div class="btn btn-warning" style="float: right;"><i class="fa fa-arrow-circle-o-left"></i> Back</div>    
            </a>
             <div style="clear: both; "></div>
        </div>
            
    <?php }?>
   
    <?php if($this->lstCat->SelectedValue == 4){ ?>
        <div ><?php $this->calDate1->RenderWithName(); ?></div>
        <div > <?php $this->lstmember->RenderWithName();?> </div>
        <table class="datagrid" border="1">
            <tr>
                <th width="3%"></th>
                <th width="4%"><div align="center">Sr</div></th>
                <th width="5%"><div align="center">Item</div></th>
                <th width="4%"><div align="center">Serials</div></th>
                <th width="4%"><div align="center">Description</div></th>
                <th width="12%"><div align="center">Return Date</div></th>
                <th width="4%"><div align="center">Return Item</div></th>
            </tr>
                <?php if(isset($_GET['fdate']) && isset($_GET['mem'])){ 
                $sr =1;
              
                $issues = IssuedItems::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::IssuedItems()->Member,$_GET['mem']),
                                            QQ::Equal(QQN::IssuedItems()->Date,date('Ymd', strtotime($this->calDate1->Text)))
                                            ));
                        foreach ($issues as $issue){
                            //  $from = explode(' ', $issue->ReturnedDate)
                ?>
                  
                        <tr> 
                            <td><div align="center"><?php _p($this->lbldelete2[$issue->IdissuedItems]->Render())?></div></td>
                            <td><div align="center"> <?php _p($sr++)?></div></td>
                            <td style="cursor:pointer" onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/issue_register.php?id=<?php _p($issue->IdissuedItems)._p('&mem='.$_GET['mem'])._P('&fdate='.date('Ymd',  strtotime($_GET['fdate']))); ?>'"><div align="center"><?php _p($issue->ItemObject)?></div></td>
                            <td><div align="center"><?php _p($issue->SerialsObject->Code)?></div></td>
                            <td><div align="center"><?php _p($issue->Description)?></div></td>
                            <td><div align="center"><?php if($issue->ReturnedDate){?><?php _p(date('Y-m-d',  strtotime($issue->ReturnedDate)));}?></div></td>
                            <td><div align="center"> <?php _p($this->chkrtDate[$issue->IdissuedItems]->Render())?></div></td>
                        </tr>
                        <div style="clear: both;"></div>
                <?php }} ?>
            <div style="clear: both;"></div>
            <tr>
                <td width="18%" colspan="3"><div style="margin-left: 10px;"><?php $this->lstitem->Render(); ?></div></td> 
                <td width="15%"><?php $this->lstserial->Render(); ?></td>
                <td width="21%"><?php $this->txtDescription->Render(); ?></td>
                <td width="15%" colspan="2"><?php $this->btnSave1->Render(); ?></td>
            </tr>        
        </table>
         <div class="form-actions">  
            <a href="inward_outward.php?cat=4">
                <div class="btn btn-warning" style="float: right;"><i class="fa fa-save"></i> Save</div>    
            </a>
             <div style="clear: both; "></div>
        </div>
    <?php } ?>
    
</div>
<div style="clear: both"></div>
<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
