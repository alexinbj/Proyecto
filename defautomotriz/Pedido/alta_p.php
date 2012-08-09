<?php require_once('../../Connections/alex.php'); ?><?php
mysql_select_db($database_alex, $alex);
$query_F_pago = "SELECT concepto FROM f_pago ORDER BY concepto ASC";
$F_pago = mysql_query($query_F_pago, $alex) or die(mysql_error());
$row_F_pago = mysql_fetch_assoc($F_pago);
$totalRows_F_pago = mysql_num_rows($F_pago);

mysql_select_db($database_alex, $alex);
$query_modelo = "SELECT modelo FROM auto_nuevo WHERE modelo = modelo ORDER BY modelo ASC";
$modelo = mysql_query($query_modelo, $alex) or die(mysql_error());
$row_modelo = mysql_fetch_assoc($modelo);
$totalRows_modelo = mysql_num_rows($modelo);

mysql_select_db($database_alex, $alex);
$query_catalogo = "SELECT catalogo FROM auto_nuevo ORDER BY catalogo ASC";
$catalogo = mysql_query($query_catalogo, $alex) or die(mysql_error());
$row_catalogo = mysql_fetch_assoc($catalogo);
$totalRows_catalogo = mysql_num_rows($catalogo);

mysql_select_db($database_alex, $alex);
$query_serie = "SELECT serie FROM auto_nuevo ORDER BY serie ASC";
$serie = mysql_query($query_serie, $alex) or die(mysql_error());
$row_serie = mysql_fetch_assoc($serie);
$totalRows_serie = mysql_num_rows($serie);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Def Automotriz - P&aacute;gina principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_restaurant1.css" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#0066cc">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#99ccff">
	<td width="17" nowrap="nowrap" ><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="60" colspan="3" class="logo" nowrap="nowrap">	DEF AUTOMOTRIZ, SA DE CV</td>
	<td width="4">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>

	<tr bgcolor="#003399">
	<td width="17" nowrap="nowrap">&nbsp;</td>
	<td height="36" colspan="3" id="navigation" nowrap="nowrap" class="navText"><a href="../principal.php">REGRESAR A PRINCIPAL</a></td>
	  <td width="4">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="2" valign="top" bgcolor="#ffffcc"><p>&nbsp;</p>	  </td>
	<td width="255" valign="top"><p><img src="ford-logo.jpg" width="250" height="180" /></p>	  </td>
	<td width="535" valign="top">&nbsp;
	  <div align="center" class="Estilo1">
	    <div align="left" class="Estilo2">REGISTRO DE PEDIDO </div>
	  </div>
	  <form id="registrovend" name="form1" method="post" action="registrop.php">
        <p>NUM
          <input name="txt_idped" type="text" id="txt_idped" size="3" maxlength="3" /> 
          TIPO PERSONA
          <input name="txt_persona" type="text" id="txt_persona" size="10" maxlength="10" />
</p>
        <p>
          <label>NOMBRE</label>
          &nbsp;
          <label>
          <input name="txt_nombre" type="text" id="txt_nombre" size="28" maxlength="28" />
          APELLIDO PATERNO </label>
          <label> </label>
&nbsp;
<label>
<input name="txt_paterno" type="text" id="txt_paterno" size="28" maxlength="28" />
</label>
</p>
        <p>
  <label>APELLIDO MATERNO</label>
  &nbsp;
  <label>
  <input name="txt_materno" type="text" id="txt_materno" size="28" maxlength="28" />
  </label><label></label>
