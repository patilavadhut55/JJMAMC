<?php
    $strPageTitle = QApplication::Translate('TimeSlot') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<hi>timeslot</hi>
    <?php $this->RenderBegin() ?>

    <div class="form-controls" style="height:70px;">
        <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstDiploma->Render(); ?></div>
        <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstProgrme->Render(); ?></div>
        <div class="pull-left" style="margin-left: 5px; width: 20%"><?php $this->btnSearch->Render(); ?></div>
    </div>  
    <div>
      <?php //  if($this->lstProgrme->SelectedValue != NULL){ ?>
        <table class="datagrid" border="1">
            <tr>
                <th></th>
                <th><div align="center">Sr</div></th>
                <th><div align="center">seq</div></th> 
                <th><div align="center">Department</div></th>
                <th><div align="center">Program</div></th>
                <th><div align="center">Period</div></th>
                <th><div align="center">Time</div></th>
            </tr> 
            <?php
            if(isset($_GET['prog']) && (isset($_GET['dipl']))){
                $times = ProgramHasTimeslot::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::ProgramHasTimeslot()->Role, $_GET['prog']),
                          QQ::Equal(QQN::ProgramHasTimeslot()->RoleObject->ParrentObject, $_GET['dipl']) 
               ) );
                $sr=1;
                if($times){
                    foreach($times as $time){
            ?>
                    <tr>
                        <td width="1%"><div  align="center"><?php $this->lbldel[$time->IdprogramHasTimeslot]->Render(); ?></div></td>
                        <td width="1%"><?php _p($sr++); ?></td>
                        <td width="1%"><div align="center"><?php $this->txtseq1[$time->IdprogramHasTimeslot]->Render();  ?></td>
                        <td width="4%"><div align="center"><?php _p($time->RoleObject->ParrentObject->Name); ?></div></td>
                        <td width="4%"><div align="center"><?php _p($time->RoleObject->Name); ?></div></td>
                        <td width="7%"><div align="center"><?php _p($time->TimeSlotObject->Name); ?>
                        </div></td>
                        <td width="4%"><div align="center"><?php _p(" ( ".date('h:ia', mktime($time->TimeSlotObject->From->Hour,$time->TimeSlotObject->From->Minute,0,1,1,2000))." - ".date('h:ia', mktime($time->TimeSlotObject->To->Hour,$time->TimeSlotObject->To->Minute,0,1,1,2000))." ) "); ?></div></td>
                        
                     </tr>
            <?php }} }?>
                        <td></td>
                        <td></td>
                        <td><div class="col-md-4"><?php $this->txtseq->Render(); ?></div></td>
                        <td></td>
                        <td></td>
                        <td><div class="col-md-6"><?php $this->lstPeriod1->Render(); ?></div>
                        <div class="col-md-2"><?php $this->btnAdd->Render(); ?></div></td>
                        <td></td>
        </table> 
      <?php //} ?>
    </div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>