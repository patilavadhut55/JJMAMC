<h2><?php _p($_CONTROL->strTitleVerb); ?></h2>
    <div class="form-controls">
        <?php 
            $dept_years = DeptYear::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::DeptYear()->Department, $_CONTROL->objRole->Idrole)
                        ));
            if($dept_years){
        ?>
        <table class='datagrid'>
            <tr>
                <th></th>
                <th>Department Year</th>
                <th></th>
            </tr>
            <?php foreach($dept_years as $dept_year){?>
            <tr>
                <td><?php $_CONTROL->lbldel[$dept_year->IddeptYear]->Render(); ?></td>
                <td><?php _p($dept_year->Name);?></td>
                <td><?php $_CONTROL->lblCourses[$dept_year->IddeptYear]->Render(); ?></td>
            </tr>
           <?php } ?>
        </table>   
        <?php }?> 

        <div class="col-md-6"><?php $_CONTROL->lstcalender->Render(); ?></div>
        <div class="col-md-4"><?php $_CONTROL->btnGenerate->Render() ?>
            <?php $_CONTROL->btnCancel->Render() ?></div>
        <div class="clear"></div>
    </div>
        