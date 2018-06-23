<!--?php 
$app = Application::LoadByIdapplication($_GET['id']);
$name = explode(" ", $app->ApplicantObject->Title);
$verb = $noun = NULL;
if($name[0] == "Mr." )
 $verb = "Son Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Miss." )
    $verb = "Daughter Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Mrs." )
    $verb = "Daughter Of ".$app->ApplicantObject->Web.' Wife of'.$app->ApplicantObject->CstNo;

//
if($name[0] == "Mr." )
    $noun = "His ";
else
    $noun = "Her ";
//
     $seq = 1;
     $remarks = AppDocs::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
                    QQ::Equal(QQN::AppDocs()->OnCertificate, TRUE)
                            ),QQ::OrderBy(QQN::AppDocs()->Seq)
            ); 
    $view = 0;
    if(isset($_GET['print'])) $view = 1;

//sign patch
$logins = LoginHasRole::LoadArrayByLoginIdlogin($app->DataEntryBy);
foreach ($logins as $login){}
$adddress = Address::LoadArrayByRoll($login->Company);
foreach ($adddress as $adddres){}
 $scancode = Settings::LoadByName("Scan");
?-->
<div id="bg">
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/barcode/barcode.php?barcode=<!--?php if($app->Parrent == NULL) _p($app->Code); else _p($app->ParrentObject->Code);  ?-->&amp;width=450&amp;height=30" alt="" /></div>
<div style="clear:both;"></div>
<table id="mtable" align="center">
  <tr>
    <td><table id="stable" align="center">
  <tr>
    <td align="center"><div id="title">परिशिष्ट अ </div></td>
  </tr>
  <tr>
    <td align="center"><div id="title2"><strong>Form of certificate to be issued to  Educationally and Socially Backward Category persons belonging the state of  Maharashtra. </strong></div></td>
  </tr>
  <tr>
    <td height="65" valign="top"><div id="doc">
      <p>Documents Verified<br>
 <!--?php if($remarks){ foreach ($remarks as $remark){ ?-->      
      <div style="font-size:12px;">
        <table>
          <!--?php
if($view == 0){
if($remarks){ foreach ($remarks as $remark){ ?-->
          <tbody>
            <tr>
              <td><div>
                <div style="float:left">
                  <!--?php  $this->lbldelete[$remark->IdappDocs]->Render();  ?-->
                </div>
                <div style="float:left">
                  <!--?php _p($remark->DocumentObject);  ?-->
                </div>
                <div style="float:left">
                  <!--?php $this->docsarray[$remark->IdappDocs]->Render();  ?-->
                </div>
                <!--?php if($remark->Scans != NULL) { ?-->
                <div style="float:left">
                  <!--?php  $sr = 1 ; $scans = explode(",", $remark->Scans); 
         if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?-->
                  <!--?php 
$css = 0;
$img = '../upload/documents/A'.$app->Code.'/'.(int)$scan.'.png'; 
if(file_exists ($img) ){
?-->
                  <div class="scan" ><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/upload/cam/scanall.php?id=<!--?php _p($_GET['id'])?-->&amp;doc=<!--?php _p($scan); ?-->" target="scanpage">
                    <!--?php _p($sr++);   ?-->
                  </a></div>
                  <!--?php }else{ ?-->
                  <div class="view" ><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/upload/cam/scanall.php?id=<!--?php _p($_GET['id'])?-->&amp;doc=<!--?php _p($scan); ?-->" target="scanpage">
                    <!--?php _p($sr++);   ?-->
                  </a></div>
                  <!--?php } ?-->
                  <!--?php } }  ?-->
                </div>
                <!--?php } ?-->
                <div class="addscan"><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/inword/application.php?id=<!--?php _p($_GET['id'])?-->&amp;tab=1&amp;doc=<!--?php _p($remark->IdappDocs); ?-->&amp;code=<!--?php _p($scancode->Option);?-->">&nbsp;</a></div>
              </div>
                <!--?php $seq = $seq + 1; } ?-->
                <div style="clear: both">&nbsp;</div>
                <!--?php } $this->btnAddDoc->Render(); }else{ 
if($remarks){ foreach ($remarks as $remark){     ?-->
                <div>
                  <!--?php _p($seq.'. '.$remark->DocumentObject.' : '.$remark->Remark); ?-->
                </div>
                <!--?php } ?--></td>
            </tr>
            <!--?php }} ?-->
          </tbody>
        </table>
      </div>
    </div></td>
    </tr>
  <tr>
    <td height="30" align="center"><div ><strong>CASTE CERTIFICATE </strong></div></td>
  </tr>
  <tr>
    <td height="300" valign="top"><br>
      <div align="justify" id="font"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that       <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong>resides at <strong>  <!--?php _p($app->ApplicantObject->AddressLine2); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->Taluka2Object); ?-->       </strong> in District <strong>  <!--?php _p($app->ApplicantObject->District2Object); ?-->   </strong>
        of the State of <strong><!--?php _p($app->ApplicantObject->State2Object); ?-->    </strong> belongs to the&nbsp; <strong>
          <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?-->   </strong>
        Caste/Tribes which is recognized as <b> <!--?php if($view == 0) _p($this->lblCast->Text);  else _p($app->ApplicantObject->CastObject->ParentObject.' category Sr. No. '.$app->ApplicantObject->CastObject->Print.' under the Government Resolution No. '.$app->ApplicantObject->CastObject->Abbrivation); ?--></b> as amended from time to time.<br />
<br />
</div>
      
      <div align="justify" id="font">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong> <!--?php  _p($app->ApplicantObject->Title); ?--></strong> and/or <!--?php _p($noun); ?-->  
family ordinarily resides at <strong>   <!--?php _p($app->ApplicantObject->AddressLine1); ?-->   </strong><strong>        , </strong>Taluka    <!--?php _p($app->ApplicantObject->TalukaObject); ?-->    in District <strong>   <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>&nbsp;&nbsp; of the State of <strong><!--?php _p($app->ApplicantObject->State2Object); ?-->    </strong>.</div></td>
  </tr>
  <tr>
      <td align="justify"> <!--?php if($app->FinalDecision == 3){ ?-->   
                        <div style="padding: 5px; margin-top: 10px; font-size:12px; font-weight:bold; width: 100%">
                        <div style="float:left">Place:<!--?php _p($adddres->TalukaObject.' Dist. '.$adddres->DistrictObject); ?--><br />
                        <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br />
                        Date:- <!--?php _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></div>
                        <div style="float:right; width: 50%" align="center">
                        <!--?php _t($app->SignPatch); ?--></div>
                        </div>
                         <!--?php } ?-->
            </td>
      </tr>
  </table>
</td>
  </tr>
</table>
<div style="clear: both;"></div>
</div>
