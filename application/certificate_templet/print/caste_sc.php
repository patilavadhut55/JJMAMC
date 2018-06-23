<!--?php 
$app = Application::LoadByIdapplication($_GET['id']);
$name = explode(" ", $app->ApplicantObject->Title);
$verb = $noun = NULL;
if($name[0] == "Mr." )
 $verb = "Son Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Miss." )
    $verb = "Daughter Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Mrs." )
    $verb = "Daughter Of ".$app->ApplicantObject->Web.' Wife of '.$app->ApplicantObject->CstNo;

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
                        <div id="title1"><u><strong>FROM-6<br />
                        Rule No.5(6) &amp; 6(1)(a)</strong></u></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <div id="title2">Form of Caste Certificate For Person Belonging to SC. and ST.</div>
                        </td>
                    </tr>
                    <tr>
                        <td height="65" valign="top">
                        <div style="font-size:12px">Read:<br />
                        1) Govt. Resolution No . C.B.C /1096 -PK 48-MWK-5 Dt. 03-06-1996<br />
                        2) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes,         Other Backward Classes, And Special Backward Classes (Regulation of lssuance and Verification of)         Caste Certificate Act -2000. <br />
                        3) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes,         Other Backward Classes, And Special Backward Classes (Regulation of lssuance and Verification of)         Caste Certificate Rules -2012.<br />
                        <b>Documents Verified</b>
                        <div style="font-size:12px;">
                        <table><tbody>
                            <!--?php
 if($view == 0){
if($remarks){ foreach ($remarks as $remark){
                           
                            ?-->
                            
                                <tr>
                                    <td>
                                    <div>
                                    <div style="float:left"><!--?php  $this->lbldelete[$remark->IdappDocs]->Render();  ?--></div>
                                    <div style="float:left"><!--?php _p($remark->DocumentObject);  ?--></div>
                                    <div style="float:left"><!--?php $this->docsarray[$remark->IdappDocs]->Render();  ?--></div>
                                    <!--?php if($remark->Scans != NULL) { ?-->
                                    <div style="float:left"><!--?php  $sr = 1 ; $scans = explode(",", $remark->Scans); 
         if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?-->
<!--?php 
$css = 0;
$img = '../upload/documents/A'.$app->Code.'/'.(int)$scan.'.png'; 
if(file_exists ($img) ){
?-->                                    
                                    <div class="scan" ><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/upload/cam/scanall.php?id=<!--?php _p($_GET['id'])?-->&amp;doc=<!--?php _p($scan); ?-->" target="scanpage"><!--?php _p($sr++);   ?--></a></div>
<!--?php }else{ ?-->
<div class="view" ><a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/upload/cam/scanall.php?id=<!--?php _p($_GET['id'])?-->&amp;doc=<!--?php _p($scan); ?-->" target="scanpage"><!--?php _p($sr++);   ?--></a></div>
<!--?php } ?-->                                    

                                    <!--?php } }  ?--></div>
                                    <!--?php } ?-->                                     <a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/inword/application.php?id=<!--?php _p($_GET['id'])?-->&amp;tab=1&amp;doc=<!--?php _p($remark->IdappDocs); ?-->&amp;code=<!--?php _p($scancode->Option);?-->">
                                    <div class="addscan">&nbsp;</div>
                                    </a></div>
                                    <!--?php $seq = $seq + 1; } ?-->
                                    <div style="clear: both">&nbsp;</div>
                                    <!--?php } $this->btnAddDoc->Render(); ?--> </td>
                                </tr><!--?php }else{
                                    ?-->

<!--?php                                    
if($remarks){ $sr = 1; foreach ($remarks as $remark){     ?-->
                                 <tr>
                                    <td>
                                        <div style="font-size: 12px;"><!--?php _p($sr++.'. '.$remark->DocumentObject.' : '.$remark->Remark); ?--></div>
                                    </td>
                                </tr>
                                    <!--?php } ?-->
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
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that       <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong> resides at <strong>  <!--?php _p($app->ApplicantObject->AddressLine2); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->Taluka2Object); ?-->    </strong> in District <strong>  <!--?php _p($app->ApplicantObject->District2Object); ?-->   </strong>         of the State of <strong><!--?php _p($app->ApplicantObject->State2Object); ?-->    </strong> belongs to the&nbsp; <strong>           <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?-->   </strong>                                    Caste/Tribes which is recognized as                               <b> <!--?php if($view == 0){ 
                                    _p($this->lblCast->Text); 
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
                            ?-->                             </b> as amended from time to time.</div>
                        <div style="margin-left:40px; font-size:12px"># The Constitution (Scheduled Caste) Order 1950.<br />
                        # The Constitution (Scheduled Tribes)Order 1950.<br />
                        # The Constitution (Scheduled Caste) (Union Territories) Order 1951<br />
                        # The Constitution (Scheduled Tribes) (Union Territories) Order 1951.</div>
                        <div align="justify" style="font-size:12px">(As amended by the Scheduled Castes And Scheduled Tribes Lists (Modification) order, 1956, the Bombay reorganization Act, 1960, the Punjab Reorganization Act, 1966, The State Of Himachal Pradesh Act, 1976, The North Eastern Areas (Reorganization) Act, 1971 and the Sceduled Castes and Scheduled Tribes and Orders (Amendment) Act, 1976).</div>
                        <div style="margin-left:40px; font-size:12px"># The Constitution (Jammu &amp; Kashmir) Scheduled Caste Order 1956. <br />
                        # The Constitution (Andaman &amp; Nicobar Islands) Scheduled Caste Order 1959 as amended by the Scheduled Castes and Scheduled Tribes orders (Amendment Act, 1976)<br />
                        # The Constitution (Dadra &amp; Nagar Haveli) Scheduled Caste Order 1962,The Constitution (Dadra &amp; Nagar Haveli) Scheduled Tribes Order 1962.<br />
                        # The Constitution (Pondicherry) Scheduled Caste Order 1964.<br />
                        # The Constitution (Scheduled Tribes)(Uttar Pradesh) Order 1967.<br />
                        # The Constitution Goa (Daman &amp; Div) Scheduled Castes Order 1968.<br />
                        # The Constitution Goa (Daman &amp; Div) Scheduled Tribes Order 1968.<br />
                        # The Constitution (Nagaland) Scheduled Tribes Order 1970.<br />
                        # The Constitution (Sikkim) Scheduled Castes Order 1978.<br />
                        # The Constitution (Sikkim) Scheduled Tribes Order 1978.</div>
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong> <!--?php  _p($app->ApplicantObject->Title); ?--></strong> and/or <!--?php _p($noun); ?-->   family ordinarily resides at <strong>   <!--?php _p($app->ApplicantObject->AddressLine1); ?-->   </strong><strong>        , </strong>Taluka    <strong><!--?php _p($app->ApplicantObject->TalukaObject); ?--> </strong>   in District <strong>   <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>&nbsp;&nbsp; of the State of <strong><!--?php _p($app->ApplicantObject->StateObject); ?-->    </strong>.</div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <!--?php if($app->FinalDecision == 3){ ?-->
                            <div style="padding: 5px;">
                            <table width="100%" style=" font-size:12px; font-weight:bold; width: 100%" >
                                <tr>
                                    <td style="height: 50px;" colspan="2"></td>
                                </tr>
                                <tr>
                                    <td style="width: 55%;">
                                        <div style="float:left; width: 100%;">
                                            Place:<!--?php _p($adddres->TalukaObject.'.  Dist. '.$adddres->DistrictObject); ?--><br />
                                            <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <!--?php _p($adddres->TalukaObject->ShortName.'/'.date('M', strtotime($app->CertificateGeneratedDate)).'/'.date('Y', strtotime($app->CertificateGeneratedDate)).'/'.$app->AppliedForObject->Counter);?--><br />
                                            Date:- <!--?php if($app->CertificateGeneratedDate) _p(date('d/m/Y', strtotime($app->CertificateGeneratedDate)));?-->
                                        </div>
                                    </td>
                                    <td style="width: 30%;">
                                        <div style="width: 100%;" align="center">
                                                <!--?php _t($app->SignPatch); ?-->
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        <!--?php } ?-->
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