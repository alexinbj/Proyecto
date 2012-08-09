<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Def Autmotriz - P&aacute;gina principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_restaurant1.css" type="text/css" />
</head>


<body bgcolor="#0066cc">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#99ccff">
	<td width="17" nowrap="nowrap" ><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="60" colspan="3" class="logo" nowrap="nowrap"><br />
	DEF AUTOMOTRIZ, SA DE CV</td>
	<td width="12">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>

	<tr bgcolor="#003399">
	<td width="17" nowrap="nowrap">&nbsp;</td>
	<td height="36" colspan="3" id="navigation" nowrap="nowrap" class="navText"><a href="../principal.php">REGRESAR A PRINCIPAL </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	  <td width="12">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#ffffff">
	<td colspan="2" valign="top" bgcolor="#ffffcc"><p><img src="ford-logo.jpg" width="250" height="180" longdesc="Logo Ford" /></p>
	  <table border="0" cellspacing="0" cellpadding="0" width="230">
		<tr>
		<td width="15">&nbsp;</td>
		<td width="200" class="smallText" id="padding">Lo nuestro es la atencion y las ventas &nbsp;<br />		</td>
		<td width="15">&nbsp;</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="486" valign="top">&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="473">
		<tr>
		<td width="473" class="pageHeader"><p align="center">&nbsp;</p>
		  </td>
		</tr>

<?

$txt_idped=$_POST['txt_idped'];
$txt_persona=$_POST['txt_persona'];
$txt_nombre=$_POST['txt_nombre'];
$txt_paterno=$_POST['txt_paterno'];
$txt_materno=$_POST['txt_materno'];
$txt_direccion=$_POST['txt_direccion'];
$txt_estado=$_POST['txt_estado'];
$txt_municipio=$_POST['txt_municipio'];
$txt_postal=$_POST['txt_postal'];
$txt_telcasa=$_POST['txt_telcasa'];
$txt_telcel=$_POST['txt_telcel'];

$miconexion = mysql_connect ("localhost","root","@sepultura");
mysql_select_db("autos",$miconexion);
$sql_query = "insert into cliente values ($txt_idped,'$txt_persona','$txt_nombre','$txt_paterno','$txt_materno','$txt_direccion','$txt_estado','$txt_municipio',$txt_postal,'$txt_telcasa','$txt_telcel')";
if(mysql_query($sql_query,$miconexion))
{	
echo "<script type=\"text/javascript\">alert('Registro exitoso!!');</script>";

echo "Se registo al Cliente: $txt_nombre $txt_paterno $txt_materno";
} else {
echo "ocurrio un error <a href='javascript:history.go(-1)'>Regresar</a>";
}


?>



		<tr>
		
		<td class="bodyText"><div align="center"></div>
		  <p>&nbsp;</p>

		<br />		</td>
		</tr>
	</table>	</td>
	<td width="12">&nbsp;</td>
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
	<td width="250">&nbsp;</td>
	<td width="50">&nbsp;</td>
	<td width="486">&nbsp;</td>
	<td width="12">&nbsp;</td>
	<td width="13">&nbsp;</td>
	</tr>
</table>
</body>
</html>
