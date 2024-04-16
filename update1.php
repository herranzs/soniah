<?php
require_once 'conexion.php';

$id = $_GET['id'];

$sql = "UPDATE peliculas SET stock = '1' WHERE id = '" . $id . "'";

if (mysqli_query($conexion, $sql)){
    print ("Actualizado");
}
else {
    print ("Fallido");
}

echo "<script>location.href='index.php'</script>";
?>