<?php
	$strPageTitle = QApplication::Translate('Estbalishment');
	//require(__CONFIGURATION__ . '/header.inc.php');
?>
 <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css" />
       
	<?php $this->RenderBegin() ?>
        <body <?php if(isset($_SESSION['login'])){ ?>style="background: none repeat scroll 0 0 #fff;" <?php } ?>>
<?php if(isset($_GET['role'])){ ?>
    <div class="form-controls">
        <?php $this->txtRoleDept->RenderWithName(); ?>
        <?php $this->txtRole->RenderWithName(); ?>
        <?php $this->chkActive->RenderWithName(); ?>
        <div class="form-actions">
        <div class="form-save"><?php $this->btnRoleSave->Render(); ?></div>
        <div class="form-delete"><?php $this->btnRoleDelete->Render(); ?></div>
        </div>  
    </div>
<?php }elseif(isset ($_GET['estab'])){
 $roles =LoginHasRole::QueryArray(
         QQ::AndCondition(
                        QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_GET['emprole']),
                        QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_GET['login'])
                        ));;   
                      foreach($roles as $role){}
 ?>
    <div class="pull-left"> <h4><?php _p($role->DepartmentObject.' - '.$role->DepartmentObject->Mname.'  |  '.$role->RoleIdroleObject.' - '.$role->RoleIdroleObject->Name); ?></h4></div>
    <div class="pull-right"><?php $this->btnList->Render(); ?></div>
        
    <div class="form-controls">
        <?php $this->chkEstabActive->RenderWithName(); ?>
        <?php $this->lstPost->RenderWithName(); ?>
        <?php $this->lstCategory->RenderWithName(); ?>
        <?php $this->calDate->RenderWithName(); ?>
        <?php $this->txtDetails->RenderWithName(); ?>
        <?php $this->calTerminationDate->RenderWithName(); ?>
        <?php $this->txtTermDetails->RenderWithName(); ?>
        <?php $this->txtSalary->RenderWithName(); ?> 
        <?php $this->txtAdditionalpay->RenderWithName(); ?> 
        <?php $this->txtPayDetails->RenderWithName(); ?> 
        <div class="form-actions">
        <div class="form-save"><?php $this->btnEstabSave->Render(); ?></div>
        <div class="form-cancel"><?php $this->btnEstabCancel->Render(); ?></div>
        <div class="form-cancel"><?php $this->btnSalary->Render(); ?></div>
        <div class="form-cancel"><?php $this->btnLeave->Render(); ?></div>
        <div class="form-delete"><?php $this->btnEstabDelete->Render(); ?></div>
        </div>  
    </div> 
<?php }else{ ?>            
            <div class="pull-right">  <?php  $this->btnNew->Render(); ?></div>
<div class="form-controls">
<?php 
if(isset($_GET['emp'])){
                    $logins = LoginHasRole::LoadArrayByLoginIdlogin($_GET['emp']);
                    if($logins){
                         $cnt=1;
                        foreach ($logins as $login){
?>
<div class="panel panel-default" style="margin-bottom: 0px !important;">                                            
           <div data-toggle="collapse" data-parent="#accordion" href="#collapse<?php _p($cnt); ?>" class="panel-heading" style="cursor: pointer;">                                            
                 
            <h4 class="panel-title">
                    <div class="pull-left margin-right-normal" style="padding: 5px 0px 5px 0px;">
                        <?php $this->lblEdit[$login->LoginIdlogin]->Render(); ?>
                    </div>
                    <div class="pull-left" style="padding: 5px 0px 5px 0px;">
                    <?php _p($login->RoleIdroleObject.' - '.$login->RoleIdroleObject->Mname.'   -   '.$login->DepartmentObject.' - '.$login->DepartmentObject->Mname); ?>
                    </div>
                    <div class="pull-right" >
                        <?php if($login->Active == 1) _p("Active"); else _p('Deactivated');  ?>
                        <?php $this->btnAddLink[$login->LoginIdlogin]->Render(); ?>
                    </div>
                </h4>
    <div style="clear: both;"></div>
            </div>
     <div id="collapse<?php _p($cnt);  $cnt++; ?>" class="panel-collapse collapse ">
                <div class="panel-body">
                    <table  border="0" class="datagrid">
  <tr>
    <th><div align="center">Sr.</div></th>
    <th><div align="center">Appointment</div></th>
    <th><div align="center">Category</div></th>
    <th><div align="center">Details</div></th>
    <th><div align="center">Working Period
    </div>      </th>
    <th><div align="center">Details</div></th>
    <th><div align="center">Salary</div></th>
    <th><div align="center">Copy</div></th>
    
  </tr>
  <?php
  $sr = 1;
  $estabs = Establishment::LoadArrayByRole($login->RoleIdrole);
  if($estabs){
    foreach ($estabs as $estab){    
  
  ?>
  <tr >
    <td><div align="center">
      <?php _p($sr++); ?>
    </div></td>
    <td><div align="center">
      <?php _p($estab->PostObject); ?>
    </div></td>
    <td><div align="center">
      <?php _p($estab->AppointmentCategoryObject); ?>
    </div></td>
    <td><div align="center">
      <?php _p($estab->AppointmentDetails); ?>
    </div></td>
    <td><div align="center">
      <?php _p(date('d/m/Y', strtotime($estab->AppointmentDate))); ?> To 
      <?php if($estab->DateOfTermination) _p(date('d/m/Y', strtotime($estab->DateOfTermination))); ?>
    </div></td>
    <td><div align="center">
      <?php _p($estab->TerminationDetails); ?>
    </div></td>
    <td><div align="center">
      <?php _p(number_format($estab->BasicSalary,2,'.','')); ?>
    </div></td>
     <td><?php  if($estab->DateOfTermination) $this->btnCopy[$login->Id][$estab->Idestablishment]->Render(); ?></td>
   
  </tr>
  <?php }} ?>
</table>

                </div>
     </div>
</div>
<?php }}} ?>
</div>
<?php } ?>
<?php $this->RenderEnd() ?>
        </body>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.js"></script>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/bootstrap.min.js"></script>
<script src="<?php _p(__APP_JS_ASSETS__) ; ?>/bootstrap-toggle.min.js"></script>
