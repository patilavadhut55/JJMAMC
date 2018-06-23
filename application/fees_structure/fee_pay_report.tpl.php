<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

<div class="form-controls">
<table width="910" border="0">
  <tr>
    <td width="421"><?php $this->lstCourse->RenderWithName(); ?></td>
    <td width="434"><?php $this->lstSemister->RenderWithName(); ?></td>
  </tr>
  <tr>
    <td><?php $this->lstYear->RenderWithName(); ?></td>
    <td><?php $this->btnShow->Render(); ?></td>
  </tr>
</table>
     </div>

<?php if(isset($_GET['year'])){ ?>
        
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
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<div class="form-controls">
<div id="formPrint">
<?php
    $year = AcademicYear::LoadByIdacademicYear($_GET['year']);
?>
<div id="titleBar">
    <?php 
        if (isset($_GET['course']))
            $course = Role::LoadByIdrole($_GET['course']);
            _p($this->lstCourse->SelectedName.' - '); ?> Fees Statement <?php _p($this->lstSemister->SelectedName); 
    ?>
</div>
    
    <table border="1" style="font-size:12px;" class="datagrid">
  <tr>
      
    <th width="31" rowspan="2">Sr</th>
    <th width="59" rowspan="2">Code</th>
    <th width="200" rowspan="2">Name</th>
    <th width="200" rowspan="2">Category</th>
    <th colspan="3"></th>
    <th colspan="2"> Institute Level</th>
     <th colspan="2"> Scholarship</th>
   
  </tr>
    
  <tr>
     
    <th width="60">Total Fee</th>
    <th width="76">Paid</th>
    <th width="71">PENDING DUES</th>
    <th width="60">TUTION FEE</th>
    <th width="76">DEV. FEE</th>
       <th width="60">TUTION FEE</th>
    <th width="76">DEV. FEE</th>
 
  </tr>
    
  <?php 
  
    $sr = 1;
  
      $gtpay = $gtpaid = $stpaid = $stpay = $itution = $idev = $ipaid =  0;
      ?>
<?php    
    $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue)
                    )
                ); 
    foreach ($currents as $current){
      
    $gpay = $spay = $gpaid = $spaid =0; 
     $vhps = Voucher::QueryArray(
            QQ::AndCondition(                
                QQ::Equal(QQN::Voucher()->AcademicYear , $current->Semister),                
                QQ::Equal(QQN::Voucher()->DrObject->Grp,  $current->Student),
                QQ::Equal(QQN::Voucher()->Grp, 6)
            )
        );
     
    if($vhps){
        foreach ($vhps as $vhp){
            $gpay = $gpay + $vhp->Amount;
        }             
    }
    
    $vhps = Voucher::QueryArray(
            QQ::AndCondition(                
                QQ::Equal(QQN::Voucher()->Dr, $current->Student),
                QQ::Equal(QQN::Voucher()->Grp,6),
                QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Cancel,NULL),
                    QQ::Equal(QQN::Voucher()->Cancel,0)
                ),
                QQ::Equal(QQN::Voucher()->AcademicYear,$current->Semister)    
            ));
    if($vhps){
        foreach ($vhps as $vhp){
            $spay = $spay + $vhp->Amount;
        }             
    }
          
    $vhps = Voucher::QueryArray(
            QQ::AndCondition(                                                                              
                QQ::Equal(QQN::Voucher()->RefNoObject->CrObject->Grp,5454),     //fees group
                QQ::Equal(QQN::Voucher()->Cr, $current->Student),
                QQ::OrCondition(
                QQ::Equal(QQN::Voucher()->Cancel,NULL),    
                QQ::Equal(QQN::Voucher()->Cancel,0)  
                ),
                QQ::Equal(QQN::Voucher()->AcademicYear, $current->Semister)
            ));

    if($vhps){
        foreach ($vhps as $vhp){
            $spaid = $spaid + $vhp->Amount;
        }        
    }
    
  /*  $vhps = Voucher::QueryArray(
            QQ::AndCondition(
            QQ::Equal(QQN::Voucher()->Grp,6),
            //QQ::Equal(QQN::Voucher()->Dr,$current->Student),
            QQ::Equal(QQN::Voucher()->AcademicYear,$current->Student),
            QQ::Equal(QQN::Voucher()->DrObject->Grp,$vhps->ParrentObject->Dr)));
 */
    $vhps = Voucher::QueryArray(
            QQ::AndCondition(                
                QQ::Equal(QQN::Voucher()->Dr, $current->Student),
                QQ::Equal(QQN::Voucher()->Grp,6),
               QQ::Equal(QQN::Voucher()->AcademicYear,$current->Semister)    
            ));
  ?>  
 
  <tr>
    <td height="18"><?php _p($sr++); ?></td>
    <td><?php _p($current->StudentObject->IdloginObject->Code); ?></td>
    <td><?php _p($current->StudentObject->IdloginObject->Profile->PrefixObject.' '.$current->StudentObject->IdloginObject->Profile->FirstName.' '.$current->StudentObject->IdloginObject->Profile->MiddleName.' '.$current->StudentObject->IdloginObject->Profile->LastName); ?></td>
    <td><?php _p($current->StudentObject->IdloginObject->Profile->CasteObject); ?></td>
    <td><div align="right">
      <?php _p(number_format($spay + $gpay , 2,'.','')); $stpay = $stpay +($spay + $gpay); ?>
    </div></td>
    
    <td><div align="right">
      <?php _p(number_format($spaid, 2,'.','')); $stpaid = $stpaid + $spaid;?>
    </div></td>    
    <td><div align="right">
      <?php _p(number_format($spay - $spaid , 2,'.','')); ?>
    </div></td>
    
    <td>
      <?php if($vhps){
      foreach ($vhps as $vhp){
          if($vhp->Cr == 10288){
              _p(number_format($vhp->Amount, 2,'.',''));
          } ?>
            
  <?php           }             
    }
  ?>
    </td>
    <td>
      <?php if($vhps){
      foreach ($vhps as $vhp){
          if($vhp->Cr == 10289){
              _p(number_format($vhp->Amount, 2,'.',''));
          } ?>
      <?php }}?>             
    </td>
    <td></td>
    <td></td>
  </tr>
  
  <?php } ?>
    <tr>
    <th colspan="4" align="right">Total</th>
   
   
    <th><div align="right">
      <?php _p(number_format($stpay + $gtpay , 2,'.',''));  ?>
    </div></th>
    
    <th><div align="right">
      <?php _p(number_format($stpaid, 2,'.',''));  ?>
    </div></th>
    </tr>
    </table>
    </div>
</div>
<?php } ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>