<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<?php
$recpts = 0;
$pays= 0;
?>
<script language="javascript">
	function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formprint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script>
<div class="form-controls" id="fromControls">
    

<?php if($this->calfrom->Text != "" && $this->calto->Text != ""){
        $from = date('Ymd',  strtotime($this->calfrom->Text));
        $to = date('Ymd', strtotime($this->calto->Text));        
    ?>
    
    <div class="pull-left" style="width: 10%">
        <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
    
    <div class="pull-right" style="width: 90%">
        <table width="100%" border="0">    
            <tr>
                <td><?php $this->calfrom->RenderWithName(); ?></td>
                <td><?php $this->calto->RenderWithName(); ?></td>
                <td><?php $this->chkDetails->Render(); ?>&nbsp;&nbsp;Details</td>
            </tr>
        </table>
    </div>
    

  <div style="clear: both;"></div>
  <div id="formprint" align="center" style="line-height:25px; ">
      
      <div style="text-align: center">        
         <h3>
            <?php
                $actcpy = Settings::LoadByName("Active Company");
                $company = Role::LoadByIdrole($actcpy->Option);
                $add = Address::LoadArrayByRoll($company->Idrole);
                if($add) _p($company->Name.','.$add[0]->AddressLine1.','.$add[0]->Contact1);
               
            ?>
        </h3>
          <h4><strong>Profit & Loss</strong></h4>
        <h4><?php _p('From '.' ' .$this->calfrom->Text.'  '.'To '.' ' .$this->calto->Text);?></h4>
    </div>
    <table border="1" style="width: 100%;line-height: 30px;">
        <tr>
          <th colspan="5">&nbsp;</th>
        </tr>
        <tr>
            <th><div align="center">Particulars</div></th>
            <th><div align="center"><?php _p($this->calfrom->Text.' to '.$this->calto->Text); ?></div></th>
            <th colspan="2"><div align="center">Particulars</div></th>
            <th><div align="center"><?php _p($this->calfrom->Text.' to '.$this->calto->Text); ?></div></th>
        </tr>
        <tr>
            <td colspan="2" style="width:30%;" valign="top" >
                <?php $dr = $cr = 0; ?>
                <table border="0" style="width: 100%;">                    
                    <tr>
                        <td style="width: 60%; padding-left:5px;"><b>Opening Stock</b><br/>
                        <?php
                            $openingstocks = Voucher::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->CrObject->Code, "D32"),//code for opeingstock ledger is D32
                                QQ::LessOrEqual(QQN::Voucher()->Date, $from.'235959')//,
                                //QQ::Equal(QQN::Voucher()->Department, $_GET['dept'])
                                    )
                                );
                            
                                $stockamt = 0.00;
                                $ledgers = array();
                                    foreach ($openingstocks as $openingstock){
                                        $stockamt = $stockamt + $openingstock->Amount;
                                        
                                        if (array_key_exists($openingstock->Dr, $ledgers))
                                        $ledgers[$openingstock->Dr] = $ledger[$openingstock->Dr] + $openingstock->Amount;
                                        else
                                        $ledgers[$openingstock->Dr] = $openingstock->Amount;
                                    }                                    
                        ?>
                        </td>
                        <td></td>
                        <td valign="top">
                            <div align="right" style="margin-right: 5px;">
                            <?php _p(number_format($stockamt,2,'.','')); $dr = $dr + $stockamt; ?>&nbsp;
                        </div></td>
                    </tr>
                    <?php
                    //if($this->chkDetails->Checked == TRUE){
                    /*
                    if(5 == 6){
                       foreach ($ledgers as $key => $ledger){ 
                            $led = Ledger::LoadByIdledger($key);
                    ?>    
                    <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($_GET['from']); ?>&to=<?php _p($_GET['to']); ?>')">
                        <td>&nbsp;<?php _p($led->Name); ?></td>
                       <td><?php _p(number_format($ledger, 2, '.', '')); ?></td>
                       <td></td>
                    </tr>
                    <?php }}*/ ?>    
                    
                    <tr>
                        <td style="width: 60%; padding-left:5px;"><b>Purchase Accounts</b></td>
                        <td><?php
                            $purchasevovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->DrObject->Code, "D31"),
                                        //QQ::Equal(QQN::Voucher()->Cat, 1),
                                        QQ::LessOrEqual(QQN::Voucher()->Date, $to.'235959'),        
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date, $from.'000000')
                                        ));                                
                            $vovarr = array();
                            $amt = 0;
                            foreach ($purchasevovs as $purchasevov){
                                if(isset($vovarr[$purchasevov->Cr])){
                                    $vovarr[$purchasevov->Cr] = $vovarr[$purchasevov->Cr] + $purchasevov->Amount;
                                }else{
                                    $vovarr[$purchasevov->Cr] = $purchasevov->Amount;
                                }
                                
                                $amt = $amt + $purchasevov->Amount;
                            }
                            ?>
                        </td>
                        <td valign="top">
                            <div align="right" style="margin-right: 5px;">
                              <?php _p(number_format($amt,2,'.',''));  $dr = $dr + $amt; ?>&nbsp;</div></td>
                    </tr>
                    <?php
                    if($this->chkDetails->Checked == TRUE){
                    foreach ($vovarr as $key=>$vov){
                        $led = Ledger::LoadByIdledger($key);
                    ?>
                   <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>')">
                       <td><div style="margin-left: 15px;"><?php _p($led->Name); ?></div></td>
                    <td><?php _p(number_format($vov,2,'.','')); ?></td>
                    <td></td>
                    </tr>
                    <?php }} ?>
                    <tr>
                        <td style="width: 60%; padding-left:5px;"><b>Direct Expenses</b></td>
                        <td><?php
                            $purchasevovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Code, "D8"),
                                        QQ::LessOrEqual(QQN::Voucher()->Date, $to.'235959'),
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date, $from.'000000')
                                        ));                                
                            $vovarr = array();
                            $amt = 0;
                            foreach ($purchasevovs as $purchasevov){
                                if(isset($vovarr[$purchasevov->Dr])){
                                    $vovarr[$purchasevov->Dr] = $vovarr[$purchasevov->Dr] + $purchasevov->Amount;
                                }else{
                                    $vovarr[$purchasevov->Dr] = $purchasevov->Amount;
                                }
                                
                                $amt = $amt + $purchasevov->Amount;
                            }
                            ?>
                        </td>
                        <td valign="top">
                            <div align="right" style="margin-right: 5px;">
                              <?php _p(number_format($amt,2,'.','')); $dr = $dr + $amt; ?>&nbsp;</div></td>
                    </tr>
                    <?php
                    if($this->chkDetails->Checked == TRUE){
                    foreach ($vovarr as $key=>$vov){
                        $led = Ledger::LoadByIdledger($key);
                    ?>
                    <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>')">
                        <td><div style="margin-left: 15px;"><?php _p($led->Name); ?></div></td>
                    <td><?php _p(number_format($vov,2,'.','')); ?></td>
                    <td></td>
                    </tr>
                    <?php }} ?>
                </table>
            </td>
            
            <td colspan="3" style="width:30%;" valign="top" >
                <table border="0" style="width: 100%;">                    
                    <tr>
                        <td style="width: 60%; padding-left:5px;"><b>Sale Accounts</b></td>
                        <td><?php
                            $purchasevovs = Voucher::QueryArray(
                                        QQ::AndCondition(                                                
                                        QQ::Equal(QQN::Voucher()->CrObject->Code, "D30"),
                                        //QQ::Equal(QQN::Voucher()->Cat, 2),
                                        QQ::LessOrEqual(QQN::Voucher()->Date, $to.'235959'),        
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date, $from.'000000')
                                        ));                                
                            $vovarr = array();
                            $amt = 0;
                            foreach ($purchasevovs as $purchasevov){
                                if(isset($vovarr[$purchasevov->Dr])){
                                    $vovarr[$purchasevov->Dr] = $vovarr[$purchasevov->Dr] + $purchasevov->Amount;
                                }else{
                                    $vovarr[$purchasevov->Dr] = $purchasevov->Amount;
                                }
                                
                                $amt = $amt + $purchasevov->Amount;
                            }
                            ?>
                        </td>
                        <td valign="top">
                            <div align="right" style="margin-right: 5px;">
                              <?php _p(number_format($amt,2,'.',''));   $cr = $cr + $amt; ?>&nbsp;</div></td>
                    </tr>
                    <?php
                    if($this->chkDetails->Checked == TRUE){
                    foreach ($vovarr as $key=>$vov){
                        $led = Ledger::LoadByIdledger($key);
                    ?>
                    <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>')">
                        <td><div style="margin-left: 15px;"><?php _p($led->Name); ?></div></td>
                    <td><?php _p(number_format($vov,2,'.','')); ?></td>
                    <td></td>
                    </tr>
                    <?php }} ?>
                    
                    <tr>
                        <td style="width: 60%; padding-left:5px;"><b>Direct Incomes</b></td>
                        <td><?php
                            $purchasevovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Code, "D7"),
                                        QQ::LessOrEqual(QQN::Voucher()->Date, $to.'235959'),
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date, $from.'000000')
                                        ));
                            $vovarr = array();
                            $amt = 0;
                            foreach ($purchasevovs as $purchasevov){
                                if(isset($vovarr[$purchasevov->Cr])){
                                    $vovarr[$purchasevov->Cr] = $vovarr[$purchasevov->Cr] + $purchasevov->Amount;
                                }else{
                                    $vovarr[$purchasevov->Cr] = $purchasevov->Amount;
                                }
                                
                                $amt = $amt + $purchasevov->Amount;
                            }
                            ?>
                        </td>
                        <td valign="top">
                            <div align="right" style="margin-right: 5px;">
                              <?php _p(number_format($amt,2,'.','')); $cr = $cr + $amt; ?>&nbsp;</div></td>
                    </tr>
                    <?php
                    if($this->chkDetails->Checked == TRUE){
                    foreach ($vovarr as $key=>$vov){
                        $led = Ledger::LoadByIdledger($key);
                    ?>
                    <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>')">
                        <td><div style="margin-left: 15px;"><?php _p($led->Name); ?></div></td>
                    <td><?php _p(number_format($vov,2,'.','')); ?></td>
                    <td></td>
                    </tr>
                    <?php }} ?>
                    <tr>
                    <?php /* ?>    
                    <tr>
                        <td><b>Closing Stock</b></td>
                        <td>
                            <?php 
                            $pps = ProductPrice::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::ProductPrice()->Date, date('Ymd')),
                                        QQ::OrCondition(
                                            QQ::Equal(QQN::ProductPrice()->ProductObject->GroupObject->SubGroup, 6),
                                            QQ::Equal(QQN::ProductPrice()->ProductObject->GroupObject->SubGroup, 36)
                                            )
                                    ));
                            $amt = 0;
                            foreach ($pps as $pp){
                                $amt = $amt + $pp->Closinng * $pp->ProductObject->PurchasePrice;
                            }
                            ?>
                        </td>
                        <td valign="top"><div align="right"><?php _p(number_format($amt, 2, '.', '')); ?></div></td>
                    </tr>
                   <?php */ ?>
                </table>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" style="border-top:none;border-bottom: none;border-left:none;">
                <?php 
                $grossprofit = $dr - $cr;
                if($grossprofit < 0){
                ?>
                <table border="0" style="width: 100%;">                    
                   <tr>
                         <td style="width: 60%; padding-left:5px;"><b>Gross Profit c/o</b></td>
                         <td style="width: 20%;"></td>
                         <td style="width: 20%;" valign="top">
                             <div align="right" style="margin-right: 5px;">
                       <?php _p(number_format($grossprofit * -1,2,'.','')); ?>&nbsp;</div></td>
                     </tr>
                 </table>
                 <?php } ?>
            </td>
            
            <td colspan="3" style="border-top:none;border-bottom: none;border-left:none;">
                <?php 
                    if($grossprofit > 0){
		?>
                 <table border="0" style="width: 100%;">                    
                    <tr>
                         <td style="width: 60%; padding-left:5px;"><b>Gross Loss c/o</b></td>
                         <td style="width: 20%;"></td>
                        <td style="width: 20%;" valign="top">
                             <div align="right" style="margin-right: 5px;">
                       <?php _p(number_format($grossprofit,2,'.','')); ?>&nbsp;
                             </div>
                        </td>
                    </tr>
                 </table>
                 <?php } ?>
            </td>
        </tr>
        
         <tr>
             <td colspan="2" style="border-top:none;border-bottom: none;border-left:none;">
                <table border="0" style="width: 100%;">                    
                    <tr>
                        <td style="width: 60%;"></td>
                        <td style="width: 20%;"></td>
                        <td style="width: 20%; border-top:1px solid #000;border-bottom:1px solid #000; " valign="top">
                            <div align="right" style="margin-right: 5px;"><?php if($dr > $cr) _p(number_format($dr,2,'.','')); else _p(number_format($cr,2,'.','')); ?>&nbsp;</div></td>
                    </tr>
                </table>
            </td>
            <td colspan="3" style="border-top:none;border-bottom: none;border-left:none;"   >
                <table border="0" style="width: 100%;">                    
                    <td style="width: 60%;"></td>
                    <td style="width: 20%;"></td>
                    <td style="width: 20%;border-top:1px solid #000;border-bottom:1px solid #000; " valign="top">
                        <div align="right" style="margin-right: 5px;">
                          <?php if($dr > $cr) _p(number_format($dr,2,'.','')); else _p(number_format($cr,2,'.','')); ?>&nbsp;
                        </div></td>
                </table>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" style="border-top:none;border-bottom: none;border-left:none;">
                <?php 
                $grossprofit = $dr - $cr;
                if($grossprofit > 0){
                ?>
                <table border="0" style="width: 100%;">                    
                   <tr>
                         <td style="width: 60%; padding-left:5px;" ><b>Gross Profit c/o</b></td>
                         <td style="width: 20%;" ></td>
                         <td style="width: 20%;" valign="top">
                             <div align="right" style="margin-right: 5px;">
                       <?php _p(number_format($grossprofit,2,'.','')); ?>&nbsp;</div></td>
                     </tr>
                 </table>
                 <?php } ?>
            </td>
            
            <td colspan="3" style="border-top:none;border-bottom: none;border-left:none;">
                <?php 
                    if($grossprofit < 0){
		?>
                 <table border="0" style="width: 100%;">                    
                    <tr>
                         <td style="width: 60%; padding-left:5px;"><b>Gross Loss b/f</b></td>
                         <td style="width: 20%;"></td>
                        <td style="width: 20%;" valign="top">
                             <div align="right" style="margin-right: 5px;">
                       <?php _p(number_format($grossprofit * -1,2,'.','')); ?>&nbsp;
                             </div>
                        </td>
                    </tr>
                 </table>
                 <?php } ?>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" style="border-top:none;border-bottom: none;border-left:none;">
                <table style="width: 100%;">
        <tr>    <td style="width: 60%; padding-left:5px;"><b>InDirect Expenses</b></td>
                        <td style="width: 20%;"><?php
                            $purchasevovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->DrObject->GrpObject->Code, "D9"),
                                        QQ::LessOrEqual(QQN::Voucher()->Date, $to.'235959'),        
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date, $from.'000000')
                                        ));                                
                            $vovarr = array();
                            $amt = 0;
                            foreach ($purchasevovs as $purchasevov){
                                if(isset($vovarr[$purchasevov->Dr])){
                                    $vovarr[$purchasevov->Dr] = $vovarr[$purchasevov->Dr] + $purchasevov->Amount;
                                }else{
                                    $vovarr[$purchasevov->Dr] = $purchasevov->Amount;
                                }
                                
                                $amt = $amt + $purchasevov->Amount;
                            }
                            ?>
                        </td>
                        <td valign="top" style="width: 20%;">
                            <div align="right" style="margin-right: 5px;">
                              <?php _p(number_format($amt,2,'.','')); $dr = $dr + $amt; ?>&nbsp;</div></td>
                    </tr>
                    <?php
                    if($this->chkDetails->Checked == TRUE){
                    foreach ($vovarr as $key=>$vov){
                        $led = Ledger::LoadByIdledger($key);
                    ?>
                    <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>')">
                        <td><div style="margin-left: 15px;"><?php _p($led->Name); ?></div></td>
                    <td><?php _p(number_format($vov,2,'.','')); ?></td>
                    <td></td>
                    </tr>
                    <?php }} ?>
                    </table>
            </td>
            
            <td colspan="3" style="border-top:none;border-bottom: none;border-left:none;">
                <table style="width: 100%;">
        <tr>    <td style="width: 60%; padding-left:5px;"><b>InDirect Income</b></td>
                        <td style="width: 20%;"><?php
                            $purchasevovs = Voucher::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->CrObject->GrpObject->Code, "D7"),
                                        QQ::LessOrEqual(QQN::Voucher()->Date, $to.'235959'), 
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date, $from.'000000')
                                        ));                                
                            $vovarr = array();
                            $amt = 0;
                            foreach ($purchasevovs as $purchasevov){
                                if(isset($vovarr[$purchasevov->Cr])){
                                    $vovarr[$purchasevov->Cr] = $vovarr[$purchasevov->Cr] + $purchasevov->Amount;
                                }else{
                                    $vovarr[$purchasevov->Cr] = $purchasevov->Amount;
                                }
                                
                                $amt = $amt + $purchasevov->Amount;
                            }
                            ?>
                        </td>
                        <td valign="top" style="width: 20%;">
                            <div align="right" style="margin-right: 5px;">
                              <?php _p(number_format($amt,2,'.','')); $cr = $cr + $amt; ?>&nbsp;</div></td>
                    </tr>
                    <?php
                    if($this->chkDetails->Checked == TRUE){
                    foreach ($vovarr as $key=>$vov){
                        $led = Ledger::LoadByIdledger($key);
                    ?>
                    <tr onclick="window.open('ledger_report_edit.php?ledger=<?php _p($key); ?>&from=<?php _p($from); ?>&to=<?php _p($to); ?>')">
                        <td><div style="margin-left: 15px;"><?php _p($led->Name); ?></div></td>
                    <td><?php _p(number_format($vov,2,'.','')); ?></td>
                    <td></td>
                    </tr>
                    <?php }} ?>
                    </table>
            </td>
        </tr>
                <tr>
            <td colspan="2" style="border-top:none;border-bottom: none;border-left:none;">
                <?php 
                $grossprofit = $dr - $cr;
                
                $led = Ledger::LoadByCode("D33");
                $led->Description = number_format($grossprofit,2,'.','');
                $led->Save();
                
                if($grossprofit < 0){
                ?>
                <table border="0" style="width: 100%;">                    
                   <tr>
                         <td style="width: 60%; padding-left:5px;"><b>NET Profit</b></td>
                         <td style="width: 20%;"></td>
                         <td style="width: 20%;" valign="top">
                             <div align="right" style="margin-right: 5px;">
                       <?php _p(number_format($grossprofit * -1,2,'.',''));  ?>&nbsp;</div></td>
                     </tr>
                 </table>
                 <?php } ?>
            </td>
            
            <td colspan="3" style="border-top:none;border-bottom: none;border-left:none;">
                <?php 
                    if($grossprofit > 0){
		?>
                 <table border="0" style="width: 100%;">                    
                    <tr>
                         <td style="width: 60%; padding-left:5px;"><b>NET Loss</b></td>
                         <td style="width: 20%;"></td>
                        <td style="width: 20%;" valign="top">
                             <div align="right" style="margin-right: 5px;">
                       <?php _p(number_format($grossprofit,2,'.','')); ?>&nbsp;
                             </div>
                        </td>
                    </tr>
                 </table>
                 <?php } ?>
            </td>
        </tr>
    </table>
    </div>
    <div style="clear: both;"></div>
</div>
<?php } ?>
<?php $this->RenderEnd() ?>

