<?php 
require('../../qcubed.inc.php');
$iwow = Iwow::LoadByIdiwow($_GET['id']);
$accs = Serials::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::Serials()->Item, $_GET['prod']),
         QQ::Equal(QQN::Serials()->Ref, $iwow->Idiwow)        
                ));
?>
 <body onload="window.print(); document.location.href = '<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/store/inward_outward.php?id=<?php _p($iwow->Idiwow); ?>&po=<?php _p($iwow->PoNo); ?>&cat=<?php _p($iwow->IwowCat); ?>';" >
<?php foreach ($accs as $acc){
?>    

<div style="margin: 5px; float: left;"><IMG SRC="barcode.php?barcode=<?php _p($acc->Code);  ?>&width=180&height=60"></div>
<?php }
?>