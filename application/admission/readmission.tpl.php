<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
  $unencodedData = base64_decode($filteredData);
  
  $fp = fopen('../upload/photo/'.$_GET['mem'].'.png', 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
}

?>
<style type="text/css">
.snap {
    font-family:Calibri;
    width: 80;
    padding: 5px;
    border-radius: 3px;
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}
.snap:hover{
    background-color: #ec971f;
    border-color: #d58512;

 }
</style>

<script>
function showHint(str) {
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "summary.php?id=" + str, true);
        xmlhttp.send();
}
</script>
<script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
</script>

<?php $this->RenderBegin(); ?>
<div class="form-controls" >
    <div style=" margin-bottom: 10px; ">
        <div style="padding: 1px;" class="col-md-8">
            <div class="pull-left" style="width: 88%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
            <div class="pull-left" style="margin-top: 4px; margin-left: 5px;"><?php $this->btnSearch->Render(); ?></div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div style="clear: both;"></div>
    <?php if(isset($_GET['mem'])){?>
    <div >
        <div style="border: 1px solid lightgray;  " class="pull-left col-md-7" id="txtHint"><?php ?></div>
        <div style="border: 1px solid lightgray; " class="pull-left col-md-5">
            
             <?php if($_SESSION['role'] == 383 || $_SESSION['role'] == 444 || $_SESSION['role'] == 309  ){ ?><div class="btn btn-success" id="snap" style="width:110px; margin-top: 10px;" >Snap</div><?php } ?>
            <?php if(isset($_GET['mem'])){ ?>
            <table class="datagrid">
                <tr>
                    <th>Academics</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Admission Status</th>
                    <th></th>
                </tr>
                <?php
                    $profiles = Profile::LoadByIdprofile($_GET['mem']);
                    $currents = CurrentStatus::LoadArrayByStudent($_GET['mem']);
                    foreach ($currents as $current){
                ?>
                <tr>
                    
                    <td><?php 
                    if($current->Semister == 1){
                        _p($profiles->CalenderYearObject);
                    }
                    else{
                        _p($current->CalenderYearObject);
                    }
                        ?></td>
                    <td><?php _p($current->RoleObject->ParrentObject->ShortName); ?></td>
                    <td><?php _p($current->SemisterObject); ?></td>
                    <td><?php if($_SESSION['role'] == 383 || $_SESSION['role'] == 444 || $_SESSION['role'] == 309  ){ $this->lstStatus[$current->IdcurrentStatus]->Render(); }else { _p($this->lstStatus[$current->IdcurrentStatus]->SelectedName); } ?></td>
                    <td><?php if($_SESSION['role'] == 383 || $_SESSION['role'] == 444 || $_SESSION['role'] == 309  ){ $this->btnDel[$current->IdcurrentStatus]->Render(); } ?></td>                  
                </tr>
                <?php } ?>
                <?php if($_SESSION['role'] == 383 || $_SESSION['role'] == 444 || $_SESSION['role'] == 309  ){ //admission clerk ?> 
                <tr>
                    <td><?php $this->lstCalup->Render(); ?></td>
                    <td><?php $this->lstTeachDeptup->Render(); ?></td>
                    <td><?php $this->lstSemup->Render(); ?></td>
                    <td><?php $this->lstAdmissionStatus->Render(); ?></td>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
            <div style="clear: both;"></div>
            <?php if($_SESSION['role'] == 383 || $_SESSION['role'] == 444 || $_SESSION['role'] == 309  ){ //admission clerk ?> 
            <div class="pull-right" style="margin-top: -10px;"><?php $this->btnUpgrade->Render();?></div>            
            <?php } ?>
            
            <?php  //verification clerk?>
            <div class="pull-right" style="margin-top: -10px;">
                <?php $this->btnApplyFees->Render();?>
            </div>
            
            <div class="pull-right" style="margin-top: -10px;">                
               <?php $this->lstConcessionArray->Render(); ?>                
            </div>
             <div class="pull-left" style="margin-top: -10px;">                
               <?php $this->lstAdmission->Render(); ?>                
            </div>
            <?php  ?>
            <?php 
            }
            ?>
        </div>
        <div style="clear: both;"></div>
    </div>
    <?php }?>
</div>
<script>
        
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 100, 120);
});    
   
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            video.src = window.URL.createObjectURL(stream);
            video.play();
        });
    }

 document.getElementById("snap").addEventListener("click", function() {
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var code = window.location.search.replace( "?mem=", "" );
            //alert(code);
            ajax.open("POST",'readmission.php?mem='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
 

</script>


<?php $this->RenderEnd() ?>
    <?php //require(__CONFIGURATION__ .'/footer.inc.php');?>