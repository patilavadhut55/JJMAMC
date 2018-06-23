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

?--><div id="bg" >
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__)?-->/inword/barcode.php?barcode=<!--?php _p($app->Code);?-->&width=450&height=30" /></div>
<table id="mtable" align="center" border="1">
  <tr>
    <td><table id="stable" align="center">
  <tr>
    <td height="42" colspan="2" valign="top"><div id="doc">वाचले<br>
  <!--?php if($remarks){
    foreach ($remarks as $remark){?-->
  <!--?php if($view == 0) $this->lbldelete[$remark->IdappDocs]->Render();  else _p($seq);?-->.    
  <!--?php _p($remark->DocumentObject->Mname); ?-->:<!--?php  if($view ==1) _p($remark->Remark);  else $this->docsarray[$remark->IdappDocs]->Render(); ?-->
  <br />
  <!--?php $seq = $seq + 1;?--> <!--?php }}  if($view == 0)$this->btnAddDoc->Render(); ?-->
      
      </div></td>
  </tr>
  <tr>
    <td height="70" colspan="2" align="center"><div align="center"><h2>उत्पन्नाचा दाखला</h2></div></td>
  </tr>
  <tr>
    <td height="300" colspan="2" valign="top">
        <div align="justify" style="font-size:14px; line-height:30px; margin-left:20px; margin-right:20px">
            <div> 
                <div style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;दाखला देणेत येतो की, 
                  <strong><!--?php _p($app->ApplicantObject->TinSalesTaxNo);?--> <!--?php //_p($verb);?--></strong> 
                  राहणार <strong><!--?php _p($app->ApplicantObject->AddressLine1);?-->, </strong>
                  ता <strong><!--?php _p($app->ApplicantObject->TalukaObject->Mname);?--></strong>
                  जि.<strong>  <!--?php _p($app->ApplicantObject->DistrictObject->Mname);?--></strong>
                  यांचे  सन <strong>
                    <!--?php 
                    $Y = date('Y');
                    $M = date('m');
                    if($M <= 3){
                        $Year = $Y - 1;
                        _p(convert_marathi($Year. " - " .$Y));
                    }else{
                        $Year = $Y + 1;
                        _p(convert_marathi($Y. " - " .$Year));
                    }    
                    ?-->
                  </strong>
                 सालचे सर्व बाबी पासूनची  त्यांच्या कुटुंबाचे वार्षिक उत्पन्न  रुपये 
                </div>
                <div style="float: left;">
                <strong>
                    <div style="float: left;"><!--?php if($view == 1 )_p(convert_marathi($app->Data1)); else $this->txtData1->Render(); ?--></div>          
                    <div style="float: left;"><!--?php if($view == 1 ) _p('( '.$app->Data2.' )'); else $this->txtData2->Render(); ?--></div>
                </strong>आहे. 
                </div> 
                <div style="float: left;">
                    <div style="float: left;">सदारचा दाखला <strong>  <!--?php _p($app->ApplicantObject->TinSalesTaxNo);?--> </strong> यांच्या </div>
                    <div style="float: left;"><strong><!--?php if($view == 1 )_p(' '.$app->Data3.' '); else $this->txtData3->Render(); ?--> </strong>कामी देण्यात आला आहे.</div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="float: left;">
                <div style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;अर्जदार यांनी उत्पन्नाबाबत दिलेली माहिती   खोटी ठरलेस  त्यांचेवर कायदेशीर कारवाई करनेस ते पात्र राहतील.
                सदारचा दाखला सर्वकश उत्पन्नाचा नसून फक्त 
                <strong>  <!--?php if($view == 1 )_p(convert_marathi($app->Data4)); else $this->txtData4->Render(); ?-->   </strong> पासून ज्ञात उत्पन्नाच्या  स्त्रोतांचा विचार करून देण्यात आला आहे. 
                </div>
            </div><br>
            
      <p>&nbsp;&nbsp;&nbsp;&nbsp;सदारचा दाखला 
          ३१/०३/२०१६ पर्यन्त वैध राहील. </p>  
        </div>
    </td>
  </tr>
  <tr>
      <td width="593" align="justify">ठिकाण:<!--?php _p(' '.$adddres->TalukaObject->Mname.' जि. '.$adddres->DistrictObject->Mname);?--><br>
          <!--?php _p($app->AppliedForObject->Abbrivation); ?-->: <br>दिनांक:- <!--?php if($app->CertificateIssueDate) _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
      <td width="589" ><div style="float:right" align="center"><br>
      <!--?php _t($app->SignPatch);?--></div>
      </td>
  </tr>
  </table>
</td>
  </tr>
</table>
<div style="clear: both;"></div>
</div>
<div style="clear: both;"></div>