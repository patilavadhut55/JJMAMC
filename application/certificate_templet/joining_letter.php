<!--?php
 if(isset($_GET['id'])){ 
            $app = Application::LoadByIdapplication($_GET['id']);
            if($app){ 
                 $appnt = Application::QueryArray(QQ::AndCondition(
              QQ::Equal(QQN::Application()->Applicant,$app->Applicant),
              QQ::Equal(QQN::Application()->AppliedFor,25)
            ));
                   if($appnt){
            foreach ($appnt as $appnts){}
?-->
<div class="form-controls" style="width: 90%; margin-left:40px;margin-right: 40px;">
<HTML>
<HEAD>
	<TITLE>Joining Report</TITLE>
</HEAD>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=5 STYLE="font-size: 20pt"><B>Joining
Report</B></FONT></P>
<P CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" STYLE="margin-bottom: 0in">Name in full:<!--?php _p(delete_all_between('[',']',$app->ApplicantObject->OfObject->Name));?--></P>
<P CLASS="western" STYLE="margin-bottom: 0in">Permanent  Address  : <!--?php _p($app->Data6);?-->
</P>
<P CLASS="western" STYLE="margin-bottom: 0in">Local Address          
:<!--?php _p($app->Data6);?--></P>
<P CLASS="western" STYLE="margin-bottom: 0in"><B>To </B>
</P>
<P CLASS="western" STYLE="margin-bottom: 0in"><B>The Director</B></P>
<P CLASS="western" STYLE="margin-bottom: 0in"><B>Walchand College of 
Engineering,</B></P>
<P CLASS="western" STYLE="margin-bottom: 0in"><B>Sangli</B></P>
<P CLASS="western" STYLE="margin-bottom: 0in">Sir,</P>
<P CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">    
            With reference to the appointment letter No.<!--?php 
            _p($appnts->Idapplication);
            
            ?--></P>
<P CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">dated
<!--?php _p(date('d/m/Y',  strtotime($appnts->Date)));?--> , I report myself to join the duty to-day 
<!--?php _p($app->Data4);?-->( date)  before/ after noon, in the post of
<!--?php _p($app->Data5);?-->  in <!--?php _p(delete_all_between('[',']',$app->Data2));?--> .</P>
<P CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">( <FONT SIZE=4><B>Degree
 wing</B></FONT> ) on purely temporary and contractual basis .</P>
<P CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" STYLE="margin-left: 0.25in; margin-bottom: 0in">1)
  I understand that my appointment is on  purely temporary and
Contractual  basis for a period up to <!--?php _p($app->Data3);?--> years</P>
<P CLASS="western" STYLE="margin-left: 0.25in; margin-bottom: 0in">2)
 I  accept the terms and conditions mentioned in the above
appointment letter.</P>
<P CLASS="western" STYLE="margin-left: 0.25in; margin-bottom: 0in">3)
 I am aware of all  the service rules, discipline and conduct  as per
norms. 
</P>
<P CLASS="western" STYLE="margin-left: 0.25in; margin-bottom: 0in">4)
 If the college has paid any excess  amount during my tenure and if
the same is to be recovered from me, I have no objection to recover
this amount form my salary/ any amount to be paid to me without
taking separate consent for the same.</P>
<P CLASS="western" STYLE="margin-left: 0.25in; margin-bottom: 0in"><BR>
</P>
<P CLASS="western" STYLE="margin-left: 0.5in; margin-bottom: 0in">I 
also understand that I am not entitled to any traveling allowance for
joining my duties at the college.</P>
<br>
<br><br>

<P CLASS="western" align="RIGHT" STYLE="margin-left: 0.5in; margin-bottom: 0in">Yours faithfully,<BR>(Name :<!--?php _p(delete_all_between('[',']',$app->ApplicantObject->OfObject->Name));?-->
                      &nbsp;&nbsp;&nbsp;)</P>
<P CLASS="western" align="LEFT" STYLE="margin-left: 0.5in; margin-bottom: 0in">Date
    :<!--?php _p(date('d/m/Y',  strtotime(QDateTime::Now)));?-->                                 <FONT SIZE=4><B></B></FONT></P>
<P CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" STYLE="margin-bottom: 0in"><FONT SIZE=4 STYLE="font-size: 16pt"><B>	</B></FONT></P>
<P CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" align="JUSTIFY" STYLE="margin-bottom: 0in">   <FONT SIZE=4 STYLE="font-size: 16pt"><B>Head
            of the Deptt.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                                                       
Director </B></FONT>
</P>
</HTML>
 <!--?php }}}?-->
</div>