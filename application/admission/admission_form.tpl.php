<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
    <script type="text/javascript">
            $(document).ready(function () {
                enableTyping(new Array('c5','c6','c7', 'AddrofBuilding_P', 'AddrofStreet_P', 'AddrofLandmark_P', 'AddrofLocality_P'),
                    new Array('c8','c9','c10', 'AddrofBuildingInMarathi_P', 'AddrofStreetInMarathi_P', 'AddrofLandmarkInMarathi_P', 'AddrofLocalityInMarathi_P'), 'NAME', 'mr_in');
            });
           
    </script>
   
   

<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Admission Form')?>
	</div>
<script>
    function dis(i){
        document.getElementById('d'+i).style.display = "none";
        document.getElementById('e'+i).style.display = "";
    }
</script>

<div class="widget" style="width: 100%; margin-top: 10px; line-height:35px; padding:10px;">
  <ol class="widget-list" id="Document"> 
     <div style="width: 100%;">
    <legend style="line-height:20px;">Enclosed Certificates</legend>

    <table width="70%" border="0" class="datagrid" style="line-height:15px;">
      <tr>
        <th width="3%">&nbsp;</th>
        <th width="5%">Sr</th>
        <th width="36%">Certificate / Document</th>
        <th width="13%">Scan</th>
      </tr>
        <?php  if(isset($_GET['id'])){  
                $docs = MemberDocs::LoadArrayByMember($_GET['id']);
                if($docs){
                    $sr = 1;
                foreach ($docs as $doc){    
        ?>
      <tr>
        <td><div align="center">
          <?php $this->lbldelete[$doc->Id]->Render(); ?>
        </div></td>
        <td><div align="center">
          <?php _p($sr++); ?>
        </div></td>
        <td><?php _p($doc->DocumentObject->Name); ?></td>
        
        <td><div align="center">
            <?php $this->btnScan[$doc->Id]->Render(); ?>
            <?php $this->btnUpload[$doc->Id]->Render(); ?>
            <?php $this->btnimgView[$doc->Id]->Render(); ?>
              
        </div></td>
        </tr>
        <?php }}}  ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
     
        <td><div align="center">
          <?php  $this->btnDoc->Render(); ?>
              
        </div>
        
        </td>
      </tr>
   
    </table>
    <div style="clear: both;"></div>
    <div>    
        <div style="float: left; border: 1px solid lightgray; border-radius: 7px;"><?php  $this->lblAdd->Render(); ?></div>
        <div style="float: left;"><?php  $this->btnAddClose->Render(); ?></div>
          <div id="delete"><?php $this->btnView->Render(); ?></div>
        <div style="clear: both;"></div>
    </div>    
    </fieldset>
    </div>
     <div style="float: right"><?php $this->btnNext2->Render();?></div>   
  </ol>
