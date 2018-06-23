<!--?php 
$app = Application::LoadByIdapplication($_GET['id']);
$name = explode(" ", $app->ApplicantObject->Title);
$verb = $noun = NULL;
if($name[0] == "Mr." || $name[0] == 'Master')
 $verb = "Son Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Miss" )
    $verb = "Daughter Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Mrs" )
    $verb = "Daughter Of ".$app->ApplicantObject->Web.' Wife of'.$app->ApplicantObject->CstNo;

//
if($name[0] == "Mr." || $name[0] == 'Master')
    $noun = "His ";
else
    $noun = "Her ";
//
$view = 0;
if(isset($_GET['print'])) $view = 1;

    $seq = 1;
    if($app->AppliedForObject->Group == 2){
     if($view == 0)
         $remarks = AppDocs::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication)
                    ),QQ::OrderBy(QQN::AppDocs()->Seq)
            );
     else
         $remarks = AppDocs::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
                    QQ::Equal(QQN::AppDocs()->OnCertificate, TRUE)
                    ),QQ::OrderBy(QQN::AppDocs()->Seq)
            );
    }else{
    $remarks = AppDocs::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
                    QQ::Equal(QQN::AppDocs()->OnCertificate, TRUE)
                    ),QQ::OrderBy(QQN::AppDocs()->Seq)
            ); 
    }
    
//sign patch
$logins = LoginHasRole::LoadArrayByLoginIdlogin($app->DataEntryBy);
foreach ($logins as $login){}
$adddress = Address::LoadArrayByRoll($login->Company);
foreach ($adddress as $adddres){}
 $scancode = Settings::LoadByName("Scan");

