<?php
    require('../../qcubed.inc.php');
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
?>
<script language="javascript">
	function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formprint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@page{ size: A4; margin:0; }</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script>
    <div class="pull-left" style="margin-left: 10px;">
        <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
<div class="clearfix"></div>
<?php
if(isset($_GET['id'])){
    $led = Ledger::LoadByIdledger($_GET['id']);
    $profile = Profile::LoadByIdprofile($_GET['id']);
    $CurrentStatus = CurrentStatus::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->Student,$_GET['id'])
                ),
                QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister))
            ); //Checking condition of CurrentStatus of student by entry available in Ledger
    if($CurrentStatus){
        foreach($CurrentStatus as $CurrentStatu){}
    }
    $cnt = CurrentStatus::QueryCount(
            QQ::AndCondition(
                QQ::Equal(QQN::CurrentStatus()->Student,$_GET['id'])
            ));
    $i=1;
    $prevCurrentStatus = CurrentStatus::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->Student,$_GET['id'])
                ),
                QQ::Clause(QQ::OrderBy(QQN::CurrentStatus()->Semister))
            );
    foreach($prevCurrentStatus as $precurrentStatu){
        if($i++ == $cnt-1){
            break;
        }
    }
    
    $adds = Address::LoadArrayByOf($_GET['id']);
    if($adds && $profile){
        foreach ($adds as $add){}

        $apps  = Application::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::Application()->ApplicantObject->Of, $_GET['id']),
                    QQ::Equal(QQN::Application()->AppliedFor, 1)
                )); // Condition to display Address details of student
        //if($apps){
            foreach ($apps as $app){}
       
