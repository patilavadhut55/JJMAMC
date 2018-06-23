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
                    ),QQ::OrderBy(QQN::AppDocs()->Seq)
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
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/barcode/barcode.php?barcode=<!--?php if($app->Parrent == NULL) _p($app->Code); else _p($app->ParrentObject->Code);  ?-->&amp;width=450&amp;height=30" alt="" /></div>
<div style="clear:both;">&nbsp;</div>
<table id="mtable" align="center">
    <tbody>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td align="center">
                        <div id="title1"><strong>Form-9<br />
                        Rule No. 5(6)</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <div id="title2"><strong>Form of Certificate For Other Backward Class person applying for Appointment to post under the Government of India or for the purpose of education under the Government Of India</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="65" valign="top"><div style="font-size:12px">Read:<br />
                          1) Govt. Resolution No . C.B.C /1096 -PK 48-MWK-5 Dt. 03-06-1996<br />
                          2) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes,         Other Backward Classes, And Special Backward Classes (Regulation of lssuance and Verification of)         Caste Certificate Act -2000. <br />
                          3) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes,         Other Backward Classes, And Special Backward Classes (Regulation of lssuance and Verification of)         Caste Certificate Rules -2012.<br />
  <b>Documents Verified</b>
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
            <a href="<!--?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?-->/inword/application.php?id=<!--?php _p($_GET['id'])?-->&amp;tab=1&amp;doc=<!--?php _p($remark->IdappDocs); ?-->&amp;code=<!--?php _p($scancode->Option);?-->">
              <div class="addscan">&nbsp;</div>
            </a></div>
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
                        <td height="30" align="center">
                        <div><strong>CASTE CERTIFICATE </strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="300" valign="top"><br />
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that       <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong>resides at <strong>  <!--?php _p($app->ApplicantObject->AddressLine2); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->Taluka2Object); ?-->       </strong> in District <strong>  <!--?php _p($app->ApplicantObject->District2Object); ?-->   </strong>         of the State of <strong><!--?php _p($app->ApplicantObject->State2Object); ?-->    </strong> belongs to the&nbsp; <strong>           <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?-->   </strong>         Caste/Tribes which is recognized as <b> <!--?php if($view == 0) _p($this->lblCast->Text);  else _p($app->ApplicantObject->CastObject->ParentObject.' category Sr. No. '.$app->ApplicantObject->CastObject->Print.' under the '); ?--></b>   Community, which is recognized as an Other backward class under the<br />
                        <br />
                        1) Government of India , Ministry of welfare Resolution No. 12012/68/93-BCC(C), dated the 10th September 1993 published in the Gazette of India, Extraordinary, Part-I, Section-I, No.186, dated the 13th September 1993. <br />
                        2) Government of India , Ministry of welfare Resolution No. 12012/9/94-BCC(C), dated the 19th Oct 1994 published in the Gazette of India, Extraordinary, Part-I, Section-I, No.163, dated the 20th Oct 1994.<br />
                        3) Government of India , Ministry of welfare Resolution No. 12012/7/96-BCC(C), dated the 24th May 1995 published in the Gazette of India, Extraordinary, Part-I, Section-I, No.88, dated the 25th May 1995.<br />
                        4) Government of India , Ministry of welfare Resolution No. 12012/44/96-BCC(C), dated the 6th Dec 1996 published in the Gazette of India, Extraordinary, Part-I, Section-I, No.210, dated the 11th Dec 1996.<br />
                        5) Government of India , Ministry of welfare Resolution No. 12012/44/93-BCC(C),published in the Gazette of India, Extraordinary No.129, dated the 8th July 1997.<br />
                        6) Resolution No. 12013/94-BCC published in the Gazette Of India, Extraordinary No.164 dated 1st Sep 1997.<br />
                        7) Resolution No. 12013/94-BCC published in the Gazette Of India, Extraordinary No.164 dated 11th Dec 1997.<br />
                        8) Resolution No. 12011/12/97-BCC published in the Gazette Of India, Extraordinary No.239 dated 3rd Dec 1997.<br />
                        9) Resolution No. 12011/12/96-BCC published in the Gazette Of India, Extraordinary No.166 dated 3rd Aug 1998..        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        10) Resolution No. 12011/68/93-BCC published in the Gazette Of India, Extraordinary No.171 dated 6th Aug 1998.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        11) Resolution No. 12011/68/98-BCC published in the Gazette Of India, Extraordinary No.241 dated 27th Oct 1999.<br />
                        12) Resolution No. 12011/88/98-BCC published in the Gazette Of India, Extraordinary No.270 dated 6th Dec 1999.<br />
                        13) Resolution No. 12011/36/99-BCC published in the Gazette Of India, Extraordinary No.71 dated 4th Dec 1999. <br />
                        14)  Government of India , Ministry of Social Justice &amp; Empowerment Resolution No. 12012/44/99-BCC, dated the 21st September 2000,published in the Gazette of India, Extraordinary, Part-I, Section-I, No.210, dated the 20st Sep 2000.<br />
                        15) Government of India , Ministry of Social Justice &amp; Empowerment Resolution No. 12015/9/2000-BCC, dated the 6th September 2001,published in the Gazette of India, Extraordinary, Part-I, Section-I, No.246, dated the 6th Sep 2001.<br />
                        16) Government of India , Ministry of Social Justice &amp; Empowerment Resolution No. 12011/1/2001-BCC, dated the 19th June 2003,published in the Gazette of India, Extraordinary, Part-I, Section-I, No.153, dated the 20th June 2003.<br />
                        17) Government of India , Ministry of Social Justice &amp; Empowerment Resolution No. 12011/4/2002-BCC, dated the 13th January 2004,published in the Gazette of India, Extraordinary, Part-I, Section-I, No.9, dated the 13th January 2004.<br />
                        18) Government of India , Ministry of Social Justice &amp; Empowerment Resolution No. 12011//2004-BCC, dated the 16th January 2006,published in the Gazette of India, Extraordinary, Part-I, Section-I, No.9, dated the 16th January 2006. </div>
                        <div style="margin-left:40px; font-size:12px">&nbsp;</div>
                        <div align="justify" style="font-size:12px">(</div>
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong> <!--?php  _p($app->ApplicantObject->Title); ?--></strong> and/or <!--?php _p($noun); ?-->     family ordinarily resides at <strong>   <!--?php _p($app->ApplicantObject->AddressLine1); ?-->   </strong><strong>        , </strong>Taluka    <!--?php _p($app->ApplicantObject->TalukaObject); ?-->    in District <strong>   <!--?php _p($app->ApplicantObject->DistrictObject); ?-->   </strong>&nbsp;&nbsp; of the State of Maharashtra.<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  This is also to certify that he/she does not belongs to the persons/sections (Creamy Layer) mentioned in column 3 of the Government of India, Department of Personal and Training O.M. No. 36012/2293-Estt(Set), dated 8th September 1993.O.M.No.36033/3/2004-Estt. (res.) dated 9th March, 2004, O.M. 36033/3/2004-Estt. (Res) dated 14-10-2008 and OM No. 36033/1/2013-Estt. (Res.) dated 27.5.2013</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="justify">
                         <!--?php if($app->FinalDecision == 3){ ?-->   
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
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>