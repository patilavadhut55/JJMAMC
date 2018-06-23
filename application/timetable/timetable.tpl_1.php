<?php
    $strPageTitle = QApplication::Translate('Exam Set');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<h1>Timetable</h1>
<?php $this->RenderBegin() ?>
<div class="form-controls">
   <table class="datagrid" style='margin-top: 10px;' border="1">
        <?php
            $weekdays = array('Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday');
        ?>
        <tr>
            <th rowspan="2"><div align="center">Time/Days</div></th>
            <?php foreach($weekdays as $days){ ?>
            <th><div align="center"><?php _p($days);?></div></th>
            <?php }?>
        </tr>
        <?php 
            //foreach($this->acads as $acad){?>
        <tr>
            <td><?php //_p(delete_all_between('[', ']',$acad->DepartmentObject->Name)); ?></td>
            <?php //foreach($this->semister as $sem){ ?>
            <td><div><?php  ?></div></td>
            <?php // }?>
        </tr>
        
        <?php // }?>
    </table>
</div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
  