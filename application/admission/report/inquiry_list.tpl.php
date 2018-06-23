<?php
	$strPageTitle = QApplication::Translate('Inquiry') ;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
        
<?php $this->RenderBegin() ?>
<div id="formControls" >
    <table width="100%" border="0">
      <tr>
        <td width="30%"> <?php $this->lstCourse->RenderWithName(); ?></td>
        <td width="20%"><?php $this->btnShow->Render(); ?></td>
      </tr>
    </table>
</div>

<script language="javascript">
	function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
  var content_vlue = document.getElementById("formprint").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/styles_blue.css");</style><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
}
</script>
<div style="text-align: left;">
<a href="javascript:Clickheretoprint();">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
</div>
        <div id="formprint">
           
          <div class="form-controls">
               <?php   if(isset($_GET['dept'])){ ?>
              <h4> Final Inquiries For <?php _p($this->lstCourse->SelectedName); ?></h4>
              <table width="100%" border="1" class="datagrid">
                <tr>
                  <th width="2%" rowspan="2" >&nbsp;</th>
                  <th width="2%" rowspan="2" >Sr</th>
                  <th width="4%" rowspan="2" >Code</th>
                  <th width="15%" rowspan="2" >Name</th>
                  <th width="9%" rowspan="2" >Subject</th>
                  <th width="8%" rowspan="2" >Contact</th>
                  <th width="10%" rowspan="2" >Address</th>
                  <th width="8%" rowspan="2" >Category</th>
                  <th colspan="3" >CET Details</th>
                   <?php if($this->lstCourse->SelectedValue == 793 ){ ?><th colspan="3" >HSC Details</th> <?php } ?>
                  <th >&nbsp;</th>
                </tr>
                <tr>
                  <th width="8%" ><div align="center">Type</div></th>
                  <th width="6%" >Marks</th>
                  <th width="5%" >%</th>
                  <?php if($this->lstCourse->SelectedValue ==793 ){ ?> <th width="6%" >Marks</th>
                  <th width="6%" >%</th>
                  <th width="7%" >PCB Total</th>
                  <?php } ?>
                  <th width="4%" >Admit</th>
                </tr>
                <?php
            
                $inquiries = Inquiry::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Inquiry()->Admitted, 0),
                                    QQ::Equal(QQN::Inquiry()->Finalized, 1),
                                    QQ::Equal(QQN::Inquiry()->Course, $_GET['dept'])        
                        ), QQ::OrderBy(QQN::Inquiry()->Subject));
              
              if($inquiries){
                  $sr = 1;
                  foreach ($inquiries as $inquirie){
              ?>
                <tr style="font-size:14px; font-weight:normal;">
                  <td valign="top">
                    <div align="center">
                    <?php $this->lblEdit[$inquirie->Idinquiry]->Render(); ?>
                    </div>
                  </td>
                  <td valign="top"><div align="center">
                    <?php _p($sr++); ?>
                  </div></td>
                  <td valign="top"><div align="center">
                    <?php _p($inquirie->Code); ?>
                  </div></td>
                  <td valign="top"><?php _p($inquirie->PrefixObject.' '.$inquirie->FirstName.' '.$inquirie->MiddleName.' '.$inquirie->LastName); ?></td>
                  <td valign="top"><div align="center">
                    <?php _p($inquirie->SubjectObject); ?>
                  </div></td>
                  <td valign="top"><div align="center">
                    <?php _p($inquirie->Contact); ?>
                  </div></td>
                  <td valign="top"><div align="center">
                    <?php _p($inquirie->Address); ?>
                  </div></td>
                  <td valign="top"><div align="center">
                    <?php _p($inquirie->CategoryObject); ?>
                  </div></td>
                  <td valign="top"><div align="center">
                    <?php $cets = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry),
                                    QQ::NotEqual(QQN::Education()->Title, 5)        
                                            ));
                            if($cets){
                                foreach ($cets as $cet){} 
                                _p($cet->TitleObject);
			}?>
                  </div></td>
                  <td valign="top"><div align="right">
                    <?php $cets = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry),
                                    QQ::NotEqual(QQN::Education()->Title, 5)        
                                            ));
                            if($cets){
                                foreach ($cets as $cet){} 
                                _p($cet->Marks);
			}?>
                  </div></td>
                  <td valign="top"><div align="right">
                    <?php $cets = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry),
                                    QQ::NotEqual(QQN::Education()->Title, 5)        
                                            ));
                            if($cets){
                                foreach ($cets as $cet){} 
                                _p($cet->Percentage);
			}?>
                  </div></td>
                  <?php if($_GET['dept'] ==793 ){ ?>
                  <td valign="top"><div align="right">
                    <?php $hscs = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Title, 5),
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry)        
                                            ));
                            if($hscs){
                                foreach ($hscs as $hsc){} 
								_p($hsc->Marks); 
								}?>
                  </div></td>
                  <td valign="top"><div align="right">
                    <?php $hscs = Education::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Education()->Title, 5),
                                    QQ::Equal(QQN::Education()->Inquiry, $inquirie->Idinquiry)        
                                            ));
                            if($hscs){
                                foreach ($hscs as $hsc){} 
								_p($hsc->Percentage); 
								}?>
                  </div></td>
                  <td valign="top"><div align="right">
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
		}?>
                  </div></td>
                  <?php } ?>
                  <td valign="top"><div align="center">
                    <?php $this->chkAdmit[$inquirie->Idinquiry]->Render(); ?></td>
                </tr>
              <?php }}} ?>
              </table>
          </div>
        </div>
        <?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>