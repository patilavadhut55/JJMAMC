<?php
if(!isset($_GET['view'])==1){
    require(__CONFIGURATION__ . '/header.inc.php'); 
}
?>
<?php if(isset($_GET['view'])==1){?>
    <meta name="google-translate-customization" content="35234f97bf07e276-18cff260506fe6a3-g57d4003820d96f8d-12"></meta>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />

    <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 


    <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
    <!-- SlidePanel Css -->
    <link rel="stylesheet" href="<?php _p(__sidebar__); ?>/css/simple-sidebar.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php _p(__table__); ?>/dist/bootstrap-table.min.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php _p(__table__); ?>/dist/bootstrap-table.min.js"></script>

    <!-- Latest compiled and minified Locales -->
    <script src="<?php _p(__table__); ?>/dist/locale/bootstrap-table-zh-CN.min.js"></script>

<style>
    body{
        background-color: #FFF !important;
    }
</style>

<?php } ?>
<?php
    if(isset($_GET['id'])){
        $led = Ledger::LoadByIdledger($_GET['id']);
        $adds = Address::LoadArrayByOf($_GET['id']);
        $profile = Profile::LoadByIdprofile($_GET['id']);
?>

<script language="javascript">
	function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formprint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script>
<h1><?php _p($led->Name); ?>  's Profile</h1>
<?php if(isset($_GET['edit'])){ ?>
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
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
<div class="clearfix"></div>
<?php } ?>
<?php $this->RenderBegin(); ?>
<?php 
    if($adds && $profile){
    foreach ($adds as $add){}
        $apps  = Application::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Application()->ApplicantObject->Of, $_GET['id']),
                    QQ::Equal(QQN::Application()->AppliedFor, 1)
                ));
        if($apps){
            foreach ($apps as $app){}
            if(!isset($_GET['idcard'])){
?>
<div style="width: 800px; border: 1px solid lightgray; overflow: auto;" id="formprint">
        <legend style="color: #ff0000; border-color: #ff0000;">Admission Details <?php _p($led->Code); ?>
        </legend>
        <div class="col-md-2 pull-right" style="text-align: center;">
             <?php
                $img="http://".$_SERVER['HTTP_HOST'].__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/upload/photo/".$led->Idledger.".png";
              if(@getimagesize($img)){ ?>
                  <img style="border-radius: 10px;" src="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/photo/<?php _p($led->Idledger) ?>.png" width="100" height="130" />
            <?php }else{ ?>
                <object data="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/profile.svg" type="image/png"  width="100" height="130">
                 </object>
            <?php } ?>
           <?php
                $img="http://".$_SERVER['HTTP_HOST'].__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/upload/documents/A".$app->Code."/sign".$app->Idapplication.".png";
              if(@getimagesize($img)){?>
                   <img style="border-radius: 10px;" src="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/documents/A<?php _p($app->Code); ?>/sign<?php _p($app->Idapplication); ?>.png" width="150" height="50" />              
            <?php }else{ ?>
                <object data="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/sign.jpg" type="image/png"  width="80" height="35">
                 </object>
            <?php } ?>
        </div>    
        <div class="col-md-10">
        <div class="col-sm-3"><strong>Name </strong></div><div class="col-sm-7"><?php _p(get_full_name($led->Name)); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Merit No. </strong></div><div class="col-sm-7"><?php _p($profile->MeritNo); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Merit Mark </strong></div> <div class="col-sm-7"><?php _p($profile->MeritMark); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Admission Year </strong></div> <div class="col-sm-7"><?php if($profile->AddmissionDate != NULL){ _p(date("M d Y",  strtotime($profile->AddmissionDate))); } ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Branch Name </strong></div> <div class="col-sm-7"><?php _p($profile->BranchOfAddmissionObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Course Name </strong></div> <div class="col-sm-7"><?php _p($profile->CourseOfAddmissionObject); ?></div>
        <div class="clearfix"></div>
        <br>
        <div class="col-sm-3"><strong>Date of Birth </strong></div> <div class="col-sm-7"><?php if($add->Dob) {_p(date("M d Y",  strtotime($add->Dob)));} ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Birth Place </strong></div> <div class="col-sm-7"><?php _p($add->BirthPlace); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Birth Mark </strong></div> <div class="col-sm-7"><?php _p($profile->IdentificationMark); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Marital Status </strong></div> <div class="col-sm-7"><?php _p($profile->MarrtialStatusObject); ?></div>
        <div class="clearfix"></div>
        
        <div class="col-sm-3"><strong>Handicapped </strong></div> <div class="col-sm-7"><?php if($profile->Handicaped != NULL && $profile->Handicaped == 1){
                                            _p('Yes');
                                   }else{
                                           _p('No');
                                           } ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Handicapped Category </strong></div> <div class="col-sm-7"><?php _p($profile->HandicapedCatObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother Tongue </strong></div> <div class="col-sm-7"><?php _p($profile->MotherTongueObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Blood Group </strong></div> <div class="col-sm-7"><?php _p($profile->BloodGroupObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Family Annual Income </strong></div> <div class="col-sm-7"><?php _p($profile->AnnualFamilyIncome); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Aadhar Status </strong></div> <div class="col-sm-7"><?php if($profile->AdharStatus != NULL && $profile->AdharStatus ==1){
                                        _p('YES');
                                        }else{
                                         _p('No'); 
                                                }
                                        ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Aadhar No </strong></div> <div class="col-sm-7"><?php _p($profile->AdharNo); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Nationality </strong></div> <div class="col-sm-7"><?php _p($profile->NationalityObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Nation </strong></div> <div class="col-sm-7"><?php _p($add->CountryObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>State </strong></div> <div class="col-sm-7"><?php _p($add->StateObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>District </strong></div> <div class="col-sm-7"><?php _p($add->DistrictObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Place </strong></div> <div class="col-sm-7"><?php _p($add->TalukaObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Religion </strong></div> <div class="col-sm-7"><?php _p($profile->ReligionObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Caste Category </strong></div> <div class="col-sm-7"><?php _p($profile->CasteCatObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Caste </strong></div> <div class="col-sm-7"><?php _p($profile->CasteObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Sub-caste </strong></div> <div class="col-sm-7"><?php _p($profile->SubCasteObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Fee Concession Applicable </strong></div> <div class="col-sm-7"><?php if($profile->FeeConcessionApplicable != NULL && $profile->FeeConcessionApplicable ==1){
                                   _p('Yes');
                                   }else{
                                           _p('No');
                                   } ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3" style="margin-bottom: 10px;"><strong>Fee Concession Type :</strong></div> <div class="col-sm-7"><?php if($profile->FeeConcession != NULL){ _p($profile->FeeConcessionObject->Name);}?></div>
        </div>
        
        <legend style="color: #ff0000; border-color: #ff0000;">Personal Details</legend>
        <div class="col-sm-3"><strong>permanent Address </strong></div> <div class="col-sm-7"><?php _p($add->AddressLine1); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Permanent Country </strong></div> <div class="col-sm-7"><?php _p($add->CountryObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Permanent State </strong></div> <div class="col-sm-7"><?php _p($add->StateObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Permanent District </strong></div> <div class="col-sm-7"><?php _p($add->DistrictObject); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Residence Tel No </strong></div> <div class="col-sm-7"><?php _p($add->Contact1); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Reg Mobile no </strong></div> <div class="col-sm-7"><?php _p($add->Contact2); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Current Address </strong></div> <div class="col-sm-7"><?php _p($add->AddressLine2); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Current Country </strong></div> <div class="col-sm-7"><?php _p($add->Country1Object); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Current State </strong></div> <div class="col-sm-7"><?php _p($add->State1Object); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Current District </strong></div> <div class="col-sm-7"><?php _p($add->District1Object); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Other Mobile No. </strong></div> <div class="col-sm-7"><?php _p($add->Contact2); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Reg Email ID </strong></div> <div class="col-sm-7"><?php _p($add->Email1); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3" style="margin-bottom: 10px;"><strong>Other Email ID </strong></div> <div class="col-sm-7"><?php _p($add->Email2); ?></div>
    <?php 
            $gardians = Gardian::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Gardian()->Of, $profile->Idprofile),
                            QQ::Equal(QQN::Gardian()->GardianCat, 1)));
            if($gardians){
                foreach ($gardians as $gardian){}
    ?>    
        <legend style="color: #ff0000; border-color: #ff0000;">Guardian/Father's Details</legend>
        <div class="col-sm-3"><strong>Father/ Guardian Name </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianName); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian Occupation </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianOccupation); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian Address </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianAddress); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian Country </strong></div> <div class="col-sm-7"><?php $places = place::LoadByIdplace($gardian->GardianState); if($places) _p($places->ParrentObject->Name);?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian State </strong></div> <div class="col-sm-7"><?php _p(place::LoadByIdplace($gardian->GardianState)); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian District </strong></div> <div class="col-sm-7"><?php _p(place::LoadByIdplace($gardian->GardianDistrict)); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian Mobile No. </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianContact); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Father/ Guardian E-mail ID </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianEmail); ?></div>
        <div class="clearfix"></div>
            <?php }?>
        
    <?php 
            $gardians = Gardian::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Gardian()->Of, $profile->Idprofile),
                            QQ::Equal(QQN::Gardian()->GardianCat, 2)));
            if($gardians){
                foreach ($gardians as $gardian){}
    ?>    
        <legend style="color: #ff0000; border-color: #ff0000;">Mother's Details</legend>
        <div class="col-sm-3"><strong>Mother's Name </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianName); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's Occupation </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianOccupation); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's Address </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianAddress); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's Country </strong></div> <div class="col-sm-7"><?php $places = Place::LoadByIdplace($gardian->GardianState); if($places) _p($places->ParrentObject->Name); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's State </strong></div> <div class="col-sm-7"><?php _p(Place::LoadByIdplace($gardian->GardianState)); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's District </strong></div> <div class="col-sm-7"><?php _p(Place::LoadByIdplace($gardian->GardianDistrict)); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's Mobile No. </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianContact); ?></div>
        <div class="clearfix"></div>
        <div class="col-sm-3"><strong>Mother's E-mail ID </strong></div> <div class="col-sm-7"><?php _p($gardian->GardianEmail); ?></div>
        <div class="clearfix"></div>
            <?php }?>
        <div class="clearfix"></div>
       <legend style="color: #ff0000; border-color: #ff0000;">Attached Documents</legend>
        <div class="col-sm-3"><strong>Documents</strong></div>
        <?php 
         $appdocs = AppDocs::QueryArray(
                 QQ::AndCondition(
                         QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
                         QQ::NotEqual(QQN::AppDocs()->Scans,NULL)));
         foreach ($appdocs as $appdoc){
           $sr = 1 ; $scans = explode(",", $appdoc->Scans); 
        if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
        $css = 0;
        $img = '../upload/documents/A'.$appdoc->ApplicationObject->Code.'/'.(int)$scan.'.png'; 
        if(file_exists ($img)){
        ?>
         <?php _p($appdoc->DocumentObject); _p(','); }} }}?>
       
         
</div>
    <?php }  else { ?>

<div class="border1" style="width: 400px; height: 250px;" id="formprint">
    <div style="height: 85px; border-bottom: 1px solid #000;" align="center">
        <div class="pull-left">
            <IMG SRC="../../assets/_core/images/Walchand_11.gif" height="60">
        </div>
        Walchand College of Engineering, Sangli. <br>
        (An Autonomous Institute) <br>
        Vishrambag, Sangli. -416415 (), India. <br>
        Website: www.walchandsangli.ac.in <br>
    </div>
    <div style="float: left;">
    <IMG SRC="../../includes/configuration/barcode.php?barcode=<?php _p($led->Code); ?>&width=250&height=30">
    </div>
    <div class="pull-right" style="text-align: center; width: 80px;">
        <object data="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/profile.svg" type="image/png"  width="70" height="110">
        <img style="border-radius: 10px;"
            src="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/documents/A<?php _p($app->Code); ?>/photo/<?php _p($app->Idapplication); ?>.png" width="100" height="130" />
        </object>
        <object data="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/sign.jpg" type="image/png"  width="80" height="35">
        <img style="border-radius: 10px;" src="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/documents/A<?php _p($app->Code); ?>/sign/<?php _p($app->Idapplication); ?>.png" width="150" height="50" /></p>
        </object>
    </div>
    <div class="pull-left">
        <span style="width: 50px; font-weight: bolder;"> Name </span> <?php _p($led->Name)?><br>
        <span style="width: 50px; font-weight: bolder;"> Program </span> <?php _p($profile->CourseOfAddmissionObject)?><br>
        <span style="width: 50px; font-weight: bolder;"> Date Of Birth. </span> <?php _p(date('d/m/Y',strtotime($add->Dob)));?><br>
        <span style="width: 50px; font-weight: bolder;"> Mobile No. </span> <?php _p($add->Contact1.",".$add->Contact2);?><br>
        <span style="width: 50px; font-weight: bolder;"> Blood group </span> <?php _p($profile->BloodGroupObject)?><br>
    </div>
   
    <div style="clear: both"></div>
    <div class="pull-left" style="font-weight: bolder; padding-left: 10px;"> HOD </div> 
    <div class="pull-right" style="font-weight: bolder; padding-right: 120px;"> Director </div> 
</div>
    <?php }?>
<?php }

    }} ?>
<?php $this->RenderEnd(); ?>

<?php 
if(!isset($_GET['view'])==1){
    require(__CONFIGURATION__ .'/footer.inc.php'); 
}
?>

