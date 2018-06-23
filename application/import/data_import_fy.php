<?php
	require('../../qcubed.inc.php');        
        require(__CONFIGURATION__ . '/header.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table To Excel</title>
  <script src="tableToExcel.js"></script>
</head>
<body>
	<div id="titleBar">
		<?php _t('Place Import')?>
	</div>

	<div id="formControls">
    <?php
//Upload File
if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {

        echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
        echo "<h2>Displaying contents:</h2>";
        //readfile($_FILES['filename']['tmp_name']);      
    }
    ?>
     <input type="button" onclick="tableToExcel('taluka', 'talukaTable')" value="Table Export to Excel">
    
    <table width="532" border="1" id="taluka" class="datagrid">       
        <tr>
            <th>Sr.</th>
            <th>PRN NO.</th>
            
            <th>NAME</th>            
            <th>FYPI</th>
            
            <th>Credit - 1</th>
            <th>SPI-1</th>
            
            <th>Credit - 2</th>
            <th>SPI-2</th>
            
            <th>Cumulative Credits Earned</th>
            <th>CPI</th>
            
            <th>Result</th>
        </tr>
      <?php 
      $sr = 1;
      $handle = fopen($_FILES['filename']['tmp_name'], "r");
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {        
    if($data[0] != ""){
        
        $curstatus = CurrentStatus::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, 276),
                QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, 1),
                QQ::Equal(QQN::CurrentStatus()->CalenderYear, 2),
                QQ::Equal(QQN::CurrentStatus()->StudentObject->IdloginObject->Code, $data[0])
            ));
    $color = "";   
    $id = "";
    if($curstatus){
        foreach ($curstatus as $curstat){
            if($data[2] != "--"){
                $curstat->Fypi = $data[2];
                $curstat->FypiCredits = $data[7];                
            }
            
            if($curstat->Semister == 2){  
                if($data[3] != "--"){
                    $curstat->Credit = $data[3];
                }else{
                    
                }
                
                if($data[4] != "--"){
                    $curstat->Spi = $data[4];
                }else{
                    
                }
            }
            
            if($curstat->Semister == 3){
                if($data[5] != "--"){
                    $curstat->Credit = $data[5];
                }else{
                    
                }
                if($data[6] != "--"){
                    $curstat->Spi = $data[6];
                }else{
                    
                }
            }
            
            if($data[7] != "--"){
                $curstat->EarnCredit = $data[7];
            }
            
            if($data[8] != "--"){
                $curstat->Cpi = $data[8];
            }
            
            $curstat->Result = $data[9];
            
            $curstat->Save();            
        }
        $id = $curstat->IdcurrentStatus;
        $color = "#99CCFF";
    }else{
        $id = "";
        $color = "red";
    }
    //view upload form
?>
       <tr bgcolor="<?php _p($color); ?>">
        <td><div align="center"><?php _p($sr++);?></div></td>        
        <td><div ><?php _p($id.'-'.$data[0]);?></div></td>
        
        <td><div ><?php _p($data[1]);?></div></td>
        
        <td><div ><?php _p($data[2]);?></div></td>

        <td><div ><?php _p($data[3]);?></div></td>
        <td><div ><?php _p($data[4]);?></div></td>
        
        <td><div ><?php _p($data[5]);?></div></td>
        <td><div ><?php _p($data[6]);?></div></td>
        
        <td><div ><?php _p($data[7]);?></div></td>
        <td><div ><?php _p($data[8]);?></div></td>
        <td><div ><?php _p($data[9]);?></div></td>
      </tr>
    <?php }} ?>
    </table>
     
   <?php fclose($handle);
   print "Import done";
   }else {    
    ?>
      <table width="594" border="0">
  <tr>
      <td> 
      Upload new csv by browsing to file and clicking on Upload<br />
      <form enctype='multipart/form-data' action='data_import_fy.php' method='post'>
    File name to import:<br />
    <input size='50' type='file' name='filename' class="button" style="width:300px; margin:5px;"><br />
    <input type='submit' name='submit' value='Upload' class="button" style="width:333px; margin:5px;"></form>
    </td>
  </tr>
    </table>
      <?php } ?>
	</div>
</body>
</html>	
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>