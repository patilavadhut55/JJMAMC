<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>
        
	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Coursewise Assigned Subjects ')?>
	</div>

<div id="formControls"  style="width: 670px;">
  <table width="650" border="0" class="datagrid">
  <tr>
    <th width="42">Sr</th>
    <th width="235">Course</th>
    <th width="">Subjects</th>
  </tr>
  <?php 
  $courses = LoginHasHierarchy::QueryArray(
             QQ::AndCondition(
             QQ::Equal(QQN::LoginHasHierarchy()->Login, $_SESSION['idlogin']),
             QQ::Equal(QQN::LoginHasHierarchy()->Hierarchy, $_SESSION['post'])
             )
          );
  $sr = 1;
  foreach ($courses as $course){
  ?>
   <tr >
    <td><?php _p($sr++); ?></td>
    <td><?php _p($course->DepartmentObject->Name); ?></td>
    <td>
        <?php 
            $subs = StaffHasYearSubject::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::StaffHasYearSubject()->Staff, $_SESSION['idlogin']),
                    QQ::Equal(QQN::StaffHasYearSubject()->YearSubjectObject->Course, $course->Department)
                            )
                    ); 
                    foreach ($subs as $sub){
        ?>
        <div style="float: left;width: auto;padding: 5px;border: 1px solid lightblue;cursor: pointer;"><?php _p($sub->YearSubjectObject->SubjectObject->Name); ?></div>
                    <?php }?>
    </td>
   </tr>
  <?php } ?>
</table>

    </div>
        <?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>