<link href="calenedar.css" type="text/css" rel="stylesheet" />
<div class="form-controls">
       <?php 
        for ($i=1; $i <= 12; $i++){ 
            if($i < 10) $i = "0".$i; //month needs 2 char
        ?>
        <p><?php $this->lblMonths[$i]->Render(); ?></p>
        <?php }  ?>
        <div class="col-md-10"><?php $this->lblCalander->Render(); ?></div>
</div>