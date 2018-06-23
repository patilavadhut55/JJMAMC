<!--?php 
for($i=0;$i<2;$i++){
if(isset($_GET['id'])){
$application = Application::LoadByIdapplication($_GET['id']);
$certificate = CertificateTemplet::LoadByIdcertificateTemplet($application->AppliedFor);
$adress = Address::LoadByIdaddress($application->Applicant);
$ledger = Ledger::LoadByIdledger($adress->Of);
$CurrentStatuses = CurrentStatus::QueryArray(
                       QQ::AndCondition(
                               QQ::Equal(QQN::CurrentStatus()->Student, $adress->OfObject->Idledger)));
if($CurrentStatuses){
    foreach ($CurrentStatuses as $CurrentStatus){}
    

?-->
<div style="margin-top: 20px;">
<div style="width:100%;">
<div align="center" style="line-height: 20px; margin-left:5%; margin-right:5%; font-family: arial;">
<div style="float:left; margin-left:7%; margin-top: 10px; margin-bottom: 10px;"><img src="../../assets/_core/images/Walchand_11.gif" width="80" height="60" alt="" /></div>
<div style="float:right; margin-right:30%; margin-top: 20px;">
<div style="font-size: 20px;"><strong>Walchand College Of Engineering</strong></div>
<div style="font-size: 16px;"><strong>(An Autonomous Institute)</strong></div>
<div style="font-size: 14px; margin-top: 10px;"><strong>VISHRAMBHAG,SANGLI.(M.S)416415</strong></div>
</div>
<div style="clear:both; border-bottom:1px solid #000">&nbsp;</div>
<div style="margin-bottom:8%; margin-top: 15px;">
<div style="float:left; margin-left:8%; font-size: 14px;"><label>Ref:. Acd/Cert/ &nbsp;&nbsp; &nbsp;<!--?php _p(date('Y'));?--><br />
</label></div>
<div style="float:right; margin-right:8%; font-size: 14px;"><label>Date : <!--?php _p(date('d-M-Y',  strtotime(QDateTime::Now())));?--><br />
</label></div>
</div>
<div style="clear: both;">&nbsp;</div>
<div style="font-size:16px; " align="center"><strong><u>BONAFIDE CERTIFICATE </u></strong></div>
<div align="center">&nbsp;</div>
<div style="margin-left:8%; font-size:12px; margin-right:8%; line-height: 25px;" align="justify"><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;This is to certify that &nbsp;<!--?php _p(GetFullNameNew($CurrentStatus->StudentObject->IdloginObject->Name,$CurrentStatus->StudentObject->IdloginObject->Code));?--> PRN NO:  <!--?php _p($ledger->Code);?--> is a bonafide student of this college and is studying in  &nbsp;<!--?php _p($CurrentStatus->SemisterObject->ParrentObject->Name);?--> <!--?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->Name));?--> <!--?php if($CurrentStatus->RoleObject->ParrentObject->ParrentObject->Parrent == 250){ _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->ParrentObject->ParrentObject->Name)); }else{ _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->ParrentObject->Name)) ; }?--> class during the academic year &nbsp;<!--?php _p($CurrentStatus->CalenderYearObject->Name)?--></strong>
<div style="float: right; font-size:15px;  margin-top: 75px; line-height: 20px;">
<div align="center"><strong>DEAN(STUDENT WELFARE)</strong></div>
<div align="center"><strong>Walchand College of Engineering.</strong></div>
<div align="center"><strong>Sangli.</strong></div>
</div>
</div>
<div style="clear: both;">&nbsp;</div>
<!--?php }}?--></div>
</div>
<div style="clear: both;">&nbsp;</div>
</div>
<div style="clear: both;">&nbsp;</div>
<!--?php } ?-->