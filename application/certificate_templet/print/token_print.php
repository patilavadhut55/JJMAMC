
<!--?php
//require('../../../qcubed.inc.php');
$objData = Application::LoadByIdapplication($_GET['id']);
$logins = LoginHasRole::LoadArrayByLoginIdlogin($objData->DataEntryBy);
foreach ($logins as $login){}
?-->

<table width="100%" border="1" style="height: 400px; font-size: 12px;">
        <tr>
            <td height="53" colspan="4">
            <div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/barcode/barcode.php?barcode=<!--?php _p($objData->Code); ?-->&amp;width=550&amp;height=40" alt="" /></div>
            </td>
        </tr>
        <tr>
            <td height="39" colspan="4" valign="top">
            <div style="float:left; width: 120px;"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__) ?-->/logo.png " height="65" alt="Setu"/></div>
            <div style="float:left; ">
            <h3><strong><!--?php _p($login->CompanyObject); ?--></strong><br>
           <!--?php //_p($objData->ApplicantObject->TalukaObject); ?--></h3>
            </div>
            </td>
        </tr>
        <tr>
            <td height="21" colspan="4">पावती क्रमांक:<strong>       <!--?php _p($objData->Code); ?-->&nbsp;&nbsp;     </strong> 
                तपशिल शुल्क - &nbsp; <strong>
                    <!--?php 
                        $rates = Rate::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Rate()->CertificateTemplet, $objData->AppliedFor),
                                    QQ::LessOrEqual(QQN::Rate()->EffectFrom, $objData->Date)    
                                ));
                            if($rates){
                            foreach($rates as $rate){}
                                _p($rate->Total);
                        }
                        ?-->
                </strong></td>
        </tr>
        <tr>
            <td height="19" colspan="4">
            <div align="right">(अर्जाची स्विकृती)</div>
            </td>
        </tr>
        <tr>
            <td height="19" colspan="4">अर्जदाराचे नाव :         <!--?php _p($objData->ApplicantObject->Title); ?--></td>
        </tr>
        <tr>
            <td height="19" colspan="4">अर्जाचा विषय :<strong> <!--?php _p($objData->AppliedForObject); ?-->     </strong></td>
        </tr>
        <tr>
            <td height="34" colspan="4" valign="top">कागदपत्रे:<strong><br />
            <!--?php $objDocs = AppDocs::LoadArrayByApplication($objData->Idapplication);
 foreach ($objDocs as $objDoc){
      ?-->     </strong>       <!--?php _p($objDoc->DocumentObject); ?-->: <!--?php _p($objDoc->Remark); ?-->,     <!--?php } ?--></td>
        </tr>
        <tr>
            <td width="196" height="20" >अर्ज दिलेची दिनांक : <br />
            <!--?php _p($objData->Date); ?--></td>
            <td colspan="3">तहसील स्थरावरील सर्व प्रमाणपत्र मिळण्याचा कालावधी 8 दिवस. प्रांत स्थरावरील सर्व प्रमाणपत्र मिळण्याचा कालावधी 15 दिवस.</td>
        </tr>
        <tr>
            <td height="19" colspan="4">नोंदणी क्रमांक<strong>       :  <!--?php _p($objData->Code); ?-->     </strong></td>
        </tr>
        <tr>
            <td valign="top" height="79" colspan="3"><strong>&nbsp; सुचना :</strong>- आपल्या अर्जाची स्थिती जाणून घेण्यासाठी आपला <!--?php _p($objData->Code); ?--> हा टोकन नंबर <strong>esetunashik.com</strong> या वेबसाईट वर शोधा.<br />
                &nbsp; सुट्टीचे दिवस वगळता<br />
                &nbsp; १) टोकन पावती मूळ प्रत आणल्याशिवाय प्रमाणपत्र मिळणार नाही.<br />
                &nbsp; २) प्रमाणपत्र घेण्याकरिता अर्जदाराने स्वतः येणे आवश्यक आहे.<br />
            &nbsp; ३) अर्ज नामंजूर झाल्यास सेतू सुविधा केंद्र जबाबदार राहणार नाही.
            </td>
             <td width="153">
            
            <div style="padding: 60px 10px 5px 10px;" align="center">
            Authorized Sign
            </div>
            </td>
        </tr>
       
    
</table>
