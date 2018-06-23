
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
        <div style="">
            <p>1. <a href="csv_files/sample_file_of_studentdata.xlsx" style="font-weight: bolder;">Dowland .XLS </a> and Input data.</p>
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
     <input type="button" onclick="tableToExcel('student', 'studentTable')" value="Table Export to Excel">
     <div style="overflow: auto">  
    <table width="532" border="1" id="student" class="datagrid">
      <tr>
        <th width="23"><div align="center">Sr No</div></th>  
        <th width="23"><div align="center">PRN No</div></th>
        <th width="79"><div align="center">Previous PRN NO</div></th>
        <th width="54"><div align="center">First Name</div></th>
        <th width="98"><div align="center">Middle Name</div></th>
        <th width="98"><div align="center">Last Name</div></th>
        <th width="97"><div align="center">Application  NO</div></th>
        <th width="65"><div align="center">Merit No</div></th>
        <th width="70"><div align="center">Merit Mark</div></th>
        <th width="23"><div align="center">Admission Date</div></th>
        <th width="79"><div align="center">Leave Date</div></th>
        <th width="54"><div align="center">Annual Family Income</div></th>
        <th width="98"><div align="center">Father/Guardian's name</div></th>
        <th width="98"><div align="center">Father/Guardian's Occupation</div></th>
        <th width="98"><div align="center">Father /Gardian Address</div></th>
        <th width="65"><div align="center">Father /Gardian Mobil No</div></th>
        <th width="70"><div align="center">Father /Gardian Email Id</div></th>
        <th width="54"><div align="center">Mother First Name</div></th>
        <th width="98"><div align="center">Mother Occupation</div></th>
        <th width="98"><div align="center">Mother Address</div></th>
        <th width="54"><div align="center">Mother Mob No</div></th>
        <th width="98"><div align="center">Mother Email Id</div></th>
        <th width="98"><div align="center">Local Guardian's Name</div></th>
        <th width="98"><div align="center">Relation</div></th>
        <th width="98"><div align="center">Local Guardian's Address</div></th>
        <th width="98"><div align="center">Local Guardian's Mobile No</div></th>
        <th width="98"><div align="center">Local Guardian's Email Id</div></th>
        
      </tr>
       <?php 
        $sr = 1;
        //_p($_FILES['filename']['name']);
        $log = new Log();
        $log->Filename = $_FILES['filename']['name'];
        $log->Date = QDateTime::FromTimestamp(strtotime(QDateTime::Now()));
        $log->LogGrp = 2;
        $log->Status = "Import";
        $log->DataBy = $_SESSION['login'];
        $log->Save();
        
        $handle = fopen($_FILES['filename']['tmp_name'], "r");
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
       
        if($data[0] != ' '){
        $ledger = Ledger::LoadByCode($data[0]);
        if(!$ledger){
        $ledger = new Ledger();
        $ledger->Code = $data[0];
        $ledger->Name = $data[0].' '.$data[2].' '.$data[3].' '.$data[4];
        $ledger->Grp = 244; //student
        $ledger->Save();
        $addresss = Address::LoadArrayByOf($ledger->Idledger);
        if($addresss){
            foreach($addresss as $address){}
        }else{
            $address = new Address();
            $address->Of = $ledger->Idledger;
            $address->Title = $ledger->Name."'s  Address";
            /*$address->AddressLine1 = $data[];
            $address->AddressLine2 = $data[];
            $address->City = $data[];
            $address->ZipCode = $data[];
            $address->Contact1 = $data[];
            $address->Contact2 = $data[];
            $address->Web = $data[];
            $address->Email1 = $data[];
            $address->Email2 = $data[];
            $address->TinSalesTaxNo = $data[];
            $address->CstNo = $data[];
            $address->Dob = $data[];
            $address->Age = $data[];*/
            $address->Save();
        }
        
        $profile  = Profile::LoadByIdprofile($ledger->Idledger);
        if(!$profile){
            $profile = new Profile();
            $profile->Idprofile = $ledger->Idledger;
            $profile->OldPrn = $data[1];
            if($data[5] != 'NULL'){ $profile->ApplicationNo = $data[5];}
            if($data[6] != 'NULL' && is_int($data[6])){ $profile->MeritNo = $data[6];}
            if($data[7] != 'NULL'){ $profile->MeritMark = $data[7];}
            //if($data[22] != 'NULL'){$profile->AdharNo = $data[22];}
            //if($data[20] != 'NULL'){$profile->IdentificationMark = $data[20];}
            
            if(array_key_exists(8, $data) && $data[8] != "NULL"){
                $adddate = explode("-", $data[8]);
                
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
            $ldate = '';
            if(array_key_exists(9, $data) && $data[9] != "NULL"){
                $leavedate = explode("/", $data[9]);
                
                $len = 0;
                foreach ($leavedate as $ddt){
                    $len++;    
                }
                
                if(strlen($leavedate[1]) == 1){
                    $leavedate[1] = '0'.$leavedate[1]; //date
                }

                if(strlen($leavedate[0]) == 1){
                    $leavedate[0] = '0'.$leavedate[0]; //month
                }
                
                if($len == 3){
                    $ldate = $leavedate[2].$leavedate[0].$leavedate[1];
                }else{
                    $appcolor = "#C00";
                }
                $profile->LeaveDate = QDateTime::FromTimestamp(strtotime($ldate));
            }else {
                //$profile->LeaveDate = 'NULL';
            }
            
            if($data[10] != 'NULL'){$profile->AnnualFamilyIncome = $data[10];}
            //$profile->Handicaped = $data[19]; //handicaped type
            //$profile->AdharStatus = $data[21];
            //$profile->FeeConcessionApplicable = $data[28];
            //$profile->FeeConcessionType = $data[29];
             $profile->Save();
        }
      
        $gardian = Gardian::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Gardian()->Of, $ledger->Idledger),
                        QQ::Equal(QQN::Gardian()->GardianCat, 1)                            
                    )
                );
        if(!$gardian){
        //Father gardian details
            $gardian = new Gardian();
            $gardian->Of = $profile->Idprofile;
            if(array_key_exists(11, $data) && $data[11] != "NULL"){$gardian->GardianName = $data[11];}
            $gardian->GardianOccupation = $data[12];
            //$gardian->RelationOfGardian = $data[67];
            $gardian->GardianAddress = $data[13];
            $gardian->GardianContact = $data[14];
            $gardian->GardianEmail = $data[15];
            $gardian->GardianCat = 1;
            $gardian->Save();
        }
        $gardian = Gardian::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Gardian()->Of, $ledger->Idledger),
                        QQ::Equal(QQN::Gardian()->GardianCat, 2)                            
                    )
                );
        if(!$gardian){
        //Mother gardian details
            $gardian = new Gardian();
            $gardian->Of = $profile->Idprofile;
            $gardian->GardianName = $data[16];
            $gardian->GardianOccupation = $data[17];
            //$gardian->RelationOfGardian = $data[89];
            $gardian->GardianAddress = $data[18];
            $gardian->GardianContact = $data[19];
            $gardian->GardianEmail = $data[20];
            $gardian->GardianCat = 2;
            $gardian->Save();
        }
        
        $gardian = Gardian::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Gardian()->Of, $ledger->Idledger),
                        QQ::Equal(QQN::Gardian()->GardianCat, 3)                            
                    )
                );
        if(!$gardian){
        //Local gardian details
            $gardian = new Gardian();
            $gardian->Of =  $profile->Idprofile;
            $gardian->GardianName = $data[21];
            $gardian->GardianAddress = $data[22];
            $gardian->RelationOfGardian = $data[23];
            $gardian->GardianContact = $data[24];
            $gardian->GardianEmail = $data[25];
            $gardian->GardianCat = 3;
            $gardian->Save();
        }
 
    //view upload form
    ?>
       <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($sr++);?></div></td>   
        <td><div align="center"><?php _p($data[0]);?></div></td>
        <td><?php _p($data[1]);?></td>
        <td><?php _p($data[2]);?></td>
        <td><?php _p($data[3]);?></td>
        <td><?php _p($data[4]);?></td>
        <td><?php _p($data[5]);?></td>
        <td><?php _p($data[6]);?></td>
        <td><?php _p($data[7]);?></td>
        <td><?php _p($data[8]);?></td>
        <td><?php _p($data[9]);?></td>
        <td><?php _p($data[10]);?></td>
        <td><?php _p($data[11]);?></td>
        <td><?php _p($data[12]);?></td>
        <td><?php _p($data[13]);?></td>
        <td><?php _p($data[14]);?></td>
        <td><?php _p($data[15]);?></td>
        <td><?php _p($data[16]);?></td>
        <td><?php _p($data[17]);?></td>
        <td><?php _p($data[18]);?></td>
        <td><?php _p($data[19]);?></td>
        <td><?php _p($data[20]);?></td>
        <td><?php _p($data[21]);?></td>
        <td><?php _p($data[22]);?></td>
        <td><?php _p($data[23]);?></td>
        <td><?php _p($data[24]);?></td>
        <td><?php _p($data[25]);?></td>
        <td><?php //_p($data[26]);?></td>
      </tr>
      <?php }else{ ?>
      <tr bgcolor="#FF0000">
        <td><div align="center"><?php _p($sr++);?></div></td>   
        <td><div align="center"><?php _p($data[0]);?></div></td>
        <td><?php _p($data[1]);?></td>
        <td><?php _p($data[2]);?></td>
        <td><?php _p($data[3]);?></td>
        <td><?php _p($data[4]);?></td>
        <td><?php _p($data[5]);?></td>
        <td><?php _p($data[6]);?></td>
        <td><?php _p($data[7]);?></td>
        <td><?php _p($data[7]);?></td>
        <td><?php _p($data[8]);?></td>
        <td><?php _p($data[9]);?></td>
        <td><?php _p($data[10]);?></td>
        <td><?php _p($data[11]);?></td>
        <td><?php _p($data[12]);?></td>
        <td><?php _p($data[13]);?></td>
        <td><?php _p($data[14]);?></td>
        <td><?php _p($data[15]);?></td>
        <td><?php _p($data[16]);?></td>
        <td><?php _p($data[17]);?></td>
        <td><?php _p($data[18]);?></td>
        <td><?php _p($data[19]);?></td>
        <td><?php _p($data[20]);?></td>
        <td><?php _p($data[21]);?></td>
        <td><?php _p($data[22]);?></td>
        <td><?php _p($data[23]);?></td>
        <td><?php _p($data[24]);?></td>
        <td><?php _p($data[25]);?></td>
        <td><?php //_p($data[26]);?></td>
      </tr>
        <?php } } }?>
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
                <form action='student.php' method="post" enctype="multipart/form-data">
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
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>