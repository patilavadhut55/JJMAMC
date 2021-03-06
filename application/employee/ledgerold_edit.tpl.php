	
<?php
    $strPageTitle = QApplication::Translate('Login');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin(); ?>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    margin-left: 5%;
    margin-top: 5%;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
   
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
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
/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
/* The Close Button */
.close {
    color: white;
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

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>

<h1>Employee</h1>
        <?php if(isset($_GET['emp'])){
            $ledger = Ledger::LoadByIdledger($_GET['emp']);
            if($ledger){
                ?><div class="pull-left slideup" style="margin-left: 150px;"><h3><?php _p($ledger->Name); ?></h3></div>
        <?php  }} ?> 
                
            <div class="pull-right slideup">
                <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
            </div>
            <div class="clearfix"></div>    
	<?php 
            if(isset($_GET['new']) || isset($_GET['emp'])){
        ?>
    <div class="tabbable-panel">
        <div class="tabbable-line ">
                <ul class="nav nav-tabs ">
                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?> ">
                        <a href="#0" data-toggle="tab" id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Ledger')?>
                        </a>
                    </li>
                    
                    <?php if(isset($_GET['emp'])){ ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ ?>active<?php } ?> ">
                            <a href="#1" data-toggle="tab" id="link2">
                            <i class="fa fa-map-marker fa-fw"></i><?php _t('Details')?>
                            </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?> ">
                            <a href="#2" data-toggle="tab" aria-expanded="true" id="link3">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Login')?>
                            </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?> ">
                            <a href="#3" data-toggle="tab" aria-expanded="true" id="link4">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Roles')?>
                            </a>
                    </li>
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 4){ ?>active<?php } ?> ">
                        <a href="#4" data-toggle="tab" aria-expanded="true" id="link5">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Qualified Course'); ?>
                        </a>
                    </li> 
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php } ?> ">
                        <a href="#5" data-toggle="tab" aria-expanded="true" id="link6">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Qualification Details'); ?>
                        </a>
                    </li>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 6){ ?>active<?php } ?> ">
                        <a href="#6" data-toggle="tab" aria-expanded="true" id="link7">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Documents  '); ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                    <?php 
                    if(isset($_GET['new']) || isset($_GET['emp']) ){
                    ?>
                    <div class="form-controls">
                        <?php $this->txtCode->RenderWithName(); ?>
                        <?php $this->txtName->RenderWithName(); ?>
                        <?php $this->lstGrp->RenderWithName(); ?>
                                
                        <div class="form-actions">
                            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 1){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <?php $this->txtTitle->RenderWithName(); ?>
                            <?php $this->txtAddressLine1->RenderWithName(); ?>
                            <?php $this->txtAddressLine2->RenderWithName(); ?>
                            <?php $this->calDob->RenderWithName(); ?>
                            <?php $this->txtCountry->RenderWithName(); ?>
                            <?php $this->txtState->RenderWithName(); ?>
                            <?php $this->txtDistrict->RenderWithName(); ?>
                            <?php $this->txtTaluka->RenderWithName(); ?>
                            <?php $this->txtCity->RenderWithName(); ?>
                            <?php $this->txtCasteCat->RenderWithName(); ?>
                            <?php $this->txtCaste->RenderWithName(); ?>
                            <?php $this->txtZipCode->RenderWithName(); ?>
                            <?php $this->txtContact1->RenderWithName(); ?>
                            <?php $this->txtContact2->RenderWithName(); ?>
                            <?php $this->txtWeb->RenderWithName(); ?>
                            <?php $this->txtEmail1->RenderWithName(); ?>
                            <?php $this->txtEmail2->RenderWithName(); ?>
                            <?php //$this->txtTinSalesTaxNo->RenderWithName(); ?>
                            <?php //$this->txtCstNo->RenderWithName(); ?>
                            
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnUpdate->Render(); ?></div>
                                <div class="form-delete"><?php $this->btnRemove->Render(); ?></div>
                            </div>
                        </div>    
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php } ?>" id="2">
                        <div class="form-controls">
                            <?php $this->txtUserName->RenderWithName(); ?>
                            <?php $this->txtPassword->RenderWithName(); ?>   
                            <?php $this->txtConfirm->RenderWithName(); ?>
                            <?php $this->chkIsEnabled->RenderWithName();?>
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnLogin->Render(); ?></div>
                                <div class="form-delete"><?php //$this->btnRemove->Render(); ?></div>
                            </div>   
                        </div>
                    </div> 
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>" id="3">
                        <div class="form-controls">
                            <?php $this->dtgRole->Render(); ?>
                            <div class="form-actions">
                                <div class="col-md-4"><?php $this->lstDepartment->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 10px;"><?php $this->txtRole->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;width: 150px;">Active<?php $this->chkActive->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 25px;"><?php $this->btnRoleSave->Render(); ?></div>
                                <div class="pull-right" style="margin-left: 10px;"><?php $this->btnRoleDelete->Render(); ?></div>
                                <div style="clear: both;"></div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>                     
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 4){ ?>active<?php } ?>" id="4">
                        <div class="form-controls">
                            <table class="datagrid">
                                <tr>
                                    <th width="30"></th>
                                    <th width="30">Sr.</th>
                                    <th>Course Name</th>                                    
                                    <th></th>
                                </tr>
                                <?php 
                                if(isset($_GET['emp'])){
                                    $subs = ProfileHasQualifiedsubject::LoadArrayByProfile($_GET['emp']);
                                    $sr = 1;
                                    foreach ($subs as $sub){
                                ?>
                                <tr>
                                    <td><?php $this->btnSubRemove[$sub->IdprofileHasQualifiedsubject]->Render(); ?></td>
                                    <td><?php _p($sr++); ?></td>
                                    <td><?php _p($sub->SubjectObject); ?></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><?php $this->lstSubject->Render(); ?></td>
                                    <td><?php $this->btnAddSub->Render(); ?></td>
                                </tr>
                                <?php } ?>
                                
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php } ?>" id="5">
                    <div class="form-controls">
                        <table class="datagrid">
                            <tr>
                                <th></th>
                                <th>Qualification</th>
                                <th>Institute</th>
                                <th>Passing Year</th>
                                <th>Percentage</th>
                                <th></th>
                            </tr>
                            <tr>
                             <?php
                            if(isset($_GET['emp'])){
                               $edus = EducationDetails::LoadArrayByStudent($_GET['emp']);
                               foreach ($edus as $edu){      
                             ?>
                            <tr>
                                <td><?php $this->lbldelete1[$edu->IdeducationDetails]->Render(); ?></td>
                                <td><?php _p($edu->PreQualificationObject->Name); ?></td>
                                <td><?php _p($edu->Institute); ?></td>
                                <td><?php _p($edu->PassingYear); ?></td>
                                <td><?php _p($edu->Percentage."%"); ?></td>                                        
                                <td> </td>
                            </tr>
                               <?php }}?>
                            <tr>
                                <td></td>
                                <td> <?php $this->txtPreQual->Render(); ?></td>
                                <td> <?php $this->txtInstitute->Render(); ?></td>
                                <td><?php $this->txtPassYear->Render(); ?></td>
                                <td width="10%"> <?php $this->txtSub1Mrk->Render(); ?></td>                                        
                                <td> <div class="form-save"><?php $this->btnSave4->Render(); ?></div></td>
                            </tr>
                        </table>
                    </div>
                </div> 
                <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 6){ ?>active<?php } ?>" id="6">
                      <!--To add Photo, Sign and Documents-->
                    <div class="form-controls">
                       
                            <div class="col-sm-12">                               
                                <?php 
                                    $scancode = Settings::LoadByName("Scan");
                                    $appdocs = AppDocs::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::AppDocs()->Member,$_GET['emp'])));
                                    if($appdocs){
                                    foreach ($appdocs as $appdoc){
                                ?>
                                <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                                <div class="col-sm-6" style="padding-top:10px;">
                                    <?php $this->lbldelete[$appdoc->IdappDocs]->Render();?>    
                                    <?php _p($appdoc->DocumentObject); ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php if($appdoc->Scans != NULL){ ?>
                                        <div style="float:left;">
                                            <?php  
                                            $sr = 1 ; $scans = explode(",", $appdoc->Scans); 
                                            if(key_exists(0, $scans)){ foreach ($scans as $scan){  ?> <?php 
                                            $css = 0;
                                            $img = '../upload/documents/A'.$appdoc->MemberObject->IdloginObject->Code.'/'.(int)$scan.'.png'; 
                                            if(file_exists ($img)){
                                            ?>
                                            <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/ledgerdoc.php?emp=<?php _p($appdoc->Member); ?>&doc=<?php _p($scan); ?>&flg=1" target="scanpage"><div class="btn btn-success"><?php _p($sr++);   ?></div></a>
                                            <?php }else{ ?>
                                            <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/ledgerdoc.php?emp=<?php _p($appdoc->Member); ?>&doc=<?php _p($scan); ?>&flg=1" target="scanpage"><div class="btn btn-default"><?php _p($sr++);   ?></div></a>
                                            <?php } ?>  

                                            <?php } }  ?>
                                        </div>
                                    <?php } ?>    
                                    &nbsp;
<!--                                    <a href="<?php //_p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/employee/ledger_edit.php?emp=<?php //_p($_GET['emp']); ?>&docid=<?php //if($appdoc) _p($appdoc->IdappDocs); ?>&code=<?php _p($scancode->Option);?>&doc=<?php //_p($scancode->Option);?>&tab=6">-->
                                        <div class="btn btn-success" id="myBtn">Add Doc</div>
<!--                                    </a>-->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                                <?php } ?> 

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="background-color: white; overflow: auto;">
      <div  style="float: right;">
      <input  name="imgupload"  type="file" id="selectedFile" style="display: none;" />
       Choose File To Upload
          <input id="output" class="btn btn-success" type="button" value="Browse..." onclick="document.getElementById('selectedFile').click();" />
     <div style="float: right; margin-right: 20%;">
                         <?php $this->btnDocupload->Render(); ?>
                </div>
      </div>
       <div style="padding: 5px;  border-radius: 5px; background-color:lightgray; float:left; margin: 5px; width: 130px; border: #000 solid thin">
             <video id="video" height="99" width="100"  autoplay style="-webkit-transform:rotate(0deg); margin:14px 12px;"></video>
            <div class="btn btn-success" id="snap"  style="width:110px; margin-top: 10px;">Scan</div>
        </div>
        <div style="clear: both"></div>
        <h3 style="color: #FFF; border-bottom: 1px solid #FFF;">Scanning Preview</h3>
        <div style="background-color: lightblue;">
            <canvas id="canvas" style="-webkit-transform:rotate(0deg); margin: 80px 0px 0px 15px;
                     background-image: url(../upload/documents/<?php_p($appdoc->MemberObject->IdloginObject->Code.'png'); ?>);
                background-repeat: no-repeat;background-size: 100%;width: 650px;"
      
         height="900" ></canvas>
        </div>
     
             
        
      
    
  </div>
               <div style="clear: both"></div>            
  </div>
                                
<!--                                 <iframe name="scanpage" id="scanpage" style="border: 0px; border-radius: 5px; padding: 0 2px; overflow: hidden;"
                                        src="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/upload/cam/ledgerdoc.php?emp=<?php if($appdoc) _p($_GET['emp']); if(isset($_GET['doc'])){_p("&doc=".$_GET['doc']);} ?>&flg1=1" width="100%" height="1000">
                                    </iframe>-->
                                 <?php } ?>
                            <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">
                                <div class="col-sm-8"><?php $this->lstDocs->Render(); ?></div>
                                <div class="col-sm-2"><?php $this->btnAdd->Render(); ?></div>    
                                <div class="clearfix"></div>
                            </div>
                          </div>    
                    <div class="clearfix"></div>
                    </div>
                </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>
           <?php } ?>


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
	context.drawImage(video, 0, 0, 120, 150);
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