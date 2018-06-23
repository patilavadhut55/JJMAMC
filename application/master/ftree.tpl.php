<?php
    $strPageTitle = QApplication::Translate('Group') ;
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin() ?>
    <link rel="StyleSheet" href="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/dtree/dtree.css" type="text/css" />
    <script type="text/javascript" src="<?php _p(__VIRTUAL_DIRECTORY__.__JS_ASSETS__); ?>/dtree/vertdtree.js"></script>
    
<script language=javascript>
	mytree = new dTree('mytree');	
	
	mytree.add(145, -1, 'Developers', 'team_index.asp?groupe_id=145', 'Developers', '', '');
        
	mytree.add(148, 145, 'Desktop Developers', 'team_index.asp?groupe_id=148', 'Desktop Developers', '', '');
	mytree.add(147, 145, 'Web Developers', 'team_index.asp?groupe_id=147', 'Web Developers', '', '');
	mytree.add(149, 147, 'Asp.net Developers', 'team_index.asp?groupe_id=149', 'Asp.net Developers', '', '');
	mytree.add(151, 149, 'Asp.net 1.0', 'team_index.asp?groupe_id=151', 'Asp.net 1.0', '', '');
	mytree.add(152, 149, 'Asp.net 1.1', 'team_index.asp?groupe_id=152', 'Asp.net 1.1', '', '');
	mytree.add(153, 149, 'Asp.net 2.0', 'team_index.asp?groupe_id=153', 'Asp.net 2.0', '', '');
	mytree.add(150, 147, 'PHP Developers', 'team_index.asp?groupe_id=150', 'PHP Developers', '', '');
	mytree.add(154, 150, 'Zend Studio', 'team_index.asp?groupe_id=154', 'Zend Studio', '', '');

	document.write(mytree); 
</script> 





<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>