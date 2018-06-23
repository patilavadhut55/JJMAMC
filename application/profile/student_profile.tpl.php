<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

<div class="form-controls" >
    <div class="col-md-7 pull-left" >        
        <div>
        <div style="float: left; width: 94%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
        <div style="float: left; width:5%; margin-top: 4px;"><?php $this->btnSearch->Render(); ?></div>
        <div style="clear: both;"></div>
        </div>
    </div>
     <div style="clear: both;"></div>
</div>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php');?>
