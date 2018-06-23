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
<div style="clear:both;">&nbsp;</div>
<table id="mtable" align="center" border="1">
    <tbody>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td align="center">
                        <div id="title"><strong><u>FORM-7<br />
                        Rule No.5(6)</u></strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <div id="title2"><strong><u>Form of Caste Certificate For Persons Belonging To a Scheduled Caste Converts to Buddhism&nbsp;&nbsp;</u></strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="65" valign="top">
                        <div id="doc">Read:<br />
                        1) Govt. Resolution No . C.B.C /1096 -PK 48-MWK-5 Dt. 03-06-1996 2) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes, Other Backward Classes, And Special Backward Classes (Regulation of lssuance and Verification of) Caste Certificate Act -2000.  3) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes, Other Backward Classes, And Special Backward Classes (Regulation of lssuance and Verification of) Caste Certificate Rules -2012.<br />
                        Documents Verified<br />
                        <div style="font-size:12px;">
                        <table>
                            <!--?php
if($view == 0){
if($remarks){ foreach ($remarks as $remark){ ?-->
                            <tbody>
                                <tr>
                                    <td>
                                    <div>
                                    <div style="float:left"><!--?php  $this->lbldelete[$remark->IdappDocs]->Render();  ?--></div>
                                    <div style="float:left"><!--?php _p($remark->DocumentObject);  ?--></div>
                                    <div style="float:left"><!--?php $this->docsarray[$remark->IdappDocs]->Render();  ?--></div>
                                    <!--?php if($remark->Scans != NULL) { ?-->
                                    <div style="float:left"><!--?php  $sr = 1 ; $scans = explode(",", $remark->Scans); 
         if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?--> <!--?php 
$css = 0;
$img = '../upload/documents/A'.$app->Code.'/'.(int)$scan.'.png'; 
if(file_exists ($img) ){
?-->
                                    <div class="scan"><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/upload/cam/scanall.php?id=<!--?php _p($_GET['id'])?-->&amp;doc=<!--?php _p($scan); ?-->" target="scanpage"><!--?php _p($sr++);   ?--></a></div>
                                    <!--?php }else{ ?-->
                                    <div class="view"><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/upload/cam/scanall.php?id=<!--?php _p($_GET['id'])?-->&amp;doc=<!--?php _p($scan); ?-->" target="scanpage"><!--?php _p($sr++);   ?--></a></div>
                                    <!--?php } ?-->                                                                          <!--?php } }  ?--></div>
                                    <!--?php } ?-->                                     <a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/inword/application.php?id=<!--?php _p($_GET['id'])?-->&amp;tab=1&amp;doc=<!--?php _p($remark->IdappDocs); ?-->&amp;code=<!--?php _p($scancode->Option);?-->">
                                    <div class="addscan">&nbsp;</div>
                                    </a></div>
                                    <!--?php $seq = $seq + 1; } ?-->
                                    <div style="clear: both">&nbsp;</div>
                                    <!--?php } $this->btnAddDoc->Render(); }else{ 
if($remarks){ $sr = 1; foreach ($remarks as $remark){     ?-->
                                    <div><!--?php _p($sr++.'. '.$remark->DocumentObject.' : '.$remark->Remark); ?--></div>
                                    <!--?php } ?--></td>
                                </tr>
                                <!--?php }} ?-->
                            </tbody>
                        </table>
                        </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td height="30" align="center">
                        <div><strong>CASTE CERTIFICATE </strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="300" valign="top"><br />
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that       <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong>resides at <strong>  <!--?php _p($app->ApplicantObject->AddressLine2); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->Taluka2Object); ?-->       </strong> in District <strong>  <!--?php _p($app->ApplicantObject->District2Object); ?-->   </strong>         of the State of <strong><!--?php _p($app->ApplicantObject->State2Object); ?-->    </strong> belongs to the&nbsp; <strong>                                        <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?-->   </strong>         Caste/Tribes which is recognized as                              <b> <!--?php if($view == 0){ _p($this->lblCast->Text); 
                            }elseif($app->ApplicantObject->Cast){
                                if($app->ApplicantObject->CastObject->Abbrivation && !$app->ApplicantObject->CastObject->Print){
                                  _p($app->ApplicantObject->CastObject->ParentObject.' category Sr. No. '.$app->ApplicantObject->CastObject->Abbrivation);   
                                }elseif(!$app->ApplicantObject->CastObject->Abbrivation && $app->ApplicantObject->CastObject->Print){
                                   _p($app->ApplicantObject->CastObject->ParentObject.' under the Government Resolution No. '.$app->ApplicantObject->CastObject->Print);
                                }elseif($app->ApplicantObject->CastObject->Print && $app->ApplicantObject->CastObject->Abbrivation){
                                  _p( $app->ApplicantObject->CastObject->ParentObject.' category Sr. No. '.$app->ApplicantObject->CastObject->Abbrivation.' under the Government Resolution No. '.$app->ApplicantObject->CastObject->Print);
                                }elseif(!$app->ApplicantObject->CastObject->Print && !$app->ApplicantObject->CastObject->Abbrivation){
                                  _p($app->ApplicantObject->CastObject->ParentObject->Name); 
                                }
                            }
                             
                            ?--></b> as amended from time to time.<br />
                        The Constitution (Scheduled Caste) Order 1950 as amended by the Scheduled Castes And Scheduled Tribes Lists (Modification) order, 1956, the Bombay reorganization Act, 1960, The Scheduled Caste and Scheduled Tribes Order (Amendment) Act, 1976, and belongs to scheduled Castes converted to Buddhist Faith Which id declared as Scheduled Caste under the Constitution(Scheduled Castes) Orders(Amendment)Act, 1990.</div>
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong> <!--?php  _p($app->ApplicantObject->Title); ?--></strong> and/or <!--?php _p($noun); ?-->   family ordinarily resides at <strong>   <!--?php _p($app->ApplicantObject->AddressLine1); ?-->   </strong><strong>        , </strong>Taluka    <!--?php _p($app->ApplicantObject->TalukaObject); ?-->    in District <strong>   <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>&nbsp;&nbsp; of the State of <strong><!--?php _p($app->ApplicantObject->State2Object); ?-->    </strong>.</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify"><!--?php if($app->FinalDecision == 3){ ?-->
                        <div style="padding: 5px; margin-top: 10px; font-size:12px; font-weight:bold; width: 100%">
                        <div style="float:left">Place:<!--?php _p($adddres->TalukaObject.' Dist. '.$adddres->DistrictObject); ?--><br />
                        <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br />
                        Date:- <!--?php _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></div>
                        <div style="float:right; width: 50%" align="center"><!--?php _t($app->SignPatch); ?--></div>
                        </div>
                        <!--?php } ?--></td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>