<h1><?php
_p('Department Year')	
?></h1>
<p>
	
<?php $_CONTROL->txtName->RenderWithName(); ?>
<?php $_CONTROL->lstDepartmentObject->RenderWithName(); ?>
<?php $_CONTROL->lstCalenderObject->RenderWithName(); ?>
<?php $_CONTROL->lstAcademicObject->RenderWithName(); ?>
<?php $_CONTROL->btnSave->Render(); ?>
<?php $_CONTROL->btnCancel->Render(); ?>
<?php $_CONTROL->btnDelete->Render(); ?>
</p>	