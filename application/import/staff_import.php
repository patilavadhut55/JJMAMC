
<?php
        require('../../qcubed.inc.php');
        require(__CONFIGURATION__ . '/header.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table To Excel</title>
  <script src="<?php _p(__VIRTUAL_DIRECTORY__ . __APP_JS_ASSETS__);?>/tableToExcel.js"></script>
</head>
<body>
    <div style=" color: #356BA1; font-size: 25px; font-weight: 100; line-height: 35px; margin-top: 20px;"><?php //_p('Student Import');?></div>
    <div class="form-controls">
       
    <?php
//Upload File
    $target_dir = "";
    if (isset($_POST['submit'])){
        
        //if (($_FILES["filename"]["type"] == "text/csv")){

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
    $sr = $sr1 = 1;
    $curows = $errows = array();
    //_p($_FILES['filename']['name']);
    $log = new Log();
    $log->Filename = $_FILES['filename']['name'];
    $log->Date = QDateTime::FromTimestamp(strtotime(QDateTime::Now()));
    $log->LogGrp = 1;
    $log->Status = "Import";
    $log->DataBy = $_SESSION['login'];
    $log->Save();

    $handle = fopen($_FILES['filename']['tmp_name'], "r");
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        $flag = 0;
        
        //chk role
        if(strpos($data[4], ',') !== false){
            $dept_roles = explode(',', $data[4]);
            foreach($dept_roles as $dept_role){
                $departments = Role::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Role()->ShortName, $dept_role)
                        ));
                if(!$departments){ $flag = 1;}
                foreach($departments as $department){}
                $roles = Role::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Parrent, $department->Idrole),
                            QQ::Like(QQN::Role()->Name, $data[3]."%")
                        ));
                if(!$roles){ $flag = 1; }
            } 
        }else{
            $departments = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->ShortName, $data[4])
                    ));
                    
            if(!$departments){ _p('department not found'); /*$flag = 1;*/ }
            foreach($departments as $department){}
            $roles = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Parrent, $department->Idrole),
                        QQ::Like(QQN::Role()->Name, $data[3]."%")
                    ));
             if(!$roles){ $flag = 1;  _p($sr1++.') role not found  -'.$data[0] ); echo '<br>'; $flag = 1; }
             
        }
       
        //chk gender 
        $gender = Gender::LoadByName($data[7]);
        if(!$gender){ $flag = 1; _p('Gender not found');}    

        //chk salary type
        $salarycat = SalaryCat::LoadByName($data[8]);
        if(!$salarycat){ $flag = 1; _p('SalaryCat not found');}
        
        //chk education title
        $education_title = EducationTitle::LoadByName($data[5]);
        if(!$education_title){
            $education_title = new EducationTitle();
            $education_title->Name = $data[5];
            $education_title->Save();
            //$flag = 1;            
        }

        //chk appointment type
        $app_cats = AppoinmentCat::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::AppoinmentCat()->Name, $data[6])
                    ));
            if(!$app_cats){ /*$flag = 1;*/  _p('AppoinmentCat not found');}
            foreach($app_cats as $app_cat){}
            
    if($flag == 0){
        _p('flag 0'); echo '<br>';
        $set = Settings::LoadByName('Employee');
        $ledger = Ledger::LoadByCode('E'.$set->Option);
            if(!$ledger){
                
                $nm1 = '';
                $ledger = new Ledger();
                $ledger->Code = 'E'.$set->Option;
                $name = explode(' ', $data[0]);
                $prefix = Prefix::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Prefix()->Name,  $name[0])
                                    ));
                if($prefix){
                    foreach ($name as $nm){
                        $nm1 = $nm1.$nm." ";
                    }

                    $ledger->Name = $nm1.' ['.'E'.$data[1].'] ';
                }else{
                    foreach ($name as $nm){
                        $nm1 = $nm1.$nm." ";
                    }

                    $ledger->Name = "N/A ".$nm1.' ['.'E'.$data[1].'] ';
                }

                $ledger->Grp = 34; //Staff
                $ledger->Save();
                $set->Option = $set->Option + 1;
                $set->Save();

                $addresss = Address::LoadArrayByOf($ledger->Idledger);
                if($addresss){
                    foreach($addresss as $address){}
                }else{
                    $address = new Address();
                    $address->Of = $ledger->Idledger;
                    $address->Title = $ledger->Name."'s  Address";
                    $address->Gender = $gender->Idgender;
                    $address->Save();
                }

                $chklogin = Login::LoadByIdlogin($ledger->Idledger);
                    if(!$chklogin){                                    
                        $login = new Login();
                        $login->Idlogin = $ledger->Idledger;
                        $login->Username = $ledger->Code;
                        $login->Password = "emp@wce";
                        $login->IsEnabled = TRUE;
                        $login->Save();                    

                        if(strpos($data[4], ',') !== false){ 
                        $dept_roles = explode(',', $data[4]);
                            foreach($dept_roles as $dept_role){
                                $departments = Role::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Role()->ShortName, $dept_role)
                                ));
                                foreach($departments as $department){}
                                $roles = Role::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::Role()->Parrent, $department->Idrole),
                                            QQ::Like(QQN::Role()->Name, $data[3]."%")
                                        ));
                                foreach($roles as $role){}
                                    //chk login has role
                                $chkloginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($login->Idlogin, $role->Idrole);
                                if(!$chkloginhasrole){
                                        $loginhasrole = new LoginHasRole();
                                        $loginhasrole->RoleIdrole = $role->Idrole;
                                        $loginhasrole->LoginIdlogin = $login->Idlogin;
                                        $loginhasrole->Active = TRUE; 

                                         //joining date
                                        if(array_key_exists(2, $data) && $data[2] != "NULL"){
                                        $joindate = explode("/", $data[2]);

                                        $len = 0;
                                        foreach ($joindate as $ddt){
                                            $len++;    
                                        }

                                        if(strlen($joindate[0]) == 1){
                                            $joindate[0] = '0'.$joindate[0]; //date
                                        }

                                        if(strlen($joindate[1]) == 1){
                                            $joindate[1] = '0'.$joindate[1]; //month
                                        }

                                        if($len == 3){
                                            $date = $joindate[2].$joindate[1].$joindate[0];
                                        }else{
                                            $appcolor = "#C00";
                                        }
                                        $loginhasrole->From  = QDateTime::FromTimestamp(strtotime($date));
                                        }
                                        $loginhasrole->Save();
                                }

                      }
                    }else{
                        $departments = Role::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Role()->ShortName, $data[4])
                                ));
                                foreach($departments as $department){}
                                $roles = Role::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::Role()->Parrent, $department->Idrole),
                                            QQ::Like(QQN::Role()->Name, $data[3]."%")
                                        ));
                                 foreach($roles as $role){}
                            //chk login has role
                            $chkloginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($login->Idlogin, $role->Idrole);
                            if(!$chkloginhasrole){
                                $loginhasrole = new LoginHasRole();
                                $loginhasrole->RoleIdrole = $role->Idrole;
                                $loginhasrole->LoginIdlogin = $login->Idlogin;
                                $loginhasrole->Active = TRUE; 

                                 //joining date
                                if(array_key_exists(2, $data) && $data[2] != "NULL" && $data[2] != " "){
                                    $joindate = explode("/", $data[2]);

                                    $len = 0;
                                    foreach ($joindate as $ddt){
                                        $len++;    
                                    }

                                    if(strlen($joindate[1]) == 1){
                                        $joindate[1] = '0'.$joindate[1]; //date
                                    }

                                    if(strlen($joindate[0]) == 1){
                                        $joindate[0] = '0'.$joindate[0]; //month
                                    }

                                    if($len == 3){
                                        $date = $joindate[2].$joindate[0].$joindate[1];
                                    }else{
                                        $appcolor = "#C00";
                                    }
                                    $loginhasrole->From  = QDateTime::FromTimestamp(strtotime($date));
                                }
                                $loginhasrole->Save();
                            }                
                        }
                    }
                $profile  = Profile::LoadByIdprofile($ledger->Idledger);
                if(!$profile){
                    $profile = new Profile();
                    $profile->Idprofile = $ledger->Idledger;
                    $profile->EducationTitle = $education_title->IdeducationTitle;
                    $profile->Save();
                }

                $salarys = Salary::LoadArrayByStaff($ledger->Idledger);
                if($salarys){
                    foreach($salarys as $salary){}
                }else{
                    $salary = new Salary();
                    $salary->SalaryCat = $salarycat->IdsalaryCat;
                    $salary->Staff  = $ledger->Idledger;
                    $salary->AppoinmentCat = $app_cat->IdappoinmentCat;
                    $salary->Save();        

                }
                
            for($i = 0; $i <= 8; $i++)
            if(array_key_exists($sr, $curows)) $curows[$sr] = $curows[$sr].','.$data[$i];
            else $curows[$sr] = $data[$i];
        }else{
              _p('employee found'.$data[0]);
              echo '<br>';
            for($i = 0; $i <= 8; $i++)
            if(array_key_exists($sr, $errows)) $errows[$sr] = $errows[$sr].','.$data[$i];
            else $errows[$sr] = $data[$i];
        }
        
    }else{
        for($i = 0; $i <= 8; $i++)
            if(array_key_exists($sr, $errows)) $errows[$sr] = $errows[$sr].','.$data[$i];
            else $errows[$sr] = $data[$i];
    }
    $sr++;
    }
    
    //view upload form
    ?>
  <table width="532" border="1"  class="datagrid">
      <tr>
        <th width="23"><div align="center">Sr No</div></th>  
        <th width="23"><div align="center">Employee Id</div></th>
        <th width="79"><div align="center">Employee Name</div></th>
        <th width="54"><div align="center">Date Of Joining</div></th>
        <th width="98"><div align="center">Post</div></th>
        <th width="98"><div align="center">Department</div></th>
        <th width="97"><div align="center">Qualification</div></th>
        <th width="65"><div align="center">Appointment Category</div></th>
        <th width="65"><div align="center">Gender</div></th>
        <th width="70"><div align="center">Salary Type</div></th>
       
      </tr>
       <?php 
      $sr = 1; 
      foreach ($curows as $key => $curow){ ?>
      <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($sr++);?></div></td>   
        <?php 
        $data = explode(',', $curow);
        for($i=0; $i<=8; $i++){ ?>
        <td><?php _p($data[$i]);?></td>
        <?php } ?>
      </tr>
      <?php } ?>
  </table>
         <input type="button" onclick="tableToExcel('staff', 'studentTable')" value="Table Export to Excel">
    <table width="532" border="1" id="staff" class="datagrid">
      <tr>
        <th width="23"><div align="center">Sr No</div></th>  
        <th width="23"><div align="center">Employee Id</div></th>
        <th width="79"><div align="center">Employee Name</div></th>
        <th width="54"><div align="center">Date Of Joining</div></th>
        <th width="98"><div align="center">Post</div></th>
        <th width="98"><div align="center">Department</div></th>
        <th width="97"><div align="center">Qualification</div></th>
        <th width="65"><div align="center">Appointment Category</div></th>
        <th width="65"><div align="center">Gender</div></th>
        <th width="70"><div align="center">Salary Type</div></th>
       
      </tr>     
       <?php 
      $sr = 1; 
      foreach ($errows as $key => $error){ ?>
      <tr bgcolor="red">
        <td><div align="center"><?php _p($sr++);?></div></td>   
        <?php 
        $data = explode(',', $error);
        for($i=0; $i<=8; $i++){ ?>
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
        
        
    //}else{ ?>        
        <!--h3>Selected file not have csv format. <a href="staff_import.php"><i class="fa fa-arrow-left"></i> Back</a></h3-->
    <?php //}
    }else {
     ?>
     
    <table width="594" border="0">
         <tr>
            <td> 
                
                <p>1. <a href="csv_files/sample_file_of_studentdata.xlsx" style="font-weight: bolder;">Dowland .XLS </a> and Input data.</p>
                <p>2. Delete <span style="color: red;"><b>Headers and Legends.</b></span> </p>
                <p>3. File -> Save as <span style="color: red ;"><b> .csv</b></span>.</p>                
                <p>4. Upload new csv by choose file and clicking on Upload</p>
                <form action='staff_import.php' method="post" enctype="multipart/form-data">
                <input size='50' type='file' name='filename' class="btn btn-warning" style="width:350px; margin:5px;" accept=".csv" /><br>
                <input type='submit' name='submit' value='Upload' class="btn btn-success" style="width:350px; margin:5px;"></form>
            </td>
        </tr>
    </table>
      <?php } ?>
     <div style="clear: both;"></div>
    </div>
</body>
</html>	

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