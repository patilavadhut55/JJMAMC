<p><b>Calender</b></p>


<table>
   
    <?php
   $years = CalenderYear::LoadAll();
    if($years){
        foreach($years as $year){?>
    <tr>
        <td><?php $_CONTROL->lblEdit[$year->IdcalenderYear]->Render();?></td>
    </tr>
    <?php }}?>
</table>