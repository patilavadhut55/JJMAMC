
<?php
        require('../../qcubed.inc.php');
        require(__CONFIGURATION__ . '/header.inc.php');
        if(isset($_GET['prog']) && isset($_GET['cal']) && isset($_GET['code']) && isset($_GET['dept'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table To Excel</title>
</head>
<body>
    
    <div style=" color: #356BA1; font-size: 25px; font-weight: 100; line-height: 35px; margin-top: 20px;"><?php _p('Import Student Marks');?></div>
    <div class="form-controls">
    <?php
//Upload File
    $target_dir = "";
    if (isset($_POST['submit'])){
        $target_dir = "csv_files/";
        $target_file = $target_dir . $_FILES['filename']['name'];
        if (is_uploaded_file($_FILES['filename']['tmp_name'])){

            echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
            echo "<h2>Displaying contents:</h2>";
            //readfile($_FILES['filename']['tmp_name']);   
        }
        
    ?>
     
     <div style="overflow: auto">  
       <?php 
        $sr = 1;
        $curows = $errows = array();
        //_p($_FILES['filename']['name']);
        $log = new Log();
        $log->Filename = $_FILES['filename']['name'];
        $log->Date = QDateTime::FromTimestamp(strtotime(QDateTime::Now()));
        $log->LogGrp = 4;
        $log->Status = "Import";
        $log->DataBy = $_SESSION['login'];
        //$log->Save();
        $cnt = 0;
        $handle = fopen($_FILES['filename']['tmp_name'], "r");
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
            $flag = 0;
           
            if($data[0] != ''){
                //chkledger 
                $ledger = Ledger::LoadByCode($data[0]);
                if(!$ledger){
                    _p($flag); 
                    $flag = 1;                
                }else{
                    //chkloginhasrole
                    $currstatuss = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger),
                                    QQ::OrCondition(        
                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent,$_GET['prog']),
                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->ParrentObject->Parrent,$_GET['prog'])
                                    ),
                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear,$_GET['cal'])

                                    ));
                    if(!$currstatuss){ $flag = 1;}
                    else{ foreach($currstatuss as $currstatus){} }
                    
                    
                    
                }
                /*
                if(isset($data[6])){
                    $chkgrade = Grade::LoadByName($data[6]);
                    if(!$chkgrade){ $flag == 1;}
                }*/
                
                
            if($flag == 0){
                $appliedexams = AppliedExam::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::AppliedExam()->Student, $currstatus->Student),
                            QQ::Equal(QQN::AppliedExam()->YearlySubject, $_GET['code'])
                            ));
                if(!$appliedexams){$flag = 1;}
                else{
                    foreach($appliedexams as $appliedexam){
                        if($appliedexam->ExamType == 1){  //ISE-I
                            $appliedexam->MarksObtained = $data[2];
                            $appliedexam->Save();
                        }
                        if($appliedexam->ExamType == 3){  //MSE
                            $appliedexam->MarksObtained = $data[3];
                            $appliedexam->Save();
                        }
                        if($appliedexam->ExamType == 2){  //ISE-II
                            $appliedexam->MarksObtained = $data[4];
                            $appliedexam->Save();
                        }
                        if($appliedexam->ExamType == 4){  //ESE
                            $appliedexam->MarksObtained = $data[5];
                            $appliedexam->Save();
                        }
                    }
                }
                
                $gradecards = GradeCard::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::GradeCard()->Student, $currstatus->Student),
                                QQ::Equal(QQN::GradeCard()->StudeRole, $currstatus->Role),
                                QQ::Equal(QQN::GradeCard()->Subject,  $_GET['code'])
                            )
                        );
                
                if($gradecards){
                    //$flag = 1;
                    foreach($gradecards as $gradecard){}
                }else{
                    $gradecard = new GradeCard();
                    $gradecard->Student = $currstatus->Student;
                    $gradecard->StudeRole = $currstatus->Role;
                    $gradecard->Subject = $_GET['code'];
                }
                    //$gradecard->AbsoluteGrade = $chkgrade->Idgrade;
                    $gradecard->Total = ($data[2] + $data[3] + $data[4] + $data[5]);
                    $gradecard->ByMakeup = FALSE;
                    $gradecard->Save();     
                
                
                for($i = 0; $i <= 6; $i++){
                    if(isset($data[$i])){
                        if(array_key_exists($sr, $curows))
                            $curows[$sr] = $curows[$sr].','.$data[$i];
                        else 
                            $curows[$sr] = $data[$i];
                    }
                }
            }else{
                for($i = 0; $i <= 6; $i++){
                    if(isset($data[$i])){
                        if(array_key_exists($sr, $errows)) $errows[$sr] = $errows[$sr].','.$data[$i];
                        else $errows[$sr] = $data[$i];
                    }
                }
            }
            $sr++;
            }
        }
    //view upload form
    ?>