<label></label><label>DIRECCION</label>
          &nbsp;
          <label>
          <input name="txt_direccion" type="text" id="txt_direccion" size="40" maxlength="40" />
          </label>
        </p>
        <p>
  <label>ESTADO </label>
  &nbsp;
  <label>
  <input name="txt_estado" type="text" id="txt_estado" size="40" maxlength="40" />
  </label>
          <label>MUNICIPIO </label>
  &nbsp;
  <label>
  <input name="txt_municipio" type="text" id="txt_municipio" size="40" maxlength="40" />
  </label>
  <label>CODIGO POSTAL </label>
  &nbsp;
  <label>
  <input name="txt_postal" type="text" id="txt_postal" size="5" maxlength="5" />
  </label>
        </p>
        <p>TELEFONO FIJO 
          <input name="txt_telcasa" type="text" id="txt_telcasa" size="10" maxlength="10" />
        TELEFONO CELULAR 
          <input name="txt_telcel" type="text" id="txt_telcel" size="10" maxlength="10" />
        </p>
        <p>&nbsp;</p>
        <p>
          <label></label><label></label>
          <label>FORMA DE PAGO  </label>
          &nbsp;
          <label></label>
          <label>
          <select name="select" size="1">
            <?php
do {  
?>
            <option value="<?php echo $row_F_pago['concepto']?>"><?php echo $row_F_pago['concepto']?></option>
            <?php
} while ($row_F_pago = mysql_fetch_assoc($F_pago));
  $rows = mysql_num_rows($F_pago);
  if($rows > 0) {
      mysql_data_seek($F_pago, 0);
	  $row_F_pago = mysql_fetch_assoc($F_pago);
  }
?>
          </select>
          </label>
          MODELO
          <label for="select"></label>
          <label></label>
          <label>
          <select name="select2" size="1">
            <?php
do {  
?>
            <option value="<?php echo $row_modelo['modelo']?>"<?php if (!(strcmp($row_modelo['modelo'], $row_modelo['modelo']))) {echo "selected=\"selected\"";} ?>><?php echo $row_modelo['modelo']?></option>
            <?php
} while ($row_modelo = mysql_fetch_assoc($modelo));
  $rows = mysql_num_rows($modelo);
  if($rows > 0) {
      mysql_data_seek($modelo, 0);
	  $row_modelo = mysql_fetch_assoc($modelo);
  }
?>
          </select>
          </label>
          CATALOGO
          <label>
          <select name="select3">
            <?php
do {  
?>
            <option value="<?php echo $row_catalogo['catalogo']?>"><?php echo $row_catalogo['catalogo']?></option>
            <?php
} while ($row_catalogo = mysql_fetch_assoc($catalogo));
  $rows = mysql_num_rows($catalogo);
  if($rows > 0) {
      mysql_data_seek($catalogo, 0);
	  $row_catalogo = mysql_fetch_assoc($catalogo);
  }
?>
          </select>
          </label>
        SERIE
        <label>
        <select name="select4">
          <?php
do {  
?>
          <option value="<?php echo $row_serie['serie']?>"><?php echo $row_serie['serie']?></option>
          <?php
} while ($row_serie = mysql_fetch_assoc($serie));
  $rows = mysql_num_rows($serie);
  if($rows > 0) {
      mysql_data_seek($serie, 0);
	  $row_serie = mysql_fetch_assoc($serie);
  }
?>
        </select>
        </label>
        </p>
        <p>&nbsp;</p>
        <p>
          <label>
          <input type="submit" name="Submit" value="Enviar" />
          </label>
          <label>
          <input name="limpiar" type="reset" id="limpiar" value="limpiar" />
          </label>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
	  </form>	  </td>
	<td width="4">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr>
	<td colspan="6">&nbsp;</td>
	</tr>


	<tr bgcolor="#003399">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>


	<tr>
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
	</tr>

	<tr bgcolor="#003399">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>


	<tr>
	<td width="17">&nbsp;</td>
	<td width="4">&nbsp;</td>
	<td width="255">&nbsp;</td>
	<td width="535">&nbsp;</td>
	<td width="4">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>
</table>
</body>
</html>
<?php
mysql_free_result($F_pago);

mysql_free_result($modelo);

mysql_free_result($catalogo);

mysql_free_result($serie);
?>