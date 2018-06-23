<?php $strPageTitle = QApplication::Translate('Event List'); ?>
<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls ">
    <div class="col-md-4"><?php $this->calFrom->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->calTo->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->lstDept->Render(); ?></div>
    <div class="clearfix"></div>
    <div class="col-md-4"><?php $this->lstSem->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->lstEvent->RenderWithName(); ?></div>
    <div class="col-md-4"><?php $this->btnSearch->Render(); ?>
    <?php $this->btnadd->Render(); ?></div>
    <div class="clearfix"></div>
    
</div>
<?php $this->dtgEvent->Render(); ?>

<?php $this->RenderEnd() ;?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>