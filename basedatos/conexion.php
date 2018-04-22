<?php
	$conexion=pg_connect("dbname=verbena user=postgres password=LaRanaRene")or die("Lo sentimos pero no se pudo conectar a la base de datos de verbena");

	$host = 'localhost';
  $port = 5432;
  $db = 'toris';
  $user = 'postgres';
  $pass = 'LaRanaRene';

  $cadena = "host='$host' port='$port' dbname= '$db' user='$user' password='$pass'";
  $con = pg_connect($cadena) or die ("Error de conexión. ". pg_last_error());
?>
