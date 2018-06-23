<?php
    require('../../qcubed.inc.php');
?>
<?php
if(isset($_GET['id'])){
$application = Application::LoadByIdapplication($_GET['id']);
    $certificate = CertificateTemplet::LoadByIdcertificateTemplet($application->AppliedFor);
    $adress = Address::LoadByIdaddress($application->Applicant);
        if($adress){
            $ledger = Ledger::LoadByIdledger($adress->Of);
             $profile = Profile::LoadByIdprofile($adress->Of);
              $mothers = Gardian::QueryArray(
                                    QQ::AndCondition(
                                                 QQ::Equal(QQN::Gardian()->Of,$adress->Of),
                                                 QQ::Equal(QQN::Gardian()->GardianCat,2)));
            
                if($mothers) 
                    foreach ($mothers as $mother){}
            $fathers = Gardian::QueryArray(
                                    QQ::AndCondition(
                                                 QQ::Equal(QQN::Gardian()->Of,$adress->Of),
                                                 QQ::Equal(QQN::Gardian()->GardianCat,1)));
            
                if($fathers) 
                    foreach ($fathers as $father){} 
            $locals = Gardian::QueryArray(
                                    QQ::AndCondition(
                                                 QQ::Equal(QQN::Gardian()->Of,$adress->Of),
                                                 QQ::Equal(QQN::Gardian()->GardianCat,1)));
            
                if($locals) 
                    foreach ($locals as $local){} 
 
                        $CurrentStatuses = CurrentStatus::QueryArray(
                                               QQ::AndCondition(
                                                       QQ::Equal(QQN::CurrentStatus()->Student, $adress->OfObject->Idledger)));
                        if($CurrentStatuses){
                            foreach ($CurrentStatuses as $CurrentStatus){}
?>
<div style="width:100%;">
<div style="margin-left:15px; margin-right:20px;" >
    <div align="center" style="line-height: 30px;">
        <div style="font-size: 25px;"><strong>WALCHAND COLLEGE OF ENGINEERING</strong></div>
        <div style="font-size: 20px;">(An Autonomous Institute)</div>
        <div style="font-size: 22px;"><strong>VISHRAMBHAG,SANGLI.(M.S)416415</strong></div>
        <div style="float:right">TC NO:</div>
        <div style="margin-bottom: 15px;"></div>
        <div><img src="../../assets/_core/images/Walchand_11.gif" width="90" height="70"  alt=""/>
        </div>
        <div style="font-style:italic; font-size: 20px;">College Leaving/Transfer Certificate</div>
    </div>
    <div style="clear: both"></div>
    <div style="line-height: 28px;">
        <div>(No change in any entry in this certificate shall be made expect by the authority Issuing it and any infrigement of this requirement is liable to Involve the imposition of penalty such that rustication)</div>
        <div align="center" style="font-size: 20px;" ><strong>OFFICE - COPY</strong></div>
        <div align="justify">
         <table>
            <tr>
                <td>1.Name of student:Mr/Ms.</td>
                <td>:</td>
                <td><strong><?php  _p(get_full_name($CurrentStatus->StudentObject->IdloginObject->Name));?></strong></td>
            </tr>
            <tr>
                <td>2.Mother's Name</td>
                <td>:</td>
                <td><strong><?php   _p($mother->GardianName); } ?></strong></td>
            </tr>
            <tr>
                <td>3.Registration No.</td>
                <td>:</td>
                <td><strong><?php _p($ledger->Code); ?></strong></td>
            </tr>
            <tr>
                <td>4.Father's Name/Guardin:Mr.</td>
                <td>:</td>
                <td><strong><?php if($father->GardianName != NULL){ _p($father->GardianName); }elseif($local->GardianName != NULL){ _p($local->GardianName); }?></strong></td>
            </tr>
            <tr>
                <td>5.Religion</td>
                <td>:</td>
                <td><strong><?php _p($profile->ReligionObject);?></strong></td>
            </tr>
            <tr>
                <td>6.Caste</td>
                <td>:</td>
                <td><strong><?php _p($profile->CasteObject); ?></strong> </td>
            </tr>
            <tr>
                <td>7.Date of Birth</td>
                <td>:</td>
                <td><strong><?php _p(date('d-M-Y',  strtotime($adress->Dob))); ?> <?php _p(convert_number(date('d',  strtotime($adress->Dob))))?> <?php _p(date('M',  strtotime($adress->Dob))); ?> <?php _p(convert_number(date('Y',  strtotime($adress->Dob))))?></strong> </td>
            </tr>
            <tr>
                <td>8.Place of Birth</td>
                <td>:</td>
                <td><strong><?php _p($adress->BirthPlace); ?></strong></td>
            </tr>
            <tr>
                <td>9.Nationality</td>
                <td>:</td>
                <td><strong><?php _p($profile->NationalityObject); ?></strong> </td>
            </tr>
            <tr>
                <td>10.Date of Admission</td>
                <td>:</td>
                <td><strong><?php _p(date('d-M-Y',strtotime($profile->AddmissionDate))); ?> </strong></td>
            </tr>
            <tr>
                <td>11.Branch of Engineering/Course</td>
                <td>:</td>
                <td><strong><?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->Name));?> <?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->ParrentObject->Name));?></strong></td>
            </tr>
            <tr>
                <td>12.Date of Pass Out</td>
                <td>:</td>
                <td><strong></strong></td>
            </tr>
            <tr>
                <td>13.Class of Study at the time of leaving the Institute</td>
                <td>:</td>
                <td><strong><?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->ParrentObject->Name));?><?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->Name));?></strong></td>
            </tr>
            <tr>
                <td>14.Reason for leaving the Institute</td>
                <td>:</td>
                <td><strong><?php _p($application->Reason);?></strong></td>
            </tr>
            <tr>
                <td>15.Institute fees,Other Charges &amp; Dues</td>
                <td>:</td>
                <td><strong></strong></td>
             </tr>
            <tr>
                <td>16.Conduct</td>
                <td>:</td>
                <td><strong></strong></td>
            </tr>
            <tr>
                <td>17.Remark</td>
                <td>:</td>
                <td><strong></strong></td>
            </tr>
          </table>
          </div>
       <div style="clear: both"></div>
       <div style="margin-top: 15px;">Certify that above information is in accordance with College register</div>
         <div align="center" style="margin-top: 50px;">
             <div style="float: left">Date: <strong><?php _p(date('d-M-Y',  strtotime(QDateTime::Now()))); ?></strong></div>
                <div style="float: right; width: 20%;font-size:20px;" align="center">Director</div>
            </div>
            <div style="clear: both"></div>
       </div>
    <div style="clear: both"></div>
</div>
    <div style="clear: both"></div>
</div>
<div style="clear: both"></div>
<?php }}
?>
