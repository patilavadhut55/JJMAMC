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
                            <div style="font-size:24px"  align="center"><strong>साधा रहिवासी दाखला </strong></div>
                            <div align="center">नमूना : एस. ई. सी.<br>(पहा  नियम ४(२))</div></td>
                            
                    </tr>
                   <tr>
                       <td style="padding-top: -10px;"><div id="font">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;महाराष्ट्र शासनाच्या स्थानिक लोकांना रोजगारामध्ये  अग्रक्रम देण्यासाठी म्हणुन दिलेले योग्यता प्रमाणपत्र ,</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;मी असे प्रमाणीत करतो की,&nbsp;<strong><!--?php _p($app->ApplicantObject->TinSalesTaxNo); ?--></strong>&nbsp;
                          कायमचे महाराष्ट्र राज्यात वास्तव्यात असल्याबद्दल  त्यांनी हजर केलेला कागदोपत्री पुरावा मी स्वता: पडताळला आहे. <br>
                             मी  असेही प्रमाणीत करतो की , स्थानिक व्यक्तींना रोजगारामध्ये  अग्रक्रम देण्याच्या तत्वानुसार राज्य शासनाने वेळोवेळी घोषित केलेल्या स्थानिक  व्यक्ति संबंधित ह्या तत्वानुसार वरील व्यक्ती ही स्थानिक व्यक्ती संबंधीत सदरामध्ये मोडते. <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सदरचा  दाखला अर्जदार यांचे मागणीवरून त्यांचे बॅच बिल्ला/परमीट कामी देणेत आला . </p>
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