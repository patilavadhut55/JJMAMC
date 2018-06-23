<!--?php
$application = Application::LoadByIdapplication($_GET['id']);
$certificate = CertificateTemplet::LoadByIdcertificateTemplet($application->AppliedFor);
$adress = Address::LoadByIdaddress($application->Applicant);

$CurrentStatuses = CurrentStatus::QueryArray(
                       QQ::AndCondition(
                               QQ::Equal(QQN::CurrentStatus()->Student, $adress->OfObject->Idledger)));
if($CurrentStatuses){
    foreach ($CurrentStatuses as $CurrentStatus){}

?-->
<div>
<div style="width:100%;">
<div align="center" style="line-height: 10px;">
<p align="center">M.T.E. Society's</p>
<p style="font-size:22px;" align="center"><strong>WALCHAND COLLEGE OF ENGINEERING</strong></p>
<p align="center">Vishrambag,Sangli 416 415</p>
<p align="center">Tel. No. 2300383</p>
<p align="center"><img src="../../assets/_core/images/Walchand_11.gif" width="80" height="80" alt="" /></p>

</div>
<div style="margin-bottom:5%;">
<div style="float:left; margin-left:8%;"><label>No. &nbsp;&nbsp; <!--?php _p(str_pad($certificate->Counter, 3, "0", STR_PAD_LEFT)); ?--> <br />
</label></div>
<div style="float:right;margin-right:8%;"><label>Date : <!--?php _p(date('d/m/Y',  strtotime(QDateTime::Now())));?--> <br />
</label></div>
</div>
<p style="font-size:22px;" align="center"><strong>BONAFIDE CERTIFICATE</strong></p>
<div align="justify" style="margin-right:8%; line-height: 20px;">
<div style="margin-left:8%; font-size:20px;  ">This is to certify that,</div>
<div style="margin-left:8%; font-size:20px; ">Shri / Miss <strong><!--?php _p(GetFullNameNew($CurrentStatus->StudentObject->IdloginObject->Name,$CurrentStatus->StudentObject->IdloginObject->Code));?>--></strong>         Roll No.<strong><!--?php _p($CurrentStatus->RollNo);  ?--></strong><span style="color: #D6D7D6">    </span>is/was a bonafide Student of this         College and is / was Studying in &nbsp; <strong><!--?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->Name));?--></strong>         Class During the academic year  &nbsp;<strong> <!--?php _p($CurrentStatus->CalenderYearObject->Name) ?--> </strong></div>
<div style="clear: both;">&nbsp;</div>
<div style="float: right; font-size:20px;  margin-top: 38px;">
<div align="center">Vice Principal</div>
<div align="center">&nbsp; Polytechnic Wing</div>
<div align="center">Walchand College of Engg.</div>
<div align="center">Sangli.</div>
</div>
</div>
<div style="clear: both;">&nbsp;</div>
<!--?php } ?--></div>
</div>
