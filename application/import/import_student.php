<?php
        require('../../qcubed.inc.php');
        require(__CONFIGURATION__ . '/header.inc.php');
        if(isset($_GET['sem']) && isset($_GET['cal']) && isset($_GET['dept'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table To Excel</title>
</head>
<body>    
    <h1><?php _p('Import Students');?></h1>
    <div class="form-controls">
        
    <strong>        
        <?php 
            $academic = CalenderYear::LoadByIdcalenderYear($_GET['cal']);
            $role = Role::LoadByIdrole($_GET['dept']);
            $sem = AcademicYear::LoadByIdacademicYear($_GET['sem']);
            _t('<h3>'.$academic->Name." <i class='fa fa-arrow-right '></i> ".delete_all_between("[", "]", $role->Name)." <i class='fa fa-arrow-right '></i> ".$sem->Name.'</h3>');
            
        ?>
    </strong>
        
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
                if(isset($data[8])){
                $datedata = explode("/", $data[8]);
                if(count($datedata) >= 3){                   
                        
                }else{
                    $flag = 1;                                
                }
                }
                if(isset($data[10])){
                $admitdatedata = explode("/", $data[10]);
                if(count($admitdatedata) >= 3){                   
                        
                }else{
                    $flag = 1;                                
                }
                } 
                
                
                
                if($flag == 0){
                        //Save Ledger
                        $ledger = new Ledger();
                        $set = Settings::LoadByName("Student");
                        $ledger->Code = "S".$set->Option;
                        $set->Option = $set->Option + 1;
                        $set->Save();
                        $ledger->Name = $data[1].' '.$data[2].' '.$data[3].' '.$data[4];
                        $ledger->Grp = 244; //student
                        $ledger->Save();
                        
                        //save profile
                        $profile  = Profile::LoadByIdprofile($ledger->Idledger);
                        if(!$profile){
                            $profile = new Profile();
                            $profile->Idprofile = $ledger->Idledger;
                            
                            $prefix  = Prefix::QuerySingle(
                                        QQ::AndCondition(
                                            QQ::Like(QQN::Prefix()->Name, "%".$data[1]."%")
                                        )
                                    );
                            if($prefix){
                                $profile->Prefix = $prefix->Idprefix;
                            }
                            $profile->FirstName = $data[2];
                            $profile->MiddleName = $data[3];
                            $profile->LastName = $data[4];
                            $profile->AddressLine1 = $data[5];    
                            
                            if($data[7] == "Male"){
                                $profile->Gender = 1;
                            }else{
                                $profile->Gender = 2;
                            }
                            $profile->Contact1 = $data[6];
                            if(isset($data[8])){
                            $profile->Dob = QDateTime::FromTimestamp(strtotime($datedata[2].$datedata[1].$datedata[0]));                             
                            }
                            if(isset($data[9])){
                            $profile->AdharNo = $data[9];
                            }
                            if(isset($data[10])){
                            $profile->AdmittedDate = QDateTime::FromTimestamp(strtotime($admitdatedata[2].$admitdatedata[1].$admitdatedata[0]));
                            }
                            $profile->Save();
                        
                        
                            //save login
                            $login = Login::LoadByIdlogin($ledger->Idledger);
                            if($login){

                            }else{
                                $login = new Login();
                            }

                            $login->Idlogin = $ledger->Idledger;
                            $login->Username = $ledger->Code;
                            $login->Password = "stud123";
                            $login->IsEnabled = 1;
                            $login->Save();

                            //get student role
                            $chkrole = Role::QuerySingle(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Role()->Parrent, $_GET['dept']),
                                    QQ::Like(QQN::Role()->Name, "%Student %")
                                )
                            );

                            //login has role
                            $loginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($ledger->Idledger,$chkrole->Idrole);
                            if($loginhasrole){

                            }else{
                                $loginhasrole = new LoginHasRole();
                            }

                            $loginhasrole->LoginIdlogin = $ledger->Idledger;
                            $loginhasrole->RoleIdrole = $chkrole->Idrole;
                            $loginhasrole->Active = 1;
                            $loginhasrole->Save();

                            //current Status                       
                            $current_statuss = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CurrentStatus()->Role, $chkrole->Idrole),
                                    QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger),
                                    QQ::Equal(QQN::CurrentStatus()->CalenderYear, $_GET['cal']),
                                    QQ::Equal(QQN::CurrentStatus()->Semister, $_GET['sem']),
                                    QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $_GET['status'])    
                                )
                            );

                            if($current_statuss){
                                foreach ($current_statuss as $current_status){}
                            }else{
                                $current_status = new CurrentStatus();
                            }

                            $current_status->Student = $ledger->Idledger;
                            $current_status->Role = $chkrole->Idrole;
                            $current_status->Cancel = 0;
                            $current_status->RollNo = $data[0];
                            $current_status->Active = 0;
                            $current_status->Semister = $_GET['sem'];
                            $current_status->CalenderYear = $_GET['cal'];
                            $current_status->AdmissionStatus = $_GET['status'];
                            $current_status->From = $current_status->CalenderYearObject->From;
                            $current_status->To = $current_status->CalenderYearObject->To;
                            $current_status->Save();
                        } 
                    for($i = 0; $i <= 10; $i++){                        
                        
                        
                        if(isset($data[$i])){
                            if(array_key_exists($sr, $curows))
                                $curows[$sr] = $curows[$sr].','.$data[$i];
                            else 
                                $curows[$sr] = $data[$i];
                        }
                    }
                }else{
                    for($i = 0; $i <= 10; $i++){
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
      $curowsr = 1; 
      foreach ($curows as $key => $curow){ ?>
      <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($curowsr++);?></div></td>   
        <?php 
        $data = explode(',', $curow);
        for($i=0; $i<=10; $i++){ ?>
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
      $errowsr = 1; 
      foreach ($errows as $key => $errow){ ?>
      <tr bgcolor="#FF0000">
        <td><div align="center"><?php _p($errowsr++);?></div></td>   
        <?php 
            $data = explode(',', $errow);
            for($i=0; $i<=10; $i++){ 
        ?>
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
                <form action='import_student.php?cal=<?php _p($_GET['cal'])?>&dept=<?php _p($_GET['dept']);?>&sem=<?php _p($_GET['sem']); ?>&status=<?php _p($_GET['status']);?>' method="post" enctype="multipart/form-data">
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