?>
<div align="center" style="border: 0px solid #000; height: 110%; width: 70%; padding: 5px 20px; " >
    <div id="formprint"  align="justify"style="border: 0px solid #000;">
        <div align="Center" width="100%">
            <div style="float:left; margin-left:3%; width: 10%; margin-top: 20px;" align="right" ><img src="../../assets/_core/images/logo.png" width="90" height="90"  alt=""/></div>	
            <div style=" width: 85%; float:right; font-size: 25px; margin-top: 20px; text-align: center;">
                <div style="font-size: 15px; text-align: center;"><?php _p($collage->Name); ?></div>               
                <div style="font-size: 10px;">
                    <?php 
                        $roleadds = $collage->GetAddressAsRollArray();
                        if($roleadds){
                            foreach ($roleadds as $roleadd){}
                            _p($roleadd->AddressLine1); 
                        }
                    ?>
                </div>
                <div style="font-size: 10px;">ADMISSION FORM &nbsp;<?php _p(date('Y',  strtotime(QDateTime::Now())));?></div>
            </div>
        </div>
        
        <table width="100%" style="margin-top: 20px;" >
            <tr>
                <td height="20" colspan="2">Appl. ID:&nbsp;<strong><?php if($apps) _p($app->Code); ?></strong></td>
                <td height="20" colspan="2">PRN No.:&nbsp;<strong><?php _p($led->Code); ?></strong></td>
                <td height="20" colspan="2" rowspan="3" valign="top"><div align="center" style=" height:150px; width: 100px; margin-left:30px;"><?php
                    $img="http://".$_SERVER['HTTP_HOST'].__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/upload/photo/".$led->Idledger.".png";
                    if(@getimagesize($img)){ ?>
                      <img  src="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/photo/<?php _p($led->Idledger) ?>.png" width="86" height="86" />
                <?php }else{ ?>
                      <div ></div>
                <?php } ?></div></td>
            </tr>
            <tr>
                <td height="26" colspan="2">Status:&nbsp;<strong><?php _p($profile->PlaceStatus); ?></strong></td>
                <td height="26" colspan="2">Category:&nbsp;<strong><?php _p($profile->FeeConcessionObject); ?></strong></td>
            </tr>
          <tr>
            <td height="105" colspan="2">
              To,<br>
              The Director<br>
              <?php _p($collage->Name); ?><br>
              Sir,<br>
            </td>
            <td width="73" height="105">&nbsp;</td>
            <td width="114" height="105">&nbsp;</td>
          </tr>
          <tr>
                <td height="44" colspan="6">
                    I, the undersigned &nbsp;<strong><?php _p(GetFullNameNew($led->Name,$led->Code)); ?></strong>&nbsp; desire to seek admission in the class  &nbsp;<strong><?php if($CurrentStatus) _p($CurrentStatu->SemisterObject); else _p($profile->AccYearObject);  ?></strong>&nbsp;
                        &nbsp;
                    <strong><?php  if($CurrentStatus) _p(delete_all_between('[',']',$CurrentStatu->RoleObject->ParrentObject)); else _p(delete_all_between('[',']',$profile->CourseOfAddmissionObject));  ?></strong>&nbsp; <br>
                
                </td>
          </tr>
          <tr>
            <td height="30" colspan="4">Name in Full<strong>
              <?php _p(GetFullNameNew($led->Name,$led->Name)); ?>
            </strong></td>
            <td height="30" colspan="2">BirthDate(yyyy/mm/dd):&nbsp;<strong><?php if($add->Dob != NULL) _p(date('Y/m/d', strtotime($add->Dob))); ?></strong></td>
          </tr>
          <tr>
            <td height="31" colspan="2">Belong to BC Category(Y / N):<strong>
              <?php _p($profile->FeeConcessionObject); ?>
            </strong></td>
            <td height="31" colspan="2">Religion:<strong>
              <?php _p($profile->ReligionObject); ?>
            </strong></td>
            <td height="31" colspan="2">Caste: &nbsp;<strong>  <?php _p($profile->CasteCatObject); ?></strong>&nbsp; Sub-Caste: &nbsp;<strong><?php _p($profile->CasteObject); ?></strong></td>
          </tr>
          <tr>
            <td height="27" colspan="2">Local Address:<strong>
              <?php _p($add->AddressLine2); ?>
            </strong></td>
            <td height="27" colspan="2">With Phone/Mobile No.<strong>
              <?php _p($add->Contact1); ?>
            </strong><strong>&nbsp;</strong></td>
            <td height="27" colspan="2">Email:<strong>
              <?php _p($add->Email1); ?>
            </strong><strong>&nbsp;</strong></td>
          </tr>

          <?php
            if($profile->DdDetails){
                $dd = explode(',', $profile->DdDetails);
          ?>
          <tr>
            <td width="118" height="26">DD Amount:
            <?php _p($dd[0]);?></td>
            <td width="130" height="26">DD No:
            <?php _p($dd[1]);?></td>
            <td height="26">DD Date:</td>
            <td height="26"><?php _p($dd[2]);?></td>
            <td width="58" height="26">Bank:</td>
            <td width="127" height="26"><?php _p($dd[3]);?></td>
          </tr>
            <?php }?>
        <tr>
            <td height="133" colspan="6"><span style="margin-left: 2%"><div align="justify" style="margin-top:10px;">
                                I hereby declare that the information given above is true to the best of my knowledge.I hereby agree to
                confirm to the rules and regulations at present in force or that may hereafter be made for the governance of the 
                college and I undertake that so long as I am a student of the college.I will do nothing either
                inside the college or outside the college that will interfere with it's orderly governance and discipline.I
                shall attend lectures and practicals regularly from the day one and fulfill attendance criteria to become 
                eligible to appear for the exam. </div></span></td>
        </tr>
        <tr>
            <td height="47" colspan="2"><div style="margin-top:50px;">Student Signature:</div></td>
            <td height="47">&nbsp;</td>
            <td height="47">&nbsp;</td>
            <td height="47">&nbsp;</td>
            <td height="47">&nbsp;</td>
        </tr>
        <tr>
              <td height="41" colspan="2"><div style="margin-top:10px;">Date:                <strong>
              <?php _p(date('d/m/Y'));?>
            </strong></div></td>
            <td height="41">&nbsp;</td>
            <td height="41">&nbsp;</td>
            <td height="41">&nbsp;</td>
            <td height="41">&nbsp;</td>
        </tr>
        <tr>
              <td height="41" colspan="6">
                  <div style="border-top:1px solid #000; ">
                      <p><u><strong>FOR OFFICE USE ONLY</strong></u></p>
                  </div>
            <p>Verified By</p></td>
          </tr>
          <tr>
          <td height="41" colspan="3"><p>&nbsp;</p>
            <p>&nbsp;</p>
            <p align="center">Student Section</p></td>
            <td height="41" colspan="3"><p>&nbsp;</p>
              <p>&nbsp;</p>
            <p align="center">Scholarship Section</p></td>
          </tr>
        </table>
        <div style="clear: both"></div>
        <?php }} //}?>
        <div style="clear: both"></div>
    </div>    
</div>