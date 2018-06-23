<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
<style>
    body{
        background-color: #FFF !important;
    }
</style>
<?php
if (isset($_GET['mem'])) {
    $led = Ledger::LoadByIdledger($_GET['mem']);
    $adds = Address::LoadArrayByOf($_GET['mem']);
    $profile = Profile::LoadByIdprofile($_GET['mem']);
    $current = CurrentStatus::LoadByIdcurrentStatus($_GET['mem']);
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
    
<?php $this->RenderBegin(); ?>
    <body>
        <h1><?php _p($led->Name); ?>  's Profile</h1>

        <div class="pull-left" style="margin-bottom: 5px;">
            <a href="javascript:Clickheretoprint()">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
            </a>
        </div>

        <div style="width: 100%;  " id="formprint">
            <?php
            if (isset($_GET['mem'])) {
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                if ($profile) {
                    ?>
                    <div  style=" margin-left:30px;margin-bottom: 20%;width:90%;border: 1px solid black;margin-top:30px; height: auto; line-height: 25px" l>
                        <div style="padding-left:50px;padding-top:20px;padding-bottom:10px">

                            <table style="width:100%" border="0">
                                <tr>
                                    <td width="70">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/logo2.png" style="margin-left: 5px; height:80px; width: 70px;" />
                                    </td>

                                    <td  align="center" valign="top">
                                        <div style="font-size: 12px;font-weight: bold;">Dr. J. J. Magdum Trust's</div>
                                        <div style="font-size: 18px;font-weight: bold;">Dr. J. J Magdum Ayurved Medical College</div>
                                        <div align="center" style="font-size: 10px;">Gat No.295,Shriol -Wadi Road ,Agarbhag,</div>
                                        <div align="center" style="font-size: 10px;"> Jaysingpur -416101 Tal. Shirol Dist. Kolhapur,</div>
                                        <div align="center" style="font-size: 10px;">Phone No:Phone-Off-(02322)-221860 /221960, Fax (0232 Email: jjmayu@rediffmail.com

                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <div>
                                <div style="font-size: 18px;"><u><strong>Admission Details</strong></u></div>
                                    <br>
                                    <div><strong>Name : </strong><?php _p($profile->FirstName . ' ' . $profile->MiddleName . ' ' . $profile->LastName); ?></div>
                                    <div><strong>Contact : </strong><?php if($profile->Contact1) _p($profile->Contact1);else _p('-'); ?></div>
                                    <div><strong>Gender : </strong><?php if($profile->GenderObject->Name)_p($profile->GenderObject->Name);else _p('-'); ?></div>
                                    <div><strong>Course Name : </strong><?php if($profile->CourseOfAddmissionObject->Name) _p(delete_all_between('[', ']', $profile->CourseOfAddmissionObject->Name));else  _p('-') ?></div>
                                    <div><strong>Admission Date : </strong><?php if($profile->AdmittedDate) _p($profile->AdmittedDate);else _p('-'); ?></div>
                                    <div><strong>Admission Mode : </strong><?php if($profile->AdmissionModeObject->Name) _p($profile->AdmissionModeObject->Name);else _p('-'); ?></div>
                                    <div><strong>Date of birth : </strong><?php if($profile->Dob)_p($profile->Dob);else _p('-'); ?></div>
                                    <div><strong>Fee Concession : </strong><?php if($profile->FeeConcessionObject->Name) _p($profile->FeeConcessionObject->Name);else _p('-'); ?></div>
                                    <br>
                                    <div style="font-size: 18px;"><u><strong>Personal Details</strong></u></div>
                                    <br>
                                    <div><strong>Address : </strong><?php if($profile->AddressLine1) _p($profile->AddressLine1);else _p('-'); ?></div>
                                    <div><strong>Adhar Number : </strong><?php if ($profile->AdharNo) _p($profile->AdharNo);else _p('-'); ?></div>
                                    <div><strong>Religion : </strong><?php if ($profile->ReligionObject) _p($profile->ReligionObject->Name); else _p('-'); ?></div>
                                    <div><strong>Caste : <?php if ($profile->CasteObject) _p($profile->CasteObject->Name); else _p('-'); ?></div>
                                    <div><strong>Caste category : </strong> <?php if($profile->FeeConcessionObject->Name) _p($profile->FeeConcessionObject->Name);else _p('-'); ?></div>
                                    <div><strong>Family Income : </strong><?php if($profile->AnnualFamilyIncome) _p($profile->AnnualFamilyIncome);else _p('-'); ?></div>
                                    <br>
                                    <div style="font-size: 18px;"><u><strong>Guardian Details</strong></u></div>
                                    <br>
                                    <div><strong>Father Name : </strong><?php if ($profile->FatherFirstName) _p($profile->FatherFirstName . ' ' . $profile->FatherMiddleName . ' ' . $profile->FatherLastName); else _p('-') ?></div>
                                    <div><strong>Mother Name : </strong><?php if ($profile->MotherFirstName) _p($profile->MotherFirstName . ' ' . $profile->MotherMiddleName . ' ' . $profile->MotherLastName); else _p('-') ?></div>
                                <div><strong>Address  : </strong> <?php _p($profile->AddressLine1); ?></div>
                            </div>
                        </div>
                     <?php } } ?>
                    </div>
<?php } ?>

<?php $this->RenderEnd(); ?>
 

