<?php
	$strPageTitle = QApplication::Translate('Members') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
      
	<?php $this->RenderBegin() ?>
   
<div class="form-controls">
    <table style="width: 100%;" border="0">
        <tr>
            <td><?php $this->lstYear->RenderWithName(); ?></td>
            <td><?php $this->lstCourse->RenderWithName(); ?></td>
            <td><?php $this->btnShow->RenderWithName(); ?></td>
        </tr>
        
        
    </table>
</div>
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
  
<?php if(isset($_GET['cal'])){   
  ?>

 <div id="formPrint">
    <div class="form-controls">
         
  <table width="100%" class="datagrid" border="1">
                      
  
      
                        <tr>
                            <th><strong>Sr.No.</strong></th>
                            <th><strong>class</strong></th>
                            <th>Batch</th>
                              <?php 
                              $feecons = FeesConcession::LoadAll();
                              $totalAll = array();
                              $grand = 0;
                                foreach ($feecons as $feecon){
                                     $totalAll[$feecon->IdfeesConcession] = 0;
                                 ?>    
                               
                                <th> <?php _p($feecon->Name);?>   </th>
                              
                               <?php  }  ?>    
                            <th>Total</th>
                        </tr>
           
        
                        
                        
                        
                <?php 
                    $years = AcademicYear::LoadArrayByParrent(NULL);
                    $Sr = 1;
                    foreach ($years as $year){
                        $batchcnt = AdmissionStatus::CountAll();
              ?>
            <?php 
                $batchs = AdmissionStatus::LoadAll();
                $flg = 1;
                foreach ($batchs as $batch){
                    $total=0;
                 
            ?> 
                        
            <tr>
                <?php if($flg == 1){ ?>
                <td rowspan="<?php _p($batchcnt); ?>"><?php _p($Sr++);?></td>
                <td rowspan="<?php _p($batchcnt); ?>"><?php _p($year->Name); ?></td>      
                <?php $flg = 0; } ?>
                
                <td><?php _p($batch->Name); ?></td>
                <?php                               
                    foreach ($feecons as $feecon){
                ?>    
                 <?php 
           
           $countcat =  CurrentStatus::QueryCount(
                   QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstCourse->SelectedValue),
                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                    QQ::Equal(QQN::CurrentStatus()->AdmissionStatus,$batch->IdadmissionStatus ),        
                    QQ::Equal(QQN::CurrentStatus()->Semister,$year->IdacademicYear ),        
                    QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->FeeConcession,$feecon->IdfeesConcession ) 
                    )
                );  
           
          $total=$total+$countcat;
           $totalAll[$feecon->IdfeesConcession] = $totalAll[$feecon->IdfeesConcession] +$countcat;
         
         
          
            ?>
                
                   <td> <?php _p($countcat); ?>   </td>
                 
                <?php  }  ?>    

                   <td><strong> <?php _p($total); 
                     $grand = $grand + $total;

                   ?>  </strong> </td>  
            </tr>
                <?php } }?>
           
            <tr>
                <td></td>
                <td></td>
                <td></td>
                 <?php  foreach ($feecons as $feecon){?>
                
                 <td><strong><?php _p(  $totalAll[$feecon->IdfeesConcession]); ?></strong></td>
               
             <?php  }?> 
                 <td><strong><?php _p($grand); ?></strong></td>
            </tr>
           
<?php } ?>
              
  </table>      
        
        
        
        
        
        
 
</div>
</div>
<?php  ?>

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