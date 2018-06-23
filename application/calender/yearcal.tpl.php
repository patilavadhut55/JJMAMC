<?php
//require('../../../qcubed.inc.php');
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>
<?php 
    $Academic = CalenderYear::LoadByIdcalenderYear($_GET['yearid']);
    $year = $this->lblFromYear->Text;
    $fmon = $this->fmon->Text;
    $tmon = $this->tmon->Text;
    $start = $fmon;
    $end = $start + (12-$start);
?>
<div id="titleBar" style = width:150px;>
  <div><?php $this->lstAcade->Render(); ?></div>
</div>
<script language="javascript">
    function Clickheretoprint()
    {
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
          disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
      var content_vlue = document.getElementById("formprint").innerHTML;

      var docprint=window.open("","",disp_setting);
       docprint.document.open();
       docprint.document.write('</head><body onload="window.print(); window.close();"><center>');
       docprint.document.write(content_vlue);
       docprint.document.write('</center></body></html>');
       docprint.document.close();
    }
</script>  

<style>



table {
        border-collapse: collapse;
        border-spacing: .3em;
        clear: both;
}
form {
        margin: 1em 0;
        padding: 0;
}

form label {
        cursor: pointer;
        margin: 0;
        padding: .3em;
}



.agenda{
    width: 98%; border: 1px #DFDFDF solid; padding: 10px; margin-bottom: 3px; line-height: 25px;
}

#cell{
    width: 13%; float: left; border: 1px #FFF solid; text-align: center; padding: 0px 2px 0px 2px; 
    line-height: 25px;
}

#mcellh{
    width: 13%; float: left; border-top: 1px #CCCCCC solid; border-bottom: 1px #CCCCCC solid; text-align: center; 
    padding: 5px; background-color: #ECECEC; border-left: 1px #ECECEC solid; border-right: 1px #ECECEC solid;
}
#mycell1{    
    //float: left;
    //border: none;
    position: relative; 
}

#mycell1 .addevent{    
    display: block;
}

#mcell{
    width: 13%; float: left; border: 1px #DFDFDF solid; text-align: left;
    height: 150px; padding: 5px; position: relative; 
}

#mcell:hover .addevent{
    
    display: block;
}

#bcell{
    width: 70px; height: 70px; float: left; border: 1px #FFF solid; text-align: left; padding: 1px;
}

.eventday{
    color: #FFF; 
    border-radius: 30px; 
    font-weight: 800; 
    margin: 0 12px;
}

.currentday{
    background-color: #0099FF;
     
    
    font-weight: 800; 
    margin: 0 12px;
    padding: 5px;
}

.mcurrentday{
    float: left;
    padding: 4px;
    background-color: #0099FF;
    color: #FFF; 
    border-radius: 5px;
    margin: -4px;
}

.addevent{
    padding: 2px;
    color: #FFF; 
    float: right;
    position: absolute;
    bottom: 1px; right: 1px;
    display: none;
    margin: -8px -10px;
}

.eventdata{
    border: 1px solid lightgray;    
    border-radius: 5px;
    padding: 2px;
    font-size: 14px;
    color: #FFF;
    margin: 2px 0;
    width: 100%;
    font-weight: 700;
    cursor: pointer;
    text-shadow: 0 1px 0 #878e98;
}
/* Tooltip container */
.mytooltip {
    position: relative;
    display: inline-block;
    width: 100%;
    //border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.mytooltip .tooltiptext {
    visibility: hidden;
    min-width: 220px;
    background-color: #DFDFDF;
    color: #000;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    
    margin-top: 10px;
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

.mytooltip .tooltiptext::after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 10%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent #DFDFDF transparent;
}

/* Show the tooltip text when you mouse over the tooltip container */
.mytooltip:hover .tooltiptext {
    visibility: visible;
}
.calmonth{
    cursor: pointer;
}
.calmonth:hover{
    border: 1px solid #0099cc;
    
}

div#formControls {
    padding: 20px 10px 10px 20px;
    margin: 10px 10px 10px 10px;
   
    //width: 95%;
    color: #000;
    background-color: #FFFFFF;
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
element.style {
    float: left;
    margin: 5px;
    width: 780px;
    font-size: 18px;
}

