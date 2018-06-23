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
                        <td> 
                           <div>
    
      <p align="center"><span style="font-size:12px">शासन निर्णय महिला व बालविकास विभाग क्रमांक ८२/२००१ मसेआ-२०००/प्र.क्रं.४१५/का-२, दिनांक २५ मे, २००१ चे परिशिष्ठ-३<br>
शासन निर्णय क्र./संकीर्ण-१०९६/प्र.क्र. ३०/का-२ दिनांक-०१/०८/९७ चे परिशिष्ट </span></p>
    </div><div id="font" align="center"><strong>परिशिष्ठ  - ३</strong></div><div align="center">खुल्या प्रवर्गातील  महिलांकरिता शासकीय , निमशासकीय , व शासन अनुदानित संस्थांमध्ये ठेवण्यात
        आलेल्या ३०% आरक्षणाच्या  सवलतीकरिता उन्नत व्यक्ती / गट (क्रिमीलेअर) या मध्ये मोडत 
        नसल्याबाबतचा प्रमाणपत्रचा  नमुना :-</div>
     <div  align="center"><strong>प्रमाणपत्र</strong></div>   
                        
                        </td>
                            
                    </tr>
                   <tr>
                       <td>
                        
     
<div id="font" style="margin-left:10px;">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;प्रमाणित  करण्यात   येते की , शासन निर्णय महिला व बाल कल्याण विभाग ,  क्र . संकीर्ण १०९६ / प्र . क्र .३० / का-२ /  दिनांक २७/०५/१९९७ अन्वये विहित केलेल्या खुल्या प्रवर्गातील महिला करितांच्या  उन्नत व्यक्ति  गट ( क्रिमीलेअर )  प्रवर्गामध्ये &nbsp;<strong><!--?php _p($app->ApplicantObject->TinSalesTaxNo); ?--></strong>&nbsp;
        रा.<strong>  <!--?php _p($app->ApplicantObject->AddressLine1); ?-->         , </strong>ता <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?-->       </strong>जि.<strong>  <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong> यांच्या कुटुंबियांचे लगतच्या मागील तिन वर्षाचे सर्व मार्गानी मिळून एकूण वार्षिक उत्पन्न सरासरी रुपये सहा लाखाच्या आत असल्याने त्या खुल्या प्रवर्गातील उन्नत / गट (  क्रिमीलेअर ) या मध्ये मोडत नाहीत . </p>
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