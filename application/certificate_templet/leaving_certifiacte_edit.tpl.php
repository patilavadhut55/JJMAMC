  
<!--?php 
if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            $year = Address::LoadByIdaddress($app->Applicant);
            $profile = Profile::LoadByIdprofile($year->OfObject->Idledger);
          $gen = '';
if($app->ApplicantObject->Gender==1)
    $gen = 'Mr.';
else
     $gen = 'Miss.';
            ?-->
<div class="form-controls"  style="width: 90%; margin-left:40px;">
<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
    <colgroup><col width="100" /><col width="500" /></colgroup>
    <tbody>
        <tr valign="TOP">
            <td width="100%" bgcolor="#ffffff" style="border-width: initial; border-style: none; border-color: initial; padding: 0in;">
           <div align="Center" width="100%">
            <div style="float:left; width: 5%; margin-top: 20px;" align="right" ><img src="../../assets/_core/images/Walchand_11.gif" width="100" height="85"  alt=""/></div>	
           <div style=" width: 85%; float:right; font-size: 25px; margin-top: 20px; text-align: center;">
                <div style="font-size: 18px; text-align: center;"><font color="#cc0000"><font face="Verdana, serif"><font style="font-size: 15pt;"><b>Walchand College of Engineering, Sangli</b></font></font></font></div>
                <div style="font-size: 13px;"><font color="#cc0000"><font face="Verdana, serif"><b>(An Autonomous Institute)</b></font></font></div>
                <div style="font-size: 15px;"><font size="4"><font color="#cc0000">Vishrambag, SANGLI-416415 (M.S.), India</font></font></div>
                <div style="font-size: 16px;"><font face="Verdana, serif"><font color="#cc0000">Website : www.walchandsangli.ac.in</font></font></div>
            </div>
            <br>
            <br><br>
        <div style="clear: both; margin-top: 30px; "></div>
        </div>
                <br>
             <div align="Center" width="100%">
                <div style="font-size: 16px;">
                    <font color="#cc0000">Email:&nbsp;&nbsp;<a href="mailto:director.wcesangli@gmail.com" style="color: rgb(0, 0, 255);">director.wcesangli@gmail.com</a>,&nbsp;<a href="mailto:director@walchandsangli.ac.in" style="color: rgb(0, 0, 255);">director@walchandsangli.ac.in</a>,&nbsp;<a href="mailto:walchand@rediffmail.com" style="color: rgb(0, 0, 255);">walchand@rediffmail.com</a></font>
                </div>
              </div>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" width="754" valign="TOP" bgcolor="#ffffff" style="border-top: 1.5pt solid rgb(204, 0, 0); border-bottom: 1.5pt solid rgb(204, 0, 0); border-left: none; border-right: none; padding: 0in;">
                <p align="CENTER" style="margin-bottom: 0.08in; direction: ltr;"><font color="#cc0000">&#x260E;</font><font color="#cc0000">&nbsp;Director +91-233-2303433&nbsp;</font><font color="#cc0000"><font face="Wingdings, serif"><font style="font-size: 16pt;">&#x260E;</font></font></font><font color="#cc0000">&nbsp;Office +91-233-2300383 Fax : +91-233-2300831</font></p>
            </td>
        </tr>
    </tbody>
