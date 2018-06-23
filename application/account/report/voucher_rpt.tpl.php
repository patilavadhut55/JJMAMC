<script language="javascript">
        function Clickheretoprint(){
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("formPrint").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css"); .printhide{ display: none;} </style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>
<style>
    .hide{
        display: none;
    }
</style>


<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        
<div style="margin-bottom: 0px; ">
            
    <?php $cats = VoucherGrp::LoadAll();
          $key = 1;                                      
    ?>  
    <?php ?>
    <div class="tabbable-panel" style="border: none;">
        <div class="tabbable-line">
            <ul class="nav nav-tabs">
            <?php $tab = 1; 
            foreach ($cats as $cat){ ?>
                <li class="<?php if(isset($_GET['cat']) && $_GET['cat'] == $tab){ ?>active<?php } ?>">                                        
                    <a href="voucher_rpt.php?cat=<?php _p($cat->IdvoucherGrp); ?>" accesskey="1">
                        <?php _p($cat->Name); ?>
                    </a>
                </li>
            <?php $tab++; } ?>
            </ul>
            <ul>
                <?php $this->txtQuick->Render(); ?>
            </ul>
        </div>
    </div>                                     
</div>         
<div class="form-controls">    
    <div class="pull-right" style="width: 100%">
            <table width="100%" border="0">
                <tr>
                    <td width="5%" valign="middle">Ledger&nbsp;&nbsp;&nbsp;</td>
                    <td width="26%"><?php $this->txtmember->Render(); ?></td>
                    <td width="5%" valign="middle">From</td>
                    <td width="10%"><?php $this->calFromDate->Render(); ?></td>
                    <td width="5%" valign="middle">&nbsp;&nbsp;&nbsp;To</td>
                    <td width="14%"><?php $this->calToDate->Render(); ?></td>
                    <td width="5%" valign="middle">Verified&nbsp;&nbsp;&nbsp;</td>
                    <td width="12%"><?php $this->lstveri->Render(); ?></td>
                    <td width="18%"><?php $this->btnReport->Render(); ?></td>
              </tr>
            </table>
        <!--div style="padding: 1px;" class="col-md-8">
            <div class="pull-left" style=""><?php  $this->txtSearch->RenderWithName(); ?></div>
            <div class="pull-left" style="margin-top: 4px; margin-left: 5px;"><?php $this->btnSearch->Render(); ?></div>
            <div style="clear: both;"></div>
        </div-->
    </div>
    <div class="pull-left" style="width: 10%">
    <a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
    </a>
    </div><div style="clear: both"></div>


<?php
   if(isset($_GET["tdate"])) {
?>

<div id="formPrint" align="center">
<h2><?php _p($this->txtmember->SelectedName); ?> </h2>
<h3><?php  
    if(isset($_GET['cat']) != 7){ 
        $cat = VoucherGrp::LoadByIdvoucherGrp($_GET['cat']);
        _p($cat->Name.' Report ');   ?>From <?php _p($this->calFromDate->Text); ?> To <?php _p($this->calToDate->Text); 
    }
    if(isset($_GET['cat']) == 7){
          _p('Reconciliation Report ');  ?>From <?php _p($this->calFromDate->Text); ?> To <?php _p($this->calToDate->Text);
      }   
    ?>
    
    
</h3>
<table width="839" border="1" class="datagrid">
  <tr>
    <th width="25"><div align="center">Sr</div></th>
    <th class="hide" width="84"><div align="center">Date</div></th>
    <th class="hide"  width="300"><div align="center">Particulars</div></th>
    <th width="75"><div align="center">Challan No.</div></th>
    <th width="97"><div align="center">Amount</div></th>
    <?php if(isset($_GET['cat'])){ ?>
<th width="97" class="printhide"><div align="center">Reconcile</div></th>
    <?php } ?>
  </tr>
<?php 
    
    
    $Sr =1;
    $tdisc = $ttax = $maintotal = $total = 0;
    foreach ($this->voutures as $vouture){
        if($vouture->DrObject->Code == "D34" || $vouture->CrObject->Code == "D34"){}else{
?>
    <?php 
        if(isset($_GET['verify']) && $_GET['verify'] == 1){
            if($vouture->ApprovedBy != NULL){
    ?>
        <tr>
            <td align="Center"><?php _p($Sr); $Sr = $Sr + 1; ?></td>
            <td class="hide"  align="Center"><?php _p(date('d/m/Y', strtotime($vouture->Date))); ?></td>
            <td class="hide" >
                <div  class="printhide"><?php _P('By '.$vouture->DrObject.'<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To ', FALSE);?></div>
                <?php _p($vouture->CrObject);?>
                <div class="printhide"> <?php _p('<br/><div style="text-align: right;">'.$vouture->Narration.'</div>', FALSE); ?></div>
            </td>

            <td align="Center"><?php _p($vouture->InvNo); ?></td>
            <td align="right">
                <?php 
                    $tamt = 0;    
                    $subvovs = Voucher::QueryArray(
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, $vouture->Idvoucher),
                                QQ::Equal(QQN::Voucher()->Idvoucher, $vouture->Idvoucher)
                            ));
                            foreach($subvovs  as $subvov){    
                                $tamt = $tamt + $subvov->Amount;
                            }
                            _p(number_format($tamt, 2,'.','')); 
                            //if($vouture->ApprovedBy != NULL){
                                $maintotal = $maintotal + $tamt ;
                            //}
                            $total = $total + $tamt ;
                ?>          
            </td>
            <?php if(isset($_GET['cat'])){?>
            <td class="printhide">
                <div style="margin-left: 50px;">
                    <div style="float: left; width: 10%;"><?php $this->chkApprove[$vouture->Idvoucher]->Render(); ?></div>
                    <div style="float: left;  width: 50%;"><?php $this->lbldate[$vouture->Idvoucher]->Render(); ?></div>
                    <div style="clear: both;"></div>
                </div>
            </td>
            <?php }?>
        </tr>
    <?php }?>
    <?php 
        }elseif(isset($_GET['verify']) && $_GET['verify'] == 2){
            if($vouture->ApprovedBy == NULL){
    ?>
        <tr>
            <td align="Center"><?php _p($Sr); $Sr = $Sr + 1; ?></td>
            <td class="hide"  align="Center"><?php _p(date('d/m/Y', strtotime($vouture->Date))); ?></td>
            <td class="hide" >
                <div  class="printhide"><?php _P('By '.$vouture->DrObject.'<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To ', FALSE);?></div>
                <?php _p($vouture->CrObject);?>
                <div class="printhide"> <?php _p('<br/><div style="text-align: right;">'.$vouture->Narration.'</div>', FALSE); ?></div>
            </td>

            <td align="Center"><?php _p($vouture->InvNo .' ' ); ?></td>
            <td align="right">
                <?php 
                    $tamt = 0;    
                    $subvovs = Voucher::QueryArray(
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, $vouture->Idvoucher),
                                QQ::Equal(QQN::Voucher()->Idvoucher, $vouture->Idvoucher)
                            ));
                            foreach($subvovs  as $subvov){    
                                $tamt = $tamt + $subvov->Amount;
                            }
                            _p(number_format($tamt, 2,'.','')); 
                            //if($vouture->ApprovedBy != NULL){
                                $maintotal = $maintotal + $tamt ;
                            //}
                            $total = $total + $tamt ;
                ?>          
            </td>
            <?php if(isset($_GET['cat'])){?>
            <td class="printhide">
                <div style="margin-left: 50px;">
                    <div style="float: left; width: 10%;"><?php $this->chkApprove[$vouture->Idvoucher]->Render(); ?></div>
                    <div style="float: left;  width: 50%;"><?php $this->lbldate[$vouture->Idvoucher]->Render(); ?></div>
                    <div style="clear: both;"></div>
                </div>
            </td>
            <?php }?>
        </tr>
    <?php }?>
    <?php 
        }elseif((isset($_GET['verify']) && $_GET['verify'] == 3) || !isset($_GET['verify'])){
    ?>
        <tr>
            <td  align="Center"><?php _p($Sr); $Sr = $Sr + 1; ?></td>
            <td class="hide"  align="Center"><?php _p(date('d/m/Y', strtotime($vouture->Date))); ?></td>
            <td class="hide">
                <div  class="printhide"><?php _P('By '.$vouture->DrObject.'<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To ', FALSE);?></div>
                <?php _p($vouture->CrObject);?>
                <div class="printhide"> <?php _p('<br/><div style="text-align: right;">'.$vouture->Narration.'</div>', FALSE); ?></div>
            </td>

            <td align="Center"><?php _p($vouture->InvNo); ?></td>
            <td align="right">
                <?php 
                    $tamt = 0;    
                    $subvovs = Voucher::QueryArray(
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Parrent, $vouture->Idvoucher),
                                QQ::Equal(QQN::Voucher()->Idvoucher, $vouture->Idvoucher)
                            ));
                            foreach($subvovs  as $subvov){    
                                $tamt = $tamt + $subvov->Amount;
                            }
                            _p(number_format($tamt, 2,'.','')); 
                            if($vouture->ApprovedBy != NULL){
                                $maintotal = $maintotal + $tamt ;
                            }
                            $total = $total + $tamt ;
                ?>          
            </td>
            <?php if(isset($_GET['cat'])){?>
            <td class="printhide">
                <div style="margin-left: 50px;">
                    <div style="float: left; width: 10%;"><?php $this->chkApprove[$vouture->Idvoucher]->Render(); ?></div>
                    <div style="float: left;  width: 50%;"><?php $this->lbldate[$vouture->Idvoucher]->Render(); ?></div>
                    <div style="clear: both;"></div>
                </div>
            </td>
            <?php }?>
        </tr>
    <?php }}} ?>
  <tr>
    <th ><div align="center"></div></th>
    <th class="hide"><div align="center"></div></th>
    <th class="hide"><div align="center"></div></th>
    <th><div align="right">Total&nbsp;</div><div align="center"></div></th>
    <th><div align="right"><?php _p(number_format($total, 2,'.','')); ?>&nbsp;</div></th>
    <th class="printhide"><div align="left"><?php _p(number_format($maintotal, 2,'.','')); ?>&nbsp;</div></th>
  </tr>
</table>
   <?php } ?>            
</div>
</div>
      <?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>