
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
<p align="CENTER" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Baskerville Old Face, serif"><font style="font-size: 16pt;"><b>EXPENDITURE CERTIFICATE</b></font></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; line-height: 24px;"><font face="Arial, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that</font><font face="Arial, sans-serif"><b>&nbsp;<!--?php $name = GetFullNameNew($app->ApplicantObject->OfObject->Name, $app->ApplicantObject->OfObject->Code);
$name1= explode('.',$name);
if(isset($name1[1]))
_p($gen.$name1[1]);
elseif(!isset($name1[1]))
    _p($gen.$name);?--></b></font><font face="Arial, sans-serif">&nbsp;is a bonafide student of this college studying in <!--?php _p(' '.delete_all_between('[',']', $year->SemisterObject->ParrentObject->Name).' '.delete_all_between('[', ']',$year->RoleObject->ParrentObject->ParrentObject->Name).' '.delete_all_between('[',']',$year->RoleObject->ParrentObject->Name)); ?--> during the Year <!--?php 
               
                 _p($year->CalenderYearObject->Name);
    ?-->.Further certified that the total duration of the diploma course is of three years and probable yearly expenditure of the diploma classes during the period at this college is generally as detailed below:</font></p>
<center>
<table width="549" cellpadding="7" cellspacing="0">
    <colgroup><col width="67" /><col width="196" /><col width="70" /><col width="64" /><col width="79" /></colgroup>
    <tbody>
        <tr>
            <td width="67" valign="TOP" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>SR. NO.</b></font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>ITEM OF EXPENDITURE</b></font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>F.Y.</b></font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>S.Y.</b></font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>T.Y.</b></font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Tuition fees</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">6000</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">6000</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">6000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">2.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Other fees</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">960</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">550</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">550</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">3.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Development fees</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1000</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1000</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">4.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Text books</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1000</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1200</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1500</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">5.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Stationery, equipment, etc.</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">3000</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">3000</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">5000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">6.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Examination fees</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">720</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">720</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">820</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">7</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Boiler Suit / Shoes</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1000</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">0</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">0</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">8.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Room rent &amp; other charge</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">16000</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">16000</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">16000</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">9.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Mess charges </font><font face="Arial, sans-serif"><b></b></font><font face="Arial, sans-serif"></font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15500</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15500</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">15500</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">10.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">Industrial visit</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">0</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">0</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">1500</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">11.</font></p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">S.U.Insurance</font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">25</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">25</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">25</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="67" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">&nbsp;</p>
            </td>
            <td width="196" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif"><b>Total Rs.</b></font></p>
            </td>
            <td width="70" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p lang="en-US" class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">45205</font></p>
            </td>
            <td width="64" style="border-style: solid none solid solid; border-top-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-width: initial; border-right-color: initial; padding: 0in 0in 0in 0.08in;">
            <p lang="en-US" class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">43995</font></p>
            </td>
            <td width="79" style="border-style: solid; border-color: rgb(0, 0, 0); padding: 0in 0.08in;">
            <p lang="en-US" class="western" align="RIGHT" style="margin-bottom: 0.08in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><font face="Arial, sans-serif">47895</font></p>
            </td>
        </tr>
    </tbody>
</table>
</center>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; line-height: 24px;"><font face="Arial, sans-serif"><b>NOTE:-There shall be 10% rise in other fee and dev. fee for Subsequent years.</b></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; line-height: 24px;">1.<font face="Arial, sans-serif">&nbsp;The Laptop or Desktop is essential for engineering students.</b></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; line-height: 24px;">2.<font face="Arial, sans-serif">&nbsp;The students claiming concessions in fees under the schemes of EBC /SST /PST/ EXSERV /JAWAN/ FF are getting remission in tuition fees.(when ever claim is sanctioned)</font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; line-height: 24px;">3.<font face="Arial, sans-serif">&nbsp;The students belonging to backward class (OBC, VJNT ,SBC &amp; ST) categories enjoy remission in tuition fee, other fees, exam fees. And the students from SC category, enjoy remission in development fees in addition to Tuition, Other &amp; Exam fees.</font></p>
</div>
<!--?php }?-->   
