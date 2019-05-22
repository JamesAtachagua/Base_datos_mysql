<?php

$nombre_imagen = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano_imagen = $_FILES['imagen']['size'];

echo $_FILES['imagen']['size'];


$carpeta_destino = '/var/www/html/imagenes_bd/';

move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

?>