<?php
require('../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');
?>
<script language="javascript">
    function Clickheretoprint() {
        var disp_setting = "tooslbar=yes,location=no,directories=yes,menubar=yes,";
        disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formPrint").innerHTML;

        var docprint = window.open("", "", disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles_blue.css");</style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Times New Roman";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
     //   border: 5px red solid;
        height: 256mm;
      //  outline: 2cm #FFEAEA solid;
    }

    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;
        }

        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
</a>

<div class="form-controls" >
    <div id="formPrint">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <div class="book" >
             
            <div class="page" style="margin-bottom: 5px;">
              
                <div class="subpage"style="padding:10px;" >
                     <?php 
                for($i=1; $i<=2; $i++){
                ?>
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
                    <div style="margin-bottom: 20px;" >
                            <table style="width:100%;" border="0" >
                                <tr>
                                    <td width=""  style="padding-right: 0px;pa">
                                        <img src="../../assets/_core/images/logo2.png"style=" height:80pt; width: 60pt;" />
                                    </td>
                                    <td colspan="2" align="center" valign="top">
                                        <div align="center"><strong>Dr. J. J. Magdum Trust's</strong></div>
                                        <div style="font-size: 18px;font-weight: bold;">DR. J. J. MAGDUM AYURVED MEDICAL COLLEGE</div>
                                        <div  style="font-size: 16px;"><strong>Gat No.295,Shriol -Wadi Road ,Moujeagar, Jaysingpur</strong></div>
                                        <div style="font-size: 16px;"><strong>Pincode - 416101 Tal. Shirol Dist. Kolhapur,</strong></div>
                                        <div  style="font-size: 16px;"><strong>Phone No: Office (02322)-221860 / 61, &nbsp; Fax (02322)221960 </strong></div>
                                        <div  style="font-size: 16px;"><strong>Email: jjmayu@rediffmail.com , Website: www.jjmayurved.com</strong></div>
                                        <br>
                                                                            
                                    </td>
                                </tr>       
                            </table> 
                        
                            <div style="border-top: 1px solid #000;padding-top: 10px; font-size: 22px;width: 100%;text-align: center;"><strong>BONAFIDE CERTIFICATE</strong></div>
                            <div style="clear:both;margin-bottom: 10px;"></div>
                            <div>
                                <div class="pull-right" style="float:right;margin-right: 10px;"><strong>No:-</strong><td><?php _p($application->Code); ?></div> 
                            </div>
                            <br>
                            
                            <div style="text-align: justify">
                               <div style="font-size: 18px;">
                                   This is to certify that <strong><?php _p($application->Data6); ?></strong>.
                                   is/was a  bonafide student  studying is class <strong> <?php _p($application->Data1); ?></strong> 
                                   Roll No. <strong><?php _p($application->Data2); ?> </strong> 
                                   of the college during  the Year <strong> <?php _p($application->Data3) ?> </strong> 
                                   His/Her birth date according to  College Register is <?php _p(date('d/m/Y', strtotime($application->DateOfBirth))); ?></strong> 
                                   in words <strong> <?php _p($application->DobWords); ?></strong>.
                                   
                                </div>
                               
                                <div style="font-size: 18px;margin-left: 60px;">To the best of my knowledge and belief he/she bears a good moral character. </div></td>
                                 
                                <div style="font-size: 18px;">Date <strong><?php _p(date('d/m/Y', strtotime(QDateTime::Now()))); ?> </strong></div>
                              
                                <div style="font-size: 18px;">Purpose: <strong><?php _p($application->Reason); ?></strong></div>
                                <div style="font-size: 17px;padding-top: 80px;margin-left:100px;"><strong> &nbsp;&nbsp;&nbsp;&nbsp;Written & Checked by &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Principal</strong></div>

                                    
                               
                            </div>
                       
                    </div>
                   <?php if($i == 1){?>

                    <div style="margin: 30pt 0 30pt 0;border-bottom: 1px dotted gray;" ></div>
                   <?php }?>
                        
                <?php }} ?>
                </div>
              
            </div>
              
        </div>
    </div>
</div>



