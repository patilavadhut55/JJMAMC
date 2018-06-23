<?php
	$strPageTitle = QApplication::Translate('Members') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
      
	<?php $this->RenderBegin() ?>
   
<div class="form-controls">
    <table style="width: 100%;" border="0">
        <tr>
            <td width="418"><?php $this->lstYear->RenderWithName(); ?></td>
            <td><?php $this->lstCourse->RenderWithName(); ?></td>
        </tr>
        
        <tr>
            <td width="421"><?php $this->lstSemister->RenderWithName(); ?></td>
            <td width="421"><?php $this->lstAdmissionStatus->RenderWithName(); ?></td>
        </tr>
        <tr>
            <td width="421"><?php $this->lstCity->RenderWithName(); ?></td>
            <td width="421"><?php $this->btnShow->RenderWithName(); ?></td>
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
  
<?php if(isset($_GET['year'])){ 
  ?>

 <div id="formPrint">
    <div class="form-controls">
         <div align="center"><b>DR.J.J.MAGDUM AYURVED MEDICAL COLLEG JAYSINGPUR</b></div> 
         <div align="center">
                    <strong>Academic Year : </strong><?php _p($this->lstYear->SelectedName); ?>
                    <strong>Class :</strong><?php _p($this->lstSemister->SelectedName);?>
         </div>
         <br>
         <div align="center"><strong>ADMISSION REPORT</strong></div>
<table width="100%" border="0" class="datagrid" >
  <tr>
    <th width="3%" ></th>
    <th width="3%" >Sr</th>
    <th width="6%" >Code</th>
    <th width="17%" >Name</th>
    <th width="11%" >Contact</th>
    <th width="16%" >Address</th>
    <th width="10%" >Concession</th>
    <th width="13%" >Caste</th>
    <th width="17%" >Current Status</th>    
  </tr>
  <?php 
  
    if(isset($_GET['dept']))
        $course = Role::LoadByIdrole($_GET['dept']);
     
        if($course){
             
            $count =  CurrentStatus::QueryCount(
                    QQ::AndCondition(
                    QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                    QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue), 
                    QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status']),        
                    QQ::OrCondition(
                              QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->District, $this->lstCity->SelectedValue)        
                        )
                    )
                );    
?>

  <?php if ($this->lstCity->SelectedValue != Null){
        $currents = CurrentStatus::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue),
                        QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status']),    
                        QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Profile->District, $this->lstCity->SelectedValue)
                    )
                ); 
  }else{
        $currents = CurrentStatus::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $course->Idrole),
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstYear->SelectedValue),
                            QQ::Equal(QQN::CurrentStatus()->Semister, $this->lstSemister->SelectedValue),
                            QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status'])        
                            ));   
                    
  }
  
  
    if($currents){
            $sr =1;
            foreach ($currents as $current){    
  ?>
  
  <tr>
      <td valign="top"><a target="_blank" href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/admission/admission.php?id=<?php _p($current->Student); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
    <td valign="top"><?php _p($sr++); ?></td>
    <td valign="top"><?php _p($current->StudentObject->IdloginObject->Code); ?></td>
    <td valign="top"><?php _p($current->StudentObject->IdloginObject->Profile->PrefixObject.' '.$current->StudentObject->IdloginObject->Profile->FirstName.' '.$current->StudentObject->IdloginObject->Profile->MiddleName.' '.$current->StudentObject->IdloginObject->Profile->LastName); ?></td>
    <td valign="top"><div align="center"><?php _p($current->StudentObject->IdloginObject->Profile->Contact1); ?></div></td>
    <td valign="top"><div align="center"><?php _p($current->StudentObject->IdloginObject->Profile->AddressLine1); ?></div> </td>
    <td valign="top"><div align="center">
        <?php _p($current->StudentObject->IdloginObject->Profile->FeeConcessionObject); ?></div></td>
    <td valign="top">
        <div align="center">
      <?php  _p($current->StudentObject->IdloginObject->Profile->CasteObject); ?>
    </div></td>
    <td>
      <table width="200" border="0">
        <tr>
          <td width="99" bgcolor="#F5F5F5"><div align="center"><strong>Year</strong></div></td>
          <td width="91" bgcolor="#F5F5F5"><div align="center"><strong>Semester</strong></div></td>
        </tr>
        <?php 
     $statuss = CurrentStatus::LoadArrayByStudent($current->Student);
     foreach ($statuss as $status){
     ?>
        <tr>
          <td><?php _p($status->CalenderYearObject); ?></td>
          <td><?php _p($status->SemisterObject); ?></td>
        </tr>
        <?php } ?>
      </table>
    </td>
  </tr>
  <?php }}} ?>
</table>
</div>
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