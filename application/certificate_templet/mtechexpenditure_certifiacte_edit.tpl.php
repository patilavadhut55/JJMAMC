<!--?php 
if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            $cur = CurrentStatus::LoadArrayByStudent($app->ApplicantObject->Of);
             foreach ($cur as $year){}
$gen = '';
if($app->ApplicantObject->Gender==1)
    $gen = 'Mr.';
elseif($app->ApplicantObject->Gender==2)

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
<h3 class="western" style="margin-top: 0in; margin-bottom: 0in; direction: ltr; text-align: center; text-decoration: underline; font-size: 16pt;"><font face="Arial, sans-serif"><font size="3"><b>EXPENDITURE CERTIFICATE</b></font></font></h3>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: medium; line-height: 24px;"><font face="Arial, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that&nbsp;</font><font face="Arial, sans-serif"><u><b><!--?php $name = GetFullNameNew($app->ApplicantObject->OfObject->Name,$app->ApplicantObject->OfObject->Code);
$name1= explode('.',$name);
if(isset($name1[1]))
_p($gen.$name1[1]);
elseif(!isset($name1[1]))
    _p($gen.$name);?--></b></u></font><font face="Arial, sans-serif">  is a bonafide student of this college studying in<!--?php _p(' '.delete_all_between('[',']', $year->SemisterObject->ParrentObject->Name).' '.delete_all_between('[', ']',$year->RoleObject->ParrentObject->ParrentObject->Name).' '.delete_all_between('[',']',$year->RoleObject->ParrentObject->Name)); ?--> course during the academic year <!--?php _p($year->CalenderYearObject->Name);
    ?-->.
Further Certified that the total duration of the PG course is of two years and probable expenditure of P.G. classes during the academic year 2016-17 at this college is generally as detailed below.</font></p>
<center style="font-family: &quot;Times New Roman&quot;; font-size: medium;">
<table align="Center" width="541" cellpadding="7" cellspacing="0">
    <colgroup><col width="24" /><col width="175" /><col width="127" /><col width="158" /></colgroup>
    <tbody>
        <tr>
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><font style="font-size: 11pt;"><b>Sr. No.</b></font></font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><font style="font-size: 11pt;"><b>ITEM OF EXPENDITURE</b></font></font></p>
            </td>
            <td width="127" valign="TOP" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <h5 class="western" align="CENTER" style="margin-bottom: 0.04in; direction: ltr; break-after: auto; font-size: 13pt; font-style: italic;"><font face="Arial, sans-serif"><font style="font-size: 11pt;">M. Tech Ist Year</font></font></h5>
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>ALL BRANCHES</b></font></p>
            </td>
            <td width="158" valign="TOP" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <h5 class="western" align="CENTER" style="margin-bottom: 0.04in; direction: ltr; break-after: auto; font-size: 13pt; font-style: italic;"><font face="Arial, sans-serif"><font style="font-size: 11pt;">M. Tech IInd Year</font></font></h5>
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; text-indent: 0.12in;"><font face="Arial, sans-serif"><b>ALL BRANCHES</b></font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Tuition fees</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15000</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" height="7" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">2.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Other fees</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">28285</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">28285</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">3.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Development fees</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">28285</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">28285</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">4.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Contingency charges</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">10000</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">10000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">5.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Examination fees</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">5000</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">5000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">6.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Caution Deposit</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">500</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">0</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">7.</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Room rent &amp; other charges</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">16000</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">16000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">8</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Mess charges&nbsp;</font><font face="Arial, sans-serif"><b></b></font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15500</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15500</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">9</font></p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">S.U. &amp; COLLEGE FEE</font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">12130</font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">12130</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="24" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">&nbsp;</p>
            </td>
            <td width="175" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>TOTAL</b></font></p>
            </td>
            <td width="127" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p lang="en-US" class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>130700</b></font></p>
            </td>
            <td width="158" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p lang="en-US" class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>130200</b></font></p>
            </td>
        </tr>
    </tbody>
</table>
</center>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: medium; margin-left: 0.75in; text-indent: -0.75in;"><font face="Arial, sans-serif"><b>NOTE:-There shall be 10% rise in other fee and dev. fee for Subsequent years.</b></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: medium; line-height: 24px;"><font face="Arial, sans-serif"><b>The Laptop or Desktop is essential for engineering students.</b></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: medium; margin-left: 0.5in; text-indent: -0.46in; line-height: 24px;"><font face="Arial, sans-serif">1.The above expenditure is estimated after taking into account the expenditure of the student staying in the hostel taking vegetarian meals in the college mess. Hence, this expenditure may vary from student to student.</font></p>
</div>
<!--?php }?-->   

