<?php
        require('../../qcubed.inc.php');

        if(isset($_GET["id"])) $id=$_GET["id"];
        
        $inward = Iwow::LoadByIdiwow($id);
        
?>
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>
<body onLoad="window.print();">

<div id="barcodeset">
<?php
$accs = Accession::LoadArrayByRef($id);
foreach ($accs as $acc){
    ?>

    <div id="barcode">
    <?php //_p($objcompany->Name);?>
    <IMG SRC="barcode.php?barcode=<?php _p($acc->Code); ?>&width=180&height=60" />
    
    </div>
<?php
}
?>
</div>