?-->
<div id="bg">
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/inword/barcode.php?barcode=<!--?php _p($app->Code); ?-->&amp;width=450&amp;height=30" alt="" /></div>
<table id="mtable" align="center">
    <tbody>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td align="center">
                        <div id="title1"><strong>परिशिष्ठ क</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <p align="center"><strong><u>Form of Caste Certificate to be issued Other Backward Classes,  Vimukta Jati (A), Nomadic Tribe(B,C&amp;D) and Special Backward Category and its  synonyms belonging to </u></strong><strong><u>State of Maharashtra along with Non Creamy Layer Status</u></strong><strong><u>.</u></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td height="65" valign="top">
                        <div id="doc"><strong>
                        <div align="center">(PART-A)</div>
                        </strong><br />
                        Read:<br />
                        I ) Govt.Resolution No.C.B.C./l 096-PK-48-MWK 5 Dt-03.06. I 996<br />
                        2) Government Resolution No.CBC- I 0/200 l/CR- 1 1 I /BCW-V dated 29b May,2003<br />
                        3) Gow.ResolutionNo.C.B.C/10/20061PK-15A4WIV5-MVB,Mumbai32 Dt-30.06.2006<br />
                        4) Maharashtra Scheduled Castes, Scheduled Tribes, De Notified Tribes (Vimukta Jati), Nomadic Tribes, Other<br />
                        Backward Classes, And Special Backward Classes (Regulation of Issuance and Verification of) Caste<br />
                        Certificate Act -2000.<br />
                        5) Government Resolution No.CBC- 1 0 /2008/PK-697/MWK- l, dated 24.06.20 13<br />
                        6) Government Resolution No.CBC-20 13 /PK-182/MWK- I dated I 7.08 .2013.<br />
                        Documents Verified:<br />
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
                                    <!--?php } $this->btnAddDoc->Render(); }else{ 
if($remarks){ $sr = 1; foreach($remarks as $remark){     ?-->
                                    <div><!--?php _p($sr++.'. '.$remark->DocumentObject.' : '.$remark->Remark); ?--></div>
                                    <!--?php } ?--></td>
                                </tr>
                                <!--?php }} ?-->
                            </tbody>
                        </table>
                        </div></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="70" align="center">
                        <div id="title"><strong>CASTE CERTIFICATE </strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="300" valign="top"><br />
                        <div align="justify" id="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>1.This is to certify that <strong><!--?php _p($app->ApplicantObject->Title); ?--> <!--?php _p($verb); ?--></strong>resides at <strong>  <!--?php _p($app->ApplicantObject->AddressLine2); ?-->         , </strong>Taluka  <strong><!--?php _p($app->ApplicantObject->Taluka2Object); ?-->       </strong> in District <strong>  <!--?php _p($app->ApplicantObject->District2Object); ?-->   </strong>             of the State of Maharashtra &nbsp; <strong>           <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?-->   </strong>             Caste/Tribes which is recognized as <b> <!--?php if($view == 0) _p($this->lblCast->Text);  else _p($app->ApplicantObject->CastObject->ParentObject.' category Sr. No. '.$app->ApplicantObject->CastObject->Print.' under the Government Resolution No. '.$app->ApplicantObject->CastObject->Abbrivation); ?--></b> as amended from time to time.<br />
                        2. <strong>             <!--?php  _p($app->ApplicantObject->Title); ?-->             </strong> and/or             <!--?php _p($noun); ?--> family ordinarily resides at <strong> <!--?php _p($app->ApplicantObject->AddressLine1); ?--> </strong><strong> , </strong>Taluka <!--?php _p($app->ApplicantObject->TalukaObject); ?--> in District <strong> <!--?php _p($app->ApplicantObject->DistrictObject); ?--> </strong>&nbsp;&nbsp; of the State of Maharashtra.</p>
                        <p>3. This is to certify that              <!--?php  _p($app->ApplicantObject->Title); ?-->               does not belong belongs to the person/sections (Creamy Layer ) mentioned in the             Government of Maharashtra Gazette ,Part IV-B. Date I 2gdo January 2004 Maharashtra State Public Service             (Reservation for S.C./S.T./.D.T./(V.J.),N.T., S.B.C.&amp; O.B.C.Act,200l and instruction and guidelines laid down in the             Government Resolution, Social Justice, Cultural Affairs, Sports &amp; Special Assistance Department No.CBC-1094/CR-             86/BCW-V, dated l6s June 1994 and Government Resolution No.CbC -LO/20O6]PK-122/MWK-5 dated 206 October             2006 as amended from time to time.<br />
                        4.This Certificate is valid upto<strong>   <!--?php
      $date = 0;
      $date = date('Ymd', strtotime($app->Date));
      
      if($date > 20140331 && $date < 20150331 ){
      $docs = AppDocs::QueryArray(
      QQ::AndCondition(
      QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
      QQ::OrCondition(
      QQ::Equal(QQN::AppDocs()->Document, 301),
      QQ::Equal(QQN::AppDocs()->Document, 302),
      QQ::Equal(QQN::AppDocs()->Document, 317))        
              ));
      }elseif($date > 20150331 ){
         $docs = AppDocs::QueryArray(
      QQ::AndCondition(
      QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
      QQ::OrCondition(
      QQ::Equal(QQN::AppDocs()->Document, 302),
      QQ::Equal(QQN::AppDocs()->Document, 317),
      QQ::Equal(QQN::AppDocs()->Document, 333))        
              )); 
      }else{
      $docs = AppDocs::QueryArray(
      QQ::AndCondition(
      QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
      QQ::OrCondition(
      QQ::Equal(QQN::AppDocs()->Document, 300),
      QQ::Equal(QQN::AppDocs()->Document, 301),
      QQ::Equal(QQN::AppDocs()->Document, 302)
      )));
      }
      $year = 0;
      foreach ($docs as $doc){
       if($doc->Remark < 600000) $year = $year+1;          
      }
      
      if($date > 20140331 && $date < 20150331   ){
      if ($year == 1) _p('31 March 2015');
      if ($year == 2) _p('31 March 2016');
      if ($year == 3) _p('31 March 2017');
      }elseif($date > 20150331  ){
      if ($year == 1) _p('31 March 2016');
      if ($year == 2) _p('31 March 2017');
      if ($year == 3) _p('31 March 2018');
      }else{
      if ($year == 1) _p('31 March 2014');
      if ($year == 2) _p('31 March 2015');
      if ($year == 3) _p('31 March 2016');
      }
      ?--> </strong>from the date of issue</p>
                        </div>
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
<div style="clear: both;">&nbsp;</div>
</div>