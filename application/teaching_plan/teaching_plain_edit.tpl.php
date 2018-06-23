<?php   require(__CONFIGURATION__ . '/header.inc.php'); ?>
     
<?php $this->RenderBegin() ?>

<h2><?php _t('Teaching Plan') ?></h2>

<div class="form-controls">
    <?php 
        if(isset($_GET['yearsubid'])){
            $yearsub = YearSubject::LoadByIdyearSubject($_GET['yearsubid']);
        
            $techplan = TeachingPlain::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::TeachingPlain()->TimeSlot, $_GET['timeslot']),     
                            QQ::Equal(QQN::TeachingPlain()->Course, $yearsub->Course),
                            QQ::Equal(QQN::TeachingPlain()->YearlySubject, $_GET['yearsubid']),
                            QQ::OrCondition(    
                                QQ::Equal(QQN::TeachingPlain()->ExecutionDate, date('Y-d-m',  strtotime($_GET['cdate']))),
                                QQ::Equal(QQN::TeachingPlain()->PostponeDate, date('Y-d-m',  strtotime($_GET['cdate'])))
                            )
                        ));
            if($techplan){
    ?>
    
    <table class="datagrid" border="1">
        <tr>
            <th>Sr</th>
            <th>Subject</th>
            <th>Time Slot</th>
            <th>Staff</th>
            <th>Plan Date</th>
            <th>Execution Date</th>
            <th>Postpone Date</th>
            <th></th>
            
        </tr>
        <?php foreach ($techplan as $tp){ ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($tp->YearlySubjectObject->SubjectObject->Name); ?></td>
            <td><?php _p($tp->TimeSlotObject->Name); ?></td>
            <td><?php _p($tp->TeacherObject->IdloginObject); ?></td>
            <td><?php _p(date('d M Y', strtotime($tp->PlainedDate))); ?></td>
            <td><?php _p(date('d M Y', strtotime($tp->ExecutionDate))); ?></td>
            <td><?php if($tp->PostponeDate != NULL) _p(date('d M Y', strtotime($tp->PostponeDate))); ?></td>
            <td><?php $this->lbledit[$tp->IdteachingPlain]->Render(); ?></td>
            
        </tr>
        <?php }?>
    </table>
    
    <div style="border-bottom: 2px solid #005599; margin-top: 10px; margin-bottom: 10px;"></div>
    <?php } ?>
    
    <table style="width: 100%; " border="0">
        <tr>
            <td style="width: 20%;"height="37" ><strong>Teaching Staff</strong></td>
            <td style="width: 30%;"><?php $this->lstTeacher->Render(); ?></td>
            <td style="width: 15%; padding-right: 15px;" align="right" ><strong>Course</strong></td>
            <td style="width: 35%;"><?php $this->lstCourse->Render(); ?></td>   
        </tr>
        <tr>
            <td height="40"><strong>Year</strong></td>
            <td><?php $this->lstAcademicYear->Render(); ?></td>
            <td style="padding-right: 15px;" align="right" ><strong>Subject</strong></td>
            <td><?php $this->lstSubject->Render(); ?></td>
        </tr>
        <tr>
            <td height="39"><strong>Planed Date</strong></td>
            <td>
                <?php if ($this->calPlan->Enabled == FALSE){ ?>
                    <?php _p($this->calPlan->Text); ?>
                <?php } else $this->calPlan->Render(); ?>
            </td>
            <td height="39" style="padding-right: 15px;" align="right" >
                <strong>Executed Date</strong></td>
            <td >
                <?php 
                    if ($this->calExecution->Enabled == FALSE) { 
                        _p($this->calExecution->Text); 
                    }else{ 
                        $this->calExecution->Render(); 
                    }
                ?>
            </td>
        </tr>
        <?php if(isset($_GET['id'])){ ?>
        <tr>
            <td height="45"><strong>Postponed Date</strong></td>
            <td><?php $this->calPospone->Render(); ?></td>
            <td style="padding-right: 15px;" align="right"><strong>Reason</strong></td>
            <td><?php $this->txtReason->Render(); ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td height="45" valign="top"><strong>Teaching Plan</strong></td>
            <td colspan="3"><?php $this->txtPlan->Render(); ?></td>
        </tr>
    </table>

    <div class="form-actions">
        <div class="save" style="float:right"><?php $this->btnSave->Render();  ?></div>
        <div style="clear: both;"></div>
    </div>
    <?php }?>
</div>

<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>