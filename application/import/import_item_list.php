<?php
        require('../../qcubed.inc.php');
        require(__CONFIGURATION__ . '/header.inc.php');
        if(isset($_GET['sem'])){
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
            $sem = StockGrp::LoadByIdstockGrp($_GET['sem']);
           // _t('<h3>'.$academic->Name." <i class='fa fa-arrow-right '></i> ".delete_all_between("[", "]", $role->Name)." <i class='fa fa-arrow-right '></i> ".$sem->Name.'</h3>');
            
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
                $chkitem = Ledger::LoadByCode(trim($data[0]));
                if($chkitem){
                    $flag = 1;
                }
                
                $chkdisplayname = LedgerDetails::LoadByDisplayName(trim($data[1]));
                if($chkdisplayname){
                    $flag = 1;
                }
                
                if($flag == 0){
                        //Save Ledger
                        $ledger = new Ledger();
//                        $set = Settings::LoadByName("Item");
//                        $ledger->Code = "I".$set->Option;
//                        $set->Option = $set->Option + 1;
//                        $set->Save();
                        $ledger->Code = trim($data[0]);
                        $ledger->Name = trim($data[1]);
                        $ledger->Grp = getsettingvalue('store_asset');
                        $ledger->Save();
                        
                        //save profile
                        $legderdetails  = LedgerDetails::LoadByIdledgerDetails($ledger->Idledger);
                        if(!$legderdetails){
                            $legderdetails = new LedgerDetails();
                            $legderdetails->IdledgerDetails = $ledger->Idledger;
                           
                            $legderdetails->DisplayName = trim($data[1]);
                            $legderdetails->Mrp = trim($data[2]);
                            $legderdetails->Unit = 1;
                            $legderdetails->StockGrp = $_GET['sem'];
                            $legderdetails->Save();
                        
                        
                        } 
                    for($i = 0; $i <= 2; $i++){                        
                        
                        
                        if(isset($data[$i])){
                            if(array_key_exists($sr, $curows))
                                $curows[$sr] = $curows[$sr].','.$data[$i];
                            else 
                                $curows[$sr] = $data[$i];
                        }
                    }
                }else{
                    for($i = 0; $i <= 3; $i++){
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
        <th width="23"><div align="center">Code</div></th>
        <th width="23"><div align="center">Name</div></th>        
        <th width="23"><div align="center">Price</div></th>
        
    </tr>
      <?php 
      $curowsr = 1; 
      foreach ($curows as $key => $curow){ ?>
      <tr bgcolor="#99CCFF">
        <td><div align="center"><?php _p($curowsr++);?></div></td>   
        <?php 
        $data = explode(',', $curow);
        for($i=0; $i<=2; $i++){ ?>
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
        <th width="23"><div align="center">Code</div></th>        
        <th width="23"><div align="center">Name</div></th>        
        <th width="23"><div align="center">Price</div></th>
       
      </tr>
      <?php 
      $errowsr = 1; 
      foreach ($errows as $key => $errow){ ?>
      <tr bgcolor="#FF0000">
        <td><div align="center"><?php _p($errowsr++);?></div></td>   
        <?php 
            $data = explode(',', $errow);
            for($i=0; $i<=2; $i++){ 
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
                <a href="item_import.csv"> Download .CSV To Upload File</a>
            </td>
        </tr>
        <tr>
            <td>
                <p>Upload new csv by choose file and clicking on Upload</p>
                <form action='import_item_list.php?sem=<?php _p($_GET['sem']); ?>' method="post" enctype="multipart/form-data">
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