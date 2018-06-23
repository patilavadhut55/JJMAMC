<?php 
$app = Application::LoadByIdapplication($_GET['id']);
$name = explode(" ", $app->ApplicantObject->Title);
$verb = $noun = NULL;
if($name[0] == "Mr" || $name[0] == 'Master')
 $verb = "Son Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Miss" )
    $verb = "Daughter Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Mrs" )
    $verb = "Daughter Of ".$app->ApplicantObject->Web.' Wife of'.$app->ApplicantObject->CstNo;

//
if($name[0] == "Mr" || $name[0] == 'Master')
    $noun = "His ";
else
    $noun = "Her ";
//
     $seq = 1;
    $remarks = AppDocs::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
                    QQ::Equal(QQN::AppDocs()->OnCertificate, TRUE)
                    ),  QQ::OrderBy(QQN::AppDocs()->Seq)
            ); 
    $view = 0;
    if(isset($_GET['print'])) $view = 1;

//sign patch
$logins = LoginHasRole::LoadArrayByLoginIdlogin($app->DataEntryBy);
foreach ($logins as $login){}
$adddress = Address::LoadArrayByRoll($login->Company);
foreach ($adddress as $adddres){}

?>
<div id="bg">
<div align="center"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?>/inword/barcode.php?barcode=<?php _p($app->Code); ?>&amp;width=450&amp;height=30" alt="" /></div>
<table id="mtable" align="center">
    <tbody>
        <tr>
            <td>
<table width="533" height="269" border="0" align="center" style="border: 1px #000 solid;">
  <tr>
    <td width="205" valign="top"><div style="font-size:14px; margin-top:40px; font-weight:bold" align="center"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?>/upload/photo/<?php _p($app->ApplicantObject->Of) ?>.png" width="78" height="108"  /><br><br> कार्ड धारकाची सही</div></td>
    <td width="316" valign="top"><div style="font-size:14px; margin-top:30px; line-height:25px"><strong>Sr. No.&nbsp; <?php _p($app->CerificateNumber); ?></strong><br>
      <strong>
    <strong><?php _p($app->ApplicantObject->TinSalesTaxNo); ?></strong>
      </strong></strong>रा. <strong>
      <?php _p($app->ApplicantObject->AddressLine1); ?>
      </strong> ता<strong>
   <?php _p($app->ApplicantObject->TalukaObject); ?></strong>,
   जि.<strong>  <?php _p($app->ApplicantObject->DistrictObject); ?>  
   </strong>
      यांचे वय <strong>
          <?php 
          $age = 0;
              if($app->ApplicantObject->Dob){  
             $dob = date("Y", strtotime($app->ApplicantObject->Dob));
             $age = QDateTime::Now()->Year - $dob;
              _p($age);
              
              } 
        
        ?></strong> 
      वर्षे असून सदरचे ओळखपत्र त्यांना
      <?php $objDocs = AppDocs::QueryArray(QQ::AndCondition(
                QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication)
                ),
                QQ::OrderBy(QQN::AppDocs()->IdappDocs)
                
                );
               $seq = 0;
 foreach ($objDocs as $objDoc){
      ?>
     
      <?php 
        if($objDoc->Document != 223){
        _p($objDoc->DocumentObject->Mname);  ?>/
<?php } }?> यांचा दाखला पाहून दिले आहे. सदरच्या ओळखपत्राचा उपयोग फक्त एस. टी. भाड्याच्या सवलती करता करणेचा आहे<br><strong>तारीख :<?php if($app->CertificateGeneratedDate){?>
      <?php  _p(date('d/m/Y', strtotime($app->CertificateGeneratedDate))); }else{ _p("");} ?></strong></div>
      
<div style="float:right; margin-right: 20px;" align="center" ><br>
      <?php _t($app->SignPatch); ?></div>
<div style="clear: both;"></div>
      </td>
  </tr>
</table>
   </td>
        </tr>
    </tbody>
</table>
<div style="clear: both;">&nbsp;</div>
</div>