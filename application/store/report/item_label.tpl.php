<?php
    //$strPageTitle = QApplication::Translate('Products') . ' - ' . QApplication::Translate('List All');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
    <table width="980" border="0" class="datagride">
     <td>
       <div id="titleBar"><?php _t('Items'); ?></div></td>
          <tr> 
              <td width="800" height="40">
                <div id="formControls">  
                     <?php $this->dtg->Render(); ?>
              </div></td>  
              <td width="48" valign="top"><span style="float: right;">
                  <?php $this->btnimport->Render(); ?></span>
              <span style="float: right;">
            <?php $this->btnexport->Render(); ?></span><td>
          </tr>
</table>
    

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>