<?php require_once('../../../Connections/alex.php'); ?>
<?php
$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_alex, $alex);
$query_Recordset1 = "SELECT * FROM cliente ORDER BY id_cliente ASC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $alex) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
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
.Estilo1 {
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>
<body bgcolor="#0066cc">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#99ccff">
	<td width="17" nowrap="nowrap" ><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="60" colspan="3" class="logo" nowrap="nowrap">	DEF AUTOMOTRIZ, SA DE CV</td>
	<td width="12">&nbsp;</td>
	<td width="15">&nbsp;</td>
	</tr>

	<tr bgcolor="#003399">
	<td width="17" nowrap="nowrap">&nbsp;</td>
	<td height="36" colspan="3" id="navigation" nowrap="nowrap" class="navText"><a href="../principal.php">REGRESAR A PRINCIPAL </a><a href="javascript:;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	  <td width="12">&nbsp;</td>
	<td width="15">&nbsp;</td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="2" valign="top" bgcolor="#ffffcc"><p>&nbsp;</p>	  </td>
	<td width="146" valign="top"><p align="center"><img src="ford-logo.jpg" width="250" height="180" /></p>	  </td>
	<td width="645" valign="top">&nbsp;
	  <div align="center" class="Estilo1">
	    <div align="left">PEDIDOS</div>
	  </div>
	  <form id="registrovend" name="form1" method="post" action="registrov.php">
        <p>
          <label></label>
        </p>
        
        <table border="1" cellspacing="2">
          <tr>
            <td>id_cliente</td>
            <td>tipo_persona</td>
            <td>nombre</td>
            <td>ap_paterno</td>
            <td>ap_materno</td>
            <td>Direccion</td>
            <td>Estado</td>
            <td>Municipio</td>
            <td>cp</td>
            <td>tel_fijo</td>
            <td>tel_movil</td>
          </tr>
          <?php do { ?>
            <tr>
              <td><?php echo $row_Recordset1['id_cliente']; ?></td>
              <td><?php echo $row_Recordset1['tipo_persona']; ?></td>
              <td><?php echo $row_Recordset1['nombre']; ?></td>
              <td><?php echo $row_Recordset1['ap_paterno']; ?></td>
              <td><?php echo $row_Recordset1['ap_materno']; ?></td>
              <td><?php echo $row_Recordset1['Direccion']; ?></td>
              <td><?php echo $row_Recordset1['Estado']; ?></td>
              <td><?php echo $row_Recordset1['Municipio']; ?></td>
              <td><?php echo $row_Recordset1['cp']; ?></td>
              <td><?php echo $row_Recordset1['tel_fijo']; ?></td>
              <td><?php echo $row_Recordset1['tel_movil']; ?></td>
            </tr>
            <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </table>
        <p>&nbsp;</p>
	  </form>	  </td>
	<td width="12">&nbsp;</td>
	<td width="15">&nbsp;</td>
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
	<td width="9">&nbsp;</td>
	<td width="146">&nbsp;</td>
	<td width="645">&nbsp;</td>
	<td width="12">&nbsp;</td>
	<td width="15">&nbsp;</td>
	</tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
