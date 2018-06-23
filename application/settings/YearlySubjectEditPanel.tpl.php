<?php
	// This is the HTML template include file (.tpl.php) for yearly_subjectEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.
?>
	<div class="form-controls">
<?php $_CONTROL->lblIdyearlySubject->RenderWithName(); ?><?php $_CONTROL->txtCode->RenderWithName(); ?><?php $_CONTROL->lstSubjectObject->RenderWithName(); ?><?php $_CONTROL->lstDeptYearObject->RenderWithName(); ?><?php $_CONTROL->chkAllDept->RenderWithName(); ?>	</div>

	<div class="form-actions">
		<div class="form-save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div class="form-cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div class="form-delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>