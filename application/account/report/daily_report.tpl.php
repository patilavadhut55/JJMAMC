<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
        <script language="javascript">
                function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formPrint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
        </script>
         
<div class="form-controls">    
    <div class="pull-right" style="width: 100%">
            <table width="100%" border="0">
                <tr>
                    <td width="5%" valign="middle">From</td>
                    <td width="10%"><?php $this->calFromDate->Render(); ?></td>
                    <td width="5%" valign="middle">&nbsp;&nbsp;&nbsp;To</td>
                    <td width="14%"><?php $this->calToDate->Render(); ?></td>
                    <td width="18%"><?php $this->btnReport->Render(); ?></td>
              </tr>
            </table>
        
    </div>
    <div class="pull-left" style="width: 10%">
    <a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
    </a>
    </div><div style="clear: both"></div>
	<?php $this->RenderEnd() ?>


<div id="formPrint">
<?php if(isset($_GET['tdate']) && isset($_GET['fdate'])){ ?>
<table border="1" class="datagrid">
  <tr>
    <th><div align="center">Sr</div></th>
    <th><div align="center">Date</div></th>
    <th><div align="center">PRN</div></th>
    <th><div align="center">Challan No.</div></th>
    <th><div align="center">Student Name</div></th>
    <th><div align="center">Year</div></th>
    <th><div align="center">Category</div></th>
    <th><div align="center">Amount</div></th>
  </tr>
<?php 
    $maintotal = 0;
    $voutures = Voucher::QueryArray(
                QQ::AndCondition(
                    QQ::GreaterOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['fdate'])).'000000'),
                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd', strtotime($_GET['tdate'])).'235959'),
                    QQ::Equal(QQN::Voucher()->CrObject->Grp, 5454), //Fees
                    QQ::Equal(QQN::Voucher()->Parrent ,NULL)
                )
            );
        $Sr = 1;
    
    foreach ($voutures as $vouture){
       $profile = Profile::LoadByIdprofile($vouture->Dr);
?>
   <tr >
    <td align="Center"><?php _p($Sr++);?></td>
    <td align="Center"><?php _p(date('d/m/Y', strtotime($vouture->Date))); ?></td>
    <td align="Center"><?php _p($vouture->DrObject->Code); ?></td>
    <td align="Center"><?php _p($vouture->InvNo);?></td>
    <td><?php _p(get_full_name($vouture->DrObject->Name)); ?></td>
    <td align="Center"> <?php _p($vouture->AcademicYearObject); ?></td>
    <td align="Center"><?php if($profile->FeeConcession){ _p($profile->FeeConcessionObject->Name); }else{ _p('OPEN'); } ?></td>
    <td align="right"><?php 
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
                $maintotal = $maintotal + $tamt ;
        ?></td>
  </tr>
    <?php } ?>
    <tr>
       <th colspan="7">Total</th>
       <th><?php _p(number_format($maintotal, 2,'.',',')); ?></th>
    </tr>
  
</table>
<?php }?>           
</div>
</div>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>