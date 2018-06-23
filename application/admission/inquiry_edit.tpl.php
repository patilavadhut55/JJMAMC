<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>

<?php $this->RenderBegin() ?>

<h1><?php _t('Inquiry Form') ?></h1>    

<div class="pull-right slideup" >
    <?php $this->btnNew->Render(); ?>
    <?php $this->btnList->Render(); ?>
</div>

<div style="clear: both"></div>

<script>
    function dis(i) {
        document.getElementById('d' + i).style.display = "none";
        document.getElementById('e' + i).style.display = "";
    }
</script>

<div class="form-controls">
    <h3 style="color: #205081; border-bottom: 1px solid #205081; margin-bottom: 25px;">Basic Details</h3>
    <div style="float: right; color: #ff6666;" class="slideup"><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/>   Required Data</div>
    <table width="100%" border="0">
        <tr>
            <td width="15%" height="45"><strong>Inquiry No.</strong></td>
            <td width="35%"><?php $this->txtCode->Render(); ?></td>
            <td width="10%"><strong>Date</strong></td>
            <td width="42%">
                <div style="float: left; margin-right: 10px; "><?php $this->calAdmitdate->Render(); ?></div>
                <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
            </td>
        </tr>
        <tr>
            <td height="45"><strong>Admission Mode</strong></td>
            <td><?php $this->lstadmissionmode->Render(); ?></td>
            <td><strong>Course</strong></td>
            <td>
                <div style="float: left; margin-right: 10px; width: 60%"><?php $this->lstCourse->Render(); ?></div>
                <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                
            </td>
        </tr>
        <tr>
            <td height="45"><strong>Name Of The Student</strong></td>
            <td colspan="3">
                <div>
                    <div style="float: left; margin-right: 15px; margin-top: 2px;"><?php $this->lstprefix->Render(); ?></div>
                    <div style="float: left; margin-right: 15px;"><?php $this->txtFirstname->Render(); ?></div>
                    <div style="float: left; margin-right: 15px;"><?php $this->txtMiddlename->Render(); ?></div>
                    <div style="float: left; margin-right: 10px;"><?php $this->txtLastname->Render(); ?></div>
                    <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                    <div style="clear: both;"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td height="45"><strong>Father Name</strong></td>
            <td><?php $this->txtFfathername->Render(); ?></td>
            <td height="45"><strong>Mother Name</strong></td>
            <td><?php $this->txtFMothername->Render(); ?></td>
        </tr>
        <tr>
            <td height="45"><strong>Date Of Birth</strong></td>
            <td>
                <div>
                    <div style="float: left; margin-right: 10px; width: 40%;"><?php $this->calDob->Render(); ?></div>
                    <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                    <div style="clear: both;"></div>
                </div>
            </td>
            <td><strong>Age</strong></td>
            <td>
                <div>
                    <div style="float: left; margin-right: 10px; width: 15%;"><?php $this->txtAge->Render(); ?></div>
                    <div style="float: left; "><img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></div>
                    <div style="clear: both;"></div>
                </div>
            </td>   
        </tr>
        <tr>
            <td height="45"><strong>Category</strong></td>
            <td><?php $this->lstcastecategory->Render(); ?></td>
            <td><strong>Caste</strong></td>
            <td><?php $this->txtCaste->Render(); ?></td>
        </tr>
        <tr>
            <td><strong>Current Address</strong></td>
            <td colspan="3"><?php $this->txtAddress1->Render(); ?></td>
        </tr>
        <tr>
            <td height="45"><strong>Phone</strong></td>
            <td><?php $this->txtContact1->Render(); ?></td>
            <td><strong>Cell No</strong></td>
            <td><?php $this->txtContact2->Render(); ?></td>
        </tr>
        <tr>
            <td colspan="4">
                <h3 style="color: #205081; border-bottom: 2px solid #205081; margin-top: 25px; margin-bottom: 25px;">CET Details</h3>
                <table width="100%" border="0" style="line-height:25px;">
                    <tr>
                        <td width="15%"><strong>CET Type</strong></td>
                        <td width="85%" colspan="3">
                            <div>
                                <div style="float: left; margin-right: 15px; margin-top: 2px;"><?php $this->lstCET->Render(); ?></div>
                                <div style="float: left; margin-right: 5px;">Marks </div>
                                <div style="float: left; margin-right: 10px;"><?php $this->txtCetmarks->Render(); ?></div>
                                <div style="float: left; margin-right: 5px;">Out Of</div>
                                <div style="float: left; margin-right: 10px;"><?php $this->txtCetOutof->Render(); ?></div>
                                <div style="float: left; margin-right: 5px;">Percentage %</div>
                                <div style="float: left; "><?php $this->txtCetPer->Render(); ?></div>
                                <div style="clear: both;"></div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h3 style="color: #205081; border-bottom: 2px solid #205081; margin-top: 25px; margin-bottom: 25px;">HSC (12th) Details</h3>
                <table width="100%" border="0" style="line-height:25px;">
                    <tr>
                        <td width="14%"><strong>Marks</strong></td>
                        <td width="86%" colspan="3" height="50">
                            <div>
                                <div style="float: left; margin-right: 10px;">Total</div>
                                <div style="float: left; margin-right: 10px;"><?php $this->txthscMarks->Render(); ?></div>
                                <div style="float: left; margin-right: 10px;">Out Of</div>
                                <div style="float: left; margin-right: 10px;"><?php $this->txtHscOutof->Render(); ?></div>
                                <div style="float: left; margin-right: 10px;">Percentage %</div>
                                <div style="float: left; margin-right: 10px;"><?php $this->txthscPer->Render(); ?></div>
                                <div style="clear: both;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="3" >
                            <table width="50%" border="1" style="border:1px solid #CCC; line-height:25px;">
                                <tr bgcolor="#F0F0F0">
                                    <td><div align="center">Physics</div></td>
                                    <td><div align="center">Chemistry</div></td>
                                    <td><div align="center">Biology</div></td>
                                    <td><div align="center">Total</div></td>
                                    <td><div align="center">Percentage %</div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><?php $this->txtP->Render(); ?></div></td>
                                    <td><div align="center"><?php $this->txtChem->Render(); ?></div></td>
                                    <td><div align="center"><?php $this->txtB->Render(); ?></div></td>
                                    <td><div align="center"><?php $this->lblGroupMarks->Render(); ?> </div></td>
                                    <td><div align="center"><?php $this->lblGroupper->Render(); ?></div></td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                </table>
            </td>
        </tr>
        <tr><td colspan="4" height="20"></td></tr>
        <tr  style="border-top: 3px solid #205081; margin-top: 20px;">
            <td height="60"><strong>Is take Admission form?</strong></td>
            <td colspan="3">
                <div style="float: left;">
                    <div style="float: left; margin-right: 15px; "><?php $this->chktakeform->Render(); ?></div>
                    <div style="float: left;"><?php $this->txtformamt->Render(); ?></div>
                </div>
            </td>
        </tr>
    </table>
    

    <div class="form-actions">
        <div class="form-save"><?php $this->btnSave->Render(); ?></div>
        <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
        <div style="clear: both;"></div>
    </div>
</div>

<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>