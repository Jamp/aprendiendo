<?php

$conexion = mysql_connect('127.0.0.1', 'root', ''); // localhost = 127.0.0.1

if ($conexion) {
	echo "Conectado<br>";
	mysql_select_db('prueba');
	$result = mysql_query("SELECT * FROM `prueba`");

	while ($fila = mysql_fetch_object($result)) {
		echo "ID: " , $fila->id , " Nombre: " ,
		$fila->nombre , " Informaci&oacute;n: " ,
		$fila->informacion , "<br>";
	}

	mysql_close($conexion);
	echo "Cerrado<br>";
}

?>