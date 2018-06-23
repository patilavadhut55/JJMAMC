
<!--?php 
if(isset($_GET['id'])){ 
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
        Ref:WCE/Degree/Cert/<!--?php _p(date('Y',  strtotime(QDateTime::Now())));?-->/</b></font></font></p>
            </td>
            <td>
 <p align="Right" style="margin-bottom: 0in; direction: ltr; font-family: &quot;Times New Roman&quot;; font-size: medium; line-height: 16px;"><font face="Times New Roman, serif"><font size="4"><b>
  Date: - <!--?php _p(date('d-m-Y',  strtotime($app->CertificateGeneratedDate)));?--></b></font></font></p>
            </td>
        </tr>
    </table>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4">To,</font></p>
<br />
<table width="30%">
    <tbody>
        <tr>
            <td width="5%" style="border-width: calc; border-style: none; border-color: initial; padding: 0in;">
            <div class="col-md-3" align="LEFT">
            <p width="10%" class="western" align="LFET" style="margin-bottom: 0in; direction: ltr; line-height: 15.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4"><!--?php _p($app->CompanyObject->Name.',');?--></font></p>
            </div>
            </td>
        </tr>
        <tr>
            <td width="10%" style="border-width: calc; border-style: none; border-color: initial; padding: 0in;">
            <div class="col-md-3" align="LEFT">
            <p width="10%" class="western" align="LFET" style="margin-bottom: 0in; direction: ltr; line-height: 15.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4"><!--?php _p($app->Data1);?--></font></p>
            </div>
            <div class="clearfix">&nbsp;</div>
            </td>
        </tr>
    </tbody>
</table>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4">Dear Sir / Madam,</font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-right: 0.12in;"><font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This has reference to your letter dated <!--?php _p(' '.date('d-m-Y',  strtotime(QDateTime::Now())));?--> regarding educational verification of&nbsp;<!--?php $name = GetFullNameNew($app->ApplicantObject->OfObject->Name, $app->ApplicantObject->OfObject->Code);
$name1= explode('.',$name);
if(isset($name1[1]))
_p($gen.$name1[1]);
elseif(!isset($name1[1]))
    _p($gen.$name);?--><!--?php _p(' '.delete_all_between('[', ']',$year->RoleObject->ParrentObject->ParrentObject->Name).' '.delete_all_between('[',']',$year->RoleObject->ParrentObject->Name)); ?-->.</font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 26.6667px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font size="4">In this context, we have to inform you that we have verified all the records of students mentioned below and found correct.</font></p>
<p style="margin-bottom: 0in; direction: ltr; line-height: 16px;">&nbsp;</p>
<table border="1" width="100%" cellpadding="7" cellspacing="0">
    <colgroup><col width="31" /><col width="161" /><col width="104" /><col width="68" /><col width="73" /><col width="37" /><col width="58" /></colgroup>
    <tbody>
        <tr valign="TOP">
            <td width="31" style="border-style:1px solid ;border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">Sr. No.</font></p>
            </td>
            <td width="161" style="border-style: 1px solid ;border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">Student Name</font></p>
            </td>
            <td width="104" style="border-style:  1px solid ;border-color: #000;padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">Qualification</font></p>
            </td>
            <td width="100" style=" border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">Exam Seat No.</font></p>
            </td>
            <td width="73" style=" border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">Year of Passing</font></p>
            </td>
            <td width="60" style=" border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">CPI</font></p>
            </td>
            <td width="58" style="border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">Status</font></p>
            </td>
        </tr>
        <tr valign="TOP">
            <td width="31" style="border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">1</font></p>
            </td>
            <td width="161" style="border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;">&nbsp;<!--?php $name = GetFullNameNew($app->ApplicantObject->OfObject->Name, $app->ApplicantObject->OfObject->Code);
$name1= explode('.',$name);
if(isset($name1[1]))
_p($gen.$name1[1]);
elseif(!isset($name1[1]))
    _p($gen.$name);?-->&nbsp;</p>
            </td>
            <td width="104" style="border-style:  1px solid ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><!--?php _p(' '.delete_all_between('[', ']',$year->RoleObject->ParrentObject->ParrentObject->Name).' '.delete_all_between('[',']',$year->RoleObject->ParrentObject->Name)); ?-->&nbsp;</p>
            </td>
             <td width="100" style="border-style:  1px solid  ; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">  <!--?php
            _p($app->Data6)
             ?--></font></p>
            </td>
            <td width="68" style="border-style:  1px solid ;border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><!--?php 
               
                 _p($year->CalenderYearObject->Name);
    ?-->&nbsp;</p>
            </td>
             <td width="100" style="border-style:  1px solid; border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="JUSTIFY" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;"><font size="4">  <!--?php
            _p($app->Data7)
             ?--></font></p>
            </td>
            <td width="73" style="border-style:  1px solid;border-color: #000; padding: 0in 0.08in;">
            <p class="western" align="CENTER" style="margin-bottom: 0.08in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt; margin-top: 0.17in;">CORRECT&nbsp;</p>
            </td>
        </tr>
    </tbody>
</table>
<p style="margin-bottom: 0in; direction: ltr; line-height: 16px;">&nbsp;</p>
<p class="western" align="RIGHT" style="margin: 0.17in 0.02in 0in 0.25in; direction: ltr; line-height: 34px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font style="font-size: 15pt;">Yours faithfully,</font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
<p class="western" align="RIGHT" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;"><font style="font-size: 15pt;">DIRECTOR</font></p>
<p class="western" align="JUSTIFY" style="margin-bottom: 0in; direction: ltr; line-height: 13.3333px; font-family: &quot;Times New Roman&quot;, serif; font-size: 10pt;">&nbsp;</p>
</font></div>
<p> <!--?php }?-->    