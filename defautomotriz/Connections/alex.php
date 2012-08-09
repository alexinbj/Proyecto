<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_alex = "localhost";
$database_alex = "autos";
$username_alex = "root";
$password_alex = "@sepultura";
$alex = mysql_pconnect($hostname_alex, $username_alex, $password_alex) or trigger_error(mysql_error(),E_USER_ERROR); 
?>