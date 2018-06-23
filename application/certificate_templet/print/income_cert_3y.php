<!--?php 
 $Y = date('Y');
 $M = date('m');
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
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__)?-->/inword/barcode.php?barcode=<!--?php _p($app->Code);?-->&amp;width=450&amp;height=30" alt="" /></div>
<table width="100%" height="78" align="center" id="mtable">
    <tbody>
        <tr>
            <td width="58%" height="28">&nbsp;</td>
        </tr>
        <tr>
            <td>
            <table id="stable" align="center">
                <tbody>
                    <tr>
                        <td height="42" colspan="2" valign="top">
                        <div id="doc">वाचले<br />
                        <!--?php if($remarks){
    foreach ($remarks as $remark){?-->   <!--?php if($view == 0) $this->lbldelete[$remark->IdappDocs]->Render();  else _p($seq);?-->.       <!--?php _p($remark->DocumentObject->Mname); ?-->:<!--?php  if($view ==1) _p($remark->Remark);  else $this->docsarray[$remark->IdappDocs]->Render(); ?-->   <br />
                        <!--?php $seq = $seq + 1;?--> <!--?php }}  if($view == 0)$this->btnAddDoc->Render(); ?--></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="70" colspan="2" align="center">
                        <div align="center">
                        <h2>उत्पन्नाचा दाखला</h2>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td height="300" colspan="2" valign="top">
                        <div align="justify" style="font-size:17px; line-height:30px; margin-left:20px; margin-right:20px"><br />
                        <!--?php $date = date('Ymd', strtotime($app->Date));?-->     &nbsp;&nbsp;&nbsp;&nbsp;दाखला देणेत येतो की, <strong>         <!--?php _p($app->ApplicantObject->TinSalesTaxNo);?--> <!--?php //_p($verb);?-->           </strong> राहणार <strong><!--?php _p($app->ApplicantObject->AddressLine1);?-->         , </strong>ता <strong><!--?php _p($app->ApplicantObject->TalukaObject->Mname);?-->       </strong>जि.<strong>  <!--?php _p($app->ApplicantObject->DistrictObject->Mname);?-->   </strong>         चे रहिवाशी असून त्यांचे व त्यांच्या कुटुंबियांचे सर्व बाबी पासूनचे  तीन वर्षाचे उत्पन्न बाबवार खालीलप्रमाणे  आहे.
                        <table width="100%" align="center" border="1">
                            <tbody>
                                <tr>
                                    <td width="23%" height="33" align="center"><strong>तपशील </strong></td>
                                    <td width="26%">
                                    <div align="center"><strong>             <!--?php 
            if($M <= 3){
                $Year = $Y - 1;
                $Year1 = $Y;      
                _p('सन '.convert_marathi($Year. " - " .$Year1));
            }else{
                $Year = $Y + 1;
                _p('सन '.convert_marathi($Y. " - " .$Year));
            }    
           ?-->           </strong></div>
                                    </td>
                                    <td width="25%">
                                    <div align="center"><strong>             <!--?php 
            if($M <= 3){
                $Year = $Y - 2;
                 $Year1= $Y-1;                                               
                _p('सन '.convert_marathi($Year. " - " .$Year1));
            }else{
                $Year = $Y - 1;
                _p('सन '.convert_marathi($Year. " - " .$Y));
            }    
           ?-->           </strong></div>
                                    </td>
                                    <td width="26%">
                                    <div align="center"><strong>             <!--?php 
            if($M <= 3){
                $Year = $Y - 3;
                $Year1 = $Y - 2;
                _p('सन '.convert_marathi($Year. " - " .$Year1));
            }else{
                $Year = $Y - 1;
                $Year1 =$Y - 2; 
                _p('सन '.convert_marathi($Year1. " - " .$Year));
            }    
           ?-->           </strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>शेती व मोलमजुरी</td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data1) _p(convert_marathi($app->Data1.'/-')); else  _p('-'); }else{ $this->txtData1->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data2) _p(convert_marathi($app->Data2.'/-')); else  _p('-'); }else{ $this->txtData2->Render();} ?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data3) _p(convert_marathi($app->Data3.'/-')); else  _p('-'); }else{ $this->txtData3->Render(); }?--></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>नोकरी</td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data4) _p(convert_marathi($app->Data4.'/-')); else  _p('-'); }else{ $this->txtData4->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data5) _p(convert_marathi($app->Data5.'/-')); else  _p('-'); }else{ $this->txtData5->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data6) _p(convert_marathi($app->Data6.'/-')); else  _p('-'); }else{ $this->txtData6->Render(); }?--></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>व्यवसाय</td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data7) _p(convert_marathi($app->Data7.'/-')); else  _p('-');  }else{ $this->txtData7->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data8) _p(convert_marathi($app->Data8.'/-')); else  _p('-');  }else{ $this->txtData8->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data9) _p(convert_marathi($app->Data9.'/-')); else  _p('-');  }else{ $this->txtData9->Render(); }?--></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>पेन्शन</td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data10) _p(convert_marathi($app->Data10.'/-')); else  _p('-'); }else{ $this->txtData10->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data11) _p(convert_marathi($app->Data11.'/-')); else  _p('-'); }else{ $this->txtData11->Render(); }?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ){ if($app->Data12) _p(convert_marathi($app->Data12.'/-')); else  _p('-'); }else{ $this->txtData12->Render(); }?--></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>एकूण</strong></td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ) _p(convert_marathi($app->Data1+$app->Data4+$app->Data7+$app->Data10.'/-'));  else $this->lblIncome1->Render();  ?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ) _p(convert_marathi($app->Data2+$app->Data5+$app->Data8+$app->Data11.'/-'));  else $this->lblIncome2->Render(); ?--></div>
                                    </td>
                                    <td valign="top">
                                    <div align="center"><!--?php if($view == 1 ) _p(convert_marathi($app->Data3+$app->Data6+$app->Data9+$app->Data12.'/-'));  else $this->lblIncome3->Render(); ?--></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;अर्जदार यांनी उत्पन्नाबाबत दिलेली माहिती   खोटी ठरलेस  त्यांचेवर कायदेशीर कारवाई करनेस ते पात्र राहतील. सदारचा  दाखला अर्जदार यांच्या मागणीवरून  त्यांचे <strong>        <!--?php if($view == 1 ){  _p($app->Reason); }else{ $this->txtReason->Render(); }?-->       </strong>कामी  देण्यात आला.</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;सदारचा दाखला        ३१/०३/२०१६ पर्यन्त वैध राहील.</p>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="593" align="justify">ठिकाण :<!--?php _p('  '.$adddres->TalukaObject->Mname.'    जि.   '.$adddres->DistrictObject->Mname);?--><br />
                        <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br />
                        दिनांक :- <!--?php if($app->CertificateIssueDate) _p(convert_marathi(date('d/m/Y', strtotime($app->CertificateIssueDate))));?--></td>
                        <td width="589">
                        <div style="float:right" align="center"><br />
                        <!--?php _t($app->SignPatch);?--></div>
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