<?php
	$strPageTitle = QApplication::Translate('Inquiry') ;
	require(__CONFIGURATION__ . '/header.inc.php');
        $inquirie = Inquiry::LoadByIdinquiry($_GET['id']);
?>
<?php $this->RenderBegin() ?>

	
<div id="formControls" >
<table width="100%" border="0">
  <tr>
    <td height="38" colspan="3" align="center" style="font-size:18px; color:#F03; font-weight:bold;" valign="top">Select Course &amp; Admission Year To Proceed</td>
    </tr>
  <tr>
    <td width="35%"><?php  $this->lstCourse->RenderWithName(); ?></td>
    <td width="36%"><?php  $this->lstYear->RenderWithName(); ?></td>
    <td width="29%"><?php  $this->btnSave->Render(); ?></td>
  </tr>
  </table>

</div>
<div class="form-controls" >
<?php include('letterhead.php'); ?>
<table width="100%" border="1"  style="border: 1px #CCC; line-height:35px; ">
  <tr>
    <td colspan="8"><div align="center"><h3>Inquiry Form</h3></div></td>
    </tr>
  <tr>
    <td width="20%"><strong>&nbsp;Applicant Full Name</strong></td>
    <td colspan="7">&nbsp;<?php _p($inquirie->PrefixObject.' '.$inquirie->FirstName.' '.$inquirie->MiddleName.' '.$inquirie->LastName); ?></td>
  </tr>
  <tr>
    <td><strong>&nbsp;Applicant's Father name</strong></td>
    <td colspan="7">&nbsp;<?php _p($inquirie->MiddleName.' '.$inquirie->LastName); ?></td>
  </tr>
  <tr>
    <td><strong>&nbsp;Address</strong></td>
    <td colspan="3">&nbsp;<?php _p($inquirie->Address); ?></td>
    <td width="13%"><strong>&nbsp;Contacts</strong></td>
    <td width="29%" colspan="3">&nbsp;<?php _p($inquirie->Contact); ?></td>
  </tr>
  <tr>
    <td><strong>&nbsp;Date Of Birth &amp; Age</strong></td>
    <td colspan="3">&nbsp;<?php _p(date('d/m/Y', strtotime($inquirie->Dob))); ?> - <?php _p($inquirie->Age.' Years'); ?></td>
    <td><strong>&nbsp;Category</strong></td>
    <td colspan="3">&nbsp;<?php _p($inquirie->CategoryObject); ?></td>
  </tr>
  <tr>
    <td><strong>&nbsp;CET details</strong></td>
    <td>&nbsp;<?php $cets = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry),
                                    QQ::NotEqual(QQN::Education()->Title, 5)        
                                            ));
                            if($cets){
                                foreach ($cets as $cet){} 
                                _p($cet->TitleObject);
			}?></td>
    <td>
        &nbsp;Marks =
        <?php 
            $cets = Education::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry),
                    QQ::NotEqual(QQN::Education()->Title, 5)        
                            ));
            if($cets){
                foreach ($cets as $cet){}
                _p($cet->Marks);
            }
        ?>
    </td>
        <td width="14%">
            &nbsp;Per%
                    = <?php $cets = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry),
                                    QQ::NotEqual(QQN::Education()->Title, 5)        
                                            ));
                            if($cets){
                                foreach ($cets as $cet){} 
                                _p($cet->Percentage);
			}?>
        </td>
        <td colspan="4">&nbsp;</td>
    </tr>
    
    <?php 
        if($this->lstCourse->SelectedValue == 793){
    ?>
  <tr>
    <td><strong>&nbsp;HSC Details</strong></td>
    <td width="12%">&nbsp;Marks = 
      <?php $hscs = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Title, 5),
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry)        
                                            ));
                            if($hscs){
                                foreach ($hscs as $hsc){} 
								_p($hsc->Marks); 
								}?></td>
    <td width="12%">&nbsp;Per %       = <?php $hscs = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Title, 5),
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry)        
                                            ));
                            if($hscs){
                                foreach ($hscs as $hsc){} 
								_p($hsc->Percentage); 
								}?></td>
    <td>&nbsp;PCB = 
      <?php $hscs = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Title, 5),
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry)        
                                            ));
                            if($hscs){
                                foreach ($hscs as $hsc){} 
                                $p = $c = $b = 0; 
                                 $physics = Marks::QueryArray(
                                           QQ::AndCondition(
                                           QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation),
                                           QQ::Equal(QQN::Marks()->Subject, 1)        
                                                   ));
                                 if($physics){
                                    foreach ($physics as $physic){}
                                    $p = $physic->MarksObtained;
                                }
                                $bios = Marks::QueryArray(
                                           QQ::AndCondition(
                                           QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation),
                                           QQ::Equal(QQN::Marks()->Subject, 3)        
                                                   ));
                                if($bios){
                                    foreach ($bios as $bio){}
                                    $b = $bio->MarksObtained;

                                    }
                                
                                $chems = Marks::QueryArray(
                                           QQ::AndCondition(
                                           QQ::Equal(QQN::Marks()->Education, $hsc->Ideducation),
                                           QQ::Equal(QQN::Marks()->Subject, 2)        
                                                   ));
                                if($chems){
                                    foreach ($chems as $chem){}
                                  $c = $chem->MarksObtained ;
                                } _p($b+$p+$c);
								
								}?></td>
    <td colspan="4">&nbsp;</td>
    </tr><?php } ?>
</table>
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>