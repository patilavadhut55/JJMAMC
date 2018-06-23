<?php
    $strPageTitle = QApplication::Translate('Member') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls">
    <div class="col-md-6"><?php $this->calDate->RenderWithName(); ?></div>
    <div class="col-md-6"><?php $this->lstDept->RenderWithName(); ?></div>
    <div style="clear: both;"></div>
    
    <table class="datagrid">
        <tr>
            <th>Sr.</th>
            <th>Items</th>
            <th>Serials</th>
            <th>Actions</th>
        </tr>
        <?php if(isset($_GET['dept'])){
            $sr = 1;
            $temptrans = TempTransfer::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::TempTransfer()->ToDept, $_GET['dept'])
                        )
                    );
                    foreach ($temptrans as $temptran){
        ?>
        <tr>
            <td><?php _p($sr++); ?></td>
            <td><?php _p($temptran->IddeptTransferObject->ItemObject->DisplayName); ?></td>
            <td><?php _p($temptran->IddeptTransferObject->SerialsObject->Code); ?></td>
            <td><?php $this->btnRemove[$temptran->IdtempTransfer]->Render(); ?></td>
        </tr>
        <?php }}?>
        <tr>
            <td></td>
            <td><?php $this->lstItems->Render(); ?></td>
            <td><?php $this->lstSerials->Render(); ?></td>
            <td><?php $this->btnAdd->Render(); ?></td>
        </tr>
    </table>
</div>

<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>