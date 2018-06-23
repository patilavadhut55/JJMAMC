<?php   require(__CONFIGURATION__ . '/header.inc.php');?>
<?php $this->RenderBegin() ?>

<div class="form-controls">
    <div style=" margin-bottom: 10px; "> 
        <div style="padding: 1px;" class="col-md-4"><?php $this->lstCalender->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-2"><?php $this->btnReport->Render(); ?></div>
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>
    <?php 
        if(isset($_GET['cal'])){
        $calyear = CalenderYear::LoadByIdcalenderYear($_GET['cal']);
    ?>
    <table width="650" border="0" class="datagrid">
        <tr>
            <th width="42">Sr</th>
            <th width="235">Course</th>
            <th width="">Subjects</th>
        </tr>
        <?php
            $courses = Role::LoadArrayByGrp(5);
            $sr = 1;
            foreach ($courses as $course) {
        ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($course->Name); ?></td>
            <td>
                <?php
                $subs = SubjectTought::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::SubjectTought()->Login, $_SESSION['login']), 
                                    QQ::Equal(QQN::SubjectTought()->SubjectObject->Course, $course->Idrole),
                                    QQ::Equal(QQN::SubjectTought()->CalenderYear, $_GET['cal'])    
                                ));

                foreach ($subs as $sub) {
                ?>
                <div onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/teaching_plan/teachingplanyearcal.php?yearid=<?php _p($_GET['cal']);?>&course=<?php _p($course->Idrole); ?>&yearsubid=<?php _p($sub->Subject); ?>&staff=<?php _p($_SESSION['login']); ?>&year=<?php _p(date('Y',  strtotime($calyear->From))); ?>'" 
                     style="float: left; margin: 3px; width: auto; padding: 5px;border: 1px solid lightblue;cursor: pointer;">
                    <?php _p($sub->SubjectObject->SubjectObject->Name); ?>
                </div>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
</div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>