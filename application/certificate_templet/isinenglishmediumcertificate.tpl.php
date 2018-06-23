<!--?php if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            $cur = CurrentStatus::LoadArrayByStudent($app->ApplicantObject->Of);
             foreach ($cur as $year){}
$gen= '' ;
$gen1= '';
if($app->ApplicantObject->Gender==1)
       $gen = 'Mr.';
    else
       $gen = 'Miss';
 if($app->ApplicantObject->Gender==1)
       $gen1='He';
 else
       $gen1 = 'She';  
?-->
<div>&nbsp;</div>
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
<table width="100%">
        <tr>
            <td>
 <p align="LEFT" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Times New Roman, serif"><font size="4"><b>
         WCE/Degree/Cert/<!--?php _p(date('Y',  strtotime(QDateTime::Now())));?-->/</b></font></font></p>
            </td>
            <td>
 <p align="Right" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Times New Roman, serif"><font size="4"><b>
  Date: - <!--?php _p(date('d-m-Y',  strtotime(QDateTime::Now())));?--></b></font></font></p>
            </td>
        </tr>
    </table>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" align="CENTER" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font face="Baskerville Old Face, serif"><font style="font-size: 16pt;"><u><b>Whom so Ever It May Concern</b></u></font></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certified that&nbsp;</font><font size="4"><b><!--?php $name = GetFullNameNew($app->ApplicantObject->OfObject->Name, $app->ApplicantObject->OfObject->Code);
$name1= explode('.',$name);
if(isset($name1[1]))
_p($gen.$name1[1]);
elseif(!isset($name1[1]))
    _p($gen.$name);?-->&nbsp;</b></font><font size="4">PRN No.<!--?php _p($app->ApplicantObject->OfObject->Code); ?--> was a bonafide student of this college from June   <!--?php 
               
                 _p(date('Y',  strtotime($year->CalenderYearObject->From)));
    ?--> till May<!--?php _p(date('Y',  strtotime($year->CalenderYearObject->To)));
    ?-->. <!--?php _p($gen1);?-->  has passed&nbsp;</font><font size="4"><b><!--?php _p(' '.delete_all_between('[', ']',$year->RoleObject->ParrentObject->ParrentObject->Name).' '.delete_all_between('[',']',$year->RoleObject->ParrentObject->Name)); ?-->.</b></font><font size="4">&nbsp;Examination held in May<!--?php _p(date('Y',  strtotime($year->CalenderYearObject->To)));
    ?-->conducted by Walchand College of Engineering Sangli.The medium of instruction of the said four year degree course is in English.</font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4">This certificate issued by student request.</font></p>
<p class="western" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" align="RIGHT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4"><b>Director</b></font></p>
</div>
<!--?php }?-->
