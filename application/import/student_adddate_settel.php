
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
        $target_dir = "csv_files/";
        $target_file = $target_dir . $_FILES['filename']['name'];
        if (is_uploaded_file($_FILES['filename']['tmp_name'])) {

            echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
            echo "<h2>Displaying contents:</h2>";
            //readfile($_FILES['filename']['tmp_name']);   
        }
        
    ?>
     <input type="button" onclick="tableToExcel('student', 'studentTable')" value="Table Export to Excel">
     <div style="overflow: auto">  
    <table width="532" border="1" id="student" class="datagrid">
      <tr>
        <th width="23"><div align="center">Sr No</div></th>  
        <th width="23"><div align="center">PRN No</div></th>
        <th width="23"><div align="center">Admission Date</div></th>
      </tr>
       <?php 
        $sr = 1;
        //_p($_FILES['filename']['name']);
        $log = new Log();
        $log->Filename = $_FILES['filename']['name'];
        $log->Date = QDateTime::FromTimestamp(strtotime(QDateTime::Now()));
        $log->LogGrp = 2;
        $log->Status = "Student Settel";
        $log->DataBy = $_SESSION['login'];
        $log->Save();
        
        $handle = fopen($_FILES['filename']['tmp_name'], "r");
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
       

        $ledger = Ledger::LoadByCode($data[0]);
        if($ledger){
        $profile  = Profile::LoadByIdprofile($ledger->Idledger);
        if($profile){
            if(array_key_exists(8, $data) && $data[8] != "NULL"){
                $adddate = explode("/", $data[8]);
                
                $len = 0;
                foreach ($adddate as $ddt){
                    $len++;    
                }
                
                if(strlen($adddate[1]) == 1){
                    $adddate[1] = '0'.$adddate[1]; //date
                }

                if(strlen($adddate[0]) == 1){
                    $adddate[0] = '0'.$adddate[0]; //month
                }
                
                if($len == 3){
                    $date = $adddate[2].$adddate[0].$adddate[1];
                }else{
                    $appcolor = "#C00";
                }
                $profile->AddmissionDate = QDateTime::FromTimestamp(strtotime($date));
            }else{
                //$profile->AddmissionDate = 'NULL';
            }
            $profile->Save();
        }
    //view upload form
    ?>
       <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($sr++);?></div></td>   
        <td><div align="center"><?php _p($data[0]);?></div></td>
        <td><?php _p($data[8]);?></td>
        
      </tr>
      <?php }else{ ?>
      <tr bgcolor="#FF0000">
        <td><div align="center"><?php _p($sr++);?></div></td>   
        <td><div align="center"><?php _p($data[0]);?></div></td>
        <td><?php _p($data[8]);?></td>
       
      </tr>
      <?php } }?>
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
                Upload new csv by browsing to file and clicking on Upload<br>
                <form action='student_adddate_settel.php' method="post" enctype="multipart/form-data">
                File name to import:<br>
                <input size='50' type='file' name='filename' class="button" style="width:300px; margin:5px;"><br>
                <input type='submit' name='submit' value='Upload' class="button" style="width:333px; margin:5px;"></form>
            </td>
        </tr>
    </table>
      <?php } ?>
     <div style="clear: both;"></div>
    </div>
</body>
</html>	
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>