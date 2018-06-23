<!--?php 
if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            if($app){
?-->
<div class="form-controls" style="width: 90%; margin-left:40px;margin-right: 40px;">
<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#ffffff">
    <colgroup><col width="100" /><col width="500" /></colgroup>
    <tbody>
        <tr valign="TOP">
            <td width="100%" bgcolor="#ffffff" style="border-width: initial; border-style: none; border-color: initial; padding: 0in;">
            <div align="Center" width="100%">
            <div style="float:left; margin-left:3%; width: 10%; margin-top: 20px;" align="right"><img src="../../assets/_core/images/Walchand_11.gif" width="100" height="85" alt="" /></div>
            <div style=" width: 80%; float:right; font-size: 25px; margin-top: 20px; text-align: center;">
            <div style="font-size: 20px; text-align: center;"><font color="#cc0000"><font face="Verdana, serif"><b>Walchand College of Engineering, Sangli</b></font></font></font></div>
            <div style="font-size: 13px;"><font color="#cc0000"><font face="Verdana, serif"><b>(An Autonomous Institute)</b></font></font></div>
            <div style="font-size: 15px;"><font size="4"><font color="#cc0000">Vishrambag, SANGLI-416415 (M.S.), India</font></font></div>
            <div style="font-size: 14px;"><font face="Verdana, serif"><font color="#cc0000">Website : www.walchandsangli.ac.in</font></font></div>
            <div style="font-size: 14px;"><font color="#cc0000">Email :&nbsp;<a href="mailto:director.wcesangli@gmail.com" style="color: rgb(0, 0, 255);">director.wcesangli@gmail.com</a>,&nbsp;<a href="mailto:director@walchandsangli.ac.in" style="color: rgb(0, 0, 255);">director@walchandsangli.ac.in</a>,&nbsp;<a href="mailto:walchand@rediffmail.com" style="color: rgb(0, 0, 255);">walchand@rediffmail.com</a></font></div>
            </div>
            <div style="clear: both; margin-top: 30px; ">&nbsp;</div>
            </div>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" width="754" valign="TOP" bgcolor="#ffffff" style="border-top: 1.5pt solid rgb(204, 0, 0); border-bottom: 1.5pt solid rgb(204, 0, 0); border-left: none; border-right: none; padding: 0in;">
            <p align="CENTER" style="margin-bottom: 0.08in; direction: ltr;"><font color="#cc0000"> ☎</font><font color="#cc0000">&nbsp;Director +91-233-2303433&nbsp;</font><font color="#cc0000"><font face="Wingdings, serif"><font style="font-size: 16pt;">☎</font></font></font><font color="#cc0000">&nbsp;Office +91-233-2300383 Fax : +91-233-2300831</font></p>
            </td>
        </tr>
    </tbody>
</table>
<div style="margin-top: 5px;">
<div  style="margin-bottom: 0in; float: left; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Times New Roman, serif"><font size="4"><b>REF : WCE/Estt/O.O/CHB/Deg//<!--?php _p(date('Y',  strtotime(QDateTime::Now()))); ?-->/</b></font></font></div>
<font face="Times New Roman, serif">
<div style="margin-bottom: 0in; float: right; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Times New Roman, serif"><font size="4"><b>Date: - <!--?php _p(date('d-m-Y',  strtotime(QDateTime::Now()))); ?--></b></font></font></div>
<div style="clear: both"></div>
</div>
<p class="western" style="margin-bottom: 0in">To,</p>
<p class="western" style="margin-bottom: 0in"><!--?php _p(delete_all_between('[',']',$app->ApplicantObject->OfObject->Name)); ?--></p>

<p class="western" style="margin-bottom: 0in"><font size="4"><b>Ref :  G.R. No : </b></font><font face="Krishna, serif"><font size="4"><b>TED-2008/(183)/08/05</b></font></font><font face="Krishna, serif"><font face="Krishna, serif"><font size="4"><b> </b></font></font><font size="4"><b>Dated- <!--?php _p(date('d-m-Y',  strtotime(QDateTime::Now()))); ?--></b></font><font face="Krishna, serif"><font size="4"><b> </b></font></font><font size="4"><b> </b></font> </font></p>
<font face="Krishna, serif">
<p class="western" style="margin-bottom: 0in">Dear Sir</p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in">On the recommendation of  I/C. HOD, <!--?php _p(delete_all_between('[',']',$app->Data2)); ?-->. Department  of the College,  I have to inform  that you have been offered an assignment of engaging part teaching load of  <b><!--?php
_p(delete_all_between('[',']',$app->Data2));?-->.  </b>on purely temporary basis on Degree wing on clock&ndash;hour basis for the academic year <!--?php 
_p($app->Data3);?--> w.e.f. <!--?php _p($app->Data4);?-->.                 .</p>

<p class="western" align="JUSTIFY" style="margin-bottom: 0in">The terms and conditions are as follows :</p>
<p class="western" align="JUSTIFY" style="margin-left: 0.25in; margin-bottom: 0in">1.  You will be paid remuneration as per the G.R. referred above.</p>
<p class="western" align="JUSTIFY" style="margin-left: 0.5in; margin-bottom: 0in">Lecture : Rs.  <!--?php _p($app->Data5);?-->/- per hour &amp; Practical/Tutorial : Rs.<!--?php _p($app->Data6);?-->/-  per hour</p>

<p class="western" align="JUSTIFY" style="margin-left: 0.25in; margin-bottom: 0in">2.  Your time table schedule is available with the Head of Deptt.</p>
<p class="western" align="JUSTIFY" style="margin-left: 0.25in; margin-bottom: 0in">3.  With this order you will not make any claims or demands for benefits other than the</p>
<p class="western" align="JUSTIFY" style="margin-left: 0.25in; margin-bottom: 0in">remuneration as stated above.</p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in">&nbsp;</p>
<p class="western" align="RIGHT" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><a name="_GoBack"></a><font size="4"><b>DIRECTOR</b></font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in">Copy to :-</p>

<p class="western" align="JUSTIFY" style="margin-bottom: 0in">1)  I/C. HOD <!--?php _p(delete_all_between('[',']',$app->Data2));?-->Deptt.</p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in">2) Accounts section  3) Establishment section</p>
</font></font></div>
<p><font face="Times New Roman, serif"><font face="Krishna, serif">    <!--?php }}  ?-->               </font></font></p>