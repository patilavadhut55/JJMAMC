<!--?php
if (isset($_GET['id'])) {
    $app = Application::LoadByIdapplication($_GET['id']);
    $year = Address::LoadByIdaddress($app->Applicant);
    $profile = Profile::LoadByIdprofile($year->OfObject->Idledger);
    $gen = '';
    if ($app->ApplicantObject->Gender == 1)
        $gen = 'Mr.';
    else
        $gen = 'Miss.';
    ?-->
<div class="form-controls" style="width: 90%; margin-left:40px;">
<table width="100%" bgcolor="#ffffff">
    <tbody>
        <tr>
            <td width="100%" bgcolor="#ffffff" style="border-width: initial; border-style: none; border-color: initial; padding: 0in;">
            <div align="Center" width="100%">
            <div style="font-size: 28px; text-align: center; color:#cc0000; font-weight:bold;">Walchand College of Engineering</div>
            <div style="font-size: 16px; color:#cc0000; font-weight:bold">(An Autonomous Institute)</div>
            <div style="font-size: 18px; font-weight:bold;  color:#cc0000;">VISHRAMBAG, SANGLI-416415 (M.S.), INDIA</div>
            <div style="font-size: 15px; margin-right:15px;" align="right"><strong>TC No.  :  </strong><!--?php $data = explode('C', $app->Code); _p($data[1]);?--></div>
            <div align="center" style="margin-bottom: 10px;"><img src="../../assets/_core/images/Walchand_11.gif" width="85" height="70" alt="" /></div>
            </div>
            </td>
        </tr>
        <tr>
            <td width="754" colspan="2" bgcolor="#ffffff" align="center" style="font-size:18px; padding: 5px 0px 5px 0px; border-top: 1.5pt solid rgb(204, 0, 0); border-bottom: 1.5pt solid rgb(204, 0, 0);"><font color="#cc0000"><em>&nbsp;College Leaving / Transfer Certificate</em></font></td>
        </tr>
    </tbody>
</table>
<table style="line-height: 28px; width: 100%">
    <tbody>
        <tr>
            <td colspan="4" style="line-height: 1.4em;">(No change in any entry in this certificate shall be made except by the authority Issuing it and any infringement of this requirement is liable to Involve the imposition of penalty such that rustication)</td>
        </tr>
        <tr>
            <td width="5%" valign="top">
            <div align="right">1.</div>
            </td>
            <td width="40%" valign="top">Name of student</td>
            <td width="5%" valign="top">
            <div align="center">:</div>
            </td>
            <td width="50%" valign="top">
            <div style="font-size:14px;"><b><!--?php
                            $name = GetFullNameNew($app->ApplicantObject->OfObject->Name, $app->ApplicantObject->OfObject->Code);
                            $name1 = explode('.', $name);
                            if (isset($name1[1]))
                                _p($gen . $name1[1]);
                            elseif (!isset($name1[1]))
                                _p($gen . $name);
                            ?-->                         </b></div>
            </td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">2.</div>
            </td>
            <td valign="top">Mother Name</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top">
            <div style="font-size:14px;"><b><!--?php
                            $gardian = Gardian::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Gardian()->Of, $profile->Idprofile),
                                                QQ::Equal(QQN::Gardian()->GardianCat, 2)
                                            ));
                            if ($gardian) {
                                foreach ($gardian as $gurd) {}
                                _p(strtoupper($gurd->GardianName));
                            } else {
                                _p(' ');
                            }
                            ?-->                         </b></div>
            </td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">3.</div>
            </td>
            <td valign="top">Registration No</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top">
            <div style="font-size:14px;"><b><!--?php _p($year->OfObject->Code); ?--></b></div>
            </td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">4.</div>
            </td>
            <td valign="top">Father's Name /Guardian</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top">
            <div style="font-size:14px;"><b><!--?php
                            $gardian1 = Gardian::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Gardian()->Of, $profile->Idprofile), 
                                                    QQ::Equal(QQN::Gardian()->GardianCat, 1)
                                                ));
                            if($gardian1){
                                foreach ($gardian1 as $gurd1){}
                                _p(strtoupper($gurd1->GardianName));
                            }else{
                                _p(' ');
                            }
                            ?-->                         </b></div>
            </td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">5.</div>
            </td>
            <td valign="top">Religion</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php if ($app->Data8) {
                                _p($app->Data8); //religion
                            } else {
                                _p(' ');
                            } ?-->                         </b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">6.</div>
            </td>
            <td valign="top">Caste</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php if($app->Data9) {
                                _p($app->Data9); //caste
                            } else {
                                _p(' ');
                            } ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">7.</div>
            </td>
            <td valign="top">Date of Birth</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php if ($year->Dob) _p(date('d-m-Y', strtotime($year->Dob))); ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">8.</div>
            </td>
            <td valign="top">Place of Birth</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php _p($year->BirthPlace); ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">9.</div>
            </td>
            <td valign="top">Nationality</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php if ($profile->Nationality) {
                            _p($profile->NationalityObject->Name);
                        } else {
                            _p(' ');
                        } ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">10.</div>
            </td>
            <td valign="top">Date of Admission</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php if ($profile->AddmissionDate) _p(date('d-m-Y', strtotime($profile->AddmissionDate))); ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">11.</div>
            </td>
            <td valign="top">Branch of Engineering/Course</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php
                        $cur = CurrentStatus::LoadArrayByStudent($year->Of);
                        if ($cur) {
                            foreach ($cur as $c) {
                                
                            }
                            _p(delete_all_between('[', ']', $c->RoleObject->ParrentObject->Name) . '(' . delete_all_between('[', ']', $c->RoleObject->ParrentObject->ParrentObject->Name) . ')');
                        } else {
                            _p(' ');
                        }
                        ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">12.</div>
            </td>
            <td valign="top">Date of Pass Out</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php if ($profile->LeaveDate) _p(date('d-m-Y', strtotime($profile->LeaveDate))); ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">13.</div>
            </td>
            <td style="line-height: 1.2em">Class of study at the time of leaving the Institute</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php
                        $cur1 = CurrentStatus::LoadArrayByStudent($year->Of);
                        if ($cur1) {
                            foreach ($cur1 as $c1) {
                                
                            }
                            _p(delete_all_between('[', ']', $c1->RoleObject->ParrentObject->ParrentObject->Name) . '(' . delete_all_between('[', ']', $c1->RoleObject->ParrentObject->Name) . ')');
                        } else {
                            _p(' ');
                        }
                        ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">14.</div>
            </td>
            <td valign="top">Reason for leaving the Institute</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top">
            <div style="font-size:14px;"><b><!--?php _p($app->Reason); ?--></b></div>
            </td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">15.</div>
            </td>
            <td valign="top">Institute fees,Other Charges &amp; Dues</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php _p($app->Data2); ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">16.</div>
            </td>
            <td valign="top">Conduct</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top"><b><!--?php _p($app->Data3); ?--></b></td>
        </tr>
        <tr>
            <td valign="top">
            <div align="right">17.</div>
            </td>
            <td valign="top">Remark</td>
            <td valign="top">
            <div align="center">:</div>
            </td>
            <td valign="top">
            <div style="font-size:14px;"><b><!--?php _p($app->Data4); ?--></b></div>
            </td>
        </tr>
    </tbody>
</table>
<div style="clear:both;">&nbsp;</div>
<table style="width: 90%; position: fixed; bottom: 50px; clear:both;">
    <tbody>
        <tr>
            <td height="5" colspan="2">
            <div style="font-size:16px; padding-top:10px; border-top: 2px solid #999;">Certified that above Information is In accordance with the College register.</div>
            <div style="margin-top: 10px; font-size: 15px;"><b>DATE:- &nbsp;&nbsp;<!--?php _p(date('d-m-Y', strtotime(QDateTime::Now()))); ?--></b></div>
            </td>
        </tr>
        <tr>
            <td height="58" style="width: 45%;">&nbsp;</td>
            <td valign="bottom">
            <div style="float: right; margin-right: 75px; font-size: 18px; font-weight: bolder;">Director</div>
            </td>
        </tr>
    </tbody>
</table>
</div>
<!--?php } ?-->