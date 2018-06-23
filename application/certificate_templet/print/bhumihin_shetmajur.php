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
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/inword/barcode.php?barcode=<!--?php _p($app->Code); ?-->&width=450&height=30" /></div>
<table id="mtable" align="center" >
  <tr>
    <td><table id="stable" align="center">
  <tr>
    <td height="65" colspan="2" valign="top"><div id="doc">वाचले<br>
  <!--?php if($remarks){
    foreach ($remarks as $remark){ ?-->
  <!--?php if($view == 0) $this->lbldelete[$remark->IdappDocs]->Render();  else _p($seq); ?-->.    
  <!--?php _p($remark->DocumentObject->Mname);  ?-->:<!--?php  if($view ==1) _p($remark->Remark);  else $this->docsarray[$remark->IdappDocs]->Render();  ?-->
  <br />
  <!--?php $seq = $seq + 1; ?--> <!--?php }}  if($view == 0)$this->btnAddDoc->Render();  ?-->
      
      </div></td>
  </tr>
  <tr>
    <td height="70" colspan="2" align="center"><div id="title"><strong>भूमिहीन शेतमजूर दाखला</strong></div></td>
  </tr>
  <tr>
    <td height="300" colspan="2" valign="top"><br>
        <div align="justify" id="font"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;दाखला देणेत येतो की      <strong><!--?php _p($app->ApplicantObject->TinSalesTaxNo); ?--> <!--?php _p($verb); ?--></strong>रा. <strong>  <!--?php _p($app->ApplicantObject->AddressLine1); ?-->         , </strong>ता <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?-->       </strong>जि.<strong>  <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>येथील रहिवाशी असून त्यांचे नावे <strong><!--?php _p($app->ApplicantObject->AddressLine1); ?--> 
        </strong>  &nbsp;ता <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?--></strong> येथे जमिनीचे खाते नसल्याने अर्जदार हे भूमिहीन शेतमजूर आहेत. <br>
        सदरचा दाखला अर्जदार यांना वरील कागदपत्रे पाहून अर्जदार यांचे मागणीवरून त्यांना कामी देणेत आला असे.<br>
        </div></td>
  </tr>
  <tr>
      <td width="593" align="justify">ठिकाण:<!--?php _p($adddres->TalukaObject.' जि. '.$adddres->DistrictObject); ?--><br>
          <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br>दिनांक:- <!--?php _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
      <td width="589" ><div style="float:right" align="center"><br>
      <!--?php _t($app->SignPatch); ?--></div>
      </td>
  </tr>
  </table>
</td>
  </tr>
</table>
<div style="clear: both;"></div>
</div>
