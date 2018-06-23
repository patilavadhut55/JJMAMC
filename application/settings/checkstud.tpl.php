    <?php require(__CONFIGURATION__ . '/header.inc.php'); ?>        
    <?php $this->RenderBegin() ?>

    
    <div class="form-controls" style="width: 100%;">
        <div style=" margin-bottom: 10px; ">
            <div style="padding: 1px;" class="col-md-8">
                <div class="pull-left" style="width: 88%;"><?php  $this->txtSearch->RenderWithName(); ?></div>
                <div class="pull-left" style="margin-top: 4px; margin-left: 5px;"><?php $this->btnSearch->Render(); ?></div>
                <div style="clear: both;"></div>
            </div>
        </div>
        
        
        
        <div class="clearfix"></div>
        
        
    </div>    
    <?php $this->RenderEnd() ?>
<?php
    //require(__CONFIGURATION__ .'/footer.inc.php');
?>