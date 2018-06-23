<?php //require(__CONFIGURATION__ . '/header.inc.php');  ?>
<?php $this->RenderBegin(); ?>
<h1><?php //_t('Document')  ?></h1>
<script language="javascript">
    function Clickheretoprint() {
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
        disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formPrint").innerHTML;

        var docprint = window.open("", "", disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles.css");</style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>

<body onload="window.print();document.location.href = '<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/document/issue_document.php';" >
<style>
    @page{
        size: auto;
        margin: 0mm;
    }
    @media print{
        #header, #footer { display: none !important;}
    }
</style>
<div class="form-controls" >
    <div style=" margin-bottom: 10px;font-family:Times New Roman; width: 100%; height: 70%;" id="formPrint">
                    <div style="background-color: #FFF;margin-left: 40px;margin-top:70px; width: 90%; height: 500px; font-family:'Times New Roman';  " >    
               <table style="width:80%" border="0">
                <tr>
                    <td width="100">
                        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/upload/photo/<?php _p($role->Idrole); ?>/<?php _p($role->Idrole); ?>.png" style="margin-left:10px; height:90px; width: 90px;" />
                    </td>
                    <td colspan="2" align="center" valign="top">
                        <div style="font-size: 20px;font-weight: bold;"></div>
                        <div style="font-size: 25px;font-weight: bold;"></div>
                        <div style="font-size: 18px;">
                         
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><div style=" margin-top:10px;"></div></td>
                </tr>
            </table> 
                            <div style="float:right;margin-right:20px;font-size: 20px;">Date : <?php _p(date('d-m-Y', strtotime(QDateTime::Now()))); ?></div> 
                            <div style="clear:both"></div>
                            <div align="center"><u><h2>Bonafide Certificate</h2></u></div>
                            <br>
                             <?php
                                if (isset($_GET['mem'])) {
                                    $profile = Profile::LoadByIdprofile($_GET['mem']);
                                ?>
                            <div style="font-size: 25px; margin-right:-10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is to certify that <strong> <?php _p(get_full_name($ledger->Name)); ?> </strong> is a
                                bonafide student of this School  and is studying <?php _p($profile->YearObject->Name);?> class during the
                                academic year <strong><?php _p($profile->CalenderYearObject->Name);?></strong></div>
                                <?php }?>
                            <br><br>
                            <br><br><br>
                            <div style="float:right;margin-right:20px; font-size: 20px;"><strong> Vice Principal<br> <?php _p($add->Fname); ?></strong></div>
                        </div>
        <?php }}} ?>
            </div>
    </div>
</div>
        <?php $this->RenderEnd() ?>
        <?php
        // require(__CONFIGURATION__ .'/footer.inc.php');?>