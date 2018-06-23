<?php
    $strPageTitle = QApplication::Translate('Time Table');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<style>
    .blanktable{
        display:none;
    }
</style> 

<?php $this->RenderBegin() ?>
<div class="form-controls">
    <div style=" margin-bottom: 10px; "> 
        <div style="padding: 1px;" class="col-md-2"><?php $this->lstCalender->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-2"><?php $this->lstRoles->Render(); ?></div>
        
        <div style="padding: 1px;" class="col-md-2"><?php $this->btnReport->Render(); ?></div>
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>
    <?php 
        if($this->lstCalender->SelectedValue != NULL &&  isset($_GET['dept'])){
    ?>
    <table class="datagrid" style='margin-top: 10px;' border="1">
        <?php
            $sems = AcademicYear::QueryArray(QQ::Equal(QQN::AcademicYear()->Parrent, NULL));
            $semestercnt = AcademicYear::QueryCount(QQ::Equal(QQN::AcademicYear()->Parrent, NULL));
        ?>
        <tr>
            <th rowspan="2"><div align="center">Courses</div></th>
            <th colspan="<?php _p($semestercnt);?>"><div align="center">Semester</div></th>
        </tr>
        <tr>
            <?php foreach($sems as $sem){ ?>
            <th><div align="center"><?php _p($sem->Name);?></div></th>
            <?php } ?>
        </tr>
        <tr>
            <td><?php 
                $dept = Role::LoadByIdrole($_GET['dept']);
                _p(delete_all_between('[', ']', $dept->Name));
            
            ?></td>
            <?php foreach($sems as $sem){ ?>
            <td><div style="cursor: pointer;"><?php  $this->lblAdd[$sem->IdacademicYear]->Render();?></div></td>
            <?php }?>
        </tr>
        
    </table>
        <?php }?>
  
    
   
</div>
<div style="clear: both"></div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
  