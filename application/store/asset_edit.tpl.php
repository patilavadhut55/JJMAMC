
    <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles_blue.css");</style>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>CSS3-Slider/res/css/style.css"/>
           
<?php $this->RenderBegin(); ?>
    
    <div id="titleBar">
             <?php _p('Asset'); ?>
    </div>
    
  <div id="formControls" Width="800">  
    <table width="773" border="0">
     <tr>
       <td width="382" height="30"><?php $this->txtCode->RenderWithName(); ?></td>
       <td width="362" height="30">&nbsp;</td>
     </tr>
     <tr>
       <td height="27"><?php $this->txtName->RenderWithName(); ?></td>
       <td><?php $this->lstUnitObject->RenderWithName(); ?></td>
     </tr>
     <tr>
       <td height="29"><?php $this->txtPrice->RenderWithName(); ?></td>
       <td><?php $this->lstGroupObject->RenderWithName(); ?></td>
     </tr>
     <tr>
        <td height="29"><?php $this->txtOpeningQty->RenderWithName(); ?></td>
        <td><?php $this->txtOpeningAmt->RenderWithName(); ?></td>
     </tr>
     <tr>
         <td height="29" colspan="2"><?php $this->txtSubName->RenderWithName(); ?></td>
        <td></td>
     </tr>
    </table>     
   
<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>
</div>
   
<?php $this->RenderEnd(); ?>