</table>
      <p class="western" align="CENTER" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"> (No Change In any entry In this Certificate Shall Be made except by the authority Issuing it and, infringement of this requirement Is liable to involve the Imposition of penalty such that rustication)</font></font></p>
    <table>
     <tr><td height="25"></td></tr>
        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Name Of Student</b></font></font></p></div>
             </td>
             <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php $name=  GetFullNameNew($app->ApplicantObject->OfObject->Name, $app->ApplicantObject->OfObject->Code);
             $name1= explode('.',$name);
            if(isset($name1[1]))
                 _p($gen.$name1[1]);
            elseif(!isset($name1[1]))
                  _p($gen.$name);
             
             ?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>
         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Mother Name</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3">
                 <!--?php 
            $gardian = Gardian::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Gardian()->Of,$profile->Idprofile),
                             QQ::Equal(QQN::Gardian()->GardianCat,2)       
                                    ));
            if($gardian){
            foreach ($gardian as $gurd){}
              _p($gurd->GardianName);
             
            }else{
                 _p(' ');
            }
            
             ?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Registration No</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p($year->OfObject->Code); ?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Father's Name/Guardian</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3">
                 <!--?php 
              $gardian1 = Gardian::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Gardian()->Of,$profile->Idprofile),
                            QQ::Equal(QQN::Gardian()->GardianCat,1)       
                                    ));
            if($gardian1){
            foreach ($gardian1 as $gurd1){}
              _p($gurd1->GardianName);
             
            }else{
                 _p(' ');
            }
             ?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Religion</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php if($profile->Religion){_p($profile->ReligionObject->Name);}else{_p(' ');}?--></font></div>
            </td>
        </tr>
             <tr><td height="10"></td></tr>

        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Caste</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php if($profile->Caste){_p($profile->CasteObject->Name);}else{_p(' ');}?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Date Of Birth</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p(date('d-m-Y',  strtotime($year->Dob)));?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>PlaceOf Birth</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p($year->BirthPlace);?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

          <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Nationality</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php if($profile->Nationality) {_p($profile->NationalityObject->Name);}else{_p(' ');} ?--></font></div>
            </td>
        </tr>
             <tr><td height="10"></td></tr>

          <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Date Of Admission</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p(date('d-m-Y',  strtotime($profile->AddmissionDate)));?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Branch of Engineering/Course</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3">
                 <!--?php 
                       $cur = CurrentStatus::LoadArrayByStudent($year->Of);
                       if($cur){
                           foreach($cur as $c){}
                      _p(delete_all_between('[',']',$c->RoleObject->ParrentObject->Name).'('.delete_all_between('[', ']',$c->RoleObject->ParrentObject->ParrentObject->Name).')');
                       }
                       else{
                           _p(' ');
                       }
                      ?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>
         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Date Of Pass Out</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p(date('d-m-Y',  strtotime($profile->LeaveDate)));?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Class of study at the time of
leaving the Institute</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3">
                 <!--?php
              $cur1 = CurrentStatus::LoadArrayByStudent($year->Of);
                       if($cur1){
                           foreach($cur1 as $c1){}
                      _p(delete_all_between('[', ']',$c1->RoleObject->ParrentObject->ParrentObject->Name).'('.delete_all_between('[',']',$c1->RoleObject->ParrentObject->Name).')');
                       }
                       else{
                           _p(' ');
                       }
             ?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Reason for leaving the Institute</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p($app->Reason);?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Institute fees,Other Charges
& Dues   </b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="4"><!--?php _p($app->Data2);?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

        <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Conduct
</b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3"><!--?php _p($app->Data3);?--></font></div>
            </td>
        </tr>
             <tr><td height="5"></td></tr>

         <tr>
            <td width="50%"><div class="col-md-6"><p align='JUSTIFY' class="western" align="LEFT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="3"><b>Remark
                    </b></font></font></p></div>
             </td>
               <td width="5">:</td>
             <td width="50%"><div class="col-md-6"><font face="Verdana, serif"><font size="3">
                 <!--?php
            _p($app->Data4)
             ?--></font></div>
            </td>
        </tr>
          <tr><td height="5"></td></tr>
         <tr>
            <td colspan="3" width="1300" valign="TOP" bgcolor="#ffffff" style="border-top: 1.5pt solid rgb(204, 0, 0); border-bottom: 1.5pt solid rgb(204, 0, 0); border-left: none; border-right: none; padding: 0in;">
            </td>
        </tr>
       <tr><td height="5"></td></tr>
    </table>
 <p class="western" align="CENTER" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Verdana, serif"><font size="4"> Certified that above Information is In accordance with the College register.</font></font></p>
 <p  align='LEFT'><b>DATE:- &nbsp;&nbsp;<!--?php _p(date('d-m-Y',  strtotime(QDateTime::Now())));?--></b></p>
 <div class="col-lg-3 pull-right">
 <p  align='RIGHT' style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 25px;"><font face="Times New Roman, serif"><font size="3"><b>Director</b></font></font></p>
 <p align='RIGHT' style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 25px;"><font face="Times New Roman, serif"><font size="3"><b> Walchand College of Engineering Sangli</b></font></font></p>
 </div>
 <p style="margin-bottom: 0.46in; direction: ltr; line-height: 16px;">&nbsp;</p>
</div>
<!--?php }?>   

