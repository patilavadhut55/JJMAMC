
<?php
        require('../../qcubed.inc.php');
        require(__CONFIGURATION__ . '/header.inc.php');
        if(isset($_GET['dept']) && isset($_GET['course'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table To Excel</title>
</head>
<body>
    
    <div style=" color: #356BA1; font-size: 25px; font-weight: 100; line-height: 35px; margin-top: 20px;"><?php _p('Course Data Import');?></div>
     <?php
        $role = Role::LoadByIdrole($_GET['course']);
        if($role){
    ?>
    <h3>Import Data of <span style="color: #0044cc; font-weight: bolder;"><?php _p($role->Name);?></span> Course</h3>
        <?php }?>
    <div class="form-controls">
       
        <div style="">
            <p>1. <a href="csv_files/sample_file_of_course_structuredata.xlsx" style="font-weight: bolder;">Dowland .XLS </a> and Input data.</p>
            <p>2. Delete <span style="color: red;"><b>Headers and Legends.</b></span> </p>
            <p>3. File -> Save as <span style="color: red ;"><b> .csv</b></span>.</p>
    </div>
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
        $log->Save();
        $cnt = 0;
        $handle = fopen($_FILES['filename']['tmp_name'], "r");
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
            $flag = 0;
            $depatment = Role::LoadByIdrole($_GET['course']);
            if(!$depatment){ $flag = 1;}
           
            $calenderyear = CalenderYear::LoadByName($data[0]);
            if(!$calenderyear){$flag = 1;}
            $sem = '';
            $color1 = $color2 = $color3 = $color4 = '';
            
            switch($data[3])
            {
                case 1: $sem = 2;
                    break;
                case 2: $sem = 3;
                    break;
                case 3: $sem = 5;
                    break;
                case 4: $sem = 6;
                    break;
                case 5: $sem = 8;
                    break;
                case 6: $sem = 9;
                    break;
                case 7: $sem = 11;
                    break;
                case 8: $sem = 12;
                    break;
            }

            $semister = AcademicYear::LoadByIdacademicYear($sem);
            if(!$semister){$flag = 1;}
            
            $coursegrps = CourseGrp::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::CourseGrp()->Name, $data[5])
                    ));
            if(!$coursegrps){ $flag = 1;}
            foreach($coursegrps as $coursegrp){}
            
            $subjects = Subject::LoadByName($data[6]);
            if(!$subjects){ 
                $flag = 1;       
                /*
                $subjects = new Subject();
                $subjects->Name = $data[6];
                $subjects->Save();
                */
            }
        
            $examgrps = ExamGroup::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::ExamGroup()->Name, $data[15])
                    ));
            if($examgrps){
                foreach($examgrps as $examgrp){}
            }else{
                $flag = 1;
            }
            if($flag == 0){      
                $deptyears = DeptYear::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::DeptYear()->Calender, $calenderyear->IdcalenderYear),
                                QQ::Equal(QQN::DeptYear()->Department, $depatment->Idrole),
                                QQ::Equal(QQN::DeptYear()->Semister, $semister->IdacademicYear),
                                QQ::Equal(QQN::DeptYear()->Academic, $semister->Parrent)
                            ));
                if(!$deptyears){
                    $flag = 1;                
                }else{
                    foreach ($deptyears as $deptyear){}
                }
                
                $yealysubs = YearlySubject::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::YearlySubject()->DeptYear, $deptyear->IddeptYear),
                            QQ::Equal(QQN::YearlySubject()->Subject, $subjects->Idsubject)
                        ));
                //$yealysub = YearlySubject::LoadByCode($data[4].'['.$depatment->ShortName.' '.$calenderyear->Name.']');
                if(!$yealysubs){
                $yealysubcode = YearlySubject::LoadByCode($data[4].'['.$depatment->ShortName.' '.$calenderyear->Name.']');
                if(!$yealysubcode){
                  //  QApplication::DisplayAlert('If condition  Dept = '.$deptyear->IddeptYear.'  sub = '.$subjects->Idsubject );
                    foreach ($yealysubs as $yealysub){}
                    $cnt++;
                    $yealysub = new YearlySubject();
                    $yealysub->DeptYear = $deptyear->IddeptYear;
                    $yealysub->CourseGrp = $coursegrp->IdcourseGrp;
                    $yealysub->Subject = $subjects->Idsubject;
                    $yealysub->Code = $data[4].'['.$depatment->ShortName.' '.$calenderyear->Name.']';
                    if(intval($data[7])){ $yealysub->Lab = $data[7]; }else{ $yealysub->Lab = 0;}
                    if(intval($data[8])){ $yealysub->Tusion = $data[8]; }else{ $yealysub->Tusion = 0;}
                    if(intval($data[9])){ $yealysub->Practical = $data[9]; }else{ $yealysub->Practical = 0;}
                    $yealysub->Credit = $data[10];
                    $yealysub->MinPassing = $data[17];
                    $yealysub->Save();
                
                    $ex = array(1,3,2,4);
                    $exm = 0;
                    for($i = 11; $i<=14; $i++){
                        if(intval($data[$i])){
                            $deptyearexams = DeptYearExam::QueryArray(
                                                QQ::AndCondition(
                                                QQ::Equal(QQN::DeptYearExam()->YearlySubject, $yealysub->IdyearlySubject),
                                                QQ::Equal(QQN::DeptYearExam()->Exam, $ex[$exm])
                                            ));

                            if(!$deptyearexams){
                                $deptyearexam = new DeptYearExam();
                                $deptyearexam->YearlySubject = $yealysub->IdyearlySubject;
                                $deptyearexam->Exam = $ex[$exm++];
                                $deptyearexam->Marks = $data[$i];
                                $deptyearexam->ExamGrp = $examgrp->IdexamGroup;
                                $deptyearexam->Max = $data[$i];
                                $deptyearexam->Save();
                            }
                        }else{
                            $deptyearexams = DeptYearExam::QueryArray(
                                                QQ::AndCondition(
                                                QQ::Equal(QQN::DeptYearExam()->YearlySubject, $yealysub->IdyearlySubject),
                                                QQ::Equal(QQN::DeptYearExam()->Exam, 1)
                                            ));

                            if(!$deptyearexams) foreach ($deptyearexams as $deptyearexam)
                                $deptyearexam->Delete();
                        }
                    }
                    }else{
                        // QApplication::DisplayAlert('else condition');
                        //foreach ($yealysubs as $yealysub){}
                        $flag = 1;
                    }
                }else{
                    // QApplication::DisplayAlert('else condition');
                    //foreach ($yealysubs as $yealysub){}
                    $flag = 1;
                }
                for($i = 0; $i <= 17; $i++)
                    if(array_key_exists($sr, $curows)) $curows[$sr] = $curows[$sr].','.$data[$i];
                    else $curows[$sr] = $data[$i];
            }else{
                for($i = 0; $i <= 17; $i++)
                    if(array_key_exists($sr, $errows)) $errows[$sr] = $errows[$sr].','.$data[$i];
                    else $errows[$sr] = $data[$i];
            }
            $sr++;
        }
    //view upload form
    ?>
