<?php
session_start();
?>


 <?php
	  	    
echo 'BIENVENIDO, ';
if (isset($_SESSION['k_username'])) {
	echo '<b>'.$_SESSION['k_username'].'</b>.';
	echo '<p><a href="logout.php">Logout</a></p>';
}else{
	echo '<p><a href="login.php">ACCESAR</a></p>';
}
?>
</p>
  </div>
</form>
<p>&nbsp; </p>

</p><style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	background-image: url(ford-logo.jpg);
	background-repeat: repeat;
}
-->
</style>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>




     