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
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication)//,
                    //QQ::Equal(QQN::AppDocs()->OnCertificate, TRUE)
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
<div style="background-color:#FFF;">
<div id="bg">
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/inword/barcode.php?barcode=<!--?php _p($app->Code); ?-->&amp;width=450&amp;height=30" alt="" /></div>
<table id="mtable" align="center" border="1">
    <tbody>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td height="54" align="center">
                        <div id="title2" style="margin-left:50px; margin-right:50px">Form of Certificate to be produced by a candidate belonging to Scheduled Caste in support of his claim</div>
                        </td>
                    </tr>
                    <tr>
                        <td height="67" valign="top">
                        <div id="doc">Documents Verified<br />
                        <!--?php if($remarks){
    foreach ($remarks as $remark){ 
    if($remark->OnCertificate == 1){    
    
?--> <!--?php if($view == 0) $this->lbldelete[$remark->IdappDocs]->Render();  else _p($seq); ?-->.     <!--?php _p($remark->DocumentObject);  ?-->:<!--?php  if($view ==1) _p($remark->Remark);  else $this->docsarray[$remark->IdappDocs]->Render();  ?--> <br />
                        <!--?php $seq = $seq + 1; ?--> <!--?php }}}  if($view == 0)$this->btnAddDoc->Render();  ?--></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="28" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="21" align="center">
                        <div id="title"><b>CASTE CERTIFICATE </b></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="383">
                        <div align="justify" style="font-size:12px; line-height:25px"><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong>       <!--?php _p($app->ApplicantObject->Title); ?-->       <!--?php _p($verb); ?-->       </strong>resides at <strong>       <!--?php _p($app->ApplicantObject->AddressLine1); ?--> , </strong>Taluka <strong> <!--?php _p($app->ApplicantObject->TalukaObject); ?--> </strong> in District <strong> <!--?php _p($app->ApplicantObject->DistrictObject); ?--> </strong> of the State of Maharashtra belongs to the&nbsp; <strong> <!--?php if($view == 1) _p($app->ApplicantObject->CastObject); else $this->lstCast->Render(); ?--> </strong>&nbsp;Caste at Sr.No <strong>           <!--?php if($app->ApplicantObject->Cast !=NULL)  _P($app->ApplicantObject->CastObject->Print);   ?-->         </strong>which is recognized as <b><!--?php if($app->ApplicantObject->Cast !=NULL) _P($app->ApplicantObject->CastObject->Abbrivation);   ?--></b> under:</div>
                        <div style="margin-left:40px; font-size:12px; line-height:25px"><br />
                        # The Constitution (Scheduled Caste) Order 1950.<br />
                        # The Constitution (Scheduled Tribes)Order 1950.<br />
                        # The Constitution (Scheduled Caste) (Union Territories) Order 1951<br />
                        # The Constitution (Scheduled Tribes) (Union Territories) Order 1951.</div>
                        <div align="justify" style="font-size:12px; line-height:25px">(As amended by the Scheduled Castes And Scheduled Tribes Lists (Modification) order, 1956, the Bombay reorganization Act, 1960, the Punjab Reorganization Act, 1966, The State Of Himachal Pradesh Act, 1976, The North Eastern Areas (Reorganization) Act, 1971 and the Sceduled Castes and Scheduled Tribes and Orders (Amendment) Act, 1976).</div>
                        <div style="margin-left:40px; font-size:12px; line-height:23px"><br />
                        # The Constitution (Jammu &amp; Kashmir) Scheduled Caste Order 1956. <br />
                        # The Constitution (Andaman &amp; Nicobar Islands) Scheduled Caste Order 1959 as amended by the Scheduled Castes and Scheduled Tribes orders (Amendment Act, 1976)<br />
                        # The Constitution (Dadra &amp; Nagar Haveli) Scheduled Caste Order 1962,The Constitution (Dadra &amp; Nagar Haveli) Scheduled Tribes Order 1962.</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
<div id="bg">
<table id="mtable" align="center">
    <tbody>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td height="600" colspan="2" valign="top">
                        <div style="margin-left:40px; font-size:12px; line-height:23px"><br />
                        # The Constitution (Pondicherry) Scheduled Caste Order 1964.<br />
                        # The Constitution (Scheduled Tribes)(Uttar Pradesh) Order 1967.<br />
                        # The Constitution Goa (Daman &amp; Div) Scheduled Castes Order 1968.<br />
                        # The Constitution Goa (Daman &amp; Div) Scheduled Tribes Order 1968.<br />
                        # The Constitution (Nagaland) Scheduled Tribes Order 1970.<br />
                        # The Constitution (Sikkim) Scheduled Castes Order 1978.<br />
                        # The Constitution (Sikkim) Scheduled Tribes Order 1978.</div>
                        <div align="justify" style="font-size:12px; line-height:25px">The certificate is issued on the basis of the  <b>         <!--?php if($app->ApplicantObject->Cast != NULL){ _P($app->ApplicantObject->CastObject->ParentObject); } ?-->         </b>Certificate issued to <strong>           <!--?php 
           foreach ($remarks as $remark){
                if($remark->Document == 269){
                    if($view == 0)$this->docsarray[$remark->IdappDocs]->Render();
                    else _p($remark->Remark);
                            
                }
            }
        ?--></strong> of <strong>         <!--?php
            
            foreach ($remarks as $remark){
                if($remark->Document == 270){
                    if($view == 0)$this->docsarray[$remark->IdappDocs]->Render();
                    else _p($remark->Remark);
                            
                }
            }
                
        ?-->             </strong>who belongs to <strong>               <!--?php 
                foreach ($remarks as $remark){
                if($remark->Document == 272){
                    if($view == 0)$this->docsarray[$remark->IdappDocs]->Render();
                    else _p($remark->Remark);
                            
                }
            }
        ?-->               </strong>which is recognised as a <b>                 <!--?php if($app->ApplicantObject->Cast != NULL){ _P($app->ApplicantObject->CastObject->ParentObject); } ?-->                 </b> in the state teritory <strong>                 <!--?php 
                foreach ($remarks as $remark){
                if($remark->Document == 303){
                    if($view == 0)$this->docsarray[$remark->IdappDocs]->Render();
                    else _p($remark->Remark);
                            
                }
            }
        ?-->                 </strong>
                        <p>&nbsp;</p>
                        issued by the <strong>           <!--?php 
        foreach ($remarks as $remark){
                if($remark->Document == 271){
                    if($view == 0)$this->docsarray[$remark->IdappDocs]->Render();
                    else _p($remark->Remark);
                            
                }
            }
        ?--></strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td width="473" align="justify">Place:       <!--?php _p($adddres->TalukaObject.' Dist. '.$adddres->DistrictObject); ?-->       <br />
                        <!--?php _p($app->AppliedForObject->Abbrivation)?-->       : <br />
                        Date:-       <!--?php _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
                        <td width="474">
                        <div style="float:right" align="center"><br />
                        <!--?php _t($app->SignPatch); ?--></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>