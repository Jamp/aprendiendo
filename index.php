<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba'); // localhost = 127.0.0.1

if ($conexion) {
	echo "Conectado<br>";
	$result = $conexion->query("SELECT `id`, `nombre`, `informacion FROM `prueba` WHERE nombre LIKE 'j%'");
	echo $conexion->error;
	while ($fila = $result->fetch_object() ) {
		echo "ID: " , $fila->id ,
		" Nombre: " , ConvertirPrimeraLetraEnMayusculas($fila->nombre) ,
		" Informaci&oacute;n: " , $fila->informacion , "<br>";
	}

	$conexion->close();
	echo "Cerrado<br>";
}

function ConvertirPrimeraLetraEnMayusculas($cadena) { // Buenas Prácticas CamellCase
	return ucfirst($cadena);
}

?>