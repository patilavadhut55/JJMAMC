<?php

	$strPageTitle = QApplication::Translate('Customer Doc');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php
    if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
      $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
      $filteredData=substr($imageData, strpos($imageData, ",")+1);
      $unencodedData = base64_decode($filteredData);

      if(isset($_GET['id'])){
        $user =  CustomerHasServices::LoadByIdcustomerHasServices($_GET['id']);
          if($user){

          if(!is_dir('../upload/documents/'.$user->CustomerObject->Code)){
            mkdir('../upload/documents/'.$user->CustomerObject->Code, 0777, true);
           }
            $custdocs = CustomerServicesHasDocuments::QueryArray(
                      QQ::AndCondition(
                              QQ::Equal(QQN::CustomerServicesHasDocuments()->CustomerHasServices, $_GET['id']),
                              QQ::Equal(QQN::CustomerServicesHasDocuments()->ServicesHasDocument, $_GET['doc'])));
           foreach ($custdocs as $custdoc){}
          $fp = fopen('../upload/documents/'.$custdoc->CustomerHasServicesObject->CustomerObject->Code.'/'.$custdoc->IdcustomerServicesHasDocuments.'.png', 'wb' );
          
          fwrite( $fp, $unencodedData);
          fclose( $fp );
          QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/registration/customer_doc.php?id='.$_GET['id']);
       }
      }
    }
?>
    <?php $this->RenderBegin() ?>
    <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
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



<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-left: 8%;
    
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    height: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<div class="form-controls">
    <div style=" font-size: 24px; font-family:cursive; width: 100%; margin-bottom: 10px; border-bottom: 4px solid #84d0bf; padding: 5px;" >Document List</div>
    <?php 
        $sr = 1; 
           if(isset($_GET['id'])){
                $custser = CustomerHasServices::LoadByIdcustomerHasServices($_GET['id']);
                if($custser){
                $docs = ServicesHasDocument::LoadArrayByService($custser->Service);
                 foreach ($docs as $doc){
    ?>
        <div style="padding-top: 5px; padding-left: 5px; border-bottom: 1px solid #73879C;  margin-bottom: 5px; " >
             <div style="float: left; width: 2%;" ><?php $this->chkupload[$doc->IdservicesHasDocument]->Render(); ?></div>
             <div style="float: left; width: 30%;" ><?php _p($sr++.') '.$doc->DocumentObject->Name); ?></div>
             <div style="float: left; width: 38%;"><?php $this->txtDesc[$doc->IdservicesHasDocument]->Render(); ?></div>
             <div style="float: left; width: 10%;" ><?php $this->btnSelect[$doc->IdservicesHasDocument]->Render(); ?></div>
             <?php if(isset($_GET['doc'])) if($_GET['doc'] == $doc->IdservicesHasDocument) { ?><div style="float: left; width: 10%;"  id="myBtn"><?php $this->btnUpload[$doc->IdservicesHasDocument]->Render(); ?></div><?php } ?>
         
            <div style="clear: both;"></div>
            
        </div>
                 <?php }}} ?>
    <div style="clear: both"></div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="background-color: white; overflow: auto;">
       
      <span class="close">&times;</span>
     
      <div style="margin-top:50px;">
        
      <div >
          <?php if(isset($_GET['doc'])){ ?>
               <a href="../upload/delete.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($_GET['doc']); ?>"><div class="btn btn-success pull-right" >Delete</div></a>
          <?php } ?>
      </div>
          <div>
              <div class="col-md-3">
               <div style="padding: 5px;  border-radius: 5px; background-color:lightgray;  margin: 5px; width: 130px; border: #000 solid thin">
                     <video id="video" height="99" width="100"  autoplay style="-webkit-transform:rotate(0deg); margin:14px 12px;"></video>
                    <div class="btn btn-success" id="snap"  style="width:110px; margin-top: 10px;" onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/registration/customer_doc.php?id=<?php _p($_GET['id']); ?>&doc=<?php _P($_GET['doc']);?>'">Scan</div>
                </div>
                     <input  name="imgupload"  type="file" id="selectedFile" style="display: none;" />
                        <input id="output" class="btn btn-success" type="button" value="Browse..." onclick="document.getElementById('selectedFile').click();" />
                <div style="float: right; margin-right: 20%;">
                         <?php $this->btnDocupload->Render(); ?>
                </div>
                        <div style="clear: both"></div>
              </div>
               <div class="col-md-9">
                  <h3 style="color: #000; border-bottom: 1px solid #000;">Scanning Preview</h3>
                 <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 30px 0px 0px 15px;
                <?php   if(isset($_GET['id']) && isset($_GET['doc'])){
                        $docs = CustomerServicesHasDocuments::QueryArray(
                                       QQ::AndCondition(
                                               QQ::Equal(QQN::CustomerServicesHasDocuments()->CustomerHasServices, $_GET['id']),
                                               QQ::Equal(QQN::CustomerServicesHasDocuments()->ServicesHasDocument, $_GET['doc'])));
                        if($docs){
                            foreach ($docs as $doc){}
                  ?>
                        background-image: url(../upload/documents/<?php _p($doc->CustomerHasServicesObject->CustomerObject->Code.'/'.$doc->IdcustomerServicesHasDocuments.'.png'); ?>);
                        background-repeat: no-repeat;"

                 width="640" height="480" ></canvas>
                  <?php }} ?>
                
               </div>
                <div style="clear: both"></div>
                </div>
          </div>
     
      
  </div>
               <div style="clear: both"></div>            
  </div>
 
 
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
      
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            video.src = window.URL.createObjectURL(stream);
            video.play();
        });
    }
        // Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 720);
});    


 document.getElementById("snap").addEventListener("click", function() {
            var canvasData = canvas.toDataURL("image/png");
            var ajax = new XMLHttpRequest();
            var code = window.location.search.replace( "?id=", "" );
            ajax.open("POST",'customer_doc.php?id='+code,false);
            ajax.onreadystatechange = function() {
                console.log(ajax.responseText);
            }
            ajax.setRequestHeader('Content-Type', 'application/upload');
            ajax.send("imgData="+canvasData);
        });
</script>
    <?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>