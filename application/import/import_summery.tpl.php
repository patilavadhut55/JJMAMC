<?php
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <?php
    $pros = array();
    
    $stds = Ledger::LoadArrayByGrp(244);
    $c = 1;
    foreach ($stds as $std){
        $found = substr($std->Code, 4, -3);
        if(!in_array($found, $pros) && $found != ""){
            $pros[$c] = $found;
            $c++;
        }
    }
    $sr = 1;
    foreach ($pros as $pro){
        $programs[$sr++] = $pro;
    }
    
    $yfrom = 2010; $yto = 2015;
    $xtotal = $ytotal = array();
    $total = 0;
    
    for($i = $yfrom; $i<=$yto; $i++)
        foreach ($programs as $key => $program)
            $StdCount[$key][$i] = Ledger::QueryCount(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Ledger()->Grp, 244),
                            QQ::Like(QQN::Ledger()->Code, "%".$program."%"),
                            QQ::Like(QQN::Ledger()->Code, $i."%")
                            )
                    );
    ?>
    <p>
    <h3><span class="button buttonDefault success"><?php _p(Ledger::CountByGrp(244)); ?></span> 
        Student Import Status </h3>
    <table class="datagrid">
        <tr>
            <th>Program</th>
            <?php
            for($i = $yfrom; $i<=$yto; $i++){
            ?>
            <th><?php _p($i.' - '.($i+1) ); ?></th>
            <?php
            }
            ?>
            <th>Total</th>
        </tr>
        <?php
            foreach ($programs as $key => $program){
        ?>
        <tr>
            <td><?php _p($program); ?></td>
            <?php
            for($i = $yfrom; $i<=$yto; $i++){
            ?>
            <td><a href="import_stud.php?year=<?php _p($i); ?>&prog=<?php _p($program); ?>"><?php _p($StdCount[$key][$i]);?></a>
            <?php
                if(array_key_exists($key, $xtotal))
                    $xtotal[$key] = $xtotal[$key] + $StdCount[$key][$i];
                else
                    $xtotal[$key] = $StdCount[$key][$i];

                if(array_key_exists($i, $ytotal))
                    $ytotal[$i] = $ytotal[$i] + $StdCount[$key][$i];
                else
                    $ytotal[$i] = $StdCount[$key][$i];

                ?>
            </td>
            <?php
            }
            ?>
            <td><?php _p($xtotal[$key]); ?></td>
        </tr>
        <?php        
            }
        ?>
        <tr>
            <th>Total</th>
            <?php
            for($i = $yfrom; $i<=$yto; $i++){
            ?>
            <th><?php _p($ytotal[$i]);
                $total = $total + $ytotal[$i];
            ?></th>
            <?php
            }
            ?>
            <th><?php _p($total); ?></th>
        </tr>
    </table>
    Balance <?php _p(Ledger::CountByGrp(244) - $total); ?>
    </p>
</div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>