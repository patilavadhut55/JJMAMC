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
    $noun = "he ";
else
    $noun = "she ";
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
      <td align="center" colspan="2"><div id="title"><strong>CERTIFICATE OF AGE, NATIONALITY  DOMICILE Etc.</strong> 
        <p align="center"><strong>(Issued by Authorities in the State of Maharashtra)</strong><br>
        <strong>On submission of the proof noted below:</strong></p>
      </div></td>
  </tr>
  <tr>
      <td valign="top" colspan="2"><div align="justify" style="font:'Times New Roman', Times, serif; font-size:14px; margin-left:25px; line-height:25px"><br><p>IT  IS HEREBY CERTIFIED THAT,<strong> </strong></p>
        <p>&nbsp;<strong><!--?php _p($app->ApplicantObject->Title); ?--></strong>&nbsp;</strong>Resident at <strong>
              <!--?php _p($app->ApplicantObject->AddressLine1); ?-->
              ,</strong>
          Tal<strong>
           <!--?php _p($app->ApplicantObject->TalukaObject); ?-->
            </strong>Dist <strong>
              <!--?php  _p($app->ApplicantObject->DistrictObject); ?-->
              </strong> was Born on  <strong></strong>
          <strong>
           <!--?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 240)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }else{
	 _p(convert_date(date("d",  strtotime($app->ApplicantObject->Dob))).' '.date("M",  strtotime($app->ApplicantObject->Dob)).' '.convert_date(date("Y",  strtotime($app->ApplicantObject->Dob))));
        }
        ?--> 
            (<!--?php _p(date("d/m/Y",  strtotime($app->ApplicantObject->Dob))); ?-->
            )
            </strong>at<strong> <!--?php _p($app->ApplicantObject->AddressLine1); ?-->,</strong> Tal<strong> <!--?php _p($app->ApplicantObject->TalukaObject); ?-->
              </strong> Dist <strong>
                <!--?php _p($app->ApplicantObject->DistrictObject); ?-->
                </strong> in the state of <strong>
                  <!--?php _p($app->ApplicantObject->StateObject); ?-->
                  </strong>  within Territory   of <strong>INDIA</strong><strong>.</strong>
          or of that 
  <!--?php _p($noun); ?--> is CITIZEN OF INDIA.
        <div style="font:'Times New Roman', Times, serif; font-size:12px; margin-left:180px; line-height:25px">This is Certificate of Nationality, Age
Domicile Etc.issued as Powers
Delegated By District Magistrate to
Taluka Magistrate vide order no
Desk Vll-RR-1997/93 Dated: 15/12/1993</div>
        </p>
        <p> That
   <!--?php _p($noun); ?--> is domiciled in the State of MAHARASHTRA  by reason of Birth/Residence.
        </p></div></td>
  </tr>
  <tr>
      <td height="162" valign="top" colspan="2"><div style="font:'Times New Roman', Times, serif; font-size:12px; margin-left:35px; line-height:25px">
      <p>PARTICULARS OF PROOF SUBMITTED<br>
        </strong>
        <!--?php $objDocs = AppDocs::QueryArray(QQ::AndCondition(
                QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication)
                ),
                QQ::OrderBy(QQN::AppDocs()->IdappDocs)
                
                );
               $seq = 0;
 foreach ($objDocs as $objDoc){
      ?-->
        </strong>
        <!--?php 
        if($objDoc->Document != 232){
        _P($seq = $seq+1);_P(') ');_p($objDoc->DocumentObject->Name); if($objDoc->Remark){ ?-->
        :
        <!--?php _p($objDoc->Remark); } ?-->
        <br>
        <!--?php } }?--></p>
      
      <p>Dated at:-this &nbsp;&nbsp;&nbsp;&nbsp;day of &nbsp;&nbsp;&nbsp;&nbsp;2015</p>
    </div></td>
  </tr>
 <tr>
      <td width="442" align="justify">Place:<!--?php _p($adddres->TalukaObject.' Dist. '.$adddres->DistrictObject); ?--><br>
          <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br>Date:- <!--?php _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
      <td width="526" ><div style="float:right" align="center"><br>
      <!--?php _t($app->SignPatch); ?--></div>
      </td>
  </tr>
    </table>

</td>
  </tr>
</table>
<div style="clear: both;"></div>
</div>