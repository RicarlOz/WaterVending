<?php

define("SERVER","localhost");
define("USER","Equipo3");
define("PASS","1234");
define("DB","clase_programacion");

function ConsultaBD($query)
{
	if(!($conexion = mysqli_connect(SERVER, USER, PASS, DB)))
	{
		//echo "Error conectando a la base de datos.<br>";
		exit();
	}
	//echo "Listo, estamos conectados.<br>";

	$resultado = mysqli_query($conexion, $query);
	mysqli_close($conexion);

	return $resultado;
}


?>