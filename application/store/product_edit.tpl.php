    <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>CSS3-Slider/res/css/style.css"/>
  
	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php _t('Assets')?>
	</div>

	<div id="formControls">
	  <table width="850" border="0">
	    <tr>
		    <td width="409"><?php $this->txtCode->RenderWithName(); ?></td>
                    <td width="481">&nbsp;</td>
        </tr>
		  <tr>
		    <td><?php $this->txtName->RenderWithName(); ?></td>
		    <td><?php $this->lstUnitObject->RenderWithName(); ?></td>
	      </tr>
		  <tr>
		    <td><?php $this->txtGroup->RenderWithName(); ?></td>
		    <td><?php $this->txtCat->RenderWithName(); ?></td>
	      </tr>
		  <tr>
		    <td><?php $this->txtPurchasePrice->RenderWithName(); ?></td>
		    <td><?php $this->txtMinStock->RenderWithName(); ?></td>
	      </tr>
		  <tr>
		    <td></td>
		    <td></td>
	      </tr>
		  
              
	  </table>
	  

            
        <div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	</div>

	<?php $this->RenderEnd() ?>

