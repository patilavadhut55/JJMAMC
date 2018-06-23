<?php
require_once('../../qcubed.inc.php');
?>
<?php if (isset($_GET['view']) == 1) { ?>


    <style>
        body{
            background-color: #FFF !important;
        }
    </style>

<?php } ?>
<?php
if (isset($_GET['id'])) {
    $led = Ledger::LoadByIdledger($_GET['id']);
    $adds = Address::LoadArrayByOf($_GET['id']);
    $profile = Profile::LoadByIdprofile($_GET['id']);
    $current = CurrentStatus::LoadByIdcurrentStatus($_GET['id']);
    ?>

    <script language="javascript">
        function Clickheretoprint() {
            var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
            disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("formprint").innerHTML;

            var docprint = window.open("", "", disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>');
            docprint.document.write(content_vlue);
            docprint.document.write('</body></html>');
            docprint.document.close();
        }
    </script>
    <h1><?php _p($led->Name); ?>  's Profile</h1>
    <?php if (isset($_GET['edit'])) { ?>
        <div class="pull-left">
            <a href="admission.php?id=<?php _p($led->Idledger); ?>" target="_blank">
                <span class="btn btn-danger margin-left-right">Edit</span></a>
            <a href="summary.php?id=<?php _p($led->Idledger); ?>&view=1&edit=1">
                <span class="btn btn-success margin-left-right">View Profile</span></a>
            <a href="summary.php?id=<?php _p($led->Idledger); ?>&view=1&idcard=1&edit=1">
                <span class="btn btn-warning margin-left-right">View Identity Card</span></a>
        </div>

        <div class="pull-left" style="margin-left: 10px;">
            <a href="javascript:Clickheretoprint()">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
            </a>
        </div>
        <div class="clearfix"></div>
    <?php } ?>


    <div style="width: 100%;  " id="formprint">
        <div style="font-size: 20px;border:1px solid #5e5e5e;color:#0088cc;margin-top:10px;margin-bottom:10px;padding-left:10px; ">Addmission Details</div>

        <div class="col-sm-5"><strong>Name </strong></div><div class="col-sm-7"><?php _p($profile->FirstName . ' ' . $profile->MiddleName . ' ' . $profile->LastName); ?></div>
        <div class="col-sm-5"><strong>Contact </strong></div><div class="col-sm-7"><?php if($profile->Contact1) _p($profile->Contact1);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Gender </strong></div><div class="col-sm-7"><?php if($profile->GenderObject->Name) _p($profile->GenderObject->Name);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Course Name </strong></div><div class="col-sm-7"><?php _p(delete_all_between('[', ']', $profile->CourseOfAddmissionObject->Name)); ?></div>
        <div class="col-sm-5"><strong>Admission Date </strong></div><div class="col-sm-7"><?php if($profile->AdmittedDate) _p($profile->AdmittedDate);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Admission Mode </strong></div><div class="col-sm-7"><?php if($profile->AdmissionModeObject->Name) _p($profile->AdmissionModeObject->Name);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Date of birth </strong></div><div class="col-sm-7"><?php if($profile->Dob) _p($profile->Dob); else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Fee Concession</strong></div><div class="col-sm-7"><?php if($profile->FeeConcessionObject->Name) _p($profile->FeeConcessionObject->Name); else _p('-'); ?></div>

        <div style="clear:both;"></div> 
        <div style="font-size: 20px;border:1px solid #5e5e5e;color:#0088cc;margin-top:10px;margin-bottom:10px;padding-left:10px;  ">Personal Details</div>
        <div class="col-sm-5"><strong>Address </strong></div><div class="col-sm-7"><?php if($profile->AddressLine1) _p($profile->AddressLine1); else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Adhar Number</strong></div><div class="col-sm-7"><?php if ($profile->AdharNo) _p($profile->AdharNo);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Religion</strong></div><div class="col-sm-7"><?php if ($profile->ReligionObject) _p($profile->ReligionObject->Name);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Caste</strong></div><div class="col-sm-7"><?php if ($profile->CasteObject) _p($profile->CasteObject->Name);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Caste category</strong></div><div class="col-sm-7"><?php if($profile->FeeConcessionObject->Name) _p($profile->FeeConcessionObject->Name); else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Family Income</strong></div><div class="col-sm-7"><?php if($profile->AnnualFamilyIncome) _p($profile->AnnualFamilyIncome); else _p('-'); ?></div>
      

        <div style="clear:both;"></div> 
        <div style="font-size: 20px;border:1px solid #5e5e5e;color:#0088cc;margin-top:10px;margin-bottom:10px;padding-left:10px;  ">Guardian Details</div>
        <div class="col-sm-5"><strong>Father Name </strong></div><div class="col-sm-7"><?php if($profile->FatherFirstName) _p($profile->FatherFirstName . ' ' . $profile->FatherMiddleName . ' ' . $profile->FatherLastName);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Mother Name </strong></div><div class="col-sm-7"><?php if($profile->MfirstName) _p($profile->MfirstName . ' ' . $profile->MmiddleName . ' ' . $profile->MlastName);else _p('-'); ?></div>
        <div class="col-sm-5"><strong>Address  </strong></div><div class="col-sm-7"><?php if($profile->AddressLine1) _p($profile->AddressLine1); else _p('-'); ?></div>
        
        <?php
        if ($adds && $profile) {
            foreach ($adds as $add) {
                
            }
            $apps = CurrentStatus::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->StudentObject->Idlogin, $_GET['id'])
                                    //  QQ::Equal(QQN::Application()->AppliedFor, 1)
            ));
            if ($apps) {
                foreach ($apps as $app) {
                    
                }

                //if(!isset($_GET['idcard'])){
                ?>
             
            <?php // }  else {   ?>

                <div style="width: 400px !important; border: 1px solid lightgray; height: 290px;" id="formprint">
                    <div style="height: 85px; border-bottom: 1px solid #000;" align="center">
                        <div style="float: left;" class="pull-left">
                            <IMG SRC="../../assets/_core/images/Walchand_11.gif" height="60">
                        </div>
                        Walchand College of Engineering, Sangli. <br>
                        (An Autonomous Institute) <br>
                        Vishrambag, Sangli. -416415 (), India. <br>
                        Website: www.walchandsangli.ac.in <br>
                    </div>
                    <div style="clear: both;"></div>
                    <div style="text-align: center;">
                        <IMG SRC="../../includes/configuration/barcode.php?barcode=<?php _p($led->Code); ?>&width=250&height=30">
                    </div>
                    <div style="clear: both;"></div>
                    
                    <div style="clear: both;"></div>


                    <div style="clear: both"></div>
                    <div class="pull-left" style="float: left; font-weight: bolder; padding-left: 10px;"> HOD </div> 
                    <div class="pull-right" style="float: right; font-weight: bolder; padding-right: 120px;"> Director </div> 
                    <div class="clearfix"></div>
                    <div style="clear: both"></div>
                </div>
    </div>
            <?php // }  ?>
        <?php
        }
    }
}
?>        