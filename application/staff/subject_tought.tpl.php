<?php 

require(__CONFIGURATION__ . '/header.inc.php'); ?>

<?php $this->RenderBegin(); ?>
<div class="form-controls">
    <?php         
        if(isset($_GET['subject'])){
            $yearlysub = YearSubject::LoadByIdyearSubject($_GET['subject']);            
    ?>    
    <h2><?php _p(delete_all_between("[", "]", $yearlysub->CourseObject)." - ".$yearlysub->SubjectObject." [".$yearlysub->SemesterObject." ]"); ?> </h2>
    
    <table class="datagrid">
        <tr>
            <th width="30"></th>
            <th width="30">Sr.no.</th>
            <th width="150">Year</th>
            <th>Name</th>
        </tr>
        <?php 
            $subtaughts = SubjectTought::LoadArrayBySubject($yearlysub->IdyearSubject);
            $sr = 1;
            foreach ($subtaughts as $subtaught){
        ?>
        <tr>
            <td><?php $this->btnDelete[$subtaught->IdsubjectTought]->Render(); ?></td>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($subtaught->CalenderYearObject); ?></td>
            <td><?php
                $add = Address::QuerySingle(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Address()->Of, $subtaught->Login)
                            )
                        );
                if($add) _p($add->Fname." ".$add->Mname." ".$add->Lname); else _p($subtaught->LoginObject->IdloginObject); ?></td>
        </tr>
        <?php } ?>        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><?php $this->txtName->Render(); ?> <?php $this->btnAdd->Render(); ?></td>
        </tr>
        
    </table>
    <a href="subject_tought.php" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
    
    <?php 
        }else{
        $roles = Role::LoadArrayByGrp(5);
        foreach ($roles as $role){
            _t("<h4>".delete_all_between("[", "]", $role->Name)."</h4><br>");
            $acads = AcademicYear::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                        )
                    );
            
        $cnt = 0;
        
        foreach ($acads as $acad){
            $cnt++
    ?>      
    <div class="col-md-6">
        <table class="datagrid">
            <tr>
                <th colspan="3"><?php _t($acad->Name); ?></th>
            </tr>
            <tr>
                <td>Sr.No.</td>
                <td>Subject</td>
                <td>Action</td>
            </tr>
            <?php 
                $yearlysubs = YearSubject::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::YearSubject()->Semester, $acad->IdacademicYear),
                                QQ::Equal(QQN::YearSubject()->Course, $role->Idrole)
                            )
                        );
                $sr = 1;
                foreach ($yearlysubs as $yearlysub){
            ?>
            <tr>
                <td><?php _p($sr++); ?></td>
                <td><?php _p($yearlysub->SubjectObject); ?></td>
                <td><div class="btn btn-warning"><?php $subcnt = SubjectTought::CountBySubject($yearlysub->IdyearSubject); _p($subcnt); ?> </div> <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/staff/subject_tought.php?subject=<?php _p($yearlysub->IdyearSubject); ?>" class="btn btn-success">Assign Staff</a></td>                
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        if($cnt == 2){
    ?>
    <div style="clear: both;"></div>
    <?php    
        }
    } 
    ?>
    <?php
        }
        }
    ?>
    <div style="clear: both;"></div>
</div>
<?php $this->RenderEnd(); ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>
