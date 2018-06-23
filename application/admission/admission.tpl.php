<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<style type="text/css">
    .snap {
        font-family:Calibri;
        width: 80;
        padding: 5px;
        border-radius: 3px;
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
    }
    .snap:hover{
        background-color: #ec971f;
        border-color: #d58512;

    }
</style>
<script>
    function showHint(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "summary.php?id=" + str, true);
        xmlhttp.send();
    }
</script>
<?php
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
    if(isset($_GET['id'])){
    $profile = Profile::LoadByIdprofile($_GET['id']);
    
    if (!is_dir('../upload/documents/A' . $profile->IdprofileObject->Code)) {
        mkdir('../upload/documents/A' . $profile->IdprofileObject->Code, 0777, true);
    }
    $imageData = $GLOBALS['HTTP_RAW_POST_DATA'];
    $filteredData = substr($imageData, strpos($imageData, ",") + 1);
    $unencodedData = base64_decode($filteredData);
    $fp = fopen('../upload/documents/A' . $profile->IdprofileObject->Code . '/' . $_GET['doc'] . '.png', 'wb');

    fwrite($fp, $unencodedData);
    fclose($fp);
    
    
    }
}
?>
<?php $this->RenderBegin(); ?>

<div class="tabbable-panel">
    <div class="tabbable-line">
        <ul class="nav nav-tabs ">
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 1 ) || !isset($_GET['tab'])) { ?>active<?php } ?>">
                <a href="admission.php?tab=1<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link1">
                    <i class="fa fa-asterisk fa-fw"></i><?php _t('Admission Details') ?>
                </a>
            </li>
            <?php if(isset($_GET['id'])){ ?>
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 2)) { ?>active<?php } ?>">
                <a href="admission.php?tab=2<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link2">
                    <i class="fa fa-user fa-fw"></i><?php _t('Personal Detail') ?>
                </a>
            </li>

            <li class="<?php if (isset($_GET['tab']) && $_GET['tab'] == 3) { ?>active<?php } ?>">
                <a href="admission.php?tab=3<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>" aria-expanded="true" id="link5">
                    <i class="fa fa-asterisk fa-fw"></i><?php _t('Education Details') ?>
                </a>
            </li>

            <li class="<?php if (isset($_GET['tab']) && $_GET['tab'] == 4) { ?>active<?php } ?>">
                <a href="admission.php?tab=4<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>" aria-expanded="true" id="link4">
                    <i class="fa fa-certificate fa-fw"></i><?php _t('Documents Upload') ?>
                </a>
            </li> 
            <?php }?>

        </ul>
       
        <div class="tab-content">
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 1 || !isset($_GET['tab'])) { ?>active<?php } ?>" id="1">
                <div class="form-controls">
                    <div style="padding: 20px !important;">
                        <div class="pull-right slideup ">
                            <div style="float: left; margin-right: 10px;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                            <div style="float: left; color: #fc6262;">Required field</div>
                        </div>
                        <table width="90%" border="0" >
                            <tr>
                                <td width="19%" height="35"><strong>Application No</strong></td>
                                <td width="30%"><?php $this->txtCode->Render(); ?></td>
                                <td width="19%"><strong>Date</strong></td>
                                <td colspan="2">
                                    <div style="float: left; margin-right: 10px;"> <?php $this->calAdmitdate->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Admission Year</strong></td>
                                <td>
                                    <div style="float: left; margin-right: 10px; width: 75%;"><?php $this->lstYear->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                                <td><strong>Admission Mode</strong></td>
                                <td colspan="2">
                                    <div style="float: left; margin-right: 10px; width: 80%;"><?php $this->lstadmissionmode->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>University Reservation</strong></td>
                                <td style=" font-size:10px;" height="50"><?php $this->lstReservation->Render(); ?>
                                <td><strong>Course</strong></td>
                                <td colspan="2">
                                    <div style="float: left; margin-right: 10px; width: 80%;"><?php $this->lstCourse->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td style=" font-size:10px;" height="10">(IN CAPITAL LETTERS ONLY)</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Name of the Student</strong></td>
                                <td colspan="3">
                                    <div>
                                        <div style="float: left; margin-right: 17px; margin-top: 2px;"><?php $this->lstprefix->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtFirstname->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtMiddlename->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtLastname->Render(); ?></div>
                                        <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Marathi Name</strong></td>
                                <td colspan="3">
                                    <div>
                                        <div style="float: left; margin-right: 10px; /*margin-left: 92px;*/"><?php $this->txtFirstname1->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtMiddlename1->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtLastname1->Render(); ?></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="40"><strong>Father’s Name</strong></td>
                                <td colspan="3">
                                    <div>
                                        <div style="float: left; margin-right: 10px; /*margin-left: 92px;*/"><?php $this->txtFfathername->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtMfathername->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtLfathername->Render(); ?></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Mother’s Name</strong></td>
                                <td colspan="3">
                                    <div>
                                        <div style="float: left; margin-right: 10px; /*margin-left: 92px;*/"><?php $this->txtFmothername->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtMmothername->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtLmothername->Render(); ?></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Gender</strong></td>
                                <td><?php $this->lstGender->Render(); ?></td>
                                <td><strong>Date Of Birth (dd/mm/yyyy)</strong></td>
                                <td>
                                    <div>
                                        <div style="float: left; margin-right: 5px; "><?php $this->calDob->Render(); ?></div>
                                        <div style="float: left; margin-right: 5px; "><strong>Age</strong></div>
                                        <div style="float: left;    width: 25%;"><?php $this->txtAge->Render(); ?></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Old Name</strong></td>
                                <td><?php $this->txtOldName->Render(); ?></td>
                                <td><strong>Reason of name change</strong></td>
                                <td colspan="2"><div style="border: 0px solid #d58512;"><?php $this->txtReason->Render(); ?></div></td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Blood Group</strong></td>
                                <td><?php $this->lstBloodgroup->Render(); ?></td>
                                <td><strong>Religion</strong></td>
                                <td colspan="2">
                                    <div style="float: left; width: 75%; margin-right: 10px;"><?php $this->lstReligion->Render(); ?></div>
                                    <div style="float: left;"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Caste / Concession Category</strong></td>
                                <td>
                                    <div style="float: left; width: 75%; margin-right: 10px;"><?php $this->lstcastecategory->Render(); ?></div>
                                    <div style="float: left;"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                                <td><strong>Caste</strong></td>
                                <td colspan="2">
                                    <div style="float: left; width: 75%; margin-right: 10px;"><?php $this->lstCaste->Render(); ?></div>
                                    <div style="float: left;"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Non-creamy layer Certificate</strong></td>
                                <td><?php $this->chkNcl->Render(); ?></td>
                                <td><strong>Caste Validity Certificate</strong></td>
                                <td colspan="2"><?php $this->chkCvc->Render(); ?></td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Is physically challenged?</strong></td>
                                <td><?php $this->lstHandicaped->Render(); ?></td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>


                        </table>
                    </div>
                    <div class="form-actions">    
                        <div class="form-save"><?php $this->btnAdmissionSave->Render(); ?></div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
            <?php if(isset($_GET['id'])){ ?>
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 2) { ?>active<?php } ?>" id="2">
                <div class="form-controls">
                    <table width="100%" border="0" style="margin: 25px;">
                        <tr>
                            <td width="17%"  height="40"><strong>Current Address</strong></td>
                            <td colspan="3"><?php $this->txtAddress1->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>State</strong></td>
                            <td><?php $this->lststate->Render(); ?></td>
                            <td><strong>District</strong></td>
                            <td><?php $this->lstdistrict->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Taluka</strong></td>
                            <td><?php $this->lsttaluka->Render(); ?></td>
                            <td><strong>City</strong></td>
                            <td><?php $this->txtCity->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>As Per Above</strong></td>
                            <td colspan="3"><?php $this->chkAbove->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Permanent Address</strong></td>
                            <td colspan="3"><?php $this->txtAddress2->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>State</strong></td>
                            <td><?php $this->lststate1->Render(); ?></td>
                            <td><strong>District</strong></td>
                            <td><?php $this->lstdistrict1->Render(); ?></td>
                        </tr>
                        <tr>
                            <td  height="40"><strong>Taluka</strong></td>
                            <td><?php $this->lsttaluka1->Render(); ?></td>
                            <td><strong>City</strong></td>
                            <td><?php $this->txtCity1->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Mobile</strong></td>
                            <td width="25%"><?php $this->txtContact1->Render(); ?></td>
                            <td width="11%"><strong>Landline</strong></td>
                            <td width="47%"><?php $this->txtContact2->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40"><strong>Place Of Birth</strong></td>
                            <td><?php $this->txtPlaceOfBirth->Render(); ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td  height="40"><strong>Guardian Annual Income</strong></td>
                            <td><?php $this->txtIncome->Render(); ?></td>
                            <td><strong>Occupation</strong></td>
                            <td><?php $this->txtOcupation->Render(); ?></td>
                        </tr>
                        <tr>
                            <td  height="40"><strong>Relation of applicant with Guardian</strong></td>
                            <td><?php $this->txtRelation->Render(); ?></td>
                            <td><strong>Marital Status</strong></td>
                            <td><?php $this->lstMarried->Render(); ?></td>
                        </tr>
                    </table>
                    <div class="form-actions">    
                        <div class="form-save"><?php $this->btnPersonalSave->Render(); ?></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> 

            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 3) { ?>active<?php } ?>" id="3">                   
                <div class="form-controls">
                    <table class="datagrid" border="1">
                        <tr>
                            <th>Sr</th>
                            <th width="20%">Pre Qualification</th>
                            <th width="25%">Institute</th>
                            <th width="15%">Passing Year</th>
                            <th width="10%">Total</th>
                            <th width="10%">Out Of</th>
                            <th width="10%">Percentage</th>
                            <th width="30%"></th>
                        </tr>
                        <tr>
                        <?php
                            if (isset($_GET['id'])) {
                                $sr = 1;
                                $edus = EducationDetails::LoadArrayByStudent($_GET['id']);
                                foreach ($edus as $edu) {
                        ?>
                        <tr>
                            <td><?php _p($sr++);?></td>
                            <td><?php _p($edu->PreQualificationObject->Name); ?></td>
                            <td><?php _p($edu->Institute); ?></td>
                            <td><?php _p($edu->PassingYear); ?></td>
                            <td><?php _p($edu->Total);?></td>
                            <td><?php _p($edu->OutOf); ?></td>
                            <td><?php _p($edu->Percentage . "%"); ?></td>      
                            <td>
                                <div style="float: left"><?php $this->lbldelete[$edu->IdeducationDetails]->Render(); ?></div>
                                <div style="float: right"><?php $this->lblAdd[$edu->IdeducationDetails]->Render(); ?></div>
                            </td>
                        </tr>
                        <?php }}?>
                        <tr>
                            <td></td>
                            <td> <?php $this->txtPreQual->Render(); ?></td>
                            <td> <?php $this->txtInstitute->Render(); ?></td>
                            <td><?php $this->txtPassYear->Render(); ?></td>
                            <td><?php $this->txtTotal->Render();?></td>
                            <td><?php $this->txtOutoftotal->Render();?></td>
                            <td width="10%"> <?php $this->txtSub1Mrk->Render(); ?></td>                                        
                            <td><?php $this->btnEduDetailsSave->Render(); ?></td>
                        </tr>
                    </table>
                    
                    <div style="clear: both;"></div>
                    <?php if(isset($_GET['sub'])){ ?>
                    <hr>
                    <div>
                        <div style="float: left;margin-right: 5px;"><strong>Subject </strong> </div>
                        <div style="width: 25%;float: left;margin-right: 5px;"><?php $this->lstSubject->Render();?></div>
                        <div style="float: left;margin-right: 5px;"><strong>Marks</strong> </div>
                        <div style="float: left;" ><?php $this->txtMark->Render();?></div>
                        <div style="float: left;margin-right: 5px;"><strong>Out Of</strong> </div>
                        <div style="float: left; width: 20%;" ><?php $this->txtOutOfMark->Render();?></div>
                        <div style="float: left;"><?php  $this->btnAddMark->Render();?></div>
                        <div style="clear: both;"></div>
                    </div>
                    
                    <table width="100%" class="datagrid" style="margin-top: 20px;">
                        <tr>
                            <th><strong>Sr.</strong></th>
                            <th><strong>Delete</strong></th>
                            <th><strong>Subject</strong></th>
                            <th><strong>Marks</strong></th>
                            <th><strong>Out Of</strong></th>
                            
                        </tr>
                        <?php
                        $sr = 1;
                        $markss = Marks::LoadArrayByStudentEducation($_GET['sub']);
                        if($markss){
                            foreach ($markss as $mark){
                                
                        ?>
                        <tr>
                            <td><?php _p($sr++); ?></td>
                            <td><?php $this->lblDeleteMark[$mark->Idmarks]->Render(); ?></td>
                             <td><?php _p($mark->SubjectObject->Name); ?></td>
                            <td><?php _p($mark->MarksObtained);?></td>
                            <td><?php _p($mark->OutOf); ?></td>
                            
                        </tr>
                        <?php 
                            }
                        }
                        ?>
                    </table>
                    <?php } ?>
                    <div class="form-actions">
                        <div class="form-save"><?php $this->btnNext->Render(); ?></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 4) { ?>active<?php } ?>" id="4">
                <div class="form-controls">
                    <div style="background: #f3f2f2; padding: 7px; margin-bottom: 10px;">
                        <div class="form-save"><?php $this->btnFinalize->Render(); ?></div>
                        <div class="form-save"><?php $this->lstCalender->Render(); ?></div>
                        <div style="float: right; margin-top: 5px;"><strong>Select Calender Year</strong></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div style="clear: both;"></div>
                    <?php if(isset($_GET['id'])){
                        $profile = Profile::LoadByIdprofile($_GET['id']);
                        if($profile){
                        
                    ?>
                        <div class="col-sm-12">                               
                            <?php 
                                $scancode = Settings::LoadByName("Scan");
                                $memdocs = MemberDoc::LoadArrayByMember($profile->Idprofile);
                                if($memdocs){
                                foreach ($memdocs as $memdoc){
                            ?>
                            <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                                <div class="col-sm-6" style="padding-top:10px;">
                                    <?php $this->lbldocdelete[$memdoc->IdmemberDoc]->Render();?>    
                                    <?php if($memdoc->Document){ _p($memdoc->DocumentObject->Name); } ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php if($memdoc->Scans != NULL){ ?>
                                        <div style="float:left;">
                                            <?php  
                                            $sr = 1 ; 
                                            $scans = explode(",", $memdoc->Scans); 
                                            if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
                                            $css = 0;
                                            $url = "";
                                            $img = '';
                                            $fileexist = 0;
                                            $other = 0;
                                            $files = glob('../upload/documents/A'.$memdoc->MemberObject->Code . "/*.*");
                                            //$img = '../upload/documents/A'.$memdoc->MemberObject->Code.'/'.(int)$scan.'.png'; 
                                            for ($i = 0; $i < count($files); $i++) {
                                                $path_info = pathinfo($files[$i]);
                                                if ($scan == $path_info['filename']) {
                                                    $fileexist = 1;
                                                    if (($path_info['extension'] == 'jpg' || $path_info['extension'] == 'png' || $path_info['extension'] == 'jpeg')) {
                                                        $other = 0;
                                                        $img = "http://".$_SERVER['HTTP_HOST'].__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/upload/documents/A".$memdoc->MemberObject->Code."/".(int)$scan.".".$path_info['extension'];
                                                    } else {
                                                        $other = 1;
                                                    }
                                                    $url = $files[$i];
                                                }
                                            }
                                            
                                            if($fileexist == 1){
                                            ?>
                                            <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/admission/admission.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg=1&tab=4" ><div class="btn btn-success"><?php _p($sr++);   ?></div></a>
                                            <?php }else{ ?>
                                            <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/admission/admission.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg=1&tab=4" ><div class="btn btn-default"><?php _p($sr++);   ?></div></a>
                                            <?php } ?>  

                                            <?php } }  ?>
                                        </div>
                                    <?php } ?>    
                                    &nbsp;
                                    <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/admission/admission.php?id=<?php _p($_GET['id']); ?>&docid=<?php if($memdoc) _p($memdoc->IdmemberDoc); ?>&code=<?php _p($scancode->Option);?>&doc=<?php _p($scancode->Option);?>&tab=4">
                                        <div class="btn btn-success">Add Doc</div>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <?php }} ?>  
                            <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                                <div class="col-sm-8"><?php $this->lstDocs->Render(); ?></div>
                                <div class="col-sm-2"><?php $this->btnAdd->Render(); ?></div>    
                                <div class="clearfix"></div>
                            </div>

                            <div style="background-color:#205081;">
                                <?php if(isset($_GET['doc'])){ ?>
                                    <div style="background-color:#205081; height: 500px; overflow: auto;">
                                        <div style=" border-radius: 5px; float:left; padding: 5px; margin:5px; width: 130px;  background-color: #FFF;">
                                            <video id="video"  height="99" width="100"  autoplay style="-webkit-transform:rotate(0deg); margin:10px 10px;"></video>
                                            <div class="btn btn-success" id="snap" style="width:110px; margin-top: 10px;" >Scan</div>
                                        </div>
                                        <input style="float: right;" class="btn btn-success" type="button" value="Reload" onClick="window.location.reload()">

                                        <div style="padding: 5px;  border-radius: 5px; background-color: #FFF; float:right; margin-top: 50px; width: 335px;height: 120px;">
                                            <div style="padding: 5px;  border-radius: 5px; background-color: #FFF;" >  
                                                Select image to upload: 
                                                <input style="color: #000;" class="btn " type="file" name="imgupload" id="imgupload" required>
                                                <?php $this->btnUpload->Render(); ?>
                                            </div>
                                        </div>
                                        <div style="clear: both"></div>

                                        <h3 style="color: #FFF; border-bottom: 1px solid #FFF;">Scanning Preview</h3>
                                        
                                        <?php    
                                            $files = glob('../upload/documents/A' . $profile->IdprofileObject->Code . "/*.*");
                                            if(count($files) != 0 ) {
                                            $fileexist = 0;
                                            for ($i = 0; $i < count($files); $i++) {
                                                $path_info = pathinfo($files[$i]);
                                                if ($_GET['doc'] == $path_info['filename']) {
                                                    $fileexist = 1;
                                                    if ($path_info['extension'] == 'jpg' || $path_info['extension'] == 'png' || $path_info['extension'] == 'jpeg') {
                                        ?>

                                        
                                        <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
                                                background-image: url(<?php _p($files[$i]); ?>);
                                                background-repeat: no-repeat; background-size: 80%; width: 720px;" height="500" >
                                        </canvas>
                                        <?php } else { ?>

                                        <div style="width: 500px; height: 100px; background: #FFF; margin: 80px 0px 15px 15px; font-weight: bold; font-size: 24px; text-align: center;">
                                            <a href="<?php _p($files[$i]); ?>" target="_blank">View <?php _p($path_info['extension']); ?>  File </a>
                                        </div>
                           
                                    <?php }}}
                                    //if image not exist then display canvas
                                    if($fileexist == 0){
                                    ?>
                                    <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 30px 0px 0px 15px;border:1px solid lightgray;
                                        background-repeat: no-repeat;" width="640" height="480" >
                                    </canvas>
                                    <?php }}else{ ?>
                                    <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 30px 0px 0px 15px;
                                        background-repeat: no-repeat;" width="640" height="480" >
                                    </canvas>
                                <?php } ?>
                                </div>
                                <?php }else{ ?>
                                    <div style="color: #FFF; margin: 20px; text-align: center; font-size: 20px; font-weight: bold; height: 100%;">Please Select One of the Document to Scan.</div>
                                <?php } ?>
                            </div>
                        <div class="clearfix"></div>
                        </div>
                    <?php }} ?>
                         
                <div class="clearfix"></div>
                </div>
            </div> 
            <?php }?>
        </div>
    </div>
</div>

<?php $this->RenderEnd(); ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>
