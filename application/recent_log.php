<?php
    require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>
<h1>Dashboard</h1>
<div class="pull-right slideup">
    <div class="pull-left" style="font-size: 25px; margin-right: 20px;">
    <?php 
        $LoginRoll = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'], $_SESSION['role']);
        //_p($LoginRoll->CompanyObject);
      
    ?>
    </div>
</div>
<?php //if(!$_SESSION['role'] == 391){ ?>
<?php $role = LoginHasRole::QueryArray(
    QQ::AndCondition(
    QQ::Like(QQN::LoginHasRole()->RoleIdrole,$_SESSION['role']),
    QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, "%Professor%"))); ?>
<?php if(!$role){ ?>
<?php if(isset($_GET['time'])) $time = $_GET['time']; else $time = 5; ?>
<?php 
    if($time == 5){
        $FromDate = date('Ymd000000');
        $ToDate = date('Ymd235959');
    }else if($time == 4){
        $FromDate = date('Ym01000000');
        $ToDate = date('Ymd235959');
    }else if($time == 3){
        $FromDate = date('Ym01000000');
        $ToDate = date('Ymd235959');
    }else if($time == 2){
        $FromDate = date('Y0101000000');
        $ToDate = date('Y1231235959');
    }else if($time == 1){
        $FromDate = date('Y0101000000');
        $ToDate = date('Y1231235959');
    }elseif($time == 6){
        $FromDate = date('Ymd000000',  strtotime($this->calfrom->Text));
        $ToDate = date('Ymd235959', strtotime($this->calto->Text));  
    }
?>
<?php if($_SESSION['role'] == 384){//verification clerk ?>
<div class="pull-right">
    <div class="pull-left" style=" margin-left: 3px;"><?php //$this->calfrom->Render();?></div>
    <div class="pull-left" style=" margin-left: 3px;"><?php //$this->calto->Render();?></div>

<a href="dashboard.php?from=<?php _p(date('Y0101'));?>&to=<?php _p(date('Ymd')); ?>&time=1">
<div class="pull-left btn margin-left-right<?php if($time == 1){ ?> btn-warning <?php }else{ ?> btn-success <?php } ?>" style="margin: 2px;">
    Till Date
</div>
</a>
<a href="dashboard.php?from=<?php _p(date('Y0101'));?>&to=<?php _p(date('Y1231')); ?>&time=2">
<div class="pull-left btn margin-left-right <?php if($time == 2){ ?> btn-warning <?php }else{ ?> btn-success <?php } ?>" style="margin: 2px;">
    This Year</div>
</a>
<a href="dashboard.php?from=<?php _p(date('Ym01'));?>&to=<?php _p(date('Ymt')); ?>&time=3">
<div class="pull-left btn margin-left-right <?php if($time == 3){ ?> btn-warning <?php }else{ ?> btn-success <?php } ?>" style="margin: 2px;">
    This Month</div>
</a>
<a href="dashboard.php?from=<?php _p(date('Ym01'));?>&to=<?php _p(date('Ymd')); ?>&time=4">
<div class="pull-left btn margin-left-right <?php if($time == 4){ ?> btn-warning <?php }else{ ?> btn-success <?php } ?>" style="margin: 2px;">
    This Week</div>
</a>
<a href="dashboard.php?from=<?php _p(date('Ymd'));?>&to=<?php _p(date('Ymd')); ?>&time=5">
<div class="pull-left btn margin-left-right <?php if($time == 5){ ?> btn-warning <?php }else{ ?> btn-success <?php } ?>" style="margin: 2px;">
    Today</div>
</a>
</div>
        <?php } ?>
<div class="clear"></div>
<!--?php //application dashboard ?-->


<?php
//get from to

$error = 0;
      
$incount = $outcount = 0;
$arrayparent = array();
//code for cleark 
//$cleark = Settings::LoadByName("Cleark");
if($_SESSION['role'] == 382){   //addmission officer
    $apps = AppApproval::QueryArray(
          QQ::AndCondition(
          QQ::GreaterOrEqual(QQN::AppApproval()->ApplicationObject->Date, $FromDate),        
          QQ::LessOrEqual(QQN::AppApproval()->ApplicationObject->Date, $ToDate),                
          QQ::Equal(QQN::AppApproval()->Decision, 1),        
          QQ::Equal(QQN::AppApproval()->PreviousApproval, 1),
          QQ::Equal(QQN::AppApproval()->Roll, $_SESSION['role'])
                  ));
   
    $incount = AppApproval::QueryCount(
          QQ::AndCondition(
          QQ::GreaterOrEqual(QQN::AppApproval()->ApplicationObject->Date, $FromDate),        
          QQ::LessOrEqual(QQN::AppApproval()->ApplicationObject->Date, $ToDate),                
          QQ::Equal(QQN::AppApproval()->PreviousApproval, 1),
          QQ::Equal(QQN::AppApproval()->Decision, 1),        
          QQ::Equal(QQN::AppApproval()->Roll, $_SESSION['role'])
                  ));
}else{
    $apps = AppApproval::QueryArray(
            QQ::AndCondition(
                QQ::GreaterOrEqual(QQN::AppApproval()->ApplicationObject->Date, $FromDate),        
                QQ::LessOrEqual(QQN::AppApproval()->ApplicationObject->Date, $ToDate),                
                QQ::Equal(QQN::AppApproval()->Decision, 1),        
                QQ::Equal(QQN::AppApproval()->Roll, $_SESSION['role']),
                QQ::Equal(QQN::AppApproval()->PreviousApproval, 1)
            ));
    
    $incount = AppApproval::QueryCount(
          QQ::AndCondition(
          QQ::GreaterOrEqual(QQN::AppApproval()->ApplicationObject->Date, $FromDate),        
          QQ::LessOrEqual(QQN::AppApproval()->ApplicationObject->Date, $ToDate),                
          QQ::Equal(QQN::AppApproval()->PreviousApproval, 1),
          QQ::Equal(QQN::AppApproval()->Decision, 1),        
          QQ::Equal(QQN::AppApproval()->Roll, $_SESSION['role'])
                  ));        
}   
?>
    <div class="panel panel-default col-md-6">
        <div class="panel-title">Recent Logs</div>
        <div class="panel-body">
        <table class="datagrid">
        <tr>
            <th>Date</th>
            <th>Login</th>
            <th>Type</th>
            <th>File Name</th>
            <th>Status</th>
        </tr>
        <?php
            $logs = Log::loadAll(
                    QQ::Clause(
                        QQ::LimitInfo(7),
                        QQ::OrderBy(QQN::Log()->Date, false)
                        )
                    );
            
            foreach ($logs as $log){
        ?>
        <tr>
            <td><?php _p(date("d M Y H:i", strtotime($log->Date))); ?></td>
            <td><?php _p($log->DataByObject); ?></td>
            <td><?php _p($log->LogGrpObject); ?></td>
            <td><?php _p(substr($log->Filename, 0, 10)."..."); ?></td>
            <td><?php _p($log->Status); ?></td>
        </tr>
        <?php } ?>
        </table>
        </div>
    </div>
    
    <div class="panel panel-default col-md-6">
        <div class="panel-title">Recent Events</div>
        <div class="panel-body">
        <table class="datagrid">
            <tr>
                <th>Date</th>
                <th>Title</th>
            </tr>
            <?php
                $events = DeptYearEvents::QueryArray(
                        QQ::AndCondition(
                                QQ::GreaterOrEqual(QQN::DeptYearEvents()->From, date('Ymd'))
                                ),
                        QQ::Clause(
                            QQ::LimitInfo(7),
                            QQ::OrderBy(QQN::DeptYearEvents()->From)
                            )
                        );

                foreach ($events as $event){
            ?>
            <tr>
                <td><?php _p(date("d M Y", strtotime($event->From))); ?></td>
                <td><?php _p($event->Title); ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>

<div class="clearfix"></div>
<?php } ?>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>