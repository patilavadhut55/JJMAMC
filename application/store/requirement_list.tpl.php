<?php
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>

    <div class="pull-right slideup">
        <div style="margin:5px;"><?php $this->btnadd->Render(); ?></div>
        <div style="margin:5px; float: left;"><?php //$this->btnexport->Render(); ?></div>
    </div>
<div class="form-controls">
    <table>
        <tr>
            <td><strong>From &nbsp;&nbsp;&nbsp; </strong></td>
            <td><?php $this->calfrom->Render(); ?></td>
            <td><strong>To &nbsp;&nbsp;&nbsp; </strong></td>
            <td><?php $this->calto->Render(); ?></td>
        </tr>
    </table>
    <?php $this->dtg->Render(); ?>
</div>
<?php $this->RenderEnd() ?>

<?php //require(__CONFIGURATION__ . '/footer.inc.php'); ?>