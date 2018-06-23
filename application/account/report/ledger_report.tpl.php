<?php
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
	
<div class="form-controls">
    <table width="423" border="0">
        <tr>
            <td>Ledger&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $this->txtledger->Render(); ?></td>
            <td>&nbsp;<?php $this->btnReport->Render(); ?></td>
        </tr>
    </table>

     <?php $this->dtgledger->Render(); ?>
    <div style="clear: both;"></div>
</div>
    
    <?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>