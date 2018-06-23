<!--?php if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            if($app){ ?-->
<div class="form-controls" style="width: 90%; margin-left:40px;margin-right: 40px;margin-bottom: 90px;">
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
            <p align="CENTER" style="margin-bottom: 0.08in; direction: ltr;"><font color="#cc0000">☎</font><font color="#cc0000">&nbsp;Director +91-233-2303433&nbsp;</font><font color="#cc0000"><font face="Wingdings, serif"><font style="font-size: 16pt;">☎</font></font></font><font color="#cc0000">&nbsp;Office +91-233-2300383 Fax : +91-233-2300831</font></p>
            </td>
        </tr>
    </tbody>
</table>
<div style="margin-top: 5px;">
<div  style="float: left; margin-bottom: 0in"><font face="Krishna, serif"><font size="4" style="font-size: 15pt"><font face="Arial, serif"><font size="2" style="font-size: 11pt">Ref No.     WCE/Estt/Apptt.Ord./ABA/<!--?php _p(date('Y',  strtotime(QDateTime::Now)))?-->/                                          </font></font></font></font></div>
<div  style="float: right; margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Times New Roman, serif"><font size="4"><b>Date: - <!--?php _p(date('d-m-Y',  strtotime(QDateTime::Now())));?--></b></font></font></div>
<div style="clear: both"></div>
</div>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" style="margin-bottom: 0in">To,</p>
<p class="western"><!--?php _p(delete_all_between('[',']',$app->ApplicantObject->OfObject->Name));?--></p>
<p class="western" style="margin-bottom: 0in">Lecturer in <!--?php _p(delete_all_between('[',']',$app->Data2));?-->.Deptt.</p>
<p class="western" style="margin-bottom: 0in">W.C.E., Sangli</p>
<p class="western" style="text-indent: 0.5in; margin-bottom: 0in">Ref.No. 1.  Letter No. 4/Estt/2004/14305 dated <!--?php _p($app->Data5);?--> received</p>
<p class="western" style="margin-bottom: 0in">from DTE, Mumbai</p>
<p class="western" style="text-indent: 0.5in; margin-bottom: 0in">2. Letter No. ATU/2002/(74/2000)/TASI-6 dated <!--?php _p($app->Data5);?--></p>
<p class="western" style="text-indent: 0.5in; margin-bottom: 0in">received  from Higher &amp; Technical Education Department,</p>
<p class="western" style="text-indent: 0.5in; margin-bottom: 0in">Mantralay, Mumbai-400 032</p>
<p class="western" style="margin-bottom: 0in">Dear Sir,</p>
<h4 class="western" align="JUSTIFY">This has  reference to your personal interview before the Selection Committee held on <!--?php _p($app->Data9);?-->. On the recommendation of the Selection Committee and  subsequent  letters as referred above at Sr.No.1 and 2,  the  undersigned  is pleased to inform  that you have been offered the post of Professor in  <!--?php _p(delete_all_between('[',']',$app->Data2));?--> Department on degree  side  on  following terms and  conditions.</h4>
<ol>
    <li>
    <p class="western" style="margin-bottom: 0in">Your appointment 	is subject to the approval of Shivaji University, Kolhapur.</p>
    </li>
</ol>
<ol start="2">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">Your 	appointment in the post of Professor  in <!--?php _p(delete_all_between('[',']',$app->Data2));?-->. 	Department will be on probation for a period of two years from the 	date of  joining to your duties.  If your work during the 	probationary period is not found satisfactory, you   will be 	reverted back to your substantive post.  </font></p>
    </li>
</ol>
<ol start="3">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">Your 	 pay on appointment will be Rs. <!--?php _p($app->Data4);?-->/- in the scale of 	Rs.<!--?php _p($app->Data6);?--> + D.A. + H.R.A.  at the rates 	sanctioned and approved by the Administrative Council    of the 	College.  The directives of D.T.E. with regard to the pay, pay-scale 	and any   revision thereof  will be binding on you.</font></p>
    </li>
</ol>
<ol start="4">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">You 	will be subject to such service rules and regulations as are 	prescribed from time to time by the Administrative Council for the 	employees of Walchand College of Engineering, Sangli.</font></p>
    </li>
</ol>
<ol start="5">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">The 	appointment is full time one and does not permit to engage yourself 	in any outside business, professional consultancy, tuition, tutorial 	or such other outside work either with or without remuneration, 	without the express sanction of the authorities of the College. </font></p>
    </li>
</ol>
<p class="western" style="margin-bottom: 0in">&nbsp;</p>
<p class="western" style="margin-bottom: 0in">&nbsp;</p>
<br />
<br />
<ol start="6">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">The 	Administrative Council reserves  the right to amend, modify, alter 	or vary the terms and conditions of service applicable to the 	employees including pay scales, which if and when modified, altered 	or varied will be binding on you. </font></p>
    </li>
</ol>
<ol start="7">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">The 	fixation of salary in revised scales, if and when revised and 	implemented in future by the Govt. will be governed by the 	directives those may be issued by the Govt. in the matter and the 	College will not be liable and/or be able to compensate for the 	losses if any. </font></p>
    </li>
</ol>
<ol start="8">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">It 	is  obligatory for you to do such work in the College or outside, 	that pertains to and has bearing upon the smooth running or 	improvement of the College, assigned to you by the Administrative 	Council or its representative from time to time. </font></p>
    </li>
</ol>
<ol start="9">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">You 	will be required to produce authentic proof regarding date of birth, 	qualification, caste validity certificate ( in case of  category 	candidates)  experience etc. to the  before joining.</font></p>
    </li>
</ol>
<ol start="10">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">You 	will be required to carry out all work related to academic programs, 	extra curricular and extra co-curricular activities, laboratory 	development, maintenance of equipment, R &amp; D work and any 	administrative work assigned to you by the Head of 	Department/Principal from time to time.        </font></p>
    </li>
</ol>
<ol start="11">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">You 	will have to submit medical fitness certificate within three months. 	</font></p>
    </li>
</ol>
<ol start="12">
    <li>
    <p align="JUSTIFY" style="margin-bottom: 0in"><font face="Arial, serif">You 	have to submit change-in-staff form in the College office 	immediately after you joining to  your duties within eight days 	which is to be submitted to University. </font></p>
    </li>
</ol>
<p class="western" align="JUSTIFY" style="text-indent: 0.5in; margin-bottom: 0in">You are requested to please intimate the acceptance of the above offer of appointment along with all its terms and conditions as mentioned above within a period of  seven  days from the date of  receipt of  this letter, failing which this offer of appointment will automatically stand cancelled.</p>
<p class="western" align="RIGHT" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><a name="_GoBack"></a><font size="4"><b>Yours faithfully,<br />
DIRECTOR</b></font></p>
<p class="western" style="margin-bottom: 0in">Copy to :</p>
<p class="western" style="margin-bottom: 0in">1) Head of <!--?php _p(delete_all_between('[',']',$app->Data2));?-->.Deptt</p>
<ol>
    <li>
    <p class="western" style="margin-bottom: 0in">Registrar</p>
    </li>
    <li>
    <p class="western" style="margin-bottom: 0in">Accounts Section 	(Salary)</p>
    </li>
    <li>
    <p class="western" style="margin-bottom: 0in">Establishmaent 	Section</p>
    </li>
    <li>
    <p class="western" style="margin-bottom: 0in">Director of 	Technical Education, M.S., Mumbi</p>
    </li>
    <li>
    <p class="western" style="margin-bottom: 0in">Personal file 	(APV)</p>
    </li>
</ol>
</div>
<!--?php }} ?-->