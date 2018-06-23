<?php
	// This is the HTML template include file (.tpl.php) for the budget_cat_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('BudgetCats');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

<div class="form-controls">
            <table>
        <td lign="center" style="padding: 10px"><h4><b>Budget Category</b></h4> </td><td><?php $this->txtName->Render(); ?></td>
        <td lign="center" style="padding: 10px"> <?php $this->btnSave->Render(); ?></td>
        <td lign="center" style="padding: 10px"> <?php $this->btndelete->Render(); ?></td>
        <td lign="center" style="padding: 10px"><?php $this->btnCancel->Render(); ?></td>
    </table>
 <div class="form-actions">
	<?php $this->dtgBudgetCats->Render(); ?>
  </div>
        </div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>