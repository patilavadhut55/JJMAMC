<h2><?php _p($_CONTROL->strTitleVerb); ?></h2>
<div class="form-controls">
       
         <?php $_CONTROL->txtName->RenderWithName(); ?>
         <?php $_CONTROL->txtColor->RenderWithName(); ?>
         <?php $_CONTROL->txtDescription->RenderWithName(); ?>
         <?php $_CONTROL->lstParrentObject->RenderWithName(); ?>
         <?php $_CONTROL->lstDepartmentObject->RenderWithName(); ?>
         <?php $_CONTROL->calFromDate->RenderWithName(); ?>
         <?php $_CONTROL->calFixedToDate->RenderWithName(); ?>
         <?php $_CONTROL->lstOccuranceObject->RenderWithName(); ?>
         
    <div class="form-actions">
            <div class="form-save"><?php $_CONTROL->btnSave->Render() ?></div>
            <div class="form-cancel"><?php $_CONTROL->btnCancel->Render() ?></div>
            <div class="form-delete"><?php $_CONTROL->btnDelete->Render() ?></div>
        </div>
</div>