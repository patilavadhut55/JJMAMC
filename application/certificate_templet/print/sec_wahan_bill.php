<!--?php 
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

?-->
<div id="bg">
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/inword/barcode.php?barcode=<!--?php _p($app->Code); ?-->&amp;width=450&amp;height=30" alt="" /></div>
<table id="mtable" align="center">
    <tbody>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td height="65" colspan="2" valign="top">
                        <div id="doc">वाचले<br />
                        <!--?php if($remarks){
    foreach ($remarks as $remark){ ?-->   <!--?php if($view == 0) $this->lbldelete[$remark->IdappDocs]->Render();  else _p($seq); ?-->.       <!--?php _p($remark->DocumentObject->Mname);  ?-->:<!--?php  if($view ==1) _p($remark->Remark);  else $this->docsarray[$remark->IdappDocs]->Render();  ?-->   <br />
                        <!--?php $seq = $seq + 1; ?--> <!--?php }}  if($view == 0)$this->btnAddDoc->Render();  ?--></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: -20px;"> 
                           <div id="title">
    
      <p align="center"><strong>विषय:-सार्वजनिक वाहन बिल्ला  मिळणे बाबत..</strong></p>
    </div><div id="font" align="center">महाराष्ट्र मोटार वाहन नियम १९८९ मध्ये झालेल्या सुधारनेनुसार बिल्याकरिता अर्ज करताना
नमुना एस. ई.सी. मध्ये तहसिलदार/ उपविभगीय आधिकारी यांच्याकडील प्रमाणपत्र सादर करणे आवश्यक
आहे..
 </div><div align="center">नमुना: एस.ई.सी.<br>(पहा नियम ४(२))</div>
     <div  align="center">
     महाराष्ट्र  शासनाच्या स्थानिक लोकांना रोजगारामध्ये अग्रक्रम देण्यासाठी म्हणून दिलेले<br>
        योग्यता  प्रमाणपत्र
      </div>                      
                        </td>
                            
                    </tr>
                   <tr>
                       <td style="padding-top: -10px;">
                         <div id="font">
      <p>मी असे प्रमाणित करतो की, &nbsp;<strong><!--?php _p($app->ApplicantObject->TinSalesTaxNo); ?--></strong>&nbsp;
        रा.<strong>  <!--?php _p($app->ApplicantObject->AddressLine1); ?-->         , </strong>ता <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?-->       </strong>जि.<strong>  <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>येथील हे पंधरा वर्षाहून अधिक कालावधी साठी महाराष्ट्र  राज्यात वास्तव्य असल्याबाबत त्यांनी हजर केलेले कागदोपत्री पुरावा मी स्वत:  पडताळला आहे.<br>
        मी असेही प्रमाणित करतो की, स्थानिक  व्यक्तींना रोजगारमध्ये अग्रक्रम देण्याचा तत्वानुसार राज्य शासनाने वेळोवेळी घोषित  केलेल्या व्यक्ती संबंधीत ह्या तत्यानुसार वरील व्यक्ति संबंधीत मोडते.</p>
</div>
                        </td>
                    </tr>
                   <tr>
                        <td width="968" align="justify">ठिकाण:<!--?php _p($adddres->TalukaObject.' जि. '.$adddres->DistrictObject); ?--><br />
                        <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br />
                        दिनांक:- <!--?php if($app->CertificateIssueDate) _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
                        <td width="0">
                        <div style="float:right" align="center"><br />
                        <!--?php _t($app->SignPatch); ?--></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
<div style="clear: both;">&nbsp;</div>
</div>