<!--?php
$objData = Application::LoadByIdapplication($_GET['id']);
$logins = LoginHasRole::LoadArrayByLoginIdlogin($objData->DataEntryBy);
foreach ($logins as $login){}
?-->
<div style="background-color:#FFF";>
  <table width="487" border="1" >
  <tr>
        <td colspan="4"><div align="center">
      <img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/barcode/barcode.php?barcode=<!--?php _p($objData->Code); ?-->&amp;width=550&amp;height=40" alt="" />
    </div>
    </td>
    </tr>
  <tr>
      <td colspan="4" valign="top">
      <div style="float:left; width: 150px;">
        <img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__) ?-->/logo.png" alt="Setu" />
      </div>
      <div style="float:left; ">
      <h3><strong><!--?php _p($login->CompanyObject); ?--></strong></h3>
	  <h3><!--?php _p($objData->ApplicantObject->TalukaObject); ?--></h3>
      </div>
      </td>
    </tr>
  <tr>
    <td colspan="4">पावती क्रमांक:<strong>
      <!--?php _p($objData->Code); ?-->&nbsp;&nbsp;
    </strong> तपशिल शुल्क <strong>२२.४७/- </strong></td>
    </tr>
  <tr>
    <td colspan="4"><div align="right">(अर्जाची स्विकृती)</div></td>
    </tr>
  <tr>
    <td colspan="4">अर्जदाराचे नाव :
        <!--?php _p($objData->ApplicantObject->Title); ?-->
       
    </td>
    </tr>
  <tr>
    <td colspan="5">अर्जाचा विषय :<strong>
<!--?php _p($objData->AppliedForObject); ?-->
    </strong></td>
    </tr>
  <tr>
      
    <td colspan="5" valign="top">कागदपत्रे:<strong><br/>
        <!--?php $objDocs = AppDocs::LoadArrayByApplication($objData->Idapplication);
 foreach ($objDocs as $objDoc){
      ?-->
    </strong>
      <!--?php _p($objDoc->DocumentObject); ?-->: <!--?php _p($objDoc->Remark); ?-->,
    <!--?php } ?--></td>
    </tr>
  <tr>
    <td width="259" colspan="1">अर्ज दिलेची दिनांक : <br/>
    <!--?php _p($objData->Date); ?--></td>
    <td width="212" colspan="3">तहसील स्थरावरील सर्व प्रमाणपत्र मिळण्याचा कालावधी 8 दिवस. प्रांत स्थरावरील सर्व प्रमाणपत्र मिळण्याचा कालावधी 15 दिवस.</td>
    </tr>
  <tr>
    <td height="32" colspan="4">नोंदणी क्रमांक<strong>
      :  <!--?php _p($objData->Code); ?-->
    </strong></td>
    </tr>
 
  <tr>
    <td  colspan="5" valign="top" height="20">
    <strong>&nbsp; सुचना:</strong>-<br/>&nbsp; सुट्टीचे दिवस वगळता<br>
    &nbsp; १) टोकन पावती मूळ प्रत आणल्याशिवाय प्रमाणपत्र मिळणार नाही.<br>
      &nbsp; २) प्रमाणपत्र घेण्याकरिता अर्जदाराने स्वतः येणे आवश्यक आहे.<br>
      &nbsp; ३) अर्ज नामंजूर झाल्यास सेतू सुविधा केंद्र जबाबदार राहणार नाही.</pre>
      </td>
    </tr>
  <tr>
    <td  colspan="4" valign="top" >
 <div style="float:left; "><pre>आपल्या अर्जाची स्थिती जाणून घेण्यासाठी आपला <!--?php _p($objData->Code); ?--> हा टोकन नंबर esetusangli.co.in या वेबसाईट वर शोधा.</pre></div>
<div style="padding: 70px 5px 0 0; float:right"; align="center">
        <p>Authorized Sign</p>
    </div></td>
    </tr>
  </table>
</div>