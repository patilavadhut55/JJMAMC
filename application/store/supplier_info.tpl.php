<?php
    $strPageTitle = QApplication::Translate('Supplier List');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
 <?php $this->RenderBegin() ?>
<h1><?php _t('Supplier List'); ?></h1>
 <table border="1" class="datagrid">
                <tr style="background: #f1f6f6; font-weight: bolder;">
                    <th><div align="center">Sr.</div></th>
                    <th><div align="center">Supplier Name</div></th>  
                    <th><div align="center">Approve</div></th>
                </tr>
            <?php 
                $Sr =1;
                    $ledgers = Ledger::LoadArrayByGrp(35);
                if($ledgers){
                foreach ($ledgers as $ledger){
            ?>
             <tr >
                <td align="Center"><?php _p($Sr++);?></td>
                <td align="Center"><?php _p($ledger->Name); ?></td>
                 <td align="center"><?php $this->chkaprove[$ledger->Idledger]->Render(); ?></div></td>
                
            </tr>
       
            <?php } }?>
	</table>
            </div>
<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>