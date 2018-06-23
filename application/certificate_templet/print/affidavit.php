<!--?php 
$id= $_GET['id'];
    $objData = Application::LoadByIdapplication($id);
    $objmem = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'], $_SESSION['role']);
?-->
<table width="600" border="0" cellspacing="5" cellpadding="5" align="center">
    <tbody>
        <tr>
          <td colspan="2" align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/barcode/barcode.php?barcode=<!--?php if($app->Parrent == NULL) _p($app->Code); else _p($app->ParrentObject->Code);  ?-->&amp;width=450&amp;height=30" alt="" /></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><!--?php 
            $apphadocs = AppDocs::LoadArrayByApplication($id);
            foreach ($apphadocs as $apphadoc){
                if($apphadoc->Document == 497 && $apphadoc->Scans != NULL){
                $scans = explode(",", $apphadoc->Scans);
                foreach ($scans as $scan){
                    
                if (file_exists('../upload/documents/A'.$objData->Code.'/'.$scan.'.png')) {
                    
            ?-->             <img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/upload/documents/A<!--?php _p($objData->Code.'/'.$scan) ?-->.png" alt="" />             <!--?php
            }}}}
            ?--></td>
        </tr>
        <tr>
            <td width="429">
            <div style=" font:'Times New Roman', Times, serif; font-size:16px; margin-left:10px">
            <p><strong> <!--?php _p($objData->AppliedForObject->Abbrivation.' : '.$objData->CerificateNumber); ?--></strong><br />
            COLLECTORATE <!--?php _p(strtoupper($objmem->DistrictObject));?--><br />
            Date:<!--?php _p(date('d/m/Y' ,  strtotime($objData->CertificateIssueDate))); ?--><br />
            Solemnly Affirmed before me by <br />
            <strong>               <!--?php  _p(strtoupper($objmem->DistrictObject));  ?-->               </strong></p>
            <div style="height: 20px;">&nbsp;</div>
            
            Executive Magistrate<br />
            <!--?php   _p($objmem->TalukaObject); ?-->
            <p>&nbsp;</p>
            </div>
            </td>
            <td><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/upload/ledgers/<!--?php _p($objData->ApplicantObject->OfObject->Code) ?-->.png" width="130;" alt="" /></td>
        </tr>
    </tbody>
</table>