<?php
    $strPageTitle = QApplication::Translate('Time Table');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<script language="javascript">
	function Clickheretoprint(){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById("formprint").innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close(); "><style type="text/css">@import url("<?php  _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__);  ?>/table.css");#hide{display: none !important;}</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script>
<h1>Time Table</h1>
<?php $this->RenderBegin() ?>
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/jquery.dialogbox.css">

    <div class="pull-left" style="margin-bottom: 5px;">
        <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
        </a>
    </div>
<div class="form-controls" id="formprint">
    <table class="datagrid " style='margin-top: 10px; table-layout: fixed'  border="1" >
        <?php
            $weekdays = array(1=>'Monday',2=>'Tuesday', 3=>'Wednesday',4=>'Thursday',5=>'Friday',6=>'Saturday');
        ?>
        <tr>
            <th ><div align="center">Time/Day</div></th>
            <?php foreach($weekdays as $key => $value){ ?>
            <th><div align="center"><?php _p($value);?></div></th>
            <?php }?>
        </tr>
        <?php 
           if(isset($_GET['dept'])){
            $times = ProgramHasTimeslot::LoadArrayByRole($_GET['dept']);
            foreach ($times as $time){
        ?>
        <tr>
            <td><?php _p(date('h:ia', mktime($time->TimeSlotObject->From->Hour,$time->TimeSlotObject->From->Minute,0,1,1,2000))." - ".date('h:ia', mktime($time->TimeSlotObject->To->Hour,$time->TimeSlotObject->To->Minute,0,1,1,2000)));  ?></td>
            <?php
                if($time->TimeSlot != NULL){
                if($time->TimeSlotObject->Name != 'Lunch Break'){
               foreach($weekdays as $key => $value){
              ?>

            <td valign='bottom'>
                <?php
                    $timetables = Timetable::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Timetable()->TimeSlot, $time->TimeSlot),
                                    QQ::Equal(QQN::Timetable()->Day, $key),
                                    QQ::Equal(QQN::Timetable()->YearlySubjectObject->Course, $_GET['dept']),
                                    QQ::Equal(QQN::Timetable()->YearlySubjectObject->Semester, $_GET['sem'])
                                ));
                    foreach ($timetables as $timetable){
                ?>
                
                <div><?php  _p($timetable->YearlySubjectObject->SubjectObject->Name);  ?></div>
                <div style="margin-left: 20px;"><?php  if($timetable->Attendant != NULL) _p(' '.$timetable->AttendantObject->IdloginObject->Name); ?></div>
                <div style="margin-left: 20px; "><?php   if($timetable->Note != NULL)  _p('Note: '.$timetable->Note); ?></div>
                <div style="float: left; cursor: pointer;" valign='bottom'id="hide"><?php if($timetables) $this->lbledit[$timetable->Idtimetable]->Render();    ?></div>
                <?php } ?>
                <div valign='bottom' id="hide">
                    <div style="float: right; cursor: pointer;"><?php if(!$timetables || $timetables) $this->lblAdd[$time->TimeSlot.$key]->Render();  ?></div>
                    <div style="clear: both"></div>
                </div>
                <div style="clear: both"></div>
            </td>
                <?php }}else{?>
                        
                    <td colspan="6" align="center">
                        <?php _p('Lunch Break'); ?>
                        </td>

                       
                         <?php } ?>
        </tr>
           <?php  }}}?>
    </table>
    <div style="clear: both"></div>
</div>
  <div style="clear: both"></div>
<div style="float: right;"><?php //$this->btnCancel->Render();  ?></div>
<?php $this->RenderEnd() ?>

<script src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/dialogjquery.js"></script>
<script src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/jquery.dialogBox_1.js"></script>
<script type="text/javascript">
	function showdialog(id){  
            //alert('hello');
            //load external page or url dialogBox
          
            $('#iframe-dialogBox').dialogBox({
                    hasClose: true,
                    hasMask: true,                    
                    effect: 'flip-vertical',
                    title: ' ',
                    content: '<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__);?>/timetable/timetable_add.php?id='+id
            });
           
        }
        
</script>  


<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
  