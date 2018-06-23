<script language="javascript">
        function Clickheretoprint(){
            var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("formPrint").innerHTML;

            var docprint=window.open("","",disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/table.css");</style><center>');
            docprint.document.write(content_vlue);
            docprint.document.write('</center></body></html>');
            docprint.document.close();
        }
</script>
<?php 
require('../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');

?>
<?php if (isset($_GET['id'])) {
    $req = Voucher::LoadByIdvoucher($_GET['id']);
                $vhps = VoucherHasItem::LoadArrayByVoucher($req->Idvoucher);
                $sr = 0;
                if(isset($_GET['sup'])){
                 $suplier = Ledger::LoadByIdledger($_GET['sup']);
                $adds = Address::LoadArrayByOf($suplier->Idledger);
                 
    ?>
<h1>
    <?php _p('Inquiry Letter'); ?>
</h1>
<div>
    <div style="float: left">
        <a href="javascript:Clickheretoprint()">
             <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
         </a>
    </div>
    <div style="float: right">
        
        <a href='requirement.php?tab=2<?php if(isset($_GET['id'])){ ?>&id=<?php _p($_GET['id']); } ?>'>
            <div class="btn btn-success">Back</div>
        </a>
    </div>
</div>

<div class="form-controls">
    <div id="formPrint" style="overflow: auto;">
        <div style="width:100%; " >
                <div align="center" style="line-height: 20px; margin-left:5%; margin-right:5%; font-family: arial; " >
                        <div style="float:left; margin-left:12%; margin-top: 10px; margin-bottom: 10px; "><img src="../../assets/_core/images/Walchand_11.gif" width="110" height="90" alt="" /></div>
                        <div style="float:right; margin-right:35%; margin-top: 20px; ">
                            <div style="font-size: 16px;"><strong>Dr. J. J. Magdum Trust's</strong></div>
                            <div style="font-size: 16px;"><strong>Dr. J. J Magdum Ayurved Medical College</strong></div>
                            <div style="font-size: 14px; margin-top: 10px;"><strong>Gat No.295, Shirol-Wadi Road, Agarbhag,Jaysingpur-416-101</strong></div>
                        </div>
                         <div style="clear: both"></div>
                </div>
            <div style="clear: both"></div>
      </div>
    <table  style="width: 100%;" border="0" align="center">
            <tr>
                <td><div align="left" style="padding-left:30px;"><strong>Req : </strong><?php _p($req->InvNo); ?></div></td>
                <td><strong>Date: </strong><?php _p(date('d/m/Y',  strtotime($req->Date))); ?></td>
                
            </tr>
             <tr>
                 <td width="63%" valign="top"><div align="left" style="padding-left:30px;"><strong>To,<br></strong>
                  <?php _p($suplier->Name); ?><br><?php if($adds){  foreach ($adds as $add){}    _p($add->AddressLine1);  ?><br>Pin No. <?php _p($add->ZipCode); ?><br>Mobile No.:<?php _p($add->Contact1); ?> <?php } ?>

                </div></td>
                <td></td>
                
            </tr>
          
             <tr>
                 <td colspan="2"><div align="center"><strong>Sub : </strong> <?php _p($req->Narration); ?> </div> </td>
                  
            </tr>
            
           
            <tr>
                <td colspan="2" >
                    <table  border="1" align="center" class="datagrid" style="width: 1000px; margin-top: 15px;" >
                        <tr>
                            
                            <th><div align="center">Sr</div></th>
                            <th><div align="center">Asset</div></th>
                            <th><div align="center"> Qty</div></th>
                            <th><div align="right"> Estimated Rate</div></th>
                            <th><div align="right">Estimated Amount</div></th>
                            <th><div align="center">Remark</div></th>
                            
                        </tr>
                        <?php 
                            $total = 0;
                            if(isset($_GET['id'])){
                            $vov = Voucher::LoadByIdvoucher($_GET['id']);
                            $sr = 1;
                            $vhps = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
                          
                            if($vhps){
                                
                               foreach ($vhps as $vhp){
                        ?>  
                        <tr>
                            
                            <td><?php _p($sr++); ?></td>
                            <td><?php _p($vhp->ItemObject); ?></td>
                            <td>
                                <div align="center">
                                    <?php
                                    $total = $total + $vhp->Qty;
                                    _p($vhp->Qty); ?>
                                </div>
                            </td>
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
                            <td>
                                <div><?php  _p($vhp->Remark); ?></div>
                            </td>
                           
                        </tr>
                        <?php }}} ?>
    </table>
                </td>
            </tr>
            <tr>
                <td><strong>Total Qty :</strong> <?php _p($total); ?></td>
                <td><strong>Total Amount : </strong> <?php _p($vov->Amount); ?> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Terms & Condition : </strong><br>
                    <div style="margin-left: 20px; margin-right: 20px; line-break: strict;" ><?php _p($vov->Warranty); ?>
                    </div>
                </td>
            </tr>
    </table>
        <div style="float: right; line-height: 100px;">
            <strong>Signature Of Authorities</strong>
        </div>
    </div>
</div>

<?php }} ?>
