<p><b>DepartMent Year</b></p>


<table border="1">
    <tr>
        <td>Name</td>
        <td>Department Name</td>
        <td>Calender Year</td>
        <td>Academic</td>
    </tr>
    <?php
    $deptyears = DeptYear::LoadAll();
    if($deptyears){
        foreach($deptyears as $deptyear){?>
    <tr>
        <td><?php $_CONTROL->lblEdit[$deptyear->IddeptYear]->Render();?></td>
        <td><?php _p($deptyear->DepartmentObject->Name);?></td>
        <td><?php _p($deptyear->CalenderObject->Name);?></td>
        <td><?php _p($deptyear->AcademicObject->Name);?></td>
    </tr>
    <?php }}?>
</table>