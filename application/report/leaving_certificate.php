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

<a href="javascript:Clickheretoprint()">
    <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
</a>
<div class="form-controls" >
    <div id="formPrint">
        <style>
            .mydiv{
                border-top: 1px solid #000;
                //border-bottom: 1px solid #000;
                border-left: none;
                border-right: none;        
                padding: 0 10px 0 10px;
                clear: both;
            }

            .mydivfirst{
                border: none;
                border-right: 1px solid #000;
                float: left;
                width: 30%;
                padding: 10px 0 10px 0;
                text-align: left;
            }

            .mydivsecond{
                float: left;
                width: 60%;
                border: none;       
                padding: 10px 0 10px 0;
                text-align: left;
                margin-left: 10px;
            }
        </style>
        <?php
        if (isset($_GET['id'])) {
            $app = Application::LoadByIdapplication($_GET['id']);
            // $year = Address::LoadByIdaddress($app->Applicant);

            $profile = Profile::LoadByIdprofile($app->ApplicantObject->Idledger);
            $gen = '';
//            if ($app->ApplicantObject->Gender == 1)
//                $gen = 'Mr.';
//            else
//                $gen = 'Miss.';
            ?>
            <div class="form-controls" style="width: 90%; margin-left:40px;">
                <table style="width:100%;margin-top:10px;" border="0" >
                    <tr>
                        <td width="50" align="right" style="padding-right: 0px;">
                            <img src="../../assets/_core/images/logo2.png"style="margin-left:10px; height:100px; width: 80px;" />
                        </td>
                        <td colspan="2" align="center" valign="top" style="color: #cc0000">
                            <div align="center"><strong>Dr. J. J. Magdum Trust's</strong></div>
                            <div style="font-size: 22px;font-weight: bold;">DR. J. J. MAGDUM AYURVED MEDICAL COLLEGE</div>
                            <div style="font-size: 18px;"><strong>Jaysingpur,</strong> - 416101. Dist. Kolhapur Maharastra(INDIA)</div>
                            <br>
                            <div style="font-size: 22px;width: 400px;"><strong>LEAVING / TRANSFER CERTIFICATE</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><div style=" margin-top:10px;"></div></td>
                    </tr>
                </table> 
                <div style="line-height: 25px;border: 1px solid black; width: 100%;border-radius: 15px;">
                    <div colspan="4" style="line-height: 1.4em; padding: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(No change in any entry in this certificate shall be made except by the authority Issuing if and any infringement of this requirement is liable to Involve the imposition of penalty such that rustication)</div>
                </div>
                <table style="line-height: 25px; width: 100%;margin-top: 10px;margin-bottom: 10px;">
                    <tbody>
                        <tr>
                            <td><strong>Registration No. Of Pupil  <?php _p($app->Data12); ?></strong></td>
                            <td><strong>No. <?php _p($app->Code);?></strong></td>
                        </tr>
                    </tbody>
                </table>
                <div style="width:100%">
                    <div class="mydiv">
                        <div class="mydivfirst">
                            1. Name of the pupil in full
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php
                                _p($app->Data6);
                                ?>                         
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>

                    <div class="mydiv">
                        <div class="mydivfirst">
                            2.Race &amp; Caste (With sub-caste)
                        </div>
                        <div class="mydivsecond">
                            <strong><?php
                                if ($app->Data9) {
                                    _p($app->Data8);
                                    if($app->Data8 != NULL){
                                        _p("-");
                                    }
                                    _p($app->Data9); //caste
                                } else {
                                    _p(' ');
                                }
                                ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            3.Nationality
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php _p($app->NatinalityObject);?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            4.Place of Birth
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php _p($app->PlaceOfBirth); ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            <div>5.Date of Birth</div>
                            <div> &nbsp;&nbsp; In Words</div>
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <div>  <?php  _p(date('d-m-Y', strtotime($app->DateOfBirth))); ?></div>
                                
                                <div><?php _p($app->DobWords);?></div>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>

                    <div class="mydiv">
                        <div class="mydivfirst">
                            6.Last School attended
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php
                                if ($app->Data10) {
                                    _p($app->Data10); //caste
                                } else {
                                    _p(' ');
                                }
                                ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            7.Date of admission
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                 <?php if ($profile->AdmittedDate) _p(date('d-m-Y', strtotime($profile->AdmittedDate))); ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                     <div class="mydiv">
                        <div class="mydivfirst">
                            7.Date of Passout
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                 <?php
                                 $profiles = Profile::LoadByIdprofile($app->Applicant); 
                                    if ($profiles){
                                        _p($app->Data5 .' '. date('Y', strtotime($profile->LeaveDate)));  
                                    } 
                                 ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            8.Progress
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php
                                if ($app->Data11) {
                                    _p($app->Data11); //caste
                                } else {
                                    _p(' ');
                                }
                                ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            9.Conduct
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php _p($app->Conduct); ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            10.Year in which studying and since when
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php _p($app->YearInWhich);?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            11.Reason for leaving the Institute
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                 <?php _p($app->Reason); ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <div class="mydiv">
                        <div class="mydivfirst">
                            12.Remark
                        </div>
                        <div class="mydivsecond">
                            <strong>
                                <?php _p($app->Data4); ?>
                            </strong>
                        </div>
                        <div style="clear: both"></div>
                    </div>


                    <div class="mydiv"></div>

                </div>
                <div style="clear:both;">&nbsp;</div>
                <table style="width: 90%; position: fixed; bottom: 30px; clear:both;">
                    <tbody>
                        <tr>
                            <td height="5" colspan="2">
                                <div style="font-size:16px; padding-top:10px; margin-left: 40px;"><strong>Certified that above Information is In accordance with the College register.</strong></div>
                                <div style="margin-top: 10px; font-size: 15px;"><b>DATE:- &nbsp;&nbsp;<?php _p(date('d-m-Y', strtotime(QDateTime::Now()))); ?></b></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 60px;">&nbsp;</td>
                            <td valign="bottom" style="margin-top:40px;">
                                <div style="float: left;margin-left: 50px;font-size: 18px; font-weight: bolder;"><strong>Clerk</strong></div>
                                <div style="float: right; margin-right: 75px; font-size: 18px; font-weight: bolder;">Principal</div>
                                <!--div style="float: right; margin-right: 75px; font-size: 18px; font-weight: bolder;">Dr. J. J. Magdum Ayurved<br> Medical College, Jaysingpur</div-->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
<?php } ?>

    </div>
</div>

