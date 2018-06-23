<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<div class="form-controls">
    <table width="910" border="0">
        <tr>
            <td><?php $this->calfrom->RenderWithName(); ?></td>
            
        </tr>
        <tr>
            <td width="421"><?php $this->lstCourse->RenderWithName(); ?></td>
            <td width="434"><?php $this->lstSemister->RenderWithName(); ?></td>
           
        </tr>
        <tr>
            <td><?php $this->lstYear->RenderWithName(); ?></td>
            <td float="right"><?php $this->btnShow->Render(); ?></td>
        </tr>
    </table>
</div>

<?php 
    if(isset($_GET['course'])){
?>
        
<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
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
<div class="form-controls" style="overflow: auto;">
    <div id="formPrint">
      
        <table border="1" cellspacing ="0" style="font-size:12px;" class="datagrid">
            <tr>
                <th width="20" rowspan="2" >Sr.</th>
                <th width="40" rowspan="2" >Code</th>
                <th width="70" rowspan="2" >Name</th>
                <th width="40" rowspan="2" >Cast</th>
                <th colspan="4" style="text-align: center;">Govt. Tution Fee</th>
                <th colspan="4" style="text-align: center;">Govt. Development Fee</th>
                <th width="40" rowspan="2" ></th>
                
            </tr>
            <tr>
                <th width="60" >Tution fee payable</th>
                <th width="60" >Paid</th>
                <th width="60" >Balance</th>
                <th width="60" >Now</th>
                <th width="60" >Development fee payable</th>
                <th width="60" >Paid</th>
                <th width="60" >Balance</th>
                <th width="60" >Now</th>
            </tr>
            <?php
              $sr = 1;
              if(isset($_GET['semi'])){
            $currents = CurrentStatus::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent,$_GET['course']),
                            QQ::Equal(QQN::CurrentStatus()->Semister,$_GET['semi']),
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear,$_GET['year'])
                        )
            );
            if($currents){
                foreach ($currents as $current) {
                  
                    $vouchers = Voucher::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Voucher()->Grp,6),
                                    QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus),
                                    QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                                )
                   );
                    if($vouchers){
                       $tution = $dev = $paidtution = $paiddev = 0;
                        ?>
                            <tr>
                                <td><?php _p($sr++);?></td>
                                <td><?php _p($vouchers->DrObject->GrpObject->Code);?></td>
                                <td><?php _p($vouchers->DrObject->GrpObject->Name);?></td>
                                <td><?php _p($current->StudentObject->IdloginObject->Profile->CasteCatObject);?></td>
                                <!-- Govt Tution payable fee  -->
                                <?php 
                                    $gtution = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Grp,6),
                                                QQ::Equal(QQN::Voucher()->RefStatusObject->Student, $current->Student),
                                                QQ::Equal(QQN::Voucher()->Cr,10288 ),
                                                QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount,"tution")
                                            )
                                    );
                                    if($gtution){
                                        $tution = $gtution->GetVirtualAttribute("tution");
                                ?>
                                        <td align = "right">
                                            <?php 
                                                if($tution == ""){
                                                    _p(0);
                                                }else{
                                                    _p($tution);
                                                }
                                            ?>
                                        </td>
                         
                                    <?php }else {?>
                                        <td align = "right">
                                            <?php _p(0); ?>
                                        </td> 
                                    <?php }?>
                                    
                                    <!-- Govt paid Tution fee  -->
                                <?php 
                                    $gptution = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Grp,7),
                                                QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->Dr,22),
                                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10288 ),
                                                QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244)
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount,"paidtution")
                                            )
                                    );
                                    if($gptution){
                                        $paidtution = $gptution->GetVirtualAttribute("paidtution");
                                ?>
                                        <td align = "right">
                                            <?php 
                                                if($paidtution == ""){
                                                    _p(0);
                                                }else{
                                                    _p($paidtution);
                                                }
                                            ?>
                                        </td>
                         
                                    <?php }else {?>
                                        <td align = "right">
                                            <?php _p(0); ?>
                                        </td> 
                                    <?php }?>
                                       
                                    <!-- tution fee Payable balance-->
                                        <td align="right">
                                            <?php 
                                                $bal = $tution - $paidtution;
                                                _p($bal); ?>
                                        </td>
                                        
                                    <!-- Now -->    
                                        <td>
                                            <?php
                                                $this->txtnow[$current->IdcurrentStatus]->Render();  
                                            ?>
                                        </td>
                                       
                                        
                                        <!-- Govt Devlopement fee  -->
                                <?php 
                                    $gdev = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Grp,6),
                                                QQ::Equal(QQN::Voucher()->RefStatus, $current->IdcurrentStatus),
                                                QQ::Equal(QQN::Voucher()->Cr,10289 ),
                                                QQ::NotEqual(QQN::Voucher()->DrObject->Grp,244)
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount,"dev")
                                            )
                                    );
                                    if($gdev){
                                        $dev = $gdev->GetVirtualAttribute("dev");
                                ?>
                                        <td align = "right">
                                            <?php 
                                                if($dev == ""){
                                                    _p(0);
                                                }else{
                                                    _p($dev);
                                                }
                                            ?>
                                        </td>
                         
                                    <?php }else {?>
                                        <td align = "right">
                                            <?php _p(0); ?>
                                        </td> 
                                    <?php }?>
                                        
                                <!-- Govt paid developement fee -->
                                <?php 
                                   $gpdev = Voucher::QuerySingle(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::Voucher()->Grp,7),
                                                QQ::Equal(QQN::Voucher()->RefStatusObject->Student, $current->Student),
                                                QQ::Equal(QQN::Voucher()->Dr,22),
                                                QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10289),
                                                QQ::NotEqual(QQN::Voucher()->CrObject->Grp,244)
                                            ),
                                            QQ::Clause(
                                                QQ::Sum(QQN::Voucher()->Amount,"paiddev")
                                            )
                                    );
                                    if($gpdev){
                                        $paiddev = $gpdev->GetVirtualAttribute("paiddev");
                                ?>
                                        <td align = "right">
                                            <?php 
                                                if($paiddev == ""){
                                                    _p(0);
                                                }else{
                                                    _p($paiddev);
                                                }
                                            ?>
                                        </td>
                         
                                    <?php }else {?>
                                        <td align = "right">
                                            <?php _p(0); ?>
                                        </td> 
                                    <?php }?>
                                            
                                        <!-- dev fee balance-->
                                        <td align="right">
                                            <?php 
                                                $bal1 = $dev - $paiddev;
                                                _p( $bal1);
                                            ?>
                                        </td>
                                        
                                        <!-- Now -->    
                                        <td>
                                            <?php
                                                $this->txtdevnow[$current->IdcurrentStatus]->Render();  
                                            ?>
                                        </td>
                                        <!-- button save -->
                                        <td><?php $this->lblsave[$current->IdcurrentStatus]->Render(); ?></td>
                                       
                            </tr>
                    <?php }   ?>
                
              <?php }}}  ?>
        </table>
    </div>
</div>
<?php } ?>
	<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>