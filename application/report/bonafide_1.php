<?php
require('../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');
?>
<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="tooslbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formPrint").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>

<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
</a>
<div class="form-controls" >
    <div id="formPrint">
     <?php
    $application = Application::LoadByIdapplication($_GET['id']);
    $certificate = CertificateTemplet::LoadByIdcertificateTemplet($application->AppliedFor);


    $CurrentStatuses = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->Student, $application->Applicant)));
    if ($CurrentStatuses) {
        foreach ($CurrentStatuses as $CurrentStatus) {
            
        }
       
        ?>
    <div style=" margin-bottom: 10px;font-family:Times New Roman; width: 100%; height: 70%;" id="formPrint">
            <div style="background-color: white;margin-top:10px; width: 100%; height: 500px; font-family:'Times New Roman'; border: 1px solid black; " >    
               <table style="width:100%;margin-top:10px;" border="0" >
                <tr>
                    <td width="50" align="right" style="padding-right: 0px;">
                        <img src="../../assets/_core/images/logo2.png"style="margin-left:10px; height:90px; width: 90px;" />
                    </td>
                    <td colspan="2" align="center" valign="top">
                        <p align="center"><strong>Dr. J. J. Magdum Trust's</strong></p>
                        <div style="font-size: 22px;font-weight: bold;">DR. J. J. MAGDUM AYURVED MEDICAL COLLEGE</div>
                        <div style="font-size: 18px;"><strong>Jaysingpur,</strong> - 416101. Dist. Kolhapur Maharastra(INDIA)</div>
                        <br>
                        <div style="font-size: 22px;width: 400px;"><strong>BONAFIDE CERTIFICATE</strong></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><div style=" margin-top:10px;"></div></td>
                </tr>
            </table> 
            <div style="clear:both"></div>
            <br>
            <div style="text-align: justify">
                <table style="width:100%;margin-left: 10px;padding-right: 10px;text-align: justify;" border="0">
                    <tr>
                        <td><div style="font-size: 22px;">This is to certify that <strong><?php _p($CurrentStatus->StudentObject->IdloginObject->Name); ?></strong>is/was a </div></td>
                    </tr>
                    <tr>
                        <td><div style="font-size: 22px;"> bonafide student  studying is class <strong> <?php _p(delete_all_between("[", "]", $CurrentStatus->RoleObject->ParrentObject->Name)); ?><?php _p($CurrentStatus->SemisterObject->Name); ?></strong> Roll No. <strong><?php _p($CurrentStatus->RollNo); ?> </strong> of the </div></td>
                    </tr>
                    <tr>
                        <td><div style="font-size: 22px;">college during  the Year <strong> <?php _p($CurrentStatus->CalenderYearObject->Name) ?> </strong> His birth date according to  College Register is <?php _p(date('d/m/Y', strtotime($CurrentStatus->StudentObject->IdloginObject->Profile->Dob))); ?></strong> in words <strong> <?php _p(convert_number(date('d', strtotime($CurrentStatus->StudentObject->IdloginObject->Profile->Dob))));_p("th");_p(" "); _p( english_char(date('m', strtotime($CurrentStatus->StudentObject->IdloginObject->Profile->Dob))));_p(" "); _p(convert_number(date('Y', strtotime($CurrentStatus->StudentObject->IdloginObject->Profile->Dob)))); ?></strong></div></td>
                    </tr>
                     <tr>
                        <td><div style="font-size: 22px;"> <strong> </div></td>
                    </tr>
                    <tr>
                        <td><div style="font-size: 22px;"> </div></td>
                    </tr>
                    <tr>
                        <td><div style="font-size: 22px;margin-left: 45px;">To the best of my knowledge and belief he bears a good moral character </div></td>
                    </tr>
                    <tr>
                        <td><div style="font-size: 22px;">Date <strong><?php _p(date('d/m/Y', strtotime(QDateTime::Now()))); ?> </strong></div></td>
                    </tr>
                    <tr>
                        <td><div style="font-size: 22px;">Purpose: <strong><?php _p($application->Reason); ?></strong></div></td>
                    </tr>
                    <tr>
                        <td style=""><div style="font-size: 18px;margin-top: 40px;margin-left:70px;"><strong>Written & Checked by &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Principal</strong></div></td>
                        
                    </tr>
                </table>
            </div>
                      
        </div>
    <?php }?>
    </div>
    </div>
</div>

