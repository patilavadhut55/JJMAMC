<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="774" height="230" border="0">
  <tr>
    <td width="412"><?php $this->txtCode->RenderWithName(); ?></td>
    <td colspan="2" align="right"><?php $this->calDate->Render(); ?></td>
  </tr>
  <tr>
    <td><?php $this->txtFrom->RenderWithName(); ?></td>
    <td width="97">To</td>
    <td width="251"><?php $this->txtTo->Render(); ?></td>
  </tr>
  <tr>
    <td><?php $this->txtDept->RenderWithName(); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="24"><?php $this->txtAsset->RenderWithName(); ?></td>
    <td>Quantity</td>
    <td><?php $this->txtQty->Render(); ?></td>
  </tr>
  <tr>
    <td><?php $this->txtNarration->RenderWithName(); ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>