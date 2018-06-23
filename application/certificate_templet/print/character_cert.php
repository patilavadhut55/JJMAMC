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
    <td height="100" colspan="2" align="center"><div id="title"><strong>CHARACTER CERTIFICATE </strong></div></td>
  </tr>
  <tr>
    <td height="200" colspan="2" valign="top"><br>
        <div align="justify" id="font"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that       <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong>of village <strong>  <!--?php _p($app->ApplicantObject->AddressLine1); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?-->       </strong> in District <strong>  <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong> has not been convicted or fined in any case as per the record of <strong>
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
            </strong>Police station. This certificate is issued on the strength of certificate issued by<strong>
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
            </strong>.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This character certificate is issued only for Military Recruitment purpose. </p>
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
