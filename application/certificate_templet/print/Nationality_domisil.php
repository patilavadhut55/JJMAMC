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
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/barcode/barcode.php?barcode=<!--?php _p($app->Code); ?-->&width=450&height=30" /></div>
<table id="mtable" align="center" >
  <tr>
    <td><table id="stable" align="center">
  <tr>
    <td colspan="2" align="center"><div id="title1"><strong>CERTIFICATE OF AGE, NATIONALITY  DOMICILE Etc.</strong>
        <p align="center"><strong>(Issued by Authorities in the State of Maharashtra)</strong><br>
          <strong>On submission of the proof noted below:</strong></p>
    </div></td>
  </tr>
 
  <tr>
    <td height="300" colspan="2" valign="top"><br>
        <div align="justify" id="font"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that       <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong>resides at <strong>  <!--?php _p($app->ApplicantObject->AddressLine1); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?-->       </strong> in District <strong>  <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>
            of the State of Maharashtra belongs to the&nbsp; <strong>
          <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?-->   </strong>
            Caste/Tribes which is recognized as <b> <!--?php if($view == 0) _p($this->lblCast->Text);  else _p($app->ApplicantObject->CastObject->ParentObject.' category Sr. No. '.$app->ApplicantObject->CastObject->Print.' under the Government Resolution No. '.$app->ApplicantObject->CastObject->Abbrivation); ?--></b> as amended from time to time.<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong> <!--?php  _p($app->ApplicantObject->Title); ?--></strong> and/or <!--?php _p($noun); ?-->  
family ordinarily resides at <strong>   <!--?php _p($app->ApplicantObject->AddressLine1); ?-->   </strong><strong>        , </strong>Taluka    <!--?php _p($app->ApplicantObject->TalukaObject); ?-->    in District <strong>   <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>&nbsp;&nbsp; of the State of Maharashtra.</div></td>
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
