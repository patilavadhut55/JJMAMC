
<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<?php
$login = Login::LoadByIdlogin($_SESSION['idlogin']);
$recpts = 0;
$pays= 0;
?>
<div id="titleBar">
    <?php _p('Purchase Order Report'); ?>
</div>
<div id="formControls">
<table width="800" border="0">
  <tr>
    <td width="198">From&nbsp;&nbsp;&nbsp;<?php $this->calfrom->Render(); ?></td>
    <td width="224">To&nbsp;&nbsp;&nbsp;<?php $this->calto->Render(); ?></td>
    <td width="260"><?php $this->ChkUsed->RenderWithName(); ?></td>
    <td width="100"><?php $this->Srchbtn->Render(); ?></td>
  </tr>
  </table>
</div>
<?php if(isset($_GET["from"])){
        $from=$_GET['from'];
        $to = $_GET['to'];
        
    ?>
<script language="javascript">
	function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("print").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles.css");</style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>  
<script src="dragtable.js"></script>
<script src="jquery-latest.js"></script>
<table>
<tr><td>
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
</td>
</tr>

<tr><td>
<div id="print" style="background-color: #FFF;">
<table width="884" border="1" style="line-height: 20px;">
<tr>
<td width="874">
<table width="853" border="0">
  <tr>
    <td width="847" height="39" colspan="2" align="center"><div style="float: left; font-size:18px"><strong>&nbsp;&nbsp;Purchase Order Report&nbsp;&nbsp;&nbsp;From&nbsp;&nbsp;&nbsp;<?php _p( $this->calfrom->Text); ?>&nbsp;&nbsp;&nbsp; To&nbsp;&nbsp;&nbsp;<?php _p( $this->calto->Text); ?></strong></div></td>
  </tr>
  <tr>
      <td height="39" colspan="2" align="center"><h3><div style="float: right;"></div></h3>
       <?php if(isset($_GET['from'])) {
           
        ?>
          <table width="885" border="1" class="draggable sortable">
          <tr>
            <td width="39" height="38"><div align="center"><strong>Sr.</strong></div></td>
            <td width="84"><div align="center"><strong>Date</strong></div></td>
            <td width="249"><div align="center"><strong>Title</strong></div></td>
            <td width="181"><div align="center"><strong>Particulars</strong></div></td>
            <td width="80"><div align="center"><strong>Total Qty</strong></div></td>
            <td width="100"><div align="center"><strong>Amount</strong></div></td>
            <td width="106"><div align="center"><strong>Completed</strong></div></td>
          </tr>
        <?php 
        $from = $_GET['from'];
        $to = $_GET['to'];
        $status = $_GET['usedchk'];
        if($status == 1){
           $reqs =  Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($from))),
                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($to))) ,
                    QQ::Equal(QQN::Voucher()->Lock, 1),
                    QQ::Equal(QQN::Voucher()->Cat, 1)        
                           )); 
        }else {
            $reqs = Voucher::QueryArray(
                    QQ::AndCondition(
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($from))),
                    QQ::LessOrEqual(QQN::Voucher()->Date, date('Ymd',  strtotime($to))) ,
                    QQ::NotEqual(QQN::Voucher()->Lock, 1),
                    QQ::Equal(QQN::Voucher()->Cat, 1)             
                           ));         
        }
         $sr = 0;
         foreach ($reqs as $req){
           
            $sr = $sr + 1;
        ?>  
          <tr>
            <td height="50"><div align="center">
                <?php _p($sr); ?>
              </div></td>
            <td><div align="center">
                <?php _p(Date('d/m/Y', strtotime($req->Date))); ?>
              </div></td>
            <td><div align="center">
                <?php _p($req->Titlte); ?>
              </div></td>
            <td><div align="center">
                <?php _p($req->ToObject); ?>
              </div></td>
            <td><div align="center">
                <?php _p($req->TotalQty); ?>
              </div></td>
            <td><div align="center">
                <?php _p($req->Amount); ?>
              </div></td>
            <td><div align="center">
                <?php if($req->Lock ==1) { ?>
                <?php _p('completed'); ?><?php }else ( _p('In Process')); ?>
              </div></td>
          </tr>
        <?php }?>
          
        </table>
       <?php } ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="center"></div></td>
  
  </tr>
  <tr>
    <td valign="top"><div align="right"></div></td>
  
  </tr>
  </table>
</td>
</tr>
</table>
</div>
</td></tr>
</table>
<?php } ?>
<?php $this->RenderEnd() ?>

