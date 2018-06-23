<?php
	
	$strPageTitle = QApplication::Translate('Admission Details');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	<h1><?php //_t('Admission Details')?></h1>

	<div class="form-controls">
           
       <div style=" margin-bottom: 10px; ">
        <div style="padding: 1px;" class="col-md-8">
            <div class="pull-left" style="width: 88%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
            <div class="pull-left" style="margin-top: 4px; margin-left: 5px;"><?php $this->btnSearch->Render(); ?></div>
            <div style="clear: both;"></div>
        </div>
       </div>
            <script language="javascript">
        function Clickheretoprint(){
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
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
   <input type="button" class="btn btn-success" onclick="tableToExcel('formPrint', 'W3C Example Table')" value="Export to Excel">    
    <div style="overflow: auto;">
    <div id="formPrint">
          
         
    
             <?php 
                if(isset($_GET['mem'])){ 
          
               $dist = CurrentStatus::LoadArrayByStudent($_GET['mem'],  QQ::OrderBy(QQN::CurrentStatus()->Semister,TRUE));
           
                        ?>
             <?php 
          
            $ledger = Ledger::LoadByIdledger($_GET['mem']);

                $CurrentStatus = CurrentStatus::QueryArray (
                                QQ::AndCondition(                                    
                                    QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)        
                                ) ,
                                QQ::OrderBy(QQN::CurrentStatus()->Semister, TRUE)
                        );
            
            if($CurrentStatus){
                foreach ($CurrentStatus as $CurrentStatu){}
            

                ?>
              
         
                
         
               
              
                 
        
            <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
                <table border="0" width="100%">
                  
                  
                    
                    <tr height="30">
                                <td width="20%">Name</td>
                                <td ><strong>:<?php _p($ledger->Name); ?>  </strong></td>                                
                                <td width="20%">Class</td>
                                <td ><strong>:</strong> <strong><?php _p($CurrentStatu->SemisterObject);?></strong></td>
                                
                      </tr>
                                            
                     <?php } ?>
                    
                    <tr height="30">
                                <td width="20%">Register No</td>
                                <td><strong>:</strong> <strong><?php //_p(); ?></strong></td>                                
                                <td width="20%">First year Admission Year</td>
                                <td><strong>:</strong> <strong><?php _p($CurrentStatu->StudentObject->IdloginObject->Profile->CalenderYearObject); ?></strong></td>
                                
                      </tr>
                    
                     <tr height="30">
                                <td width="20%">Admission Type</td>
                                <td><strong>:</strong> <strong><?php //_p(); ?></strong></td>                                
                                <td width="20%">Fee Concession Type</td>
                                <td><strong>:</strong> <strong><?php //_p($CurrentStatu->CalenderYearObject); ?></strong></td>
                                
                      </tr>
                    
                   
                    
                    
                    
                    
                    
                </table>
                </div>
            
            
             <table width="100%" class="datagrid" border="1">
            <tr>
                <th rowspan="2"><strong>Year</strong></th>
                <th rowspan="2"><strong>Studing Academic Year</strong></th>
                <th rowspan="2"><strong>Batch</strong></th>
                <th rowspan="2"><strong>Applicable Fee</strong></th>
                <th colspan="3"><strong>Receuved Fee Details</strong></th>
                <th rowspan="2"><strong>Balance Fee</strong></th>
            </tr>
            <tr>
                    <th><strong>Rec No</strong></th>
                    <th><strong>Date </strong></th>
                    <th><strong>Amount</strong></th>
            </tr>
    
            
                <?php 
                $Sr = 1;
                if( $dist){
                    foreach ( $dist as  $dists){
                        $total = Voucher::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->RefStatus,$dists->IdcurrentStatus),
                                QQ::Equal(QQN::Voucher()->Grp,6)
                                 ),
                            QQ::Clause(
                                QQ::Sum(QQN::Voucher()->Amount,"amt")
                            )
                        );  
                        
                    $flg = 1;    
                        
                        
                        
                        ?>
            <?php 
            
           
           
            ?>
            
            <?php
           
            $totalamt=0;
            $totalpaid=0;
            $totalremain=0;
            
            $recdate = Voucher::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->RefStatus,$dists->IdcurrentStatus),
                                QQ::Equal(QQN::Voucher()->Grp,7),
                                QQ::NotEqual(QQN::Voucher()->RefNo,NULL),
                                QQ::Equal(QQN::Voucher()->Parrent,NULL)   
                                 )
                        );
            
             $totalamt = $total->GetVirtualAttribute("amt");
             
            /* 
             $totalpaid=$totalpaid+$totalamt;
             
             $totalremain=$totalamt- $totalpaid;*/
             $recpaidtotal = Voucher::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->RefStatus,$dists->IdcurrentStatus),
                                QQ::Equal(QQN::Voucher()->Grp,7),
                                QQ::NotEqual(QQN::Voucher()->RefNo,NULL)                                 
                                 ),
                                QQ::Clause(
                                    QQ::Sum(QQN::Voucher()->Amount,"totalamtpaid")
                                )
                        );  
             
             $rec = Voucher::QueryCount(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Voucher()->RefStatus,$dists->IdcurrentStatus),
                                QQ::Equal(QQN::Voucher()->Grp,7),
                                QQ::NotEqual(QQN::Voucher()->RefNo,NULL),
                                QQ::Equal(QQN::Voucher()->Parrent,NULL)   
                                 )
                        );  
                        $totalpaid = 0;
                        if($recdate){
                        foreach ($recdate as $recdates){
                            
                            
                            $totalsub = Voucher::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Voucher()->Parrent,$recdates->Idvoucher),
                                        QQ::Equal(QQN::Voucher()->Grp,7)
                                         ),
                                    QQ::Clause(
                                        QQ::Sum(QQN::Voucher()->Amount,"amtpaid")
                                    )
                                );  
                            
                            
                            $totalrecpaid = $recdates->Amount + $totalsub->GetVirtualAttribute("amtpaid");
                            $totalpaid = $totalpaid + $totalrecpaid;
            ?>
           
        
            
            <tr>
                    <?php if($flg == 1){ ?>
                
                        <td rowspan="<?php _p($rec);?>"> <div align="center"><?php _p($dists->SemisterObject);?> </div></td>
                        <td rowspan="<?php _p($rec);?>"><div align="center"><?php _p($dists->CalenderYearObject);?> </div></td>
                        <td rowspan="<?php _p($rec);?>"><div align="center"><?php _p($dists->AdmissionStatusObject);?> </div></td>
                         
                        <td rowspan="<?php _p($rec);?>"> <div align="center"><?php _p($totalamt) ;//if($total) _p($total->GetVirtualAttribute("amt")); ?> </div> </td>
                    <?php } ?>
                        
                        <td><div align="center"><?php _p($recdates->InvNo);?></div></td>
                        <td><div align="center"><?php _p(date('d/m/Y',  strtotime($recdates->Date)));?></div></td>
                        
                        <td><div align="center"><?php _p($totalrecpaid);?></div></td>
                        <?php if($flg == 1){ ?>
                        <td rowspan="<?php _p($rec);?>"><div align="center"><?php _p($totalamt - $recpaidtotal->GetVirtualAttribute("totalamtpaid"));?></div></td>
                       <?php } $flg=0; ?>
                                              
            </tr>
                        <?php }}else {
                                
                            ?>  
            
             <tr>
                    <?php if($flg == 1){ ?>
                
                        <td><div align="center"> <?php _p($dists->SemisterObject);?></div></td>
                        <td><div align="center"><?php _p($dists->CalenderYearObject);?></div></td>
                        <td><div align="center"><?php _p($dists->AdmissionStatusObject);?></div></td>
                        <td> <div align="center"><?php if($total) _p($total->GetVirtualAttribute("amt")); ?></div></td>
                    <?php }$flg=0; ?>
                        
                        <td></td>
                        <td></td>   
                        <td></td>
                        <td></td>                         
            </tr>
                        <?php }} ?>
            <tr>
                <td></td>
                <td></td>
                <td><div align="center">Total</div></td>
                <td></td>
                
                <td> <div align="center"><?php _p($totalpaid); ?> </div></td>
                <td></td>
                <td></td>
                <td></td>
                   
                   
            </tr>
                        <?php }} ?>
        </table>
     </div>  
    </div>
        </div>
        
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

	<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>