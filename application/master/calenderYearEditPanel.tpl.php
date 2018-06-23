<h2><?php _p($_CONTROL->strTitleVerb); ?></h2>
<div class="form-controls">	
    <?php $_CONTROL->txtName->RenderWithName(); ?>
    <?php $_CONTROL->txtDescription->RenderWithName(); ?>
    <?php $_CONTROL->calForm->RenderWithName(); ?>
    <?php $_CONTROL->calTo->RenderWithName(); ?>
    <?php $_CONTROL->chkvisible->RenderWithName(); ?>
    <?php $_CONTROL->chkactive->RenderWithName(); ?>
    <?php $_CONTROL->chkapprove->RenderWithName();?>
    <?php $_CONTROL->txtSeq->RenderWithName(); ?>
    <?php $_CONTROL->txtPercentage->RenderWithName(); ?>
    
    <div class="form-actions">
       <div class="form-actions">
            <div class="form-save"><?php $_CONTROL->btnSave->Render() ?></div>
            <div class="form-cancel"><?php $_CONTROL->btnCancel->Render() ?></div>
            <div class="form-delete"><?php $_CONTROL->btnDelete->Render() ?></div>
    </div>
</div>