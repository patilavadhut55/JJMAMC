<?php   require(__CONFIGURATION__ . '/header.inc.php');?>

<?php $this->RenderBegin() ?>
<h1>Product Acceptance</h1>
<div class="form-controls">
    <table class="datagrid" border="1" style="width: 700px !important; ">
        <tr>
            <th>Sr</th>
            <th>Date</th>
            <th>Item</th>
           
            <th>Serials</th>
            <th>Accept/Not</th>
        </tr>
        <?php 
          /*  $loginhasrole = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_SESSION['login']),
                                QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_SESSION['role'])    
                            ));
            foreach($loginhasrole as $role){}*/
            
            $sr = 1;  
            $depts = IssuedItems::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::IssuedItems()->Member, $_SESSION['login'])
                            ));
            if($depts){
                foreach($depts as $dept){
        ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p(date('d/m/Y', strtotime($dept->Date)));?></td>
            <td><?php _p($dept->ItemObject->DisplayName);?></td>
           
            <td><?php _p($dept->SerialsObject->Code);?></td>
            <td width="100"><?php $this->chkAccept[$dept->IdissuedItems]->Render();?></td>
        </tr>
            <?php }}?>
    </table>
    
    <div class="form-actions">
        <div class="form-save"><?php $this->btnSubmit->Render(); ?></div>
        <div class="clearfix"></div>
    </div>    
</div>
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>