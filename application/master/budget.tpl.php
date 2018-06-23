<?php
	// This is the HTML template include file (.tpl.php) for the budget_cat_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Budget');
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>

	
	<div class="form-controls">
<?php //$this->lblIdbudgetCat->RenderWithName(); ?>
            <table>
                <tr>
                    <td align="center" style="padding: 10px"><h5><b>Budget Title</b></h5></td><td align="center"><?php $this->txtbudgetTitle->Render(); ?></td>
                    <td align="center" style="padding: 10px"><h5><b>Year</b></h5></td><td align="center"><?php $this->lstYaer->Render(); ?>   </td> 
                    <td align="center" style="padding: 10px"><h5><b>Budget Category</b></h5></td><td align="center"><?php $this->lstBudgetType->Render(); ?>  </td>
                    <td align="center" style="padding: 10px"><h5><b>Budget Amount</b></h5></td><td align="center"><?php $this->txtAmount->Render(); ?></td>
                    <td align="center" style="padding: 10px"><?php $this->btnAdd->Render(); ?></td>
                    <td align="center" style="padding: 10px"><?php $this->btnDelete->Render(); ?></td>
                    <td align="center" style="padding: 10px"><?php $this->btnCancel->Render(); ?>
                    </td>
                </tr>
            </table>
            <div class="form-actions">
         <?php $this->dtgBudgetCats->Render(); ?>     
	</div>
    
    </div>
	
        


	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>