<?php

require_once 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM peliculas WHERE id = '" . $id . "'";

if (mysqli_query($conexion, $sql)){
    print ("Borrado");
}
else {
    print ("Fallido");
}

echo "<script>location.href='index.php'</script>";

?>