<table width="532" border="1" class="datagrid">
    <tr>
        <th width="23"><div align="center">Sr No</div></th>
        <th width="23"><div align="center">PRN NO</div></th>
        <th width="23"><div align="center">NAME</div></th>
        <th width="23"><div align="center">ISE-I</div></th>
        <th width="23"><div align="center">MSE</div></th>
        <th width="23"><div align="center">ISE-II</div></th>
        <th width="23"><div align="center">ESE</div></th>
        <th width="23"><div align="center">GRADE</div></th>
    </tr>
      <?php 
      $curowsr = 1; 
      foreach ($curows as $key => $curow){ ?>
      <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($curowsr++);?></div></td>   
        <?php 
        $data = explode(',', $curow);
        for($i=0; $i<=6; $i++){ ?>
        <td><?php if(isset($data[$i])) _p($data[$i]); ?></td>
        <?php } ?>
      </tr>
      <?php } ?>
</table>
<?php
//error table 
?>
  <input class="pull-right" type="button" value="Export To Excel" onclick="tableToExcel('errtable', 'error in course structure')" />
    <table width="532" border="1" id="errtable" class="datagrid">
       <tr>
        <th width="23"><div align="center">Sr No</div></th>
        <th width="23"><div align="center">PRN NO</div></th>
        <th width="23"><div align="center">NAME</div></th>
        <th width="23"><div align="center">ISE-I</div></th>
        <th width="23"><div align="center">MSE</div></th>
        <th width="23"><div align="center">ISE-II</div></th>
        <th width="23"><div align="center">ESE</div></th>
        <th width="23"><div align="center">GRADE</div></th>
      </tr>
      <?php 
      $errowsr = 1; 
      foreach ($errows as $key => $errow){ ?>
      <tr bgcolor="#FF0000">
        <td><div align="center"><?php _p($errowsr++);?></div></td>   
        <?php 
        $data = explode(',', $errow);
        for($i=0; $i<=6; $i++){ ?>
        <td><?php if(isset($data[$i])) _p($data[$i]); ?></td>
        <?php } ?>
      </tr>
      <?php } ?>
</table>
     
    </div>
   <?php fclose($handle);
   print "Import done";
        if(move_uploaded_file($_FILES['filename']["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES['filename']["name"]). " has been uploaded.";
        }
    }else {
     ?>
     
    <table width="594" border="0">
        <tr>
            <td> 
                <p>Upload new csv by choose file and clicking on Upload</p>
                <form action='student_marks.php?cal=<?php _p($_GET['cal'])?>&dept=<?php _p($_GET['dept']);?>&prog=<?php _p($_GET['prog']);?>&code=<?php _p($_GET['code']);?>' method="post" enctype="multipart/form-data">
                <input size='50' type='file' name='filename' class="btn btn-warning" style="width:350px; margin:5px;"><br>
                <input type='submit' name='submit' value='Upload' class="btn btn-success" style="width:350px; margin:5px;"></form>
            </td>
        </tr>
    </table>
      <?php } ?>
     <div style="clear: both;"></div>
    </div>
</body>
</html>	
        <?php } require(__CONFIGURATION__ .'/footer.inc.php'); ?>
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