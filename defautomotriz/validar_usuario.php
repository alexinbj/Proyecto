<?php
session_start();
?>
<?php
mysql_connect('localhost','root','@sepultura');
mysql_select_db('autos');
$usuario = strtolower($_POST["usuario"]);
	$password = $_POST["password"];
if($usuario!= "" && $password!= "")
{
	$sql = mysql_query('SELECT password, usuario FROM usuarios WHERE usuario="'.$usuario.'"');
	if($f= mysql_fetch_array($sql)){
		if($f["password"] == $password){
			$_SESSION["k_username"] = $f['usuario'];
			echo 'HAS ENTRADO CORRECTAMENTE:  '.$_SESSION['k_username'].' <p>';
			echo '<a href="principal.php">IR A PAGINA PRINCIPAL</a></p>';
		
		}else{
			echo 'PASSWORD INCORRECTO';
			echo '<a href="index.php">REGRESAR</a></p>';
		}
	}else{
		echo 'USUARIO NO EXISTE ';
		echo '<a href="index.php">REGRESAR</a></p>';
	}
	
}

?>