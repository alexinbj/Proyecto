<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Def Automotriz - P&aacute;gina principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_restaurant1.css" type="text/css" />
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0807173417_0) return;
                                    window.mm_menu_0807173417_0_1 = new Menu("Inventario&nbsp;General",111,18,"Arial, Helvetica, sans-serif",12,"#000000","#FFFFFF","#CCCCCC","#000084","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
    mm_menu_0807173417_0_1.addMenuItem("Autos&nbsp;Nuevos","location='inventario/inventario_gral_nvos.php'");
    mm_menu_0807173417_0_1.addMenuItem("Autos&nbsp;Usados","location='inventario/inventario_gral_usados.php'");
     mm_menu_0807173417_0_1.hideOnMouseOut=true;
     mm_menu_0807173417_0_1.bgColor='#555555';
     mm_menu_0807173417_0_1.menuBorder=1;
     mm_menu_0807173417_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_0807173417_0_1.menuBorderBgColor='#777777';
  window.mm_menu_0807173417_0 = new Menu("root",172,18,"Arial, Helvetica, sans-serif",12,"#000000","#FFFFFF","#CCCCCC","#000084","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_0807173417_0.addMenuItem(mm_menu_0807173417_0_1);
  mm_menu_0807173417_0.addMenuItem("Inventario&nbsp;Personalizado","location='inventario/inventario_specific.php'");
   mm_menu_0807173417_0.hideOnMouseOut=true;
   mm_menu_0807173417_0.childMenuIcon="arrows.gif";
   mm_menu_0807173417_0.bgColor='#555555';
   mm_menu_0807173417_0.menuBorder=1;
   mm_menu_0807173417_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0807173417_0.menuBorderBgColor='#777777';
window.mm_menu_0807174537_0 = new Menu("root",151,18,"Arial, Helvetica, sans-serif",12,"#000000","#FFFFFF","#CCCCCC","#000084","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_0807174537_0.addMenuItem("Reporte&nbsp;Vendedores","location='vendedores/agentes.php'");
  mm_menu_0807174537_0.addMenuItem("Alta&nbsp;Vendedores","location='vendedores/alta_v.php'");
   mm_menu_0807174537_0.hideOnMouseOut=true;
   mm_menu_0807174537_0.bgColor='#555555';
   mm_menu_0807174537_0.menuBorder=1;
   mm_menu_0807174537_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0807174537_0.menuBorderBgColor='#777777';

    window.mm_menu_0807235621_0 = new Menu("root",127,18,"Arial, Helvetica, sans-serif",12,"#000000","#FFFFFF","#CCCCCC","#000084","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_0807235621_0.addMenuItem("Autorizar&nbsp;Pedido");
   mm_menu_0807235621_0.hideOnMouseOut=true;
   mm_menu_0807235621_0.bgColor='#555555';
   mm_menu_0807235621_0.menuBorder=1;
   mm_menu_0807235621_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0807235621_0.menuBorderBgColor='#777777';

          window.mm_menu_0808012817_0 = new Menu("root",135,18,"Arial, Helvetica, sans-serif",12,"#000000","#FFFFFF","#CCCCCC","#000084","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_0808012817_0.addMenuItem("Capturar&nbsp;Pedido","location='Pedido/alta_p.php'");
  mm_menu_0808012817_0.addMenuItem("Consultar&nbsp;Pedidos","location='Pedido/cons_pedido.php'");
   mm_menu_0808012817_0.hideOnMouseOut=true;
   mm_menu_0808012817_0.bgColor='#555555';
   mm_menu_0808012817_0.menuBorder=1;
   mm_menu_0808012817_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0808012817_0.menuBorderBgColor='#777777';

mm_menu_0808012817_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body bgcolor="#0066cc">
<script language="JavaScript1.2">mmLoadMenus();</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99ccff">
    <td width="15" nowrap="nowrap" ><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
    <td height="60" colspan="3" class="logo" nowrap="nowrap"><br />
      DEF AUTOMOTRIZ, SA DE CV <span class="tagline">| SU MEJOR OPCION EN AUTOS FORD</span></td>
    <td width="40">&nbsp;</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="#003399">
    <td width="15" nowrap="nowrap">&nbsp;</td>
    <td height="36" colspan="3" id="navigation" nowrap="nowrap" class="navText"><img src="btn_inventario.JPG" name="image1" width="130" height="45" id="image1" onmouseover="MM_showMenu(window.mm_menu_0807173417_0,0,46,null,'image1')" onmouseout="MM_startTimeout();" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:;"><img src="btn_autorizar.JPG" name="image3" width="157" height="44" id="image3" onmouseover="MM_showMenu(window.mm_menu_0807235621_0,0,44,null,'image3')" onmouseout="MM_startTimeout();" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp; <a href="javascript:;"><img src="btn_pedido.JPG" name="image4" width="158" height="46" id="image4" onmouseover="MM_showMenu(window.mm_menu_0808012817_0,0,46,null,'image4')" onmouseout="MM_startTimeout();" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="btn_vendedor.JPG" name="image2" width="130" height="45" id="image2" onmouseover="MM_showMenu(window.mm_menu_0807174537_0,0,45,null,'image2')" onmouseout="MM_startTimeout();" /><a href="javascript:;"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="vendedores/agentes.php">&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;
	  
 
	  
	   <a href="logout.php">CERRAR SESION</a></td>
    <td width="40">&nbsp;</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td width="230" colspan="2" valign="top" bgcolor="#ffffcc"><img src="ford-logo.jpg" width="250" height="180" />
        <table border="0" cellspacing="0" cellpadding="0" width="230">
          <tr>
            <td width="15">&nbsp;</td>
            <td width="200" class="smallText" id="padding"><br />
              &nbsp;<br />
            </td>
            <td width="15">&nbsp;</td>
          </tr>
      </table></td>
    <td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td width="440" valign="top"><br />
      &nbsp;<br />
      <table border="0" cellspacing="0" cellpadding="0" width="440">
        <tr>
          <td class="pageHeader"><div align="center">BIENVENIDO</div></td>
        </tr>
        <tr>
          <td class="bodyText"><p><img src="mustang.jpg" width="660" height="347" /></p>
          </td>
        </tr>
      </table></td>
    <td width="40">&nbsp;</td>
    <td width="100%">&nbsp;</td>
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
  
 
  
     <td width="15">&nbsp;</td>
    <td width="215">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="440">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
