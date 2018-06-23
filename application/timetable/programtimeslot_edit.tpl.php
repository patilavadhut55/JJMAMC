<?php
$strPageTitle = QApplication::Translate('TimeSlot');
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls" style="height:70px;">
    <div class="pull-left" style="margin-left: 5px; width: 30%"><?php $this->lstDept->Render(); ?></div>
    <div class="pull-left" style="margin-left: 5px; width: 20%"><?php $this->btnSearch->Render(); ?></div>
</div>  

<?php if (isset($_GET['dept'])) { ?>
    <div class="form-controls">
        <table class="datagrid" border="1">
            <tr>
                <th></th>
                <th><div align="center">Sr</div></th>
                <th><div align="center">seq</div></th> 
                <th><div align="center">Department</div></th>
                <th><div align="center">Period</div></th>
                <th><div align="center">Time</div></th>
            </tr> 
            <?php
            $times = ProgramHasTimeslot::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::ProgramHasTimeslot()->Role, $_GET['dept'])
                                ));
                $sr = 1;
                if ($times) {
                foreach ($times as $time) {
            ?>
            <tr>
                <td width="1%"><div  align="center" style="cursor: pointer"><?php $this->lbldel[$time->IdprogramHasTimeslot]->Render(); ?></div></td>
                <td width="1%"><?php _p($sr++); ?></td>
                <td width="1%"><div align="center"><?php $this->txtseq1[$time->IdprogramHasTimeslot]->Render(); ?></td>
                <td width="6%"><div align="center"><?php _p(delete_all_between('[', ']', $time->RoleObject->Name)); ?></div></td>
                <td width="7%"><div align="center"><?php _p($time->TimeSlotObject->Name); ?>
                    </div></td>
                <td width="4%"><div align="center"><?php _p(" ( " . date('h:ia', mktime($time->TimeSlotObject->From->Hour, $time->TimeSlotObject->From->Minute, 0, 1, 1, 2000)) . " - " . date('h:ia', mktime($time->TimeSlotObject->To->Hour, $time->TimeSlotObject->To->Minute, 0, 1, 1, 2000)) . " ) "); ?></div></td>
            </tr>
            <?php }} ?>
        </table> 
        <div class="form-controls" style="height: 50px;">
            <div class= " col-md-2"><?php $this->txtseq->Render(); ?></div>
            <div class= "col-md-4"><?php $this->lstPeriod1->Render(); ?></div>
            <div class=" col-md-1"><?php $this->btnAdd->Render(); ?></div>
        </div>
    </div>
<?php } ?>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>