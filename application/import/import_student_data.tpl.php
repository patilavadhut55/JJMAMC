<?php
    $strPageTitle = QApplication::Translate('Exam Set');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<style>
    .blanktable{
        display:none;
    }
</style> 

<script language="javascript">
    function Clickheretoprint(){
        var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
        var content_vlue = document.getElementById("mytable").innerHTML;

        var docprint=window.open("","",disp_setting);
        docprint.document.open();
        docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/table.css"); @page { size: A4 portrait; margin: 5% 10% 10% 10%;} table{ width:100%; font-size: 12px; }  .subtable{ font-size: 9px; line-height: 10px; } body{ font-size: 12px; } </style><center>');
        docprint.document.write(content_vlue);
        docprint.document.write('</center></body></html>');
        docprint.document.close();
    }
</script>
<!--h1>Open Elective</h1-->
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <script src="dragtable.js"></script>
    <div style=" margin-bottom: 10px; ">        
        <div style="padding: 1px;float:left;width:150px;"><strong>Please Select Year</strong><?php $this->lstCalender->Render(); ?></div>
        <div style="padding: 1px;float:left;width:200px;"><strong>Please Select Program</strong><?php $this->lstRoles->Render(); ?></div>
        <div style="padding: 1px;float:left;width:200px;"><strong>Please Select Year</strong><?php $this->lstsem->Render(); ?></div>
        <div style="padding: 1px;float:left;width:250px;"><strong>Please Select Admission Status</strong><?php $this->lstAdmissionstatus->Render(); ?></div>
        
        <div class="pull-right">
            <strong>&nbsp;</strong>
            <div style="clear: both;"></div>
            <?php $this->btnReport->Render(); ?>
            <?php  if(isset($_GET['cal'])) $this->btnImport->Render(); ?>
        </div>
        
        <div style="clear: both;"></div>
    </div>
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
    </a>
    <input type="button" class="pull-left btn btn-success" onclick="tableToExcel('mytable', 'W3C Example Table');" value="Export to Excel" />
    <div style="clear: both;"></div>
   
    <?php 
    if(isset($_GET['cal'])){
       $sr = 1;
    ?>
    <table width="532" border="1" class="datagrid">
        <tr>
            <th width="23"><div align="center">Sr No</div></th>
            <th width="23"><div align="center">Roll NO</div></th>        
            <th width="23"><div align="center">Prefix</div></th>
            <th width="23"><div align="center">First Name</div></th>
            <th width="23"><div align="center">Middle Name</div></th>
            <th width="23"><div align="center">Last Name</div></th>
            <th width="23"><div align="center">Address</div></th>
            <th width="23"><div align="center">Contact</div></th>
            <th width="23"><div align="center">Gender</div></th>
            <th width="23"><div align="center">DOB</div></th>
            <th width="23"><div align="center">Adharcard No.</div></th>
            <th width="23"><div align="center">Admission Date</div></th>    
        </tr>
        
        <?php 
            $students = CurrentStatus::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                            QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $_GET['dept']),
                            QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['semester']),
                            QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status'])    
                        )
                    );
            $sr = 1;
            if($students){
            foreach ($students as $student){
                $profile = Profile::LoadByIdprofile($student->Student);
                if($profile){
        ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($student->RollNo); ?></td>
            <td><?php _p($profile->PrefixObject); ?></td>
            <td><?php _p($profile->FirstName); ?></td>
            <td><?php _p($profile->MiddleName); ?></td>
            <td><?php _p($profile->LastName); ?></td>
            <td><?php _p($profile->AddressLine1); ?></td>
            <td><?php _p($profile->Contact1); ?></td>
            <td><?php _p($profile->GenderObject); ?></td>
            <td><?php _p($profile->Dob); ?></td>
            <td><?php _p($profile->AdharNo); ?></td>                 
            <td><?php _p($profile->AdmittedDate); ?></td>            
        </tr>    
        
        <?php }}} ?>    
    </table>
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

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>


