<?php
	// This is the HTML template include file (.tpl.php) for the cast_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Casts') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?>/admission/cast_edit.php">
            <div class="btn btn-success pull-right slideup">
                    <?php _t('Create a New'); ?> <?php _t('Cast');?>
            </div>
        </a>
	<?php $this->dtgCasts->Render(); ?>


	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>