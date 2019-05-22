<?php

	$nombre_imagen = _FILES['imagen']['name'];
	$tipo = _FILES['imagen']['type'];
	$tamano_imagen = _FILES['imagen']['size'];
	$temp = _FILES['imagen']['tmp_name'];

	echo _FILES['imagen']['name'];


	$carpeta_destino = '/var/www/img/';

	move_uploaded_file($temp, $carpeta_destino.$nombre_imagen);

		//echo "hecho";
?>