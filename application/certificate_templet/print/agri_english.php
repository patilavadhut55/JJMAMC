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
    $noun = "him ";
else
    $noun = "her ";
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
    <td>
        <table id="stable" align="center">
  <tr>
    <td height="65" colspan="2" valign="top"><div id="doc">Documents Verified<br>
  <!--?php if($remarks){
    foreach ($remarks as $remark){ ?-->
  <!--?php if($view == 0) $this->lbldelete[$remark->IdappDocs]->Render();  else _p($seq); ?-->.    
  <!--?php _p($remark->DocumentObject);  ?-->:<!--?php  if($view ==1) _p($remark->Remark);  else $this->docsarray[$remark->IdappDocs]->Render();  ?-->
  <br />
  <!--?php $seq = $seq + 1; ?--> <!--?php }}  if($view == 0)$this->btnAddDoc->Render();  ?-->
      
      </div></td>
  </tr>
  <tr>
    <td height="70" colspan="2" align="center"><div><strong><u>PROFORMA FOR CERTIFICATE OF  BEING AN AGRICULTURIST.</u></strong><br>
    (To be signed by an officer not below the rank of Naib Tahasildar)</div></td>
  </tr>
  <tr>
    <td height="300" colspan="2" valign="top"><br>
        <div align="justify" id="font"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that     &nbsp;<strong><!--?php _p($app->ApplicantObject->Title); ?--></strong>&nbsp;
         &nbsp;(Name of  Land Holder)&nbsp;
          <strong><!--?php _p($verb); ?--></strong>&nbsp;resides at &nbsp;<strong>  <!--?php _p($app->ApplicantObject->AddressLine1); ?-->         , </strong> <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?--></strong> 
                Tahasil, in District<strong>  <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>holds <strong>
                <!--?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 247)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?-->
                </strong>(Hectare) of land in capacity as joint owner and the area of the land held by
                <!--?php _p($noun);?-->
does not exceed the economic holding as defined in BT &amp; ALT act of 1948. Further certified that
<!--?php _p($noun);?-->
main source of income is derived form cultivation of land held by
<!--?php _p($noun);?-->
.
</div></td>
  </tr>
  <tr>
      <td width="593" align="justify">Place:<!--?php _p($adddres->TalukaObject.' Dist. '.$adddres->DistrictObject); ?--><br>
          <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br>Date:- <!--?php _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
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
