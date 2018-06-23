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
            $educations = EducationDetails::LoadArrayByStudent($adress->Of);
            if($educations){
              foreach($educations as $education){}
                        $CurrentStatuses = CurrentStatus::QueryArray(
                                               QQ::AndCondition(
                                                       QQ::Equal(QQN::CurrentStatus()->Student, $adress->OfObject->Idledger)));
                        if($CurrentStatuses){
                            foreach ($CurrentStatuses as $CurrentStatus){}
?>
<div>
<div style="width:100%;">
<div align="center" style="line-height: 20px; margin-left:8%; margin-right:8%;">
    <div align="center">
            <div>Approved by - A.I.C.T.E.New Delhi</div>
            <div>vide letter F.No.P-2/B-III/RC/(BB)93/31066 dt.</div>
            <div style="float:left; margin-left:8%; margin-top: 20px;" ><img src="../../assets/_core/images/Walchand_11.gif" width="100" height="80"  alt=""/> </div>
            <div style="float:right; font-size: 25px; margin-right:30%; margin-top: 25px;"><strong>Walchand College of Engineering,</strong></div>
            <div style="float:right; font-size: 25px; margin-right:30%; margin-top: 18px;">VISHRAMBHAG,SANGLI.</div>
    </div>
    <div style="clear: both"></div>
    <div style="font-size: 23px;" align="center"><strong>LEAVING CERTIFICATE</strong></div>
    <div style="clear: both"></div>
    <div style="margin-top: 20px; line-height: 25px; font-size: 19px;" align="justify" >
            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No change in any entry in this Certificate shall be made except by the authority issueing it and infringement is liable to involve a penalty such as rustication</div>
            <p></p>
            <div style="float: left" >Enrolment No. of Candidate </div>
            <div style="float: right">L.C.No &nbsp;&nbsp; &nbsp;&nbsp;</div>
            <div style="clear: both"></div>
            <div>Gen. Register No. of the Candidate : <strong><?php _p($ledger->Code); ?></strong></div>
            <div>Name Of Institution : <strong>Walchand College Of Engineering,Sangli.</strong></div>
            <div>Name Of Candidate : <strong><?php  _p(get_full_name($CurrentStatus->StudentObject->IdloginObject->Name));?></strong></div>
            <div style="float: left;"> Caste : <strong><?php _p($profile->CasteCatObject); ?></strong> </div> <div style="float: right; margin-right:40%;">  Sub Caste : <strong><?php _p($profile->CasteObject); ?> </strong></div><div style="clear: both"></div>
            <div>Place Of Birth : <strong><?php _p($adress->BirthPlace); ?></strong></div>
            <div>Date of Birth(according to christian era)in words and figures : <strong><?php _p(date('d-M-Y',  strtotime($adress->Dob))); ?> <?php _p(convert_number(date('d',  strtotime($adress->Dob))))?> <?php _p(date('M',  strtotime($adress->Dob))); ?> <?php _p(convert_number(date('Y',  strtotime($adress->Dob))))?></strong></div>
            <div>Institution last attended : <strong> <?php _p($education->Institute);?> </strong></div>
            <div>Date of admission of this institute : <strong><?php _p(date('d-M-Y',strtotime($profile->AddmissionDate))); ?></strong></div>
            <div>Conduct : </div>
            <div>Date of leaving this institution :</div>
            <div>Course and year in which studying and since when : <strong> <?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->Name));?> <?php _p(delete_all_between ("[", "]",$CurrentStatus->RoleObject->ParrentObject->ParrentObject->Name));?> <?php _p(date('d-M-Y',strtotime($profile->AddmissionDate))); ?></strong></div>
            <div>Reason of leaving Institution : <strong><?php _p($application->Reason);?></strong> </div>
            <div>Remark : </div>
            <div>Date : </div>
            <div>Place- <strong>SANGLI</strong></div>
            <div style="clear: both"></div>
            <div>
                <div style="float:left;  width: 50%;">F.w.c.s to </div>    
                <div style="float: left; width: 50%;"> <div style="float: left; width: 50%;"> Registrar</div>
                    <div style="float: left; width: 30%;"> Director </div><div style="clear: both"></div>
                    Walchand College of Engineering,Sangli.
                </div>
            </div>
            <div style="clear: both"></div>
    </div>
     <div style="clear: both"></div>
<div>&nbsp;</div>
</div>
</div>
        <?php }}} }?>