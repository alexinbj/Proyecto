<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	    <div align="left">AUTOS USADOS DISPONIBLES </div>
	  </div>
	  <form id="registrovend" name="form1" method="post" action="registrov.php">
        <p>
          <label></label>
        
		<?

$miconexion=mysql_connect ("localhost","root","@sepultura");
mysql_select_db("autos",$miconexion);

$result = mysql_query("SELECT * FROM `autos`.`cliente` LIMIT 0, 50;", $miconexion);

if ($row = mysql_fetch_array($result)){

echo "<table border = '1'> \n";

echo "<tr> \n";

echo "<td><b>ID</b></td> \n";
echo "<td><b>PERSONA</b></td> \n";
echo "<td><b>NOMBRE</b></td> \n";
echo "<td><b>APELLIDO PATERNO</b></td> \n";
echo "<td><b>APELLIDO MATERNO</b></td> \n";
echo "<td><b>DIRECCION</b></td> \n";
echo "<td><b>ESTADO</b></td> \n";
echo "<td><b>MUNICIPIO</b></td> \n";
echo "<td><b>CODIGO POSTAL</b></td> \n";
echo "<td><b>TEL FIJO</b></td> \n";
echo "<td><b>TEL CELULAR</b></td> \n";

echo "</tr> \n";

do {

echo "<tr> \n";

echo "<td>".$row["id_cliente"]."</td> \n";
echo "<td>".$row["tipo_persona"]."</td>\n";
echo "<td>".$row["nombre"]."</td>\n";
echo "<td>".$row["ap_paterno"]."</td>\n";
echo "<td>".$row["ap_materno"]."</td>\n";
echo "<td>".$row["Direccion"]."</td>\n";
echo "<td>".$row["Estado"]."</td>\n";
echo "<td>".$row["Municipio"]."</td>\n";
echo "<td>".$row["cp"]."</td>\n";
echo "<td>".$row["tel_fijo"]."</td>\n";
echo "<td>".$row["tel_movil"]."</td>\n";

echo "</tr> \n";

} while ($row = mysql_fetch_array($result));

echo "</table> \n";

} else {

echo "¡ La base de datos está vacia !";

}


?>
		</p>
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
