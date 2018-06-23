<?php
    //require('../../../qcubed.inc.php');
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
?>
<div style="width:100%; margin:5px; padding:px; line-height:20px;" align="center">
<table style="width:80%;" border="0">
    <tr>
        <td width="20%" align="right" valign="top" >
            <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo.png" width="100"   alt=""/>
        </td>
        <td width="100%" valign="center" >
            <div style="width: 100%;">
                <div align="center" ><?php _p($collage->Description) ?> </div>
                <div align="center" style="font-size:18px;"><strong><?php _p($collage->Name) ?></strong></div>
                <div align="center"><?php 

                    $address = Address::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Address()->Roll, $collage->Idrole)
                            )
                        );
                    if($address) _p($address->AddressLine1); 

                    ?> 
                </div>
                <div align="center" style="font-size:14px;"> Approved by C.C.I.M.,New Delhi,Govt. Of Maharastra &<br> Affiliated to Maharastra University Of Health Science(MUHS)Nashik</div>
                <div align="center">Phone : <?php if($address) _p($address->Contact1);  ?>/<?php if($address) _p($address->Contact2);  ?>, Fax-<?php if($address) _p($address->Contact2);  ?></div>
                <div align="center" >
                    Website:<?php //if($address) _p($address->Web);  ?>&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php if($address) _p($address->Email1);  ?>
                </div>
            </div>
        </td>
    </tr>
</table>
    <hr>
    <br>
</div>