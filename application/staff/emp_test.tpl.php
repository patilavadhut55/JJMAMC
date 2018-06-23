<?php 

require(__CONFIGURATION__ . '/header.inc.php'); ?>

<?php $this->RenderBegin(); ?>

<div class="tabbable-panel">
    <div class="tabbable-line">
        <ul class="nav nav-tabs ">
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 1 ) || !isset($_GET['tab'])) { ?>active<?php } ?>">
                <a href="emp_test.php?tab=1<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link1">
                    <i class="fa fa-asterisk fa-fw"></i><?php _t('Employee Details') ?>
                </a>
            </li>
            <?php if(isset($_GET['id'])){ ?>
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 2)) { ?>active<?php } ?>">
                <a href="emp_test.php?tab=2<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link2">
                    <i class="fa fa-user fa-fw"></i><?php _t('Personal Detail') ?>
                </a>
            </li>
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 3)) { ?>active<?php } ?>">
                <a href="emp_test.php?tab=3<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link3">
                    <i class="fa fa-user fa-fw"></i><?php _t('Bank Detail') ?>
                </a>
            </li>
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 4)) { ?>active<?php } ?>">
                <a href="emp_test.php?tab=4<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link4">
                    <i class="fa fa-user fa-fw"></i><?php _t('Education Detail') ?>
                </a>
            </li>
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 5)) { ?>active<?php } ?>">
                <a href="emp_test.php?tab=5<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link5">
                    <i class="fa fa-user fa-fw"></i><?php _t('Experience') ?>
                </a>
            </li>
            <li class="<?php if ((isset($_GET['tab']) && $_GET['tab'] == 6)) { ?>active<?php } ?>">
                <a href="emp_test.php?tab=6<?php if (isset($_GET['id'])) _p("&id=" . $_GET['id']); ?>"  id="link6">
                    <i class="fa fa-user fa-fw"></i><?php _t('Upload') ?>
                </a>
            </li>
         <?php }?>
       
        </ul>
        <div class="tab-content">
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 1 || !isset($_GET['tab'])) { ?>active<?php } ?>" id="1">
                <div class="form-controls">
                    <div style="padding: 20px !important;">
                        <div class="pull-right slideup ">
                            <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                            <div style="float: left; color: #fc6262;">Required field</div>
                        </div>
                        <table width="90%" border="0" >
                            <tr>
                                <td width="19%" height="35"><strong>Employee Code</strong></td>
                                <td width="30%"><?php $this->txtempcode->Render(); ?></td>
                                <td width="12%"><strong>Date</strong></td>
                                <td colspan="2">
                                    <div style="float: left; margin-right:10px;"> <?php $this->calAdmitdate->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Department</strong></td>
                                <td>
                                    <div style="float: left; margin-right: 10px; width: 75%;"><?php $this->lstdept->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                                <td width="10%"><strong>Designation</strong></td>
                                <td colspan="2">
                                    <div style="float: left; margin-right: 10px; width: 80%;"><?php $this->lstdesignation->Render(); ?></div>
                                    <div style="float: left; width: 8%;"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%"><strong>Appointment</strong></td>
                                <td colspan="2">
                                    <div style="float: left; margin-right: 10px; width: 80%;"><?php $this->lstappointment->Render(); ?></div>
                                    <div style="float: left; width: 8%;">
                               </td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Name of the Employee</strong></td>
                                <td colspan="3">
                                    <div>
                                        <div style="float: left; margin-right: 17px; margin-top: 2px;"><?php $this->lstprefix->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtempfname->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtempmname->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtemplname->Render(); ?></div>
                                        <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                           
                            <tr>
                                <td height="40"><strong>Gender</strong></td>
                                <td><?php $this->lstgender->Render(); ?></td>
                                <td><strong>Date Of Birth</strong></td>
                                <td>
                                    <div>
                                        <div style="float: left; margin-right: 5px; "><?php $this->calDob->Render(); ?></div>
                                        <div style="float: left; margin-right: 5px; "><strong>Age</strong></div>
                                        <div style="float: left;    width: 25%;"><?php $this->txtage->Render(); ?></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                             <tr>
                                <td height="40"><strong>Marrital Status</strong></td>
                                <td><?php $this->lstmarride->Render(); ?></td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Father’s Name</strong></td>
                                <td colspan="3">
                                    <div>
                                        <div style="float: left; margin-right: 10px; /*margin-left: 92px;*/"><?php $this->txtffname->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtfmname->Render(); ?></div>
                                        <div style="float: left; margin-right: 10px;"><?php $this->txtflname->Render(); ?></div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                            </tr>
                           
                            <tr>
                                <td height="40"><strong>Blood Group</strong></td>
                                <td><?php $this->lstbloodgrp->Render(); ?></td>
                                <td width="12%"><strong>Religion</strong></td>
                                <td colspan="2"><?php $this->lstreligion->Render(); ?></td>
                            </tr>
                            <tr>
                                <td height="40"><strong>Caste Category</strong></td>
                                <td>
                                    <div style="float: left; width: 75%; margin-right: 10px;"><?php $this->lstcastecat->Render(); ?></div>
                                    <div style="float: left;"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                                </td>
                                <td><strong>Caste</strong></td>
                                <td colspan="2"><?php $this->lstcast->Render(); ?></td>
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
                    <table width="100%" border="0" style="margin:0px;">
                        <tr>
                            <td width="10%"  height="40"><strong>Permanent Address</strong></td>
                            <td colspan="3"><?php $this->txtAddress1->Render(); ?></td>
                        </tr>
                        <tr >
                            <td height="40" width="10"><strong>State</strong></td>
                            <td><?php $this->lststate->Render(); ?></td>
                            <td><strong>District</strong></td>
                            <td ><?php $this->lstdistrict->Render(); ?></td>
                        </tr>
                        <tr>
                            <td height="40" width="10"><strong>Taluka</strong></td>
                            <td><?php $this->lsttaluka->Render(); ?></td>
                            <td><strong>City</strong></td>
                            <td><?php $this->txtCity->Render(); ?></td>
                        </tr>
                        <tr style="border-bottom: 1px solid lightgray;">
                            <td height="40"><strong>Pincode</strong></td>
                            <td><?php $this->txtpincode->Render(); ?><br></td>
                       
                        </tr>
                        <tr>
                            <td height="40"><strong>As Per Above</strong></td>
                            <td colspan="3"><?php $this->chkAbove->Render(); ?></td>
                        </tr>
                      
                        <tr>
                         
                            <td width="17%"  height="80"><strong>Present Address</strong></td>
                            <td colspan="3" valign="bottom"><?php $this->txtAddress2->Render(); ?></td>
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
                            <td height="40"><strong>Pincode</strong></td>
                            <td><?php $this->txtpincode1->Render(); ?></td>
                            
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
                    <table width="100%" border="0" style="margin:0px;">
                        <tr>
                            <td  height="40"><strong>Phone no</strong></td>
                            <td><?php $this->txtContact1->Render(); ?></td>
                            <td><strong>Cell no</strong></td>
                            <td colspan="3"><?php $this->txtContact2->Render(); ?></td>
                        </tr>
                        <tr >
                            
                            <td ><strong>Email_id</strong></td>
                            <td ><?php $this->txtemail->Render(); ?></td>
                            <td height="40" width="10"><strong>Bank</strong></td>
                            <td colspan="3"><?php $this->txtbank->Render();?></td>
                        </tr>
                        <tr>
                            
                            <td><strong>Branch</strong></td>
                            <td><?php $this->txtbranch->Render(); ?></td>
                            <td width="10%"><strong>Account no</strong></td>
                            <td colspan="3"><?php $this->txtaccountno->Render(); ?></td>
           
                        </tr>
                        <tr>
                            <td width="17%"  height="40"><strong>Ifsc code</strong></td>
                            <td><?php $this->txtifsccode->Render(); ?></td>
                            <td ><strong>Pan no</strong></td>
                            <td colspan="3"><?php $this->txtpanno->Render(); ?></td>
                        </tr>
                        <tr>
                            
                            <td><strong>payscale</strong></td>
                            <td><?php $this->lstpayscale->Render(); ?></td>
                        </tr>
                        
                        
                    </table>
                    <div class="form-actions">    
                        <div class="form-save"><?php $this->btninfosave->Render(); ?></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> 
                
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 4) { ?>active<?php } ?>" id="4">
                <div class="form-controls">
                    <table width="100%" border="0" style="margin:0px;" class="datagrid" border="1">
                        <tr>
                            <th>Education Title</th>
                            <th> School / University</th>
                            <th>Address</th>
                            <th>Passing Year</th>
                            <th>Marks Obtained</th>
                            <th>Out of Marks</th>
                            <th>Percentage</th>
                        </tr>                           
                        <tr>
                            <td> <?php $this->txttitle->Render(); ?></td>
                            <td><?php $this->txtInstitute->Render();?></td>
                            <td><?php $this->txtaddress->Render();?></td>
                            <td><?php $this->calDate->Render(); ?></td>
                            <td><?php $this->txtmark->Render();?></td>
                            <td><?php $this->txtTotalmark->Render();?></td>
                            <td><?php $this->txtpercent->Render();?></td>
                        </tr>
                    
                       
                    </table>
                    <div class="form-actions">
                        <div class="form-save"><?php $this->btnEduDetailsSave->Render();?></div>
                        <div class="clearfix"></div>
                    </div>
                 
                </div>
            </div> 
            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 5) { ?>active<?php } ?>" id="5">
                <div class="form-controls">
                    <table width="100%" border="0" style="margin:0px;" class="datagrid" border="1">
                        <tr >
               
                        <th style=" text-align: center">Period</th>
                        <th style=" text-align: center"> Institute Name</th>
                        <th style=" text-align: center">Department</th>
                        <th style=" text-align: center">Post</th>
                        <th style=" text-align: center">Note</th>
                        
                        </tr>                           
                        <tr>
                            <td width="30%"><div style="float:left;margin-right:10px">From</div>  
                                <div style="float:left;"><?php $this->calappfrom->Render(); ?> </div>
                                <div style="float:left;margin-right:10px;margin-left:10px;">To</div>
                                <div style="float:left;"><?php $this->calappto->Render(); ?></div>
                            </td>
                            <td><div align="center"><?php $this->txtCompany->Render(); ?></div></td>
                            <td><div align="center"><?php $this->txtDepartment->Render(); ?></td>
                            <td><div align="center"><?php $this->txtPost->Render(); ?></td>
                            <td><?php ?><div align="center"><?php $this->txtNote->Render(); ?></td>
                        </tr>
                    
                        <tr>
                            <td>Date Of Retirement</td>
                            <td><div style="margin-left:-150px"><?php $this->calRetiredate->Render(); ?></div></td>
                            <td><div style="margin-left:-150px">Left Date</div></td>
                            <td> <div style="margin-left:-240px"><?php $this->calleftdate->Render();?></div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><div> Reason</div></td>
                            <td><div style="margin-left:-150px"<?php $this->txtReason->Render();?></div></td>
                            <td><div style="margin-left:-80px"> Check Left</div></td>
                            <td><div style="margin-left:-170px"<?php $this->chkLeft->Render();?></div></td>
                            <td></td>
                        </tr>
                       
                    </table>
                    <div class="form-actions">
                        <div class="form-save"><?php $this->btnexpsave->Render(); ?></div>
                        <div class="clearfix"></div>
                    </div>
                 
                </div>
            </div> 
          
                            <div class="tab-pane <?php if (isset($_GET['tab']) && $_GET['tab'] == 6) { ?>active<?php } ?>" id="6">
                <div class="form-controls">
                    <div style="background: #f3f2f2; padding: 7px; margin-bottom: 10px;">
                   <div class="form-save"><?php //$this->btnFinalize->Render(); ?></div>
                        <div class="form-save"><?php //$this->lstCalender->Render(); ?></div>
                        
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
                                    <?php  //$this->lbldocdelete->Render();?>    
                                    <?php if($memdoc->Document){ _p($memdoc->DocumentObject->Name); } ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php if($memdoc->Scans != NULL){ ?>
                                        <div style="float:left;">
                                            <?php  
                                            $sr = 1 ; $scans = explode(",", $memdoc->Scans); 
                                            if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
                                            $css = 0;
                                            $img = '../upload/documents/A'.$memdoc->MemberObject->Code.'/'; 
                                            for ($i=0; $i<count($img); $i++) {
                                                $num = $img[$i]; 
                                                $path_info = pathinfo($num);
                                                
                                            if((file_exists ($img))&&($path_info['filename'].$path_info['extension'] == $scan.$path_info['extension'])){
                                            ?>
                                            <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/staff/emp_test.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg=1&tab=6" ><div class="btn btn-success"><?php _p($sr++);   ?></div></a>
                                            <?php }else{ ?>
                                            <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/staff/emp_test.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg=1&tab=6" ><div class="btn btn-default"><?php _p($sr++);   ?></div></a>
                                            <?php }} ?>  

                                            <?php } }  ?>
                                        </div>
                                            <?php } ?>    
                                    &nbsp;
                                    <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/staff/emp_test.php?id=<?php _p($_GET['id']); ?>&docid=<?php if($memdoc) _p($memdoc->IdmemberDoc); ?>&code=<?php _p($scancode->Option);?>&doc=<?php _p($scancode->Option);?>&tab=6">
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
                                        <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
                                                background-image: url(../upload/documents/A<?php _p($profile->IdprofileObject->Code.'/'.$_GET['doc'].'.png'); ?>);
                                                background-repeat: no-repeat; background-size: 80%; width: 720px;" height="500" >
                                        </canvas>
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