<table width="532" border="1" class="datagrid">
      <tr>
        <th width="23"><div align="center">Sr No</div></th>  
        <th width="23"><div align="center">Calender Year</div></th>
        <th width="23"><div align="center">Programme</div></th>
        <th width="23"><div align="center">Branch</div></th>
        <th width="23"><div align="center">Semister</div></th>
        <th width="23"><div align="center">Code</div></th>
        <th width="23"><div align="center">course type</div></th>
        <th width="23"><div align="center">Course Name</div></th>
        <th width="23"><div align="center">L</div></th>
        <th width="23"><div align="center">T</div></th>
        <th width="23"><div align="center">P</div></th>
        <th width="23"><div align="center">Credits</div></th>
        <th width="23"><div align="center">ISE-I</div></th>
        <th width="23"><div align="center">MSE</div></th>
        <th width="23"><div align="center">ISE-II</div></th>
        <th width="23"><div align="center">ESE</div></th>
        <th width="23"><div align="center">Exam Group</div></th>
        <th width="23"><div align="center">Max</div></th>
        <th width="23"><div align="center">Min marks for passing</div></th>
      </tr>
      <?php 
      $curowsr = 1; 
      foreach ($curows as $key => $curow){ ?>
      <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($curowsr++);?></div></td>   
        <?php 
        $data = explode(',', $curow);
        for($i=0; $i<=17; $i++){ ?>
        <td><?php _p($data[$i]);?></td>
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
        <th width="23"><div align="center">Calender Year</div></th>
        <th width="23"><div align="center">Programme</div></th>
        <th width="23"><div align="center">Branch</div></th>
        <th width="23"><div align="center">Semester</div></th>
        <th width="23"><div align="center">Code</div></th>
        <th width="23"><div align="center">course type</div></th>
        <th width="23"><div align="center">Course Name</div></th>
        <th width="23"><div align="center">L</div></th>
        <th width="23"><div align="center">T</div></th>
        <th width="23"><div align="center">P</div></th>
        <th width="23"><div align="center">Credits</div></th>
        <th width="23"><div align="center">ISE-I</div></th>
        <th width="23"><div align="center">MSE</div></th>
        <th width="23"><div align="center">ISE-II</div></th>
        <th width="23"><div align="center">ESE</div></th>
        <th width="23"><div align="center">Exam Group</div></th>
        <th width="23"><div align="center">Max</div></th>
        <th width="23"><div align="center">Min marks for passing</div></th>
      </tr>
      <?php 
      $errowsr = 1; 
      foreach ($errows as $key =>$errow){ ?>
      <tr bgcolor="#FF0000">
        <td><div align="center"><?php _p($errowsr++);?></div></td>   
        <?php 
        $data = explode(',', $errow);
        for($i=0; $i<=17; $i++){ ?>
        <td><?php _p($data[$i]);?></td>
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
                <p>4. Upload new csv by choose file and clicking on Upload</p>
                <form action='course_data.php?dept=<?php _p($_GET['dept']);?>&course=<?php _p($_GET['course']);?>' method="post" enctype="multipart/form-data">
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