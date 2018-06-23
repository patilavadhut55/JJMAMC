<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

<div class="form-controls">
    <table width="910" border="0">
        <tr>
            <td><strong>From</strong><?php $this->calfrom->Render(); ?></td>
            <td><strong>To</strong><?php $this->calto->Render(); ?></td>
            <td><strong>Admission Year</strong><?php $this->lstadmission->Render();?></td>
       
            <td> <strong>Current Year</strong> <?php $this->lstYear->Render();?></td>
            <td><strong>Class</strong><?php $this->lstSemister->Render(); ?></td>
       
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php $this->btnShow->RenderWithName(); ?></td>
       
        </tr>
        <tr>
       
        </tr>
    </table>
    <br>
</div>

<?php 
    if(isset($_GET['from'])&& isset($_GET['to'])){
        $from = $_GET['from'];
        $to = $_GET['to'];
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
<input type="button" class="btn btn-success" onclick="tableToExcel('formPrint', 'W3C Example Table')" value="Export to Excel">    
  
<div class="form-controls" style="overflow: auto;">
    <div id="formPrint">
        <br>
        <div align="center"><b>DR.J.J.MAGDUM AYURVED MEDICAL COLLEG JAYSINGPUR</b></div> 
        <?php 
        if(isset($_GET['acdyear']) && isset($_GET['semi'])){
        $Vouchs = Voucher::QueryArray(
                                QQ::AndCondition(
                                        QQ::GreaterOrEqual(QQN::Voucher()->Date , Date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd235959', strtotime($_GET['to']))),
                                    QQ::Equal(QQN::Voucher()->RefNoObject->CrObject->Grp,5454),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                    QQ::Equal(QQN::Voucher()->Dr,22 ),
                                    QQ::Equal(QQN::Voucher()->Parrent,NULL),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['acdyear']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->Semister,$_GET['semi'])
                        )   ,
                        QQ::Clause(
                         QQ::GroupBy(QQN::Voucher()->RefStatusObject->CalenderYear)
                                )
                );
                    if($Vouchs){
                        foreach ($Vouchs as $Vhs) {
                    ?>     
                        <table align="center">
                            <tr>
                                <td><strong>ADD.YEAR</strong></td>
                                <td> : </td>
                                <td><?php _p($this->lstadmission->SelectedName);?></td>
                                <td style="padding-left: 10px;"><strong>CURRENT YEAR</strong></td>
                                <td><strong >:</strong> </td>
                                <td ><?php _p($Vhs->RefStatusObject->CalenderYearObject->Name);?></td>
                            </tr>
                            <tr>
                                <td ><strong>CLASS</strong></td>
                                <td><strong> : </strong></td>
                                <td><?php _p($Vhs->RefStatusObject->SemisterObject .' '.'BAMS');?></td>

                            </tr>
                        </table>
                      <?php  }
                    }          }
        ?>
        <br>
        <div align="center"><b>DALLY FEE RECEIPT</b></div>
        <div align="center"><b>From  <?php  _p(date('Y/m/d', strtotime($from))); ?> To  <?php _p(date('Y/m/d', strtotime($to))); ?></b></div>
      
         <?php 
                if ($this->calfrom->Text != "" && $this->calto->Text != "" && $this->lstYear->SelectedValue == NULL && $this->lstSemister->SelectedValue == NULL) {
                $sr = 1;
                $Voucher = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date , Date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd235959', strtotime($_GET['to']))),
                                   // QQ::Equal(QQN::Voucher()->RefNoObject->CrObject->Grp,5454),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                  //  QQ::Equal(QQN::Voucher()->Dr,22 ),
                                    QQ::Equal(QQN::Voucher()->Parrent,NULL),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel, NULL),
                                    QQ::Equal(QQN::Voucher()->Cancel, 0)
                                )
                               
                        ),
                        QQ::Clause(
                         QQ::OrderBy(QQN::Voucher()->Date, QQN::Voucher()->Seq)
                                )
                );
                }  else {
                $Voucher = Voucher::QueryArray(
                                QQ::AndCondition(
                                    QQ::GreaterOrEqual(QQN::Voucher()->Date , Date('Ymd000000', strtotime($_GET['from']))),
                                    QQ::LessOrEqual(QQN::Voucher()->Date, Date('Ymd235959', strtotime($_GET['to']))),
                                    //QQ::Equal(QQN::Voucher()->RefNoObject->CrObject->Grp,5454),
                                    QQ::Equal(QQN::Voucher()->Grp,7),
                                   // QQ::Equal(QQN::Voucher()->Dr,22 ),
                                    QQ::Equal(QQN::Voucher()->Parrent,NULL),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->CalenderYear,$_GET['acdyear']),
                                    QQ::Equal(QQN::Voucher()->RefStatusObject->Semister,$_GET['semi']),
                                QQ::OrCondition(
                                    QQ::Equal(QQN::Voucher()->Cancel, NULL),
                                    QQ::Equal(QQN::Voucher()->Cancel, 0)
                                )
                               
                        ),
                        QQ::Clause(
                         QQ::OrderBy(QQN::Voucher()->Date, QQN::Voucher()->Seq)
                                )
                    );
                    
                }
                if($Voucher){
        ?>
        
        <table border="1" cellspacing ="0" style="font-size:12px;" class="datagrid">
            <tr>
                <th width="40" >Sr.</th>
                <!-- =th width="40" >Date</th-->
                <th width="70" >Name</th>
                <th width="40" >Mode(Cash)</th>
                <th width="40" >Receipt No.</th>
                <!--th width="60" >Academic Year</th-->
                <th width="60" >Tution Fee</th>
                <th width="60" >Dev. Fee</th>
                <?php
                $leds = Ledger::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Ledger()->Grp, 5454),
                                QQ::NotEqual(QQN::Ledger()->Idledger, 10288), 
                                QQ::NotEqual(QQN::Ledger()->Idledger, 10289)
                            )
                );
                if ($leds) {
                    foreach ($leds as $led) {
                         $arrfees[$led->Idledger] = 0;
                ?>
                    <th width="60" ><?php _p($led->Name); ?></th>
                <?php
                    }
                }
                ?>
                <th width="60" >Total</th>
            </tr>

           <?php 
                    $year = array();
                    $yearwisetotal = array();
                    $cash = array();
                    $scholarshiptotal = array();
                    $total3 = $total4 = $total5 = $total6 = 0;
                    foreach ($Voucher as $vouch){
                        
                        $year[$vouch->RefStatusObject->CalenderYear]= $vouch->RefStatusObject->CalenderYearObject;
                       
                        $tution = $dev = $total1 = $total2 = $total = $ledaamt = 0;
                        if(isset($_GET['addyear'])){
                            $prof = Profile::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Profile()->Idprofile,$vouch->Cr),
                                        QQ::Equal(QQN::Profile()->CalenderYear,$_GET['addyear'])
                                            ));
                            if($prof){
            ?>
                    <tr> 
                        <td><?php _p($sr++);?> </td>
                        <!--<td><?php //_p($vouch->Date);?></td>-->
                        <td><?php if($vouch->CrObject->Grp == 244) _p($vouch->CrObject->Name); else _p($vouch->CrObject->GrpObject->Name); ?></td>
                        <td><?php _p($vouch->PaymentModeObject);?></td>
                        <?php 
                            if($vouch->DrObject->IsFeeRepeat ==1 ){
                            ?>
                        <td><a href="../fees_structure/repeat_fee_print.php?id=<?php _p($vouch->Idvoucher); ?>&mem=<?php _p($vouch->Cr);?>"><?php _p($vouch->InvNo);?></a></td>
                        
                            <?php
                            }else{
                            ?>
                        <td> <a href="miscellaneous_receipt.php?id=<?php _p($vouch->Idvoucher); ?>&mem=<?php _p($vouch->Cr);?>"><?php _p($vouch->InvNo);?></a></td>
                             <?php
                            }?>
                        <!-- Tution fee -->
                        <?php 
                            $tuvov = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10288),
                                    QQ::OrCondition(                                        
                                        QQ::Equal(QQN::Voucher()->Parrent,$vouch->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $vouch->Idvoucher)
                                    )),
                                     QQ::Clause(
                                        QQ::Sum(QQN::Voucher()->Amount, "tution")
                                    )
                            );
                            if($tuvov){
                                $tution = $tuvov->GetVirtualAttribute("tution");
                             ?>
                                <td align = "right">
                                    <?php 
                                        _p(number_format($tution, 2,'.',''));
                                        $total3 = $total3 + $tution;
                                    ?>
                                </td>
                         
                            <?php }?>
                       
                       <!-- Dev fee-->
                        <?php 
                            $devov = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10289),
                                    QQ::OrCondition(
                                        
                                        QQ::Equal(QQN::Voucher()->Parrent,$vouch->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $vouch->Idvoucher)
                                    )),
                                     QQ::Clause(
                                        QQ::Sum(QQN::Voucher()->Amount, "dev")
                                    )
                            );
                            if($devov){
                                $dev = $devov->GetVirtualAttribute("dev");
                             ?>
                                <td align="right">
                                    <?php 
                                    _p(number_format($dev, 2,'.',''));
                                       
                                        $total4 = $total4 + $dev;
                                    ?>
                                </td>
                         
                            <?php }?>
                          <?php
                            if ($leds) {
                                foreach ($leds as $led) {
                                    $subamt = 0;
                                    $ledvovs = Voucher::QueryArray(
                                                    QQ::AndCondition(
                                                        QQ::Equal(QQN::Voucher()->Dr, $led->Idledger), 
                                                        QQ::OrCondition(
                                                            QQ::Equal(QQN::Voucher()->Parrent, $vouch->Idvoucher), 
                                                            QQ::Equal(QQN::Voucher()->Idvoucher, $vouch->Idvoucher)
                                                        )
                                                    )
                                            );
                                    ?>
                                    <td align = "right">
                                        <?php
                                        if ($ledvovs) {
                                            foreach ($ledvovs as $ledv) {
                                                
                                                _p(number_format($ledv->Amount, 2, '.', ''));
                                                $ledaamt = $ledaamt + $ledv->Amount;
                                            }
                                            $arrfees[$led->Idledger] += $ledv->Amount;
                                            
                                        } else {
                                            _p("0");
                                        }
                                        ?>
                                    </td>
                             <?php
                                }
                            }
                        ?>
                        <!-- total -->
                        <td align="right">
                            
                            <strong>
                                <?php 
                                    $total = $tution + $dev + $ledaamt ;
                                    _p(number_format($total, 2,'.',''));
                                    $total5 = $total5 + $total;
                                    //Yearwise Total array created
                                    if(!array_key_exists($vouch->RefStatusObject->CalenderYear, $yearwisetotal)){
                                        $yearwisetotal[$vouch->RefStatusObject->CalenderYear] = 0;
                                    } 
                                    $yearwisetotal[$vouch->RefStatusObject->CalenderYear] +=  $total;
                                    //Cash Total array created by Payment mode
                                    if(!isset($cash[$vouch->PaymentMode][$vouch->RefStatusObject->CalenderYear])){
                                        $cash[$vouch->PaymentMode][$vouch->RefStatusObject->CalenderYear] = 0;
                                    }
                                    $cash[$vouch->PaymentMode][$vouch->RefStatusObject->CalenderYear] += $total; 
                                    
                                    if(!array_key_exists($vouch->RefStatusObject->CalenderYear, $scholarshiptotal)){
                                        $scholarshiptotal[$vouch->RefStatusObject->CalenderYear] = 0;
                                    } 
                                    if($vouch->CrObject->Grp !=244)
                                    $scholarshiptotal[$vouch->RefStatusObject->CalenderYear] +=  $total;
                                    
                                    
                                    
                                 ?>
                            </strong>
                        </td>         
                    <?php }}else{?>
                       <tr> 
                        <td><?php _p($sr++);?> </td>
                        <!--td><?php //_p(date("M d Y",strtotime($vouch->Date)));?></td-->
                        <td><?php if($vouch->CrObject->Grp == 244) _p($vouch->CrObject->Name); else _p($vouch->CrObject->GrpObject->Name); ?></td>
                        <td><?php _p($vouch->PaymentModeObject);?></td>
                         <?php 
                            if($vouch->DrObject->IsFeeRepeat ==1 ){
                            ?>
                        <td><a href="../fees_structure/repeat_fee_print.php?id=<?php _p($vouch->Idvoucher); ?>&mem=<?php _p($vouch->Cr);?>"><?php _p($vouch->InvNo);?></a></td>
                        
                            <?php
                            }else{
                            ?>
                        <td> <a href="miscellaneous_receipt.php?id=<?php _p($vouch->Idvoucher); ?>&mem=<?php _p($vouch->Cr);?>"><?php _p($vouch->InvNo);?></a></td>
                             <?php
                            }?>
                        <!-- Tution fee -->
                        <?php 
                            $tuvov = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10288),
                                    QQ::OrCondition(                                        
                                        QQ::Equal(QQN::Voucher()->Parrent,$vouch->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $vouch->Idvoucher)
                                    )),
                                     QQ::Clause(
                                        QQ::Sum(QQN::Voucher()->Amount, "tution")
                                    )
                            );
                            if($tuvov){
                                $tution = $tuvov->GetVirtualAttribute("tution");
                             ?>
                                <td align = "right">
                                    <?php 
                                         _p(number_format($tution, 2,'.',''));
                                           
                                        $total3 = $total3 + $tution;
                                    ?>
                                </td>
                         
                            <?php }?>
                       
                       <!-- Dev fee-->
                        <?php 
                            $devov = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::Voucher()->RefNoObject->Cr,10289),
                                    QQ::OrCondition(
                                        
                                        QQ::Equal(QQN::Voucher()->Parrent,$vouch->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Idvoucher, $vouch->Idvoucher)
                                    )),
                                     QQ::Clause(
                                        QQ::Sum(QQN::Voucher()->Amount, "dev")
                                    )
                            );
                            if($devov){
                                $dev = $devov->GetVirtualAttribute("dev");
                             ?>
                                <td align="right">
                                    <?php 
                                    _p(number_format($dev, 2,'.',''));
                                        _p($dev);                                        $total4 = $total4 + $dev;
                                    ?>
                                </td>
                         
                            <?php }?>
                             <?php
                            if ($leds) {
                                foreach ($leds as $led) {
                                    $subamt = 0;
                                    $ledvovs = Voucher::QueryArray(
                                                    QQ::AndCondition(
                                                        QQ::Equal(QQN::Voucher()->Dr, $led->Idledger), 
                                                        QQ::OrCondition(
                                                            QQ::Equal(QQN::Voucher()->Parrent, $vouch->Idvoucher),
                                                            QQ::Equal(QQN::Voucher()->Idvoucher, $vouch->Idvoucher)
                                                        )
                                                    )
                                             );
                                    ?>
                                    <td align = "right"><?php
                                    if ($ledvovs) {
                                        foreach ($ledvovs as $ledv) {
                                            
                                               
                                                _p(number_format($ledv->Amount, 2, '.', ''));
                                                 $ledaamt = $ledaamt + $ledv->Amount;
                                        }
                                          $arrfees[$led->Idledger] += $ledv->Amount;
                                    } else {
                                        _p("0");
                                    }
                                    ?>
                                    </td>
                                 <?php
                                }
                            }
                            ?>
                                    
                              <!-- total -->
                        <td align="right">
                            
                            <strong>
                                <?php 
                                    $total = $tution + $dev + $ledaamt ;
                                    _p(number_format($total, 2,'.',''));
                                    $total5 = $total5 + $total;
                                    //Yearwise Total array created
                                    if(!array_key_exists($vouch->RefStatusObject->CalenderYear, $yearwisetotal)){
                                        $yearwisetotal[$vouch->RefStatusObject->CalenderYear] = 0;
                                    } 
                                    $yearwisetotal[$vouch->RefStatusObject->CalenderYear] +=  $total;
                                    //Cash Total array created by Payment mode
                                    if(!isset($cash[$vouch->PaymentMode][$vouch->RefStatusObject->CalenderYear])){
                                        $cash[$vouch->PaymentMode][$vouch->RefStatusObject->CalenderYear] = 0;
                                    }
                                    $cash[$vouch->PaymentMode][$vouch->RefStatusObject->CalenderYear] += $total; 
                                    
                                    if(!array_key_exists($vouch->RefStatusObject->CalenderYear, $scholarshiptotal)){
                                        $scholarshiptotal[$vouch->RefStatusObject->CalenderYear] = 0;
                                    } 
                                    if($vouch->CrObject->Grp !=244)
                                    $scholarshiptotal[$vouch->RefStatusObject->CalenderYear] +=  $total;
                                    
                                    
                                    
                                 ?>
                            </strong>
                        </td>       
                                    
                    <?php }?>
                      

                    </tr>
                 
                <?php }

                ?>
                    
                        
                    <tr>
                        <td colspan="4" align="right"><strong>Total</strong></td>
                        <td align="right"><strong><?php _p(number_format($total3, 2,'.',''))?></strong></td>
                        <td align="right"><strong><?php _p(number_format($total4, 2,'.',''))?></strong></td>
                       
                        <?php 
                        if ($leds) {
                            foreach ($leds as $led) {
                            ?>
                        <td align="right"><strong><?php _p(number_format($arrfees[$led->Idledger], 2,'.',''))?></strong></td>
                            <?php 
                            }
                        }
                        ?>
                         <td align="right"><strong><?php _p(number_format($total5, 2,'.',''))?></strong></td>
                    </tr>
        </table>
       <?php  foreach ($year as $key => $value){ ?>
                
        <div class="col-md-4">
            <table class="datagrid" border="1" style="margin-top:10px;" width="200px" height="auto" >
                    <tr>
                        <th colspan="2" align="center"><div style="text-align: center;"><?php _p($value); ?> </div></th>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><?php _p($yearwisetotal[$key]);?></td>
                    </tr>
                    <?php 
                    $paymodes = PaymentMode::LoadAll(); 
                    foreach ($paymodes as $paymode){
                    ?>
                     <tr>
                        <td>
                            <strong>
                            <?php                                     
                                if($paymode)_p($paymode->Name); 
                            ?>
                            </strong>
                        </td>
                        <td><?php if(isset($cash[$paymode->IdpaymentMode][$key])){_p($cash[$paymode->IdpaymentMode][$key]);}else{ _p("0"); }  ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                         <td><strong>Scholarship</strong></td>
                         <td><?php _p($scholarshiptotal[$key]); ?></td>
                    </tr>
                </table>
     </div>    
 <?php }?>
         <?php   }?>
    </div>
    <div style="clear: both;"></div>
        <div style="margin-top: 50px;">
            <div style="float: left"><strong>Accountant</strong></div>
            <div style="float: right"><strong>Cashier</strong></div>
        </div>
        <div style="clear: both;"></div>
</div>
<?php } ?>
	<?php $this->RenderEnd() ?>
<script>
        var tableToExcel = (function() {
          var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
          return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
          }
        })()

</script>
    

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>