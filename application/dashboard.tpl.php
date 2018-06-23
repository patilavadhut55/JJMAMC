<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>

<?php $this->RenderBegin() ?>
<h1><i class="fa fa-dashboard"></i> Dashboard</h1>
<div class="col-md-6">
    <div class="panel panel-default margin-top-bottom ">
        <div class="panel-heading">
            <h3 class="panel-title">
                <div class="pull-left" style="margin-right: 20px; " > Pending Approvals</div>
                 <?php   $incount = 0; ?>
                <div class="pull-right">
                    <div class="pull-left btn btn-danger">
                        <?php _p($incount); ?></div>
                    <div style="clear: both;"></div>
                </div>
                <div style="clear: both;"></div>
            </h3>
        </div>
        <div class="panel-body">
            <?php 
                //code for requirement approval by HOD
                $chkrole = Role::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Idrole,$_SESSION['role']),
                                QQ::Like(QQN::Role()->Name, "%HOD%")
                                )
                        );

                if($chkrole){   //HOD
                    $vouchers = Voucher::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Voucher()->ApprovedBy, NULL),    
                            QQ::Equal(QQN::Voucher()->PrincipalApprovedBy, NULL),
                            QQ::Equal(QQN::Voucher()->Grp, 11),
                            QQ::OrCondition(
                                QQ::Equal(QQN::Voucher()->Cancel, NULL),    
                                QQ::Equal(QQN::Voucher()->Cancel, 0)
                            )                   
                        ));
                } ?>

            <?php
                
                //code for requirement approval by Principal
                $chkroleD = Role::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Idrole, $_SESSION['role']),
                                QQ::OrCondition(
                                   QQ::Like(QQN::Role()->Name, "%Principal%")
                                ))
                        );
                if($chkroleD){   //Director
                    $vouchers =  Voucher::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::Voucher()->PrincipalApprovedBy, NULL),
                            QQ::NotEqual(QQN::Voucher()->ApprovedBy, NULL),                        
                            QQ::Equal(QQN::Voucher()->Grp, 11),
                            QQ::OrCondition(
                            QQ::Equal(QQN::Voucher()->Cancel, NULL),    
                            QQ::Equal(QQN::Voucher()->Cancel, 0)
                            )
                        ));
                } 
                
            if($chkrole  || $chkroleD){ ?>
            <?php if($vouchers){ ?> 
            <div class="form-controls"> 
                <div style="font-size: 18px; color: #005580; border-bottom: 1px solid #005580; margin-bottom: 10px; font-weight: bold;"> Requirement List </div>
                <?php  foreach ($vouchers as $voucher){  $incount++; ?>
                    <a href="<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/approval_list.php?req=<?php _p($voucher->Idvoucher); ?>" 
                        title="<?php _t($voucher->DrObject); ?>">
                        <div class="btn btn-default btn-default" >
                            <?php _p($voucher->InvNo); ?>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <?php }}?>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                Recent Logs
                <?php   $count = 0; ?>
                <div class="pull-right btn btn-danger">
                <?php _p($count); ?>
                </div>
                <div style="clear: both;"></div>
            </h3>

        </div>
        <div class="panel-body">
        <?php ?>
        </div>
    </div>
</div>
<div class="col-md-6">
<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
         <div class="pull-left" style="margin-right: 20px; " >Document Inward Outward </div>
         <div class="pull-right">
             <div class="pull-left btn btn-success" title="InWard" >
                  <?php
                $incnt = MarkTo::QueryCount(
                        QQ::AndCondition(
                                QQ::Equal(QQN::MarkTo()->To, $_SESSION['login']),
                                QQ::Equal(QQN::MarkTo()->Role, $_SESSION['role']),
                                QQ::Equal(QQN::MarkTo()->DocInOutObject->Outward, NULL)));
                $inwards = MarkTo::QueryArray(
                        QQ::AndCondition(
                                 QQ::Equal(QQN::MarkTo()->To, $_SESSION['login']),
                                 QQ::Equal(QQN::MarkTo()->Role, $_SESSION['role']),
                                QQ::Equal(QQN::MarkTo()->DocInOutObject->Outward, NULL)));
                _p($incnt);
             ?>
            
              </div>
             <div class="pull-left btn btn-danger" style="margin-left: 20px;" title="OutWard">
            <?php
                $outcnt = MarkTo::QueryCount(
                        QQ::AndCondition(
                                QQ::Equal(QQN::MarkTo()->To, $_SESSION['login']),
                                QQ::Equal(QQN::MarkTo()->Role, $_SESSION['role']),
                                QQ::Equal(QQN::MarkTo()->DocInOutObject->Outward, 1)));
                $outwards = MarkTo::QueryArray(
                        QQ::AndCondition(
                                               
                                QQ::Equal(QQN::MarkTo()->To, $_SESSION['login']),
                                QQ::Equal(QQN::MarkTo()->Role, $_SESSION['role']),
                                QQ::Equal(QQN::MarkTo()->DocInOutObject->Outward, 1)));
                _p($outcnt);
             ?>
             </div>
             </div>
            <div style="clear: both;"></div>
         </div>
             <div class="panel-body">
                 <?php
                     if($inwards){
                         foreach ($inwards as $inward){
                      $link = "/doc_inoutward/inward_document.php?id=";
                 ?>
                    <a href="<?php _p(__FORM_APPLICATION__); ?><?php _p($link.$inward->DocInOut); ?>"  title="<?php _t('Inward Doc') ?>" >
                        <div class="btn btn-default btn-default" style=" border-color: green; ">
                             <?php _p($inward->DocInOutObject->Code); ?>
                        </div>
                    </a>
                <?php }} ?>
                   <?php
                     if($outwards){
                         foreach ($outwards as $outward){
                      $link = "/doc_inoutward/outward_document.php?id=";
                 ?>
                    <a href="<?php _p(__FORM_APPLICATION__); ?><?php _p($link.$outward->DocInOut); ?>"  title="<?php _t('OutWard Doc') ?>" >
                        <div class="btn btn-default btn-default" style=" border-color: #ff831e; ">
                             <?php _p($outward->DocInOutObject->Code); ?>
                        </div>
                    </a>
                <?php }} ?>
             </div>
         </div>
</div>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>