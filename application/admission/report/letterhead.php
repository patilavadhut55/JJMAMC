<?php
    //require('../../../qcubed.inc.php');
    $collages = Role::LoadArrayByGrp(1);
    foreach($collages as $collage){}
?>
<div style="width:100%; margin:5px; padding:10px; border-bottom:1px solid #333; font-family:Calibri; line-height:20px;" align="center">
<table style="width:100%;" border="0">
    <tr>
        <td width="20%" rowspan="6" align="center">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/logo.png" width="100"   alt=""/>
        </td>
        <td colspan="3" > 
        <div align="center" ><?php _p($collage->Description) ?> </div></td>
    </tr>
    <tr>
      <td colspan="3" style="font-size:18px;" ><div align="center"><strong><?php _p($collage->Name) ?></strong></div></td>
    </tr>
    <tr>
      <td colspan="3" style="font-size:18px;"><div align="center">
        <strong>
        <?php  ?>
      </strong></div></td>
    </tr>
    <tr>
        <td colspan="3" >
            <div align="center"><?php 
            
                $address = Address::QuerySingle(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Address()->Roll, $collage->Idrole)
                        )
                    );
                if($address) _p($address->AddressLine1); 
                
                ?> 
            </div>
        </td>
    </tr>
    <tr>
      <td colspan="3" ><div align="center">Phone : <?php if($address) _p($address->Contact1);  ?>/<?php if($address) _p($address->Contact2);  ?>, Fax-<?php if($address) _p($address->FaxNo);  ?></div></td>
    </tr>
    <tr>      
      <td width="39%" ><div align="center">Website:<?php if($address) _p($address->Web);  ?></div></td>
      <td width="35%" ><div align="right">Email: <?php if($address) _p($address->Email1);  ?></div></td>
    </tr>
</table>
   
</div>