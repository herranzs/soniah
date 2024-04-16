<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bbdd = "bd_videoclub";

$conexion = mysqli_connect($servidor,$usuario,$contraseña) or die ("Error de conexión");

mysqli_select_db($conexion,$bbdd);

?>