<ol class="widget-list" id="Education"> 
     <div style="width: 100%;">
        <div style="overflow:auto  ; width: 100%; padding: 5px;">
         <table width="100%" border="0">
      <tr>
        <td width="100%" colspan="4"><table width="795" class="datagrid">
          <tr>
            <th width="17"></th>
            <th width="19">Sr.</th>
            <th width="79">Education Title</th>
            <th width="99">School/College</th>
            <th width="55">University</th>
            <th width="55">University Place</th>
            <th width="78">Language</th>
            <th width="78">Year Of Passing</th>
            <th width="65">SML NO</th>
            <th width="66">ROLL No</th>
            <th width="46">Marks obtained</th>
            <th width="37">Out of marks</th>
            <th width="80">Percentage</th>
          </tr>
          <?php 
             $sr =1;    
            if(isset($_GET['id'])){
                $edus = Education::LoadArrayByMember($_GET['id']);

                foreach ($edus as $edu){
          ?>
          <tr id="d<?php _p($edu->Ideducation); ?>">
            <td><?php $this->btnedudel[$edu->Ideducation]->Render(); ?></td>
            <td><?php _p($sr); ?></td>
            <td><?php _p($edu->TitleObject); ?></td>
            <td><?php _p($edu->Name); ?></td>
            <td><?php _p($edu->Address); ?></td>
            <td><?php _p($edu->UniversityPlace); ?></td>
            <td><?php _p($edu->Language); ?></td>
            <td><?php _p($edu->Grade); ?></td>
            <td><?php _p($edu->SmlNo); ?></td>
            <td><?php _p($edu->Rollno); ?></td>
            <td><?php _p($edu->Marks); ?></td>
            <td><?php _p($edu->OutOf); ?></td>
            <td><?php _p(number_format($edu->Percentage, 2, '.', ',')); ?>
              %
              <?php $this->lblEdit[$edu->Ideducation]->Render(); ?>
              <?php $this->btnMarks[$edu->Ideducation]->Render(); ?></td>
          </tr>
          <tr id="e<?php _p($edu->Ideducation); ?>" style="display: none;">
            <td></td>
            <td><?php _p($sr); ?></td>
            <td><?php $this->lstArrEduTitle[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->txtArrEduName[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->txtArrAddress[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->txtArrUniversityPlace[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->arrlanguage[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->calArrYOP[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->ArrtxtSmlno[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->ArrtxtRollno[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->txtArrMarks[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->txtArrOutOf[$edu->Ideducation]->Render(); ?></td>
            <td><?php $this->txtArrPer[$edu->Ideducation]->Render(); ?></td>
          </tr>
          <?php //$this->pnlPanel[$edu->Ideducation]->Render();  
          $sr++; }} ?>
          <tr>
            <td></td>
            <td><?php _p($sr++); ?></td>
            <td><?php $this->lstEduTitle->Render(); ?></td>
            <td><?php $this->txtCollege->Render(); ?></td>
            <td><?php $this->txtAddress->Render(); ?></td>
            <td><?php $this->txtUniversityPlace->Render(); ?></td>
            <td><?php $this->txtlanguage->Render(); ?></td>
            <td><?php $this->txtYear->Render(); ?></td>
            <td><?php $this->txtSmlno->Render(); ?></td>
            <td><?php $this->txtRollno->Render(); ?></td>
            <td><?php $this->txtMarcks->Render(); ?></td>
            <td><?php $this->txtOutof->Render(); ?></td>
            <td><?php $this->txtPer->Render(); ?></td>
          </tr>
        </table></td>
      </tr>
         </table>
              
            <?php //$this->lblAddMark->Render();?>
        </div>
         <div style="clear: both;"></div>
            <div>    
                <div style="float: left; border: 1px solid lightgray; border-radius: 7px;"><?php  $this->lblAddMark->Render(); ?></div>
                <div style="float: left;"><?php  $this->btnMarksClose->Render(); ?></div>
                <div style="clear: both;"></div>
            </div>  
<div style="float: right"><?php $this->btnNext1->Render();?></div>   
    </div>
     
  </ol>
 <ol class="widget-list" id="Address"> 
    <div style="width: 100%;">
             
    <table width="100%" border="0">
        
      <tr>
        <td width="16%" height="26">Current Address</td>
        <td colspan="3"><?php $this->txtAddress1->Render(); ?></td>
      </tr>
      <tr>
        <td>State</td>
        <td><?php $this->txtstate->Render(); ?></td>
        <td>District</td>
        <td><?php $this->txtdistrict->Render(); ?></td>
      </tr>
      <tr>
        <td>Taluka</td>
        <td><?php $this->txttaluka->Render(); ?></td>
        <td>City</td>
        <td><?php $this->txtCity->Render(); ?></td>
      </tr>
      <tr>
        <td>As Per Above</td>
        <td colspan="3"><?php $this->chkAbove->Render(); ?></td>
      </tr>
      <tr>
        <td>Permanent Address</td>
        <td colspan="3"><?php $this->txtAddress2->Render(); ?></td>
       </tr>
      <tr>
        <td>Place Of Birth</td>
        <td><?php $this->txtPlaceOfBirth->Render(); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td width="34%"><?php $this->txtContact1->Render(); ?></td>
        <td width="16%">Landline</td>
        <td width="34%"><?php $this->txtContact2->Render(); ?></td>
      </tr>
      <tr>
        <td>State</td>
        <td><?php $this->txtstate1->Render(); ?></td>
        <td>District</td>
        <td><?php $this->txtdistrict1->Render(); ?></td>
      </tr>
      <tr>
        <td>Taluka</td>
        <td><?php $this->txttaluka1->Render(); ?></td>
        <td>City</td>
        <td><?php $this->txtCity1->Render(); ?></td>
      </tr>
      <tr>
        <td>Guardian Annual Income</td>
        <td><?php $this->txtIncome->Render(); ?></td>
        <td>Occupation</td>
        <td><?php $this->txtOcupation->Render(); ?></td>
      </tr>
      <tr>
        <td>Relation of applicant with Guardian</td>
        <td><?php $this->txtRelation->Render(); ?></td>
        <td>Marital Status</td>
        <td><?php $this->chkMarried->Render(); ?></td>
      </tr>
         </table>
        <div style="float: right"><?php $this->btnNext->Render();?></div>   
        </div>
     
  </ol>

<ol class="widget-list" id="Admission"> 
     <div style="width: 100%;">
     <table width="100%" border="0">
  <tr>
    <td width="16%" height="26">Application No</td>
    <td width="34%"><?php $this->txtCode->Render(); ?></td>
     <td width="16%"><strong>Date</strong></td>
    <td colspan="2"><?php $this->calAdmitdate->Render(); ?>
      <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></td>
  </tr>
  <tr>
    <td><strong>Admission Year</strong></td>
    <td><?php $this->lstYear->Render(); ?>
      <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></td>
    <td><strong>Admission Mode</strong></td>
    <td colspan="2"><?php $this->lstadmissionmode->Render(); ?>      <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></td>
  </tr>
  <tr>
    <td><strong>University Reservation</strong></td>
    <td style=" font-size:10px;" height="10"><?php $this->lstReservation->Render(); ?>
      <!--img src="<?php //_p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/--></td>
    <td><strong>Course</strong></td>
    <td colspan="2"><?php $this->lstCourse->Render(); ?>
      <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></td>
  </tr>
  <tr>
            <td>&nbsp;</td>
            <td style=" font-size:10px;" height="10">(IN CAPITAL LETTERS ONLY)</td>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
        </tr>
         <tr>
            <td><strong>Name Of The Student</strong></td>
            <td colspan="4"><?php $this->lstprefix->Render(); ?>
              <?php $this->txtFirstname->Render(); ?>
              <?php $this->txtMiddlename->Render(); ?>
              <?php $this->txtLastname->Render(); ?>      <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/req.png" width="10" height="10"  alt=""/></td>
        </tr>
         <tr>
            <td>Marathi Name</td>
            <td colspan="4">
             <?php $this->txtFirstname1->Render(); ?>
              <?php $this->txtMiddlename1->Render(); ?>
              <?php $this->txtLastname1->Render(); ?>   
            </td>
         </tr>
      <tr>
           <td>Old Name</td>
           <td><?php $this->txtOldName->Render(); ?></td>
           <td>Reason of name change</td>
           <td colspan="2"><?php $this->txtReason->Render(); ?></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php $this->lstGender->Render(); ?></td>
        <td>Date Of Birth</td>
        <td width="20%"><?php $this->calDob->Render(); ?></td>
        <td width="14%">&nbsp;Age&nbsp;&nbsp;<?php $this->txtAge->Render(); ?></td>
      </tr>
      <tr>
        <td>Mother’s Name</td>
        <td colspan="4"><?php $this->txtFmothername->Render(); ?>
          <?php $this->txtMmothername->Render(); ?>
          <?php $this->txtLmothername->Render(); ?></td>
      </tr>
      <tr>
        <td>Father’s Name</td>
        <td colspan="4"><?php $this->txtFfathername->Render(); ?>
          <?php $this->txtMfathername->Render(); ?>
          <?php $this->txtLfathername->Render(); ?></td>
      </tr>
      <tr>
        <td>Blood Group</td>
        <td><?php $this->lstBloodgroup->Render(); ?></td>
        <td>Religion</td>
        <td colspan="2"><?php $this->lstReligion->Render(); ?></td>
      </tr>
      <tr>
        <td>Caste Category</td>
        <td><?php $this->lstcastecategory->Render(); ?></td>
        <td>Caste</td>
        <td colspan="2"><?php $this->txtCaste->Render(); ?></td>
      </tr>
      <tr>
        <td>Non-creamy layer Certificate</td>
        <td><?php $this->chkNcl->Render(); ?></td>
        <td>Caste Validity Certificate</td>
        <td colspan="2"><?php $this->chkCvc->Render(); ?></td>
      </tr>
      <tr>
        <td>Is physically challenged?</td>
        <td><?php $this->lstHandicaped->Render(); ?></td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
  
 
     </table>
     <div style="float: right;">    
        <div style="float: left;"><?php $this->btnSave->Render(); ?></div>
        <div style="float: right;"><?php $this->btnNext3->Render(); ?></div>
     
     </div>
    </div>
     
  </ol>
  
<ul class="widget-tabs">
     
        <!-- Omitting the end tag is valid HTML and removes the space in-between inline blocks. -->
     <?php if(isset($_GET['id'])){  ?>
        <li class="widget-tab">
            <a href="#Document" class="widget-tab-link">Documents Upload</a>
       <li class="widget-tab">
       <a href="#Education" class="widget-tab-link">Education Details</a>
     <?php } ?>
    <li class="widget-tab">
        <a href="#Address" class="widget-tab-link">Personal Details</a>
         <li class="widget-tab">
        <a href="#Admission" class="widget-tab-link">Admission Details </a>
      
</ul>
    <div id="formActions">
        <div id="delete"><?php //$this->btnDelete->Render(); ?></div>
        
        
    </div>
</div>
 <?php   $this->pnlForm->Render('Cursor=move');    ?>
 <?php //$this->pnldoc->Render('Cursor=move'); ?>
<?php //$this->pnlScan->Render('Cursor=move'); ?>
            <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>

    <script src="<?php _p(__VIRTUAL_DIRECTORY__.__APP_JS_ASSETS__);?>/marathi_js/CDAC-Typing.min.js" type="text/javascript"></script>
    <script src="<?php _p(__VIRTUAL_DIRECTORY__.__APP_JS_ASSETS__);?>/marathi_js/KeyboardScript.min.js" type="text/javascript"></script>
    <script src="<?php _p(__VIRTUAL_DIRECTORY__.__APP_JS_ASSETS__);?>/marathi_js/jquery.caret.js" type="text/javascript"></script>