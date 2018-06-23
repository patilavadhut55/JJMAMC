<?php
    $strPageTitle = QApplication::Translate('Products') . ' - ' . QApplication::Translate('List All');
    require(__CONFIGURATION__ . '/header.inc.php');
?>

    <?php $this->RenderBegin() ?>

    <div id="titleBar">
        <?php _t('Assets List'); ?>  <div style="float: right; margin-right: 25%;"><?php $this->btnadd->Render(); ?></div>
    </div>
<br>
    <div id="formControls" style="width: 1000px;">
            <?php $this->lstGroup->RenderWithName(); ?>
             <table class="datagrid">
                <tr>
                  <th></th>
                  <th>Sr.</th>
                  <th width="350">Asset</th>
                  <th width="100">Group</th>
                  <th width="70">Cost</th>
                </tr>
                <?php 
                    if($this->lstGroup->SelectedValue == NULL)
                    $prods = Product::LoadArrayByGroup (10); 
                    else
                    $prods = Product::LoadArrayByGroup ($this->lstGroup->SelectedValue); 
                   
                    $sr = 1;
                    foreach ($prods as $prod) {
                 ?>
                <tr>
                    <td width="17">
                        <?php $this->lblDel[$prod->Idproduct]->Render();?>
                    </td>
                                        
                    <td width="49"><?php _p($sr++); ?></td>
                    <td width="350"><?php $this->lblEdit[$prod->Idproduct]->Render(); _p($prod->Name);?></td>
                    
                    <td width="100"><?php _p($prod->GroupObject); ?></td>
                    <td width="70" align="right"><?php _p($prod->PurchasePrice);?>&nbsp;</td>
                </tr>
                <?php }?>
                
     </table>
    
</div>
    
 <?php $this->pnlPanel->Render('Cursor=move'); ?>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>