#rtitleBar {
    float: right;
    border-radius: 30px 30px 30px 30px;
    margin: -10px -10px;
    padding: 10px 5px 10px 50px;
    margin-right:40px;
    background:#0099cc;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e570e7', endColorstr='#a849a3',GradientType=0 );
}
#rtitleBar div {
    width: 100px;
    float: left;
    margin-bottom: 10px;
    color:white;
    font-size: 15px;
    font-family: serif;
}
</style>

      <div id="titleBar" style="clear: both; margin-top: 10px;margin-left:40px;">
          <div style="float: left;margin-left: 10px; width: 400px;font-size: 14px;">
                  <?php if (isset($_GET['agenda'])) {
            ?>
            <a href="javascript:Clickheretoprint()" style="position: absolute;float: left;">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
            </a>
        <?php } ?>
              </div>
            <?php if(!isset($_GET['agenda'])){ ?>
                <?php _p(' ');$this->lblFrom->Render();_p(' '); ?> - <?php _p(' ');$this->lblTo->Render();_p(' '); ?>
            <?php }else{ ?>
                <div style="float: left;margin-left:80px;"><?php $this->calFrom->Render(); ?> - <?php $this->calTo->Render(); ?></div>
                <div style="float: left;margin-left: 10px; width: 400px;font-size: 14px;">Status &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if($_GET['agenda'] == 2){ ?>
                        <?php _p($this->lstStatus->Render()); ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

<div id="rtitleBar" >        
    <?php if (isset($_GET['course']) && isset($_GET['yearsubid'])) { ?>
        <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&course=<?php _p($_GET['course']); ?>&yearsubid=<?php _p($_GET['yearsubid']); ?><?php
        if (isset($_GET['staff'])) {
            _p('&staff=' . $_GET['staff']);
        }
        ?>
           <?php
           if (isset($_GET['subagenda'])) {
               _p('&subagenda=' . $_GET['subagenda']);
           }
           ?>"><div>YEAR</div></a>
        <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&month=<?php _p($fmon); ?>&course=<?php _p($_GET['course']); ?>&yearsubid=<?php _p($_GET['yearsubid']); ?><?php
       if (isset($_GET['staff'])) {
           _p('&staff=' . $_GET['staff']);
       }
       ?><?php
        if (isset($_GET['subagenda'])) {
            _p('&subagenda=' . $_GET['subagenda']);
        }
        ?>&year=<?php _p($year); ?>">
            <div>MONTH</div></a>
        <?php if (isset($_GET['month'])) { ?>
    <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&agenda=2&from=<?php _p(date("Ymd",  strtotime($Academic->From))); ?>&to=<?php _p(date("Ymd",  strtotime($Academic->To))); ?>&yearsubid=<?php _p($_GET['yearsubid']); ?>&course=<?php _p($_GET['course']); ?>&month=<?php _p($_GET['month']); ?><?php
            if (isset($_GET['staff'])) {
                _p('&staff=' . $_GET['staff']);
            }
            ?><?php
        if (isset($_GET['subagenda'])) {
            _p('&subagenda=' . $_GET['subagenda']);
        }
            ?>"><div>AGENDA</div></a>       
        <?php } else { ?>
            <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&agenda=2&from=<?php _p(date("Ymd",  strtotime($Academic->From))); ?>&to=<?php _p(date("Ymd",  strtotime($Academic->To))); ?>&yearsubid=<?php _p($_GET['yearsubid']); ?>&course=<?php _p($_GET['course']); ?>&month=<?php _p(date('m')); ?>&year=<?php _p($_GET['year']); ?><?php
        if (isset($_GET['staff'])) {
            _p('&staff=' . $_GET['staff']);
        }
            ?><?php
        if (isset($_GET['subagenda'])) {
            _p('&subagenda=' . $_GET['subagenda']);
        }
        ?>"><div>AGENDA</div></a>
    <?php } ?>        
<?php } else { ?>
        <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?><?php
        if (isset($_GET['staffatten'])) {
            _p('&staffatten=' . $_GET['staffatten']);
        }
        ?>"><div>YEAR</div></a>
        <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&month=<?php _p($fmon); ?><?php
        if (isset($_GET['staffatten'])) {
            _p('&staffatten=' . $_GET['staffatten']);
        }
        ?>&year=<?php _p($year); ?>"><div>MONTH</div></a>
        <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&agenda=1&from=<?php _p(date("Ymd",  strtotime($Academic->From))); ?>&to=<?php _p(date("Ymd",  strtotime($Academic->To))); ?><?php
        if (isset($_GET['staffatten'])) {
            _p('&staffatten=' . $_GET['staffatten']);
        }
        ?>&year=<?php _p($year); ?>"><div>AGENDA</div></a>
       <?php } ?>
</div>
    <div class="form-controls">

    <div id="formprint">
        
<?php 
    if(isset($_GET['yearid'])){
        
        $calyear = CalenderYear::LoadByIdcalenderYear($_GET['yearid']);
        $start = date("m",strtotime($calyear->From));
        $end = $start + (12-$start);
         if(isset($_GET['agenda'])){ 
             $events = Event::QueryArray(
            QQ::Andcondition(
                    QQ::Equal(QQN::Event()->SubOf, NULL),
                    QQ::LessOrEqual(QQN::Event()->Fromdate, Date('Ymd235959', strtotime($_GET['to']))),
                    QQ::GreaterOrEqual(QQN::Event()->Todate, Date('Ymd000000', strtotime($_GET['from'])))
                    ),
                    QQ::OrderBy(QQN::Event()->Fromdate)
            );
       foreach ($events as $event){
    ?>
        <div id="mcell" style="float: none; width: auto; height: auto; margin: 2px; line-height: 20px;">
            <div style="border-left: 5px solid <?php _p($event->EventCatObject->Color); ?>; padding: 5px;">
                <table width="800">
                    <tr>
                        <td width="100"><?php _p(date('d M Y', strtotime($event->Fromdate))); ?> </td>
                        <td width="300"><?php _p($event->Name); ?></td>
                        <td width="400" rowspan="2"><?php _p($event->Note); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <?php 
                            if(date('md', strtotime($event->Fromdate)) == date('md', strtotime($event->Todate)))
                            _p(date('h:ia', mktime($event->Fromdate->Hour,$event->Fromdate->Minute,0,1,1,2000))."-".date('h:ia', mktime($event->Todate->Hour,$event->Todate->Minute,0,1,1,2000)));         
                            else
                            _p(date('d M', strtotime($event->Fromdate))." - ".date('d M', strtotime($event->Todate))); 
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            
            <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/calender/event.php?yearid=<?php _p($_GET['yearid']); ?>&from=<?php _p(Date('Ymd', strtotime($_GET['from']))); ?>&event=<?php _p($event->Idevent); ?>&year=<?php _p($_GET['year']); ?>">
                <div class="addevent" style="margin: auto;" >
                    <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/edit.png" width="40" />
                </div>
            </a>
        </div>
    <?php } ?>
    <?php   }else{ 
    if(!isset($_GET['month'])){ ?>
        <?php for($i = $start; $i <= $end; $i++){ ?>        
        <div class=" col-md-4"  onclick="window.location='yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&month=<?php _p($i) ?>&year=<?php _p($year) ?>'">
                <div  class="calmonth form-controls" id="formControls1" style=" padding: 20px 10px 10px 20px;margin: 10px 10px 10px 10px; margin: 5px; height: 250px;" >
                    <div align="center"><?php _p(Date('M Y', strtotime((($year)*10000)+0001+($i*100)))); ?></div>
                    <div id="cell">Sun</div>
                    <div id="cell">Mon</div>
                    <div id="cell">Tue</div>
                    <div id="cell">Wed</div>
                    <div id="cell">Thu</div>
                    <div id="cell">Fri</div>
                    <div id="cell">Sat</div>
                    <?php
                      $day = Date('D', strtotime(($year*10000)+0001+($i*100)));
                      $G = 0;
                      if($day == "Mon")$G = 1;
                      if($day == "Tue")$G = 2;
                      if($day == "Wed")$G = 3;
                      if($day == "Thu")$G = 4;
                      if($day == "Fri")$G = 5;
                      if($day == "Sat")$G = 6;
                      for($Gp = 1; $Gp <= $G; $Gp++){
                            ?>
                            <div id="cell" >&bull;</div>
                    <?php
                      }
                      $mon = Date('m', strtotime(($year*10000)+0001+($i*100)));
                      for($d = 1; $d <= 31; $d++){
                          $event = Event::QueryArray(
                            QQ::Andcondition(
                                    QQ::LessOrEqual(QQN::Event()->Fromdate, Date('Ymd235959', strtotime(($year*10000)+($i*100)+$d))),
                                    QQ::GreaterOrEqual(QQN::Event()->Todate, Date('Ymd000000', strtotime(($year*10000)+($i*100)+$d)))

                                    )
                            );
                            
                              if($d == 31){ 
                              if($mon == 1 || $mon == 3 || $mon == 5 || $mon == 7 || $mon == 8 || $mon == 10 || $mon == 12){
                    ?>
                    <div id="cell">
                         <div style="
                         <?php
                            $date = Date('D', strtotime(($year*10000)+($i*100)+$d));
                            if($date == "Sun") _p("color: #f00");
                            else if($event) foreach($event as $even) _p("color: #ff; border-radius: 30px; font-weight: 800; margin: 0 12px;  background: ".$even->EventCatObject->Color.";"); ?>">
                            <div <?php if(Date('Ymd')==Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                               style="color: red; font-weight: 800;"
                             <?php } ?>><?php _p($d);  ?></div>
                         </div>
                    </div>

                    <?php
                    }}else{
                    ?>
                    <div id="cell"><div style=" padding: 1px 10px 1px 10px; text-align: center;
                    <?php
                    $date = Date('D', strtotime(($year*10000)+($i*100)+$d));
                    if($date == "Sun") _p("color: red");
                    else if($event) foreach($event as $even) _p("color: #fff; border-radius: 40px; background: ".$even->EventCatObject->Color.";"); ?> ">
                        <?php if($i != 2){ ?>
                        <div <?php if(Date('Ymd') == Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                            class="currentday"
                            <?php } ?>>
                            <?php _p($d);  ?>
                        </div>
                        <?php }else if($d <= 28){ ?>
                        <div <?php if(Date('Ymd') == Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                            class="currentday"
                                <?php } ?>>
                            <?php _p($d); ?>
                        </div>
                        <?php }else if($year%4 == 0 && $d==29){ ?>
                        <div <?php if(Date('Ymd') == Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                            class="currentday" <?php } ?>>
                            <?php _p($d); ?>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
                    <?php }} ?>
                        
                </div>
            </div>
            <?php 
                if($i==12){
                    $start =1;
                    $i = 0;
                    $end =(int)$tmon;
                    $year = $year + 1;
                } 
            ?>
        
    <?php } ?>
    <?php 
        }else if(isset($_GET['month']) && isset($_GET['year'])){
            $i = $_GET['month'];
            $year = $_GET['year'];
            if($i == $_GET['month']){
    ?>
        <div style="float:left; margin: 5px; width: 95%; font-size: 18px;">
        <div style="text-align: center; font-size: 20px; margin-bottom: 10px;">
            <?php

                if($i == 1){ $backD = 12; $backY = $year - 1; }else{ $backD = $i - 1; $backY = $year; }
                if($i == 12){ $nextD = 1; $nextY = $year + 1;  }else{ $nextD = $i + 1; $nextY = $year; }
                if(strlen($backD)==1){
                    $backD = "0".$backD;
                }
                if(strlen($nextD)==1){
                    $nextD = "0".$nextD;
                }
            ?>
            <?php 
                $acdyear = CalenderYear::LoadByIdcalenderYear($_GET['yearid']);
                if(date('Ym',  strtotime($acdyear->From)) <= $backY.$backD){
            ?>     
            <?php if(isset( $_GET['course'])&&isset( $_GET['yearsubid'])){ ?>
                <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&month=<?php _p($backD) ?>&course=<?php _p($_GET['course']); ?>&yearsubid=<?php _p($_GET['yearsubid']); ?><?php if(isset($_GET['staff'])){ _p('&staff='.$_GET['staff']); } ?><?php if(isset($_GET['subagenda'])){ _p('&subagenda='.$_GET['subagenda']); }?>&year=<?php _p($backY); ?>"> << </a>
            <?php }else{ ?>
                <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&month=<?php _p($backD) ?><?php if(isset($_GET['staffatten'])){ _p('&staffatten='.$_GET['staffatten']); } ?><?php if(isset($_GET['staff'])){ _p('&staff='.$_GET['staff']); } ?><?php if(isset($_GET['subagenda'])){ _p('&subagenda='.$_GET['subagenda']); }?>&year=<?php _p($backY); ?>"> << </a>
            <?php }} ?>
            <?php _p(Date('F Y', strtotime((($year)*10000)+0001+($i*100)))); ?>

            <?php if(date('Ym',  strtotime($acdyear->To)) >= $nextY.$nextD){ ?>
                <a href="yearcal.php?yearid=<?php _p($_GET['yearid']); ?>&month=<?php _p($nextD); ?>&year=<?php _p($nextY); ?>"> >> </a>
            <?php } ?>
        </div>

        <div id="mcellh">Sun</div>
        <div id="mcellh">Mon</div>
        <div id="mcellh">Tue</div>
        <div id="mcellh">Wed</div>
        <div id="mcellh">Thu</div>
        <div id="mcellh">Fri</div>
        <div id="mcellh">Sat</div>
        <?php
          $day = Date('D', strtotime(($year*10000)+0001+($i*100)));

          $G = 0;
          if($day == "Mon")$G = 1;
          if($day == "Tue")$G = 2;
          if($day == "Wed")$G = 3;
          if($day == "Thu")$G = 4;
          if($day == "Fri")$G = 5;
          if($day == "Sat")$G = 6;

          for($Gp = 1; $Gp <= $G; $Gp++){
                ?>
                <div id="mcell" >&bull;</div>
                <?php
            }
            $mon = Date('m', strtotime(($year*10000)+0001+($i*100)));
            for($d = 1; $d <= 31; $d++){

                $event = Event::QueryArray(
                QQ::Andcondition(
                        QQ::LessOrEqual(QQN::Event()->Fromdate, Date('Ymd235959', strtotime(($year*10000)+($i*100)+$d))),
                        QQ::GreaterOrEqual(QQN::Event()->Todate, Date('Ymd000000', strtotime(($year*10000)+($i*100)+$d)))
                      )
                );
         
                  
                if($d == 31){
                    
                          if($mon == 1 || $mon == 3 || $mon == 5 || $mon == 7 || $mon == 8 || $mon == 10 || $mon == 12){
                             
                ?>
                <div id="mcell">
                       <div style="
                <?php
                $date = Date('D', strtotime(($year*10000)+($i*100)+$d));
                if($date == "Sun") _p("color: #f00");
                else if($event){ foreach($event as $even){} _p("color: ".$even->EventCatObject->Color.";");} ?>">
                <div <?php if(Date('Ymd')==Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                    style="color: red; font-weight: 800;"
                    <?php } ?>>
                   
                        <?php 
                        _p($d); 
                 
                        ?>
                </div>
                </div>
            
                 <!-- displaying event   -->
                    <div style="clear: both; margin: 20px -5px -5px -5px;">
                        <?php 
                        if($event) foreach($event as $even){
                            
                        ?>
                            <div onclick="window.location='<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/calender/event.php?yearid=<?php _p($_GET['yearid']); ?>&from=<?php _p(Date('Ymd', strtotime(($year*10000)+($i*100)+$d))); ?>&year=<?php _p($nextY); ?>&event=<?php _p($even->Idevent); ?>'" class="mytooltip">
                            <div class="eventdata" style="background-color: <?php _p($even->EventCatObject->Color); ?>;">
                            <?php _p($even->Name); ?>
                            <span>
                                <img class="callout" src="<?php _P(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__)  ?>/callout.gif" />

                                <strong style="float: left;"><?php _p($even->Name); ?></strong>
                                <div style="float: right;">
                                <?php 
                                if(date('md', strtotime($even->Fromdate)) == date('md', strtotime($even->Todate)))
                                _p(date('h:ia', mktime($even->Fromdate->Hour,$even->Fromdate->Minute,0,1,1,2000))." - ".date('h:ia', mktime($even->Todate->Hour,$even->Todate->Minute,0,1,1,2000))); 
                                else
                                _p(date('d M', strtotime($even->Fromdate))." - ".date('d M', strtotime($even->Todate))); 
                                ?>
                                <div style="clear: both;"></div>
                                </div>
                                <?php
                                    $subs = Event::QueryArray(
                                    QQ::Andcondition(
                                        QQ::LessOrEqual(QQN::Event()->Fromdate, Date('Ymd235959', strtotime(($year*10000)+($i*100)+$d))),
                                        QQ::GreaterOrEqual(QQN::Event()->Todate, Date('Ymd000000', strtotime(($year*10000)+($i*100)+$d))),
                                        QQ::Equal(QQN::Event()->SubOf, $even->Idevent)
                                        )
                                    );
                                    foreach ($subs as $sub){
                                        ?>
                                        <strong style="float: left;"><?php _p($sub->Name); ?></strong>
                                        <div style="float: right;">
                                        <?php 
                                        if(date('md', strtotime($sub->Fromdate)) == date('md', strtotime($sub->Todate)))
                                        _p(date('h:ia', mktime($even->Fromdate->Hour,$even->Fromdate->Minute,0,1,1,2000))." - ".date('h:ia', mktime($even->Todate->Hour,$even->Todate->Minute,0,1,1,2000)));                 
                                        else
                                        _p(date('d M', strtotime($sub->Fromdate))." - ".date('d M', strtotime($sub->Todate))); 
                                        ?>
                                        </div>
                                        <div style="clear: both;"></div>
                                <?php } ?>
                                <?php _p($even->Note); ?>
                            </span>
                            </div>
                            </div>
                        <?php } ?>
                    </div>
               
                    <?php if(!isset($_GET['course'])&&!isset( $_GET['yearsubid'])&&!isset( $_GET['staffatten'])){ ?>
                    <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/calender/event.php?yearid=<?php _p($even->Idevent); ?>&from=<?php _p(Date('Ymd', strtotime(($year*10000)+($i*100)+$d))); ?>&year=<?php _p($nextY); ?>">
                        <div class="addevent" style="width:10px; height :10px;">
                            <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/plus.png" width="10" height="10"/>
                        </div>
                    </a>    
                    <?php } ?>
                </div>

                <?php
                }}else{
                ?>
                    <div id="mcell">
                        <div style="
                            <?php
                            $date = Date('D', strtotime(($year*10000)+($i*100)+$d));
                            
                            if($date == "Sun") _p("color: red;");                                
                            ?>">
                            <?php if($i != 2){ ?>
                            <div <?php if(Date('Ymd') == Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                                class="mcurrentday"
                                <?php } ?>>
                                <?php 
                                     _p($d); 
                                   

                                ?>
                            </div>
                           <?php }else if($d <= 28){ ?>
                                <div <?php if(Date('Ymd') == Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                                    class="mcurrentday"
                                        <?php } ?>>
                                    <?php                         
                                        _p($d);                         
                                    ?>
                                </div>

                                <?php }else if($year%4 == 0 && $d==29){ ?>
                                <div <?php if(Date('Ymd') == Date('Ymd', strtotime(($year*10000)+($i*100)+$d))){ ?>
                                    class="mcurrentday" <?php } ?> >
                                    <?php                         
                                        _p($d); 
                                         
                                    ?>        
                                </div>
                                <?php } ?>
                        </div>

                        
                        <div style="clear: both; margin: 10px 0px 0px 0px;">
                        <?php 
                        if($event){
                            foreach($event as $even){
                                
                        ?>
                            <div style="clear: both;"></div>
                            <div onclick="window.location='<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/calender/event.php?yearid=<?php _p($_GET['yearid']); ?>&from=<?php _p(Date('Ymd', strtotime(($year*10000)+($i*100)+$d))); ?>&year=<?php _p($nextY); ?>&event=<?php _p($even->Idevent); ?>'" class="mytooltip">
                                <div class="eventdata" style="color:#000;background-color: <?php _p($even->EventCatObject->Color); ?>;">
                                <?php _p(substr($even->Name,0,19).''); ?>
                                <div style="clear: both;"></div>
                                <span class="tooltiptext">                                    
                                    <strong style="float: left;"><?php _p($even->Name); ?></strong>
                                    <div style="float: right;">
                                    <?php 
                                    if(date('md', strtotime($even->Fromdate)) == date('md', strtotime($even->Todate)))
                                    _p(date('h:ia', mktime($even->Fromdate->Hour,$even->Fromdate->Minute,0,1,1,2000))."-".date('h:ia', mktime($even->Todate->Hour,$even->Todate->Minute,0,1,1,2000))); 
                                    //_p(date('H:m', strtotime($even->Fromdate))." - ".date('H:m', strtotime($even->Todate))); 
                                    else
                                    _p(date('d M', strtotime($even->Fromdate))." - ".date('d M', strtotime($even->Todate))); 
                                    ?>
                                    </div>
                                    <div style="clear: both;"></div>
                                    <?php
                                        $subs = Event::QueryArray(
                                        QQ::Andcondition(
                                            QQ::LessOrEqual(QQN::Event()->Fromdate, Date('Ymd235959', strtotime(($year*10000)+($i*100)+$d))),
                                            QQ::GreaterOrEqual(QQN::Event()->Todate, Date('Ymd000000', strtotime(($year*10000)+($i*100)+$d))),
                                            QQ::Equal(QQN::Event()->SubOf, $even->Idevent)
                                            )
                                        );
                                        foreach ($subs as $sub){
                                    ?>
                                    <strong style="float: left;"><?php _p($sub->Name); ?></strong>
                                    <div style="float: right;">
                                    <?php 
                                    if(date('md', strtotime($sub->Fromdate)) == date('md', strtotime($sub->Todate)))
                                    _p(date('h:ia', mktime($even->Fromdate->Hour,$even->Fromdate->Minute,0,1,1,2000))."-".date('h:ia', mktime($even->Todate->Hour,$even->Todate->Minute,0,1,1,2000))); 
                                    //_p(date('H:m', strtotime($sub->Fromdate))." - ".date('H:m', strtotime($sub->Todate))); 
                                    else
                                    _p(date('d M', strtotime($sub->Fromdate))." - ".date('d M', strtotime($sub->Todate))); 
                                    ?>
                                    </div>
                                    <div style="clear: both;"></div>
                                    <?php } ?>
                                    <?php _p($even->Note); ?>
                                </span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
<!--                            <a href="<?php //_p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/calender/event.php?yearid=<?php //_p($even->Idevent); ?>"  >
                            <div class="eventdata" style="background-color: <?php //_p($even->EventCatObject->Color); ?>;">
                            <?php //_p($even->Name); ?>
                           
                        </div>
                        </a>-->

                        <?php } 
                        
                        }else{
                            //_p("Event not found");
                        }
                        ?>
                        </div>

                        <?php if(!isset($_GET['course'])&&!isset( $_GET['yearsubid'])&&!isset( $_GET['staffatten'])){ ?>
                        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/calender/event.php?yearid=<?php _p($_GET['yearid']); ?>&from=<?php _p(Date('Ymd', strtotime(($year*10000)+($i*100)+$d))); ?>&to=<?php _p(Date('Ymd', strtotime(($year*10000)+($i*100)+$d))); ?>&year=<?php _p($nextY); ?>">
                            <div class="addevent">
                                <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/plus.png" width="50" />
                            </div>
                        </a>    
                        <?php } ?>
                    </div>


                    <?php }} ?>
                <div style="clear: both;"></div>
                </div>
            <?php 
                  //break;  
        }   }   
    }
} ?>
        <div style="clear: both;"></div>
       </div>
    <div style="clear: both;"></div>
</div>

<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>