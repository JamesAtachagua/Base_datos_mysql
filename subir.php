<?php

	$nombre_imagen = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$tamano_imagen = $_FILES['imagen']['size'];
	$temp = $_FILES['imagen']['tmp_name'];

	echo $_FILES['imagen']['size'];


	$carpeta_destino = '/var/www/html/imagenes_bd/';

	if(move_uploaded_file($temp, 'var/www/html/imagenes_bd/'.$nombre_imagen)){

		echo "hecho";
	} else{
		echo "error"
	}

?>