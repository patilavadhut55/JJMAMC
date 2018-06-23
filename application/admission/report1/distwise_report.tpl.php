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
            <td><?php $this->lstDist->RenderWithName(); ?></td>
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
  
<?php if($this->lstYear->SelectedValue != NULL){   
  ?>

 <div id="formPrint">
     <div class="form-controls" style="overflow: auto;">
         
  <table width="100%" class="datagrid" border="1">
                      
  
      
                        <tr>
                            <th><strong>Sr.No.</strong></th>
                            <th><strong>class</strong></th>
                            <th>Batch</th>
                              <?php 
                                if($this->lstDist->SelectedValue != NULL){                                                                        
                                    $dists = Place::QueryArray(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::Place()->Grp, 3),
                                                    QQ::Equal(QQN::Place()->Parrent, 2),
                                                    QQ::In(QQN::Place()->Idplace, $this->lstDist->SelectedValues)    
                                                )
                                            );
                                }else{
                                    $dists = Place::LoadArrayByParrent(2);                                    
                                }
                               
                                 $totalAll = array();
                                 $grand = 0;
                                foreach ($dists as $dist){
                                      $totalAll[$dist->Idplace] = 0;
                                    $studcnt = CurrentStatus::QueryCount(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                                                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstCourse->SelectedValue),
                                                    QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->District, $dist->Idplace)
                                               
                                                )
                                            );
                                    if($studcnt > 0){
                                 ?>    
                               
                                <th> <?php _p($dist->Name);?>   </th>
                              
                            <?php }}  ?>    
                            <th>Total</th>
                        </tr>
           
        
                        
                        
                        
                <?php 
                    $years = AcademicYear::LoadArrayByParrent(NULL);
                    $Sr = 1;
                    $totalall=0;
                    foreach ($years as $year){
                        $batchcnt = AdmissionStatus::CountAll();
              ?>
            <?php 
                $batchs = AdmissionStatus::LoadAll();
              
                $flg = 1;
                foreach ($batchs as $batch){
                  
                    $total=0;
                    $total1=0;
                  
            ?> 
                        
            <tr>
                <?php if($flg == 1){ ?>
                <td rowspan="<?php _p($batchcnt); ?>"><?php _p($Sr++);?></td>
                <td rowspan="<?php _p($batchcnt); ?>"><?php _p($year->Name); ?></td>      
                <?php $flg = 0; } ?>
                
                <td><?php _p($batch->Name); ?></td>
                <?php                               
                     foreach ($dists as $dist){
                           $studcnt = CurrentStatus::QueryCount(
                                                QQ::AndCondition(
                                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                                                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstCourse->SelectedValue),
                                                    QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->District, $dist->Idplace)   
                                               
                                                )
                                            );
                                    if($studcnt > 0){
                         
                ?>    
                 <?php 
           
           $countdist =  CurrentStatus::QueryCount(
                   QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstCourse->SelectedValue),
                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                    QQ::Equal(QQN::CurrentStatus()->AdmissionStatus,$batch->IdadmissionStatus ),        
                    QQ::Equal(QQN::CurrentStatus()->Semister,$year->IdacademicYear ),        
                    QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->District,$dist->Idplace) 
                    )
                );  
           
          $total=$total+$countdist;
           $totalAll[$dist->Idplace] =$totalAll[$dist->Idplace]+  $countdist;
        
            ?>
                
                   <td> <?php _p($countdist); ?>   </td>
                <?php  }}  ?>    

                   <td><strong><?php _p($total); 
                    $grand = $grand + $total;

                   ?> </strong>   </td>
                 
            </tr>
                
                <?php } }?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                 <?php  foreach ($dists as $dist){
                                               ?>
                <td> <strong><?php _p($totalAll[$dist->Idplace]); ?>  </strong> </td> 
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

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>