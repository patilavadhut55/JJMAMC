
<?php 
require('../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php'); ?>
<h1><?php _t('Admission Form Fee Receipt '); ?></h1>
<?php 
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
    $inq = Inquiry::LoadByIdinquiry($_GET['id']);
    
?>
<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("formprint").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close(); "><style type="text/css">@import url("<?php  _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__);  ?>/table.css");</style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>

<div>
    
    <div class="pull-left" style="margin-bottom: 5px;">
        <a href="javascript:Clickheretoprint()">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
    <a href="inquiry_list.php"><div class="btn btn-success pull-right" style="margin-bottom: 5px; color: #FFF;"><i class="fa fa-backward"></i> Back</div></a>
    <div style="clear: both;"></div>
</div>
<div class="form-controls" id="formprint">
    <?php $cnt = 2;
        for($i=1; $i<=$cnt; $i++){
    ?>
        <div style="<?php if($i == 1){ ?>float: left; <?php }else{ ?>float:right; <?php } ?>line-height:20px; width:48%;padding:10px 5px 10px 5px;border: 1px solid #000; margin-right: 2px; ">
            <table style="width:100%" border="0">
                <tr>
                    <td width="100">
                        <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo2.png" style="margin-left: 15px; height:80px; width: 70px;" />
                    </td>

                    <td colspan="2" align="center" valign="top">
                        <div style="font-size: 14px;font-weight: bold;"><?php _p($collage->Description); ?></div>
                        <div style="font-size: 20px;font-weight: bold;"><?php _p($collage->Name); ?></div>
                        <div style="font-size: 12px;">
                        <?php 
                            $roleadds = $collage->GetAddressAsRollArray();
                            if($roleadds){
                                foreach ($roleadds as $roleadd){}
                                _t($roleadd->AddressLine1."<br>");
                                _t("Phone No: ".$roleadd->Contact1." Email: ".$roleadd->Email1."<br>");
                            }
                        ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="3"><div style=" margin-top:10px;"></div></td>
                </tr>

                <tr>
                    <td align="center" colspan="3"> 
                        <div style="border-top: 1px solid #999;border-bottom: 1px solid #999;width: 100%;">
                            Admission Form Fee Receipt : <?php if($i == 1){ _p("[ Student Copy ]"); }else{ _p("[ Institute Copy ]"); } ?>
                        </div> 
                    </td>            
                </tr>
            </table>
            <table style="width: 100%;" border="0">
                <tr>
                    <td width="15%">Receipt No : </td><td width="30%"><?php _p($inq->Code); ?></td>
                    <td width="10%">Date :  </td><td  width="30%" align="left"><?php _p(date('d/m/Y',  strtotime($inq->AdmissionDate))); ?></td>
                </tr>  
                <tr><td><strong>NAME</strong> : </td><td colspan="3"><strong> <?php _p($inq->PrefixObject.' '.$inq->FirstName.' '.$inq->MiddleName.' '.$inq->LastName); ?></strong></td></tr>  
            </table>
            <div align="center">
                <table width="100%">
                    <tr style="border-bottom: 1px solid #000 !important; border-top: 1px solid #000 !important; ">
<!--                        <td width="11%" align="left"><div align="center"><strong>No</strong></div></td>-->
                        <td width="62%" align="left"><strong>PARTICULARS</strong></td>
                        <td width="27%" align="right"><strong>AMOUNT</strong></td>
                    </tr>
                    <?php $sr = 1;?>
                    <tr>
<!--                        <td align="center"><?php //_p($sr++); ?></td>-->
                        <td align="left"><?php _p(strtoupper('Admission Form Fee'));?></td>
                        <td align="right"><?php _p(number_format($inq->FormFee, 2, '.', '')); $total = $inq->FormFee;?></td>
                    </tr>
                  
                    <tr style="border-bottom: 1px solid #000; border-top: 1px solid #000;">
<!--                        <td><div align="center"></div></td>-->
                        <td align="right"><strong>TOTAL&nbsp;</strong></td>
                        <td align="right"><strong><?php _p(number_format($total ,2,'.','')); ?></strong></td>
                    </tr>
                </table>
            </div>
             <table height="124"  style="width: 100%;">
                <tr><td width="15%" height="21" valign="top">In Words : </td><td ><?php _p(convert_number($total).' only.'); ?> </td></tr>   
                <tr><td height="21">Amount</td><td><?php _p(number_format($total,2,'.','')); ?></td></tr>
                <tr><td height="60" colspan="2">
                    <div style="width: 100%;">
                        <div style="float: left; margin-left: 10px; width: 48%; ">VERIFYING OFFICER </div>
                        <div style="float: left; margin-right: 10px; text-align: right; width: 45%; "> RECEPIENTS</div>
                        <div style="clear: both;"></div>
                    </div></td>
                </tr>
            </table>
        </div> 
    <?php } ?>
    <div style="clear: both;"></div>
</div>
   

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>